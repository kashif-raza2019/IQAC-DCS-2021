<?php

  session_start();

  include("../credential.php");

  $date = date_create();
  save_log($_SESSION['username'],getUserIP(),$_SERVER['REQUEST_URI'],urlencode(http_build_query($_POST, '', '&amp;')),date_format($date, 'Y-m-d H:i:s'));


  if(!isset($_SESSION['names'])){
  		header("Location: ../index.php");
  }


?>

<!-- ////////////////////////////////////////////////////////////////////// --->

<!DOCTYPE html>
<html>
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">

  <link rel="stylesheet" href="../css/theme.css">
  <link rel="stylesheet" href="../css/bootstrap.min.css">
  <script src="../js/jquery.min.js"></script>
  <script src="../js/bootstrap.min.js"></script>

    <style>

    div{
      font-size:20px;
    }

    input[type=text],input[type=password], select,textarea {
            background-color:#ffffff;
            opacity:.92;
            width: 100%;
            padding: 12px 20px;
            margin: 8px 0;
            display: inline-block;
            border: 1px solid #ccc;
            border-radius: 4px;box-sizing: border-box;
        }


        input[type=button],input[type=submit],input[type=reset] {
            width: 220px;
            background-color: #424242;
            color: white;
            padding: 14px 20px;
            margin: 8px 0;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            font-weight: 500;
            font-size: 14px;
        }

        *{
            margin: 0;
            padding: 0;
        }

        .container{
            height: 100%;
            width: 100%;
        }

        #left, #middle, #right, .x {
            display: inline-block;
            *display: inline; zoom: 1;
            vertical-align: top;
            font-size: 12px;
            padding: 0px;
        }

        #left{
            width: 22%;
        }

        #middle{
            width: 67%;
        }

        #right{
            width: 10%;
        }

        </style>
<link rel="icon" href="./logo.png">
<title>Import Handler | Information Gathering System</title>
</head>
<body class="BACK">

    <div class="container DAVV" style="width:100%; padding-bottom:20px; padding-top:20px;">
        <div class="col-sm-3"></div>

        <div class="col-sm-8" style="margin-left:-50px;">
            <div class="container" style="width:100%;">
                <div class="col-sm-2" style="margin-left:5px;">
                    <img src="../logo.png" alt="logo" style="width:120px; height:120px;">
                </div>

                <div class="col-sm-9" style="margin-left:-20px;">
                    <div style="font-size:30px; margin-top:20px; margin-left:30px; color:#FFF"><b>Devi Ahilya Vishwavidyalaya, Indore</b></div>
                    <div style="font-size:20px; margin-top:10px; margin-left:30px; color:#FFF;"><b>Data Capturing System NAAC A & A 2019</b></div>
                </div>
            </div>

        </div>

        <div class="col-sm-1"></div>
    </div>

    <div id="myHeader" class="col-sm-12 Username" style="z-index:10; width:100%;">
        <center><div id="myHeader1" class="col-sm-1 Username" style="padding:10px; style='visibility:hidden;'"><a href="progress.php"><h4 style=" color:#fff; font-size:15px;" ><?php echo "BACK";?></h4></a></div></center>
        <center><div id="myHeader2" class="col-sm-10 Username" style="padding:10px;"><h4 style=" color:#fff; font-size:18px;"><?php echo strtoupper($_SESSION['names'])." | IMPORT HANDLER ";?></h4></div></center>
        <center><div id="myHeader3" class="col-sm-1 Username" style="padding:10px; "><a href="../logout.php"><h4 style=" color:#fff; font-size:15px; "><?php echo "LOGOUT";?></h4></a></div></center>
    </div>

    <div>
        <a style="visibility:hidden;">d</a>
    </div>

    <div style="margin-left:300px;">
<!-- ////////////////////////////////////////////////////////////////////// --->

<?php

  //print_r($_POST);

  $file = $_FILES['csv_file']['tmp_name'];
  $handle = fopen($file, "r");

  try {

  if($file==NULL){
    echo "You have not selected any file<br>";
    throw new Exception("Error Processing Request", 1);

  }else{
    //echo "<br>";
    $tt = date('d-m-Y_H-i-s');
    $dept = $_SESSION['username'];

    $sourcePath = $_FILES['csv_file']['tmp_name'];       // Storing source path of the file in a variable
    $targetPath = "uploaded_csv/"."(".$_POST['dept'].")_(".$_POST['section'].")_(".$tt.")___".basename($_FILES['csv_file']['name']); // Target path where file is to be stored

    echo "Dept : ".$_POST['dept']."<br>";
    echo "Section : ".$_POST['section']."<br>";
    echo "file_name : ".basename($_FILES['csv_file']['name'])."<br><br>";

    move_uploaded_file($sourcePath,$targetPath);

    save_log($_SESSION['username'],getUserIP(),$_SERVER['REQUEST_URI'],"Uploaded FILE SAVED AS : ".$targetPath,date_format($date, 'Y-m-d H:i:s'));

  }

    $query = "DELETE FROM ".$_POST['section']." WHERE username LIKE '".$_POST['dept']."'";
    $connection = mysqli_connect($servername, $username, $password, $dbname);
    $res = mysqli_query($connection,$query);


    $query = "Describe ".$_POST['section'];
    $connection = mysqli_connect($servername, $username, $password, $dbname);
    $res = mysqli_query($connection,$query);

    $cc=0;
    while ($xxx = $res->fetch_assoc()) {
      $cc++;
    }
//    echo $cc;
//  echo "<br>there must be ".$cc." columns in your file<br>";

    $line = 0;

    $id_times = array();

    while(($filesop = fgetcsv($handle, 1000, ",")) !== false)
    {

      $line++;

      $scc = count($filesop);

      if($scc!=$cc){
        echo "Mismatch column count in row ".$line.", number of column in your uploaded file should be ".$cc." instead found ".$scc."<br>";
        throw new Exception("Error Processing Request", 1);
      }

      $d = "(";

      for($i=0; $i<$scc; $i++) {

        if(strpos($filesop[$i], '&')){
          echo "your data contains character '&' at row no. ".$line." please rewrite it. the word is [ ".$filesop[$i]." ]<br>";
          throw new Exception("Error Processing Request", 1);
        }

        if(strpos($filesop[$i], '"')){
          echo "your data contains character { \" } at row no. ".$line." please rewrite it. the word is [ ".$filesop[$i]." ]<br>";
          throw new Exception("Error Processing Request", 1);
        }

        if(strpos($filesop[$i], "'")){
          echo "your data contains character { ' } at row no. ".$line." please rewrite it. the word is [ ".$filesop[$i]." ]<br>";
          throw new Exception("Error Processing Request", 1);
        }


      $d = $d."'".$filesop[$i]."'";
        if($i!=($scc-1)){
          $d = $d.",";
        }else{

          if($_POST['section']=='t3_4_6b' || $_POST['section']=='t3_4_6c'){
            //echo "skipping";
            continue;
          }


          foreach ($id_times as $idx) {
            if($idx == $filesop[$i]){


              if($_POST['section']!='course'){
                echo "your data contains duplicate id_time at row no. ".$line." please rewrite it. the duplicate id_time is [ ".$filesop[$i]." ]<br>";
                throw new Exception("Error Processing Request", 1);
              }
            }
          }

          array_push($id_times,$filesop[$i]);
        }
      }

      $d = $d.");";

      $query = "Insert into ".$_POST['section']." VALUES ".$d;
      $connection = mysqli_connect($servername, $username, $password, $dbname);
      $res = mysqli_query($connection,$query);// or die(mysqli_error($connection));

      if($res){
        //echo "success<br>";
      }else{
        echo "There was some problem with row no. ".$line."<br>";
        echo mysqli_error($connection)."<br>";
        throw new Exception("Error Processing Request", 1);
      }
    }


  } catch (Exception $e) {

    if($line>=1){
      echo "".($line-1)." rows successfully Imported , Remaining all Failed.<br>";
    }
      echo "<a style='color:red;' href='import.php'>importing data failed, Please try again</a>";
      $err = 1;

      save_log($_SESSION['username'],getUserIP(),$_SERVER['REQUEST_URI'],"DATA IMPORT FAILED",date_format($date, 'Y-m-d H:i:s'));

  }

  if($err!=1){
    echo "<a style='color:green;'>DATA SUCCESSFULLY IMPORTED</a><br>";
    echo "<a href='progress.php'>See Progress</a><br>";
    echo "<a href='import.php'>Import new</a><br>";

    save_log($_SESSION['username'],getUserIP(),$_SERVER['REQUEST_URI'],"DATA IMPORT SUCCESSFUL",date_format($date, 'Y-m-d H:i:s'));
  }

?>

  </div>

</body>
</html>

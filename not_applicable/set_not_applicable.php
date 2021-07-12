<?php session_start();
$_SESSION['msg']='';
include("../credential.php");

$date = date_create();
save_log($_SESSION['username'],getUserIP(),$_SERVER['REQUEST_URI'],urlencode(http_build_query($_POST, '', '&amp;')),date_format($date, 'Y-m-d H:i:s'));

if(strtolower($_SESSION['username'])=="iqac"){
  echo "<script> alert('You are superuser, you should login through Department to set their Not Applicable Fields'); </script>";
  echo "<script> window.history.back(); </script>";
}

?>

<!DOCTYPE html>
<html>
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">

  <link rel="stylesheet" href="../css/theme.css">
  <link rel="stylesheet" href="../css/bootstrap.min.css">
  <script src="../js/jquery.min.js"></script>
  <script src="../js/bootstrap.min.js"></script>

    <style>
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

        .sticky {
            position: fixed;
            top: 0;
            width: 100%;
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
<title>Information Gathering System</title>
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
        <center><div id="myHeader1" class="col-sm-1 Username" style="padding:10px; style='visibility:hidden;'"><a href="../logout.php"><h4 style=" color:#fff; font-size:15px;" ><?php echo "BACK";?></h4></a></div></center>
        <center><div id="myHeader2" class="col-sm-10 Username" style="padding:10px;"><h4 style=" color:#fff; font-size:18px;"><?php echo strtoupper($_SESSION['name'])." | Set Not Applicable feilds";?></h4></div></center>
        <center><div id="myHeader3" class="col-sm-1 Username" style="padding:10px; "><a href="../logout.php"><h4 style=" color:#fff; font-size:15px; "><?php echo "LOGOUT";?></h4></a></div></center>
    </div>

    <script>
        // When the user scrolls the page, execute myFunction
        window.onscroll = function() {myFunction()};

        // Get the header
        var header = document.getElementById("myHeader");

        // Get the offset position of the navbar
        var sticky = header.offsetTop;

        // Add the sticky class to the header when you reach its scroll position. Remove "sticky" when you leave the scroll position
        function myFunction() {
            if (window.pageYOffset >= sticky) {
                header.classList.add("sticky");
                document.getElementById("myHeader").style.backgroundColor = "#424242";
                document.getElementById("myHeader1").style.backgroundColor = "#424242";
                document.getElementById("myHeader2").style.backgroundColor = "#424242";
                document.getElementById("myHeader3").style.backgroundColor = "#424242";
            } else {
                header.classList.remove("sticky");
                document.getElementById("myHeader").style.backgroundColor = "#616161";
                document.getElementById("myHeader1").style.backgroundColor = "#616161";
                document.getElementById("myHeader2").style.backgroundColor = "#616161";
                document.getElementById("myHeader3").style.backgroundColor = "#616161";
            }
        }

    </script>


    <div>
        <a style="visibility:hidden;">d</a>
    </div>

<?php

//  include("links.php");

?>






		<?php

				$query = "SHOW TABLES";
				$connection = mysqli_connect($servername, $username, $password, $dbname);
				$res = mysqli_query($connection,$query);

		?>


      <script>
        var x=0;
      </script>

<center>
<b style="font-size:20px;">
  Select fields that are not applicable for your Department and Proceed.
</b>
<br><br>
</center>

      <div style=" font-size:20px;">

<form action="set_not_applicable_handler.php" method="POST">
<!--
  <div style="margin-left:400px; font-size:20px;">
-->


<!--
        <select id="tbl_name" style="width:300px;" >
          <option value="">Select</option>

-->
          <?php

          $cc = 0;

          while($row = $res->fetch_assoc()){

            $cc++;

            if($cc<12) continue;

            //echo "<br><br><br><br><br><br><br><br>";
            //print_r($row);
  					//$tbl = $row['Tables_in_NAC'];
            $tbl = $row['Tables_in_criteria_iqac_nac_common'];

            //$eng_query = "alter TABLE ".$tbl." ENGINE = InnoDB;";
            //$res_eng_query = mysqli_query($connection,$eng_query);

          ?>
<!--
          <option value="<?php //echo $tbl; ?>"><?php //echo $tbl; ?></option>
-->

<?php

$qqq111 = "select * FROM not_applicable WHERE Username LIKE '".$_SESSION['username']."' AND section  LIKE '".$tbl."'";
//echo $qqq."<br>";
$res111  = mysqli_query($connection,$qqq111) or die(mysqli_error($connection));;// or throw new Exception("Error Processing Request");

$ccc = $res111->fetch_assoc();

$cxxx = count($ccc);

?>
<div class="col-sm-2">
          <input <?php if($cxxx!=0){ echo "checked"; } ?> style="width:20px; height:20px;" type="checkbox" value="<?php echo $tbl; ?>" name="<?php echo "na_list"; ?>[]"> <?php echo $tbl."<br>"; ?>
</div>


          <?php
          }
          ?>

<!--
        </select>
-->
        <script>

        </script>

<br><br>
<center>
          <input type="submit" style="width:400px;" value="SET SELECTED AS NOT APPLICABLE">
</center>


</form>

<script>

  function export_csv(){
    alert("exporting");
    var x = $("#tbl_name").val();
    window.open('export.php?table='+x, '_blank');
  }

</script>

<?php
  echo "<script> alert('".$_SESSION['username']."'); </script>";
?>

</body>
</html>

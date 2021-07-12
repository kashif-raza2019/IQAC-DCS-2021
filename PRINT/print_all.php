<?php session_start();
$_SESSION['msg']='';

include("../credential.php");

$date = date_create();
save_log($_SESSION['username'],getUserIP(),$_SERVER['REQUEST_URI'],urlencode(http_build_query($_POST, '', '&amp;')),date_format($date, 'Y-m-d H:i:s'));

if(!isset($_SESSION['names'])){
		header("Location: ../index.php");   }

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

		td{
			padding:3px;
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
<title>VALIDATOR | Information Gathering System</title>
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
        <center><div id="myHeader2" class="col-sm-10 Username" style="padding:10px;"><h4 style=" color:#fff; font-size:18px;"><?php echo strtoupper($_SESSION['name'])." | PRINTING ALL MY DATA ";?></h4></div></center>
        <center><div id="myHeader3" class="col-sm-1 Username" style="padding:10px; "><a href="../logout.php"><h4 style=" color:#fff; font-size:15px; "><?php echo "LOGOUT";?></h4></a></div></center>
    </div>

    <div>
        <a style="visibility:hidden;">d</a>
    </div>

        <div id="right"></div>

<?php

//$tabs = ['t1_1_2','t1_1_3','t1_2_1'];

echo "<center><b style='font-size:24px;'>PRINT ALL MY DATA</b></center>";

$dir = "../profile/docs";
$files = scandir($dir);

$t_add_dir = "../additional_data/docs_add/";
$t_add_files = scandir($t_add_dir);

//print_r($t_add_files);

/*
foreach ($files as $key) {
	echo "<Br>".$key."<br>";
}
*/
$connection = mysqli_connect($servername, $username, $password, $dbname);

$query = "show tables";
$res  = mysqli_query($connection,$query) or die(mysqli_error($connection));



//foreach ($res as $tabs) {
//	$t = $tabs['Tables_in_criteria_iqac_nac_common'];

	$t = $_GET['tab_id'];

	if($t[0]!='t'){
		continue;
	}

	$i_query = "select DISTINCT * FROM ".$t." WHERE 1";
	echo "<br><Br><b style=''>SECTION : ".str_replace("_",".",substr($t,1))."</b>";
	$i_res  = mysqli_query($connection,$i_query) or die(mysqli_error($connection));

	//echo "<br><Br><b>".$t."</b><br><BR>";

	echo "<table border='2' style=''>";

	foreach ($i_res as $ds) {
		//echo "<br>";
		echo "<tr>";
		foreach ($ds as $dds) {
			echo "<td>".urldecode($dds)."</td>";
		}
		echo "</tr>";
	}

	echo "</table>";

//}




/*
foreach ($tabs as $t) {
  echo "<script></script>";
}
*/
?>


<script>

    function validate(link){

      var xhttp,res;
      xhttp = new XMLHttpRequest();
      xhttp.onreadystatechange = function(){

       if (this.readyState == 4 && this.status == 200) {
         return true;
      }else{
        return false;
      }
    };
           xhttp.open("GET", link, true);
           xhttp.setRequestHeader('Content-type', 'application/x-www-form-urlencoded');
           xhttp.send();

      }
</script>

</body>
</html>

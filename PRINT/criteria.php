<?php session_start();
$_SESSION['msg']='';

include("../credential.php");

$date = date_create();
save_log($_SESSION['username'],getUserIP(),$_SERVER['REQUEST_URI'],urlencode(http_build_query($_POST, '', '&amp;')),date_format($date, 'Y-m-d H:i:s'));

if(!isset($_SESSION['name'])){
		header("Location: ../index.php");   }
 $col = '';

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
			padding:4px;
			border-radius: 5px;
		}
		th{
			padding:6px;
			border-radius: 5px;
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
<title>CRITERIA-<?php echo $_GET['criteria'] ?> | <?php echo $_SESSION['name'] ?> | Information Gathering System | <?php echo date_format($date, 'Y-m-d H:i:s');?></title>
</head>
<body class="BACK" style="padding:10px;">

<!--
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
	-->

<!--
    <div id="myHeader" class="col-sm-12 Username" style="z-index:10; width:100%;">
        <center><div id="myHeader1" class="col-sm-1 Username" style="padding:10px; style='visibility:hidden;'"><a href="progress.php"><h4 style=" color:#fff; font-size:15px;" ><?php echo "BACK";?></h4></a></div></center>
        <center><div id="myHeader2" class="col-sm-10 Username" style="padding:10px;"><h4 style=" color:#fff; font-size:18px;"><?php echo strtoupper($_SESSION['name'])." | PRINTING ALL MY DATA ";?></h4></div></center>
        <center><div id="myHeader3" class="col-sm-1 Username" style="padding:10px; "><a href="../logout.php"><h4 style=" color:#fff; font-size:15px; "><?php echo "LOGOUT";?></h4></a></div></center>
    </div>
-->
    <div>
        <a style="visibility:hidden;">d</a>
    </div>

        <div id="right"></div>

<?php

//$tabs = ['t1_1_2','t1_1_3','t1_2_1'];

echo "<center><b style='font-size:24px;'> ".$_SESSION['name']." | CRITERIA - ".$_GET['criteria']."</b></center>";

?>

	<b style="float:right;"><?php echo date_format($date, 'Y-m-d H:i:s');?></b>

	<button class="btn-primary" style="padding:7px; border-radius:6px; margin-right:100px;" onclick="printed(); window.print();">PRINT THIS PAGE</button>

<?php

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



foreach ($res as $tabs) {
	$t = $tabs['Tables_in_t3'];

	if($t[0]!='t' || $t[1]!=$_GET['criteria']){
		continue;
	}

	$i_query = "select DISTINCT * FROM ".$t." WHERE Username LIKE '".$_SESSION['username']."'";
	$i_res  = mysqli_query($connection,$i_query) or die(mysqli_error($connection));

	$heads = [];

	$turn = 1;

	echo "<table class='".$t."' border='2' style=''>";

	echo "<th>S. NO.</th>";

		foreach ($i_res as $ds) {
			foreach ($ds as $key => $dds) {
				if($key=='Username' || $key=='id_time' || strtolower($key)=='file_name'){
					$col++;
					continue;
				}
				echo "<th>".strtoupper($key)."</th>";
			}
			if($turn==1) break;
		}


	$i_query = "select DISTINCT * FROM ".$t." WHERE Username LIKE '".$_SESSION['username']."'";
	echo "<br><Br><b style='font-size:22px;'>SECTION : ".str_replace("_",".",substr($t,1))."</b>";
	$i_res  = mysqli_query($connection,$i_query) or die(mysqli_error($connection));

	if($t=="t2_7_1" || $t=="t9_2_1" || $t=="t9_2_2" || $t=="t9_2_3"){
		?>
			&nbsp;&nbsp;&nbsp;&nbsp; <button class="btn-warning" style="padding:4px; border-radius:5px;" onClick='$(".<?php echo $t; ?>").toggle("slow");'>	Show - Hide</button>
			<script>$(".<?php echo $t; ?>").toggle();</script>
		<?php
	}else{
	}


	//echo "<br><Br><b>".$t."</b><br><BR>";

	$line = 1;
	foreach ($i_res as $ds) {
		//echo "<br>";
		echo "<tr>";
		echo "<td>".$line."</td>";

		$line++;
		$col = 1;

		foreach ($ds as $key => $dds) {

			if($key=='Username' || $key=='id_time' || strtolower($key)=='file_name'){
				$col++;
				continue;
			}

			echo "<td>".urldecode($dds)."</td>";
		}
		echo "</tr>";
	}

	echo "</table>";

}

echo "<br><br><br><br>";

?>

<button class="btn-primary" style="padding:7px; border-radius:6px; margin-right:100px;" onclick="printed(); window.print();">PRINT THIS PAGE</button>

<?php

echo "<br><br><br><br>";


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

		function printed(){

			var xhttp,res;
			xhttp = new XMLHttpRequest();
			xhttp.onreadystatechange = function(){
					if (this.readyState == 4 && this.status == 200) {
						console.log("success");
					}
			};
			xhttp.open("GET", "save_log.php?criteria=<?php echo $_GET['criteria']; ?>", true);
			xhttp.setRequestHeader('Content-type', 'application/x-www-form-urlencoded');
			xhttp.send();

		}

</script>

</body>
</html>

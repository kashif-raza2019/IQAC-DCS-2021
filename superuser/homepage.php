<?php session_start();
$_SESSION['msg']='';

include("credential.php");

if(!isset($_SESSION['username'])){
		header("Location: index.php");   }
?>
<!DOCTYPE html>
<html>
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="./css/theme.css">
  <link rel="stylesheet" href="./css/bootstrap.min.css">
  <script src="./js/jquery.min.js"></script>
  <script src="./js/bootstrap.min.js"></script>

    <style>

		.blink{
				color: rgb (0, 137, 226);
				animation: blink 1s infinite;
			 }

			 @keyframes blink{
				0%{opacity: 1;}
				75%{opacity: 1;}
				76%{ opacity: 0;}
				100%{opacity: 0;}
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

        input[type=button],input[type=submit],input[type=reset]{
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

        #left, #middle, #right,#left1, #middle1, #right1, .x {
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


        #left1{
            width: 25%;
        }

        #middle1{
            width: 49%;
        }

        #right1{
            width: 25%;
        }


        </style>
<link rel="icon" href="logo.png">
<title>Information Gathering System</title>
</head>
<body style="font-family:ubuntu;" class="BACK">

    <div class="container DAVV" style="width:100%; padding-bottom:20px; padding-top:20px;">
        <div class="col-sm-3"></div>

        <div class="col-sm-8" style="margin-left:-50px;">
            <div class="container" style="width:100%;">
                <div class="col-sm-2" style="margin-left:5px;">
                    <img src="logo.png" alt="logo" style="width:120px; height:120px;">
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
        <center><div id="myHeader1" class="col-sm-1 Username" style="padding:10px; "><a href="./index.php"><h4 style=" color:#fff; font-size:15px;" ><?php echo "BACK";?></h4></a></div></center>
        <center><div id="myHeader2" class="col-sm-10 Username" style="padding:10px;"><h4 style=" color:#fff; font-size:18px;"><?php echo strtoupper($_SESSION['name']);?></h4></div></center>
        <center><div id="myHeader3" class="col-sm-1 Username" style="padding:10px; "><a href="./logout.php"><h4 style=" color:#fff; font-size:15px; "><?php echo "LOGOUT";?></h4></a></div></center>
    </div>

    <div>
        <a style="visibility:hidden;">d</a>
				<center>
					<b>DATA CAPTURING SYSTEM is best viewed through Google Chrome web browser.</b>
				</center>
    </div>



<?php

$connection = mysqli_connect($servername, $username, $password, $dbname);
$prog_na = "select * FROM help_desk WHERE msg_to LIKE '".$_SESSION['username']."' AND msg_from LIKE 'iqac' ";
$res_na  = mysqli_query($connection,$prog_na) or die(mysqli_error($connection));

$unseen = 0;
$seen = 0;
$replied = 0;

while ($row_na = $res_na->fetch_assoc()) {
	$na = $row_na['seen'];
	//$rep = $[];

	if($na==1){
		$seen++;
	}else{
		$unseen++;
	}
}



$urg = "";
//				echo $prog_na;

//echo $prog_na;

if($unseen>0){
	$urg = "<d style='font-weight:bold; color:red;'>unseen*</d>";

	echo "<br><br><center><a href='helpdesk/msg.php' style='color:green; font-size:18px; font-weight:bold;'>You have new <b style='color:red;'> unseen </b> message from Help-Desk.</a></center>";

}else if($seen>0){
	$urg = "<d style='font-weight:bold; color:green;'>seen</d>";
}

//echo "<a style='font-size:15px;' href='../helpdesk/chat_reply_to.php?to=".$row['username']."'> "." chat "."$urg"." </a>";


?>


    <center>

        <br><br>

        <input style="margin-right: 10px;" type="button" onclick="location.href='criteria1/c1.php';" value="CRITERIA 1"/>
        <input style="margin-right: 10px;" type="button" onclick="location.href='criteria2/c2.php';" value="CRITERIA 2"/>
        <input style="margin-right:10px;"  type="button" onclick="location.href='criteria3/c3.php';" value="CRITERIA 3"/>
        <input style="margin-right:10px;"  type="button" onclick="location.href='criteria4/c4.php';" value="CRITERIA 4"/>
        <input style="margin-right:10px;" disabled  type="button" onclick="location.href='criteria5/c5.php';" value="CRITERIA 5"/>

        <input style="margin-right:10px;" disabled  type="button" onclick="location.href='criteria6/c6.php';" value="CRITERIA 6"/>
        <input style="margin-right:10px;" disabled  type="button" onclick="location.href='criteria7/c7.php';" value="CRITERIA 7"/>
		<input style="margin-right:10px;" disabled  type="button" onclick="location.href='Evaluation_report/evaluation_report.php';" value="EVALUATIVE REPORT"/>

        <!--

        <input style="margin-right: 10px;" type="button" onclick="location.href='logout.php';" value="Logout"/>

        -->

    </center>

		<hr style="background:black;">

		<center>
			<input style="margin-right: 10px;" type="button" onclick="location.href='Courses/add.php';" value="ADD COURSES"/>

			<input style="margin-right: 10px;" type="button" onclick="location.href='Courses/view.php';" value="VIEW COURSES"/>
		</center>

</body>
</html>

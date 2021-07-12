<?php session_start();
$_SESSION['msg']='';

include("credential.php");

$date = date_create();
save_log($_SESSION['username'],getUserIP(),$_SERVER['REQUEST_URI'],urlencode(http_build_query($_POST, '', '&amp;')),date_format($date, 'Y-m-d H:i:s'));


if(!isset($_SESSION['username'])){
		header("Location: index.php");   }
?>
<!DOCTYPE html>
<html>
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="./css/theme.css">
  <link rel="stylesheet" href="./css/bootstrap.min.css">
	<link rel="stylesheet" href="./css/w3_l.css">


  <script src="./js/jquery.min.js"></script>
  <script src="./js/bootstrap.min.js"></script>

    <style>

		.blink{
				color: rgb (0, 137, 226);
				animation: blink 1s infinite;
			 }

			 .sticky {
					 position: fixed;
					 top: 0;
					 width: 100%;
			 }


			 @keyframes blink{
				0%{opacity: 1;}
				75%{opacity: 0.75;}
				76%{ opacity: 0.5;}
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
<title>Homepage - Information Gathering System</title>
</head>
<body style="" class="BACK">

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
        <center><div id="myHeader3" class="col-sm-1 Username" style="padding:10px; ">
					<style>

					  .nn:hover,.nnn,.nnn:hover{
					    color: white;
					  }

					</style>

					          <div  style="margin-top:10px; color:black; margin-left:-60px; background-color:transparent; text-decoration:none; color:white;" class="w3-dropdown-hover nnn">
					    <a style="text-decoration:none; color:white; cursor:pointer;"  class="nn">PROFILE</a>
					    <div style="text-decoration:none; color:white;" class="w3-dropdown-content w3-bar-block w3-border">
					      <a href="./Courses/view.php" class="w3-bar-item w3-button">Courses</a>
					      <a href="#" onClick="window.open('./profile/link_generator/generate.php','Link Generator','resizable,height=600,width=1100'); return false;" class="w3-bar-item w3-button">URL Generator</a>
					      <a href="#" onClick="window.open('./save_my_data/get_data.php','Save My Data','resizable,height=600,width=1100'); return false;" class="w3-bar-item w3-button">Save My Data</a>
					      <a href="./helpdesk/msg.php" class="w3-bar-item w3-button">Help-Desk</a>
					      <a href="./logout.php" class="w3-bar-item w3-button">Logout</a>
					    </div>
					  </div>
				</div></center>
    </div>

    <div>
        <a style="visibility:hidden;">d</a>

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
		                $("#header2.h4").html('google');
		            } else {
		                header.classList.remove("sticky");
		                document.getElementById("myHeader").style.backgroundColor = "#616161";
		                document.getElementById("myHeader1").style.backgroundColor = "#616161";
		                document.getElementById("myHeader2").style.backgroundColor = "#616161";
		                document.getElementById("myHeader3").style.backgroundColor = "#616161";
		            }
		        }

		    </script>



				<center>
					DATA CAPTURING SYSTEM is best viewed through Google Chrome web browser.
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

//	echo "<script> alert('You have new unseen message from Help-Desk check them out. Visit => [ Profile --> Help-Desk ]'); </script>";
	echo "<br><center><a href='helpdesk/msg.php' style='color:green; font-size:18px; font-weight:bold;'>You have new <b class='blink' style='color:red;'> unseen </b> message from Help-Desk. <b style='color:brown;'> click here </b> </a></center>";
	$ppp = 1;
}else if($seen>0){
	$urg = "<d style='font-weight:bold; color:green;'>seen</d>";

//	echo "<br><br><center><a href='helpdesk/msg.php' style='color:green; font-size:18px; font-weight:bold;'>You always have support of Help-Desk. You can ask your queries here.</a></center>";
}

//echo "<a style='font-size:15px;' href='../helpdesk/chat_reply_to.php?to=".$row['username']."'> "." chat "."$urg"." </a>";

if($ppp!=1){
	echo "<br><center><a href='helpdesk/msg.php' style='color:green; font-size:18px; font-weight:bold;'>You always have support of Help-Desk. You can ask your queries here.</a></center>";
}

?>

    <center>

	<div>

		<Br>

			<hr style="border-color:black; border:2px solid #474747;" size="100">

		<b style="z-index:5; margin-top:-45px; padding:10px; padding-left:30px; padding-right:30px; border-radius:17px; FLOAT:LEFT; margin-left:80px; font-size:17px; border:0px solid gray; background-color:#424242;  color:#FFF;">My Progress</b>

			<div id="my_progress">

<!--
				<br><br><br>

				<center style="font-weight:bold; font-size:20px;">
					MY PROGRESS
				</center>

				<br>
-->
			</div>

		</div>

		<br><br><Br>

			<hr style="border-color:black; border:2px solid #474747;" size="100">

			<b style="z-index:5; margin-top:-45px; padding:10px; padding-left:30px; padding-right:30px; border-radius:17px; FLOAT:LEFT; margin-left:80px; font-size:17px; border:0px solid gray; background-color:#424242;  color:#FFF;">Criteria Section</b>

		<br><BR>

        <input style="margin-right: 10px;" type="button" onclick="location.href='criteria1/c1.php';" value="CRITERIA 1"/>
        <input style="margin-right: 10px;" type="button" onclick="location.href='criteria2/c2.php';" value="CRITERIA 2"/>
        <input style="margin-right:10px;"  type="button" onclick="location.href='criteria3/c3.php';" value="CRITERIA 3"/>
        <input style="margin-right:10px;"  type="button" onclick="location.href='criteria4/c4.php';" value="CRITERIA 4"/>
        <input style="margin-right:10px;"  type="button" onclick="location.href='criteria5/c5.php';" value="CRITERIA 5"/>

        <input style="margin-right:10px;" type="button" onclick="location.href='criteria6/c6.php';" value="CRITERIA 6"/>
        <input style="margin-right:10px;" type="button" onclick="location.href='criteria7/c7.php';" value="CRITERIA 7"/>
				<input style="margin-right:10px;"  type="button" onclick="location.href='Evaluation_report/sub_department.php';" value="EVALUATIVE REPORT"/>
				<input style="margin-right:10px;"  type="button" onclick="location.href='criteria9/c9.php';" value="EXTENDED PROFILE"/>

        <!--

        <input style="margin-right: 10px;" type="button" onclick="location.href='logout.php';" value="Logout"/>

        -->

    </center>

		<br><br><Br>

			<hr style="border-color:black; border:2px solid #474747;" size="100">

			<b style="z-index:5; margin-top:-45px; padding:10px; padding-left:30px; padding-right:30px; border-radius:17px; FLOAT:LEFT; margin-left:80px; font-size:17px; border:0px solid gray; background-color:#424242;  color:#FFF;">Profile Section</b>

		<br><BR>


		<center>
			<input style="margin-right: 10px;" type="button" onclick="location.href='accept_notice.php';" value="NOTICE"/>
			<input style="margin-right: 10px;" type="button" onclick="location.href='Courses/add.php';" value="ADD COURSES"/>
			<input style="margin-right: 10px;" type="button" onclick="location.href='Courses/view.php';" value="VIEW COURSES"/>
			<input style="margin-right: 10px;" type="button" onclick="location.href='helpdesk/msg.php';" value="HELP DESK"/>
			<input style="margin-right: 10px;" type="button" onclick="location.href='save_my_data/get_data.php';" value="SAVE MY DATA"/>

		</center>

		<br><br>

</body>

	<script>

	$(document).ready(function(){

		var xhttp,res;
					xhttp = new XMLHttpRequest();
					xhttp.onreadystatechange = function(){

					 if (this.readyState == 4 && this.status == 200) {

						 $("#my_progress").append(this.responseText);

					 }
				};
							 xhttp.open("GET", "superuser/progress_restricted.php?dept=<?php echo $_SESSION['username']; ?>", true);
							 xhttp.setRequestHeader('Content-type', 'application/x-www-form-urlencoded');
						   xhttp.send();

	});

	</script>

</html>

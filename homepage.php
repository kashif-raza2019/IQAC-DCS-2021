	<?php session_start();
	$_SESSION['msg']='';

	$toggleTitleMsg = "";
	include("credential.php");
	$user = $_SESSION['username'];
	$date = date_create();
	save_log($_SESSION['username'],getUserIP(),$_SERVER['REQUEST_URI'],urlencode(http_build_query($_POST, '', '&amp;')),date_format($date, 'Y-m-d H:i:s'));
    
	if($_SESSION['name'] == 'SUPERUSER'){
		 header("Location: superuser/index.php");
	}

	if(!isset($_SESSION['username'])){
			header("Location: index.php");   }
	?>
	<!DOCTYPE html>
	<html>
	<head>
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
		<!-- Bootstarp 4 Integration -->
		<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
		<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
		<script src="https://code.jquery.com/jquery-1.12.4.js"></script>
		<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns" crossorigin="anonymous"></script>
		<link rel="stylesheet" href="./css/w3_l.css">
		<style>
			html{
				scroll-behavior: smooth;
			}
			body{
				background-color: #fff!important;
				padding: 0px;
				margin: 0px;
			}
			#topBtn {
				display: none;
				position: fixed;
				bottom: 20px;
				left: 50px;
				z-index: 99;
				height: 39px;
				width: 39px;
				font-size: 15px;
				border: none;
				outline: none;
				background-color: #0E3778;
				color: white;
				cursor: pointer;
				padding: 3px;
				border-radius: 50%;
			}
			footer{
          width: 100%;
          margin: auto;
          background-color: #fff;
          height: 20px;
          text-align: center;
          font-size: 15px;
          font-family: 'verdana', 'sans serif';
          color: #A5A5A5;
        }
		#header{
			width: 100%;
			background-color: #0E3778;
			padding-bottom: 20px;
			height: 160px;
			color: #fff;
			font-size: 28px;
			font-weight: bold;
			}
			#topLink{
			width: 100%;
			background-color: #0E3778;
			padding-bottom: 5px;
			height: 40px;
			color: #fff;
			font-size: 18px;
			font-weight: bold;
			padding-left: 0px;
			position: sticky;
			border-bottom: 2px #fff solid;
			top: 0px;
			z-index: 55;
			}
			#topLink a{
				text-decoration: none;
				color: #fff;
				margin-left: 35px;
			}
			a:hover{
				opacity: 1.0;
				background-color: transparent!important;
			}
			.DAVV{
				background-color:#0E3778 !important;
			}

			.Username{
				background-color:#0E3778;
			}

			.BACK{
				background-color:#0E3778;
			}

			.SAVE{
				background-color:#f0ec01;
				color: white;
			}
			#topBtn {
				display: none;
				position: fixed;
				bottom: 20px;
				left: 50px;
				z-index: 99;
				height: 39px;
				width: 39px;
				font-size: 15px;
				border: none;
				outline: none;
				background-color: #0E3778;
				color: white;
				cursor: pointer;
				padding: 3px;
				border-radius: 50%;
            }

			.blink{
					color: rgb (0, 137, 226);
					animation-delay: 1.5s;
					animation: blink 5s infinite;
				}

				@keyframes blink{
					0%{opacity: 1;}
					75%{opacity: 0.75;}
					76%{ opacity: 0.5;}
					100%{opacity: 0;}
				}
				.dropbtn {
				background-color: inherit;
				color: #fff;
				font-weight: bold;
				margin-right: 30px;
				padding-bottom: 0px;
				font-size: 18px;
				border: none;
				cursor: pointer;
			}

			.dropdown {
			position: relative;
			display: inline-block;
			}

			.dropdown-content {
			display: none;
			position: absolute;
			right: 9px;
			color: black!important;
			background-color: #f9f9f9;
			min-width: 160px;
			box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
			z-index: 1;
			}

			.dropdown-content a {
			color: #6BCEED!important;
            font-weight: normal!important;
			font-size: 16px!important;
			padding: 5px 2px!important;
			text-decoration: none;
			display: block;
			}

			.dropdown-content a:hover {background-color: #f1f1f1!important; color: black;}
			.dropdown:hover .dropdown-content {display: block;}

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
			#ssr-progress table{
				margin-right: 0px;
				margin-left: 0px;
			}
			#ssr-progress{
				padding-right: 0px;
				padding-left: 0px;
				margin-right: 0px;
				margin-left: 0px;
			}
			th{
            font-size: 14px;
            padding:15px;
        }

        td{
						border: 3px solid #343434;
            font-size: 22px;
            padding: 8px;
            text-align: center;
        }

		#ssrTable{
			margin: 0;
			padding: 0;
		}
		#ssrTable td{
			text-align: center;
			width: 120px;
		}
		#ssrTable th{
			text-align: left;
			width: 120px;

		}
		#ssrTable tr{
			width: 100%;
		}
		#ssr-progress .filled{
			color: green;
			font-weight: bold;
		}
		#ssr-progress .notfilled{
			color: red;
			font-weight: bold;
		}
		#ssr-progress .notApplicable{
			color: orange;
			font-weight: bold;
		}
        
		#cP1 td{
			border: 0;
		}
		.displayProgress{
			background-color: #E9EAE6;
			text-align: center;
			font-size: 16px;
			font-weight: bold;
			display: none;
		}
		.displayProgress a{
			text-decoration: none;
			font-size: 18px;
		}
		#progressRow{
			/* position: absolute; */
			z-index: 999;
			background-color: #fff;
			width: 500px
		}

		.notFilledRed{
			color: red;
		}
		.FilledGreen{
			color: green;
		}

		.hidden{
			visibility: hidden;
			display: none;
		}

		.aboutBrowser{
			display: none;
		}

		.alertMsg{
			font-size: 18px;
			font-family: 'Bahnschrift', 'Calibri', 'Arial';
			animation-name: flipflop;
			animation-iteration-count: infinite;
			animation-duration: 0.8s;
		}

		@keyframes flipflop {
			0%{opacity: 1.0;}
			25%{opacity: 0.75}
			50%{opacity: 0.5}
			75%{opacity: 0.75}
			100%{opacity: 1.0}
		}

		#loader{
			width: 100%;
			height: 100%;
			display: flex;
			position: fixed;
			align-items: center;
			text-align: center;
			padding-left: 48%;
			padding-right: auto;
			background-color: #fff;
			z-index: 999;
		}
	</style>
	<link rel="icon" href="logo.png">
	<title><?php echo strtoupper($_SESSION['name']);?></title>
	</head>
	<body>
		<div class="text-center" id="loader">
		<div class="spinner-grow text-primary" role="status">
			<span class="sr-only">Loading...</span>
		</div>
		</div>
	<script>
			// Enabling Tooltip Everywhere
				$(function () {
				$('[data-toggle="tooltip"]').tooltip();
				})
			</script>
		<div  id="header" style="margin-left: 0px; margin-right: 0px; width: 100%!important;">
			<img src="assets/images/davvlogo.png" height="120px" width="120px" style="cursor: pointer ;float: left; margin-left: 30%;margin-top: 20px;" onclick="refresh();" data-toggle="tooltip" data-placement="left" title="Devi Ahilya University Logo" >
			<p style="float: left; margin-left: 30px;margin-top: 40px">Devi Ahilya Vishwavidyalaya <br><span style="font-size: 22px;">Data Capturing System-2021</span></p>
		</div>
		<script>
		// To go back where user came from
		function refresh(){
			window.location.reload();
		}
		function goBack() {
			window.history.back();
			}
		</script>
		<div id="topLink">
			<a style="text-decoration: none; cursor: pointer;" onclick="goBack()"  data-toggle="tooltip" data-placement="bottom" title="Go Back">BACK</a>
			<a href="" style="cursor: pointer; text-align: center; margin-left: 35%; " data-toggle="tooltip" data-placement="bottom" title="Department Name" disabled><?php echo strtoupper($_SESSION['name']);?></a>
		    <div class="dropdown" style="float:right;">
				<button class="dropbtn">GO TO</button>
				<div class="dropdown-content">
				    <a href="#profileSectionDiv"  style="cursor: pointer;">Profile Section</a>
					<a onclick="areYouSure()" style="cursor: pointer;">Logout</a>
				</div>
				</div>
		</div>
	<?php
	$ppp = 1101;
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
	if($unseen>0){
		$urg = "You Have A New Unseen Message!";
		$toggleTitleMsg = "(*You have an unseen message*)";
		echo "<center style='margin-top: 20px;margin-bottom: 5px; padding-right: 25%; padding-left: 25%;'><div class='alert  alert-warning alert-dismissal fade show' id='msgNotif' role='alert'><a href='helpdesk/msg.php' style='text-decoration: none; color:#F64B4B;' class='alertMsg'><strong>$urg</strong></a> <button type='button' class='close' data-dismiss='alert' aria-label='Close'><span aria-hidden='true' style='color: #8B0D12;'>&times;</span></button></div></center>";
		$ppp = 1;
	}
	?>
        <center class="aboutBrowser">
           <h5 style="text-align: center; margin-top: 15px;">This Web Application is best viewed in <i class="fa fa-chrome" style="font-size: 20px; color : black;"></i> Google Chrome browser.</h5>
		</center>
			<style type="text/css">
			#generate-ssr{
				height: 120px;
				margin-top: 30px;
				margin-bottom: 30px;
			}
			.criteriaSSR{
				width: 220px!important;
			
			}
			.criteriaSSR:hover{
				opacity: 0.92;
			}
			</style>
			<div id="generate-ssr" class="hidden">
			<hr style="border-color:black; border:2px solid #0E3778;" size="100">
			<b style="z-index:5; margin-top:-45px; padding:10px; padding-left:30px; padding-right:30px; border-radius:17px; FLOAT:LEFT; margin-left:80px; font-size:17px; border:0px solid gray; background-color:#0E3778;  color:#FFF;">Generate Report SSR</b>
				<center style="margin-top: 50px;">
				<input type="submit" onclick="location.href='ssr/Criteria1/report.php'" value="Criteria 1" style="border-radius: 5px; height: 50px; background-color: #0E3778; margin-top: 30px;margin-right: 30px ;margin-left: auto;margin-bottom: 30px; font-size: 16.5px; font-weight: bold;" class="criteriaSSR">
				<input type="submit" onclick="location.href='ssr/Criteria2/report.php'"  value="Criteria 2" style="border-radius: 5px; height: 50px; background-color: #0E3778; margin-top: 30px;margin-right: 30px ;margin-left: auto;margin-bottom: 30px; font-size: 16.5px; font-weight: bold;" class="criteriaSSR">
				<input type="submit" onclick="location.href='ssr/Criteria3/report.php'" value="Criteria 3" style="border-radius: 5px; height: 50px; background-color: #0E3778; margin-top: 30px;margin-right: 30px ;margin-left: 20px auto;margin-bottom: 30px; font-size: 16.5px; font-weight: bold;" class="criteriaSSR">
				<input type="submit" onclick="location.href='ssr/Criteria4/report.php'" value="Criteria 4" style="border-radius: 5px; height: 50px; background-color: #0E3778; margin-top: 30px;margin-right: 30px ;margin-left: auto;padding: 4px;margin-bottom: 30px; font-size: 16px; font-weight: bold;" class="criteriaSSR">
				<input type="submit" onclick="location.href='ssr/Criteria5/report.php'" value="Criteria 5" style="border-radius: 5px; height: 50px; background-color: #0E3778; margin-top: 30px;margin-right: 30px ;margin-left: auto;margin-bottom: 30px; font-size: 16.5px; font-weight: bold;" class="criteriaSSR">
				<input type="submit" onclick="location.href='ssr/Criteria6/report.php'" value="Criteria 6" style="border-radius: 5px; height: 50px; background-color: #0E3778; margin-top: 30px;margin-right: 30px ;margin-left: auto;margin-bottom: 30px; font-size: 16.5px; font-weight: bold;" class="criteriaSSR">
				<input type="submit" onclick="location.href='ssr/Criteria7/report.php'"  value="Criteria 7" style="border-radius: 5px; height: 50px; background-color: #0E3778; margin-top: 30px;margin-right: 30px ;margin-left: auto;margin-bottom: 30px; font-size: 16.5px; font-weight: bold;" class="criteriaSSR">
				<input type="submit" onclick="location.href='ssr/Criteria1/report.php'" value="Evaluative Report" style="border-radius: 5px; height: 50px; background-color: #0E3778; margin-top: 30px;margin-right: 30px ;margin-left: 20px auto;margin-bottom: 30px; font-size: 16.5px; font-weight: bold;" class="criteriaSSR">
				</center>

			</div><br>
			<!-- Other Sections Panel

			Added as new development feature on 5:53PM on 15-04-2021
			By Kashif Raza (ETC-A) & Sonam Khurana(E&I)

			-->
			<style type="text/css">
			#other-sections{
				height: 200px;
				margin-top: 15px;
				margin-bottom: 30px;
			}
			.otherFormsBtn:hover{
				opacity: 0.92;
			}
			</style>
			<div id="other-sections">
			<hr style="border-color:black; border:2px solid #0E3778;" size="100">
			<b style="z-index:5; margin-top:-45px; padding:10px; padding-left:30px; padding-right:30px; border-radius:17px; FLOAT:LEFT; margin-left:80px; font-size:17px; border:0px solid gray; background-color:#0E3778;  color:#FFF;">Forms Section</b>
				<center style="margin-top: 70px;">
				<input type="submit" onclick="location.href='academic_audit/index.php'" value="Academic Audit" style="border-radius: 5px; height: 50px; background-color: #0E3778; margin-top: 30px;margin-right: 30px ;margin-left: auto;margin-bottom: 30px; font-size: 16.5px; font-weight: bold;" class="otherFormsBtn hidden">
				<input type="submit" onclick="location.href='monthly_report/select-month-user.php'"  value="Monthly Report" style="border-radius: 5px; height: 50px; background-color: #0E3778; margin-top: 30px;margin-right: 30px ;margin-left: auto;margin-bottom: 30px; font-size: 16.5px; font-weight: bold;" class="otherFormsBtn" data-toggle="tooltip" data-placement="top" title="">
				<input type="submit" onclick="location.href='dqac/index.php'" value="DQAC Composition" style="border-radius: 5px; height: 50px; background-color: #0E3778; margin-top: 30px;margin-right: 30px ;margin-left: 20px auto;margin-bottom: 30px; font-size: 16.5px; font-weight: bold;" class="otherFormsBtn">
				<input type="submit" onclick="location.href='sss/report.php'" value="Student Satisfaction Survey" style="border-radius: 5px; height: 50px; background-color: #0E3778; margin-top: 30px;margin-right: 30px ;margin-left: auto;padding: 4px;margin-bottom: 30px; font-size: 16px; font-weight: bold;" class="otherFormsBtn hidden">
				<input type="submit" onclick="location.href='feedback/report.php'" value="Feedback" style="border-radius: 5px; height: 50px; background-color: #0E3778; margin-top: 30px;margin-right: 30px ;margin-left: auto;margin-bottom: 30px; font-size: 16.5px; font-weight: bold;" class="otherFormsBtn hidden">
				</center>
			</div><br><br>
			<!-- Other Section Ends Here! -->

				<hr style="border-color:black; border:2px solid #0E3778;" size="100">

				<b style="z-index:5; margin-top:-45px; padding:10px; padding-left:30px; padding-right:30px; border-radius:17px; FLOAT:LEFT; margin-left:80px; font-size:17px; border:0px solid gray; background-color:#0E3778;  color:#FFF;" id="profileSectionDiv">Profile Section</b>

			<br><BR>


			<center>
			    <input style="margin-right: 10px;background-color:#0E3778;" type="button" onclick="location.href='NoticeHistory.php';" value="NOTICE HISTORY" data-toggle="tooltip" data-placement="left" title="Click To Check Previous Notices" />
				<input style="margin-right: 10px;background-color:#0E3778;" type="button" onclick="location.href='helpdesk/msg.php';" value="HELP DESK"data-toggle="tooltip" data-placement="top" title="IQAC Chat System <?php echo $toggleTitleMsg;?>" />
				<input style="margin-right: 10px;background-color:#0E3778;" type="button" onclick="location.href='Courses/view.php';" value="MANAGE COURSES" data-toggle="tooltip" data-placement="right" title="Click Here" />
				<br>
				<input style="margin-right: 10px;background-color:#0E3778;" type="button" onclick="location.href='Courses/programmeView.php';" value="MANAGE PROGRAMMES" data-toggle="tooltip" data-placement="left" title="Click Here" />
				<input style="margin-right: 10px;background-color:#0E3778;" type="button" onclick="location.href='additional_data/add_view.php';" value="UPLOAD ADDITIONAL DATA" data-toggle="tooltip" data-placement="top" title="Click Here" />
				<input style="margin-right: 10px;background-color:#0E3778;" type="button" onClick="window.open('./save_my_data/get_data.php','Save My Data','resizable,height=600,width=1100'); return false;" value="EXPORT DATA"data-toggle="tooltip" data-placement="right" title="Click Here" />
                <br>
				<input style="margin-right: 10px;background-color:#0E3778;" type="button" onclick="location.href='Set_Student_Data/index.php';" target="_black()" value="SET DATA FOR FEEDBACK"data-toggle="tooltip" data-placement="left" title="Student's Data" />
				<input style="margin-right: 10px;background-color:#0E3778;" type="button" onclick="location.href='query/document.php';" target="_black()" value="DOC. RELATED QUERY" data-toggle="tooltip" data-placement="top" title="Click Here" />
				<input style="margin-right: 10px;background-color:#0E3778;" type="button" onclick="location.href='query/technical.php';" target="_black()" value="TECHNICAL QUERY" data-toggle="tooltip" data-placement="right" title="Click Here" />
				<br>
				<input style="margin-right: 10px;background-color:#0E3778;" type="button" onClick="window.open('./profile/link_generator/generate.php','Link Generator','resizable,height=600,width=1100'); return false;" value="URL GENERATOR" data-toggle="tooltip" data-placement="left" title="Click Here" />
				<input style="margin-right: 10px;background-color:#0E3778;" type="button" onclick="location.href='./validator/validate_links.php';" value="LINK VALIDATOR" data-toggle="tooltip" data-placement="bottom" title="Click Here" />			
				<input style="margin-right: 10px;background-color:#0E3778;" type="button" onclick="location.href='getData.php'" value="VIEW UPLOADED DATA" data-toggle="tooltip" data-placement="right" title="For:  Monthly Report" />
			</center>
			<script>
			    function areYouSure(){
					var confirmLogOut = confirm("Are you sure you want to logout?");
					if(confirmLogOut){
						location.href="logout.php";
					}
				}
			</script>
			<br><br><br>
			<!-- Footer -->
			<style>
				footer{
					width: 100%;
					margin: auto;
					background-color: #fff;
					height: 20px;
					text-align: center;
					font-size: 15px;
					font-family: 'verdana', 'sans serif';
					color: #A5A5A5;
				}

			</style>
			<footer>
				<p>&copy; <script>document.write(new Date().getFullYear())</script> - <script>document.write(new Date().getFullYear() + 1)</script> Devi Ahilya Vishwavidyalaya,  Indore (M.P.)<br>Version 2&nbsp; w.e.f. 01-07-2021</p>
			</footer><br>
			<button onclick="topFunction()" id="topBtn" data-toggle="tooltip" data-placement="top" title="Go to top"><i class="fa fa-arrow-up" style="color: white;font-size: 20px;"></i></button>
				<script>
				/*BACK TO TOP BUTTON */
					var mybutton = document.getElementById("topBtn");
					window.onscroll = function() {scrollFunction()};
					function scrollFunction() {
					if (document.body.scrollTop > 40 || document.documentElement.scrollTop > 40) {
						mybutton.style.display = "block";
					} else {
						mybutton.style.display = "none";
					}
					}
					function topFunction() {
					document.body.scrollTop = 0;
					document.documentElement.scrollTop = 0;
					}
				</script>
			
	</body>

		<script>
		$(window).on("load", function(){
			$(".aboutBrowser").delay(1000).fadeIn("slow");
			$(".aboutBrowser").delay(14000).fadeOut("Slow");
			setTimeout(removeLoader, 1000);
		});

		function removeLoader(){
			$("#loader").fadeOut(500, function(){
				$("#loader").remove();
			});
		}

		// $(document).ready(function(){

		// 	var xhttp,res;
		// 				xhttp = new XMLHttpRequest();
		// 				xhttp.onreadystatechange = function(){

		// 				if (this.readyState == 4 && this.status == 200) {

		// 					$("#my_progress").append(this.responseText);

		// 				}
		// 			};
		// 						xhttp.open("GET", "superuser/progress_restricted.php?dept=<?php echo $_SESSION['username']; ?>", true);
		// 						xhttp.setRequestHeader('Content-type', 'application/x-www-form-urlencoded');
		// 					xhttp.send();

		// });


		</script>
		<noscript>
		    Javascript is disabled or your browser doesn't support JavaScript, Please switch to Google Chrome Browser for Application Use, Regards IQAC.
		</noscript>
	</html>

<?php 
//  include 'top-cache.php';
session_start();
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
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="../css/theme.css">
    <link rel="stylesheet" href="../css/bootstrap.min.css">
    <link rel="stylesheet" href="../css/w3_l.css">
    <script src="../js/jquery.min.js"></script>
    <script src="../js/bootstrap.min.js"></script>
  <script>
    //   Enabling Tooltip via Bootstrap on data-toggle, data-placement i.e 'Position of tooltip' and title
        $(function () {
            $('[data-toggle="tooltip"]').tooltip();
        })
  </script>
	<style>

		.nn:hover,.nnn,.nnn:hover{
			color: white;
		}

		.hovered:hover{
			background-color: pink;
		}

	</style>


    <style>
        html{
            scroll-behavior: smooth;
        }
        body{
            background-color: #fff;
        }

		.complete{
			background-color: #009900;
			color: white;
		}

		w{
			color: red;
		}

		x{
			color: green;
		}

		y{
			color: orange;
		}

		z{
			color: black;
			font-size: 19px;
		}

		w,x,y{
			font-weight: bold;
			font-size: 25px;
		}

		c{
			color: pink;
			border-radius: 10%;
		}

		.shaped{
			border-radius: 4px;
		}

		.partial{
			background-color: skyblue;
			color: white;
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
        /* CSS FOR LOADER */
        .loader {
            position: fixed;
            top: 50%;
            left: 50%;
            z-index: 200;
            border: 10px solid #fff;
            border-radius: 50%;
            border-top: 10px solid #0E3778;
            border-bottom: 10px solid #0E3778;
            width: 50px;
            height: 50px;
            -webkit-animation: spin 0.8s linear infinite;
            animation: spin 0.8s linear infinite;
        }

        @-webkit-keyframes spin {
            0% { -webkit-transform: rotate(0deg); }
            100% { -webkit-transform: rotate(360deg); }
        }

        @keyframes spin {
            0% { transform: rotate(0deg); }
            100% { transform: rotate(360deg); }
        }
        .centeredContent{
            background-color: #fff;
        }
        th{
            font-size: 14px;
            padding:15px;
        }
   
        td{
            font-size: 22px;
            padding: 8px;
            text-align: center;
        }
      
        #importantContainer{
            height: 60px;
            width: 100% auto;
            background-color: #fff;
            padding-right: 20px;
            opacity: 1.0!important;
            margin-top: 0px;
            padding-top: 0px;
            position: sticky;
            top: 0px;
            z-index: 55;
            border-bottom: 1px solid grey;
        }

        footer{
            margin-top: 30px;
            text-align: center;
           }

        </style>
<link rel="icon" href="./logo.png">
<title>A.Q.A.R Progress</title>
</head>
<script>
    document.onreadystatechange = function() {
        if (document.readyState !== "complete") {
            document.querySelector("body").style.visibility = "hidden";
            document.querySelector("#loadSpinner").style.visibility = "visible";
        } else {
            document.querySelector("#loadSpinner").style.display = "none";
            document.querySelector("body").style.visibility = "visible";
        }
    };
 
</script>

<body class="BACK">
    <div class="loader" id="loadSpinner"></div>
    <div class="container DAVV" style="width:100%; padding-bottom:20px; padding-top:20px;background-color:#0E3778;">
        <div class="col-sm-3"></div>

        <div class="col-sm-8" style="margin-left:-50px;">
            <div class="container" style="width:100%;">
                <div class="col-sm-2" style="margin-left:5px;">
                    <img src="../logo.png" alt="logo" style="width:120px; height:120px;">
                </div>

                <div class="col-sm-9" style="margin-left:-20px;">
                    <div style="font-size:30px; margin-top:20px; margin-left:30px; color:#FFF"><b>Devi Ahilya Vishwavidyalaya, Indore</b></div>
                    <div style="font-size:20px; margin-top:10px; margin-left:30px; color:#FFF;"><b>Data Capturing System - 2021</b></div>
                </div>
            </div>

        </div>




        <div class="col-sm-1"></div>
    </div>

    <div id="myHeader" class="col-sm-12 Username" style="z-index:10; width:100%;background-color:#0E3778;">
        <center><div id="myHeader1" class="col-sm-1 Username" style="padding:10px;background-color:#0E3778; style='visibility:hidden;'"><a onclick="goBack()" style="txet-decoration: none;"><h4 style=" color:#fff; font-size:15px;cursor: pointer" ><?php echo "BACK";?></h4></a></div></center>
        <center><div id="myHeader2" class="col-sm-10 Username" style="padding:10px;background-color:#0E3778;"><h4 style=" color:#fff; font-size:18px;"><?php echo strtoupper($_SESSION['names'])." | A.Q.A.R. PROGRESS ";?></h4></div></center>
        <center><div id="myHeader3" class="col-sm-1 Username" style="padding:10px; background-color:#0E3778;"><a href="../logout.php"><h4 style=" color:#fff; font-size:15px; "><?php echo "LOGOUT";?></h4></a></div></center>
    </div>
        <?php
		//  include("links.php");
		?> 
         <script>
      function goBack() {
        window.history.back();
        }
    </script>
    <br><br>     

   </div>
    <center class="centeredContent">

    <br><br>
   
    <table border="1" id="progress">

        <tr>
            <th style="font-size:14px;">DEPARTMENT NAME</th>
            <th style="font-size:10px;">CRITERIA 1</th>
            <th style="font-size:10px;">CRITERIA 2</th>
            <th style="font-size:10px;">CRITERIA 3</th>
            <th style="font-size:10px;">CRITERIA 4</th>
            <th style="font-size:10px;">CRITERIA 5</th>
            <th style="font-size:10px;">CRITERIA 6</th>
            <th style="font-size:10px;">CRITERIA 7</th>
						<th style="font-size:10px;">EVALUATIVE <br> REPORT</th>
						<th style="font-size:10px;">EXTENDED <br> PROFILE</th>
						<th><img width="30px" src="../images/messaging.png" data-toggle="tooltip" data-placement="top" title="Messages from Dept."></th>
        </tr>

        <?php

            $query = "SELECT * FROM admins ORDER BY sno";
            $connection = mysqli_connect($servername, $username, $password, $dbname);
            $res = mysqli_query($connection,$query);

            while($row = $res->fetch_assoc()){
        ?>


        <tr>

							<th><?php echo $row['sno']?> <a target="_blank" href="switch.php?username=<?php echo $row['username']?>&name=<?php echo $row['name']?>"; ?> <?php echo $row['name']; ?> </a> </th>


            <td
                <?php

                    $c1 = "select distinct * from t1_1_1 where Username LIKE '".$row['username']."'";
                    $c2 = "select distinct * from t1_1_2 where Username LIKE '".$row['username']."'";
                    $c3 = "select distinct * from t1_1_3 where Username LIKE '".$row['username']."'";
                    $c4 = "select distinct * from t1_2_1 where Username LIKE '".$row['username']."'";
                    $c5 = "select distinct * from t1_2_2 where Username LIKE '".$row['username']."'";
                    $c6 = "select distinct * from t1_3_1 where Username LIKE '".$row['username']."'";
                    $c7 = "select distinct * from t1_3_2 where Username LIKE '".$row['username']."'";
                    $c8 = "select distinct * from t1_3_4 where Username LIKE '".$row['username']."'";
                    $c9 = "select distinct * from t1_4_1 where Username LIKE '".$row['username']."'";
                    $c10= "select distinct * from t1_4_2 where Username LIKE '".$row['username']."'";

                    $r1 = mysqli_query($connection,$c1);
                    $r2 = mysqli_query($connection,$c2);
                    $r3 = mysqli_query($connection,$c3);
                    $r4 = mysqli_query($connection,$c4);
                    $r5 = mysqli_query($connection,$c5);
                    $r6 = mysqli_query($connection,$c6);
                    $r7 = mysqli_query($connection,$c7);
                    $r8 = mysqli_query($connection,$c8);
                    $r9 = mysqli_query($connection,$c9);
                    $r10= mysqli_query($connection,$c10);

                    $a1 = mysqli_num_rows($r1);
                    $a2 = mysqli_num_rows($r2);
                    $a3 = mysqli_num_rows($r3);
                    $a4 = mysqli_num_rows($r4);
                    $a5 = mysqli_num_rows($r5);
                    $a6 = mysqli_num_rows($r6);
                    $a7 = mysqli_num_rows($r7);
                    $a8 = mysqli_num_rows($r8);
                    $a9 = mysqli_num_rows($r9);
                    $a10= mysqli_num_rows($r10);

                    $q=0;

                    if($a1>=1){
                        $q++;
                    }
                    if($a2>=1){
                        $q++;
                    }
                    if($a3>=1){
                        $q++;
                    }
                    if($a4>=1){
                        $q++;
                    }
                    if($a5>=1){
                        $q++;
                    }
                    if($a6>=1){
                        $q++;
                    }
                    if($a7>=1){
                        $q++;
                    }
                    if($a8>=1){
                        $q++;
                    }
                    if($a9>=1){
                        $q++;
                    }
                    if($a10>=1){
                        $q++;
                    }



										$prog_na = "select count(*) AS total_na FROM not_applicable WHERE Username LIKE '".$row['username']."' AND section LIKE 't1%' ";
										$res_na  = mysqli_query($connection,$prog_na) or die(mysqli_error($connection));

										while ($row_na = $res_na->fetch_assoc()) {
											$na = $row_na['total_na'];
										}

										$tt = 10;

							if($q+$na>=$tt){
								echo ' class="complete"> ';
							}else if($q+$na>0){
								echo ' class="partial"> ';
							}else{
								echo ' class="blank"> ';
							}

							?>

							<div  style=" color:black; background-color:transparent; text-decoration:none; color:white;" class="w3-dropdown-hover nnn">
								<a style="text-decoration:none; color:white; cursor:pointer;"  class="nn">
					<center>
							<?php


							if($q>0){ echo "<x>".$q."</x>"; }else{ echo "<w>".$q."</w>"; }
							if($na>0){ echo "<z>+</z>"."<y>".$na."</y>"; }
										echo "<z>/".$tt."</z>";


                ?>
							</a>
							<div style="text-decoration:none; cursor:pointer; margin-left:-30px; color:white; border:2px solid black; font-size:14px; max-height:400px; overflow-y:auto;" class="w3-dropdown-content w3-bar-block w3-border">
								<a style="text-decoration:none; color:black;" class="w3-bar-item w3-button hovered" title="Curricula developed /adopted have relevance to the local/ national / regional/global developmental needs with learning objectives including Programme outcomes, Programme specific outcomes and course outcomes of all the Programme offered by the University.">1.1.1 => <?php $temp = $a1; if($temp>0) echo "<x>".$temp."</x>"; else echo "<w>".$temp."</w>"; ?></a>
								<a style="text-decoration:none; color:black;" class="w3-bar-item w3-button hovered" title="How many Programmes were revised out of total number of Programmes offered during the last five years. ">1.1.2 => <?php $temp = $a2; if($temp>0) echo "<x>".$temp."</x>"; else echo "<w>".$temp."</w>"; ?></a>
								<a style="text-decoration:none; color:black;" class="w3-bar-item w3-button hovered" title="Average percentage of courses having focus on employability/ entrepreneurship/ skill development">1.1.3 => <?php $temp = $a3; if($temp>0) echo "<x>".$temp."</x>"; else echo "<w>".$temp."</w>"; ?></a>
								<a style="text-decoration:none; color:black;" class="w3-bar-item w3-button hovered" title="Percentage of new courses introduced of the total number of courses across all Programmes offered during the last five years.">1.2.1 => <?php $temp = $a4; if($temp>0) echo "<x>".$temp."</x>"; else echo "<w>".$temp."</w>"; ?></a>
								<a style="text-decoration:none; color:black;" class="w3-bar-item w3-button hovered" title="Percentage of programs in which Choice Based Credit System (CBCS)/elective course system has been implemented">1.2.2 => <?php $temp = $a5; if($temp>0) echo "<x>".$temp."</x>"; else echo "<w>".$temp."</w>"; ?></a>
								<a style="text-decoration:none; color:black;" class="w3-bar-item w3-button hovered" title="Institution integrates cross cutting issues relevant to Gender, Environment and Sustainability, Human Values and Professional Ethics into the Curriculum.">1.3.1 => <?php $temp = $a6; if($temp>0) echo "<x>".$temp."</x>"; else echo "<w>".$temp."</w>"; ?></a>
								<a style="text-decoration:none; color:black;" class="w3-bar-item w3-button hovered" title="Number of value-added courses imparting transferable and life skills offered during the last five years">1.3.2 => <?php $temp = $a7; if($temp>0) echo "<x>".$temp."</x>"; else echo "<w>".$temp."</w>"; ?></a>
								<a style="text-decoration:none; color:black;" class="w3-bar-item w3-button hovered" title="Percentage of students undertaking field projects / internships (Current Year data)">1.3.4 => <?php $temp = $a8; if($temp>0) echo "<x>".$temp."</x>"; else echo "<w>".$temp."</w>"; ?></a>
								<a style="text-decoration:none; color:black;" class="w3-bar-item w3-button hovered" title="Structured feedback recieved from 1) Students, 2) Teachers, 3) Employers, 4) Alumni , 5) Parents, for design and review of syllabus ">1.4.1 => <?php $temp = $a9; if($temp>0) echo "<x>".$temp."</x>"; else echo "<w>".$temp."</w>"; ?></a>
								<a style="text-decoration:none; color:black;" class="w3-bar-item w3-button hovered" title="FeedBack">1.4.2 => <?php $temp = $a10; if($temp>0) echo "<x>".$temp."</x>"; else echo "<w>".$temp."</w>"; ?></a>
							</div>
						</center>
						</div>


            </td>

            <td
                <?php

                    $c1 = "select distinct * from t2_1_1 where Username LIKE '".$row['username']."'";
                    $c2 = "select distinct * from t2_1_2 where Username LIKE '".$row['username']."'";
                    $c3 = "select distinct * from t2_1_3 where Username LIKE '".$row['username']."'";
                    $c4 = "select distinct * from t2_2_1 where Username LIKE '".$row['username']."'";
                    $c5 = "select distinct * from t2_2_2 where Username LIKE '".$row['username']."'";
                    $c6 = "select distinct * from t2_2_3 where Username LIKE '".$row['username']."'";
                    $c7 = "select distinct * from t2_3_1 where Username LIKE '".$row['username']."'";
                    $c8 = "select distinct * from t2_3_2 where Username LIKE '".$row['username']."'";
                    $c9 = "select distinct * from t2_3_3 where Username LIKE '".$row['username']."'";
                    $c10= "select distinct * from t2_4_1 where Username LIKE '".$row['username']."'";
                    $c11= "select distinct * from t2_4_2 where Username LIKE '".$row['username']."'";
                    $c12= "select distinct * from t2_4_3 where Username LIKE '".$row['username']."'";
                    $c13= "select distinct * from t2_4_4 where Username LIKE '".$row['username']."'";
                    $c14= "select distinct * from t2_4_5 where Username LIKE '".$row['username']."'";
                    $c15= "select distinct * from t2_5_1 where Username LIKE '".$row['username']."'";
                    $c16= "select distinct * from t2_5_2 where Username LIKE '".$row['username']."'";
                    $c17= "select distinct * from t2_5_3 where Username LIKE '".$row['username']."'";
                    $c18= "select distinct * from t2_5_4 where Username LIKE '".$row['username']."'";
                    $c19= "select distinct * from t2_5_5 where Username LIKE '".$row['username']."'";
                    $c20= "select distinct * from t2_6_1 where Username LIKE '".$row['username']."'";
                    $c21= "select distinct * from t2_6_2 where Username LIKE '".$row['username']."'";
                    $c22= "select distinct * from t2_6_3 where Username LIKE '".$row['username']."'";
										$c23= "select distinct * from t2_7_1 where Username LIKE '".$row['username']."'";

                    $r1 = mysqli_query($connection,$c1);
                    $r2 = mysqli_query($connection,$c2);
                    $r3 = mysqli_query($connection,$c3);
                    $r4 = mysqli_query($connection,$c4);
                    $r5 = mysqli_query($connection,$c5);
                    $r6 = mysqli_query($connection,$c6);
                    $r7 = mysqli_query($connection,$c7);
                    $r8 = mysqli_query($connection,$c8);
                    $r9 = mysqli_query($connection,$c9);
                    $r10= mysqli_query($connection,$c10);
                    $r11 = mysqli_query($connection,$c11);
                    $r12 = mysqli_query($connection,$c12);
                    $r13 = mysqli_query($connection,$c13);
                    $r14 = mysqli_query($connection,$c14);
                    $r15 = mysqli_query($connection,$c15);
                    $r16 = mysqli_query($connection,$c16);
                    $r17 = mysqli_query($connection,$c17);
                    $r18 = mysqli_query($connection,$c18);
                    $r19 = mysqli_query($connection,$c19);
                    $r20= mysqli_query($connection,$c20);
                    $r21 = mysqli_query($connection,$c21);
                    $r22= mysqli_query($connection,$c22);
										$r23= mysqli_query($connection,$c23);

                    $a1 = mysqli_num_rows($r1);
                    $a2 = mysqli_num_rows($r2);
                    $a3 = mysqli_num_rows($r3);
                    $a4 = mysqli_num_rows($r4);
                    $a5 = mysqli_num_rows($r5);
                    $a6 = mysqli_num_rows($r6);
                    $a7 = mysqli_num_rows($r7);
                    $a8 = mysqli_num_rows($r8);
                    $a9 = mysqli_num_rows($r9);
                    $a10= mysqli_num_rows($r10);
                    $a11 = mysqli_num_rows($r11);
                    $a12 = mysqli_num_rows($r12);
                    $a13 = mysqli_num_rows($r13);
                    $a14 = mysqli_num_rows($r14);
                    $a15 = mysqli_num_rows($r15);
                    $a16 = mysqli_num_rows($r16);
                    $a17 = mysqli_num_rows($r17);
                    $a18 = mysqli_num_rows($r18);
                    $a19 = mysqli_num_rows($r19);
                    $a20 = mysqli_num_rows($r20);
                    $a21 = mysqli_num_rows($r21);
                    $a22 = mysqli_num_rows($r22);
										$a23 = mysqli_num_rows($r23);

                    $q=0;

                    if($a1>=1){
                        $q++;
                    }
                    if($a2>=1){
                        $q++;
                    }
                    if($a3>=1){
                        $q++;
                    }
                    if($a4>=1){
                        $q++;
                    }
                    if($a5>=1){
                        $q++;
                    }
                    if($a6>=1){
                        $q++;
                    }
                    if($a7>=1){
                        $q++;
                    }
                    if($a8>=1){
                        $q++;
                    }
                    if($a9>=1){
                        $q++;
                    }
                    if($a10>=1){
                        $q++;
                    }
                    if($a11>=1){
                        $q++;
                    }
                    if($a12>=1){
                        $q++;
                    }
                    if($a13>=1){
                        $q++;
                    }
                    if($a14>=1){
                        $q++;
                    }
                    if($a15>=1){
                        $q++;
                    }
                    if($a16>=1){
                        $q++;
                    }
                    if($a17>=1){
                        $q++;
                    }
                    if($a18>=1){
                        $q++;
                    }
                    if($a19>=1){
                        $q++;
                    }
                    if($a20>=1){
                        $q++;
                    }
                    if($a21>=1){
                        $q++;
                    }
                    if($a22>=1){
                        $q++;
                    }
										if($a23>=1){
                        $q++;
                    }

										$tt = 23;

										$prog_na = "select count(*) AS total_na FROM not_applicable WHERE Username LIKE '".$row['username']."' AND section LIKE 't2%' ";
										$res_na  = mysqli_query($connection,$prog_na) or die(mysqli_error($connection));

										while ($row_na = $res_na->fetch_assoc()) {
											$na = $row_na['total_na'];
										}

							if($q+$na>=$tt){
								echo ' class="complete"> ';
							}else if($q+$na>0){
								echo ' class="partial"> ';
							}else{
								echo ' class="blank"> ';
							}

/*
							if($q>0){ echo "<x>".$q."</x>"; }else{ echo "<w>".$q."</w>"; }
							if($na>0){ echo "<z>+</z>"."<y>".$na."</y>"; }
										echo "<z>/".$tt."</z>";
*/

?>

<div  style=" color:black; background-color:transparent; text-decoration:none; color:white;" class="w3-dropdown-hover nnn">
	<a style="text-decoration:none; color:white; cursor:pointer;"  class="nn">
<center>
<?php


if($q>0){ echo "<x>".$q."</x>"; }else{ echo "<w>".$q."</w>"; }
if($na>0){ echo "<z>+</z>"."<y>".$na."</y>"; }
			echo "<z>/".$tt."</z>";


	?>
</a>
<div style="text-decoration:none; cursor:pointer; margin-left:-30px; color:white; border:2px solid black; font-size:14px; max-height:400px; overflow-y:auto;" class="w3-dropdown-content w3-bar-block w3-border">
	<a style="text-decoration:none; color:black;" class="w3-bar-item w3-button hovered" title="Average percentage of students from other States and Countries during the last five years">2.1.1 => <?php $temp = $a1; if($temp>0) echo "<x>".$temp."</x>"; else echo "<w>".$temp."</w>"; ?></a>
	<a style="text-decoration:none; color:black;" class="w3-bar-item w3-button hovered" title="Demand Ratio during the last five years">2.1.2 => <?php $temp = $a2; if($temp>0) echo "<x>".$temp."</x>"; else echo "<w>".$temp."</w>"; ?></a>
	<a style="text-decoration:none; color:black;" class="w3-bar-item w3-button hovered" title="Average percentage of seats filled against seats reserved for various categories as per applicable reservation policy during the last five years">2.1.3 => <?php $temp = $a3; if($temp>0) echo "<x>".$temp."</x>"; else echo "<w>".$temp."</w>"; ?></a>
	<a style="text-decoration:none; color:black;" class="w3-bar-item w3-button hovered" title="The institution assesses the learning levels of the students, after admission and organises special Programmes for advanced learners and slow learners ">2.2.1 => <?php $temp = $a4; if($temp>0) echo "<x>".$temp."</x>"; else echo "<w>".$temp."</w>"; ?></a>
	<a style="text-decoration:none; color:black;" class="w3-bar-item w3-button hovered" title="Student - Full time teacher ratio">2.2.2 => <?php $temp = $a5; if($temp>0) echo "<x>".$temp."</x>"; else echo "<w>".$temp."</w>"; ?></a>
	<a style="text-decoration:none; color:black;" class="w3-bar-item w3-button hovered" title="Percentage of differently abled students (Divyangjan) on rolls(current year data)">2.2.3 => <?php $temp = $a6; if($temp>0) echo "<x>".$temp."</x>"; else echo "<w>".$temp."</w>"; ?></a>
	<a style="text-decoration:none; color:black;" class="w3-bar-item w3-button hovered" title="Student centric methods, such as experiential learning, participative learning and problem solving methodologies are used for enhancing learning experiences.">2.3.1 => <?php $temp = $a7; if($temp>0) echo "<x>".$temp."</x>"; else echo "<w>".$temp."</w>"; ?></a>
	<a style="text-decoration:none; color:black;" class="w3-bar-item w3-button hovered" title="Percentage of teachers using ICT for effective teaching with Learning Management Systems (LMS), E-learning resources etc.(current year data)">2.3.2 => <?php $temp = $a8; if($temp>0) echo "<x>".$temp."</x>"; else echo "<w>".$temp."</w>"; ?></a>
	<a style="text-decoration:none; color:black;" class="w3-bar-item w3-button hovered" title="Ratio of students to mentor for academic and stress related issues(current year data)">2.3.3 => <?php $temp = $a9; if($temp>0) echo "<x>".$temp."</x>"; else echo "<w>".$temp."</w>"; ?></a>
	<a style="text-decoration:none; color:black;" class="w3-bar-item w3-button hovered" title="Average percentage of full time teachers against sanctioned posts during the last five years. ">2.4.1 => <?php $temp = $a10; if($temp>0) echo "<x>".$temp."</x>"; else echo "<w>".$temp."</w>"; ?></a>
	<a style="text-decoration:none; color:black;" class="w3-bar-item w3-button hovered" title="Average percentage of full time teachers with Ph.D. during the last five years (10)">2.4.2 => <?php $temp = $a11; if($temp>0) echo "<x>".$temp."</x>"; else echo "<w>".$temp."</w>"; ?></a>
	<a style="text-decoration:none; color:black;" class="w3-bar-item w3-button hovered" title="Average teaching experience of full time teachers in number of years">2.4.3 => <?php $temp = $a12; if($temp>0) echo "<x>".$temp."</x>"; else echo "<w>".$temp."</w>"; ?></a>
	<a style="text-decoration:none; color:black;" class="w3-bar-item w3-button hovered" title="Average percentage of full time teachers who received awards, recognition, fellowships at State, National, International level from Government, recognised bodies during the last five years (10)">2.4.4 => <?php $temp = $a13; if($temp>0) echo "<x>".$temp."</x>"; else echo "<w>".$temp."</w>"; ?></a>
	<a style="text-decoration:none; color:black;" class="w3-bar-item w3-button hovered" title="Average percentage of full time teachers from other States against sanctioned posts during the last five years">2.4.5 => <?php $temp = $a14; if($temp>0) echo "<x>".$temp."</x>"; else echo "<w>".$temp."</w>"; ?></a>
	<a style="text-decoration:none; color:black;" class="w3-bar-item w3-button hovered" title="Average number of days from the date of last semester-end/ year- end examination till the declaration of results during the last five years">2.5.1 => <?php $temp = $a15; if($temp>0) echo "<x>".$temp."</x>"; else echo "<w>".$temp."</w>"; ?></a>
	<a style="text-decoration:none; color:black;" class="w3-bar-item w3-button hovered" title="Average percentage of student complaints/grievances about evaluation against total number appeared in the examinations during the last five years">2.5.2 => <?php $temp = $a16; if($temp>0) echo "<x>".$temp."</x>"; else echo "<w>".$temp."</w>"; ?></a>
	<a style="text-decoration:none; color:black;" class="w3-bar-item w3-button hovered" title="Average percentage of applications for revaluation leading to change in marks">2.5.3 => <?php $temp = $a17; if($temp>0) echo "<x>".$temp."</x>"; else echo "<w>".$temp."</w>"; ?></a>
	<a style="text-decoration:none; color:black;" class="w3-bar-item w3-button hovered" title="Positive impact of reforms on the examination procedures and processes including IT integration and continuous internal assessment on the examination management system">2.5.4 => <?php $temp = $a18; if($temp>0) echo "<x>".$temp."</x>"; else echo "<w>".$temp."</w>"; ?></a>
	<a style="text-decoration:none; color:black;" class="w3-bar-item w3-button hovered" title="Status of automation of Examination division along with approved Examination Manual.">2.5.5 => <?php $temp = $a19; if($temp>0) echo "<x>".$temp."</x>"; else echo "<w>".$temp."</w>"; ?></a>
	<a style="text-decoration:none; color:black;" class="w3-bar-item w3-button hovered" title="Programme outcomes, Programme specific outcomes and course outcomes for all Programmes offered by the institution are stated and displayed on website and communicated to teachers and students">2.6.1 => <?php $temp = $a20; if($temp>0) echo "<x>".$temp."</x>"; else echo "<w>".$temp."</w>"; ?></a>
	<a style="text-decoration:none; color:black;" class="w3-bar-item w3-button hovered" title="Attainment of Programme outcomes, Programme specific outcomes and course outcomes are evaluated by the institution">2.6.2 => <?php $temp = $a21; if($temp>0) echo "<x>".$temp."</x>"; else echo "<w>".$temp."</w>"; ?></a>
	<a style="text-decoration:none; color:black;" class="w3-bar-item w3-button hovered" title="Average pass percentage of students (Current year data).">2.6.3 => <?php $temp = $a22; if($temp>0) echo "<x>".$temp."</x>"; else echo "<w>".$temp."</w>"; ?></a>
	<a style="text-decoration:none; color:black;" class="w3-bar-item w3-button hovered" title="Online student satisfaction survey regarding teaching learning process.">2.7.1 => <?php $temp = $a23; if($temp>0) echo "<x>".$temp."</x>"; else echo "<w>".$temp."</w>"; ?></a>
</div>
</center>
</div>

<?php

/*
										if($q==23){
											echo ' class="complete"> '.$q.'/';
										}else if($q>0){
											echo ' class="partial"> '.$q.'/';
										}else{
											echo ' class="blank"> '.$q.'/';
										}

										echo $tt;
*/
//                    echo $q."/22";

                ?>
            </td>
            <td
                <?php

                    $c1 = "select distinct * from t3_1_1 where Username LIKE '".$row['username']."'";
                    $c2 = "select distinct * from t3_1_2 where Username LIKE '".$row['username']."'";
                    $c3 = "select distinct * from t3_1_3 where Username LIKE '".$row['username']."'";
                    $c4 = "select distinct * from t3_1_4 where Username LIKE '".$row['username']."'";
                    $c5 = "select distinct * from t3_1_5 where Username LIKE '".$row['username']."'";
                    $c6 = "select distinct * from t3_1_6 where Username LIKE '".$row['username']."'";
                    $c7 = "select distinct * from t3_2_2 where Username LIKE '".$row['username']."'";
                    $c8 = "select distinct * from t3_2_3 where Username LIKE '".$row['username']."'";
                    $c9 = "select distinct * from t3_3_1 where Username LIKE '".$row['username']."'";
                    $c10= "select distinct * from t3_3_2 where Username LIKE '".$row['username']."'";
                    $c11= "select distinct * from t3_3_3 where Username LIKE '".$row['username']."'";
                    $c12= "select distinct * from t3_3_4 where Username LIKE '".$row['username']."'";
                    $c13= "select distinct * from t3_4_1 where Username LIKE '".$row['username']."'";
                    $c14= "select distinct * from t3_4_2 where Username LIKE '".$row['username']."'";
                    $c15= "select distinct * from t3_4_3 where Username LIKE '".$row['username']."'";
                    $c16= "select distinct * from t3_4_4 where Username LIKE '".$row['username']."'";
                    $c17= "select distinct * from t3_4_5 where Username LIKE '".$row['username']."'";
                    $c18= "select distinct * from t3_4_6 where Username LIKE '".$row['username']."'";
										$c18b= "select distinct * from t3_4_6b where Username LIKE '".$row['username']."'";
										$c18c= "select distinct * from t3_4_6c where Username LIKE '".$row['username']."'";
                    $c19= "select distinct * from t3_4_7 where Username LIKE '".$row['username']."'";
                    $c20= "select distinct * from t3_4_8 where Username LIKE '".$row['username']."'";
                    $c21= "select distinct * from t3_5_1 where Username LIKE '".$row['username']."'";
                    $c22= "select distinct * from t3_5_2 where Username LIKE '".$row['username']."'";
                    $c23= "select distinct * from t3_5_3 where Username LIKE '".$row['username']."'";
                    $c24= "select distinct * from t3_6_1 where Username LIKE '".$row['username']."'";
                    $c25= "select distinct * from t3_6_2 where Username LIKE '".$row['username']."'";
                    $c26= "select distinct * from t3_6_3 where Username LIKE '".$row['username']."'";
                    $c27= "select distinct * from t3_6_4 where Username LIKE '".$row['username']."'";
                    $c28= "select distinct * from t3_7_1 where Username LIKE '".$row['username']."'";
                    $c29= "select distinct * from t3_7_2 where Username LIKE '".$row['username']."'";
                    $c30= "select distinct * from t3_7_3 where Username LIKE '".$row['username']."'";

                    $r1 = mysqli_query($connection,$c1);
                    $r2 = mysqli_query($connection,$c2);
                    $r3 = mysqli_query($connection,$c3);
                    $r4 = mysqli_query($connection,$c4);
                    $r5 = mysqli_query($connection,$c5);
                    $r6 = mysqli_query($connection,$c6);
                    $r7 = mysqli_query($connection,$c7);
                    $r8 = mysqli_query($connection,$c8);
                    $r9 = mysqli_query($connection,$c9);
                    $r10= mysqli_query($connection,$c10);
                    $r11 = mysqli_query($connection,$c11);
                    $r12 = mysqli_query($connection,$c12);
                    $r13 = mysqli_query($connection,$c13);
                    $r14 = mysqli_query($connection,$c14);
                    $r15 = mysqli_query($connection,$c15);
                    $r16 = mysqli_query($connection,$c16);
                    $r17 = mysqli_query($connection,$c17);
                    $r18 = mysqli_query($connection,$c18);
										$r18b = mysqli_query($connection,$c18b);
										$r18c = mysqli_query($connection,$c18c);
                    $r19 = mysqli_query($connection,$c19);
                    $r20= mysqli_query($connection,$c20);
                    $r21 = mysqli_query($connection,$c21);
                    $r22 = mysqli_query($connection,$c22);
                    $r23 = mysqli_query($connection,$c23);
                    $r24 = mysqli_query($connection,$c24);
                    $r25 = mysqli_query($connection,$c25);
                    $r26 = mysqli_query($connection,$c26);
                    $r27 = mysqli_query($connection,$c27);
                    $r28 = mysqli_query($connection,$c28);
                    $r29 = mysqli_query($connection,$c29);
                    $r30 = mysqli_query($connection,$c30);

                    $a1 = mysqli_num_rows($r1);
                    $a2 = mysqli_num_rows($r2);
                    $a3 = mysqli_num_rows($r3);
                    $a4 = mysqli_num_rows($r4);
                    $a5 = mysqli_num_rows($r5);
                    $a6 = mysqli_num_rows($r6);
                    $a7 = mysqli_num_rows($r7);
                    $a8 = mysqli_num_rows($r8);
                    $a9 = mysqli_num_rows($r9);
                    $a10= mysqli_num_rows($r10);
                    $a11 = mysqli_num_rows($r11);
                    $a12 = mysqli_num_rows($r12);
                    $a13 = mysqli_num_rows($r13);
                    $a14 = mysqli_num_rows($r14);
                    $a15 = mysqli_num_rows($r15);
                    $a16 = mysqli_num_rows($r16);
                    $a17 = mysqli_num_rows($r17);
                    $a18 = mysqli_num_rows($r18);
										$a18b = mysqli_num_rows($r18b);
										$a18c = mysqli_num_rows($r18c);
                    $a19 = mysqli_num_rows($r19);
                    $a20 = mysqli_num_rows($r20);
                    $a21 = mysqli_num_rows($r21);
                    $a22 = mysqli_num_rows($r22);
                    $a23 = mysqli_num_rows($r23);
                    $a24 = mysqli_num_rows($r24);
                    $a25 = mysqli_num_rows($r25);
                    $a26 = mysqli_num_rows($r26);
                    $a27 = mysqli_num_rows($r27);
                    $a28 = mysqli_num_rows($r28);
                    $a29 = mysqli_num_rows($r29);
                    $a30 = mysqli_num_rows($r30);

                    $q=0;

                    if($a1>=1){
                        $q++;
                    }
                    if($a2>=1){
                        $q++;
                    }
                    if($a3>=1){
                        $q++;
                    }
                    if($a4>=1){
                        $q++;
                    }
                    if($a5>=1){
                        $q++;
                    }
                    if($a6>=1){
                        $q++;
                    }
                    if($a7>=1){
                        $q++;
                    }
                    if($a8>=1){
                        $q++;
                    }
                    if($a9>=1){
                        $q++;
                    }
                    if($a10>=1){
                        $q++;
                    }
                    if($a11>=1){
                        $q++;
                    }
                    if($a12>=1){
                        $q++;
                    }
                    if($a13>=1){
                        $q++;
                    }
                    if($a14>=1){
                        $q++;
                    }
                    if($a15>=1){
                        $q++;
                    }
                    if($a16>=1){
                        $q++;
                    }
                    if($a17>=1){
                        $q++;
                    }
                    if($a18>=1){
                        $q++;
                    }
										if($a18b>=1){
                        $q++;
                    }
										if($a18c>=1){
                        $q++;
                    }
                    if($a19>=1){
                        $q++;
                    }
                    if($a20>=1){
                        $q++;
                    }
                    if($a21>=1){
                        $q++;
                    }
                    if($a22>=1){
                        $q++;
                    }
                    if($a23>=1){
                        $q++;
                    }
                    if($a24>=1){
                        $q++;
                    }
                    if($a25>=1){
                        $q++;
                    }
                    if($a26>=1){
                        $q++;
                    }
                    if($a27>=1){
                        $q++;
                    }
                    if($a28>=1){
                        $q++;
                    }
                    if($a29>=1){
                        $q++;
                    }
                    if($a30>=1){
                        $q++;
                    }

										$tt = 32;

										$prog_na = "select count(*) AS total_na FROM not_applicable WHERE Username LIKE '".$row['username']."' AND section LIKE 't3%' ";
										$res_na  = mysqli_query($connection,$prog_na) or die(mysqli_error($connection));

										while ($row_na = $res_na->fetch_assoc()) {
											$na = $row_na['total_na'];
										}

							if($q+$na>=$tt){
								echo ' class="complete"> ';
							}else if($q+$na>0){
								echo ' class="partial"> ';
							}else{
								echo ' class="blank"> ';
							}


							?>

							<div  style=" color:black; background-color:transparent; text-decoration:none; color:white;" class="w3-dropdown-hover nnn">
								<a style="text-decoration:none; color:white; cursor:pointer;"  class="nn">
							<center>
							<?php


							if($q>0){ echo "<x>".$q."</x>"; }else{ echo "<w>".$q."</w>"; }
							if($na>0){ echo "<z>+</z>"."<y>".$na."</y>"; }
										echo "<z>/".$tt."</z>";


								?>
							</a>
							<div style="text-decoration:none; cursor:pointer; margin-left:-30px; color:white; border:2px solid black; font-size:14px; max-height:400px; overflow-y:auto;" class="w3-dropdown-content w3-bar-block w3-border">
								<a style="text-decoration:none; color:black;" class="w3-bar-item w3-button hovered" title="The institution has a well defined policy for promotion of research and the same is uploaded on the institutional website">3.1.1 => <?php $temp = $a1; if($temp>0) echo "<x>".$temp."</x>"; else echo "<w>".$temp."</w>"; ?></a>
								<a style="text-decoration:none; color:black;" class="w3-bar-item w3-button hovered" title="The institution provides seed money to its teachers for research (average per year) (INR in Lakhs)">3.1.2 => <?php $temp = $a2; if($temp>0) echo "<x>".$temp."</x>"; else echo "<w>".$temp."</w>"; ?></a>
								<a style="text-decoration:none; color:black;" class="w3-bar-item w3-button hovered" title="Number of teachers awarded international fellowship for advanced studies/ research during the last five years">3.1.3 => <?php $temp = $a3; if($temp>0) echo "<x>".$temp."</x>"; else echo "<w>".$temp."</w>"; ?></a>
								<a style="text-decoration:none; color:black;" class="w3-bar-item w3-button hovered" title="Number of JRFs, SRFs, Post Doctoral Fellows, Research Associates and other research fellows in the University enrolled during the last five years">3.1.4 => <?php $temp = $a4; if($temp>0) echo "<x>".$temp."</x>"; else echo "<w>".$temp."</w>"; ?></a>
								<a style="text-decoration:none; color:black;" class="w3-bar-item w3-button hovered" title="University has the following facilities">3.1.5 => <?php $temp = $a5; if($temp>0) echo "<x>".$temp."</x>"; else echo "<w>".$temp."</w>"; ?></a>
								<a style="text-decoration:none; color:black;" class="w3-bar-item w3-button hovered" title="Percentage of departments with UGC-SAP, CAS, DST-FIST ,DBT,ICSSR and other similar recognitions by government agency (Current Year Data)">3.1.6 => <?php $temp = $a6; if($temp>0) echo "<x>".$temp."</x>"; else echo "<w>".$temp."</w>"; ?></a>
								<a style="text-decoration:none; color:black;" class="w3-bar-item w3-button hovered" title="Grants for research projects sponsored by the non-government sources such as industry, corporate houses, international bodies, endowments, Chairs in the institution during the last five years and Grants for research projects sponsored by the government sources during the last five years (Amount in Rupees)">3.2.2 => <?php $temp = $a7; if($temp>0) echo "<x>".$temp."</x>"; else echo "<w>".$temp."</w>"; ?></a>
								<a style="text-decoration:none; color:black;" class="w3-bar-item w3-button hovered" title="Average number of research projects per teacher funded by government and non-government agencies during the last five years">3.2.3 => <?php $temp = $a8; if($temp>0) echo "<x>".$temp."</x>"; else echo "<w>".$temp."</w>"; ?></a>
								<a style="text-decoration:none; color:black;" class="w3-bar-item w3-button hovered" title="Institution has created an eco system for innovations including Incubation centre and other initiatives for creation and transfer of knowledge">3.3.1 => <?php $temp = $a9; if($temp>0) echo "<x>".$temp."</x>"; else echo "<w>".$temp."</w>"; ?></a>
								<a style="text-decoration:none; color:black;" class="w3-bar-item w3-button hovered" title="Number of workshops/seminars conducted on Intellectual Property Rights (IPR) and Industry-Academia Innovative practices during the last five years">3.3.2 => <?php $temp = $a10; if($temp>0) echo "<x>".$temp."</x>"; else echo "<w>".$temp."</w>"; ?></a>
								<a style="text-decoration:none; color:black;" class="w3-bar-item w3-button hovered" title="Number of awards for innovation won by institution/teachers/research scholars/students during the last five years">3.3.3 => <?php $temp = $a11; if($temp>0) echo "<x>".$temp."</x>"; else echo "<w>".$temp."</w>"; ?></a>
								<a style="text-decoration:none; color:black;" class="w3-bar-item w3-button hovered" title="Number of start-ups incubated on campus during the last five years">3.3.4 => <?php $temp = $a12; if($temp>0) echo "<x>".$temp."</x>"; else echo "<w>".$temp."</w>"; ?></a>
								<a style="text-decoration:none; color:black;" class="w3-bar-item w3-button hovered" title="The institution has a stated Code of Ethics to check malpractices and plagiarism in Research (Yes/No)">3.4.1 => <?php $temp = $a13; if($temp>0) echo "<x>".$temp."</x>"; else echo "<w>".$temp."</w>"; ?></a>
								<a style="text-decoration:none; color:black;" class="w3-bar-item w3-button hovered" title="The institution provides incentives to teachers who receive state, national and international recognition/awards (Yes/No)">3.4.2 => <?php $temp = $a14; if($temp>0) echo "<x>".$temp."</x>"; else echo "<w>".$temp."</w>"; ?></a>
								<a style="text-decoration:none; color:black;" class="w3-bar-item w3-button hovered" title="Number of Patents published/awarded during the last five years">3.4.3 => <?php $temp = $a15; if($temp>0) echo "<x>".$temp."</x>"; else echo "<w>".$temp."</w>"; ?></a>
								<a style="text-decoration:none; color:black;" class="w3-bar-item w3-button hovered" title="Number of Ph.D.s awarded per teacher during the last five years">3.4.4 => <?php $temp = $a16; if($temp>0) echo "<x>".$temp."</x>"; else echo "<w>".$temp."</w>"; ?></a>
								<a style="text-decoration:none; color:black;" class="w3-bar-item w3-button hovered" title="Number of research papers per teacher in the Journals notified on UGC website during the last five years">3.4.5 => <?php $temp = $a17; if($temp>0) echo "<x>".$temp."</x>"; else echo "<w>".$temp."</w>"; ?></a>
								<a style="text-decoration:none; color:black;" class="w3-bar-item w3-button hovered" title="Number of books and chapters in edited volumes / books published, and papers in national/international conference-proceedings per teacher during the last five years">3.4.6 => <?php $temp = $a18; if($temp>0) echo "<x>".$temp."</x>"; else echo "<w>".$temp."</w>"; ?></a>
								<a style="text-decoration:none; color:black;" class="w3-bar-item w3-button hovered" title="Number of papers in national/international conferences per teacher during the last five years">3.4.6(b) => <?php $temp = $a18b; if($temp>0) echo "<x>".$temp."</x>"; else echo "<w>".$temp."</w>"; ?></a>
								<a style="text-decoration:none; color:black;" class="w3-bar-item w3-button hovered" title="Number of papers in national/international conferences per teacher during the last five years">3.4.6(c) => <?php $temp = $a18c; if($temp>0) echo "<x>".$temp."</x>"; else echo "<w>".$temp."</w>"; ?></a>
								<a style="text-decoration:none; color:black;" class="w3-bar-item w3-button hovered" title="BiblioMetrics of the publications during the last five years based on average citation index in Scopus/ Web of Science or PubMed/ Indian Citation Index">3.4.7 => <?php $temp = $a19; if($temp>0) echo "<x>".$temp."</x>"; else echo "<w>".$temp."</w>"; ?></a>
								<a style="text-decoration:none; color:black;" class="w3-bar-item w3-button hovered" title="BiblioMetricss of the publications during the last five years based on Scopus/ Web of Science â€“ h-index of the University">3.4.8 => <?php $temp = $a20; if($temp>0) echo "<x>".$temp."</x>"; else echo "<w>".$temp."</w>"; ?></a>
								<a style="text-decoration:none; color:black;" class="w3-bar-item w3-button hovered" title="Institution has a policy on consultancy including revenue sharing between the institution and the individual (yes/No)">3.5.1 => <?php $temp = $a21; if($temp>0) echo "<x>".$temp."</x>"; else echo "<w>".$temp."</w>"; ?></a>
								<a style="text-decoration:none; color:black;" class="w3-bar-item w3-button hovered" title="Revenue generated from consultancy during the last five years">3.5.2 => <?php $temp = $a22; if($temp>0) echo "<x>".$temp."</x>"; else echo "<w>".$temp."</w>"; ?></a>
								<a style="text-decoration:none; color:black;" class="w3-bar-item w3-button hovered" title="Revenue generated from corporate training by the institution during the last five years">3.5.3 => <?php $temp = $a23; if($temp>0) echo "<x>".$temp."</x>"; else echo "<w>".$temp."</w>"; ?></a>
								<a style="text-decoration:none; color:black;" class="w3-bar-item w3-button hovered" title="Extension activities in the neighbourhood community in terms of impact and sensitising students to social issues and holistic development during the last five years">3.6.1 => <?php $temp = $a24; if($temp>0) echo "<x>".$temp."</x>"; else echo "<w>".$temp."</w>"; ?></a>
								<a style="text-decoration:none; color:black;" class="w3-bar-item w3-button hovered" title="Number of awards and recognition received for extension activities from Government /recognised bodies during the last five years">3.6.2 => <?php $temp = $a25; if($temp>0) echo "<x>".$temp."</x>"; else echo "<w>".$temp."</w>"; ?></a>
								<a style="text-decoration:none; color:black;" class="w3-bar-item w3-button hovered" title="Number of extension and outreach programs conducted in collaboration with industry, community and Non- Government Organisations through NSS/NCC/Red cross/YRC etc., during the last five years">3.6.3 => <?php $temp = $a26; if($temp>0) echo "<x>".$temp."</x>"; else echo "<w>".$temp."</w>"; ?></a>
								<a style="text-decoration:none; color:black;" class="w3-bar-item w3-button hovered" title="Average percentage of students participating in extension activities with Government Organisations, Non-Government Organisations and programs such as Swachh Bharat, Aids Awareness, Gender Issue, etc. during the last five years">3.6.4 => <?php $temp = $a27; if($temp>0) echo "<x>".$temp."</x>"; else echo "<w>".$temp."</w>"; ?></a>
								<a style="text-decoration:none; color:black;" class="w3-bar-item w3-button hovered" title="Number of Collaborative activities for research, faculty exchange, student exchange per year">3.7.1 => <?php $temp = $a28; if($temp>0) echo "<x>".$temp."</x>"; else echo "<w>".$temp."</w>"; ?></a>
								<a style="text-decoration:none; color:black;" class="w3-bar-item w3-button hovered" title="Number of linkages with institutions/industries for internship, on-the-job training, project work, sharing of research facilities etc. during the last five years">3.7.2 => <?php $temp = $a29; if($temp>0) echo "<x>".$temp."</x>"; else echo "<w>".$temp."</w>"; ?></a>
								<a style="text-decoration:none; color:black;" class="w3-bar-item w3-button hovered" title="Number of functional MoUs with institutions of national, international importance, other universities, industries, corporate houses etc. during the last five years (only functional MoUs with ongoing activities to be considered)">3.7.3 => <?php $temp = $a30; if($temp>0) echo "<x>".$temp."</x>"; else echo "<w>".$temp."</w>"; ?></a>
							</div>
							</center>
							</div>

							<?php



/*
							if($q>0){ echo "<x>".$q."</x>"; }else{ echo "<w>".$q."</w>"; }
							if($na>0){ echo "<z>+</z>"."<y>".$na."</y>"; }
										echo "<z>/".$tt."</z>";
*/


/*
										if($q==$tt){
											echo ' class="complete"> '.$q.'/';
										}else if($q>0){
											echo ' class="partial"> '.$q.'/';
										}else{
											echo ' class="blank"> '.$q.'/';
										}

										echo $tt;
*/
              //      echo $q."/30";

                ?>
            </td>
            <td
                <?php

                    $c1 = "select distinct * from t4_1_1 where Username LIKE '".$row['username']."'";
                    $c2 = "select distinct * from t4_1_2 where Username LIKE '".$row['username']."'";
                    $c3 = "select distinct * from t4_1_3 where Username LIKE '".$row['username']."'";
                    $c4 = "select distinct * from t4_2_4 where Username LIKE '".$row['username']."'";
                    $c5 = "select distinct * from t4_2_1 where Username LIKE '".$row['username']."'";
                    $c6 = "select distinct * from t4_2_2 where Username LIKE '".$row['username']."'";
                    $c7 = "select distinct * from t4_2_3 where Username LIKE '".$row['username']."'";
                    $c8 = "select distinct * from t4_2_4 where Username LIKE '".$row['username']."'";
                    $c9 = "select distinct * from t4_2_5 where Username LIKE '".$row['username']."'";
                    $c10= "select distinct * from t4_2_6 where Username LIKE '".$row['username']."'";
                    $c11= "select distinct * from t4_2_7 where Username LIKE '".$row['username']."'";
                    $c12= "select distinct * from t4_3_1 where Username LIKE '".$row['username']."'";
                    $c13= "select distinct * from t4_3_2 where Username LIKE '".$row['username']."'";
                    $c14= "select distinct * from t4_3_3 where Username LIKE '".$row['username']."'";
                    $c15= "select distinct * from t4_3_4 where Username LIKE '".$row['username']."'";
                    $c16= "select distinct * from t4_4_1 where Username LIKE '".$row['username']."'";
                    $c17= "select distinct * from t4_4_2 where Username LIKE '".$row['username']."'";

                    $r1 = mysqli_query($connection,$c1);
                    $r2 = mysqli_query($connection,$c2);
                    $r3 = mysqli_query($connection,$c3);
                    $r4 = mysqli_query($connection,$c4);
                    $r5 = mysqli_query($connection,$c5);
                    $r6 = mysqli_query($connection,$c6);
                    $r7 = mysqli_query($connection,$c7);
                    $r8 = mysqli_query($connection,$c8);
                    $r9 = mysqli_query($connection,$c9);
                    $r10= mysqli_query($connection,$c10);
                    $r11 = mysqli_query($connection,$c11);
                    $r12 = mysqli_query($connection,$c12);
                    $r13 = mysqli_query($connection,$c13);
                    $r14 = mysqli_query($connection,$c14);
                    $r15 = mysqli_query($connection,$c15);
                    $r16 = mysqli_query($connection,$c16);
                    $r17 = mysqli_query($connection,$c17);

                    $a1 = mysqli_num_rows($r1);
                    $a2 = mysqli_num_rows($r2);
                    $a3 = mysqli_num_rows($r3);
                    $a4 = mysqli_num_rows($r4);
                    $a5 = mysqli_num_rows($r5);
                    $a6 = mysqli_num_rows($r6);
                    $a7 = mysqli_num_rows($r7);
                    $a8 = mysqli_num_rows($r8);
                    $a9 = mysqli_num_rows($r9);
                    $a10= mysqli_num_rows($r10);
                    $a11 = mysqli_num_rows($r11);
                    $a12 = mysqli_num_rows($r12);
                    $a13 = mysqli_num_rows($r13);
                    $a14 = mysqli_num_rows($r14);
                    $a15 = mysqli_num_rows($r15);
                    $a16 = mysqli_num_rows($r16);
                    $a17 = mysqli_num_rows($r17);

                    $q=0;

                    if($a1>=1){
                        $q++;
                    }
                    if($a2>=1){
                        $q++;
                    }
                    if($a3>=1){
                        $q++;
                    }
                    if($a4>=1){
                        $q++;
                    }
                    if($a5>=1){
                        $q++;
                    }
                    if($a6>=1){
                        $q++;
                    }
                    if($a7>=1){
                        $q++;
                    }
                    if($a8>=1){
                        $q++;
                    }
                    if($a9>=1){
                        $q++;
                    }
                    if($a10>=1){
                        $q++;
                    }
                    if($a11>=1){
                        $q++;
                    }
                    if($a12>=1){
                        $q++;
                    }
                    if($a13>=1){
                        $q++;
                    }
                    if($a14>=1){
                        $q++;
                    }
                    if($a15>=1){
                        $q++;
                    }
                    if($a16>=1){
                        $q++;
                    }
                    if($a17>=1){
                        $q++;
                    }

										$tt = 17;

										$prog_na = "select count(*) AS total_na FROM not_applicable WHERE Username LIKE '".$row['username']."' AND section LIKE 't4%' ";
										$res_na  = mysqli_query($connection,$prog_na) or die(mysqli_error($connection));

										while ($row_na = $res_na->fetch_assoc()) {
											$na = $row_na['total_na'];
										}

							if($q+$na>=$tt){
								echo ' class="complete"> ';
							}else if($q+$na>0){
								echo ' class="partial"> ';
							}else{
								echo ' class="blank"> ';
							}


														?>

														<div  style=" color:black; background-color:transparent; text-decoration:none; color:white;" class="w3-dropdown-hover nnn">
															<a style="text-decoration:none; color:white; cursor:pointer;"  class="nn">
														<center>
														<?php


														if($q>0){ echo "<x>".$q."</x>"; }else{ echo "<w>".$q."</w>"; }
														if($na>0){ echo "<z>+</z>"."<y>".$na."</y>"; }
																	echo "<z>/".$tt."</z>";


															?>
														</a>
														<div style="text-decoration:none; cursor:pointer; margin-left:-30px; color:white; border:2px solid black; font-size:14px; max-height:400px; overflow-y:auto;" class="w3-dropdown-content w3-bar-block w3-border">
															<a style="text-decoration:none; color:black;" class="w3-bar-item w3-button hovered" title="The institution has adequate facilities for teaching - learning. viz., classrooms, laboratories, computing equipment, etc ">4.1.1 => <?php $temp = $a1; if($temp>0) echo "<x>".$temp."</x>"; else echo "<w>".$temp."</w>"; ?></a>
															<a style="text-decoration:none; color:black;" class="w3-bar-item w3-button hovered" title="The institution has adequate facilities for sports, games (indoor, outdoor, gymnasium, yoga centre etc.,) and cultural activities ">4.1.2 => <?php $temp = $a2; if($temp>0) echo "<x>".$temp."</x>"; else echo "<w>".$temp."</w>"; ?></a>
															<a style="text-decoration:none; color:black;" class="w3-bar-item w3-button hovered" title="Percentage of classrooms and seminar halls with ICT - enabled facilities such as smart class, LMS, etc. (current Year Data)">4.1.3 => <?php $temp = $a3; if($temp>0) echo "<x>".$temp."</x>"; else echo "<w>".$temp."</w>"; ?></a>
															<a style="text-decoration:none; color:black;" class="w3-bar-item w3-button hovered" title="Average percentage of budget allocation, excluding salary for infrastructure augmentation during the last five years (INR)">4.1.4 => <?php $temp = $a4; if($temp>0) echo "<x>".$temp."</x>"; else echo "<w>".$temp."</w>"; ?></a>
															<a style="text-decoration:none; color:black;" class="w3-bar-item w3-button hovered" title="Library is automated using Integrated Library Management System (ILMS)">4.2.1 => <?php $temp = $a5; if($temp>0) echo "<x>".$temp."</x>"; else echo "<w>".$temp."</w>"; ?></a>
															<a style="text-decoration:none; color:black;" class="w3-bar-item w3-button hovered" title="Collection of rare books, manuscripts, special reports or any other knowledge resource for library enrichment">4.2.2 => <?php $temp = $a6; if($temp>0) echo "<x>".$temp."</x>"; else echo "<w>".$temp."</w>"; ?></a>
															<a style="text-decoration:none; color:black;" class="w3-bar-item w3-button hovered" title="Does the institution have the following: 1. e â€“ journals  2. e-ShodhSindhu  3. Shodhganga membership  4. e-books 5. Databases ">4.2.3 => <?php $temp = $a7; if($temp>0) echo "<x>".$temp."</x>"; else echo "<w>".$temp."</w>"; ?></a>
															<a style="text-decoration:none; color:black;" class="w3-bar-item w3-button hovered" title="Average annual expenditure for purchase of books and journals during the last five years">4.2.4 => <?php $temp = $a8; if($temp>0) echo "<x>".$temp."</x>"; else echo "<w>".$temp."</w>"; ?></a>
															<a style="text-decoration:none; color:black;" class="w3-bar-item w3-button hovered" title="Availability of remote access to e-resources of the library">4.2.5 => <?php $temp = $a9; if($temp>0) echo "<x>".$temp."</x>"; else echo "<w>".$temp."</w>"; ?></a>
															<a style="text-decoration:none; color:black;" class="w3-bar-item w3-button hovered" title="Percentage per day usage of library by teachers and students">4.2.6 => <?php $temp = $a10; if($temp>0) echo "<x>".$temp."</x>"; else echo "<w>".$temp."</w>"; ?></a>
															<a style="text-decoration:none; color:black;" class="w3-bar-item w3-button hovered" title="E-content is developed by teachers">4.2.7 => <?php $temp = $a11; if($temp>0) echo "<x>".$temp."</x>"; else echo "<w>".$temp."</w>"; ?></a>
															<a style="text-decoration:none; color:black;" class="w3-bar-item w3-button hovered" title="Institution frequently updates its IT facilities including Wi-Fi">4.3.1 => <?php $temp = $a12; if($temp>0) echo "<x>".$temp."</x>"; else echo "<w>".$temp."</w>"; ?></a>
															<a style="text-decoration:none; color:black;" class="w3-bar-item w3-button hovered" title="Student - Computer ratio (current year data)">4.3.2 => <?php $temp = $a13; if($temp>0) echo "<x>".$temp."</x>"; else echo "<w>".$temp."</w>"; ?></a>
															<a style="text-decoration:none; color:black;" class="w3-bar-item w3-button hovered" title="Available bandwidth of internet connection in the Institution (Leased line)">4.3.3 => <?php $temp = $a14; if($temp>0) echo "<x>".$temp."</x>"; else echo "<w>".$temp."</w>"; ?></a>
															<a style="text-decoration:none; color:black;" class="w3-bar-item w3-button hovered" title="Facilities for e-content development such as Media centre, Recording facility, Lecture Capturing System(LCS)">4.3.4 => <?php $temp = $a15; if($temp>0) echo "<x>".$temp."</x>"; else echo "<w>".$temp."</w>"; ?></a>
															<a style="text-decoration:none; color:black;" class="w3-bar-item w3-button hovered" title="Average expenditure incurred on maintenance of physical facilities and academic support facilities excluding salary component, as a percentage during the last five years">4.4.1 => <?php $temp = $a16; if($temp>0) echo "<x>".$temp."</x>"; else echo "<w>".$temp."</w>"; ?></a>
															<a style="text-decoration:none; color:black;" class="w3-bar-item w3-button hovered" title="There are established systems and procedures for maintaining and utilizing physical, academic and support facilities - laboratory, library,sports complex, computers, classrooms etc.">4.4.2 => <?php $temp = $a17; if($temp>0) echo "<x>".$temp."</x>"; else echo "<w>".$temp."</w>"; ?></a>
														</div>
														</center>
														</div>

														<?php



/*
										if($q==$tt){
											echo ' class="complete"> '.$q.'/';
										}else if($q>0){
											echo ' class="partial"> '.$q.'/';
										}else{
											echo ' class="blank"> '.$q.'/';
										}

										echo $tt;
*/
              //      echo $q."/17";

                ?>
            </td>
                        <td
                <?php

                    $c1 = "select distinct * from t5_1_1 where Username LIKE '".$row['username']."'";
                    $c2 = "select distinct * from t5_1_2 where Username LIKE '".$row['username']."'";
                    $c3 = "select distinct * from t5_1_3 where Username LIKE '".$row['username']."'";
                    $c4 = "select distinct * from t5_1_4 where Username LIKE '".$row['username']."'";
                    $c5 = "select distinct * from t5_1_5 where Username LIKE '".$row['username']."'";
                    $c6 = "select distinct * from t5_1_6 where Username LIKE '".$row['username']."'";
                    $c7 = "select distinct * from t5_2_1 where Username LIKE '".$row['username']."'";
                    $c8 = "select distinct * from t5_2_2 where Username LIKE '".$row['username']."'";
                    $c9 = "select distinct * from t5_2_3 where Username LIKE '".$row['username']."'";
                    $c10= "select distinct * from t5_3_1 where Username LIKE '".$row['username']."'";
                    $c11= "select distinct * from t5_3_2 where Username LIKE '".$row['username']."'";
										$c12= "select distinct * from t5_3_3 where Username LIKE '".$row['username']."'";
                    $c13= "select distinct * from t5_4_1 where Username LIKE '".$row['username']."'";
                    $c14= "select distinct * from t5_4_2 where Username LIKE '".$row['username']."'";
                    $c15= "select distinct * from t5_4_3 where Username LIKE '".$row['username']."'";

                    $r1 = mysqli_query($connection,$c1);
                    $r2 = mysqli_query($connection,$c2);
                    $r3 = mysqli_query($connection,$c3);
                    $r4 = mysqli_query($connection,$c4);
                    $r5 = mysqli_query($connection,$c5);
                    $r6 = mysqli_query($connection,$c6);
                    $r7 = mysqli_query($connection,$c7);
                    $r8 = mysqli_query($connection,$c8);
                    $r9 = mysqli_query($connection,$c9);
                    $r10= mysqli_query($connection,$c10);
                    $r11 = mysqli_query($connection,$c11);
                    $r12 = mysqli_query($connection,$c12);
                    $r13 = mysqli_query($connection,$c13);
                    $r14 = mysqli_query($connection,$c14);
										$r15 = mysqli_query($connection,$c15);

                    $a1 = mysqli_num_rows($r1);
                    $a2 = mysqli_num_rows($r2);
                    $a3 = mysqli_num_rows($r3);
                    $a4 = mysqli_num_rows($r4);
                    $a5 = mysqli_num_rows($r5);
                    $a6 = mysqli_num_rows($r6);
                    $a7 = mysqli_num_rows($r7);
                    $a8 = mysqli_num_rows($r8);
                    $a9 = mysqli_num_rows($r9);
                    $a10= mysqli_num_rows($r10);
                    $a11 = mysqli_num_rows($r11);
                    $a12 = mysqli_num_rows($r12);
                    $a13 = mysqli_num_rows($r13);
                    $a14 = mysqli_num_rows($r14);
										$a15 = mysqli_num_rows($r15);

                    $q=0;

                    if($a1>=1){
                        $q++;
                    }
                    if($a2>=1){
                        $q++;
                    }
                    if($a3>=1){
                        $q++;
                    }
                    if($a4>=1){
                        $q++;
                    }
                    if($a5>=1){
                        $q++;
                    }
                    if($a6>=1){
                        $q++;
                    }
                    if($a7>=1){
                        $q++;
                    }
                    if($a8>=1){
                        $q++;
                    }
                    if($a9>=1){
                        $q++;
                    }
                    if($a10>=1){
                        $q++;
                    }
                    if($a11>=1){
                        $q++;
                    }
                    if($a12>=1){
                        $q++;
                    }
                    if($a13>=1){
                        $q++;
                    }
                    if($a14>=1){
                        $q++;
                    }
										if($a15>=1){
                        $q++;
                    }

										$tt = 15;

										$prog_na = "select count(*) AS total_na FROM not_applicable WHERE Username LIKE '".$row['username']."' AND section LIKE 't5%' ";
										$res_na  = mysqli_query($connection,$prog_na) or die(mysqli_error($connection));

										while ($row_na = $res_na->fetch_assoc()) {
											$na = $row_na['total_na'];
										}

							if($q+$na>=$tt){
								echo ' class="complete"> ';
							}else if($q+$na>0){
								echo ' class="partial"> ';
							}else{
								echo ' class="blank"> ';
							}

							?>

							<div  style=" color:black; background-color:transparent; text-decoration:none; color:white;" class="w3-dropdown-hover nnn">
								<a style="text-decoration:none; color:white; cursor:pointer;"  class="nn">
							<center>
							<?php


							if($q>0){ echo "<x>".$q."</x>"; }else{ echo "<w>".$q."</w>"; }
							if($na>0){ echo "<z>+</z>"."<y>".$na."</y>"; }
										echo "<z>/".$tt."</z>";


								?>
							</a>
							<div style="text-decoration:none; cursor:pointer; margin-left:-30px; color:white; border:2px solid black; font-size:14px; max-height:400px; overflow-y:auto;" class="w3-dropdown-content w3-bar-block w3-border">
								<a style="text-decoration:none; color:black;" class="w3-bar-item w3-button hovered" title="Average percentage of students benefited by scholarships and freeships provided by the Government during the last five years">5.1.1 => <?php $temp = $a1; if($temp>0) echo "<x>".$temp."</x>"; else echo "<w>".$temp."</w>"; ?></a>
								<a style="text-decoration:none; color:black;" class="w3-bar-item w3-button hovered" title="Average percentage of students benefited by scholarships, freeships, etc. provided by the institution besides government schemes during the last five years">5.1.2 => <?php $temp = $a2; if($temp>0) echo "<x>".$temp."</x>"; else echo "<w>".$temp."</w>"; ?></a>
								<a style="text-decoration:none; color:black;" class="w3-bar-item w3-button hovered" title="Number of capability enhancement and development schemes">5.1.3 => <?php $temp = $a3; if($temp>0) echo "<x>".$temp."</x>"; else echo "<w>".$temp."</w>"; ?></a>
								<a style="text-decoration:none; color:black;" class="w3-bar-item w3-button hovered" title="Average percentage of students benefited by guidance for competitive examinations and career counselling offered by the institution during the last five years ">5.1.4 => <?php $temp = $a4; if($temp>0) echo "<x>".$temp."</x>"; else echo "<w>".$temp."</w>"; ?></a>
								<a style="text-decoration:none; color:black;" class="w3-bar-item w3-button hovered" title="The institution has an active international students cell to cater to the requirements of foreign students ">5.1.5 => <?php $temp = $a5; if($temp>0) echo "<x>".$temp."</x>"; else echo "<w>".$temp."</w>"; ?></a>
								<a style="text-decoration:none; color:black;" class="w3-bar-item w3-button hovered" title="The institution has a transparent mechanism for timely redressal of student grievances including sexual harassment and ragging cases">5.1.6 => <?php $temp = $a6; if($temp>0) echo "<x>".$temp."</x>"; else echo "<w>".$temp."</w>"; ?></a>
								<a style="text-decoration:none; color:black;" class="w3-bar-item w3-button hovered" title="Average percentage of placement of outgoing students during the last five years">5.2.1 => <?php $temp = $a7; if($temp>0) echo "<x>".$temp."</x>"; else echo "<w>".$temp."</w>"; ?></a>
								<a style="text-decoration:none; color:black;" class="w3-bar-item w3-button hovered" title="Percentage of student progression to higher education (previous graduating batch)(current year data)">5.2.2 => <?php $temp = $a8; if($temp>0) echo "<x>".$temp."</x>"; else echo "<w>".$temp."</w>"; ?></a>
								<a style="text-decoration:none; color:black;" class="w3-bar-item w3-button hovered" title="Average percentage of students qualifying in state/ national/ international level examinations during the last five years">5.2.3 => <?php $temp = $a9; if($temp>0) echo "<x>".$temp."</x>"; else echo "<w>".$temp."</w>"; ?></a>
								<a style="text-decoration:none; color:black;" class="w3-bar-item w3-button hovered" title="Number of awards/medals for outstanding performance in sports/cultural activities at national/international level (award for a team event should be counted as one) during the last five years">5.3.1 => <?php $temp = $a10; if($temp>0) echo "<x>".$temp."</x>"; else echo "<w>".$temp."</w>"; ?></a>
								<a style="text-decoration:none; color:black;" class="w3-bar-item w3-button hovered" title="Presence of an active Student Council & representation of students on academic & administrative bodies/committees of the institution">5.3.2 => <?php $temp = $a11; if($temp>0) echo "<x>".$temp."</x>"; else echo "<w>".$temp."</w>"; ?></a>
								<a style="text-decoration:none; color:black;" class="w3-bar-item w3-button hovered" title="Average number of sports and cultural activities / competitions organised at the institution level per year ">5.3.3 => <?php $temp = $a12; if($temp>0) echo "<x>".$temp."</x>"; else echo "<w>".$temp."</w>"; ?></a>
								<a style="text-decoration:none; color:black;" class="w3-bar-item w3-button hovered" title="The Alumni Association/Chapters (registered and functional) contributes significantly to the development of the institution through financial and non financial means during the last five years">5.4.1 => <?php $temp = $a13; if($temp>0) echo "<x>".$temp."</x>"; else echo "<w>".$temp."</w>"; ?></a>
								<a style="text-decoration:none; color:black;" class="w3-bar-item w3-button hovered" title="Alumni contribution during the last five years">5.4.2 => <?php $temp = $a14; if($temp>0) echo "<x>".$temp."</x>"; else echo "<w>".$temp."</w>"; ?></a>
								<a style="text-decoration:none; color:black;" class="w3-bar-item w3-button hovered" title="Number of Alumni Association /Chapters meetings held during the last five years">5.4.3 => <?php $temp = $a15; if($temp>0) echo "<x>".$temp."</x>"; else echo "<w>".$temp."</w>"; ?></a>
							</div>
							</center>
							</div>

							<?php


/*
										if($q==$tt){
											echo ' class="complete"> '.$q.'/';
										}else if($q>0){
											echo ' class="partial"> '.$q.'/';
										}else{
											echo ' class="blank" > '.$q.'/';
										}

										echo $tt;
*/


//                    echo $q."/14";

                ?>
            </td>
                        <td
                <?php

                    $c1 = "select distinct * from t6_1_1 where Username LIKE '".$row['username']."'";
                    $c2 = "select distinct * from t6_1_2 where Username LIKE '".$row['username']."'";
                    $c3 = "select distinct * from t6_2_1 where Username LIKE '".$row['username']."'";
                    $c4 = "select distinct * from t6_2_2 where Username LIKE '".$row['username']."'";
                    $c5 = "select distinct * from t6_2_3 where Username LIKE '".$row['username']."'";
                    $c6 = "select distinct * from t6_2_4 where Username LIKE '".$row['username']."'";
                    $c7 = "select distinct * from t6_3_1 where Username LIKE '".$row['username']."'";
                    $c8 = "select distinct * from t6_3_2 where Username LIKE '".$row['username']."'";
                    $c9 = "select distinct * from t6_3_3_1 where Username LIKE '".$row['username']."'";
										$c9b = "select distinct * from t6_3_3_2 where Username LIKE '".$row['username']."'";
                    $c10= "select distinct * from t6_3_4 where Username LIKE '".$row['username']."'";
                    $c11= "select distinct * from t6_3_5 where Username LIKE '".$row['username']."'";
                    $c12= "select distinct * from t6_4_1 where Username LIKE '".$row['username']."'";
                    $c13= "select distinct * from t6_4_2 where Username LIKE '".$row['username']."'";
                    $c14= "select distinct * from t6_4_3 where Username LIKE '".$row['username']."'";
                    $c15= "select distinct * from t6_5_1 where Username LIKE '".$row['username']."'";
                    $c16= "select distinct * from t6_5_2 where Username LIKE '".$row['username']."'";
                    $c17= "select distinct * from t6_5_3 where Username LIKE '".$row['username']."'";
                    $c18= "select distinct * from t6_5_4 where Username LIKE '".$row['username']."'";
                    $c19= "select distinct * from t6_5_5 where Username LIKE '".$row['username']."'";

                    $r1 = mysqli_query($connection,$c1);
                    $r2 = mysqli_query($connection,$c2);
                    $r3 = mysqli_query($connection,$c3);
                    $r4 = mysqli_query($connection,$c4);
                    $r5 = mysqli_query($connection,$c5);
                    $r6 = mysqli_query($connection,$c6);
                    $r7 = mysqli_query($connection,$c7);
                    $r8 = mysqli_query($connection,$c8);
                    $r9 = mysqli_query($connection,$c9);
										$r9b = mysqli_query($connection,$c9b);
                    $r10= mysqli_query($connection,$c10);
                    $r11 = mysqli_query($connection,$c11);
                    $r12 = mysqli_query($connection,$c12);
                    $r13 = mysqli_query($connection,$c13);
                    $r14 = mysqli_query($connection,$c14);
                    $r15= mysqli_query($connection,$c15);
                    $r16 = mysqli_query($connection,$c16);
                    $r17 = mysqli_query($connection,$c17);
                    $r18 = mysqli_query($connection,$c18);
                    $r19 = mysqli_query($connection,$c19);

                    $a1 = mysqli_num_rows($r1);
                    $a2 = mysqli_num_rows($r2);
                    $a3 = mysqli_num_rows($r3);
                    $a4 = mysqli_num_rows($r4);
                    $a5 = mysqli_num_rows($r5);
                    $a6 = mysqli_num_rows($r6);
                    $a7 = mysqli_num_rows($r7);
                    $a8 = mysqli_num_rows($r8);
                    $a9 = mysqli_num_rows($r9);
										$a9b = mysqli_num_rows($r9b);
                    $a10= mysqli_num_rows($r10);
                    $a11 = mysqli_num_rows($r11);
                    $a12 = mysqli_num_rows($r12);
                    $a13 = mysqli_num_rows($r13);
                    $a14 = mysqli_num_rows($r14);
                    $a15 = mysqli_num_rows($r15);
                    $a16 = mysqli_num_rows($r16);
                    $a17 = mysqli_num_rows($r17);
                    $a18 = mysqli_num_rows($r18);
                    $a19 = mysqli_num_rows($r19);

                    $q=0;

                    if($a1>=1){
                        $q++;
                    }
                    if($a2>=1){
                        $q++;
                    }
                    if($a3>=1){
                        $q++;
                    }
                    if($a4>=1){
                        $q++;
                    }
                    if($a5>=1){
                        $q++;
                    }
                    if($a6>=1){
                        $q++;
                    }
                    if($a7>=1){
                        $q++;
                    }
                    if($a8>=1){
                        $q++;
                    }
										if($a9>=1 || $a9b>=1){
                        $q++;
                    }
                    if($a10>=1){
                        $q++;
                    }
                    if($a11>=1){
                        $q++;
                    }
                    if($a12>=1){
                        $q++;
                    }
                    if($a13>=1){
                        $q++;
                    }
                    if($a14>=1){
                        $q++;
                    }
                    if($a15>=1){
                        $q++;
                    }
                    if($a16>=1){
                        $q++;
                    }
                    if($a17>=1){
                        $q++;
                    }
                    if($a18>=1){
                        $q++;
                    }
                    if($a19>=1){
                        $q++;
                    }

										$tt = 19;

										$prog_na = "select count(*) AS total_na FROM not_applicable WHERE Username LIKE '".$row['username']."' AND section LIKE 't6%' ";
										$res_na  = mysqli_query($connection,$prog_na) or die(mysqli_error($connection));

										while ($row_na = $res_na->fetch_assoc()) {
											$na = $row_na['total_na'];
										}

							if($q+$na>=$tt){
								echo ' class="complete"> ';
							}else if($q+$na>0){
								echo ' class="partial"> ';
							}else{
								echo ' class="blank"> ';
							}

							?>

							<div  style=" color:black; background-color:transparent; text-decoration:none; color:white;" class="w3-dropdown-hover nnn">
								<a style="text-decoration:none; color:white; cursor:pointer;"  class="nn">
							<center>
							<?php


							if($q>0){ echo "<x>".$q."</x>"; }else{ echo "<w>".$q."</w>"; }
							if($na>0){ echo "<z>+</z>"."<y>".$na."</y>"; }
										echo "<z>/".$tt."</z>";


								?>
							</a>
							<div style="text-decoration:none; cursor:pointer; margin-left:-30px; color:white; border:2px solid black; font-size:14px; max-height:400px; overflow-y:auto;" class="w3-dropdown-content w3-bar-block w3-border">
								<a style="text-decoration:none; color:black;" class="w3-bar-item w3-button hovered" title="The governance of the institution is reflective of an effective leadership in tune with the vision and mission of the University">6.1.1 => <?php $temp = $a1; if($temp>0) echo "<x>".$temp."</x>"; else echo "<w>".$temp."</w>"; ?></a>
								<a style="text-decoration:none; color:black;" class="w3-bar-item w3-button hovered" title="The institution practices decentralization and participative management">6.1.2 => <?php $temp = $a2; if($temp>0) echo "<x>".$temp."</x>"; else echo "<w>".$temp."</w>"; ?></a>
								<a style="text-decoration:none; color:black;" class="w3-bar-item w3-button hovered" title="Perspective/Strategic plan and deployment documents are available in the institution">6.2.1 => <?php $temp = $a3; if($temp>0) echo "<x>".$temp."</x>"; else echo "<w>".$temp."</w>"; ?></a>
								<a style="text-decoration:none; color:black;" class="w3-bar-item w3-button hovered" title="Organizational structure of the university including governing body, administrative setup, and functions of various bodies, service rules, procedures, recruitment, promotional policies as well as grievance redressal mechanism">6.2.2 => <?php $temp = $a4; if($temp>0) echo "<x>".$temp."</x>"; else echo "<w>".$temp."</w>"; ?></a>
								<a style="text-decoration:none; color:black;" class="w3-bar-item w3-button hovered" title="Implementation of e-governance in areas of operation">6.2.3 => <?php $temp = $a5; if($temp>0) echo "<x>".$temp."</x>"; else echo "<w>".$temp."</w>"; ?></a>
								<a style="text-decoration:none; color:black;" class="w3-bar-item w3-button hovered" title="Effectiveness of various bodies/cells/committees is evident through minutes of meetings and implementation of their resolutions">6.2.4 => <?php $temp = $a6; if($temp>0) echo "<x>".$temp."</x>"; else echo "<w>".$temp."</w>"; ?></a>
								<a style="text-decoration:none; color:black;" class="w3-bar-item w3-button hovered" title="The institution has effective welfare measures for teaching and nonteaching staff">6.3.1 => <?php $temp = $a7; if($temp>0) echo "<x>".$temp."</x>"; else echo "<w>".$temp."</w>"; ?></a>
								<a style="text-decoration:none; color:black;" class="w3-bar-item w3-button hovered" title="Average percentage of teachers provided with financial support to attend conferences / workshops and towards membership fee of professional bodies during the last five years">6.3.2 => <?php $temp = $a8; if($temp>0) echo "<x>".$temp."</x>"; else echo "<w>".$temp."</w>"; ?></a>
								<a style="text-decoration:none; color:black;" class="w3-bar-item w3-button hovered" title="Average number of professional development / administrative training Programmes organized by the university for teaching and non teaching staff during the last five years">6.3.3 => <?php $temp = $a9+$a9b; if($temp>0) echo "<x>".$a9."+".$a9b."</x>"; else echo "<w>".$a9."+".$a9b."</w>"; ?></a>
								<a style="text-decoration:none; color:black;" class="w3-bar-item w3-button hovered" title="Average percentage of teachers attending professional development Programmes, viz., Orientation Programme, Refresher Course, Short Term Course, Faculty Development Programmes during the last five years">6.3.4 => <?php $temp = $a10; if($temp>0) echo "<x>".$temp."</x>"; else echo "<w>".$temp."</w>"; ?></a>
								<a style="text-decoration:none; color:black;" class="w3-bar-item w3-button hovered" title="Institution has Performance Appraisal System for teaching and nonteaching staff">6.3.5 => <?php $temp = $a11; if($temp>0) echo "<x>".$temp."</x>"; else echo "<w>".$temp."</w>"; ?></a>
								<a style="text-decoration:none; color:black;" class="w3-bar-item w3-button hovered" title="Institution conducts internal and external financial audits regularly">6.4.1 => <?php $temp = $a12; if($temp>0) echo "<x>".$temp."</x>"; else echo "<w>".$temp."</w>"; ?></a>
								<a style="text-decoration:none; color:black;" class="w3-bar-item w3-button hovered" title="Funds / Grants received from non-government bodies, individuals, philanthropers during the last five years (not covered in Criterion III) (INR in Crores)">6.4.2 => <?php $temp = $a13; if($temp>0) echo "<x>".$temp."</x>"; else echo "<w>".$temp."</w>"; ?></a>
								<a style="text-decoration:none; color:black;" class="w3-bar-item w3-button hovered" title="Institutional strategies for mobilisation of funds and the optimal utilisation of resources.">6.4.3 => <?php $temp = $a14; if($temp>0) echo "<x>".$temp."</x>"; else echo "<w>".$temp."</w>"; ?></a>
								<a style="text-decoration:none; color:black;" class="w3-bar-item w3-button hovered" title="Internal Quality Assurance Cell (IQAC) has contributed significantly for institutionalizing the quality assurance strategies and processes. ">6.5.1 => <?php $temp = $a15; if($temp>0) echo "<x>".$temp."</x>"; else echo "<w>".$temp."</w>"; ?></a>
								<a style="text-decoration:none; color:black;" class="w3-bar-item w3-button hovered" title="The institution reviews its teaching learning process, structures & methodologies of operations and learning outcomes at periodic intervals through IQAC set up as per norms">6.5.2 => <?php $temp = $a16; if($temp>0) echo "<x>".$temp."</x>"; else echo "<w>".$temp."</w>"; ?></a>
								<a style="text-decoration:none; color:black;" class="w3-bar-item w3-button hovered" title="Average number of quality initiatives by IQAC for promoting quality culture per year">6.5.3 => <?php $temp = $a17; if($temp>0) echo "<x>".$temp."</x>"; else echo "<w>".$temp."</w>"; ?></a>
								<a style="text-decoration:none; color:black;" class="w3-bar-item w3-button hovered" title="Quality assurance initiatives of the institution include">6.5.4 => <?php $temp = $a18; if($temp>0) echo "<x>".$temp."</x>"; else echo "<w>".$temp."</w>"; ?></a>
								<a style="text-decoration:none; color:black;" class="w3-bar-item w3-button hovered" title="Incremental improvements made during the preceding five years (in case of first cycle)">6.5.5 => <?php $temp = $a19; if($temp>0) echo "<x>".$temp."</x>"; else echo "<w>".$temp."</w>"; ?></a>
							</div>
							</center>
							</div>

							<?php

/*
										if($q==$tt){
											echo ' class="complete"> '.$q.'/';
										}else if($q>0){
											echo ' class="partial"> '.$q.'/';
										}else{
											echo ' class="blank"> '.$q.'/';
										}

										echo $tt;

*/

//                    echo $q."/19";

                ?>
            </td>
                        <td
                <?php

                    $c1 = "select distinct * from t7_1_1 where Username LIKE '".$row['username']."'";
                    $c2 = "select distinct * from t7_1_2 where Username LIKE '".$row['username']."'";
                    $c3 = "select distinct * from t7_1_3 where Username LIKE '".$row['username']."'";
                    $c4 = "select distinct * from t7_1_4 where Username LIKE '".$row['username']."'";
                    $c5 = "select distinct * from t7_1_5 where Username LIKE '".$row['username']."'";
                    $c6 = "select distinct * from t7_1_6 where Username LIKE '".$row['username']."'";
                    $c7 = "select distinct * from t7_1_7 where Username LIKE '".$row['username']."'";
                    $c8 = "select distinct * from t7_1_8 where Username LIKE '".$row['username']."'";
                    $c9 = "select distinct * from t7_1_9 where Username LIKE '".$row['username']."'";
                    $c10= "select distinct * from t7_1_10 where Username LIKE '".$row['username']."'";
                    $c11= "select distinct * from t7_1_11 where Username LIKE '".$row['username']."'";
                    $c12= "select distinct * from t7_1_12 where Username LIKE '".$row['username']."'";
                    $c13= "select distinct * from t7_1_13 where Username LIKE '".$row['username']."'";
                    $c14= "select distinct * from t7_1_14 where Username LIKE '".$row['username']."'";
                    $c15= "select distinct * from t7_1_15 where Username LIKE '".$row['username']."'";
                    $c16= "select distinct * from t7_1_16 where Username LIKE '".$row['username']."'";
                    $c17= "select distinct * from t7_1_17 where Username LIKE '".$row['username']."'";
                    $c18= "select distinct * from t7_1_18 where Username LIKE '".$row['username']."'";
                    $c19= "select distinct * from t7_1_19 where Username LIKE '".$row['username']."'";
                    $c20= "select distinct * from t7_2_1 where Username LIKE '".$row['username']."'";
                    $c21= "select distinct * from t7_3_1 where Username LIKE '".$row['username']."'";

                    $r1 = mysqli_query($connection,$c1);
                    $r2 = mysqli_query($connection,$c2);
                    $r3 = mysqli_query($connection,$c3);
                    $r4 = mysqli_query($connection,$c4);
                    $r5 = mysqli_query($connection,$c5);
                    $r6 = mysqli_query($connection,$c6);
                    $r7 = mysqli_query($connection,$c7);
                    $r8 = mysqli_query($connection,$c8);
                    $r9 = mysqli_query($connection,$c9);
                    $r10= mysqli_query($connection,$c10);
                    $r11 = mysqli_query($connection,$c11);
                    $r12 = mysqli_query($connection,$c12);
                    $r13 = mysqli_query($connection,$c13);
                    $r14 = mysqli_query($connection,$c14);
                    $r15= mysqli_query($connection,$c15);
                    $r16 = mysqli_query($connection,$c16);
                    $r17 = mysqli_query($connection,$c17);
                    $r18 = mysqli_query($connection,$c18);
                    $r19 = mysqli_query($connection,$c19);
                    $r20 = mysqli_query($connection,$c20);
                    $r21 = mysqli_query($connection,$c21);

                    $a1 = mysqli_num_rows($r1);
                    $a2 = mysqli_num_rows($r2);
                    $a3 = mysqli_num_rows($r3);
                    $a4 = mysqli_num_rows($r4);
                    $a5 = mysqli_num_rows($r5);
                    $a6 = mysqli_num_rows($r6);
                    $a7 = mysqli_num_rows($r7);
                    $a8 = mysqli_num_rows($r8);
                    $a9 = mysqli_num_rows($r9);
                    $a10= mysqli_num_rows($r10);
                    $a11 = mysqli_num_rows($r11);
                    $a12 = mysqli_num_rows($r12);
                    $a13 = mysqli_num_rows($r13);
                    $a14 = mysqli_num_rows($r14);
                    $a15 = mysqli_num_rows($r15);
                    $a16 = mysqli_num_rows($r16);
                    $a17 = mysqli_num_rows($r17);
                    $a18 = mysqli_num_rows($r18);
                    $a19 = mysqli_num_rows($r19);
                    $a20 = mysqli_num_rows($r20);
                    $a21 = mysqli_num_rows($r21);

                    $q=0;

                    if($a1>=1){
                        $q++;
                    }
                    if($a2>=1){
                        $q++;
                    }
                    if($a3>=1){
                        $q++;
                    }
                    if($a4>=1){
                        $q++;
                    }
                    if($a5>=1){
                        $q++;
                    }
                    if($a6>=1){
                        $q++;
                    }
                    if($a7>=1){
                        $q++;
                    }
                    if($a8>=1){
                        $q++;
                    }
                    if($a9>=1){
                        $q++;
                    }
										if($a10>=1){
                        $q++;
                    }
                    if($a11>=1){
                        $q++;
                    }
                    if($a12>=1){
                        $q++;
                    }
                    if($a13>=1){
                        $q++;
                    }
                    if($a14>=1){
                        $q++;
                    }
                    if($a15>=1){
                        $q++;
                    }
                    if($a16>=1){
                        $q++;
                    }
                    if($a17>=1){
                        $q++;
                    }
                    if($a18>=1){
                        $q++;
                    }
                    if($a19>=1){
                        $q++;
                    }
                    if($a20>=1){
                        $q++;
                    }
                    if($a21>=1){
                        $q++;
                    }

										$tt = 21;

										$prog_na = "select count(*) AS total_na FROM not_applicable WHERE Username LIKE '".$row['username']."' AND section LIKE 't7%' ";
										$res_na  = mysqli_query($connection,$prog_na) or die(mysqli_error($connection));

										while ($row_na = $res_na->fetch_assoc()) {
											$na = $row_na['total_na'];
										}

							if($q+$na>=$tt){
								echo ' class="complete"> ';
							}else if($q+$na>0){
								echo ' class="partial"> ';
							}else{
								echo ' class="blank"> ';
							}


														?>

														<div  style=" color:black; background-color:transparent; text-decoration:none; color:white;" class="w3-dropdown-hover nnn">
															<a style="text-decoration:none; color:white; cursor:pointer;"  class="nn">
														<center>
														<?php


														if($q>0){ echo "<x>".$q."</x>"; }else{ echo "<w>".$q."</w>"; }
														if($na>0){ echo "<z>+</z>"."<y>".$na."</y>"; }
																	echo "<z>/".$tt."</z>";


															?>
														</a>
														<div style="text-decoration:none; cursor:pointer; margin-left:-30px; color:white; border:2px solid black; font-size:14px; max-height:400px; overflow-y:auto;" class="w3-dropdown-content w3-bar-block w3-border">
															<a style="text-decoration:none; color:black;" class="w3-bar-item w3-button hovered" title="Number of gender equity promotion Programmes organized by the institution during the last five years ">7.1.1 => <?php $temp = $a1; if($temp>0) echo "<x>".$temp."</x>"; else echo "<w>".$temp."</w>"; ?></a>
															<a style="text-decoration:none; color:black;" class="w3-bar-item w3-button hovered" title="Institution shows gender sensitivity in providing facilities such as:">7.1.2 => <?php $temp = $a2; if($temp>0) echo "<x>".$temp."</x>"; else echo "<w>".$temp."</w>"; ?></a>
															<a style="text-decoration:none; color:black;" class="w3-bar-item w3-button hovered" title="Alternate Energy initiatives such as: Percentage of annual power requirement of the Institution met by the renewable energy sources (current year Data in kWh)">7.1.3 => <?php $temp = $a3; if($temp>0) echo "<x>".$temp."</x>"; else echo "<w>".$temp."</w>"; ?></a>
															<a style="text-decoration:none; color:black;" class="w3-bar-item w3-button hovered" title="Annual lighting power requirements met through LED bulbs (current year data) ">7.1.4 => <?php $temp = $a4; if($temp>0) echo "<x>".$temp."</x>"; else echo "<w>".$temp."</w>"; ?></a>
															<a style="text-decoration:none; color:black;" class="w3-bar-item w3-button hovered" title="Waste Management steps including:">7.1.5 => <?php $temp = $a5; if($temp>0) echo "<x>".$temp."</x>"; else echo "<w>".$temp."</w>"; ?></a>
															<a style="text-decoration:none; color:black;" class="w3-bar-item w3-button hovered" title="Rain water harvesting structures and utilization in the campus">7.1.6 => <?php $temp = $a6; if($temp>0) echo "<x>".$temp."</x>"; else echo "<w>".$temp."</w>"; ?></a>
															<a style="text-decoration:none; color:black;" class="w3-bar-item w3-button hovered" title="Green Practices ">7.1.7 => <?php $temp = $a7; if($temp>0) echo "<x>".$temp."</x>"; else echo "<w>".$temp."</w>"; ?></a>
															<a style="text-decoration:none; color:black;" class="w3-bar-item w3-button hovered" title="Average percentage expenditure on green initiatives and waste management excluding salary component during the last five years (INR in lakhs) ">7.1.8 => <?php $temp = $a8; if($temp>0) echo "<x>".$temp."</x>"; else echo "<w>".$temp."</w>"; ?></a>
															<a style="text-decoration:none; color:black;" class="w3-bar-item w3-button hovered" title="Resources available in the institution">7.1.9 => <?php $temp = $a9; if($temp>0) echo "<x>".$temp."</x>"; else echo "<w>".$temp."</w>"; ?></a>
															<a style="text-decoration:none; color:black;" class="w3-bar-item w3-button hovered" title="Number of specific initiatives to address locational advantages and disadvantages during the last five years">7.1.10 => <?php $temp = $a10; if($temp>0) echo "<x>".$temp."</x>"; else echo "<w>".$temp."</w>"; ?></a>
															<a style="text-decoration:none; color:black;" class="w3-bar-item w3-button hovered" title="Number of initiatives taken to engage with and contribute to local community during the last five years(Not addressed elsewhere)">7.1.11 => <?php $temp = $a11; if($temp>0) echo "<x>".$temp."</x>"; else echo "<w>".$temp."</w>"; ?></a>
															<a style="text-decoration:none; color:black;" class="w3-bar-item w3-button hovered" title="Code of conduct handbook exists for students, teachers, governing body, administration including Vice Chancellor / Director / Principal /Officials and support staff">7.1.12 => <?php $temp = $a12; if($temp>0) echo "<x>".$temp."</x>"; else echo "<w>".$temp."</w>"; ?></a>
															<a style="text-decoration:none; color:black;" class="w3-bar-item w3-button hovered" title="Display of core values in the institution and on its website">7.1.13 => <?php $temp = $a13; if($temp>0) echo "<x>".$temp."</x>"; else echo "<w>".$temp."</w>"; ?></a>
															<a style="text-decoration:none; color:black;" class="w3-bar-item w3-button hovered" title="The institution plans and organizes appropriate activities to increase consciousness about national identities and symbols; Fundamental Duties and Rights of Indian citizens and other constitutional obligations ">7.1.14 => <?php $temp = $a14; if($temp>0) echo "<x>".$temp."</x>"; else echo "<w>".$temp."</w>"; ?></a>
															<a style="text-decoration:none; color:black;" class="w3-bar-item w3-button hovered" title="The institution offers a course on Human Values and professional ethics">7.1.15 => <?php $temp = $a15; if($temp>0) echo "<x>".$temp."</x>"; else echo "<w>".$temp."</w>"; ?></a>
															<a style="text-decoration:none; color:black;" class="w3-bar-item w3-button hovered" title="The institutional functioning is as per professional code of prescribed / suggested by statutory bodies / regulatory authorities for different professions">7.1.16 => <?php $temp = $a16; if($temp>0) echo "<x>".$temp."</x>"; else echo "<w>".$temp."</w>"; ?></a>
															<a style="text-decoration:none; color:black;" class="w3-bar-item w3-button hovered" title="Number of activities conducted for promotion of universal values (Truth, Righteous conduct, Love, Non-Violence and peace); national values, human values, national integration, communal harmony and social cohesion as well as for observance of fundamental duties during the last five years ">7.1.17 => <?php $temp = $a17; if($temp>0) echo "<x>".$temp."</x>"; else echo "<w>".$temp."</w>"; ?></a>
															<a style="text-decoration:none; color:black;" class="w3-bar-item w3-button hovered" title="Institution organizes national festivals and birth / death anniversaries of the great Indian personalities.">7.1.18 => <?php $temp = $a18; if($temp>0) echo "<x>".$temp."</x>"; else echo "<w>".$temp."</w>"; ?></a>
															<a style="text-decoration:none; color:black;" class="w3-bar-item w3-button hovered" title="The institution maintains complete transparency in its financial, academic, administrative and auxiliary functions">7.1.19 => <?php $temp = $a19; if($temp>0) echo "<x>".$temp."</x>"; else echo "<w>".$temp."</w>"; ?></a>
															<a style="text-decoration:none; color:black;" class="w3-bar-item w3-button hovered" title="Describe at least two institutional best practices ">7.2.1 => <?php $temp = $a20; if($temp>0) echo "<x>".$temp."</x>"; else echo "<w>".$temp."</w>"; ?></a>
															<a style="text-decoration:none; color:black;" class="w3-bar-item w3-button hovered" title="Describe/Explain the performance of the institution in one area distinctive to its vision, priority and thrust">7.3.1 => <?php $temp = $a21; if($temp>0) echo "<x>".$temp."</x>"; else echo "<w>".$temp."</w>"; ?></a>
														</div>
														</center>
														</div>

														<?php

/*
										if($q==$tt){
											echo ' class="complete"> '.$q.'/';
										}else if($q>0){
											echo ' class="partial"> '.$q.'/';
										}else{
											echo ' class="blank"> '.$q.'/';
										}

										echo $tt;
*/


//                    echo $q."/20";

                ?>
            </td>

						<td


							<?php

							$eval1 = "SELECT COUNT(*) FROM eval_report WHERE Username LIKE '".$row['username']."' ";
							$eval_res1  = mysqli_query($connection,$eval1) or die(mysqli_error($connection));

							while ($eval_row1 = $eval_res1->fetch_assoc()) {
								$total_filled = $eval_row1['COUNT(*)'];
							}

							$eval1 = "SELECT COUNT(*) FROM sub_department WHERE Username LIKE '".$row['username']."' ";
							$eval_res1  = mysqli_query($connection,$eval1) or die(mysqli_error($connection));

							while ($eval_row1 = $eval_res1->fetch_assoc()) {
								$total_added = $eval_row1['COUNT(*)'];
							}



							$eval1 = "SELECT * FROM eval_report AS ER RIGHT OUTER JOIN sub_department AS SD ON SD.id = ER.sid WHERE SD.Username LIKE '".$row['username']."'";
							$eval_res1  = mysqli_query($connection,$eval1) or die(mysqli_error($connection));

							//echo $eval1."<br>";

							$hover_data = "";

//							$x = '<a style="text-decoration:none; color:black;" class="w3-bar-item w3-button hovered" title="">7.1.1</a>';

$eval_c=0;
$r_t=0;

							while ($eval_row1 = $eval_res1->fetch_assoc()) {
								//print_r($eval_row1);
								$eval_c=0;
								$r_t=0;
								foreach ($eval_row1 as $mm) {
									$r_t++;
									//echo $mm."<br>";
									if($mm==""){

									}else{
										$eval_c++;
									}
								}

								$eval_c--;
								$r_t -= 2;
								if($eval_c>=33){
									$x = "<x>".$eval_c."</x>/<z>".$r_t."</z>";
								}else{
									$x = "<w>".$eval_c."</w>/<z>".$r_t."</z>";
								}
								//echo $eval_row1[2];
								$hover_data .= '<a style="text-decoration:none; color:black;" class="w3-bar-item w3-button hovered" title="'.urldecode($eval_row1['sub_dept']).'">'.$x.'</a>';
								//echo "(".$eval_c."/".$r_t.")";
								//$hover_data = $eval_row1['COUNT(*)'];
							}

							if($r_t==0){
								echo ">";
							}else if($total_filled>=$total_added){
								echo "class='complete' >";
							}else{
								echo "class='partial' >";
							}


							?>
							<div  style=" color:black; background-color:transparent; text-decoration:none; color:white;" class="w3-dropdown-hover nnn">
								<a style="text-decoration:none; color:white; cursor:pointer;"  class="nn">
							<center>
							<?php

							if($total_filled==0){
								echo "<w>".$total_filled."</w>";
							}else if($total_filled>=$total_added){
								echo "<x>".$total_filled."</x>";
							}else{
								echo "<w>".$total_filled."</w>";
							}

							echo "<z> / ".$total_added."</z>";

							?>

							<div style="text-decoration:none; cursor:pointer; margin-left:-30px; color:white; border:2px solid black; font-size:14px; max-height:400px; overflow-y:auto;" class="w3-dropdown-content w3-bar-block w3-border">
								<?php echo $hover_data; ?>
							</div>
							</center>
							</div>


						</td>




						<td
							<?php

									$c1 = "select distinct * from t9_1_1 where Username LIKE '".$row['username']."'";
									$c2 = "select distinct * from t9_1_2 where Username LIKE '".$row['username']."'";
									$c3 = "select distinct * from t9_2_1 where Username LIKE '".$row['username']."'";
									$c4 = "select distinct * from t9_2_2 where Username LIKE '".$row['username']."'";
									$c5 = "select distinct * from t9_2_3 where Username LIKE '".$row['username']."'";
									$c6 = "select distinct * from t9_3_2a where Username LIKE '".$row['username']."'";
									$c7 = "select distinct * from t9_3_2b where Username LIKE '".$row['username']."'";
									$c8 = "select distinct * from t9_3_3 where Username LIKE '".$row['username']."'";
									$c9 = "select distinct * from t9_4_1 where Username LIKE '".$row['username']."'";
									$c10= "select distinct * from t9_4_2 where Username LIKE '".$row['username']."'";

									$r1 = mysqli_query($connection,$c1);
									$r2 = mysqli_query($connection,$c2);
									$r3 = mysqli_query($connection,$c3);
									$r4 = mysqli_query($connection,$c4);
									$r5 = mysqli_query($connection,$c5);
									$r6 = mysqli_query($connection,$c6);
									$r7 = mysqli_query($connection,$c7);
									$r8 = mysqli_query($connection,$c8);
									$r9 = mysqli_query($connection,$c9);
									$r10= mysqli_query($connection,$c10);

									$a1 = mysqli_num_rows($r1);
									$a2 = mysqli_num_rows($r2);
									$a3 = mysqli_num_rows($r3);
									$a4 = mysqli_num_rows($r4);
									$a5 = mysqli_num_rows($r5);
									$a6 = mysqli_num_rows($r6);
									$a7 = mysqli_num_rows($r7);
									$a8 = mysqli_num_rows($r8);
									$a9 = mysqli_num_rows($r9);
									$a10= mysqli_num_rows($r10);

									$q=0;

									if($a1>=1){
											$q++;
									}
									if($a2>=1){
											$q++;
									}
									if($a3>=1){
											$q++;
									}
									if($a4>=1){
											$q++;
									}
									if($a5>=1){
											$q++;
									}
									if($a6>=1){
											$q++;
									}
									if($a7>=1){
											$q++;
									}
									if($a8>=1){
											$q++;
									}
									if($a9>=1){
											$q++;
									}
									if($a10>=1){
											$q++;
									}

									$tt = 10;

									$prog_na = "select count(*) AS total_na FROM not_applicable WHERE Username LIKE '".$row['username']."' AND section LIKE 't7%' ";
									$res_na  = mysqli_query($connection,$prog_na) or die(mysqli_error($connection));

									while ($row_na = $res_na->fetch_assoc()) {
										$na = 0;
									}

						if($q+$na>=$tt){
							echo ' class="complete"> ';
						}else if($q+$na>0){
							echo ' class="partial"> ';
						}else{
							echo ' class="blank"> ';
						}


													?>

													<div  style=" color:black; background-color:transparent; text-decoration:none; color:white;" class="w3-dropdown-hover nnn">
														<a style="text-decoration:none; color:white; cursor:pointer;"  class="nn">
													<center>
													<?php


													if($q>0){ echo "<x>".$q."</x>"; }else{ echo "<w>".$q."</w>"; }
													if($na>0){ echo "<z>+</z>"."<y>".$na."</y>"; }
																echo "<z>/".$tt."</z>";


														?>
													</a>
													<div style="text-decoration:none; cursor:pointer; margin-left:-30px; color:white; border:2px solid black; font-size:14px; max-height:400px; overflow-y:auto;" class="w3-dropdown-content w3-bar-block w3-border">
														<a style="text-decoration:none; color:black;" class="w3-bar-item w3-button hovered" title="">9.1.1 => <?php $temp = $a1; if($temp>0) echo "<x>".$temp."</x>"; else echo "<w>".$temp."</w>"; ?></a>
														<a style="text-decoration:none; color:black;" class="w3-bar-item w3-button hovered" title="">9.1.2 => <?php $temp = $a2; if($temp>0) echo "<x>".$temp."</x>"; else echo "<w>".$temp."</w>"; ?></a>
														<a style="text-decoration:none; color:black;" class="w3-bar-item w3-button hovered" title="">9.2.1 => <?php $temp = $a3; if($temp>0) echo "<x>".$temp."</x>"; else echo "<w>".$temp."</w>"; ?></a>
														<a style="text-decoration:none; color:black;" class="w3-bar-item w3-button hovered" title="">9.2.2 => <?php $temp = $a4; if($temp>0) echo "<x>".$temp."</x>"; else echo "<w>".$temp."</w>"; ?></a>
														<a style="text-decoration:none; color:black;" class="w3-bar-item w3-button hovered" title="">9.2.3 => <?php $temp = $a5; if($temp>0) echo "<x>".$temp."</x>"; else echo "<w>".$temp."</w>"; ?></a>
														<a style="text-decoration:none; color:black;" class="w3-bar-item w3-button hovered" title="">9.3.2(a) => <?php $temp = $a6; if($temp>0) echo "<x>".$temp."</x>"; else echo "<w>".$temp."</w>"; ?></a>
														<a style="text-decoration:none; color:black;" class="w3-bar-item w3-button hovered" title="">9.2.3(b) => <?php $temp = $a7; if($temp>0) echo "<x>".$temp."</x>"; else echo "<w>".$temp."</w>"; ?></a>
														<a style="text-decoration:none; color:black;" class="w3-bar-item w3-button hovered" title="">9.3.3 => <?php $temp = $a8; if($temp>0) echo "<x>".$temp."</x>"; else echo "<w>".$temp."</w>"; ?></a>
														<a style="text-decoration:none; color:black;" class="w3-bar-item w3-button hovered" title="">9.4.1 => <?php $temp = $a9; if($temp>0) echo "<x>".$temp."</x>"; else echo "<w>".$temp."</w>"; ?></a>
														<a style="text-decoration:none; color:black;" class="w3-bar-item w3-button hovered" title="">9.4.2 => <?php $temp = $a10; if($temp>0) echo "<x>".$temp."</x>"; else echo "<w>".$temp."</w>"; ?></a>
													</div>
													</center>
													</div>

													<?php

/*
									if($q==$tt){
										echo ' class="complete"> '.$q.'/';
									}else if($q>0){
										echo ' class="partial"> '.$q.'/';
									}else{
										echo ' class="blank"> '.$q.'/';
									}

									echo $tt;
*/


//                    echo $q."/20";

							?>

						</td>

						<td
		<?php


//				$prog_na = "select * FROM help_desk WHERE (msg_from LIKE '".$row['username']."' AND msg_to LIKE 'iqac') OR (msg_to LIKE '".$row['username']."' AND msg_from LIKE 'iqac') ";

				$connection = mysqli_connect($servername, $username, $password, $dbname);
				$prog_na = "select * FROM help_desk WHERE msg_from LIKE '".$row['username']."' AND msg_to LIKE 'iqac' ";
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




				echo ' class="blank"> ';

				$urg = "";
//				echo $prog_na;

				//echo $prog_na;

				if($unseen>0){
					$urg = "<a href='../helpdesk/chat_reply_to.php?to=".$row['username']."' style='font-weight:bold; color:red;'><img width='35px;' src='../images/messaging_unseen.png' alt='chat'>**</a>";
					$t = 1;
					echo $urg;
				}else if($seen>0){
					$urg = "<a href='../helpdesk/chat_reply_to.php?to=".$row['username']."' style='font-weight:bold; color:green;'><img width='35px;' src='../images/messaging_seen.png' alt='chat'></a>";
					$t = 1;
					echo $urg;
				}else{
					echo "<a style='font-size:15px;' href='../helpdesk/chat_reply_to.php?to=".$row['username']."'> "." <img width='35px;' src='../images/messaging.png' alt='chat'> ".""." </a>";
				}

					//echo "<a style='font-size:15px;' href='../helpdesk/chat_reply_to.php?to=".$row['username']."'> "." <img width='35px;' src='../images/messaging.png' alt='chat'> "."$urg"." </a>";

/*
	if($q+$na==$tt){
		echo ' class="complete"> ';
	}else if($q+$na>0){
		echo ' class="partial"> ';
		}else{
		echo ' class="blank"> ';
	}

	if($q>0){ echo "<x>".$q."</x>"; }else{ echo "<w>".$q."</w>"; }
	if($na>0){ echo "<z>+</z>"."<y>".$na."</y>"; }
				echo "<z>/".$tt."</z>";

*/
/*
				if($q==$tt){
					echo ' class="complete"> '.$q.'/';
				}else if($q>0){
					echo ' class="partial"> '.$q.'/';
				}else{
					echo ' class="blank"> '.$q.'/';
				}

				echo $tt;

*/

//                    echo $q."/19";

		?>
</td>






        </tr>



        <?php
            }
            
        ?>

    </table>

    </center>
    <style>
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
    </style>
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
        <br>
    <footer>
        <p style="color: grey; font-family: 'Verdana'; font-size: 17px;">&copy; <script>document.write(new Date().getFullYear())</script> - <script>document.write(new Date().getFullYear()+1)</script> Devi Ahilya Vishwavidyalaya</p>
    </footer>
    <!-- CACHING FOR PROGRESS.PHP -->
  
<script>


$('.hovered').click(function(){
	//alert(this.html());
	//console.log($(this).html());
	var c;

	var raw = $(this).html();
	var sec = raw.substr(0,raw.indexOf('='));
	sec = sec.trim();

	if(!sec[0]){
		c = "&red=Evaluation_report/sub_department.php";
	}else{
		c = "&red=criteria"+sec[0]+"/c"+sec[0]+".php";
	}

	sec = sec.split('.').join('');
	sec = "&sec=ch"+sec;

	var link = $($($(this).closest('tr').children()[0]).find('a')).attr('href');

	//alert(link+c+sec);

	newu = link+c+sec;

	window.open(newu);

  // alert("red="+c+"&sec="+sec);
	// console.log($($($(this).closest('tr').children()[0]).find('a')).attr('href'));
});

function maintain_session(){
	var xhttp,res;
				xhttp = new XMLHttpRequest();
				xhttp.onreadystatechange = function(){

				 if (this.readyState == 4 && this.status == 200) {
						 console.log(this.responseText);
									// alert(this.responseText);
				}
			};
						 xhttp.open("GET", "../profile/maintain_session.php?page=progress.php", true);
					 xhttp.setRequestHeader('Content-type', 'application/x-www-form-urlencoded');
				 xhttp.send();
}

setInterval(function() { maintain_session(); }, 800000);

</script>

</body>
</html>
<?php
//    include 'bottom-cache.php';
?>

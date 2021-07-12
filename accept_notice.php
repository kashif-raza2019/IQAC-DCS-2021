<?php 
  session_start();
  $_SESSION['msg']='';
  include("credential.php");
  $user = $_SESSION['username'];
  $connection = mysqli_connect($servername, $username, $password, $dbname);
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
  <script src="./js/jquery.min.js"></script>
  <script src="./js/bootstrap.min.js"></script>

    <style>

		.blink{
				color: rgb (0, 137, 226);
				animation: blink 0.7s infinite;
			 }

			 @keyframes blink{
				0%{opacity: 1;}
				75%{opacity: 0.75;}
				76%{ opacity: 0.5;}
				100%{opacity: 0;}
			 }

			 bl{
				 color: rgb (0, 137, 226);
         animation-delay: 1.8s;
 				animation: blink 5s infinite;
			 }

			 @keyframes bl{
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
            background-color: #0E3778;
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
        z-index: 9999;
      }


        </style>
<link rel="icon" href="logo.png">
<title>NOTICE-DCS</title>
</head>
<body style="font-family:ubuntu;" class="BACK" onload="notify();">

    <div class="container DAVV" style="width:100%; padding-bottom:20px; padding-top:20px;background-color: #0E3778;">
        <div class="col-sm-3"></div>

        <div class="col-sm-8" style="margin-left:-50px;">
            <div class="container" style="width:100%;">
                <div class="col-sm-2" style="margin-left:5px;">
                    <img src="logo.png" alt="logo" style="width:120px; height:120px;">
                </div>

                <div class="col-sm-9" style="margin-left:-20px;font-family: 'Arial', 'Sans-serif'; ">
                    <div style="font-size:30px; margin-top:20px; margin-left:30px; color:#FFF"><b>Devi Ahilya Vishwavidyalaya</b></div>
                    <div style="font-size:24px; margin-top:10px; margin-left:30px; color:#FFF;"><b>Data Capturing System 2021</b></div>
                </div>
            </div>

        </div>




        <div class="col-sm-1"></div>
    </div>

    <div id="myHeader" class="col-sm-12 Username" style="z-index:10; width:100%;background-color: #0E3778; font-family: 'Arial', 'Sans-serif'; ">
        <center><div id="myHeader1" class="col-sm-1 Username" style="padding:10px;background-color: #0E3778; "><a href="./index.php" style="cursor: pointer"><h4 style=" color:#fff; font-size:15px;" ><?php echo "BACK";?></h4></a></div></center>
        <center><div id="myHeader2" class="col-sm-10 Username" style="padding:10px;background-color: #0E3778;"><h4 style=" color:#fff; font-size:18px;"><?php echo strtoupper($_SESSION['name']);?></h4></div></center>
    </div>

    <div>
        <a style="visibility:hidden;">d</a>
    </div>


    <div class="container" style="">

      <!-- Trigger the modal with a button -->
      <button type="button" style="visibility:hidden;" class="btn btn-info btn-lg launch-modal" data-toggle="modal" data-target="#myModal">Open Modal</button>

      <!-- Modal -->
      <div class="modal fade" id="myModal" role="dialog">
        <div class="modal-dialog">

          <!-- Modal content-->
          <div class="modal-content">
            <div class="modal-header">
              <button id="notice" type="button" class="close" data-dismiss="modal">&times;</button>
              <h3 style="text-align:center;" class="modal-title blink">NOTICE</h3>
            </div>
            <div class="modal-body" style="font-size:17.5px;">
              <p><?php 
                   echo "<h4 style='text-align: center; color: red'><b>SPECIAL NOTICES</b></h4><br>";
                   $getSpecial = mysqli_query($connection, "SELECT*FROM notice WHERE username = '$user'");
                   $i=1;
                   while($getNoticeSp = $getSpecial->fetch_assoc()){
                     $noticeSp = $getNoticeSp['notice'];
                     echo "<b>$i</b>.   ".$noticeSp."<br>";
                     $i++;
                   }
                   echo "<h4 style='text-align: center; color: green'><b>GENERAL NOTICES</b></h4>";
                   $n = 1;
                   $getNotice = mysqli_query($connection, "SELECT*FROM noticeall");
                   while($get = $getNotice->fetch_assoc()){
                     $notice = $get['notice'];
                     echo "<b>$n</b>.   ".$notice."<br>";
                     $n++;
                   }
                    
              ?></p>
            </div>
            <div class="modal-footer">
              <button style="background-color: rgb(250, 175, 12); color:white; border-color: rgb(250, 175, 12);"  type="button" class="btn btn-primary " onclick="next_page();" data-dismiss="modal" data-backdrop="static">OK, I UNDERSTAND</button>
            </div>
          </div>

        </div>
      </div>

    </div>


<!--
    <center>
        <br><br><br>

        <input style="margin-right: 10px;" type="button" onclick="location.href='criteria1/c1.php';" value="CRITERIA 1"/>
        <input disabled style="margin-right: 10px;" type="button" onclick="location.href='criteria2/c2.php';" value="CRITERIA 2"/>
        <input disabled style="margin-right: 10px;" type="button" onclick="location.href='criteria3/c3.php';" value="CRITERIA 3"/>
        <input disabled style="margin-right: 10px;" type="button" onclick="location.href='criteria4/c4.php';" value="CRITERIA 4"/>
        <input disabled style="margin-right: 10px;" type="button" onclick="location.href='criteria5/c5.php';" value="CRITERIA 5"/>
        <input disabled style="margin-right: 10px;" type="button" onclick="location.href='criteria6/c6.php';" value="CRITERIA 6"/>
        <input disabled style="margin-right: 10px;" type="button" onclick="location.href='criteria7/c7.php';" value="CRITERIA 7"/>
		<input  disabled style="margin-right: 10px;" type="button" onclick="location.href='Evaluation_report/evaluation_report.php';" value="EVALUATIVE REPORT"/>
-->
        <!--

        <input style="margin-right: 10px;" type="button" onclick="location.href='logout.php';" value="Logout"/>

        -->

    </center>

		<hr style="background:black;">

    <center>
      <input id="cont" style="margin-right: 10px;background-color: #0E3778;" type="button" onclick="notify()';" value="CONTINUE"/>
    </center>
<!--
		<center>
			<input style="margin-right: 10px;" type="button" onclick="location.href='Courses/add.php';" value="ADD COURSES"/>

			<input style="margin-right: 10px;" type="button" onclick="location.href='Courses/view.php';" value="VIEW COURSES"/>
		</center>
-->

<script>
		

  $(document).ready(function(){
		$("#cont").click(function(){
			$("#myModal").modal({show:true});
		});
  });

  function notify(){
    $("#myModal").modal({show:true});
  }

  function removeLoader(){
			$("#loader").fadeOut(500, function(){
				$("#loader").remove();
			});
	}

  function next_page(){
    window.location.href="homepage.php";
  }

</script>

</body>
</html>

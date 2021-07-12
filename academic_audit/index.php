<?php session_start();
include("../credential.php");
$adminname = $_SESSION['username'];
$deptname = $_SESSION['name'];
$date = date_create();
save_log($_SESSION['username'],getUserIP(),$_SERVER['REQUEST_URI'],urlencode(http_build_query($_POST, '', '&amp;')),date_format($date, 'Y-m-d H:i:s'));

if(function_exists('date_default_timezone_set'))
{
    date_default_timezone_set("Asia/Kolkata");
}

// Connect To DB
$connection = mysqli_connect($servername, $username, $password, $dbname);

// Checking For Date Deadline
$dateCheck = true;
$todayDate = date("Y-m-d");
$getDateQuery = "SELECT * FROM deadline WHERE id = '2'";
$getStartDate = mysqli_query($connection, $getDateQuery);
while($row = $getStartDate->fetch_assoc()){
  $first = $row['startdate'];
  $last = $row['enddate'];
}

if(($todayDate >= $first) && ($todayDate< $last)){
  $dateCheck = false;//If User have sufficient Date Time
  // $alertString = "Hurry! Only Few Days Left to Fill this Form";

}else{
  $dateCheck = true;//if User is out of Time to fill this form
  echo "<script>alert('Date to Fill this Form is Over, Please contact to the Administrator!')</script>";
}

  // For Form 1 Selected options
  $queryF1 = "SELECT * FROM academic_criteria_1 WHERE user = '$adminname'";
  $fetchF1 = mysqli_query($connection, $queryF1);
  $resFetchF1 = mysqli_fetch_assoc($fetchF1);
  // var_dump($resFetchF1);
     $a1f1 = $resFetchF1['learning_objectives_are_clearly_defined_and_measurable'];
     $a2f1 = $resFetchF1['learning_objectives_are_inline_with_student_need'];
     $a3f1 = $resFetchF1['learning_are_inline_with_industry_need'];
     $a4f1 = $resFetchF1['content_development_is_inline_with_the_learning_objectives'];
     $a5f1 = $resFetchF1['content_revision_and_updating_is_done_regularly'];
     $a6f1 = $resFetchF1['curriculum_is_flexible_enough_to_incorporate_changes'];
     $a7f1 = $resFetchF1['choice_based_credit_system_is_followed_in_true_sense'];
     $a8f1 = $resFetchF1['programs_are_inline'];
     $a9f1 = $resFetchF1['new_program_started_in_last_one_year'];

  // For Form 2 Selected options
  $queryF2 = "SELECT * FROM academic_criteria_2 WHERE user = '$adminname'";
  $fetchF2 = mysqli_query($connection, $queryF2);
  $resFetchF2 = mysqli_fetch_assoc($fetchF2);
  // var_dump($resFetchF2);
     $a1f2 = $resFetchF2['q1'];
     $a2f2 = $resFetchF2['q2'];
     $a3f2 = $resFetchF2['q3'];
     $a4f2 = $resFetchF2['q4'];
     $a5f2 = $resFetchF2['q5'];
     $a6f2 = $resFetchF2['q6'];
     $a7f2 = $resFetchF2['q7'];
     $a8f2 = $resFetchF2['q8'];
     $a9f2 = $resFetchF2['q9'];
     $a10f2 = $resFetchF2['q10'];
     $a11f2 = $resFetchF2['q11'];
     $a12f2 = $resFetchF2['q12'];

   // For Form 3 Selected options
   $queryF3 = "SELECT * FROM academic_criteria_3 WHERE user = '$adminname'";
   $fetchF3 = mysqli_query($connection, $queryF3);
   $resFetchF3 = mysqli_fetch_assoc($fetchF3);
   // var_dump($resFetchf3);
      $a1f3 = $resFetchF3['q1'];
      $a2f3 = $resFetchF3['q2'];
      $a3f3 = $resFetchF3['q3'];
      $a4f3 = $resFetchF3['q4'];
      $a5f3 = $resFetchF3['q5'];
      $a6f3 = $resFetchF3['q6'];

     // For Form 4 Selected options
     $queryF4 = "SELECT * FROM academic_criteria_4 WHERE user = '$adminname'";
     $fetchF4 = mysqli_query($connection, $queryF4);
     $resFetchF4 = mysqli_fetch_assoc($fetchF4);
     // var_dump($resFetchf4);
        $a1f4 = $resFetchF4['q1'];
        $a2f4 = $resFetchF4['q2'];
        $a3f4 = $resFetchF4['q3'];
        $a4f4 = $resFetchF4['q4'];
        $a5f4 = $resFetchF4['q5'];
        $a6f4 = $resFetchF4['q6'];
        $a7f4 = $resFetchF4['q7'];
        $a8f4 = $resFetchF4['q8'];
        $a9f4 = $resFetchF4['q9'];
        $a10f4 = $resFetchF4['q10'];
        $a11f4 = $resFetchF4['q11'];
        $a12f4 = $resFetchF4['q12'];
        $a13f4 = $resFetchF4['q13'];
        $a14f4 = $resFetchF4['q14'];
        $a15f4 = $resFetchF4['q15'];
        $a16f4 = $resFetchF4['q16'];
        $a17f4 = $resFetchF4['q17'];
        $a18f4 = $resFetchF4['q18'];
        $a19f4 = $resFetchF4['q19'];
        $a20f4 = $resFetchF4['q20'];
        $a21f4 = $resFetchF4['q21'];
        $a22f4 = $resFetchF4['q22'];
        $a23f4 = $resFetchF4['q23'];
  
    // For Form 5 Selected options
    $queryF5 = "SELECT * FROM academic_criteria_5 WHERE user = '$adminname'";
    $fetchF5 = mysqli_query($connection, $queryF5);
    $resFetchF5 = mysqli_fetch_assoc($fetchF5);
    // var_dump($resFetchF5);
       $a1f5 = $resFetchF5['q1'];
       $a2f5 = $resFetchF5['q2'];
       $a3f5 = $resFetchF5['q3'];
       $a4f5 = $resFetchF5['q4'];
       $a5f5 = $resFetchF5['q5'];
       $a6f5 = $resFetchF5['q6'];
       $a7f5 = $resFetchF5['q7'];
       $a8f5 = $resFetchF5['q8'];
       $a9f5 = $resFetchF5['q9'];
       $a10f5 = $resFetchF5['q10'];
       $a11f5 = $resFetchF5['q11'];
       $a12f5 = $resFetchF5['q12'];
       $a13f5 = $resFetchF5['q13'];
       $a14f5 = $resFetchF5['q14'];

    // For Form 6 Selected options
        $queryF6 = "SELECT * FROM academic_criteria_6 WHERE user = '$adminname'";
        $fetchF6 = mysqli_query($connection, $queryF6);
        $resFetchF6 = mysqli_fetch_assoc($fetchF6);
        // var_dump($resFetchF6);
           $a1f6 = $resFetchF6['q1'];
           $a2f6 = $resFetchF6['q2'];
           $a3f6 = $resFetchF6['q3'];
    

        // For Form 7 Selected options
        $queryF7 = "SELECT * FROM academic_criteria_7 WHERE user = '$adminname'";
        $fetchF7 = mysqli_query($connection, $queryF7);
        $resFetchF7 = mysqli_fetch_assoc($fetchF7);
        // var_dump($resFetchf7);
           $a1f7 = $resFetchF7['q1'];
           $a2f7 = $resFetchF7['q2'];
           $a3f7 = $resFetchF7['q3'];
           $a4f7 = $resFetchF7['q4'];
           $a5f7 = $resFetchF7['q5'];
           $a6f7 = $resFetchF7['q6'];
           $a7f7 = $resFetchF7['q7'];
           $a8f7 = $resFetchF7['q8'];
           $a9f7 = $resFetchF7['q9'];
           $a10f7 = $resFetchF7['q10'];
           $a11f7 = $resFetchF7['q11'];
           $a12f7 = $resFetchF7['q12'];
           $a13f7 = $resFetchF7['q13'];
           $a14f7 = $resFetchF7['q14'];
           $a15f7 = $resFetchF7['q15'];
           $a16f7 = $resFetchF7['q16'];
           $a17f7 = $resFetchF7['q17'];
           $a18f7 = $resFetchF7['q18'];
           $a19f7 = $resFetchF7['q19'];
           $a20f7 = $resFetchF7['q20'];
           $a21f7 = $resFetchF7['q21'];
           $a22f7 = $resFetchF7['q22'];
           $a23f7 = $resFetchF7['q23'];
   
  

if(!isset($_SESSION['username'])){
		header("Location: ../index.php");   }
 $connection->close();
?>
<!DOCTYPE html>
<html>
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="../css/bootstrap.min.css">
  <link rel="stylesheet" href="../css/w3_l.css">
  <link rel="icon" href="../logo.png">
  <script src="../js/jquery.min.js"></script>
  <script src="../js/bootstrap.min.js"></script>
  <script src="..assets/bootstrap/js/bootstrap.bundle.min.js"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
  <link rel="stylesheet" href="/resources/demos/style.css">
  <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
  <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
  <title><?php echo strtoupper($_SESSION['name']);?></title>
  <script>
    //   Enabling Tooltip via Bootstrap on data-toggle, data-placement i.e 'Position of tooltip' and title
        $(function () {
            $('[data-toggle="tooltip"]').tooltip();
        })
  </script>
  <style>
    html{
      scroll-behavior: smooth;
    }
     body{
         background-color: #fff!important;

		}
    body.modal-open {
      overflow: auto!important;
      padding: 0px!important;
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

    #topBtn:hover {
      background-color: #555;
   }
        #containerHead{
          width: auto;
          height:80px;
          margin-top: 15px;
          background-color: #E0E0E0;
          color: black;
          font-size: 30px;
          padding-top: 20px;
          text-align: center;
          font-family: 'Bahnschrift', 'Roboto';
          font-weight: bold;
        }

        #noticeContainer{
          width: auto;
          height:45px;
          margin-top: 1px;
          background-color: #E0E0E0;
          color: black;
          font-size: 20px;
          padding-top: 10px;
          text-align: center;
          font-family: 'Arial', 'Verdana';
          font-weight: bold;
        }

        #noticetext{
          animation-name: notice;
          animation-duration: 1.5s;
          animation-iteration-count: infinite;
        }

        @keyframes notice {
          0%{
            opacity: 1.0;
            color: black;
          }
          50%{
            opacity: 0.2;
            color: slategrey;
          }
          100%{
            opacity: 1.0;
            color: black;
          }
        }

        .containerCriteria{
          width: auto;
          height:60px;
          margin-top: 1px;
          margin-bottom: 1px;
          background-color: #E0E0E0;
          color: black;
          font-size: 26px;
          padding-top: 10px;
          text-align: center;
          font-family: 'Bahnschrift', 'Roboto';
          
        }
        .containerDate{
          width: auto;
          height:60px;
          margin-top: 1px;
          margin-bottom: 1px;
          padding-left: 30px;
          padding-right: 20px;
          background-color: #E0E0E0;
          color: black;
          font-size: 20px;
          padding-top: 10px;
          text-align: left;
          font-family: 'Bahnschrift', 'Roboto';
          
        }
        .saveChange{
              margin-left: 47%;
              margin-right: 5%;
              padding: 5px;
              margin-top: 5px;
              margin-bottom: 1px;
          }
          .reportGen{
              margin-top: 1px;
              margin-bottom: 1px;
          }
          .imgLink{
              margin-left: 20%;
              margin-right: 20%;

          }
          .modalHeading{
              font-weight: bold;
              font-size: 23px;
          }
        #datepicker{
          float: right;
          margin-right: 100px;
          margin-top: -30px;
          font-size: 15px;
          width: 100px;
          text-align: center;
        }
        .questionBox{
            width: auto;
            height: 60px;
            background-color: #E0E0E0;
            color: slategrey;
            font-size: 20.3px;
            font-weight: normal;
            margin-top: 1px;
            padding-left: 30px;
            margin-bottom: 1px;
            padding-top: 15px;
            font-family: 'calibri', 'Roboto';
        }
        
        #criteria7Q4{
          height: 100px;
        }

        .selectAns{
            padding-top: 0;
            width: 200px;
            float: right;
            margin-right: 30px;
        }
        #reportGeneratBar{
            width: auto;
            background-color: #e0e0e0;
            align-items: center;
            padding-top: 10px;
            padding-bottom: 5px;
            padding-right: 45%;
            padding-left: 45%;
            margin-top: 1px;
            margin-bottom: 1px;
            height: 60px;
        }
        .modalHeading{
            font-weight: bold;
            font-size: 23px;
        }
        #myHeader{
          position: sticky;
          top: 0;
        }
        
        .containerCriteria{
          text-align: left;
          padding-left: 20px;
          cursor :pointer;
        }
        .containerCriteria:hover{
          background-color:#B5B5B5;
        }

        #form1{
          display: none;
        }
        #form2{
          display: none;
        }
        #form3{
          display: none;
        }
        #form4{
          display: none;
        }
        #form5{
          display: none;
        }
        #form6{
          display: none;
        }
        #form7{
          display: none;
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

  </style>
  <body>
  <div class="container DAVV" style="width:100%; padding-bottom:20px; padding-top:20px;">
        <div class="col-sm-3"></div>

        <div class="col-sm-8" style="margin-left:-50px;">
            <div class="container" style="width:100%;">
                <div class="col-sm-2" style="margin-left:5px;">
                    <img src="../logo.png" alt="logo" style="width:120px; height:120px;">
                </div>

                <div class="col-sm-9" style="margin-left:-20px;">
                    <div style="font-size:30px; margin-top:20px; margin-left:30px; color:#FFF"><b>Devi Ahilya Vishwavidyalaya, Indore</b></div>
                    <div style="font-size:20px; margin-top:10px; margin-left:30px; color:#FFF;"><b>Data Capturing System 2021</b></div>
                </div>
            </div>

        </div>

        <div class="col-sm-1"></div>
    </div>

    <div id="myHeader" class="col-sm-12 Username" style="z-index:10; width:100%;">
        <center><div id="myHeader1" class="col-sm-1 Username" style="padding:10px; "><a onclick="window.history.back();"><h4 style=" color:#fff; font-size:15px;" ><?php echo "BACK";?></h4></a></div></center>
        <center><div id="myHeader2" class="col-sm-10 Username" style="padding:10px;"><h4 style=" color:#fff; font-size:18px;"><?php echo strtoupper($_SESSION['name']);?></h4></div></center>
        <center><div id="myHeader3" class="col-sm-1 Username" style="padding:10px; ">
        <style>
        .progressCheck{
            width: 30px;
            height: 30px;
            margin-left :20px;
            margin-right: 20px;
            margin-top: 5px;
            float: left;
        }
        .nn:hover,.nnn,.nnn:hover{
        color: white;
        }

</style>

        <div  style="margin-top:10px; color:black; margin-left:-60px; background-color:transparent; text-decoration:none; color:white;" class="w3-dropdown-hover nnn">
  <a style="text-decoration:none; color:white; cursor:pointer;"  class="nn">PROFILE</a>
  <div style="text-decoration:none; color:white;" class="w3-dropdown-content w3-bar-block w3-border">
    <a href="../Courses/view.php" class="w3-bar-item w3-button">Courses</a>
    <a href="#" onClick="window.open('../profile/link_generator/generate.php','Link Generator','resizable,height=600,width=1100'); return false;" class="w3-bar-item w3-button">URL Generator</a>
    <a href="#" onClick="window.open('../save_my_data/get_data.php','Save My Data','resizable,height=600,width=1100'); return false;" class="w3-bar-item w3-button">Save My Data</a>
    <a href="../additional_data/add_view.php" class="w3-bar-item w3-button">Upload Additional Data</a>
    <a href="../helpdesk/msg.php" class="w3-bar-item w3-button">Help-Desk</a>
    <a href="../logout.php" class="w3-bar-item w3-button">Logout</a>
  </div>
 </center>
</div>
    <br><br>
    <div id="containerHead">
      <p>ACADEMIC AUDIT</p>
    </div>
    <div id="noticeContainer">
       <p id="noticetext"><span style="color: red"><span><?php
          if($dateCheck == false){
            echo "<i class='fa fa-hourglass-half'> </i> Hurry Only Few Days Left to Fill this form!";
          }else{
            echo "<i class='fa fa-hourglass-end'> </i> Last Date to Fill this form is Over Please Contact Administrator";
          }
       ?><span style="color: red"><span></p>
    </div>
    <!-- Date For Filling Criterias -->
    <script>
      $(function(){
       
         $("#datepicker").datepicker({dateFormat: "yy-mm-dd", minDate: 0});
     
      });
    </script>
    <!-- DATE CONATINER FOR SAVING REPORT -->
    <div class="containerDate">
        <p>Choose Date of Filling</p><form method="POST" action="datesave.php"><input type="text"  id="datepicker" name="updateDate" value="<?php
            $connection = mysqli_connect($servername, $username, $password, $dbname);
            $dateQuery = "SELECT * FROM date_generate WHERE id='1'";
            $runQuery = mysqli_query($connection, $dateQuery);
            $res = mysqli_fetch_assoc($runQuery);
            $getPrevSavedDate = $res['date_save'];
            echo "$getPrevSavedDate";
            $connection->close();
        ?>"><button type="submit" class="btn btn-info" name="submit" id="setDate" style="float:right;margin-top: -35px;" <?php if($dateCheck == true){echo "disabled";}else{echo "enabled";}?>>SET</button></form>
    </div>
    <div id="reportGeneratBar">
    <button type="button" class="btn btn-danger reportGen" data-toggle="modal" data-target="#exampleModalCenter">
         Generate Report
        </button>
         
        <!-- Modal -->
        <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                    </button>
                    <h5 class="modal-title modalHeading" id="exampleModalLongTitle">Generate Report</h5>
                </div>
                <div class="modal-body">
                    <p style="text-align: center; font-size: 16px; ">Choose the Format to Get the Report</p>
                    <a href="../pdf_report/academic/index.php"><img class="imgLink"  src="../assets/images/pdflogo.png" style="height: 40px; width: 30px"></a>
                    <?php echo "<a href='exportUser.php?username=$adminname&name=$deptname'><img class='imgLink' src='../assets/images/xlslogo.png' style='height: 40px; width: 30px'></a>";?>
                    
                  </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                </div>
                </div>
            </div>
        </div>
    </div>
    
    <!-- Academic Audit Criteria Block -->
    <!-- CRITERIA 1 -->
    <div class="containerCriteria" id="f1">
      <p>1. Curriculum Development <img src="../assets/images/drop-icon.png" style="width: 20px; height: 16px;margin-top: 10px;margin-right: 50px;float: right;"></p>
    </div>
      <script>
        $("#f1").click(function(){
            $("#form1").toggle(600);
        });
      </script>
    <!-- add action in the form to redirect to page -->
   <form method="POST" action="criteria1.php" id="form1">
        <div class="form-group questionBox">
            <label for="Learning objectives are clearly defined and measurable" class="control-label"><img class = "progressCheck" src = "<?php 
          //Here We will set the Progress Image based on the column filled or not?
          if($a1f1 == "Not Known" || $a1f1 == ""){
            echo "../assets/images/unfilled.png";
          }else{
            echo "../assets/images/filled.png";
            
          }
    
        ?>">1. Learning objectives are clearly defined and measurable</label>
            
            <select class="form-control selectAns" name="Learning objectives are clearly defined and measurable" required>
            <option value="Not Known" <?php if($a1f1 == "Not Known") echo "selected";  ?>>Not Known</option> 
            <option value="Yes" <?php if($a1f1 == "Yes") echo "selected";  ?>>Yes</option>
            <option value="No" <?php if($a1f1 == "No") echo "selected";  ?>>No</option> 
            </select>

        </div>
        <div class="form-group questionBox">
            <label for="Learning objectives are in line with student need" class="control-label"><img class = "progressCheck" src = "<?php 
                if($a2f1 == "Not Known"|| $a2f1 == ""){
                  echo "../assets/images/unfilled.png";
                }else{
                  echo "../assets/images/filled.png";
                }
        ?>">2. Learning objectives are in line with student needs</label>
            <select class="form-control selectAns" name="Learning objectives are in line with student need" required>
              <option value="Not Known" <?php if($a2f1 == "Not Known") echo "selected";  ?>>Not Known</option> 
              <option value="Yes" <?php if($a2f1 == "Yes") echo "selected";  ?>>Yes</option>
              <option value="No" <?php if($a2f1 == "No") echo "selected";  ?>>No</option> 
            </select>
        </div>
        <div class="form-group questionBox">
        <label for="Learning objectives are in line with industry need" class="control-label"><img class = "progressCheck" src = "<?php 
          if($a3f1 == "Not Known"|| $a3f1 == ""){
            echo "../assets/images/unfilled.png";
          }else{
            echo "../assets/images/filled.png";
          }
        ?>">3. Learning objectives are in line with industry needs</label>
            <select class="form-control selectAns" name="Learning objectives are in line with industry need" required>
              <option value="Not Known" <?php if($a3f1 == "Not Known") echo "selected";  ?>>Not Known</option> 
              <option value="Yes" <?php if($a3f1 == "Yes") echo "selected";  ?>>Yes</option>
              <option value="No" <?php if($a3f1 == "No") echo "selected";  ?>>No</option> 
            </select>
        </div>
        <div class="form-group questionBox">
        <label for="Content development is in line with the learning objectives" class="control-label"><img class = "progressCheck" src = "<?php 
          if($a4f1 == "Not Known"|| $a4f1 == ""){
            echo "../assets/images/unfilled.png";
          }else{
            echo "../assets/images/filled.png";
          }
        ?>">4. Content development in line with the learning objectives</label>
            <select class="form-control selectAns" name="Content development is in line with the learning objectives" required>
              <option value="Not Known" <?php if($a4f1 == "Not Known") echo "selected";  ?>>Not Known</option> 
              <option value="Yes" <?php if($a4f1 == "Yes") echo "selected";  ?>>Yes</option>
              <option value="No" <?php if($a4f1 == "No") echo "selected";  ?>>No</option> 
            </select>
        </div>
        <div class="form-group questionBox">
        <label for="Content revision and updating is done regularly" class="control-label"><img class = "progressCheck" src = "<?php 
            if($a5f1 == "Not Known"|| $a5f1 == ""){
              echo "../assets/images/unfilled.png";
            }else{
              echo "../assets/images/filled.png";
            }            

        ?>">5. Content revision and updating is done regularly</label>
            <select class="form-control selectAns" name="Content revision and updating is done regularly" required>
              <option value="Not Known" <?php if($a5f1 == "Not Known") echo "selected";  ?>>Not Known</option> 
              <option value="Yes" <?php if($a5f1 == "Yes") echo "selected";  ?>>Yes</option>
              <option value="No" <?php if($a5f1 == "No") echo "selected";  ?>>No</option> 
            </select>
        </div>
        <div class="form-group questionBox">
        <label for="Curriculum is flexible enough to incorporate changes" class="control-label"><img class = "progressCheck" src = "<?php 
          if($a6f1 == "Not Known"|| $a6f1 == ""){
            echo "../assets/images/unfilled.png";
          }else{
            echo "../assets/images/filled.png";
          }

        ?>">6. Curriculum is flexible enough to incorporate changes</label>
            <select class="form-control selectAns" name="Curriculum is flexible enough to incorporate changes" required>
              <option value="Not Known" <?php if($a6f1 == "Not Known") echo "selected";  ?>>Not Known</option> 
              <option value="Yes" <?php if($a6f1 == "Yes") echo "selected";  ?>>Yes</option>
              <option value="No" <?php if($a6f1 == "No") echo "selected";  ?>>No</option> 
            </select>
        </div>
        <div class="form-group questionBox">
        <label for="Choice Based Credit System is followed in true sense" class="control-label"><img class = "progressCheck" src = "<?php 
          if($a7f1 == "Not Known"|| $a7f1 == ""){
            echo "../assets/images/unfilled.png";
          }else{
            echo "../assets/images/filled.png";
          }

        ?>">7. Choice Based Credit System is followed in true sense</label>
            <select class="form-control selectAns" name="Choice Based Credit System is followed in true sense" required>
              <option value="Not Known" <?php if($a7f1 == "Not Known") echo "selected";  ?>>Not Known</option> 
              <option value="Yes" <?php if($a7f1 == "Yes") echo "selected";  ?>>Yes</option>
              <option value="No" <?php if($a7f1 == "No") echo "selected";  ?>>No</option> 
            </select>
        </div>
        <div class="form-group questionBox">
        <label for="Programs are in line with mission and vision of Department & University" class="control-label"><img class = "progressCheck" src = "<?php 
          if($a8f1 == "Not Known"|| $a8f1 == ""){
            echo "../assets/images/unfilled.png";
          }else{
            echo "../assets/images/filled.png";
          }

        ?>">8. Programs are in line with mission and vision of Department & University</label>
            <select class="form-control selectAns" name="Programs are in line with mission and vision of Department & University" required>
              <option value="Not Known" <?php if($a8f1 == "Not Known") echo "selected";  ?>>Not Known</option> 
              <option value="Yes" <?php if($a8f1 == "Yes") echo "selected";  ?>>Yes</option>
              <option value="No" <?php if($a8f1 == "No") echo "selected";  ?>>No</option> 
            </select>
        </div>
        <div class="form-group questionBox">
        <label for="New Program Started in Last One Year" class="control-label"><img class = "progressCheck" src = "<?php 
          if($a9f1 == "Not Known"|| $a9f1 == ""){
            echo "../assets/images/unfilled.png";
          }else{
            echo "../assets/images/filled.png";
          }

        ?>">9. New Program Started in Last One Year</label>
            <select class="form-control selectAns" name="New Program Started in Last One Year" required>
              <option value="Not Known" <?php if($a9f1 == "Not Known") echo "selected";  ?>>Not Known</option> 
              <option value="Yes" <?php if($a9f1 == "Yes") echo "selected";  ?>>Yes</option>
              <option value="No" <?php if($a9f1 == "No") echo "selected";  ?>>No</option> 
            </select>
        </div>

        <button name="submit" type="submit" class="btn btn-primary saveChange" <?php
          //  PHP CODE FOR DISABLING SAVE CHANGES BUTTON WHEN DATE EXCEEDED 
          // AND ALSO ALERTING THAT YOUR DATE FOR FILLING THIS FORM WAS EXCEEDED
          if($dateCheck == true){
            echo "disabled";
          }else{
            echo "enabled";
          }
        
        ?>>
            Save Changes
        </button>
    </form>

    <!-- CRITERIA 2 -->
        
    <div class="containerCriteria" id="f2">
      <p>2. Teaching and Learning Process <img src="../assets/images/drop-icon.png" style="width: 20px; height: 16px;margin-top: 10px; margin-right: 50px; float: right;"></p>
    </div>
      <script>
        $("#f2").click(function(){
            $("#form2").toggle(600);
        });
      </script>
    <!-- add action in the form to redirect to page -->
   <form method="POST" action="criteria2.php" id="form2">
        <div class="form-group questionBox">
            <label for="q1" class="control-label"><img class = "progressCheck" src = "<?php 
          //Here We will set the Progress Image based on the column filled or not?
          if($a1f2 == "Not Known" || $a1f2 == ""){
            echo "../assets/images/unfilled.png";
          }else{
            echo "../assets/images/filled.png";
          }
    
        ?>">1. Academic calendar is prepared and communicated to the students</label>
            
            <select class="form-control selectAns" name="q1" required>
              <option value="Not Known" <?php if($a1f2 == "Not Known") echo "selected";  ?>>Not Known</option> 
              <option value="Yes" <?php if($a1f2 == "Yes") echo "selected";  ?>>Yes</option>
              <option value="No" <?php if($a1f2 == "No") echo "selected";  ?>>No</option> 
            </select>

        </div>
        <div class="form-group questionBox">
            <label for="q2" class="control-label"><img class = "progressCheck" src = "<?php 
                if($a2f2 == "Not Known" || $a2f2 == ""){
                  echo "../assets/images/unfilled.png";
                }else{
                  echo "../assets/images/filled.png";
                }
        ?>">2. Learning objectives are communicated to the students</label>
            <select class="form-control selectAns" name="q2" required>
              <option value="Not Known" <?php if($a2f2 == "Not Known") echo "selected";  ?>>Not Known</option> 
              <option value="Yes" <?php if($a2f2 == "Yes") echo "selected";  ?>>Yes</option>
              <option value="No" <?php if($a2f2 == "No") echo "selected";  ?>>No</option> 
            </select>
        </div>
        <div class="form-group questionBox">
        <label for="q3" class="control-label"><img class = "progressCheck" src = "<?php 
          if($a3f2 == "Not Known" || $a3f2 == ""){
            echo "../assets/images/unfilled.png";
          }else{
            echo "../assets/images/filled.png";
          }
        ?>">3. Syllabi and session plan/lecture plan is clearly communicated to the students</label>
            <select class="form-control selectAns" name="q3" required>
              <option value="Not Known" <?php if($a3f2 == "Not Known") echo "selected";  ?>>Not Known</option> 
              <option value="Yes" <?php if($a3f2 == "Yes") echo "selected";  ?>>Yes</option>
              <option value="No" <?php if($a3f2 == "No") echo "selected";  ?>>No</option> 
            </select>
        </div>
        <div class="form-group questionBox">
        <label for="q4" class="control-label"><img class = "progressCheck" src = "<?php 
          if($a4f2 == "Not Known" || $a4f2 == ""){
            echo "../assets/images/unfilled.png";
          }else{
            echo "../assets/images/filled.png";
          }
        ?>">4. Syllabi is completed as per the session plan/lecture plan</label>
            <select class="form-control selectAns" name="q4" required>
              <option value="Not Known" <?php if($a4f2 == "Not Known") echo "selected";  ?>>Not Known</option> 
              <option value="Yes" <?php if($a4f2 == "Yes") echo "selected";  ?>>Yes</option>
              <option value="No" <?php if($a4f2 == "No") echo "selected";  ?>>No</option> 
            </select>
        </div>
        <div class="form-group questionBox">
        <label for="q5" class="control-label"><img class = "progressCheck" src = "<?php 
            if($a5f2 == "Not Known" || $a5f2 == ""){
              echo "../assets/images/unfilled.png";
            }else{
              echo "../assets/images/filled.png";
            }            

        ?>">5. Adequate amount of teaching material is provided</label>
            <select class="form-control selectAns" name="q5" required>
              <option value="Not Known" <?php if($a5f2 == "Not Known") echo "selected";  ?>>Not Known</option> 
              <option value="Yes" <?php if($a5f2 == "Yes") echo "selected";  ?>>Yes</option>
              <option value="No" <?php if($a5f2 == "No") echo "selected";  ?>>No</option> 
            </select>
        </div>
        <div class="form-group questionBox">
        <label for="q6" class="control-label"><img class = "progressCheck" src = "<?php 
          if($a6f2 == "Not Known" || $a6f2 == ""){
            echo "../assets/images/unfilled.png";
          }else{
            echo "../assets/images/filled.png";
          }

        ?>">6. Teaching pedagogy is in line with the learning objectives</label>
            <select class="form-control selectAns" name="q6" required>
              <option value="Not Known" <?php if($a6f2 == "Not Known") echo "selected";  ?>>Not Known</option> 
              <option value="Yes" <?php if($a6f2 == "Yes") echo "selected";  ?>>Yes</option>
              <option value="No" <?php if($a6f2 == "No") echo "selected";  ?>>No</option> 
            </select>
        </div>
        <div class="form-group questionBox">
        <label for="q7" class="control-label"><img class = "progressCheck" src = "<?php 
          if($a7f2 == "Not Known" || $a7f2 == ""){
            echo "../assets/images/unfilled.png";
          }else{
            echo "../assets/images/filled.png";
          }

        ?>">7. Faculty makes use of ICT in teaching</label>
            <select class="form-control selectAns" name="q7" required>
              <option value="Not Known" <?php if($a7f2 == "Not Known") echo "selected";  ?>>Not Known</option> 
              <option value="Yes" <?php if($a7f2 == "Yes") echo "selected";  ?>>Yes</option>
              <option value="No" <?php if($a7f2 == "No") echo "selected";  ?>>No</option> 
            </select>
        </div>
        <div class="form-group questionBox">
        <label for="q8" class="control-label"><img class = "progressCheck" src = "<?php 
          if($a8f2 == "Not Known" || $a8f2 == ""){
            echo "../assets/images/unfilled.png";
          }else{
            echo "../assets/images/filled.png";
          }

        ?>">8. Syllabi is completed within the stipulated period of time</label>
            <select class="form-control selectAns" name="q8" required>
              <option value="Not Known" <?php if($a8f2 == "Not Known") echo "selected";  ?>>Not Known</option> 
              <option value="Yes" <?php if($a8f2 == "Yes") echo "selected";  ?>>Yes</option>
              <option value="No" <?php if($a8f2 == "No") echo "selected";  ?>>No</option> 
            </select>
        </div>
        <div class="form-group questionBox">
        <label for="q9" class="control-label"><img class = "progressCheck" src = "<?php 
          if($a9f2 == "Not Known" || $a9f2 == ""){
            echo "../assets/images/unfilled.png";
          }else{
            echo "../assets/images/filled.png";
          }

        ?>">9. Tutorials/Extra sessions/Remedial classes are conducted as per requirement</label>
            <select class="form-control selectAns" name="q9" required>
              <option value="Not Known" <?php if($a9f2 == "Not Known") echo "selected";  ?>>Not Known</option> 
              <option value="Yes" <?php if($a9f2 == "Yes") echo "selected";  ?>>Yes</option>
              <option value="No" <?php if($a9f2 == "No") echo "selected";  ?>>No</option> 
            </select>
        </div>

        <div class="form-group questionBox">
        <label for="q10" class="control-label"><img class = "progressCheck" src = "<?php 
          if($a10f2 == "Not Known" || $a10f2 == ""){
            echo "../assets/images/unfilled.png";
          }else{
            echo "../assets/images/filled.png";
          }

        ?>">10. Guest lecturers /workshops are organized on a regular basis</label>
            <select class="form-control selectAns" name="q10" required>
              <option value="Not Known" <?php if($a10f2 == "Not Known") echo "selected";  ?>>Not Known</option> 
              <option value="Yes" <?php if($a10f2 == "Yes") echo "selected";  ?>>Yes</option>
              <option value="No" <?php if($a10f2 == "No") echo "selected";  ?>>No</option> 
            </select>
        </div>

        <div class="form-group questionBox">
        <label for="q11" class="control-label"><img class = "progressCheck" src = "<?php 
          if($a11f2 == "Not Known" || $a11f2 == ""){
            echo "../assets/images/unfilled.png";
          }else{
            echo "../assets/images/filled.png";
          }

        ?>">11. Innovative teaching methods are adopted by the faculty members</label>
            <select class="form-control selectAns" name="q11" required>
              <option value="Not Known" <?php if($a11f2 == "Not Known") echo "selected";  ?>>Not Known</option> 
              <option value="Yes" <?php if($a11f2 == "Yes") echo "selected";  ?>>Yes</option>
              <option value="No" <?php if($a11f2 == "No") echo "selected";  ?>>No</option> 
            </select>
        </div>

        <div class="form-group questionBox">
        <label for=q12" class="control-label"><img class = "progressCheck" src = "<?php 
          if($a12f2 == "Not Known" || $a12f2 == ""){
            echo "../assets/images/unfilled.png";
          }else{
            echo "../assets/images/filled.png";
          }

        ?>">12. Teachers also perform the work of mentoring students</label>
            <select class="form-control selectAns" name="q12" required>
              <option value="Not Known" <?php if($a12f2 == "Not Known") echo "selected";  ?>>Not Known</option> 
              <option value="Yes" <?php if($a12f2 == "Yes") echo "selected";  ?>>Yes</option>
              <option value="No" <?php if($a12f2 == "No") echo "selected";  ?>>No</option> 
            </select>
        </div>

        <button name="submit" type="submit" class="btn btn-primary saveChange" <?php
          //  PHP CODE FOR DISABLING SAVE CHANGES BUTTON WHEN DATE EXCEEDED 
          // AND ALSO ALERTING THAT YOUR DATE FOR FILLING THIS FORM WAS EXCEEDED
          if($dateCheck == true){
            echo "disabled";
          }else{
            echo "enabled";
          }
        
        ?>>
            Save Changes
        </button>
    
    </form>

        <!-- CRITERIA 3 -->
     
        <div class="containerCriteria" id="f3">
      <p>3. Evaluation Process <img src="../assets/images/drop-icon.png" style="width: 20px; height: 16px;margin-top: 10px; margin-right: 50px; float: right;"></p>
    </div>
      <script>
        $("#f3").click(function(){
            $("#form3").toggle(600);
        });
      </script>
    <!-- add action in the form to redirect to page -->
   <form method="POST" action="criteria3.php" id="form3">
        <div class="form-group questionBox">
            <label for="q1" class="control-label"><img class = "progressCheck" src = "<?php 
          //Here We will set the Progress Image based on the column filled or not?
          if($a1f3 == "Not Known" || $a1f3 == ""){
            echo "../assets/images/unfilled.png";
          }else{
            echo "../assets/images/filled.png";
          }
    
        ?>">1. Evaluation criteria and process is clearly defined and communicated to the students</label>
            
            <select class="form-control selectAns" name="q1" required>
              <option value="Not Known" <?php if($a1f3 == "Not Known") echo "selected";  ?>>Not Known</option> 
              <option value="Yes" <?php if($a1f3 == "Yes") echo "selected";  ?>>Yes</option>
              <option value="No" <?php if($a1f3 == "No") echo "selected";  ?>>No</option> 
            </select>

        </div>
        <div class="form-group questionBox">
            <label for="q2" class="control-label"><img class = "progressCheck" src = "<?php 
                if($a2f3 == "Not Known" || $a2f3 == ""){
                  echo "../assets/images/unfilled.png";
                }else{
                  echo "../assets/images/filled.png";
                }
        ?>">2. Transparency in examination is ensured</label>
             <select class="form-control selectAns" name="q2" required>
              <option value="Not Known" <?php if($a2f3 == "Not Known") echo "selected";  ?>>Not Known</option> 
              <option value="Yes" <?php if($a2f3 == "Yes") echo "selected";  ?>>Yes</option>
              <option value="No" <?php if($a2f3 == "No") echo "selected";  ?>>No</option> 
            </select>
        </div>
        <div class="form-group questionBox">
        <label for="q3" class="control-label"><img class = "progressCheck" src = "<?php 
          if($a3f3 == "Not Known" || $a3f3 == ""){
            echo "../assets/images/unfilled.png";
          }else{
            echo "../assets/images/filled.png";
          }
        ?>">3. Students are communicated the examination schedule well in advance</label>
            <select class="form-control selectAns" name="q3" required>
              <option value="Not Known" <?php if($a3f3 == "Not Known") echo "selected";  ?>>Not Known</option> 
              <option value="Yes" <?php if($a3f3 == "Yes") echo "selected";  ?>>Yes</option>
              <option value="No" <?php if($a3f3 == "No") echo "selected";  ?>>No</option> 
            </select>
        </div>
        <div class="form-group questionBox">
        <label for="q4" class="control-label"><img class = "progressCheck" src = "<?php 
          if($a4f3 == "Not Known" || $a4f3 == ""){
            echo "../assets/images/unfilled.png";
          }else{
            echo "../assets/images/filled.png";
          }
        ?>">4. Student is assessed on a continuous basis through various instruments</label>
            <select class="form-control selectAns" name="q4" required>
              <option value="Not Known" <?php if($a4f3 == "Not Known") echo "selected";  ?>>Not Known</option> 
              <option value="Yes" <?php if($a4f3 == "Yes") echo "selected";  ?>>Yes</option>
              <option value="No" <?php if($a4f3 == "No") echo "selected";  ?>>No</option> 
            </select>
        </div>
        <div class="form-group questionBox">
        <label for="q5" class="control-label"><img class = "progressCheck" src = "<?php 
            if($a5f3 == "Not Known" || $a5f3 == ""){
              echo "../assets/images/unfilled.png";
            }else{
              echo "../assets/images/filled.png";
            }            

        ?>">5. Transparency in evaluation is ensured</label>
             <select class="form-control selectAns" name="q5" required>
              <option value="Not Known" <?php if($a5f3 == "Not Known") echo "selected";  ?>>Not Known</option> 
              <option value="Yes" <?php if($a5f3 == "Yes") echo "selected";  ?>>Yes</option>
              <option value="No" <?php if($a5f3 == "No") echo "selected";  ?>>No</option> 
            </select>
        </div>
        <div class="form-group questionBox">
        <label for="q6" class="control-label"><img class = "progressCheck" src = "<?php 
          if($a6f3 == "Not Known" || $a6f3 == ""){
            echo "../assets/images/unfilled.png";
          }else{
            echo "../assets/images/filled.png";
          }

        ?>">6. Grievance handling mechanism exists in the institute/department</label>
             <select class="form-control selectAns" name="q6" required>
              <option value="Not Known" <?php if($a6f3 == "Not Known") echo "selected";  ?>>Not Known</option> 
              <option value="Yes" <?php if($a6f3 == "Yes") echo "selected";  ?>>Yes</option>
              <option value="No" <?php if($a6f3 == "No") echo "selected";  ?>>No</option> 
            </select>
        </div>

        <button name="submit" type="submit" class="btn btn-primary saveChange" <?php
          //  PHP CODE FOR DISABLING SAVE CHANGES BUTTON WHEN DATE EXCEEDED 
          // AND ALSO ALERTING THAT YOUR DATE FOR FILLING THIS FORM WAS EXCEEDED
          if($dateCheck == true){
            echo "disabled";
          }else{
            echo "enabled";
          }
        
        ?>>
            Save Changes
        </button>
       
    </form>

    <!-- ==============================================
        ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~
                 CRITERIA 4 Starts
        ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~
    ============================================== -->
     
    <div class="containerCriteria" id="f4">
      <p>4. Research Activities<img src="../assets/images/drop-icon.png" style="width: 20px; height: 16px;margin-top: 10px; margin-right: 50px; float: right;"></p>
    </div>
      <script>
        $("#f4").click(function(){
            $("#form4").toggle(600);
        });
      </script>
    <!-- add action in the form to redirect to page -->
   <form method="POST" action="criteria4.php" id="form4">
        <div class="form-group questionBox">
            <label for="q1" class="control-label"><img class = "progressCheck" src = "<?php 
          //Here We will set the Progress Image based on the column filled or not?
          if($a1f4 == "Not Known" || $a1f4 == ""){
            echo "../assets/images/unfilled.png";
          }else{
            echo "../assets/images/filled.png";
          }
    
        ?>">1. Funds for research are provided by the institute/department to faculty members</label>
            
            <select class="form-control selectAns" name="q1" required>
              <option value="Not Known" <?php if($a1f4 == "Not Known") echo "selected";  ?>>Not Known</option> 
              <option value="Yes" <?php if($a1f4 == "Yes") echo "selected";  ?>>Yes</option>
              <option value="No" <?php if($a1f4 == "No") echo "selected";  ?>>No</option> 
            </select>

        </div>
        <div class="form-group questionBox">
            <label for="q2" class="control-label"><img class = "progressCheck" src = "<?php 
                if($a2f4 == "Not Known" || $a2f4 == ""){
                  echo "../assets/images/unfilled.png";
                }else{
                  echo "../assets/images/filled.png";
                }
        ?>">2. Research facilities like library, laboratory, databases etc. are made available</label>
             <select class="form-control selectAns" name="q2" required>
              <option value="Not Known" <?php if($a2f4 == "Not Known") echo "selected";  ?>>Not Known</option> 
              <option value="Yes" <?php if($a2f4 == "Yes") echo "selected";  ?>>Yes</option>
              <option value="No" <?php if($a2f4 == "No") echo "selected";  ?>>No</option> 
            </select>
        </div>
        <div class="form-group questionBox">
        <label for="q3" class="control-label"><img class = "progressCheck" src = "<?php 
          if($a3f4 == "Not Known" || $a3f4 == ""){
            echo "../assets/images/unfilled.png";
          }else{
            echo "../assets/images/filled.png";
          }
        ?>">3. Monetary/non-monetary incentives given to faculty members to promote research culture</label>
            <select class="form-control selectAns" name="q3" required>
              <option value="Not Known" <?php if($a3f4 == "Not Known") echo "selected";  ?>>Not Known</option> 
              <option value="Yes" <?php if($a3f4 == "Yes") echo "selected";  ?>>Yes</option>
              <option value="No" <?php if($a3f4 == "No") echo "selected";  ?>>No</option> 
            </select>
        </div>
        <div class="form-group questionBox">
        <label for="q4" class="control-label"><img class = "progressCheck" src = "<?php 
          if($a4f4 == "Not Known" || $a4f4 == ""){
            echo "../assets/images/unfilled.png";
          }else{
            echo "../assets/images/filled.png";
          }
        ?>">4. Research cell exists in the institute/department</label>
            <select class="form-control selectAns" name="q4" required>
              <option value="Not Known" <?php if($a4f4 == "Not Known") echo "selected";  ?>>Not Known</option> 
              <option value="Yes" <?php if($a4f4 == "Yes") echo "selected";  ?>>Yes</option>
              <option value="No" <?php if($a4f4 == "No") echo "selected";  ?>>No</option> 
            </select>
        </div>
        <div class="form-group questionBox">
        <label for="q5" class="control-label"><img class = "progressCheck" src = "<?php 
            if($a5f4 == "Not Known" || $a5f4 == ""){
              echo "../assets/images/unfilled.png";
            }else{
              echo "../assets/images/filled.png";
            }            

        ?>">5. Research papers in national referred journals are published by faculty members in last year as per UGC list</label>
             <select class="form-control selectAns" name="q5" required>
              <option value="Not Known" <?php if($a5f4 == "Not Known") echo "selected";  ?>>Not Known</option> 
              <option value="Yes" <?php if($a5f4 == "Yes") echo "selected";  ?>>Yes</option>
              <option value="No" <?php if($a5f4 == "No") echo "selected";  ?>>No</option> 
            </select>
        </div>
        <div class="form-group questionBox">
          <label for="q6" class="control-label"><img class = "progressCheck" src = "<?php 
            if($a6f4 == "Not Known" || $a6f4 == ""){
              echo "../assets/images/unfilled.png";
            }else{
              echo "../assets/images/filled.png";
            }

          ?>">6. Research paper in international referred journals published by faculty members in last year as per UGC list</label>
              <select class="form-control selectAns" name="q6" required>
                <option value="Not Known" <?php if($a6f4 == "Not Known") echo "selected";  ?>>Not Known</option> 
                <option value="Yes" <?php if($a6f4 == "Yes") echo "selected";  ?>>Yes</option>
                <option value="No" <?php if($a6f4 == "No") echo "selected";  ?>>No</option> 
              </select>
        </div>

        <div class="form-group questionBox">
          <label for="q7" class="control-label"><img class = "progressCheck" src = "<?php 
            if($a7f4 == "Not Known" || $a7f4 == ""){
              echo "../assets/images/unfilled.png";
            }else{
              echo "../assets/images/filled.png";
            }

          ?>">7. Ph.D. awarded to students of faculty members in the last one year</label>
              <select class="form-control selectAns" name="q7" required>
                <option value="Not Known" <?php if($a7f4 == "Not Known") echo "selected";  ?>>Not Known</option> 
                <option value="Yes" <?php if($a7f4 == "Yes") echo "selected";  ?>>Yes</option>
                <option value="No" <?php if($a7f4 == "No") echo "selected";  ?>>No</option> 
              </select>
        </div>

        <div class="form-group questionBox">
          <label for="q8" class="control-label"><img class = "progressCheck" src = "<?php 
            if($a8f4 == "Not Known" || $a8f4 == ""){
              echo "../assets/images/unfilled.png";
            }else{
              echo "../assets/images/filled.png";
            }

          ?>">8. Faculty members completed their Ph.D. in the last one year</label>
              <select class="form-control selectAns" name="q8" required>
                <option value="Not Known" <?php if($a8f4 == "Not Known") echo "selected";  ?>>Not Known</option> 
                <option value="Yes" <?php if($a8f4 == "Yes") echo "selected";  ?>>Yes</option>
                <option value="No" <?php if($a8f4 == "No") echo "selected";  ?>>No</option> 
              </select>
        </div>

        <div class="form-group questionBox">
          <label for="q9" class="control-label"><img class = "progressCheck" src = "<?php 
            if($a9f4 == "Not Known" || $a9f4 == ""){
              echo "../assets/images/unfilled.png";
            }else{
              echo "../assets/images/filled.png";
            }

          ?>">9. Books are published by the faculty members</label>
              <select class="form-control selectAns" name="q9" required>
                <option value="Not Known" <?php if($a9f4 == "Not Known") echo "selected";  ?>>Not Known</option> 
                <option value="Yes" <?php if($a9f4 == "Yes") echo "selected";  ?>>Yes</option>
                <option value="No" <?php if($a9f4 == "No") echo "selected";  ?>>No</option> 
              </select>
        </div>

        <div class="form-group questionBox">
          <label for="q10" class="control-label"><img class = "progressCheck" src = "<?php 
            if($a10f4 == "Not Known" || $a10f4 == ""){
              echo "../assets/images/unfilled.png";
            }else{
              echo "../assets/images/filled.png";
            }

          ?>">10. Book Chapters are published by the faculty members</label>
              <select class="form-control selectAns" name="q10" required>
                <option value="Not Known" <?php if($a10f4 == "Not Known") echo "selected";  ?>>Not Known</option> 
                <option value="Yes" <?php if($a10f4 == "Yes") echo "selected";  ?>>Yes</option>
                <option value="No" <?php if($a10f4 == "No") echo "selected";  ?>>No</option> 
              </select>
        </div>

        <div class="form-group questionBox">
          <label for="q11" class="control-label"><img class = "progressCheck" src = "<?php 
            if($a11f4 == "Not Known" || $a11f4 == ""){
              echo "../assets/images/unfilled.png";
            }else{
              echo "../assets/images/filled.png";
            }

          ?>">11. Papers are presented in national conferences by faculty members</label>
              <select class="form-control selectAns" name="q11" required>
                <option value="Not Known" <?php if($a11f4 == "Not Known") echo "selected";  ?>>Not Known</option> 
                <option value="Yes" <?php if($a11f4 == "Yes") echo "selected";  ?>>Yes</option>
                <option value="No" <?php if($a11f4 == "No") echo "selected";  ?>>No</option> 
              </select>
        </div>

        <div class="form-group questionBox">
          <label for="q12" class="control-label"><img class = "progressCheck" src = "<?php 
            if($a12f4 == "Not Known" || $a12f4 == ""){
              echo "../assets/images/unfilled.png";
            }else{
              echo "../assets/images/filled.png";
            }

          ?>">12. Papers are presented in International conferences by faculty members</label>
              <select class="form-control selectAns" name="q12" required>
                <option value="Not Known" <?php if($a12f4 == "Not Known") echo "selected";  ?>>Not Known</option> 
                <option value="Yes" <?php if($a12f4 == "Yes") echo "selected";  ?>>Yes</option>
                <option value="No" <?php if($a12f4 == "No") echo "selected";  ?>>No</option> 
              </select>
        </div>

        <div class="form-group questionBox">
          <label for="q13" class="control-label"><img class = "progressCheck" src = "<?php 
            if($a13f4 == "Not Known" || $a13f4 == ""){
              echo "../assets/images/unfilled.png";
            }else{
              echo "../assets/images/filled.png";
            }

          ?>">13. Session Chaired in Conferences by faculty members</label>
              <select class="form-control selectAns" name="q13" required>
                <option value="Not Known" <?php if($a13f4 == "Not Known") echo "selected";  ?>>Not Known</option> 
                <option value="Yes" <?php if($a13f4 == "Yes") echo "selected";  ?>>Yes</option>
                <option value="No" <?php if($a13f4 == "No") echo "selected";  ?>>No</option> 
              </select>
        </div>

        <div class="form-group questionBox">
          <label for="q14" class="control-label"><img class = "progressCheck" src = "<?php 
            if($a14f4 == "Not Known" || $a14f4 == ""){
              echo "../assets/images/unfilled.png";
            }else{
              echo "../assets/images/filled.png";
            }

          ?>">14. Consultancy projects are undertaken by the faculty members</label>
              <select class="form-control selectAns" name="q14" required>
                <option value="Not Known" <?php if($a14f4 == "Not Known") echo "selected";  ?>>Not Known</option> 
                <option value="Yes" <?php if($a14f4 == "Yes") echo "selected";  ?>>Yes</option>
                <option value="No" <?php if($a14f4 == "No") echo "selected";  ?>>No</option> 
              </select>
        </div>

        <div class="form-group questionBox">
          <label for="q15" class="control-label"><img class = "progressCheck" src = "<?php 
            if($a15f4 == "Not Known" || $a15f4 == ""){
              echo "../assets/images/unfilled.png";
            }else{
              echo "../assets/images/filled.png";
            }

          ?>">15. Funded projects are taken up by the faculty members</label>
              <select class="form-control selectAns" name="q15" required>
                <option value="Not Known" <?php if($a15f4 == "Not Known") echo "selected";  ?>>Not Known</option> 
                <option value="Yes" <?php if($a15f4 == "Yes") echo "selected";  ?>>Yes</option>
                <option value="No" <?php if($a15f4 == "No") echo "selected";  ?>>No</option> 
              </select>
        </div>

        <div class="form-group questionBox">
          <label for="q16" class="control-label"><img class = "progressCheck" src = "<?php 
            if($a16f4 == "Not Known" || $a16f4 == ""){
              echo "../assets/images/unfilled.png";
            }else{
              echo "../assets/images/filled.png";
            }

          ?>">16. e-Content/MOOC developed by the faculty members</label>
              <select class="form-control selectAns" name="q16" required>
                <option value="Not Known" <?php if($a16f4 == "Not Known") echo "selected";  ?>>Not Known</option> 
                <option value="Yes" <?php if($a16f4 == "Yes") echo "selected";  ?>>Yes</option>
                <option value="No" <?php if($a16f4 == "No") echo "selected";  ?>>No</option> 
              </select>
        </div>

        <div class="form-group questionBox">
          <label for="q17" class="control-label"><img class = "progressCheck" src = "<?php 
            if($a17f4 == "Not Known" || $a17f4 == ""){
              echo "../assets/images/unfilled.png";
            }else{
              echo "../assets/images/filled.png";
            }

          ?>">17. Award/recognitions are achieved by the faculty members</label>
              <select class="form-control selectAns" name="q17" required>
                <option value="Not Known" <?php if($a17f4 == "Not Known") echo "selected";  ?>>Not Known</option> 
                <option value="Yes" <?php if($a17f4 == "Yes") echo "selected";  ?>>Yes</option>
                <option value="No" <?php if($a17f4 == "No") echo "selected";  ?>>No</option> 
              </select>
        </div>

        <div class="form-group questionBox">
          <label for="q18" class="control-label"><img class = "progressCheck" src = "<?php 
            if($a18f4 == "Not Known" || $a18f4 == ""){
              echo "../assets/images/unfilled.png";
            }else{
              echo "../assets/images/filled.png";
            }

          ?>">18. Collaborative Research activities are under taken by the department</label>
              <select class="form-control selectAns" name="q18" required>
                <option value="Not Known" <?php if($a18f4 == "Not Known") echo "selected";  ?>>Not Known</option> 
                <option value="Yes" <?php if($a18f4 == "Yes") echo "selected";  ?>>Yes</option>
                <option value="No" <?php if($a18f4 == "No") echo "selected";  ?>>No</option> 
              </select>
        </div>

        <div class="form-group questionBox">
          <label for="q19" class="control-label"><img class = "progressCheck" src = "<?php 
            if($a19f4 == "Not Known" || $a19f4 == ""){
              echo "../assets/images/unfilled.png";
            }else{
              echo "../assets/images/filled.png";
            }

          ?>">19. Consultancy projects which lead to solution of specific social/business problems</label>
              <select class="form-control selectAns" name="q19" required>
                <option value="Not Known" <?php if($a19f4 == "Not Known") echo "selected";  ?>>Not Known</option> 
                <option value="Yes" <?php if($a19f4 == "Yes") echo "selected";  ?>>Yes</option>
                <option value="No" <?php if($a19f4 == "No") echo "selected";  ?>>No</option> 
              </select>
        </div>

        <div class="form-group questionBox">
          <label for="q20" class="control-label"><img class = "progressCheck" src = "<?php 
            if($a20f4 == "Not Known" || $a20f4 == ""){
              echo "../assets/images/unfilled.png";
            }else{
              echo "../assets/images/filled.png";
            }

          ?>">20. Patents are taken by faculty members</label>
              <select class="form-control selectAns" name="q20" required>
                <option value="Not Known" <?php if($a20f4 == "Not Known") echo "selected";  ?>>Not Known</option> 
                <option value="Yes" <?php if($a20f4 == "Yes") echo "selected";  ?>>Yes</option>
                <option value="No" <?php if($a20f4 == "No") echo "selected";  ?>>No</option> 
              </select>
        </div>

        <div class="form-group questionBox">
          <label for="q21" class="control-label"><img class = "progressCheck" src = "<?php 
            if($a21f4 == "Not Known" || $a21f4 == ""){
              echo "../assets/images/unfilled.png";
            }else{
              echo "../assets/images/filled.png";
            }

          ?>">21. Workshops, Seminars conducted by the Dept. at National Level</label>
              <select class="form-control selectAns" name="q21" required>
                <option value="Not Known" <?php if($a21f4 == "Not Known") echo "selected";  ?>>Not Known</option> 
                <option value="Yes" <?php if($a21f4 == "Yes") echo "selected";  ?>>Yes</option>
                <option value="No" <?php if($a21f4 == "No") echo "selected";  ?>>No</option> 
              </select>
        </div>

        <div class="form-group questionBox">
          <label for="q22" class="control-label"><img class = "progressCheck" src = "<?php 
            if($a22f4 == "Not Known" || $a22f4 == ""){
              echo "../assets/images/unfilled.png";
            }else{
              echo "../assets/images/filled.png";
            }

          ?>">22. Workshops, Seminars conduced at International level</label>
              <select class="form-control selectAns" name="q22" required>
                <option value="Not Known" <?php if($a22f4 == "Not Known") echo "selected";  ?>>Not Known</option> 
                <option value="Yes" <?php if($a22f4 == "Yes") echo "selected";  ?>>Yes</option>
                <option value="No" <?php if($a22f4 == "No") echo "selected";  ?>>No</option> 
              </select>
        </div>

        <div class="form-group questionBox">
          <label for="q23" class="control-label"><img class = "progressCheck" src = "<?php 
            if($a23f4 == "Not Known" || $a23f4 == ""){
              echo "../assets/images/unfilled.png";
            }else{
              echo "../assets/images/filled.png";
            }

          ?>">23. MOU/ Collaboration exists</label>
              <select class="form-control selectAns" name="q23" required>
                <option value="Not Known" <?php if($a23f4 == "Not Known") echo "selected";  ?>>Not Known</option> 
                <option value="Yes" <?php if($a23f4 == "Yes") echo "selected";  ?>>Yes</option>
                <option value="No" <?php if($a23f4 == "No") echo "selected";  ?>>No</option> 
              </select>
        </div>

        <button name="submit" type="submit" class="btn btn-primary saveChange" <?php
          //  PHP CODE FOR DISABLING SAVE CHANGES BUTTON WHEN DATE EXCEEDED 
          // AND ALSO ALERTING THAT YOUR DATE FOR FILLING THIS FORM WAS EXCEEDED
          if($dateCheck == true){
            echo "disabled";
          }else{
            echo "enabled";
          }
        
        ?>>
            Save Changes
        </button>
    </form>

        <!-- 
          
          =================================

             CRITERIA 5 STARTS FROM HERE 
        
        
          =================================
        -->
        
        <div class="containerCriteria" id="f5">
    <p>5. Infrastructure and Learning Process<img src="../assets/images/drop-icon.png" style="width: 20px; height: 16px;margin-top: 10px; margin-right: 50px; float: right;"></p>
    </div>
      <script>
        $("#f5").click(function(){
            $("#form5").toggle(600);
        });
      </script>
    <!-- add action in the form to redirect to page -->
   <form method="POST" action="criteria5.php" id="form5">
        <div class="form-group questionBox">
            <label for="q1" class="control-label"><img class = "progressCheck" src = "<?php 
          //Here We will set the Progress Image based on the column filled or not?
          if($a1f5 == "Not Known" || $a1f5 == ""){
            echo "../assets/images/unfilled.png";
          }else{
            echo "../assets/images/filled.png";
          }
    
        ?>">1. Institution provides necessary facilities for teaching such as class room, furniture etc.</label>
            
            <select class="form-control selectAns" name="q1" required>
              <option value="Not Known" <?php if($a1f5 == "Not Known") echo "selected";  ?>>Not Known</option> 
              <option value="Yes" <?php if($a1f5 == "Yes") echo "selected";  ?>>Yes</option>
              <option value="No" <?php if($a1f5 == "No") echo "selected";  ?>>No</option> 
            </select>

        </div>
        <div class="form-group questionBox">
            <label for="q2" class="control-label"><img class = "progressCheck" src = "<?php 
                if($a2f5 == "Not Known" || $a2f5 == ""){
                  echo "../assets/images/unfilled.png";
                }else{
                  echo "../assets/images/filled.png";
                }
        ?>">2. Washrooms, common rooms are available for boys and girls separately</label>
            <select class="form-control selectAns" name="q2" required>
              <option value="Not Known" <?php if($a2f5 == "Not Known") echo "selected";  ?>>Not Known</option> 
              <option value="Yes" <?php if($a2f5 == "Yes") echo "selected";  ?>>Yes</option>
              <option value="No" <?php if($a2f5 == "No") echo "selected";  ?>>No</option> 
            </select>
        </div>
        <div class="form-group questionBox">
        <label for="q3" class="control-label"><img class = "progressCheck" src = "<?php 
          if($a3f5 == "Not Known" || $a3f5 == ""){
            echo "../assets/images/unfilled.png";
          }else{
            echo "../assets/images/filled.png";
          }
        ?>">3. Cleanliness of Washrooms maintained Timely</label>
            <select class="form-control selectAns" name="q3" required>
              <option value="Not Known" <?php if($a3f5 == "Not Known") echo "selected";  ?>>Not Known</option> 
              <option value="Yes" <?php if($a3f5 == "Yes") echo "selected";  ?>>Yes</option>
              <option value="No" <?php if($a3f5 == "No") echo "selected";  ?>>No</option> 
            </select>
        </div>
        <div class="form-group questionBox">
        <label for="q4" class="control-label"><img class = "progressCheck" src = "<?php 
          if($a4f5 == "Not Known" || $a4f5 == ""){
            echo "../assets/images/unfilled.png";
          }else{
            echo "../assets/images/filled.png";
          }
        ?>">4. Classrooms are ICT enabled</label>
            <select class="form-control selectAns" name="q4" required>
              <option value="Not Known" <?php if($a4f5 == "Not Known") echo "selected";  ?>>Not Known</option> 
              <option value="Yes" <?php if($a4f5 == "Yes") echo "selected";  ?>>Yes</option>
              <option value="No" <?php if($a4f5 == "No") echo "selected";  ?>>No</option> 
            </select>
        </div>
        <div class="form-group questionBox">
        <label for="q5" class="control-label"><img class = "progressCheck" src = "<?php 
            if($a5f5 == "Not Known" || $a5f5 == ""){
              echo "../assets/images/unfilled.png";
            }else{
              echo "../assets/images/filled.png";
            }            

        ?>">5. Computer lab is equipped with state-of-the-art facilities</label>
            <select class="form-control selectAns" name="q5" required>
              <option value="Not Known" <?php if($a5f5 == "Not Known") echo "selected";  ?>>Not Known</option> 
              <option value="Yes" <?php if($a5f5 == "Yes") echo "selected";  ?>>Yes</option>
              <option value="No" <?php if($a5f5 == "No") echo "selected";  ?>>No</option> 
            </select>
        </div>
        <div class="form-group questionBox">
        <label for="q6" class="control-label"><img class = "progressCheck" src = "<?php 
          if($a6f5 == "Not Known" || $a6f5 == ""){
            echo "../assets/images/unfilled.png";
          }else{
            echo "../assets/images/filled.png";
          }

        ?>">6. Library is equipped with digital and non- digital learning resources</label>
            <select class="form-control selectAns" name="q6" required>
              <option value="Not Known" <?php if($a6f5 == "Not Known") echo "selected";  ?>>Not Known</option> 
              <option value="Yes" <?php if($a6f5 == "Yes") echo "selected";  ?>>Yes</option>
              <option value="No" <?php if($a6f5 == "No") echo "selected";  ?>>No</option> 
            </select>
        </div>
        <div class="form-group questionBox">
        <label for="q7" class="control-label"><img class = "progressCheck" src = "<?php 
          if($a7f5 == "Not Known" || $a7f5 == ""){
            echo "../assets/images/unfilled.png";
          }else{
            echo "../assets/images/filled.png";
          }

        ?>">7. Library and computers are continuously upgraded</label>
            <select class="form-control selectAns" name="q7" required>
              <option value="Not Known" <?php if($a7f5 == "Not Known") echo "selected";  ?>>Not Known</option> 
              <option value="Yes" <?php if($a7f5 == "Yes") echo "selected";  ?>>Yes</option>
              <option value="No" <?php if($a7f5 == "No") echo "selected";  ?>>No</option> 
            </select>
        </div>
        <div class="form-group questionBox">
        <label for="q8" class="control-label"><img class = "progressCheck" src = "<?php 
          if($a8f5 == "Not Known" || $a8f5 == ""){
            echo "../assets/images/unfilled.png";
          }else{
            echo "../assets/images/filled.png";
          }

        ?>">8. Facilities for sports and extracurricular activities are provided</label>
            <select class="form-control selectAns" name="q8" required>
              <option value="Not Known" <?php if($a8f5 == "Not Known") echo "selected";  ?>>Not Known</option> 
              <option value="Yes" <?php if($a8f5 == "Yes") echo "selected";  ?>>Yes</option>
              <option value="No" <?php if($a8f5 == "No") echo "selected";  ?>>No</option> 
            </select>
        </div>
        <div class="form-group questionBox">
        <label for="q9" class="control-label"><img class = "progressCheck" src = "<?php 
          if($a9f5 == "Not Known" || $a9f5 == ""){
            echo "../assets/images/unfilled.png";
          }else{
            echo "../assets/images/filled.png";
          }

        ?>">9. The Institute/department is equipped with multimedia theatre/auditorium</label>
            <select class="form-control selectAns" name="q9" required>
              <option value="Not Known" <?php if($a9f5 == "Not Known") echo "selected";  ?>>Not Known</option> 
              <option value="Yes" <?php if($a9f5 == "Yes") echo "selected";  ?>>Yes</option>
              <option value="No" <?php if($a9f5 == "No") echo "selected";  ?>>No</option> 
            </select>
        </div>

        <div class="form-group questionBox">
        <label for="q10" class="control-label"><img class = "progressCheck" src = "<?php 
          if($a10f5 == "Not Known" || $a10f5 == ""){
            echo "../assets/images/unfilled.png";
          }else{
            echo "../assets/images/filled.png";
          }

        ?>">10. Proper maintenance of infrastructure is done from time to time</label>
            <select class="form-control selectAns" name="q10" required>
              <option value="Not Known" <?php if($a10f5 == "Not Known") echo "selected";  ?>>Not Known</option> 
              <option value="Yes" <?php if($a10f5 == "Yes") echo "selected";  ?>>Yes</option>
              <option value="No" <?php if($a10f5 == "No") echo "selected";  ?>>No</option> 
            </select>
        </div>

        <div class="form-group questionBox">
        <label for="q11" class="control-label"><img class = "progressCheck" src = "<?php 
          if($a11f5 == "Not Known" || $a11f5 == ""){
            echo "../assets/images/unfilled.png";
          }else{
            echo "../assets/images/filled.png";
          }

        ?>">11. Facility of clean drinking water is available</label>
            <select class="form-control selectAns" name="q11" required>
              <option value="Not Known" <?php if($a11f5 == "Not Known") echo "selected";  ?>>Not Known</option> 
              <option value="Yes" <?php if($a11f5 == "Yes") echo "selected";  ?>>Yes</option>
              <option value="No" <?php if($a11f5 == "No") echo "selected";  ?>>No</option> 
            </select>
        </div>

        <div class="form-group questionBox">
        <label for="q12" class="control-label"><img class = "progressCheck" src = "<?php 
          if($a12f5 == "Not Known" || $a12f5 == ""){
            echo "../assets/images/unfilled.png";
          }else{
            echo "../assets/images/filled.png";
          }

        ?>">12. The institute/department has refreshment centre for students and facilities</label>
            <select class="form-control selectAns" name="q12" required>
              <option value="Not Known" <?php if($a12f5 == "Not Known") echo "selected";  ?>>Not Known</option> 
              <option value="Yes" <?php if($a12f5 == "Yes") echo "selected";  ?>>Yes</option>
              <option value="No" <?php if($a12f5 == "No") echo "selected";  ?>>No</option> 
            </select>
        </div>

        <div class="form-group questionBox">
        <label for="q13" class="control-label"><img class = "progressCheck" src = "<?php 
          if($a13f5 == "Not Known" || $a13f5 == ""){
            echo "../assets/images/unfilled.png";
          }else{
            echo "../assets/images/filled.png";
          }

        ?>">13. <i>Divyang</i> friendly Infrastructure is available</label>
            <select class="form-control selectAns" name="q13" required>
              <option value="Not Known" <?php if($a13f5 == "Not Known") echo "selected";  ?>>Not Known</option> 
              <option value="Yes" <?php if($a13f5 == "Yes") echo "selected";  ?>>Yes</option>
              <option value="No" <?php if($a13f5 == "No") echo "selected";  ?>>No</option> 
            </select>
        </div>

        <div class="form-group questionBox">
        <label for="q14" class="control-label"><img class = "progressCheck" src = "<?php 
          if($a14f5 == "Not Known" || $a14f5 == ""){
            echo "../assets/images/unfilled.png";
          }else{
            echo "../assets/images/filled.png";
          }

        ?>">14. <i>Divyang</i> friendly wash room facility is available</label>
            <select class="form-control selectAns" name="q14" required>
              <option value="Not Known" <?php if($a14f5 == "Not Known") echo "selected";  ?>>Not Known</option> 
              <option value="Yes" <?php if($a14f5 == "Yes") echo "selected";  ?>>Yes</option>
              <option value="No" <?php if($a14f5 == "No") echo "selected";  ?>>No</option> 
            </select>
        </div>

        <button name="submit" type="submit" class="btn btn-primary saveChange" <?php
          //  PHP CODE FOR DISABLING SAVE CHANGES BUTTON WHEN DATE EXCEEDED 
          // AND ALSO ALERTING THAT YOUR DATE FOR FILLING THIS FORM WAS EXCEEDED
          if($dateCheck == true){
            echo "disabled";
          }else{
            echo "enabled";
          }
        
        ?>>
            Save Changes
        </button>
    
    </form>

    <!-- 
         ==========================================

                     CRITERIA 6 STARTS HERE

         ==========================================
         

     -->
    <div class="containerCriteria" id="f6">
      <p>6. Co-curricular Activities<img src="../assets/images/drop-icon.png" style="width: 20px; height: 16px;margin-top: 10px; margin-right: 50px; float: right;"></p>
    </div>
      <script>
        $("#f6").click(function(){
            $("#form6").toggle(600);
        });
      </script>
    <!-- add action in the form to redirect to page -->
   <form method="POST" action="criteria6.php" id="form6">
        <div class="form-group questionBox">
            <label for="q1" class="control-label"><img class = "progressCheck" src = "<?php 
          //Here We will set the Progress Image based on the column filled or not?
          if($a1f6 == "Not Known" || $a1f6 == ""){
            echo "../assets/images/unfilled.png";
          }else{
            echo "../assets/images/filled.png";
          }
    
        ?>">1. Evaluation criteria and process is clearly defined and communicated to the students</label>
            
            <select class="form-control selectAns" name="q1" required>
              <option value="Not Known" <?php if($a1f6 == "Not Known") echo "selected";  ?>>Not Known</option> 
              <option value="Yes" <?php if($a1f6 == "Yes") echo "selected";  ?>>Yes</option>
              <option value="No" <?php if($a1f6 == "No") echo "selected";  ?>>No</option> 
            </select>

        </div>
        <div class="form-group questionBox">
            <label for="q2" class="control-label"><img class = "progressCheck" src = "<?php 
                if($a2f6 == "Not Known" || $a2f6 == ""){
                  echo "../assets/images/unfilled.png";
                }else{
                  echo "../assets/images/filled.png";
                }
        ?>">2. Transparency in examination is ensured</label>
             <select class="form-control selectAns" name="q2" required>
              <option value="Not Known" <?php if($a2f6 == "Not Known") echo "selected";  ?>>Not Known</option> 
              <option value="Yes" <?php if($a2f6 == "Yes") echo "selected";  ?>>Yes</option>
              <option value="No" <?php if($a2f6 == "No") echo "selected";  ?>>No</option> 
            </select>
        </div>
        <div class="form-group questionBox">
        <label for="q3" class="control-label"><img class = "progressCheck" src = "<?php 
          if($a3f6 == "Not Known" || $a3f6 == ""){
            echo "../assets/images/unfilled.png";
          }else{
            echo "../assets/images/filled.png";
          }
        ?>">3. Students are communicated the examination schedule well in advance</label>
            <select class="form-control selectAns" name="q3" required>
              <option value="Not Known" <?php if($a3f6 == "Not Known") echo "selected";  ?>>Not Known</option> 
              <option value="Yes" <?php if($a3f6 == "Yes") echo "selected";  ?>>Yes</option>
              <option value="No" <?php if($a3f6 == "No") echo "selected";  ?>>No</option> 
            </select>
        </div>
      
        <button name="submit" type="submit" class="btn btn-primary saveChange" <?php
          //  PHP CODE FOR DISABLING SAVE CHANGES BUTTON WHEN DATE EXCEEDED 
          // AND ALSO ALERTING THAT YOUR DATE FOR FILLING THIS FORM WAS EXCEEDED
          if($dateCheck == true){
            echo "disabled";
          }else{
            echo "enabled";
          }
        
        ?>>
            Save Changes
        </button>
       
    </form>
    
    <!-- =============================================
        ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~

                 CRITERIA 7 Starts

        ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~
    ============================================== -->
     
    <div class="containerCriteria" id="f7">
      <p>7. Other Activities Conducive for Academic Environment<img src="../assets/images/drop-icon.png" style="width: 20px; height: 16px;margin-top: 10px; margin-right: 50px; float: right;"></p>
    </div>
      <script>
        $("#f7").click(function(){
            $("#form7").toggle(600);
        });
      </script>
    <!-- add action in the form to redirect to page -->
   <form method="POST" action="criteria7.php" id="form7">
        <div class="form-group questionBox">
            <label for="q1" class="control-label"><img class = "progressCheck" src = "<?php 
          //Here We will set the Progress Image based on the column filled or not?
          if($a1f7 == "Not Known" || $a1f7 == ""){
            echo "../assets/images/unfilled.png";
          }else{
            echo "../assets/images/filled.png";
          }
    
        ?>">1. Departmental Website Exists</label>
            
            <select class="form-control selectAns" name="q1" required>
              <option value="Not Known" <?php if($a1f7 == "Not Known") echo "selected";  ?>>Not Known</option> 
              <option value="Yes" <?php if($a1f7 == "Yes") echo "selected";  ?>>Yes</option>
              <option value="No" <?php if($a1f7 == "No") echo "selected";  ?>>No</option> 
            </select>

        </div>
        <div class="form-group questionBox">
            <label for="q2" class="control-label"><img class = "progressCheck" src = "<?php 
                if($a2f7 == "Not Known" || $a2f7 == ""){
                  echo "../assets/images/unfilled.png";
                }else{
                  echo "../assets/images/filled.png";
                }
        ?>">2. Departmental Website updated regularly</label>
             <select class="form-control selectAns" name="q2" required>
              <option value="Not Known" <?php if($a2f7 == "Not Known") echo "selected";  ?>>Not Known</option> 
              <option value="Yes" <?php if($a2f7 == "Yes") echo "selected";  ?>>Yes</option>
              <option value="No" <?php if($a2f7 == "No") echo "selected";  ?>>No</option> 
            </select>
        </div>
        <div class="form-group questionBox">
        <label for="q3" class="control-label"><img class = "progressCheck" src = "<?php 
          if($a3f7 == "Not Known" || $a3f7 == ""){
            echo "../assets/images/unfilled.png";
          }else{
            echo "../assets/images/filled.png";
          }
        ?>">3. Suggestion Box is placed in prominent places</label>
            <select class="form-control selectAns" name="q3" required>
              <option value="Not Known" <?php if($a3f7 == "Not Known") echo "selected";  ?>>Not Known</option> 
              <option value="Yes" <?php if($a3f7 == "Yes") echo "selected";  ?>>Yes</option>
              <option value="No" <?php if($a3f7 == "No") echo "selected";  ?>>No</option> 
            </select>
        </div>
        <div class="form-group questionBox" id="criteria7Q4">
        <label for="q4" class="control-label"><img class = "progressCheck" src = "<?php 
          if($a4f7 == "Not Known" || $a4f7 == ""){
            echo "../assets/images/unfilled.png";
          }else{
            echo "../assets/images/filled.png";
          }
        ?>">4. Arrangements have been made to display achievements of the students in academics,<br>sports and extracurricular activities</label>
            <select class="form-control selectAns" name="q4" required>
              <option value="Not Known" <?php if($a4f7 == "Not Known") echo "selected";  ?>>Not Known</option> 
              <option value="Yes" <?php if($a4f7 == "Yes") echo "selected";  ?>>Yes</option>
              <option value="No" <?php if($a4f7 == "No") echo "selected";  ?>>No</option> 
            </select>
        </div>
        <div class="form-group questionBox">
        <label for="q5" class="control-label"><img class = "progressCheck" src = "<?php 
            if($a5f7 == "Not Known" || $a5f7 == ""){
              echo "../assets/images/unfilled.png";
            }else{
              echo "../assets/images/filled.png";
            }            

        ?>">5.Formal Placement Cell is exists</label>
             <select class="form-control selectAns" name="q5" required>
              <option value="Not Known" <?php if($a5f7 == "Not Known") echo "selected";  ?>>Not Known</option> 
              <option value="Yes" <?php if($a5f7 == "Yes") echo "selected";  ?>>Yes</option>
              <option value="No" <?php if($a5f7 == "No") echo "selected";  ?>>No</option> 
            </select>
        </div>
        <div class="form-group questionBox">
          <label for="q6" class="control-label"><img class = "progressCheck" src = "<?php 
            if($a6f7 == "Not Known" || $a6f7 == ""){
              echo "../assets/images/unfilled.png";
            }else{
              echo "../assets/images/filled.png";
            }

          ?>">6. Activities of Career Development conducted</label>
              <select class="form-control selectAns" name="q6" required>
                <option value="Not Known" <?php if($a6f7 == "Not Known") echo "selected";  ?>>Not Known</option> 
                <option value="Yes" <?php if($a6f7 == "Yes") echo "selected";  ?>>Yes</option>
                <option value="No" <?php if($a6f7 == "No") echo "selected";  ?>>No</option> 
              </select>
        </div>

        <div class="form-group questionBox">
          <label for="q7" class="control-label"><img class = "progressCheck" src = "<?php 
            if($a7f7 == "Not Known" || $a7f7 == ""){
              echo "../assets/images/unfilled.png";
            }else{
              echo "../assets/images/filled.png";
            }

          ?>">7. Efforts made for Psychological Counselling of the Students</label>
              <select class="form-control selectAns" name="q7" required>
                <option value="Not Known" <?php if($a7f7 == "Not Known") echo "selected";  ?>>Not Known</option> 
                <option value="Yes" <?php if($a7f7 == "Yes") echo "selected";  ?>>Yes</option>
                <option value="No" <?php if($a7f7 == "No") echo "selected";  ?>>No</option> 
              </select>
        </div>

        <div class="form-group questionBox">
          <label for="q8" class="control-label"><img class = "progressCheck" src = "<?php 
            if($a8f7 == "Not Known" || $a8f7 == ""){
              echo "../assets/images/unfilled.png";
            }else{
              echo "../assets/images/filled.png";
            }

          ?>">8. Health Report Card of each Student is prepared</label>
              <select class="form-control selectAns" name="q8" required>
                <option value="Not Known" <?php if($a8f7 == "Not Known") echo "selected";  ?>>Not Known</option> 
                <option value="Yes" <?php if($a8f7 == "Yes") echo "selected";  ?>>Yes</option>
                <option value="No" <?php if($a8f7 == "No") echo "selected";  ?>>No</option> 
              </select>
        </div>

        <div class="form-group questionBox">
          <label for="q9" class="control-label"><img class = "progressCheck" src = "<?php 
            if($a9f7 == "Not Known" || $a9f7 == ""){
              echo "../assets/images/unfilled.png";
            }else{
              echo "../assets/images/filled.png";
            }

          ?>">9. Health Report Card of each faculty member is prepared</label>
              <select class="form-control selectAns" name="q9" required>
                <option value="Not Known" <?php if($a9f7 == "Not Known") echo "selected";  ?>>Not Known</option> 
                <option value="Yes" <?php if($a9f7 == "Yes") echo "selected";  ?>>Yes</option>
                <option value="No" <?php if($a9f7 == "No") echo "selected";  ?>>No</option> 
              </select>
        </div>

        <div class="form-group questionBox">
          <label for="q10" class="control-label"><img class = "progressCheck" src = "<?php 
            if($a10f7 == "Not Known" || $a10f7 == ""){
              echo "../assets/images/unfilled.png";
            }else{
              echo "../assets/images/filled.png";
            }

          ?>">10. Health Report Card of each staff member is prepared</label>
              <select class="form-control selectAns" name="q10" required>
                <option value="Not Known" <?php if($a10f7 == "Not Known") echo "selected";  ?>>Not Known</option> 
                <option value="Yes" <?php if($a10f7 == "Yes") echo "selected";  ?>>Yes</option>
                <option value="No" <?php if($a10f7 == "No") echo "selected";  ?>>No</option> 
              </select>
        </div>

        <div class="form-group questionBox">
          <label for="q11" class="control-label"><img class = "progressCheck" src = "<?php 
            if($a11f7 == "Not Known" || $a11f7 == ""){
              echo "../assets/images/unfilled.png";
            }else{
              echo "../assets/images/filled.png";
            }

          ?>">11. Faculty welfare activities carried out in last one year</label>
              <select class="form-control selectAns" name="q11" required>
                <option value="Not Known" <?php if($a11f7 == "Not Known") echo "selected";  ?>>Not Known</option> 
                <option value="Yes" <?php if($a11f7 == "Yes") echo "selected";  ?>>Yes</option>
                <option value="No" <?php if($a11f7 == "No") echo "selected";  ?>>No</option> 
              </select>
        </div>

        <div class="form-group questionBox">
          <label for="q12" class="control-label"><img class = "progressCheck" src = "<?php 
            if($a12f7 == "Not Known" || $a12f7 == ""){
              echo "../assets/images/unfilled.png";
            }else{
              echo "../assets/images/filled.png";
            }

          ?>">12. Faculty motivational activities carried out in last one year</label>
              <select class="form-control selectAns" name="q12" required>
                <option value="Not Known" <?php if($a12f7 == "Not Known") echo "selected";  ?>>Not Known</option> 
                <option value="Yes" <?php if($a12f7 == "Yes") echo "selected";  ?>>Yes</option>
                <option value="No" <?php if($a12f7 == "No") echo "selected";  ?>>No</option> 
              </select>
        </div>

        <div class="form-group questionBox">
          <label for="q13" class="control-label"><img class = "progressCheck" src = "<?php 
            if($a13f7 == "Not Known" || $a13f7 == ""){
              echo "../assets/images/unfilled.png";
            }else{
              echo "../assets/images/filled.png";
            }

          ?>">13. Non-Teaching Staff welfare activities carried out in last one year</label>
              <select class="form-control selectAns" name="q13" required>
                <option value="Not Known" <?php if($a13f7 == "Not Known") echo "selected";  ?>>Not Known</option> 
                <option value="Yes" <?php if($a13f7 == "Yes") echo "selected";  ?>>Yes</option>
                <option value="No" <?php if($a13f7 == "No") echo "selected";  ?>>No</option> 
              </select>
        </div>

        <div class="form-group questionBox">
          <label for="q14" class="control-label"><img class = "progressCheck" src = "<?php 
            if($a14f7 == "Not Known" || $a14f7 == ""){
              echo "../assets/images/unfilled.png";
            }else{
              echo "../assets/images/filled.png";
            }

          ?>">14. Non-Teaching Staff motivational activities carried out in last one year</label>
              <select class="form-control selectAns" name="q14" required>
                <option value="Not Known" <?php if($a14f7 == "Not Known") echo "selected";  ?>>Not Known</option> 
                <option value="Yes" <?php if($a14f7 == "Yes") echo "selected";  ?>>Yes</option>
                <option value="No" <?php if($a14f7 == "No") echo "selected";  ?>>No</option> 
              </select>
        </div>

        <div class="form-group questionBox">
          <label for="q15" class="control-label"><img class = "progressCheck" src = "<?php 
            if($a15f7 == "Not Known" || $a15f7 == ""){
              echo "../assets/images/unfilled.png";
            }else{
              echo "../assets/images/filled.png";
            }

          ?>">15. Formal Alumni Cell Exists</label>
              <select class="form-control selectAns" name="q15" required>
                <option value="Not Known" <?php if($a15f7 == "Not Known") echo "selected";  ?>>Not Known</option> 
                <option value="Yes" <?php if($a15f7 == "Yes") echo "selected";  ?>>Yes</option>
                <option value="No" <?php if($a15f7 == "No") echo "selected";  ?>>No</option> 
              </select>
        </div>

        <div class="form-group questionBox">
          <label for="q16" class="control-label"><img class = "progressCheck" src = "<?php 
            if($a16f7 == "Not Known" || $a16f7 == ""){
              echo "../assets/images/unfilled.png";
            }else{
              echo "../assets/images/filled.png";
            }

          ?>">16. Activities of Alumni Interaction carried out in last one year</label>
              <select class="form-control selectAns" name="q16" required>
                <option value="Not Known" <?php if($a16f7 == "Not Known") echo "selected";  ?>>Not Known</option> 
                <option value="Yes" <?php if($a16f7 == "Yes") echo "selected";  ?>>Yes</option>
                <option value="No" <?php if($a16f7 == "No") echo "selected";  ?>>No</option> 
              </select>
        </div>

        <div class="form-group questionBox">
          <label for="q17" class="control-label"><img class = "progressCheck" src = "<?php 
            if($a17f7 == "Not Known" || $a17f7 == ""){
              echo "../assets/images/unfilled.png";
            }else{
              echo "../assets/images/filled.png";
            }

          ?>">17. Activities for the training of Non-Teaching Staff conducted in last one year</label>
              <select class="form-control selectAns" name="q17" required>
                <option value="Not Known" <?php if($a17f7 == "Not Known") echo "selected";  ?>>Not Known</option> 
                <option value="Yes" <?php if($a17f7 == "Yes") echo "selected";  ?>>Yes</option>
                <option value="No" <?php if($a17f7 == "No") echo "selected";  ?>>No</option> 
              </select>
        </div>

        <div class="form-group questionBox">
          <label for="q18" class="control-label"><img class = "progressCheck" src = "<?php 
            if($a18f7 == "Not Known" || $a18f7 == ""){
              echo "../assets/images/unfilled.png";
            }else{
              echo "../assets/images/filled.png";
            }

          ?>">18. Fire Safety Measures available</label>
              <select class="form-control selectAns" name="q18" required>
                <option value="Not Known" <?php if($a18f7 == "Not Known") echo "selected";  ?>>Not Known</option> 
                <option value="Yes" <?php if($a18f7 == "Yes") echo "selected";  ?>>Yes</option>
                <option value="No" <?php if($a18f7 == "No") echo "selected";  ?>>No</option> 
              </select>
        </div>

        <div class="form-group questionBox">
          <label for="q19" class="control-label"><img class = "progressCheck" src = "<?php 
            if($a19f7 == "Not Known" || $a19f7 == ""){
              echo "../assets/images/unfilled.png";
            }else{
              echo "../assets/images/filled.png";
            }

          ?>">19. Efforts on Energy Saving made in last one year</label>
              <select class="form-control selectAns" name="q19" required>
                <option value="Not Known" <?php if($a19f7 == "Not Known") echo "selected";  ?>>Not Known</option> 
                <option value="Yes" <?php if($a19f7 == "Yes") echo "selected";  ?>>Yes</option>
                <option value="No" <?php if($a19f7 == "No") echo "selected";  ?>>No</option> 
              </select>
        </div>

        <div class="form-group questionBox">
          <label for="q20" class="control-label"><img class = "progressCheck" src = "<?php 
            if($a20f7 == "Not Known" || $a20f7 == ""){
              echo "../assets/images/unfilled.png";
            }else{
              echo "../assets/images/filled.png";
            }

          ?>">20. Energy Audit conducted in last one year</label>
              <select class="form-control selectAns" name="q20" required>
                <option value="Not Known" <?php if($a20f7 == "Not Known") echo "selected";  ?>>Not Known</option> 
                <option value="Yes" <?php if($a20f7 == "Yes") echo "selected";  ?>>Yes</option>
                <option value="No" <?php if($a20f7 == "No") echo "selected";  ?>>No</option> 
              </select>
        </div>

        <div class="form-group questionBox">
          <label for="q21" class="control-label"><img class = "progressCheck" src = "<?php 
            if($a21f7 == "Not Known" || $a21f7 == ""){
              echo "../assets/images/unfilled.png";
            }else{
              echo "../assets/images/filled.png";
            }

          ?>">21. Environment Audit conducted in last one year</label>
              <select class="form-control selectAns" name="q21" required>
                <option value="Not Known" <?php if($a21f7 == "Not Known") echo "selected";  ?>>Not Known</option> 
                <option value="Yes" <?php if($a21f7 == "Yes") echo "selected";  ?>>Yes</option>
                <option value="No" <?php if($a21f7 == "No") echo "selected";  ?>>No</option> 
              </select>
        </div>

        <div class="form-group questionBox">
          <label for="q22" class="control-label"><img class = "progressCheck" src = "<?php 
            if($a22f7 == "Not Known" || $a22f7 == ""){
              echo "../assets/images/unfilled.png";
            }else{
              echo "../assets/images/filled.png";
            }

          ?>">22. Extension activities carried out in last one year</label>
              <select class="form-control selectAns" name="q22" required>
                <option value="Not Known" <?php if($a22f7 == "Not Known") echo "selected";  ?>>Not Known</option> 
                <option value="Yes" <?php if($a22f7 == "Yes") echo "selected";  ?>>Yes</option>
                <option value="No" <?php if($a22f7 == "No") echo "selected";  ?>>No</option> 
              </select>
        </div>

        <div class="form-group questionBox">
          <label for="q23" class="control-label"><img class = "progressCheck" src = "<?php 
            if($a23f7 == "Not Known" || $a23f7 == ""){
              echo "../assets/images/unfilled.png";
            }else{
              echo "../assets/images/filled.png";
            }

          ?>">23. Best Practice(s) identified</label>
              <select class="form-control selectAns" name="q23" required>
                <option value="Not Known" <?php if($a23f7 == "Not Known") echo "selected";  ?>>Not Known</option> 
                <option value="Yes" <?php if($a23f7 == "Yes") echo "selected";  ?>>Yes</option>
                <option value="No" <?php if($a23f7 == "No") echo "selected";  ?>>No</option> 
              </select>
        </div>

        <button name="submit" type="submit" class="btn btn-primary saveChange" <?php
          //  PHP CODE FOR DISABLING SAVE CHANGES BUTTON WHEN DATE EXCEEDED 
          // AND ALSO ALERTING THAT YOUR DATE FOR FILLING THIS FORM WAS EXCEEDED
          if($dateCheck == true){
            echo "disabled";
          }else{
            echo "enabled";
          }
        
        ?>>
            Save Changes
        </button>
    </form>
    <button onclick="topFunction()" id="topBtn" data-toggle="tooltip" data-placement="top" title="Go to top"><i class="fa fa-arrow-up" style="color: white;font-size: 20px;"></i></button>
    <script>
       $("#topBtn").tooltip();
    </script>
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
     <!-- Footer -->
     <footer>
     <p>&copy; <script>document.write(new Date().getFullYear())</script> - <script>document.write(new Date().getFullYear() + 1)</script> Devi Ahilya Vishwavidyalaya Indore</p>
    </footer>
  </body>
  
</html>
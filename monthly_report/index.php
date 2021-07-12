<?php session_start();
    include("../credential.php");

    $date = date_create();
    save_log($_SESSION['username'],getUserIP(),$_SERVER['REQUEST_URI'],urlencode(http_build_query($_POST, '', '&amp;')),date_format($date, 'Y-m-d H:i:s'));
    
    $year = $_GET['year'];
    $month = $_GET['month'];
    $first = date("Y-m-d");
    $last = date("Y-m-d");
    $row2 = "";
    $row3 = "";    $row13 = "";    $row23= "";    $row33="";  
    $row4 = "";    $row14="";    $row24= "";    $row34="";    
    $row5 = "";    $row15="";    $row25= "";    $row35="";    
    $row6 = "";    $row16="";    $row26= "";    $row36="";    
    $row7 = "";    $row17="";    $row27= "";    $row37="";    
    $row8 = "";    $row18="";    $row28= "";    $row38="";
    $row9 = "";    $row19="";    $row29= "";  
    $row10 = "";    $row20= "";    $row30="";    
    $row11 = "";    $row21= "";    $row31="";    
    $row12 = "";    $row22= "";    $row32= "";   
    // Connect To DB
    $connection = mysqli_connect($servername, $username, $password, $dbname);
    $user = $_SESSION['username'];
    $deptname = $_SESSION['name'];
    // Checking For Date Deadline
    $dateCheck = true;
    $todayDate = date("Y-m-d");
    $getDateQuery = "SELECT * FROM deadline WHERE id = '3'";
     $getStartDate = mysqli_query($connection, $getDateQuery);
       while($row = $getStartDate->fetch_assoc()){
   	 $first = $row['startdate'];
   	 $last = $row['enddate'];
    	}
  
    

    if(($todayDate >= $first) && ($todayDate< $last)){
    $dateCheck = true;//If User have sufficient Date Time
    

    }else{
    $dateCheck = false;//if User is out of Time to fill this form
     echo "<script>alert('Date to Fill this Form is Over, Please contact to the Administrator!')</script>";
    }


    if(!isset($_SESSION['username'])){
            header("Location: ../index.php");   }
?>
<!DOCTYPE html>
<html>
<head>
    <!-- <link rel="stylesheet" href="./css/theme.css"> -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <!-- JQuery UI -->
    <link href = "https://code.jquery.com/ui/1.10.4/themes/ui-lightness/jquery-ui.css" rel = "stylesheet">
    <script src = "https://code.jquery.com/jquery-1.10.2.js"></script>
    <script src = "https://code.jquery.com/ui/1.10.4/jquery-ui.js"></script>

    <link rel="stylesheet" href="../css/w3_l.css">
    <link rel="icon" href="../logo.png">
  <title>MONTHLY REPORT</title>
  <style>
     body{
         background-color: #fff!important;
         margin: 0px;
         padding-right: 0px!important;
        
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
        #myHeader{
            position: sticky;
            top: 0px;
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
            padding-top: 1px;
            font-family: 'calibri', 'Roboto';
        }
        .selectAns{
            padding-top: 0;
            width: 200px;
            float: right;
            margin-right: 30px;
        }
        #reportGeneratBar{
            width: 100%;
            background-color: #e0e0e0;
            align-items: center;
            margin-top: 1px;
            padding-top: 12px;
            padding-left: 45%;
            padding-right: 45%;
            margin-bottom: 1px;
            height: 60px;
        }
        .modalHeading{
              font-weight: bold;
              font-size: 23px;
          }
          .imgLink{
              margin-left: 20%;
              margin-right: 20%;

          }
          .imgLink:hover{
              opacity: 0.9;
          }
        .reportGen{
            text-align: center;
            
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
                    <div style="font-size:30px; margin-top:20px; margin-left:30px; color:#FFF"><b>Devi Ahilya Vishwavidyalaya</b></div>
                    <div style="font-size:20px; margin-top:10px; margin-left:30px; color:#FFF;"><b>Data Capturing System 2021</b></div>
                </div>
            </div>

        </div>

        <div class="col-sm-1"></div>
    </div>

    <div id="myHeader" class="col-sm-12 Username" style="z-index:10; width:100%;">
        <center><div id="myHeader1" class="col-sm-1 Username" style="padding:10px; "><a onclick="window.history.back();"><h4 style=" color:#fff; font-size:15px; cursor: pointer;" ><?php echo "BACK";?></h4></a></div></center>
        <center><div id="myHeader2" class="col-sm-10 Username" style="padding:10px;"><h4 style=" color:#fff; font-size:18px;"><?php echo strtoupper($_SESSION['name']);?></h4></div></center>
    </div>
    <br><br>
    <div id="containerHead">
      <p>MONTHLY REPORT</p>
    </div>
    <div id="noticeContainer">
       <p id="noticetext"><span style="color: red"><span><?php
          if($dateCheck == true){
            echo "<i class='fa fa-hourglass-half'> </i> Hurry! last date to fill this form is $last";
          }else{
            echo "<i class='fa fa-hourglass-end'> </i> Last Date to Fill this form is Over Please Contact Administrator";
          }
       ?><span style="color: red"><span></p>
    </div>
    <!-- Date For Filling Criterias -->
    <!-- DATE CONATINER FOR SAVING REPORT -->
    <div class="containerDate">
        <p>Choose Date of Filling</p><form method="POST" action="datesave.php"><input type="hidden" name="month" value="<?php echo $month;?>"><input type="hidden" name="year" value="<?php echo $year;?>"><input type="text"  id="datepicker" name="updateDate" value="<?php
            $connection = mysqli_connect($servername, $username, $password, $dbname);
            $dateQuery = "SELECT * FROM date_generate WHERE id='2'";
            $runQuery = mysqli_query($connection, $dateQuery);
            $res = mysqli_fetch_assoc($runQuery);
            $getPrevSavedDate = $res['date_save'];
            echo "$getPrevSavedDate";
            $connection->close();
        ?>"><button type="submit" class="btn btn-info" name="submit" id="setDate" style="float:right;margin-top: -35px; opacity: 1.0;" <?php if($dateCheck == false){echo "disabled";}else{echo "enabled";}?>>SET</button></form>
    </div>
    <div id="reportGeneratBar">
    <button type="button" class="btn btn-danger reportGen" data-toggle="modal" data-target="#exampleModalCenter">
         Generate Report
        </button>
        <!-- Modal -->
        <div class="modal fade" id="exampleModalCenter" role="dialog">
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
                    <br>
                    <p style="text-align: center; font-size: 14px; ">Prefer <b>PDF</b> for <i>Report printing</i> purpose & <i>Database</i> purpose prefer <b>CSV</b></p>
                    <?php echo "<a href='../pdf_report/monthly-report/index.php?month=$month&year=$year'"?><i class="fa fa-file-pdf-o" style="float: left;margin-left: 80px; color: red;font-size: 32px;"></i></a>
                    <?php echo "<a href='exportUser.php?username=$user&name=$deptname&month=$month&year=$year' title='CSV FILE'><i class='fa fa-file-excel-o' style='float:right;margin-right: 80px;color: green;font-size: 32px;'></i></a>"; ?>
                    <br><br>                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Form Starts -->
    
    <style>
       .questionContainer{
         width: auto;
         height: 70px;
         background-color: #E0E0E0;
         font-size: 19.3px;
         font-family: 'Calibri', 'sans serif', 'verdana';
         cursor: pointer;
         margin-top: 1px;
         margin-bottom: 1px;
       }
       .answerContainer{
         width: auto;
         height: 170px;
         background-color: #fff;
         font-size: 20px;
         padding-left: 40px;
         padding-right: 40px;
         font-family: 'Calibri', 'sans serif', 'verdana';
         border: 0.1px #ABE8F7 solid;
         display: none;
       }

      .imageArrowDown{
          height: 40px;
          width:  40px;
          color: slategrey;
      }
        .imageArrowDown:hover{
            color: grey;
            transition: 0.4s;
        }
        .questions{
            font-size: 23px;
            color: slategrey;
            margin-top: 15px;
            margin-bottom: 10px;
            margin-left: 40px;
            float: left;
        }
        textarea{
            height: 60px;
            width: auto;
            resize: none;
            rows: 5!important;
            margin-left: 0px;
            margin-right: 0px;
        }
        .progressCheck{
            width: 35px;
            height: 35px;
            margin-left :30px;
            margin-right: 30px;
            margin-top: 15px;
            float: left;
        }
        .answerBoxBtn{
            height: 32px;
            width: 150px;
            font-size: 19px;
            position: relative;
            padding: 0px;
            text-align: center;
            float: right;
            margin-right: 30px;
            margin-top: 10px;
        }
        .saveChanges{
            width: 130px;
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
        #datepicker{
          float: right;
          margin-right: 100px;
          margin-top: -30px;
          font-size: 15px;
          width: 100px;
          text-align: center;
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
        input[type="file"]{
            margin-top: 10px;
            float: left;
            margin-left: 40px;
        }
        
    </style>

    <!-- Javascript Code for toggle slide -->
     <script src="important.js"></script>
        <form method="POST" action="upload1.php?year=<?php echo $year?>&month=<?php echo $month;?>" enctype="multipart/form-data">
            <div class="questionContainer" id="q1"><img class = "progressCheck" src = "<?php 
            //Here We will set the Progress Image based on the column filled or not?
                $connection = mysqli_connect($servername, $username, $password, $dbname);
                $query = "SELECT * FROM monthly_report_q1 WHERE username = '$user' AND month = '$month' AND month='$month'";
                $myQuery = mysqli_query($connection, $query);
                if(mysqli_num_rows($myQuery)>0){
                 $result = mysqli_fetch_assoc($myQuery);
                 $row = $result['answer'];
                   echo "../assets/images/filled.png";
                 }else{
                    echo "../assets/images/unfilled.png";
                 }
                $connection->close();
            ?>"><p class="questions">1. &nbsp; &nbsp; Details of existing course(Subject) modified/updated</p></div>
            <div class="answerContainer" id="a1">
                <h5 style="margin-left: 10px; text-align: center;">RESPONSE</h5>
                <textarea name="ans" class="form-control"     placeholder="<?php
                  echo $row;
                ?>"></textarea>
                <input id="fileInput" type="file" name="file" />
                <button type="submit" id="uploadData" class="form-control btn btn-info answerBoxBtn" name="submit"><p style="text-align: center;">Save & Upload</p></button>
            </div>
        </form>
    <!-- Question Answer Block Ends -->
        <!-- Question Answer Block Starts -->
        <form method="POST" action="upload2.php?year=<?php echo $year?>&month=<?php echo $month;?>" enctype="multipart/form-data">
            <div class="questionContainer" id="q2"><img class = "progressCheck" src = "<?php 
            //Here We will set the Progress Image based on the column filled or not?
                $connection = mysqli_connect($servername, $username, $password, $dbname);
                $query = "SELECT * FROM monthly_report_q2 WHERE username = '$user' AND month = '$month'   ";
                $myQuery = mysqli_query($connection, $query);
                if(mysqli_num_rows($myQuery)>0){
                 $result = mysqli_fetch_assoc($myQuery);
                 $row2 = $result['answer'];
                   echo "../assets/images/filled.png";
                 }else{
                    echo "../assets/images/unfilled.png";
                 }
            ?>"><p class="questions">2. &nbsp; &nbsp; New Course/Subject Introduced</p></div>
            <div class="answerContainer" id="a2">
                <h5 style="margin-left: 10px; text-align: center;">RESPONSE</h5>
                <textarea name="ans" class="form-control"     placeholder="<?php
                  echo $row2;
                ?>"></textarea>
                <input id="fileInput" type="file" name="file" />
                <button type="submit" id="uploadData" class="form-control btn btn-info answerBoxBtn" name="submit" <?php if($dateCheck == true){echo "enabled";}else{echo "disabled";}?> ><p style="text-align: center;">Save & Upload</p></button>
            </div>
        </form>
    <!-- Question Answer Block Ends -->

    <!-- Question Answer Block Starts -->
    <form method="POST" action="upload3.php?year=<?php echo $year?>&month=<?php echo $month;?>" enctype="multipart/form-data">
            <div class="questionContainer" id="q3"><img class = "progressCheck" src = "<?php 
            //Here We will set the Progress Image based on the column filled or not?
                $connection = mysqli_connect($servername, $username, $password, $dbname);
                $query = "SELECT * FROM monthly_report_q3 WHERE username = '$user' AND month = '$month'";
                $myQuery = mysqli_query($connection, $query);
                if(mysqli_num_rows($myQuery)>0){
                 $result = mysqli_fetch_assoc($myQuery);
                 $row3 = $result['answer'];
                   echo "../assets/images/filled.png";
                 }else{
                    echo "../assets/images/unfilled.png";
                 }
            ?>"><p class="questions">3. &nbsp; &nbsp; New Program Started</p></div>
            <div class="answerContainer" id="a3">
                <h5 style="margin-left: 10px; text-align: center;">RESPONSE</h5>
                <textarea name="ans" class="form-control"     placeholder="<?php
                  echo $row3;
                ?>"></textarea>
                <input id="fileInput" type="file" name="file" />
                <button type="submit" id="uploadData" class="form-control btn btn-info answerBoxBtn" name="submit" <?php     if($dateCheck == true){echo "enabled";}else{echo "disabled";}?> ><p style="text-align: center;">Save & Upload</p></button>
            </div>
        </form>
    <!-- Question Answer Block Ends -->
        <!-- Question Answer Block Starts -->
        <form method="POST" action="upload4.php?year=<?php echo $year?>&month=<?php echo $month;?>" enctype="multipart/form-data">
            <div class="questionContainer" id="q4"><img class = "progressCheck" src = "<?php 
            //Here We will set the Progress Image based on the column filled or not?
                $connection = mysqli_connect($servername, $username, $password, $dbname);
                $query = "SELECT * FROM monthly_report_q4 WHERE username = '$user' AND month = '$month'   ";
                $myQuery = mysqli_query($connection, $query);
                if(mysqli_num_rows($myQuery)>0){
                 $result = mysqli_fetch_assoc($myQuery);
                 $row4 = $result['answer'];
                   echo "../assets/images/filled.png";
                 }else{
                    echo "../assets/images/unfilled.png";
                 }
            ?>"><p class="questions">4. &nbsp; &nbsp; Guest lecturers /workshops/Seminars/Webinars organized</p></div>
            <div class="answerContainer" id="a4">
                <h5 style="margin-left: 10px; text-align: center;">RESPONSE</h5>
                <textarea name="ans" class="form-control"     placeholder="<?php
                  echo $row4;
                ?>"></textarea>
                <input id="fileInput" type="file" name="file" />
                <button type="submit" id="uploadData" class="form-control btn btn-info answerBoxBtn" name="submit" <?php     if($dateCheck == true){echo "enabled";}else{echo "disabled";}?> ><p style="text-align: center;">Save & Upload</p></button>
            </div>
        </form>
    <!-- Question Answer Block Ends -->
        <!-- Question Answer Block Ends -->
        <!-- Question Answer Block Starts -->
        <form method="POST" action="upload5.php?year=<?php echo $year?>&month=<?php echo $month;?>" enctype="multipart/form-data">
            <div class="questionContainer" id="q5"><img class = "progressCheck" src = "<?php 
            //Here We will set the Progress Image based on the column filled or not?
                $connection = mysqli_connect($servername, $username, $password, $dbname);
                $query = "SELECT * FROM monthly_report_q5 WHERE username = '$user' AND month = '$month'   ";
                $myQuery = mysqli_query($connection, $query);
                if(mysqli_num_rows($myQuery)>0){
                 $result = mysqli_fetch_assoc($myQuery);
                 $row5 = $result['answer'];
                   echo "../assets/images/filled.png";
                 }else{
                    echo "../assets/images/unfilled.png";
                 }
            ?>"><p class="questions">5. &nbsp; &nbsp; Innovative teaching method addded if any</p></div>
            <div class="answerContainer" id="a5">
                <h5 style="margin-left: 10px; text-align: center;">RESPONSE</h5>
                <textarea name="ans" class="form-control"     placeholder="<?php
                  echo $row5;
                ?>"></textarea>
                <input id="fileInput" type="file" name="file" />
                <button type="submit" id="uploadData" class="form-control btn btn-info answerBoxBtn" name="submit" <?php     if($dateCheck == true){echo "enabled";}else{echo "disabled";}?> ><p style="text-align: center;">Save & Upload</p></button>
            </div>
        </form>
    <!-- Question Answer Block Ends -->
        <!-- Question Answer Block Ends -->
        <!-- Question Answer Block Starts -->
        <form method="POST" action="upload6.php?year=<?php echo $year?>&month=<?php echo $month;?>" enctype="multipart/form-data">
            <div class="questionContainer" id="q6"><img class = "progressCheck" src = "<?php 
            //Here We will set the Progress Image based on the column filled or not?
                $connection = mysqli_connect($servername, $username, $password, $dbname);
                $query = "SELECT * FROM monthly_report_q6 WHERE username = '$user' AND month = '$month'   ";
                $myQuery = mysqli_query($connection, $query);
                if(mysqli_num_rows($myQuery)>0){
                 $result = mysqli_fetch_assoc($myQuery);
                 $row6 = $result['answer'];
                   echo "../assets/images/filled.png";
                 }else{
                    echo "../assets/images/unfilled.png";
                 }
            ?>"><p class="questions">6. &nbsp; &nbsp; Funds for research provided by the institute/department to faculty members</p></div>
            <div class="answerContainer" id="a6">
                <h5 style="margin-left: 10px; text-align: center;">RESPONSE</h5>
                <textarea name="ans" class="form-control"     placeholder="<?php
                  echo $row6;
                ?>"></textarea>
                <input id="fileInput" type="file" name="file" />
                <button type="submit" id="uploadData" class="form-control btn btn-info answerBoxBtn" name="submit" <?php     if($dateCheck == true){echo "enabled";}else{echo "disabled";}?> ><p style="text-align: center;">Save & Upload</p></button>
            </div>
        </form>
    <!-- Question Answer Block Ends -->
        <!-- Question Answer Block Ends -->
        <!-- Question Answer Block Starts -->
        <form method="POST" action="upload7.php?year=<?php echo $year?>&month=<?php echo $month;?>" enctype="multipart/form-data">
            <div class="questionContainer" id="q7"><img class = "progressCheck" src = "<?php 
            //Here We will set the Progress Image based on the column filled or not?
                $connection = mysqli_connect($servername, $username, $password, $dbname);
                $query = "SELECT * FROM monthly_report_q7 WHERE username = '$user' AND month = '$month'   ";
                $myQuery = mysqli_query($connection, $query);
                if(mysqli_num_rows($myQuery)>0){
                 $result = mysqli_fetch_assoc($myQuery);
                 $row7 = $result['answer'];
                   echo "../assets/images/filled.png";
                 }else{
                    echo "../assets/images/unfilled.png";
                 }
            ?>"><p class="questions">7. &nbsp; &nbsp; Research facilities like library, laboratory, databases etc. added</p></div>
            <div class="answerContainer" id="a7">
                <h5 style="margin-left: 10px; text-align: center;">RESPONSE</h5>
                <textarea name="ans" class="form-control"     placeholder="<?php
                  echo $row7;
                ?>"></textarea>
                <input id="fileInput" type="file" name="file" />
                <button type="submit" id="uploadData" class="form-control btn btn-info answerBoxBtn" name="submit" <?php     if($dateCheck == true){echo "enabled";}else{echo "disabled";}?> ><p style="text-align: center;">Save & Upload</p></button>
            </div>
        </form>
    <!-- Question Answer Block Ends -->
        <!-- Question Answer Block Ends -->
        <!-- Question Answer Block Starts -->
        <form method="POST" action="upload8.php?year=<?php echo $year?>&month=<?php echo $month;?>" enctype="multipart/form-data">
            <div class="questionContainer" id="q8"><img class = "progressCheck" src = "<?php 
            //Here We will set the Progress Image based on the column filled or not?
                $connection = mysqli_connect($servername, $username, $password, $dbname);
                $query = "SELECT * FROM monthly_report_q8 WHERE username = '$user' AND month = '$month'   ";
                $myQuery = mysqli_query($connection, $query);
                if(mysqli_num_rows($myQuery)>0){
                 $result = mysqli_fetch_assoc($myQuery);
                 $row8 = $result['answer'];
                   echo "../assets/images/filled.png";
                 }else{
                    echo "../assets/images/unfilled.png";
                 }
            ?>"><p class="questions">8. &nbsp; &nbsp; Monetary/non-monetary incentives given to faculty members to promote research culture</p></div>
            <div class="answerContainer" id="a8">
                <h5 style="margin-left: 10px; text-align: center;">RESPONSE</h5>
                <textarea name="ans" class="form-control"     placeholder="<?php
                  echo $row8;
                ?>"></textarea>
                <input id="fileInput" type="file" name="file" />
                <button type="submit" id="uploadData" class="form-control btn btn-info answerBoxBtn" name="submit" <?php     if($dateCheck == true){echo "enabled";}else{echo "disabled";}?> ><p style="text-align: center;">Save & Upload</p></button>
            </div>
        </form>
    <!-- Question Answer Block Ends -->
        <!-- Question Answer Block Ends -->
        <!-- Question Answer Block Starts -->
        <form method="POST" action="upload9.php?year=<?php echo $year?>&month=<?php echo $month;?>" enctype="multipart/form-data">
            <div class="questionContainer" id="q9"><img class = "progressCheck" src = "<?php 
            //Here We will set the Progress Image based on the column filled or not?
                $connection = mysqli_connect($servername, $username, $password, $dbname);
                $query = "SELECT * FROM monthly_report_q9 WHERE username = '$user' AND month = '$month'   ";
                $myQuery = mysqli_query($connection, $query);
                if(mysqli_num_rows($myQuery)>0){
                 $result = mysqli_fetch_assoc($myQuery);
                 $row9 = $result['answer'];
                   echo "../assets/images/filled.png";
                 }else{
                    echo "../assets/images/unfilled.png";
                 }
            ?>"><p class="questions">9. &nbsp; &nbsp; Research papers in national referred journals are published by faculty members as per UGC list</p></div>
            <div class="answerContainer" id="a9">
                <h5 style="margin-left: 10px; text-align: center;">RESPONSE</h5>
                <textarea name="ans" class="form-control"     placeholder="<?php
                  echo $row9;
                ?>"></textarea>
                <input id="fileInput" type="file" name="file" />
                <button type="submit" id="uploadData" class="form-control btn btn-info answerBoxBtn" name="submit" <?php     if($dateCheck == true){echo "enabled";}else{echo "disabled";}?> ><p style="text-align: center;">Save & Upload</p></button>
            </div>
        </form>
    <!-- Question Answer Block Ends -->
        <!-- Question Answer Block Ends -->
        <!-- Question Answer Block Starts -->
        <form method="POST" action="upload10.php?year=<?php echo $year?>&month=<?php echo $month;?>" enctype="multipart/form-data">
            <div class="questionContainer" id="q10"><img class = "progressCheck" src = "<?php 
            //Here We will set the Progress Image based on the column filled or not?
                $connection = mysqli_connect($servername, $username, $password, $dbname);
                $query = "SELECT * FROM monthly_report_q10 WHERE username = '$user' AND month = '$month'   ";
                $myQuery = mysqli_query($connection, $query);
                if(mysqli_num_rows($myQuery)>0){
                 $result = mysqli_fetch_assoc($myQuery);
                 $row10 = $result['answer'];
                   echo "../assets/images/filled.png";
                 }else{
                    echo "../assets/images/unfilled.png";
                 }
            ?>"><p class="questions">10. &nbsp; &nbsp;Research paper in international refereed journals published by faculty members as per UGC list</p></div>
            <div class="answerContainer" id="a10">
                <h5 style="margin-left: 10px; text-align: center;">RESPONSE</h5>
                <textarea name="ans" class="form-control"     placeholder="<?php
                  echo $row10;
                ?>"></textarea>
                <input id="fileInput" type="file" name="file" />
                <button type="submit" id="uploadData" class="form-control btn btn-info answerBoxBtn" name="submit" <?php     if($dateCheck == true){echo "enabled";}else{echo "disabled";}?> ><p style="text-align: center;">Save & Upload</p></button>
            </div>
        </form>
    <!-- Question Answer Block Ends -->
        <!-- Question Answer Block Ends -->
        <!-- Question Answer Block Starts -->
        <form method="POST" action="upload11.php?year=<?php echo $year?>&month=<?php echo $month;?>" enctype="multipart/form-data">
            <div class="questionContainer" id="q11"><img class = "progressCheck" src = "<?php 
            //Here We will set the Progress Image based on the column filled or not?
                $connection = mysqli_connect($servername, $username, $password, $dbname);
                $query = "SELECT * FROM monthly_report_q11 WHERE username = '$user' AND month = '$month'   ";
                $myQuery = mysqli_query($connection, $query);
                if(mysqli_num_rows($myQuery)>0){
                 $result = mysqli_fetch_assoc($myQuery);
                 $row11 = $result['answer'];
                   echo "../assets/images/filled.png";
                 }else{
                    echo "../assets/images/unfilled.png";
                 }
            ?>"><p class="questions">11. &nbsp; &nbsp; Ph.D. awarded to students of faculty members</p></div>
            <div class="answerContainer" id="a11">
                <h5 style="margin-left: 10px; text-align: center;">RESPONSE</h5>
                <textarea name="ans" class="form-control"     placeholder="<?php
                  echo $row11;
                ?>"></textarea>
                <input id="fileInput" type="file" name="file" />
                <button type="submit" id="uploadData" class="form-control btn btn-info answerBoxBtn" name="submit" <?php     if($dateCheck == true){echo "enabled";}else{echo "disabled";}?> ><p style="text-align: center;">Save & Upload</p></button>
            </div>
        </form>
    <!-- Question Answer Block Ends -->
        <!-- Question Answer Block Ends -->
        <!-- Question Answer Block Starts -->
        <form method="POST" action="upload12.php?year=<?php echo $year?>&month=<?php echo $month;?>" enctype="multipart/form-data">
            <div class="questionContainer" id="q12"><img class = "progressCheck" src = "<?php 
            //Here We will set the Progress Image based on the column filled or not?
                $connection = mysqli_connect($servername, $username, $password, $dbname);
                $query = "SELECT * FROM monthly_report_q12 WHERE username = '$user' AND month = '$month'   ";
                $myQuery = mysqli_query($connection, $query);
                if(mysqli_num_rows($myQuery)>0){
                 $result = mysqli_fetch_assoc($myQuery);
                 $row12 = $result['answer'];
                   echo "../assets/images/filled.png";
                 }else{
                    echo "../assets/images/unfilled.png";
                 }
            ?>"><p class="questions">12. &nbsp; &nbsp;Faculty members completed their Ph.D.</p></div>
            <div class="answerContainer" id="a12">
                <h5 style="margin-left: 10px; text-align: center;">RESPONSE</h5>
                <textarea name="ans" class="form-control"     placeholder="<?php
                  echo $row12;
                ?>"></textarea>
                <input id="fileInput" type="file" name="file" />
                <button type="submit" id="uploadData" class="form-control btn btn-info answerBoxBtn" name="submit" <?php     if($dateCheck == true){echo "enabled";}else{echo "disabled";}?> ><p style="text-align: center;">Save & Upload</p></button>
            </div>
        </form>
    <!-- Question Answer Block Ends -->
        <!-- Question Answer Block Ends -->
        <!-- Question Answer Block Starts -->
        <form method="POST" action="upload13.php?year=<?php echo $year?>&month=<?php echo $month;?>" enctype="multipart/form-data">
            <div class="questionContainer" id="q13"><img class = "progressCheck" src = "<?php 
            //Here We will set the Progress Image based on the column filled or not?
                $connection = mysqli_connect($servername, $username, $password, $dbname);
                $query = "SELECT * FROM monthly_report_q13 WHERE username = '$user' AND month = '$month'   ";
                $myQuery = mysqli_query($connection, $query);
                if(mysqli_num_rows($myQuery)>0){
                 $result = mysqli_fetch_assoc($myQuery);
                 $row13 = $result['answer'];
                   echo "../assets/images/filled.png";
                 }else{
                    echo "../assets/images/unfilled.png";
                 }
            ?>"><p class="questions">13. &nbsp; &nbsp;Books published by the faculty members</p></div>
            <div class="answerContainer" id="a13">
                <h5 style="margin-left: 10px; text-align: center;">RESPONSE</h5>
                <textarea name="ans" class="form-control"     placeholder="<?php
                  echo $row13;
                ?>"></textarea>
                <input id="fileInput" type="file" name="file" />
                <button type="submit" id="uploadData" class="form-control btn btn-info answerBoxBtn" name="submit" <?php     if($dateCheck == true){echo "enabled";}else{echo "disabled";}?> ><p style="text-align: center;">Save & Upload</p></button>
            </div>
        </form>
    <!-- Question Answer Block Ends -->
        <!-- Question Answer Block Ends -->
        <!-- Question Answer Block Starts -->
        <form method="POST" action="upload14.php?year=<?php echo $year?>&month=<?php echo $month;?>" enctype="multipart/form-data">
            <div class="questionContainer" id="q14"><img class = "progressCheck" src = "<?php 
            //Here We will set the Progress Image based on the column filled or not?
                $connection = mysqli_connect($servername, $username, $password, $dbname);
                $query = "SELECT * FROM monthly_report_q14 WHERE username = '$user' AND month = '$month'   ";
                $myQuery = mysqli_query($connection, $query);
                if(mysqli_num_rows($myQuery)>0){
                 $result = mysqli_fetch_assoc($myQuery);
                 $row14 = $result['answer'];
                   echo "../assets/images/filled.png";
                 }else{
                    echo "../assets/images/unfilled.png";
                 }
            ?>"><p class="questions">14. &nbsp; &nbsp;Book Chapters written by the faculty members</p></div>
            <div class="answerContainer" id="a14">
                <h5 style="margin-left: 10px; text-align: center;">RESPONSE</h5>
                <textarea name="ans" class="form-control"     placeholder="<?php
                  echo $row14;
                ?>"></textarea>
                <input id="fileInput" type="file" name="file" />
                <button type="submit" id="uploadData" class="form-control btn btn-info answerBoxBtn" name="submit" <?php     if($dateCheck == true){echo "enabled";}else{echo "disabled";}?> ><p style="text-align: center;">Save & Upload</p></button>
            </div>
        </form>
    <!-- Question Answer Block Ends -->
        <!-- Question Answer Block Ends -->
        <!-- Question Answer Block Starts -->
        <form method="POST" action="upload15.php?year=<?php echo $year?>&month=<?php echo $month;?>" enctype="multipart/form-data">
            <div class="questionContainer" id="q15"><img class = "progressCheck" src = "<?php 
            //Here We will set the Progress Image based on the column filled or not?
                $connection = mysqli_connect($servername, $username, $password, $dbname);
                $query = "SELECT * FROM monthly_report_q15 WHERE username = '$user' AND month = '$month'";
                $myQuery = mysqli_query($connection, $query);
                if(mysqli_num_rows($myQuery)>0){
                 $result = mysqli_fetch_assoc($myQuery);
                 $row15 = $result['answer'];
                   echo "../assets/images/filled.png";
                 }else{
                    echo "../assets/images/unfilled.png";
                 }
            ?>"><p class="questions">15. &nbsp; &nbsp;Papers presented in national conferences by faculty members</p></div>
            <div class="answerContainer" id="a15">
                <h5 style="margin-left: 10px; text-align: center;">RESPONSE</h5>
                <textarea name="ans" class="form-control"     placeholder="<?php
                  echo $row15;
                ?>"></textarea>
                <input id="fileInput" type="file" name="file" />
                <button type="submit" id="uploadData" class="form-control btn btn-info answerBoxBtn" name="submit" <?php     if($dateCheck == true){echo "enabled";}else{echo "disabled";}?> ><p style="text-align: center;">Save & Upload</p></button>
            </div>
        </form>
    <!-- Question Answer Block Ends -->
        <!-- Question Answer Block Ends -->
        <!-- Question Answer Block Starts -->
        <form method="POST" action="upload16.php?year=<?php echo $year?>&month=<?php echo $month;?>" enctype="multipart/form-data">
            <div class="questionContainer" id="q16"><img class = "progressCheck" src = "<?php 
            //Here We will set the Progress Image based on the column filled or not?
                $connection = mysqli_connect($servername, $username, $password, $dbname);
                $query = "SELECT * FROM monthly_report_q16 WHERE username = '$user' AND month = '$month'   ";
                $myQuery = mysqli_query($connection, $query);
                if(mysqli_num_rows($myQuery)>0){
                 $result = mysqli_fetch_assoc($myQuery);
                 $row16 = $result['answer'];
                   echo "../assets/images/filled.png";
                 }else{
                    echo "../assets/images/unfilled.png";
                 }
            ?>"><p class="questions">16. &nbsp; &nbsp;Papers presented in International conferences by faculty members</p></div>
            <div class="answerContainer" id="a16">
                <h5 style="margin-left: 10px; text-align: center;">RESPONSE</h5>
                <textarea name="ans" class="form-control"     placeholder="<?php
                  echo $row16;
                ?>"></textarea>
                <input id="fileInput" type="file" name="file" />
                <button type="submit" id="uploadData" class="form-control btn btn-info answerBoxBtn" name="submit" <?php     if($dateCheck == true){echo "enabled";}else{echo "disabled";}?> ><p style="text-align: center;">Save & Upload</p></button>
            </div>
        </form>
    <!-- Question Answer Block Ends -->
        <!-- Question Answer Block Ends -->
        <!-- Question Answer Block Starts -->
        <form method="POST" action="upload17.php?year=<?php echo $year?>&month=<?php echo $month;?>" enctype="multipart/form-data">
            <div class="questionContainer" id="q17"><img class = "progressCheck" src = "<?php 
            //Here We will set the Progress Image based on the column filled or not?
                $connection = mysqli_connect($servername, $username, $password, $dbname);
                $query = "SELECT * FROM monthly_report_q17 WHERE username = '$user' AND month = '$month'   ";
                $myQuery = mysqli_query($connection, $query);
                if(mysqli_num_rows($myQuery)>0){
                 $result = mysqli_fetch_assoc($myQuery);
                 $row17 = $result['answer'];
                   echo "../assets/images/filled.png";
                 }else{
                    echo "../assets/images/unfilled.png";
                 }
            ?>"><p class="questions">17. &nbsp; &nbsp;Session Chaired in Conferences by faculty members</p></div>
            <div class="answerContainer" id="a17">
                <h5 style="margin-left: 10px; text-align: center;">RESPONSE</h5>
                <textarea name="ans" class="form-control"     placeholder="<?php
                  echo $row17;
                ?>"></textarea>
                <input id="fileInput" type="file" name="file" />
                <button type="submit" id="uploadData" class="form-control btn btn-info answerBoxBtn" name="submit" <?php     if($dateCheck == true){echo "enabled";}else{echo "disabled";}?> ><p style="text-align: center;">Save & Upload</p></button>
            </div>
        </form>
    <!-- Question Answer Block Ends -->
        <!-- Question Answer Block Ends -->
        <!-- Question Answer Block Starts -->
        <form method="POST" action="upload18.php?year=<?php echo $year?>&month=<?php echo $month;?>" enctype="multipart/form-data">
            <div class="questionContainer" id="q18"><img class = "progressCheck" src = "<?php 
            //Here We will set the Progress Image based on the column filled or not?
                $connection = mysqli_connect($servername, $username, $password, $dbname);
                $query = "SELECT * FROM monthly_report_q18 WHERE username = '$user' AND month = '$month'   ";
                $myQuery = mysqli_query($connection, $query);
                if(mysqli_num_rows($myQuery)>0){
                 $result = mysqli_fetch_assoc($myQuery);
                 $row18 = $result['answer'];
                   echo "../assets/images/filled.png";
                 }else{
                    echo "../assets/images/unfilled.png";
                 }
            ?>"><p class="questions">18. &nbsp; &nbsp;Consultancy projects undertaken by the faculty members</p></div>
            <div class="answerContainer" id="a18">
                <h5 style="margin-left: 10px; text-align: center;">RESPONSE</h5>
                <textarea name="ans" class="form-control"     placeholder="<?php
                  echo $row18;
                ?>"></textarea>
                <input id="fileInput" type="file" name="file" />
                <button type="submit" id="uploadData" class="form-control btn btn-info answerBoxBtn" name="submit" <?php     if($dateCheck == true){echo "enabled";}else{echo "disabled";}?> ><p style="text-align: center;">Save & Upload</p></button>
            </div>
        </form>
    <!-- Question Answer Block Ends -->
        <!-- Question Answer Block Ends -->
        <!-- Question Answer Block Starts -->
        <form method="POST" action="upload19.php?year=<?php echo $year?>&month=<?php echo $month;?>" enctype="multipart/form-data">
            <div class="questionContainer" id="q19"><img class = "progressCheck" src = "<?php 
            //Here We will set the Progress Image based on the column filled or not?
                $connection = mysqli_connect($servername, $username, $password, $dbname);
                $query = "SELECT * FROM monthly_report_q19 WHERE username = '$user' AND month = '$month'   ";
                $myQuery = mysqli_query($connection, $query);
                if(mysqli_num_rows($myQuery)>0){
                 $result = mysqli_fetch_assoc($myQuery);
                 $row19 = $result['answer'];
                   echo "../assets/images/filled.png";
                 }else{
                    echo "../assets/images/unfilled.png";
                 }
            ?>"><p class="questions">19. &nbsp; &nbsp;Funded projects taken up by the faculty members</p></div>
            <div class="answerContainer" id="a19">
                <h5 style="margin-left: 10px; text-align: center;">RESPONSE</h5>
                <textarea name="ans" class="form-control"     placeholder="<?php
                  echo $row19;
                ?>"></textarea>
                <input id="fileInput" type="file" name="file" />
                <button type="submit" id="uploadData" class="form-control btn btn-info answerBoxBtn" name="submit" <?php     if($dateCheck == true){echo "enabled";}else{echo "disabled";}?> ><p style="text-align: center;">Save & Upload</p></button>
            </div>
        </form>
    <!-- Question Answer Block Ends -->
        <!-- Question Answer Block Ends -->
        <!-- Question Answer Block Starts -->
        <form method="POST" action="upload20.php?year=<?php echo $year?>&month=<?php echo $month;?>" enctype="multipart/form-data">            
            <div class="questionContainer" id="q20"><img class = "progressCheck" src = "<?php 
            //Here We will set the Progress Image based on the column filled or not?
                $connection = mysqli_connect($servername, $username, $password, $dbname);
                $query = "SELECT * FROM monthly_report_q20 WHERE username = '$user' AND month = '$month'   ";
                $myQuery = mysqli_query($connection, $query);
                if(mysqli_num_rows($myQuery)>0){
                 $result = mysqli_fetch_assoc($myQuery);
                 $row20 = $result['answer'];
                   echo "../assets/images/filled.png";
                 }else{
                    echo "../assets/images/unfilled.png";
                 }
            ?>"><p class="questions">20. &nbsp; &nbsp;e-Content/MOOC developed by the faculty members</p></div>
            <div class="answerContainer" id="a20">
                <h5 style="margin-left: 10px; text-align: center;">RESPONSE</h5>
                <textarea name="ans" class="form-control"     placeholder="<?php
                  echo $row20;
                ?>"></textarea>
                <input id="fileInput" type="file" name="file" />
                <button type="submit" id="uploadData" class="form-control btn btn-info answerBoxBtn" name="submit" <?php     if($dateCheck == true){echo "enabled";}else{echo "disabled";}?> ><p style="text-align: center;">Save & Upload</p></button>
            </div>
        </form>
    <!-- Question Answer Block Ends -->
        <!-- Question Answer Block Ends -->
        <!-- Question Answer Block Starts -->
        <form method="POST" action="upload21.php?year=<?php echo $year?>&month=<?php echo $month;?>" enctype="multipart/form-data">
            <div class="questionContainer" id="q21"><img class = "progressCheck" src = "<?php 
            //Here We will set the Progress Image based on the column filled or not?
                $connection = mysqli_connect($servername, $username, $password, $dbname);
                $query = "SELECT * FROM monthly_report_q21 WHERE username = '$user' AND month = '$month'   ";
                $myQuery = mysqli_query($connection, $query);
                if(mysqli_num_rows($myQuery)>0){
                 $result = mysqli_fetch_assoc($myQuery);
                 $row21 = $result['answer'];
                   echo "../assets/images/filled.png";
                 }else{
                    echo "../assets/images/unfilled.png";
                 }
            ?>"><p class="questions">21. &nbsp; &nbsp;Award/recognitions achieved by the faculty members</p></div>
            <div class="answerContainer" id="a21">
                <h5 style="margin-left: 10px; text-align: center;">RESPONSE</h5>
                <textarea name="ans" class="form-control"     placeholder="<?php
                  echo $row21;
                ?>"></textarea>
                <input id="fileInput" type="file" name="file" />
                <button type="submit" id="uploadData" class="form-control btn btn-info answerBoxBtn" name="submit" <?php     if($dateCheck == true){echo "enabled";}else{echo "disabled";}?> ><p style="text-align: center;">Save & Upload</p></button>
            </div>
        </form>
    <!-- Question Answer Block Ends -->
        <!-- Question Answer Block Ends -->
        <!-- Question Answer Block Starts -->
        <form method="POST" action="upload22.php?year=<?php echo $year?>&month=<?php echo $month;?>" enctype="multipart/form-data">
            <div class="questionContainer" id="q22"><img class = "progressCheck" src = "<?php 
            //Here We will set the Progress Image based on the column filled or not?
                $connection = mysqli_connect($servername, $username, $password, $dbname);
                $query = "SELECT * FROM monthly_report_q22 WHERE username = '$user' AND month = '$month'   ";
                $myQuery = mysqli_query($connection, $query);
                if(mysqli_num_rows($myQuery)>0){
                 $result = mysqli_fetch_assoc($myQuery);
                 $row22 = $result['answer'];
                   echo "../assets/images/filled.png";
                 }else{
                    echo "../assets/images/unfilled.png";
                 }
            ?>"><p class="questions">22. &nbsp; &nbsp;Collaborative Research activities under taken by the department</p></div>
            <div class="answerContainer" id="a22">
                <h5 style="margin-left: 10px; text-align: center;">RESPONSE</h5>
                <textarea name="ans" class="form-control"     placeholder="<?php
                  echo $row22;
                ?>"></textarea>
                <input id="fileInput" type="file" name="file" />
                <button type="submit" id="uploadData" class="form-control btn btn-info answerBoxBtn" name="submit" <?php     if($dateCheck == true){echo "enabled";}else{echo "disabled";}?> ><p style="text-align: center;">Save & Upload</p></button>
            </div>
        </form>
    <!-- Question Answer Block Ends -->
        <!-- Question Answer Block Ends -->
        <!-- Question Answer Block Starts -->
        <form method="POST" action="upload23.php?year=<?php echo $year?>&month=<?php echo $month;?>" enctype="multipart/form-data">            
            <div class="questionContainer" id="q23"><img class = "progressCheck" src = "<?php 
            //Here We will set the Progress Image based on the column filled or not?
                $connection = mysqli_connect($servername, $username, $password, $dbname);
                $query = "SELECT * FROM monthly_report_q23 WHERE username = '$user' AND month = '$month'   ";
                $myQuery = mysqli_query($connection, $query);
                if(mysqli_num_rows($myQuery)>0){
                 $result = mysqli_fetch_assoc($myQuery);
                 $row23 = $result['answer'];
                   echo "../assets/images/filled.png";
                 }else{
                    echo "../assets/images/unfilled.png";
                 }
            ?>"><p class="questions">23. &nbsp; &nbsp;Consultancy projects which lead to solution of specific social/business problems</p></div>
            <div class="answerContainer" id="a23">
                <h5 style="margin-left: 10px; text-align: center;">RESPONSE</h5>
                <textarea name="ans" class="form-control"     placeholder="<?php
                  echo $row23;
                ?>"></textarea>
                <input id="fileInput" type="file" name="file" />
                <button type="submit" id="uploadData" class="form-control btn btn-info answerBoxBtn" name="submit" <?php     if($dateCheck == true){echo "enabled";}else{echo "disabled";}?> ><p style="text-align: center;">Save & Upload</p></button>
            </div>
        </form>
    <!-- Question Answer Block Ends -->
        <!-- Question Answer Block Ends -->
        <!-- Question Answer Block Starts -->
        <form method="POST" action="upload24.php?year=<?php echo $year?>&month=<?php echo $month;?>" enctype="multipart/form-data">
            <div class="questionContainer" id="q24"><img class = "progressCheck" src = "<?php 
            //Here We will set the Progress Image based on the column filled or not?
                $connection = mysqli_connect($servername, $username, $password, $dbname);
                $query = "SELECT * FROM monthly_report_q24 WHERE username = '$user' AND month = '$month'   ";
                $myQuery = mysqli_query($connection, $query);
                if(mysqli_num_rows($myQuery)>0){
                 $result = mysqli_fetch_assoc($myQuery);
                 $row24 = $result['answer'];
                   echo "../assets/images/filled.png";
                 }else{
                    echo "../assets/images/unfilled.png";
                 }
            ?>"><p class="questions">24. &nbsp; &nbsp;Patents/Trademark taken by faculty members</p></div>
            <div class="answerContainer" id="a24">
                <h5 style="margin-left: 10px; text-align: center;">RESPONSE</h5>
                <textarea name="ans" class="form-control"     placeholder="<?php
                  echo $row24;
                ?>"></textarea>
                <input id="fileInput" type="file" name="file" />
                <button type="submit" id="uploadData" class="form-control btn btn-info answerBoxBtn" name="submit" <?php     if($dateCheck == true){echo "enabled";}else{echo "disabled";}?> ><p style="text-align: center;">Save & Upload</p></button>
            </div>
        </form>
    <!-- Question Answer Block Ends -->
        <!-- Question Answer Block Ends -->
        <!-- Question Answer Block Starts -->
        <form method="POST" action="upload25.php?year=<?php echo $year?>&month=<?php echo $month;?>" enctype="multipart/form-data">
            <div class="questionContainer" id="q25"><img class = "progressCheck" src = "<?php 
            //Here We will set the Progress Image based on the column filled or not?
                $connection = mysqli_connect($servername, $username, $password, $dbname);
                $query = "SELECT * FROM monthly_report_q25 WHERE username = '$user' AND month = '$month'   ";
                $myQuery = mysqli_query($connection, $query);
                if(mysqli_num_rows($myQuery)>0){
                 $result = mysqli_fetch_assoc($myQuery);
                 $row25 = $result['answer'];
                   echo "../assets/images/filled.png";
                 }else{
                    echo "../assets/images/unfilled.png";
                 }
            ?>"><p class="questions">25. &nbsp; &nbsp;New MOU/ Collaboration</p></div>
            <div class="answerContainer" id="a25">
                <h5 style="margin-left: 10px; text-align: center;">RESPONSE</h5>
                <textarea name="ans" class="form-control"     placeholder="<?php
                  echo $row25;
                ?>"></textarea>
                <input id="fileInput" type="file" name="file" />
                <button type="submit" id="uploadData" class="form-control btn btn-info answerBoxBtn" name="submit" <?php     if($dateCheck == true){echo "enabled";}else{echo "disabled";}?> ><p style="text-align: center;">Save & Upload</p></button>
            </div>
        </form>
    <!-- Question Answer Block Ends -->
        <!-- Question Answer Block Ends -->
        <!-- Question Answer Block Starts -->
        <form method="POST" action="upload26.php?year=<?php echo $year?>&month=<?php echo $month;?>" enctype="multipart/form-data">
            <div class="questionContainer" id="q26"><img class = "progressCheck" src = "<?php 
            //Here We will set the Progress Image based on the column filled or not?
                $connection = mysqli_connect($servername, $username, $password, $dbname);
                $query = "SELECT * FROM monthly_report_q26 WHERE username = '$user' AND month = '$month'   ";
                $myQuery = mysqli_query($connection, $query);
                if(mysqli_num_rows($myQuery)>0){
                 $result = mysqli_fetch_assoc($myQuery);
                 $row26 = $result['answer'];
                   echo "../assets/images/filled.png";
                 }else{
                    echo "../assets/images/unfilled.png";
                 }
            ?>"><p class="questions">26. &nbsp; &nbsp;New Physical/Infrastructural facility added</p></div>
            <div class="answerContainer" id="a26">
                <h5 style="margin-left: 10px; text-align: center;">RESPONSE</h5>
                <textarea name="ans" class="form-control"     placeholder="<?php
                  echo $row26;
                ?>"></textarea>
                <input id="fileInput" type="file" name="file" />
                <button type="submit" id="uploadData" class="form-control btn btn-info answerBoxBtn" name="submit" <?php     if($dateCheck == true){echo "enabled";}else{echo "disabled";}?> ><p style="text-align: center;">Save & Upload</p></button>
            </div>
        </form>
    <!-- Question Answer Block Ends -->
        <!-- Question Answer Block Ends -->
        <!-- Question Answer Block Starts -->
        <form method="POST" action="upload27.php?year=<?php echo $year?>&month=<?php echo $month;?>" enctype="multipart/form-data">
            <div class="questionContainer" id="q27"><img class = "progressCheck" src = "<?php 
            //Here We will set the Progress Image based on the column filled or not?
                $connection = mysqli_connect($servername, $username, $password, $dbname);
                $query = "SELECT * FROM monthly_report_q27 WHERE username = '$user' AND month = '$month'   ";
                $myQuery = mysqli_query($connection, $query);
                if(mysqli_num_rows($myQuery)>0){
                 $result = mysqli_fetch_assoc($myQuery);
                 $row27 = $result['answer'];
                   echo "../assets/images/filled.png";
                 }else{
                    echo "../assets/images/unfilled.png";
                 }
            ?>"><p class="questions">27. &nbsp; &nbsp;Co-curricular/Skill Development activities for students organised</p></div>
            <div class="answerContainer" id="a27">
                <h5 style="margin-left: 10px; text-align: center;">RESPONSE</h5>
                <textarea name="ans" class="form-control"     placeholder="<?php
                  echo $row27;
                ?>"></textarea>
                <input id="fileInput" type="file" name="file" />
                <button type="submit" id="uploadData" class="form-control btn btn-info answerBoxBtn" name="submit" <?php     if($dateCheck == true){echo "enabled";}else{echo "disabled";}?> ><p style="text-align: center;">Save & Upload</p></button>
            </div>
        </form>
    <!-- Question Answer Block Ends -->
        <!-- Question Answer Block Ends -->
        <!-- Question Answer Block Starts -->
        <form method="POST" action="upload28.php?year=<?php echo $year?>&month=<?php echo $month;?>" enctype="multipart/form-data">
            <div class="questionContainer" id="q28"><img class = "progressCheck" src = "<?php 
            //Here We will set the Progress Image based on the column filled or not?
                $connection = mysqli_connect($servername, $username, $password, $dbname);
                $query = "SELECT * FROM monthly_report_q28 WHERE username = '$user' AND month = '$month'   ";
                $myQuery = mysqli_query($connection, $query);
                if(mysqli_num_rows($myQuery)>0){
                 $result = mysqli_fetch_assoc($myQuery);
                 $row28 = $result['answer'];
                   echo "../assets/images/filled.png";
                 }else{
                    echo "../assets/images/unfilled.png";
                 }
            ?>"><p class="questions">28. &nbsp; &nbsp;Sports/Cultural activities organised</p></div>
            <div class="answerContainer" id="a28">
                <h5 style="margin-left: 10px; text-align: center;">RESPONSE</h5>
                <textarea name="ans" class="form-control"     placeholder="<?php
                  echo $row28;
                ?>"></textarea>
                <input id="fileInput" type="file" name="file" />
                <button type="submit" id="uploadData" class="form-control btn btn-info answerBoxBtn" name="submit" <?php     if($dateCheck == true){echo "enabled";}else{echo "disabled";}?> ><p style="text-align: center;">Save & Upload</p></button>
            </div>
        </form>
    <!-- Question Answer Block Ends -->
        <!-- Question Answer Block Ends -->
        <!-- Question Answer Block Starts -->
        <form method="POST" action="upload29.php?year=<?php echo $year?>&month=<?php echo $month;?>" enctype="multipart/form-data">
            <div class="questionContainer" id="q29"><img class = "progressCheck" src = "<?php 
            //Here We will set the Progress Image based on the column filled or not?
                $connection = mysqli_connect($servername, $username, $password, $dbname);
                $query = "SELECT * FROM monthly_report_q29 WHERE username = '$user' AND month = '$month'   ";
                $myQuery = mysqli_query($connection, $query);
                if(mysqli_num_rows($myQuery)>0){
                 $result = mysqli_fetch_assoc($myQuery);
                 $row29 = $result['answer'];
                   echo "../assets/images/filled.png";
                 }else{
                    echo "../assets/images/unfilled.png";
                 }
            ?>"><p class="questions">29. &nbsp; &nbsp;Campus Placement Details</p></div>
            <div class="answerContainer" id="a29">
                <h5 style="margin-left: 10px; text-align: center;">RESPONSE</h5>
                <textarea name="ans" class="form-control"     placeholder="<?php
                  echo $row29;
                ?>"></textarea>
                <input id="fileInput" type="file" name="file" />
                <button type="submit" id="uploadData" class="form-control btn btn-info answerBoxBtn" name="submit" <?php     if($dateCheck == true){echo "enabled";}else{echo "disabled";}?> ><p style="text-align: center;">Save & Upload</p></button>
            </div>
        </form>
    <!-- Question Answer Block Ends -->
        <!-- Question Answer Block Ends -->
        <!-- Question Answer Block Starts -->
        <form method="POST" action="upload30.php?year=<?php echo $year?>&month=<?php echo $month;?>" enctype="multipart/form-data">
            <div class="questionContainer" id="q30"><img class = "progressCheck" src = "<?php 
            //Here We will set the Progress Image based on the column filled or not?
                $connection = mysqli_connect($servername, $username, $password, $dbname);
                $query = "SELECT * FROM monthly_report_q30 WHERE username = '$user' AND month = '$month'   ";
                $myQuery = mysqli_query($connection, $query);
                if(mysqli_num_rows($myQuery)>0){
                 $result = mysqli_fetch_assoc($myQuery);
                 $row30 = $result['answer'];
                   echo "../assets/images/filled.png";
                 }else{
                    echo "../assets/images/unfilled.png";
                 }
            ?>"><p class="questions">30. &nbsp; &nbsp;Scholary Acheivement of Students</p></div>
            <div class="answerContainer" id="a30">
                <h5 style="margin-left: 10px; text-align: center;">RESPONSE</h5>
                <textarea name="ans" class="form-control"     placeholder="<?php
                  echo $row30;
                ?>"></textarea>
                <input id="fileInput" type="file" name="file" />
                <button type="submit" id="uploadData" class="form-control btn btn-info answerBoxBtn" name="submit" <?php     if($dateCheck == true){echo "enabled";}else{echo "disabled";}?> ><p style="text-align: center;">Save & Upload</p></button>
            </div>
        </form>
    <!-- Question Answer Block Ends -->
        <!-- Question Answer Block Ends -->
        <!-- Question Answer Block Starts -->
        <form method="POST" action="upload31.php?year=<?php echo $year?>&month=<?php echo $month;?>" enctype="multipart/form-data">
            <div class="questionContainer" id="q31"><img class = "progressCheck" src = "<?php 
            //Here We will set the Progress Image based on the column filled or not?
                $connection = mysqli_connect($servername, $username, $password, $dbname);
                $query = "SELECT * FROM monthly_report_q31 WHERE username = '$user' AND month = '$month'   ";
                $myQuery = mysqli_query($connection, $query);
                if(mysqli_num_rows($myQuery)>0){
                 $result = mysqli_fetch_assoc($myQuery);
                 $row31 = $result['answer'];
                   echo "../assets/images/filled.png";
                 }else{
                    echo "../assets/images/unfilled.png";
                 }
            ?>"><p class="questions">31. &nbsp; &nbsp;Extracurricular Acheivement of the Student</p></div>
            <div class="answerContainer" id="a31">
                <h5 style="margin-left: 10px; text-align: center;">RESPONSE</h5>
                <textarea name="ans" class="form-control"     placeholder="<?php
                  echo $row31;
                ?>"></textarea>
                <input id="fileInput" type="file" name="file" />
                <button type="submit" id="uploadData" class="form-control btn btn-info answerBoxBtn" name="submit" <?php     if($dateCheck == true){echo "enabled";}else{echo "disabled";}?> ><p style="text-align: center;">Save & Upload</p></button>
            </div>
        </form>
    <!-- Question Answer Block Ends -->
        <!-- Question Answer Block Ends -->
        <!-- Question Answer Block Starts -->
        <form method="POST" action="upload32.php?year=<?php echo $year?>&month=<?php echo $month;?>" enctype="multipart/form-data">
            <div class="questionContainer" id="q32"><img class = "progressCheck" src = "<?php 
            //Here We will set the Progress Image based on the column filled or not?
                $connection = mysqli_connect($servername, $username, $password, $dbname);
                $query = "SELECT * FROM monthly_report_q32 WHERE username = '$user' AND month = '$month'   ";
                $myQuery = mysqli_query($connection, $query);
                if(mysqli_num_rows($myQuery)>0){
                 $result = mysqli_fetch_assoc($myQuery);
                 $row32 = $result['answer'];
                   echo "../assets/images/filled.png";
                 }else{
                    echo "../assets/images/unfilled.png";
                 }
            ?>"><p class="questions">32. &nbsp; &nbsp;Faculty welfare activities carried out</p></div>
            <div class="answerContainer" id="a32">
                <h5 style="margin-left: 10px; text-align: center;">RESPONSE</h5>
                <textarea name="ans" class="form-control"     placeholder="<?php
                  echo $row32;
                ?>"></textarea>
                <input id="fileInput" type="file" name="file" />
                <button type="submit" id="uploadData" class="form-control btn btn-info answerBoxBtn" name="submit" <?php     if($dateCheck == true){echo "enabled";}else{echo "disabled";}?> ><p style="text-align: center;">Save & Upload</p></button>
            </div>
        </form>
    <!-- Question Answer Block Ends -->
        <!-- Question Answer Block Ends -->
        <!-- Question Answer Block Starts -->
        <form method="POST" action="upload33.php?year=<?php echo $year?>&month=<?php echo $month;?>" enctype="multipart/form-data"> 
            <div class="questionContainer" id="q33"><img class = "progressCheck" src = "<?php 
            //Here We will set the Progress Image based on the column filled or not?
                $connection = mysqli_connect($servername, $username, $password, $dbname);
                $query = "SELECT * FROM monthly_report_q33 WHERE username = '$user' AND month = '$month'   ";
                $myQuery = mysqli_query($connection, $query);
                if(mysqli_num_rows($myQuery)>0){
                 $result = mysqli_fetch_assoc($myQuery);
                 $row33 = $result['answer'];
                   echo "../assets/images/filled.png";
                 }else{
                    echo "../assets/images/unfilled.png";
                 }
            ?>"><p class="questions">33. &nbsp; &nbsp;Faculty motivational activities carried out</p></div>
            <div class="answerContainer" id="a33">
                <h5 style="margin-left: 10px; text-align: center;">RESPONSE</h5>
                <textarea name="ans" class="form-control"     placeholder="<?php
                  echo $row33;
                ?>"></textarea>
                <input id="fileInput" type="file" name="file" />
                <button type="submit" id="uploadData" class="form-control btn btn-info answerBoxBtn" name="submit" <?php     if($dateCheck == true){echo "enabled";}else{echo "disabled";}?> ><p style="text-align: center;">Save & Upload</p></button>
            </div>
        </form>
    <!-- Question Answer Block Ends -->
        <!-- Question Answer Block Ends -->
        <!-- Question Answer Block Starts -->
        <form method="POST" action="upload34.php?year=<?php echo $year?>&month=<?php echo $month;?>" enctype="multipart/form-data">            
            <div class="questionContainer" id="q34"><img class = "progressCheck" src = "<?php 
            //Here We will set the Progress Image based on the column filled or not?
                $connection = mysqli_connect($servername, $username, $password, $dbname);
                $query = "SELECT * FROM monthly_report_q34 WHERE username = '$user' AND month = '$month'  ";
                $myQuery = mysqli_query($connection, $query);
                if(mysqli_num_rows($myQuery)>0){
                 $result = mysqli_fetch_assoc($myQuery);
                 $row34 = $result['answer'];
                   echo "../assets/images/filled.png";
                 }else{
                    echo "../assets/images/unfilled.png";
                 }
            ?>"><p class="questions">34. &nbsp; &nbsp;Non-Teaching Staff welfare activities carried out</p></div>
            <div class="answerContainer" id="a34">
                <h5 style="margin-left: 10px; text-align: center;">RESPONSE</h5>
                <textarea name="ans" class="form-control"     placeholder="<?php
                  echo $row34;
                ?>"></textarea>
                <input id="fileInput" type="file" name="file" />
                <button type="submit" id="uploadData" class="form-control btn btn-info answerBoxBtn" name="submit" <?php     if($dateCheck == true){echo "enabled";}else{echo "disabled";}?> ><p style="text-align: center;">Save & Upload</p></button>
            </div>
        </form>
    <!-- Question Answer Block Ends -->
        <!-- Question Answer Block Ends -->
        <!-- Question Answer Block Starts -->
        <form method="POST" action="upload35.php?year=<?php echo $year?>&month=<?php echo $month;?>" enctype="multipart/form-data">
            
            <div class="questionContainer" id="q35"><img class = "progressCheck" src = "<?php 
            //Here We will set the Progress Image based on the column filled or not?
                $connection = mysqli_connect($servername, $username, $password, $dbname);
                $query = "SELECT * FROM monthly_report_q35 WHERE username = '$user' AND month = '$month'";
                $myQuery = mysqli_query($connection, $query);
                if(mysqli_num_rows($myQuery)>0){
                 $result = mysqli_fetch_assoc($myQuery);
                 $row35 = $result['answer'];
                   echo "../assets/images/filled.png";
                 }else{
                    echo "../assets/images/unfilled.png";
                 }
            ?>"><p class="questions">35. &nbsp; &nbsp;Non-Teaching Staff motivational activities carried out</p></div>
            <div class="answerContainer" id="a35">
                <h5 style="margin-left: 10px; text-align: center;">RESPONSE</h5>
                <textarea name="ans" class="form-control"     placeholder="<?php
                  echo $row35;
                ?>"></textarea>
                <input id="fileInput" type="file" name="file" />
                <button type="submit" id="uploadData" class="form-control btn btn-info answerBoxBtn" name="submit" <?php     if($dateCheck == true){echo "enabled";}else{echo "disabled";}?> ><p style="text-align: center;">Save & Upload</p></button>
            </div>
        </form>
    <!-- Question Answer Block Ends -->
        <!-- Question Answer Block Ends -->
        <!-- Question Answer Block Starts -->
        <form method="POST" action="upload36.php?year=<?php echo $year?>&month=<?php echo $month;?>" enctype="multipart/form-data">
            <div class="questionContainer" id="q36"><img class = "progressCheck" src = "<?php 
            //Here We will set the Progress Image based on the column filled or not?
                $connection = mysqli_connect($servername, $username, $password, $dbname);
                $query = "SELECT * FROM monthly_report_q36 WHERE username = '$user' AND month = '$month'";
                $myQuery = mysqli_query($connection, $query);
                if(mysqli_num_rows($myQuery)>0){
                 $result = mysqli_fetch_assoc($myQuery);
                 $row36 = $result['answer'];
                   echo "../assets/images/filled.png";
                 }else{
                    echo "../assets/images/unfilled.png";
                 }
            ?>"><p class="questions">36. &nbsp; &nbsp;Energy and Environmental concern related initiatives</p></div>
            <div class="answerContainer" id="a36">
                <h5 style="margin-left: 10px; text-align: center;">RESPONSE</h5>
                <textarea name="ans" class="form-control"     placeholder="<?php
                  echo $row36;
                ?>"></textarea>
                <input id="fileInput" type="file" name="file" />
                <button type="submit" id="uploadData" class="form-control btn btn-info answerBoxBtn" name="submit" <?php     if($dateCheck == true){echo "enabled";}else{echo "disabled";}?> ><p style="text-align: center;">Save & Upload</p></button>
            </div>
        </form>
    <!-- Question Answer Block Ends -->
        <!-- Question Answer Block Ends -->
        <!-- Question Answer Block Starts -->
        <form method="POST" action="upload37.php?year=<?php echo $year?>&month=<?php echo $month;?>" enctype="multipart/form-data">
            <div class="questionContainer" id="q37"><img class = "progressCheck" src = "<?php 
            //Here We will set the Progress Image based on the column filled or not?
                $connection = mysqli_connect($servername, $username, $password, $dbname);
                $query = "SELECT * FROM monthly_report_q37 WHERE username = '$user' AND month = '$month'";
                $myQuery = mysqli_query($connection, $query);
                if(mysqli_num_rows($myQuery)>0){
                 $result = mysqli_fetch_assoc($myQuery);
                 $row37 = $result['answer'];
                   echo "../assets/images/filled.png";
                 }else{
                    echo "../assets/images/unfilled.png";
                 }
            ?>"><p class="questions">37. &nbsp; &nbsp;Extension Activities conducted</p></div>
            <div class="answerContainer" id="a37">
                <h5 style="margin-left: 10px; text-align: center;">RESPONSE</h5>
                <textarea name="ans" class="form-control"     placeholder="<?php
                  echo $row37;
                ?>"></textarea>
                <input id="fileInput" type="file" name="file" />
                <button type="submit" id="uploadData" class="form-control btn btn-info answerBoxBtn" name="submit" <?php     if($dateCheck == true){echo "enabled";}else{echo "disabled";}?> ><p style="text-align: center;">Save & Upload</p></button>
            </div>
        </form>
    <!-- Question Answer Block Ends -->
        <!-- Question Answer Block Ends -->
        <!-- Question Answer Block Starts -->
        <form method="POST" action="upload38.php?year=<?php echo $year?>&month=<?php echo $month;?>" enctype="multipart/form-data">            
            <div class="questionContainer" id="q38"><img class = "progressCheck" src = "<?php 
            //Here We will set the Progress Image based on the column filled or not?
                $connection = mysqli_connect($servername, $username, $password, $dbname);
                $query = "SELECT * FROM monthly_report_q38 WHERE username = '$user' AND month = '$month'";
                $myQuery = mysqli_query($connection, $query);
                if(mysqli_num_rows($myQuery)>0){
                 $result = mysqli_fetch_assoc($myQuery);
                 $row38 = $result['answer'];
                   echo "../assets/images/filled.png";
                 }else{
                    echo "../assets/images/unfilled.png";
                 }
            ?>"><p class="questions">38. &nbsp; &nbsp;Any other achievement/remarkable development/contribution</p></div>
            <div class="answerContainer" id="a38">
                <h5 style="margin-left: 10px; text-align: center;">RESPONSE</h5>
                <textarea name="ans" class="form-control"     placeholder="<?php
                  echo $row38;
                ?>"></textarea>
                <input id="fileInput" type="file" name="file" />
                <button type="submit" id="uploadData" class="form-control btn btn-info answerBoxBtn" name="submit" <?php     if($dateCheck == true){echo "enabled";}else{echo "disabled";}?> ><p style="text-align: center;">Save & Upload</p></button>
            </div>
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
            <br><br>
            <p>&copy; <script>document.write(new Date().getFullYear())</script> - <script>document.write(new Date().getFullYear() + 1)</script> Devi Ahilya Vishwavidyalaya,  Indore(M.P.)</p>
        </footer>

  </body>
  
</html>
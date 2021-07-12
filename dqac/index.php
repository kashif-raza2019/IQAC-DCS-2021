<?php session_start();
include("../credential.php");

$date = date_create();
save_log($_SESSION['username'],getUserIP(),$_SERVER['REQUEST_URI'],urlencode(http_build_query($_POST, '', '&amp;')),date_format($date, 'Y-m-d H:i:s'));

$user = $_SESSION['username']; 
$deptName = $_SESSION['name'];
$first = "";
$last = "";
$rowHead1name = "";
$rowHead1desig = "";
$rowHead1affil = "";
$rowHead1email = "";
$rowHead1contact = "";
$notice11 = "";
// Connect To DB
$connection = mysqli_connect($servername, $username, $password, $dbname);

    // Checking For Date Deadline
    $dateCheck = true;
    $todayDate = date("Y-m-d");
    $getDateQuery = "SELECT * FROM deadline WHERE id = '6'";
    $getStartDate = mysqli_query($connection, $getDateQuery);
    while($row = $getStartDate->fetch_assoc()){
    $first = $row['startdate'];
    $last = $row['enddate'];
    }
    if(($todayDate >= $first) && ($todayDate< $last)){
    $dateCheck = false;//If User have sufficient Date Time
    $alertString = "Hurry! Only Few Days Left to Fill this Form";
    // echo "<script>alert('$alertString')</script>";
    }else{
    $dateCheck = true;//if User is out of Time to fill this form
    echo "<script>alert('Last date to Fill this Form is Over, Please contact to the Administrator!')</script>";
    }


if(!isset($_SESSION['username'])){
		header("Location: ../index.php");   }
    $connection->close();
?>
<!DOCTYPE html>
<html>
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" href="../logo.png">
    <link rel="stylesheet" href="../css/w3_l.css">
    <script src="../js/jquery.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
    <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
    <script src="../js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="../css/bootstrap.min.css">
    <title><?php echo strtoupper($_SESSION['name']);?></title>
    <style>
        html{
            scroll-behavior: smooth;
        }
        body{
            background-color: #fff!important;
            
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
                margin-bottom: 1px;
                padding-top: 10px;
                padding-left: 45%;
                padding-right: 45%;
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
            
            #myHeader{
                position: sticky;
                top: 0;
            }
            .containerDate{
                width: auto;
                height:60px;
                margin-top: 1px;
                margin-bottom: 1px;
                padding-left: 30px;
                background-color: #E0E0E0;
                color: black;
                font-size: 18px;
                padding-top: 10px;
                font-family: 'Bahnschrift', 'Roboto';  
            }
            #datepicker{
                width: 100px;
            }
            #dateTxt{
                float: left;
                width: 180px;
                margin-left: 100px;
                padding-top: 10px;
            }
            #datepick{
                float: left;
                width: 180px;
                margin-left: 50%;
                margin-top: 4px;
            }
            .reportGen{
                text-align: center;
            }
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
       .questionContainer:hover{
           opacity: 0.9;
           
       }
       .answerContainer{
         width: auto;
         height: 150px;
         background-color: #fff;
         font-size: 19px;
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
            height: 30px;
            width: auto;
            resize: none;
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
            opacity: 0.85;
        }
        input[type="file"]{
            margin-top: 10px;
            float: left;
            margin-left: 40px;
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
        <center><div id="myHeader1" class="col-sm-1 Username" style="padding:10px; "><a onclick="window.location.href='../homepage.php'" style="cursor: pointer;"><h4 style=" color:#fff; font-size:15px;" ><?php echo "BACK";?></h4></a></div></center>
        <center><div id="myHeader2" class="col-sm-10 Username" style="padding:10px;"><h4 style=" color:#fff; font-size:18px;"><?php echo strtoupper($_SESSION['name']);?></h4></div></center>
</div>
<div id="containerHead">
      <p>D.Q.A.C</p>
    </div>
    <div id="noticeContainer">
       <p id="noticetext"><span style="color: red"><span><?php
          if($dateCheck == false){
            echo "<i class='fa fa-hourglass-half'> </i> Hurry! Last date to fill this form is $last";
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
            $dateQuery = "SELECT * FROM date_generate WHERE id='5'";
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
                    <p style="text-align: center; font-size: 14px; ">Please use <b>PDF</b> over <b>CSV</b> for report printing purpose</p>
                    <a href="../pdf_report/dqac/index.php" title="PDF REPORT"><i class="fa fa-file-pdf-o" style="float: left;margin-left: 80px; color: red;font-size: 32px;"></i></a>
                    <?php echo "<a href='exportUser.php?username=$user&name=$deptName' title='CSV REPORT'><i class='fa fa-file-excel-o' style='float:right;margin-right: 80px;color: green;font-size: 32px;'></i></a>";?>
                    <br><br>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Form Starts -->
    
    <style>
       .form-containerBox{
           margin: 30px;
           padding-left: 5%;
           padding-right: 5%;

       }
       .addRowNew{
           padding-left: 50px;
           padding-right: 88%;
       }
       .mainHead{
           font-size: 24px;
       }
       th{
           text-align: center;
           font-size: 20px;
       }
       td{
           text-align: left;
       }
       .table td{
           text-align: left;
       }
    </style>
        <?php
           $connection = mysqli_connect($servername, $username, $password, $dbname);
           $prevQuery1 = "SELECT*FROM dqac_1 WHERE user = '$user'";
           $runQuery1  = mysqli_query($connection, $prevQuery1);
           if(mysqli_num_rows($runQuery1)>0){
            
                while($result = $runQuery1->fetch_assoc()){
                $rowHead1name  = $result['name_head'];
                $rowHead1desig = $result['designation'];
                $rowHead1affil = $result['affiliation'];
                $rowHead1email = $result['email'];
                $rowHead1contact = $result['contact'];
              }
           }else{
               $notice11 = "No Data Available";
           }
        ?>
        <!-- PREVIOUS DATA FROM HEAD OF THE DEPARTMENT -->
        <div class="form-containerBox" id="show1">
            <table class="table table-striped" disabled> 
                <thead>
                    <tr><th colspan="5">Current Head of the Department</th></tr>
                    <tr>
                       <th>Name</th>
                       <th>Designation</th>
                       <th>Affiliation</th>
                       <th>Email Id</th>
                       <th>Contact No.</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                       <td style="text-align: center;"><?php?></td>
                       <td style="text-align: center;"><?php echo $rowHead1desig;?></td>
                       <td style="text-align: center;"><?php echo $rowHead1affil;?></td>
                       <td style="text-align: center;"><?php echo $rowHead1email;?></td>
                       <td style="text-align: center;"><?php echo $rowHead1contact;?></td>
                    </tr>
                </tbody>
            
            </table>
    
            <form method="POST" action="update1.php">
            
                <!-- 1 Head of the Department Criteria Box -->
                    <table class="table table-bordered" style="text-align: center;">
                        <thead>
                        <tr>
                            <th colspan="5" class="mainHead">I. Head of the Department</th>
                        </tr>
                        <tr>
                            <th>Name</th>
                            <th>Designation</th>
                            <th>Affiliation</th>
                            <th>Email Address</th>
                            <th>Contact No.</th>
                        </tr>
                        </thead>
                        <tbody>
                        <tr>
                        <td><input type="text" name= "nameHead" placeholder = "<?php echo $rowHead1name; ?>" class="form-control" value="<?php ?>" required></td>
                        <td><input type="text" name= "designationHead"  placeholder = "<?php echo $rowHead1desig; ?>"  class="form-control" value="<?php ?>" required></td>
                        <td><input type="text" name= "affiliationHead"  placeholder = "<?php echo $rowHead1affil; ?>" class="form-control" value="<?php ?>" required></td>
                        <td><input type="email" name= "emailHead" placeholder = "<?php echo $rowHead1email; ?>" class="form-control" value="<?php ?>" ></td>
                        <td><input type="tel" name="contactHead" class="form-control" placeholder = "<?php echo $rowHead1contact; ?>"value="<?php ?>" required></td>
                        </tr>
                        </tbody>
                        <tr ><td colspan="5"><input type="submit" class="btn btn-success" name="submit" value="Save" <?php
                        //  PHP CODE FOR DISABLING SAVE CHANGES BUTTON WHEN DATE EXCEEDED 
                        // AND ALSO ALERTING THAT YOUR DATE FOR FILLING THIS FORM WAS EXCEEDED
                        if($dateCheck == true){
                            echo "disabled";
                        }else{
                            echo "enabled";
                        }
                        
                        ?>></td></tr>
                    </table><br><br>
            </form>
            <!-- 2 Senior Teacher -->
            <form action="update2.php" method="POST"  id="show2" >
                <table class="table table-bordered" style="text-align: center;">
                        <thead>
                            <tr>
                                <th colspan="6" class="mainHead">II. Senior Teachers</th>
                            </tr>
                            <tr>
                                <th>Name</th>
                                <th>Designation</th>
                                <th>Affiliation</th>
                                <th>Email Address</th>
                                <th>Contact No.</th>
                                <th>Remove Data</th>
                            </tr>
                        </thead>
                        <tbody>
                        <?php
                            $prevQuery2 = "SELECT*FROM dqac_2 WHERE user = '$user'";
                            $runQuery2  = mysqli_query($connection, $prevQuery2);
                            $i = 1;
                            if($runQuery2){
                                while($row2 = $runQuery2->fetch_assoc()){
                                    
                        ?>
                        <tr>
                              <input type="hidden"  value = "<?php echo $row2['id'];?>" style="width: 10px; border: none; background-color: #fff;" name= "formid" hidden/>
                              <td style="text-align: center;"><?php echo $row2['name'];?></td>
                              <td style="text-align: center;"><?php echo $row2['designation'];?></td>
                              <td style="text-align: center;"><?php echo $row2['affiliation'];?></td>
                              <td style="text-align: center;"><?php echo $row2['email'];?></td>
                              <td style="text-align: center;"><?php echo $row2['contact'];?></td>
                              <td style="text-align: center;"><input type='hidden' value="<?php echo $row2['id'];?>"><button type="button" class="btn btn-danger" onclick="location.href='delete.php?formid=<?php echo $row2['id'];?>'" >Delete</button></form></td>
                               </tr>
                            <?php 
                                        $i++;
                                    }
                                }else{
                                //echo "<tr><td colspan = '6'>Problem Fetching Data</tr>";
                                }
                            ?>
                                <tr>
                                    <td><input type="text" name= "nameS" class="form-control" value="<?php ?>"/></td>
                                    <td><input type="text" name= "designationS" class="form-control" value="<?php ?>" /></td>
                                    <td><input type="text" name= "affiliationS" class="form-control" value="<?php ?>"/></td>
                                    <td><input type="email" name= "emailS" class="form-control" value="<?php ?>" /></td>
                                    <td><input type="tel"  name="contactS" class="form-control" placeholder = "(+91) 01234 56789" value="<?php ?>" /></td>
                                </tr>
                        </tbody>
                        <tr><td colspan="6" class="addRowNew"><input type="submit" class="btn btn-success" id="addRow2"  value="Add More" <?php
                            //  PHP CODE FOR DISABLING SAVE CHANGES BUTTON WHEN DATE EXCEEDED 
                            // AND ALSO ALERTING THAT YOUR DATE FOR FILLING THIS FORM WAS EXCEEDED
                            if($dateCheck == true){
                                echo "disabled";
                            }else{
                                echo "enabled";
                            }
                            
                            ?>></td></tr>
                         
                    </table><br><br>
            </form>

            <!-- 3 ONE MEMBER FROM MANAGEMENT -->
            <form action="update3.php" method="POST" id="show3" >
                <table class="table table-bordered" style="text-align: center;">
                        <thead>
                            <tr>
                                <th colspan="6" class="mainHead">III (a). One Member from the Management</th>
                            </tr>
                            <tr>
                                <th>Name</th>
                                <th>Designation</th>
                                <th>Affiliation</th>
                                <th>Email Address</th>
                                <th>Contact No.</th>
                                <th>Remove Data</th>
                            </tr>
                        </thead>
                        <tbody>
                        <?php
                            $prevQuery3 = "SELECT*FROM dqac_3 WHERE user = '$user'";
                            $runQuery3  = mysqli_query($connection, $prevQuery3);
                            $i = 1;
                            if($runQuery3){
                                while($row3 = $runQuery3->fetch_assoc()){
                                   
                        ?>
                            <tr>
                              <input type="hidden"  value = "<?php echo $row3['id'];?>" style="width: 10px; border: none; background-color: #fff;" name= "formid" hidden/>
                              <td style="text-align: center;"><?php echo $row3['name'];?></td>
                              <td style="text-align: center;"><?php echo $row3['designation'];?></td>
                              <td style="text-align: center;"><?php echo $row3['affiliation'];?></td>
                              <td style="text-align: center;"><?php echo $row3['email'];?></td>
                              <td style="text-align: center;"><?php echo $row3['contact'];?></td>
                               <td style="text-align: center;"><input type='hidden' value="<?php echo $row2['id'];?>"><button type="button" class="btn btn-danger" onclick="location.href='delete2.php?formid=<?php echo $row3['id'];?>'" >Delete</button></form></td>
                                  

                            </tr>
                        <?php 
                                                   $i++;
                            }
                        }else{
                        echo "<tr><td style='text-align: center' colspan = '6'>Problem Fetching Data</tr>";
                        }
                        ?>
                                <tr>
                                    <td><input type="text" name= "nameM" class="form-control" value="<?php ?>" /></td>
                                    <td><input type="text" name= "designationM" class="form-control" value="<?php ?>" /></td>
                                    <td><input type="text" name= "affiliationM" class="form-control" value="<?php ?>" /></td>
                                    <td><input type="email" name= "emailM" class="form-control" value="<?php ?>" /></td>
                                    <td><input type="tel"  name="contactM" class="form-control" placeholder = "(+91) 01234 56789" value="<?php ?>" /></td>
                                </tr>
                        </tbody>
                        <tr><td colspan="6" class="addRowNew"><input type="submit" class="btn btn-success" id="addRow2"  value="Add More" <?php
                    //  PHP CODE FOR DISABLING SAVE CHANGES BUTTON WHEN DATE EXCEEDED 
                    // AND ALSO ALERTING THAT YOUR DATE FOR FILLING THIS FORM WAS EXCEEDED
                    if($dateCheck == true){
                        echo "disabled";
                    }else{
                        echo "enabled";
                    }
                    
                    ?>></td></tr>
                    </table><br><br>
            </form>

            <!-- 4 ONE/TWO NOMINEES FROM LOCAL SOCIETY, STUDENTS AND ALUMNI-->
            <form action="update4.php" method="POST"  id="show4" >
                <table class="table table-bordered" style="text-align: center;">
                        <thead>
                            <tr>
                                <th colspan="6" class="mainHead">III (b). One/Two Nominees from Local Society, Students and Alumni</th>
                            </tr>
                            <tr>
                                <th>Name</th>
                                <th>Designation</th>
                                <th>Affiliation</th>
                                <th>Email Address</th>
                                <th>Contact No.</th>
                                <th>Remove Data</th>
                            </tr>
                        </thead>
                        <tbody>
                        <?php
                            $prevQuery4 = "SELECT*FROM dqac_4 WHERE user = '$user'";
                            $runQuery4  = mysqli_query($connection, $prevQuery4);
                            $i = 1;
                            if($runQuery4){
                                while($row4 = $runQuery4->fetch_assoc()){
                                    
                        ?>
                            <tr>
                              <input type="hidden"  value = "<?php echo $row4['id'];?>" style="width: 10px; border: none; background-color: #fff;" name= "formid" hidden/>
                              <td style="text-align: center;"><?php echo $row4['name'];?></td>
                              <td style="text-align: center;"><?php echo $row4['designation'];?></td>
                              <td style="text-align: center;"><?php echo $row4['affiliation'];?></td>
                              <td style="text-align: center;"><?php echo $row4['email'];?></td>
                              <td style="text-align: center;"><?php echo $row4['contact'];?></td>
                                <td style="text-align: center;"><input type='hidden' value="<?php echo $row2['id'];?>"><button type="button" class="btn btn-danger" onclick="location.href='delete3.php?formid=<?php echo $row4['id'];?>'" >Delete</button></form></td>
                            </tr>
                            <?php 
                                                            $i++;
                                }
                            }else{
                            echo "<tr><td style='text-align: center' colspan = '6'>Problem Fetching Data</tr>";
                            }
                            ?>
                                <tr>
                                    <td><input type="text" name= "name4" class="form-control" value="<?php ?>" /></td>
                                    <td><input type="text" name= "designation4" class="form-control" value="<?php ?>"/></td>
                                    <td><input type="text" name= "affiliation4" class="form-control" value="<?php ?>" /></td>
                                    <td><input type="email" name= "email4" class="form-control" value="<?php ?>" /></td>
                                    <td><input type="tel"  name="contact4" class="form-control" placeholder = "(+91) 01234 56789" value="<?php ?>"/></td>
                                </tr>
                        </tbody>
                        <tr><td colspan="6" class="addRowNew"><input type="submit" class="btn btn-success" id="addRow2"  value="Add More" <?php
                        //  PHP CODE FOR DISABLING SAVE CHANGES BUTTON WHEN DATE EXCEEDED 
                        // AND ALSO ALERTING THAT YOUR DATE FOR FILLING THIS FORM WAS EXCEEDED
                        if($dateCheck == true){
                            echo "disabled";
                        }else{
                            echo "enabled";
                        }
                        
                        ?>></td></tr>
                         
                    </table><br><br>
            </form>

            <!-- 5 ONE/TWO NOMINEES FROM EMPLOYER, INDUSTRIALIST, STAKEHOLDERS -->
            <form action="update5.php" method="POST"  id="show5" >
                <table class="table table-bordered" style="text-align: center;">
                        <thead>
                            <tr>
                                <th colspan="6" class="mainHead">IV. One/Two Nominees From Employer/Industrialist/Stakeholders </th>
                            </tr>
                            <tr>
                                <th>Name</th>
                                <th>Designation</th>
                                <th>Affiliation</th>
                                <th>Email Address</th>
                                <th>Contact No.</th>
                                <th>Remove Data</th>
                            </tr>
                        </thead>
                        <tbody>
                        <?php
                            $prevQuery5 = "SELECT*FROM dqac_5 WHERE user = '$user'";
                            $runQuery5  = mysqli_query($connection, $prevQuery5);
                            $i = 1;
                            if($runQuery5){
                                while($row5 = $runQuery5->fetch_assoc()){
                                 
                        ?>
                            <tr>
                              <input type="hidden"  value = "<?php echo $row5['id'];?>" style="width: 10px; border: none; background-color: #fff;" name= "formid" hidden/>
                              <td style="text-align: center;"><?php echo $row5['name'];?></td>
                              <td style="text-align: center;"><?php echo $row5['designation'];?></td>
                              <td style="text-align: center;"><?php echo $row5['affiliation'];?></td>
                              <td style="text-align: center;"><?php echo $row5['email'];?></td>
                              <td style="text-align: center;"><?php echo $row5['contact'];?></td>
                               <td style="text-align: center;"><input type='hidden' value="<?php echo $row2['id'];?>"><button type="button" class="btn btn-danger" onclick="location.href='delete4.php?formid=<?php echo $row5['id'];?>'" >Delete</button></form></td>


                            </tr>
                            <?php 
                                                           $i++;
                                }
                            }else{
                            echo "<tr><td style='text-align: center' colspan = '6'>Problem Fetching Data</tr>";
                            }
                            ?>
                                <tr>
                                    <td><input type="text" name= "name5" class="form-control" value="<?php ?>"/></td>
                                    <td><input type="text" name= "designation5" class="form-control" value="<?php ?>"/></td>
                                    <td><input type="text" name= "affiliation5" class="form-control" value="<?php ?>"/></td>
                                    <td><input type="email" name= "email5" class="form-control" value="<?php ?>" /></td>
                                    <td><input type="tel"  name="contact5" class="form-control" placeholder = "(+91) 01234 56789" value="<?php ?>" /></td>
                                </tr>
                        </tbody>
                        <tr><td colspan="6" class="addRowNew"><input type="submit" class="btn btn-success" id="addRow2"  value="Add More" <?php
                    //  PHP CODE FOR DISABLING SAVE CHANGES BUTTON WHEN DATE EXCEEDED 
                    // AND ALSO ALERTING THAT YOUR DATE FOR FILLING THIS FORM WAS EXCEEDED
                    if($dateCheck == true){
                        echo "disabled";
                    }else{
                        echo "enabled";
                    }
                    
                    ?>></td></tr>
                         
                    </table><br><br>
            </form>

        <!-- 6 CO-ORDINATOR IQAC -->
            <form action="update6.php" method="POST" id="show6">
                <table class="table table-bordered" style="text-align: center;">
                        <thead>
                            <tr>
                                <th colspan="6" class="mainHead">V. Coordinator DQAC</th>
                            </tr>
                            <tr>
                                <th>Name</th>
                                <th>Designation</th>
                                <th>Affiliation</th>
                                <th>Email Address</th>
                                <th>Contact No.</th>
                                <th>Remove Data</th>
                            </tr>
                        </thead>
                        <tbody>
                        <?php
                            $prevQuery6 = "SELECT*FROM dqac_6 WHERE user = '$user'";
                            $runQuery6  = mysqli_query($connection, $prevQuery6);
                            $i = 1;
                            if($runQuery6){
                                while($row6 = $runQuery6->fetch_assoc()){
                                                          ?>
                            <tr>
                              <input type="hidden"  value = "<?php echo $row6['id'];?>" style="width: 10px; border: none; background-color: #fff;" name= "formid" hidden/>
                              <td style="text-align: center;"><?php echo $row6['name'];?></td>
                              <td style="text-align: center;"><?php echo $row6['designation'];?></td>
                              <td style="text-align: center;"><?php echo $row6['affiliation'];?></td>
                              <td style="text-align: center;"><?php echo $row6['email'];?></td>
                              <td style="text-align: center;"><?php echo $row6['contact'];?></td>
                              <td style="text-align: center;"><input type='hidden' value="<?php echo $row2['id'];?>"><button type="button" class="btn btn-danger" onclick="location.href='delete5.php?formid=<?php echo $row6['id'];?>'" >Delete</button></form></td>


                            </tr>
                            <?php 
                                                           $i++;
                                }
                            }else{
                            echo "<tr><td style='text-align: center' colspan = '6'>Problem Fetching Data</tr>";
                            }
                            ?>
                                <tr>
                                    <td><input type="text" name= "name6" class="form-control" value="<?php ?>" required/></td>
                                    <td><input type="text" name= "designation6" class="form-control" value="<?php ?>" required/></td>
                                    <td><input type="text" name= "affiliation6" class="form-control" value="<?php ?>" required/></td>
                                    <td><input type="email" name= "email6" class="form-control" value="<?php ?>" required/></td>
                                    <td><input type="tel"  name="contact6" class="form-control" placeholder = "(+91) 01234 56789" value="<?php ?>" required/></td>
                                </tr>
                        </tbody>
                        <tr><td colspan="6" class="addRowNew"><input type="submit" class="btn btn-success" id="addRow2"  value="Add More" <?php
                            //  PHP CODE FOR DISABLING SAVE CHANGES BUTTON WHEN DATE EXCEEDED 
                            // AND ALSO ALERTING THAT YOUR DATE FOR FILLING THIS FORM WAS EXCEEDED
                            if($dateCheck == true){
                                echo "disabled";
                            }else{
                                echo "enabled";
                            }
                            
                            ?>></td></tr>
                         
                    </table><br><br>
            </form>
            <form action="docs.php" method="POST" enctype="multipart/form-data" id="show7">
               <h3 style="text-align: center;">Conclusion/ Remarks for DQAC</h3>
                <textarea name="remark" class="form-control" rows="4" placeholder="<?php
                  $queryRemark = mysqli_query($connection, "SELECT*FROM dqac_remark WHERE user = '$user'");
                  if(mysqli_num_rows($queryRemark)>0){
                     while($res7 = $queryRemark->fetch_assoc()){
                         $ans7 = $res7['remark'];
                         echo $ans7;
                      }
                   }else{ echo "Remarks/Conclusion Here";}
                 ?>"></textarea>
                <br><h4 style="float: left;">Upload Document</h4>
                <input type="file" name="file" /><br>
                <input type="submit" class="btn btn-primary" name="submit" value="Save & Upload" <?php
                            //  PHP CODE FOR DISABLING SAVE CHANGES BUTTON WHEN DATE EXCEEDED 
                            // AND ALSO ALERTING THAT YOUR DATE FOR FILLING THIS FORM WAS EXCEEDED
                            if($dateCheck == true){
                                echo "disabled";
                            }else{
                                echo "enabled";
                            }
                            
                            ?>>
            </form><br>
            
            
      </div>
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
      <footer>
            <br><br>
            <p>&copy; <script>document.write(new Date().getFullYear())</script> - <script>document.write(new Date().getFullYear() + 1)</script> Devi Ahilya Vishwavidyalaya Indore (M.P)</p>
        </footer>
  </body>
  
</html>
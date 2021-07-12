<?php 
    session_start();
      include('../../credential.php');
      $adminname = $_SESSION['username'];
      $name = $_SESSION['name'];
 
    //   inculde('../fetch_na.php');
      $date = date_create();
      save_log($_SESSION['username'],getUserIP(),$_SERVER['REQUEST_URI'],urlencode(http_build_query($_POST, '', '&amp;')),date_format($date, 'Y-m-d H:i:s'));
    //   Updating Time Zone
      if(function_exists('date_default_timezone_set'))
        {
            date_default_timezone_set("Asia/Kolkata");
        }
        $last = '';
        $connection = mysqli_connect($servername, $username, $password, $dbname);
        $dateCheck = true;
        $todayDate = date("Y-m-d");
        $getDateQuery = "SELECT * FROM deadline WHERE id = '7'";
        $getStartDate = mysqli_query($connection, $getDateQuery);
        while($row = $getStartDate->fetch_assoc()){
        $first = $row['startdate'];
        $last = $row['enddate'];
        }
        //  Filled Unfilled Image Source
        // Filled/ Unfilled/NA images goes here
        $filled = '../../assets/images/filled.png';
        $unfilled = '../../assets/images/unfilled.png';
        $notapplicableimg = '../../assets/images/na.png';
        if(($todayDate >= $first) && ($todayDate< $last)){
        $dateCheck = false;//If User have sufficient Date Time
        // $alertString = "Hurry! Only Few Days Left to Fill this Form";

        }else{
        $dateCheck = true;//if User is out of Time to fill this form
        echo "<script>alert('Date to Fill this Form is Over, Please contact to the Administrator!')</script>";
        }
        
        // File Exists or not 
        function does_url_exists($url) {
            $ch = curl_init($url);
            curl_setopt($ch, CURLOPT_NOBODY, true);
            curl_exec($ch);
            $code = curl_getinfo($ch, CURLINFO_HTTP_CODE);
        
            if ($code == 200) {
                $status = true;
            } else {
                $status = false;
            }
            curl_close($ch);
            return $status;
        }
        // Assigning Variables
         $msg111 = '';
         $des111 = '';
         $link111 = '';
         $dataFill111 = false;
         $na111 = false;

         $msg131 = '';
         $des131 = '';
         $link131 = '';
         $dataFill131 = false;
         $na131 = false;

         $msg141 = '';
         $msg142 = '';

        // Get Data for 
        $getData111 = mysqli_query($connection, "SELECT*FROM ssr_m1_1_1 WHERE username = '$adminname'");
        if(mysqli_num_rows($getData111)>0){
            $res = mysqli_fetch_assoc($getData111);
            $des111 = $res['description'];
            $link111 = $res['link'];
            $dataFill111 = true;
        }

        $getData131 = mysqli_query($connection, "SELECT*FROM ssr_m1_1_1 WHERE username = '$adminname'");
        if(mysqli_num_rows($getData131)>0){
            $res = mysqli_fetch_assoc($getData131);
            $des131 = $res['description'];
            $link131 = $res['link'];
            $dataFill131 = true;
        }


        if(isset($_POST['submit111'])){
            $ans = mysqli_real_escape_string($connection, strip_tags(trim($_POST['answer'])));
            $link = $_POST['doclink'];
            if(does_url_exists($link)){
                // echo "<script>alert('Horrah!')</script>";
                $checkDataQuery = "SELECT*FROM ssr_m1_1_1 WHERE username = '$adminname'";
                $checkData = mysqli_query($connection, $checkDataQuery);
                if(mysqli_num_rows($checkData)>0){
                    $update = mysqli_query($connection, "UPDATE ssr_m1_1_1 SET description = '$ans', link = '$link' WHERE username = '$adminname'");
                    if($update){
                        $msg111 = "<h5 style='color: green;text-align: center;'>Data Updated Succesfully</h5>";
                    }else{
                        echo "<script>alert('Problem in Updating Data')</script>";
                    }
                }else{
                    $insert = mysqli_query($connection, "INSERT INTO ssr_m1_1_1 (username, description, link) VALUES('$adminname', '$ans', '$link')");
                    if($insert){
                        $msg111 = "<h5 style='color: green; text-align: center;'>Data Inserted Succesfully</h5>";
                    }else{
                        var_dump($insert);
                        echo "<script>alert('Problem inserting data!')</script>";
                    }
                }

            }else{
                echo "<script>alert('Sorry! file does not exist at the give link.')</script>";
            }

        }else if(isset($_POST['submit131'])){
            $ans = mysqli_real_escape_string($connection, strip_tags(trim($_POST['answer'])));
            $link = $_POST['doclink'];
            if(does_url_exists($link)){
                // echo "<script>alert('Horrah!')</script>";
                $checkDataQuery = "SELECT*FROM ssr_m1_3_1 WHERE username = '$adminname'";
                $checkData = mysqli_query($connection, $checkDataQuery);
                if(mysqli_num_rows($checkData)>0){
                    $update = mysqli_query($connection, "UPDATE ssr_m1_3_1 SET description = '$ans', link = '$link' WHERE username = '$adminname'");
                    if($update){
                        $msg131 = "<h5 style='color: green;text-align: center;'>Data Updated Succesfully</h5>";
                    }else{
                        echo "<script>alert('Problem in Updating Data')</script>";
                    }
                }else{
                    $insert = mysqli_query($connection, "INSERT INTO ssr_m1_3_1 (username, description, link) VALUES('$adminname', '$ans', '$link')");
                    if($insert){
                        $msg131 = "<h5 style='color: green; text-align: center;'>Data Inserted Succesfully</h5>";
                    }else{
                        var_dump($insert);
                        echo "<script>alert('Problem inserting data!')</script>";
                    }
                }

            }else{
                echo "<script> alert('Please Put Relevant File link!')</script>";
            }

        }else if(isset($_POST['submit141'])){
         $value = $_POST['selectAns'];
         $getQuery = "SELECT*FROM ssr_m1_4_1 WHERE username = '$adminname'";
         $get = mysqli_query($connection, $getQuery);
         if(mysqli_num_rows($get) == 0){
               $insert = mysqli_query($connection, "INSERT INTO ssr_m1_4_1(username, answer) VALUES('$adminname', '$value')");
               if($insert){
                   $msg141 = "<h5 style='text-align: center; color: green;'>Data Saved!</h5>";
               }else{
                $msg141 = "<h5 style='text-align: center; color: red;'>Error Inserting Data!</h5>";
               }
         }else{
            $update = mysqli_query($connection, "UPDATE  ssr_m1_4_1 SET answer = '$value' WHERE username = '$adminname'");
            if($update){
                $msg141 = "<h5 style='text-align: center; color: green;'>Data Saved!</h5>";
            }else{
             $msg141 = "<h5 style='text-align: center; color: red;'>Error Updating Data!</h5>";
            }

         }
        }else if(isset($_POST['submit142'])){
            $value = $_POST['selectAns'];
            $getQuery = "SELECT*FROM ssr_m1_4_2 WHERE username = '$adminname'";
            $get = mysqli_query($connection, $getQuery);
            if(mysqli_num_rows($get) == 0){
                  $insert = mysqli_query($connection, "INSERT INTO ssr_m1_4_2(username, answer) VALUES('$adminname', '$value')");
                  if($insert){
                      $msg141 = "<h5 style='text-align: center; color: green;'>Data Saved!</h5>";
                  }else{
                   $msg141 = "<h5 style='text-align: center; color: red;'>Error Inserting Data!</h5>";
                  }
            }else{
               $update = mysqli_query($connection, "UPDATE  ssr_m1_4_2 SET answer = '$value' WHERE username = '$adminname'");
               if($update){
                   $msg141 = "<h5 style='text-align: center; color: green;'>Data Saved!</h5>";
               }else{
                $msg141 = "<h5 style='text-align: center; color: red;'>Error Updating Data!</h5>";
               }
   
            }
           }
       
    if(!isset($_SESSION['names'])){
        // header("Location: ../homepage.php");  
    }
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
    <link rel="stylesheet" href="../ssrstyle.css">
    <link rel="icon" href="../../assets/images/davvlogo.png">
    <title>Criteria I</title>
</head>
<body>
        <script>
        // Enabling Tooltip Everywhere
            $(function () {
            $('[data-toggle="tooltip"]').tooltip();
            })
        </script>
    <div  id="header" style="margin-left: 0px; margin-right: 0px; width: 100%!important;">
    <!-- Don't Remove ../../ it is inserted for two level ups in the directory! -->
          <img src="../../assets/images/davvlogo.png" alt="Devi Ahilya Vishwavidyalaya" height="120px" width="120px" style="float: left; margin-left: 30%;margin-top: 20px;" data-toggle="tooltip" data-placement="right" title="Devi Ahilya University" >
          <p style="float: left; margin-left: 30px;margin-top: 40px">Devi Ahilya Vishwavidyalaya <br><span style="font-size: 22px;">Data Capturing System-2021</span></p>
    </div>
    <script>
    // To go back where user came from
      function goBack() {
          window.history.back();
        }
        function goForward() {
           window.history.forward();
        }
    </script>
    <div id="topLink">
        <a onclick="goBack()"  data-toggle="tooltip" data-placement="bottom" title="Go Back">BACK</a>
        <a onclick="goForward()" style="cursor: pointer; float: right; margin-right: 35px;" data-toggle="tooltip" data-placement="bottom" title="Forward Page">NEXT</a>
    </div>
    <br>
    <div class="noticeContainer">
      <h4><i class="fa fa-calendar"></i>
       <?php
        //   Notice Text
         if($dateCheck){
             echo " Date to fill this Form is Over, Please Contact Administrator";
         }else{
             echo " Please fill this form before last date i.e. ".$last." as delay may cause serious problems";
         }
       ?>
       </h4>
    </div>
    <div class="criteriaTitle1">
       <h3>Criteria I - Curricular Aspects</h3>
    </div>
    <div class="criteriaTitle2">
       <h4>1.1 Curriculum Design and Development</h4>
    </div>

    <!-- Criteria Container -->
    <div class="containerForm">
        <form method="post">
                <div id="q111" class="questionContainer">
                <p class="msgContainer"><?php echo $msg111;?></p>
                <img
                    <?php 
                    if($dataFill111){
                        echo "src='$filled' data-toggle='tooltip' data-placement='bottom' title='Metric Filled'";
                    }else if($dataFill111 == false){
                        echo "src='$unfilled' data-toggle='tooltip' data-placement='bottom' title='Metric Not Filled'";
                    }else{
                        echo "src='$notapplicableimg' data-toggle='tooltip' data-placement='bottom' title='Metric Not Applicable'";
                    }
                    ?>
                    class="fillImage"
                >
                <p class="qName">Q<sub>L</sub>M <br>1.1.1</p>
                <p class="question">
                    Curricula developed and implemented have relevance to the local,
                    national, regional and global developmental needs which is
                    reflected in Programme outcomes (POs), Programme Specific
                    Outcomes(PSOs) and Course Outcomes(COs) of the Programmes
                    offered by the University.
                </p>
                <i class="fa fa-angle-down iconRight"></i>
                <p class="questionPart">
                    Write description in maximum of 500 words<br>
                    <b>File description</b>
                    <ul>
                    <li>Upload Additional information.</li>
                    <li>Link for Additional information</li>
                    </ul>
                </p>
                </div>
                    <div class="answerContainer" id="a111">
                        <label for="answer">Description (Max Length: 500 words)</label>
                        <textarea name="answer" class="form-control" rows="6" maxlength="550" placeholder="<?php echo $des111;?>" required></textarea><br>
                        <label for="doclink">Link to the relevent document</label>
                        <input type="text" name="doclink" class="form-control" placeholder="<?php echo $link111;?>" autocomplete="off" required /><br>
                        <input type="submit" name="submit111" class="btn btn-primary" value="Save Changes" 
                        <?php
                            // For Enabling or Disabling Button
                            if($dateCheck){
                                echo "disabled";
                            }else{
                                echo "enabled";
                            }
                        ?>
                        required/>
                    </div>   
        </form>
        <!-- Metric 1.1.2 -->
                <div id="q112" class="questionContainer">
                <p class="msgContainer" id="msg112"></p>
                <img
                    <?php 
                       $queryCheck112 = "SELECT*FROM ssr_m1_1_2 WHERE username = '$adminname'";
                       $query112 = mysqli_query($connection, $queryCheck112);
                       if(mysqli_num_rows($query112)>0){
                           $n = mysqli_num_rows($query112);
                           echo "src = '../../assets/images/filled.png' data-toggle='tooltip' data-placement='bottom' title='".$n." Filled'";
                       }else if(mysqli_num_rows($query112) == 0){
                        echo "src = '../../assets/images/unfilled.png' data-toggle='tooltip' data-placement='bottom' title='Not Filled'";
                       }
                    ?>
                    class="fillImage"
                >
                <p class="qName">Q<sub>N</sub>M <br>1.1.2</p>
                <p class="question">
                    Percentage of Programmes where syllabus revision was carried out
                    during the last five years.
                </p>
                <i class="fa fa-angle-down iconRight"></i>
                <p class="questionPart">
                    <b>File description</b>
                    <ul>
                    <li>Minutes of relevant Academic Council/BOS meeting</li>
                    <li>Any additional information</li>
                    <li>Details of Programme syllabus revision in last 5 years</li>
                    </ul><br>
                </p>
                </div>
                    <div class="answerContainer" id="a112">
                        <table class="table table-bordered">
                           <thead>
                             <th>S.No.</th>
                             <th>Programme Code</th>
                             <th>Programme Name</th>
                             <th>Year of Introduction</th>
                             <th>Status of implementation of CBCS/elective course system</th>
                             <th>Year of implementation of CBCS / elective course system</th>
                             <th>Year of revision(if any)</th>
                             <th>If revision has been carried out in the syllabus during last 5 years, Percentage of content added or replaced</th>
                             <th>Link to the relevant document</th>
                             <th>Update Data</th>
                           </thead>
                           <tbody>
                              
                              <?php
                                 $get112Query = "SELECT*FROM ssr_m1_1_2 WHERE username = '$adminname'";
                                 $get112 = mysqli_query($connection, $get112Query);
                                 $i = 1;
                                 while($res = $get112->fetch_assoc()){
                                     $id = $res['id'];
                                     $pcode = $res['Programme_Code'];
                                     $pname = $res['Programme_Name'];
                                     $yIntro = $res['Year_of_Introduction'];
                                     $sImp = $res['Status_of_Implementation'];
                                     $yImp = $res['Year_of_Implementation'];
                                     $yr = $res['Year_of_Revision'];
                                     $p = $res['Percentage'];
                                     $l = $res['link_document'];
                                     
                                     echo "<form action='delete112.php' method='POST'><tr><td><input type='text' name='id' value='$id' hidden>$i</td><td>$pcode</td><td>$pname</td><td>$yIntro</td><td>$sImp</td><td>$yImp</td><td>$yr</td><td>$p</td><td>$l</td>";
                                 
                              ?>
                                  <td><button class='btn btn-danger' data-toggle="tooltip" data-placement="top" title="Data once deleted cannot be retreived!" type="submit" name="submit">Delete</button></td></tr>
                                   
                                <?php 
                                   
                                  $i++;
                                   echo "</form>";
                                  }
                                ?>

                             <tr>
                             <td></td>
                              <td></td>
                              <td></td>
                              <td></td>
                              <td></td>
                              <td></td>
                              <td></td>
                              <td></td>
                              <td></td>
                             <td colspan="10" data-toggle="tooltip" data-placement="bottom" title="Add Row" ><i class="fa fa-plus-circle" id="add112" data-toggle="modal" data-target=".bd-example-modal-lg"  style="font-size: 48px; color: orange; cursor: pointer;"></i></td>
                             <div class="modal fade bd-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="add112" aria-hidden="true">
                                <div class="modal-dialog modal-lg" role="document">
                                    <div class="modal-content">
                                        <div class="modal-body">
                                         <h3 style="text-align: center">Add Row</h3>
                                         <form action="save112.php" method="POST">
                                            <label for="programCode">Programme Code</label>
                                            <select name="programCode" class="form-control">
                                              <option value="" disabled selected>Select Progamme Code</option>
                                                 <?php 
                                                    $fetchProgramQuery = "SELECT*FROM programme where Username = '$adminname'";
                                                    $fetchProgram = mysqli_query($connection, $fetchProgramQuery);
                                                    while($resCode = $fetchProgram->fetch_assoc()){
                                                      $rowCode = $resCode['Prog_code'];
                                                      echo "<option value='$rowCode'>$rowCode</option>";
                                                    }
                                                 ?>
                                            </select>
                                            <label for="programName">Programme Name</label>
                                            <select name="programName" class="form-control">
                                              <option value="0" disabled selected>Select Programme Name</option>
                                                 <?php 
                                                   $fetchProgramQuery = "SELECT*FROM programme where Username = '$adminname'";
                                                   $fetchProgram = mysqli_query($connection, $fetchProgramQuery);
                                                   while($resCode = $fetchProgram->fetch_assoc()){
                                                    $rowName = $resCode['Prog_name'];
                                                    echo "<option value='$rowName'>$rowName</option>";
                                                  }
                                                 ?>
                                            </select>
                                            <label for="yearIntro">Year of Introduction</label>
                                            <select name="yearIntro" class="form-control">
                                               <option value="" disabled selected>Select Year</option>
                                               <?php
                                                 $fetchProgramYearQuery = "SELECT*FROM academic_year";
                                                 $fetchProgramYear = mysqli_query($connection, $fetchProgramYearQuery);
                                                 while($programYear = $fetchProgramYear->fetch_assoc()){
                                                    $rowYear = $programYear['Year'];
                                                    echo "<option value='$rowYear'>$rowYear</option>";
                                                 }
                                               ?>
                                            </select>
                                            <label for="statusImplement">Status of Implementation of CBCS/ elective course system</label>
                                            <select name="statusImplement" class="form-control">
                                              <option value="NULL"selected disabled>Select The Status</option>
                                              <option value="Yes">Yes</option>
                                              <option value="No">No</option>
                                            </select>
                                            <label for="yearImplement">Year of implementation of CBCS / elective course system</label>
                                            <select name="yearImplement" class="form-control">
                                               <option value="" disabled selected>Select Year</option>
                                               <?php
                                                 $fetchProgramYearQuery = "SELECT*FROM academic_year";
                                                 $fetchProgramYear = mysqli_query($connection, $fetchProgramYearQuery);
                                                 while($programYear = $fetchProgramYear->fetch_assoc()){
                                                    $rowYear = $programYear['Year'];
                                                    echo "<option value='$rowYear'>$rowYear</option>";
                                                 }
                                               ?>
                                            </select>
                                            <label for="yearRevision">Year of Revision (if any)</label>
                                            <select name="yearRevision" class="form-control">
                                               <option value="" disabled selected>Select Year</option>
                                               <?php
                                                 $fetchProgramYearListQuery = "SELECT*FROM year_list";
                                                 $fetchProgramYearList = mysqli_query($connection, $fetchProgramYearListQuery);
                                                 while($programYearList = $fetchProgramYearList->fetch_assoc()){
                                                    $rowYear = $programYearList['year'];
                                                    echo "<option value='$rowYear'>$rowYear</option>";
                                                 }
                                               ?>
                                            </select>
                                            <label for="percentContent">If revision has been carried out in the syllabus during last 5 years, %age of content added or replaced</label>
                                            <input type="number" name="percentContent" class="form-control" placeholder="  %age " required/>
                                            <label for="doclink">Link for the relevent document</label>
                                            <input type="text" name="doclink" class="form-control" autocomplete="off" required/> <br>
                                            <button type="submit" class="btn btn-primary" name="submit"  <?php
                                                // For Enabling or Disabling Button
                                                if($dateCheck){
                                                    echo "disabled";
                                                }else{
                                                    echo "enabled";
                                                }
                                            ?>>Save changes</button>
                                         </form>
                                        </div>  
                                              <div class="modal-footer">
                                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                              </div>
                                    </div>
                                </div>
                            </div>
                             </tr>
                           </tbody>
                        </table><br><br>
                    </div>
        <!-- MEtric 1.1.3 -->
        <div id="q113" class="questionContainer">
                 <br>
                <img
                    <?php 
                     $count113 = mysqli_query($connection, "SELECT*FROM ssr_m1_1_3 WHERE username='$adminname'");
                    
                    if(mysqli_num_rows($count113)>0){
                        $n = mysqli_num_rows($count113);
                        echo "src='$filled' data-toggle='tooltip' data-placement='bottom' title='$n Filled'";
                    }else if(mysqli_num_rows($count113)>0){
                        // echo "src='$unfilled' data-toggle='tooltip' data-placement='bottom' title='Metric Not Filled'";
                    }
                    ?>
                    class="fillImage"
                >
                <p class="qName">Q<sub>N</sub>M <br>1.1.3</p>
                <p class="question">
                    Number of courses having focus on employability/
                    entrepreneurship/ skill development year wise during the last five
                    years
                </p>
                <i class="fa fa-angle-down iconRight"></i>
                <p class="questionPart">
                    <b>File description</b>
                    <ul>
                    <li>Name of the Course with Code</li>
                    <li>Activities with direct bearing on Employability/ Entrepreneurship/ Skill development</li>
                    <li>Name of the Programme</li>
                    <li>Programme/ Curriculum/ Syllabus of the courses</li>
                    <li>MoU's with relevant organizations for these courses, if any</li>
                    <li>Average percentage of courses having focus on employability/entrepreneurship</li>
                    </ul>
                </p>
                </div>
                    <div class="answerContainer" id="a113">
                        <table class="table table-bordered">
                          <thead>
                             <th>S.No.</th>
                             <th>Name of the Course</th>
                             <th>Course Code</th>
                             <th>Year of Introduction</th>
                             <th>Activities/Content with direct bearing on Employability/ Entrepreneurship/ Skill development</th>
                             <th>Link to the relevent document</th>
                             <th>Change Data</th>
                          </thead>
                          <?php
                            $get113 = mysqli_query($connection, ("SELECT*FROM ssr_m1_1_3 WHERE username = '$adminname'"));
                             $i = 1;
                            while($res113 = $get113->fetch_assoc()){
                                
                                $id113 = $res113['id'];
                                $coursename = $res113['Course_Name'];
                                $coursecode = $res113['Course_Code'];
                                $year113 =  $res113['Year_of_Introduction'];
                                $activity113 = $res113['activity'];
                                $link113 = $res113['link_document'];
                                echo "<form action='delete113.php' method='POST'><tr><td><input type='text' name='id' value='$id113' hidden>$i</td><td>$coursename</td><td>$coursecode</td><td>$year113</td><td>$activity113</td><td>$link113</td><td><input type='submit' name='submit' class='btn btn-danger' value='Delete' data-toggle='tooltip' data-placement='top' title='Data once deleted cannot be retreived!'></td></tr></form>";
                                $i++;
                            }
                          
                          ?>
                          <tr><td></td><td></td><td></td><td></td><td></td><td></td><td colspan="7"><i class="fa fa-plus-circle" data-toggle="modal" data-target="#add113" style="cursor: pointer;font-size: 48px; color: orange"></i></td></tr>
                           <!-- Modal Form-->
                            <div class="modal fade" id="add113" tabindex="-1" role="dialog" aria-labelledby="addformrow" aria-hidden="true">
                            <div class="modal-dialog modal-lg" role="document">
                                <div class="modal-content">
                                <div class="modal-header" style="text-align: center">
                                    <h3 class="modal-title" id="addformrow">Add Data</h3>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                      <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <div class="modal-body">
                                <form method="post" action="save113.php">
                                    <label for="courseName">Name of the Course</label>
                                    <select name="courseName" class="form-control" id="ccode"  required>
                                      <option value="0" disabled selected>Select Course Name</option>
                                      <?php
                                         $getCourseName = mysqli_query($connection, "SELECT*FROM course WHERE Username = '$adminname'");
                                         while($getC = $getCourseName->fetch_assoc()){
                                             $res = $getC['Course_name'];
                                             echo "<option val='$res'>$res</option>";
                                         }
                                      
                                      ?>
                                    </select>
                                    <script>
                                        //  AJAX FUNCTION HERE
                                          
                                    </script>
                                    <label for="courseCode">Course Code</label>
                                    <select name="courseCode" class="form-control" required>
                                      <option value="0" disaled selected>Select Course Code</option>
                                      <?php
                                          $courseCode = mysqli_query($connection, "SELECT*FROM course WHERE Username='$adminname'");
                                         while($courseCodeCnt = $courseCode->fetch_assoc()){
                                             $courseCodeCntData = $courseCodeCnt['Course_code'];
                                             echo "<option value='$courseCodeCntData'>$courseCodeCntData</option>";
                                         }
                                      ?>
                                    </select>
                                    
                                    <label for="yearIntro">Year of Introduction</label>
                                    <select name="yearIntro" class="form-control" required>
                                      <option value="0" disabled selected>Select Year of Introduction</option>
                                      <?php
                                          $fetchProgramYearQuery = "SELECT*FROM academic_year";
                                          $fetchProgramYear = mysqli_query($connection, $fetchProgramYearQuery);
                                          while($programYear = $fetchProgramYear->fetch_assoc()){
                                             $rowYear = $programYear['Year'];
                                             echo "<option value='$rowYear'>$rowYear</option>";
                                          }
                                      ?>
                                    </select>
                                    <label for="activity">Activities/Content with direct bearing on Employability/ Entrepreneurship/ Skill development</label>
                                    <input type="text" name="activity" class="form-control" placeholder="Content Here .." maxlength="220" required/>
                                    <label for="doclink">Link to the Document</label>
                                    <input type="text" name="doclink" class="form-control" required/>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                    <button type="submit" name="submit" class="btn btn-primary"
                                    <?php
                                        // For Enabling or Disabling Button
                                        if($dateCheck){
                                            echo "disabled";
                                        }else{
                                            echo "enabled";
                                        }
                                    ?>
                                    >Save changes</button>
                                </div>
                                </div>
                            </div>
                            </div>
                            </form>
                        </table>
                    </div>   
    

        <!-- MEtric 1.1.4 -->
        <div id="q114" class="questionContainer ddeOnly" data-toggle="tooltip" data-placement="top" title="To be filled by Directorate of Distance Education (DDEs) Only!">
                 <br>
                <img
                    <?php 
                      $check114 = mysqli_query($connection, "SELECT*FROM ssr_m1_1_4 WHERE username = '$adminname'");
                      $n = mysqli_num_rows($check114);
                    if($n > 0){
                        echo "src='$filled' data-toggle='tooltip' data-placement='bottom' title='$n Filled'";
                    }else if($n == 0 && $name =='Directorate of Distance Education'){
                        echo "src='$unfilled' data-toggle='tooltip' data-placement='bottom' title='Metric Not Filled'";
                    }else if($name !='Directorate of Distance Education'){
                        echo "src='$notapplicableimg' data-toggle='tooltip' data-placement='bottom' title='Metric Not Applicable'";
                    }
                    ?>
                    class="fillImage"
                >
                <p class="qName">Q<sub>N</sub>M <br>1.1.4</p>
                <p class="question">
                <b>Electronic media and other digital components in the curriculum offered by DDE</b> 
                </p>
                <i class="fa fa-angle-down iconRight"></i>
                <p class="questionPart">
                Percentage of the Programmes on offer by DDE have incorporated electronic media and other digital components in their curriculum during the last five years <br>
                Total number of the Programmes on offer by DDE have incorporated electronic media and other digital components in their curriculum during the last five years
                </p>
                </div>
                    <div class="answerContainer" id="a114">
                    <table class="table table-bordered">
                          <thead>
                             <th>S.No.</th>
                             <th>Name of the Programme</th>
                             <th>Programme Code</th>
                             <th>Name of the Electronic media and other digital components incorporated</th>
                             <th>Year</th>
                             <th>Link to the relevant portion of documents where electronic media and other digital components have incorporated</th>
                             <th>Change Data</th>
                          </thead>
                          <?php
                            if($name != 'Directorate of Distance Education'){
                                echo "<tr><td colspan='7' style='text-align: center; color: red;'><h3>Sorry Data for this User is Not Applicable</h3></td></tr>";
                            }else{
                                $get114 = mysqli_query($connection, ("SELECT*FROM ssr_m1_1_4 WHERE username = '$adminname'"));
                                $i = 1;
                               while($res114 = $get114->fetch_assoc()){
                                  
                                  $id114 = $res114['id'];
                                  $programname = $res114['Program_Name'];
                                  $programcode = $res114['Program_Code'];
                                  $year114 =  $res114['Year'];
                                  $name114 = $res114['name_electronic'];
                                  $link114 = $res114['link_document'];
                                  echo "<form action='delete114.php' method='POST'><tr><td><input type='text' name='id' value='$id114' hidden>$i</td><td>$programname</td><td>$programcode</td><td>$year114</td><td>$name114</td><td>$link114</td><td><input type='submit' name='submit' class='btn btn-danger' value='Delete' data-toggle='tooltip' data-placement='top' title='Data once deleted cannot be retreived!'></td></tr></form>";
                                  $i++; 
                              }      
                            }
                           
                          ?>
                          <tr><td></td><td></td><td></td><td></td><td></td><td></td><td colspan="7"><i class="fa fa-plus-circle" data-toggle="modal" data-target="#add114" style="cursor: pointer;font-size: 48px; color: orange"></i></td></tr>
                           <!-- Modal Form-->
                            <div class="modal fade" id="add114" tabindex="-1" role="dialog" aria-labelledby="addformrow114" aria-hidden="true">
                            <div class="modal-dialog modal-lg" role="document">
                                <div class="modal-content">
                                <div class="modal-header" style="text-align: center">
                                    <h3 class="modal-title" id="addformrow114">Add Data</h3>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                      <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <div class="modal-body">
                                <form method="post" action="save114.php">
                                    <label for="programName">Name of the Programme</label>
                                    <select name="programName" class="form-control">
                                      <option value="0" disabled selected>Select Programme Name</option>
                                      <?php
                                         $getProgName = mysqli_query($connection, "SELECT*FROM programme WHERE Username = '$adminname'");
                                         while($getP = $getProgName->fetch_assoc()){
                                             $res = $getP['Prog_name'];
                                             echo "<option val='$res'>$res</option>";
                                         }
                                      ?>
                                    </select><br>
                                    <label for="programCode114">Programme Code</label>
                                     <select name="programCode114" class="form-control">
                                       <option value="0" selected disabled>Select Programme Code</option>
                                       <?php
                                         $getProgCode = mysqli_query($connection, "SELECT*FROM programme WHERE Username = '$adminname'");
                                         while($getPc = $getProgCode->fetch_assoc()){
                                            $res = $getPc['Prog_code'];
                                            echo "<option val='$res'>$res</option>";
                                        }
                                         
                                       ?>
                                     </select>
                                    <label for="nameElectronic">Name of the Electronic media and other digital components incorporated</label>
                                    <input type="text" class="form-control" name="nameElectronic" required/>
                                    <label for="year">Year</label>
                                    <select name="year" class="form-control" required>
                                       <option value="0">Select Year</option>
                                       <?php
                                         $getYear114 = mysqli_query($connection, "SELECT*FROM year_list");
                                         while($getY = $getYear114->fetch_assoc()){
                                             $res = $getY['year'];
                                             echo "<option val='$res'>$res</option>";
                                         }
                                      ?>
                                    </select>
                                    <label for="linkdoc">Link to the relevant portion of documents where electronic media and other digital components have incorporated</label>
                                    <input type="text" class="form-control" name="linkdoc" autocomplete="off" required/>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                    <button type="submit" name="submit" class="btn btn-primary"
                                    <?php
                                        // For Enabling or Disabling Button
                                        if($dateCheck){
                                            echo "disabled";
                                        }else{
                                            echo "enabled";
                                        }
                                    ?>
                                    >Save changes</button>
                                </div>
                                </div>
                            </div>
                            </div>
                            </form>
                        </table>

                    </div>   
        <br>
        <div class="criteriaTitle2">
         <h4>1.2 Academic Flexibilty</h4>
        </div><br>
        <!-- MEtric 1.2.1 -->
        <div id="q121" class="questionContainer">
                 <br>
                <img
                    <?php 
                     $count121 = mysqli_query($connection, "SELECT*FROM ssr_m1_2_1 WHERE username='$adminname'");
                    
                    if(mysqli_num_rows($count121)>0){
                        $n = mysqli_num_rows($count121);
                        echo "src='$filled' data-toggle='tooltip' data-placement='bottom' title='$n Filled'";
                    }else if(mysqli_num_rows($count121) == 0){
                        echo "src='$unfilled' data-toggle='tooltip' data-placement='bottom' title='Metric Not Filled'";
                    }
                    ?>
                    class="fillImage"
                >
                <p class="qName">Q<sub>N</sub>M <br>1.2.1</p>
                <p class="question">
                Percentage of new courses introduced of the total number of 
                courses across all programmes offered during the last five years.
                </p>
                <i class="fa fa-angle-down iconRight"></i>
                <p class="questionPart">
                    <b>File description</b>
                    <ul>
                    <li>Name of the Course with Code</li>
                    <li>Activities with direct bearing on Employability/ Entrepreneurship/ Skill development</li>
                    <li>Name of the Programme</li>
                    <li>Programme/ Curriculum/ Syllabus of the courses</li>
                    <li>MoU's with relevant organizations for these courses, if any</li>
                    <li>Average percentage of courses having focus on employability/entrepreneurship</li>
                    </ul>
                </p>
                </div>
                    <div class="answerContainer" id="a121">
                        <table class="table table-bordered">
                          <thead>
                             <th>S.No.</th>
                             <th>Name of the Course</th>
                             <th>Course Code</th>
                             <th>Year of Introduction</th>
                             <th>Activities/Content with direct bearing on Employability/ Entrepreneurship/ Skill development</th>
                             <th>Link to the relevent document</th>
                             <th>Change Data</th>
                          </thead>
                          <?php
                            $get121 = mysqli_query($connection, ("SELECT*FROM ssr_m1_2_1 WHERE username = '$adminname'"));
                             $i = 1;
                            while($res121 = $get121->fetch_assoc()){
                                
                                $id121 = $res121['id'];
                                $coursename = $res121['Course_Name'];
                                $coursecode = $res121['Course_Code'];
                                $year121 =  $res121['Year_of_Introduction'];
                                $activity121 = $res121['activity'];
                                $link121 = $res121['link_document'];
                                echo "<form action='delete121.php' method='POST'><tr><td><input type='text' name='id' value='$id121' hidden>$i</td><td>$coursename</td><td>$coursecode</td><td>$year121</td><td>$activity121</td><td>$link121</td><td><input type='submit' name='submit' class='btn btn-danger' value='Delete' data-toggle='tooltip' data-placement='top' title='Data once deleted cannot be retreived!'></td></tr></form>";
                                $i++;
                            }
                          
                          ?>
                          <tr><td></td><td></td><td></td><td></td><td></td><td></td><td colspan="7"><i class="fa fa-plus-circle" data-toggle="modal" data-target="#add121" style="cursor: pointer;font-size: 48px; color: orange"></i></td></tr>
                           <!-- Modal Form-->
                            <div class="modal fade" id="add121" tabindex="-1" role="dialog" aria-labelledby="addformrow121" aria-hidden="true">
                            <div class="modal-dialog modal-lg" role="document">
                                <div class="modal-content">
                                <div class="modal-header" style="text-align: center">
                                    <h3 class="modal-title" id="addformrow121">Add Data</h3>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                      <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <div class="modal-body">
                                <form method="post" action="save121.php">
                                    <label for="courseName">Name of the Course</label>
                                    <select name="courseName" class="form-control" id="ccode"  required>
                                      <option value="0" disabled selected>Select Course Name</option>
                                      <?php
                                         $getCourseName = mysqli_query($connection, "SELECT*FROM course WHERE Username = '$adminname'");
                                         while($getC = $getCourseName->fetch_assoc()){
                                             $res = $getC['Course_name'];
                                             echo "<option val='$res'>$res</option>";
                                         }
                                      
                                      ?>
                                    </select>
                                    <script>
                                        //  AJAX FUNCTION HERE
                                          
                                    </script>
                                    <label for="courseCode">Course Code</label>
                                    <select name="courseCode" class="form-control" required>
                                      <option value="0" disaled selected>Select Course Code</option>
                                      <?php
                                          $courseCode = mysqli_query($connection, "SELECT*FROM course WHERE Username='$adminname'");
                                         while($courseCodeCnt = $courseCode->fetch_assoc()){
                                             $courseCodeCntData = $courseCodeCnt['Course_code'];
                                             echo "<option value='$courseCodeCntData'>$courseCodeCntData</option>";
                                         }
                                      ?>
                                    </select>
                                    
                                    <label for="yearIntro">Year of Introduction</label>
                                    <select name="yearIntro" class="form-control" required>
                                      <option value="0" disabled selected>Select Year of Introduction</option>
                                      <?php
                                          $fetchProgramYearQuery = "SELECT*FROM academic_year";
                                          $fetchProgramYear = mysqli_query($connection, $fetchProgramYearQuery);
                                          while($programYear = $fetchProgramYear->fetch_assoc()){
                                             $rowYear = $programYear['Year'];
                                             echo "<option value='$rowYear'>$rowYear</option>";
                                          }
                                      ?>
                                    </select>
                                    <label for="activity">Activities/Content with direct bearing on Employability/ Entrepreneurship/ Skill development</label>
                                    <input type="text" name="activity" class="form-control" placeholder="Content Here .." maxlength="220" required/>
                                    <label for="doclink">Link to the Document</label>
                                    <input type="text" name="doclink" class="form-control" required/>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                    <button type="submit" name="submit" class="btn btn-primary"
                                    <?php
                                        // For Enabling or Disabling Button
                                        if($dateCheck){
                                            echo "disabled";
                                        }else{
                                            echo "enabled";
                                        }
                                    ?>
                                    >Save changes</button>
                                </div>
                                </div>
                            </div>
                            </div>
                            </form>
                        </table>
                    </div>  
                    <!-- Metric 1.2.2 -->
                <div id="q122" class="questionContainer">
                <p class="msgContainer" id="msg122"></p>
                <img
                    <?php 
                       $queryCheck122 = "SELECT*FROM ssr_m1_2_2 WHERE username = '$adminname'";
                       $query122 = mysqli_query($connection, $queryCheck122);
                       if(mysqli_num_rows($query122)>0){
                           $n = mysqli_num_rows($query122);
                           echo "src = '../../assets/images/filled.png' data-toggle='tooltip' data-placement='bottom' title='".$n." Filled'";
                       }else if(mysqli_num_rows($query122) == 0){
                        echo "src = '../../assets/images/unfilled.png' data-toggle='tooltip' data-placement='bottom' title='Not Filled'";
                       }
                    ?>
                    class="fillImage"
                >
                <p class="qName">Q<sub>N</sub>M <br>1.2.2</p>
                <p class="question">
                Percentage of Programmes in which Choice Based Credit System (CBCS)/elective 
                course system has been implemented (Data for the latest completed academic year)
                </p>
                <i class="fa fa-angle-down iconRight"></i>
                <p class="questionPart">
                    <b>File description</b>
                    <ul>
                    <li>Minutes of relevant Academic Council/BOS meeting</li>
                    <li>Any additional information</li>
                    <li>Details of Programme syllabus revision in last 5 years</li>
                    </ul><br>
                </p>
                </div>
                    <div class="answerContainer" id="a122">
                        <table class="table table-bordered">
                           <thead>
                             <th>S.No.</th>
                             <th>Programme Code</th>
                             <th>Programme Name</th>
                             <th>Year of Introduction</th>
                             <th>Status of implementation of CBCS/elective course system</th>
                             <th>Year of implementation of CBCS / elective course system</th>
                             <th>Year of revision(if any)</th>
                             <th>If revision has been carried out in the syllabus during last 5 years, Percentage of content added or replaced</th>
                             <th>Link to the relevant document</th>
                             <th>Update Data</th>
                           </thead>
                           <tbody>
                              
                              <?php
                                 $get122Query = "SELECT*FROM ssr_m1_2_2 WHERE username = '$adminname'";
                                 $get122 = mysqli_query($connection, $get112Query);
                                 $i = 1;
                                 while($res = $get122->fetch_assoc()){
                                     $id = $res['id'];
                                     $pcode = $res['Programme_Code'];
                                     $pname = $res['Programme_Name'];
                                     $yIntro = $res['Year_of_Introduction'];
                                     $sImp = $res['Status_of_Implementation'];
                                     $yImp = $res['Year_of_Implementation'];
                                     $yr = $res['Year_of_Revision'];
                                     $p = $res['Percentage'];
                                     $l = $res['link_document'];
                                     
                                     echo "<form action='delete122.php' method='POST'><tr><td><input type='text' name='id' value='$id' hidden>$i</td><td>$pcode</td><td>$pname</td><td>$yIntro</td><td>$sImp</td><td>$yImp</td><td>$yr</td><td>$p</td><td>$l</td>";
                                 
                              ?>
                                  <td><button class='btn btn-danger' data-toggle="tooltip" data-placement="top" title="Data once deleted cannot be retreived!" type="submit" name="submit">Delete</button></td></tr>
                                   
                                <?php 
                                   
                                  $i++;
                                   echo "</form>";
                                  }
                                ?>

                             <tr>
                             <td></td>
                              <td></td>
                              <td></td>
                              <td></td>
                              <td></td>
                              <td></td>
                              <td></td>
                              <td></td>
                              <td></td>
                             <td colspan="10" data-toggle="tooltip" data-placement="bottom" title="Add Row" ><i class="fa fa-plus-circle"data-toggle="modal" data-target="#add122"  style="font-size: 48px; color: orange; cursor: pointer;"></i></td>
                             <div class="modal fade bd-example-modal-lg"  id="add122"  tabindex="-1" role="dialog" aria-labelledby="add122" aria-hidden="true">
                                <div class="modal-dialog modal-lg" role="document">
                                    <div class="modal-content">
                                        <div class="modal-body">
                                         <h3 style="text-align: center">Add Row</h3>
                                         <form action="save122.php" method="POST">
                                            <label for="programCode">Programme Code</label>
                                            <select name="programCode" class="form-control">
                                              <option value="" disabled selected>Select Progamme Code</option>
                                                 <?php 
                                                    $fetchProgramQuery = "SELECT*FROM programme where Username = '$adminname'";
                                                    $fetchProgram = mysqli_query($connection, $fetchProgramQuery);
                                                    while($resCode = $fetchProgram->fetch_assoc()){
                                                      $rowCode = $resCode['Prog_code'];
                                                      echo "<option value='$rowCode'>$rowCode</option>";
                                                    }
                                                 ?>
                                            </select>
                                            <label for="programName">Programme Name</label>
                                            <select name="programName" class="form-control">
                                              <option value="0" disabled selected>Select Programme Name</option>
                                                 <?php 
                                                   $fetchProgramQuery = "SELECT*FROM programme where Username = '$adminname'";
                                                   $fetchProgram = mysqli_query($connection, $fetchProgramQuery);
                                                   while($resCode = $fetchProgram->fetch_assoc()){
                                                    $rowName = $resCode['Prog_name'];
                                                    echo "<option value='$rowName'>$rowName</option>";
                                                  }
                                                 ?>
                                            </select>
                                            <label for="yearIntro">Year of Introduction</label>
                                            <select name="yearIntro" class="form-control">
                                               <option value="" disabled selected>Select Year</option>
                                               <?php
                                                 $fetchProgramYearQuery = "SELECT*FROM academic_year";
                                                 $fetchProgramYear = mysqli_query($connection, $fetchProgramYearQuery);
                                                 while($programYear = $fetchProgramYear->fetch_assoc()){
                                                    $rowYear = $programYear['Year'];
                                                    echo "<option value='$rowYear'>$rowYear</option>";
                                                 }
                                               ?>
                                            </select>
                                            <label for="statusImplement">Status of Implementation of CBCS/ elective course system</label>
                                            <select name="statusImplement" class="form-control">
                                              <option value="NULL"selected disabled>Select The Status</option>
                                              <option value="Yes">Yes</option>
                                              <option value="No">No</option>
                                            </select>
                                            <label for="yearImplement">Year of implementation of CBCS / elective course system</label>
                                            <select name="yearImplement" class="form-control">
                                               <option value="" disabled selected>Select Year</option>
                                               <?php
                                                 $fetchProgramYearQuery = "SELECT*FROM academic_year";
                                                 $fetchProgramYear = mysqli_query($connection, $fetchProgramYearQuery);
                                                 while($programYear = $fetchProgramYear->fetch_assoc()){
                                                    $rowYear = $programYear['Year'];
                                                    echo "<option value='$rowYear'>$rowYear</option>";
                                                 }
                                               ?>
                                            </select>
                                            <label for="yearRevision">Year of Revision (if any)</label>
                                            <select name="yearRevision" class="form-control">
                                               <option value="" disabled selected>Select Year</option>
                                               <?php
                                                 $fetchProgramYearListQuery = "SELECT*FROM year_list";
                                                 $fetchProgramYearList = mysqli_query($connection, $fetchProgramYearListQuery);
                                                 while($programYearList = $fetchProgramYearList->fetch_assoc()){
                                                    $rowYear = $programYearList['year'];
                                                    echo "<option value='$rowYear'>$rowYear</option>";
                                                 }
                                               ?>
                                            </select>
                                            <label for="percentContent">If revision has been carried out in the syllabus during last 5 years, %age of content added or replaced</label>
                                            <input type="number" name="percentContent" class="form-control" placeholder="  %age " required/>
                                            <label for="doclink">Link for the relevent document</label>
                                            <input type="text" name="doclink" class="form-control" autocomplete="off" required/> <br>
                                            <button type="submit" class="btn btn-primary" name="submit"  <?php
                                                // For Enabling or Disabling Button
                                                if($dateCheck){
                                                    echo "disabled";
                                                }else{
                                                    echo "enabled";
                                                }
                                            ?>>Save changes</button>
                                         </form>
                                        </div>  
                                              <div class="modal-footer">
                                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                              </div>
                                    </div>
                                </div>
                            </div>
                             </tr>
                           </tbody>
                        </table><br><br>
                    </div>
                    <br>
        <div class="criteriaTitle2">
         <h4>1.3 Curriculum Enrichment</h4>
        </div><br>
    <!-- Metric 1.3.1 -->
    <form method="post">
        <div id="q131" class="questionContainer">
                <p class="msgContainer"><?php echo $msg131;?></p>
                <img
                    <?php 
                    if($dataFill131){
                        echo "src='$filled' data-toggle='tooltip' data-placement='bottom' title='Metric Filled'";
                    }else if($dataFill131 == false){
                        echo "src='$unfilled' data-toggle='tooltip' data-placement='bottom' title='Metric Not Filled'";
                    }else{
                        echo "src='$notapplicableimg' data-toggle='tooltip' data-placement='bottom' title='Metric Not Applicable'";
                    }
                    ?>
                    class="fillImage"
                >
                <p class="qName">Q<sub>L</sub>M <br>1.3.1</p>
                <p class="question">
                Institution integrates crosscutting issues relevant to Professional Ethics, 
                Gender, Human Values, Environment and Sustainability into the Curriculum
                </p>
                <i class="fa fa-angle-down iconRight"></i>
                <p class="questionPart">
                    Write description in maximum of 500 words<br>
                    <b>File description</b>
                    <ul>
                    <li>Upload Additional information.</li>
                    <li>Upload the list and description of the courses which address the Gender, Environment and Sustainability, Human Values and Professional Ethics into the Curriculum</li>
                    </ul>
                </p>
                </div>
                    <div class="answerContainer" id="a131">
                        <label for="answer">Description (Max Length: 500 words)</label>
                        <textarea name="answer" class="form-control" rows="6" maxlength="550" placeholder="<?php echo $des131;?>" required></textarea><br>
                        <label for="doclink">Link to the relevent document</label>
                        <input type="text" name="doclink" class="form-control" placeholder="<?php echo $link131;?>" autocomplete="off" required /><br>
                        <input type="submit" name="submit131" class="btn btn-primary" value="Save Changes" 
                        <?php
                            // For Enabling or Disabling Button
                            if($dateCheck){
                                echo "disabled";
                            }else{
                                echo "enabled";
                            }
                        ?>
                        required/>
                    </div>   
        </form>
        <!-- Metric 1.3.2 -->
        <div id="q132" class="questionContainer">
                <p class="msgContainer" id="msg132"></p>
                <img
                    <?php 
                       $queryCheck132 = "SELECT*FROM ssr_m1_3_2 WHERE username = '$adminname'";
                       $query132 = mysqli_query($connection, $queryCheck132);
                       if(mysqli_num_rows($query132)>0){
                           $n = mysqli_num_rows($query132);
                           echo "src = '../../assets/images/filled.png' data-toggle='tooltip' data-placement='bottom' title='".$n." Filled'";
                       }else if(mysqli_num_rows($query132) == 0){
                        echo "src = '../../assets/images/unfilled.png' data-toggle='tooltip' data-placement='bottom' title='Not Filled'";
                       }
                    ?>
                    class="fillImage"
                >
                <p class="qName">Q<sub>N</sub>M <br>1.3.2</p>
                <p class="question">
                    Number of value-added courses for imparting transferable and
                    life skills offered during last five years 
                </p>
                <i class="fa fa-angle-down iconRight"></i>
                <p class="questionPart">
                    <b>File description</b>
                    <ul>
                    <li>Any additional information</li>
                    <li>Brochure or any other document relating to value added courses</li>
                    <li>List of value added courses</li>
                    </ul><br>
                </p>
                </div>
                   
                    <div class="answerContainer" id="a132">
                    <form id="f132Y1">
                        <h4 style="text-align: center;">Year 1</h4>
                        <table class="table table-bordered" id="table132Y1">
                           <thead>
                             <th>Name of the value added courses (with 30 or more contact hours)offered</th>
                             <th>Course Code(if any)</th>
                             <th>Year of offering</th>
                             <th>No. of times offered during the same year</th>
                             <th>Duration of course</th>
                             <th>Number of students enrolled in the year</th>
                             <th>Number of Students completing the course in the year</th>
                             <th>Update Data</th>
                           </thead>
                           <tbody id="#tablebody132Y1">
                             <?php
                                 $query = "SELECT*FROM ssr_m1_3_2 WHERE username='$adminname' AND collageYear = 'Y1' ORDER BY id DESC";
                                 $get = mysqli_query($connection, $query);
                                 if(mysqli_num_rows($get) == 0){
                                     $output  = "<tr><td colspan='8' style='text-align:center;'>No Data Available</td></tr>";
                                     echo $output;    
                                    }else{
                                     while($res132 = $get->fetch_assoc()){
                                         $id132Y1 = $res132['id'];
                                         $coursename = $res132['courseName'];
                                         $coursecode = $res132['courseCode'];
                                         $courseyear = $res132['year'];
                                         $coursenumtime = $res132['numberTimes'];
                                         $courseduration = $res132['duration'];
                                         $coursenumstudent = $res132['numberStudent'];
                                         $coursenumstudentc = $res132['numberStudentComplete'];
                                         $output = "<tr><td>$coursename</td><td>$coursecode</td><td>$courseyear</td><td>$coursenumtime</td><td>$courseduration</td><td>$coursenumstudent</td><td>$coursenumstudentc</td><td><a href='delete132Y1.php?id=$id132Y1' class='btn btn-danger'>Delete</a></td></tr>";
                                         echo $output;    
                                    }
                                 }
                             ?>
                           </tbody>
                        </table><br>
                        <button id="addRow132Y1" style="border: none; padding: 0px; margin: 0px; background-color: #fff; height: 70px; width: 120px;float: right;"><i class="fa fa-plus-circle" style="font-size: 50px; color: orange;" data-toggle="tooltip" data-placement="top" title="Add Rows"></i></button>
                        <br><br>
                        <center>
                            <button class="btn btn-primary" id="save133Y1" name="submit" type="submit" style="text-align: center;margin-left: 30px; margin-top: 10px;">Save Changes</button>
                        </center>
                    <br>
                    </form><br>
                    <form id="f132Y2">
                        <h4 style="text-align: center;">Year 2</h4>
                        <table class="table table-bordered" id="table132Y2">
                           <thead>
                             <th>Name of the value added courses (with 30 or more contact hours)offered</th>
                             <th>Course Code(if any)</th>
                             <th>Year of offering</th>
                             <th>No. of times offered during the same year</th>
                             <th>Duration of course</th>
                             <th>Number of students enrolled in the year</th>
                             <th>Number of Students completing the course in the year</th>
                             <th>Update Data</th>
                           </thead>
                           <tbody id="#tablebody132Y1">
                             <?php
                                 $query = "SELECT*FROM ssr_m1_3_2 WHERE username='$adminname' AND collageYear = 'Y2' ORDER BY id DESC";
                                 $get = mysqli_query($connection, $query);
                                 if(mysqli_num_rows($get) == 0){
                                     $output  = "<tr><td colspan='8' style='text-align:center;'>No Data Available</td></tr>";
                                     echo $output;    
                                    }else{
                                     while($res132 = $get->fetch_assoc()){
                                         $id132Y1 = $res132['id'];
                                         $coursename = $res132['courseName'];
                                         $coursecode = $res132['courseCode'];
                                         $courseyear = $res132['year'];
                                         $coursenumtime = $res132['numberTimes'];
                                         $courseduration = $res132['duration'];
                                         $coursenumstudent = $res132['numberStudent'];
                                         $coursenumstudentc = $res132['numberStudentComplete'];
                                         $output = "<tr><td>$coursename</td><td>$coursecode</td><td>$courseyear</td><td>$coursenumtime</td><td>$courseduration</td><td>$coursenumstudent</td><td>$coursenumstudentc</td><td><a href='delete132Y1.php?id=$id132Y1' class='btn btn-danger'>Delete</a></td></tr>";
                                         echo $output;    
                                    }
                                 }
                             ?>
                           </tbody>
                        </table><br>
                        <button id="addRow132Y2" style="border: none; padding: 0px; margin: 0px; background-color: #fff; height: 70px; width: 120px;float: right;"><i class="fa fa-plus-circle" style="font-size: 50px; color: orange;" data-toggle="tooltip" data-placement="top" title="Add Rows"></i></button>
                        <br><br>
                        <center>
                            <button class="btn btn-primary" id="save133Y1" name="submit" type="submit" style="text-align: center;margin-left: 30px; margin-top: 10px;">Save Changes</button>
                        </center>
                    <br>
                    </form><br>
                    <form id="f132Y3">
                        <h4 style="text-align: center;">Year 3</h4>
                        <table class="table table-bordered" id="table132Y3">
                           <thead>
                             <th>Name of the value added courses (with 30 or more contact hours)offered</th>
                             <th>Course Code(if any)</th>
                             <th>Year of offering</th>
                             <th>No. of times offered during the same year</th>
                             <th>Duration of course</th>
                             <th>Number of students enrolled in the year</th>
                             <th>Number of Students completing the course in the year</th>
                             <th>Update Data</th>
                           </thead>
                           <tbody id="#tablebody132Y1">
                             <?php
                                 $query = "SELECT*FROM ssr_m1_3_2 WHERE username='$adminname' AND collageYear = 'Y3' ORDER BY id DESC";
                                 $get = mysqli_query($connection, $query);
                                 if(mysqli_num_rows($get) == 0){
                                     $output  = "<tr><td colspan='8' style='text-align:center;'>No Data Available</td></tr>";
                                     echo $output;    
                                    }else{
                                     while($res132 = $get->fetch_assoc()){
                                         $id132Y1 = $res132['id'];
                                         $coursename = $res132['courseName'];
                                         $coursecode = $res132['courseCode'];
                                         $courseyear = $res132['year'];
                                         $coursenumtime = $res132['numberTimes'];
                                         $courseduration = $res132['duration'];
                                         $coursenumstudent = $res132['numberStudent'];
                                         $coursenumstudentc = $res132['numberStudentComplete'];
                                         $output = "<tr><td>$coursename</td><td>$coursecode</td><td>$courseyear</td><td>$coursenumtime</td><td>$courseduration</td><td>$coursenumstudent</td><td>$coursenumstudentc</td><td><a href='delete132Y1.php?id=$id132Y1' class='btn btn-danger'>Delete</a></td></tr>";
                                         echo $output;    
                                    }
                                 }
                             ?>
                           </tbody>
                        </table><br>
                        <button id="addRow132Y3" style="border: none; padding: 0px; margin: 0px; background-color: #fff; height: 70px; width: 120px;float: right;"><i class="fa fa-plus-circle" style="font-size: 50px; color: orange;" data-toggle="tooltip" data-placement="top" title="Add Rows"></i></button>
                        <br><br>
                        <center>
                            <button class="btn btn-primary" id="save133Y1" name="submit" type="submit" style="text-align: center;margin-left: 30px; margin-top: 10px;">Save Changes</button>
                        </center>
                    <br>
                    </form><br>
                    <form id="f132Y4">
                        <h4 style="text-align: center;">Year 4</h4>
                        <table class="table table-bordered" id="table132Y4">
                           <thead>
                             <th>Name of the value added courses (with 30 or more contact hours)offered</th>
                             <th>Course Code(if any)</th>
                             <th>Year of offering</th>
                             <th>No. of times offered during the same year</th>
                             <th>Duration of course</th>
                             <th>Number of students enrolled in the year</th>
                             <th>Number of Students completing the course in the year</th>
                             <th>Update Data</th>
                           </thead>
                           <tbody>
                             <?php
                                 $query = "SELECT*FROM ssr_m1_3_2 WHERE username='$adminname' AND collageYear = 'Y4' ORDER BY id DESC";
                                 $get = mysqli_query($connection, $query);
                                 if(mysqli_num_rows($get) == 0){
                                     $output  = "<tr><td colspan='8' style='text-align:center;'>No Data Available</td></tr>";
                                     echo $output;    
                                    }else{
                                     while($res132 = $get->fetch_assoc()){
                                         $id132Y1 = $res132['id'];
                                         $coursename = $res132['courseName'];
                                         $coursecode = $res132['courseCode'];
                                         $courseyear = $res132['year'];
                                         $coursenumtime = $res132['numberTimes'];
                                         $courseduration = $res132['duration'];
                                         $coursenumstudent = $res132['numberStudent'];
                                         $coursenumstudentc = $res132['numberStudentComplete'];
                                         $output = "<tr><td>$coursename</td><td>$coursecode</td><td>$courseyear</td><td>$coursenumtime</td><td>$courseduration</td><td>$coursenumstudent</td><td>$coursenumstudentc</td><td><a href='delete132Y1.php?id=$id132Y1' class='btn btn-danger'>Delete</a></td></tr>";
                                         echo $output;    
                                    }
                                 }
                             ?>
                           </tbody>
                        </table><br>
                        <button id="addRow132Y4" style="border: none; padding: 0px; margin: 0px; background-color: #fff; height: 70px; width: 120px;float: right;"><i class="fa fa-plus-circle" style="font-size: 50px; color: orange;" data-toggle="tooltip" data-placement="top" title="Add Rows"></i></button>
                        <br><br>
                        <center>
                            <button class="btn btn-primary" id="save133Y1" name="submit" type="submit" style="text-align: center;margin-left: 30px; margin-top: 10px;">Save Changes</button>
                        </center>
                    <br>
                    </form><br>
                    <form id="f132Y5">
                        <h4 style="text-align: center;">Year 5</h4>
                        <table class="table table-bordered" id="table132Y5">
                           <thead>
                             <th>Name of the value added courses (with 30 or more contact hours)offered</th>
                             <th>Course Code(if any)</th>
                             <th>Year of offering</th>
                             <th>No. of times offered during the same year</th>
                             <th>Duration of course</th>
                             <th>Number of students enrolled in the year</th>
                             <th>Number of Students completing the course in the year</th>
                             <th>Update Data</th>
                           </thead>
                           <tbody id="#tablebody132Y1">
                             <?php
                                 $query = "SELECT*FROM ssr_m1_3_2 WHERE username='$adminname' AND collageYear = 'Y5' ORDER BY id DESC";
                                 $get = mysqli_query($connection, $query);
                                 if(mysqli_num_rows($get) == 0){
                                     $output  = "<tr><td colspan='8' style='text-align:center;'>No Data Available</td></tr>";
                                     echo $output;    
                                    }else{
                                     while($res132 = $get->fetch_assoc()){
                                         $id132Y1 = $res132['id'];
                                         $coursename = $res132['courseName'];
                                         $coursecode = $res132['courseCode'];
                                         $courseyear = $res132['year'];
                                         $coursenumtime = $res132['numberTimes'];
                                         $courseduration = $res132['duration'];
                                         $coursenumstudent = $res132['numberStudent'];
                                         $coursenumstudentc = $res132['numberStudentComplete'];
                                         $output = "<tr><td>$coursename</td><td>$coursecode</td><td>$courseyear</td><td>$coursenumtime</td><td>$courseduration</td><td>$coursenumstudent</td><td>$coursenumstudentc</td><td><a href='delete132Y1.php?id=$id132Y1' class='btn btn-danger'>Delete</a></td></tr>";
                                         echo $output;    
                                    }
                                 }
                             ?>
                           </tbody>
                        </table><br>
                        <button id="addRow132Y5" style="border: none; padding: 0px; margin: 0px; background-color: #fff; height: 70px; width: 120px;float: right;"><i class="fa fa-plus-circle" style="font-size: 50px; color: orange;" data-toggle="tooltip" data-placement="top" title="Add Rows"></i></button>
                        <br><br>
                        <center>
                            <button class="btn btn-primary" id="save133Y1" name="submit" type="submit" style="text-align: center;margin-left: 30px; margin-top: 10px;">Save Changes</button>
                        </center><br>
                        <h6 style="text-align: center">* To check with SOP if the same student can be counted more than once</h6>
                    <br>
                    </form>
                    <script>
                      $(document).ready(function(){
                            var count132Y1 = 0;
                            var output = "";
    
                            // jQuery button click event to add a row
                            $('#addRow132Y1').on('click', function () {
                                count132Y1++;
                                var output = "<tr id='row"+count132Y1+"'><td ><input type='text' class='form-control courseName' required/></td>";
                                output+= "<td><input type='text' class='form-control courseCode' /></td>";
                                output+= "<td><input type='number' class='form-control year'  required/></td>";
                                output+= "<td><input type='number' class='form-control numberTimes' required/></td>";
                                output+= "<td><input type='number' class='form-control duration' required/></td>";
                                output+= "<td><input type='number' class='form-control numberStudent' required/></td>";
                                output+= "<td><input type='number' class='form-control numberStudentComplete'  required/></td>";
                                output+= "<td><input type='button' class='btn btn-danger deleteY1' value='Delete'data-toggle='tooltip' data-row='row"+count132Y1+"' data-placement='bottom' title='Once Deleted cannot be retreived' /></td>";
                                output+= "</tr>";
                                tableBody = $("#table132Y1 tbody");
                                tableBody.append(output);
                                
                            });

                            $("#table132Y1 tbody").on('click', '.deleteY1', function(){
                                    if(confirm("Are you sure you want to delete this data?")){
                                        var delete_row = $(this).data("row");
                                        $('#'+delete_row).remove();
                                    }else{
                                        return false;
                                    }
                                
                            });

                            // BREAK
                            var count132Y2 = 0;
                            var output2 = "";
    
                            // jQuery button click event to add a row
                            $('#addRow132Y2').on('click', function () {
                                count132Y2++;
                                var output2 = "<tr id='row"+count132Y2+"'><td ><input type='text' class='form-control courseName' required/></td>";
                                output2+= "<td><input type='text' class='form-control courseCode' /></td>";
                                output2+= "<td><input type='number' class='form-control year'  required/></td>";
                                output2+= "<td><input type='number' class='form-control numberTimes' required/></td>";
                                output2+= "<td><input type='number' class='form-control duration' required/></td>";
                                output2+= "<td><input type='number' class='form-control numberStudent' required/></td>";
                                output2+= "<td><input type='number' class='form-control numberStudentComplete'  required/></td>";
                                output2+= "<td><input type='button' class='btn btn-danger deleteY1' value='Delete'data-toggle='tooltip' data-row='row"+count132Y2+"' data-placement='bottom' title='Once Deleted cannot be retreived' /></td>";
                                output2+= "</tr>";
                                tableBody = $("#table132Y2 tbody");
                                tableBody.append(output2);
                                
                            });

                            $("#table132Y2 tbody").on('click', '.deleteY1', function(){
                                    if(confirm("Are you sure you want to delete this data?")){
                                        var delete_row = $(this).data("row");
                                        $('#'+delete_row).remove();
                                    }else{
                                        return false;
                                    }
                                
                            });

                            
                            // BREAK
                            var count132Y3 = 0;
                            var output3 = "";
    
                            // jQuery button click event to add a row
                            $('#addRow132Y3').on('click', function () {
                                count132Y3++;
                                var output3 = "<tr id='row"+count132Y3+"'><td ><input type='text' class='form-control courseName' required/></td>";
                                output3+= "<td><input type='text' class='form-control courseCode' /></td>";
                                output3+= "<td><input type='number' class='form-control year'  required/></td>";
                                output3+= "<td><input type='number' class='form-control numberTimes' required/></td>";
                                output3+= "<td><input type='number' class='form-control duration' required/></td>";
                                output3+= "<td><input type='number' class='form-control numberStudent' required/></td>";
                                output3+= "<td><input type='number' class='form-control numberStudentComplete'  required/></td>";
                                output3+= "<td><input type='button' class='btn btn-danger deleteY1' value='Delete'data-toggle='tooltip' data-row='row"+count132Y3+"' data-placement='bottom' title='Once Deleted cannot be retreived' /></td>";
                                output3+= "</tr>";
                                tableBody = $("#table132Y3 tbody");
                                tableBody.append(output3);
                                
                            });

                            $("#table132Y3 tbody").on('click', '.deleteY1', function(){
                                    if(confirm("Are you sure you want to delete this data?")){
                                        var delete_row = $(this).data("row");
                                        $('#'+delete_row).remove();
                                    }else{
                                        return false;
                                    }
                                
                            });

                            
                            // BREAK
                            var count132Y4 = 0;
                            var output4 = "";
    
                            // jQuery button click event to add a row
                            $('#addRow132Y4').on('click', function () {
                                count132Y4++;
                                var output4 = "<tr id='row"+count132Y4+"'><td ><input type='text' class='form-control courseName' required/></td>";
                                output4+= "<td><input type='text' class='form-control courseCode' /></td>";
                                output4+= "<td><input type='number' class='form-control year'  required/></td>";
                                output4+= "<td><input type='number' class='form-control numberTimes' required/></td>";
                                output4+= "<td><input type='number' class='form-control duration' required/></td>";
                                output4+= "<td><input type='number' class='form-control numberStudent' required/></td>";
                                output4+= "<td><input type='number' class='form-control numberStudentComplete'  required/></td>";
                                output4+= "<td><input type='button' class='btn btn-danger deleteY1' value='Delete'data-toggle='tooltip' data-row='row"+count132Y4+"' data-placement='bottom' title='Once Deleted cannot be retreived' /></td>";
                                output4+= "</tr>";
                                tableBody = $("#table132Y4 tbody");
                                tableBody.append(output4);
                                
                            });

                            $("#table132Y4 tbody").on('click', '.deleteY1', function(){
                                    if(confirm("Are you sure you want to delete this data?")){
                                        var delete_row = $(this).data("row");
                                        $('#'+delete_row).remove();
                                    }else{
                                        return false;
                                    }
                                
                            });

                             // BREAK
                             var count132Y5 = 0;
                            var output5 = "";
    
                            // jQuery button click event to add a row
                            $('#addRow132Y5').on('click', function () {
                                count132Y5++;
                                var output5 = "<tr id='row"+count132Y5+"'><td ><input type='text' class='form-control courseName' required/></td>";
                                output5+= "<td><input type='text' class='form-control courseCode' /></td>";
                                output5+= "<td><input type='number' class='form-control year'  required/></td>";
                                output5+= "<td><input type='number' class='form-control numberTimes' required/></td>";
                                output5+= "<td><input type='number' class='form-control duration' required/></td>";
                                output5+= "<td><input type='number' class='form-control numberStudent' required/></td>";
                                output5+= "<td><input type='number' class='form-control numberStudentComplete'  required/></td>";
                                output5+= "<td><input type='button' class='btn btn-danger deleteY1' value='Delete'data-toggle='tooltip' data-row='row"+count132Y5+"' data-placement='bottom' title='Once Deleted cannot be retreived' /></td>";
                                output5+= "</tr>";
                                tableBody = $("#table132Y5 tbody");
                                tableBody.append(output5);
                                
                            });

                            $("#table132Y5 tbody").on('click', '.deleteY1', function(){
                                    if(confirm("Are you sure you want to delete this data?")){
                                        var delete_row = $(this).data("row");
                                        $('#'+delete_row).remove();
                                    }else{
                                        return false;
                                    }
                                
                            });

                            $("#f132Y1").on("submit", function(event){

                                
                                var courseName = [];
                                var courseCode = [];
                                var year = [];
                                var numberTimes = [];
                                var duration = [];
                                var numberStudent = [];
                                var numberStudentComplete = [];

                                $('.courseName').each(function(){
                                    courseName.push($(this).val());
                                });
                                $('.courseCode').each(function(){
                                    courseCode.push($(this).val());
                                });
                                $('.year').each(function(){
                                    year.push($(this).val());
                                });
                                $('.numberTimes').each(function(){
                                    numberTimes.push($(this).val());
                                });
                                $('.duration').each(function(){
                                    duration.push($(this).val());
                                });
                                $('.numberStudent').each(function(){
                                    numberStudent.push($(this).val());
                                });
                                $('.numberStudentComplete').each(function(){
                                    numberStudentComplete.push($(this).val());
                                });
                                $.ajax({
                                    url: "save132.php",
                                    method:"POST",
                                    data: {courseName: courseName, courseCode: courseCode, year: year, numberTimes: numberTimes, duration: duration, numberStudent: numberStudent, numberStudentComplete: numberStudentComplete},
                                    async: false, //solution
                                    cache: false,
                                    success: function(data){
                                        $("#msg132").html(data);
                                        $("#q132").css("disply", "block");
                                    },
                                    error: function(){
                                        $("#msg132").html("<h5 style='color: red; text-align; center'>Ajax Call Error!</h5>");
                                        
                                    }
                                });
                            });

                            // Form 132Y2
                        $("#f132Y2").on("submit", function(event){   
                            var courseName = [];
                            var courseCode = [];
                            var year = [];
                            var numberTimes = [];
                            var duration = [];
                            var numberStudent = [];
                            var numberStudentComplete = [];

                            $('.courseName').each(function(){
                                courseName.push($(this).val());
                            });
                            $('.courseCode').each(function(){
                                courseCode.push($(this).val());
                            });
                            $('.year').each(function(){
                                year.push($(this).val());
                            });
                            $('.numberTimes').each(function(){
                                numberTimes.push($(this).val());
                            });
                            $('.duration').each(function(){
                                duration.push($(this).val());
                            });
                            $('.numberStudent').each(function(){
                                numberStudent.push($(this).val());
                            });
                            $('.numberStudentComplete').each(function(){
                                numberStudentComplete.push($(this).val());
                            });
                            $.ajax({
                                url: "save132_2.php",
                                method:"POST",
                                data: {courseName: courseName, courseCode: courseCode, year: year, numberTimes: numberTimes, duration: duration, numberStudent: numberStudent, numberStudentComplete: numberStudentComplete},
                                async: false, //solution
                                cache: false,
                                success: function(data){
                                    $("#msg132").html(data);
                                    
                                },
                                error: function(){
                                    $("#msg132").html("<h5 style='color: red; text-align; center'>Ajax Call Error!</h5>");
                                    
                                }
                            });
                        });

                         // Form 132Y3
                         $("#f132Y3").on("submit", function(event){   
                            var courseName = [];
                            var courseCode = [];
                            var year = [];
                            var numberTimes = [];
                            var duration = [];
                            var numberStudent = [];
                            var numberStudentComplete = [];

                            $('.courseName').each(function(){
                                courseName.push($(this).val());
                            });
                            $('.courseCode').each(function(){
                                courseCode.push($(this).val());
                            });
                            $('.year').each(function(){
                                year.push($(this).val());
                            });
                            $('.numberTimes').each(function(){
                                numberTimes.push($(this).val());
                            });
                            $('.duration').each(function(){
                                duration.push($(this).val());
                            });
                            $('.numberStudent').each(function(){
                                numberStudent.push($(this).val());
                            });
                            $('.numberStudentComplete').each(function(){
                                numberStudentComplete.push($(this).val());
                            });
                            $.ajax({
                                url: "save132_3.php",
                                method:"POST",
                                data: {courseName: courseName, courseCode: courseCode, year: year, numberTimes: numberTimes, duration: duration, numberStudent: numberStudent, numberStudentComplete: numberStudentComplete},
                                async: false, //solution
                                cache: false,
                                success: function(data){
                                    $("#msg132").html(data);
                                    
                                },
                                error: function(){
                                    $("#msg132").html("<h5 style='color: red; text-align; center'>Ajax Call Error!</h5>");
                                    
                                }
                            });
                        });
                          
                        // Form 132Y4
                         $("#f132Y4").on("submit", function(event){   
                            var courseName = [];
                            var courseCode = [];
                            var year = [];
                            var numberTimes = [];
                            var duration = [];
                            var numberStudent = [];
                            var numberStudentComplete = [];

                            $('.courseName').each(function(){
                                courseName.push($(this).val());
                            });
                            $('.courseCode').each(function(){
                                courseCode.push($(this).val());
                            });
                            $('.year').each(function(){
                                year.push($(this).val());
                            });
                            $('.numberTimes').each(function(){
                                numberTimes.push($(this).val());
                            });
                            $('.duration').each(function(){
                                duration.push($(this).val());
                            });
                            $('.numberStudent').each(function(){
                                numberStudent.push($(this).val());
                            });
                            $('.numberStudentComplete').each(function(){
                                numberStudentComplete.push($(this).val());
                            });
                            $.ajax({
                                url: "save132_4.php",
                                method:"POST",
                                data: {courseName: courseName, courseCode: courseCode, year: year, numberTimes: numberTimes, duration: duration, numberStudent: numberStudent, numberStudentComplete: numberStudentComplete},
                                async: false, //solution
                                cache: false,
                                success: function(data){
                                    $("#msg132").html(data);
                                    
                                },
                                error: function(){
                                    $("#msg132").html("<h5 style='color: red; text-align; center'>Ajax Call Error!</h5>");
                                    
                                }
                            });
                        });
                        
                       // Form 132Y5
                        $("#f132Y5").on("submit", function(event){   
                            var courseName = [];
                            var courseCode = [];
                            var year = [];
                            var numberTimes = [];
                            var duration = [];
                            var numberStudent = [];
                            var numberStudentComplete = [];

                            $('.courseName').each(function(){
                                courseName.push($(this).val());
                            });
                            $('.courseCode').each(function(){
                                courseCode.push($(this).val());
                            });
                            $('.year').each(function(){
                                year.push($(this).val());
                            });
                            $('.numberTimes').each(function(){
                                numberTimes.push($(this).val());
                            });
                            $('.duration').each(function(){
                                duration.push($(this).val());
                            });
                            $('.numberStudent').each(function(){
                                numberStudent.push($(this).val());
                            });
                            $('.numberStudentComplete').each(function(){
                                numberStudentComplete.push($(this).val());
                            });
                            $.ajax({
                                url: "save132_5.php",
                                method:"POST",
                                data: {courseName: courseName, courseCode: courseCode, year: year, numberTimes: numberTimes, duration: duration, numberStudent: numberStudent, numberStudentComplete: numberStudentComplete},
                                async: false, //solution
                                cache: false,
                                success: function(data){
                                    $("#msg132").html(data);
                                    
                                },
                                error: function(){
                                    $("#msg132").html("<h5 style='color: red; text-align; center'>Ajax Call Error!</h5>");
                                    
                                }
                            });
                        });

                      });
                    </script>
              </div>
                <!-- Metric 1.3.3 -->
                <div id="q133" class="questionContainer">
                <p class="msgContainer" id="msg133"></p>
                <img
                    <?php 
                       $queryCheck133 = "SELECT*FROM ssr_m1_3_3 WHERE username = '$adminname'";
                       $query133 = mysqli_query($connection, $queryCheck133);
                       if(mysqli_num_rows($query133)>0){
                           $n = mysqli_num_rows($query133);
                           echo "src = '../../assets/images/filled.png' data-toggle='tooltip' data-placement='bottom' title='".$n." Filled'";
                       }else if(mysqli_num_rows($query133) == 0){
                        echo "src = '../../assets/images/unfilled.png' data-toggle='tooltip' data-placement='bottom' title='Not Filled'";
                       }
                    ?>
                    class="fillImage"
                >
                <p class="qName">Q<sub>N</sub>M <br>1.3.3</p>
                <p class="question">
                Number of students enrolled in value-added courses imparting transferable and 
                life skills offered year wise during the last five years 
                </p>
                <i class="fa fa-angle-down iconRight"></i>
                <p class="questionPart">
                    <b>File description</b>
                    <ul>
                    <li>Names of the value added courses with 30 or more contact hours</li>
                    <li>No. of times offered during the same year</li>
                    <li>Total no. of students completing the course in the year</li>
                    </ul><br>
                </p>
                </div>
                   
                    <div class="answerContainer" id="a133">
                    <form id="f133Y1">
                        <h4 style="text-align: center;">Year 1</h4>
                        <table class="table table-bordered" id="table133Y1">
                           <thead>
                             <th>Name of the value added courses (with 30 or more contact hours)offered</th>
                             <th>Course Code(if any)</th>
                             <th>Year of offering</th>
                             <th>No. of times offered during the same year</th>
                             <th>Duration of course</th>
                             <th>Number of students enrolled in the year</th>
                             <th>Number of Students completing the course in the year</th>
                             <th>Update Data</th>
                           </thead>
                           <tbody id="#tablebody133Y1">
                             <?php
                                 $query = "SELECT*FROM ssr_m1_3_3 WHERE username='$adminname' AND collageYear = 'Y1' ORDER BY id DESC";
                                 $get = mysqli_query($connection, $query);
                                 if(mysqli_num_rows($get) == 0){
                                     $output  = "<tr><td colspan='8' style='text-align:center;'>No Data Available</td></tr>";
                                     echo $output;    
                                    }else{
                                     while($res133 = $get->fetch_assoc()){
                                         $id133Y1 = $res133['id'];
                                         $coursename = $res133['courseName'];
                                         $coursecode = $res133['courseCode'];
                                         $courseyear = $res133['year'];
                                         $coursenumtime = $res133['numberTimes'];
                                         $courseduration = $res133['duration'];
                                         $coursenumstudent = $res133['numberStudent'];
                                         $coursenumstudentc = $res133['numberStudentComplete'];
                                         $output = "<tr><td>$coursename</td><td>$coursecode</td><td>$courseyear</td><td>$coursenumtime</td><td>$courseduration</td><td>$coursenumstudent</td><td>$coursenumstudentc</td><td><a href='delete133.php?id=$id133Y1' class='btn btn-danger'>Delete</a></td></tr>";
                                         echo $output;    
                                    }
                                 }
                             ?>
                           </tbody>
                        </table><br>
                        <button id="addRow132Y1" style="border: none; padding: 0px; margin: 0px; background-color: #fff; height: 70px; width: 120px;float: right;"><i class="fa fa-plus-circle" style="font-size: 50px; color: orange;" data-toggle="tooltip" data-placement="top" title="Add Rows"></i></button>
                        <br><br>
                        <center>
                            <button class="btn btn-primary" id="save133Y1" name="submit" type="submit" style="text-align: center;margin-left: 30px; margin-top: 10px;">Save Changes</button>
                        </center>
                    <br>
                    </form><br>
                    <form id="f133Y2">
                        <h4 style="text-align: center;">Year 2</h4>
                        <table class="table table-bordered" id="table133Y2">
                           <thead>
                             <th>Name of the value added courses (with 30 or more contact hours)offered</th>
                             <th>Course Code(if any)</th>
                             <th>Year of offering</th>
                             <th>No. of times offered during the same year</th>
                             <th>Duration of course</th>
                             <th>Number of students enrolled in the year</th>
                             <th>Number of Students completing the course in the year</th>
                             <th>Update Data</th>
                           </thead>
                           <tbody id="#tablebody133Y1">
                             <?php
                                 $query = "SELECT*FROM ssr_m1_3_3 WHERE username='$adminname' AND collageYear = 'Y2' ORDER BY id DESC";
                                 $get = mysqli_query($connection, $query);
                                 if(mysqli_num_rows($get) == 0){
                                     $output  = "<tr><td colspan='8' style='text-align:center;'>No Data Available</td></tr>";
                                     echo $output;    
                                    }else{
                                     while($res133 = $get->fetch_assoc()){
                                         $id133Y1 = $res133['id'];
                                         $coursename = $res133['courseName'];
                                         $coursecode = $res133['courseCode'];
                                         $courseyear = $res133['year'];
                                         $coursenumtime = $res133['numberTimes'];
                                         $courseduration = $res133['duration'];
                                         $coursenumstudent = $res133['numberStudent'];
                                         $coursenumstudentc = $res133['numberStudentComplete'];
                                         $output = "<tr><td>$coursename</td><td>$coursecode</td><td>$courseyear</td><td>$coursenumtime</td><td>$courseduration</td><td>$coursenumstudent</td><td>$coursenumstudentc</td><td><a href='delete133.php?id=$id133Y1' class='btn btn-danger'>Delete</a></td></tr>";
                                         echo $output;    
                                    }
                                 }
                             ?>
                           </tbody>
                        </table><br>
                        <button id="addRow133Y2" style="border: none; padding: 0px; margin: 0px; background-color: #fff; height: 70px; width: 120px;float: right;"><i class="fa fa-plus-circle" style="font-size: 50px; color: orange;" data-toggle="tooltip" data-placement="top" title="Add Rows"></i></button>
                        <br><br>
                        <center>
                            <button class="btn btn-primary" id="save133Y1" name="submit" type="submit" style="text-align: center;margin-left: 30px; margin-top: 10px;">Save Changes</button>
                        </center>
                    <br>
                    </form><br>
                    <form id="f133Y3">
                        <h4 style="text-align: center;">Year 3</h4>
                        <table class="table table-bordered" id="table133Y3">
                           <thead>
                             <th>Name of the value added courses (with 30 or more contact hours)offered</th>
                             <th>Course Code(if any)</th>
                             <th>Year of offering</th>
                             <th>No. of times offered during the same year</th>
                             <th>Duration of course</th>
                             <th>Number of students enrolled in the year</th>
                             <th>Number of Students completing the course in the year</th>
                             <th>Update Data</th>
                           </thead>
                           <tbody id="#tablebody133Y1">
                             <?php
                                 $query = "SELECT*FROM ssr_m1_3_3 WHERE username='$adminname' AND collageYear = 'Y3' ORDER BY id DESC";
                                 $get = mysqli_query($connection, $query);
                                 if(mysqli_num_rows($get) == 0){
                                     $output  = "<tr><td colspan='8' style='text-align:center;'>No Data Available</td></tr>";
                                     echo $output;    
                                    }else{
                                     while($res132 = $get->fetch_assoc()){
                                         $id132Y1 = $res132['id'];
                                         $coursename = $res132['courseName'];
                                         $coursecode = $res132['courseCode'];
                                         $courseyear = $res132['year'];
                                         $coursenumtime = $res132['numberTimes'];
                                         $courseduration = $res132['duration'];
                                         $coursenumstudent = $res132['numberStudent'];
                                         $coursenumstudentc = $res132['numberStudentComplete'];
                                         $output = "<tr><td>$coursename</td><td>$coursecode</td><td>$courseyear</td><td>$coursenumtime</td><td>$courseduration</td><td>$coursenumstudent</td><td>$coursenumstudentc</td><td><a href='delete133.php?id=$id132Y1' class='btn btn-danger'>Delete</a></td></tr>";
                                         echo $output;    
                                    }
                                 }
                             ?>
                           </tbody>
                        </table><br>
                        <button id="addRow132Y3" style="border: none; padding: 0px; margin: 0px; background-color: #fff; height: 70px; width: 120px;float: right;"><i class="fa fa-plus-circle" style="font-size: 50px; color: orange;" data-toggle="tooltip" data-placement="top" title="Add Rows"></i></button>
                        <br><br>
                        <center>
                            <button class="btn btn-primary" id="save133Y1" name="submit" type="submit" style="text-align: center;margin-left: 30px; margin-top: 10px;">Save Changes</button>
                        </center>
                    <br>
                    </form><br>
                    <form id="f133Y4">
                        <h4 style="text-align: center;">Year 4</h4>
                        <table class="table table-bordered" id="table133Y4">
                           <thead>
                             <th>Name of the value added courses (with 30 or more contact hours)offered</th>
                             <th>Course Code(if any)</th>
                             <th>Year of offering</th>
                             <th>No. of times offered during the same year</th>
                             <th>Duration of course</th>
                             <th>Number of students enrolled in the year</th>
                             <th>Number of Students completing the course in the year</th>
                             <th>Update Data</th>
                           </thead>
                           <tbody>
                             <?php
                                 $query = "SELECT*FROM ssr_m1_3_3 WHERE username='$adminname' AND collageYear = 'Y4' ORDER BY id DESC";
                                 $get = mysqli_query($connection, $query);
                                 if(mysqli_num_rows($get) == 0){
                                     $output  = "<tr><td colspan='8' style='text-align:center;'>No Data Available</td></tr>";
                                     echo $output;    
                                    }else{
                                     while($res132 = $get->fetch_assoc()){
                                         $id132Y1 = $res132['id'];
                                         $coursename = $res132['courseName'];
                                         $coursecode = $res132['courseCode'];
                                         $courseyear = $res132['year'];
                                         $coursenumtime = $res132['numberTimes'];
                                         $courseduration = $res132['duration'];
                                         $coursenumstudent = $res132['numberStudent'];
                                         $coursenumstudentc = $res132['numberStudentComplete'];
                                         $output = "<tr><td>$coursename</td><td>$coursecode</td><td>$courseyear</td><td>$coursenumtime</td><td>$courseduration</td><td>$coursenumstudent</td><td>$coursenumstudentc</td><td><a href='delete133.php?id=$id132Y1' class='btn btn-danger'>Delete</a></td></tr>";
                                         echo $output;    
                                    }
                                 }
                             ?>
                           </tbody>
                        </table><br>
                        <button id="addRow133Y4" style="border: none; padding: 0px; margin: 0px; background-color: #fff; height: 70px; width: 120px;float: right;"><i class="fa fa-plus-circle" style="font-size: 50px; color: orange;" data-toggle="tooltip" data-placement="top" title="Add Rows"></i></button>
                        <br><br>
                        <center>
                            <button class="btn btn-primary" id="save133Y1" name="submit" type="submit" style="text-align: center;margin-left: 30px; margin-top: 10px;">Save Changes</button>
                        </center>
                    <br>
                    </form><br>
                    <form id="f133Y5">
                        <h4 style="text-align: center;">Year 5</h4>
                        <table class="table table-bordered" id="table133Y5">
                           <thead>
                             <th>Name of the value added courses (with 30 or more contact hours)offered</th>
                             <th>Course Code(if any)</th>
                             <th>Year of offering</th>
                             <th>No. of times offered during the same year</th>
                             <th>Duration of course</th>
                             <th>Number of students enrolled in the year</th>
                             <th>Number of Students completing the course in the year</th>
                             <th>Update Data</th>
                           </thead>
                           <tbody id="#tablebody133Y1">
                             <?php
                                 $query = "SELECT*FROM ssr_m1_3_3 WHERE username='$adminname' AND collageYear = 'Y5' ORDER BY id DESC";
                                 $get = mysqli_query($connection, $query);
                                 if(mysqli_num_rows($get) == 0){
                                     $output  = "<tr><td colspan='8' style='text-align:center;'>No Data Available</td></tr>";
                                     echo $output;    
                                    }else{
                                     while($res132 = $get->fetch_assoc()){
                                         $id132Y1 = $res132['id'];
                                         $coursename = $res132['courseName'];
                                         $coursecode = $res132['courseCode'];
                                         $courseyear = $res132['year'];
                                         $coursenumtime = $res132['numberTimes'];
                                         $courseduration = $res132['duration'];
                                         $coursenumstudent = $res132['numberStudent'];
                                         $coursenumstudentc = $res132['numberStudentComplete'];
                                         $output = "<tr><td>$coursename</td><td>$coursecode</td><td>$courseyear</td><td>$coursenumtime</td><td>$courseduration</td><td>$coursenumstudent</td><td>$coursenumstudentc</td><td><a href='delete133.php?id=$id132Y1' class='btn btn-danger'>Delete</a></td></tr>";
                                         echo $output;    
                                    }
                                 }
                             ?>
                           </tbody>
                        </table><br>
                        <button id="addRow133Y5" style="border: none; padding: 0px; margin: 0px; background-color: #fff; height: 70px; width: 120px;float: right;"><i class="fa fa-plus-circle" style="font-size: 50px; color: orange;" data-toggle="tooltip" data-placement="top" title="Add Rows"></i></button>
                        <br><br>
                        <center>
                            <button class="btn btn-primary" id="save133Y1" name="submit" type="submit" style="text-align: center;margin-left: 30px; margin-top: 10px;">Save Changes</button>
                        </center><br>
                        <h6 style="text-align: center">* To check with SOP if the same student can be counted more than once</h6>
                    <br>
                    </form>
                    <script>
                      $(document).ready(function(){
                            var count133Y1 = 0;
                            var output = "";
    
                            // jQuery button click event to add a row
                            $('#addRow133Y1').on('click', function () {
                                count133Y1++;
                                var output = "<tr id='row"+count133Y1+"'><td ><input type='text' class='form-control courseName' required/></td>";
                                output+= "<td><input type='text' class='form-control courseCode' /></td>";
                                output+= "<td><input type='number' class='form-control year'  required/></td>";
                                output+= "<td><input type='number' class='form-control numberTimes' required/></td>";
                                output+= "<td><input type='number' class='form-control duration' required/></td>";
                                output+= "<td><input type='number' class='form-control numberStudent' required/></td>";
                                output+= "<td><input type='number' class='form-control numberStudentComplete'  required/></td>";
                                output+= "<td><input type='button' class='btn btn-danger deleteY1' value='Delete'data-toggle='tooltip' data-row='row"+count133Y1+"' data-placement='bottom' title='Once Deleted cannot be retreived' /></td>";
                                output+= "</tr>";
                                tableBody = $("#table133Y1 tbody");
                                tableBody.append(output);
                                
                            });

                            $("#table133Y1 tbody").on('click', '.deleteY1', function(){
                                    if(confirm("Are you sure you want to delete this data?")){
                                        var delete_row = $(this).data("row");
                                        $('#'+delete_row).remove();
                                    }else{
                                        return false;
                                    }
                                
                            });

                            // BREAK
                            var count133Y2 = 0;
                            var output2 = "";
    
                            // jQuery button click event to add a row
                            $('#addRow133Y2').on('click', function () {
                                count133Y2++;
                                var output2 = "<tr id='row"+count133Y2+"'><td ><input type='text' class='form-control courseName' required/></td>";
                                output2+= "<td><input type='text' class='form-control courseCode' /></td>";
                                output2+= "<td><input type='number' class='form-control year'  required/></td>";
                                output2+= "<td><input type='number' class='form-control numberTimes' required/></td>";
                                output2+= "<td><input type='number' class='form-control duration' required/></td>";
                                output2+= "<td><input type='number' class='form-control numberStudent' required/></td>";
                                output2+= "<td><input type='number' class='form-control numberStudentComplete'  required/></td>";
                                output2+= "<td><input type='button' class='btn btn-danger deleteY1' value='Delete'data-toggle='tooltip' data-row='row"+count133Y2+"' data-placement='bottom' title='Once Deleted cannot be retreived' /></td>";
                                output2+= "</tr>";
                                tableBody = $("#table133Y2 tbody");
                                tableBody.append(output2);
                                
                            });

                            $("#table133Y2 tbody").on('click', '.deleteY1', function(){
                                    if(confirm("Are you sure you want to delete this data?")){
                                        var delete_row = $(this).data("row");
                                        $('#'+delete_row).remove();
                                    }else{
                                        return false;
                                    }
                                
                            });

                            
                            // BREAK
                            var count133Y3 = 0;
                            var output3 = "";
    
                            // jQuery button click event to add a row
                            $('#addRow133Y3').on('click', function () {
                                count133Y3++;
                                var output3 = "<tr id='row"+count133Y3+"'><td ><input type='text' class='form-control courseName' required/></td>";
                                output3+= "<td><input type='text' class='form-control courseCode' /></td>";
                                output3+= "<td><input type='number' class='form-control year'  required/></td>";
                                output3+= "<td><input type='number' class='form-control numberTimes' required/></td>";
                                output3+= "<td><input type='number' class='form-control duration' required/></td>";
                                output3+= "<td><input type='number' class='form-control numberStudent' required/></td>";
                                output3+= "<td><input type='number' class='form-control numberStudentComplete'  required/></td>";
                                output3+= "<td><input type='button' class='btn btn-danger deleteY1' value='Delete'data-toggle='tooltip' data-row='row"+count133Y3+"' data-placement='bottom' title='Once Deleted cannot be retreived' /></td>";
                                output3+= "</tr>";
                                tableBody = $("#table133Y3 tbody");
                                tableBody.append(output3);
                                
                            });

                            $("#table133Y3 tbody").on('click', '.deleteY1', function(){
                                    if(confirm("Are you sure you want to delete this data?")){
                                        var delete_row = $(this).data("row");
                                        $('#'+delete_row).remove();
                                    }else{
                                        return false;
                                    }
                                
                            });

                            
                            // BREAK
                            var count133Y4 = 0;
                            var output4 = "";
    
                            // jQuery button click event to add a row
                            $('#addRow133Y4').on('click', function () {
                                count133Y4++;
                                var output4 = "<tr id='row"+count133Y4+"'><td ><input type='text' class='form-control courseName' required/></td>";
                                output4+= "<td><input type='text' class='form-control courseCode' /></td>";
                                output4+= "<td><input type='number' class='form-control year'  required/></td>";
                                output4+= "<td><input type='number' class='form-control numberTimes' required/></td>";
                                output4+= "<td><input type='number' class='form-control duration' required/></td>";
                                output4+= "<td><input type='number' class='form-control numberStudent' required/></td>";
                                output4+= "<td><input type='number' class='form-control numberStudentComplete'  required/></td>";
                                output4+= "<td><input type='button' class='btn btn-danger deleteY1' value='Delete'data-toggle='tooltip' data-row='row"+count133Y4+"' data-placement='bottom' title='Once Deleted cannot be retreived' /></td>";
                                output4+= "</tr>";
                                tableBody = $("#table133Y4 tbody");
                                tableBody.append(output4);
                                
                            });

                            $("#table133Y4 tbody").on('click', '.deleteY1', function(){
                                    if(confirm("Are you sure you want to delete this data?")){
                                        var delete_row = $(this).data("row");
                                        $('#'+delete_row).remove();
                                    }else{
                                        return false;
                                    }
                                
                            });

                             // BREAK
                             var count133Y5 = 0;
                            var output5 = "";
    
                            // jQuery button click event to add a row
                            $('#addRow133Y5').on('click', function () {
                                count133Y5++;
                                var output5 = "<tr id='row"+count133Y5+"'><td ><input type='text' class='form-control courseName' required/></td>";
                                output5+= "<td><input type='text' class='form-control courseCode' /></td>";
                                output5+= "<td><input type='number' class='form-control year'  required/></td>";
                                output5+= "<td><input type='number' class='form-control numberTimes' required/></td>";
                                output5+= "<td><input type='number' class='form-control duration' required/></td>";
                                output5+= "<td><input type='number' class='form-control numberStudent' required/></td>";
                                output5+= "<td><input type='number' class='form-control numberStudentComplete'  required/></td>";
                                output5+= "<td><input type='button' class='btn btn-danger deleteY1' value='Delete'data-toggle='tooltip' data-row='row"+count133Y5+"' data-placement='bottom' title='Once Deleted cannot be retreived' /></td>";
                                output5+= "</tr>";
                                tableBody = $("#table133Y5 tbody");
                                tableBody.append(output5);
                                
                            });

                            $("#table133Y5 tbody").on('click', '.deleteY1', function(){
                                    if(confirm("Are you sure you want to delete this data?")){
                                        var delete_row = $(this).data("row");
                                        $('#'+delete_row).remove();
                                    }else{
                                        return false;
                                    }
                                
                            });

                            $("#f133Y1").on("submit", function(event){

                                
                                var courseName = [];
                                var courseCode = [];
                                var year = [];
                                var numberTimes = [];
                                var duration = [];
                                var numberStudent = [];
                                var numberStudentComplete = [];

                                $('.courseName').each(function(){
                                    courseName.push($(this).val());
                                });
                                $('.courseCode').each(function(){
                                    courseCode.push($(this).val());
                                });
                                $('.year').each(function(){
                                    year.push($(this).val());
                                });
                                $('.numberTimes').each(function(){
                                    numberTimes.push($(this).val());
                                });
                                $('.duration').each(function(){
                                    duration.push($(this).val());
                                });
                                $('.numberStudent').each(function(){
                                    numberStudent.push($(this).val());
                                });
                                $('.numberStudentComplete').each(function(){
                                    numberStudentComplete.push($(this).val());
                                });
                                $.ajax({
                                    url: "save133.php",
                                    method:"POST",
                                    data: {courseName: courseName, courseCode: courseCode, year: year, numberTimes: numberTimes, duration: duration, numberStudent: numberStudent, numberStudentComplete: numberStudentComplete},
                                    async: false, //solution
                                    cache: false,
                                    success: function(data){
                                        $("#msg133").html(data);
                                    },
                                    error: function(){
                                        $("#msg133").html("<h5 style='color: red; text-align; center'>Ajax Call Error!</h5>");
                                        
                                    }
                                });
                            });

                            // Form 132Y2
                        $("#f133Y2").on("submit", function(event){   
                            var courseName = [];
                            var courseCode = [];
                            var year = [];
                            var numberTimes = [];
                            var duration = [];
                            var numberStudent = [];
                            var numberStudentComplete = [];

                            $('.courseName').each(function(){
                                courseName.push($(this).val());
                            });
                            $('.courseCode').each(function(){
                                courseCode.push($(this).val());
                            });
                            $('.year').each(function(){
                                year.push($(this).val());
                            });
                            $('.numberTimes').each(function(){
                                numberTimes.push($(this).val());
                            });
                            $('.duration').each(function(){
                                duration.push($(this).val());
                            });
                            $('.numberStudent').each(function(){
                                numberStudent.push($(this).val());
                            });
                            $('.numberStudentComplete').each(function(){
                                numberStudentComplete.push($(this).val());
                            });
                            $.ajax({
                                url: "save133_2.php",
                                method:"POST",
                                data: {courseName: courseName, courseCode: courseCode, year: year, numberTimes: numberTimes, duration: duration, numberStudent: numberStudent, numberStudentComplete: numberStudentComplete},
                                async: false, //solution
                                cache: false,
                                success: function(data){
                                    $("#msg133").html(data);
                                    
                                },
                                error: function(){
                                    $("#msg133").html("<h5 style='color: red; text-align; center'>Ajax Call Error!</h5>");
                                    
                                }
                            });
                        });

                         // Form 132Y3
                         $("#f133Y3").on("submit", function(event){   
                            var courseName = [];
                            var courseCode = [];
                            var year = [];
                            var numberTimes = [];
                            var duration = [];
                            var numberStudent = [];
                            var numberStudentComplete = [];

                            $('.courseName').each(function(){
                                courseName.push($(this).val());
                            });
                            $('.courseCode').each(function(){
                                courseCode.push($(this).val());
                            });
                            $('.year').each(function(){
                                year.push($(this).val());
                            });
                            $('.numberTimes').each(function(){
                                numberTimes.push($(this).val());
                            });
                            $('.duration').each(function(){
                                duration.push($(this).val());
                            });
                            $('.numberStudent').each(function(){
                                numberStudent.push($(this).val());
                            });
                            $('.numberStudentComplete').each(function(){
                                numberStudentComplete.push($(this).val());
                            });
                            $.ajax({
                                url: "save133_3.php",
                                method:"POST",
                                data: {courseName: courseName, courseCode: courseCode, year: year, numberTimes: numberTimes, duration: duration, numberStudent: numberStudent, numberStudentComplete: numberStudentComplete},
                                async: false, //solution
                                cache: false,
                                success: function(data){
                                    $("#msg133").html(data);
                                    
                                },
                                error: function(){
                                    $("#msg133").html("<h5 style='color: red; text-align; center'>Ajax Call Error!</h5>");
                                    
                                }
                            });
                        });
                          
                        // Form 132Y4
                         $("#f133Y4").on("submit", function(event){   
                            var courseName = [];
                            var courseCode = [];
                            var year = [];
                            var numberTimes = [];
                            var duration = [];
                            var numberStudent = [];
                            var numberStudentComplete = [];

                            $('.courseName').each(function(){
                                courseName.push($(this).val());
                            });
                            $('.courseCode').each(function(){
                                courseCode.push($(this).val());
                            });
                            $('.year').each(function(){
                                year.push($(this).val());
                            });
                            $('.numberTimes').each(function(){
                                numberTimes.push($(this).val());
                            });
                            $('.duration').each(function(){
                                duration.push($(this).val());
                            });
                            $('.numberStudent').each(function(){
                                numberStudent.push($(this).val());
                            });
                            $('.numberStudentComplete').each(function(){
                                numberStudentComplete.push($(this).val());
                            });
                            $.ajax({
                                url: "save133_4.php",
                                method:"POST",
                                data: {courseName: courseName, courseCode: courseCode, year: year, numberTimes: numberTimes, duration: duration, numberStudent: numberStudent, numberStudentComplete: numberStudentComplete},
                                async: false, //solution
                                cache: false,
                                success: function(data){
                                    $("#msg132").html(data);
                                    
                                },
                                error: function(){
                                    $("#msg132").html("<h5 style='color: red; text-align; center'>Ajax Call Error!</h5>");
                                    
                                }
                            });
                        });
                        
                       // Form 133Y5
                        $("#f133Y5").on("submit", function(event){   
                            var courseName = [];
                            var courseCode = [];
                            var year = [];
                            var numberTimes = [];
                            var duration = [];
                            var numberStudent = [];
                            var numberStudentComplete = [];

                            $('.courseName').each(function(){
                                courseName.push($(this).val());
                            });
                            $('.courseCode').each(function(){
                                courseCode.push($(this).val());
                            });
                            $('.year').each(function(){
                                year.push($(this).val());
                            });
                            $('.numberTimes').each(function(){
                                numberTimes.push($(this).val());
                            });
                            $('.duration').each(function(){
                                duration.push($(this).val());
                            });
                            $('.numberStudent').each(function(){
                                numberStudent.push($(this).val());
                            });
                            $('.numberStudentComplete').each(function(){
                                numberStudentComplete.push($(this).val());
                            });
                            $.ajax({
                                url: "save133_5.php",
                                method:"POST",
                                data: {courseName: courseName, courseCode: courseCode, year: year, numberTimes: numberTimes, duration: duration, numberStudent: numberStudent, numberStudentComplete: numberStudentComplete},
                                async: false, //solution
                                cache: false,
                                success: function(data){
                                    $("#msg133").html(data);
                                    
                                },
                                error: function(){
                                    $("#msg133").html("<h5 style='color: red; text-align; center'>Ajax Call Error!</h5>");
                                    
                                }
                            });
                        });

                      });
                    </script>
            </div>

            <!-- Metric 1.3.4 -->
            <div id="q134" class="questionContainer">
                <p class="msgContainer" id="msg134"></p>
                <img
                    <?php 
                       $queryCheck134 = "SELECT*FROM ssr_m1_3_4 WHERE username = '$adminname'";
                       $query134 = mysqli_query($connection, $queryCheck134);
                       if(mysqli_num_rows($query134)>0){
                           $n = mysqli_num_rows($query134);
                           echo "src = '../../assets/images/filled.png' data-toggle='tooltip' data-placement='bottom' title='".$n." Filled'";
                       }else if(mysqli_num_rows($query134) == 0){
                        echo "src = '../../assets/images/unfilled.png' data-toggle='tooltip' data-placement='bottom' title='Not Filled'";
                       }
                    ?>
                    class="fillImage"
                >
                <p class="qName">Q<sub>N</sub>M <br>1.3.4</p>
                <p class="question">
                Percentage of students undertaking field projects / research 
                projects / internships (Data for the latest completed academic year).
                </p>
                <i class="fa fa-angle-down iconRight"></i>
                <p class="questionPart">
                    <b>Data Requirement</b>
                    <ul>
                    <li>Names of the Programme</li>
                    <li>No. of students undertaking field projects /research projects/internships. </li>
                    <li>Total no. of students completing the course in the year</li>
                    </ul><br>
                </p>
                </div>
                   
                    <div class="answerContainer" id="a134">
                    <form id="f134">
                        <table class="table table-bordered" id="table134">
                           <thead>
                             <th>Programme Name</th>
                             <th>Programme Code</th>
                             <th>List of students undertaking field projects /research projects /internships</th>
                             <th>Link to the relevant document</th>
                             <th>Update Data</th>
                           </thead>
                           <tbody>
                             <?php
                                 $query = "SELECT*FROM ssr_m1_3_4 WHERE username='$adminname' ORDER BY id DESC";
                                 $get = mysqli_query($connection, $query);
                                 if(mysqli_num_rows($get) == 0){
                                     $output  = "<tr><td colspan='5' style='text-align:center;'>No Data Available</td></tr>";
                                     echo $output;    
                                    }else{
                                     while($res134 = $get->fetch_assoc()){
                                         $id134 = $res134['id'];
                                         $programname = $res134['programName'];
                                         $programcode = $res134['programCode'];
                                         $coursenumstudent = $res134['numberStudent'];
                                         $linkdoc = $res134['linkdoc'];
                                         $output = "<tr><td>$programname</td><td>$programcode</td><td>$coursenumstudent</td><td>$linkdoc</td><td><a href='delete134.php?id=$id134' class='btn btn-danger'>Delete</a></td></tr>";
                                         echo $output;    
                                    }
                                 }
                             ?>
                           </tbody>
                        </table><br>
                        <button id="addRow134" style="border: none; padding: 0px; margin: 0px; background-color: #fff; height: 70px; width: 120px;float: right;"><i class="fa fa-plus-circle" style="font-size: 50px; color: orange;" data-toggle="tooltip" data-placement="top" title="Add Rows"></i></button>
                        <br><br>
                        <center>
                            <button class="btn btn-primary" id="save134" name="submit" type="submit" style="text-align: center;margin-left: 30px; margin-top: 10px;">Save Changes</button>
                        </center>
                    <br>
                    </form><br>
                    <script>
                      $(document).ready(function(){
                            var count134 = 0;
                            var output = "";
    
                            // jQuery button click event to add a row
                            $('#addRow134').on('click', function () {
                                count134++;
                                var output = "<tr id='row"+count134+"'><td ><input type='text' class='form-control programName' required/></td>";
                                output+= "<td><input type='text' class='form-control programCode' /></td>";
                                output+= "<td><input type='text' class='form-control numberStudent' required/></td>";
                                output+= "<td><input type='text' class='form-control linkdoc'  required/></td>";
                                output+= "<td><input type='button' class='btn btn-danger delete134' value='Delete'data-toggle='tooltip' data-row='row"+count134+"' data-placement='bottom' title='Once Deleted cannot be retreived' /></td>";
                                output+= "</tr>";
                                tableBody = $("#table134 tbody");
                                tableBody.append(output);
                                
                            });

                            $("#table134 tbody").on('click', '.delete134', function(){
                                    if(confirm("Are you sure you want to delete this data?")){
                                        var delete_row = $(this).data("row");
                                        $('#'+delete_row).remove();
                                    }else{
                                        return false;
                                    }
                                
                            });

                            $("#f134").on("submit", function(event){

                                
                                var programName = [];
                                var programCode = [];
                                var numberStudent = [];
                                var linkdoc = [];

                                $('.programName').each(function(){
                                    programName.push($(this).val());
                                });
                                $('.programCode').each(function(){
                                    programCode.push($(this).val());
                                });
                               
                                $('.numberStudent').each(function(){
                                    numberStudent.push($(this).val());
                                });
                                $('.linkdoc').each(function(){
                                    linkdoc.push($(this).val());
                                });
                                $.ajax({
                                    url: "save134.php",
                                    method:"POST",
                                    data: {programName: programName, programCode: programCode,  numberStudent: numberStudent, linkdoc: linkdoc},
                                    success: function(){
                                        $("#msg134").html("<h5 style='color: green; text-align; center'>Saved Succesfully!</h5>");
                                    },
                                    error: function(){
                                        $("#msg134").html("<h5 style='color: red; text-align; center'>Ajax Call Error!</h5>");
                                        
                                    }
                                });
                            });
                        });
                    </script>
            </div><br>
            <div class="criteriaTitle2">
            <h4>1.4 Feedback System</h4>
            </div><br>
        <!-- Metric 1.4.1 -->
         <div id="q141" class="questionContainer">
                <p class="msgContainer"><?php echo $msg141;?></p>
                <img
                    <?php 
                       $queryCheck141 = "SELECT*FROM ssr_m1_4_1 WHERE username = '$adminname'";
                       $query141 = mysqli_query($connection, $queryCheck141);
                       if(mysqli_num_rows($query141)>0){
                           $n = mysqli_num_rows($query141);
                           echo "src = '../../assets/images/filled.png' data-toggle='tooltip' data-placement='bottom' title='".$n." Filled'";
                       }else if(mysqli_num_rows($query141) == 0){
                        echo "src = '../../assets/images/unfilled.png' data-toggle='tooltip' data-placement='bottom' title='Not Filled'";
                       }
                    ?>
                    class="fillImage"
                >
                <p class="qName">Q<sub>N</sub>M <br>1.4.1</p>
                <p class="question">
                Structured feedback for design and review of syllabus – semester 
                wise / year wise is received from. <br>
                
                </p>
                <i class="fa fa-angle-down iconRight"></i>
                <p class="questionPart">
                    <b>1) Students, 2) Teachers, 3) Employers, 4) Alumni</b>
                    <br>
                </p>
                </div>
                <style>
                  .checkBoxAns{
                    height: 20px;
                    width: 20px;
                    border-radius: 50%;
                    float: left;
                    margin-top: 5px;
                    margin-left: 10px;
                    margin-right: 30px;
                  }
                </style>
                    <div class="answerContainer" id="a141">
                     <?php
                       $get = mysqli_query($connection, "SELECT*FROM ssr_m1_4_1 WHERE username = '$adminname'");
                       $getRes = mysqli_fetch_assoc($get);
                       $val = $getRes['answer'];
                     ?>
                    <form method="POST">
                        <label for="selectAns" style="text-align: center;">Select Any One option From Below:</label><br>
                        <input  name= "selectAns" type="radio"  value= "1" class="form-control checkBoxAns" <?php if($val == 1){echo "checked";}?>> <h4 style="float: left;">A. All 4 of the above</h4><br><br>
                        <input  name= "selectAns" type="radio"  value= "2" class="form-control checkBoxAns" <?php if($val == 2){echo "checked";}?>> <h4 style="float: left;">B. Any 3 of the above</h4><br><br>
                        <input  name= "selectAns" type="radio"  value= "3" class="form-control checkBoxAns" <?php if($val == 3){echo "checked";}?>> <h4 style="float: left;">C. Any 2 of the above</h4><br><br>
                        <input  name= "selectAns" type="radio"  value= "4" class="form-control checkBoxAns" <?php if($val == 4){echo "checked";}?>> <h4 style="float: left;">D. All 1 of the above</h4><br><br>
                        <input  name= "selectAns" type="radio"  value= "5" class="form-control checkBoxAns" <?php if($val == 5){echo "checked";}?>> <h4 style="float: left;">E. None of the above</h4>
                        <center>
                            <button class="btn btn-primary"  name="submit141" type="submit" style="text-align: center;margin-left: 30px; margin-top: 10px;">Save </button>
                        </center>
                    <br>
                    </form>
            </div>

        <!-- Metric 1.4.2 -->
         <div id="q142" class="questionContainer">
                <p class="msgContainer"><?php echo $msg142;?></p>
                <img
                    <?php 
                       $queryCheck142 = "SELECT*FROM ssr_m1_4_2 WHERE username = '$adminname'";
                       $query142 = mysqli_query($connection, $queryCheck142);
                       if(mysqli_num_rows($query142)>0){
                           $n = mysqli_num_rows($query142);
                           echo "src = '../../assets/images/filled.png' data-toggle='tooltip' data-placement='bottom' title='".$n." Filled'";
                       }else if(mysqli_num_rows($query142) == 0){
                        echo "src = '../../assets/images/unfilled.png' data-toggle='tooltip' data-placement='bottom' title='Not Filled'";
                       }
                    ?>
                    class="fillImage"
                >
                <p class="qName">Q<sub>N</sub>M <br>1.4.2</p>
                <p class="question"><b>
                Feedback processes of the institution may be classified as
                follows:<b><br>
                </p>
                <i class="fa fa-angle-down iconRight"></i>
                </div>
                <style>
                  .checkBoxAns{
                    height: 20px;
                    width: 20px;
                    border-radius: 50%;
                    float: left;
                    margin-top: 0px;
                    margin-left: 10px;
                    margin-right: 30px;
                  }
                </style>
                    <div class="answerContainer" id="a142">
                    <br>
                     <?php
                       $get = mysqli_query($connection, "SELECT*FROM ssr_m1_4_2 WHERE username = '$adminname'");
                       $getRes = mysqli_fetch_assoc($get);
                       $val = $getRes['answer'];
                     ?>
                    <form method="POST">
                        <label for="selectAns" style="text-align: center;">Select Any One option From Below:</label><br>
                        <br>
                        <input  name= "selectAns" type="radio"  value= "1" class="form-control checkBoxAns" <?php if($val == 1){echo "checked";}?>> <h6 style="float: left;">A. Feedback collected, analysed and action taken and feedback available on website</h6><br><br>
                        <input  name= "selectAns" type="radio"  value= "2" class="form-control checkBoxAns" <?php if($val == 2){echo "checked";}?>> <h6 style="float: left;">B. Feedback collected, analysed and action has been taken</h6><br><br>
                        <input  name= "selectAns" type="radio"  value= "3" class="form-control checkBoxAns" <?php if($val == 3){echo "checked";}?>> <h6 style="float: left;">C. Feedback collected and analysed</h6><br><br>
                        <input  name= "selectAns" type="radio"  value= "4" class="form-control checkBoxAns" <?php if($val == 4){echo "checked";}?>> <h6 style="float: left;">D. Feedback collected</h6><br><br>
                        <input  name= "selectAns" type="radio"  value= "5" class="form-control checkBoxAns" <?php if($val == 5){echo "checked";}?>> <h6 style="float: left;">E.  Feedback not collected</h6>
                        <center>
                            <button class="btn btn-primary"  name="submit142" type="submit" style="text-align: center;margin-left: 30px; margin-top: 10px;">Save </button>
                        </center>
                    <br>
                    </form>
            </div><br>
    </div>
    <footer>
			<p>&copy; <script>document.write(new Date().getFullYear())</script> - <script>document.write(new Date().getFullYear() + 1)</script> Devi Ahilya Vishwavidyalaya Indore</p>
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
    <script src="../essentialscript.js"></script>
</body>
<?php $connection->close();?>
</html>

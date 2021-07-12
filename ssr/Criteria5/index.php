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
        $first = '';
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

        $answer515 = "";
        $link515 = "";
        $answer516 = "";
        $link516 = "";
        $answer517 = "";
        $link517 = "";

        $y519_y1 = "";
        $y519_y2 = "";
        $y519_y3 = "";
        $y519_y4 = "";
        $y519_y5 = "";

        $numg_y1 = "";
        $numg_y2 = "";
        $numg_y3 = "";
        $numg_y4 = "";
        $numg_y5 = "";

        $numr_y1 = "";
        $numr_y2 = "";
        $numr_y3 = "";
        $numr_y4 = "";
        $numr_y5 = "";

        if(isset($_POST['submit514'])){
            $val = $_POST['select'];
            $query = mysqli_query($connection, "SELECT*FROM ssr_m5_1_4 WHERE username='$adminname'");
            if(mysqli_num_rows($query)>0){
                $update = mysqli_query($connection, "UPDATE ssr_m5_1_4 SET Select_option = '$val' WHERE username = '$adminname'");
                if($update){
                    echo "<script>alert('Updated Succesfully!')</script>";
                }else{
                    echo "<script>alert('Error Updating Query!')</script>";
                }
            }else{
                $insert = mysqli_query($connection, "INSERT INTO ssr_m5_1_4 (username, Select_option) VALUES('$adminname', '$val')");
                if($insert){
                    echo "<script>alert('Data Added Succesfully!')</script>";
                }else{
                    echo "<script>alert('Error Inserting Query!')</script>";
                }
            }
        }else if(isset($_POST['submit515'])){
            $answer = $_POST['answer'];
            $link = $_POST['link'];
            if(does_url_exists($link)){
                $query = mysqli_query($connection, "SELECT*FROM ssr_m5_1_5 WHERE username='$adminname'");
                if(mysqli_num_rows($query)>0){
                    $update = mysqli_query($connection, "UPDATE ssr_m5_1_5 SET Description = '$val', Link = '$link' WHERE username = '$adminname'");
                    if($update){
                        echo "<script>alert('Updated Succesfully!')</script>";
                    }else{
                        echo "<script>alert('Error Updating Query!')</script>";
                    }
                }else{
                    $insert = mysqli_query($connection, "INSERT INTO ssr_m5_1_5 (username, Description, Link) VALUES('$adminname', '$answer', '$link')");
                    if($insert){
                        echo "<script>alert('Data Added Succesfully!')</script>";
                    }else{
                        echo "<script>alert('Error Inserting Query!')</script>";
                    }
                }
    
            }else{
                echo "<script>alert('Please Provide Relevant Link for Document')</script>";
            }
        }else if(isset($_POST['submit516'])){
            $answer = $_POST['answer'];
            $link = $_POST['link'];
            if(does_url_exists($link)){
                $query = mysqli_query($connection, "SELECT*FROM ssr_m5_1_6 WHERE username='$adminname'");
                if(mysqli_num_rows($query)>0){
                    $update = mysqli_query($connection, "UPDATE ssr_m5_1_6 SET Description = '$val', Link = '$link' WHERE username = '$adminname'");
                    if($update){
                        echo "<script>alert('Updated Succesfully!')</script>";
                    }else{
                        echo "<script>alert('Error Updating Query!')</script>";
                    }
                }else{
                    $insert = mysqli_query($connection, "INSERT INTO ssr_m5_1_6 (username, Description, Link) VALUES('$adminname', '$answer', '$link')");
                    if($insert){
                        echo "<script>alert('Data Added Succesfully!')</script>";
                    }else{
                        echo "<script>alert('Error Inserting Query!')</script>";
                    }
                }
    
            }else{
                echo "<script>alert('Please Provide Relevant Link for Document')</script>";
            }
        }else if(isset($_POST['submit517'])){
            $answer = $_POST['answer'];
            $link = $_POST['link'];
            if(does_url_exists($link)){
                $query = mysqli_query($connection, "SELECT*FROM ssr_m5_1_7 WHERE username='$adminname'");
                if(mysqli_num_rows($query)>0){
                    $update = mysqli_query($connection, "UPDATE ssr_m5_1_7 SET Description = '$val', Link = '$link' WHERE username = '$adminname'");
                    if($update){
                        echo "<script>alert('Updated Succesfully!')</script>";
                    }else{
                        echo "<script>alert('Error Updating Query!')</script>";
                    }
                }else{
                    $insert = mysqli_query($connection, "INSERT INTO ssr_m5_1_7 (username, Description, Link) VALUES('$adminname', '$answer', '$link')");
                    if($insert){
                        echo "<script>alert('Data Added Succesfully!')</script>";
                    }else{
                        echo "<script>alert('Error Inserting Query!')</script>";
                    }
                }
    
            }else{
                echo "<script>alert('Please Provide Relevant Link for Document')</script>";
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
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <!-- Bootstarp 4 Integration -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="../ssrstyle.css">
    <link rel="icon" href="../../assets/images/davvlogo.png">
    <title>Criteria V</title>
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
       <h3>Criteria V - Student Support and Progression</h3>
    </div>
    <div class="criteriaTitle2">
       <h4>5.1 Promotion of Research and Facilities</h4>
    </div>
    <!-- Metric 5.1.1 -->
    <form method="post" id="f511">
         <div id="q511" class="questionContainer"> 
            <p class="msgContainer" id="msg511"><?php ?></p>
                <img
                <?php 
                     $get = mysqli_query($connection, "SELECT*FROM ssr_m5_1_1 WHERE username = '$adminname'");
                    $n = mysqli_num_rows($get);
                    if($n > 0){
                        echo "src='$filled' data-toggle='tooltip' data-placement='bottom' title='$n Filled'";
                    }else if($n == 0){
                        echo "src='$unfilled' data-toggle='tooltip' data-placement='bottom' title='Metric Not Filled'";
                    }else{
                        echo "src='$notapplicableimg' data-toggle='tooltip' data-placement='bottom' title='Metric Not Applicable'";
                    }
                    ?>
                    class="fillImage"
                >
            <p class="qName">Q<sub>N</sub>M <br>5.1.1</p>
            <p class="question">
            <b>Average percentage of students benefited by scholarships and freeships provided by the institution, 
                Government and nongovernment agencies (NGOs) (other than the students receiving scholarships 
                under the government schemes for reserved categories) during the last five years. 
            </b>
            </p>
            <i class="fa fa-angle-down iconRight"></i><br><br><br>
            <p class="questionPart">
                <ul>
                    <li>Name of the scheme</li>
                    <li>Number of students benefiting</li>
                </ul>
            </p>
        </div>
        <div class="answerContainer answerWithTable" id="a511">
                <table class="table table-bordered checkApplicable" id="table511">
                    <thead>
                        <tr>
                            <th>Year</th>
                            <th>Name of the Scheme</th>
                            <th colspan="2">Number of students benefited by government scheme and amount</th>
                            <th colspan="2">Number of students benefited by the institution's schemes and amount</th>
                            <th colspan="3">Number of students benefited by the nongovernment agencies (NGOs) and amount</th>
                            <th>Link to relevant document</th>
                            <th>Remove</th>
                        </tr>
                        <tr>
                            <th colspan="2"></th>
                            <th>Number of Students</th>
                            <th>Amount</th>
                            <th>Number of Students</th>
                            <th>Amount</th>
                            <th>Number of Students</th>
                            <th>Amount</th>
                            <th>Name of the NGO/ Agency</th>
                            <th></th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                            $fetchQuery = mysqli_query($connection, "SELECT*FROM ssr_m5_1_1 WHERE username = '$adminname'");
                            if($fetchQuery){
                                while($data = $fetchQuery->fetch_assoc()){
                                    $id= $data['id'];
                                    $q1 = $data['Year'];
                                    $q2 = $data['Name_of_the_Scheme'];
                                    $q3 = $data['Students_benefited_by_government_scheme_Num'];
                                    $q4 = $data['Students_benefited_by_government_scheme_Amount'];
                                    $q5 = $data['Students_benefited_by_the_institution_scheme_Num'];
                                    $q6 = $data['Students_benefited_by_the_institution_scheme_Amount'];
                                    $q7 = $data['Students_benefited_by_the_nongovernment_agencies_or_ngo_Num'];
                                    $q8 = $data['Students_benefited_by_the_nongovernment_agencies_or_ngo_Amount'];
                                    $q9 = $data['Name_of_the_NGO_Agency'];
                                    $q10 = $data['Link'];
                                    echo "<tr><td><input type='text' class='form-control' value='$q1' disabled /></td><td><input type='text' class='form-control' value='$q2' disabled /></td><td><input type='text' class='form-control' value='$q3' disabled /></td><td><input type='text' class='form-control' value='$q4' disabled /></td><td><input type='text' class='form-control' value='$q5' disabled /></td><td><input type='text' class='form-control' value='$q6' disabled /></td><td><input type='text' class='form-control' value='$q7' disabled /></td><td><input type='text' class='form-control' value='$q8' disabled /></td><td><input type='text' class='form-control' value='$q9' disabled /></td><td><input type='text' class='form-control' value='$q10' disabled /></td><td><a href='delete.php?id=$id&tab=ssr_m5_1_1' style='cursor: pointer;' class='btn btn-danger'>Remove</a></td></tr>";
                                }
                            }else{
                                echo "<tr><td colspan='11' style='text-align: center; color: red;'>Error Fetching Query!</td></tr>";
                            }
                        ?>
                    </tbody>
                </table>
                <table class="table table-borderless">
                    <tr>
                        <td><button type="button" class="AddRowBelow" id="addRow511"><i class="fa fa-plus-circle"></i></button><br></td>
                    </tr>
                </table>
                        <input type="submit" name="submit511" class="btn btn-primary" value="Save Changes" 
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
            <script>
                         var count511 = 0;
                        var output = "";
                        $("#addRow511").on("click", function(){
                            count511++;
                            output = "<tr id='row"+count511+"'>";
                            output += "<td><input  type='number' class='form-control q1' required/></td>";
                            output += "<td><input  type='text' class='form-control q2' required/></td>";
                            output += "<td><input  type='number' class='form-control q3' required/></td>";
                            output += "<td><input  type='number' class='form-control q4' required/></td>";
                            output += "<td><input  type='number' class='form-control q5' required/></td>";
                            output += "<td><input  type='number' class='form-control q6' required/></td>";
                            output += "<td><input  type='number' class='form-control q7' required/></td>";
                            output += "<td><input  type='number' class='form-control q8' required/></td>";
                            output += "<td><input  type='text' class='form-control q9' required/></td>";
                            output += "<td><input  type='text' class='form-control q10' required/></td>";
                            output += "<td><button type='button' class='delete511 btn btn-danger' data-row='row"+count511+"'>Remove</button></td>";
                            output += "</tr>";
                            tableBody = $("#table511 tbody");
                            tableBody.append(output);
                            $("#msg511").html("<h5 style='color: green; text-align; center'>Row Added!</h5>");
                        });

                        $("#table511 tbody").on('click', '.delete511', function(){
                            if(confirm("Are you sure you want to delete this data?")){
                                var delete_row = $(this).data('row');
                                $("#"+delete_row).remove();
                                $("#msg511").html("<h5 style='color: red; text-align; center'>Row Deleted!</h5>");
                                console.log("Deleted");
                            }else{
                                return false;
                            }
                        
                        });

                        $("#f511").on("submit", function(e){

                            e.preventDefault();
                            e.stopPropagation();
                            
                            var q1 = [];
                            var q2 = [];
                            var q3 = [];
                            var q4 = [];
                            var q5 = [];
                            var q6 = [];
                            var q7 = [];
                            var q8 = [];
                            var q9 = [];
                            var q10 = [];
                            
                            $('.q1').each(function(){
                                q1.push($(this).val());
                            });
                            $('.q2').each(function(){
                                q2.push($(this).val());
                            });
                            $('.q3').each(function(){
                                q3.push($(this).val());
                            });
                            $('.q4').each(function(){
                                q4.push($(this).val());
                            });
                            $('.q5').each(function(){
                                q5.push($(this).val());
                            });
                            $('.q6').each(function(){
                                q6.push($(this).val());
                            });
                            $('.q7').each(function(){
                                q7.push($(this).val());
                            });
                            $('.q8').each(function(){
                                q8.push($(this).val());
                            });
                            $('.q9').each(function(){
                                q9.push($(this).val());
                            });
                            $('.q10').each(function(){
                                q10.push($(this).val());
                            });

                        
                            $.ajax({
                                url: "save511.php",
                                method:"POST",
                                data: {q1: q1, q2: q2, q3: q3, q4: q4, q5: q5, q6: q6, q7:q7, q8: q8, q9: q9, q10: q10},
                                success: function(data){
                                    $("#msg511").html("<h5 style='color: green; text-align; center'>Data Saved!</h5>");
                                    console.log("Saved data");
                                },
                                error: function(){
                                    $("#msg511").html("<h5 style='color: red; text-align; center'>Ajax Call Error!</h5>");
                                    console.log("Error Saving Data");
                                }
                            });
                        });
                    </script>
    <!-- Metric 5.1.2 -->
    <form method="post" id="f512">
         <div id="q512" class="questionContainer"> 
            <p class="msgContainer" id="msg512"><?php ?></p>
                <img
                <?php 
                     $get = mysqli_query($connection, "SELECT*FROM ssr_m5_1_2 WHERE username = '$adminname'");
                    $n = mysqli_num_rows($get);
                    if($n > 0){
                        echo "src='$filled' data-toggle='tooltip' data-placement='bottom' title='$n Filled'";
                    }else if($n == 0){
                        echo "src='$unfilled' data-toggle='tooltip' data-placement='bottom' title='Metric Not Filled'";
                    }else{
                        echo "src='$notapplicableimg' data-toggle='tooltip' data-placement='bottom' title='Metric Not Applicable'";
                    }
                    ?>
                    class="fillImage"
                >
            <p class="qName">Q<sub>N</sub>M <br>5.1.2</p>
            <p class="question">
            <b>Average percentage of students benefited by career counselling
                and guidance for competitive examinations offered by the
                Institution during the last five years. 
            </b>
            </p>
            <i class="fa fa-angle-down iconRight"></i><br><br><br>
            <p class="questionPart">
                <ul>
                    <li>Name of the scheme</li>
                    <li>Number of students who have passed in the competitive exam</li>
                    <li>Number of students placed</li>
                </ul>
            </p>
        </div>
        <div class="answerContainer answerWithTable" id="a512">
                <table class="table table-bordered checkApplicable" id="table512">
                    <thead>
                        <tr>
                            <th>Year</th>
                            <th colspan="2">Name of the Activity conducted by the HEI to offer guidance for competitive examinations offered by the institution during the last five years</th>
                            <th colspan="2">Name of the Activity conducted by the HEI to offer guidance for career counselling offered by the institution during the last five years </th>
                            <th>Number of students placed through campus placement</th>
                            <th>Link to relevant document</th>
                            <th>Remove</th>
                        </tr>
                        <tr>
                            <th></th>
                            <th>Name of the Activity</th>
                            <th>Number of students attended / participated</th>
                            <th>Details of career counselling</th>
                            <th>Number of students attended / participated</th>
                            <th></th>
                            <th></th>
                            <th></th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                            $fetchQuery = mysqli_query($connection, "SELECT*FROM ssr_m5_1_2 WHERE username = '$adminname'");
                            if($fetchQuery){
                                while($data = $fetchQuery->fetch_assoc()){
                                    $id= $data['id'];
                                    $q1 = $data['Year'];
                                    $q2 = $data['Name_of_the_Activity'];
                                    $q3 = $data['Number_of_students_attended_or_participated_competetive_exam'];
                                    $q4 = $data['Details_of_career_counselling'];
                                    $q5 = $data['Number_of_students_attended_or_participated_career_counselling'];
                                    $q6 = $data['Number_of_students_placed_through_campus_placement'];
                                    $q7 = $data['Link'];
                                    echo "<tr><td><input type='text' class='form-control' value='$q1' disabled /></td><td><input type='text' class='form-control' value='$q2' disabled /></td><td><input type='text' class='form-control' value='$q3' disabled /></td><td><input type='text' class='form-control' value='$q4' disabled /></td><td><input type='text' class='form-control' value='$q5' disabled /></td><td><input type='text' class='form-control' value='$q6' disabled /></td><td><input type='text' class='form-control' value='$q7' disabled /></td><td><a href='delete.php?id=$id&tab=ssr_m5_1_2' style='cursor: pointer;' class='btn btn-danger'>Remove</a></td></tr>";
                                }
                            }else{
                                echo "<tr><td colspan='11' style='text-align: center; color: red;'>Error Fetching Query!</td></tr>";
                            }
                        ?>
                    </tbody>
                </table>
                <table class="table table-borderless">
                    <tr>
                        <td><button type="button" class="AddRowBelow" id="addRow512"><i class="fa fa-plus-circle"></i></button><br></td>
                    </tr>
                </table>
                        <input type="submit" name="submit512" class="btn btn-primary" value="Save Changes" 
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
            <script>
                         var count512 = 0;
                        var output = "";
                        $("#addRow512").on("click", function(){
                            count512++;
                            output = "<tr id='row"+count512+"'>";
                            output += "<td><input  type='number' class='form-control q1' required/></td>";
                            output += "<td><input  type='text' class='form-control q2' required/></td>";
                            output += "<td><input  type='number' class='form-control q3' required/></td>";
                            output += "<td><input  type='text' class='form-control q4' required/></td>";
                            output += "<td><input  type='number' class='form-control q5' required/></td>";
                            output += "<td><input  type='number' class='form-control q6' required/></td>";
                            output += "<td><input  type='text' class='form-control q7' required/></td>";
                            output += "<td><button type='button' class='delete5112 btn btn-danger' data-row='row"+count512+"'>Remove</button></td>";
                            output += "</tr>";
                            tableBody = $("#table512 tbody");
                            tableBody.append(output);
                            $("#msg512").html("<h5 style='color: green; text-align; center'>Row Added!</h5>");
                        });

                        $("#table512 tbody").on('click', '.delete512', function(){
                            if(confirm("Are you sure you want to delete this data?")){
                                var delete_row = $(this).data('row');
                                $("#"+delete_row).remove();
                                $("#msg512").html("<h5 style='color: red; text-align; center'>Row Deleted!</h5>");
                                console.log("Deleted");
                            }else{
                                return false;
                            }
                        
                        });

                        $("#f512").on("submit", function(e){

                            e.preventDefault();
                            e.stopPropagation();
                            
                            var q1 = [];
                            var q2 = [];
                            var q3 = [];
                            var q4 = [];
                            var q5 = [];
                            var q6 = [];
                            var q7 = [];
                            var q8 = [];
                            var q9 = [];
                            var q10 = [];
                            
                            $('.q1').each(function(){
                                q1.push($(this).val());
                            });
                            $('.q2').each(function(){
                                q2.push($(this).val());
                            });
                            $('.q3').each(function(){
                                q3.push($(this).val());
                            });
                            $('.q4').each(function(){
                                q4.push($(this).val());
                            });
                            $('.q5').each(function(){
                                q5.push($(this).val());
                            });
                            $('.q6').each(function(){
                                q6.push($(this).val());
                            });
                            $('.q7').each(function(){
                                q7.push($(this).val());
                            });
                        
                            $.ajax({
                                url: "save512.php",
                                method:"POST",
                                data: {q1: q1, q2: q2, q3: q3, q4: q4, q5: q5, q6: q6, q7:q7},
                                success: function(data){
                                    $("#msg512").html("<h5 style='color: green; text-align; center'>Data Saved!</h5>");
                                    console.log("Saved data");
                                },
                                error: function(){
                                    $("#msg512").html("<h5 style='color: red; text-align; center'>Ajax Call Error!</h5>");
                                    console.log("Error Saving Data");
                                }
                            });
                        });
                    </script>
    <!-- Metric 5.1.3 -->
    <form method="post" id="f513">
         <div id="q513" class="questionContainer"> 
            <p class="msgContainer" id="msg513"><?php ?></p>
                <img
                <?php 
                     $get = mysqli_query($connection, "SELECT*FROM ssr_m5_1_3 WHERE username = '$adminname'");
                    $n = mysqli_num_rows($get);
                    if($n > 0){
                        echo "src='$filled' data-toggle='tooltip' data-placement='bottom' title='$n Filled'";
                    }else if($n == 0){
                        echo "src='$unfilled' data-toggle='tooltip' data-placement='bottom' title='Metric Not Filled'";
                    }else{
                        echo "src='$notapplicableimg' data-toggle='tooltip' data-placement='bottom' title='Metric Not Applicable'";
                    }
                    ?>
                    class="fillImage"
                >
            <p class="qName">Q<sub>N</sub>M <br>5.1.3</p>
            <p class="question">
            <b>Following Capacity development and skills enhancement initiatives
                are taken by the institution:
                1. Soft skills,
                2. Language and communication skills,
                3. Life skills (Yoga, physical fitness, health and hygiene),
                4. Awareness of trends in technology.
            </b>
            </p>
            <i class="fa fa-angle-down iconRight"></i><br><br><br>
            <p class="questionPart">
                <ul>
                    <li>Name of the capacity development and skills enhancement initiatives</li>
                    <li>Year of implementation</li>
                    <li>Number of students enrolled</li>
                    <li>Name of the agencies involved with contact details</li>
                </ul>
            </p>
        </div>
        <div class="answerContainer answerWithTable" id="a513">
                <table class="table table-bordered checkApplicable" id="table513">
                    <thead>
                        <tr>
                            <th colspan="4">Options: <select class="form-control qSelect" required>
                                <?php
                                    $val = "";
                                    $fetchQuerySelect = mysqli_query($connection, "SELECT*FROM ssr_m5_1_3 WHERE username = '$adminname'");
                                    if($fetchQuery){
                                        while($getDataSelect = $fetchQuerySelect->fetch_assoc()){
                                            $val = $getDataSelect['Select_option'];
                                        }
                                    }
                                ?>
                                <option value="" disabled>-Select-</option>
                                <option value="A. All 4 of the above" <?php if($val == 'A. All 4 of the above'){ echo "selected";}?>>A. All 4 of the above</option>
                                <option value="B. Any 3 of the above" <?php if($val == 'B. Any 3 of the above'){ echo "selected";}?>>B. Any 3 of the above</option>
                                <option value="C. Any 2 of the above" <?php if($val == 'C. Any 2 of the above'){ echo "selected";}?>>C. Any 2 of the above</option>
                                <option value="D . Any 1 of the above" <?php if($val == 'D . Any 1 of the above'){ echo "selected";}?>>D . Any 1 of the above</option>
                                <option value="E . None of the above" <?php if($val == 'E . None of the above'){ echo "selected";}?>>E . None of the above</option>
                            </select></th>
                        </tr>
                        <tr>
                            <th>Name of the capability enhancement programme</th>
                            <th>Date of implementation (DD-MM-YYYY)</th>
                            <th>Number of students enrolled</th>
                            <th>Name of the agencies/consultants involved with contact details (if any)</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                            $fetchQuery = mysqli_query($connection, "SELECT*FROM ssr_m5_1_3 WHERE username = '$adminname'");
                            if($fetchQuery){
                                while($data = $fetchQuery->fetch_assoc()){
                                    $id= $data['id'];
                                    $q1 = $data['Name_of_the_capability_enhancement_programme'];
                                    $q2 = $data['Date_of_implementation'];
                                    $q3 = $data['Number_of_students_enrolled'];
                                    $q4 = $data['Name_of_the_agencies_consultants_involved_with_contact_details'];
                                    echo "<tr><td><input type='text' class='form-control' value='$q1' disabled /></td><td><input type='text' class='form-control' value='$q2' disabled /></td><td><input type='text' class='form-control' value='$q3' disabled /></td><td><input type='text' class='form-control' value='$q4' disabled /></td><td><a href='delete.php?id=$id&tab=ssr_m5_1_3' style='cursor: pointer;' class='btn btn-danger'>Remove</a></td></tr>";
                                }
                            }else{
                                echo "<tr><td colspan='11' style='text-align: center; color: red;'>Error Fetching Query!</td></tr>";
                            }
                        ?>
                    </tbody>
                </table>
                <table class="table table-borderless">
                    <tr>
                        <td><button type="button" class="AddRowBelow" id="addRow513"><i class="fa fa-plus-circle"></i></button><br></td>
                    </tr>
                </table>
                        <input type="submit" name="submit513" class="btn btn-primary" value="Save Changes" 
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
            <script>
                         var count513 = 0;
                        var output = "";
                        $("#addRow513").on("click", function(){
                            count513++;
                            output = "<tr id='row"+count513+"'>";
                            output += "<td><input  type='text' class='form-control q1' required/></td>";
                            output += "<td><input  type='date' class='form-control q2' required/></td>";
                            output += "<td><input  type='number' class='form-control q3' required/></td>";
                            output += "<td><input  type='text' class='form-control q4' required/></td>";
                            output += "<td><button type='button' class='delete513 btn btn-danger' data-row='row"+count513+"'>Remove</button></td>";
                            output += "</tr>";
                            tableBody = $("#table513 tbody");
                            tableBody.append(output);
                            $("#msg513").html("<h5 style='color: green; text-align; center'>Row Added!</h5>");
                        });

                        $("#table513 tbody").on('click', '.delete513', function(){
                            if(confirm("Are you sure you want to delete this data?")){
                                var delete_row = $(this).data('row');
                                $("#"+delete_row).remove();
                                $("#msg513").html("<h5 style='color: red; text-align; center'>Row Deleted!</h5>");
                                console.log("Deleted");
                            }else{
                                return false;
                            }
                        
                        });

                        $("#f513").on("submit", function(e){

                            e.preventDefault();
                            e.stopPropagation();
                            
                            var q1 = [];
                            var q2 = [];
                            var q3 = [];
                            var q4 = [];
                            var qSelect = $(".qSelect").val();
                            $('.q1').each(function(){
                                q1.push($(this).val());
                            });
                            $('.q2').each(function(){
                                q2.push($(this).val());
                            });
                            $('.q3').each(function(){
                                q3.push($(this).val());
                            });
                            $('.q4').each(function(){
                                q4.push($(this).val());
                            });
                            
                            $.ajax({
                                url: "save513.php",
                                method:"POST",
                                data: {q1: q1, q2: q2, q3: q3, q4: q4, qSelect: qSelect},
                                success: function(data){
                                    $("#msg513").html("<h5 style='color: green; text-align; center'>Data Saved!</h5>");
                                    console.log("Saved data");
                                },
                                error: function(){
                                    $("#msg513").html("<h5 style='color: red; text-align; center'>Ajax Call Error!</h5>");
                                    console.log("Error Saving Data");
                                }
                            });
                        });
                    </script>
    <!-- Metric 5.1.4 -->
    <form method="post" id="f514">
         <div id="q514" class="questionContainer"> 
            <p class="msgContainer" id="msg514"><?php ?></p>
                <img
                <?php 
                    $get = mysqli_query($connection, "SELECT*FROM ssr_m5_1_4 WHERE username = '$adminname'");
                    $n = mysqli_num_rows($get);
                    if($n > 0){
                        echo "src='$filled' data-toggle='tooltip' data-placement='bottom' title='$n Filled'";
                    }else if($n == 0){
                        echo "src='$unfilled' data-toggle='tooltip' data-placement='bottom' title='Metric Not Filled'";
                    }else{
                        echo "src='$notapplicableimg' data-toggle='tooltip' data-placement='bottom' title='Metric Not Applicable'";
                    }
                    ?>
                    class="fillImage"
                >
            <p class="qName">Q<sub>N</sub>M <br>5.1.4</p>
            <p class="question">
            <b>The Institution adopts the following for redressal of student
                grievances including sexual harassment and ragging cases: <br>
                1. Implementation of guidelines of statutory/regulatory bodies, <br>
                2. Organisation wide awareness and undertakings on policies
                with zero tolerance, <br>
                3. Mechanisms for submission of online/offline students’
                grievances, <br>
                4. Timely redressal of the grievances through appropriate
                committees.
            </b>
            </p><br><br>
            <i class="fa fa-angle-down iconRight"></i><br><br><br><br>
            <p class="questionPart">
                <ul>
                    <li>Minutes of the meetings of student redressal committee, prevention of sexual harassment committee and Anti Ragging committee</li>
                    <li>YUpload any additional information</li>
                    <li>Details of student grievances including sexual harassment and ragging cases</li>
                </ul>
            </p>
        </div>
        <div class="answerContainer answerWithTable" id="a514">
                <table class="table table-bordered checkApplicable" id="table514">
                    <thead>
                        <tr>
                            <th>Options: <select class="form-control" name="select" required>
                                <?php
                                    $val = "";
                                    $fetchQuerySelect = mysqli_query($connection, "SELECT*FROM ssr_m5_1_4 WHERE username = '$adminname'");
                                    if($fetchQuery){
                                        while($getDataSelect = $fetchQuerySelect->fetch_assoc()){
                                            $val = $getDataSelect['Select_option'];
                                        }
                                    }
                                ?>
                                <option value="" disabled>-Select-</option>
                                <option value="A. All 4 of the above" <?php if($val == 'A. All 4 of the above'){ echo "selected";}?>>A. All 4 of the above</option>
                                <option value="B. Any 3 of the above" <?php if($val == 'B. Any 3 of the above'){ echo "selected";}?>>B. Any 3 of the above</option>
                                <option value="C. Any 2 of the above" <?php if($val == 'C. Any 2 of the above'){ echo "selected";}?>>C. Any 2 of the above</option>
                                <option value="D . Any 1 of the above" <?php if($val == 'D . Any 1 of the above'){ echo "selected";}?>>D . Any 1 of the above</option>
                                <option value="E . None of the above" <?php if($val == 'E . None of the above'){ echo "selected";}?>>E . None of the above</option>
                            </select></th>
                        </tr>
                    </thead>
                </table>
                        <input type="submit" name="submit514" class="btn btn-primary" value="Save Changes" 
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
    <!-- Metric 5.1.5 DDE ONLY -->
    <form method="post">
        <div id="q515" class="questionContainer ddeOnly" data-toggle="tooltip" data-placement="top" title="To Be Filled By DDE Only">
            <p class="msgContainer" id="msg515"><?php ?></p>
                <img
                    <?php 
                    $get = mysqli_query($connection, "SELECT*FROM ssr_m5_1_5 WHERE username = '$adminname'");
                    $n = mysqli_num_rows($get);
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
            <p class="qName">Q<sub>L</sub>M <br>5.1.5</p>
            <p class="question">
             <b>Pre-admission Counselling Services at DDE</b> <br>
             Activities undertaken by DDE for providing pre-admission counselling
            services to prospective learners and induction of newly enrolled learners at
            DDE <br>
            </p>
            <i class="fa fa-angle-down iconRight"></i><br>
            <p class="questionPart"><br><br>
                <ul>
                    <li>Relevant information on activities undertaken at DDE.</li>
                    <li>Paste link for additional information </li>
                </ul>
            </p>
        </div>
            <div class="answerContainer answerWithoutTable" id="a515">
                    <?php
                        $fetch = mysqli_query($connection, "SELECT*FROM ssr_m5_1_5 WHERE username = '$adminname'");
                        if($fetch){
                            while($getData = $fetch->fetch_assoc()){
                                $answer515 = $fetch['Description'];
                                $link515 = $fetch['Link'];
                            }
                        }
                    ?>
                        <label for="answer">Description (Max Length: 200 words)</label>
                        <textarea name="answer" class="form-control q1" rows="6" maxlength="250" placeholder="<?php echo $answer515;?>" required></textarea><br>
                        <label for="doclink">Link to the relevent document</label>
                        <input type="text" name="doclink" class="form-control q2" placeholder="<?php echo $link515; ?>" autocomplete="off" required /><br>
                        <input type="submit" name="submit515" class="btn btn-primary" value="Save Changes" 
                        <?php
                            // For Enabling or Disabling Button
                            if($dateCheck || $adminname !='Directorate of Distance Education'){
                                echo "disabled";
                            }else{
                                echo "enabled";
                            }
                        ?>
                        required/>
            </div>   
        </div>
        </form>
    <!-- Metric 5.1.6 DDE ONLY -->
    <form method="post">
        <div id="q516" class="questionContainer ddeOnly" data-toggle="tooltip" data-placement="top" title="To Be Filled By DDE Only">
            <p class="msgContainer" id="msg516"><?php ?></p>
                <img
                    <?php 
                    $get = mysqli_query($connection, "SELECT*FROM ssr_m5_1_6 WHERE username = '$adminname'");
                    $n = mysqli_num_rows($get);
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
            <p class="qName">Q<sub>L</sub>M <br>5.1.6</p>
            <p class="question">
             <b>Online Admission and Related Activitiesat DDE</b> <br>
             The status and process of online admission including payment of fees at DDE<br>
            </p>
            <i class="fa fa-angle-down iconRight"></i><br>
            <p class="questionPart"><br><br>
                <ul>
                    <li>Online Admission and related activities at DDE.</li>
                    <li>Paste link for additional information </li>
                </ul>
            </p>
        </div>
            <div class="answerContainer answerWithoutTable" id="a516">
                    <?php
                        $fetch = mysqli_query($connection, "SELECT*FROM ssr_m5_1_6 WHERE username = '$adminname'");
                        if($fetch){
                            while($getData = $fetch->fetch_assoc()){
                                $answer516 = $fetch['Description'];
                                $link516 = $fetch['Link'];
                            }
                        }
                    ?>
                        <label for="answer">Description (Max Length: 200 words)</label>
                        <textarea name="answer" class="form-control q1" rows="6" maxlength="250" placeholder="<?php echo $answer516;?>" required></textarea><br>
                        <label for="doclink">Link to the relevent document</label>
                        <input type="text" name="doclink" class="form-control q2" placeholder="<?php echo $link516; ?>" autocomplete="off" required /><br>
                        <input type="submit" name="submit516" class="btn btn-primary" value="Save Changes" 
                        <?php
                            // For Enabling or Disabling Button
                            if($dateCheck || $adminname !='Directorate of Distance Education'){
                                echo "disabled";
                            }else{
                                echo "enabled";
                            }
                        ?>
                        required/>
            </div>   
        </div>
        </form>
    <!-- Metric 5.1.7 DDE ONLY -->
    <form method="post">
        <div id="q517" class="questionContainer ddeOnly" data-toggle="tooltip" data-placement="top" title="To Be Filled By DDE Only">
            <p class="msgContainer" id="msg517"><?php ?></p>
                <img
                    <?php 
                    $get = mysqli_query($connection, "SELECT*FROM ssr_m5_1_7 WHERE username = '$adminname'");
                    $n = mysqli_num_rows($get);
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
            <p class="qName">Q<sub>L</sub>M <br>5.1.7</p>
            <p class="question">
             <b>Dispatch of Study Material to Learners by DDE</b> <br>
             Strategy followed by DDE for dispatch of study material to learners<br>
            </p>
            <i class="fa fa-angle-down iconRight"></i><br>
            <p class="questionPart"><br><br>
                <ul>
                    <li>Material dispatch related activities at DDE.</li>
                    <li>Paste link for Any relevant information </li>
                </ul>
            </p>
        </div>
            <div class="answerContainer answerWithoutTable" id="a517">
                    <?php
                        $fetch = mysqli_query($connection, "SELECT*FROM ssr_m5_1_7 WHERE username = '$adminname'");
                        if($fetch){
                            while($getData = $fetch->fetch_assoc()){
                                $answer517 = $fetch['Description'];
                                $link517 = $fetch['Link'];
                            }
                        }
                    ?>
                        <label for="answer">Description (Max Length: 200 words)</label>
                        <textarea name="answer" class="form-control q1" rows="6" maxlength="250" placeholder="<?php echo $answer517;?>" required></textarea><br>
                        <label for="doclink">Link to the relevent document</label>
                        <input type="text" name="doclink" class="form-control q2" placeholder="<?php echo $link517; ?>" autocomplete="off"/><br>
                        <input type="submit" name="submit517" class="btn btn-primary" value="Save Changes" 
                        <?php
                            // For Enabling or Disabling Button
                            if($dateCheck || $adminname !='Directorate of Distance Education'){
                                echo "disabled";
                            }else{
                                echo "enabled";
                            }
                        ?>
                        required/>
            </div>   
         </div>
        </form>

    <!-- Metric 5.1.8 -->
    <form method="post" id="f518">
         <div id="q518" class="questionContainer ddeOnly" data-toggle="tooltip" data-placement="top" title="To be Filled By DDE Only"> 
            <p class="msgContainer" id="msg518"><?php ?></p>
                <img
                <?php 
                     $get = mysqli_query($connection, "SELECT*FROM ssr_m5_1_8 WHERE username = '$adminname'");
                    $n = mysqli_num_rows($get);
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
            <p class="qName">Q<sub>N</sub>M <br>5.1.8</p>
            <p class="question">
            <b>Attending to learners’ queries by DDE</b><br>
            Modes employed by DDE to attend to learners’ queries
            Enlist the approaches given below, used by the DDE to attend to learners’
            queries:<br>
            1. Automated interactive voice response system,
            2. Call centre,
            3. Online Help Desk,
            4. Social media,
            5. App based support,
            6. Chat Box,
            7. E-mail Support,
            8. Interactive radio counselling,
            9. Teleconferencing,
            10. Web-conferencing,
            11. Student Services Centre/ Inquiry Counter,
            12. Postal communication,
            13. Any other (please specify),
            </p>
            <i class="fa fa-angle-down iconRight"></i><br><br><br><br><br>
            <p class="questionPart"><br>
                <ul>
                    <li>Web-link to Online Help Desk, App based support, Chat Box, Interactive radio counselling, Web-conferencing, Student Services Centre, any other at DDE</li>
                    <li>Any other relevant information</li>
                </ul>
            </p>
        </div>
        <div class="answerContainer answerWithTable" id="a518">
                <table class="table table-bordered checkApplicable" id="table518">
                    <thead>
                        <tr>
                            <th colspan="4">Options: <select class="form-control qSelect" required>
                                <?php
                                    $val = "";
                                    $fetchQuerySelect = mysqli_query($connection, "SELECT*FROM ssr_m5_1_8 WHERE username = '$adminname'");
                                    if($fetchQuery){
                                        while($getDataSelect = $fetchQuerySelect->fetch_assoc()){
                                            $val = $getDataSelect['Select_option'];
                                        }
                                    }
                                ?>
                                <option value="" disabled>-Select-</option>
                                <option value="A. Any 8 or more of the above" <?php if($val == 'A. Any 8 or more of the above'){ echo "selected";}?>>A. Any 8 or more of the above</option>
                                <option value="B. Any 6-7of the above" <?php if($val == 'B. Any 6-7of the above'){ echo "selected";}?>>B. Any 6-7of the above</option>
                                <option value="C. Any 4-5 of the above" <?php if($val == 'C. Any 4-5 of the above'){ echo "selected";}?>>C. Any 4-5 of the above</option>
                                <option value="D . Any 1-3 of the above" <?php if($val == 'D . Any 1-3 of the above'){ echo "selected";}?>>D . Any 1-3 of the above</option>
                                <option value="E . None of the above" <?php if($val == 'E . None of the above'){ echo "selected";}?>>E . None of the above</option>
                            </select></th>
                        </tr>
                        <tr>
                            <th>Year</th>
                            <th>Type of Approach</th>
                            <th>Number of queries received</th>
                            <th>Number of queries addressed</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                            $fetchQuery = mysqli_query($connection, "SELECT*FROM ssr_m5_1_8 WHERE username = '$adminname'");
                            if($fetchQuery){
                                while($data = $fetchQuery->fetch_assoc()){
                                    $id= $data['id'];
                                    $q1 = $data['Year'];
                                    $q2 = $data['Type_of_Approach'];
                                    $q3 = $data['Number_of_queries_received'];
                                    $q4 = $data['Number_of_queries_addressed'];
                                    echo "<tr><td><input type='text' class='form-control' value='$q1' disabled /></td><td><input type='text' class='form-control' value='$q2' disabled /></td><td><input type='text' class='form-control' value='$q3' disabled /></td><td><input type='text' class='form-control' value='$q4' disabled /></td><td><a href='delete.php?id=$id&tab=ssr_m5_1_8' style='cursor: pointer;' class='btn btn-danger'>Remove</a></td></tr>";
                                }
                            }else{
                                echo "<tr><td colspan='5' style='text-align: center; color: red;'>Error Fetching Query!</td></tr>";
                            }
                        ?>
                    </tbody>
                </table>
                <table class="table table-borderless">
                    <tr>
                        <td><button type="button" class="AddRowBelow" id="addRow518"><i class="fa fa-plus-circle"></i></button><br></td>
                    </tr>
                </table>
                        <input type="submit" name="submit518" class="btn btn-primary" value="Save Changes" 
                        <?php
                            // For Enabling or Disabling Button
                            if($dateCheck || $adminname = 'Directorate of Distance Education'){
                                echo "disabled";
                            }else{
                                echo "enabled";
                            }
                        ?>
                        required/>
            </div>   
            </form>
            <script>
                         var count518 = 0;
                        var output = "";
                        $("#addRow518").on("click", function(){
                            count518++;
                            output = "<tr id='row"+count518+"'>";
                            output += "<td><input  type='numebr' class='form-control q1' required/></td>";
                            output += "<td><input  type='text' class='form-control q2' required/></td>";
                            output += "<td><input  type='number' class='form-control q3' required/></td>";
                            output += "<td><input  type='number' class='form-control q4' required/></td>";
                            output += "<td><button type='button' class='delete518 btn btn-danger' data-row='row"+count518+"'>Remove</button></td>";
                            output += "</tr>";
                            tableBody = $("#table518 tbody");
                            tableBody.append(output);
                            $("#msg518").html("<h5 style='color: green; text-align; center'>Row Added!</h5>");
                        });

                        $("#table518 tbody").on('click', '.delete518', function(){
                            if(confirm("Are you sure you want to delete this data?")){
                                var delete_row = $(this).data('row');
                                $("#"+delete_row).remove();
                                $("#msg518").html("<h5 style='color: red; text-align; center'>Row Deleted!</h5>");
                                console.log("Deleted");
                            }else{
                                return false;
                            }
                        
                        });

                        $("#f518").on("submit", function(e){

                            e.preventDefault();
                            e.stopPropagation();
                            
                            var q1 = [];
                            var q2 = [];
                            var q3 = [];
                            var q4 = [];
                            var qSelect = $(".qSelect").val();
                            $('.q1').each(function(){
                                q1.push($(this).val());
                            });
                            $('.q2').each(function(){
                                q2.push($(this).val());
                            });
                            $('.q3').each(function(){
                                q3.push($(this).val());
                            });
                            $('.q4').each(function(){
                                q4.push($(this).val());
                            });
                            
                            $.ajax({
                                url: "save518.php",
                                method:"POST",
                                data: {q1: q1, q2: q2, q3: q3, q4: q4, qSelect: qSelect},
                                success: function(data){
                                    $("#msg518").html("<h5 style='color: green; text-align; center'>Data Saved!</h5>");
                                    console.log("Saved data");
                                },
                                error: function(){
                                    $("#msg518").html("<h5 style='color: red; text-align; center'>Ajax Call Error!</h5>");
                                    console.log("Error Saving Data");
                                }
                            });
                        });
                    </script>
    <!-- Metric 5.1.9 -->
    <form method="post" id="f519">
         <div id="q519" class="questionContainer ddeOnly" data-toggle="tooltip" data-placement="top" title="To be Filled By DDE Only"> 
            <p class="msgContainer" id="msg519"><?php ?></p>
                <img
                <?php 
                    // $get = mysqli_query($connection, "SELECT*FROM ssr_m5_1_9 WHERE username = '$adminname'");
                    // $n = mysqli_num_rows($get);
                    // if($n > 0){
                    //     echo "src='$filled' data-toggle='tooltip' data-placement='bottom' title='$n Filled'";
                    // }else if($n == 0 && $name =='Directorate of Distance Education'){
                    //     echo "src='$unfilled' data-toggle='tooltip' data-placement='bottom' title='Metric Not Filled'";
                    // }else if($name !='Directorate of Distance Education'){
                    //     echo "src='$notapplicableimg' data-toggle='tooltip' data-placement='bottom' title='Metric Not Applicable'";
                    // }
                    ?>
                    class="fillImage"
                >
            <p class="qName">Q<sub>N</sub>M <br>5.1.9</p>
            <p class="question">
            <b>Addressing learners’ grievances at DDE</b><br>
            DDE has a transparent mechanism for timely redressal of learner grievances.
            Average percentage of grievances received at DDE and redressed during the
            last five years
            Total number of grievances received at DDE and redressed year wise over
            the last five years
            </p>
            <i class="fa fa-angle-down iconRight"></i><br><br><br>
            <p class="questionPart"><br>
                <ul>
                    <li>Web link to Grievance Redressal Mechanism Committee for learners at DDE</li>
                    <li>Any other relevant information</li>
                </ul>
            </p>
        </div>
        <div class="answerContainer answerWithTable" id="a519">
                <table class="table table-bordered checkApplicable" id="table519">
                    <thead>
                        <tr>
                                <?php
                                    // $fetchQuerySelect = mysqli_query($connection, "SELECT*FROM ssr_m5_1_9 WHERE username = '$adminname'");
                                    // if($fetchQuery){
                                    //     while($getDataSelect = $fetchQuerySelect->fetch_assoc()){
                                            
                                    //     }
                                    // }
                                ?>
                            <th>Year</th>
                            <td><input type="number" class="form-control" name="y1" placeholder="<?php echo $y519_y1;?>" required/></td>
                            <td><input type="number" class="form-control" name="y2" placeholder="<?php echo $y519_y2;?>" required/></td>
                            <td><input type="number" class="form-control" name="y3" placeholder="<?php echo $y519_y3;?>" required/></td>
                            <td><input type="number" class="form-control" name="y4" placeholder="<?php echo $y519_y4;?>" required/></td>
                            <td><input type="number" class="form-control" name="y5" placeholder="<?php echo $y519_y5;?>" required/></td>
                        </tr>
                        <tr>
                        <?php
                                    // $fetchQuerySelect = mysqli_query($connection, "SELECT*FROM ssr_m5_1_9 WHERE username = '$adminname'");
                                    // if($fetchQuery){
                                    //     while($getDataSelect = $fetchQuerySelect->fetch_assoc()){
                                            
                                    //     }
                                    // }
                        ?>
                            <th>Number of grievances received at DDE</th>
                            <td><input type="number" name="num_g_1" class="form-control" placeholder="<?php echo $numg_y1;?>"></td>
                            <td><input type="number" name="num_g_2" class="form-control" placeholder="<?php echo $numg_y2;?>"></td>
                            <td><input type="number" name="num_g_3" class="form-control" placeholder="<?php echo $numg_y3;?>"></td>
                            <td><input type="number" name="num_g_4" class="form-control" placeholder="<?php echo $numg_y4;?>"></td>
                            <td><input type="number" name="num_g_5" class="form-control" placeholder="<?php echo $numg_y5;?>"></td>

                        </tr>
                        <tr>
                        <?php
                                    // $fetchQuerySelect = mysqli_query($connection, "SELECT*FROM ssr_m5_1_9 WHERE username = '$adminname'");
                                    // if($fetchQuery){
                                    //     while($getDataSelect = $fetchQuerySelect->fetch_assoc()){
                                            
                                    //     }
                                    // }
                        ?>
                            <th>Number of grievances redressed at DDE</th>
                            <td><input type="number" name="num_r_1" class="form-control" placeholder="<?php echo $numr_y1;?>"></td>
                            <td><input type="number" name="num_r_2" class="form-control" placeholder="<?php echo $numr_y2;?>"></td>
                            <td><input type="number" name="num_r_3" class="form-control" placeholder="<?php echo $numr_y3;?>"></td>
                            <td><input type="number" name="num_r_4" class="form-control" placeholder="<?php echo $numr_y4;?>"></td>
                            <td><input type="number" name="num_r_5" class="form-control" placeholder="<?php echo $numr_y5;?>"></td>

                        </tr>
                    </thead>
                    <tbody>
                    </tbody>
                </table>
                <table class="table table-borderless">
                </table>
                        <input type="submit" name="submit519" class="btn btn-primary" value="Save Changes" 
                        <?php
                            // For Enabling or Disabling Button
                            if($dateCheck || $adminname = 'Directorate of Distance Education'){
                                echo "disabled";
                            }else{
                                echo "enabled";
                            }
                        ?>
                        required/>
            </div>   
            </form>
    <div class="criteriaTitle2">
       <h4>5.2 Promotion of Research and Facilities</h4>
    </div><br>
    <!-- Metric 5.2.1 -->
    <form method="post" id="f521">
         <div id="q521" class="questionContainer"> 
            <p class="msgContainer" id="msg521"><?php ?></p>
                <img
                <?php 
                     $get = mysqli_query($connection, "SELECT*FROM ssr_m5_2_1 WHERE username = '$adminname'");
                    $n = mysqli_num_rows($get);
                    if($n > 0){
                        echo "src='$filled' data-toggle='tooltip' data-placement='bottom' title='$n Filled'";
                    }else if($n == 0){
                        echo "src='$unfilled' data-toggle='tooltip' data-placement='bottom' title='Metric Not Filled'";
                    }else{
                        echo "src='$notapplicableimg' data-toggle='tooltip' data-placement='bottom' title='Metric Not Applicable'";
                    }
                    ?>
                    class="fillImage"
                >
            <p class="qName">Q<sub>N</sub>M <br>5.2.1</p>
            <p class="question">
            <b>Average percentage of students qualifying in state/ national/ international level examinations during the last five years (eg: NET/SLET/GATE/GMAT/CAT/GRE/TOEFL/Civil Services/State government examinations). 
            </b>
            </p>
            <i class="fa fa-angle-down iconRight"></i><br><br><br>
            <p class="questionPart">
                <ul>
                    <li>Upload supporting data for the same</li>
                    <li>Number of students qualifying in state/ national/ international level examinations during the last five years (Data Template)</li>
                    <li>Any additional information</li>
                </ul>
            </p>
        </div>
        <div class="answerContainer answerWithTable" id="a521">
                <table class="table table-bordered checkApplicable" id="table521">
                    <thead>
                        <tr>
                            <th>Year&nbsp;&nbsp;</th>
                            <th>Registration Num/ Roll for the exam</th>
                            <th colspan="12" style="text-align: center;">Names of students selected/ qualified</th>
                            <th>Remove</th>
                        </tr>
                        <tr>
                            <th colspan="2"></th>
                            <th>NET</th>
                            <th>SLET</th>
                            <th>GATE</th>
                            <th>CAT</th>
                            <th>GRE</th>
                            <th>JAM</th>
                            <th>IELTS</th>
                            <th>TOEFL</th>
                            <th>CIVIL SERVICES</th>
                            <th>State Gov. Exam</th>
                            <th>Other Examinations Conducted by State/ Central Government Agencies(Specify)</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                            $fetchQuery = mysqli_query($connection, "SELECT*FROM ssr_m5_2_1 WHERE username = '$adminname'");
                            if($fetchQuery){
                                while($data = $fetchQuery->fetch_assoc()){
                                    $id= $data['id'];
                                    $q1 = $data['Year'];
                                    $q2 = $data['Registration_Number_or_Roll_Number'];
                                    $q3 = $data['Name_of_Student_NET'];
                                    $q4 = $data['Name_of_Student_SLET'];
                                    $q5 = $data['Name_of_Student_GATE'];
                                    $q6 = $data['Name_of_Student_GMAT'];
                                    $q7 = $data['Name_of_Student_CAT'];
                                    $q8 = $data['Name_of_Student_GRE'];
                                    $q9 = $data['Name_of_Student_IELTS'];
                                    $q10 = $data['Name_of_Student_TOEFL'];
                                    $q11 = $data['Name_of_Student_Civil_Services'];
                                    $q12 = $data['Name_of_Student_State_Gov_Exam'];
                                    $q13 = $data['Name_of_Student_Other_Exam'];
                                    echo "<tr><td><input type='text' class='form-control' value='$q1' disabled /></td><td><input type='text' class='form-control' value='$q2' disabled /></td><td><input type='text' class='form-control' value='$q3' disabled /></td><td><input type='text' class='form-control' value='$q4' disabled /></td><td><input type='text' class='form-control' value='$q5' disabled /></td><td><input type='text' class='form-control' value='$q6' disabled /></td><td><input type='text' class='form-control' value='$q7' disabled /></td><td><input type='text' class='form-control' value='$q8' disabled /></td><td><input type='text' class='form-control' value='$q9' disabled /></td><td><input type='text' class='form-control' value='$q10' disabled /></td><td><input type='text' class='form-control' value='$q11' disabled /></td><td><input type='text' class='form-control' value='$q12' disabled /></td><td><input type='text' class='form-control' value='$q13' disabled /></td><td><a href='delete.php?id=$id&tab=ssr_m5_2_1' style='cursor: pointer;' class='btn btn-danger'>Remove</a></td></tr>";
                                }
                            }else{
                                echo "<tr><td colspan='11' style='text-align: center; color: red;'>Error Fetching Query!</td></tr>";
                            }
                        ?>
                    </tbody>
                </table>
                <table class="table table-borderless">
                    <tr>
                        <td><button type="button" class="AddRowBelow" id="addRow521"><i class="fa fa-plus-circle"></i></button><br></td>
                    </tr>
                </table>
                        <input type="submit" name="submit521" class="btn btn-primary" value="Save Changes" 
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
            <script>
                         var count521 = 0;
                        var output = "";
                        $("#addRow521").on("click", function(){
                            count521++;
                            output = "<tr id='row"+count521+"'>";
                            output += "<td><input  type='number' class='form-control onlyYear q1' required/></td>";
                            output += "<td><input  type='text' class='form-control q2' required/></td>";
                            output += "<td><input  type='text' class='form-control q3' required/></td>";
                            output += "<td><input  type='text' class='form-control q4' required/></td>";
                            output += "<td><input  type='text' class='form-control q5' required/></td>";
                            output += "<td><input  type= 'text' class='form-control q6' required/></td>";
                            output += "<td><input  type='text' class='form-control q7' required/></td>";
                            output += "<td><input  type='text' class='form-control q8' required/></td>";
                            output += "<td><input  type='text' class='form-control q9' required/></td>";
                            output += "<td><input  type='text' class='form-control q10' required/></td>";
                            output += "<td><input  type='text' class='form-control q11' required/></td>";
                            output += "<td><input  type='text' class='form-control q12' required/></td>";
                            output += "<td colspan='2'><input  type='text' class='form-control q13' required/></td>";
                            output += "<td><button type='button' class='delete521 btn btn-danger' data-row='row"+count521+"'>Remove</button></td>";
                            output += "</tr>";
                            tableBody = $("#table521 tbody");
                            tableBody.append(output);
                            $("#msg521").html("<h5 style='color: green; text-align; center'>Row Added!</h5>");
                        });

                        $("#table521 tbody").on('click', '.delete521', function(){
                            if(confirm("Are you sure you want to delete this data?")){
                                var delete_row = $(this).data('row');
                                $("#"+delete_row).remove();
                                $("#msg521").html("<h5 style='color: red; text-align; center'>Row Deleted!</h5>");
                                console.log("Deleted");
                            }else{
                                return false;
                            }
                        
                        });

                        $("#f521").on("submit", function(e){

                            e.preventDefault();
                            e.stopPropagation();
                            
                            var q1 = [];
                            var q2 = [];
                            var q3 = [];
                            var q4 = [];
                            var q5 = [];
                            var q6 = [];
                            var q7 = [];
                            var q8 = [];
                            var q9 = [];
                            var q10 = [];
                            var q11 = [];
                            var q12 = [];
                            var q13 = [];
                            
                            $('.q1').each(function(){
                                q1.push($(this).val());
                            });
                            $('.q2').each(function(){
                                q2.push($(this).val());
                            });
                            $('.q3').each(function(){
                                q3.push($(this).val());
                            });
                            $('.q4').each(function(){
                                q4.push($(this).val());
                            });
                            $('.q5').each(function(){
                                q5.push($(this).val());
                            });
                            $('.q6').each(function(){
                                q6.push($(this).val());
                            });
                            $('.q7').each(function(){
                                q7.push($(this).val());
                            });
                            $('.q8').each(function(){
                                q8.push($(this).val());
                            });
                            $('.q9').each(function(){
                                q9.push($(this).val());
                            });
                            $('.q10').each(function(){
                                q10.push($(this).val());
                            });
                            $('.q11').each(function(){
                                q11.push($(this).val());
                            });
                            $('.q12').each(function(){
                                q12.push($(this).val());
                            });
                            $('.q13').each(function(){
                                q13.push($(this).val());
                            });

                        
                            $.ajax({
                                url: "save521.php",
                                method:"POST",
                                data: {q1: q1, q2: q2, q3: q3, q4: q4, q5: q5, q6: q6, q7:q7, q8: q8, q9: q9, q10: q10, q11: q11, q12: q12, q13: q13},
                                success: function(data){
                                    $("#msg521").html("<h5 style='color: green; text-align; center'>Data Saved!</h5>");
                                    console.log("Saved data");
                                },
                                error: function(){
                                    $("#msg521").html("<h5 style='color: red; text-align; center'>Ajax Call Error!</h5>");
                                    console.log("Error Saving Data");
                                }
                            });
                        });
                    </script>

    <!-- Metric 5.2.2 -->
    <form method="post" id="f522">
         <div id="q522" class="questionContainer"> 
            <p class="msgContainer" id="msg522"><?php ?></p>
                <img
                <?php 
                     $getq = mysqli_query($connection, "SELECT*FROM ssr_m5_2_2 WHERE username = '$adminname'");
                    $n = mysqli_num_rows($getq);
                    if($n > 0){
                        echo "src='$filled' data-toggle='tooltip' data-placement='bottom' title='$n Filled'";
                    }else if($n == 0){
                        echo "src='$unfilled' data-toggle='tooltip' data-placement='bottom' title='Metric Not Filled'";
                    }else{
                        echo "src='$notapplicableimg' data-toggle='tooltip' data-placement='bottom' title='Metric Not Applicable'";
                    }
                    ?>
                    class="fillImage"
                >
            <p class="qName">Q<sub>N</sub>M <br>5.2.2</p>
            <p class="question">
            <b>Average percentage of placement of outgoing students during the last five years. 
            </b>
            </p>
            <i class="fa fa-angle-down iconRight"></i><br><br><br>
            <p class="questionPart">
                <ul>
                    <li>Self attested list of students placed</li>
                    <li>Upload any additional information</li>
                    <li>Details of student placement during the last five years </li>
                </ul>
            </p>
        </div>
        <div class="answerContainer answerWithTable" id="a522">
                <table class="table table-bordered checkApplicable" id="table522">
                    <thead>
                        <tr>
                            <th>Year</th>
                            <th colspan="2">Name of the Activity conducted by the HEI to offer guidance for competitive examinations offered by the institution during the last five years</th>
                            <th colspan="2">Name of the Activity conducted by the HEI to offer guidance for career counselling offered by the institution during the last five years </th>
                            <th>Number of students placed through campus placement</th>
                            <th>Link to relevant document</th>
                            <th>Remove</th>
                        </tr>
                        <tr>
                            <th></th>
                            <th>Name of the Activity</th>
                            <th>Number of students attended / participated</th>
                            <th>Details of career counselling</th>
                            <th>Number of students attended / participated</th>
                            <th></th>
                            <th></th>
                            <th></th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                            $fetchQuery = mysqli_query($connection, "SELECT*FROM ssr_m5_2_2 WHERE username = '$adminname'");
                            if($fetchQuery){
                                while($data = $fetchQuery->fetch_assoc()){
                                    $id= $data['id'];
                                    $q1 = $data['Year'];
                                    $q2 = $data['Name_of_the_Activity'];
                                    $q3 = $data['Number_of_students_attended_or_participated_competetive_exam'];
                                    $q4 = $data['Details_of_career_counselling'];
                                    $q5 = $data['Number_of_students_attended_or_participated_career_counselling'];
                                    $q6 = $data['Number_of_students_placed_through_campus_placement'];
                                    $q7 = $data['Link'];
                                    echo "<tr><td><input type='text' class='form-control' value='$q1' disabled /></td><td><input type='text' class='form-control' value='$q2' disabled /></td><td><input type='text' class='form-control' value='$q3' disabled /></td><td><input type='text' class='form-control' value='$q4' disabled /></td><td><input type='text' class='form-control' value='$q5' disabled /></td><td><input type='text' class='form-control' value='$q6' disabled /></td><td><input type='text' class='form-control' value='$q7' disabled /></td><td><a href='delete.php?id=$id&tab=ssr_m5_2_2' style='cursor: pointer;' class='btn btn-danger'>Remove</a></td></tr>";
                                }
                            }else{
                                echo "<tr><td colspan='11' style='text-align: center; color: red;'>Error Fetching Query!</td></tr>";
                            }
                        ?>
                    </tbody>
                </table>
                <table class="table table-borderless">
                    <tr>
                        <td><button type="button" class="AddRowBelow" id="addRow512"><i class="fa fa-plus-circle"></i></button><br></td>
                    </tr>
                </table>
                        <input type="submit" name="submit522" class="btn btn-primary" value="Save Changes" 
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
            <script>
                         var count522 = 0;
                        var output = "";
                        $("#addRow522").on("click", function(){
                            count512++;
                            output = "<tr id='row"+count522+"'>";
                            output += "<td><input  type='number' class='form-control q1' required/></td>";
                            output += "<td><input  type='text' class='form-control q2' required/></td>";
                            output += "<td><input  type='number' class='form-control q3' required/></td>";
                            output += "<td><input  type='text' class='form-control q4' required/></td>";
                            output += "<td><input  type='number' class='form-control q5' required/></td>";
                            output += "<td><input  type='number' class='form-control q6' required/></td>";
                            output += "<td><input  type='text' class='form-control q7' required/></td>";
                            output += "<td><button type='button' class='delete5112 btn btn-danger' data-row='row"+count522+"'>Remove</button></td>";
                            output += "</tr>";
                            tableBody = $("#table522 tbody");
                            tableBody.append(output);
                            $("#msg522").html("<h5 style='color: green; text-align; center'>Row Added!</h5>");
                        });

                        $("#table522 tbody").on('click', '.delete522', function(){
                            if(confirm("Are you sure you want to delete this data?")){
                                var delete_row = $(this).data('row');
                                $("#"+delete_row).remove();
                                $("#msg522").html("<h5 style='color: red; text-align; center'>Row Deleted!</h5>");
                                console.log("Deleted");
                            }else{
                                return false;
                            }
                        
                        });

                        $("#f512").on("submit", function(e){

                            e.preventDefault();
                            e.stopPropagation();
                            
                            var q1 = [];
                            var q2 = [];
                            var q3 = [];
                            var q4 = [];
                            var q5 = [];
                            var q6 = [];
                            var q7 = [];
                            var q8 = [];
                            var q9 = [];
                            var q10 = [];
                            
                            $('.q1').each(function(){
                                q1.push($(this).val());
                            });
                            $('.q2').each(function(){
                                q2.push($(this).val());
                            });
                            $('.q3').each(function(){
                                q3.push($(this).val());
                            });
                            $('.q4').each(function(){
                                q4.push($(this).val());
                            });
                            $('.q5').each(function(){
                                q5.push($(this).val());
                            });
                            $('.q6').each(function(){
                                q6.push($(this).val());
                            });
                            $('.q7').each(function(){
                                q7.push($(this).val());
                            });
                        
                            $.ajax({
                                url: "save512.php",
                                method:"POST",
                                data: {q1: q1, q2: q2, q3: q3, q4: q4, q5: q5, q6: q6, q7:q7},
                                success: function(data){
                                    $("#msg512").html("<h5 style='color: green; text-align; center'>Data Saved!</h5>");
                                    console.log("Saved data");
                                },
                                error: function(){
                                    $("#msg512").html("<h5 style='color: red; text-align; center'>Ajax Call Error!</h5>");
                                    console.log("Error Saving Data");
                                }
                            });
                        });
                    </script>
    
</div>
    <footer>
			<p>&copy; <script>document.write(new Date().getFullYear())</script> - <script>document.write(new Date().getFullYear() + 1)</script> Devi Ahilya Vishwavidyalaya, Indore(M.P.)</p>
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

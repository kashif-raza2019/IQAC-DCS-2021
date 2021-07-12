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
    <title>Criteria IV</title>
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
       <h3>Criteria IV - Research, Innovations and Extension</h3>
    </div>
    <div class="criteriaTitle2">
       <h4>4.1 Promotion of Research and Facilities</h4>
    </div>
    <!-- Metric 4.1.1 -->
    <form method="post">
        <div id="q411" class="questionContainer">
            <p class="msgContainer" id="msg411"><?php ?></p>
                <img
                    
                    class="fillImage"
                >
            <p class="qName">Q<sub>L</sub>M <br>4.1.1</p>
            <p class="question">
                The institution has adequate facilities for teaching-learning. viz.,
                classrooms, laboratories, computing equipment, etc. 
            </p>
            <i class="fa fa-angle-down iconRight"></i><br>
            <p class="questionPart">
                <ul><br>
                    <li>Upload Additional information.</li>
                    <li>Link for Additional information</li>
                </ul>
            </p>
        </div>
            <div class="answerContainer" id="a411">
                        <label for="answer">Description (Max Length: 500 words)</label>
                        <textarea name="answer" class="form-control q1" rows="6" maxlength="550" placeholder="<?php ?>" required></textarea><br>
                        <label for="doclink">Link to the relevent document</label>
                        <input type="text" name="doclink" class="form-control q2" placeholder="<?php ?>" autocomplete="off" required /><br>
                        <input type="submit" name="submit411" class="btn btn-primary" value="Save Changes" 
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
        </div>
    <!-- Metric 4.1.2 -->
    <form method="post">
        <div id="q412" class="questionContainer">
            <p class="msgContainer" id="msg412"><?php ?></p>
                <img
                    
                    class="fillImage"
                >
            <p class="qName">Q<sub>L</sub>M <br>4.1.2</p>
            <p class="question">
            The institution has adequate facilities for cultural activities, yoga,
            games(indoor, outdoor) and sports(gymnasium, yoga centre,
            auditorium, etc.)
            </p>
            <i class="fa fa-angle-down iconRight"></i><br><br><br>
            <p class="questionPart">
                <ul>
                    <li>Upload Additional information.</li>
                    <li>Geotagged pictures Paste link for additional information </li>
                </ul>
            </p>
        </div>
            <div class="answerContainer" id="a412">
                        <label for="answer">Description (Max Length: 500 words)</label>
                        <textarea name="answer" class="form-control q1" rows="6" maxlength="550" placeholder="<?php ?>" required></textarea><br>
                        <label for="doclink">Link to the relevent document</label>
                        <input type="text" name="doclink" class="form-control q2" placeholder="<?php ?>" autocomplete="off" required /><br>
                        <input type="submit" name="submit412" class="btn btn-primary" value="Save Changes" 
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
        </div>
        <!-- Metric 4.1.3 -->
    <form method="post">
        <div id="q413" class="questionContainer">
            <p class="msgContainer" id="msg413"><?php ?></p>
                <img
                    
                    class="fillImage"
                >
            <p class="qName">Q<sub>L</sub>M <br>4.1.3</p>
            <p class="question">
            Availability of general campus facilities and overall ambience.
            </p>
            <i class="fa fa-angle-down iconRight"></i><br>
            <p class="questionPart"><br>
                <ul>
                    <li>Upload Additional information.</li>
                    <li>Paste link for additional information </li>
                </ul>
            </p>
        </div>
            <div class="answerContainer" id="a413">
                        <label for="answer">Description (Max Length: 500 words)</label>
                        <textarea name="answer" class="form-control q1" rows="6" maxlength="550" placeholder="<?php ?>" required></textarea><br>
                        <label for="doclink">Link to the relevent document</label>
                        <input type="text" name="doclink" class="form-control q2" placeholder="<?php ?>" autocomplete="off" required /><br>
                        <input type="submit" name="submit413" class="btn btn-primary" value="Save Changes" 
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
        </div>
        <!-- Metric 4.1.4 -->
        <form method="post" id="f414">
                <div id="q414" class="questionContainer">
                <p class="msgContainer" id="msg414"></p>
                <img
                    <?php 
                    // $get = mysqli_query($connection, "SELECT*FROM ssr_m4_1_4 WHERE username = '$adminname'");
                    // $n = mysqli_num_rows($get);
                    // if($n > 0){
                    //     echo "src='$filled' data-toggle='tooltip' data-placement='bottom' title='$n Filled'";
                    // }else if($n == 0){
                    //     echo "src='$unfilled' data-toggle='tooltip' data-placement='bottom' title='Metric Not Filled'";
                    // }else{
                    //     echo "src='$notapplicableimg' data-toggle='tooltip' data-placement='bottom' title='Metric Not Applicable'";
                    // }
                    ?>
                    class="fillImage"
                >
                <p class="qName">Q<sub>N</sub>M <br>4.1.4</p>
                <p class="question">
                 <b>Average percentage of expenditure excluding salary for
                    infrastructure augmentation during the last five years (INR in
                    Lakhs)</b>
                </p>
                <i class="fa fa-angle-down iconRight"></i>
                <p class="questionPart"><br><br>
                    <ul>
                    <li>Budget allocated for infrastructure augmentation</li><br>
                    <li>Total expenditure for infrastructure augmentation.</li>
                    <li>Audited statement of accounts</li>
                    <li>Total expenditure excluding Salary</li>
                    </ul>
                </p>
                </div>
                    <div class="answerContainer" id="a414">
                        <?php
                            // Code here
                            
                        ?>
                        <table class="table table-bordered" id="table414">
                           <thead>
                                <tr>
                                    <th>Year</th>
                                    <th>Budget allocated
                                        for infrastructure
                                        augmentation</th>
                                    <th>Expenditure for
                                        infrastructure
                                        augmentation</th>
                                    <th>Total expenditure excluding Salary </th>
                                    <th>Expenditure on maintenance of
                                        academic facilities (excluding
                                        salary for human resources) </th>
                                    <th>Expenditure on maintenance of
                                        physical facilities and academic
                                        support facilities (excluding
                                        salary for human resources)</th>
                                    <th>Delete</th>
                                </tr>
                           </thead>
                           <tbody>
                           
                           </tbody>
                        </table>
                        <button type="button" class="AddRowBelow" id="addRow414"><i class="fa fa-plus-circle"></i></button><br>
                        <br>
                        <input type="submit" name="submit414" class="btn btn-primary SubmitBtnForm" value="Save Changes" 
                        <?php
                            // For Enabling or Disabling Button
                            if($dateCheck){
                                echo "disabled";
                            }else{
                                echo "enabled";
                            }
                        ?>
                        />
                    </div>   
        </form>
        <script>
                 // For 241
            var count414 = 0;
            var output = "";
            $("#addRow414").on("click", function(){
                count414++;
                output = "<tr id='row"+count414+"'>";
                output += "<td><input type='text' class='form-control q1' required/></td>";
                output += "<td><input type='number' class='form-control q2' required/></td>";
                output += "<td><input type='number' class='form-control q3' required/></td>";
                output += "<td><input type='number' class='form-control q4' required/></td>";
                output += "<td><input type='number' class='form-control q5' required/></td>";
                output += "<td><input type='number' class='form-control q6' required/></td>";
                output += "<td><button type='button' class='delete414 btn btn-danger' data-row='row"+count414+"'>Delete</button></td>";
                output += "</tr>";
                tableBody = $("#table414 tbody");
                tableBody.append(output);
            });

            $("#table414 tbody").on('click', '.delete414', function(){
                if(confirm("Are you sure you want to delete this data?")){
                    var delete_row = $(this).data('row');
                    $("#"+delete_row).remove();
                    $("#msg414").html("<h5 style='color: red; text-align; center'>Row Deleted!</h5>");
                    console.log("Deleted");
                }else{
                    return false;
                }
            
            });

            $("#f414").on("submit", function(e){

                e.preventDefault();
                e.stopPropagation();
                
                var q1 = [];
                var q2 = [];
                var q3 = [];
                var q4 = [];
                var q5 = [];
                var q6 = [];

                
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
                $('.q5').each(function(){
                    q5.push($(this).val());
                });
                $.ajax({
                    url: "save414.php",
                    method:"POST",
                    data: {q1: q1, q2: q2, q3: q3, q4: q4, q5: q5, q6: q6},
                    success: function(data){
                        $("#msg414").html("<h5 style='color: green; text-align; center'>Data Saved!</h5>");
                        console.log("Saved data");
                    },
                    error: function(){
                        $("#msg414").html("<h5 style='color: red; text-align; center'>Ajax Call Error!</h5>");
                        console.log("Error Saving Data");
                    }
                });
            });
    
    </script>

    <!-- Metric 4.1.5 -->
    <form method="post" id="f415">
                <div id="q415" class="questionContainer ddeOnly" data-toggle="tooltip" data-placement="top" title="Only For Directorate of Distance Education (D.D.E)">
                <p class="msgContainer" id="msg415"></p>
                <img
                    <?php 
                    // $get = mysqli_query($connection, "SELECT*FROM ssr_m4_1_5 WHERE username = '$adminname'");
                    // $n = mysqli_num_rows($get);
                    // if($n > 0){
                    //     echo "src='$filled' data-toggle='tooltip' data-placement='bottom' title='$n Filled'";
                    // }else if($n == 0){
                    //     echo "src='$unfilled' data-toggle='tooltip' data-placement='bottom' title='Metric Not Filled'";
                    // }else{
                    //     echo "src='$notapplicableimg' data-toggle='tooltip' data-placement='bottom' title='Metric Not Applicable'";
                    // }
                    ?>
                    class="fillImage"
                >
                <p class="qName">Q<sub>N</sub>M <br>4.1.5</p>
                <p class="question">
                 <b>Expenditure incurred for infrastructure augmentation of DDE</b>
                    Average percentage of expenditure incurred for infrastructure augmentation of DDE
                    Expenditure incurred for infrastructure augmentation of DDE against total
                    expenditure excluding salary year wise during the last five years (INR in
                    lakhs) 
                </p>
                <i class="fa fa-angle-down iconRight"></i><br><br>
                <p class="questionPart"><br>
                    <ul>
                    <li>Expenditure incurred for infrastructure augmentation year wise for five years</li>
                    <li>Total expenditure of the DDE excluding salary year wise for fiveyears</li>
                    </ul>
                </p>
                </div>
                    <div class="answerContainer" id="a415">
                        <?php
                            // Code here
                            
                        ?>
                        <table class="table table-bordered" id="table415">
                           <thead>
                                <tr>
                                    <th>Year</th>
                                    <th>Budget allocated
                                        for infrastructure
                                        augmentation of DDE</th>
                                    <th>Total expenditure of DDE excluding salary </th>
                                    <th>Delete</th>
                                </tr>
                           </thead>
                           <tbody>
                           
                           </tbody>
                        </table>
                        <button type="button" class="AddRowBelow" id="addRow415"><i class="fa fa-plus-circle"></i></button><br>
                        <br>
                        <input type="submit" name="submit415" class="btn btn-primary SubmitBtnForm" value="Save Changes" 
                        <?php
                            // For Enabling or Disabling Button
                            if($dateCheck){
                                echo "disabled";
                            }else{
                                echo "enabled";
                            }
                        ?>
                        />
                    </div>   
        </form>
        <script>
                 // For 415
            var count415 = 0;
            var output = "";
            $("#addRow415").on("click", function(){
                count415++;
                output = "<tr id='row"+count415+"'>";
                output += "<td><input  type='text' class='form-control q1' required/></td>";
                output += "<td><input  type='number' class='form-control q2' required/></td>";
                output += "<td><input  type='number' class='form-control q3' required/></td>";
                output += "<td><button type='button' class='delete415 btn btn-danger' data-row='row"+count415+"'>Delete</button></td>";
                output += "</tr>";
                tableBody = $("#table415 tbody");
                tableBody.append(output);
            });

            $("#table415 tbody").on('click', '.delete415', function(){
                if(confirm("Are you sure you want to delete this data?")){
                    var delete_row = $(this).data('row');
                    $("#"+delete_row).remove();
                    $("#msg415").html("<h5 style='color: red; text-align; center'>Row Deleted!</h5>");
                    console.log("Deleted");
                }else{
                    return false;
                }
            
            });

            $("#f415").on("submit", function(e){

                e.preventDefault();
                e.stopPropagation();
                
                var q1 = [];
                var q2 = [];
                var q3 = [];
                
                $('.q1').each(function(){
                    q1.push($(this).val());
                });
                $('.q2').each(function(){
                    q2.push($(this).val());
                });
                $('.q3').each(function(){
                    q3.push($(this).val());
                });
               
                $.ajax({
                    url: "save415.php",
                    method:"POST",
                    data: {q1: q1, q2: q2, q3: q3},
                    success: function(data){
                        $("#msg415").html("<h5 style='color: green; text-align; center'>Data Saved!</h5>");
                        console.log("Saved data");
                    },
                    error: function(){
                        $("#msg415").html("<h5 style='color: red; text-align; center'>Ajax Call Error!</h5>");
                        console.log("Error Saving Data");
                    }
                });
            });
    
    </script>

    <!-- Metric 4.1.5 -->
    <form method="post" id="f416">
                <div id="q416" class="questionContainer ddeOnly" data-toggle="tooltip" data-placement="top" title="Only For Directorate of Distance Education (D.D.E)">
                <p class="msgContainer" id="msg416"></p>
                <img
                    <?php 
                    // $get = mysqli_query($connection, "SELECT*FROM ssr_m4_1_6 WHERE username = '$adminname'");
                    // $n = mysqli_num_rows($get);
                    // if($n > 0){
                    //     echo "src='$filled' data-toggle='tooltip' data-placement='bottom' title='$n Filled'";
                    // }else if($n == 0){
                    //     echo "src='$unfilled' data-toggle='tooltip' data-placement='bottom' title='Metric Not Filled'";
                    // }else{
                    //     echo "src='$notapplicableimg' data-toggle='tooltip' data-placement='bottom' title='Metric Not Applicable'";
                    // }
                    ?>
                    class="fillImage"
                >
                <p class="qName">Q<sub>N</sub>M <br>4.1.6</p>
                <p class="question">
                 <b>Average percentage of the expenditure incurred on maintenance of physical facilities and academic support facilities of DDE</b>
                    Expenditure incurred on maintenance of physical facilities and academic
                    support facilities of DDE and total expenditure excluding salary, year wise,
                    during the last five years (INR in lakhs)
                </p>
                <i class="fa fa-angle-down iconRight"></i><br><br>
                <p class="questionPart"><br>
                    <ul>
                    <li>Expenditure incurred on maintenance of physical facilities and academic support facilities of DDE year wise during the five years</li>
                    <li>Total expenditure of the DDE excluding salary year wise for fiveyears</li>
                    </ul>
                </p>
                </div>
                    <div class="answerContainer" id="a416">
                        <?php
                            // Code here
                            
                        ?>
                        <table class="table table-bordered" id="table416">
                           <thead>
                                <tr>
                                    <th>Year</th>
                                    <th>Expenditure on
                                        maintenance of physical
                                        facilities and academic
                                        support facilities of DDE
                                        (INR in lakhs)</th>
                                    <th>Total expenditure of DDE (excluding salary)(INR in lakhs)</th>
                                    <th>Delete</th>
                                </tr>
                           </thead>
                           <tbody>
                           
                           </tbody>
                        </table>
                        <button type="button" class="AddRowBelow" id="addRow416"><i class="fa fa-plus-circle"></i></button><br>
                        <br>
                        <input type="submit" name="submit416" class="btn btn-primary SubmitBtnForm" value="Save Changes" 
                        <?php
                            // For Enabling or Disabling Button
                            if($dateCheck){
                                echo "disabled";
                            }else{
                                echo "enabled";
                            }
                        ?>
                        />
                    </div>   
        </form>
        <script>
                 // For 415
            var count416 = 0;
            var output = "";
            $("#addRow416").on("click", function(){
                count416++;
                output = "<tr id='row"+count416+"'>";
                output += "<td><input  type='text' class='form-control q1' required/></td>";
                output += "<td><input  type='number' class='form-control q2' required/></td>";
                output += "<td><input  type='number' class='form-control q3' required/></td>";
                output += "<td><button type='button' class='delete416 btn btn-danger' data-row='row"+count416+"'>Delete</button></td>";
                output += "</tr>";
                tableBody = $("#table416 tbody");
                tableBody.append(output);
            });

            $("#table416 tbody").on('click', '.delete416', function(){
                if(confirm("Are you sure you want to delete this data?")){
                    var delete_row = $(this).data('row');
                    $("#"+delete_row).remove();
                    $("#msg416").html("<h5 style='color: red; text-align; center'>Row Deleted!</h5>");
                    console.log("Deleted");
                }else{
                    return false;
                }
            
            });

            $("#f416").on("submit", function(e){

                e.preventDefault();
                e.stopPropagation();
                
                var q1 = [];
                var q2 = [];
                var q3 = [];
                
                $('.q1').each(function(){
                    q1.push($(this).val());
                });
                $('.q2').each(function(){
                    q2.push($(this).val());
                });
                $('.q3').each(function(){
                    q3.push($(this).val());
                });
               
                $.ajax({
                    url: "save416.php",
                    method:"POST",
                    data: {q1: q1, q2: q2, q3: q3},
                    success: function(data){
                        $("#msg416").html("<h5 style='color: green; text-align; center'>Data Saved!</h5>");
                        console.log("Saved data");
                    },
                    error: function(){
                        $("#msg416").html("<h5 style='color: red; text-align; center'>Ajax Call Error!</h5>");
                        console.log("Error Saving Data");
                    }
                });
            });
    
            </script>
        <!-- Metric 4.1.7 -->
        <form method="post" id="f417">
        <div id="q417" class="questionContainer ddeOnly" data-toggle="tooltip" data-placement="top" title="Only For Directorate of Distance Education (D.D.E)">
            <p class="msgContainer" id="msg417"><?php ?></p>
                <img
                    
                    class="fillImage"
                >
            <p class="qName">Q<sub>L</sub>M <br>4.1.7</p>
            <p class="question">
            <b>Academic counselling sessions held at DDE</b>
            Regular conduct of academic counselling sessions (for theory and practical courses) at DDE during the preceding academic year
            </p>
            <i class="fa fa-angle-down iconRight"></i><br><br><br>
            <p class="questionPart">
                <ul>
                    <li>Name of Programme.</li>
                    <li>Programme wise enrolment in the current session</li>
                    <li>Total number of programme wise counselling sessions held As per Data Template at DDE</li>
                </ul>
            </p>
        </div>
            <div class="answerContainer" id="a417">
                        <label for="answer">Description (Max Length:1000 words)</label>
                        <textarea name="answer" id="q1_417" class="form-control" rows="6" maxlength="1000" placeholder="<?php ?>" required></textarea><br>
                        <label for="doclink">Link to the relevent document</label>
                        <input type="text" name="doclink" id="q2_417" class="form-control q2" placeholder="<?php ?>" autocomplete="off" required /><br>
                        <input type="submit" name="submit417" class="btn btn-primary" value="Save Changes" 
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
                $("#f417").on("submit", function(e){
                    e.preventDefault();
                    e.stopPropagation();

                    var q1 = $("#q1_417").val();
                    var q2 = $("#q2_417").val();
                    $.ajax({
                        url: "save417.php",
                        method: "POST",
                        data: {q1: q1, q2: q2},
                        success: function(){
                        $("#msg417").html("<h5 style='color: green; text-align; center'>Data Saved!</h5>");
                        console.log("Saved data");
                    },
                    error: function(){
                        $("#msg417").html("<h5 style='color: red; text-align; center'>Ajax Call Error!</h5>");
                        console.log("Error Saving Data");
                    }
                    });
                });
            </script>
        </div><br>
        <div class="criteriaTitle2">
            <h4>4.2 Library as a Learning Resource</h4>
        </div><br>
        <!-- Metric 4.2.1 -->
        <form method="post" id="f421">
        <div id="q421" class="questionContainer">
            <p class="msgContainer" id="msg421"><?php ?></p>
                <img
                    
                    class="fillImage"
                >
            <p class="qName">Q<sub>L</sub>M <br>4.2.1</p>
            <p class="question">
            <b>Library is automated using Integrated Library Management System
                (ILMS) and digitisation facility </b>
                Describe the implementation of the automation of the Library and the
                digitization facility available and used in maximum of 500 words
            </p>
            <i class="fa fa-angle-down iconRight"></i><br><br><br>
            <p class="questionPart">
                <ul>
                    <li>Upload any additional information</li>
                    <li>Paste link for additional information </li>
                </ul>
            </p>
        </div>
            <div class="answerContainer" id="a421">
                        <label for="answer">Description (Max Length:500 words)</label>
                        <textarea name="answer" id="q1_421" class="form-control" rows="6" maxlength="550" placeholder="<?php ?>" required></textarea><br>
                        <label for="doclink">Link to the relevent document</label>
                        <input type="text" name="doclink" id="q2_421" class="form-control q2" placeholder="<?php ?>" autocomplete="off" required /><br>
                        <input type="submit" name="submit421" class="btn btn-primary" value="Save Changes" 
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
                $("#f421").on("submit", function(e){
                    e.preventDefault();
                    e.stopPropagation();

                    var q1 = $("#q1_421").val();
                    var q2 = $("#q2_421").val();
                    $.ajax({
                        url: "save421.php",
                        method: "POST",
                        data: {q1: q1, q2: q2},
                        success: function(){
                        $("#msg421").html("<h5 style='color: green; text-align; center'>Data Saved!</h5>");
                        console.log("Saved data");
                    },
                    error: function(){
                        $("#msg421").html("<h5 style='color: red; text-align; center'>Ajax Call Error!</h5>");
                        console.log("Error Saving Data");
                    }
                    });
                });
            </script>
        </div>

        <!-- Metric 4.2.2 -->
        <form method="post" id="f422">
                <div id="q422" class="questionContainer">
                <p class="msgContainer" id="msg422"></p>
                <img
                    <?php 
                    // $get = mysqli_query($connection, "SELECT*FROM ssr_m4_2_2 WHERE username = '$adminname'");
                    // $n = mysqli_num_rows($get);
                    // if($n > 0){
                    //     echo "src='$filled' data-toggle='tooltip' data-placement='bottom' title='$n Filled'";
                    // }else if($n == 0){
                    //     echo "src='$unfilled' data-toggle='tooltip' data-placement='bottom' title='Metric Not Filled'";
                    // }else{
                    //     echo "src='$notapplicableimg' data-toggle='tooltip' data-placement='bottom' title='Metric Not Applicable'";
                    // }
                    ?>
                    class="fillImage"
                >
                <p class="qName">Q<sub>N</sub>M <br>4.2.2</p>
                <p class="question">
                 <b>Institution has subscription for e-Library resources</b>
                </p>
                <i class="fa fa-angle-down iconRight"></i>
                <p class="questionPart"><br><br>
                <b>Library has regular subscription for the following:</b><br>
                    <b>1. e – journals</b><br>
                    <b>2. e-books</b><br>
                    <b>3. e-ShodhSindhu</b><br>
                    <b>4. Shodhganga </b>
                    <b>Databases</b>
                </p>
                </div>
                    <div class="answerContainer" id="a422">
                        <?php
                            // Code here
                            
                        ?>
                        <table class="table table-bordered" id="table422">
                           <thead>
                           <form method="POST" id="f422_1">
                                <tr>
                                    <th colspan="6" style="text-align: center;">
                                        <select class="form-control" id="select422" required>
                                            <option value="" disabled selected>Select</option>
                                            <option value="A. Any 4 or more of the above">A. Any 4 or more of the above</option>
                                            <option value="B. Any 3 of the above">B. Any 3 of the above</option>
                                            <option value="C. Any 2 of the above">C. Any 2 of the above</option>
                                            <option value="D. Any 1 of the above">D. Any 1 of the above</option>
                                            <option value="E. None of the above">E. None of the above</option>
                                        </select>
                                    </th>
                                </tr>
                                <tr>
                                    <th colspan="6" style="text-align: center;">YEAR 1</th>
                                </tr>
                                <tr>
                                    <th>Library resources</th>
                                    <th>If yes, details of memberships/subscriptions</th>
                                    <th>Expenditure on subscription to e-journals, ebooks (INR in lakhs)</th>
                                    <th>Expenditure on subscription to other eresources (INR in lakhs)</th>
                                    <th>Total Library Expenditure</th>
                                    <th>Link to the relevant document</th>
                                </tr>
                                <tr>
                                    <th scope="row">Books <input type="hidden" class="form-control qh" value="1"/></th>
                                    <td><input type="text" class="form-control q1" /></td>
                                    <td><input type="number" class="form-control q2" /></td>
                                    <td><input type="number" class="form-control q3" /></td>
                                    <td><input type="number" class="form-control q4" /></td>
                                    <td><input type="text" class="form-control q5" /></td>
                                </tr>
                                <tr>
                                    <th scope="row">Journals</th>
                                    <td><input type="text" class="form-control q6" /></td>
                                    <td><input type="number" class="form-control q7" /></td>
                                    <td><input type="number" class="form-control q8" /></td>
                                    <td><input type="number" class="form-control q9" /></td>
                                    <td><input type="text" class="form-control q10" /></td>
                                </tr>
                                <tr>
                                    <th scope="row">e-Journals</th>
                                    <td><input type="text" class="form-control q11" /></td>
                                    <td><input type="number" class="form-control q12" /></td>
                                    <td><input type="number" class="form-control q13" /></td>
                                    <td><input type="number" class="form-control q14" /></td>
                                    <td><input type="text" class="form-control q15" /></td>
                                </tr>
                                <tr>
                                    <th scope="row">e- Books</th>
                                    <td><input type="text" class="form-control q16" /></td>
                                    <td><input type="number" class="form-control q17" /></td>
                                    <td><input type="number" class="form-control q18" /></td>
                                    <td><input type="number" class="form-control q19" /></td>
                                    <td><input type="text" class="form-control q20" /></td>
                                </tr>
                                <tr>
                                    <th scope="row">e-ShodhSindhu</th>
                                    <td><input type="text" class="form-control q21" /></td>
                                    <td><input type="number" class="form-control q22" /></td>
                                    <td><input type="number" class="form-control q23" /></td>
                                    <td><input type="number" class="form-control q24" /></td>
                                    <td><input type="text" class="form-control q25" /></td>
                                </tr>
                                <tr>
                                    <th scope="row">Shodhganga</th>
                                    <td><input type="text" class="form-control q26" /></td>
                                    <td><input type="number" class="form-control q27" /></td>
                                    <td><input type="number" class="form-control q28" /></td>
                                    <td><input type="number" class="form-control q29" /></td>
                                    <td><input type="text" class="form-control q30" /></td>
                                </tr>
                                <tr>
                                    <th scope="row">Databases</th>
                                    <td><input type="text" class="form-control q31" /></td>
                                    <td><input type="number" class="form-control q32" /></td>
                                    <td><input type="number" class="form-control q33" /></td>
                                    <td><input type="number" class="form-control q34" /></td>
                                    <td><input type="text" class="form-control q35" /></td>
                                </tr>
                                <tr>
                                    <td colspan="6" style="text-align: center;"><input type="submit" class="btn btn-primary"  value="Submit"  <?php
                            // For Enabling or Disabling Button
                            if($dateCheck){
                                echo "disabled";
                            }else{
                                echo "enabled";
                            }
                        ?>/></td>
                                </tr>
                                </form>

                                <form method="POST" id="f422_2">
                                <tr>
                                    <th colspan="6" style="text-align: center;">YEAR 2</th>
                                </tr>
                                <tr>
                                    <th>Library resources</th>
                                    <th>If yes, details of memberships/subscriptions</th>
                                    <th>Expenditure on subscription to e-journals, ebooks (INR in lakhs)</th>
                                    <th>Expenditure on subscription to other eresources (INR in lakhs)</th>
                                    <th>Total Library Expenditure</th>
                                    <th>Link to the relevant document</th>
                                </tr>
                                <tr>
                                    <th scope="row">Books <input type="hidden" class="form-control qh" value="2"/></th>
                                    <td><input type="text" class="form-control q1" /></td>
                                    <td><input type="number" class="form-control q2" /></td>
                                    <td><input type="number" class="form-control q3" /></td>
                                    <td><input type="number" class="form-control q4" /></td>
                                    <td><input type="text" class="form-control q5" /></td>
                                </tr>
                                <tr>
                                    <th scope="row">Journals</th>
                                    <td><input type="text" class="form-control q6" /></td>
                                    <td><input type="number" class="form-control q7" /></td>
                                    <td><input type="number" class="form-control q8" /></td>
                                    <td><input type="number" class="form-control q9" /></td>
                                    <td><input type="text" class="form-control q10" /></td>
                                </tr>
                                <tr>
                                    <th scope="row">e-Journals</th>
                                    <td><input type="text" class="form-control q11" /></td>
                                    <td><input type="number" class="form-control q12" /></td>
                                    <td><input type="number" class="form-control q13" /></td>
                                    <td><input type="number" class="form-control q14" /></td>
                                    <td><input type="text" class="form-control q15" /></td>
                                </tr>
                                <tr>
                                    <th scope="row">e- Books</th>
                                    <td><input type="text" class="form-control q16" /></td>
                                    <td><input type="number" class="form-control q17" /></td>
                                    <td><input type="number" class="form-control q18" /></td>
                                    <td><input type="number" class="form-control q19" /></td>
                                    <td><input type="text" class="form-control q20" /></td>
                                </tr>
                                <tr>
                                    <th scope="row">e-ShodhSindhu</th>
                                    <td><input type="text" class="form-control q21" /></td>
                                    <td><input type="number" class="form-control q22" /></td>
                                    <td><input type="number" class="form-control q23" /></td>
                                    <td><input type="number" class="form-control q24" /></td>
                                    <td><input type="text" class="form-control q25" /></td>
                                </tr>
                                <tr>
                                    <th scope="row">Shodhganga</th>
                                    <td><input type="text" class="form-control q26" /></td>
                                    <td><input type="number" class="form-control q27" /></td>
                                    <td><input type="number" class="form-control q28" /></td>
                                    <td><input type="number" class="form-control q29" /></td>
                                    <td><input type="text" class="form-control q30" /></td>
                                </tr>
                                <tr>
                                    <th scope="row">Databases</th>
                                    <td><input type="text" class="form-control q31" /></td>
                                    <td><input type="number" class="form-control q32" /></td>
                                    <td><input type="number" class="form-control q33" /></td>
                                    <td><input type="number" class="form-control q34" /></td>
                                    <td><input type="text" class="form-control q35" /></td>
                                </tr>
                                <tr>
                                    <td colspan="6" style="text-align: center;"><input type="submit" class="btn btn-primary"  value="Submit"  <?php
                            // For Enabling or Disabling Button
                            if($dateCheck){
                                echo "disabled";
                            }else{
                                echo "enabled";
                            }
                        ?>/></td>
                                </tr>
                                </form>


                                <form method="POST" id="f422_3">
                                <tr>
                                    <th colspan="6" style="text-align: center;">YEAR 3</th>
                                </tr>
                                <tr>
                                    <th>Library resources</th>
                                    <th>If yes, details of memberships/subscriptions</th>
                                    <th>Expenditure on subscription to e-journals, ebooks (INR in lakhs)</th>
                                    <th>Expenditure on subscription to other eresources (INR in lakhs)</th>
                                    <th>Total Library Expenditure</th>
                                    <th>Link to the relevant document</th>
                                </tr>
                                <tr>
                                    <th scope="row">Books <input type="hidden" class="form-control qh" value="3"/></th>
                                    <td><input type="text" class="form-control q1" /></td>
                                    <td><input type="number" class="form-control q2" /></td>
                                    <td><input type="number" class="form-control q3" /></td>
                                    <td><input type="number" class="form-control q4" /></td>
                                    <td><input type="text" class="form-control q5" /></td>
                                </tr>
                                <tr>
                                    <th scope="row">Journals</th>
                                    <td><input type="text" class="form-control q6" /></td>
                                    <td><input type="number" class="form-control q7" /></td>
                                    <td><input type="number" class="form-control q8" /></td>
                                    <td><input type="number" class="form-control q9" /></td>
                                    <td><input type="text" class="form-control q10" /></td>
                                </tr>
                                <tr>
                                    <th scope="row">e-Journals</th>
                                    <td><input type="text" class="form-control q11" /></td>
                                    <td><input type="number" class="form-control q12" /></td>
                                    <td><input type="number" class="form-control q13" /></td>
                                    <td><input type="number" class="form-control q14" /></td>
                                    <td><input type="text" class="form-control q15" /></td>
                                </tr>
                                <tr>
                                    <th scope="row">e- Books</th>
                                    <td><input type="text" class="form-control q16" /></td>
                                    <td><input type="number" class="form-control q17" /></td>
                                    <td><input type="number" class="form-control q18" /></td>
                                    <td><input type="number" class="form-control q19" /></td>
                                    <td><input type="text" class="form-control q20" /></td>
                                </tr>
                                <tr>
                                    <th scope="row">e-ShodhSindhu</th>
                                    <td><input type="text" class="form-control q21" /></td>
                                    <td><input type="number" class="form-control q22" /></td>
                                    <td><input type="number" class="form-control q23" /></td>
                                    <td><input type="number" class="form-control q24" /></td>
                                    <td><input type="text" class="form-control q25" /></td>
                                </tr>
                                <tr>
                                    <th scope="row">Shodhganga</th>
                                    <td><input type="text" class="form-control q26" /></td>
                                    <td><input type="number" class="form-control q27" /></td>
                                    <td><input type="number" class="form-control q28" /></td>
                                    <td><input type="number" class="form-control q29" /></td>
                                    <td><input type="text" class="form-control q30" /></td>
                                </tr>
                                <tr>
                                    <th scope="row">Databases</th>
                                    <td><input type="text" class="form-control q31" /></td>
                                    <td><input type="number" class="form-control q32" /></td>
                                    <td><input type="number" class="form-control q33" /></td>
                                    <td><input type="number" class="form-control q34" /></td>
                                    <td><input type="text" class="form-control q35" /></td>
                                </tr>
                                <tr>
                                    <td colspan="6" style="text-align: center;"><input type="submit" class="btn btn-primary"  value="Submit"  <?php
                            // For Enabling or Disabling Button
                            if($dateCheck){
                                echo "disabled";
                            }else{
                                echo "enabled";
                            }
                        ?>/></td>
                                </tr>
                                </form>


                                <form method="POST" id="f422_4">
                                <tr>
                                    <th colspan="6" style="text-align: center;">YEAR 4</th>
                                </tr>
                                <tr>
                                    <th>Library resources</th>
                                    <th>If yes, details of memberships/subscriptions</th>
                                    <th>Expenditure on subscription to e-journals, ebooks (INR in lakhs)</th>
                                    <th>Expenditure on subscription to other eresources (INR in lakhs)</th>
                                    <th>Total Library Expenditure</th>
                                    <th>Link to the relevant document</th>
                                </tr>
                                <tr>
                                    <th scope="row">Books <input type="hidden" class="form-control qh" value="4"/></th>
                                    <td><input type="text" class="form-control q1" /></td>
                                    <td><input type="number" class="form-control q2" /></td>
                                    <td><input type="number" class="form-control q3" /></td>
                                    <td><input type="number" class="form-control q4" /></td>
                                    <td><input type="text" class="form-control q5" /></td>
                                </tr>
                                <tr>
                                    <th scope="row">Journals</th>
                                    <td><input type="text" class="form-control q6" /></td>
                                    <td><input type="number" class="form-control q7" /></td>
                                    <td><input type="number" class="form-control q8" /></td>
                                    <td><input type="number" class="form-control q9" /></td>
                                    <td><input type="text" class="form-control q10" /></td>
                                </tr>
                                <tr>
                                    <th scope="row">e-Journals</th>
                                    <td><input type="text" class="form-control q11" /></td>
                                    <td><input type="number" class="form-control q12" /></td>
                                    <td><input type="number" class="form-control q13" /></td>
                                    <td><input type="number" class="form-control q14" /></td>
                                    <td><input type="text" class="form-control q15" /></td>
                                </tr>
                                <tr>
                                    <th scope="row">e- Books</th>
                                    <td><input type="text" class="form-control q16" /></td>
                                    <td><input type="number" class="form-control q17" /></td>
                                    <td><input type="number" class="form-control q18" /></td>
                                    <td><input type="number" class="form-control q19" /></td>
                                    <td><input type="text" class="form-control q20" /></td>
                                </tr>
                                <tr>
                                    <th scope="row">e-ShodhSindhu</th>
                                    <td><input type="text" class="form-control q21" /></td>
                                    <td><input type="number" class="form-control q22" /></td>
                                    <td><input type="number" class="form-control q23" /></td>
                                    <td><input type="number" class="form-control q24" /></td>
                                    <td><input type="text" class="form-control q25" /></td>
                                </tr>
                                <tr>
                                    <th scope="row">Shodhganga</th>
                                    <td><input type="text" class="form-control q26" /></td>
                                    <td><input type="number" class="form-control q27" /></td>
                                    <td><input type="number" class="form-control q28" /></td>
                                    <td><input type="number" class="form-control q29" /></td>
                                    <td><input type="text" class="form-control q30" /></td>
                                </tr>
                                <tr>
                                    <th scope="row">Databases</th>
                                    <td><input type="text" class="form-control q31" /></td>
                                    <td><input type="number" class="form-control q32" /></td>
                                    <td><input type="number" class="form-control q33" /></td>
                                    <td><input type="number" class="form-control q34" /></td>
                                    <td><input type="text" class="form-control q35" /></td>
                                </tr>
                                <tr>
                                    <td colspan="6" style="text-align: center;"><input type="submit" class="btn btn-primary"  value="Submit"  <?php
                            // For Enabling or Disabling Button
                            if($dateCheck){
                                echo "disabled";
                            }else{
                                echo "enabled";
                            }
                        ?>/></td>
                                </tr>
                                </form>

                                <form method="POST" id="f422_5">
                                <tr>
                                    <th colspan="6" style="text-align: center;">YEAR 5</th>
                                </tr>
                                <tr>
                                    <th>Library resources</th>
                                    <th>If yes, details of memberships/subscriptions</th>
                                    <th>Expenditure on subscription to e-journals, ebooks (INR in lakhs)</th>
                                    <th>Expenditure on subscription to other eresources (INR in lakhs)</th>
                                    <th>Total Library Expenditure</th>
                                    <th>Link to the relevant document</th>
                                </tr>
                                <tr>
                                    <th scope="row">Books <input type="hidden" class="form-control qh" value="5"/></th>
                                    <td><input type="text" class="form-control q1" /></td>
                                    <td><input type="number" class="form-control q2" /></td>
                                    <td><input type="number" class="form-control q3" /></td>
                                    <td><input type="number" class="form-control q4" /></td>
                                    <td><input type="text" class="form-control q5" /></td>
                                </tr>
                                <tr>
                                    <th scope="row">Journals</th>
                                    <td><input type="text" class="form-control q6" /></td>
                                    <td><input type="number" class="form-control q7" /></td>
                                    <td><input type="number" class="form-control q8" /></td>
                                    <td><input type="number" class="form-control q9" /></td>
                                    <td><input type="text" class="form-control q10" /></td>
                                </tr>
                                <tr>
                                    <th scope="row">e-Journals</th>
                                    <td><input type="text" class="form-control q11" /></td>
                                    <td><input type="number" class="form-control q12" /></td>
                                    <td><input type="number" class="form-control q13" /></td>
                                    <td><input type="number" class="form-control q14" /></td>
                                    <td><input type="text" class="form-control q15" /></td>
                                </tr>
                                <tr>
                                    <th scope="row">e- Books</th>
                                    <td><input type="text" class="form-control q16" /></td>
                                    <td><input type="number" class="form-control q17" /></td>
                                    <td><input type="number" class="form-control q18" /></td>
                                    <td><input type="number" class="form-control q19" /></td>
                                    <td><input type="text" class="form-control q20" /></td>
                                </tr>
                                <tr>
                                    <th scope="row">e-ShodhSindhu</th>
                                    <td><input type="text" class="form-control q21" /></td>
                                    <td><input type="number" class="form-control q22" /></td>
                                    <td><input type="number" class="form-control q23" /></td>
                                    <td><input type="number" class="form-control q24" /></td>
                                    <td><input type="text" class="form-control q25" /></td>
                                </tr>
                                <tr>
                                    <th scope="row">Shodhganga</th>
                                    <td><input type="text" class="form-control q26" /></td>
                                    <td><input type="number" class="form-control q27" /></td>
                                    <td><input type="number" class="form-control q28" /></td>
                                    <td><input type="number" class="form-control q29" /></td>
                                    <td><input type="text" class="form-control q30" /></td>
                                </tr>
                                <tr>
                                    <th scope="row">Databases</th>
                                    <td><input type="text" class="form-control q31" /></td>
                                    <td><input type="number" class="form-control q32" /></td>
                                    <td><input type="number" class="form-control q33" /></td>
                                    <td><input type="number" class="form-control q34" /></td>
                                    <td><input type="text" class="form-control q35" /></td>
                                </tr>
                                <tr>
                                    <td colspan="6" style="text-align: center;"><input type="submit" class="btn btn-primary"  value="Submit"  <?php
                            // For Enabling or Disabling Button
                            if($dateCheck){
                                echo "disabled";
                            }else{
                                echo "enabled";
                            }
                        ?>/></td>
                                </tr>
                                </form>
                           </thead>
                           <tbody>
                           
                           </tbody>
                        </table>
                    </div>   
        </form>
        <script>
            $("#f422_1").on("submit", function(e){

                e.preventDefault();
                e.stopPropagation();
            
                $.ajax({
                    url: "save422.php",
                    method:"POST",
                    data: {q1: q1, q2: q2, q3: q3, q4: q4, q5: q5, q6: q6},
                    success: function(data){
                        $("#msg414").html("<h5 style='color: green; text-align; center'>Data Saved!</h5>");
                        console.log("Saved data");
                    },
                    error: function(){
                        $("#msg414").html("<h5 style='color: red; text-align; center'>Ajax Call Error!</h5>");
                        console.log("Error Saving Data");
                    }
                });
            });
    
        </script>
        <!-- Metric 4.2.3 -->
        <form method="post" id="f423">
                <div id="q423" class="questionContainer">
                <p class="msgContainer" id="msg423"></p>
                <img
                    <?php 
                    // $get = mysqli_query($connection, "SELECT*FROM ssr_m4_2_2 WHERE username = '$adminname'");
                    // $n = mysqli_num_rows($get);
                    // if($n > 0){
                    //     echo "src='$filled' data-toggle='tooltip' data-placement='bottom' title='$n Filled'";
                    // }else if($n == 0){
                    //     echo "src='$unfilled' data-toggle='tooltip' data-placement='bottom' title='Metric Not Filled'";
                    // }else{
                    //     echo "src='$notapplicableimg' data-toggle='tooltip' data-placement='bottom' title='Metric Not Applicable'";
                    // }
                    ?>
                    class="fillImage"
                >
                <p class="qName">Q<sub>N</sub>M <br>4.2.3</p>
                <p class="question">
                 <b>Annual expenditure for purchase of books/e-books and subscription to journals/e-journals year wise during the last five years (INR in Lakhs)</b>
                </p>
                <i class="fa fa-angle-down iconRight"></i>
                </div>
                    <div class="answerContainer" id="a423">
                        <?php
                            // Code here
                            
                        ?>
                        <table class="table table-bordered" id="table423">
                           <thead>
                           <form method="POST" id="f423_1">
                                <tr>
                                    <th colspan="6" style="text-align: center;">YEAR 1</th>
                                </tr>
                                <tr>
                                    <th>Library resources</th>
                                    <th>If yes, details of memberships/subscriptions</th>
                                    <th>Expenditure on subscription to e-journals, ebooks (INR in lakhs)</th>
                                    <th>Expenditure on subscription to other eresources (INR in lakhs)</th>
                                    <th>Total Library Expenditure</th>
                                    <th>Link to the relevant document</th>
                                </tr>
                                <tr>
                                    <th scope="row">Books <input type="hidden" class="form-control qh" value="1"/></th>
                                    <td><input type="text" class="form-control" name="q1_Y1" /></td>
                                    <td><input type="number" class="form-control" name="q2_Y1"  /></td>
                                    <td><input type="number" class="form-control q3" name="q3_Y1"  /></td>
                                    <td><input type="number" class="form-control q4"  name="q4_Y1" /></td>
                                    <td><input type="text" class="form-control q5"  name="q5_Y1" /></td>
                                </tr>
                                <tr>
                                    <th scope="row">Journals</th>
                                    <td><input type="text" class="form-control q6"  name="q6_Y1"  /></td>
                                    <td><input type="number" class="form-control q7"  name="q7_Y1" /></td>
                                    <td><input type="number" class="form-control q8"  name="q8_Y1" /></td>
                                    <td><input type="number" class="form-control q9"  name="q9_Y1" /></td>
                                    <td><input type="text" class="form-control q10"  name="q10_Y1" /></td>
                                </tr>
                                <tr>
                                    <th scope="row">e-Journals</th>
                                    <td><input type="text" class="form-control q11"  name="q11_Y1" /></td>
                                    <td><input type="number" class="form-control q12"  name="q12_Y1" /></td>
                                    <td><input type="number" class="form-control q13"  name="q13_Y1" /></td>
                                    <td><input type="number" class="form-control q14"  name="q14_Y1" /></td>
                                    <td><input type="text" class="form-control q15"  name="q15_Y1" /></td>
                                </tr>
                                <tr>
                                    <th scope="row">e- Books</th>
                                    <td><input type="text" class="form-control q16" name="q16_Y1"  /></td>
                                    <td><input type="number" class="form-control q17"  name="q17_Y1" /></td>
                                    <td><input type="number" class="form-control q18"  name="q18_Y1" /></td>
                                    <td><input type="number" class="form-control q19"  name="q19_Y1" /></td>
                                    <td><input type="text" class="form-control q20"  name="q20_Y1" /></td>
                                </tr>
                                <tr>
                                    <th scope="row">e-ShodhSindhu</th>
                                    <td><input type="text" class="form-control q21"  name="q21_Y1" /></td>
                                    <td><input type="number" class="form-control q22"  name="q22_Y1" /></td>
                                    <td><input type="number" class="form-control q23"  name="q23_Y1" /></td>
                                    <td><input type="number" class="form-control q24"  name="q24_Y1" /></td>
                                    <td><input type="text" class="form-control q25"  name="q25_Y1" /></td>
                                </tr>
                                <tr>
                                    <th scope="row">Shodhganga</th>
                                    <td><input type="text" class="form-control q26"  name="q26_Y1" /></td>
                                    <td><input type="number" class="form-control q27"  name="q27_Y1" /></td>
                                    <td><input type="number" class="form-control q28"  name="q28_Y1" /></td>
                                    <td><input type="number" class="form-control q29"  name="q29_Y1" /></td>
                                    <td><input type="text" class="form-control q30"  name="q30_Y1" /></td>
                                </tr>
                                <tr>
                                    <th scope="row">Databases</th>
                                    <td><input type="text" class="form-control q31"  name="q31_Y1" /></td>
                                    <td><input type="number" class="form-control q32"  name="q32_Y1" /></td>
                                    <td><input type="number" class="form-control q33"  name="q33_Y1" /></td>
                                    <td><input type="number" class="form-control q34"  name="q34_Y1" /></td>
                                    <td><input type="text" class="form-control q35"  name="q35_Y1" /></td>
                                </tr>
                                <tr>
                                    <td colspan="6" style="text-align: center;"><input type="submit" class="btn btn-primary"  value="Submit"  <?php
                            // For Enabling or Disabling Button
                            if($dateCheck){
                                echo "disabled";
                            }else{
                                echo "enabled";
                            }
                        ?>/></td>
                                </tr>
                                </form>

                                <form method="POST" id="f422_2">
                                <tr>
                                    <th colspan="6" style="text-align: center;">YEAR 2</th>
                                </tr>
                                <tr>
                                    <th>Library resources</th>
                                    <th>If yes, details of memberships/subscriptions</th>
                                    <th>Expenditure on subscription to e-journals, ebooks (INR in lakhs)</th>
                                    <th>Expenditure on subscription to other eresources (INR in lakhs)</th>
                                    <th>Total Library Expenditure</th>
                                    <th>Link to the relevant document</th>
                                </tr>
                                <tr>
                                    <th>Library resources</th>
                                    <th>If yes, details of memberships/subscriptions</th>
                                    <th>Expenditure on subscription to e-journals, ebooks (INR in lakhs)</th>
                                    <th>Expenditure on subscription to other eresources (INR in lakhs)</th>
                                    <th>Total Library Expenditure</th>
                                    <th>Link to the relevant document</th>
                                </tr>
                                <tr>
                                    <th scope="row">Books <input type="hidden" class="form-control qh" value="1"/></th>
                                    <td><input type="text" class="form-control" name="q1_Y2" /></td>
                                    <td><input type="number" class="form-control" name="q2_Y2"  /></td>
                                    <td><input type="number" class="form-control q3" name="q3_Y2"  /></td>
                                    <td><input type="number" class="form-control q4"  name="q4_Y2" /></td>
                                    <td><input type="text" class="form-control q5"  name="q5_Y2" /></td>
                                </tr>
                                <tr>
                                    <th scope="row">Journals</th>
                                    <td><input type="text" class="form-control q6"  name="q6_Y2"  /></td>
                                    <td><input type="number" class="form-control q7"  name="q7_Y2" /></td>
                                    <td><input type="number" class="form-control q8"  name="q8_Y2" /></td>
                                    <td><input type="number" class="form-control q9"  name="q9_Y2" /></td>
                                    <td><input type="text" class="form-control q10"  name="q10_Y2" /></td>
                                </tr>
                                <tr>
                                    <th scope="row">e-Journals</th>
                                    <td><input type="text" class="form-control q11"  name="q11_Y2" /></td>
                                    <td><input type="number" class="form-control q12"  name="q12_Y2" /></td>
                                    <td><input type="number" class="form-control q13"  name="q13_Y2" /></td>
                                    <td><input type="number" class="form-control q14"  name="q14_Y2" /></td>
                                    <td><input type="text" class="form-control q15"  name="q15_Y2" /></td>
                                </tr>
                                <tr>
                                    <th scope="row">e- Books</th>
                                    <td><input type="text" class="form-control q16" name="q16_Y2"  /></td>
                                    <td><input type="number" class="form-control q17"  name="q17_Y2" /></td>
                                    <td><input type="number" class="form-control q18"  name="q18_Y2" /></td>
                                    <td><input type="number" class="form-control q19"  name="q19_Y2" /></td>
                                    <td><input type="text" class="form-control q20"  name="q20_Y2" /></td>
                                </tr>
                                <tr>
                                    <th scope="row">e-ShodhSindhu</th>
                                    <td><input type="text" class="form-control q21"  name="q21_Y2" /></td>
                                    <td><input type="number" class="form-control q22"  name="q22_Y2" /></td>
                                    <td><input type="number" class="form-control q23"  name="q23_Y2" /></td>
                                    <td><input type="number" class="form-control q24"  name="q24_Y2" /></td>
                                    <td><input type="text" class="form-control q25"  name="q25_Y2" /></td>
                                </tr>
                                <tr>
                                    <th scope="row">Shodhganga</th>
                                    <td><input type="text" class="form-control q26"  name="q26_Y2" /></td>
                                    <td><input type="number" class="form-control q27"  name="q27_Y2" /></td>
                                    <td><input type="number" class="form-control q28"  name="q28_Y2" /></td>
                                    <td><input type="number" class="form-control q29"  name="q29_Y2" /></td>
                                    <td><input type="text" class="form-control q30"  name="q30_Y2" /></td>
                                </tr>
                                <tr>
                                    <th scope="row">Databases</th>
                                    <td><input type="text" class="form-control q31"  name="q31_Y2" /></td>
                                    <td><input type="number" class="form-control q32"  name="q32_Y2" /></td>
                                    <td><input type="number" class="form-control q33"  name="q33_Y2" /></td>
                                    <td><input type="number" class="form-control q34"  name="q34_Y2" /></td>
                                    <td><input type="text" class="form-control q35"  name="q35_Y2" /></td>
                                </tr>
                                <tr>
                                    <td colspan="6" style="text-align: center;"><input type="submit" class="btn btn-primary"  value="Submit"  <?php
                            // For Enabling or Disabling Button
                            if($dateCheck){
                                echo "disabled";
                            }else{
                                echo "enabled";
                            }
                        ?>/></td>
                                </tr>
                                </form>


                                <form method="POST" id="f422_3">
                                <tr>
                                    <th colspan="6" style="text-align: center;">YEAR 3</th>
                                </tr>
                                <tr>
                                    <th>Library resources</th>
                                    <th>If yes, details of memberships/subscriptions</th>
                                    <th>Expenditure on subscription to e-journals, ebooks (INR in lakhs)</th>
                                    <th>Expenditure on subscription to other eresources (INR in lakhs)</th>
                                    <th>Total Library Expenditure</th>
                                    <th>Link to the relevant document</th>
                                </tr>
                                <tr>
                                    <th>Library resources</th>
                                    <th>If yes, details of memberships/subscriptions</th>
                                    <th>Expenditure on subscription to e-journals, ebooks (INR in lakhs)</th>
                                    <th>Expenditure on subscription to other eresources (INR in lakhs)</th>
                                    <th>Total Library Expenditure</th>
                                    <th>Link to the relevant document</th>
                                </tr>
                                <tr>
                                    <th scope="row">Books <input type="hidden" class="form-control qh" value="1"/></th>
                                    <td><input type="text" class="form-control" name="q1_Y3" /></td>
                                    <td><input type="number" class="form-control" name="q2_Y3"  /></td>
                                    <td><input type="number" class="form-control q3" name="q3_Y3"  /></td>
                                    <td><input type="number" class="form-control q4"  name="q4_Y3" /></td>
                                    <td><input type="text" class="form-control q5"  name="q5_Y3" /></td>
                                </tr>
                                <tr>
                                    <th scope="row">Journals</th>
                                    <td><input type="text" class="form-control q6"  name="q6_Y3"  /></td>
                                    <td><input type="number" class="form-control q7"  name="q7_Y3" /></td>
                                    <td><input type="number" class="form-control q8"  name="q8_Y3" /></td>
                                    <td><input type="number" class="form-control q9"  name="q9_Y3" /></td>
                                    <td><input type="text" class="form-control q10"  name="q10_Y3" /></td>
                                </tr>
                                <tr>
                                    <th scope="row">e-Journals</th>
                                    <td><input type="text" class="form-control q11"  name="q11_Y3" /></td>
                                    <td><input type="number" class="form-control q12"  name="q12_Y3" /></td>
                                    <td><input type="number" class="form-control q13"  name="q13_Y3" /></td>
                                    <td><input type="number" class="form-control q14"  name="q14_Y3" /></td>
                                    <td><input type="text" class="form-control q15"  name="q15_Y3" /></td>
                                </tr>
                                <tr>
                                    <th scope="row">e- Books</th>
                                    <td><input type="text" class="form-control q16" name="q16_Y3"  /></td>
                                    <td><input type="number" class="form-control q17"  name="q17_Y3" /></td>
                                    <td><input type="number" class="form-control q18"  name="q18_Y3" /></td>
                                    <td><input type="number" class="form-control q19"  name="q19_Y3" /></td>
                                    <td><input type="text" class="form-control q20"  name="q20_Y3" /></td>
                                </tr>
                                <tr>
                                    <th scope="row">e-ShodhSindhu</th>
                                    <td><input type="text" class="form-control q21"  name="q21_Y3" /></td>
                                    <td><input type="number" class="form-control q22"  name="q22_Y3" /></td>
                                    <td><input type="number" class="form-control q23"  name="q23_Y3" /></td>
                                    <td><input type="number" class="form-control q24"  name="q24_Y3" /></td>
                                    <td><input type="text" class="form-control q25"  name="q25_Y3" /></td>
                                </tr>
                                <tr>
                                    <th scope="row">Shodhganga</th>
                                    <td><input type="text" class="form-control q26"  name="q26_Y3" /></td>
                                    <td><input type="number" class="form-control q27"  name="q27_Y3" /></td>
                                    <td><input type="number" class="form-control q28"  name="q28_Y3" /></td>
                                    <td><input type="number" class="form-control q29"  name="q29_Y3" /></td>
                                    <td><input type="text" class="form-control q30"  name="q30_Y3" /></td>
                                </tr>
                                <tr>
                                    <th scope="row">Databases</th>
                                    <td><input type="text" class="form-control q31"  name="q31_Y3" /></td>
                                    <td><input type="number" class="form-control q32"  name="q32_Y3" /></td>
                                    <td><input type="number" class="form-control q33"  name="q33_Y3" /></td>
                                    <td><input type="number" class="form-control q34"  name="q34_Y3" /></td>
                                    <td><input type="text" class="form-control q35"  name="q35_Y3" /></td>
                                </tr>
                                <tr>
                                    <td colspan="6" style="text-align: center;"><input type="submit" class="btn btn-primary"  value="Submit"  <?php
                            // For Enabling or Disabling Button
                            if($dateCheck){
                                echo "disabled";
                            }else{
                                echo "enabled";
                            }
                        ?>/></td>
                                </tr>
                                </form>


                                <form method="POST" id="f422_4">
                                <tr>
                                    <th colspan="6" style="text-align: center;">YEAR 4</th>
                                </tr>
                                <tr>
                                    <th>Library resources</th>
                                    <th>If yes, details of memberships/subscriptions</th>
                                    <th>Expenditure on subscription to e-journals, ebooks (INR in lakhs)</th>
                                    <th>Expenditure on subscription to other eresources (INR in lakhs)</th>
                                    <th>Total Library Expenditure</th>
                                    <th>Link to the relevant document</th>
                                </tr>
                                <tr>
                                    <th>Library resources</th>
                                    <th>If yes, details of memberships/subscriptions</th>
                                    <th>Expenditure on subscription to e-journals, ebooks (INR in lakhs)</th>
                                    <th>Expenditure on subscription to other eresources (INR in lakhs)</th>
                                    <th>Total Library Expenditure</th>
                                    <th>Link to the relevant document</th>
                                </tr>
                                <tr>
                                    <th scope="row">Books <input type="hidden" class="form-control qh" value="1"/></th>
                                    <td><input type="text" class="form-control" name="q1_Y4" /></td>
                                    <td><input type="number" class="form-control" name="q2_Y4"  /></td>
                                    <td><input type="number" class="form-control q3" name="q3_Y4"  /></td>
                                    <td><input type="number" class="form-control q4"  name="q4_Y4" /></td>
                                    <td><input type="text" class="form-control q5"  name="q5_Y4" /></td>
                                </tr>
                                <tr>
                                    <th scope="row">Journals</th>
                                    <td><input type="text" class="form-control q6"  name="q6_Y4"  /></td>
                                    <td><input type="number" class="form-control q7"  name="q7_Y4" /></td>
                                    <td><input type="number" class="form-control q8"  name="q8_Y4" /></td>
                                    <td><input type="number" class="form-control q9"  name="q9_Y4" /></td>
                                    <td><input type="text" class="form-control q10"  name="q10_Y4" /></td>
                                </tr>
                                <tr>
                                    <th scope="row">e-Journals</th>
                                    <td><input type="text" class="form-control q11"  name="q11_Y4" /></td>
                                    <td><input type="number" class="form-control q12"  name="q12_Y4" /></td>
                                    <td><input type="number" class="form-control q13"  name="q13_Y4" /></td>
                                    <td><input type="number" class="form-control q14"  name="q14_Y4" /></td>
                                    <td><input type="text" class="form-control q15"  name="q15_Y4" /></td>
                                </tr>
                                <tr>
                                    <th scope="row">e- Books</th>
                                    <td><input type="text" class="form-control q16" name="q16_Y4"  /></td>
                                    <td><input type="number" class="form-control q17"  name="q17_Y4" /></td>
                                    <td><input type="number" class="form-control q18"  name="q18_Y4" /></td>
                                    <td><input type="number" class="form-control q19"  name="q19_Y4" /></td>
                                    <td><input type="text" class="form-control q20"  name="q20_Y4" /></td>
                                </tr>
                                <tr>
                                    <th scope="row">e-ShodhSindhu</th>
                                    <td><input type="text" class="form-control q21"  name="q21_Y4" /></td>
                                    <td><input type="number" class="form-control q22"  name="q22_Y4" /></td>
                                    <td><input type="number" class="form-control q23"  name="q23_Y4" /></td>
                                    <td><input type="number" class="form-control q24"  name="q24_Y4" /></td>
                                    <td><input type="text" class="form-control q25"  name="q25_Y4" /></td>
                                </tr>
                                <tr>
                                    <th scope="row">Shodhganga</th>
                                    <td><input type="text" class="form-control q26"  name="q26_Y4" /></td>
                                    <td><input type="number" class="form-control q27"  name="q27_Y4" /></td>
                                    <td><input type="number" class="form-control q28"  name="q28_Y4" /></td>
                                    <td><input type="number" class="form-control q29"  name="q29_Y4" /></td>
                                    <td><input type="text" class="form-control q30"  name="q30_Y4" /></td>
                                </tr>
                                <tr>
                                    <th scope="row">Databases</th>
                                    <td><input type="text" class="form-control q31"  name="q31_Y4" /></td>
                                    <td><input type="number" class="form-control q32"  name="q32_Y4" /></td>
                                    <td><input type="number" class="form-control q33"  name="q33_Y4" /></td>
                                    <td><input type="number" class="form-control q34"  name="q34_Y4" /></td>
                                    <td><input type="text" class="form-control q35"  name="q35_Y4" /></td>
                                </tr>
                                <tr>
                                    <td colspan="6" style="text-align: center;"><input type="submit" class="btn btn-primary"  value="Submit"  <?php
                            // For Enabling or Disabling Button
                            if($dateCheck){
                                echo "disabled";
                            }else{
                                echo "enabled";
                            }
                        ?>/></td>
                                </tr>
                                </form>

                                <form method="POST" id="f422_5">
                                <tr>
                                    <th colspan="6" style="text-align: center;">YEAR 5</th>
                                </tr>
                                <tr>
                                    <th>Library resources</th>
                                    <th>If yes, details of memberships/subscriptions</th>
                                    <th>Expenditure on subscription to e-journals, ebooks (INR in lakhs)</th>
                                    <th>Expenditure on subscription to other eresources (INR in lakhs)</th>
                                    <th>Total Library Expenditure</th>
                                    <th>Link to the relevant document</th>
                                </tr>
                                <tr>
                                    <th scope="row">Books <input type="hidden" class="form-control qh" value="1"/></th>
                                    <td><input type="text" class="form-control" name="q1_Y5" /></td>
                                    <td><input type="number" class="form-control" name="q2_Y5"  /></td>
                                    <td><input type="number" class="form-control q3" name="q3_Y5"  /></td>
                                    <td><input type="number" class="form-control q4"  name="q4_Y5" /></td>
                                    <td><input type="text" class="form-control q5"  name="q5_Y5" /></td>
                                </tr>
                                <tr>
                                    <th scope="row">Journals</th>
                                    <td><input type="text" class="form-control q6"  name="q6_Y5"  /></td>
                                    <td><input type="number" class="form-control q7"  name="q7_Y5" /></td>
                                    <td><input type="number" class="form-control q8"  name="q8_Y5" /></td>
                                    <td><input type="number" class="form-control q9"  name="q9_Y5" /></td>
                                    <td><input type="text" class="form-control q10"  name="q10_Y5" /></td>
                                </tr>
                                <tr>
                                    <th scope="row">e-Journals</th>
                                    <td><input type="text" class="form-control q11"  name="q11_Y5" /></td>
                                    <td><input type="number" class="form-control q12"  name="q12_Y5" /></td>
                                    <td><input type="number" class="form-control q13"  name="q13_Y5" /></td>
                                    <td><input type="number" class="form-control q14"  name="q14_Y5" /></td>
                                    <td><input type="text" class="form-control q15"  name="q15_Y5" /></td>
                                </tr>
                                <tr>
                                    <th scope="row">e- Books</th>
                                    <td><input type="text" class="form-control q16" name="q16_Y5"  /></td>
                                    <td><input type="number" class="form-control q17"  name="q17_Y5" /></td>
                                    <td><input type="number" class="form-control q18"  name="q18_Y5" /></td>
                                    <td><input type="number" class="form-control q19"  name="q19_Y5" /></td>
                                    <td><input type="text" class="form-control q20"  name="q20_Y5" /></td>
                                </tr>
                                <tr>
                                    <th scope="row">e-ShodhSindhu</th>
                                    <td><input type="text" class="form-control q21"  name="q21_Y5" /></td>
                                    <td><input type="number" class="form-control q22"  name="q22_Y5" /></td>
                                    <td><input type="number" class="form-control q23"  name="q23_Y5" /></td>
                                    <td><input type="number" class="form-control q24"  name="q24_Y5" /></td>
                                    <td><input type="text" class="form-control q25"  name="q25_Y5" /></td>
                                </tr>
                                <tr>
                                    <th scope="row">Shodhganga</th>
                                    <td><input type="text" class="form-control q26"  name="q26_Y5" /></td>
                                    <td><input type="number" class="form-control q27"  name="q27_Y5" /></td>
                                    <td><input type="number" class="form-control q28"  name="q28_Y5" /></td>
                                    <td><input type="number" class="form-control q29"  name="q29_Y5" /></td>
                                    <td><input type="text" class="form-control q30"  name="q30_Y5" /></td>
                                </tr>
                                <tr>
                                    <th scope="row">Databases</th>
                                    <td><input type="text" class="form-control q31"  name="q31_Y5" /></td>
                                    <td><input type="number" class="form-control q32"  name="q32_Y5" /></td>
                                    <td><input type="number" class="form-control q33"  name="q33_Y5" /></td>
                                    <td><input type="number" class="form-control q34"  name="q34_Y5" /></td>
                                    <td><input type="text" class="form-control q35"  name="q35_Y5" /></td>
                                </tr>
                                <tr>
                                    <td colspan="6" style="text-align: center;"><input type="submit" class="btn btn-primary"  value="Submit"  <?php
                            // For Enabling or Disabling Button
                            if($dateCheck){
                                echo "disabled";
                            }else{
                                echo "enabled";
                            }
                        ?>/></td>
                                </tr>
                                </form>
                           </thead>
                           <tbody>
                           
                           </tbody>
                        </table>
                    </div>   
        </form>
        <!-- Metric 4.2.4 -->
        <form method="post" id="f424">
         <div id="q424" class="questionContainer"> 
            <p class="msgContainer" id="msg424"><?php ?></p>
                <img
                    
                    class="fillImage"
                >
            <p class="qName">Q<sub>N</sub>M <br>4.2.4</p>
            <p class="question">
            <b>Percentage per day usage of library by teachers and students ( foot
                falls and login data for online access) (Data for the latest completed
                academic year). 
            </b><br>
            Number of teachers and students using library per day over last one year
            </p>
            <i class="fa fa-angle-down iconRight"></i><br><br><br>
            <p class="questionPart">
                <ul>
                    <li>Any additional information</li>
                    <li>Details of library usage by teachers and students (Library accession register, online accession details to be provided as supporting documents)</li>
                </ul>
            </p>
        </div>
            <div class="answerContainer" id="a424">
                <table class="table table-bordered">
                    <tbody>
                        <tr>
                            <th>Percentage of Teachers using Library per day over last 5 years</th>
                            <td><input type="number" name="percentageTeacher_Y1" class="form-control" placeholder="Percent %" required/></td>
                        </tr>
                        <tr>
                            <th>Percentage of Students using Library per day over last 5 years</th>
                            <td><input type="number" name="percentageStudent_Y1" class="form-control" placeholder="Percent %" required/></td>
                        </tr>
                    </tbody>
                </table>
                        <input type="submit" name="submit424" class="btn btn-primary" value="Save Changes" 
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
        <br>
        <div class="criteriaTitle2">
            <h4>4.3 IT Infrastructure</h4>
        </div><br>
        <!-- Metric 4.3.1 -->
        <form method="post" id="f431">
         <div id="q431" class="questionContainer"> 
            <p class="msgContainer" id="msg431"><?php ?></p>
                <img
                    
                    class="fillImage"
                >
            <p class="qName">Q<sub>N</sub>M <br>4.3.1</p>
            <p class="question">
            <b>Percentage of classrooms and seminar halls with ICT - enabled
                    facilities such as LCD, smart board, Wi-Fi/LAN, audio video
                    recording facilities(Data for the latest completed academic year). 
            </b>
            </p>
            <i class="fa fa-angle-down iconRight"></i><br><br><br>
            <p class="questionPart">
                <ul>
                    <li>Number of classrooms with LCD facilities</li>
                    <li>Number of classrooms with Wi-Fi/LAN facilities</li>
                    <li>Number of seminar halls with ICT facilities</li>
                </ul>
            </p>
        </div>
        <div class="answerContainer" id="a431">
                <table class="table table-bordered" id="table431">
                    <thead>
                        <tr>
                            <th>Room number or Name of classrooms/Seminar Hall with LCD / wifi/LAN facilities with room numbers</th>
                            <th>Type of ICT facility</th>
                            <th>Link to geo tagged photos and master time table</th>
                            <th>Remove Row</th>
                        </tr>
                    </thead>
                    <tbody>

                    </tbody>
                </table>
                <table class="table table-borderless">
                    <tr>
                        <td><button type="button" class="AddRowBelow" id="addRow431"><i class="fa fa-plus-circle"></i></button><br></td>
                    </tr>
                </table>
                        <input type="submit" name="submit431" class="btn btn-primary" value="Save Changes" 
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
                         var count431 = 0;
                        var output = "";
                        $("#addRow431").on("click", function(){
                            count431++;
                            output = "<tr id='row"+count431+"'>";
                            output += "<td><input  type='text' class='form-control q1' required/></td>";
                            output += "<td><input  type='text' class='form-control q2' required/></td>";
                            output += "<td><input  type='text' class='form-control q3' required/></td>";
                            output += "<td><button type='button' class='delete431 btn btn-danger' data-row='row"+count431+"'>Delete</button></td>";
                            output += "</tr>";
                            tableBody = $("#table431 tbody");
                            tableBody.append(output);
                        });

                        $("#table431 tbody").on('click', '.delete431', function(){
                            if(confirm("Are you sure you want to delete this data?")){
                                var delete_row = $(this).data('row');
                                $("#"+delete_row).remove();
                                $("#msg431").html("<h5 style='color: red; text-align; center'>Row Deleted!</h5>");
                                console.log("Deleted");
                            }else{
                                return false;
                            }
                        
                        });

                        $("#f431").on("submit", function(e){

                            e.preventDefault();
                            e.stopPropagation();
                            
                            var q1 = [];
                            var q2 = [];
                            var q3 = [];
                            
                            $('.q1').each(function(){
                                q1.push($(this).val());
                            });
                            $('.q2').each(function(){
                                q2.push($(this).val());
                            });
                            $('.q3').each(function(){
                                q3.push($(this).val());
                            });
                        
                            $.ajax({
                                url: "save431.php",
                                method:"POST",
                                data: {q1: q1, q2: q2, q3: q3},
                                success: function(data){
                                    $("#msg431").html("<h5 style='color: green; text-align; center'>Data Saved!</h5>");
                                    console.log("Saved data");
                                },
                                error: function(){
                                    $("#msg431").html("<h5 style='color: red; text-align; center'>Ajax Call Error!</h5>");
                                    console.log("Error Saving Data");
                                }
                            });
                        });
                    </script>

    


        <!-- Metric 4.3.2 -->
        <form method="post" id="f432">
        <div id="q432" class="questionContainer">
            <p class="msgContainer" id="msg432"><?php ?></p>
                <img
                    
                    class="fillImage"
                >
            <p class="qName">Q<sub>L</sub>M <br>4.3.2</p>
            <p class="question">
            <b>Institution has an IT policy, makes appropriate budgetary provision
                and updates its IT facilities including Wi-Fi facility</b><br>
                Providing the salient features of the IT Policy and describe the
                process of implementation and adherence to the policy, budgetary
                provisions made and utilized and the expansion plan in maximum of
                500 words
            </p>
            <i class="fa fa-angle-down iconRight"></i><br><br><br>
            <p class="questionPart"><br>
                <ul>
                    <li>Upload any additional information</li>
                    <li>Paste link for additional information </li>
                </ul>
            </p>
        </div>
            <div class="answerContainer" id="a432">
                        <label for="answer">Description (Max Length:500 words)</label>
                        <textarea name="answer" id="q1_432" class="form-control" rows="6" maxlength="550" placeholder="<?php ?>" required></textarea><br>
                        <label for="doclink">Link to the relevent document</label>
                        <input type="text" name="doclink" id="q2_432" class="form-control q2" placeholder="<?php ?>" autocomplete="off" required /><br>
                        <input type="submit" name="submit432" class="btn btn-primary" value="Save Changes" 
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
                $("#f432").on("submit", function(e){
                    e.preventDefault();
                    e.stopPropagation();

                    var q1 = $("#q1_432").val();
                    var q2 = $("#q2_432").val();
                    $.ajax({
                        url: "save432.php",
                        method: "POST",
                        data: {q1: q1, q2: q2},
                        success: function(){
                        $("#msg432").html("<h5 style='color: green; text-align; center'>Data Saved!</h5>");
                        console.log("Saved data");
                    },
                    error: function(){
                        $("#msg432").html("<h5 style='color: red; text-align; center'>Ajax Call Error!</h5>");
                        console.log("Error Saving Data");
                    }
                    });
                });
            </script>
        </div>
        <!-- Metric 4.3.3 -->
        <form method="post" id="f433">
        <div id="q433" class="questionContainer">
            <p class="msgContainer" id="msg433"><?php ?></p>
                <img
                    
                    class="fillImage"
                >
            <p class="qName">Q<sub>N</sub>M <br>4.3.3</p>
            <p class="question">
            <b>Student - Computer ratio (current year data)</b><br>
            Please keep following and other relevant documents ready in hard copy:
            </p>
            <i class="fa fa-angle-down iconRight"></i><br><br><br>
            <p class="questionPart"><br>
                <ul>
                    <li>Upload any additional information</li>
                    <li>Student – computer ratio</li>
                </ul>
            </p>
        </div>
            <div class="answerContainer" id="a433">
                    <table class="table table-bordered" id="table433">
                        <thead>
                            <tr>
                                <th>Number of students</th>
                                <th>Number of Computer</th>
                            </tr>
                        </thead>
                        <tbody>

                        </tbody>
                    </table>
                    <tbody class="table table-borderless">
                        <tbody>
                            <tr>
                            <td><button type="button" class="AddRowBelow" id="addRow433"><i class="fa fa-plus-circle"></i></button><br></td>
                            </tr>
                        </tbody>
                    </tbody>
                        <input type="submit" name="submit433" class="btn btn-primary" value="Save Changes" 
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
                         var count433 = 0;
                        var output = "";
                        $("#addRow433").on("click", function(){
                            count433++;
                            output = "<tr id='row"+count433+"'>";
                            output += "<td><input  type='number' class='form-control q1' required/></td>";
                            output += "<td><input  type='number' class='form-control q2' required/></td>";
                            output += "<td><button type='button' class='delete433 btn btn-danger' data-row='row"+count433+"'>Delete</button></td>";
                            output += "</tr>";
                            tableBody = $("#table433 tbody");
                            tableBody.append(output);
                        });

                        $("#table433 tbody").on('click', '.delete433', function(){
                            if(confirm("Are you sure you want to delete this data?")){
                                var delete_row = $(this).data('row');
                                $("#"+delete_row).remove();
                                $("#msg433").html("<h5 style='color: red; text-align; center'>Row Deleted!</h5>");
                                console.log("Deleted");
                            }else{
                                return false;
                            }
                        
                        });

                        $("#f433").on("submit", function(e){

                            e.preventDefault();
                            e.stopPropagation();
                            
                            var q1 = [];
                            var q2 = [];
                            
                            $('.q1').each(function(){
                                q1.push($(this).val());
                            });
                            $('.q2').each(function(){
                                q2.push($(this).val());
                            });
                        
                            $.ajax({
                                url: "save433.php",
                                method:"POST",
                                data: {q1: q1, q2: q2},
                                success: function(data){
                                    $("#msg433").html("<h5 style='color: green; text-align; center'>Data Saved!</h5>");
                                    console.log("Saved data");
                                },
                                error: function(){
                                    $("#msg433").html("<h5 style='color: red; text-align; center'>Ajax Call Error!</h5>");
                                    console.log("Error Saving Data");
                                }
                            });
                        });
            </script>
        </div>
        <!-- Metric 4.3.4 -->
        <form method="post" id="f434">
        <div id="q434" class="questionContainer">
            <p class="msgContainer" id="msg434"><?php ?></p>
                <img
                    
                    class="fillImage"
                >
            <p class="qName">Q<sub>N</sub>M <br>4.3.4</p>
            <p class="question">
            <b>Available bandwidth of internet connection in the Institution (Leased line) <br>Options:</b><br>
            </p>
            <i class="fa fa-angle-down iconRight"></i><br>
            <p class="questionPart"><br>
                <ul>
                    <li>Upload any additional information</li>
                    <li>Details of available bandwidth of internet connection in the Institution</li>
                </ul>
            </p>
        </div>
            <div class="answerContainer" id="a434">
                    <table class="table table-bordered" id="table434">
                        <tbody>
                            <tr>
                                <tr>
                                    <select name="q1" class="form-control q1" required>
                                        <option value="" disabled selected>Select</option>
                                        <option value="A. ≥1 GBPS">A. ≥1 GBPS</option>
                                        <option value="B. 500 MBPS - 1 GBPS">B. 500 MBPS - 1 GBPS</option>
                                        <option value="C. 250 MBPS - 500 MBPS">C. 250 MBPS - 500 MBPS</option>
                                        <option value="D. 50 MBPS - 250 MBPS">D. 50 MBPS - 250 MBPS</option>
                                        <option value="E. <50 MBPS">E. &lt;50 MBPS</option>
                                    </select>
                                </tr>
                            </tr>
                        </tbody>
                    </table>
                        <input type="submit" name="submit434" class="btn btn-primary" value="Save Changes" 
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
                        $("#f434").on("submit", function(e){

                            e.preventDefault();
                            e.stopPropagation();
                            
                            var q1 = "";
                            q1 = $(".q1").val();
                            
                            $.ajax({
                                url: "save434.php",
                                method:"POST",
                                data: {q1: q1},
                                success: function(data){
                                    $("#msg434").html("<h5 style='color: green; text-align; center'>Data Saved!</h5>");
                                    console.log("Saved data");
                                },
                                error: function(){
                                    $("#msg434").html("<h5 style='color: red; text-align; center'>Ajax Call Error!</h5>");
                                    console.log("Error Saving Data");
                                }
                            });
                        });
            </script>
        </div>
        <!-- Metric 4.3.5 -->
        <form method="post" id="f435">
        <div id="q435" class="questionContainer">
            <p class="msgContainer" id="msg435"><?php ?></p>
                <img
                    
                    class="fillImage"
                >
            <p class="qName">Q<sub>N</sub>M <br>4.3.5</p>
            <p class="question">
            <b>Institution has the following Facilities for e-content development</b><br>
                1. Media centre,
                2. Audio visual centre,
                3. Lecture Capturing System(LCS),
                4. Mixing equipments and software for editing.<br>
            </p>
            <i class="fa fa-angle-down iconRight"></i><br><br>
            <p class="questionPart"><br>
                <ul>
                    <li>Upload any additional information</li>
                    <li>Details of available bandwidth of internet connection in the Institution</li>
                </ul>
            </p>
        </div>
            <div class="answerContainer" id="a435">
                    <table class="table table-bordered">
                        <tbody>
                            <tr>
                                <td>
                                    <select class="form-control select" required>
                                        <option value="" disabled selected>Select</option>
                                        <option value="A. All 4 of the above">A. All 4 of the above</option>
                                        <option value="B. Any 3 of the above">B. Any 3 of the above</option>
                                        <option value="C. Any 2 of the above">C. Any 2 of the above</option>
                                        <option value="D. Any 1 of the above">D. Any 1 of the above</option>
                                        <option value="E. None of the Above">E. None of the Above</option>
                                    </select>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                    <table class="table table-bordered" id="table435">
                           <thead>
                                <tr>
                                <th>Name of the teacher</th>
                                <th>Name of the module developed</th>
                                <th>Platform on which module is developed</th>
                                <th>Date of launching e-content</th>
                                <th>Link to the relevent document and facility available in the institution</th>
                                <th>List of e-content development facility available</th>
                                <th>Provide link to videos of the media centre and recording facility</th>
                                </tr>
                           </thead>
                           <tbody>
                           </tbody>
                        </table><br>
                        <button id="addRow435" style="border: none; padding: 0px; margin: 0px; background-color: #fff; height: 70px; width: 120px;float: right;"><i class="fa fa-plus-circle" style="font-size: 50px; color: orange;" data-toggle="tooltip" data-placement="top" title="Add Rows"></i></button>
                        <input type="submit" name="submit435" class="btn btn-primary" value="Save Changes" 
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
                var count435 = 0;
                    var output = "";
    
                            // jQuery button click event to add a row
                    $('#addRow435').on('click', function () {
                      count435++;
                      var output = "<tr id='row"+count435+"'><td ><input type='text' class='form-control col1' required/></td>";
                      output+= "<td><input type='text' class='form-control col2'  required/></td>";
                      output+= "<td><input type='text' class='form-control col3'  required/></td>";
                      output+= "<td><input type='date' class='form-control col4'  required/></td>";
                      output+= "<td><input type='text' class='form-control col5'  required/></td>";
                      output+= "<td><input type='text' class='form-control col6'  required/></td>";
                      output+= "<td><input type='text' class='form-control col7'  required/></td>";
                      output+= "<td><button class='delete btn btn-danger' data-row='row"+count435+"'>Remove Row</button></td>"
                      output+= "</tr>";
                      tableBody = $("#table435 tbody");
                      tableBody.append(output);             
                    });

                    $("#table435 tbody").on('click', '.delete', function(){
                                    if(confirm("Are you sure you want to delete this data?")){
                                        var delete_row = $(this).data("row");
                                        $('#'+delete_row).remove();
                                        $("#msg435").html("<h5 style='color: red; text-align; center'>Row Deleted!</h5>");
                                    }else{
                                        return false;
                                    }
                                
                    });
                    $("#f435").on("submit", function(event){
                    var col1 = [];
                    var col2 = [];
                    var col3 = [];
                    var col4= [];
                    var col5= [];
                    var col6= [];
                    var col7= [];
                     event.preventDefault();
                     var select = $(".select").val();
                    $('.col1').each(function(){
                        col1.push($(this).val());
                    });
                    $('.col2').each(function(){
                        col2.push($(this).val());
                    });
                    $('.col3').each(function(){
                        col3.push($(this).val());
                    });
                    $('.col4').each(function(){
                        col4.push($(this).val());
                    });
                    $('.col5').each(function(){
                        col5.push($(this).val());
                    });
                    $('.col6').each(function(){
                        col6.push($(this).val());
                    });
                    $('.col7').each(function(){
                        col7.push($(this).val());
                    });
                    $.ajax({
                        url: "save435.php",
                        method:"POST",
                        data: { select: select, col1: col1, col2: col2,col3: col3 , col4: col4, col5: col5, col6: col6, col7: col7},
                        success: function(){
                            $("#msg435").html("<h5 style='color: green; text-align; center'>Data Saved!</h5>");
                        },
                        error: function(){
                            $("#msg435").html("<h5 style='color: red; text-align; center'>Ajax Call Error!</h5>");
                            
                        }
                    });
                });
            </script>
        </div>
        <!-- Metric 4.3.6 -->
        <form method="post" id="f436">
        <div id="q436" class="questionContainer ddeOnly" data-toggle="tooltip" data-placement="top" title="Only For Directorate of Distance Education (D.D.E)">
            <p class="msgContainer" id="msg436"><?php ?></p>
                <img
                    
                    class="fillImage"
                >
            <p class="qName">Q<sub>N</sub>M <br>4.3.6</p>
            <p class="question">
            <b>ICT enabled facilities at DDE</b><br>
            Percentage of the rooms and seminar halls of the DDE with ICT enabled
            facilities (data as on date),
            Number of rooms and seminar halls of the DDE (cumulative) with ICT
            enabled facilities (data as on date),
            Total number of rooms and seminar halls of the DDE (cumulative) (data as
            on date). <br>
            </p>
            <i class="fa fa-angle-down iconRight"></i><br><br><br>
            <p class="questionPart"><br>
                <ul>
                    <li>Number of rooms and seminar halls of the DDE (cumulative) with ICT enabled facilities (data as on date)</li>
                    <li>Total number of rooms and seminar halls of the DDE (cumulative)(data as on date)</li>
                </ul>
            </p>
        </div>
            <div class="answerContainer" id="a436">
                <table class="table table-bordered">
                    <tbody>
                        <tr>
                            <th>Number of ICT enabled rooms and seminar halls at DDE as on date (cumulative)</th>
                            <td><input type="number" class="form-control q1" required/></td>
                        </tr>
                        <tr>
                            <th>Total Number of rooms and seminar halls at DDE as on date (cumulative)</th>
                            <td><input type="number" class="form-control q2" required/></td>
                        </tr>
                    </tbody>
                </table>
                        <input type="submit" name="submit436" class="btn btn-primary" value="Save Changes" 
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
                $("#f436").on("submit", function(e){
                    e.preventDefault();
                    e.stopPropagation();

                    var q1 = $(".q1").val();
                    var q2 = $(".q2").val();
                    $.ajax({
                        url: "save436.php",
                        method: "POST",
                        data: {q1: q1, q2: q2},
                        success: function(){
                        $("#msg436").html("<h5 style='color: green; text-align; center'>Data Saved!</h5>");
                        console.log("Saved data");
                    },
                    error: function(){
                        $("#msg436").html("<h5 style='color: red; text-align; center'>Ajax Call Error!</h5>");
                        console.log("Error Saving Data");
                    }
                    });
                });
            </script>
        </div><br>
        <div class="criteriaTitle2">
            <h4>4.4 Maintenance of Campus Infrastructure</h4>
        </div><br>
        <!-- Metric 4.4.1 -->
        <form method="post" id="f441">
                <div id="q441" class="questionContainer">
                <p class="msgContainer" id="msg441"></p>
                <img
                    <?php 
                    // $get = mysqli_query($connection, "SELECT*FROM ssr_m4_4_1 WHERE username = '$adminname'");
                    // $n = mysqli_num_rows($get);
                    // if($n > 0){
                    //     echo "src='$filled' data-toggle='tooltip' data-placement='bottom' title='$n Filled'";
                    // }else if($n == 0){
                    //     echo "src='$unfilled' data-toggle='tooltip' data-placement='bottom' title='Metric Not Filled'";
                    // }else{
                    //     echo "src='$notapplicableimg' data-toggle='tooltip' data-placement='bottom' title='Metric Not Applicable'";
                    // }
                    ?>
                    class="fillImage"
                >
                <p class="qName">Q<sub>N</sub>M <br>4.4.1</p>
                <p class="question">
                 <b>Average percentage of expenditure incurred on maintenance of physical facilities and academic support facilities excluding salary component during the last five years (INR in lakhs) </b>
                </p>
                <i class="fa fa-angle-down iconRight"></i>
                <p class="questionPart"><br><br>
                    <ul>
                    <li>Non salary expenditure incurred</li><br>
                    <li>Expenditure incurred on maintenance of campus infrastructure</li>
                    </ul>
                </p>
                </div>
                    <div class="answerContainer" id="a441">
                        <?php
                            // Code here
                            
                        ?>
                        <table class="table table-bordered" id="table441">
                           <thead>
                                <tr>
                                    <th>Year</th>
                                    <th>Budget allocated
                                        for infrastructure
                                        augmentation</th>
                                    <th>Expenditure for
                                        infrastructure
                                        augmentation</th>
                                    <th>Total expenditure excluding Salary </th>
                                    <th>Expenditure on maintenance of
                                        academic facilities (excluding
                                        salary for human resources) </th>
                                    <th>Expenditure on maintenance of
                                        physical facilities and academic
                                        support facilities (excluding
                                        salary for human resources)</th>
                                    <th>Delete</th>
                                </tr>
                           </thead>
                           <tbody>
                           
                           </tbody>
                        </table>
                        <button type="button" class="AddRowBelow" id="addRow441"><i class="fa fa-plus-circle"></i></button><br>
                        <br>
                        <input type="submit" name="submit441" class="btn btn-primary SubmitBtnForm" value="Save Changes" 
                        <?php
                            // For Enabling or Disabling Button
                            if($dateCheck){
                                echo "disabled";
                            }else{
                                echo "enabled";
                            }
                        ?>
                        />
                    </div>   
        </form>
        <script>
            var count441 = 0;
            var output = "";
            $("#addRow441").on("click", function(){
                count441++;
                output = "<tr id='row"+count441+"'>";
                output += "<td><input type='number' class='form-control q1' required/></td>";
                output += "<td><input type='number' class='form-control q2' required/></td>";
                output += "<td><input type='number' class='form-control q3' required/></td>";
                output += "<td><input type='number' class='form-control q4' required/></td>";
                output += "<td><input type='number' class='form-control q5' required/></td>";
                output += "<td><input type='number' class='form-control q6' required/></td>";
                output += "<td><button type='button' class='delete441 btn btn-danger' data-row='row"+count441+"'>Delete</button></td>";
                output += "</tr>";
                tableBody = $("#table441 tbody");
                tableBody.append(output);
            });

            $("#table441 tbody").on('click', '.delete441', function(){
                if(confirm("Are you sure you want to delete this data?")){
                    var delete_row = $(this).data('row');
                    $("#"+delete_row).remove();
                    $("#msg441").html("<h5 style='color: red; text-align; center'>Row Deleted!</h5>");
                    console.log("Deleted");
                }else{
                    return false;
                }
            
            });

            $("#f441").on("submit", function(e){

                e.preventDefault();
                e.stopPropagation();
                
                var q1 = [];
                var q2 = [];
                var q3 = [];
                var q4 = [];
                var q5 = [];
                var q6 = [];

                
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
                $('.q5').each(function(){
                    q5.push($(this).val());
                });
                $.ajax({
                    url: "save441.php",
                    method:"POST",
                    data: {q1: q1, q2: q2, q3: q3, q4: q4, q5: q5, q6: q6},
                    success: function(data){
                        $("#msg441").html("<h5 style='color: green; text-align; center'>Data Saved!</h5>");
                        console.log("Saved data");
                    },
                    error: function(){
                        $("#msg441").html("<h5 style='color: red; text-align; center'>Ajax Call Error!</h5>");
                        console.log("Error Saving Data");
                    }
                });
            });
    </script>
    <!-- Metric 4.4.2 -->
    <form method="post" id="f442">
        <div id="q442" class="questionContainer">
            <p class="msgContainer" id="msg442"><?php ?></p>
                <img
                    
                    class="fillImage"
                >
            <p class="qName">Q<sub>L</sub>M <br>4.4.2</p>
            <p class="question">
            <b>There are established systems and procedures for
                maintaining and utilizing physical, academic and support facilities -
                laboratory, library,sports complex, computers, classrooms etc.</b><br>
                Describe policy details of systems and procedures for maintaining
                and utilizing physical, academic and support facilities within a
                minimum of 500 word and maximum of 1000 words.
            </p>
            <i class="fa fa-angle-down iconRight"></i><br><br><br>
            <p class="questionPart"><br>
                <ul>
                    <li>Upload any additional information</li>
                    <li>Paste link for additional information </li>
                </ul>
            </p>
        </div>
            <div class="answerContainer" id="a442">
                        <label for="answer">Description (Max Length:1000 words)</label>
                        <textarea name="answer" id="q1_442" class="form-control" rows="6" maxlength="1050" placeholder="<?php ?>" required></textarea><br>
                        <label for="doclink">Link to the relevent document</label>
                        <input type="text" name="doclink" id="q2_442" class="form-control q2" placeholder="<?php ?>" autocomplete="off" required /><br>
                        <input type="submit" name="submit442" class="btn btn-primary" value="Save Changes" 
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
                $("#f442").on("submit", function(e){
                    e.preventDefault();
                    e.stopPropagation();

                    var q1 = $("#q1_442").val();
                    var q2 = $("#q2_442").val();
                    $.ajax({
                        url: "save442.php",
                        method: "POST",
                        data: {q1: q1, q2: q2},
                        success: function(){
                        $("#msg442").html("<h5 style='color: green; text-align; center'>Data Saved!</h5>");
                        console.log("Saved data");
                    },
                    error: function(){
                        $("#msg442").html("<h5 style='color: red; text-align; center'>Ajax Call Error!</h5>");
                        console.log("Error Saving Data");
                    }
                    });
                });
            </script>
        </div>

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

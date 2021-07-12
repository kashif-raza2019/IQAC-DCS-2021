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
    <title>Criteria III</title>
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
       <h3>Criteria III - Research, Innovations and Extension</h3>
    </div>
    <div class="criteriaTitle2">
       <h4>3.1 Promotion of Research and Facilities</h4>
    </div>

        <!-- Metric 3.1.1 -->
                <div id="q311" class="questionContainer">
                <p class="msgContainer" id="msg311"></p>
                <img
                    
                    class="fillImage"
                >
                <p class="qName">Q<sub>N</sub>M <br>3.1.1</p>
                <p class="question">
                The amount of seed money provided by the institution to its teachers year wise during the last five years (INR in Lakhs)  
                </p>
                <i class="fa fa-angle-down iconRight"></i>
                <p class="questionPart">
                    <b>Data Requirement for last five years:</b>
                    <ul>
                    <li>Name of teacher getting seed money</li>
                    <li>Any additional information</li>
                    <li>Amount of seed money</li>
                    <li>Year of receiving grant</li>
                    </ul><br>
                </p>
                </div>
                    <div class="answerContainer" id="a311">
                        <h3 style="text-align: center; margin-top: 10px; ">YEAR 1</h3>
                        <form id="f311Y1">
                        <table class="table table-bordered" id="table311Y1">
                           <thead>
                             <th>Name of teacher provided with seed money</th>
                             <th>Amount of seed money</th>
                             <th>Year of receiving</th>
                             <th>Link to the policy document for sanction of seed money/grants for research from the institution</th>
                             <th>Update Data</th>
                           </thead>
                           <tbody>
                              
                           </tbody>
                        </table><br>
                        <p id="msg311_1"></p>
                        <button id="addRow311Y1" style="border: none; padding: 0px; margin: 0px; background-color: #fff; height: 70px; width: 120px;float: right;"><i class="fa fa-plus-circle" style="font-size: 50px; color: orange;" data-toggle="tooltip" data-placement="top" title="Add Rows"></i></button>
                        <br>
                        <center>
                            <button class="btn btn-primary" id="save311Y1" name="submit" type="submit" style="text-align: center;margin-left: 30px; margin-top: 10px;">Save Changes</button>
                        </center><br>
                        </form>
                        

              <script>
                    var count311Y1 = 0;
                    var output1 = "";
    
                            // jQuery button click event to add a row
                    $('#addRow311Y1').on('click', function () {
                      count311Y1++;
                      var output1 = "<tr id='row"+count311Y1+"'><td ><input type='text' class='form-control col1' required/></td>";
                      output1+= "<td><input type='number' class='form-control col2' required /></td>";
                      output1+= "<td><input type='number' class='form-control col3'  required/></td>";
                      output1+= "<td><input type='text' class='form-control col3'  required/></td>";
                      output1+= "<td><input type='button' class='btn btn-danger deleteY1' value='Delete'data-toggle='tooltip' data-row='row"+count311Y1+"' data-placement='bottom' title='Once Deleted cannot be retreived' /></td>";
                      output1+= "</tr>";
                      tableBody = $("#table311Y1 tbody");
                      tableBody.append(output1);             
                    });

                    $("#table311Y1 tbody").on('click', '.deleteY1', function(){
                                    if(confirm("Are you sure you want to delete this data?")){
                                        var delete_row = $(this).data("row");
                                        $('#'+delete_row).remove();
                                    }else{
                                        return false;
                                    }
                                
                    });
                    $("#311Y1").on("submit", function(event){
                    var col1 = [];
                    var col2 = [];
                    var col3 = [];
                    var col4 = [];
                     event.preventDefault();
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
                
                    $.ajax({
                        url: "save311_1.php",
                        method:"POST",
                        data: {col1: col1, col2: col2, col3: col3 , col4: col4},
                        success: function(data){
                            $("#msg311_1").html("<h5 style='color: green; text-align; center'>Data Saved!</h5>");
                        },
                        error: function(){
                            $("#msg311_1").html("<h5 style='color: red; text-align; center'>Ajax Call Error!</h5>");
                            
                        }
                    });
                });
                    

 
       </script>
    </div>
            <!-- Metric 3.1.2 -->
            <div id="q312" class="questionContainer">
                <p class="msgContainer" id="msg312"></p>
                <img
                    
                    class="fillImage"
                >
                <p class="qName">Q<sub>N</sub>M <br>3.1.2</p>
                <p class="question">
                Percentage of teachers receiving national/ international
                fellowship/financial support by various agencies for advanced
                studies/ research during the last five years. 
                </p>
                <i class="fa fa-angle-down iconRight"></i>
                <p class="questionPart">
                    <b>Data Requirement for last five years:</b>
                    <ul>
                    <li>Name of the teacher received national/ international fellowship/financial support by various agencies for advanced studies / research</li>
                    <li>Name of the award received </li>
                    <li>Year received  </li>
                    <li>Awarding Agency</li>
                    </ul><br>
                </p>
                </div>
                    <div class="answerContainer" id="a312">
                        <form id="f312">
                        <table class="table table-bordered" id="table312">
                           <thead>
                            <tr>
                             <th>Name of the teacher awarded national/ international fellowship/financial support </th>
                             <th>Name of the award/fellowship</th>
                             <th>Year of Award</th>
                             <th>Awarding Agency</th>
                             <th>Update</th>
                            </tr>
                            

                           </thead>
                           <tbody>
                              
                           </tbody>
                        </table><br>
                        <button id="addRow312" style="border: none; padding: 0px; margin: 0px; background-color: #fff; height: 70px; width: 120px;float: right;"><i class="fa fa-plus-circle" style="font-size: 50px; color: orange;" data-toggle="tooltip" data-placement="top" title="Add Rows"></i></button>
                        <br>
                        <center>
                            <button class="btn btn-primary" id="save312" name="submit" type="submit" style="text-align: center;margin-left: 30px; margin-top: 10px;">Save Changes</button>
                        </center><br>
                        </form>

              <script>

              $(document).ready(function(){
                    var count312 = 0;
                    var output = "";
    
                            // jQuery button click event to add a row
                    $('#addRow312').on('click', function () {
                      count312++;
                      var output = "<tr id='row"+count312+"'><td ><input type='text' class='form-control col1' required/></td>";
                      output+= "<td><input type='text' class='form-control col2'  required/></td>";
                      output+= "<td><input type='number' class='form-control col3'  required/></td>";
                      output+= "<td><input type='text' class='form-control col4'  required/></td>";
                      output+= "</tr>";
                      tableBody = $("#table312 tbody");
                      tableBody.append(output);             
                    });

                    $("#table312 tbody").on('click', '.delete', function(){
                                    if(confirm("Are you sure you want to delete this data?")){
                                        var delete_row = $(this).data("row");
                                        $('#'+delete_row).remove();
                                    }else{
                                        return false;
                                    }
                                
                    });
                    $("#f312").on("submit", function(event){
                    var col1 = [];
                    var col2 = [];
                    var col3 = [];
                    var col4= [];
                    
                     event.preventDefault();
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

                
                    $.ajax({
                        url: "save312.php",
                        method:"POST",
                        data: {col1: col1, col2: col2,col3: col3 , col4: col4},
                        success: function(){
                            $("#msg312").html("<h5 style='color: green; text-align; center'>Data Saved!</h5>");
                        },
                        error: function(){
                            $("#msg312").html("<h5 style='color: red; text-align; center'>Ajax Call Error!</h5>");
                            
                        }
                    });
                });
            });

 
       </script>
    </div>
    <!-- Metric 3.1.3 -->
    <div id="q313" class="questionContainer">
                <p class="msgContainer" id="msg313"></p>
                <img
                    
                    class="fillImage"
                >
                <p class="qName">Q<sub>N</sub>M <br>3.1.3</p>
                <p class="question">
                Number of JRFs, SRFs, Post Doctoral Fellows, Research 
                Associates and other research fellows enrolled in the institution 
                during the last five years. 
                </p>
                <i class="fa fa-angle-down iconRight"></i>
                <p class="questionPart">
                    <b>Data Requirement for last five years:</b>
                    <ul>
                    <li>Name of Research fellow</li>
                    <li>Year of enrolment </li>
                    <li>Duration of fellowship  </li>
                    <li>Type of the fellowship</li>
                    <li>Granting agency</li>
                    </ul><br>
                </p>
                </div>
                    <div class="answerContainer" id="a313">
                        <form id="f313">
                        <table class="table table-bordered" id="table313">
                           <thead>
                            <tr>
                             <th>Sl.No. </th>
                             <th>Name of Research fellow</th>
                             <th>Year of enrolment</th>
                             <th>Duration of fellowship</th>
                             <th>Type of the fellowship</th>
                             <th>Granting agency</th>
                             <th>Qualifying exam if any (NET, GATE, etc.)</th>
                             <th>Update</th>
                            </tr>
                            

                           </thead>
                           <tbody>
                              
                           </tbody>
                        </table><br>
                        <button id="addRow313" style="border: none; padding: 0px; margin: 0px; background-color: #fff; height: 70px; width: 120px;float: right;"><i class="fa fa-plus-circle" style="font-size: 50px; color: orange;" data-toggle="tooltip" data-placement="top" title="Add Rows"></i></button>
                        <br>
                        <center>
                            <button class="btn btn-primary" id="save313" name="submit" type="submit" style="text-align: center;margin-left: 30px; margin-top: 10px;">Save Changes</button>
                        </center><br>
                        </form>

              <script>

              $(document).ready(function(){
                    var count313 = 0;
                    var output = "";
    
                            // jQuery button click event to add a row
                    $('#addRow313').on('click', function () {
                      count313++;
                      var output = "<tr id='row"+count313+"'><td ><input type='number' class='form-control col1' required/></td>";
                      output+= "<td><input type='text' class='form-control col2'  required/></td>";
                      output+= "<td><input type='number' class='form-control col3'  required/></td>";
                      output+= "<td><input type='number' class='form-control col4'  required/></td>";
                      output+= "<td><input type='text' class='form-control col5'  required/></td>";
                      output+= "<td><input type='text' class='form-control col6'  required/></td>";
                      output+= "<td><input type='text' class='form-control col7'  required/></td>";
                      output+= "</tr>";
                      tableBody = $("#table313 tbody");
                      tableBody.append(output);             
                    });

                    $("#table313 tbody").on('click', '.delete', function(){
                                    if(confirm("Are you sure you want to delete this data?")){
                                        var delete_row = $(this).data("row");
                                        $('#'+delete_row).remove();
                                    }else{
                                        return false;
                                    }
                                
                    });
                    $("#f313").on("submit", function(event){
                    var col1 = [];
                    var col2 = [];
                    var col3 = [];
                    var col4= [];
                    var col5= [];
                    var col6= [];
                    var col7= [];
                     event.preventDefault();
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
                        url: "save313.php",
                        method:"POST",
                        data: {col1: col1, col2: col2,col3: col3 , col4: col4,col5: col5,col6: col6,col7: col7},
                        success: function(){
                            $("#msg313").html("<h5 style='color: green; text-align; center'>Data Saved!</h5>");
                        },
                        error: function(){
                            $("#msg313").html("<h5 style='color: red; text-align; center'>Ajax Call Error!</h5>");
                            
                        }
                    });
                });
            });

 
       </script>
    </div>
    <!-- Metric 3.1.4 -->
    <form method="post">
                <div id="q314" class="questionContainer">
                <p class="msgContainer" id="msg314"><?php ?></p>
                <img
                    
                    class="fillImage"
                >
                <p class="qName">Q<sub>L</sub>M <br>3.1.4</p>
                <p class="question">
                Institution has the following facilities to support research

                1. Central Instrumentation Centre 
                2. Animal House/Green House 
                3. Museum
                4. Media laboratory/Studios
                5. Business Lab
                6. Research/Statistical Databases
                7. Mootcourt
                8. Theatre
                9. Art Gallery
                </p>
                <i class="fa fa-angle-down iconRight"></i>
                <p class="questionPart">
                    <br>
                    <label for="options">Options :</label>
                    <select id="options" name="options">
                    <option value="value1">A. Any 4 or more of the above</option>
                    <option value="value2">B. Any 3 of the above</option>
                    <option value="value3">C. Any 2 of the above</option>
                    <option value="value4">D. Any 1 of the above</option>
                    <option value="value5">E. None of the above</option>
                    </select>
                    <ul><br><br>
                    <li>Upload Additional information.</li>
                    <li>Link for Additional information</li>
                    </ul>
                </p>
                </div>
                    <div class="answerContainer" id="a314">
                        <label for="answer">Description (Max Length: 500 words)</label>
                        <textarea name="answer" class="form-control" rows="6" maxlength="550" placeholder="<?php ?>" required></textarea><br>
                        <label for="doclink">Link to the relevent document</label>
                        <input type="text" name="doclink" class="form-control" placeholder="<?php ?>" autocomplete="off" required /><br>
                        <input type="submit" name="submit314" class="btn btn-primary" value="Save Changes" 
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
    <!---- Metric 3.1.5-->
    </div><br>
      <div class="criteriaTitle2">
       <h4>3.2 Resource Mobilization for Research</h4>
      </div><br>
     <!-- Metric 3.2.1-->      
    <div id="q321" class="questionContainer">
                <p class="msgContainer" id="msg321"></p>
                <img
                    
                    class="fillImage"
                >
                <p class="qName">Q<sub>N</sub>M <br>3.2.1</p>
                <p class="question">
                Extramural funding for Research (Grants sponsored by the non-
                government sources such as industry, corporate houses, 
                international bodies for research projects) endowments, Chairs in
                the Institution during the last five years (INR in Lakhs)
                </p>
                <i class="fa fa-angle-down iconRight"></i>
                <p class="questionPart">
                    <b>Data Requirement for last five years:</b>
                    <ul>
                    <li>Name of the Project/ Endowments, Chairs</li>
                    <li>Name of the Principal Investigator</li>
                    <li>Department of Principal Investigator</li>
                    <li>Year of Award</li>
                    <li>Funds provided</li>
                    <li>Duration of the project</li>
                    </ul><br>
                </p>
                </div>
                    <div class="answerContainer" id="a321">
                        <form id="f321">
                        <table class="table table-bordered" id="table321">
                           <thead>
                            <tr>
                             <th>Name of the Scheme/Project/Endowments/Chairs </th>
                             <th>Name of Principal/Investigator/Co-Investigator(if applicable)</th>
                             <th>Name of the funding Agency</th>
                             <th>Type (Government/Non-government)</th>
                             <th>Department </th>
                             <th>Year of Award</th>
                             <th>Funds provided (INR in lakhs)</th>
                             <th>Duration of the Project</th>
                            </tr>
                            

                           </thead>
                           <tbody>
                              
                           </tbody>
                        </table><br>
                        <button id="addRow321" style="border: none; padding: 0px; margin: 0px; background-color: #fff; height: 70px; width: 120px;float: right;"><i class="fa fa-plus-circle" style="font-size: 50px; color: orange;" data-toggle="tooltip" data-placement="top" title="Add Rows"></i></button>
                        <br>
                        <center>
                            <button class="btn btn-primary" id="save321" name="submit" type="submit" style="text-align: center;margin-left: 30px; margin-top: 10px;">Save Changes</button>
                        </center><br>
                        </form>

              <script>

              $(document).ready(function(){
                    var count321 = 0;
                    var output = "";
    
                            // jQuery button click event to add a row
                    $('#addRow321').on('click', function () {
                      count321++;
                      var output = "<tr id='row"+count321+"'><td ><input type='text' class='form-control col1' required/></td>";
                      output+= "<td><input type='text' class='form-control col2'  required/></td>";
                      output+= "<td><input type='text' class='form-control col3'  required/></td>";
                      output+= "<td><input type='text' class='form-control col4'  required/></td>";
                      output+= "<td><input type='text' class='form-control col5'  required/></td>";
                      output+= "<td><input type='number' class='form-control col6'  required/></td>";
                      output+= "<td><input type='number' class='form-control col7'  required/></td>";
                      output+= "<td><input type='number' class='form-control col8'  required/></td>";
                      output+= "</tr>";
                      tableBody = $("#table321 tbody");
                      tableBody.append(output);             
                    });

                    $("#table321 tbody").on('click', '.delete', function(){
                                    if(confirm("Are you sure you want to delete this data?")){
                                        var delete_row = $(this).data("row");
                                        $('#'+delete_row).remove();
                                    }else{
                                        return false;
                                    }
                                
                    });
                    $("#f321").on("submit", function(event){
                    var col1 = [];
                    var col2 = [];
                    var col3 = [];
                    var col4= [];
                    var col5= [];
                    var col6= [];
                    var col7= [];
                    var col8= [];
                     event.preventDefault();
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
                    $('.col8').each(function(){
                        col8.push($(this).val());
                    });
                    $.ajax({
                        url: "save321.php",
                        method:"POST",
                        data: {col1: col1, col2: col2,col3: col3 , col4: col4,col5: col5,col6: col6,col7: col7,col8: col8},
                        success: function(){
                            $("#msg321").html("<h5 style='color: green; text-align; center'>Data Saved!</h5>");
                        },
                        error: function(){
                            $("#msg321").html("<h5 style='color: red; text-align; center'>Ajax Call Error!</h5>");
                            
                        }
                    });
                });
            });

 
       </script>
    </div>        
         <!-- Metric 3.2.2-->      
         <div id="q322" class="questionContainer">
                <p class="msgContainer" id="msg322"></p>
                <img
                    
                    class="fillImage"
                >
                <p class="qName">Q<sub>N</sub>M <br>3.2.2</p>
                <p class="question">
                Grants for research projects sponsored by the government agencies 
                during the last five years (INR in Lakhs).
                </p>
                <i class="fa fa-angle-down iconRight"></i>
                <p class="questionPart">
                    <b>Data Requirement for last five years:</b>
                    <ul>
                    <li>Name of the Project</li>
                    <li>Name of the Principal Investigator</li>
                    <li>Department of Principal Investigator</li>
                    <li>Year of Award</li>
                    <li>Funds provided</li>
                    <li>Duration of the project</li>
                    <li>Funding Agency</li>
                    <li>Total amount of funds received</li>
                    </ul><br>
                </p>
                </div>
                    <div class="answerContainer" id="a322">
                        <form id="f322">
                        <table class="table table-bordered" id="table322">
                           <thead>
                            <tr>
                             <th>Name of the Scheme/Project/Endowments/Chairs </th>
                             <th>Name of Principal/Investigator/Co-Investigator(if applicable)</th>
                             <th>Name of the funding Agency</th>
                             <th>Type (Government/Non-government)</th>
                             <th>Department </th>
                             <th>Year of Award</th>
                             <th>Funds provided (INR in lakhs)</th>
                             <th>Duration of the Project</th>
                            </tr>
                            

                           </thead>
                           <tbody>
                              
                           </tbody>
                        </table><br>
                        <button id="addRow322" style="border: none; padding: 0px; margin: 0px; background-color: #fff; height: 70px; width: 120px;float: right;"><i class="fa fa-plus-circle" style="font-size: 50px; color: orange;" data-toggle="tooltip" data-placement="top" title="Add Rows"></i></button>
                        <br>
                        <center>
                            <button class="btn btn-primary" id="save322" name="submit" type="submit" style="text-align: center;margin-left: 30px; margin-top: 10px;">Save Changes</button>
                        </center><br>
                        </form>

              <script>

              $(document).ready(function(){
                    var count322 = 0;
                    var output = "";
    
                            // jQuery button click event to add a row
                    $('#addRow322').on('click', function () {
                      count322++;
                      var output = "<tr id='row"+count322+"'><td ><input type='text' class='form-control col1' required/></td>";
                      output+= "<td><input type='text' class='form-control col2'  required/></td>";
                      output+= "<td><input type='text' class='form-control col3'  required/></td>";
                      output+= "<td><input type='text' class='form-control col4'  required/></td>";
                      output+= "<td><input type='text' class='form-control col5'  required/></td>";
                      output+= "<td><input type='number' class='form-control col6'  required/></td>";
                      output+= "<td><input type='number' class='form-control col7'  required/></td>";
                      output+= "<td><input type='number' class='form-control col8'  required/></td>";
                      output+= "</tr>";
                      tableBody = $("#table322 tbody");
                      tableBody.append(output);             
                    });

                    $("#table322 tbody").on('click', '.delete', function(){
                                    if(confirm("Are you sure you want to delete this data?")){
                                        var delete_row = $(this).data("row");
                                        $('#'+delete_row).remove();
                                    }else{
                                        return false;
                                    }
                                
                    });
                    $("#f322").on("submit", function(event){
                    var col1 = [];
                    var col2 = [];
                    var col3 = [];
                    var col4= [];
                    var col5= [];
                    var col6= [];
                    var col7= [];
                    var col8= [];
                     event.preventDefault();
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
                    $('.col8').each(function(){
                        col8.push($(this).val());
                    });
                    $.ajax({
                        url: "save322.php",
                        method:"POST",
                        data: {col1: col1, col2: col2,col3: col3 , col4: col4,col5: col5,col6: col6,col7: col7,col8: col8},
                        success: function(){
                            $("#msg322").html("<h5 style='color: green; text-align; center'>Data Saved!</h5>");
                        },
                        error: function(){
                            $("#msg322").html("<h5 style='color: red; text-align; center'>Ajax Call Error!</h5>");
                            
                        }
                    });
                });
            });

 
       </script>
    </div>
    <!-- Metric 3.2.3-->      
    <div id="q323" class="questionContainer">
                <p class="msgContainer" id="msg323"></p>
                <img
                    
                    class="fillImage"
                >
                <p class="qName">Q<sub>N</sub>M <br>3.2.3</p>
                <p class="question">
                Number of research projects per teacher funded by government and
                non-government agencies during the last five years

                </p>
                <i class="fa fa-angle-down iconRight"></i>
                <p class="questionPart">
                    <b>Data Requirement for last five years:</b>
                    <ul>
                    <li>Name of the Principal Investigator</li>
                    <li>Duration of the project</li>
                    <li>Name of the research project</li>
                    <li>Amount / Fund received</li>
                    <li>Name of funding agency</li>
                    <li>Year of sanction</li>
                    <li>Department of recipient</li>
                    </ul><br>
                </p>
                </div>
                    <div class="answerContainer" id="a323">
                        <form id="f323">
                        <table class="table table-bordered" id="table323">
                           <thead>
                            <tr>
                             <th>Name of the Scheme/Project/Endowments/Chairs </th>
                             <th>Name of Principal/Investigator/Co-Investigator(if applicable)</th>
                             <th>Name of the funding Agency</th>
                             <th>Type (Government/Non-government)</th>
                             <th>Department </th>
                             <th>Year of Award</th>
                             <th>Funds provided (INR in lakhs)</th>
                             <th>Duration of the Project</th>
                            </tr>
                            

                           </thead>
                           <tbody>
                              
                           </tbody>
                        </table><br>
                        <button id="addRow323" style="border: none; padding: 0px; margin: 0px; background-color: #fff; height: 70px; width: 120px;float: right;"><i class="fa fa-plus-circle" style="font-size: 50px; color: orange;" data-toggle="tooltip" data-placement="top" title="Add Rows"></i></button>
                        <br>
                        <center>
                            <button class="btn btn-primary" id="save323" name="submit" type="submit" style="text-align: center;margin-left: 30px; margin-top: 10px;">Save Changes</button>
                        </center><br>
                        </form>

              <script>

              $(document).ready(function(){
                    var count323 = 0;
                    var output = "";
    
                            // jQuery button click event to add a row
                    $('#addRow323').on('click', function () {
                      count323++;
                      var output = "<tr id='row"+count323+"'><td ><input type='text' class='form-control col1' required/></td>";
                      output+= "<td><input type='text' class='form-control col2'  required/></td>";
                      output+= "<td><input type='text' class='form-control col3'  required/></td>";
                      output+= "<td><input type='text' class='form-control col4'  required/></td>";
                      output+= "<td><input type='text' class='form-control col5'  required/></td>";
                      output+= "<td><input type='number' class='form-control col6'  required/></td>";
                      output+= "<td><input type='number' class='form-control col7'  required/></td>";
                      output+= "<td><input type='number' class='form-control col8'  required/></td>";
                      output+= "</tr>";
                      tableBody = $("#table323 tbody");
                      tableBody.append(output);             
                    });

                    $("#table323 tbody").on('click', '.delete', function(){
                                    if(confirm("Are you sure you want to delete this data?")){
                                        var delete_row = $(this).data("row");
                                        $('#'+delete_row).remove();
                                    }else{
                                        return false;
                                    }
                                
                    });
                    $("#f323").on("submit", function(event){
                    var col1 = [];
                    var col2 = [];
                    var col3 = [];
                    var col4= [];
                    var col5= [];
                    var col6= [];
                    var col7= [];
                    var col8= [];
                     event.preventDefault();
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
                    $('.col8').each(function(){
                        col8.push($(this).val());
                    });
                    $.ajax({
                        url: "save323.php",
                        method:"POST",
                        data: {col1: col1, col2: col2,col3: col3 , col4: col4,col5: col5,col6: col6,col7: col7,col8: col8},
                        success: function(){
                            $("#msg323").html("<h5 style='color: green; text-align; center'>Data Saved!</h5>");
                        },
                        error: function(){
                            $("#msg323").html("<h5 style='color: red; text-align; center'>Ajax Call Error!</h5>");
                            
                        }
                    });
                });
            });

 
       </script>
    </div>
            </div><br>
            <div class="criteriaTitle2">
            <h4>3.3  Innovation Ecosystem</h4>
            </div><br>
            <!-- Metric 3.3.1 -->
      <form method="post">
                <div id="q331" class="questionContainer">
                <p class="msgContainer" id="msg331"><?php ?></p>
                <img
                   
                    class="fillImage"
                >
                <p class="qName">Q<sub>L</sub>M <br>3.3.1</p>
                <p class="question">
                Institution has created an eco system for innovations including 
                Incubation centre and other initiatives for creation and transfer of
                knowledge.
                </p>
                <i class="fa fa-angle-down iconRight"></i>
                <p class="questionPart">
                    <br>
                    <ul><br><br>
                    <li>Upload Additional information.</li>
                    <li>Link for Additional information</li>
                    </ul>
                </p>
                </div>
                    <div class="answerContainer" id="a331">
                        <label for="answer">Description (Max Length: 500 words)</label>
                        <textarea name="answer" class="form-control" rows="6" maxlength="550" placeholder="<?php ?>" required></textarea><br>
                        <label for="doclink">Link to the relevent document</label>
                        <input type="text" name="doclink" class="form-control" placeholder="<?php ?>" autocomplete="off" required /><br>
                        <input type="submit" name="submit331" class="btn btn-primary" value="Save Changes" 
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
        <!-- Metric 3.3.2-->      
    <div id="q332" class="questionContainer">
                <p class="msgContainer" id="msg332"></p>
                <img
                    
                    class="fillImage"
                >
                <p class="qName">Q<sub>N</sub>M <br>3.3.2</p>
                <p class="question">
                Number of workshops/seminars conducted on Research 
                methodology, Intellectual Property Rights (IPR),entrepreneurship, 
                skill development during the last five years.
                </p>
                <i class="fa fa-angle-down iconRight"></i>
                <p class="questionPart">
                    <b>Data Requirement for last five years:</b>
                    <ul>
                    <li>Name of the workshops / seminars</li>
                    <li>Number of Participants</li>
                    <li>Date (From -to)</li>
                    <li>Link to the activity report on the website</li>
                    </ul><br>
                </p>
                </div>
                    <div class="answerContainer" id="a332">
                        <form id="f332">
                        <table class="table table-bordered" id="table332">
                           <thead>
                            <tr>
                             <th>Year</th>
                             <th>Name of the workshop/ seminar</th>
                             <th>Number of Participants</th>
                             <th>Date From – To</th>
                             <th>Link to the Activity report on the website</th>
                             <th>Date of establishment of IPR cell</th>
                            </tr>
                            

                           </thead>
                           <tbody>
                              
                           </tbody>
                        </table><br>
                        <button id="addRow332" style="border: none; padding: 0px; margin: 0px; background-color: #fff; height: 70px; width: 120px;float: right;"><i class="fa fa-plus-circle" style="font-size: 50px; color: orange;" data-toggle="tooltip" data-placement="top" title="Add Rows"></i></button>
                        <br>
                        <center>
                            <button class="btn btn-primary" id="save332" name="submit" type="submit" style="text-align: center;margin-left: 30px; margin-top: 10px;">Save Changes</button>
                        </center><br>
                        </form>

              <script>

              $(document).ready(function(){
                    var count332 = 0;
                    var output = "";
    
                            // jQuery button click event to add a row
                    $('#addRow332').on('click', function () {
                      count332++;
                      var output = "<tr id='row"+count332+"'><td ><input type='number' class='form-control col1' required/></td>";
                      output+= "<td><input type='text' class='form-control col2'  required/></td>";
                      output+= "<td><input type='number' class='form-control col3'  required/></td>";
                      output+= "<td><input type='text' class='form-control col4'  required/></td>";
                      output+= "<td><input type='text' class='form-control col5'  required/></td>";
                      output+= "<td><input type='date' class='form-control col6'  required/></td>";
                      output+= "</tr>";
                      tableBody = $("#table332 tbody");
                      tableBody.append(output);             
                    });

                    $("#table332 tbody").on('click', '.delete', function(){
                                    if(confirm("Are you sure you want to delete this data?")){
                                        var delete_row = $(this).data("row");
                                        $('#'+delete_row).remove();
                                    }else{
                                        return false;
                                    }
                                
                    });
                    $("#f332").on("submit", function(event){
                    var col1 = [];
                    var col2 = [];
                    var col3 = [];
                    var col4= [];
                    var col5= [];
                    var col6= [];
                     event.preventDefault();
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
                    $.ajax({
                        url: "save332.php",
                        method:"POST",
                        data: {col1: col1, col2: col2,col3: col3 , col4: col4,col5: col5,col6: col6},
                        success: function(){
                            $("#msg332").html("<h5 style='color: green; text-align; center'>Data Saved!</h5>");
                        },
                        error: function(){
                            $("#msg332").html("<h5 style='color: red; text-align; center'>Ajax Call Error!</h5>");
                            
                        }
                    });
                });
            });

 
       </script>
    </div>
    <!-- Metric 3.3.3-->      
    <div id="q333" class="questionContainer">
                <p class="msgContainer" id="msg333"></p>
                <img
                    
                    class="fillImage"
                >
                <p class="qName">Q<sub>N</sub>M <br>3.3.3</p>
                <p class="question">
                Number of awards / recognitions received for research/innovations 
                by the institution/teachers/research scholars/students during the 
                last five years
                </p>
                <i class="fa fa-angle-down iconRight"></i>
                <p class="questionPart">
                    <b>Data Requirement for last five years:</b>
                    <ul>
                    <li>Name of the Awardee </li>
                    <li>Name of the Awarding Agency with contact details</li>
                    <li>Year of Award</li>
                    </ul><br>
                </p>
                </div>
                    <div class="answerContainer" id="a333">
                        <form id="f333">
                        <table class="table table-bordered" id="table333">
                           <thead>
                            <tr>
                             <th>Title of the Innovation</th>
                             <th>Name of the Awardee</th>
                             <th>Name of the Awarding Agency with contact details</th>
                             <th>Year of Award</th>
                             <th>Category-institution/teacher/researchscholar/student</th>
                            </tr>
                            

                           </thead>
                           <tbody>
                              
                           </tbody>
                        </table><br>
                        <button id="addRow333" style="border: none; padding: 0px; margin: 0px; background-color: #fff; height: 70px; width: 120px;float: right;"><i class="fa fa-plus-circle" style="font-size: 50px; color: orange;" data-toggle="tooltip" data-placement="top" title="Add Rows"></i></button>
                        <br>
                        <center>
                            <button class="btn btn-primary" id="save333" name="submit" type="submit" style="text-align: center;margin-left: 30px; margin-top: 10px;">Save Changes</button>
                        </center><br>
                        </form>

              <script>

              $(document).ready(function(){
                    var count333 = 0;
                    var output = "";
    
                            // jQuery button click event to add a row
                    $('#addRow333').on('click', function () {
                      count333++;
                      var output = "<tr id='row"+count333+"'><td ><input type='text' class='form-control col1' required/></td>";
                      output+= "<td><input type='text' class='form-control col2'  required/></td>";
                      output+= "<td><input type='text' class='form-control col3'  required/></td>";
                      output+= "<td><input type='number' class='form-control col4'  required/></td>";
                      output+= "<td><input type='text' class='form-control col5'  required/></td>";
                      output+= "</tr>";
                      tableBody = $("#table333 tbody");
                      tableBody.append(output);             
                    });

                    $("#table333 tbody").on('click', '.delete', function(){
                                    if(confirm("Are you sure you want to delete this data?")){
                                        var delete_row = $(this).data("row");
                                        $('#'+delete_row).remove();
                                    }else{
                                        return false;
                                    }
                                
                    });
                    $("#f333").on("submit", function(event){
                    var col1 = [];
                    var col2 = [];
                    var col3 = [];
                    var col4= [];
                    var col5= [];
                     event.preventDefault();
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
                    $.ajax({
                        url: "save333.php",
                        method:"POST",
                        data: {col1: col1, col2: col2,col3: col3 , col4: col4,col5: col5},
                        success: function(){
                            $("#msg333").html("<h5 style='color: green; text-align; center'>Data Saved!</h5>");
                        },
                        error: function(){
                            $("#msg333").html("<h5 style='color: red; text-align; center'>Ajax Call Error!</h5>");
                            
                        }
                    });
                });
            });

 
       </script>
    </div>
                 <!-- Metric 3.3.4 DDE ONLY -->
                <div id="q334" class="questionContainer ddeOnly" data-toggle="tooltip" data-placement="top" title="To be filled by Directorate of Distance Education (DDEs) Only!">
                <img
                
                    class="fillImage"
                >
                <p class="qName">Q<sub>N</sub>M <br>3.3.4</p>
                <p style="text-align: center;" id="msg334"><?php ?></p>
                <p class="question">
                <b>Workshops / seminars conducted by DDE on ODL practices</b>
                Total number of workshops/seminars conducted by DDE on ODL practices year
                wise during the last five years on:
                <ul>
                  <li>Self learning material development</li>
                  <li>Learner Support services and academic counseling</li>
                  <li>Intellectual Property Rights (IPR);</li>
                  <li>Open Educational Resources (OERs);</li>
                  <li>Massive Open Online Courses (MOOCs);</li>
                  <li>Technology-Enabled Learning;</li>
                  <li>Learning Management System;</li>
                  <li>Development of e-content and</li>
                  <li>Other innovative technologies</li>
                </ul>
                </p>
                
                </div>
                    <div class="answerContainer" id="a334">
                        <form method = "POST">
                        <table class="table table-bordered" id="table334">
                           <tbody>
                              <tr>
                                  <th scope="row" style="text-align: center;">Year</th>
                                  <td><select name="year1" class="form-control" id="year1" required>
                                  <option value="0" selected disabled>SELECT YEAR</option>
                                     <?php 
                                        $query = "SELECT * FROM year_list ORDER BY id DESC";
                                        $getYear = mysqli_query($connection, $query);
                                        while($res = $getYear->fetch_assoc()){
                                            $year = $res['year'];
                                            echo "<option value='$year'>$year</option>";
                                        }
                                     ?>
                                  </select></td>
                                  <td><select name="year2" class="form-control" id="year2" required>
                                  <option value="0" selected disabled>SELECT YEAR</option>
                                     <?php 
                                        $query = "SELECT * FROM year_list ORDER BY id DESC";
                                        $getYear = mysqli_query($connection, $query);
                                        while($res = $getYear->fetch_assoc()){
                                            $year = $res['year'];
                                            echo "<option value='$year'>$year</option>";
                                        }
                                     ?>
                                  </select></td>
                                  <td><select name="year3" class="form-control" id="year3" required>
                                  <option value="0" selected disabled>SELECT YEAR</option>
                                     <?php 
                                        $query = "SELECT * FROM year_list ORDER BY id DESC";
                                        $getYear = mysqli_query($connection, $query);
                                        while($res = $getYear->fetch_assoc()){
                                            $year = $res['year'];
                                            echo "<option value='$year'>$year</option>";
                                        }
                                     ?>
                                  </select></td>
                                  <td><select name="year4" class="form-control" id="year4" required>
                                      <option value="0" selected disabled>SELECT YEAR</option>
                                     <?php 
                                        $query = "SELECT * FROM year_list ORDER BY id DESC";
                                        $getYear = mysqli_query($connection, $query);
                                        while($res = $getYear->fetch_assoc()){
                                            $year = $res['year'];
                                            echo "<option value='$year'>$year</option>";
                                        }
                                     ?>
                                  </select></td>
                                  <td><select name="year5" class="form-control" id="year5" required>
                                  <option value="0" selected disabled>SELECT YEAR</option>
                                     <?php 
                                        $query = "SELECT * FROM year_list ORDER BY id DESC";
                                        $getYear = mysqli_query($connection, $query);
                                        while($res = $getYear->fetch_assoc()){
                                            $year = $res['year'];
                                            echo "<option value='$year'>$year</option>";
                                        }
                                     ?>
                                  </select></td>
                              </tr>
                              <tr>
                                  <th scope="row" style="text-align: center;">Fresh Enrolment</th>
                                  <td><input type="number" class="form-control" name="fresh_enroll1" placeholder="<?php ?>" required/></td>
                                  <td><input type="number" class="form-control" name="fresh_enroll2" placeholder="<?php ?>" required/></td>
                                  <td><input type="number" class="form-control" name="fresh_enroll3" placeholder="<?php ?>" required/></td>
                                  <td><input type="number" class="form-control" name="fresh_enroll4" placeholder="<?php ?>" required/></td>
                                  <td><input type="number" class="form-control" name="fresh_enroll5" placeholder="<?php ?>" required/></td>
                              </tr>
                              <tr>
                                  <th scope="row" style="text-align: center;">*Admission into next semester (re-registration)</th>
                                  <td><input type="number" class="form-control" name="next_sem_1" placeholder="<?php ?>" required/></td>
                                  <td><input type="number" class="form-control" name="next_sem_2" placeholder="<?php ?>" required/></td>
                                  <td><input type="number" class="form-control" name="next_sem_3" placeholder="<?php ?>" required/></td>
                                  <td><input type="number" class="form-control" name="next_sem_4" placeholder="<?php ?>" required/></td>
                                  <td><input type="number" class="form-control" name="next_sem_5" placeholder="<?php ?>" required/></td>
                              </tr>
                              <tr>
                                  <th scope="row" style="text-align: center;">Total enrolment</th>
                                  <td><input type="number" class="form-control" name="total_enroll1" placeholder="<?php ?>" required/></td>
                                  <td><input type="number" class="form-control" name="total_enroll2" placeholder="<?php ?>" required/></td>
                                  <td><input type="number" class="form-control" name="total_enroll3" placeholder="<?php ?>" required/></td>
                                  <td><input type="number" class="form-control" name="total_enroll4" placeholder="<?php ?>" required/></td>
                                  <td><input type="number" class="form-control" name="total_enroll5" placeholder="<?php ?>" required/></td>
                              </tr>
                              <tr>
                                  <th scope="row" style="text-align: center;">Increase / Decrease over preceding academic year</th>
                                  <td><input type="number" class="form-control" name="inc_dec_1" placeholder="<?php ?>" required/></td>
                                  <td><input type="number" class="form-control" name="inc_dec_2" placeholder="<?php ?>" required/></td>
                                  <td><input type="number" class="form-control" name="inc_dec_3" placeholder="<?php ?>" required/></td>
                                  <td><input type="number" class="form-control" name="inc_dec_4" placeholder="<?php ?>" required/></td>
                                  <td><input type="number" class="form-control" name="inc_dec_5" placeholder="<?php ?>" required/></td>
                              </tr>

                         
                           </tbody>
                        </table><br>
                        <center>
                            <button class="btn btn-primary"  name="submit213" type="submit" style="text-align: center;margin-left: 30px; margin-top: 10px;">Save Changes</button>
                        </center><br>
                        </div>
                        </form>

       <!-- Metric 3.3.5 DDE ONLY -->
       <div id="q335" class="questionContainer ddeOnly" data-toggle="tooltip" data-placement="top" title="To be filled by Directorate of Distance Education (DDEs) Only!">
                <img
                
                    class="fillImage"
                >
                <p class="qName">Q<sub>N</sub>M <br>3.3.5</p>
                <p style="text-align: center;" id="msg335"><?php ?></p>
                <p class="question">
                <b>Innovative content developed at DDE</b>
                Innovative content developed at DDE year wise during the last five years in the
                form of e-modules / e-SLMs / MOOCs for :
                <ul>
                  <li>NMEICT</li>
                  <li>NPTEL</li>
                  <li>SWAYAM</li>
                  <li>e-PG Pathshala</li>
                  <li>e-SLMs</li>
                  <li>other MOOCs platform</li>
                  <li>Institutional LMS</li>
                </ul>
                </p>
                
                </div>
                    <div class="answerContainer" id="a335">
                        <form method = "POST">
                        <table class="table table-bordered" id="table335">
                           <tbody>
                              <tr>
                                  <th scope="row" style="text-align: center;">Year</th>
                                  <td><select name="year1" class="form-control" id="year1" required>
                                  <option value="0" selected disabled>SELECT YEAR</option>
                                     <?php 
                                        $query = "SELECT * FROM year_list ORDER BY id DESC";
                                        $getYear = mysqli_query($connection, $query);
                                        while($res = $getYear->fetch_assoc()){
                                            $year = $res['year'];
                                            echo "<option value='$year'>$year</option>";
                                        }
                                     ?>
                                  </select></td>
                                  <td><select name="year2" class="form-control" id="year2" required>
                                  <option value="0" selected disabled>SELECT YEAR</option>
                                     <?php 
                                        $query = "SELECT * FROM year_list ORDER BY id DESC";
                                        $getYear = mysqli_query($connection, $query);
                                        while($res = $getYear->fetch_assoc()){
                                            $year = $res['year'];
                                            echo "<option value='$year'>$year</option>";
                                        }
                                     ?>
                                  </select></td>
                                  <td><select name="year3" class="form-control" id="year3" required>
                                  <option value="0" selected disabled>SELECT YEAR</option>
                                     <?php 
                                        $query = "SELECT * FROM year_list ORDER BY id DESC";
                                        $getYear = mysqli_query($connection, $query);
                                        while($res = $getYear->fetch_assoc()){
                                            $year = $res['year'];
                                            echo "<option value='$year'>$year</option>";
                                        }
                                     ?>
                                  </select></td>
                                  <td><select name="year4" class="form-control" id="year4" required>
                                      <option value="0" selected disabled>SELECT YEAR</option>
                                     <?php 
                                        $query = "SELECT * FROM year_list ORDER BY id DESC";
                                        $getYear = mysqli_query($connection, $query);
                                        while($res = $getYear->fetch_assoc()){
                                            $year = $res['year'];
                                            echo "<option value='$year'>$year</option>";
                                        }
                                     ?>
                                  </select></td>
                                  <td><select name="year5" class="form-control" id="year5" required>
                                  <option value="0" selected disabled>SELECT YEAR</option>
                                     <?php 
                                        $query = "SELECT * FROM year_list ORDER BY id DESC";
                                        $getYear = mysqli_query($connection, $query);
                                        while($res = $getYear->fetch_assoc()){
                                            $year = $res['year'];
                                            echo "<option value='$year'>$year</option>";
                                        }
                                     ?>
                                  </select></td>
                              </tr>
                              <tr>
                                  <th scope="row" style="text-align: center;">Fresh Enrolment</th>
                                  <td><input type="number" class="form-control" name="fresh_enroll1" placeholder="<?php ?>" required/></td>
                                  <td><input type="number" class="form-control" name="fresh_enroll2" placeholder="<?php ?>" required/></td>
                                  <td><input type="number" class="form-control" name="fresh_enroll3" placeholder="<?php ?>" required/></td>
                                  <td><input type="number" class="form-control" name="fresh_enroll4" placeholder="<?php ?>" required/></td>
                                  <td><input type="number" class="form-control" name="fresh_enroll5" placeholder="<?php ?>" required/></td>
                              </tr>
                              <tr>
                                  <th scope="row" style="text-align: center;">*Admission into next semester (re-registration)</th>
                                  <td><input type="number" class="form-control" name="next_sem_1" placeholder="<?php ?>" required/></td>
                                  <td><input type="number" class="form-control" name="next_sem_2" placeholder="<?php ?>" required/></td>
                                  <td><input type="number" class="form-control" name="next_sem_3" placeholder="<?php ?>" required/></td>
                                  <td><input type="number" class="form-control" name="next_sem_4" placeholder="<?php ?>" required/></td>
                                  <td><input type="number" class="form-control" name="next_sem_5" placeholder="<?php ?>" required/></td>
                              </tr>
                              <tr>
                                  <th scope="row" style="text-align: center;">Total enrolment</th>
                                  <td><input type="number" class="form-control" name="total_enroll1" placeholder="<?php ?>" required/></td>
                                  <td><input type="number" class="form-control" name="total_enroll2" placeholder="<?php ?>" required/></td>
                                  <td><input type="number" class="form-control" name="total_enroll3" placeholder="<?php ?>" required/></td>
                                  <td><input type="number" class="form-control" name="total_enroll4" placeholder="<?php ?>" required/></td>
                                  <td><input type="number" class="form-control" name="total_enroll5" placeholder="<?php ?>" required/></td>
                              </tr>
                              <tr>
                                  <th scope="row" style="text-align: center;">Increase / Decrease over preceding academic year</th>
                                  <td><input type="number" class="form-control" name="inc_dec_1" placeholder="<?php ?>" required/></td>
                                  <td><input type="number" class="form-control" name="inc_dec_2" placeholder="<?php ?>" required/></td>
                                  <td><input type="number" class="form-control" name="inc_dec_3" placeholder="<?php ?>" required/></td>
                                  <td><input type="number" class="form-control" name="inc_dec_4" placeholder="<?php ?>" required/></td>
                                  <td><input type="number" class="form-control" name="inc_dec_5" placeholder="<?php ?>" required/></td>
                              </tr>


                           </tbody>
                        </table><br>
                        <center>
                            <button class="btn btn-primary"  name="submit335" type="submit" style="text-align: center;margin-left: 30px; margin-top: 10px;">Save Changes</button>
                        </center><br>
                        </form>
                        </div><br>
      <div class="criteriaTitle2">
       <h4>3.4 Research Publications and Awards</h4>
      </div><br>
      <!-- Metric 3.4.1 -->
      <form method="post">
                <div id="q341" class="questionContainer">
                <p class="msgContainer" id="msg341"><?php?></p>
                <img
                    <?php 
                    // $get = mysqli_query($connection, "SELECT*FROM ssr_m3_4_1 WHERE username = '$adminname'");
                    // $n = mysqli_num_rows($get);
                    // if($n > 0){
                    //     echo "src='$filled' data-toggle='tooltip' data-placement='bottom' title='$n Filled'";
                    // }else if($n == 0){
                    //     echo "src='$unfilled' data-toggle='tooltip' data-placement='bottom' title='Metric Not Filled'";
                    // }else{
                    //     echo "src='$notapplicableimg' data-toggle='tooltip' data-placement='bottom' title='Metric Not Applicable'";
                    // }
                    // ?>
                    class="fillImage"
                >
                <p class="qName">Q<sub>L</sub>M <br>3.4.1</p>
                <p class="question">
                The institution ensures implementation of its stated Code of
                Ethics for research.
                The institution has a stated Code of Ethics for research and 
                the implementation of which is ensured through the following:
                </p><i class="fa fa-angle-down iconRight"></i><br><br><br>
                <ul>
                  <li>Inclusion of research ethics in the research methodology course work</li>
                  <li>Presence of institutional Ethics committees (Animal, chemical,bio-ethics etc)</li>
                  <li>Plagiarism check</li>
                  <li>Research Advisory Committee</li>
                </ul> 
                </p>
                
                <p class="questionPart">
                    <!-- <select name="options" class="form-control" id="options">
                    <option value="value1">A. All 4 of the above</option>
                    <option value="value2">B. Any 3 of the above</option>
                    <option value="value3">C. Any 2 of the above</option>
                    <option value="value4">D. Any 1 of the above</option>
                    <option value="value5">E. None of the above</option> -->
                    <ul>
                    <li>Upload Additional information.</li>
                    <li>Link for Additional information</li>
                    </ul>
                </p>
                </div>
                <div class="answerContainer" id="a341">
                        <label for="answer">Description (Max Length: 500 words)</label>
                        <textarea name="answer" class="form-control" rows="6" maxlength="550" placeholder="<?php ?>" required></textarea><br>
                        <label for="doclink">Link to the relevent document</label>
                        <input type="text" name="doclink" class="form-control" placeholder="<?php ?>" autocomplete="off" required /><br>
                        <input type="submit" name="submit341" class="btn btn-primary" value="Save Changes" 
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
      <!-- Metric 3.4.2 -->
      <form method="post">
                <div id="q342" class="questionContainer">
                <p class="msgContainer" id="msg342"><?php ?></p>
                <img
                    <?php 
                    // $get = mysqli_query($connection, "SELECT*FROM ssr_m3_4_2 WHERE username = '$adminname'");
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
                <p class="qName">Q<sub>L</sub>M <br>3.4.2</p>
                <p class="question">
                The institution provides incentives to teachers who receive state,
                national and international recognitions/awards
                </p>
                <i class="fa fa-angle-down iconRight"></i>
                <p class="questionPart">
                    <br>
                    <!-- <label for="options">Options:</label>
                    <select name="options" id="options">
                    <option value="value1">A. All 4 of the above</option>
                    <option value="value2">B. Any 3 of the above</option>
                    <option value="value3">C. Any 2 of the above</option>
                    <option value="value4">D. Any 1 of the above</option>
                    <option value="value5">E. None of the above</option> -->
                    <ul><br>
                    <li>Upload Additional information.</li>
                    <li>Link for Additional information</li>
                    </ul>
                </p>
                </div>
                    <div class="answerContainer" id="a342">
                        <label for="answer">Description (Max Length: 500 words)</label>
                        <textarea name="answer" class="form-control" rows="6" maxlength="550" placeholder="<?php ?>" required></textarea><br>
                        <label for="doclink">Link to the relevent document</label>
                        <input type="text" name="doclink" class="form-control" placeholder="<?php ?>" autocomplete="off" required /><br>
                        <input type="submit" name="submit342" class="btn btn-primary" value="Save Changes" 
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
    <!-- Metric 3.4.3-->      
    <div id="q343" class="questionContainer">
                <p class="msgContainer" id="msg343"></p>
                <img
                    
                    class="fillImage"
                >
                <p class="qName">Q<sub>N</sub>M <br>3.4.3</p>
                <p class="question">
                Number of Patents published/awarded during the last five years
                </p>
                <i class="fa fa-angle-down iconRight"></i>
                <p class="questionPart">
                    <b>Data Requirement for last five years:</b>
                    <ul>
                    <li>Name of the Patent published/awarded</li>
                    <li>Patent Number</li>
                    <li>Year of Award</li>
                    </ul><br>
                </p>
                </div>
                    <div class="answerContainer" id="a343">
                        <form id="f343">
                        <table class="table table-bordered" id="table343">
                           <thead>
                            <tr>
                             <th>Name of the Patenter </th>
                             <th>Patent Number</th>
                             <th>Title of the patent</th>
                             <th>Year of Award of patent</th>
                            </tr>
                            

                           </thead>
                           <tbody>
                              
                           </tbody>
                        </table><br>
                        <button id="addRow343" style="border: none; padding: 0px; margin: 0px; background-color: #fff; height: 70px; width: 120px;float: right;"><i class="fa fa-plus-circle" style="font-size: 50px; color: orange;" data-toggle="tooltip" data-placement="top" title="Add Rows"></i></button>
                        <br>
                        <center>
                            <button class="btn btn-primary" id="save343" name="submit" type="submit" style="text-align: center;margin-left: 30px; margin-top: 10px;">Save Changes</button>
                        </center><br>
                        </form>

              <script>

              $(document).ready(function(){
                    var count343 = 0;
                    var output = "";
    
                            // jQuery button click event to add a row
                    $('#addRow343').on('click', function () {
                      count343++;
                      var output = "<tr id='row"+count343+"'><td ><input type='text' class='form-control col1' required/></td>";
                      output+= "<td><input type='text' class='form-control col2'  required/></td>";
                      output+= "<td><input type='text' class='form-control col3'  required/></td>";
                      output+= "<td><input type='number' class='form-control col4'  required/></td>";
                      output+= "</tr>";
                      tableBody = $("#table343 tbody");
                      tableBody.append(output);             
                    });

                    $("#table343 tbody").on('click', '.delete', function(){
                                    if(confirm("Are you sure you want to delete this data?")){
                                        var delete_row = $(this).data("row");
                                        $('#'+delete_row).remove();
                                    }else{
                                        return false;
                                    }
                                
                    });
                    $("#f343").on("submit", function(event){
                    var col1 = [];
                    var col2 = [];
                    var col3 = [];
                    var col4= [];
                     event.preventDefault();
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
                    $.ajax({
                        url: "save343.php",
                        method:"POST",
                        data: {col1: col1, col2: col2,col3: col3 , col4: col4},
                        success: function(){
                            $("#msg343").html("<h5 style='color: green; text-align; center'>Data Saved!</h5>");
                        },
                        error: function(){
                            $("#msg343").html("<h5 style='color: red; text-align; center'>Ajax Call Error!</h5>");
                            
                        }
                    });
                });
            });

 
       </script>
    </div>  
    <!-- Metric 3.4.4-->      
    <div id="q344" class="questionContainer">
                <p class="msgContainer" id="msg344"></p>
                <img
                    
                    class="fillImage"
                >
                <p class="qName">Q<sub>N</sub>M <br>3.4.4</p>
                <p class="question">
                Number of Ph.D’s awarded per teacher during the last five years
                </p>
                <i class="fa fa-angle-down iconRight"></i>
                <p class="questionPart">
                    <b>Data Requirement for last five years:</b>
                    <ul>
                    <li>Name of the PhD scholar</li>
                    <li>Name of the Department</li>
                    <li>Name of the guide/s</li>
                    <li>Year of registration of the scholar</li>
                    <li>Year of award of PhD</li>
                    </ul><br>
                </p>
                </div>
                    <div class="answerContainer" id="a344">
                        <form id="f344">
                        <table class="table table-bordered" id="table344">
                           <thead>
                            <tr>
                             <th>Name of the PhD Scholar</th>
                             <th>Name of the Department</th>
                             <th>Name of the guide/s</th>
                             <th>Title of the thesis</th>
                             <th>Year of registration of the Scholar</th>
                             <th>Year of award of PhD</th>
                            </tr>
                            

                           </thead>
                           <tbody>
                              
                           </tbody>
                        </table><br>
                        <button id="addRow344" style="border: none; padding: 0px; margin: 0px; background-color: #fff; height: 70px; width: 120px;float: right;"><i class="fa fa-plus-circle" style="font-size: 50px; color: orange;" data-toggle="tooltip" data-placement="top" title="Add Rows"></i></button>
                        <br>
                        <center>
                            <button class="btn btn-primary" id="save344" name="submit" type="submit" style="text-align: center;margin-left: 30px; margin-top: 10px;">Save Changes</button>
                        </center><br>
                        </form>

              <script>

              $(document).ready(function(){
                    var count344 = 0;
                    var output = "";
    
                            // jQuery button click event to add a row
                    $('#addRow344').on('click', function () {
                      count344++;
                      var output = "<tr id='row"+count344+"'><td ><input type='text' class='form-control col1' required/></td>";
                      output+= "<td><input type='text' class='form-control col2'  required/></td>";
                      output+= "<td><input type='text' class='form-control col3'  required/></td>";
                      output+= "<td><input type='text' class='form-control col4'  required/></td>";
                      output+= "<td><input type='number' class='form-control col5'  required/></td>";
                      output+= "<td><input type='number' class='form-control col6'  required/></td>";
                      output+= "</tr>";
                      tableBody = $("#table344 tbody");
                      tableBody.append(output);             
                    });

                    $("#table344 tbody").on('click', '.delete', function(){
                                    if(confirm("Are you sure you want to delete this data?")){
                                        var delete_row = $(this).data("row");
                                        $('#'+delete_row).remove();
                                    }else{
                                        return false;
                                    }
                                
                    });
                    $("#f344").on("submit", function(event){
                    var col1 = [];
                    var col2 = [];
                    var col3 = [];
                    var col4= [];
                    var col5= [];
                    var col6= [];
                     event.preventDefault();
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
                    $.ajax({
                        url: "save344.php",
                        method:"POST",
                        data: {col1: col1, col2: col2,col3: col3 , col4: col4, col5: col5, col6: col6},
                        success: function(){
                            $("#msg344").html("<h5 style='color: green; text-align; center'>Data Saved!</h5>");
                        },
                        error: function(){
                            $("#msg344").html("<h5 style='color: red; text-align; center'>Ajax Call Error!</h5>");
                            
                        }
                    });
                });
            });

 
       </script>
    </div>
    <!-- Metric 3.4.5-->      
    <div id="q345" class="questionContainer">
                <p class="msgContainer" id="msg345"></p>
                <img
                    
                    class="fillImage"
                >
                <p class="qName">Q<sub>N</sub>M <br>3.4.5</p>
                <p class="question">
                Number of research papers per teacher in the Journals notified on
                UGC website during the last five years 
                </p>
                <i class="fa fa-angle-down iconRight"></i>
                <p class="questionPart">
                    <b>Data Requirement for last five years:</b>
                    <ul>
                    <li>Title of paper</li>
                    <li>Name of the author/s</li>
                    <li>Department of the teacher</li>
                    <li>Name of journal</li>
                    <li>Year of publication</li>
                    <li>ISBN/ISSN number</li>
                    </ul><br>
                </p>
                </div>
                    <div class="answerContainer" id="a345">
                        <form id="f345">
                        <table class="table table-bordered" id="table345">
                           <thead>
                            <tr>
                             <th>Title of paper</th>
                             <th>Name of the author/s</th>
                             <th>Department of the teacher</th>
                             <th>Name of journal</th>
                             <th>Year of publication</th>
                             <th>ISSN number</th>
                             <th>Link to the recognition in UGC enlistment of the Journal</th>
                            </tr>
                            

                           </thead>
                           <tbody>
                              
                           </tbody>
                        </table><br>
                        <button id="addRow345" style="border: none; padding: 0px; margin: 0px; background-color: #fff; height: 70px; width: 120px;float: right;"><i class="fa fa-plus-circle" style="font-size: 50px; color: orange;" data-toggle="tooltip" data-placement="top" title="Add Rows"></i></button>
                        <br>
                        <center>
                            <button class="btn btn-primary" id="save345" name="submit" type="submit" style="text-align: center;margin-left: 30px; margin-top: 10px;">Save Changes</button>
                        </center><br>
                        </form>

              <script>

              $(document).ready(function(){
                    var count345 = 0;
                    var output = "";
    
                            // jQuery button click event to add a row
                    $('#addRow345').on('click', function () {
                      count345++;
                      var output = "<tr id='row"+count345+"'><td ><input type='text' class='form-control col1' required/></td>";
                      output+= "<td><input type='text' class='form-control col2'  required/></td>";
                      output+= "<td><input type='text' class='form-control col3'  required/></td>";
                      output+= "<td><input type='text' class='form-control col4'  required/></td>";
                      output+= "<td><input type='number' class='form-control col5'  required/></td>";
                      output+= "<td><input type='number' class='form-control col6'  required/></td>";
                      output+= "<td><input type='text' class='form-control col7'  required/></td>";
                      output+= "</tr>";
                      tableBody = $("#table345 tbody");
                      tableBody.append(output);             
                    });

                    $("#table345 tbody").on('click', '.delete', function(){
                                    if(confirm("Are you sure you want to delete this data?")){
                                        var delete_row = $(this).data("row");
                                        $('#'+delete_row).remove();
                                    }else{
                                        return false;
                                    }
                                
                    });
                    $("#f345").on("submit", function(event){
                    var col1 = [];
                    var col2 = [];
                    var col3 = [];
                    var col4= [];
                    var col5= [];
                    var col6= [];
                    var col7= [];
                     event.preventDefault();
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
                        url: "save345.php",
                        method:"POST",
                        data: {col1: col1, col2: col2,col3: col3 , col4: col4, col5: col5, col6: col6, col7: col7},
                        success: function(){
                            $("#msg345").html("<h5 style='color: green; text-align; center'>Data Saved!</h5>");
                        },
                        error: function(){
                            $("#msg345").html("<h5 style='color: red; text-align; center'>Ajax Call Error!</h5>");
                            
                        }
                    });
                });
            });

 
       </script>
    </div>
    <!-- Metric 3.4.6-->      
    <div id="q346" class="questionContainer">
                <p class="msgContainer" id="msg346"></p>
                <img
                    
                    class="fillImage"
                >
                <p class="qName">Q<sub>N</sub>M <br>3.4.6</p>
                <p class="question">
                Total number of books and chapters in edited volumes / 
                books published, and papers in national/international conference-
                proceedings year wise during the last five years 
                </p>
                <i class="fa fa-angle-down iconRight"></i>
                <p class="questionPart">
                    <b>Data Requirement for last five years:</b>
                    <ul>
                    <li>Name of the teacher: Title of the paper</li>
                    <li>Title of the book published: Name of the author/s: Title of the proceedings of the conference</li>
                    <li>Name of the publisher: National / International</li>
                    <li>National / international : ISBN/ISSN number of the proceeding</li>
                    <li>Year of publication</li>
                    </ul><br>
                </p>
                </div>
                    <div class="answerContainer" id="a346">
                        <form id="f346">
                        <table class="table table-bordered" id="table346">
                           <thead>
                            <tr>
                             <th>Si.No.</th>
                             <th>Name of the teacher</th>
                             <th>Title of the book chapters/published</th>
                             <th>Title of the paper</th>
                             <th>Title of the preceedings of the conference</th>
                             <th>Name of the conference</th>
                             <th>National/ International</th>
                             <th>Year of publication</th>
                             <th>ISBN/ISSN number of the proceeding</th>
                             <th>Affiliating Institute at the time of publication</th>
                             <th>Name of the Publisher</th>
                            </tr>
                            

                           </thead>
                           <tbody>
                              
                           </tbody>
                        </table><br>
                        <button id="addRow346" style="border: none; padding: 0px; margin: 0px; background-color: #fff; height: 70px; width: 120px;float: right;"><i class="fa fa-plus-circle" style="font-size: 50px; color: orange;" data-toggle="tooltip" data-placement="top" title="Add Rows"></i></button>
                        <br>
                        <center>
                            <button class="btn btn-primary" id="save346" name="submit" type="submit" style="text-align: center;margin-left: 30px; margin-top: 10px;">Save Changes</button>
                        </center><br>
                        </form>

              <script>

              $(document).ready(function(){
                    var count346 = 0;
                    var output = "";
    
                            // jQuery button click event to add a row
                    $('#addRow346').on('click', function () {
                      count346++;
                      var output = "<tr id='row"+count346+"'><td ><input type='number' class='form-control col1' required/></td>";
                      output+= "<td><input type='text' class='form-control col2'  required/></td>";
                      output+= "<td><input type='text' class='form-control col3'  required/></td>";
                      output+= "<td><input type='text' class='form-control col4'  required/></td>";
                      output+= "<td><input type='text' class='form-control col5'  required/></td>";
                      output+= "<td><input type='text' class='form-control col6'  required/></td>";
                      output+= "<td><input type='text' class='form-control col7'  required/></td>";
                      output+= "<td><input type='number' class='form-control col8'  required/></td>";
                      output+= "<td><input type='number' class='form-control col9'  required/></td>";
                      output+= "<td><input type='text' class='form-control col10'  required/></td>";
                      output+= "<td><input type='text' class='form-control col11'  required/></td>";
                      output+= "</tr>";
                      tableBody = $("#table346 tbody");
                      tableBody.append(output);             
                    });

                    $("#table346 tbody").on('click', '.delete', function(){
                                    if(confirm("Are you sure you want to delete this data?")){
                                        var delete_row = $(this).data("row");
                                        $('#'+delete_row).remove();
                                    }else{
                                        return false;
                                    }
                                
                    });
                    $("#f346").on("submit", function(event){
                    var col1 = [];
                    var col2 = [];
                    var col3 = [];
                    var col4= [];
                    var col5= [];
                    var col6= [];
                    var col7= [];
                    var col8= [];
                    var col9= [];
                    var col10= [];
                    var col11= [];
                     event.preventDefault();
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
                    $('.col8').each(function(){
                        col8.push($(this).val());
                    });
                    $('.col9').each(function(){
                        col9.push($(this).val());
                    });
                    $('.col10').each(function(){
                        col10.push($(this).val());
                    });
                    $('.col11').each(function(){
                        col11.push($(this).val());
                    });
                    $.ajax({
                        url: "save346.php",
                        method:"POST",
                        data: {col1: col1, col2: col2,col3: col3 , col4: col4, col5: col5, col6: col6, col7: col7, col8: col8, col9: col9, col10: col10, col11: col11},
                        success: function(){
                            $("#msg346").html("<h5 style='color: green; text-align; center'>Data Saved!</h5>");
                        },
                        error: function(){
                            $("#msg346").html("<h5 style='color: red; text-align; center'>Ajax Call Error!</h5>");
                            
                        }
                    });
                });
            });

 
       </script>
    </div>
    <!-- Metric 3.4.7-->      
    <div id="q347" class="questionContainer">
                <p class="msgContainer" id="msg347"></p>
                <img
                    
                    class="fillImage"
                >
                <p class="qName">Q<sub>N</sub>M <br>3.4.7</p>
                <p class="question">
                E-content is developed by teachers :
                    1. For e-PG-Pathshala <br>
                    2. For CEC (Under Graduate) <br>
                    3. For SWAYAM <br>
                    4. For other MOOCs platform <br>
                    5. For NPTEL/NMEICT/any other Government Initiatives <br>
                    6. For Institutional LMS
                </p>
                <!-- options here--->
                <i class="fa fa-angle-down iconRight"></i>
                <p class="questionPart">
                    <b>Data Requirement for last five years:</b>
                    <ul>
                    <li>Platform on which module is developed</li>
                    <li>Date of launching e-content</li>
                    <li>Number of platforms on which e-content has been developed by teachers</li>
                    </ul>
                </p>
                </div>
                    <div class="answerContainer" id="a347">
                        <form id="f347">
                        <table class="table table-bordered" id="table347">
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
                        <button id="addRow347" style="border: none; padding: 0px; margin: 0px; background-color: #fff; height: 70px; width: 120px;float: right;"><i class="fa fa-plus-circle" style="font-size: 50px; color: orange;" data-toggle="tooltip" data-placement="top" title="Add Rows"></i></button>
                        <br>
                        <center>
                            <button class="btn btn-primary" id="save347" name="submit" type="submit" style="text-align: center;margin-left: 30px; margin-top: 10px;">Save Changes</button>
                        </center><br>
                        </form>

              <script>

              $(document).ready(function(){
                    var count347 = 0;
                    var output = "";
    
                            // jQuery button click event to add a row
                    $('#addRow347').on('click', function () {
                      count347++;
                      var output = "<tr id='row"+count347+"'><td ><input type='text' class='form-control col1' required/></td>";
                      output+= "<td><input type='text' class='form-control col2'  required/></td>";
                      output+= "<td><input type='text' class='form-control col3'  required/></td>";
                      output+= "<td><input type='date' class='form-control col4'  required/></td>";
                      output+= "<td><input type='text' class='form-control col5'  required/></td>";
                      output+= "<td><input type='text' class='form-control col6'  required/></td>";
                      output+= "<td><input type='text' class='form-control col7'  required/></td>";
                      output+= "</tr>";
                      tableBody = $("#table347 tbody");
                      tableBody.append(output);             
                    });

                    $("#table347 tbody").on('click', '.delete', function(){
                                    if(confirm("Are you sure you want to delete this data?")){
                                        var delete_row = $(this).data("row");
                                        $('#'+delete_row).remove();
                                    }else{
                                        return false;
                                    }
                                
                    });
                    $("#f347").on("submit", function(event){
                    var col1 = [];
                    var col2 = [];
                    var col3 = [];
                    var col4= [];
                    var col5= [];
                    var col6= [];
                    var col7= [];
                     event.preventDefault();
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
                        url: "save347.php",
                        method:"POST",
                        data: {col1: col1, col2: col2,col3: col3 , col4: col4, col5: col5, col6: col6, col7: col7},
                        success: function(){
                            $("#msg347").html("<h5 style='color: green; text-align; center'>Data Saved!</h5>");
                        },
                        error: function(){
                            $("#msg347").html("<h5 style='color: red; text-align; center'>Ajax Call Error!</h5>");
                            
                        }
                    });
                });
            });

 
       </script>
    </div>
    <!-- Metric 3.4.8-->      
    <div id="q348" class="questionContainer">
                <p class="msgContainer" id="msg348"></p>
                <img
                    
                    class="fillImage"
                >
                <p class="qName">Q<sub>N</sub>M <br>3.4.8</p>
                <p class="question">
                Bibliometrics of the publications during the last five years based on
                average Citation Index in Scopus/ Web of Science/PubMed
                </p>
                <i class="fa fa-angle-down iconRight"></i>
                <p class="questionPart">
                    <b>Data Requirement for last five years:</b>
                    <ul>
                    <li>Title of paper</li>
                    <li>Name of the author/s</li>
                    <li>Title of the journal</li>
                    <li>Year of publication</li>
                    <li>Citation Index</li>
                    </ul><br>
                </p>
                </div>
                    <div class="answerContainer" id="a348">
                        <form id="f348">
                        <table class="table table-bordered" id="table348">
                           <thead>
                            <tr>
                             <th>Title of paper</th>
                             <th>Name of the author/s</th>
                             <th>Title of the journal</th>
                             <th>Year of publication</th>
                             <th>Citation Index</th>
                            </tr>
                            

                           </thead>
                           <tbody>
                              
                           </tbody>
                        </table><br>
                        <button id="addRow348" style="border: none; padding: 0px; margin: 0px; background-color: #fff; height: 70px; width: 120px;float: right;"><i class="fa fa-plus-circle" style="font-size: 50px; color: orange;" data-toggle="tooltip" data-placement="top" title="Add Rows"></i></button>
                        <br>
                        <center>
                            <button class="btn btn-primary" id="save348" name="submit" type="submit" style="text-align: center;margin-left: 30px; margin-top: 10px;">Save Changes</button>
                        </center><br>
                        </form>

              <script>

              $(document).ready(function(){
                    var count348 = 0;
                    var output = "";
    
                            // jQuery button click event to add a row
                    $('#addRow348').on('click', function () {
                      count348++;
                      var output = "<tr id='row"+count348+"'><td ><input type='text' class='form-control col1' required/></td>";
                      output+= "<td><input type='text' class='form-control col2'  required/></td>";
                      output+= "<td><input type='text' class='form-control col3'  required/></td>";
                      output+= "<td><input type='number' class='form-control col4'  required/></td>";
                      output+= "<td><input type='number' class='form-control col5'  required/></td>";
                      output+= "</tr>";
                      tableBody = $("#table348 tbody");
                      tableBody.append(output);             
                    });

                    $("#table348 tbody").on('click', '.delete', function(){
                                    if(confirm("Are you sure you want to delete this data?")){
                                        var delete_row = $(this).data("row");
                                        $('#'+delete_row).remove();
                                    }else{
                                        return false;
                                    }
                                
                    });
                    $("#f348").on("submit", function(event){
                    var col1 = [];
                    var col2 = [];
                    var col3 = [];
                    var col4= [];
                    var col5= [];
                     event.preventDefault();
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
                    $.ajax({
                        url: "save348.php",
                        method:"POST",
                        data: {col1: col1, col2: col2,col3: col3 , col4: col4, col5: col5 },
                        success: function(){
                            $("#msg348").html("<h5 style='color: green; text-align; center'>Data Saved!</h5>");
                        },
                        error: function(){
                            $("#msg348").html("<h5 style='color: red; text-align; center'>Ajax Call Error!</h5>");
                            
                        }
                    });
                });
            });

 
       </script>
    </div>
    <!-- Metric 3.4.9-->      
    <div id="q349" class="questionContainer">
                <p class="msgContainer" id="msg349"></p>
                <img
                    
                    class="fillImage"
                >
                <p class="qName">Q<sub>N</sub>M <br>3.4.9</p>
                <p class="question">
                Bibliometrics of the publications during the last five years based on
                Scopus/ Web of Science – h-Index of the University 
                </p>
                <i class="fa fa-angle-down iconRight"></i>
                <p class="questionPart">
                    <b>Data Requirement for last five years:</b>
                    <ul>
                    <li>Title of paper</li>
                    <li>Name of the author/s</li>
                    <li>Title of the journal</li>
                    <li>Year of publication</li>
                    <li>H Index</li>
                    </ul><br>
                </p>
                </div>
                    <div class="answerContainer" id="a349">
                        <form id="f349">
                        <table class="table table-bordered" id="table349">
                           <thead>
                            <tr>
                             <th>Title of paper</th>
                             <th>Name of the author/s</th>
                             <th>Title of the journal</th>
                             <th>Year of publication</th>
                             <th>H Index</th>
                            </tr>
                            

                           </thead>
                           <tbody>
                              
                           </tbody>
                        </table><br>
                        <button id="addRow349" style="border: none; padding: 0px; margin: 0px; background-color: #fff; height: 70px; width: 120px;float: right;"><i class="fa fa-plus-circle" style="font-size: 50px; color: orange;" data-toggle="tooltip" data-placement="top" title="Add Rows"></i></button>
                        <br>
                        <center>
                            <button class="btn btn-primary" id="save349" name="submit" type="submit" style="text-align: center;margin-left: 30px; margin-top: 10px;">Save Changes</button>
                        </center><br>
                        </form>

              <script>

              $(document).ready(function(){
                    var count349 = 0;
                    var output = "";
    
                            // jQuery button click event to add a row
                    $('#addRow349').on('click', function () {
                      count349++;
                      var output = "<tr id='row"+count349+"'><td ><input type='text' class='form-control col1' required/></td>";
                      output+= "<td><input type='text' class='form-control col2'  required/></td>";
                      output+= "<td><input type='text' class='form-control col3'  required/></td>";
                      output+= "<td><input type='number' class='form-control col4'  required/></td>";
                      output+= "<td><input type='number' class='form-control col5'  required/></td>";
                      output+= "</tr>";
                      tableBody = $("#table349 tbody");
                      tableBody.append(output);             
                    });

                    $("#table349 tbody").on('click', '.delete', function(){
                                    if(confirm("Are you sure you want to delete this data?")){
                                        var delete_row = $(this).data("row");
                                        $('#'+delete_row).remove();
                                    }else{
                                        return false;
                                    }
                                
                    });
                    $("#f349").on("submit", function(event){
                    var col1 = [];
                    var col2 = [];
                    var col3 = [];
                    var col4= [];
                    var col5= [];
                     event.preventDefault();
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
                    $.ajax({
                        url: "save349.php",
                        method:"POST",
                        data: {col1: col1, col2: col2,col3: col3 , col4: col4, col5: col5 },
                        success: function(){
                            $("#msg349").html("<h5 style='color: green; text-align; center'>Data Saved!</h5>");
                        },
                        error: function(){
                            $("#msg349").html("<h5 style='color: red; text-align; center'>Ajax Call Error!</h5>");
                            
                        }
                    });
                });
            });

 
       </script>
    </div>
    <!-- Metric 3.4.10 DDE ONLY -->
    <div id="q3410" class="questionContainer ddeOnly" data-toggle="tooltip" data-placement="top" title="To be filled by Directorate of Distance Education (DDEs) Only!">
                <img
                
                    class="fillImage"
                >
                <p class="qName">Q<sub>N</sub>M <br>3.4.10</p>
                <p style="text-align: center;" id="msg3410"><?php ?></p>
                <p class="question">
                <b>Publications on Distance Education at DDE</b>
                Number of books, chapters in books, articles and research papers in journals in the
                area of Distance Education published by teachers and other academics of DDE.
                Details of the publications of teachers and other academics of DDE year wise over
                the last five years.
                </p>
                <i class="fa fa-angle-down iconRight"></i>
                <p class="questionPart">
                    <b>Data Requirement for last five years:</b>
                    <ul>
                    <li>Title of paper</li>
                    <li>Name of the author/s</li>
                    <li>Title of the journal</li>
                    <li>Year of publication</li>
                    <li>H Index</li>
                    </ul><br>
                </p>
        </div>
                    <div class="answerContainer" id="a3410">
                        <form method = "POST">
                        <table class="table table-bordered" id="table3410">
                           <tbody>
                              <tr>
                                  <th scope="row" style="text-align: center;">Year</th>
                                  <td><select name="year1" class="form-control" id="year1" required>
                                  <option value="0" selected disabled>SELECT YEAR</option>
                                     <?php 
                                        $query = "SELECT * FROM year_list ORDER BY id DESC";
                                        $getYear = mysqli_query($connection, $query);
                                        while($res = $getYear->fetch_assoc()){
                                            $year = $res['year'];
                                            echo "<option value='$year'>$year</option>";
                                        }
                                     ?>
                                  </select></td>
                                  <td><select name="year2" class="form-control" id="year2" required>
                                  <option value="0" selected disabled>SELECT YEAR</option>
                                     <?php 
                                        $query = "SELECT * FROM year_list ORDER BY id DESC";
                                        $getYear = mysqli_query($connection, $query);
                                        while($res = $getYear->fetch_assoc()){
                                            $year = $res['year'];
                                            echo "<option value='$year'>$year</option>";
                                        }
                                     ?>
                                  </select></td>
                                  <td><select name="year3" class="form-control" id="year3" required>
                                  <option value="0" selected disabled>SELECT YEAR</option>
                                     <?php 
                                        $query = "SELECT * FROM year_list ORDER BY id DESC";
                                        $getYear = mysqli_query($connection, $query);
                                        while($res = $getYear->fetch_assoc()){
                                            $year = $res['year'];
                                            echo "<option value='$year'>$year</option>";
                                        }
                                     ?>
                                  </select></td>
                                  <td><select name="year4" class="form-control" id="year4" required>
                                      <option value="0" selected disabled>SELECT YEAR</option>
                                     <?php 
                                        $query = "SELECT * FROM year_list ORDER BY id DESC";
                                        $getYear = mysqli_query($connection, $query);
                                        while($res = $getYear->fetch_assoc()){
                                            $year = $res['year'];
                                            echo "<option value='$year'>$year</option>";
                                        }
                                     ?>
                                  </select></td>
                                  <td><select name="year5" class="form-control" id="year5" required>
                                  <option value="0" selected disabled>SELECT YEAR</option>
                                     <?php 
                                        $query = "SELECT * FROM year_list ORDER BY id DESC";
                                        $getYear = mysqli_query($connection, $query);
                                        while($res = $getYear->fetch_assoc()){
                                            $year = $res['year'];
                                            echo "<option value='$year'>$year</option>";
                                        }
                                     ?>
                                  </select></td>
                              </tr>
                              <tr>
                                  <th scope="row" style="text-align: center;">Fresh Enrolment</th>
                                  <td><input type="number" class="form-control" name="fresh_enroll1" placeholder="<?php ?>" required/></td>
                                  <td><input type="number" class="form-control" name="fresh_enroll2" placeholder="<?php ?>" required/></td>
                                  <td><input type="number" class="form-control" name="fresh_enroll3" placeholder="<?php ?>" required/></td>
                                  <td><input type="number" class="form-control" name="fresh_enroll4" placeholder="<?php ?>" required/></td>
                                  <td><input type="number" class="form-control" name="fresh_enroll5" placeholder="<?php ?>" required/></td>
                              </tr>
                              <tr>
                                  <th scope="row" style="text-align: center;">*Admission into next semester (re-registration)</th>
                                  <td><input type="number" class="form-control" name="next_sem_1" placeholder="<?php ?>" required/></td>
                                  <td><input type="number" class="form-control" name="next_sem_2" placeholder="<?php ?>" required/></td>
                                  <td><input type="number" class="form-control" name="next_sem_3" placeholder="<?php ?>" required/></td>
                                  <td><input type="number" class="form-control" name="next_sem_4" placeholder="<?php ?>" required/></td>
                                  <td><input type="number" class="form-control" name="next_sem_5" placeholder="<?php ?>" required/></td>
                              </tr>
                              <tr>
                                  <th scope="row" style="text-align: center;">Total enrolment</th>
                                  <td><input type="number" class="form-control" name="total_enroll1" placeholder="<?php ?>" required/></td>
                                  <td><input type="number" class="form-control" name="total_enroll2" placeholder="<?php ?>" required/></td>
                                  <td><input type="number" class="form-control" name="total_enroll3" placeholder="<?php ?>" required/></td>
                                  <td><input type="number" class="form-control" name="total_enroll4" placeholder="<?php ?>" required/></td>
                                  <td><input type="number" class="form-control" name="total_enroll5" placeholder="<?php ?>" required/></td>
                              </tr>
                              <tr>
                                  <th scope="row" style="text-align: center;">Increase / Decrease over preceding academic year</th>
                                  <td><input type="number" class="form-control" name="inc_dec_1" placeholder="<?php ?>" required/></td>
                                  <td><input type="number" class="form-control" name="inc_dec_2" placeholder="<?php ?>" required/></td>
                                  <td><input type="number" class="form-control" name="inc_dec_3" placeholder="<?php ?>" required/></td>
                                  <td><input type="number" class="form-control" name="inc_dec_4" placeholder="<?php ?>" required/></td>
                                  <td><input type="number" class="form-control" name="inc_dec_5" placeholder="<?php ?>" required/></td>
                              </tr>


                           </tbody>
                        </table><br>
                        <center>
                            <button class="btn btn-primary"  name="submit3410" type="submit" style="text-align: center;margin-left: 30px; margin-top: 10px;">Save Changes</button>
                        </center><br>
                        </form>
                        </div><br>
      <div class="criteriaTitle2">
       <h4>3.5 Consultancy</h4>
      </div><br>
      <!-- Metric 3.5.1 -->
      <form method="post">
                <div id="q351" class="questionContainer">
                <p class="msgContainer" id="msg351"><?php ?></p>
                <img
                   
                    class="fillImage"
                >
                <p class="qName">Q<sub>L</sub>M <br>3.5.1</p>
                <p class="question">
                Institution has a policy on consultancy including revenue sharing
                between the institution and the individual and encourages its 
                faculty to undertake consultancy. 
                </p>
                <i class="fa fa-angle-down iconRight"></i>
                <p class="questionPart">
                    <br>
                    <ul><br><br>
                    <li>Upload Additional information.</li>
                    <li>Link for Additional information</li>
                    </ul>
                </p>
                </div>
                    <div class="answerContainer" id="a351">
                        <label for="answer">Description (Max Length: 500 words)</label>
                        <textarea name="answer" class="form-control" rows="6" maxlength="550" placeholder="<?php ?>" required></textarea><br>
                        <label for="doclink">Link to the relevent document</label>
                        <input type="text" name="doclink" class="form-control" placeholder="<?php ?>" autocomplete="off" required /><br>
                        <input type="submit" name="submit351" class="btn btn-primary" value="Save Changes" 
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
        <!-- Metric 3.5.2-->      
    <div id="q352" class="questionContainer">
                <p class="msgContainer" id="msg352"></p>
                <img
                    
                    class="fillImage"
                >
                <p class="qName">Q<sub>N</sub>M <br>3.5.2</p>
                <p class="question">
                Revenue generated from consultancy and corporate training during 
                the last five years (INR in Lakhs) 
                </p>
                <i class="fa fa-angle-down iconRight"></i>
                <p class="questionPart">
                    <b>Data Requirement for last five years:</b>
                    <ul>
                    <li>Names of the consultants</li>
                    <li>Name of consultancy project</li>
                    <li>Consulting/Sponsoring agency with contact details</li>
                    <li>Revenue generated (amount in rupees)</li>
                    <li>Total revenue generated in rupees</li>
                    <li>Details of Corporate training provided (Title of the training, corporates for which training has been provided, number of participants.</li>
                    </ul><br>
                </p>
                </div>
                    <div class="answerContainer" id="a352">
                        <form id="f352">
                        <table class="table table-bordered" id="table352">
                        <span>Revenue generated from consultancy during the last five years</span>
                           <thead>
                            <tr>
                             <th>Name of the consultant</th>
                             <th>Name of consultancy project</th>
                             <th>Consulting/Sponsoring agency with contact details</th>
                             <th>Year</th>
                             <th>Revenue generated (INR in Lakhs)</th>
                            </tr>
                            

                           </thead>
                           <tbody>
                              
                           </tbody>
                           <span>Revenue generated from corporate training during the last five years</span>
                           <thead>
                            <tr>
                             <th>Names of the teacher-consultants/corporate trainers</th>
                             <th>Title of the corporate training programme</th>
                             <th>Agency seeking training with contact details</th>
                             <th>Year</th>
                             <th>Revenue generated (amount in rupees)</th>
                             <th>Number of trainees</th>
                            </tr>
                            

                           </thead>
                        </table><br>
                        <button id="addRow352" style="border: none; padding: 0px; margin: 0px; background-color: #fff; height: 70px; width: 120px;float: right;"><i class="fa fa-plus-circle" style="font-size: 50px; color: orange;" data-toggle="tooltip" data-placement="top" title="Add Rows"></i></button>
                        <br>
                        <center>
                            <button class="btn btn-primary" id="save352" name="submit" type="submit" style="text-align: center;margin-left: 30px; margin-top: 10px;">Save Changes</button>
                        </center><br>
                        </form>

              <script>

              $(document).ready(function(){
                    var count352 = 0;
                    var output = "";
    
                            // jQuery button click event to add a row
                    $('#addRow352').on('click', function () {
                      count352++;
                      var output = "<tr id='row"+count352+"'><td ><input type='text' class='form-control col1' required/></td>";
                      output+= "<td><input type='text' class='form-control col2'  required/></td>";
                      output+= "<td><input type='text' class='form-control col3'  required/></td>";
                      output+= "<td><input type='number' class='form-control col4'  required/></td>";
                      output+= "<td><input type='number' class='form-control col5'  required/></td>";
                      output+= "<td><input type='text' class='form-control col6'  required/></td>";
                      output+= "<td><input type='text' class='form-control col7'  required/></td>";
                      output+= "<td><input type='text' class='form-control col8'  required/></td>";
                      output+= "<td><input type='number' class='form-control col9'  required/></td>";
                      output+= "<td><input type='number' class='form-control col10'  required/></td>";
                      output+= "<td><input type='number' class='form-control col11'  required/></td>";
                      output+= "</tr>";
                      tableBody = $("#table352 tbody");
                      tableBody.append(output);             
                    });

                    $("#table352 tbody").on('click', '.delete', function(){
                                    if(confirm("Are you sure you want to delete this data?")){
                                        var delete_row = $(this).data("row");
                                        $('#'+delete_row).remove();
                                    }else{
                                        return false;
                                    }
                                
                    });
                    $("#f352").on("submit", function(event){
                    var col1 = [];
                    var col2 = [];
                    var col3 = [];
                    var col4= [];
                    var col5= [];
                    var col6= [];
                    var col7= [];
                    var col8= [];
                    var col9= [];
                    var col10= [];
                    var col11= [];
                     event.preventDefault();
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
                    $('.col8').each(function(){
                        col8.push($(this).val());
                    });
                    $('.col9').each(function(){
                        col9.push($(this).val());
                    });
                    $('.col10').each(function(){
                        col10.push($(this).val());
                    });
                    $('.col11').each(function(){
                        col11.push($(this).val());
                    });
                    $.ajax({
                        url: "save352.php",
                        method:"POST",
                        data: {col1: col1, col2: col2,col3: col3 , col4: col4,col5: col5,col6: col6,col7: col7,col8: col8,col9: col9,col10: col10,col11: col11},
                        success: function(){
                            $("#msg352").html("<h5 style='color: green; text-align; center'>Data Saved!</h5>");
                        },
                        error: function(){
                            $("#msg352").html("<h5 style='color: red; text-align; center'>Ajax Call Error!</h5>");
                            
                        }
                    });
                });
            });

 
       </script>
    </div>
    </div><br>
      <div class="criteriaTitle2">
       <h4>3.6 Extension Activities</h4>
      </div><br>
      <!-- Metric 3.6.1 -->
      <form method="post">
                <div id="q361" class="questionContainer">
                <p class="msgContainer" id="msg361"><?php ?></p>
                <img
                   
                    class="fillImage"
                >
                <p class="qName">Q<sub>L</sub>M <br>3.6.1</p>
                <p class="question">
                Extension activities in the neighbourhood community in terms of 
                impact and sensitising students to social issues and holistic development 
                during the last five years
 
                </p>
                <i class="fa fa-angle-down iconRight"></i>
                <p class="questionPart">
                    <br>
                    <ul><br><br>
                    <li>Upload Additional information.</li>
                    <li>Link for Additional information</li>
                    </ul>
                </p>
                </div>
                    <div class="answerContainer" id="a361">
                        <label for="answer">Description (Max Length: 500 words)</label>
                        <textarea name="answer" class="form-control" rows="6" maxlength="550" placeholder="<?php ?>" required></textarea><br>
                        <label for="doclink">Link to the relevent document</label>
                        <input type="text" name="doclink" class="form-control" placeholder="<?php ?>" autocomplete="off" required /><br>
                        <input type="submit" name="submit361" class="btn btn-primary" value="Save Changes" 
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
        <!-- Metric 3.6.2-->      
    <div id="q362" class="questionContainer">
                <p class="msgContainer" id="msg362"></p>
                <img
                    
                    class="fillImage"
                >
                <p class="qName">Q<sub>N</sub>M <br>3.6.2</p>
                <p class="question">
                Number of awards received by the Institution, its teachers and 
                students from Government /Government recognised bodies in
                recognition of the extension activities carried out during the last 
                five years
                </p>
                <i class="fa fa-angle-down iconRight"></i>
                <p class="questionPart">
                    <b>Data Requirement for last five years:</b>
                    <ul>
                    <li>Name of the activity</li>
                    <li>Name of the Award/ recognition</li>
                    <li>Name of the Awarding Government/ Government recognized bodies</li>
                    <li>Year of the Award </li>
                    </ul><br>
                </p>
                </div>
                    <div class="answerContainer" id="a362">
                        <form id="f362">
                        <table class="table table-bordered" id="table362">
                           <thead>
                            <tr>
                             <th>Name of the activity </th>
                             <th>Name of the Award/ recognition </th>
                             <th>Name of the Awarding government/ government recognised bodies</th>
                             <th>Year of Award</th>
                            </tr>
                            

                           </thead>
                           <tbody>
                              
                           </tbody>
                        </table><br>
                        <button id="addRow362" style="border: none; padding: 0px; margin: 0px; background-color: #fff; height: 70px; width: 120px;float: right;"><i class="fa fa-plus-circle" style="font-size: 50px; color: orange;" data-toggle="tooltip" data-placement="top" title="Add Rows"></i></button>
                        <br>
                        <center>
                            <button class="btn btn-primary" id="save362" name="submit" type="submit" style="text-align: center;margin-left: 30px; margin-top: 10px;">Save Changes</button>
                        </center><br>
                        </form>

              <script>

              $(document).ready(function(){
                    var count362 = 0;
                    var output = "";
    
                            // jQuery button click event to add a row
                    $('#addRow362').on('click', function () {
                      count362++;
                      var output = "<tr id='row"+count362+"'><td ><input type='text' class='form-control col1' required/></td>";
                      output+= "<td><input type='text' class='form-control col2'  required/></td>";
                      output+= "<td><input type='text' class='form-control col3'  required/></td>";
                      output+= "<td><input type='number' class='form-control col4'  required/></td>";
                      output+= "</tr>";
                      tableBody = $("#table362 tbody");
                      tableBody.append(output);             
                    });

                    $("#table362 tbody").on('click', '.delete', function(){
                                    if(confirm("Are you sure you want to delete this data?")){
                                        var delete_row = $(this).data("row");
                                        $('#'+delete_row).remove();
                                    }else{
                                        return false;
                                    }
                                
                    });
                    $("#f362").on("submit", function(event){
                    var col1 = [];
                    var col2 = [];
                    var col3 = [];
                    var col4= [];
                     event.preventDefault();
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
                    $.ajax({
                        url: "save362.php",
                        method:"POST",
                        data: {col1: col1, col2: col2,col3: col3 , col4: col4},
                        success: function(){
                            $("#msg362").html("<h5 style='color: green; text-align; center'>Data Saved!</h5>");
                        },
                        error: function(){
                            $("#msg362").html("<h5 style='color: red; text-align; center'>Ajax Call Error!</h5>");
                            
                        }
                    });
                });
            });

 
       </script>
    </div>
    <!-- Metric 3.6.3-->      
    <div id="q363" class="questionContainer">
                <p class="msgContainer" id="msg363"></p>
                <img
                    
                    class="fillImage"
                >
                <p class="qName">Q<sub>N</sub>M <br>3.6.3</p>
                <p class="question">
                Number of extension and outreach programmes conducted by the
                institution including those through NSS/NCC/Red cross/YRC etc. ( 
                including Government initiated programmes such as Swachh
                Bharat, Aids Awareness, Gender Issue, etc. and those organised in 
                collaboration with industry, community and NGOs) during the last 
                five years 
                </p>
                <i class="fa fa-angle-down iconRight"></i>
                <p class="questionPart">
                    <b>Data Requirement for last five years:</b>
                    <ul>
                    <li>Name and number of the extension and outreach Programmes</li>
                    <li>Name of the collaborating agency: Non- government, industry, community with contact details</li>
                    </ul><br>
                </p>
                </div>
                    <div class="answerContainer" id="a363">
                        <form id="f363">
                        <table class="table table-bordered" id="table363">
                           <thead>
                            <tr>
                             <th>Name of the activity</th>
                             <th>Organising unit/ agency/ collaborating agency</th>
                             <th>Name of the scheme</th>
                             <th>Year of the activity</th>
                             <th>Number of students participated in such activities</th>
                            </tr>
                            

                           </thead>
                           <tbody>
                              
                           </tbody>
                        </table><br>
                        <button id="addRow363" style="border: none; padding: 0px; margin: 0px; background-color: #fff; height: 70px; width: 120px;float: right;"><i class="fa fa-plus-circle" style="font-size: 50px; color: orange;" data-toggle="tooltip" data-placement="top" title="Add Rows"></i></button>
                        <br>
                        <center>
                            <button class="btn btn-primary" id="save363" name="submit" type="submit" style="text-align: center;margin-left: 30px; margin-top: 10px;">Save Changes</button>
                        </center><br>
                        </form>

              <script>

              $(document).ready(function(){
                    var count363 = 0;
                    var output = "";
    
                            // jQuery button click event to add a row
                    $('#addRow363').on('click', function () {
                      count363++;
                      var output = "<tr id='row"+count363+"'><td ><input type='text' class='form-control col1' required/></td>";
                      output+= "<td><input type='text' class='form-control col2'  required/></td>";
                      output+= "<td><input type='text' class='form-control col3'  required/></td>";
                      output+= "<td><input type='number' class='form-control col4'  required/></td>";
                      output+= "<td><input type='text' class='form-control col5'  required/></td>";
                      output+= "</tr>";
                      tableBody = $("#table363 tbody");
                      tableBody.append(output);             
                    });

                    $("#table363 tbody").on('click', '.delete', function(){
                                    if(confirm("Are you sure you want to delete this data?")){
                                        var delete_row = $(this).data("row");
                                        $('#'+delete_row).remove();
                                    }else{
                                        return false;
                                    }
                                
                    });
                    $("#f363").on("submit", function(event){
                    var col1 = [];
                    var col2 = [];
                    var col3 = [];
                    var col4= [];
                    var col5= [];
                     event.preventDefault();
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
                    $.ajax({
                        url: "save363.php",
                        method:"POST",
                        data: {col1: col1, col2: col2,col3: col3 , col4: col4, col5: col5},
                        success: function(){
                            $("#msg363").html("<h5 style='color: green; text-align; center'>Data Saved!</h5>");
                        },
                        error: function(){
                            $("#msg363").html("<h5 style='color: red; text-align; center'>Ajax Call Error!</h5>");
                            
                        }
                    });
                });
            });

 
       </script>
    </div>
    <!-- Metric 3.6.4-->      
    <div id="q364" class="questionContainer">
                <p class="msgContainer" id="msg364"></p>
                <img
                    
                    class="fillImage"
                >
                <p class="qName">Q<sub>N</sub>M <br>3.6.4</p>
                <p class="question">
                Average percentage of students participating in extension activities
                listed at 3.6.3 above during the last five years
                </p>
                <i class="fa fa-angle-down iconRight"></i>
                <p class="questionPart">
                    <b>Data Requirement for last five years:</b>
                    <ul>
                    <li>Name of the activity</li>
                    <li>Name of the scheme</li>
                    <li>Year of the activity</li>
                    <li>Number of students participating in such activities</li>
                    </ul><br>
                </p>
                </div>
                    <div class="answerContainer" id="a364">
                        <form id="f364">
                        <table class="table table-bordered" id="table364">
                           <thead>
                            <tr>
                             <th>Name of the activity</th>
                             <th>Organising unit/ agency/ collaborating agency</th>
                             <th>Name of the scheme</th>
                             <th>Year of the activity</th>
                             <th>Number of students participated in such activities</th>
                            </tr>
                            

                           </thead>
                           <tbody>
                              
                           </tbody>
                        </table><br>
                        <button id="addRow364" style="border: none; padding: 0px; margin: 0px; background-color: #fff; height: 70px; width: 120px;float: right;"><i class="fa fa-plus-circle" style="font-size: 50px; color: orange;" data-toggle="tooltip" data-placement="top" title="Add Rows"></i></button>
                        <br>
                        <center>
                            <button class="btn btn-primary" id="save364" name="submit" type="submit" style="text-align: center;margin-left: 30px; margin-top: 10px;">Save Changes</button>
                        </center><br>
                        </form>

              <script>

              $(document).ready(function(){
                    var count364 = 0;
                    var output = "";
    
                            // jQuery button click event to add a row
                    $('#addRow364').on('click', function () {
                      count364++;
                      var output = "<tr id='row"+count364+"'><td ><input type='text' class='form-control col1' required/></td>";
                      output+= "<td><input type='text' class='form-control col2'  required/></td>";
                      output+= "<td><input type='text' class='form-control col3'  required/></td>";
                      output+= "<td><input type='number' class='form-control col4'  required/></td>";
                      output+= "<td><input type='text' class='form-control col5'  required/></td>";
                      output+= "</tr>";
                      tableBody = $("#table364 tbody");
                      tableBody.append(output);             
                    });

                    $("#table364 tbody").on('click', '.delete', function(){
                                    if(confirm("Are you sure you want to delete this data?")){
                                        var delete_row = $(this).data("row");
                                        $('#'+delete_row).remove();
                                    }else{
                                        return false;
                                    }
                                
                    });
                    $("#f364").on("submit", function(event){
                    var col1 = [];
                    var col2 = [];
                    var col3 = [];
                    var col4= [];
                    var col5= [];
                     event.preventDefault();
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
                    $.ajax({
                        url: "save364.php",
                        method:"POST",
                        data: {col1: col1, col2: col2,col3: col3 , col4: col4, col5: col5},
                        success: function(){
                            $("#msg364").html("<h5 style='color: green; text-align; center'>Data Saved!</h5>");
                        },
                        error: function(){
                            $("#msg364").html("<h5 style='color: red; text-align; center'>Ajax Call Error!</h5>");
                            
                        }
                    });
                });
            });

 
       </script>
    </div>
    </div><br>
      <div class="criteriaTitle2">
       <h4> 3.7 Collaboration</h4>
      </div><br>
      <!-- Metric 3.7.1-->      
    <div id="q371" class="questionContainer">
                <p class="msgContainer" id="msg371"></p>
                <img
                    
                    class="fillImage"
                >
                <p class="qName">Q<sub>N</sub>M <br>3.7.1</p>
                <p class="question">
                Number of collaborative activities with other institutions/ research 
                establishments/industry for research and academic development of 
                faculty and students per year 
                </p>
                <i class="fa fa-angle-down iconRight"></i>
                <p class="questionPart">
                    <b>Data Requirement for last five years:</b>
                    <ul>
                    <li>Title of the collaborative activity</li>
                    <li>Name of the collaborating agency with contact details</li>
                    <li>Source of financial support</li>
                    <li>Year of collaboration</li>
                    <li>Duration</li>
                    <li>Nature of the activity</li>
                    </ul><br>
                </p>
                </div>
                    <div class="answerContainer" id="a371">
                        <form id="f371">
                        <table class="table table-bordered" id="table371">
                           <thead>
                            <tr>
                             <th>SI.No.</th>
                             <th>Title of the collaborative activity</th>
                             <th>Name of the participant</th>
                             <th>Year of the collaboration</th>
                             <th>Duration</th>
                             <th>Nature of the activity</th>
                             <th>Links to the relevent document</th>
                            </tr>
                            

                           </thead>
                           <tbody>
                              
                           </tbody>
                        </table><br>
                        <button id="addRow371" style="border: none; padding: 0px; margin: 0px; background-color: #fff; height: 70px; width: 120px;float: right;"><i class="fa fa-plus-circle" style="font-size: 50px; color: orange;" data-toggle="tooltip" data-placement="top" title="Add Rows"></i></button>
                        <br>
                        <center>
                            <button class="btn btn-primary" id="save371" name="submit" type="submit" style="text-align: center;margin-left: 30px; margin-top: 10px;">Save Changes</button>
                        </center><br>
                        </form>

              <script>

              $(document).ready(function(){
                    var count371 = 0;
                    var output = "";
    
                            // jQuery button click event to add a row
                    $('#addRow371').on('click', function () {
                      count371++;
                      var output = "<tr id='row"+count371+"'><td ><input type='number' class='form-control col1' required/></td>";
                      output+= "<td><input type='text' class='form-control col2'  required/></td>";
                      output+= "<td><input type='text' class='form-control col3'  required/></td>";
                      output+= "<td><input type='text' class='form-control col4'  required/></td>";
                      output+= "<td><input type='number' class='form-control col5'  required/></td>";
                      output+= "<td><input type='number' class='form-control col6'  required/></td>";
                      output+= "<td><input type='text' class='form-control col7'  required/></td>";
                      output+= "<td><input type='text' class='form-control col8'  required/></td>";
                      output+= "</tr>";
                      tableBody = $("#table371 tbody");
                      tableBody.append(output);             
                    });

                    $("#table371 tbody").on('click', '.delete', function(){
                                    if(confirm("Are you sure you want to delete this data?")){
                                        var delete_row = $(this).data("row");
                                        $('#'+delete_row).remove();
                                    }else{
                                        return false;
                                    }
                                
                    });
                    $("#f371").on("submit", function(event){
                    var col1 = [];
                    var col2 = [];
                    var col3 = [];
                    var col4= [];
                    var col5= [];
                    var col6= [];
                    var col7= [];
                    var col8= [];
                     event.preventDefault();
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
                    $('.col8').each(function(){
                        col8.push($(this).val());
                    });
                    $.ajax({
                        url: "save371.php",
                        method:"POST",
                        data: {col1: col1, col2: col2,col3: col3 , col4: col4, col5: col5, col6: col6, col7: col7, col8: col8},
                        success: function(){
                            $("#msg371").html("<h5 style='color: green; text-align; center'>Data Saved!</h5>");
                        },
                        error: function(){
                            $("#msg371").html("<h5 style='color: red; text-align; center'>Ajax Call Error!</h5>");
                            
                        }
                    });
                });
            });

 
       </script>
    </div>
    <!-- Metric 3.7.2-->      
    <div id="q372" class="questionContainer">
                <p class="msgContainer" id="msg372"></p>
                <img
                    
                    class="fillImage"
                >
                <p class="qName">Q<sub>N</sub>M <br>3.7.2</p>
                <p class="question">
                Number of functional MoUs with institutions/ industries in India
                and abroad for internship, on-the-job training, project work, 
                student / faculty exchange and collaborative research during the 
                last five years
                </p>
                <i class="fa fa-angle-down iconRight"></i>
                <p class="questionPart">
                    <b>Data Requirement for last five years:</b>
                    <ul>
                    <li>Organisation with which MoU is signed</li>
                    <li>Name of the institution/ industry</li>
                    <li>Year of signing MoU</li>
                    <li>Duration</li>
                    <li>List the actual activities under each MoU</li>
                    <li>Year wise Number of students/teachers participated under MoUs</li>
                    </ul><br>
                </p>
                </div>
                    <div class="answerContainer" id="a372">
                        <form id="f372">
                        <table class="table table-bordered" id="table372">
                           <thead>
                            <tr>
                             <th>Organisation with which MoU is signed</th>
                             <th>Name of the institution/industry/corporate house</th>
                             <th>Year of signing MoU</th>
                             <th>Duration</th>
                             <th>List the actual activity under each MoU year wise</th>
                             <th>Number of students/teachers participated under MoUs</th>
                            </tr>
                            

                           </thead>
                           <tbody>
                              
                           </tbody>
                        </table><br>
                        <button id="addRow372" style="border: none; padding: 0px; margin: 0px; background-color: #fff; height: 70px; width: 120px;float: right;"><i class="fa fa-plus-circle" style="font-size: 50px; color: orange;" data-toggle="tooltip" data-placement="top" title="Add Rows"></i></button>
                        <br>
                        <center>
                            <button class="btn btn-primary" id="save372" name="submit" type="submit" style="text-align: center;margin-left: 30px; margin-top: 10px;">Save Changes</button>
                        </center><br>
                        </form>

              <script>

              $(document).ready(function(){
                    var count372 = 0;
                    var output = "";
    
                            // jQuery button click event to add a row
                    $('#addRow372').on('click', function () {
                      count372++;
                      var output = "<tr id='row"+count372+"'><td ><input type='text' class='form-control col1' required/></td>";
                      output+= "<td><input type='text' class='form-control col2'  required/></td>";
                      output+= "<td><input type='number' class='form-control col3'  required/></td>";
                      output+= "<td><input type='number' class='form-control col4'  required/></td>";
                      output+= "<td><input type='text' class='form-control col5'  required/></td>";
                      output+= "<td><input type='text' class='form-control col6'  required/></td>";
                      output+= "</tr>";
                      tableBody = $("#table372 tbody");
                      tableBody.append(output);             
                    });

                    $("#table372 tbody").on('click', '.delete', function(){
                                    if(confirm("Are you sure you want to delete this data?")){
                                        var delete_row = $(this).data("row");
                                        $('#'+delete_row).remove();
                                    }else{
                                        return false;
                                    }
                                
                    });
                    $("#f372").on("submit", function(event){
                    var col1 = [];
                    var col2 = [];
                    var col3 = [];
                    var col4= [];
                    var col5= [];
                    var col6= [];;
                     event.preventDefault();
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
                    $.ajax({
                        url: "save372.php",
                        method:"POST",
                        data: {col1: col1, col2: col2,col3: col3 , col4: col4, col5: col5, col6: col6},
                        success: function(){
                            $("#msg372").html("<h5 style='color: green; text-align; center'>Data Saved!</h5>");
                        },
                        error: function(){
                            $("#msg372").html("<h5 style='color: red; text-align; center'>Ajax Call Error!</h5>");
                            
                        }
                    });
                });
            });

 
       </script>
    </div>
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

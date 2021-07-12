<?php 
      session_start();
      include('../../credential.php');
      $adminname = $_SESSION['username'];
      $name = $_SESSION['name'];
      $connection = mysqli_connect($servername, $username, $password, $dbname);

    //   inculde('../fetch_na.php');
      $date = date_create();
      save_log($_SESSION['username'],getUserIP(),$_SERVER['REQUEST_URI'],urlencode(http_build_query($_POST, '', '&amp;')),date_format($date, 'Y-m-d H:i:s'));
      $get111 = mysqli_query($connection, "SELECT * FROM ssr_m1_1_1 WHERE username = '$adminname'");
      $res111 = $get111->fetch_assoc();
      $ans111 = $res111['description'];
      $link111 = $res111['link'];

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
    <title>Report | Criteria 1</title>
    <style>
      .tableContainerReport{
        padding-left: 10px;
        padding-right: 10px;
      }
    </style>
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
        <a onclick="goBack()"  data-toggle="tooltip" data-placement="bottom" title="Log-Out">BACK</a>
        <a onclick="goForward()" style="cursor: pointer; float: right; margin-right: 35px;" data-toggle="tooltip" data-placement="bottom" title="Forward Page">NEXT</a>
    </div>
    <br>
    <div class="printCriteria">
      <button class="btn btn-info" id="printBtn" style="margin-left: 20px;">PRINT</button>
    </div>
    <script>
         $("#printBtn").on("click", function(){
              window.print();
         });
    </script>
    <div class="criteriaTitle1">
       <h3><?php echo $_SESSION['name'];?></h3>
    </div>
    <div class="criteriaTitle1">
       <h3>Criteria I - Curricular Aspects</h3>
    </div>
    <div class="tableContainerReport">
        <div class="criteriaTitle2">
        <h4>1.1 Curriculum Design and Development</h4>
        </div>
       <table class="table table-bordered">
         <thead>
          <tr>
           <th style="text-align: center;">Metric Index</th>
           <th style="text-align: center;">Metric Type</th>
           <th style="text-align: center;">Metric Data</th>
           <th style="text-align: center;">Response</th>
          </tr>
         </thead>
         <tbody>
           <tr>
            <th scope="row">1.1.1</th>
            <td>Q<sub>L</sub>M </td>
            <td>Curricula developed and implemented have relevance to the local,
                national, regional and global developmental needs which is
                reflected in Programme outcomes (POs), Programme Specific
                Outcomes(PSOs) and Course Outcomes(COs) of the Programmes
                offered by the University.
            </td>
            <td>
              <?php
                echo $ans111;
                echo "<br>";
                echo $link111;
              ?>
            </td>
           </tr>
           <tr>
             <th scope="row">1.1.2</th>
             <td>Q<sub>N</sub>M</td>
             <td>
             Percentage of Programmes where syllabus revision was carried out
             during the last five years
             </td>
             <td>
              <?php 
              
              ?>
             </td>
           </tr>
           <tr>
             <th scope="row">1.1.3</th>
             <td>Q<sub>N</sub>M</td>
             <td>
             Average percentage of courses having focus on employability/
             entrepreneurship/ skill development offered by the University 
             </td>
             <td>
              <?php 
              
              ?>
             </td>
           </tr>
           <tr>
             <th scope="row">1.1.4</th>
             <td>Q<sub>N</sub>M</td>
             <td>
             Electronic media and other digital components in the curriculum offered
             by DDE
             </td>
             <td>
              <?php 
              
              ?>
             </td>
           </tr>
         </tbody>
       </table>
       <div class="criteriaTitle2">
        <h4>1.2 Academic Flexibility</h4>
        </div>
        <table class="table table-bordered">
         <thead>
          <tr>
           <th style="text-align: center;">Metric Index</th>
           <th style="text-align: center;">Metric Type</th>
           <th style="text-align: center;">Metric Data</th>
           <th style="text-align: center;">Response</th>
          </tr>
         </thead>
         <tbody>
           <tr>
            <th scope="row">1.2.1</th>
            <td>Q<sub>N</sub>M </td>
            <td>Percentage of new courses introduced of the total number of 
            courses across all programmes offered during the last five years.
            </td>
            <td>
              <?php

              ?>
            </td>
           </tr>
           <tr>
             <th scope="row">1.2.2</th>
             <td>Q<sub>N</sub>M</td>
             <td>
             Percentage of Programmes in which Choice Based Credit System (CBCS)/elective 
             course system has been implemented (Data for the latest completed academic year).
             </td>
             <td>
              <?php 
              
              ?>
             </td>
           </tr>
         </tbody>
       </table>
       <div class="criteriaTitle2">
        <h4>1.3 Curriculum Enrichment</h4>
        </div>
        <table class="table table-bordered">
         <thead>
          <tr>
           <th style="text-align: center;">Metric Index</th>
           <th style="text-align: center;">Metric Type</th>
           <th style="text-align: center;">Metric Data</th>
           <th style="text-align: center;">Response</th>
          </tr>
         </thead>
         <tbody>
           <tr>
            <th scope="row">1.3.1</th>
            <td>Q<sub>L</sub>M </td>
            <td>Institution integrates crosscutting issues relevant to Professional Ethics, Gender, 
            Human Values, Environment and Sustainability into the Curriculum.
            </td>
            <td>
              <?php

              ?>
            </td>
           </tr>
           <tr>
             <th scope="row">1.3.2</th>
             <td>Q<sub>N</sub>M</td>
             <td>
             Number of value-added courses for imparting transferable and
             life skills offered during last five years.
             </td>
             <td>
              <?php 
              
              ?>
             </td>
           </tr>
           <tr>
             <th scope="row">1.3.3</th>
             <td>Q<sub>N</sub>M</td>
             <td>
             Average Percentage of students enrolled in the courses under 1.3.2 above.
             </td>
             <td>
              <?php 
              
              ?>
             </td>
           </tr>
           <tr>
             <th scope="row">1.3.4</th>
             <td>Q<sub>N</sub>M</td>
             <td>
             Percentage of students undertaking field projects / research projects / 
             internships (Data for the latest completed academic year).             
             </td>
             <td>
              <?php 
              
              ?>
             </td>
           </tr>
         </tbody>
       </table>
       <div class="criteriaTitle2">
        <h4>1.4 Feedback System</h4>
        </div>
        <table class="table table-bordered">
         <thead>
          <tr>
           <th style="text-align: center;">Metric Index</th>
           <th style="text-align: center;">Metric Type</th>
           <th style="text-align: center;">Metric Data</th>
           <th style="text-align: center;">Response</th>
          </tr>
         </thead>
         <tbody>
           <tr>
            <th scope="row">1.4.1</th>
            <td>Q<sub>N</sub>M </td>
            <td>Structured feedback for design and review of syllabus – semester wise / year wise is received from.
            </td>
            <td>
              <?php

              ?>
            </td>
           </tr>
           <tr>
             <th scope="row">1.4.2</th>
             <td>Q<sub>N</sub>M</td>
             <td>
             Feedback processes of the institution may be classified as follows:
             </td>
             <td>
              <?php 
              
              ?>
             </td>
           </tr>
         </tbody>
       </table>
    </div>
    <footer>
      <b style="float:left;">Date of Printing: &nbsp;</b><h6 id="timeStamp" style="text-align: left; margin-left: 10px; float: left;"><script> 
      var date = Date.now();
      var getDate = new Date(date);
         $("#timeStamp").html(getDate);
      </script></h6>
    </footer>
    <script src="../essentialscript.js"></script>
</body>
</html>

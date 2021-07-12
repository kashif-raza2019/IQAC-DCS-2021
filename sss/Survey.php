<?php
       session_start();
       include('../credential.php');  
       $user = $_SESSION['username'];
       $connection = mysqli_connect($servername, $username, $password, $dbname);
       $gender = $_GET['gender'];
       $year = $_GET['year'];

       if(isset($_POST['submit'])){
          $q1 = $_POST['q1'];
          $q2 = $_POST['q2'];
          $q3 = $_POST['q3'];
          $q4 = $_POST['q4'];
          $q5 = $_POST['q5'];
          $q6 = $_POST['q6'];
          $q7 = $_POST['q7'];
          $q8 = $_POST['q8'];
          $q9 = $_POST['q9'];
          $q10 = $_POST['q10'];
          $q11 = $_POST['q11'];
          $q12 = $_POST['q12'];
          $q13 = $_POST['q13'];
          $q14 = $_POST['q14'];
          $q15 = $_POST['q15'];
          $q16 = $_POST['q16'];
          $q17 = $_POST['q17'];
          $q18 = $_POST['q18'];
          $q19 = $_POST['q19'];
          $q20 = $_POST['q20'];
          $txt1 = mysqli_real_escape_string($connection, $_POST['q21Txt1']);
          $txt2 = mysqli_real_escape_string($connection, $_POST['q21Txt2']);
          $txt3 = mysqli_real_escape_string($connection, $_POST['q21Txt3']);

          $insertQuery = "INSERT INTO sss_2021(username, student_gender, student_year, q1, q2, q3, q4, q5, q6, q7, q8, q9, q10, q11, q12, q13, q14, q15, q16, q17, q18, q19, q20, qTxt1, qTxt2, qTxt3) VALUES('$user', '$gender', '$year', '$q1', '$q2', '$q3', '$q4', '$q5', '$q6', '$q7', '$q8', '$q9', '$q10', '$q11', '$q12', '$q13', '$q14', '$q15', '$q16', '$q17', '$q18', '$q19', '$q20', '$txt1', '$txt2', '$txt3' )";
          $insert = mysqli_query($connection, $insertQuery);
          if($insert){
            header("Location: filled.php");
          }else{
            echo "<script>alert('Some Problem While Submitting Data!')</script>";
            var_dump($insert);
          }
       }
  
?>
    <!Doctype>
    <html lang="en">
    <head>
    <meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
    <meta name="description" content="Student Satisfaction Survey, SSS By Devi Ahilya Vishwavidyalaya">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Bootstarp 4 Integration -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <style>
      html{
        scroll-behavior: smooth;
      }
      body{
          padding: 0px;
          margin: 0px;
      }
      #header{
          width: 100%;
          background-color: #0E3778;
          padding-bottom: 20px;
          height: 160px;
          color: #fff;
          font-size: 28px;
          font-weight: bold;
      }
      #topLink{
          width: 100%;
          background-color: #0E3778;
          padding-bottom: 5px;
          height: 30px;
          color: #fff;
          font-size: 18px;
          font-weight: bold;
          padding-left: 0px;

      }
      #topLink a{
          color: #fff;
          text-decoration: none;
          margin-left: 35px;
         
      }
      .Hidden{
          display: none;
      }
      .containerTable{
          margin-left: 10%;
          margin-right: 10%;
      }
      .formWrapper{
          padding-left: 10%;
          padding-right: 10%;
      }
      .formContainer{
          width: 100%;
          padding-left: 15px;
          padding-right: 15px;
      }
      #topNameHeader{
          position: sticky;
          top: 0px;
          background-color: #EFEFEF;
      }
      .progress{
          height: 10px;
          width: 100%;
          border-radius: 5px;
          border: 1px solid grey;
          background-color:#E3E4E6 ;
      }

      .progressFill{
          margin: 1px;
          background-color: #00ADD7;
          /* width: 100%; */
          border-radius: 4px;
      }

      .questionContainer{
          width: 100%;
          padding-right: 10px;
          padding-left: 10px;
          font-family: 'Calibri', 'Sans-Serif';
          font-size: 21px;
          border-bottom: 1px solid #A4A7AB;
          padding-top: 25px;
          padding-bottom: 20px;

      }
      .questionContainer td{
        font-size: 20px;
        font-weight: bold;
      }
      .questionContainer th{
        font-size: 20px;
        font-weight: bold;
      }

      input[type="radio"]{
          width: 20px;
          height: 20px;
      }
      #submitFormBtn{
          margin-top: 10px;
          margin-bottom: 20px;
          margin-left: 43%;
          margin-right: 43%;
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
<link rel="icon" href="../assets/images/davvlogo.png">
<title><?php echo $_SESSION['name'];?></title>
</head>
<body>
        <script>
        // Enabling Tooltip Everywhere
            $(function () {
            $('[data-toggle="tooltip"]').tooltip()
            })
        </script>
    <div  id="header" style="margin-left: 0px; margin-right: 0px; width: 100%!important;">
          <img src="../assets/images/davvlogo.png" alt="Devi Ahilya Vishwavidyalaya" height="120px" width="120px" style="float: left; margin-left: 30%;margin-top: 20px;" data-toggle="tooltip" data-placement="right" title="Devi Ahilya University" >
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
        <a onclick="logOut()" style="cursor: pointer;" data-toggle="tooltip" data-placement="bottom" title="Log-Out">BACK</a>
    </div>
    <script>
      function logOut(){
        var confirmLogOut = confirm("Your progress will be lost, Are you sure to log-out?");
        if(confirmLogOut){
          window.location.href="index.php";
        }
      }
    </script>
      <table class="table table-bordered" id="topNameHeader">
        <thead>
          <tr>
             <th style="font-size: 14px;">GENDER: </th>
             <th><?php echo $gender;?></th>
             <th style="font-size: 14px;">YEAR OF STUDY: </th>
             <th><?php echo $year;?></th>
          </tr>
          <tr>
            <td colspan="4"><div class="progress" data-toggle="tooltip" data-placement="bottom" title="Survey Progress"><div class="progressFill"></div></div></td>
          </tr>
        </thead>
      </table>
      <div class="formContainer">
      <h2 style="font-weight: bold; text-align: center;">Student Satisfaction Survey on Teaching Learning Process</h2>
      <form id="survey" method="POST">
       <h5 style="text-align: center;">Following are questions for online student satisfaction survey regarding teaching learning process.</h5>
      <div class="questionContainer">
         <table class="table table-borderless">
           <thead>
            <tr>
                <th style="text-align: left; font-weight: bold;">1.</th>
                <th colspan="5" style="text-align: left; font-weight: bold;"><h5>How much of the syllabus was covered in the class?</h5></th>
            </tr>
            <tr>
              <td></td>
              <td><input type="radio" name="q1"  class="q1" value="4 – 85 to 100%" />&nbsp;  4 – 85 to 100%</td>
              <td><input type="radio" name="q1"  class="q1" value="3 – 70 to 84%" />&nbsp;  3 – 70 to 84%</td>
              <td><input type="radio" name="q1"  class="q1" value="2 – 55 to 69%" />&nbsp;  2 – 55 to 69% </td>
              <td><input type="radio" name="q1"  class="q1" value="1 – 30 to 54%" />&nbsp;  1 – 30 to 54%</td>
              <td><input type="radio" name="q1"  class="q1" value="0 – Below 30%" />&nbsp;  0 – Below 30%</td>
            </tr>
           </thead>
           <tbody>
           
           </tbody>
         </table>
      </div>
      <!-- Q2 -->
      <div class="questionContainer">
         <table class="table table-borderless">
           <thead>
            <tr>
                <th style="text-align: left; font-weight: bold;">2.</th>
                <th colspan="5" style="text-align: left; font-weight: bold;"><h5>How well did the teachers prepare for the classes?</h5></th>
            </tr>
            <tr>
              <td></td>
              <td><input type="radio" name="q2"  class="q2" value="4 – Thoroughly" />&nbsp;  4 – Thoroughly</td>
              <td><input type="radio" name="q2"  class="q2" value="3 – Satisfactorily" />&nbsp;  3 – Satisfactorily</td>
              <td><input type="radio" name="q2"  class="q2" value="2 – Poorly" />&nbsp;  2 – Poorly</td>
              <td><input type="radio" name="q2"  class="q2" value="1 – Indifferently" />&nbsp;  1 – Indifferently</td>
              <td><input type="radio" name="q2"  class="q2" value="0 –Won’t teach at all" />&nbsp;  0 –Won’t teach at all</td>
            </tr>
           </thead>
           <tbody>
           
           </tbody>
         </table>
      </div>
      <!-- Q3 -->
      <div class="questionContainer">
         <table class="table table-borderless">
           <thead>
            <tr>
                <th style="text-align: left; font-weight: bold;">3.</th>
                <th colspan="5" style="text-align: left; font-weight: bold;"><h5>How well were the teachers able to communicate?</h5></th>
            </tr>
            <tr>
              <td></td>
              <td><input type="radio" name="q3"  class="q3" value="4 – Always effective" />&nbsp;  4 – Always effective</td>
              <td><input type="radio" name="q3"  class="q3" value="3 – Sometimes effective" />&nbsp;  3 – Sometimes effective</td>
              <td><input type="radio" name="q3"  class="q3" value="2 – Just satisfactorily" />&nbsp;  2 – Just satisfactorily</td>
              <td><input type="radio" name="q3"  class="q3" value="1 –  Generally ineffective" />&nbsp;  1 –  Generally ineffective</td>
              <td><input type="radio" name="q3"  class="q3" value="0 – Very poor communication" />&nbsp;  0 – Very poor communication</td>
            </tr>
           </thead>
           <tbody>
           
           </tbody>
         </table>
      </div>
      <!-- Q4 -->
      <div class="questionContainer">
         <table class="table table-borderless">
           <thead>
            <tr>
                <th style="text-align: left; font-weight: bold;">4.</th>
                <th colspan="5" style="text-align: left; font-weight: bold;"><h5>The teacher’s approach to teaching can best be described as</h5></th>
            </tr>
            <tr>
              <td></td>
              <td><input type="radio" name="q4"  class="q4" value="4 – Excellent" />&nbsp;  4 – Excellent</td>
              <td><input type="radio" name="q4"  class="q4" value="3 – Very good" />&nbsp;  3 – Very good</td>
              <td><input type="radio" name="q4"  class="q4" value="2 – Good" />&nbsp;  2 – Good</td>
              <td><input type="radio" name="q4"  class="q4" value="1 –  Fair" />&nbsp;  1 –  Fair</td>
              <td><input type="radio" name="q4"  class="q4" value="0 – Poor" />&nbsp;  0 – Poor</td>
            </tr>
           </thead>
           <tbody>
           
           </tbody>
         </table>
      </div>
      <!-- Q5 -->
      <div class="questionContainer">
         <table class="table table-borderless">
           <thead>
            <tr>
                <th style="text-align: left; font-weight: bold;">5.</th>
                <th colspan="5" style="text-align: left; font-weight: bold;"><h5>Fairness of the internal evaluation process by the teachers.</h5></th>
            </tr>
            <tr>
              <td></td>
              <td><input type="radio" name="q5"  class="q5" value="4 – Always fair" />&nbsp;  4 – Always fair</td>
              <td><input type="radio" name="q5"  class="q5" value="3 – Usually fair" />&nbsp;  3 – Usually fair</td>
              <td><input type="radio" name="q5"  class="q5" value="2 – Sometimes unfair" />&nbsp;  2 – Sometimes unfair</td>
              <td><input type="radio" name="q5"  class="q5" value="1 –  Usually unfair" />&nbsp;  1 –  Usually unfair</td>
              <td><input type="radio" name="q5"  class="q5" value="0 – Unfair" />&nbsp;  0 – Unfair</td>
            </tr>
           </thead>
           <tbody>
           
           </tbody>
         </table>
      </div>
            <!-- Q6 -->
            <div class="questionContainer">
         <table class="table table-borderless">
           <thead>
            <tr>
                <th style="text-align: left; font-weight: bold;">6.</th>
                <th colspan="5" style="text-align: left; font-weight: bold;"><h5>Was your performance in assignments discussed with you?</h5></th>
            </tr>
            <tr>
              <td></td>
              <td><input type="radio" name="q6"  class="q6" value="4 – Every time" />&nbsp;  4 – Every time</td>
              <td><input type="radio" name="q6"  class="q6" value="3 – Usually" />&nbsp;  3 – Usually</td>
              <td><input type="radio" name="q6"  class="q6" value="2 – Occasionally/Sometimes" />&nbsp;  2 – Occasionally/Sometimes</td>
              <td><input type="radio" name="q6"  class="q6" value="1 –  Rarely" />&nbsp;  1 –  Rarely</td>
              <td><input type="radio" name="q6"  class="q6" value="0 – Never" />&nbsp;  0 – Never</td>
            </tr>
           </thead>
           <tbody>
           
           </tbody>
         </table>
      </div>
            <!-- Q7 -->
            <div class="questionContainer">
         <table class="table table-borderless">
           <thead>
            <tr>
                <th style="text-align: left; font-weight: bold;">7.</th>
                <th colspan="5" style="text-align: left; font-weight: bold;"><h5>The institute takes active interest in promoting internship, student exchange, field visit opportunities for students.</h5></th>
            </tr>
            <tr>
              <td></td>
              <td><input type="radio" name="q7"  class="q7" value="4 – Regularly" />&nbsp;  4 – Regularly</td>
              <td><input type="radio" name="q7"  class="q7" value="3 – Often" />&nbsp;  3 – Often</td>
              <td><input type="radio" name="q7"  class="q7" value="2 – Sometimes" />&nbsp;  2 – Sometimes</td>
              <td><input type="radio" name="q7"  class="q7" value="1 –  Rarely" />&nbsp;  1 –  Rarely</td>
              <td><input type="radio" name="q7"  class="q7" value="0 – Never" />&nbsp;  0 – Never</td>
            </tr>
           </thead>
           <tbody>
           
           </tbody>
         </table>
      </div>
            <!-- Q8 -->
            <div class="questionContainer">
         <table class="table table-borderless">
           <thead>
            <tr>
                <th style="text-align: left; font-weight: bold;">8.</th>
                <th colspan="5" style="text-align: left; font-weight: bold;"><h5>The teaching and mentoring process in your institution facilitates you in cognitive, social and emotional growth.</h5></th>
            </tr>
            <tr>
              <td></td>
              <td><input type="radio" name="q8"  class="q8" value="4 – Significantly" />&nbsp;  4 – Significantly</td>
              <td><input type="radio" name="q8"  class="q8" value="3 – Very well" />&nbsp;  3 – Very well</td>
              <td><input type="radio" name="q8"  class="q8" value="2 – Moderately" />&nbsp;  2 – Moderately </td>
              <td><input type="radio" name="q8"  class="q8" value="1 –  Marginally" />&nbsp;  1 –  Marginally</td>
              <td><input type="radio" name="q8"  class="q8" value="0 – Not at all" />&nbsp;  0 – Not at all</td>
            </tr>
           </thead>
           <tbody>
           
           </tbody>
         </table>
      </div>
            <!-- Q9 -->
            <div class="questionContainer">
         <table class="table table-borderless">
           <thead>
            <tr>
                <th style="text-align: left; font-weight: bold;">9.</th>
                <th colspan="5" style="text-align: left; font-weight: bold;"><h5>The institution provides multiple opportunities to learn and grow.</h5></th>
            </tr>
            <tr>
              <td></td>
              <td><input type="radio" name="q9"  class="q9" value="4 – Strongly agree" />&nbsp;  4 – Strongly agree</td>
              <td><input type="radio" name="q9"  class="q9" value="3 – Agree" />&nbsp;  3 – Agree</td>
              <td><input type="radio" name="q9"  class="q9" value="2 – Neutral" />&nbsp;  2 – Neutral</td>
              <td><input type="radio" name="q9"  class="q9" value="1 –  Disagree" />&nbsp;  1 –  Disagree</td>
              <td><input type="radio" name="q9"  class="q9" value="0 – Strongly Disagree" />&nbsp;  0 – Strongly Disagree</td>
            </tr>
           </thead>
           <tbody>
           
           </tbody>
         </table>
      </div>
            <!-- Q11 -->
            <div class="questionContainer">
         <table class="table table-borderless">
           <thead>
            <tr>
                <th style="text-align: left; font-weight: bold;">10.</th>
                <th colspan="5" style="text-align: left; font-weight: bold;"><h5>Teachers inform you about your expected competencies, course outcomes and programme outcomes.</h5></th>
            </tr>
            <tr>
              <td></td>
              <td><input type="radio" name="q10"  class="q10" value="4 – Every time" />&nbsp;  4 – Every time</td>
              <td><input type="radio" name="q10"  class="q10" value="3 – Usually" />&nbsp;  3 – Usually</td>
              <td><input type="radio" name="q10"  class="q10" value="2 – Occasionally/Sometimes" />&nbsp;  2 – Occasionally/Sometimes</td>
              <td><input type="radio" name="q10"  class="q10" value="1 – Rarely" />&nbsp;  1 – Rarely</td>
              <td><input type="radio" name="q10"  class="q10" value="0 – Never" />&nbsp;  0 – Never</td>
            </tr>
           </thead>
           <tbody>
           
           </tbody>
         </table>
      </div>
            <!-- Q12 -->
            <div class="questionContainer">
         <table class="table table-borderless">
           <thead>
            <tr>
                <th style="text-align: left; font-weight: bold;">11.</th>
                <th colspan="5" style="text-align: left; font-weight: bold;"><h5>Your mentor does a necessary follow-up with an assigned task to you.</h5></th>
            </tr>
            <tr>
              <td></td>
              <td><input type="radio" name="q11"  class="q11" value="4 – Every time" />&nbsp;  4 – Every time</td>
              <td><input type="radio" name="q11"  class="q11" value="3 – Usually" />&nbsp;  3 – Usually</td>
              <td><input type="radio" name="q11"  class="q11" value="2 – Occasionally/Sometimes" />&nbsp;  2 – Occasionally/Sometimes</td>
              <td><input type="radio" name="q11"  class="q11" value="1 – Rarely" />&nbsp;  1 – Rarely</td>
              <td><input type="radio" name="q11"  class="q11" value="0 – Never" />&nbsp;  0 – Never</td>
            </tr>
           </thead>
           <tbody>
           
           </tbody>
         </table>
      </div>
            <!-- Q13 -->
            <div class="questionContainer">
         <table class="table table-borderless">
           <thead>
            <tr>
                <th style="text-align: left; font-weight: bold;">12.</th>
                <th colspan="5" style="text-align: left; font-weight: bold;"><h5>The teachers illustrate the concepts through examples and applications.</h5></th>
            </tr>
            <tr>
              <td></td>
              <td><input type="radio" name="q12"  class="q12" value="4 – Every time" />&nbsp;  4 – Every time</td>
              <td><input type="radio" name="q12"  class="q12" value="3 – Usually" />&nbsp;  3 – Usually</td>
              <td><input type="radio" name="q12"  class="q12" value="2 – Occasionally/Sometimes" />&nbsp;  2 – Occasionally/Sometimes</td>
              <td><input type="radio" name="q12"  class="q12" value="1 – Rarely" />&nbsp;  1 – Rarely</td>
              <td><input type="radio" name="q12"  class="q12" value="0 – Never" />&nbsp;  0 – Never</td>
            </tr>
           </thead>
           <tbody>
           
           </tbody>
         </table>
      </div>
            <!-- Q14 -->
            <div class="questionContainer">
         <table class="table table-borderless">
           <thead>
            <tr>
                <th style="text-align: left; font-weight: bold;">13.</th>
                <th colspan="5" style="text-align: left; font-weight: bold;"><h5>The teachers identify your strengths and encourage you with providing right level of challenges.</h5></th>
            </tr>
            <tr>
              <td></td>
              <td><input type="radio" name="q13"  class="q13" value="4 – Fully" />&nbsp;  4 – Fully</td>
              <td><input type="radio" name="q13"  class="q13" value="3 – Reasonably" />&nbsp;  3 – Reasonably</td>
              <td><input type="radio" name="q13"  class="q13" value="2 – Partially" />&nbsp;  2 – Partially</td>
              <td><input type="radio" name="q13"  class="q13" value="1 – Slightly" />&nbsp;  1 – Slightly</td>
              <td><input type="radio" name="q13"  class="q13" value="0 – Unable to" />&nbsp;  0 – Unable to</td>
            </tr>
           </thead>
           <tbody>
           
           </tbody>
         </table>
      </div>
            <!-- Q15 -->
            <div class="questionContainer">
         <table class="table table-borderless">
           <thead>
            <tr>
                <th style="text-align: left; font-weight: bold;">14.</th>
                <th colspan="5" style="text-align: left; font-weight: bold;"><h5>Teachers are able to identify your weaknesses and help you to overcome them.</h5></th>
            </tr>
            <tr>
              <td></td>
              <td><input type="radio" name="q14"  class="q14" value="4 – Every time" />&nbsp;  4 – Every time</td>
              <td><input type="radio" name="q14"  class="q14" value="3 – Usually" />&nbsp;  3 – Usually</td>
              <td><input type="radio" name="q14"  class="q14" value="2 – Occasionally/Sometimes" />&nbsp;  2 – Occasionally/Sometimes</td>
              <td><input type="radio" name="q14"  class="q14" value="1 – Rarely"  />&nbsp;  1 – Rarely</td>
              <td><input type="radio" name="q14"  class="q14" value="0 – Never" />&nbsp;  0 – Never</td>
            </tr>
           </thead>
           <tbody>
           
           </tbody>
         </table>
      </div>
            <!-- Q16 -->
            <div class="questionContainer">
         <table class="table table-borderless">
           <thead>
            <tr>
                <th style="text-align: left; font-weight: bold;">15.</th>
                <th colspan="5" style="text-align: left; font-weight: bold;"><h5>The institution makes effort to engage students in the monitoring, review and continuous quality improvement of the teaching learning process.</h5></th>
            </tr>
            <tr>
              <td></td>
              <td><input type="radio" name="q15"  class="q15" value="4 – Strongly agree" />&nbsp;  4 – Strongly agree</td>
              <td><input type="radio" name="q15"  class="q15" value="3 – Agree" />&nbsp;  3 – Agree</td>
              <td><input type="radio" name="q15"  class="q15" value="2 – Neutral" />&nbsp;  2 – Neutral</td>
              <td><input type="radio" name="q15"  class="q15" value="1 – Disagree" />&nbsp;  1 – Disagree</td>
              <td><input type="radio" name="q15"  class="q15" value="0 – Strongly Disagree" />&nbsp;  0 – Strongly Disagree</td>
            </tr>
           </thead>
           <tbody>
           
           </tbody>
         </table>
      </div>
            <!-- Q17 -->
            <div class="questionContainer">
         <table class="table table-borderless">
           <thead>
            <tr>
                <th style="text-align: left; font-weight: bold;">16.</th>
                <th colspan="5" style="text-align: left; font-weight: bold;"><h5>The institute/ teachers use student centric methods, such as experiential learning, participative learning and problem solving methodologies for enhancing learning experiences.</h5></th>
            </tr>
            <tr>
              <td></td>
              <td><input type="radio" name="q16"  class="q16" value="4 – To a great extent" />&nbsp;  4 – To a great extent</td>
              <td><input type="radio" name="q16"  class="q16" value="3 – Moderate" />&nbsp;  3 – Moderate</td>
              <td><input type="radio" name="q16"  class="q16" value="2 – Somewhat" />&nbsp;  2 – Somewhat</td>
              <td><input type="radio" name="q16"  class="q16" value="1 – Very Little" />&nbsp;  1 – Very Little</td>
              <td><input type="radio" name="q16"  class="q16" value="0 – Not at all" />&nbsp;  0 – Not at all</td>
            </tr>
           </thead>
           <tbody>
           
           </tbody>
         </table>
      </div>
            <!-- Q18 -->
            <div class="questionContainer">
         <table class="table table-borderless">
           <thead>
            <tr>
                <th style="text-align: left; font-weight: bold;">17.</th>
                <th colspan="5" style="text-align: left; font-weight: bold;"><h5>Teachers encourage you to participate in extracurricular activities.</h5></th>
            </tr>
            <tr>
              <td></td>
              <td><input type="radio" name="q17"  class="q17" value="4 – Strongly agree" />&nbsp;  4 – Strongly agree</td>
              <td><input type="radio" name="q17"  class="q17" value="3 – Agree" />&nbsp;  3 – Agree</td>
              <td><input type="radio" name="q17"  class="q17" value="2 – Neutral" />&nbsp;  2 – Neutral</td>
              <td><input type="radio" name="q17"  class="q17" value="1 – Disagree" />&nbsp;  1 – Disagree</td>
              <td><input type="radio" name="q17"  class="q17" value="0 – Strongly Disagree" />&nbsp;  0 – Strongly Disagree</td>
            </tr>
           </thead>
           <tbody>
           
           </tbody>
         </table>
      </div>
            <!-- Q19 -->
            <div class="questionContainer">
         <table class="table table-borderless">
           <thead>
            <tr>
                <th style="text-align: left; font-weight: bold;">18.</th>
                <th colspan="5" style="text-align: left; font-weight: bold;"><h5>Efforts are made by the institute/ teachers to inculcate soft skills, life skills and employability skills to make you ready for the world of work.</h5></th>
            </tr>
            <tr>
              <td></td>
              <td><input type="radio" name="q18"  class="q18" value="4 – To a great extent" />&nbsp;  4 – To a great extent</td>
              <td><input type="radio" name="q18"  class="q18" value="3 – Moderate" />&nbsp;  3 – Moderate</td>
              <td><input type="radio" name="q18"  class="q18" value="2 – Some what" />&nbsp;  2 – Some what</td>
              <td><input type="radio" name="q18"  class="q18" value="1 – Very little" />&nbsp;  1 – Very little</td>
              <td><input type="radio" name="q18"  class="q18" value="0 – Not at all" />&nbsp;  0 – Not at all</td>
            </tr>
           </thead>
           <tbody>
           
           </tbody>
         </table>
      </div>
            <!-- Q20 -->
        <div class="questionContainer">
         <table class="table table-borderless">
           <thead>
            <tr>
                <th style="text-align: left; font-weight: bold;">19.</th>
                <th colspan="5" style="text-align: left; font-weight: bold;"><h5>What percentage of teachers use ICT tools such as LCD projector, Multimedia, etc. while teaching?</h5></th>
            </tr>
            <tr>
              <td></td>
              <td><input type="radio" name="q19"  class="q19" value="4 – Above 90%" />&nbsp;  4 – Above 90%</td>
              <td><input type="radio" name="q19"  class="q19" value="3 – 70 – 89%" />&nbsp;  3 – 70 – 89%</td>
              <td><input type="radio" name="q19"  class="q19" value="2 – 50 to 69%" />&nbsp;  2 – 50 to 69% </td>
              <td><input type="radio" name="q19"  class="q19" value="1 – 30 to 49%" />&nbsp;  1 – 30 to 49%</td>
              <td><input type="radio" name="q19"  class="q19" value="0 – Below 29%" />&nbsp;  0 – Below 29%</td>
            </tr>
           </thead>
           <tbody>
           
           </tbody>
         </table>
      </div>
      <!-- Q20 -->
        <div class="questionContainer">
         <table class="table table-borderless">
           <thead>
            <tr>
                <th style="text-align: left; font-weight: bold;">20.</th>
                <th colspan="5" style="text-align: left; font-weight: bold;"><h5>The overall quality of teaching-learning process in your institute is very good.</h5></th>
            </tr>
            <tr>
              <td></td>
              <td><input type="radio" name="q20"  class="q20" value="4 – Strongly agree" />&nbsp;  4 – Strongly agree</td>
              <td><input type="radio" name="q20"  class="q20" value="3 – Agree" />&nbsp;  3 – Agree</td>
              <td><input type="radio" name="q20"  class="q20" value="2 – Neutral" />&nbsp;  2 – Neutral</td>
              <td><input type="radio" name="q20"  class="q20" value="1 – Disagree" />&nbsp;  1 – Disagree</td>
              <td><input type="radio" name="q20"  class="q20" value="0 – Strongly disagree" />&nbsp;  0 – Strongly disagree</td>
            </tr>
           </thead>
           <tbody>
           
           </tbody>
         </table>
      </div>

        <!-- Q21 -->
        <div class="questionContainer">
         <table class="table table-borderless">
           <thead>
            <tr>
                <th style="text-align: left; font-weight: bold;">21.</th>
                <th colspan="2" style="text-align: left; font-weight: bold;"><h5>Give three observation / suggestions to improve the overall teaching – learning experience in your institution. </h5></th>
            </tr>
            <tr>
              <td></td>
              <td><input type="text" name="q21Txt1" id="qTxt1" class="form-control q21" placeholder="1st Observation/Suggestion" required/></td>
            </tr>
            <tr>
              <td></td>
              <td><input type="text" name="q21Txt2" id="qTxt2"  class="form-control q21" placeholder="2nd Observation/Suggestion"/></td>
            </tr>
            <tr>
              <td></td>
              <td><input type="text" name="q21Txt3" id="qTxt3"  class="form-control q21" placeholder="3rd Observation/Suggestion" /></td>
            </tr>
           </thead>
           <tbody>
           
           </tbody>
         </table>
      </div>
      <button type="button"  id="submitFormBtn" class="btn btn-primary" data-toggle="modal" data-target=".bd-example-modal-sm">Submit</button>

    <div class="modal fade bd-example-modal-sm" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-sm">
        <div class="modal-content" style="padding: 20px; font-size: 16px;">
            <h4 style="font-weight: bold; text-align: center;">Confirm Submission!</h4>
            <p>Are you sure about the data filled by you in this survey?</p>
            <button type="submit" class="btn btn-success" name="submit" style="margin-top :10px;">Yes, I am Sure</button>
            <button data-dismiss="modal" class="btn btn-danger" style="margin-top: 10px; ">No</button>
        </div>
    </div>
    </div>
  </form>
      <!-- Notice Modal -->
        <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalTitle" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="kyModalLongTitle" style="text-align: center; font-weight: bold;">Important Note</h5>
            </div>
            <div class="modal-body">
                Please fill the survey with atmost honesty.<br>
                As your feedback is most valuable for us and will decide future operations in the Institute.
                <br>Regards,<br>
                <?php echo strtoupper($_SESSION['name']);?>
            </div>
            <div class="modal-footer" data-toggle="tooltip" data-placement="right" title="Truley :)">
                <button type="button" class="btn btn-success" data-dismiss="modal">Yes, I Understand</button>
            </div>
            </div>
        </div>
        </div>
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
    

  <script>
    $(document).ready(function(){
      $("#myModal").modal('show');
    });

    var fillCount = 0;
    var widthDoc = $(window).width();
    var singleCount = widthDoc/21 ;
    var countCheckQ1 = 0;
    var countCheckQ2 = 0;
    var countCheckQ3 = 0;
    var countCheckQ4 = 0;
    var countCheckQ5 = 0;
    var countCheckQ6 = 0;
    var countCheckQ7 = 0;
    var countCheckQ8 = 0;
    var countCheckQ9 = 0;
    var countCheckQ10 = 0;
    var countCheckQ11 = 0;
    var countCheckQ12 = 0;
    var countCheckQ13 = 0;
    var countCheckQ14 = 0;
    var countCheckQ15 = 0;
    var countCheckQ16 = 0;
    var countCheckQ17 = 0;
    var countCheckQ18 = 0;
    var countCheckQ19 = 0;
    var countCheckQ20 = 0;
    var countCheckQ21 = 0;


    $("#submitFormBtn").on("click", function(){
        fillCount += singleCount;
        $(".progressFill").css({'width': fillCount});
        $(".bd-example-modal-lg").modal('show');
    });
    $(".q1").on("click", function(){
        $(this).attr("checked", function(){
            // alert("checked");
            if(countCheckQ1 == 0){
                fillCount += singleCount;
            $(".progressFill").css({'width': fillCount});
              countCheckQ1++;
            }
        });
    });
    $(".q2").on("click", function(){
        $(this).attr("checked", function(){
            // alert("checked");
            if(countCheckQ2 == 0){
                fillCount += singleCount;
            $(".progressFill").css({'width': fillCount});
              countCheckQ2++;
            }
        });
    });
    $(".q3").on("click", function(){
        $(this).attr("checked", function(){
            // alert("checked");
            if(countCheckQ3 == 0){
                fillCount += singleCount;
            $(".progressFill").css({'width': fillCount});
              countCheckQ3++;
            }
        });
    });
    $(".q4").on("click", function(){
        $(this).attr("checked", function(){
            // alert("checked");
            if(countCheckQ4 == 0){
                fillCount += singleCount;
            $(".progressFill").css({'width': fillCount});
              countCheckQ4++;
            }
        });
    });
    $(".q5").on("click", function(){
        $(this).attr("checked", function(){
            // alert("checked");
            if(countCheckQ5 == 0){
                fillCount += singleCount;
            $(".progressFill").css({'width': fillCount});
              countCheckQ5++;
            }
        });
    });
    $(".q6").on("click", function(){
        $(this).attr("checked", function(){
            // alert("checked");
            if(countCheckQ6 == 0){
                fillCount += singleCount;
            $(".progressFill").css({'width': fillCount});
              countCheckQ6++;
            }
        });
    });
    $(".q7").on("click", function(){
        $(this).attr("checked", function(){
            // alert("checked");
            if(countCheckQ7 == 0){
                fillCount += singleCount;
            $(".progressFill").css({'width': fillCount});
              countCheckQ7++;
            }
        });
    });
    $(".q8").on("click", function(){
        $(this).attr("checked", function(){
            // alert("checked");
            if(countCheckQ8 == 0){
                fillCount += singleCount;
            $(".progressFill").css({'width': fillCount});
              countCheckQ8++;
            }
        });
    });
    $(".q9").on("click", function(){
        $(this).attr("checked", function(){
            // alert("checked");
            if(countCheckQ9 == 0){
                fillCount += singleCount;
            $(".progressFill").css({'width': fillCount});
              countCheckQ9++;
            }
        });
    });
    $(".q10").on("click", function(){
        $(this).attr("checked", function(){
            // alert("checked");
            if(countCheckQ10 == 0){
                fillCount += singleCount;
            $(".progressFill").css({'width': fillCount});
              countCheckQ10++;
            }
        });
    });
    $(".q11").on("click", function(){
        $(this).attr("checked", function(){
            // alert("checked");
            if(countCheckQ11 == 0){
                fillCount += singleCount;
            $(".progressFill").css({'width': fillCount});
              countCheckQ11++;
            }
        });
    });
    $(".q12").on("click", function(){
        $(this).attr("checked", function(){
            // alert("checked");
            if(countCheckQ12 == 0){
                fillCount += singleCount;
            $(".progressFill").css({'width': fillCount});
              countCheckQ12++;
            }
        });
    });
    $(".q13").on("click", function(){
        $(this).attr("checked", function(){
            // alert("checked");
            if(countCheckQ13 == 0){
                fillCount += singleCount;
            $(".progressFill").css({'width': fillCount});
              countCheckQ13++;
            }
        });
    });
    $(".q14").on("click", function(){
        $(this).attr("checked", function(){
            // alert("checked");
            if(countCheckQ14 == 0){
                fillCount += singleCount;
            $(".progressFill").css({'width': fillCount});
              countCheckQ14++;
            }
        });
    });
    $(".q15").on("click", function(){
        $(this).attr("checked", function(){
            // alert("checked");
            if(countCheckQ15 == 0){
                fillCount += singleCount;
            $(".progressFill").css({'width': fillCount});
              countCheckQ15++;
            }
        });
    });
    $(".q16").on("click", function(){
        $(this).attr("checked", function(){
            // alert("checked");
            if(countCheckQ16 == 0){
                fillCount += singleCount;
            $(".progressFill").css({'width': fillCount});
              countCheckQ16++;
            }
        });
    });
    $(".q17").on("click", function(){
        $(this).attr("checked", function(){
            // alert("checked");
            if(countCheckQ17 == 0){
                fillCount += singleCount;
            $(".progressFill").css({'width': fillCount});
              countCheckQ17++;
            }
        });
    });
    $(".q18").on("click", function(){
        $(this).attr("checked", function(){
            // alert("checked");
            if(countCheckQ18 == 0){
                fillCount += singleCount;
            $(".progressFill").css({'width': fillCount});
              countCheckQ18++;
            }
        });
    });
    $(".q19").on("click", function(){
        $(this).attr("checked", function(){
            // alert("checked");
            if(countCheckQ19 == 0){
                fillCount += singleCount;
            $(".progressFill").css({'width': fillCount});
              countCheckQ19++;
            }
        });
    });
    $(".q20").on("click", function(){
        $(this).attr("checked", function(){
            // alert("checked");
            if(countCheckQ20 == 0){
                fillCount += singleCount;
            $(".progressFill").css({'width': fillCount});
              countCheckQ20++;
            }
        });
    });
  </script>
  		<footer>
				<p>&copy; <script>document.write(new Date().getFullYear())</script> - <script>document.write(new Date().getFullYear() + 1)</script> Devi Ahilya Vishwavidyalaya Indore</p>
			</footer><br>
</body>
</html>
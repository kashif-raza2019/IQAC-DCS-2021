<?php 
    session_start();
    include('../credential.php');  
    $id = $_GET['id'];
    $connection = mysqli_connect($servername, $username, $password, $dbname);


?>

<!DOCTYPE html>
<html>
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <!-- Bootstarp 4 Integration -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns" crossorigin="anonymous"></script>
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
      footer{
            margin-top: 30px;
            text-align: center;
           }
       .tableContainer{
            padding-right: 2%;
            padding-left: 2%;
       }
       .deptName:hover{
           text-decoration: underline;
           cursor: pointer;
       }
       th{
           text-align: left;
           font-size: 17px;
       }
       td{
           text-align: left;
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
            a:hover{
                text-decoration: none;
                opacity: 0.8;
            }
    </style>
<link rel="icon" href="../assets/images/davvlogo.png">
<title><?php echo "SSS | REPORT";?></title>
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
        <a onclick="goBack()"  data-toggle="tooltip" data-placement="bottom" title="Go Back">BACK</a>
        <a onclick="window.print();"  style="float: right; margin-right: 20px;" data-toggle="tooltip" data-placement="bottom" title="PRINT">PRINT SURVEY</a>
    </div>
    <br>
    <h3 style="text-align: center; font-weight: bold;">Student Satisfaction Survey | <?php echo $_SESSION['name'];?></h3><br>
    <!-- Main Page Startes From Here -->
    <div class="tableContainer">
        <table class="table table-bordered">
            <tbody>
            
    <?php
      $fetchDataQuery = mysqli_query($connection, "SELECT*FROM sss_2021 WHERE id = '$id'");
            while($fetchData = $fetchDataQuery->fetch_assoc()){
                $fetchGender = $fetchData['student_gender'];
                $fetchyear = $fetchData['student_year'];
                $fetchq1 = $fetchData['q1'];
                $fetchq2 = $fetchData['q2'];
                $fetchq3 = $fetchData['q3'];
                $fetchq4 = $fetchData['q4'];
                $fetchq5 = $fetchData['q5'];
                $fetchq6 = $fetchData['q6'];
                $fetchq7 = $fetchData['q7'];
                $fetchq8 = $fetchData['q8'];
                $fetchq9 = $fetchData['q9'];
                $fetchq10 = $fetchData['q10'];
                $fetchq11 = $fetchData['q11'];
                $fetchq12 = $fetchData['q12'];
                $fetchq13 = $fetchData['q13'];
                $fetchq14 = $fetchData['q14'];
                $fetchq15 = $fetchData['q15'];
                $fetchq16 = $fetchData['q16'];
                $fetchq18 = $fetchData['q18'];
                $fetchq17 = $fetchData['q17'];
                $fetchq19 = $fetchData['q19'];
                $fetchq20 = $fetchData['q20'];
                $fetchTxt1 = $fetchData['qTxt1'];
                $fetchTxt2 = $fetchData['qTxt2'];
                $fetchTxt3 = $fetchData['qTxt3'];
                

                echo "<tr><th scope='row'>Student Gender</th><td style='font-weight: bold;'>$fetchGender</td></tr>";
                echo "<tr><th scope='row'>Year of Study</th><td style='font-weight: bold;'>$fetchyear</td></tr>";
                echo "<tr><th scope='row'>How much of the syllabus was covered in the class?</th><td>$fetchq1</td></tr>";
                echo "<tr><th scope='row'>How well did the teachers prepare for the classes?</th><td>$fetchq2</td></tr>";
                echo "<tr><th scope='row'>How well were the teachers able to communicate?</th><td>$fetchq3</td></tr>";
                echo "<tr><th scope='row'>The teacher’s approach to teaching can best be described as</th><td>$fetchq4</td></tr>";
                echo "<tr><th scope='row'>Fairness of the internal evaluation process by the teachers.</th><td>$fetchq5</td></tr>";
                echo "<tr><th scope='row'>Was your performance in assignments discussed with you?</th><td>$fetchq6</td></tr>";
                echo "<tr><th scope='row'>The institute takes active interest in promoting internship, student exchange, field visit opportunities for students.</th><td>$fetchq7</td></tr>";
                echo "<tr><th scope='row'>The teaching and mentoring process in your institution facilitates you in cognitive, social and emotional growth.</th><td>$fetchq8</td></tr>";
                echo "<tr><th scope='row'>The institution provides multiple opportunities to learn and grow.</th><td>$fetchq9</td></tr>";
                echo "<tr><th scope='row'>Teachers inform you about your expected competencies, course outcomes and programme outcomes.</th><td>$fetchq10</td></tr>";
                echo "<tr><th scope='row'>Your mentor does a necessary follow-up with an assigned task to you.</th><td>$fetchq11</td></tr>";
                echo "<tr><th scope='row'>The teachers illustrate the concepts through examples and applications.</th><td>$fetchq12</td></tr>";
                echo "<tr><th scope='row'>The teachers identify your strengths and encourage you with providing right level of challenges.</th><td>$fetchq13</td></tr>";
                echo "<tr><th scope='row'>Teachers are able to identify your weaknesses and help you to overcome them.</th><td>$fetchq14</td></tr>";
                echo "<tr><th scope='row'>The institution makes effort to engage students in the monitoring, review and continuous quality improvement of the teaching learning process.</th><td>$fetchq15</td></tr>";
                echo "<tr><th scope='row'>The institute/ teachers use student centric methods, such as experiential learning, participative learning and problem solving methodologies for enhancing learning experiences.</th><td>$fetchq16</td></tr>";
                echo "<tr><th scope='row'>Teachers encourage you to participate in extracurricular activities.</th><td>$fetchq17</td></tr>";
                echo "<tr><th scope='row'>Efforts are made by the institute/ teachers to inculcate soft skills, life skills and employability skills to make you ready for the world of work.</th><td>$fetchq18</td></tr>";
                echo "<tr><th scope='row'>What percentage of teachers use ICT tools such as LCD projector, Multimedia, etc. while teaching?</th><td>$fetchq19</td></tr>";
                echo "<tr><th scope='row'>The overall quality of teaching-learning process in your institute is very good.</th><td>$fetchq20</td></tr>";
                echo "<tr><th scope='row'>Suggestion/ Observation 1</th><td>$fetchTxt1</td></tr>";
                echo "<tr><th scope='row'>Suggestion/ Observation 2</th><td>$fetchTxt2</td></tr>";
                echo "<tr><th scope='row'>Suggestion/ Observation 3</th><td>$fetchTxt3</td></tr>";

    ?>
    
            </tbody>
    <?php };?>
        </table>
    </div>
    <?php $connection->close();?>

    <footer>
        <p style="color: grey; font-family: 'Verdana'; font-size: 17px;">&copy; <script>document.write(new Date().getFullYear())</script> - <script>document.write(new Date().getFullYear()+1)</script> Devi Ahilya Vishwavidyalaya</p>
    </footer>
</body>
</html>

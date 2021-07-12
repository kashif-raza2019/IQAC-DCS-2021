<?php
    session_start();
    include('../credential.php');  
    $user = $_SESSION['username'];
    $connection = mysqli_connect($servername, $username, $password, $dbname);


    if(isset($_POST['submit'])){
        $name_un = strtoupper($_POST['name']);
        $name = mysqli_real_escape_string($connection, $name_un);
        $dept_un = strtoupper($_POST['dept']);
        $dept = mysqli_real_escape_string($connection, $dept_un);
        $gender = $_POST['gender'];
        $post_un = strtoupper($_POST['post']);
        $post = mysqli_real_escape_string($connection, $post_un);
        $posttype = $_POST['postType'];
        $contact_un = $_POST['contact'];
        $contact = mysqli_real_escape_string($connection, $contact_un);
        $email_un = $_POST['email'];
        $email = mysqli_real_escape_string($connection, $email_un);
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
        $q21 = $_POST['q21'];
        $q22 = $_POST['q22'];
        $q23 = $_POST['q23'];
        $q24 = $_POST['q24'];
        $q25 = $_POST['q25'];
        $q26 = $_POST['q26'];
        $q27 = $_POST['q27'];
        $q28 = $_POST['q28'];
        $q29 = $_POST['q29'];
        $q30 = $_POST['q30'];
        $q31 = $_POST['q31'];
        $q32 = $_POST['q32'];
        $q33 = $_POST['q33'];
        $q34 = $_POST['q34'];
        $q35 = $_POST['q35'];
        $q36 = $_POST['q36'];
        $q37 = $_POST['q37'];
        $q38 = $_POST['q38'];
        $q39 = $_POST['q39'];
        $q40 = $_POST['q40'];
        $q41 = $_POST['q41'];
        $q42 = $_POST['q42'];
        $q43 = $_POST['q43'];
        $q44 = $_POST['q44'];
        $q45 = $_POST['q45'];
        $q46 = $_POST['q46'];
        $q47 = $_POST['q47'];
        $q48 = $_POST['q48'];
        $q49 = $_POST['q49'];
        $q50 = $_POST['q50'];
        $q51 = $_POST['q51'];
        $q52 = $_POST['q52'];
        $suggestion1 = $_POST['suggestion1'];
        $suggestion2 = $_POST['suggestion2'];
        $suggestion3 = $_POST['suggestion3'];
        $suggestion4 = $_POST['suggestion4'];

        $query = "INSERT INTO feedback_teachers(username, Name, Gender, Department, Post, Post_Type, contact, email, Q1, Q2, Q3, Q4, Q5, Q6, Q7, Q8, Q9, Q10, Q11, Q12, Q13, Q14, Q15, Q16, Q17, Q18, Q19, Q20, Q21, Q22, Q23, Q24, Q25, Q26, Q27, Q28, Q29, Q30, Q31, Q32, Q33, Q34, Q35, Q36, Q37, Q38, Q39, Q40, Q41, Q42, Q43, Q44, Q45, Q46, Q47, Q48, Q49, Q50, Q51, Q52, Suggestion_1, Suggestion_2, Suggestion_3, Suggestion_4) VALUES('$user', '$name', '$gender', '$dept', '$post', '$posttype', '$contact', '$email' , '$q1', '$q2', '$q3', '$q4', '$q5', '$q6', '$q7', '$q8', '$q9', '$q10',  '$q11', '$q12', '$q13',  '$q14', '$q15', '$q16', '$q17', '$q18', '$q19', '$q20', '$q21', '$q22', '$q23', '$q24', '$q25', '$q26', '$q27', '$q28', '$q29', '$q30', '$q31', '$q32', '$q33', '$q34', '$q35', '$q36', '$q37', '$q38', '$q39', '$q40', '$q41', '$q42', '$q43', '$q44', '$q45', '$q46', '$q47', '$q48', '$q49', '$q50', '$q51', '$q52', '$suggestion1', '$suggestion2', '$suggestion3', '$suggestion4')";
        $insert = mysqli_query($connection, $query);
        if($insert){
            header("Location: FilledTeachers.php");
        }else{
            echo mysqli_error($insert);
            var_dump($insert);
        }
    }
    if(!isset($_SESSION['username'])){
        header("Location: ../index.php");
    }
?>
    <!Doctype>
    <html lang="en">
    <head>
    <meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
    <meta name="description" content="FEEDBACK, FEEDBACKS By Devi Ahilya Vishwavidyalaya">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Bootstarp 4 Integration -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="style.css">
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
          float: left;
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
<title>Feedback Teachers</title>
</head>
<body>
        <script>
        // Enabling Tooltip Everywhere
            $(function () {
            $('[data-toggle="tooltip"]').tooltip()
            })
        </script>
    <div  id="header" style="margin-left: 0px; margin-right: 0px; width: 100%!important;">
          <img src="../assets/images/davvlogo.png" alt="Devi Ahilya Vishwavidyalaya" height="120px" width="120px" style="float: left; margin-left: 30%;margin-top: 20px;" data-toggle="tooltip" data-placement="bottom" title="Devi Ahilya University" >
          <p style="float: left; margin-left: 30px;margin-top: 40px">Devi Ahilya Vishwavidyalaya <br><span style="font-size: 22px;">Data Capturing System-2021</span></p>
    </div>
    <script>
      function goBack() {
          window.history.back();
        }
        function goForward() {
           window.history.forward();
        }
    </script>
    <div id="topLink">
        <a onclick="logOut()" style="cursor: pointer;" data-toggle="tooltip" data-placement="bottom" title="Log-Out">Log Out</a>
        <h4 style="text-align: center; color: #fff; font-weight: bold;"><?php echo $_SESSION['name'];?></h4>
    </div>
    <script>
      function logOut(){
        var confirmLogOut = confirm("Your progress will be lost, Are you sure you want to log-out?");
        if(confirmLogOut){
          window.location.href="../selection-page.php";
        }
      }
    </script>
      <table class="table table-bordered" id="topNameHeader">
        <thead>
          <tr>
            <th style="text-align: center;">Progress</th>
          </tr>
          <tr>
            <td><div class="progress" data-toggle="tooltip" data-placement="bottom" title="Feedback Progress"><div class="progressFill"></div></div></td>
          </tr>
        </thead>
        </table>
        <!-- Form  -->
        <form method="POST">
        <h2 class="feedBackTitle">Faculty Feedback Form</h2>
        <h3 class="formSubTitle">From a teacher on administration, career growth, infrastructure and facilities. </h3>
        <div class="note">
            <p>All faculty members are requested to provide overall feedback on the following points. Your feedback will help
                us to find the satisfaction level of our employees, their feelings, and happiness.
                We have designed this feedback form in two parts. First part has “Yes” or “No” type questions. Second part is
                designed on a scale from "Excellent" to "Poor".<br>
                <span style="color: green;">We welcome your thoughts and feedback as part of our efforts to continually improve our services to the
                university community.</span>
            </p>
        </div><br>
        <!-- <p class="partTitle"><u>PART 1</u><br>Infrastructure</p> -->
        <div class="tableContainer">
            <table class="table table-bordered">
                <tbody>
                    <tr>
                    <th scope="row">Name(optional)</th>
                    <td colspan="2"><input type="text" class="form-control" name="name" autocomplete="off" placeholder="FULL NAME HERE"/></td>
                    <th scope="row">Sex</th>
                    <td>
                        <select name="gender" class="form-control" required>
                            <option value="" disabled selected>-Select-</option>
                            <option value="Male">Male</option>
                            <option value="Female">Female</option>
                        </select>
                    </td>
                    <th scope="row">Department:</th>
                    <td colspan="2"><input type="text" class="form-control" name="dept" required/></td>
                    </tr>
                    <tr>
                        <th>Post: </th>
                        <td><input type="text" class="form-control" name="post" required/></td>
                        <th>Permanent/Contract/Visiting</th>
                        <td><select name="postType" class="form-control" required>
                            <option value="" selected disabled>-Select-</option>
                            <option value="Permanent">Permanent</option>
                            <option value="Contarct">Contract</option>
                            <option value="Visiting">Visiting</option>
                        </select></td>
                        <th>Mobile No:(optional)</th>
                        <td><input type="number" class="form-control" name="contact" placeholder="0123456789" autocomplete="off"></td>
                        <th>Email:(optional)</th>
                        <td><input type="email" class="form-control" name="email" placeholder="xyz@abc.com" autocomplete="off"></td>
                    </tr>
                </tbody>
            </table>
        </div><br>
        <div class="tableContainer">
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th colspan="7" style="text-align: center; font-size: 26px;"><u>Part 1</u></th>
                    </tr>
                    <tr>
                        <th colspan="7" style="text-align: center; font-size: 26px;">Administration and Carrier Growth</th>
                    </tr>
                    <tr>
                        <th colspan="7">[Tick (&check;)in the relevant box]</th>
                    </tr>
                    <tr>
                        <th style="font-weight: bold; font-size: 20px;">Sr.</th>
                        <th style="font-weight: bold; font-size: 20px;">Parameters relevant to the Institute</th>
                        <th style="font-weight: bold; font-size: 20px;">Excellent</th>
                        <th style="font-weight: bold; font-size: 20px;">Very Good</th>
                        <th style="font-weight: bold; font-size: 20px;">Good</th>
                        <th style="font-weight: bold; font-size: 20px;">Fair</th>
                        <th style="font-weight: bold; font-size: 20px;">Poor</th>
                    </tr>
                </thead>
                <tbody>
                    <!-- 
                        - value="Excellent"
                        - value="Very Good"
                        - value="Good"
                        - value="Fair"
                        - value="Poor"
                     -->
                    <tr>
                        <td style=" font-size: 20px;">1</td>
                        <td style=" font-size: 20px;">Recruitment Policy</td>
                        <td style=" font-size: 20px;"><input type="radio" name="q1" class="q1" value="Excellent"></td>
                        <td style=" font-size: 20px;"><input type="radio" name="q1" class="q1" value="Very Good"></td>
                        <td style=" font-size: 20px;"><input type="radio" name="q1" class="q1" value="Good"></td>
                        <td style=" font-size: 20px;"><input type="radio" name="q1" class="q1" value="Fair"></td>
                        <td style=" font-size: 20px;"><input type="radio" name="q1" class="q1" value="Poor"></td>
                    </tr>
                    <tr>
                        <td style=" font-size: 20px;">2</td>
                        <td style=" font-size: 20px;">Quality of work assigned</td>
                        <td style=" font-size: 20px;"><input type="radio" name="q2" class="q2" value="Excellent"></td>
                        <td style=" font-size: 20px;"><input type="radio" name="q2" class="q2" value="Very Good"></td>
                        <td style=" font-size: 20px;"><input type="radio" name="q2" class="q2" value="Good"></td>
                        <td style=" font-size: 20px;"><input type="radio" name="q2" class="q2" value="Fair"></td>
                        <td style=" font-size: 20px;"><input type="radio" name="q2" class="q2" value="Poor"></td>
                    </tr>
                    <tr>
                        <td style=" font-size: 20px;">3</td>
                        <td style=" font-size: 20px;">Behaviour of institutional/departmental head</td>
                        <td style=" font-size: 20px;"><input type="radio" name="q3" class="q3" value="Excellent"></td>
                        <td style=" font-size: 20px;"><input type="radio" name="q3" class="q3" value="Excellent"></td>
                        <td style=" font-size: 20px;"><input type="radio" name="q3" class="q3" value="Good"></td>
                        <td style=" font-size: 20px;"><input type="radio" name="q3" class="q3" value="Fair"></td>
                        <td style=" font-size: 20px;"><input type="radio" name="q3" class="q3" value="Poor"></td>
                    </tr>
                    <tr>
                        <td style=" font-size: 20px;">4</td>
                        <td style=" font-size: 20px;">Number of working hours in a week</td>
                        <td style=" font-size: 20px;"><input type="radio" name="q4" class="q4" value="Excellent"></td>
                        <td style=" font-size: 20px;"><input type="radio" name="q4" class="q4" value="Very Good"></td>
                        <td style=" font-size: 20px;"><input type="radio" name="q4" class="q4" value="Good"></td>
                        <td style=" font-size: 20px;"><input type="radio" name="q4" class="q4" value="Fair"></td>
                        <td style=" font-size: 20px;"><input type="radio" name="q4" class="q4" value="Poor"></td>
                    </tr>
                    <tr>
                        <td style=" font-size: 20px;">5</td>
                        <td style=" font-size: 20px;">. Inspiration / Encouragement from Institutional / departmental head/ colleague</td>
                        <td style=" font-size: 20px;"><input type="radio" name="q5" class="q5" value="Excellent"></td>
                        <td style=" font-size: 20px;"><input type="radio" name="q5" class="q5" value="Very Good"></td>
                        <td style=" font-size: 20px;"><input type="radio" name="q5" class="q5" value="Good"></td>
                        <td style=" font-size: 20px;"><input type="radio" name="q5" class="q5" value="Fair"></td>
                        <td style=" font-size: 20px;"><input type="radio" name="q5" class="q5" value="Poor"></td>
                    </tr>
                    <tr>
                        <td style=" font-size: 20px;">6</td>
                        <td style=" font-size: 20px;">Research environment in institute</td>
                        <td style=" font-size: 20px;"><input type="radio" name="q6" class="q6" value="Excellent"></td>
                        <td style=" font-size: 20px;"><input type="radio" name="q6" class="q6" value="Very Good"></td>
                        <td style=" font-size: 20px;"><input type="radio" name="q6" class="q6" value="Good"></td>
                        <td style=" font-size: 20px;"><input type="radio" name="q6" class="q6" value="Fair"></td>
                        <td style=" font-size: 20px;"><input type="radio" name="q6" class="q6" value="Poor"></td>
                    </tr>
                    <tr>
                        <td style=" font-size: 20px;">7</td>
                        <td style=" font-size: 20px;">Regular involvement in extra curricular activities</td>
                        <td style=" font-size: 20px;"><input type="radio" name="q7" class="q7" value="Excellent"></td>
                        <td style=" font-size: 20px;"><input type="radio" name="q7" class="q7" value="Very Good"></td>
                        <td style=" font-size: 20px;"><input type="radio" name="q7" class="q7" value="Good"></td>
                        <td style=" font-size: 20px;"><input type="radio" name="q7" class="q7" value="Fair"></td>
                        <td style=" font-size: 20px;"><input type="radio" name="q7" class="q7" value="Poor"></td>
                    </tr>
                    <tr>
                        <td style=" font-size: 20px;">8</td>
                        <td style=" font-size: 20px;">Satisfaction with regular appraisal</td>
                        <td style=" font-size: 20px;"><input type="radio" name="q8" class="q8" value="Excellent"></td>
                        <td style=" font-size: 20px;"><input type="radio" name="q8" class="q8" value="Very Good"></td>
                        <td style=" font-size: 20px;"><input type="radio" name="q8" class="q8" value="Good"></td>
                        <td style=" font-size: 20px;"><input type="radio" name="q8" class="q8" value="Fair"></td>
                        <td style=" font-size: 20px;"><input type="radio" name="q8" class="q8" value="Poor"></td>
                    </tr>
                    <tr>
                        <td style=" font-size: 20px;">9</td>
                        <td style=" font-size: 20px;">Rotation method to attend FDP / workshops / seminar </td>
                        <td style=" font-size: 20px;"><input type="radio" name="q9" class="q9" value="Excellent"></td>
                        <td style=" font-size: 20px;"><input type="radio" name="q9" class="q9" value="Very Good"></td>
                        <td style=" font-size: 20px;"><input type="radio" name="q9" class="q9" value="Good"></td>
                        <td style=" font-size: 20px;"><input type="radio" name="q9" class="q9" value="Fair"></td>
                        <td style=" font-size: 20px;"><input type="radio" name="q9" class="q9" value="Poor"></td>
                    </tr>
                    <tr>
                        <td style=" font-size: 20px;">10</td>
                        <td style=" font-size: 20px;">Fund availability for membership of international/national bodies</td>
                        <td style=" font-size: 20px;"><input type="radio" name="q10" class="q10" value="Excellent"></td>
                        <td style=" font-size: 20px;"><input type="radio" name="q10" class="q10" value="Very Good"></td>
                        <td style=" font-size: 20px;"><input type="radio" name="q10" class="q10" value="Good"></td>
                        <td style=" font-size: 20px;"><input type="radio" name="q10" class="q10" value="Fair"></td>
                        <td style=" font-size: 20px;"><input type="radio" name="q10" class="q10" value="Poor"></td>
                    </tr>
                    <tr>
                        <td style=" font-size: 20px;">11</td>
                        <td style=" font-size: 20px;">Fund availability for publishing research and other related work</td>
                        <td style=" font-size: 20px;"><input type="radio" name="q11" class="q11" value="Excellent"></td>
                        <td style=" font-size: 20px;"><input type="radio" name="q11" class="q11" value="Very Good"></td>
                        <td style=" font-size: 20px;"><input type="radio" name="q11" class="q11"value="Good"></td>
                        <td style=" font-size: 20px;"><input type="radio" name="q11" class="q11" value="Fair"></td>
                        <td style=" font-size: 20px;"><input type="radio" name="q11" class="q11" value="Poor"></td>
                    </tr>
                    <tr>
                        <td style=" font-size: 20px;">12</td>
                        <td style=" font-size: 20px;">Current salary structure </td>
                        <td style=" font-size: 20px;"><input type="radio" name="q12" class="q12" value="Excellent"></td>
                        <td style=" font-size: 20px;"><input type="radio" name="q12" class="q12" value="Very Good"></td>
                        <td style=" font-size: 20px;"><input type="radio" name="q12" class="q12"value="Good"></td>
                        <td style=" font-size: 20px;"><input type="radio" name="q12" class="q12" value="Fair"></td>
                        <td style=" font-size: 20px;"><input type="radio" name="q12" class="q12" value="Poor"></td>
                    </tr>
                    <tr>
                        <td style=" font-size: 20px;">13</td>
                        <td style=" font-size: 20px;">Evaluation (assessment) techniques</td>
                        <td style=" font-size: 20px;"><input type="radio" name="q13" class="q13" value="Excellent"></td>
                        <td style=" font-size: 20px;"><input type="radio" name="q13" class="q13" value="Very Good"></td>
                        <td style=" font-size: 20px;"><input type="radio" name="q13" class="q13"value="Good"></td>
                        <td style=" font-size: 20px;"><input type="radio" name="q13" class="q13" value="Fair"></td>
                        <td style=" font-size: 20px;"><input type="radio" name="q13" class="q13" value="Poor"></td>
                    </tr>
                    <tr>
                        <td style=" font-size: 20px;">14</td>
                        <td style=" font-size: 20px;">Introduction of new subject and its training</td>
                        <td style=" font-size: 20px;"><input type="radio" name="q14" class="q14" value="Excellent"></td>
                        <td style=" font-size: 20px;"><input type="radio" name="q14" class="q14" value="Very Good"></td>
                        <td style=" font-size: 20px;"><input type="radio" name="q14" class="q14"value="Good"></td>
                        <td style=" font-size: 20px;"><input type="radio" name="q14" class="q14" value="Fair"></td>
                        <td style=" font-size: 20px;"><input type="radio" name="q14" class="q14" value="Poor"></td>
                    </tr><tr>
                        <td style=" font-size: 20px;">15</td>
                        <td style=" font-size: 20px;">Transportation facility for official work</td>
                        <td style=" font-size: 20px;"><input type="radio" name="q15" class="q15" value="Excellent"></td>
                        <td style=" font-size: 20px;"><input type="radio" name="q15" class="q15" value="Very Good"></td>
                        <td style=" font-size: 20px;"><input type="radio" name="q15" class="q15"value="Good"></td>
                        <td style=" font-size: 20px;"><input type="radio" name="q15" class="q15" value="Fair"></td>
                        <td style=" font-size: 20px;"><input type="radio" name="q15" class="q15" value="Poor"></td>
                    </tr><tr>
                        <td style=" font-size: 20px;">16</td>
                        <td style=" font-size: 20px;">Timely reimbursement for paper setting/ copy checking/extra classes etc</td>
                        <td style=" font-size: 20px;"><input type="radio" name="q16" class="q16" value="Excellent"></td>
                        <td style=" font-size: 20px;"><input type="radio" name="q16" class="q16" value="Very Good"></td>
                        <td style=" font-size: 20px;"><input type="radio" name="q16" class="q16"value="Good"></td>
                        <td style=" font-size: 20px;"><input type="radio" name="q16" class="q16" value="Fair"></td>
                        <td style=" font-size: 20px;"><input type="radio" name="q16" class="q16" value="Poor"></td>
                    </tr><tr>
                        <td style=" font-size: 20px;">17</td>
                        <td style=" font-size: 20px;">Grievance redressal system.</td>
                        <td style=" font-size: 20px;"><input type="radio" name="q17" class="q17" value="Excellent"></td>
                        <td style=" font-size: 20px;"><input type="radio" name="q17" class="q17" value="Very Good"></td>
                        <td style=" font-size: 20px;"><input type="radio" name="q17" class="q17"value="Good"></td>
                        <td style=" font-size: 20px;"><input type="radio" name="q17" class="q17" value="Fair"></td>
                        <td style=" font-size: 20px;"><input type="radio" name="q17" class="q17" value="Poor"></td>
                    </tr><tr>
                        <td style=" font-size: 20px;">18</td>
                        <td style=" font-size: 20px;">. Regular promotion scheme (Junior scale to Senior scale)</td>
                        <td style=" font-size: 20px;"><input type="radio" name="q18" class="q18" value="Excellent"></td>
                        <td style=" font-size: 20px;"><input type="radio" name="q18" class="q18" value="Very Good"></td>
                        <td style=" font-size: 20px;"><input type="radio" name="q18" class="q18"value="Good"></td>
                        <td style=" font-size: 20px;"><input type="radio" name="q18" class="q18" value="Fair"></td>
                        <td style=" font-size: 20px;"><input type="radio" name="q18" class="q18" value="Poor"></td>
                    </tr><tr>
                        <td style=" font-size: 20px;">19</td>
                        <td style=" font-size: 20px;">Contingency fund availability</td>
                        <td style=" font-size: 20px;"><input type="radio" name="q19" class="q19" value="Excellent"></td>
                        <td style=" font-size: 20px;"><input type="radio" name="q19" class="q19" value="Very Good"></td>
                        <td style=" font-size: 20px;"><input type="radio" name="q19" class="q19"value="Good"></td>
                        <td style=" font-size: 20px;"><input type="radio" name="q19" class="q19" value="Fair"></td>
                        <td style=" font-size: 20px;"><input type="radio" name="q19" class="q19" value="Poor"></td>
                    </tr>
                </tbody>
            </table>
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th style="text-align: center;">Parameter</th>
                        <th style="text-align: center;">Yes ('Y')</th>
                        <th style="text-align: center;">No ('N')</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>Is your work meaningful?</td>
                        <td style="text-align: center;">Y <input type="radio" name="q20" value="YES" class="q20"></td>
                        <td style="text-align: center;">N <input type="radio" name="q20" value="NO" class="q20"></td>
                    </tr>
                    <tr>
                        <td>Are you Involved in decision making/problem solving? </td>
                        <td style="text-align: center;">Y <input type="radio" name="q21" value="YES"  class="q21"></td>
                        <td style="text-align: center;">N <input type="radio" name="q21" value="NO"  class="q21"></td>
                    </tr>
                    <tr>
                        <td>Freedom to run project work (grant from government institutions) </td>
                        <td style="text-align: center;">Y <input type="radio" name="q22" value="YES"  class="q22"></td>
                        <td style="text-align: center;">N <input type="radio" name="q22"  value="NO" class="q22"></td>
                    </tr>
                    <tr>
                        <td>Are you satisfied with current position and work assigned?</td>
                        <td style="text-align: center;">Y <input type="radio" name="q23" value="YES" class="q23"></td>
                        <td style="text-align: center;">N <input type="radio" name="q23" value="NO"  class="q23"></td>
                    </tr>
                    <tr>
                        <td>Is higher education facility available under Carrier Advancement Scheme (CAS)? </td>
                        <td style="text-align: center;">Y <input type="radio" name="q24" value="YES" class="q24"></td>
                        <td style="text-align: center;">N <input type="radio" name="q24" value="NO" class="q24"></td>
                    </tr>
                    <tr>
                        <td>Any increment after achieving higher degree/certificate</td>
                        <td style="text-align: center;">Y <input type="radio" name="q25" value="YES" class="q25"></td>
                        <td style="text-align: center;">N <input type="radio" name="q25" value="NO" class="q25"></td>
                    </tr>
                    <tr>
                        <td>Is leave facility available to go for deputation?</td>
                        <td style="text-align: center;">Y <input type="radio" name="q26" value="YES" class="q26"></td>
                        <td style="text-align: center;">N <input type="radio" name="q26" value="NO" class="q26"></td>
                    </tr>
                    <tr>
                        <td>Is a rotation scheme is applicable on higher post?</td>
                        <td style="text-align: center;">Y <input type="radio" name="q27" value="YES" class="q27"></td>
                        <td style="text-align: center;">N <input type="radio" name="q27" value="NO" class="q27"></td>
                    </tr>
                    <tr>
                        <td>Is any award for best performance/result included?</td>
                        <td style="text-align: center;">Y <input type="radio" name="q28" value="YES" class="q28"></td>
                        <td style="text-align: center;">N <input type="radio" name="q28" value="NO" class="q28"></td>
                    </tr>
                    <tr>
                        <td>Is pension and gratuity facility available?</td>
                        <td style="text-align: center;">Y <input type="radio" name="q29" value="YES" class="q29"></td>
                        <td style="text-align: center;">N <input type="radio" name="q29" value="NO" class="q29"></td>
                    </tr>
                    <tr>
                        <td>Is Medical reimbursement facility is available?</td>
                        <td style="text-align: center;">Y <input type="radio" name="q30" value="YES" class="q30"></td>
                        <td style="text-align: center;">N <input type="radio" name="q30" value="NO" class="q30"></td>
                    </tr>
                    <tr>
                        <td>Lump sum amount payment, after death, during service</td>
                        <td style="text-align: center;">Y <input type="radio" name="q31" value="YES" class="q31"></td>
                        <td style="text-align: center;">N <input type="radio" name="q31" value="NO" class="q31"></td>
                    </tr>
                    <tr>
                        <td>Retirement scheme before completion of service (VRS)</td>
                        <td style="text-align: center;">Y <input type="radio" name="q32" value="YES" class="q32"></td>
                        <td style="text-align: center;">N <input type="radio" name="q32" value="NO" class="q32"></td>
                    </tr>
                    <tr>
                        <td>Reservation of seats for employee’s children in various courses</td>
                        <td style="text-align: center;">Y <input type="radio" name="q33" value="YES" class="q33"></td>
                        <td style="text-align: center;">N <input type="radio" name="q33" value="NO" class="q33"></td>
                    </tr>
                </tbody>
            </table><br><br>
            <table class="table table-bordered">
            <thead>
                    <tr>
                        <th colspan="7" style="text-align: center; font-size: 26px;"><u>Part 2</u></th>
                    </tr>
                    <tr>
                        <th colspan="7" style="text-align: center; font-size: 26px;">Infrastructure</th>
                    </tr>
                    <tr>
                        <th colspan="7">[Tick (&check;)in the relevant box]</th>
                    </tr>
                    <tr>
                        <th style="font-weight: bold; font-size: 20px;">Sr.</th>
                        <th style="font-weight: bold; font-size: 20px;">Parameters relevant to the Institute</th>
                        <th style="font-weight: bold; font-size: 20px;">Excellent</th>
                        <th style="font-weight: bold; font-size: 20px;">Very Good</th>
                        <th style="font-weight: bold; font-size: 20px;">Good</th>
                        <th style="font-weight: bold; font-size: 20px;">Fair</th>
                        <th style="font-weight: bold; font-size: 20px;">Poor</th>
                    </tr>
                </thead>
                <tbody>
                    <!-- 
                        - value="Excellent"
                        - value="Very Good"
                        - value="Good"
                        - value="Fair"
                        - value="Poor"
                     -->
                    <tr>
                        <td style=" font-size: 20px;">1</td>
                        <td style=" font-size: 20px;">. Availability of Stationary articles (All articlePapers/pen/pencil/weight/stapler/gum/scissor/ punching machine etc.</td>
                        <td style=" font-size: 20px;"><input type="radio" name="q34" class="q34" value="Excellent"></td>
                        <td style=" font-size: 20px;"><input type="radio" name="q34" class="q34" value="Very Good"></td>
                        <td style=" font-size: 20px;"><input type="radio" name="q34" class="q34" value="Good"></td>
                        <td style=" font-size: 20px;"><input type="radio" name="q34" class="q34" value="Fair"></td>
                        <td style=" font-size: 20px;"><input type="radio" name="q34" class="q34" value="Poor"></td>
                    </tr>
                    <tr>
                        <td style=" font-size: 20px;">2</td>
                        <td style=" font-size: 20px;">Library facilities in academic block (Books/ Journals/ News Paper / Magazine etc)</td>
                        <td style=" font-size: 20px;"><input type="radio" name="q35" class="q35" value="Excellent"></td>
                        <td style=" font-size: 20px;"><input type="radio" name="q35" class="q35" value="Excellent"></td>
                        <td style=" font-size: 20px;"><input type="radio" name="q35" class="q35" value="Good"></td>
                        <td style=" font-size: 20px;"><input type="radio" name="q35" class="q35" value="Fair"></td>
                        <td style=" font-size: 20px;"><input type="radio" name="q35" class="q35" value="Poor"></td>
                    </tr>
                    <tr>
                        <td style=" font-size: 20px;">3</td>
                        <td style=" font-size: 20px;">Facility in class rooms with general resources like chair-table / AC / Fan /Tube light/other furniture)</td>
                        <td style=" font-size: 20px;"><input type="radio" name="q36" class="q36" value="Excellent"></td>
                        <td style=" font-size: 20px;"><input type="radio" name="q36" class="q36" value="Very Good"></td>
                        <td style=" font-size: 20px;"><input type="radio" name="q36" class="q36" value="Good"></td>
                        <td style=" font-size: 20px;"><input type="radio" name="q36" class="q36" value="Fair"></td>
                        <td style=" font-size: 20px;"><input type="radio" name="q36" class="q36" value="Poor"></td>
                    </tr>
                    <tr>
                        <td style=" font-size: 20px;">4</td>
                        <td style=" font-size: 20px;">Teaching facilities in class room (Podium / Black or white board/chalk and duster/ white board marker / LCD projector etc.)</td>
                        <td style=" font-size: 20px;"><input type="radio" name="q37" class="q37" value="Excellent"></td>
                        <td style=" font-size: 20px;"><input type="radio" name="q37" class="q37" value="Very Good"></td>
                        <td style=" font-size: 20px;"><input type="radio" name="q37" class="q37" value="Good"></td>
                        <td style=" font-size: 20px;"><input type="radio" name="q37" class="q37" value="Fair"></td>
                        <td style=" font-size: 20px;"><input type="radio" name="q37" class="q37" value="Poor"></td>
                    </tr>
                    <tr>
                        <td style=" font-size: 20px;">5</td>
                        <td style=" font-size: 20px;">Labs equipped with required hardware and software along with lab assistance</td>
                        <td style=" font-size: 20px;"><input type="radio" name="q38" class="q38" value="Excellent"></td>
                        <td style=" font-size: 20px;"><input type="radio" name="q38" class="q38" value="Very Good"></td>
                        <td style=" font-size: 20px;"><input type="radio" name="q38" class="q38" value="Good"></td>
                        <td style=" font-size: 20px;"><input type="radio" name="q38" class="q38" value="Fair"></td>
                        <td style=" font-size: 20px;"><input type="radio" name="q38" class="q38" value="Poor"></td>
                    </tr>
                    <tr>
                        <td style=" font-size: 20px;">6</td>
                        <td style=" font-size: 20px;">Cleanliness in academic building/Rooms/labs.</td>
                        <td style=" font-size: 20px;"><input type="radio" name="q39" class="q39" value="Excellent"></td>
                        <td style=" font-size: 20px;"><input type="radio" name="q39" class="q39" value="Very Good"></td>
                        <td style=" font-size: 20px;"><input type="radio" name="q39" class="q39" value="Good"></td>
                        <td style=" font-size: 20px;"><input type="radio" name="q39" class="q39" value="Fair"></td>
                        <td style=" font-size: 20px;"><input type="radio" name="q39" class="q39" value="Poor"></td>
                    </tr>
                    <tr>
                        <td style=" font-size: 20px;">7</td>
                        <td style=" font-size: 20px;">Vehicle parking and security in campus.</td>
                        <td style=" font-size: 20px;"><input type="radio" name="q40" class="q40" value="Excellent"></td>
                        <td style=" font-size: 20px;"><input type="radio" name="q40" class="q40" value="Very Good"></td>
                        <td style=" font-size: 20px;"><input type="radio" name="q40" class="q40" value="Good"></td>
                        <td style=" font-size: 20px;"><input type="radio" name="q40" class="q40" value="Fair"></td>
                        <td style=" font-size: 20px;"><input type="radio" name="q40" class="q40" value="Poor"></td>
                    </tr>
                    <tr>
                        <td style=" font-size: 20px;">8</td>
                        <td style=" font-size: 20px;">Overall Rating</td>
                        <td style=" font-size: 20px;"><input type="radio" name="q41" class="q41" value="Excellent"></td>
                        <td style=" font-size: 20px;"><input type="radio" name="q41" class="q41" value="Very Good"></td>
                        <td style=" font-size: 20px;"><input type="radio" name="q41" class="q41" value="Good"></td>
                        <td style=" font-size: 20px;"><input type="radio" name="q41" class="q41" value="Fair"></td>
                        <td style=" font-size: 20px;"><input type="radio" name="q41" class="q41" value="Poor"></td>
                    </tr>
                </tbody>
            </table>
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th style="text-align: center;">Parameter</th>
                        <th style="text-align: center;">Yes ('Y')</th>
                        <th style="text-align: center;">No ('N')</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>Do faculty members have separate room or on sharing basis?</td>
                        <td style="text-align: center;">Y <input type="radio" name="q42" value="YES" class="q42"></td>
                        <td style="text-align: center;">N <input type="radio" name="q42" value="NO" class="q42"></td>
                    </tr>
                    <tr>
                        <td>Is Faculty room equipped with computer/internet connection/printer?</td>
                        <td style="text-align: center;">Y <input type="radio" name="q43" value="YES" class="q43"></td>
                        <td style="text-align: center;">N <input type="radio" name="q43" value="NO" class="q43"></td>
                    </tr>
                    <tr>
                        <td>Class rooms and labs are in adequate numbers.</td>
                        <td style="text-align: center;">Y <input type="radio" name="q44" value="YES" class="q44"></td>
                        <td style="text-align: center;">N <input type="radio" name="q44" value="NO" class="q44"></td>
                    </tr>
                    <tr>
                        <td>Availability of medicines and First Aid Box.</td>
                        <td style="text-align: center;">Y <input type="radio" name="q45" value="YES" class="q45"></td>
                        <td style="text-align: center;">N <input type="radio" name="q45" value="NO" class="q45"></td>
                    </tr>
                    <tr>
                        <td>Drinking water is availability in premises</td>
                        <td style="text-align: center;">Y <input type="radio" name="q46" value="YES" class="q46"></td>
                        <td style="text-align: center;">N <input type="radio" name="q46" value="NO" class="q46"></td>
                    </tr>
                    <tr>
                        <td>Peons are available at your disposal.</td>
                        <td style="text-align: center;">Y <input type="radio" name="q47" value="YES" class="q47"></td>
                        <td style="text-align: center;">N <input type="radio" name="q47" value="NO" class="q47"></td>
                    </tr>
                    <tr>
                        <td>Availability of staff quarter’s with other facilities.</td>
                        <td style="text-align: center;">Y <input type="radio" name="q48" value="YES"  class="q48"></td>
                        <td style="text-align: center;">N <input type="radio" name="q48" value="NO"  class="q48"></td>
                    </tr>
                    <tr>
                        <td>Sports (Indoor/Outdoor) Facilities (In free time)</td>
                        <td style="text-align: center;">Y <input type="radio" name="q49" value="YES" class="q49"></td>
                        <td style="text-align: center;">N <input type="radio" name="q49" value="NO" class="q49"></td>
                    </tr>
                    <tr>
                        <td>CCTV Surveillance in campus</td>
                        <td style="text-align: center;">Y <input type="radio" name="q50" value="YES" class="q50"></td>
                        <td style="text-align: center;">N <input type="radio" name="q50" value="NO"  class="q50"></td>
                    </tr>
                    <tr>
                        <td>Canteen Availability in campus.</td>
                        <td style="text-align: center;">Y <input type="radio" name="q51" value="YES"  class="q51"></td>
                        <td style="text-align: center;">N <input type="radio" name="q51" value="NO"  class="q51"></td>
                    </tr>
                    <tr>
                        <td>In house photocopy centre available.</td>
                        <td style="text-align: center;">Y <input type="radio" name="q52" value="YES"  class="q52"></td>
                        <td style="text-align: center;">N <input type="radio" name="q52" value="NO" class="q52"></td>
                    </tr>
                    
                </tbody>
            </table><br><br>
        </div>
        <div class="note">
            <p>Please suggest any skills you want our Institute should focus on for grooming of Students and Institute. All of your suggestions are welcome.</p>
        </div><br>
        <p class="partTitle"><i>Suggestions</i></p>
        <div class="tableContainer">
            <table class="table table-borderless">
                <tbody>
                    <!-- Suggestion 1 -->
                    <tr>
                        <th scope="row"  style="font-size: 22px;">1. </th>
                        <td style="font-size: 22px;">Provide your suggestion for improvement of overall infrastructure of campus:</td>
                    </tr>
                    <tr>
                        <td colspan="2"  style="font-size: 22px;"><textarea name="suggestion1" id="suggestion1" cols="10" rows="5" class="form-control" maxlength = "500" required></textarea></td>
                    </tr>
                    <!-- Suggestion 2 -->
                    <tr>
                        <th scope="row"  style="font-size: 22px;">2. </th>
                        <td style="font-size: 22px;">Suggestions for improving administrative tactics for betterment of teachers and students:</td>
                    </tr>
                    <tr>
                        <td colspan="2"  style="font-size: 22px;"><textarea name="suggestion2" id="suggestion2" cols="10" rows="5" class="form-control"  maxlength = "500" required></textarea></td>
                    </tr>
                    <!-- Suggestion 3 -->
                    <tr>
                        <th scope="row"  style="font-size: 22px;">3. </th>
                        <td style="font-size: 22px;">How can a teacher enrich the teaching environment and motivate its students to become a responsible citizen to serve the nation?</td>
                    </tr>
                    <tr>
                        <td colspan="2"  style="font-size: 22px;"><textarea name="suggestion3" id="suggestion3" cols="10" rows="5" class="form-control"  maxlength = "500" required></textarea></td>
                    </tr>
                    <!-- Suggestion 4 -->
                    <tr>
                        <th scope="row"  style="font-size: 22px;">4. </th>
                        <td style="font-size: 22px;">Any other suggestion you would like to add.</td>
                    </tr>
                    <tr>
                        <td colspan="2"  style="font-size: 22px;"><textarea name="suggestion4" id="suggestion4" cols="10" rows="5" class="form-control"  maxlength = "500" required></textarea></td>
                    </tr>
                </tbody>
            </table>
        </div>
        <!-- Submit Modal and Btn -->
        <button type="button"  id="submitFormBtn" class="btn btn-primary" data-toggle="modal" data-target=".bd-example-modal-sm">Submit</button>
        <div class="modal fade bd-example-modal-sm" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-sm">
            <div class="modal-content" style="padding: 20px; font-size: 16px;">
                <h4 style="font-weight: bold; text-align: center;">Confirm Submission!</h4>
                <p>Are you sure about the data filled by you in this feedback?, <br>Data once submitted cannot be edited.</p>
                <button type="submit" class="btn btn-success" name="submit" style="margin-top :10px;">Yes, I am Sure</button>
                <button data-dismiss="modal" class="btn btn-danger" style="margin-top: 10px; ">No</button>
            </div>
        </div>
        </div>
        </form>
        <!-- End of the Form -->

        <!-- IQAC -->
        <div class="iqacEnd">
            INTERNAL QUALITY ASSURANCE CELL (I.Q.A.C.), DAVV
        </div>

        <!-- Notice Modal -->
        <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalTitle" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="kyModalLongTitle" style="text-align: center; font-weight: bold;">Noteworthy to mention:</h5>
            </div>
            <div class="modal-body">
                <i>Respected Faculty Members, first of all we are really thankful to you for making this Institute shine today, You are the root and guiding path to not just students but us!<br>
                Your feedback is most valuable for us and will decide future operations in the Institute.</i>
                <br>Regards,<br>
                <?php echo strtoupper($_SESSION['name']);?>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-success" data-dismiss="modal">Close</button>
            </div>
            </div>
        </div>
        </div>
        <script src="scriptTeachers.js"></script>
        <!-- Back To Top Btn -->
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
        
    <!-- Footer -->
    <footer>
		<p>&copy; <script>document.write(new Date().getFullYear())</script> - <script>document.write(new Date().getFullYear() + 1)</script> Devi Ahilya Vishwavidyalaya Indore (M.P.)<br>Ver 2021.1 w.e.f 01-07-2021</p>
	</footer><br>
    <?php $connection->close();?>
</body>
</html>
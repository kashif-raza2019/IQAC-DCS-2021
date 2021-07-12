<?php
    session_start();
    include('../credential.php');  
    $user = $_SESSION['username'];
    $connection = mysqli_connect($servername, $username, $password, $dbname);


    if(isset($_POST['submit'])){
        $name_un = strtoupper($_POST['name']);
        $name = mysqli_real_escape_string($connection, $name_un);
        
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
        $suggestion1 = $_POST['suggestion1'];
        $suggestion2 = $_POST['suggestion2'];
        $suggestion3 = $_POST['suggestion3'];
        $suggestion4 = $_POST['suggestion4'];

        $query = "INSERT INTO feedback_parents(username,  Q1, Q2, Q3, Q4, Q5, Q6, Q7, Q8, Q9, Q10, Q11, Q12, Q13, Q14, Q15, Q16, Q17, Q18, Q19, Q20, Q21, Q22, Q23, Q24, Q25, Q26, Q27, Q28, Q29, Q30, Q31, Q32, Q33, Q34, Q35, Q36, Q37, Q38, Q39, Q40, Q41, Q42, Q43, Q44, Q45, Q46, Q47, Q48, Q49, Q50, Q51, Q52, Suggestion_1, Suggestion_2, Suggestion_3, Suggestion_4) VALUES('$user', '$name', '$gender', '$dept', '$post', '$posttype', '$contact', '$email' , '$q1', '$q2', '$q3', '$q4', '$q5', '$q6', '$q7', '$q8', '$q9', '$q10',  '$q11', '$q12', '$q13',  '$q14', '$q15', '$q16', '$q17', '$q18', '$q19', '$q20', '$q21', '$q22', '$q23', '$q24', '$q25', '$q26', '$q27', '$q28', '$q29', '$q30', '$q31', '$q32', '$q33', '$q34', '$q35', '$q36', '$q37', '$q38', '$q39', '$q40', '$q41', '$q42', '$q43', '$q44', '$q45', '$q46', '$q47', '$q48', '$q49', '$q50', '$q51', '$q52', '$suggestion1', '$suggestion2', '$suggestion3', '$suggestion4')";
        $insert = mysqli_query($connection, $query);
        if($insert){
            header("Location: FilledParents.php");
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
      input[type=number]::-webkit-inner-spin-button, 
        input[type=number]::-webkit-outer-spin-button { 
        -webkit-appearance: none; 
        margin: 0; 
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
<title>Feedback Parents</title>
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
        <h2 class="feedBackTitle">Parent Feedback Form</h2><br>
        <div class="note">
            <p><b>Dear Sir/Madam,</b><br>
                We shall be thankful to you, if you can spare some of your valuable time to fill up this feedback form and give
                us your valuable suggestions for further improvements in providing support & facilities to your ward. Your
                valuable inputs will be of great use to improve the quality and credibility of the Institute. <br>
            </p>
        </div><br>
        <!-- <p class="partTitle"><u>PART 1</u><br>Infrastructure</p> -->
        <div class="tableContainer">
            <table class="table table-bordered">
                <tbody>
                    <tr>
                    <th scope="row">Name of Student(optional)</th>
                    <td colspan="2"><input type="text" class="form-control" name="name" autocomplete="off" placeholder="FULL NAME HERE"/></td>
                    <th scope="row">Day Scholar/Hosteller</th>
                    <td>
                        <select name="day_hostel" class="form-control" required>
                            <option value="" disabled selected>-Select-</option>
                            <option value="Day Scholar">Day Scholar</option>
                            <option value="Hosteller">Hosteller</option>
                        </select>
                    </td>
                    <th scope="row">Name of Parent/ Guardian(Optional):</th>
                    <td colspan="2"><input type="text" class="form-control" name="name_parent" placeholder="FULL NAME HERE"/></td>
                    </tr>
                    <tr>
                        <th>Your Ward's Course</th>
                        <td colspan="2"><select name="course" class="form-control" style="text-align: center;" required>
                            <option value="" style="text-align: center;" disabled selected>-Select Course-</option>
                            <?php
                                $query = mysqli_query($connection, "SELECT*FROM course WHERE Username = '$user'");
                                while($fetchData = $query->fetch_assoc()){
                                    $courseName = strtoupper($fetchData['Course_name']);
                                    echo "<option value='$courseName' style='text-align: center;'>$courseName</option>";
                                }
                            ?>
                        </select>
                        </td>
                        <th>Your Ward's Year or Semester</th>
                        <td><select name="semester" class="form-control" required>
                            <option value="" disabled selected>-Select Semester or Year-</option>
                            <option value="1st Year">1st Year</option>
                            <option value="2nd Year">2nd Year</option>
                            <option value="3rd Year">3rd Year</option>
                            <option value="4th Year">4th Year</option>
                            <option value="5th Year">5th Year</option>
                            <option value="1st Sem">1st Semester</option>
                            <option value="2nd Sem">2nd Semester</option>
                            <option value="3rd Sem">3rd Semester</option>
                            <option value="4th Sem">4th Semester</option>
                            <option value="5th Sem">5th Semester</option>
                            <option value="6th Sem">6th Semester</option>
                            <option value="7th Sem">7th Semester</option>
                            <option value="8th Sem">8th Semester</option>
                            <option value="9th Sem">9th Semester</option>
                            <option value="10th Sem">10th Semester</option>
                            <option value="1st Sem">11th Semester</option>
                            <option value="1st Sem">12th Semester</option>
                        </select></td>
                        <th>Your Ward's Department</th>
                        <td><input type="text" class="form-control" autocomplete="on" name="dept" placeholder="Department Name" required/></td>
                    </tr>
                    <tr>
                        <th>Mobile No:(optional)</th>
                        <td colspan="2"><input type="number" class="form-control" name="contact" placeholder="0123456789" autocomplete="off"></td>
                        <th colspan="2">Email:(optional)</th>
                        <td colspan="2"><input type="email" class="form-control" name="email" placeholder="xyz@abc.com" autocomplete="off"></td>
                    </tr>
                </tbody>
            </table>
        </div><br>
        <div class="note">
            <p><b>Dear Sir/Madam,</b><br>
            Please use the following criteria for giving feedback:
            <b>5- Excellent (E)</b>,<b> 4- Very Good (VG)</b>,<b> 3- Good (G)</b>,<b> 2- Satisfactory(S)</b>,<b> 1-Poor (P)</b>.
            Please tick (&check;) the response. <br>
            </p>
        </div><br>
        <div class="tableContainer">
            <table class="table table-bordered">
                <thead>
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
                        <td style=" font-size: 20px;">Quality of Teaching Methodology</td>
                        <td style=" font-size: 20px;"><input type="radio" name="q1" class="q1" value="Excellent"></td>
                        <td style=" font-size: 20px;"><input type="radio" name="q1" class="q1" value="Very Good"></td>
                        <td style=" font-size: 20px;"><input type="radio" name="q1" class="q1" value="Good"></td>
                        <td style=" font-size: 20px;"><input type="radio" name="q1" class="q1" value="Fair"></td>
                        <td style=" font-size: 20px;"><input type="radio" name="q1" class="q1" value="Poor"></td>
                    </tr>
                    <tr>
                        <td style=" font-size: 20px;">2</td>
                        <td style=" font-size: 20px;">Quality of Placement Training</td>
                        <td style=" font-size: 20px;"><input type="radio" name="q2" class="q2" value="Excellent"></td>
                        <td style=" font-size: 20px;"><input type="radio" name="q2" class="q2" value="Very Good"></td>
                        <td style=" font-size: 20px;"><input type="radio" name="q2" class="q2" value="Good"></td>
                        <td style=" font-size: 20px;"><input type="radio" name="q2" class="q2" value="Fair"></td>
                        <td style=" font-size: 20px;"><input type="radio" name="q2" class="q2" value="Poor"></td>
                    </tr>
                    <tr>
                        <td style=" font-size: 20px;">3</td>
                        <td style=" font-size: 20px;">Quality of food in the canteen</td>
                        <td style=" font-size: 20px;"><input type="radio" name="q3" class="q3" value="Excellent"></td>
                        <td style=" font-size: 20px;"><input type="radio" name="q3" class="q3" value="Excellent"></td>
                        <td style=" font-size: 20px;"><input type="radio" name="q3" class="q3" value="Good"></td>
                        <td style=" font-size: 20px;"><input type="radio" name="q3" class="q3" value="Fair"></td>
                        <td style=" font-size: 20px;"><input type="radio" name="q3" class="q3" value="Poor"></td>
                    </tr>
                    <tr>
                        <td style=" font-size: 20px;">4</td>
                        <td style=" font-size: 20px;">Quality of classroom maintenance</td>
                        <td style=" font-size: 20px;"><input type="radio" name="q4" class="q4" value="Excellent"></td>
                        <td style=" font-size: 20px;"><input type="radio" name="q4" class="q4" value="Very Good"></td>
                        <td style=" font-size: 20px;"><input type="radio" name="q4" class="q4" value="Good"></td>
                        <td style=" font-size: 20px;"><input type="radio" name="q4" class="q4" value="Fair"></td>
                        <td style=" font-size: 20px;"><input type="radio" name="q4" class="q4" value="Poor"></td>
                    </tr>
                    <tr>
                        <td style=" font-size: 20px;">5</td>
                        <td style=" font-size: 20px;">Quality of Library facility- Availability of books(Textbooks)</td>
                        <td style=" font-size: 20px;"><input type="radio" name="q5" class="q5" value="Excellent"></td>
                        <td style=" font-size: 20px;"><input type="radio" name="q5" class="q5" value="Very Good"></td>
                        <td style=" font-size: 20px;"><input type="radio" name="q5" class="q5" value="Good"></td>
                        <td style=" font-size: 20px;"><input type="radio" name="q5" class="q5" value="Fair"></td>
                        <td style=" font-size: 20px;"><input type="radio" name="q5" class="q5" value="Poor"></td>
                    </tr>
                    <tr>
                        <td style=" font-size: 20px;">6</td>
                        <td style=" font-size: 20px;">Quality of Library facility- Availability of books (Reference Books)</td>
                        <td style=" font-size: 20px;"><input type="radio" name="q6" class="q6" value="Excellent"></td>
                        <td style=" font-size: 20px;"><input type="radio" name="q6" class="q6" value="Very Good"></td>
                        <td style=" font-size: 20px;"><input type="radio" name="q6" class="q6" value="Good"></td>
                        <td style=" font-size: 20px;"><input type="radio" name="q6" class="q6" value="Fair"></td>
                        <td style=" font-size: 20px;"><input type="radio" name="q6" class="q6" value="Poor"></td>
                    </tr>
                    <tr>
                        <td style=" font-size: 20px;">7</td>
                        <td style=" font-size: 20px;">Quality of Library facility- Infrastructure</td>
                        <td style=" font-size: 20px;"><input type="radio" name="q7" class="q7" value="Excellent"></td>
                        <td style=" font-size: 20px;"><input type="radio" name="q7" class="q7" value="Very Good"></td>
                        <td style=" font-size: 20px;"><input type="radio" name="q7" class="q7" value="Good"></td>
                        <td style=" font-size: 20px;"><input type="radio" name="q7" class="q7" value="Fair"></td>
                        <td style=" font-size: 20px;"><input type="radio" name="q7" class="q7" value="Poor"></td>
                    </tr>
                    <tr>
                        <td style=" font-size: 20px;">8</td>
                        <td style=" font-size: 20px;">Quality of Library facility- Maintenance</td>
                        <td style=" font-size: 20px;"><input type="radio" name="q8" class="q8" value="Excellent"></td>
                        <td style=" font-size: 20px;"><input type="radio" name="q8" class="q8" value="Very Good"></td>
                        <td style=" font-size: 20px;"><input type="radio" name="q8" class="q8" value="Good"></td>
                        <td style=" font-size: 20px;"><input type="radio" name="q8" class="q8" value="Fair"></td>
                        <td style=" font-size: 20px;"><input type="radio" name="q8" class="q8" value="Poor"></td>
                    </tr>
                    <tr>
                        <td style=" font-size: 20px;">9</td>
                        <td style=" font-size: 20px;">Greenery in the environment</td>
                        <td style=" font-size: 20px;"><input type="radio" name="q9" class="q9" value="Excellent"></td>
                        <td style=" font-size: 20px;"><input type="radio" name="q9" class="q9" value="Very Good"></td>
                        <td style=" font-size: 20px;"><input type="radio" name="q9" class="q9" value="Good"></td>
                        <td style=" font-size: 20px;"><input type="radio" name="q9" class="q9" value="Fair"></td>
                        <td style=" font-size: 20px;"><input type="radio" name="q9" class="q9" value="Poor"></td>
                    </tr>
                    <tr>
                        <td style=" font-size: 20px;">10</td>
                        <td style=" font-size: 20px;">Cleanliness in the washroom</td>
                        <td style=" font-size: 20px;"><input type="radio" name="q10" class="q10" value="Excellent"></td>
                        <td style=" font-size: 20px;"><input type="radio" name="q10" class="q10" value="Very Good"></td>
                        <td style=" font-size: 20px;"><input type="radio" name="q10" class="q10" value="Good"></td>
                        <td style=" font-size: 20px;"><input type="radio" name="q10" class="q10" value="Fair"></td>
                        <td style=" font-size: 20px;"><input type="radio" name="q10" class="q10" value="Poor"></td>
                    </tr>
                    <tr>
                        <td style=" font-size: 20px;">11</td>
                        <td style=" font-size: 20px;">Support of Anti-Ragging cell</td>
                        <td style=" font-size: 20px;"><input type="radio" name="q11" class="q11" value="Excellent"></td>
                        <td style=" font-size: 20px;"><input type="radio" name="q11" class="q11" value="Very Good"></td>
                        <td style=" font-size: 20px;"><input type="radio" name="q11" class="q11"value="Good"></td>
                        <td style=" font-size: 20px;"><input type="radio" name="q11" class="q11" value="Fair"></td>
                        <td style=" font-size: 20px;"><input type="radio" name="q11" class="q11" value="Poor"></td>
                    </tr>
                    <tr>
                        <td style=" font-size: 20px;">12</td>
                        <td style=" font-size: 20px;">Support of Female Grievance Redressal cell</td>
                        <td style=" font-size: 20px;"><input type="radio" name="q12" class="q12" value="Excellent"></td>
                        <td style=" font-size: 20px;"><input type="radio" name="q12" class="q12" value="Very Good"></td>
                        <td style=" font-size: 20px;"><input type="radio" name="q12" class="q12"value="Good"></td>
                        <td style=" font-size: 20px;"><input type="radio" name="q12" class="q12" value="Fair"></td>
                        <td style=" font-size: 20px;"><input type="radio" name="q12" class="q12" value="Poor"></td>
                    </tr>
                    <tr>
                        <td style=" font-size: 20px;">13</td>
                        <td style=" font-size: 20px;">Quality of Fees related grievance redressal</td>
                        <td style=" font-size: 20px;"><input type="radio" name="q13" class="q13" value="Excellent"></td>
                        <td style=" font-size: 20px;"><input type="radio" name="q13" class="q13" value="Very Good"></td>
                        <td style=" font-size: 20px;"><input type="radio" name="q13" class="q13"value="Good"></td>
                        <td style=" font-size: 20px;"><input type="radio" name="q13" class="q13" value="Fair"></td>
                        <td style=" font-size: 20px;"><input type="radio" name="q13" class="q13" value="Poor"></td>
                    </tr>
                    <tr>
                        <td style=" font-size: 20px;">14</td>
                        <td style=" font-size: 20px;">Infrastructure</td>
                        <td style=" font-size: 20px;"><input type="radio" name="q14" class="q14" value="Excellent"></td>
                        <td style=" font-size: 20px;"><input type="radio" name="q14" class="q14" value="Very Good"></td>
                        <td style=" font-size: 20px;"><input type="radio" name="q14" class="q14"value="Good"></td>
                        <td style=" font-size: 20px;"><input type="radio" name="q14" class="q14" value="Fair"></td>
                        <td style=" font-size: 20px;"><input type="radio" name="q14" class="q14" value="Poor"></td>
                    </tr><tr>
                        <td style=" font-size: 20px;">15</td>
                        <td style=" font-size: 20px;">Quality of Cultural Activities</td>
                        <td style=" font-size: 20px;"><input type="radio" name="q15" class="q15" value="Excellent"></td>
                        <td style=" font-size: 20px;"><input type="radio" name="q15" class="q15" value="Very Good"></td>
                        <td style=" font-size: 20px;"><input type="radio" name="q15" class="q15"value="Good"></td>
                        <td style=" font-size: 20px;"><input type="radio" name="q15" class="q15" value="Fair"></td>
                        <td style=" font-size: 20px;"><input type="radio" name="q15" class="q15" value="Poor"></td>
                    </tr><tr>
                        <td style=" font-size: 20px;">16</td>
                        <td style=" font-size: 20px;">Quality of sports activities</td>
                        <td style=" font-size: 20px;"><input type="radio" name="q16" class="q16" value="Excellent"></td>
                        <td style=" font-size: 20px;"><input type="radio" name="q16" class="q16" value="Very Good"></td>
                        <td style=" font-size: 20px;"><input type="radio" name="q16" class="q16"value="Good"></td>
                        <td style=" font-size: 20px;"><input type="radio" name="q16" class="q16" value="Fair"></td>
                        <td style=" font-size: 20px;"><input type="radio" name="q16" class="q16" value="Poor"></td>
                    </tr>
                    <tr><th colspan="7"></th></tr>
                    <tr>
                        <th style="font-weight: bold; font-size: 20px;">Sr.</th>
                        <th style="font-weight: bold; font-size: 20px;">Parameters relevant to the Hostel</th>
                        <th style="font-weight: bold; font-size: 20px;">Excellent</th>
                        <th style="font-weight: bold; font-size: 20px;">Very Good</th>
                        <th style="font-weight: bold; font-size: 20px;">Good</th>
                        <th style="font-weight: bold; font-size: 20px;">Fair</th>
                        <th style="font-weight: bold; font-size: 20px;">Poor</th>
                    </tr>
                    <tr>
                        <td style=" font-size: 20px;">1</td>
                        <td style=" font-size: 20px;">Quality of food in the mess</td>
                        <td style=" font-size: 20px;"><input type="radio" name="q17" class="q17" value="Excellent"></td>
                        <td style=" font-size: 20px;"><input type="radio" name="q17" class="q17" value="Very Good"></td>
                        <td style=" font-size: 20px;"><input type="radio" name="q17" class="q17"value="Good"></td>
                        <td style=" font-size: 20px;"><input type="radio" name="q17" class="q17" value="Fair"></td>
                        <td style=" font-size: 20px;"><input type="radio" name="q17" class="q17" value="Poor"></td>
                    </tr>
                    <tr>
                        <td style=" font-size: 20px;">2</td>
                        <td style=" font-size: 20px;">Cleanliness in the mess</td>
                        <td style=" font-size: 20px;"><input type="radio" name="q18" class="q18" value="Excellent"></td>
                        <td style=" font-size: 20px;"><input type="radio" name="q18" class="q18" value="Very Good"></td>
                        <td style=" font-size: 20px;"><input type="radio" name="q18" class="q18"value="Good"></td>
                        <td style=" font-size: 20px;"><input type="radio" name="q18" class="q18" value="Fair"></td>
                        <td style=" font-size: 20px;"><input type="radio" name="q18" class="q18" value="Poor"></td>
                    </tr>
                    <tr>
                        <td style=" font-size: 20px;">3</td>
                        <td style=" font-size: 20px;">Cleanliness in the washrooms</td>
                        <td style=" font-size: 20px;"><input type="radio" name="q19" class="q19" value="Excellent"></td>
                        <td style=" font-size: 20px;"><input type="radio" name="q19" class="q19" value="Very Good"></td>
                        <td style=" font-size: 20px;"><input type="radio" name="q19" class="q19"value="Good"></td>
                        <td style=" font-size: 20px;"><input type="radio" name="q19" class="q19" value="Fair"></td>
                        <td style=" font-size: 20px;"><input type="radio" name="q19" class="q19" value="Poor"></td>
                    </tr>
                    <tr>
                        <td style=" font-size: 20px;">4</td>
                        <td style=" font-size: 20px;">Hostel’s environment (greenery)</td>
                        <td style=" font-size: 20px;"><input type="radio" name="q20" class="q20" value="Excellent"></td>
                        <td style=" font-size: 20px;"><input type="radio" name="q20" class="q20" value="Very Good"></td>
                        <td style=" font-size: 20px;"><input type="radio" name="q20" class="q20"value="Good"></td>
                        <td style=" font-size: 20px;"><input type="radio" name="q20" class="q20" value="Fair"></td>
                        <td style=" font-size: 20px;"><input type="radio" name="q20" class="q20" value="Poor"></td>
                    </tr>
                    <tr>
                        <td style=" font-size: 20px;">5</td>
                        <td style=" font-size: 20px;">Hostel’s room maintenance</td>
                        <td style=" font-size: 20px;"><input type="radio" name="q21" class="q21" value="Excellent"></td>
                        <td style=" font-size: 20px;"><input type="radio" name="q21" class="q21" value="Very Good"></td>
                        <td style=" font-size: 20px;"><input type="radio" name="q21" class="q21"value="Good"></td>
                        <td style=" font-size: 20px;"><input type="radio" name="q21" class="q21" value="Fair"></td>
                        <td style=" font-size: 20px;"><input type="radio" name="q21" class="q21" value="Poor"></td>
                    </tr>
                    <tr>
                        <td style=" font-size: 20px;">6</td>
                        <td style=" font-size: 20px;">Hostel Infrastructure</td>
                        <td style=" font-size: 20px;"><input type="radio" name="q22" class="q22" value="Excellent"></td>
                        <td style=" font-size: 20px;"><input type="radio" name="q22" class="q22" value="Very Good"></td>
                        <td style=" font-size: 20px;"><input type="radio" name="q22" class="q22"value="Good"></td>
                        <td style=" font-size: 20px;"><input type="radio" name="q22" class="q22" value="Fair"></td>
                        <td style=" font-size: 20px;"><input type="radio" name="q22" class="q22" value="Poor"></td>
                    </tr>
                    <tr>
                        <td style=" font-size: 20px;">7</td>
                        <td style=" font-size: 20px;">Quality of drinking water</td>
                        <td style=" font-size: 20px;"><input type="radio" name="q23" class="q23" value="Excellent"></td>
                        <td style=" font-size: 20px;"><input type="radio" name="q23" class="q23" value="Very Good"></td>
                        <td style=" font-size: 20px;"><input type="radio" name="q23" class="q23"value="Good"></td>
                        <td style=" font-size: 20px;"><input type="radio" name="q23" class="q23" value="Fair"></td>
                        <td style=" font-size: 20px;"><input type="radio" name="q23" class="q23" value="Poor"></td>
                    </tr>
                    <tr>
                        <td style=" font-size: 20px;">8</td>
                        <td style=" font-size: 20px;">Quality of Security and Surveillance</td>
                        <td style=" font-size: 20px;"><input type="radio" name="q24" class="q24" value="Excellent"></td>
                        <td style=" font-size: 20px;"><input type="radio" name="q24" class="q24" value="Very Good"></td>
                        <td style=" font-size: 20px;"><input type="radio" name="q24" class="q24"value="Good"></td>
                        <td style=" font-size: 20px;"><input type="radio" name="q24" class="q24" value="Fair"></td>
                        <td style=" font-size: 20px;"><input type="radio" name="q24" class="q24" value="Poor"></td>
                    </tr>
                    <tr>
                        <td style=" font-size: 20px;">9</td>
                        <td style=" font-size: 20px;">Quality of telephone facility to communicate with family members</td>
                        <td style=" font-size: 20px;"><input type="radio" name="q25" class="q25" value="Excellent"></td>
                        <td style=" font-size: 20px;"><input type="radio" name="q25" class="q25" value="Very Good"></td>
                        <td style=" font-size: 20px;"><input type="radio" name="q25" class="q25"value="Good"></td>
                        <td style=" font-size: 20px;"><input type="radio" name="q25" class="q25" value="Fair"></td>
                        <td style=" font-size: 20px;"><input type="radio" name="q25" class="q25" value="Poor"></td>
                    </tr>
                    <tr>
                        <td style=" font-size: 20px;">10</td>
                        <td style=" font-size: 20px;">Quality of internet and Wi-Fi facility</td>
                        <td style=" font-size: 20px;"><input type="radio" name="q26" class="q26" value="Excellent"></td>
                        <td style=" font-size: 20px;"><input type="radio" name="q26" class="q26" value="Very Good"></td>
                        <td style=" font-size: 20px;"><input type="radio" name="q26" class="q26"value="Good"></td>
                        <td style=" font-size: 20px;"><input type="radio" name="q26" class="q26" value="Fair"></td>
                        <td style=" font-size: 20px;"><input type="radio" name="q26" class="q26" value="Poor"></td>
                    </tr>

                </tbody>
            </table><br>
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
                        <td>Medical Support (First Aid</td>
                        <td style="text-align: center;">Y <input type="radio" name="q27" value="YES" class="q27"></td>
                        <td style="text-align: center;">N <input type="radio" name="q27" value="NO" class="q27"></td>
                    </tr>
                    <tr>
                        <td>Photocopy</td>
                        <td style="text-align: center;">Y <input type="radio" name="q28" value="YES" class="q28"></td>
                        <td style="text-align: center;">N <input type="radio" name="q28" value="NO" class="q28"></td>
                    </tr>
                    <tr>
                        <td>Access to Internet</td>
                        <td style="text-align: center;">Y <input type="radio" name="q29" value="YES" class="q29"></td>
                        <td style="text-align: center;">N <input type="radio" name="q29" value="NO" class="q29"></td>
                    </tr>
                    <tr>
                        <td>Vehicle parking facility</td>
                        <td style="text-align: center;">Y <input type="radio" name="q30" value="YES" class="q30"></td>
                        <td style="text-align: center;">N <input type="radio" name="q30" value="NO" class="q30"></td>
                    </tr>
                    <tr>
                        <td>Electronic Library Facility</td>
                        <td style="text-align: center;">Y <input type="radio" name="q31" value="YES" class="q31"></td>
                        <td style="text-align: center;">N <input type="radio" name="q31" value="NO" class="q31"></td>
                    </tr>
                    <tr>
                        <td>Presence of surveillance system</td>
                        <td style="text-align: center;">Y <input type="radio" name="q32" value="YES" class="q32"></td>
                        <td style="text-align: center;">N <input type="radio" name="q32" value="NO" class="q32"></td>
                    </tr>
                    <tr>
                        <td>Availability of Girls common room</td>
                        <td style="text-align: center;">Y <input type="radio" name="q33" value="YES" class="q33"></td>
                        <td style="text-align: center;">N <input type="radio" name="q33" value="NO" class="q33"></td>
                    </tr>
                    <tr>
                        <td>Availability of clean drinking water</td>
                        <td style="text-align: center;">Y <input type="radio" name="q34" value="YES" class="q34"></td>
                        <td style="text-align: center;">N <input type="radio" name="q34" value="NO" class="q34"></td>
                    </tr>

                    
                </tbody>
            </table><br><br>
        </div>
        <p class="partTitle"><i>Suggestions</i></p>
        <div class="tableContainer">
            <table class="table table-borderless">
                <tbody>
                    <!-- Suggestion 1 -->
                    <tr>
                        <th scope="row"  style="font-size: 22px;">1. </th>
                        <td style="font-size: 22px;">How can the institute help your ward better?</td>
                    </tr>
                    <tr>
                        <td colspan="2"  style="font-size: 22px;"><textarea name="suggestion1" id="suggestion1" cols="10" rows="5" class="form-control" maxlength = "500" required></textarea></td>
                    </tr>
                    <!-- Suggestion 2 -->
                    <tr>
                        <th scope="row"  style="font-size: 22px;">2. </th>
                        <td style="font-size: 22px;">How can the hostel give better facilities to your ward?</td>
                    </tr>
                    <tr>
                        <td colspan="2"  style="font-size: 22px;"><textarea name="suggestion2" id="suggestion2" cols="10" rows="5" class="form-control"  maxlength = "500" required></textarea></td>
                    </tr>
                    <!-- Suggestion 3 -->
                    <tr>
                        <th scope="row"  style="font-size: 22px;">3. </th>
                        <td style="font-size: 22px;">Please let us of know about any grievances you have towards the institute and the hostel.</td>
                    </tr>
                    <tr>
                        <td colspan="2"  style="font-size: 22px;"><textarea name="suggestion3" id="suggestion3" cols="10" rows="5" class="form-control"  maxlength = "500" required></textarea></td>
                    </tr>
                    <!-- Suggestion 4 -->
                    <tr>
                        <th scope="row"  style="font-size: 22px;">4. </th>
                        <td style="font-size: 22px;">Any other suggestions/comments:</td>
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
                <i>Dear Parents, first of all we are really thankful to you for your continous support to the Institute and your ward.<br>
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
        <script src="scriptParents.js"></script>
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
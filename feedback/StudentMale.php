<?php
    session_start();
    include('../credential.php');  
    $user = $_SESSION['username'];
    $connection = mysqli_connect($servername, $username, $password, $dbname);
    $name = $_GET['name'];
    $year = $_GET['year'];
    $email = $_GET['email'];
    $contact = $_GET['contact'];
    $gender = $_GET['gender'];
    $program = $_GET['program'];
    $branch = $_GET['branch'];
    $address = $_GET['address'];
    $semester = $_GET['semester'];
    $dayHostel = $_GET['hostelorday'];
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
        // $q17 and $q18 are skipped
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

        $query = "INSERT INTO feedback_student_male_2021(username, Name, Gender, Programme, Branch, Year, Semester, Hosteller_or_Day_Scholar, Address, Email, Contact, Q1, Q2, Q3, Q4, Q5, Q6, Q7, Q8, Q9, Q10, Q11, Q12, Q13, Q14, Q15, Q16, Q17, Q18, Q19, Q20, Q21, Q22, Q23, Q24, Q25, Q26, Q27, Q28, Q29, Q30, Q31, Q32, Suggestion_1, Suggestion_2, Suggestion_3) VALUES('$user', '$name', '$gender', '$program', '$branch', '$year', '$semester', '$dayHostel', '$address', '$email', '$contact', '$q1', '$q2', '$q3', '$q4', '$q5', '$q6', '$q7', '$q8', '$q9', '$q10',  '$q11', '$q12', '$q13',' $q14', '$q15', '$q16', '$q19', '$q20','$q21', '$q22', '$q23', '$q24', '$q25', '$q26', '$q27', '$q28', '$q29', '$q30', '$q31', '$q32', '$q33', '$q34', '$suggestion1', '$suggestion2', '$suggestion3')";
        $insert = mysqli_query($connection, $query);
        if($insert){
            header("Location: Filled.php?name=$name&gender=$gender");
        }else{
            echo mysqli_error($insert);
            var_dump($insert);
        }
    }
?>
        <!-- 
            -
            -
            -        "Hey Whatsup! Bro" 👋🏻👋🏻 LOOKING FOR SOME CODE OR EDITIONS!
            -             Well I Welcome You to have a Go-Through! :)
            -       
            -        And Yes, You can copy anything! 😜 ;)"
            -        
            -        Jokes Apart!, found a bug or typo?, then mail me at 19btc037@ietdavv.edu.in 
            -        Developed By Kashif Raza, ETC-A 2nd       
            -        Regards,
        -->

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
<title>Feedback Student | Male</title>
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
    // To go back where user came from
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
        var confirmLogOut = confirm("Your prgress will be lost, Are you sure to log-out?");
        if(confirmLogOut){
          window.location.href="../selection-page.php";
        }
      }
    </script>
      <table class="table table-bordered" id="topNameHeader">
        <thead>
          <tr>
             <th style="font-size: 14px;">NAME: </th>
             <th><?php echo $name;?></th>
             <th style="font-size: 14px;">PROGRAMME</th>
             <th><?php echo $program;?></th>
             <th style="font-size: 14px;">BRANCH</th>
             <th><?php echo $branch;?></th>
             <th style="font-size: 14px;">GENDER: </th>
             <th><?php echo "Female";?></th>
             <th style="font-size: 14px;">YEAR OF STUDY: </th>
             <th><?php echo $year;?></th>
             <th style="font-size: 14px;">Day Scholar/ Hosteller: </th>
             <th><?php echo $dayHostel;?></th>
          </tr>
          <tr>
            <td colspan="12"><div class="progress" data-toggle="tooltip" data-placement="bottom" title="Survey Progress"><div class="progressFill"></div></div></td>
          </tr>
        </thead>
        </table>
        <!-- Form  -->
        <form method="POST">
        <h2 class="feedBackTitle">Feedback Form</h2>
        <h3 class="formSubTitle">From Male Students on infrastructure and facilities</h3>
        <div class="note">
            <p>All students are requested to provide overall feedback on the following points. Your feedback will help us to find the satisfaction level of our students, their feelings, and happiness. We have designed this feedback form in two parts. First part has “<b>Yes</b>” or “<b>No</b>” type questions. 
            Second part is designed on a scale from "<b>E-Excellent</b>", “<b>VG-Very Good</b>”, “<b>G-Good</b>”, “<b>S-Satisfactory</b>” and "<b>P-Poor</b>".<span style="color: green; font-weight: bold;">We welcome your thoughts and feedback as part of our efforts to continually improve our services to our students.</span></p>
        </div>
        <p class="partTitle"><u>PART 1</u><br>Infrastructure</p>
        <div class="tableContainer">
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th colspan="3">[Tick (&check;)in the relevant box]</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <th scope="row">1. Are class rooms and labs are in adequate numbers?</th>
                    <td style="font-weight: bold; font-size: 20px;">Y <input type="radio" name="q1" class="q1" value="Y"></td>
                    <td style="font-weight: bold; font-size: 20px;">N <input type="radio" name="q1" class="q1" value="N"></td>
                </tr>
                <tr>
                    <th scope="row">2. Availability of medicines and First Aid Box</th>
                    <td style="font-weight: bold; font-size: 20px;">Y <input type="radio" name="q2" class="q2" value="Y"></td>
                    <td style="font-weight: bold; font-size: 20px;">N <input type="radio" name="q2" class="q2" value="N"></td>
                </tr>
                <tr>
                    <th scope="row">3. Drinking water availability in premises</th>
                    <td style="font-weight: bold; font-size: 20px;">Y <input type="radio" name="q3" class="q3" value="Y"></td>
                    <td style="font-weight: bold; font-size: 20px;">N <input type="radio" name="q3" class="q3" value="N"></td>
                </tr>
                <tr>
                    <th scope="row">4. Sports (Indoor/Outdoor) Facilities.</th>
                    <td style="font-weight: bold; font-size: 20px;">Y <input type="radio" name="q4" class="q4" value="Y"></td>
                    <td style="font-weight: bold; font-size: 20px;">N <input type="radio" name="q4" class="q4" value="N"></td>
                </tr>
                <tr>
                    <th scope="row">5. CCTV Surveillance in campus</th>
                    <td style="font-weight: bold; font-size: 20px;">Y <input type="radio" name="q5" class="q5"  value="Y"></td>
                    <td style="font-weight: bold; font-size: 20px;">N <input type="radio" name="q5" class="q5"  value="N"></td>
                </tr>
                <tr>
                    <th scope="row">6. Boys and girls hostel in campus</th>
                    <td style="font-weight: bold; font-size: 20px;">Y <input type="radio" name="q6" class="q6" value="Y"></td>
                    <td style="font-weight: bold; font-size: 20px;">N <input type="radio" name="q6" class="q6" value="N"></td>
                </tr>
                <tr>
                    <th scope="row">7. Canteen Availability in campus</th>
                    <td style="font-weight: bold; font-size: 20px;">Y <input type="radio" name="q7" class="q7" value="Y"></td>
                    <td style="font-weight: bold; font-size: 20px;">N <input type="radio" name="q7" class="q7" value="N"></td>
                </tr>
                <tr>
                    <th scope="row">8. In-house cooperative store available</th>
                    <td style="font-weight: bold; font-size: 20px;">Y <input type="radio" name="q8" class="q8" value="Y"></td>
                    <td style="font-weight: bold; font-size: 20px;">N <input type="radio" name="q8" class="q8" value="N"></td>
                </tr>
                <tr>
                    <th scope="row">9. Parking facility available in campus</th>
                    <td style="font-weight: bold; font-size: 20px;">Y <input type="radio" name="q9" class="q9" value="Y"></td>
                    <td style="font-weight: bold; font-size: 20px;">N <input type="radio" name="q9" class="q9" value="N"></td>
                </tr>
                <tr>
                    <th scope="row">10. Is sick room facility available?</th>
                    <td style="font-weight: bold; font-size: 20px;">Y <input type="radio" name="q10" class="q10" value="Y"></td>
                    <td style="font-weight: bold; font-size: 20px;">N <input type="radio" name="q10" class="q10" value="N"></td>
                </tr>
                <tr>
                    <th scope="row">11. Is separate study arena available?</th>
                    <td style="font-weight: bold; font-size: 20px;">Y <input type="radio" name="q11" class="q11" value="Y"></td>
                    <td style="font-weight: bold; font-size: 20px;">N <input type="radio" name="q11" class="q11" value="N"></td>
                </tr>
                <tr>
                    <th scope="row">12. Support infrastructure for physical disabled person</th>
                    <td style="font-weight: bold; font-size: 20px;">Y <input type="radio" name="q12" class="q12" value="Y"></td>
                    <td style="font-weight: bold; font-size: 20px;">N <input type="radio" name="q12" class="q12" value="N"></td>
                </tr>
                <tr>
                    <th scope="row">13. Fire and safety equipments are available</th>
                    <td style="font-weight: bold; font-size: 20px;">Y <input type="radio" name="q13" class="q13" value="Y"></td>
                    <td style="font-weight: bold; font-size: 20px;">N <input type="radio" name="q13" class="q13" value="N"></td>
                </tr>
                <tr>
                    <th scope="row">14. Regular cleaning of classroom and labs </th>
                    <td style="font-weight: bold; font-size: 20px;">Y <input type="radio" name="q14" class="q14" value="Y"></td>
                    <td style="font-weight: bold; font-size: 20px;">N <input type="radio" name="q14" class="q14" value="N"></td>
                </tr>
                <tr>
                    <th scope="row">15. Regular cleaning of washroom in campus</th>
                    <td style="font-weight: bold; font-size: 20px;">Y <input type="radio" name="q15" class="q15" value="Y"></td>
                    <td style="font-weight: bold; font-size: 20px;">N <input type="radio" name="q15" class="q15" value="N"></td>
                </tr>
                <tr>
                    <th scope="row">16. Does Anti-ragging committee exist</th>
                    <td style="font-weight: bold; font-size: 20px;">Y <input type="radio" name="q16" class="q16" value="Y"></td>
                    <td style="font-weight: bold; font-size: 20px;">N <input type="radio" name="q16" class="q16" value="N"></td>
                </tr>
            </tbody>
        </table>
        </div>
        <p class="partTitle"><u>PART 2</u></p>
        <div class="tableContainer">
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th colspan="7">[Tick (&check;)in the relevant box]</th>
                    </tr>
                    <tr>
                        <th>Sr.</th>
                        <th>Parameters relevant to the Institute</th>
                        <th>E</th>
                        <th>VG</th>
                        <th>G</th>
                        <th>S</th>
                        <th>P</th>
                    </tr>
                </thead>
                <tbody>
                    <!-- 
                        - value="Excellent"
                        - value="Very Good"
                        - value="Good"
                        - value="Satisfactory"
                        - value="Poor"
                     -->
                    <tr>
                        <td style="font-weight: bold; font-size: 20px;">1</td>
                        <td style="font-weight: bold; font-size: 20px;">Facility in class rooms with general resources like chair-table / AC / Fan /Tube light/other furniture)</td>
                        <td style="font-weight: bold; font-size: 20px;"><input type="radio" name="q19" class="q19" value="Excellent"></td>
                        <td style="font-weight: bold; font-size: 20px;"><input type="radio" name="q19" class="q19" value="Very Good"></td>
                        <td style="font-weight: bold; font-size: 20px;"><input type="radio" name="q19" class="q19" value="Good"></td>
                        <td style="font-weight: bold; font-size: 20px;"><input type="radio" name="q19" class="q19" value="Satisfactory"></td>
                        <td style="font-weight: bold; font-size: 20px;"><input type="radio" name="q19" class="q19" value="Poor"></td>
                    </tr>
                    <tr>
                        <td style="font-weight: bold; font-size: 20px;">2</td>
                        <td style="font-weight: bold; font-size: 20px;">Teaching facilities in class room (Podium / Black or white board/chalk and duster/ white board marker / LCD projector etc.)</td>
                        <td style="font-weight: bold; font-size: 20px;"><input type="radio" name="q20" class="q20" value="Excellent"></td>
                        <td style="font-weight: bold; font-size: 20px;"><input type="radio" name="q20" class="q20" value="Very Good"></td>
                        <td style="font-weight: bold; font-size: 20px;"><input type="radio" name="q20" class="q20" value="Good"></td>
                        <td style="font-weight: bold; font-size: 20px;"><input type="radio" name="q20" class="q20" value="Satisfactory"></td>
                        <td style="font-weight: bold; font-size: 20px;"><input type="radio" name="q20" class="q20" value="Poor"></td>
                    </tr>
                    <tr>
                        <td style="font-weight: bold; font-size: 20px;">3</td>
                        <td style="font-weight: bold; font-size: 20px;">Labs equipped with required hardware and software along with lab assistance</td>
                        <td style="font-weight: bold; font-size: 20px;"><input type="radio" name="q21" class="q21" value="Excellent"></td>
                        <td style="font-weight: bold; font-size: 20px;"><input type="radio" name="q21" class="q21" value="Very Good"></td>
                        <td style="font-weight: bold; font-size: 20px;"><input type="radio" name="q21" class="q21" value="Good"></td>
                        <td style="font-weight: bold; font-size: 20px;"><input type="radio" name="q21" class="q21" value="Satisfactory"></td>
                        <td style="font-weight: bold; font-size: 20px;"><input type="radio" name="q21" class="q21" value="Poor"></td>
                    </tr>
                    <tr>
                        <td style="font-weight: bold; font-size: 20px;">4</td>
                        <td style="font-weight: bold; font-size: 20px;">Quality of food in the canteen</td>
                        <td style="font-weight: bold; font-size: 20px;"><input type="radio" name="q22" class="q22" value="Excellent"></td>
                        <td style="font-weight: bold; font-size: 20px;"><input type="radio" name="q22" class="q22" value="Very Good"></td>
                        <td style="font-weight: bold; font-size: 20px;"><input type="radio" name="q22" class="q22" value="Good"></td>
                        <td style="font-weight: bold; font-size: 20px;"><input type="radio" name="q22" class="q22" value="Satisfactory"></td>
                        <td style="font-weight: bold; font-size: 20px;"><input type="radio" name="q22" class="q22" value="Poor"></td>
                    </tr>
                    <tr>
                        <td style="font-weight: bold; font-size: 20px;">5</td>
                        <td style="font-weight: bold; font-size: 20px;">Quality of classroom maintenance</td>
                        <td style="font-weight: bold; font-size: 20px;"><input type="radio" name="q23" class="q23" value="Excellent"></td>
                        <td style="font-weight: bold; font-size: 20px;"><input type="radio" name="q23" class="q23" value="Very Good"></td>
                        <td style="font-weight: bold; font-size: 20px;"><input type="radio" name="q23" class="q23" value="Good"></td>
                        <td style="font-weight: bold; font-size: 20px;"><input type="radio" name="q23" class="q23" value="Satisfactory"></td>
                        <td style="font-weight: bold; font-size: 20px;"><input type="radio" name="q23" class="q23" value="Poor"></td>
                    </tr>
                    <tr>
                        <td style="font-weight: bold; font-size: 20px;">6</td>
                        <td style="font-weight: bold; font-size: 20px;">Quality of Library facility- Availability of books/journals/newspaper/cd/dvd</td>
                        <td style="font-weight: bold; font-size: 20px;"><input type="radio" name="q24" class="q24" value="Excellent"></td>
                        <td style="font-weight: bold; font-size: 20px;"><input type="radio" name="q24" class="q24" value="Very Good"></td>
                        <td style="font-weight: bold; font-size: 20px;"><input type="radio" name="q24" class="q24" value="Good"></td>
                        <td style="font-weight: bold; font-size: 20px;"><input type="radio" name="q24" class="q24" value="Satisfactory"></td>
                        <td style="font-weight: bold; font-size: 20px;"><input type="radio" name="q24" class="q24" value="Poor"></td>
                    </tr>
                    <tr>
                        <td style="font-weight: bold; font-size: 20px;">7</td>
                        <td style="font-weight: bold; font-size: 20px;">Greenery in the environment</td>
                        <td style="font-weight: bold; font-size: 20px;"><input type="radio" name="q25" class="q25" value="Excellent"></td>
                        <td style="font-weight: bold; font-size: 20px;"><input type="radio" name="q25" class="q25" value="Very Good"></td>
                        <td style="font-weight: bold; font-size: 20px;"><input type="radio" name="q25" class="q25" value="Good"></td>
                        <td style="font-weight: bold; font-size: 20px;"><input type="radio" name="q25" class="q25" value="Satisfactory"></td>
                        <td style="font-weight: bold; font-size: 20px;"><input type="radio" name="q25" class="q25" value="Poor"></td>
                    </tr>
                    <tr>
                        <td style="font-weight: bold; font-size: 20px;">8</td>
                        <td style="font-weight: bold; font-size: 20px;">Cleanliness in the washroom </td>
                        <td style="font-weight: bold; font-size: 20px;"><input type="radio" name="q26" class="q26" value="Excellent"></td>
                        <td style="font-weight: bold; font-size: 20px;"><input type="radio" name="q26" class="q26" value="Very Good"></td>
                        <td style="font-weight: bold; font-size: 20px;"><input type="radio" name="q26" class="q26" value="Good"></td>
                        <td style="font-weight: bold; font-size: 20px;"><input type="radio" name="q26" class="q26" value="Satisfactory"></td>
                        <td style="font-weight: bold; font-size: 20px;"><input type="radio" name="q26" class="q26" value="Poor"></td>
                    </tr>
                    <tr>
                        <td style="font-weight: bold; font-size: 20px;">9</td>
                        <td style="font-weight: bold; font-size: 20px;">Support of Anti-Ragging cell</td>
                        <td style="font-weight: bold; font-size: 20px;"><input type="radio" name="q27" class="q27" value="Excellent"></td>
                        <td style="font-weight: bold; font-size: 20px;"><input type="radio" name="q27" class="q27" value="Very Good"></td>
                        <td style="font-weight: bold; font-size: 20px;"><input type="radio" name="q27" class="q27" value="Good"></td>
                        <td style="font-weight: bold; font-size: 20px;"><input type="radio" name="q27" class="q27" value="Satisfactory"></td>
                        <td style="font-weight: bold; font-size: 20px;"><input type="radio" name="q27" class="q27" value="Poor"></td>
                    </tr>
                    <tr>
                        <td style="font-weight: bold; font-size: 20px;">10</td>
                        <td style="font-weight: bold; font-size: 20px;">Support of Grievance Redressal cell</td>
                        <td style="font-weight: bold; font-size: 20px;"><input type="radio" name="q28" class="q28" value="Excellent"></td>
                        <td style="font-weight: bold; font-size: 20px;"><input type="radio" name="q28" class="q28" value="Very Good"></td>
                        <td style="font-weight: bold; font-size: 20px;"><input type="radio" name="q28" class="q28" value="Good"></td>
                        <td style="font-weight: bold; font-size: 20px;"><input type="radio" name="q28" class="q28" value="Satisfactory"></td>
                        <td style="font-weight: bold; font-size: 20px;"><input type="radio" name="q28" class="q28" value="Poor"></td>
                    </tr>
                    <tr>
                        <td style="font-weight: bold; font-size: 20px;">11</td>
                        <td style="font-weight: bold; font-size: 20px;">Quality of Fees related grievance redressal</td>
                        <td style="font-weight: bold; font-size: 20px;"><input type="radio" name="q29" class="q29" value="Excellent"></td>
                        <td style="font-weight: bold; font-size: 20px;"><input type="radio" name="q29" class="q29" value="Very Good"></td>
                        <td style="font-weight: bold; font-size: 20px;"><input type="radio" name="q29" class="q29"value="Good"></td>
                        <td style="font-weight: bold; font-size: 20px;"><input type="radio" name="q29" class="q29" value="Satisfactory"></td>
                        <td style="font-weight: bold; font-size: 20px;"><input type="radio" name="q29" class="q29" value="Poor"></td>
                    </tr>
                    <tr>
                        <td style="font-weight: bold; font-size: 20px;">12</td>
                        <td style="font-weight: bold; font-size: 20px;">Quality of sports activities</td>
                        <td style="font-weight: bold; font-size: 20px;"><input type="radio" name="q30" class="q30" value="Excellent"></td>
                        <td style="font-weight: bold; font-size: 20px;"><input type="radio" name="q30" class="q30" value="Very Good"></td>
                        <td style="font-weight: bold; font-size: 20px;"><input type="radio" name="q30" class="q30"value="Good"></td>
                        <td style="font-weight: bold; font-size: 20px;"><input type="radio" name="q30" class="q30" value="Satisfactory"></td>
                        <td style="font-weight: bold; font-size: 20px;"><input type="radio" name="q30" class="q30" value="Poor"></td>
                    </tr>
                    <tr>
                        <td style="font-weight: bold; font-size: 20px;">13</td>
                        <td style="font-weight: bold; font-size: 20px;">Quality of drinking water</td>
                        <td style="font-weight: bold; font-size: 20px;"><input type="radio" name="q31" class="q31" value="Excellent"></td>
                        <td style="font-weight: bold; font-size: 20px;"><input type="radio" name="q31" class="q31" value="Very Good"></td>
                        <td style="font-weight: bold; font-size: 20px;"><input type="radio" name="q31" class="q31"value="Good"></td>
                        <td style="font-weight: bold; font-size: 20px;"><input type="radio" name="q31" class="q31" value="Satisfactory"></td>
                        <td style="font-weight: bold; font-size: 20px;"><input type="radio" name="q31" class="q31" value="Poor"></td>
                    </tr>
                    <tr>
                        <td style="font-weight: bold; font-size: 20px;">14</td>
                        <td style="font-weight: bold; font-size: 20px;">Quality of Security and Surveillance</td>
                        <td style="font-weight: bold; font-size: 20px;"><input type="radio" name="q32" class="q32" value="Excellent"></td>
                        <td style="font-weight: bold; font-size: 20px;"><input type="radio" name="q32" class="q32" value="Very Good"></td>
                        <td style="font-weight: bold; font-size: 20px;"><input type="radio" name="q32" class="q32"value="Good"></td>
                        <td style="font-weight: bold; font-size: 20px;"><input type="radio" name="q32" class="q32" value="Satisfactory"></td>
                        <td style="font-weight: bold; font-size: 20px;"><input type="radio" name="q32" class="q32" value="Poor"></td>
                    </tr>
                    <tr>
                        <td style="font-weight: bold; font-size: 20px;">15</td>
                        <td style="font-weight: bold; font-size: 20px;">Quality of internet and Wi-Fi facility</td>
                        <td style="font-weight: bold; font-size: 20px;"><input type="radio" name="q33" class="q33" value="Excellent"></td>
                        <td style="font-weight: bold; font-size: 20px;"><input type="radio" name="q33" class="q33" value="Very Good"></td>
                        <td style="font-weight: bold; font-size: 20px;"><input type="radio" name="q33" class="q33"value="Good"></td>
                        <td style="font-weight: bold; font-size: 20px;"><input type="radio" name="q33" class="q33" value="Satisfactory"></td>
                        <td style="font-weight: bold; font-size: 20px;"><input type="radio" name="q33" class="q33" value="Poor"></td>
                    </tr>
                    <tr>
                        <td style="font-weight: bold; font-size: 20px;">16</td>
                        <td style="font-weight: bold; font-size: 20px;">Transportation facility</td>
                        <td style="font-weight: bold; font-size: 20px;"><input type="radio" name="q34" class="q34" value="Excellent"></td>
                        <td style="font-weight: bold; font-size: 20px;"><input type="radio" name="q34" class="q34" value="Very Good"></td>
                        <td style="font-weight: bold; font-size: 20px;"><input type="radio" name="q34" class="q34"value="Good"></td>
                        <td style="font-weight: bold; font-size: 20px;"><input type="radio" name="q34" class="q34" value="Satisfactory"></td>
                        <td style="font-weight: bold; font-size: 20px;"><input type="radio" name="q34" class="q34" value="Poor"></td>
                    </tr>
                </tbody>
            </table>
        </div>
        <p class="partTitle"><i>Suggestions</i></p>
        <div class="tableContainer">
            <table class="table table-borderless">
                <tbody>
                    <!-- Suggestion 1 -->
                    <tr>
                        <th scope="row"  style="font-size: 22px;">1. </th>
                        <td style="font-size: 22px;">Provide your suggestion for improvement of overall infrastructure of campus.</td>
                    </tr>
                    <tr>
                        <td colspan="2"  style="font-size: 22px;"><textarea name="suggestion1" id="suggestion1" cols="10" rows="5" class="form-control" maxlength = "500" required></textarea></td>
                    </tr>
                    <!-- Suggestion 2 -->
                    <tr>
                        <th scope="row"  style="font-size: 22px;">2. </th>
                        <td style="font-size: 22px;">What other improvements you want regarding Facilities:</td>
                    </tr>
                    <tr>
                        <td colspan="2"  style="font-size: 22px;"><textarea name="suggestion2" id="suggestion2" cols="10" rows="5" class="form-control"  maxlength = "500" required></textarea></td>
                    </tr>
                    <!-- Suggestion 3 -->
                    <tr>
                        <th scope="row"  style="font-size: 22px;">3. </th>
                        <td style="font-size: 22px;">Any other suggestion you would like to add.</td>
                    </tr>
                    <tr>
                        <td colspan="2"  style="font-size: 22px;"><textarea name="suggestion3" id="suggestion3" cols="10" rows="5" class="form-control"  maxlength = "500" required></textarea></td>
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
                <h5 class="modal-title" id="kyModalLongTitle" style="text-align: center; font-weight: bold;">Important Note</h5>
            </div>
            <div class="modal-body">
                <i>Please fill the feedback with atmost honesty.<br>
                As your feedback is most valuable for us and will decide future operations in the Institute.</i>
                <br>Regards,<br>
                <?php echo strtoupper($_SESSION['name']);?>
            </div>
            <div class="modal-footer" data-toggle="tooltip" data-placement="right" title="Truley :)">
                <button type="button" class="btn btn-success" data-dismiss="modal">Yes, I Understand</button>
            </div>
            </div>
        </div>
        </div>
        <script src="scriptF1B.js"></script>
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
		<p>&copy; <script>document.write(new Date().getFullYear())</script> - <script>document.write(new Date().getFullYear() + 1)</script> Devi Ahilya Vishwavidyalaya Indore</p>
	</footer><br>
    <?php $connection->close();?>
</body>
</html>
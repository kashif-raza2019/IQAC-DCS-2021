<?php
    session_start();
    include('../credential.php');  
    $user = $_SESSION['username'];
    $connection = mysqli_connect($servername, $username, $password, $dbname);
    if(isset($_POST['submit'])){
        $name = $_POST['name'];
        $degree = $_POST['degree'];
        $branch = strtoupper($_POST['branch']);
        $year = $_POST['year'];
        $companyName = $_POST['companyName'];
        $designation = $_POST['designation'];
        $yearJoin = $_POST['yearJoin'];
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
        $suggestion1 = $_POST['suggestion1'];
        $suggestion2 = $_POST['suggestion2'];
        $suggestion3 = $_POST['suggestion3'];
        $suggestion4 = $_POST['suggestion4'];
        $suggestion5 = $_POST['suggestion5'];

        $query = "INSERT INTO feedback_alumni(username, Name, degree, branch, year, organisation, designation, year_of_joining, Q1, Q2, Q3, Q4, Q5, Q6, Q7, Q8, Q9, Q10, Q11, Q12, Q13, Suggestion_1, Suggestion_2, Suggestion_3, Suggestion_4, Suggestion_5) VALUES('$user', '$name', '$degree',  '$branch' , '$year', '$companyName', '$designation', '$yearJoin' , '$q1', '$q2', '$q3', '$q4', '$q5', '$q6', '$q7', '$q8', '$q9', '$q10',  '$q11', '$q12', '$q13', '$suggestion1', '$suggestion2', '$suggestion3', '$suggestion4', '$suggestion5')";
        $insert = mysqli_query($connection, $query);
        if($insert){
            header("Location: Filled.php?name=$name&gender=''");
        }else{
            echo mysqli_error($insert);
            var_dump($insert);
        }
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
<title>Feedback Alumni</title>
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
            <td><div class="progress" data-toggle="tooltip" data-placement="bottom" title="Feedback Progress"><div class="progressFill"></div></div></td>
          </tr>
        </thead>
        </table>
        <!-- Form  -->
        <form method="POST">
        <h2 class="feedBackTitle">Alumni Feedback Form</h2>
        <h3 class="formSubTitle">Feedback on quality, suggestion and furthur improvements in Institute</h3>
        <div class="note">
            <p>We shall be thankful to and appreciate you, if you can spare some of your valuable time to fill up this feedback
                form and give us your valuable suggestions for further improvement of the Institute. Your valuable inputs will
                be of great use to improve the quality of our academic programs and enhance the credibility of the Institute.
                Hence your feedback on Institute will help us to improve our approach in Academics.
            </p>
        </div><br>
        <!-- <p class="partTitle"><u>PART 1</u><br>Infrastructure</p> -->
        <div class="tableContainer">
            <table class="table table-bordered">
                <tbody>
                    <tr>
                    <th scope="row">Name:</th>
                    <td><input type="text" class="form-control" name="name" required/></td>
                    <th scope="row">Degree:</th>
                    <td>
                        <select name="degree" class="form-control" required>
                            <option value="" disabled selected>Select Degree</option>
                            <?php
                                $getProgrammeQuery = mysqli_query($connection, "SELECT*FROM programme WHERE Username = '$user'");
                                while($getProgram = $getProgrammeQuery->fetch_assoc()){
                                    $getName = $getProgram['Prog_name'];
                                    echo "<option value='$getName'>$getName</option>";
                                }
                            ?>
                        </select>
                    </td>
                    <th scope="row">Branch:</th>
                    <td><input type="text" class="form-control" name="branch" required/></td>
                    <th scope="row">Passing Year:</th>
                    <td><select name="year" class="form-control" required>
                        <option value="" selected disabled>Select Year</option>
                        <?php
                                $getYearQuery = mysqli_query($connection, "SELECT*FROM year_list ORDER BY year DESC");
                                while($getYear = $getYearQuery->fetch_assoc()){
                                    $getVal = $getYear['year'];
                                    echo "<option value='$getVal'>$getVal</option>";
                                }
                        ?>
                    </select></td>
                    </tr>
                    <tr>
                        <th colspan="8" style="text-align: center;">Professional Details</th>
                    </tr>
                    <tr>
                    <th scope="row">Organisation Name:</th>
                    <td colspan="2"><input type="text" class="form-control" name="companyName" required/></td>
                    <th scope="row">Designation:</th>
                    <td colspan="2"><input type="text" class="form-control" name="designation" required/></td>
                    <th scope="row">Joining Year:</th>
                    <td><select name="yearJoin" class="form-control" required>
                        <option value="" selected disabled>Select Year of Joining</option>
                        <?php
                                $getYearQuery = mysqli_query($connection, "SELECT*FROM year_list ORDER BY year DESC");
                                while($getYear = $getYearQuery->fetch_assoc()){
                                    $getVal = $getYear['year'];
                                    echo "<option value='$getVal'>$getVal</option>";
                                }
                        ?>
                    </select></td>
                    </tr>
                </tbody>
            </table>
        </div><br>
        <div class="note">
            <p>Dear Alumni,<br>
            Please give your overall assessment of our Institute academics. Please rate us on following criterion : <br>
            <b>1-Unsatisfactory(UN)</b>, <b>2- Satisfactory(S)</b>, <b>3- Fair(F)</b>, <b>4- Good(G)</b>, <b>5- Very Good(VG)</b>
            </p>
        </div><br>

        <div class="tableContainer">
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th colspan="7">[Tick (&check;)in the relevant box]</th>
                    </tr>
                    <tr>
                        <th style="font-weight: bold; font-size: 20px;">Sr.</th>
                        <th style="font-weight: bold; font-size: 20px;">Parameters relevant to the Institute</th>
                        <th style="font-weight: bold; font-size: 20px;">VG</th>
                        <th style="font-weight: bold; font-size: 20px;">G</th>
                        <th style="font-weight: bold; font-size: 20px;">F</th>
                        <th style="font-weight: bold; font-size: 20px;">S</th>
                        <th style="font-weight: bold; font-size: 20px;">UN</th>
                    </tr>
                </thead>
                <tbody>
                    <!-- 
                        - value="Very Good"
                        - value="Good"
                        - value="Fair"
                        - value="Satisfactory"
                        - value="Unsatisfactory"
                     -->
                    <tr>
                        <td style=" font-size: 20px;">1</td>
                        <td style=" font-size: 20px;">Admission Procedure</td>
                        <td style=" font-size: 20px;"><input type="radio" name="q1" class="q1" value="Very Good"></td>
                        <td style=" font-size: 20px;"><input type="radio" name="q1" class="q1" value="Good"></td>
                        <td style=" font-size: 20px;"><input type="radio" name="q1" class="q1" value="Fair"></td>
                        <td style=" font-size: 20px;"><input type="radio" name="q1" class="q1" value="Satisfactory"></td>
                        <td style=" font-size: 20px;"><input type="radio" name="q1" class="q1" value="Unsatisfactory"></td>
                    </tr>
                    <tr>
                        <td style=" font-size: 20px;">2</td>
                        <td style=" font-size: 20px;">Fee structure</td>
                        <td style=" font-size: 20px;"><input type="radio" name="q2" class="q2" value="Very Good"></td>
                        <td style=" font-size: 20px;"><input type="radio" name="q2" class="q2" value="Good"></td>
                        <td style=" font-size: 20px;"><input type="radio" name="q2" class="q2" value="Fair"></td>
                        <td style=" font-size: 20px;"><input type="radio" name="q2" class="q2" value="Satisfactory"></td>
                        <td style=" font-size: 20px;"><input type="radio" name="q2" class="q2" value="Unsatisfactory"></td>
                    </tr>
                    <tr>
                        <td style=" font-size: 20px;">3</td>
                        <td style=" font-size: 20px;">Environment</td>
                        <td style=" font-size: 20px;"><input type="radio" name="q3" class="q3" value="Very Good"></td>
                        <td style=" font-size: 20px;"><input type="radio" name="q3" class="q3" value="Very Good"></td>
                        <td style=" font-size: 20px;"><input type="radio" name="q3" class="q3" value="Fair"></td>
                        <td style=" font-size: 20px;"><input type="radio" name="q3" class="q3" value="Satisfactory"></td>
                        <td style=" font-size: 20px;"><input type="radio" name="q3" class="q3" value="Unsatisfactory"></td>
                    </tr>
                    <tr>
                        <td style=" font-size: 20px;">4</td>
                        <td style=" font-size: 20px;">Infrastructure & Lab facilities</td>
                        <td style=" font-size: 20px;"><input type="radio" name="q4" class="q4" value="Very Good"></td>
                        <td style=" font-size: 20px;"><input type="radio" name="q4" class="q4" value="Good"></td>
                        <td style=" font-size: 20px;"><input type="radio" name="q4" class="q4" value="Fair"></td>
                        <td style=" font-size: 20px;"><input type="radio" name="q4" class="q4" value="Satisfactory"></td>
                        <td style=" font-size: 20px;"><input type="radio" name="q4" class="q4" value="Unsatisfactory"></td>
                    </tr>
                    <tr>
                        <td style=" font-size: 20px;">5</td>
                        <td style=" font-size: 20px;">Faculty</td>
                        <td style=" font-size: 20px;"><input type="radio" name="q5" class="q5" value="Very Good"></td>
                        <td style=" font-size: 20px;"><input type="radio" name="q5" class="q5" value="Good"></td>
                        <td style=" font-size: 20px;"><input type="radio" name="q5" class="q5" value="Fair"></td>
                        <td style=" font-size: 20px;"><input type="radio" name="q5" class="q5" value="Satisfactory"></td>
                        <td style=" font-size: 20px;"><input type="radio" name="q5" class="q5" value="Unsatisfactory"></td>
                    </tr>
                    <tr>
                        <td style=" font-size: 20px;">6</td>
                        <td style=" font-size: 20px;">Project Guidance</td>
                        <td style=" font-size: 20px;"><input type="radio" name="q6" class="q6" value="Very Good"></td>
                        <td style=" font-size: 20px;"><input type="radio" name="q6" class="q6" value="Good"></td>
                        <td style=" font-size: 20px;"><input type="radio" name="q6" class="q6" value="Fair"></td>
                        <td style=" font-size: 20px;"><input type="radio" name="q6" class="q6" value="Satisfactory"></td>
                        <td style=" font-size: 20px;"><input type="radio" name="q6" class="q6" value="Unsatisfactory"></td>
                    </tr>
                    <tr>
                        <td style=" font-size: 20px;">7</td>
                        <td style=" font-size: 20px;">Quality of support material</td>
                        <td style=" font-size: 20px;"><input type="radio" name="q7" class="q7" value="Very Good"></td>
                        <td style=" font-size: 20px;"><input type="radio" name="q7" class="q7" value="Good"></td>
                        <td style=" font-size: 20px;"><input type="radio" name="q7" class="q7" value="Fair"></td>
                        <td style=" font-size: 20px;"><input type="radio" name="q7" class="q7" value="Satisfactory"></td>
                        <td style=" font-size: 20px;"><input type="radio" name="q7" class="q7" value="Unsatisfactory"></td>
                    </tr>
                    <tr>
                        <td style=" font-size: 20px;">8</td>
                        <td style=" font-size: 20px;">Training & Placement</td>
                        <td style=" font-size: 20px;"><input type="radio" name="q8" class="q8" value="Very Good"></td>
                        <td style=" font-size: 20px;"><input type="radio" name="q8" class="q8" value="Good"></td>
                        <td style=" font-size: 20px;"><input type="radio" name="q8" class="q8" value="Fair"></td>
                        <td style=" font-size: 20px;"><input type="radio" name="q8" class="q8" value="Satisfactory"></td>
                        <td style=" font-size: 20px;"><input type="radio" name="q8" class="q8" value="Unsatisfactory"></td>
                    </tr>
                    <tr>
                        <td style=" font-size: 20px;">9</td>
                        <td style=" font-size: 20px;">Library</td>
                        <td style=" font-size: 20px;"><input type="radio" name="q9" class="q9" value="Very Good"></td>
                        <td style=" font-size: 20px;"><input type="radio" name="q9" class="q9" value="Good"></td>
                        <td style=" font-size: 20px;"><input type="radio" name="q9" class="q9" value="Fair"></td>
                        <td style=" font-size: 20px;"><input type="radio" name="q9" class="q9" value="Satisfactory"></td>
                        <td style=" font-size: 20px;"><input type="radio" name="q9" class="q9" value="Unsatisfactory"></td>
                    </tr>
                    <tr>
                        <td style=" font-size: 20px;">10</td>
                        <td style=" font-size: 20px;">Canteen Facilities</td>
                        <td style=" font-size: 20px;"><input type="radio" name="q10" class="q10" value="Very Good"></td>
                        <td style=" font-size: 20px;"><input type="radio" name="q10" class="q10" value="Good"></td>
                        <td style=" font-size: 20px;"><input type="radio" name="q10" class="q10" value="Fair"></td>
                        <td style=" font-size: 20px;"><input type="radio" name="q10" class="q10" value="Satisfactory"></td>
                        <td style=" font-size: 20px;"><input type="radio" name="q10" class="q10" value="Unsatisfactory"></td>
                    </tr>
                    <tr>
                        <td style=" font-size: 20px;">11</td>
                        <td style=" font-size: 20px;">Hostel Facilities</td>
                        <td style=" font-size: 20px;"><input type="radio" name="q11" class="q11" value="Very Good"></td>
                        <td style=" font-size: 20px;"><input type="radio" name="q11" class="q11" value="Good"></td>
                        <td style=" font-size: 20px;"><input type="radio" name="q11" class="q11"value="Fair"></td>
                        <td style=" font-size: 20px;"><input type="radio" name="q11" class="q11" value="Satisfactory"></td>
                        <td style=" font-size: 20px;"><input type="radio" name="q11" class="q11" value="Unsatisfactory"></td>
                    </tr>
                    <tr>
                        <td style=" font-size: 20px;">12</td>
                        <td style=" font-size: 20px;">Overall Rating of the University</td>
                        <td style=" font-size: 20px;"><input type="radio" name="q12" class="q12" value="Very Good"></td>
                        <td style=" font-size: 20px;"><input type="radio" name="q12" class="q12" value="Good"></td>
                        <td style=" font-size: 20px;"><input type="radio" name="q12" class="q12"value="Fair"></td>
                        <td style=" font-size: 20px;"><input type="radio" name="q12" class="q12" value="Satisfactory"></td>
                        <td style=" font-size: 20px;"><input type="radio" name="q12" class="q12" value="Unsatisfactory"></td>
                    </tr>
                    <tr>
                        <td style=" font-size: 20px;">13</td>
                        <td style=" font-size: 20px;">Alumni Association/ Network of Old Friends</td>
                        <td style=" font-size: 20px;"><input type="radio" name="q13" class="q13" value="Very Good"></td>
                        <td style=" font-size: 20px;"><input type="radio" name="q13" class="q13" value="Good"></td>
                        <td style=" font-size: 20px;"><input type="radio" name="q13" class="q13"value="Fair"></td>
                        <td style=" font-size: 20px;"><input type="radio" name="q13" class="q13" value="Satisfactory"></td>
                        <td style=" font-size: 20px;"><input type="radio" name="q13" class="q13" value="Unsatisfactory"></td>
                    </tr>
                </tbody>
            </table>
        </div>
        <div class="note">
            <p>Please suggest any skills you want our Institute should focus on for grooming of students. All of your suggestions are welcome.</p>
        </div><br>
        <p class="partTitle"><i>Suggestions</i></p>
        <div class="tableContainer">
            <table class="table table-borderless">
                <tbody>
                    <!-- Suggestion 1 -->
                    <tr>
                        <th scope="row"  style="font-size: 22px;">1. </th>
                        <td style="font-size: 22px;">Relevance of curriculum in your Job:</td>
                    </tr>
                    <tr>
                        <td colspan="2"  style="font-size: 22px;"><textarea name="suggestion1" id="suggestion1" cols="10" rows="5" class="form-control" maxlength = "500" required></textarea></td>
                    </tr>
                    <!-- Suggestion 2 -->
                    <tr>
                        <th scope="row"  style="font-size: 22px;">2. </th>
                        <td style="font-size: 22px;">Need any change in curriculum and syllabi:</td>
                    </tr>
                    <tr>
                        <td colspan="2"  style="font-size: 22px;"><textarea name="suggestion2" id="suggestion2" cols="10" rows="5" class="form-control"  maxlength = "500" required></textarea></td>
                    </tr>
                    <!-- Suggestion 3 -->
                    <tr>
                        <th scope="row"  style="font-size: 22px;">3. </th>
                        <td style="font-size: 22px;">Improvements in teaching and learning Process:</td>
                    </tr>
                    <tr>
                        <td colspan="2"  style="font-size: 22px;"><textarea name="suggestion3" id="suggestion3" cols="10" rows="5" class="form-control"  maxlength = "500" required></textarea></td>
                    </tr>
                    <!-- Suggestion 4 -->
                    <tr>
                        <th scope="row"  style="font-size: 22px;">4. </th>
                        <td style="font-size: 22px;">Have you learned the basic concept through your Project?</td>
                    </tr>
                    <tr>
                        <td colspan="2"  style="font-size: 22px;"><textarea name="suggestion4" id="suggestion4" cols="10" rows="5" class="form-control"  maxlength = "500" required></textarea></td>
                    </tr>
                    <!-- Suggestion 5 -->
                    <tr>
                        <th scope="row"  style="font-size: 22px;">5. </th>
                        <td style="font-size: 22px;">Any other suggestions/comments:</td>
                    </tr>
                    <tr>
                        <td colspan="2"  style="font-size: 22px;"><textarea name="suggestion5" id="suggestion5" cols="10" rows="5" class="form-control"  maxlength = "500" required></textarea></td>
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
                <i>Dear Alumni first we are thankful to you for making us what we are today and becoming an ideal for our current students.<br>
                Your feedback is most valuable for us and will decide future operations in the Institute.</i>
                <br>Regards,<br>
                <?php echo strtoupper($_SESSION['name']);?>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-success" data-dismiss="modal">Yes, I Understand</button>
            </div>
            </div>
        </div>
        </div>
        <script src="scriptAlumni.js"></script>
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
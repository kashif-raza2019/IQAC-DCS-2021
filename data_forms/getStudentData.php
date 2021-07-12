<?php
//  Include the Data base connection file here 
// Must change when deployed through other server/ site.
  session_start();
  include '../credential.php';


?>
<!Doctype>
<html lang='en'>
    <head>
        <meta charset="UTF-8">
        <meta name="description" content="Students Data Capturing">
        <meta name="keywords" content="Devi Ahilya Vishwavidyalaya, DAVV, INDORE, University">
        <meta name="author" content="Devi Ahilya Vishwa Vidyalaya">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <!-- Latest compiled and minified CSS -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
        <!-- jQuery library -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <!-- Latest compiled JavaScript -->
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
        <link rel="stylesheet" type="text/css" href="formdata.css">
        <link rel="shortcut icon" href="assets/davvlogo.png" type="image/x-icon">
        <title>Student Form</title>
    </head>
    <body>
        <header>
            <div class="header-content">
                <img src="assets/davvlogo.png" alt="Student Data Capturing Form- DAVV"><h2 style="font-weight: bold;">Student Data Capturing Form 2021-22</h2>
            </div> <br>
            <div>
             <p>Please fill the details correctly using your mail address as provided by Institute</p>
             <p class="required">*required</p>
            </div>
        </header><br>
        <form action="fill.php" method="POST">
           <div class="container" style="width: 95%!important;">
              <div class="row">
                  <h4>Select Institute<span class="required">*</span></h4>
                  <select name="institute" id="institute" class="form-control" required>
                      <option value="" selected disabled>-- Select Institute --</option>
                      <option value="1">Human Resource Development Center</option>
                      <option value="2">School of Biochemistry</option>
                      <option value="3">School of Chemical Science</option>
                      <option value="4">School of Commerce</option>
                      <option value="5">School of Computer Science and IT</option>
                      <option value="6">School of Data Science and Forecasting</option>
                      <option value="7">School of Economics</option>
                      <option value="8">School of Education</option>
                      <option value="9">School of Electronics</option>
                      <option value="10">School of Energy and Environmental Studies</option>
                      <option value="11">School of Instrumentation</option>
                      <option value="12">School of Journalism and Mass Communication</option>
                      <option value="13">School of Law</option>
                      <option value="14">School of Life Sciences</option>
                      <option value="15">School of Languages</option>
                      <option value="16">School of Mathematics</option>
                      <option value="17">School of Pharmacy</option>
                      <option value="18">School of Physical Education</option>
                      <option value="19">School of Physics</option>
                      <option value="20">School of Statistics</option>
                      <option value="21">School of Social Science</option>
                      <option value="22">Institute of Engineering and Technology, IET-DAVV</option>
                      <option value="23">Institute of Management Studies, IMS</option>
                      <option value="24">International Institute of Professional Studies, IIPS</option>
                      <option value="25">Information Technology Center</option>
                      <option value="26">School of Library and Information Science</option>
                      <option value="27">Directorate of Physical Education and Sports</option>
                      <option value="28">School of Library and Information Science</option>
                      <option value="29">Center for Science Communication</option>
                      <option value="30">Department of Life Long Learning</option>
                      <option value="31">Educational Multimedia Research Center</option>
                      <option value="32">University Minority Cell</option>
                      <option value="33">Directorate of Distance Education</option>
                      <option value="34">Deen Dayal Upadhyay , DDU-Kaushal Kendra</option>
                  </select>
              </div>
               <div class="row">
                   <h4>Email<span class="required">*</span></h4>
                   <input type="email" name="email" id="email" class="form-control" required />
               </div>
               <div class="row">
                 <h4>Name<span class="required">*</span></h4>
                 <input type="text" name="name" id="name" class="form-control" required/>
               </div>
               <div class="row">
                   <h4>Roll Number<span class="required">*</span></h4>
                   <input type="text" name="rollnumber" id="rno" class="form-control"  required/>
               </div>
               <div class="row">
                   <h4>Enrollment Number<span class="required">*</span></h4>
                   <input type="text" name="ennumber" id="enno" class="form-control"  required/>
               </div>
               <div class="row">
                   <h4>Gender<span class="required">*</span></h4>
                   <select name="gender" id="gender" class="form-control">
                    <option value="null" disabled selected>Select</option>
                     <option value="f">Female</option>
                     <option value="m">Male</option>
                     <option value="na">Not to Say</option>
                   </select>
               </div>
               <div class="row">
                   <h4>Are you a Hostler?<span class="required">*</span></h4>
                   <select name="hostle" id="hostle" class="form-control" required>
                       <option value="" disabled selected>Choose an option</option>
                       <option value="1">Yes</option>
                       <option value="0">No</option>
                   </select>
               </div>
               <div class="row">
               <input type="checkbox" name="check" id="check" style="float: left;" required/>
                   <p style="float: left;">&nbsp; Please mandatorily check if the above mentioned details are correct as per your record.</p>
               </div>
               <!-- <div class="row">
                <div class="elem-group">
                    <label for="captcha">Please Enter the Captcha Text</label>
                    <img src="captcha.php" alt="CAPTCHA" class="captcha-image"><i class="fa fa-refresh refresh-captcha"></i>
                    <br>
                    <input type="text" id="captcha" name="captcha_challenge" pattern="[A-Z]{6}">
                </div>
               </div> -->
               <div class="row">
                   <input type="submit" name="submit" value="Submit" class="btn btn-primary">
               </div>
           </div>
           <!-- <script>
                        var refreshButton = document.querySelector(".refresh-captcha");
                            refreshButton.onclick = function() {
                            document.querySelector(".captcha-image").src = 'captcha.php?' + Date.now();
                        }
            </script> -->
         
        </form>

        <footer>
           <br>
           <p style="text-align: center; color: #fff;opacity: 0.89;">&copy; Copyright  <script>document.write(new Date().getFullYear())</script>-<script>document.write(new Date().getFullYear() + 1)</script><br>All Rights Reserved by Devi Ahilya Vishwavidyalaya</p>
        </footer>
    </body>
</html>
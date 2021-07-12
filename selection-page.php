<?php
  session_start();
  include('./credential.php');

?>
<!Doctype>
<html>
    <head>
        <title>Forms</title>
        <link rel="stylesheet" type="text/css" href="assets/bootstrap/css/bootstrap.min.css">
       <script type="text/javascript" src="assets/bootstrap/js/bootstrap.min.js"></script>
       <link rel="shortcut icon" type="image/png" href="assets/images/davvlogo.png">
        <style type="text/css">
           header{
              background-color: #0E3778;
              /* height: 210px; */
              margin-bottom: 40px;
              width: 100% auto;
              align-items: center;
              text-align: center;
              font-family: 'Verdana', 'sans-serif', 'roboto';
              font-size: 30px;
              font-stretch: 20px;
              padding-bottom: 3px;
              color: white;
           }
           header a{
               text-decoration: none;
               font-size: 18px;
               color: #fff;
           }
           header a:hover{
               color: #fff;
               opacity: 0.8;
           }
           .middleCard{
               display: flex;
               margin-left: auto;
               margin-right: auto;
               align-items: center;
           }
           #center{
               width: 100%;
               padding: 10px;
               text-align: center;
               margin-top: 20px;
               margin-bottom: 10px;
           }
           .containerTable{
               margin-left: 10px;
               margin-right: 10px;
               margin-top :30px;
               margin-bottom: 30px;
           }
          
        </style>
    </head>
    <body>
    <header>
       <p style=" font-family: 'Times New Roman', 'sans-serif';"><a href="#"><img src="assets/images/davvlogo.png" height="120px" width="120px" style="margin: 20px; padding: 10px;"></a> DEVI AHILYA VISHVAVIDYALAYA </p>
       <h4 style="text-align: left;margin-left: 20px;"><a href="logout.php">LOGOUT</a></h4>
    </header><br>
    <div id="center">
       <h3><u><?php echo strtoupper($_SESSION['name']);?></u></h3>
    </div>
    <div class="containerTable">
       <table class="table table-borderless">
         <thead style="text-align: center;">
          <th style="font-size: 24px;">Student Satisfaction Survey</th>
         </thead>
         <tbody>
           <tr>
             <td>
              <div class="card text-center middleCard" style="width: 26rem;padding: 10px;">
                        <div class="card-body">
                            <h5 class="card-title">Students Satisfaction Survey Form</h5>
                            <p class="card-text">Students are required to fill this form with atmost honesty.</p>
                            <a href="sss/index.php"  class="btn btn-primary">Click Here</a>
                        </div>
              </div>
             </td>
           </tr>
         </tbody>
       </table>
    
    </div>
    <div class="containerTable">
      <table class="table table-borderless" >
        <thead style="text-align: center;">
         <th colspan="3" style="font-size: 24px;">Feedback</th>
        </thead>
        <tbody>
             <tr>
                <td>
                    <div class="card text-center" style="width: 26rem;padding: 10px;">
                        <div class="card-body">
                            <h5 class="card-title">Students Feedback Form</h5>
                            <p class="card-text">Feedback for <b>Female</b> or <b>Male</b> Students on Infrastructure and Facilities.</p>
                            <a href="feedback/student-form.php"  class="btn btn-primary">Click Here</a>
                        </div>
                    </div>
                </td>
                <td>
                    <div class="card text-center" style="width: 26rem;padding: 10px;">
                        <div class="card-body">
                            <h5 class="card-title">Teacher's Feedback Form</h5>
                            <p class="card-text">Feedback on administration, career growth, infrastructure and facilities</p>
                            <a href="feedback/Teachers.php"  target="_blank" class="btn btn-primary">Click Here</a>
                        </div>
                    </div>
                </td>
                <td>
                    <div class="card text-center" style="width: 26rem;padding: 10px;">
                        <div class="card-body">
                            <h5 class="card-title">Hosteller Feedback Form</h5>
                            <p class="card-text">Feedback on Hostel Warden, Infrastructure and Facilities.</p>
                            <a href="feedback/Hostel/index.php" target="_blank"  class="btn btn-primary">Click Here</a>
                        </div>
                    </div>
                </td>
            </tr>
            <tr>
                <td>
                    <div class="card text-center" style="width: 26rem;padding: 10px;">
                        <div class="card-body">
                            <h5 class="card-title">Alumni Feedback Form</h5>
                            <p class="card-text">Feedback on quality, suggestion and furthur improvements in Institute</p>
                            <a href="feedback/Alumni.php"  class="btn btn-primary">Click Here</a>
                        </div>
                    </div>
                </td>
                <td>
                    <div class="card text-center" style="width: 26rem;padding: 10px;">
                        <div class="card-body">
                            <h5 class="card-title">Employer Feedback Form</h5>
                            <p class="card-text">Feedback on Student Performance and Curriculum</p>
                            <a href="feedback/Employer.php" class="btn btn-primary">Click Here</a>
                        </div>
                    </div>
                </td>
                <td>
                    <div class="card text-center" style="width: 26rem;padding: 10px;">
                        <div class="card-body">
                            <h5 class="card-title">Parent's Feedback Form</h5>
                            <p class="card-text">Valuable Suggestion on for furthur inprovements in providing support & facilities to your Ward</p>
                            <a href="feedback/Parents.php" class="btn btn-primary">Click Here</a>
                        </div>
                    </div>
                </td>
            </tr>        
        </tbody>
    </table>
    </div>
        <br><br>
        <p style="color: grey; font-family: 'sans-serif'; font-size: 17px; text-align: center;">&copy; <script>document.write(new Date().getFullYear())</script> - <script>document.write(new Date().getFullYear()+1)</script> Devi Ahilya Vishwavidyalaya, Indore (M.P.) <br>Ver. 2021.1 w.e.f. 01-07-2021</p>
    </body>
</html>
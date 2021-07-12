<?php
  session_start();
?>
<!Doctype>
<html>
    <head>
        <title>UNIVERSITY APPLICATION</title>
        <link rel="stylesheet" type="text/css" href="assets/bootstrap/css/bootstrap.min.css">
       <script type="text/javascript" src="assets/bootstrap/js/bootstrap.min.js"></script>
       <link rel="shortcut icon" type="image/png" href="assets/images/davvlogo.png">
        <style type="text/css">
           header{
              background-color: #0E3778;
              height: 140px;
              margin-bottom: 40px;
              width: 100% auto;
              align-items: center;
              text-align: center;
              font-family: 'Bahnschriff', 'sans-serif', 'roboto';
              font-size: 30px;
              font-stretch: 20px;
              font-weight: bold;
              color: white;
           }
           .centerContainer{
               margin-left: 30px auto;
               margin-right: 30px auto;
               margin-bottom: 20px
               width: 350px;
               float: left;
               
           }
        </style>
    </head>
    <body>
    <header>
       <p><a href="https://www.dauniv.ac.in/"><img src="assets/images/davvlogo.png" height="120px" width="120px" style="margin: 20px; padding: 10px;"></a> DEVI AHILYA VISHVAVIDYALAYA </p>
    </header>
    <div class="centerContainer" style="margin-left: 21%;">
        <div class="card text-center" style="width: 26rem;padding: 10px;">
            <div class="card-body">
                <h5 class="card-title">Data Capturing System</h5>
                <p class="card-text">Data Gathering and Reporting System </p>
                <a href="loginUser.php" class="btn btn-primary">Go to Login</a>
            </div>
        </div>
        <div class="card text-center" style="width: 26rem;padding: 10px;">
            <div class="card-body">
                <h5 class="card-title">Academic Audit</h5>
                <p class="card-text">Academic auditing system</p>
                <a href="#" class="btn btn-primary">Go to Login</a>
            </div>
        </div>
    </div>
    <div class="centerContainer">
        <div class="card text-center" style="width: 26rem;padding: 10px;">
            <div class="card-body">
                <h5 class="card-title">Monthly Report</h5>
                <p class="card-text">!!---content here----!!</p>
                <a href="#" class="btn btn-primary">Go to Login</a>
            </div>
        </div>
        <div class="card text-center" style="width: 26rem;padding: 10px;">
            <div class="card-body">
                <h5 class="card-title">Student Satisfaction Survey</h5>
                <p class="card-text">Survey on Online Teaching and Learning</p>
                <a href="#" class="btn btn-primary">Go to Survey</a>
            </div>
        </div>
    </div>
    
    

    </body>

</html>
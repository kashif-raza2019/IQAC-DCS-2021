<?php
    session_start();
    include('credential.php');  
    $dept = $_SESSION['name'];
    $roll = $_GET['roll'];
    $fullName = strtoupper($_GET['fullName']);

    
?>
<!Doctype>
<html>
    <head>
        <title><?php
           echo $dept;
        ?></title>
        <meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
        <meta name="description" content="Student Satisfaction Survey, SSS By Devi Ahilya Vishwavidyalaya">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <!-- Bootstarp 4 Integration -->
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
        <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns" crossorigin="anonymous"></script>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <link rel="icon" href="assets/images/davvlogo.png">
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

           .msgContainer{
               width: 50%;
               display: flex;
               margin-right: 25%;
               margin-left: 25%;
               padding: 15px;
               font-size: 18px;
           }
           h2{
               text-align: center;
               font-weight: bold;
               color: red;
           }
           .msgContainer a{
               text-decoration: none;
               font-weight: bold;
               color: slategray;
           }
           a:hover{
               opacity: 0.8;
           }
          
        </style>
    </head>
    <body>
        <!-- Header -->
        <header>
            <p><a href=""><img src="assets/images/davvlogo.png" height="120px" width="120px" style="margin: 20px; padding: 10px;"></a> DEVI AHILYA VISHVAVIDYALAYA </p>
        </header>
        <!-- Main Content -->
        <h2>NOT ALLOWED TO FILL THE FORM</h2>
        <div class="msgContainer">
            <p>Department: <b><?php echo $dept;?></b><br>Roll Number: <b><?php echo $roll;?></b> And Name: <b><?php echo $fullName;?></b> is Not Allowed to Fill The Particular Form Please Contact The Class Teacher or Department Head/ Administrator for resolving the issue, <br>Devi Ahilya Vishwavidyalaya</p>
        </div>
        
        <!-- Footer -->
        <footer>
            <p style="color: grey; font-family: 'Verdana'; font-size: 17px; text-align: center;">&copy; <script>document.write(new Date().getFullYear())</script> - <script>document.write(new Date().getFullYear()+1)</script> Devi Ahilya Vishwavidyalaya</p>
        </footer>
    
    </body>

</html>
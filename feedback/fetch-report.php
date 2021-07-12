<?php
            session_start();
            include("../credential.php");
            $user = $_SESSION['username'];
            $date = date_create();
            save_log($_SESSION['username'],getUserIP(),$_SERVER['REQUEST_URI'],urlencode(http_build_query($_POST, '', '&amp;')),date_format($date, 'Y-m-d H:i:s'));


            if(!isset($_SESSION['username'])){
                header("Location: ../login.php");
            }
?>
<!Doctype>
<html>
    <head>
        <title><?php
           echo "FEEDBACK REPORT";
        ?></title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
        <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns" crossorigin="anonymous"></script>
        <link rel="shortcut icon" type="image/png" href="../assets/images/davvlogo.png">
        <style type="text/css">
           header{
              background-color: #0E3778;
              height: 140px;
              width: 100% auto;
              align-items: center;
              text-align: center;
              font-family: 'Bahnschriff', 'sans-serif', 'roboto';
              font-size: 30px;
              font-stretch: 20px;
              font-weight: bold;
              color: white;
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

           h2{
               text-align: center;
               margin: 10px;
           }

           .tableContainer{
               padding-right: 20%;
               padding-left: 20%;
           }
          
        </style>
    </head>
    <body>
        <!-- Header -->
        <header>
            <p><a href="#"><img src="../assets/images/davvlogo.png" height="120px" width="120px" style="margin: 20px; padding: 10px;"></a> DEVI AHILYA VISHVAVIDYALAYA </p>
        </header>
        <script>
            // To go back where user came from
            function goBack() {
                window.history.back();
                }
            </script>
            <div id="topLink">
                <a onclick="goBack()"  data-toggle="tooltip" data-placement="bottom" title="Go Back">BACK</a>
            </div>

        <!-- Main Content -->
        <h2 style="font-family: 'Calibri', 'serif';"><?php echo $_SESSION['name'];?></h2>
        <h2>FEEDBACK | REPORT</h2><br>

        <div class="tableContainer">
            <table class="table table-bordered">
                
            </table>
        </div><br><br>
        <!-- Footer -->
        <footer>
            <p style="color: grey; font-family: 'Verdana'; font-size: 17px; text-align: center;">&copy; <script>document.write(new Date().getFullYear())</script> - <script>document.write(new Date().getFullYear()+1)</script> Devi Ahilya Vishwavidyalaya</p>
        </footer>
    <?php  $connection->close();?>
    </body>

</html>
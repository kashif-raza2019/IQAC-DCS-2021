<?php session_start();
    include('credential.php');


    $adminname = $_SESSION['username'];
    $name = $_SESSION['name'];
    $date = date_create();
    save_log($_SESSION['username'],getUserIP(),$_SERVER['REQUEST_URI'],urlencode(http_build_query($_POST, '', '&amp;')),date_format($date, 'Y-m-d H:i:s'));
    $connection = mysqli_connect($servername, $username, $password, $dbname);

    if(!isset($_SESSION['name'])){
        header("Location: index.php");  
        
    }
?>

<!DOCTYPE html>
<html>
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Bootstarp 4 Integration -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns" crossorigin="anonymous"></script>
    <style>
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

      .tableContainer{
          padding-right: 10%;
          padding-left: 10%;
      }
      footer{
            margin-top: 30px;
            text-align: center;
           }
       h2{
           text-align: center;
       }
    </style>
<link rel="icon" href="./logo.png">
<title><?php echo $_SESSION['name'];?></title>
</head>
<body>
        <script>
        // Enabling Tooltip Everywhere
            $(function () {
            $('[data-toggle="tooltip"]').tooltip()
            })
        </script>
    <div  id="header" style="margin-left: 0px; margin-right: 0px; width: 100%!important;">
          <img src="assets/images/davvlogo.png" alt="Devi Ahilya Vishwavidyalaya" height="120px" width="120px" style="float: left; margin-left: 30%;margin-top: 20px;" data-toggle="tooltip" data-placement="right" title="Devi Ahilya University" >
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
        <a onclick="window.history.back();" style="cursor: pointer;"  data-toggle="tooltip" data-placement="bottom" title="Go Back">BACK</a>
        <a onclick="goForward()" style="cursor: pointer; float: right; margin-right: 35px;" data-toggle="tooltip" data-placement="bottom" title="Forward Page">NEXT</a>
    </div>
    <h2>NOTICE HISTORY</h2>
    <br>
    <button type="submit" style="margin-left: 10%; margin-top: 20px; margin-bottom: 10px;" class="btn btn-secondary" onclick="location.href='accept_notice.php';" data-toggle="tooltip" data-placement="top" title="Current Notice Pop-up, (You will leave this page!)">Current Notice</button>
    <br>
    <div class="tableContainer">
      <h3 style="text-align: center; font-weight: bold; color:#FF6633 ;">NOTICES ONLY FOR THIS DEPARTMENT</h3>
      <table class="table table-bordered">
        <thead>
            <tr>
             <th>From</th>
             <th>Message</th>
             <th>Date</th>
            </tr>
        </thead>
        <tbody>
          <?php
            $getNoticeSpecial = mysqli_query($connection, "SELECT*FROM prev_notice WHERE username = '$adminname'");
            while($getNoticeData = $getNoticeSpecial->fetch_assoc()){
                $notice = $getNoticeData['notice'];
                $date = $getNoticeData['start_date'];
                echo "<tr><td>IQAC</td><td>$notice</td><td>$date</td></tr>";
            }
          
          ?>
        </tbody>
      </table><br>
      <h3 style="text-align: center; font-weight: bold; color: #33CC33;">GENERAL NOTICES</h3>
      <br>
      <table class="table table-bordered">
        <thead>
            <tr>
             <th>From</th>
             <th>Message</th>
             <th>Date</th>
            </tr>
        </thead>
        <tbody>
          <?php
            $getNoticeSpecial = mysqli_query($connection, "SELECT*FROM prev_noticeall");
            while($getNoticeData = $getNoticeSpecial->fetch_assoc()){
                $notice = $getNoticeData['notice'];
                $date = $getNoticeData['start_date'];
                echo "<tr><td>IQAC</td><td>$notice</td><td>$date</td></tr>";
            }
          
          ?>
        </tbody>
      </table><br>

     <?php
        $connection->close();
     ?>
    </div>
    <footer>
        <p style="color: grey; font-family: 'Verdana'; font-size: 17px;">&copy; <script>document.write(new Date().getFullYear())</script> - <script>document.write(new Date().getFullYear()+1)</script> Devi Ahilya Vishwavidyalaya</p>
    </footer>
</body>
</html>

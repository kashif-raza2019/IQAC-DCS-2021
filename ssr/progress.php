<?php
    
    session_start();
    include('../credential.php');
    // Log 
    $date = date_create();
    save_log($_SESSION['username'],getUserIP(),$_SERVER['REQUEST_URI'],urlencode(http_build_query($_POST, '', '&amp;')),date_format($date, 'Y-m-d H:i:s'));
    $dept = $_GET['department'];
    // echo "<script>alert($dept)</script>";
    $deptName= '';
    $connection = mysqli_connect($servername, $username, $password, $dbname);
    $queryName = "SELECT*FROM admins WHERE username ='$dept'";
    $name = mysqli_query($connection, $queryName);
    if($name){
        $resName = mysqli_fetch_assoc($name);
        $deptName = $resName['name'];
    }else{
        var_dump($name);
    }
    
?>
<!Doctype>
<html lang="en">
   <head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Bootstarp 4 Integration -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns" crossorigin="anonymous"></script>
    <link rel="icon" href="../assets/images/davvlogo.png">
    <title>SSR | Progress</title>
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
      .containerTable{
          margin-left: 3%;
          margin-right: 3%;
      }

      </style>
   </head>
   <body>
   <script>
        // Enabling Tooltip Everywhere
            $(function () {
            $('[data-toggle="tooltip"]').tooltip()
            })
    </script>
    <div  id="header" style="margin-left: 0px; margin-right: 0px; width: 100%!important;">
          <img src="../assets/images/davvlogo.png" alt="Devi Ahilya Vishwavidyalaya" height="120px" width="120px" style="float: left; margin-left: 30%;margin-top: 20px;" data-toggle="tooltip" data-placement="right" title="Devi Ahilya University" >
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
        <a onclick="goBack()" style="cursor: pointer;" data-toggle="tooltip" data-placement="bottom" title="Go to Previous Page">BACK</a>
        <a onclick="goForward()" style="cursor: pointer; float: right; margin-right: 35px;" data-toggle="tooltip" data-placement="bottom" title="Go to Next Page">NEXT</a>
    </div>
    <h2 style="font-weight: bold; text-align: center;">SSR PROGRESS</h2><br>
    <h3 style="font-weight: bold; text-align: center;"><?php echo strtoupper($deptName);?></h3><br>
    <div class="containerTable">
    <table class="table table-bordered">
        <thead>
            <tr>
                <th style="text-align: center; font-size: 20px;">Criteria 1</th>
                <th style="text-align: center; font-size: 20px;">Criteria 2</th>
                <th style="text-align: center; font-size: 20px;">Criteria 3</th>
                <th style="text-align: center; font-size: 20px;">Criteria 4</th>
                <th style="text-align: center; font-size: 20px;">Criteria 5</th>
                <th style="text-align: center; font-size: 20px;">Criteria 6</th>
                <th style="text-align: center; font-size: 20px;">Criteria 7</th>
                <th style="text-align: center; font-size: 20px;">Evaluative Report</th>
                <th style="text-align: center; font-size: 20px;">Extended Profile</th>
            </tr>
        </thead>
        </table>

    </div>

   </body>
</html>
<?php session_start();
    include('../credential.php');
    $user = $_SESSION['username'];
    $name = $_SESSION['name'];
    $date = date_create();
    save_log($_SESSION['username'],getUserIP(),$_SERVER['REQUEST_URI'],urlencode(http_build_query($_POST, '', '&amp;')),date_format($date, 'Y-m-d H:i:s'));
    $connection = mysqli_connect($servername, $username, $password, $dbname);

    $notice = "";
    $year = date("Y");
    if(isset($_POST['submit'])){
        $month = $_POST['month'];
        header("Location: index.php?year=$year&month=$month");
    }

    if(!isset($_SESSION['name'])){
        header("Location: ../homepage.php");  
        
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

      .tableContainer{
          padding-right: 38%;
          padding-left: 38%;
          text-align: center;
      }

      footer{
            margin-top: 30px;
            text-align: center;
           }
    </style>
<link rel="icon" href="../assets/images/davvlogo.png">
<title>Monthly Report 2021-2022</title>
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
          <p style="float: left; margin-left: 30px;margin-top: 40px">DEVI AHILYA VISHWAVIDYALAYA <br><span style="font-size: 22px;">DATA CAPTURING SYSTEM-2021</span></p>
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
        <a onclick="goBack()"  data-toggle="tooltip" data-placement="bottom" title="Go Back">BACK</a>
        <a onclick="goForward()" style="cursor: pointer; float: right; margin-right: 35px;" data-toggle="tooltip" data-placement="bottom" title="Forward Page">NEXT</a>
    </div>
    <br>
        <h2 style="text-align: center;">Hon'ble Vice Chancellor's Monthly Report 2021-2022</h2>
        <h3 style="text-align: center;"><u><?php echo $_SESSION['name'];?></u></h3>
        <form id="f1" method="post">
        <div class="tableContainer">
        <table class="table table-borderless">
            <thead>
                <tr>
                    <th style="text-align:center">SELECT MONTH OF REPORT</th>
                </tr> 
            </thead>
            <tbody>
                <tr>
                    <td>
                        <select name="month" class="form-control">
                            <option value="" selected disabled>-SELECT MONTH-</option>
                            <option value="JULY-2021">JULY-2021</option>
                            <option value="AUGUST-2021">AUGUST-2021</option>
                            <option value="SEPTEMBER-2021">SEPTEMBER-2021</option>
                            <option value="OCTOBER-2021">OCTOBER-2021</option>
                            <option value="NOVEMBER-2021">NOVEMBER-2021</option>
                            <option value="DECEMBER-2021">DECEMBER-2021</option>
			    <option value="JANUARY-2022">JANUARY-2022</option>
                            <option value="FEBRUARY-2022">FEBRUARY-2022</option>
                            <option value="MARCH-2022">MARCH-2022</option>
                            <option value="APRIL-2022">APRIL-2022</option>
                            <option value="MAY-2022">MAY-2022</option>
                            <option value="JUNE-2022">JUNE-2022</option>
                        </select>
                    </td>
                </tr>
                <tr>
                    <td style="text-align:center;"><button type="submit" class="btn btn-primary" name="submit">SUBMIT</button></td>
                </tr>
            </tbody>
            </table>
        </div>
        </form>
        <footer>
        <p style="color: grey; font-family: 'Verdana'; font-size: 17px;">&copy; <script>document.write(new Date().getFullYear())</script> - <script>document.write(new Date().getFullYear()+1)</script> Devi Ahilya Vishwavidyalaya, Indore (M.P.)</p>
       </footer>
    </body>
</html>

<?php session_start();
    $_SESSION['msg']='';
    if(!isset($_SESSION['names'])){
        header("Location: ../index.php");  
        
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
      footer{
            margin-top: 30px;
            text-align: center;
           }

    </style>
<link rel="icon" href="./logo.png">
<title>DATA CAPTURING SYSTEM</title>
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
        <a onclick="location.href='../logout.php'"  data-toggle="tooltip" data-placement="bottom" title="Log-Out">Log Out</a>
        <a onclick="goForward()" style="cursor: pointer; float: right; margin-right: 35px;" data-toggle="tooltip" data-placement="bottom" title="Forward Page">NEXT</a>
    </div>
    <br>
    <div class="container">
      <div class="row">
          <div class="col-md"  data-toggle="tooltip" data-placement="top" title="Important Parameters Setting">
            <table class="table table-borderless">
              <tbody>
                <tr>
                  <td style='text-align: center;'><button type="button" class="btn btn-info"  onclick="location.href='notice.php'">Update Notice</button></td>
                  <td style='text-align: center;'><button type="button" class="btn btn-info"  onclick="location.href='../helpdesk/chat-select.php'">Help Desk</button></td>
                  <td style='text-align: center;'><button class="btn btn-warning" type="button" style="color: #fff" onclick="location.href='implinks.php'" target="_blank" >Set Parameters</button></td>
                </tr>
              </tbody>
            </table>
          </div>
      </div>
       <div class="row">
          <div class="col-sm" style="text-align: center;">
            <p style="font-size: 20px;"   data-toggle="tooltip" data-placement="bottom" title="Annual Quality Assurance Report"><b>AQAR</b></p>
          </div>
          <div class="col-sm" style="text-align: center;">
            <p style="font-size: 20px;"><b>Academic Audit Report</b></p>
          </div>
          <div class="col-sm" style="text-align: center;">
            <p style="font-size: 20px;"><b>Hon'ble VC's <br>Monthly Report</b></p>
          </div>
          <div class="col-sm" style="text-align: center;">
            <p style="font-size: 20px;"><b>DQAC Composition</b></p>
          </div>
       </div>
       <div class="row">
          <div class="col-sm" style="text-align: center;">
            <button onclick="location.href=''" class="btn btn-primary" data-toggle="tooltip" data-placement="bottom" title="AQAR Coming Soon" style="width: 150px;">2021</button>
          </div>
          <div class="col-sm" style="text-align: center;">
            <button onclick="location.href=''" class="btn btn-primary" data-toggle="tooltip" data-placement="bottom" title="Second Half of 2021 Coming Soon" style="width: 150px;" >2021-B</button>
          </div>
          <div class="col-sm" style="text-align: center;">
            <button onclick="location.href='../monthly_report/select-month.php'" class="btn btn-primary" data-toggle="tooltip" data-placement="bottom" title="Monthly Report" style="width: 150px;">2021-2022</button>
          </div>
          <div class="col-sm" style="text-align: center;">
            <button onclick="location.href='../dqac/user-report.php'" class="btn btn-primary" data-toggle="tooltip" data-placement="bottom" title="DQAC" style="width: 150px;">2021</button>
          </div>
       </div><br>
       
       <div class="row Hidden">
          <div class="col-sm" style="text-align: center;">
            <button onclick="location.href=''" class="btn btn-primary" data-toggle="tooltip" data-placement="bottom" title="AQAR" style="width: 150px;" disabled>2022</button>
          </div>
          <div class="col-sm" style="text-align: center;">
            <button onclick="location.href=''" class="btn btn-primary" data-toggle="tooltip" data-placement="bottom" title="First Half of 2022" style="width: 150px;" disabled>2022-A</button><br><br>
            <button onclick="location.href=''" class="btn btn-primary" data-toggle="tooltip" data-placement="bottom" title="Second Half of 2022" style="width: 150px;" disabled>2022-B</button>
          </div>
          <div class="col-sm" style="text-align: center;">
            <button onclick="location.href=''" class="btn btn-primary" data-toggle="tooltip" data-placement="bottom" title="Monthly Report" style="width: 150px;" disabled>2022</button>
          </div>
          <div class="col-sm" style="text-align: center;">
            <button onclick="location.href=''" class="btn btn-primary" data-toggle="tooltip" data-placement="bottom" title="DQAC" style="width: 150px;" disabled>2022</button>
          </div>
       </div><br>
       <div class="row Hidden">
          <div class="col-sm" style="text-align: center;">
            <button onclick="location.href=''" class="btn btn-primary" data-toggle="tooltip" data-placement="bottom" title="AQAR" style="width: 150px;" disabled>2023</button>
          </div>
          <div class="col-sm" style="text-align: center;">
            <button onclick="location.href=''" class="btn btn-primary" data-toggle="tooltip" data-placement="bottom" title="First Half of 2023" style="width: 150px;" disabled>2023-A</button><br><br>
            <button onclick="location.href=''" class="btn btn-primary" data-toggle="tooltip" data-placement="bottom" title="Second Half of 2023" style="width: 150px;" disabled>2023-B</button>
          </div>
          <div class="col-sm" style="text-align: center;">
            <button onclick="location.href=''" class="btn btn-primary" data-toggle="tooltip" data-placement="bottom" title="Monthly Report" style="width: 150px;" disabled>2023</button>
          </div>
          <div class="col-sm" style="text-align: center;">
            <button onclick="location.href=''" class="btn btn-primary" data-toggle="tooltip" data-placement="bottom" title="DQAC" style="width: 150px;" disabled>2023</button>
          </div>
       </div><br>
    </div><br>
    <div class="container" style="font-size: 18px;">
       <div class="row">
          <div class="col-md" style="text-align: center;font-size: 20px; font-weight: bold;">Self-Study Report</div>
          <div class="col-md" style="text-align: center;font-size: 20px; font-weight: bold;">Student Satisfaction Survey</div>
          <div class="col-md" style="text-align: center;font-size: 20px; font-weight: bold;">Feedbacks</div>   
       </div><br>
       <div class="row">
          <div class="col-md" style="text-align: center;">
          <button onclick="location.href=''" class="btn btn-primary" data-toggle="tooltip" data-placement="bottom" title="S.S.R. Coming Soon" style="width: 150px;">SSR</button>
          </div>
          <div class="col-md" style="text-align: center;">
          <button onclick="location.href=''" class="btn btn-primary" data-toggle="tooltip" data-placement="bottom" title="Student Satisfaction Survey: Coming Soon" style="width: 150px;">2021-2022</button>
          </div>
          <div class="col-md" style="text-align: center;">
          <button onclick="location.href=''" class="btn btn-primary" data-toggle="tooltip" data-placement="bottom" title="Feedback Report 2021: Coming Soon" style="width: 150px;">2021</button>
          </div>
       </div>
    </div>
    <footer>
        <p style="color: grey; font-family: 'Verdana'; font-size: 17px;">&copy; <script>document.write(new Date().getFullYear())</script> - <script>document.write(new Date().getFullYear()+1)</script> Devi Ahilya Vishwavidyalaya</p>
    </footer>
 <!-- End of the INDEX Page for Super User: for any problem or queries contact: Prof. Pratosh Bansal @IET-DAVV or
  Developers: KASHIF RAZA E&TC-A II Yr(as of June 2021) and/ or SONAM KHURANA E&I II Yr(as of June 2021) at IET-DAVV Indore
  -->
</body>
</html>

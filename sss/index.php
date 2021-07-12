<?php 
    session_start();
    include('../credential.php');
    $user = $_SESSION['username'];
    $date = date_create();
    save_log($_SESSION['username'],getUserIP(),$_SERVER['REQUEST_URI'],urlencode(http_build_query($_POST, '', '&amp;')),date_format($date, 'Y-m-d H:i:s'));

    $_SESSION['msg']='';
    $connection = mysqli_connect($servername, $username, $password, $dbname);

    if(isset($_POST['submit'])){
        $gender = $_POST['gender'];
        $year = $_POST['year'];
        if($gender == "" || $year == ""){
            echo "<script>alert('Please Select Required Data')</script>";
        }else{
            header("Location: Survey.php?gender=$gender&year=$year");
        }

    }
?>

<!DOCTYPE html>
<html lang="en">
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
      .containerTable{
          margin-left: 10%;
          margin-right: 10%;
      }
      .formWrapper{
          padding-left: 10%;
          padding-right: 10%;
      }
    </style>
<link rel="icon" href="../assets/images/davvlogo.png">
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
          <img src="../assets/images/davvlogo.png" alt="Devi Ahilya Vishwavidyalaya" height="120px" width="120px" style="float: left; margin-left: 30%;margin-top: 20px;" data-toggle="tooltip" data-placement="right" title="Devi Ahilya University" >
          <p style="float: left; margin-left: 30px;margin-top: 40px">Devi Ahilya Vishwavidyalaya <br><span style="font-size: 22px;">Data Capturing System-2021</span></p>
    </div>
    <script>
    // To go back where user came from
      function goBack() {
          window.location.href="../selection-page.php";
        }
        function goForward() {
           window.history.forward();
        }
    </script>
    <div id="topLink">
        <a onclick="goBack()" style="cursor: pointer;" data-toggle="tooltip" data-placement="bottom" title="Go to Previous Page">BACK</a>
        <a onclick="goForward()" style="cursor: pointer; float: right; margin-right: 35px;" data-toggle="tooltip" data-placement="bottom" title="Go to Next Page">NEXT</a>
    </div>
    <br>
    <h2 style="font-weight: bold; text-align: center;">Student Satisfaction Survey</h2><br>
    
    <div class="formWrapper">
        <div class="card">
            <div class="card-header">
                PLEASE ENTER THE REQUIRED DETAILS CAREFULLY:
            </div>
            <div class="card-body">
                <h5 class="card-title"><?php echo $_SESSION['name'];?></h5>
                <table class="table table-borderless">
                 <form id="form1" method="POST">
                  <thead>
                      <tr>
                        <th>Gender</th>
                      </tr>
                  </thead>
                  <tbody>
                      <tr>
                        <td><select name="gender"  class="form-control" required>
                           <option value="">Select</option>
                           <option value="Female">Female</option>
                           <option value="Male">Male</option>
                           <option value="Undisclosed">Not To Disclose</option>
                        </select></td>
                      </tr>
                      <tr>
                        <th>Year</th>
                      </tr>
                      <tr>
                        <td><select name="year" class="form-control" required>
                           <option value="">Select</option>
                           <option value="1">1<sup>st</sup></option>
                           <option value="2">2<sup>nd</sup></option>
                           <option value="3">3<sup>rd</sup></option>
                           <option value="4">4<sup>th</sup></option>
                           <option value="5">5<sup>th</sup></option>
                           <option value="6">6<sup>th</sup></option>
                        </select></td>
                        <td><input type="button" class="btn btn-primary" value="SUBMIT" style="width: 150px;" data-toggle="modal" data-target=".bd-example-modal-lg"/></td>
                        <div class="modal fade bd-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel" aria-hidden="true">
                            <div class="modal-dialog modal-lg" style="margin-top: 18%;">
                                <div class="modal-content">
                                  <h3 style="margin-left: 14px; margin-right: 14px; margin-top: 20px; text-align: center;"><b>Confirm Submission</b></h3><br>
                                  <h6 style="margin-left: 10px; margin-right: 10px; margin-bottom: 8px; text-align: center;">Are you sure that the details filled are correct to the best of your knowledge?</h6><br>
                                  <div class="container">
                                    <div class="row">
                                      <div class="col-lg" style="margin: 10px;">
                                        <button class="btn btn-danger" data-dismiss="modal" style="margin-left: 10px; float: right;">No</button>
                                        <button class="btn btn-success" type="submit" name="submit" id="formSubmit" style="margin-left: 10px; margin-right: 40px; float; right;">Yes, I Understand</button>
                                      </div>
                                    </div>
                                  </div>
                                </div>
                            </div>
                            </div>
                      </tr>
                  </tbody>
                  </form>
                </table>
            </div>
        </div>
    </div>
</body>
</html>

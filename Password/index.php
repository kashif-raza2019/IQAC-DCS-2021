<?php session_start();
include('../credential.php');
    
    $_SESSION['msg']='';
    if(!isset($_SESSION['names'])){
        header("Location: ../superuser/index.php");  
        
    }
    $connection = mysqli_connect($servername, $username, $password, $dbname);
     $msg='';
     $saveFlag = false;
     $msgDept='';
     $saveFlagDept = false;
    if(isset($_POST['submit'])){
        $current = $_POST['currentPassword'];
        $new  = $_POST['newPassword'];
        $confirm = $_POST['confirmPassword'];
        if($new != $confirm){
            $msg = 'Please retype the exact new password';
        }else{
            $checkQuery = "SELECT*FROM superusers";
            $check = mysqli_query($connection, $checkQuery);
            $res = $check->fetch_assoc();
            // var_dump($currentPassword);
            if($current == $res['password']){
                $updateQuery = "UPDATE superusers SET password = '$new' WHERE name = 'SUPERUSER'";
                $update = mysqli_query($connection, $updateQuery);
                if($update){
                    $saveFlag = true;
                    $msg = 'Changes Saved Succesfully!';
                   
                }else{
                    $msg = 'Some Error Occured While Saving Data';
                }
            }else{
                $msg = 'Incorrect Current Password';
            }
        }
    }else if(isset($_POST['submitDept'])){
        $dept = $_POST['department'];
        $current = 1;
        $new  = $_POST['newPasswordDept'];
        $confirm = $_POST['confirmPasswordDept'];
        if($new != $confirm){
            $msgDept = 'Please retype the exact new password';
        }else{
            $checkQuery = "SELECT*FROM admins WHERE username = '$dept'";
            $check = mysqli_query($connection, $checkQuery);
            $res = $check->fetch_assoc();
            // var_dump($currentPassword);
            if($current == 1){
                $updateQuery = "UPDATE admins SET password = '$new' WHERE username = '$dept'";
                $update = mysqli_query($connection, $updateQuery);
                if($update){
                    $saveFlagDept = true;
                    $msgDept = 'Changes Saved Succesfully!';
                   
                }else{
                    $msgDept = 'Some Error Occured While Saving Data';
                }
            }else{
                $msgDept = 'Incorrect Current Password';
            }
        }
    }else{
        // var_dump($connection);
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
    </style>
<link rel="icon" href="./logo.png">
<title>Data Capturing System</title>
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
          window.location.href='../superuser/implinks.php';
        }
        function goForward() {
           window.history.forward();
        }
    </script>
    <div id="topLink">
        <a onclick="goBack()" style="cursor: pointer;" data-toggle="tooltip" data-placement="bottom" title="Go to Previous Page">BACK</a>
        <a onclick="goForward()" style="cursor: pointer; float: right; margin-right: 35px;" data-toggle="tooltip" data-placement="bottom" title="Go to Next Page">NEXT</a>
    </div>
    <br><br>
    <h2 style="font-weight: bold; text-align: center;">Change Password</h2><br>
    <div class="containerTable">
        <table class="table table-borderless">
        <thead>
            <tr>
            <th colspan="4" style="text-align: center; font-size: 20px;">For Super-User</th>
            </tr>
            <tr>
            <th>Current Password</th>
            <th>New Password</th>
            <th>Confirm Password</th>
            <th>Save Changes</th>
            </tr>
        </thead>
        <tbody>
            <form method="post">
                <tr>
                    <td><input type="password" class="form-control" name="currentPassword" placeholder="Type.." required></td>
                    <td><input type="password" class="form-control" name="newPassword" placeholder="New Password" required></td>
                    <td><input type="text" class="form-control" name="confirmPassword" placeholder="Confirm Password" required></td>
                    <td><button class="btn btn-primary" name="submit" type="submit">Save</button></td>
                </tr>
                <tr>
                  <td colspan="4"  style="text-align :left; font-size: 16px; font-weight: bold;">
                     <?php
                       if($saveFlag){
                           echo "<p  style='color: green;'>$msg</p>";
                       }else{
                        echo "<p style='color: red;'>$msg</p>";
                       }
                     ?>
                  </td>
                </tr>
            </form>
        </tbody>
        </table><br><br>
        <form  method="post">
            <table class="table table-borderless">
            <thead>
                <tr>
                    <th colspan="4"style="text-align: center; font-size: 20px;">For Departments</th>
                </tr>
                <tr>
                    <th colspan="4" style="text-align: center; font-size: 16px;">
                        <label for="department">Select Department</label>
                        <select name="department" id="selectDept" class="form-control">
                          <option value="0" selected disabled>Select department from the list</option>
                            <?php
                               $query = "SELECT*FROM admins ORDER BY username";
                               $retreive = mysqli_query($connection, $query);
                               while($result = $retreive->fetch_assoc() ){
                                   $row = $result['name'];
                                   $val = $result['username'];
                                   echo "<option value='$val'>$row</option>";
                               }
                            ?>
                        </select>
                    </th>
                </tr>
                <tr>
                <th>New Password</th>
                <th>Confirm Password</th>
                <th>Save Changes</th>
                </tr>
            </thead>
            <tbody>
                
                    <tr>
                        <td><input type="password" class="form-control" name="newPasswordDept" placeholder="New Password" required></td>
                        <td><input type="text" class="form-control" name="confirmPasswordDept" placeholder="Confirm Password" required></td>
                        <td><button class="btn btn-primary" name="submitDept" type="submit">Save</button></td>
                    </tr>
                    <tr>
                        <td colspan="4"  style="text-align :left; font-size: 16px; font-weight: bold;">
                            <?php
                            if($saveFlagDept){
                                echo "<p  style='color: green;'>$msgDept</p>";
                            }else{
                                echo "<p style='color: red;'>$msgDept</p>";
                            }
                            ?>
                        </td>
                    </tr>
                
            </tbody>
            </table>
        </form>
        <br><br>
    
    </div>
    
</body>
</html>

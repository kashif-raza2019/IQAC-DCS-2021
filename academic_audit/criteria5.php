<?php
    session_start();
    include("../credential.php");
      $user = $_SESSION['username'];
    
      $connection = mysqli_connect($servername, $username, $password, $dbname);
       if(isset($_POST['submit'])){
        $one = $_POST['q1']; 
        $two = $_POST['q2'];
        $three = $_POST['q3'];
        $four = $_POST['q4'];
        $five = $_POST['q5'];
        $six = $_POST['q6'];
        $seven = $_POST['q7'];
        $eight = $_POST['q8'];
        $nine = $_POST['q9'];
        $ten = $_POST['q10']; 
        $eleven = $_POST['q11']; 
        $twelve = $_POST['q12'];  
        $thirteen = $_POST['q13']; 
        $fourteen = $_POST['q14'];  
        $sqlInsert = "INSERT INTO academic_criteria_5 (user, q1, q2, q3, q4, q5, q6, q7, q8, q9, q10, q11, q12, q13, q14) VALUES ('$user', '$one', '$two', '$three', '$four', '$five', '$six', '$seven', '$eight', '$nine', '$ten', '$eleven', '$twelve', '$thirteen', '$fourteen')";
       
        $sqlUpdate = "UPDATE academic_criteria_5 
          SET q1 = '$one',q2 = '$two',q3 = '$three', q4 ='$four', q5 = '$five', q6 = '$six', q7 = '$seven',q8 = '$eight',q9 = '$nine',q10 = '$ten',q11 = '$eleven',q12 = '$twelve',q13 = '$thirteen',q14 = '$fourteen' WHERE user = '$user'";
          
          $checkQuery = "SELECT * FROM academic_criteria_5 WHERE user = '$user'";
          $checkUser = mysqli_query($connection, $checkQuery);
         if($checkUser){
           $row = mysqli_fetch_assoc($checkUser);
           $admin  = $row['user'];
           if($admin == $user){
             $updateUser = mysqli_query($connection, $sqlUpdate);
                if($updateUser){
               
              }else{
                echo "<script>alert('Oops! Something went wrong while updating data')</script>";
              }
              
           }else{

          $insertUser = mysqli_query($connection, $sqlInsert);
          // var_dump($insertUser);
          if($insertUser){
            
          
          }else{
            echo "<script>alert('Oops! Something went wrong while inserting data')</script>";
          }
           }
         }else{
          echo "<script>alert('Oops! Something went wrong while checking data')</script>";     
         }
         echo "<meta http-equiv='refresh' content='0'>";
     }
     $connection->close();
    ?>
   <html>
   <head>
     <title>Confirmation Page</title>
     <link rel="icon" href="../assets/images/davvlogo.png">
     <link rel="stylesheet" href="../css/bootstrap.min.css">
    <link rel="stylesheet" href="../css/w3_l.css">
    <link rel="icon" href="../logo.png">
    <script src="../js/jquery.min.js"></script>
    <script src="../js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
    <link rel="stylesheet" href="/resources/demos/style.css">
    <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
    <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
    <style>
     div{
         height: 300px;
         width: 50%;
         margin: 40px auto;
         text-align: center;
         justify-content: center;
         align-items: center;
         padding: 60px;
     }
    </style>

   </head>
   <body>
     <div>
        <h2><?php 
         echo "Success!";
        ?></h2><br>
        <button type="button" class="btn btn-warning" id="backBtn">CONTINUE</button>
        <script>
          $("#backBtn").click(function(){
            window.location.href = "index.php";
          });
        </script>
     </div>
   </body>
   <html>
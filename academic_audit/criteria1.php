<?php
    session_start();
    include("../credential.php");
      $user = $_SESSION['username'];
      $flag1 = false;
      $flag2 = false;
      $connection = mysqli_connect($servername, $username, $password, $dbname);
       if(isset($_POST['submit'])){
        $one = $_POST['Learning_objectives_are_clearly_defined_and_measurable']; 
        $two = $_POST['Learning_objectives_are_in_line_with_student_need'];
        $three = $_POST['Learning_objectives_are_in_line_with_industry_need'];
        $four = $_POST['Content_development_is_in_line_with_the_learning_objectives'];
        $five = $_POST['Content_revision_and_updating_is_done_regularly'];
        $six = $_POST['Curriculum_is_flexible_enough_to_incorporate_changes'];
        $seven = $_POST['Choice_Based_Credit_System_is_followed_in_true_sense'];
        $eight = $_POST['Programs_are_in_line_with_mission_and_vision_of_Department_&_University'];
        $nine = $_POST['New_Program_Started_in_Last_One_Year']; 
        $sqlInsert = "INSERT INTO academic_criteria_1 (user, learning_objectives_are_clearly_defined_and_measurable,learning_objectives_are_inline_with_student_need,learning_are_inline_with_industry_need,content_development_is_inline_with_the_learning_objectives,content_revision_and_updating_is_done_regularly,curriculum_is_flexible_enough_to_incorporate_changes,choice_based_credit_system_is_followed_in_true_sense,programs_are_inline,new_program_started_in_last_one_year) VALUES ('$user', '$one', '$two', '$three', '$four', '$five', '$six', '$seven', '$eight', '$nine')";
       
        $sqlUpdate = "UPDATE academic_criteria_1 
          SET learning_objectives_are_clearly_defined_and_measurable = '$one',learning_objectives_are_inline_with_student_need = '$two',learning_are_inline_with_industry_need = '$three', content_development_is_inline_with_the_learning_objectives ='$four', content_revision_and_updating_is_done_regularly = '$five', curriculum_is_flexible_enough_to_incorporate_changes = '$six',choice_based_credit_system_is_followed_in_true_sense = '$seven',programs_are_inline= '$eight',new_program_started_in_last_one_year = '$nine' WHERE user = '$user'";
          
          $checkQuery = "SELECT * FROM academic_criteria_1 WHERE user = '$user'";
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
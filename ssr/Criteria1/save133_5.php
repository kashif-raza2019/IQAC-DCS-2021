<?php
    session_start();
    include('../../credential.php');
    $user = $_SESSION['username'];
    $name = $_SESSION['name'];
    $connection =  mysqli_connect($servername, $username, $password, $dbname);
    $output = '';
    $date = date_create();
    save_log($_SESSION['username'],getUserIP(),$_SERVER['REQUEST_URI'],urlencode(http_build_query($_POST, '', '&amp;')),date_format($date, 'Y-m-d H:i:s'));
     if(isset($_POST['courseName'])){
         $courseName = $_POST['courseName'];
         $courseCode =  $_POST['courseCode'];
         $year = $_POST['year'];
         $numberTimes = $_POST['numberTimes'];
         $duration = $_POST['duration'];
         $numberStudent = $_POST['numberStudent'];
         $numberStudentComplete = $_POST['numberStudentComplete'];
         $query = "";
         for($i=0; $i<count($courseName); $i++){

            //  $collageYear_clean = mysqli_real_escape_string($connection, $collageYear[$i]);
             $courseName_clean = mysqli_real_escape_string($connection, $courseName[$i]);
             $courseCode_clean = mysqli_real_escape_string($connection, $courseCode[$i]);
             $year_clean = mysqli_real_escape_string($connection, $year[$i]);
             $numberTimes_clean = $numberTimes[$i];
             $duration_clean = mysqli_real_escape_string($connection, $duration[$i]);
             $numberStudent_clean = mysqli_real_escape_string($connection, $numberStudent[$i]);
             $numberStudentComplete_clean = mysqli_real_escape_string($connection, $numberStudentComplete[$i]);
             $query = "INSERT INTO ssr_m1_3_3(username, courseName, courseCode, year, numberTimes, duration, numberStudent, numberStudentComplete, collageYear) VALUES('$user', '$courseName_clean', '$courseCode_clean', '$year_clean', '$numberTimes_clean', '$duration_clean', '$numberStudent_clean', '$numberStudentComplete_clean', 'Y5')";


         }
         if($query!=''){
              if(mysqli_multi_query($connection, $query)){
                  $output ="<h5 style='color: green; text-align; center'>Data Saved!</h5>";
                //   echo "<script>window.location.href='index.php#q132'</script>";
              }else{
                  $output = "<h5 style='color: red; text-align; center'>Error Inserting Data</h5>";
                //   echo "<script>window.location.href='index.php#q132'</script>";
              }
         }else{
             $output =  "<h5 style='color: orange; text-align; center'>Please Select atleast One Table</h5>";
            //  echo "<script>window.location.href='index.php#q132'</script>";
         }
     }
     $connection->close();

?>

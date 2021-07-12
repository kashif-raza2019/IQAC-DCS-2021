<?php
    session_start();
    include('../../credential.php');
    $user = $_SESSION['username'];
    $name = $_SESSION['name'];
    $connection =  mysqli_connect($servername, $username, $password, $dbname);
    $output = '';
    $date = date_create();
    save_log($_SESSION['username'],getUserIP(),$_SERVER['REQUEST_URI'],urlencode(http_build_query($_POST, '', '&amp;')),date_format($date, 'Y-m-d H:i:s'));
     if(isset($_POST['programName'])){
         $programName = $_POST['programName'];
         $programCode =  $_POST['programCode'];
         $numberStudent = $_POST['numberStudent'];
         $linkdoc = $_POST['linkdoc'];
         $query = "";
         for($i=0; $i<count($programName); $i++){

            //  $collageYear_clean = mysqli_real_escape_string($connection, $collageYear[$i]);
             $programName_clean = mysqli_real_escape_string($connection, $programName[$i]);
             $programCode_clean = mysqli_real_escape_string($connection, $programCode[$i]);
             $numberStudent_clean = mysqli_real_escape_string($connection, $numberStudent[$i]);
             $linkdoc_clean = mysqli_real_escape_string($connection, $linkdoc[$i]);
             $query = "INSERT INTO ssr_m1_3_4(username, programName, programCode, numberStudent, linkdoc) VALUES('$user', '$programName_clean', '$programCode_clean',  '$numberStudent_clean', '$linkdoc_clean')";


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

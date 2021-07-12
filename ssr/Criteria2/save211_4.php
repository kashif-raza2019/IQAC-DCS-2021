<?php
    session_start();
    include('../../credential.php');
    $user = $_SESSION['username'];
    $name = $_SESSION['name'];
    $connection =  mysqli_connect($servername, $username, $password, $dbname);
    $output = '';
    $date = date_create();
    save_log($_SESSION['username'],getUserIP(),$_SERVER['REQUEST_URI'],urlencode(http_build_query($_POST, '', '&amp;')),date_format($date, 'Y-m-d H:i:s'));
     if(isset($_POST['programCode'])){
         $programName = $_POST['programName'];
         $programCode =  $_POST['programCode'];
         $numberSeats = $_POST['numberSeats'];
         $numberEligible = $_POST['numberEligible'];
         $numberAdmit = $_POST['numberAdmit'];
         $query = "";
         for($i=0; $i<count($programName); $i++){

            //  $collageYear_clean = mysqli_real_escape_string($connection, $collageYear[$i]);
             $programName_clean = mysqli_real_escape_string($connection, $programName[$i]);
             $programCode_clean = mysqli_real_escape_string($connection, $programCode[$i]);
             $numberSeats_clean = mysqli_real_escape_string($connection, $numberSeats[$i]);
             $numberEligible_clean = mysqli_real_escape_string($connection, $numberEligible[$i]);
             $numberAdmit_clean = mysqli_real_escape_string($connection, $numberAdmit[$i]);
             $query = "INSERT INTO ssr_m2_1_1(username, programName, programCode, numberSeats, numberEligible, numberAdmit,  yearCollage) VALUES('$user','$programCode_clean',  '$programName_clean' ,'$numberSeats_clean',  '$numberEligible_clean', '$numberAdmit_clean',  'Y4')";
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

<?php
    session_start();
    include('../../credential.php');
    $user = $_SESSION['username'];
    $name = $_SESSION['name'];
    $connection =  mysqli_connect($servername, $username, $password, $dbname);
    $output = '';
    $date = date_create();
    save_log($_SESSION['username'],getUserIP(),$_SERVER['REQUEST_URI'],urlencode(http_build_query($_POST, '', '&amp;')),date_format($date, 'Y-m-d H:i:s'));
     if(isset($_POST['year'])){
           $year = $_POST['year'];
            $reserve_sc = $_POST['reserve_sc'];
            $reserve_st = $_POST['reserve_st'];
            $reserve_obc = $_POST['reserve_obc'];
            $reserve_other = $_POST['reserve_other'];
            $admit_sc = $_POST['admit_sc'];
            $admit_st = $_POST['admit_st'];
            $admit_obc = $_POST['admit_obc'];
            $admit_other = $_POST['admit_other'];

         $query = "";
         for($i=0; $i<count($year); $i++){ 
             $year_in = $year[$i];
             $reserve_sc_in = $reserve_sc[$i];
             $reserve_st_in = $reserve_st[$i];
             $reserve_obc_in = $reserve_obc[$i];
             $reserve_other_in = $reserve_other[$i];
             $admit_sc_in = $admit_sc[$i];
             $admit_st_in = $admit_st[$i];
             $admit_obc_in = $admit_obc[$i];
             $admit_other_in = $admit_other[$i];
             $query = "INSERT INTO ssr_m2_1_2(username, year, reserve_sc, reserve_st, reserve_obc, reserve_other, admit_sc, admit_st, admit_obc, admit_other) VALUES('$user', '$year_in', '$reserve_sc_in', '$reserve_st_in', '$reserve_obc_in', '$reserve_other_in', '$admit_sc_in', '$admit_st_in', '$admit_obc_in', '$admit_other_in')";
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

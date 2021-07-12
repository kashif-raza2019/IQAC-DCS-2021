<?php
    session_start();
    include('../../credential.php');
    $user = $_SESSION['username'];
    $name = $_SESSION['name'];
    $connection =  mysqli_connect($servername, $username, $password, $dbname);
    $output = '';
            // File Exists or not 
            function does_url_exists($url) {
                $ch = curl_init($url);
                curl_setopt($ch, CURLOPT_NOBODY, true);
                curl_exec($ch);
                $code = curl_getinfo($ch, CURLINFO_HTTP_CODE);
            
                if ($code == 200) {
                    $status = true;
                } else {
                    $status = false;
                }
                curl_close($ch);
                return $status;
            }
    
    $date = date_create();
    save_log($_SESSION['username'],getUserIP(),$_SERVER['REQUEST_URI'],urlencode(http_build_query($_POST, '', '&amp;')),date_format($date, 'Y-m-d H:i:s'));
     if(isset($_POST['q1'])){
           $q1 = $_POST['q1'];
           $q2 = $_POST['q2'];
           $q3 = $_POST['q3'];
           $q4 = $_POST['q4'];
           $q5 = $_POST['qSelect'];
         for($i=0; $i<count($q1); $i++){ 
            $q1_n = $q1[$i];
            $q2_n = $q2[$i];
            $q3_n = $q3[$i];
            $q4_n = $q4[$i];
            $q5_n = $q5;
             $query = "INSERT INTO ssr_m5_1_3(username, Name_of_the_capability_enhancement_programme, Date_of_implementation, Number_of_students_enrolled, Name_of_the_agencies_consultants_involved_with_contact_details, Select_option) VALUES('$user', '$q1_n', '$q2_n', '$q3_n', '$q4_n', '$q5_n')";
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

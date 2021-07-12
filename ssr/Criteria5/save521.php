<?php
    session_start();
    include('../../credential.php');
    $user = $_SESSION['username'];
    $name = $_SESSION['name'];
    $connection =  mysqli_connect($servername, $username, $password, $dbname);
    $output = '';
    $date = date_create();
    save_log($_SESSION['username'],getUserIP(),$_SERVER['REQUEST_URI'],urlencode(http_build_query($_POST, '', '&amp;')),date_format($date, 'Y-m-d H:i:s'));
     if(isset($_POST['q1'])){
           $q1 = $_POST['q1'];
           $q2 = $_POST['q2'];
           $q3 = $_POST['q3'];
           $q4 = $_POST['q4'];
           $q5 = $_POST['q5'];
           $q6 = $_POST['q6'];
           $q7 = $_POST['q7'];
           $q8 = $_POST['q8'];
           $q9 = $_POST['q9'];
           $q10 = $_POST['q10'];
           $q11 = $_POST['q11'];
           $q12 = $_POST['q12'];
           $q13 = $_POST['q13'];
         $query = "";
         for($i=0; $i<count($q1); $i++){ 
            $q1_n = $q1[$i];
            $q2_n = $q2[$i];
            $q3_n = $q3[$i];
            $q4_n = $q4[$i];
            $q5_n = $q5[$i];
            $q6_n = $q6[$i];
            $q7_n = $q7[$i];
            $q8_n = $q8[$i];
            $q9_n = $q9[$i];
            $q10_n = $q10[$i];
            $q11_n = $q11[$i];
            $q12_n = $q12[$i];
            $q13_n = $q13[$i];
             $query = "INSERT INTO ssr_m5_2_1(username, Year, Registration_Number_or_Roll_Number, Name_of_Student_NET, Name_of_Student_SLET, Name_of_Student_GATE, Name_of_Student_GMAT ,Name_of_Student_CAT, Name_of_Student_GRE, Name_of_Student_IELTS, Name_of_Student_TOEFL, Name_of_Student_Civil_Services, Name_of_Student_State_Gov_Exam, Name_of_Student_Other_Exam) VALUES('$user', '$q1_n', '$q2_n', '$q3_n', '$q4_n', '$q5_n', '$q6_n', '$q7_n', '$q8_n', '$q9_n', '$q10_n', '$q11_n', '$q12_n', '$q13_n')";
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

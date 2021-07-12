<?php
  session_start();
     include("../../credential.php");
     $user = $_SESSION['username'];
     
     $connection = mysqli_connect($servername, $username, $password, $dbname);

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

     $courseName = $_POST['courseName'];
     $courseCode = $_POST['courseCode'];
     $yearIntro = $_POST['yearIntro'];
     $activity = $_POST['activity'];
     $link = $_POST['doclink'];
     
     if($connection){
        if(does_url_exists($link)){
          
            $insertQuery = "INSERT INTO ssr_m1_1_3(username, Course_Name, Course_Code, Year_of_Introduction, activity, link_document) VALUES('$user', '$courseName', '$courseCode', '$yearIntro', '$activity', '$link')";
            $insert = mysqli_query($connection, $insertQuery);
            if($insert){
               echo "<script>alert('Changes Saved Successfully!')</script>";
   
            }else{
                echo "<script>alert('Error Inserting Data, Please try again!')</script>";
                var_dump($insert);
               
            }
        }else{
            echo "<script>alert('Please Provide relevant link!')</script>";
        }
    }else{
        echo "<script>alert('Error connecting Database, Please try after sometime!')</script>";
        var_dump($connection);
    }
   
     
     $connection->close();

?>
<script>
  window.location.href="index.php#q113";
</script>
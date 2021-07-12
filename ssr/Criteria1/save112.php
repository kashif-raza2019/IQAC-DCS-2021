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

     $programCode = $_POST['programCode'];
     $programName = $_POST['programName'];
     $yearIntro = $_POST['yearIntro'];
     $statusImplement = $_POST['statusImplement'];
     $yearImplement = $_POST['yearImplement'];
     $yearRevision = $_POST['yearRevision'];
     $percent = $_POST['percentContent'];
     $link = $_POST['doclink'];
     
     if($connection){
        if(does_url_exists($link)){
            $insertQuery = "INSERT INTO ssr_m1_1_2(username, Programme_Code, Programme_Name, Year_of_Introduction, Status_of_Implementation, Year_of_Implementation, Year_of_Revision, Percentage, link_document) VALUES('$user', '$programCode', '$programName', '$yearIntro', '$statusImplement', '$yearImplement', '$yearRevision', '$percent', '$link')";
            $insert = mysqli_query($connection, $insertQuery);
            if($insert){
               echo "<script>alert('Changes Saved Successfully!')</script>";
   
            }else{
                echo "<script>alert('Error Inserting Data, Please try again!')</script>";
                var_dump($insert);
            }
        }else{
            echo "<script>alert('Please provide relevent link to the document!')</script>";
        }
   
     }else{
        var_dump($connection);
        echo "<script>alert('Error Connecting Database, Please try after sometime!')</script>";
     }
     
     $connection->close();

?>
<script>
  window.location.href="index.php#q112";
</script>
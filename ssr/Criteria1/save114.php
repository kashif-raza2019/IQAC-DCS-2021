<?php
  session_start();
     include("../../credential.php");
     $user = $_SESSION['username'];
     $name = $_SESSION['name'];
    
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

     $programName = $_POST['programName'];
     $programCode = $_POST['programCode114'];
     $year = $_POST['year'];
     $nameE = $_POST['nameElectronic'];
     $link = $_POST['linkdoc'];
     
     if($connection){
        if(does_url_exists($link)){
             
             if($name == 'Directorate of Distance Education'){
                $insertQuery = "INSERT INTO ssr_m1_1_4(username, Program_Name, Program_Code, Year, name_electronic, link_document) VALUES('$user', '$programName', '$programCode', '$year', '$nameE', '$link')";
            $insert = mysqli_query($connection, $insertQuery);
            if($insert){
               echo "<script>alert('Changes Saved Successfully!')</script>";
   
            }else{
                echo "<script>alert('Error Inserting Data, Please try again!')</script>";
                var_dump($insert);
               
            }
             }else{
                   
                echo "<script>alert('You are not allowed to fill this data')</script>";

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
  window.location.href="index.php#q114";
</script>
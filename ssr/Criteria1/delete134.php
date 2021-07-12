<?php
session_start();
     include('../../credential.php');
     $connection  = mysqli_connect($servername, $username, $password, $dbname);
     $adminname = $_SESSION['username'];
     $id = $_GET['id'];
     $deleteQuery = "DELETE FROM ssr_m1_3_4 WHERE username='$adminname' AND id='$id'";
     $delete = mysqli_query($connection, $deleteQuery);
     if($delete){
         echo "<script>alert('Data Deleted')</script>";
     }else{
        echo "<script>alert('Error Deleting')</script>";

     }

  $connection->close();

?>
<script>
   location.href='index.php#q134';
</script>
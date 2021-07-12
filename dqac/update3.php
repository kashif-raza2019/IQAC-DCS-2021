<?php
session_start();
  include '../credential.php';
  $user = $_SESSION['username'];
  $connection = mysqli_connect($servername, $username, $password, $dbname);
  if($connection){
        $name = $_POST['nameM'];
        $desig = $_POST['designationM'];
        $aff = $_POST['affiliationM'];
        $email = $_POST['emailM'];
        $contact = $_POST['contactM'];
     $query = "INSERT INTO dqac_3 (user, name, designation, affiliation, email, contact) VALUES('$user', '$name', '$desig', '$aff', '$email', '$contact')";
     $insert = mysqli_query($connection, $query);
     if($insert){
         echo "<script>alert('Management Data Added')</script>";
     }else{
         echo "<script>alert('Problem With Insertion')</script>";
         var_dump($insert);
     }
  }else{
      var_dump($connection);
  }
 $connection->close();
?>
<script>
  window.location.href = "../dqac/index.php#show3";
</script>
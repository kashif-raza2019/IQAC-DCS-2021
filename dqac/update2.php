<?php
session_start();
  include '../credential.php';
  $user = $_SESSION['username'];
  $connection = mysqli_connect($servername, $username, $password, $dbname);
  if($connection){
        $name = $_POST['nameS'];
        $desig = $_POST['designationS'];
        $aff = $_POST['affiliationS'];
        $email = $_POST['emailS'];
        $contact = $_POST['contactS'];
     $query = "INSERT INTO dqac_2 (user, name, designation, affiliation, email, contact) VALUES('$user', '$name', '$desig', '$aff', '$email', '$contact')";
     $insert = mysqli_query($connection, $query);
     if($insert){
         echo "<script>alert('Senior Teacher Data Added')</script>";
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
  window.location.href = "../dqac/index.php#show2";
</script>
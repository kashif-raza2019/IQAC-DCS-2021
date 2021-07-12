<?php
session_start();
  include '../credential.php';
  $user = $_SESSION['username'];
  $connection = mysqli_connect($servername, $username, $password, $dbname);
  if($connection){
        $name = $_POST['name4'];
        $desig = $_POST['designation4'];
        $aff = $_POST['affiliation4'];
        $email = $_POST['email4'];
        $contact = $_POST['contact4'];
     $query = "INSERT INTO dqac_4 (user, name, designation, affiliation, email, contact) VALUES('$user', '$name', '$desig', '$aff', '$email', '$contact')";
     $insert = mysqli_query($connection, $query);
     if($insert){
         echo "<script>alert('Data Added')</script>";
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
  window.location.href = "../dqac/index.php#show4";
</script>
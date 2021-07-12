<?php
session_start();
  include '../credential.php';
  $user = $_SESSION['username'];
  $connection = mysqli_connect($servername, $username, $password, $dbname);
  if($connection){
        $name = $_POST['name6'];
        $desig = $_POST['designation6'];
        $aff = $_POST['affiliation6'];
        $email = $_POST['email6'];
        $contact = $_POST['contact6'];
     $query = "INSERT INTO dqac_6 (user, name, designation, affiliation, email, contact) VALUES('$user', '$name', '$desig', '$aff', '$email', '$contact')";
     $insert = mysqli_query($connection, $query);
     if($insert){
         echo "<script>alert('DQAC Coordinator Data Added')</script>";
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
  window.location.href = "../dqac/index.php#show6";
</script>
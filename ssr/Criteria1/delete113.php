<?php
  session_start();
  include("../../credential.php");
  $user = $_SESSION['username'];
  $id = $_POST['id'];
  $connection = mysqli_connect($servername, $username, $password, $dbname);
 echo "<script>alert('Are you sure?')</script>";
  $deleteQuery = "DELETE FROM ssr_m1_1_3 WHERE username='$user' AND id='$id'";
  $delete = mysqli_query($connection, $deleteQuery);
  if($delete){
      echo "<script>alert('Data Deleted')</script>";
  }else{
    echo "<script>alert('Please try again!')</script>";

  }
  $connection->close();
?>
<script>
  window.location.href="index.php#q113";
</script>
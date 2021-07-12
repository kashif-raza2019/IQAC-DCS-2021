<?php
session_start();
  include '../credential.php';
  $user = $_SESSION['username'];
  $connection = mysqli_connect($servername, $username, $password, $dbname);
//   echo "<script>alert('Are You Sure to delete this row?')</script>";
  if($connection){
    $id = $_GET['formid'];
    $query = "DELETE FROM dqac_4 WHERE user = '$user' AND id = '$id'";
    $delete = mysqli_query($connection, $query);
    if($delete){
        echo "<script>alert('Deleted Succesfully!')</script>";

     }else{
         echo "Some Problem with delete query!";
         var_dump($delete);
     }

    }else{
        echo "Problem with Connecting Database";
        var_dump($connection);
    }
    $connection->close();
?>
<script>
  window.location.href = "../dqac/index.php#show4";
</script>
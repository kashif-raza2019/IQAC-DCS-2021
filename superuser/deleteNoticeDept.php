<?php 
    include("../credential.php");
    $user = $_POST['dept'];
    $query = "DELETE FROM notice WHERE username = '$user'";
    $connection = mysqli_connect($servername, $username, $password, $dbname);
    $res = mysqli_query($connection,$query);

    $connection->close();
?>


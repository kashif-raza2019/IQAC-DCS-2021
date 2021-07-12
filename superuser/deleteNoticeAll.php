<?php 
    include("../credential.php");

    $query = "DELETE FROM noticeall WHERE id>0";
    $connection = mysqli_connect($servername, $username, $password, $dbname);
    $res = mysqli_query($connection,$query);

    $connection->close();
?>


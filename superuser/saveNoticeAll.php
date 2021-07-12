<?php 
    include("../credential.php");
    if(function_exists('date_default_timezone_set'))
    {
        date_default_timezone_set("Asia/Kolkata");
    }

   $data = $_POST['noticeData'];
    $todayDate = date("Y-m-d");

    $connection = mysqli_connect($servername, $username, $password, $dbname);
    $query1 = "INSERT INTO noticeall(notice) VALUES('$data')";
    $inject1 = mysqli_query($connection, $query1);
    $query2 = "INSERT INTO prev_noticeall(notice, start_date) VALUES('$data', '$todayDate')";
    $inject2 = mysqli_query($connection, $query2);
    $connection->close();
?>

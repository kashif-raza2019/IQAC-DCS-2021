<?php 
    include("../credential.php");
    $dept = $_POST['department'];
    $notice = $_POST['noticeDept'];
        //   Updating Time Zone
    if(function_exists('date_default_timezone_set'))
        {
            date_default_timezone_set("Asia/Kolkata");
        }
    $todayDate = date("Y-m-d");
    $connection = mysqli_connect($servername, $username, $password, $dbname);
    $query1 = "INSERT INTO notice(username, notice) VALUES('$dept', '$notice')";
    $inject1 = mysqli_query($connection, $query1);
    $query2 = "INSERT INTO prev_notice(username, notice, start_date) VALUES('$dept', '$notice', '$todayDate')";
    $inject2 = mysqli_query($connection, $query2);


    $connection->close();
?>

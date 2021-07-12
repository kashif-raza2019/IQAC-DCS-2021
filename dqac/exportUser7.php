<?php
    session_start();
    include('../credential.php');  
    $connection = mysqli_connect($servername, $username, $password, $dbname);
    $user = $_SESSION['username'];
    $name = $_SESSION['name'];
    $year = "2021";

    $query = "SELECT * FROM dqac_remarks WHERE user = '$user'";
    if (!$result = mysqli_query($connection, $query)) {
        exit(mysqli_error($connection));
    }

    $users = array();
    if (mysqli_num_rows($result) > 0) {
        while ($row = mysqli_fetch_assoc($result)) {
            $users[] = $row;
        }
    }

    header('Content-Type: text/csv; charset=utf-8');
    header("Content-Disposition: attachment; filename=7-DQAC_COMPOSITION_$user.csv");
    $output = fopen('php://output', 'w');
    fputcsv($output, array('ID', 'DEPT-USER', 'Remark', 'File Name', 'File Type', 'File Size'));

    if (count($users) > 0) {
        foreach ($users as $row) {
            fputcsv($output, $row);
        }
    }

    
$connection->close();
?>
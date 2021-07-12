<?php
    include('../credential.php');  
    $connection = mysqli_connect($servername, $username, $password, $dbname);
    $user = $_GET['user'];
    $name = $_GET['name'];


    // SSS
    $query = "SELECT * FROM sss_2021 WHERE username = '$user'";
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
    header("Content-Disposition: attachment; filename=$name-Student-Satisfaction-Survey.csv");
    $output = fopen('php://output', 'w');
    fputcsv($output);

    if (count($users) > 0) {
        foreach ($users as $row) {
            fputcsv($output, $row);
        }
    }
$connection->close();
?>
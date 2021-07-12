<?php
    session_start();
    $user = $_SESSION['username'];
    include('../credential.php');
    $date = date_create();
	save_log($_SESSION['username'],getUserIP(),$_SERVER['REQUEST_URI'],urlencode(http_build_query($_POST, '', '&amp;')),date_format($date, 'Y-m-d H:i:s'));
    
    $con  = mysqli_connect($servername, $username, $password, $dbname);

    // get Users
    $query = "SELECT Roll_Number FROM student_applicable WHERE username='$user'";
    if (!$result = mysqli_query($con, $query)) {
        exit(mysqli_error($con));
    }

    $users = array();
    if (mysqli_num_rows($result) > 0) {
        while ($row = mysqli_fetch_assoc($result)) {
            $users[] = $row;
        }
    }

    header('Content-Type: text/csv; charset=utf-8');
    header('Content-Disposition: attachment; filename=Students_Allowed.csv');
    $output = fopen('php://output', 'w');
    fputcsv($output, array('Roll Numbers'));

    if (count($users) > 0) {
        foreach ($users as $row) {
            fputcsv($output, $row);
        }
    }
?>
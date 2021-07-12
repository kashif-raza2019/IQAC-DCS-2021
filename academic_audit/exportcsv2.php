<?php
   session_start();
   $username = $_SESSION['username'];
        include("../credential.php");
        $connection = mysqli_connect($servername, $username, $password, $dbname);

        // get Users
        $query = "SELECT * FROM academic_criteria_2 where user = '$username'";
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
        header('Content-Disposition: attachment; filename=academic_audit_1.csv');
        $output = fopen('php://output', 'w');
        fputcsv($output, array('q1', 'q2', 'q3'));

        if (count($users) > 0) {
            foreach ($users as $row) {
                fputcsv($output, $row);
            }
        }

    $connection->close();
?>
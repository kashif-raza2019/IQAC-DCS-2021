<?php
    include('../credential.php');  
    $connection = mysqli_connect($servername, $username, $password, $dbname);
    $user = $_GET['username'];
    $name = $_GET['name'];


    $query = "SELECT * FROM academic_criteria_1 WHERE user = '$user'";
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
    header('Content-Disposition: attachment; filename=Academic_Audit_1.csv');
    $output = fopen('php://output', 'w');
    fputcsv($output);

    if (count($users) > 0) {
        foreach ($users as $row) {
            fputcsv($output, $row);
        }
    }
    // 2
    $query = "SELECT * FROM academic_criteria_2 WHERE user = '$user'";
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
    header('Content-Disposition: attachment; filename=Academic_Audit_1.csv');
    $output = fopen('php://output', 'w');
    fputcsv($output);

    if (count($users) > 0) {
        foreach ($users as $row) {
            fputcsv($output, $row);
        }
    }
    // 3
    $query = "SELECT * FROM academic_criteria_3 WHERE user = '$user'";
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
    header('Content-Disposition: attachment; filename=Academic_Audit_1.csv');
    $output = fopen('php://output', 'w');
    fputcsv($output);

    if (count($users) > 0) {
        foreach ($users as $row) {
            fputcsv($output, $row);
        }
    }
    // 4
    $query = "SELECT * FROM academic_criteria_4 WHERE user = '$user'";
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
    header('Content-Disposition: attachment; filename=Academic_Audit_1.csv');
    $output = fopen('php://output', 'w');
    fputcsv($output);

    if (count($users) > 0) {
        foreach ($users as $row) {
            fputcsv($output, $row);
        }
    }
    // 5
    $query = "SELECT * FROM academic_criteria_5 WHERE user = '$user'";
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
    header('Content-Disposition: attachment; filename=Academic_Audit_1.csv');
    $output = fopen('php://output', 'w');
    fputcsv($output);

    if (count($users) > 0) {
        foreach ($users as $row) {
            fputcsv($output, $row);
        }
    }
    // 6
    $query = "SELECT * FROM academic_criteria_6 WHERE user = '$user'";
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
    header('Content-Disposition: attachment; filename=Academic_Audit_1.csv');
    $output = fopen('php://output', 'w');
    fputcsv($output);

    if (count($users) > 0) {
        foreach ($users as $row) {
            fputcsv($output, $row);
        }
    }
    // 7
    $query = "SELECT * FROM academic_criteria_7 WHERE user = '$user'";
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
    header('Content-Disposition: attachment; filename=Academic_Audit_1.csv');
    $output = fopen('php://output', 'w');
    fputcsv($output);

    if (count($users) > 0) {
        foreach ($users as $row) {
            fputcsv($output, $row);
        }
    }
$connection->close();
?>
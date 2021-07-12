<?php
    include('../credential.php');  
    $connection = mysqli_connect($servername, $username, $password, $dbname);
    $user = $_GET['username'];
    $name = $_GET['name'];
    $month = $_GET['month'];
    $year = $_GET['year'];

    $query1 = "SELECT * FROM monthly_report_q1 WHERE username = '$user' AND month = '$month'";
    if (!$result1 = mysqli_query($connection, $query1)) {
        exit(mysqli_error($connection));
    }

    $users1 = array();
    if (mysqli_num_rows($result1) > 0) {
        while ($row1 = mysqli_fetch_assoc($result1)) {
            $users1[] = $row1;
        }
    }

    $query2 = "SELECT * FROM monthly_report_q2 WHERE username = '$user' AND month = '$month'";
    if (!$result2 = mysqli_query($connection, $query2)) {
        exit(mysqli_error($connection));
    }

    $users2 = array();
    if (mysqli_num_rows($result2) > 0) {
        while ($row1 = mysqli_fetch_assoc($result2)) {
            $users2[] = $row1;
        }
    }$query3 = "SELECT * FROM monthly_report_q3 WHERE username = '$user' AND month = '$month'";
    if (!$result3 = mysqli_query($connection, $query3)) {
        exit(mysqli_error($connection));
    }

    $users3 = array();
    if (mysqli_num_rows($result3) > 0) {
        while ($row1 = mysqli_fetch_assoc($result3)) {
            $users3[] = $row1;
        }
    }$query4 = "SELECT * FROM monthly_report_q4 WHERE username = '$user' AND month = '$month'";
    if (!$result4 = mysqli_query($connection, $query4)) {
        exit(mysqli_error($connection));
    }

    $users4 = array();
    if (mysqli_num_rows($result4) > 0) {
        while ($row1 = mysqli_fetch_assoc($result4)) {
            $users4[] = $row1;
        }
    }$query5 = "SELECT * FROM monthly_report_q5 WHERE username = '$user' AND month = '$month'";
    if (!$result5 = mysqli_query($connection, $query5)) {
        exit(mysqli_error($connection));
    }

    $users5 = array();
    if (mysqli_num_rows($result5) > 0) {
        while ($row1 = mysqli_fetch_assoc($result5)) {
            $users5[] = $row1;
        }
    }$query6 = "SELECT * FROM monthly_report_q6 WHERE username = '$user' AND month = '$month'";
    if (!$result6 = mysqli_query($connection, $query6)) {
        exit(mysqli_error($connection));
    }

    $users6 = array();
    if (mysqli_num_rows($result6) > 0) {
        while ($row1 = mysqli_fetch_assoc($result6)) {
            $users6[] = $row1;
        }
    }$query7 = "SELECT * FROM monthly_report_q7 WHERE username = '$user' AND month = '$month'";
    if (!$result7 = mysqli_query($connection, $query7)) {
        exit(mysqli_error($connection));
    }

    $users7 = array();
    if (mysqli_num_rows($result7) > 0) {
        while ($row1 = mysqli_fetch_assoc($result7)) {
            $users7[] = $row1;
        }
    }$query8 = "SELECT * FROM monthly_report_q8 WHERE username = '$user' AND month = '$month'";
    if (!$result8 = mysqli_query($connection, $query8)) {
        exit(mysqli_error($connection));
    }

    $users8 = array();
    if (mysqli_num_rows($result8) > 0) {
        while ($row1 = mysqli_fetch_assoc($result8)) {
            $users8[] = $row1;
        }
    }$query9 = "SELECT * FROM monthly_report_q9 WHERE username = '$user' AND month = '$month'";
    if (!$result9 = mysqli_query($connection, $query9)) {
        exit(mysqli_error($connection));
    }

    $users9 = array();
    if (mysqli_num_rows($result9) > 0) {
        while ($row1 = mysqli_fetch_assoc($result9)) {
            $users9[] = $row1;
        }
    }$query10 = "SELECT * FROM monthly_report_q10 WHERE username = '$user' AND month = '$month'";
    if (!$result10 = mysqli_query($connection, $query10)) {
        exit(mysqli_error($connection));
    }

    $users10 = array();
    if (mysqli_num_rows($result10) > 0) {
        while ($row1 = mysqli_fetch_assoc($result10)) {
            $users10[] = $row1;
        }
    }$query11 = "SELECT * FROM monthly_report_q11 WHERE username = '$user' AND month = '$month'";
    if (!$result11 = mysqli_query($connection, $query11)) {
        exit(mysqli_error($connection));
    }

    $users11 = array();
    if (mysqli_num_rows($result11) > 0) {
        while ($row1 = mysqli_fetch_assoc($result11)) {
            $users11[] = $row1;
        }
    }$query12 = "SELECT * FROM monthly_report_q12 WHERE username = '$user' AND month = '$month'";
    if (!$result12 = mysqli_query($connection, $query12)) {
        exit(mysqli_error($connection));
    }

    $users12 = array();
    if (mysqli_num_rows($result12) > 0) {
        while ($row1 = mysqli_fetch_assoc($result12)) {
            $users12[] = $row1;
        }
    }$query13 = "SELECT * FROM monthly_report_q13 WHERE username = '$user' AND month = '$month'";
    if (!$result13 = mysqli_query($connection, $query13)) {
        exit(mysqli_error($connection));
    }

    $users13 = array();
    if (mysqli_num_rows($result13) > 0) {
        while ($row1 = mysqli_fetch_assoc($result13)) {
            $users13[] = $row1;
        }
    }$query14 = "SELECT * FROM monthly_report_q14 WHERE username = '$user' AND month = '$month'";
    if (!$result14 = mysqli_query($connection, $query14)) {
        exit(mysqli_error($connection));
    }

    $users14 = array();
    if (mysqli_num_rows($result14) > 0) {
        while ($row1 = mysqli_fetch_assoc($result14)) {
            $users14[] = $row1;
        }
    }$query15 = "SELECT * FROM monthly_report_q15 WHERE username = '$user' AND month = '$month'";
    if (!$result15 = mysqli_query($connection, $query15)) {
        exit(mysqli_error($connection));
    }

    $users15 = array();
    if (mysqli_num_rows($result15) > 0) {
        while ($row1 = mysqli_fetch_assoc($result15)) {
            $users15[] = $row1;
        }
    }$query16 = "SELECT * FROM monthly_report_q16 WHERE username = '$user' AND month = '$month'";
    if (!$result16 = mysqli_query($connection, $query16)) {
        exit(mysqli_error($connection));
    }

    $users16 = array();
    if (mysqli_num_rows($result16) > 0) {
        while ($row1 = mysqli_fetch_assoc($result16)) {
            $users16[] = $row1;
        }
    }$query17 = "SELECT * FROM monthly_report_q17 WHERE username = '$user' AND month = '$month'";
    if (!$result17 = mysqli_query($connection, $query17)) {
        exit(mysqli_error($connection));
    }

    $users17 = array();
    if (mysqli_num_rows($result17) > 0) {
        while ($row1 = mysqli_fetch_assoc($result17)) {
            $users17[] = $row1;
        }
    }$query18 = "SELECT * FROM monthly_report_q18 WHERE username = '$user' AND month = '$month'";
    if (!$result18 = mysqli_query($connection, $query18)) {
        exit(mysqli_error($connection));
    }

    $users18 = array();
    if (mysqli_num_rows($result18) > 0) {
        while ($row1 = mysqli_fetch_assoc($result18)) {
            $users18[] = $row1;
        }
    }$query19 = "SELECT * FROM monthly_report_q19 WHERE username = '$user' AND month = '$month'";
    if (!$result19 = mysqli_query($connection, $query19)) {
        exit(mysqli_error($connection));
    }

    $users19 = array();
    if (mysqli_num_rows($result19) > 0) {
        while ($row1 = mysqli_fetch_assoc($result19)) {
            $users19[] = $row1;
        }
    }$query20 = "SELECT * FROM monthly_report_q20 WHERE username = '$user' AND month = '$month'";
    if (!$result20 = mysqli_query($connection, $query20)) {
        exit(mysqli_error($connection));
    }

    $users20 = array();
    if (mysqli_num_rows($result20) > 0) {
        while ($row1 = mysqli_fetch_assoc($result20)) {
            $users20[] = $row1;
        }
    }$query21 = "SELECT * FROM monthly_report_q21 WHERE username = '$user' AND month = '$month'";
    if (!$result21 = mysqli_query($connection, $query21)) {
        exit(mysqli_error($connection));
    }

    $users21 = array();
    if (mysqli_num_rows($result21) > 0) {
        while ($row1 = mysqli_fetch_assoc($result21)) {
            $users21[] = $row1;
        }
    }$query22 = "SELECT * FROM monthly_report_q22 WHERE username = '$user' AND month = '$month'";
    if (!$result22 = mysqli_query($connection, $query22)) {
        exit(mysqli_error($connection));
    }

    $users22 = array();
    if (mysqli_num_rows($result22) > 0) {
        while ($row1 = mysqli_fetch_assoc($result22)) {
            $users22[] = $row1;
        }
    }$query23 = "SELECT * FROM monthly_report_q23 WHERE username = '$user' AND month = '$month'";
    if (!$result23 = mysqli_query($connection, $query23)) {
        exit(mysqli_error($connection));
    }

    $users23 = array();
    if (mysqli_num_rows($result23) > 0) {
        while ($row1 = mysqli_fetch_assoc($result23)) {
            $users23[] = $row1;
        }
    }$query24 = "SELECT * FROM monthly_report_q24 WHERE username = '$user' AND month = '$month'";
    if (!$result24 = mysqli_query($connection, $query24)) {
        exit(mysqli_error($connection));
    }

    $users24 = array();
    if (mysqli_num_rows($result24) > 0) {
        while ($row1 = mysqli_fetch_assoc($result24)) {
            $users24[] = $row1;
        }
    }$query25 = "SELECT * FROM monthly_report_q25 WHERE username = '$user' AND month = '$month'";
    if (!$result25 = mysqli_query($connection, $query25)) {
        exit(mysqli_error($connection));
    }

    $users25 = array();
    if (mysqli_num_rows($result25) > 0) {
        while ($row1 = mysqli_fetch_assoc($result25)) {
            $users25[] = $row1;
        }
    }$query26 = "SELECT * FROM monthly_report_q26 WHERE username = '$user' AND month = '$month'";
    if (!$result26 = mysqli_query($connection, $query26)) {
        exit(mysqli_error($connection));
    }

    $users26 = array();
    if (mysqli_num_rows($result26) > 0) {
        while ($row1 = mysqli_fetch_assoc($result26)) {
            $users26[] = $row1;
        }
    }$query27 = "SELECT * FROM monthly_report_q27 WHERE username = '$user' AND month = '$month'";
    if (!$result27 = mysqli_query($connection, $query27)) {
        exit(mysqli_error($connection));
    }

    $users27 = array();
    if (mysqli_num_rows($result27) > 0) {
        while ($row1 = mysqli_fetch_assoc($result27)) {
            $users27[] = $row1;
        }
    }$query28 = "SELECT * FROM monthly_report_q28 WHERE username = '$user' AND month = '$month'";
    if (!$result28 = mysqli_query($connection, $query28)) {
        exit(mysqli_error($connection));
    }

    $users28 = array();
    if (mysqli_num_rows($result28) > 0) {
        while ($row1 = mysqli_fetch_assoc($result28)) {
            $users28[] = $row1;
        }
    }$query29 = "SELECT * FROM monthly_report_q29 WHERE username = '$user' AND month = '$month'";
    if (!$result29 = mysqli_query($connection, $query29)) {
        exit(mysqli_error($connection));
    }

    $users29 = array();
    if (mysqli_num_rows($result29) > 0) {
        while ($row1 = mysqli_fetch_assoc($result29)) {
            $users29[] = $row1;
        }
    }$query30 = "SELECT * FROM monthly_report_q30 WHERE username = '$user' AND month = '$month'";
    if (!$result30 = mysqli_query($connection, $query30)) {
        exit(mysqli_error($connection));
    }

    $users30 = array();
    if (mysqli_num_rows($result30) > 0) {
        while ($row1 = mysqli_fetch_assoc($result30)) {
            $users30[] = $row1;
        }
    }$query31 = "SELECT * FROM monthly_report_q31 WHERE username = '$user' AND month = '$month'";
    if (!$result31 = mysqli_query($connection, $query31)) {
        exit(mysqli_error($connection));
    }

    $users31 = array();
    if (mysqli_num_rows($result31) > 0) {
        while ($row1 = mysqli_fetch_assoc($result31)) {
            $users31[] = $row1;
        }
    }$query32 = "SELECT * FROM monthly_report_q32 WHERE username = '$user' AND month = '$month'";
    if (!$result32 = mysqli_query($connection, $query32)) {
        exit(mysqli_error($connection));
    }

    $users32 = array();
    if (mysqli_num_rows($result32) > 0) {
        while ($row1 = mysqli_fetch_assoc($result32)) {
            $users32[] = $row1;
        }
    }$query33 = "SELECT * FROM monthly_report_q33 WHERE username = '$user' AND month = '$month'";
    if (!$result33 = mysqli_query($connection, $query33)) {
        exit(mysqli_error($connection));
    }

    $users33 = array();
    if (mysqli_num_rows($result33) > 0) {
        while ($row1 = mysqli_fetch_assoc($result33)) {
            $users33[] = $row1;
        }
    }$query34 = "SELECT * FROM monthly_report_q34 WHERE username = '$user' AND month = '$month'";
    if (!$result34 = mysqli_query($connection, $query34)) {
        exit(mysqli_error($connection));
    }

    $users34 = array();
    if (mysqli_num_rows($result34) > 0) {
        while ($row1 = mysqli_fetch_assoc($result34)) {
            $users34[] = $row1;
        }
    }$query35 = "SELECT * FROM monthly_report_q35 WHERE username = '$user' AND month = '$month'";
    if (!$result35 = mysqli_query($connection, $query35)) {
        exit(mysqli_error($connection));
    }

    $users35 = array();
    if (mysqli_num_rows($result35) > 0) {
        while ($row1 = mysqli_fetch_assoc($result35)) {
            $users35[] = $row1;
        }
    }$query36 = "SELECT * FROM monthly_report_q36 WHERE username = '$user' AND month = '$month'";
    if (!$result36 = mysqli_query($connection, $query36)) {
        exit(mysqli_error($connection));
    }

    $users36 = array();
    if (mysqli_num_rows($result36) > 0) {
        while ($row1 = mysqli_fetch_assoc($result36)) {
            $users36[] = $row1;
        }
    }$query37 = "SELECT * FROM monthly_report_q37 WHERE username = '$user' AND month = '$month'";
    if (!$result37 = mysqli_query($connection, $query37)) {
        exit(mysqli_error($connection));
    }

    $users37 = array();
    if (mysqli_num_rows($result37) > 0) {
        while ($row1 = mysqli_fetch_assoc($result37)) {
            $users37[] = $row1;
        }
    }$query38 = "SELECT * FROM monthly_report_q38 WHERE username = '$user' AND month = '$month'";
    if (!$result38 = mysqli_query($connection, $query38)) {
        exit(mysqli_error($connection));
    }

    $users38 = array();
    if (mysqli_num_rows($result38) > 0) {
        while ($row1 = mysqli_fetch_assoc($result38)) {
            $users38[] = $row1;
        }
    }
    $filenamefinal = $month."_".$user."_Monthly_Report";
    header('Content-Type: text/csv; charset=utf-8');
    header("Content-Disposition: attachment; filename=$filenamefinal.csv");
    $output = fopen('php://output', 'w');
    fputcsv($output, array('username', 'Question', 'Answer', 'File Name' ));

    if (count($users1) > 0) {
        foreach ($users1 as $row) {
            fputcsv($output, $row);
        }
    }
    if (count($users2) > 0) {
        foreach ($users2 as $row) {
            fputcsv($output, $row);
        }
    }

    if (count($users3) > 0) {
        foreach ($users3 as $row) {
            fputcsv($output, $row);
        }
    }
    if (count($users4) > 0) {
        foreach ($users4 as $row) {
            fputcsv($output, $row);
        }
    }
    if (count($users5) > 0) {
        foreach ($users5 as $row) {
            fputcsv($output, $row);
        }
    }
    if (count($users6) > 0) {
        foreach ($users6 as $row) {
            fputcsv($output, $row);
        }
    }
    if (count($users7) > 0) {
        foreach ($users7 as $row) {
            fputcsv($output, $row);
        }
    }
    if (count($users8) > 0) {
        foreach ($users8 as $row) {
            fputcsv($output, $row);
        }
    }
    if (count($users9) > 0) {
        foreach ($users9 as $row) {
            fputcsv($output, $row);
        }
    }
    if (count($users10) > 0) {
        foreach ($users10 as $row) {
            fputcsv($output, $row);
        }
    }
    if (count($users11) > 0) {
        foreach ($users11 as $row) {
            fputcsv($output, $row);
        }
    }
    if (count($users12) > 0) {
        foreach ($users12 as $row) {
            fputcsv($output, $row);
        }
    }
    if (count($users13) > 0) {
        foreach ($users13 as $row) {
            fputcsv($output, $row);
        }
    }
    if (count($users14) > 0) {
        foreach ($users14 as $row) {
            fputcsv($output, $row);
        }
    }
    if (count($users15) > 0) {
        foreach ($users15 as $row) {
            fputcsv($output, $row);
        }
    }
    if (count($users16) > 0) {
        foreach ($users16 as $row) {
            fputcsv($output, $row);
        }
    }
    if (count($users17) > 0) {
        foreach ($users17 as $row) {
            fputcsv($output, $row);
        }
    }
    if (count($users18) > 0) {
        foreach ($users18 as $row) {
            fputcsv($output, $row);
        }
    }
    if (count($users19) > 0) {
        foreach ($users19 as $row) {
            fputcsv($output, $row);
        }
    }
    if (count($users20) > 0) {
        foreach ($users20 as $row) {
            fputcsv($output, $row);
        }
    }
    if (count($users21) > 0) {
        foreach ($users21 as $row) {
            fputcsv($output, $row);
        }
    }
    if (count($users22) > 0) {
        foreach ($users22 as $row) {
            fputcsv($output, $row);
        }
    }
    if (count($users23) > 0) {
        foreach ($users23 as $row) {
            fputcsv($output, $row);
        }
    }
    if (count($users24) > 0) {
        foreach ($users24 as $row) {
            fputcsv($output, $row);
        }
    }
    if (count($users25) > 0) {
        foreach ($users25 as $row) {
            fputcsv($output, $row);
        }
    }
    if (count($users26) > 0) {
        foreach ($users26 as $row) {
            fputcsv($output, $row);
        }
    }
    if (count($users27) > 0) {
        foreach ($users27 as $row) {
            fputcsv($output, $row);
        }
    }
    if (count($users28) > 0) {
        foreach ($users28 as $row) {
            fputcsv($output, $row);
        }
    }
    if (count($users29) > 0) {
        foreach ($users29 as $row) {
            fputcsv($output, $row);
        }
    }
    if (count($users30) > 0) {
        foreach ($users30 as $row) {
            fputcsv($output, $row);
        }
    }
    if (count($users31) > 0) {
        foreach ($users31 as $row) {
            fputcsv($output, $row);
        }
    }
    if (count($users32) > 0) {
        foreach ($users32 as $row) {
            fputcsv($output, $row);
        }
    }
    if (count($users33) > 0) {
        foreach ($users33 as $row) {
            fputcsv($output, $row);
        }
    }
    if (count($users34) > 0) {
        foreach ($users34 as $row) {
            fputcsv($output, $row);
        }
    }
    if (count($users35) > 0) {
        foreach ($users35 as $row) {
            fputcsv($output, $row);
        }
    }
    if (count($users36) > 0) {
        foreach ($users36 as $row) {
            fputcsv($output, $row);
        }
    }
    if (count($users37) > 0) {
        foreach ($users37 as $row) {
            fputcsv($output, $row);
        }
    }
    if (count($users38) > 0) {
        foreach ($users38 as $row) {
            fputcsv($output, $row);
        }
    }

$connection->close();
?>
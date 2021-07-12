<?php
   session_start();
   $username = $_SESSION['username'];
        include("../credential.php");
        $connection = mysqli_connect($servername, $username, $password, $dbname);

        // get Users
        $query = "SELECT * FROM academic_criteria_1 where user = '$username'";
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
        fputcsv($output, array('learning_objectives_are_clearly_defined_and_measurable', 'learning_objectives_are_inline_with_student_need', 'learning_are_inline_with_industry_need', 'content_development_is_inline_with_the_learning_objectives', 'content_revision_and_updating_is_done_regularly', 'curriculum_is_flexible_enough_to_incorporate_changes', 'choice_based_credit_system_is_followed_in_true_sense', 'programs_are_inline', 'new_program_started_in_last_one_year'));

        if (count($users) > 0) {
            foreach ($users as $row) {
                fputcsv($output, $row);
            }
        }
?>
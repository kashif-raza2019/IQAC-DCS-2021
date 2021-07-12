<?php
    /*
    =============PDF REPORT GENERATION PAGE=================
    ==================FOR DQAC====================
    ================CREATED ON: 08-05-2021==================

    */
    session_start();
      $servername = "172.16.1.12";
    $username = "iqac";
    $password = "@z[dgdMw3_pviR51";
    $dbname = "iqac_dcs";//should be chaged accordingly
    $dbname_log = "criteria_iqac_log";

    $connect = mysqli_connect($servername, $username, $password, $dbname);
   
    if(function_exists('date_default_timezone_set'))
    {
        date_default_timezone_set("Asia/Kolkata");
    }

    $month = $_GET['month'];
    //Including FPDF library
    require('../fpdf.php');
    // require('../wordwrap.php');
    class PDF extends FPDF
    {
        // Page header
        function Header()
        {
        $month = $_GET['month'];
        $user =  $_SESSION['username'];
            $this->SetFont('Arial', 'B',18);
            // Move to the right
            $this->Cell(50);
            // Title
            $this->Cell(200, 15, 'INTERNAL QUALITY ASSURANCE CELL', 1, 0, 'C');
            $this->Ln();
            $this->Cell(300,10,'MONTHLY REPORT',0,0,'C');
            $this->Ln(20);
           
        }
        function criteria(){
            $month = $_GET['month'];
            $name = $_SESSION['name'];
            $this->SetFont('Arial','B',16);
            $this->Cell(45, 10, 'Department: ', 1, 0, 'L');
            $this->Cell(235, 10,$name, 1, 0, 'L');
            $this->Ln(0);
        }
        function Footer()
        {
            $month = $_GET['month'];
            $currentDate = date("d-m-y");
            // Position at 1.5 cm from bottom
            $this->SetY(-15);
            // Arial italic 8
            $this->SetFont('Arial','I',8);
            // Page number
            $this->Cell(0,10,'Page '.$this->PageNo().'/{nb}',0,0,'L');

            $this->Cell(0, 10,$currentDate,0, 0, 'R');
            
        }
        function date_generate($connect){
            $month = $_GET['month'];
            $currentDate = date("d-m-y");
            $this->Ln(5);
            $user =  $_SESSION['username'];
            $date = mysqli_query($connect, "SELECT * FROM date_generate WHERE id= '2'");
            $res = mysqli_fetch_assoc($date);
            $dateSave = $res['date_save'];
            $this->Ln(5);
            $this->Cell(45, 10,'Date of Filling:', 1, 0, 'L');
            $this->SetFont('Arial','B',14);
            $this->Cell(235, 10, $dateSave, 1, 0, 'L');
            $this->Ln();
            $this->Cell(45, 10,'Date of Printing:', 1, 0, 'L');
            $this->SetFont('Arial','B',14);
            $this->Cell(235, 10, $currentDate, 1, 0, 'L');
            $this->Ln(20);

        }
        function viewTable($connect){
                $month = $_GET['month'];
                $user =  $_SESSION['username'];

                $answer1 = "";
                $filename1 = "";

                // Table 1 Printing Starts
                $result1 = mysqli_query($connect, "SELECT * FROM monthly_report_q1 WHERE username =  '$user' AND month = '$month'");
                if(mysqli_num_rows($result1)>0){
                    while($row1 = mysqli_fetch_assoc($result1)){
                        $answer1 = $row1['answer'];
                        $filename1 = $row1['file_name'];
                    }
                }
                $answer2 = "";
                $filename2 = "";

                // Table 2 Printing Starts
                $result2 = mysqli_query($connect, "SELECT * FROM monthly_report_q2 WHERE username =  '$user' AND month = '$month'");
                if(mysqli_num_rows($result2)>0){
                    while($row2 = mysqli_fetch_assoc($result2)){
                        $answer2 = $row2['answer'];
                        $filename2 = $row2['file_name'];
                    }
                }
                $answer3 = "";
                $filename3 = "";

                // Table 3 Printing Starts
                $result3 = mysqli_query($connect, "SELECT * FROM monthly_report_q3 WHERE username =  '$user' AND month = '$month'");
                if(mysqli_num_rows($result3)>0){
                    while($row3 = mysqli_fetch_assoc($result3)){
                        $answer3 = $row3['answer'];
                        $filename3 = $row3['file_name'];
                    }
                }
                $answer4 = "";
                $filename4 = "";

                // Table 4 Printing Starts
                $result4 = mysqli_query($connect, "SELECT * FROM monthly_report_q4 WHERE username =  '$user' AND month = '$month'");
                if(mysqli_num_rows($result4)>0){
                    while($row4 = mysqli_fetch_assoc($result4)){
                        $answer4 = $row4['answer'];
                        $filename4 = $row4['file_name'];
                    }
                }
                $answer5 = "";
                $filename5 = "";

                // Table 5 Printing Starts
                $result5 = mysqli_query($connect, "SELECT * FROM monthly_report_q5 WHERE username =  '$user' AND month = '$month'");
                if(mysqli_num_rows($result5)>0){
                    while($row5 = mysqli_fetch_assoc($result5)){
                        $answer5 = $row5['answer'];
                        $filename5 = $row5['file_name'];
                    }
                }
                $answer6 = "";
                $filename6 = "";

                // Table 6 Printing Starts
                $result6 = mysqli_query($connect, "SELECT * FROM monthly_report_q6 WHERE username =  '$user' AND month = '$month'");
                if(mysqli_num_rows($result6)>0){
                    while($row6 = mysqli_fetch_assoc($result6)){
                        $answer6 = $row6['answer'];
                        $filename6 = $row6['file_name'];
                    }
                }
                $answer7 = "";
                $filename7 = "";

                // Table 7 Printing Starts
                $result7 = mysqli_query($connect, "SELECT * FROM monthly_report_q7 WHERE username =  '$user' AND month = '$month'");
                if(mysqli_num_rows($result7)>0){
                    while($row7 = mysqli_fetch_assoc($result7)){
                        $answer7 = $row7['answer'];
                        $filename7 = $row7['file_name'];
                    }
                }
                $answer8 = "";
                $filename8 = "";

                // Table 8 Printing Starts
                $result8 = mysqli_query($connect, "SELECT * FROM monthly_report_q8 WHERE username =  '$user' AND month = '$month'");
                if(mysqli_num_rows($result8)>0){
                    while($row8 = mysqli_fetch_assoc($result8)){
                        $answer8 = $row8['answer'];
                        $filename8 = $row8['file_name'];
                    }
                }
                $answer9 = "";
                $filename9 = "";

                // Table 9 Printing Starts
                $result9 = mysqli_query($connect, "SELECT * FROM monthly_report_q9 WHERE username =  '$user' AND month = '$month'");
                if(mysqli_num_rows($result9)>0){
                    while($row9 = mysqli_fetch_assoc($result9)){
                        $answer9 = $row9['answer'];
                        $filename9 = $row9['file_name'];
                    }
                }
                $answer10 = "";
                $filename10 = "";

                // Table 10 Printing Starts
                $result10 = mysqli_query($connect, "SELECT * FROM monthly_report_q10 WHERE username =  '$user' AND month = '$month'");
                if(mysqli_num_rows($result10)>0){
                    while($row10 = mysqli_fetch_assoc($result10)){
                        $answer10 = $row10['answer'];
                        $filename10 = $row10['file_name'];
                    }
                }
                 $answer11 = "";
                $filename11 = "";

                // Table 11 Printing Starts
                $result11 = mysqli_query($connect, "SELECT * FROM monthly_report_q11 WHERE username =  '$user' AND month = '$month'");
                if(mysqli_num_rows($result11)>0){
                    while($row11 = mysqli_fetch_assoc($result11)){
                        $answer11 = $row11['answer'];
                        $filename11 = $row11['file_name'];
                    }
                }

                $answer12 = "";
                $filename12 = "";

                // Table 12 Printing Starts
                $result12 = mysqli_query($connect, "SELECT * FROM monthly_report_q12 WHERE username =  '$user' AND month = '$month'");
                if(mysqli_num_rows($result12)>0){
                    while($row12 = mysqli_fetch_assoc($result12)){
                        $answer12 = $row12['answer'];
                        $filename12 = $row12['file_name'];
                    }
                }
                $answer13 = "";
                $filename13 = "";

                // Table 13 Printing Starts
                $result13 = mysqli_query($connect, "SELECT * FROM monthly_report_q13 WHERE username =  '$user' AND month = '$month'");
                if(mysqli_num_rows($result13)>0){
                    while($row13 = mysqli_fetch_assoc($result13)){
                        $answer13 = $row13['answer'];
                        $filename13 = $row13['file_name'];
                    }
                }
                $answer14 = "";
                $filename14 = "";

                // Table 14 Printing Starts
                $result14 = mysqli_query($connect, "SELECT * FROM monthly_report_q14 WHERE username =  '$user' AND month = '$month'");
                if(mysqli_num_rows($result14)>0){
                    while($row14 = mysqli_fetch_assoc($result14)){
                        $answer14 = $row14['answer'];
                        $filename14 = $row14['file_name'];
                    }
                }
                $answer15 = "";
                $filename15 = "";

                // Table 15 Printing Starts
                $result15 = mysqli_query($connect, "SELECT * FROM monthly_report_q15 WHERE username =  '$user' AND month = '$month'");
                if(mysqli_num_rows($result15)>0){
                    while($row15 = mysqli_fetch_assoc($result15)){
                        $answer15 = $row15['answer'];
                        $filename15 = $row15['file_name'];
                    }
                }
                $answer16 = "";
                $filename16 = "";

                // Table 16 Printing Starts
                $result16 = mysqli_query($connect, "SELECT * FROM monthly_report_q16 WHERE username =  '$user' AND month = '$month'");
                if(mysqli_num_rows($result16)>0){
                    while($row16 = mysqli_fetch_assoc($result16)){
                        $answer16 = $row16['answer'];
                        $filename16 = $row16['file_name'];
                    }
                }
                $answer17 = "";
                $filename17 = "";

                // Table 17 Printing Starts
                $result17 = mysqli_query($connect, "SELECT * FROM monthly_report_q17 WHERE username =  '$user' AND month = '$month'");
                if(mysqli_num_rows($result17)>0){
                    while($row17 = mysqli_fetch_assoc($result17)){
                        $answer17 = $row17['answer'];
                        $filename17 = $row17['file_name'];
                    }
                }
                $answer18 = "";
                $filename18 = "";

                // Table 18 Printing Starts
                $result18 = mysqli_query($connect, "SELECT * FROM monthly_report_q18 WHERE username =  '$user' AND month = '$month'");
                if(mysqli_num_rows($result18)>0){
                    while($row18 = mysqli_fetch_assoc($result18)){
                        $answer18 = $row18['answer'];
                        $filename18 = $row18['file_name'];
                    }
                }
                $answer19 = "";
                $filename19 = "";

                // Table 19 Printing Starts
                $result19 = mysqli_query($connect, "SELECT * FROM monthly_report_q19 WHERE username =  '$user' AND month = '$month'");
                if(mysqli_num_rows($result19)>0){
                    while($row19 = mysqli_fetch_assoc($result19)){
                        $answer19 = $row19['answer'];
                        $filename19 = $row19['file_name'];
                    }
                }
                $answer20 = "";
                $filename20 = "";

                // Table 20 Printing Starts
                $result20 = mysqli_query($connect, "SELECT * FROM monthly_report_q20 WHERE username =  '$user' AND month = '$month'");
                if(mysqli_num_rows($result20)>0){
                    while($row20 = mysqli_fetch_assoc($result20)){
                        $answer20 = $row20['answer'];
                        $filename20 = $row20['file_name'];
                    }
                }
                $answer21 = "";
                $filename21 = "";

                // Table 21 Printing Starts
                $result21 = mysqli_query($connect, "SELECT * FROM monthly_report_q21 WHERE username =  '$user' AND month = '$month'");
                if(mysqli_num_rows($result21)>0){
                    while($row21 = mysqli_fetch_assoc($result21)){
                        $answer21 = $row21['answer'];
                        $filename21 = $row21['file_name'];
                    }
                }
                $answer22 = "";
                $filename22 = "";

                // Table 22 Printing Starts
                $result22 = mysqli_query($connect, "SELECT * FROM monthly_report_q22 WHERE username =  '$user' AND month = '$month'");
                if(mysqli_num_rows($result22)>0){
                    while($row22 = mysqli_fetch_assoc($result22)){
                        $answer22 = $row22['answer'];
                        $filename22 = $row22['file_name'];
                    }
                }
                $answer23 = "";
                $filename23 = "";

                // Table 23 Printing Starts
                $result23 = mysqli_query($connect, "SELECT * FROM monthly_report_q23 WHERE username =  '$user' AND month = '$month'");
                if(mysqli_num_rows($result23)>0){
                    while($row23 = mysqli_fetch_assoc($result23)){
                        $answer23 = $row23['answer'];
                        $filename23 = $row23['file_name'];
                    }
                }
                $answer24 = "";
                $filename24 = "";

                // Table 24 Printing Starts
                $result24 = mysqli_query($connect, "SELECT * FROM monthly_report_q24 WHERE username =  '$user' AND month = '$month'");
                if(mysqli_num_rows($result24)>0){
                    while($row24 = mysqli_fetch_assoc($result24)){
                        $answer24 = $row24['answer'];
                        $filename24 = $row24['file_name'];
                    }
                }
                $answer25 = "";
                $filename25 = "";

                // Table 25 Printing Starts
                $result25 = mysqli_query($connect, "SELECT * FROM monthly_report_q25 WHERE username =  '$user' AND month = '$month'");
                if(mysqli_num_rows($result25)>0){
                    while($row25 = mysqli_fetch_assoc($result25)){
                        $answer25 = $row25['answer'];
                        $filename25 = $row25['file_name'];
                    }
                }
                $answer26 = "";
                $filename26 = "";

                // Table 26 Printing Starts
                $result26 = mysqli_query($connect, "SELECT * FROM monthly_report_q26 WHERE username =  '$user' AND month = '$month'");
                if(mysqli_num_rows($result26)>0){
                    while($row26 = mysqli_fetch_assoc($result26)){
                        $answer26 = $row26['answer'];
                        $filename26 = $row26['file_name'];
                    }
                }
                $answer27 = "";
                $filename27 = "";

                // Table 27 Printing Starts
                $result27 = mysqli_query($connect, "SELECT * FROM monthly_report_q27 WHERE username =  '$user' AND month = '$month'");
                if(mysqli_num_rows($result27)>0){
                    while($row27 = mysqli_fetch_assoc($result27)){
                        $answer27 = $row27['answer'];
                        $filename27 = $row27['file_name'];
                    }
                }
                $answer28 = "";
                $filename28 = "";

                // Table 28 Printing Starts
                $result28 = mysqli_query($connect, "SELECT * FROM monthly_report_q28 WHERE username =  '$user' AND month = '$month'");
                if(mysqli_num_rows($result28)>0){
                    while($row28 = mysqli_fetch_assoc($result28)){
                        $answer28 = $row28['answer'];
                        $filename28 = $row28['file_name'];
                    }
                }
                $answer29 = "";
                $filename29 = "";

                // Table 29 Printing Starts
                $result29 = mysqli_query($connect, "SELECT * FROM monthly_report_q29 WHERE username =  '$user' AND month = '$month'");
                if(mysqli_num_rows($result29)>0){
                    while($row29 = mysqli_fetch_assoc($result29)){
                        $answer29 = $row29['answer'];
                        $filename29 = $row29['file_name'];
                    }
                }
                $answer30 = "";
                $filename30 = "";

                // Table 30 Printing Starts
                $result30 = mysqli_query($connect, "SELECT * FROM monthly_report_q30 WHERE username =  '$user' AND month = '$month'");
                if(mysqli_num_rows($result30)>0){
                    while($row30 = mysqli_fetch_assoc($result30)){
                        $answer30 = $row30['answer'];
                        $filename30 = $row30['file_name'];
                    }
                }
                $answer31 = "";
                $filename31 = "";

                // Table 31 Printing Starts
                $result31 = mysqli_query($connect, "SELECT * FROM monthly_report_q31 WHERE username =  '$user' AND month = '$month'");
                if(mysqli_num_rows($result31)>0){
                    while($row31 = mysqli_fetch_assoc($result31)){
                        $answer31 = $row31['answer'];
                        $filename31 = $row31['file_name'];
                    }
                }
                $answer32 = "";
                $filename32 = "";

                // Table 32 Printing Starts
                $result32 = mysqli_query($connect, "SELECT * FROM monthly_report_q32 WHERE username =  '$user' AND month = '$month'");
                if(mysqli_num_rows($result32)>0){
                    while($row32 = mysqli_fetch_assoc($result32)){
                        $answer32 = $row32['answer'];
                        $filename32 = $row32['file_name'];
                    }
                }
                $answer33 = "";
                $filename33 = "";

                // Table 33 Printing Starts
                $result33 = mysqli_query($connect, "SELECT * FROM monthly_report_q33 WHERE username =  '$user' AND month = '$month'");
                if(mysqli_num_rows($result33)>0){
                    while($row33 = mysqli_fetch_assoc($result33)){
                        $answer33 = $row33['answer'];
                        $filename33 = $row33['file_name'];
                    }
                }
                $answer34 = "";
                $filename34 = "";

                // Table 34 Printing Starts
                $result34 = mysqli_query($connect, "SELECT * FROM monthly_report_q34 WHERE username =  '$user' AND month = '$month'");
                if(mysqli_num_rows($result34)>0){
                    while($row34 = mysqli_fetch_assoc($result34)){
                        $answer34 = $row34['answer'];
                        $filename34 = $row34['file_name'];
                    }
                }
                $answer35 = "";
                $filename35 = "";

                // Table 35 Printing Starts
                $result35 = mysqli_query($connect, "SELECT * FROM monthly_report_q35 WHERE username =  '$user' AND month = '$month'");
                if(mysqli_num_rows($result35)>0){
                    while($row35 = mysqli_fetch_assoc($result35)){
                        $answer35 = $row35['answer'];
                        $filename35 = $row35['file_name'];
                    }
                }
                $answer36 = "";
                $filename36 = "";

                // Table 36 Printing Starts
                $result36 = mysqli_query($connect, "SELECT * FROM monthly_report_q36 WHERE username =  '$user' AND month = '$month'");
                if(mysqli_num_rows($result36)>0){
                    while($row36 = mysqli_fetch_assoc($result36)){
                        $answer36 = $row36['answer'];
                        $filename36 = $row36['file_name'];
                    }
                }
                $answer37 = "";
                $filename37 = "";

                // Table 37 Printing Starts
                $result37 = mysqli_query($connect, "SELECT * FROM monthly_report_q37 WHERE username =  '$user' AND month = '$month'");
                if(mysqli_num_rows($result37)>0){
                    while($row37 = mysqli_fetch_assoc($result37)){
                        $answer37 = $row37['answer'];
                        $filename37 = $row37['file_name'];
                    }
                }
                $answer38 = "";
                $filename38 = "";

                // Table 38 Printing Starts
                $result38 = mysqli_query($connect, "SELECT * FROM monthly_report_q38 WHERE username =  '$user' AND month = '$month'");
                if(mysqli_num_rows($result38)>0){
                    while($row38 = mysqli_fetch_assoc($result38)){
                        $answer38 = $row38['answer'];
                        $filename38 = $row38['file_name'];
                    }
                }

                
                

                $this->SetFont('Arial', 'B', 15);
                $this->Cell(15, 10, 'S.No', 1, 0, 'C');
                $this->Cell(265, 10, 'Parameters', 1, 0, 'C');
                $this->Ln();
                $i = 1;
                // Question 1
                $this->SetFont('Arial', 'B', 14);
                $this->Cell(280, 20, '1. Details of existing course(Subject) modified/updated', 1, 0, 'L');
                $this->Ln();
                $this->Cell(25, 20, 'Response', 1, 0, 'C');
                $this->SetFont('Arial', '', 12);
                $this->Cell(255, 20, $answer1 , 1, 'L');
                $this->Ln();
                $this->Cell(280, 20, $filename1, 1, 0, 'L');
                $this->Ln();

                $i++;
                // Question 2
                $this->SetFont('Arial', 'B', 14);
                $this->Cell(280, 20, '2. New Courses/ Subjects Introduced', 1, 0, 'L');
                $this->Ln();
                $this->Cell(25, 20, 'Response', 1, 0, 'C');
                $this->SetFont('Arial', '', 12);
                $this->Cell(255, 20, $answer2 , 1, 'L');
                $this->Ln();
                $this->Cell(280, 20, $filename2, 1, 0, 'L');
                $this->Ln();

                $i++;
                // Question 3
                $this->SetFont('Arial', 'B', 14);
                $this->Cell(280, 20, '3. New Program Started', 1, 0, 'L');
                $this->Ln();
                $this->Cell(25, 20, 'Response', 1, 0, 'C');
                $this->SetFont('Arial', '', 12);
                $this->Cell(255, 20, $answer3 , 1, 'L');
                $this->Ln();
                $this->Cell(280, 20, $filename3, 1, 0, 'L');
                $this->Ln();
                $i++;
                // Question 4
                $this->SetFont('Arial', 'B', 14);
                $this->Cell(280, 20, '4. Guest lecturers /workshops/Seminars/Webinars organized', 1, 0, 'L');
                $this->Ln();
                $this->Cell(25, 20, 'Response', 1, 0, 'C');
                $this->SetFont('Arial', '', 12);
                $this->Cell(255, 20, $answer4 , 1, 'L');
                $this->Ln();
                $this->Cell(280, 20, $filename4, 1, 0, 'L');
                $this->Ln();
                $i++;
                // Question 5
                $this->SetFont('Arial', 'B', 14);
                $this->Cell(280, 20, '5. Innovative teaching method addded if any', 1, 0, 'L');
                $this->Ln();
                $this->Cell(25, 20, 'Response', 1, 0, 'C');
                $this->SetFont('Arial', '', 12);
                $this->Cell(255, 20, $answer5 , 1, 'L');
                $this->Ln();
                $this->Cell(280, 20, $filename5, 1, 0, 'L');
                $this->Ln();
                $i++;
                // Question 6
                $this->SetFont('Arial', 'B', 14);
                $this->Cell(280, 20, '6. Funds for research provided by the institute/department to faculty members', 1, 0, 'L');
                $this->Ln();
                $this->Cell(25, 20, 'Response', 1, 0, 'C');
                $this->SetFont('Arial', '', 12);
                $this->Cell(255, 20, $answer6 , 1, 'L');
                $this->Ln();
                $this->Cell(280, 20, $filename6, 1, 0, 'L');
                $this->Ln();
                $i++;
                // Question 7
                $this->SetFont('Arial', 'B', 14);
                $this->Cell(280, 20, '7. Research facilities like library, laboratory, databases etc. added', 1, 0, 'L');
                $this->Ln();
                $this->Cell(25, 20, 'Response', 1, 0, 'C');
                $this->SetFont('Arial', '', 12);
                $this->Cell(255, 20, $answer7 , 1, 'L');
                $this->Ln();
                $this->Cell(280, 20, $filename7, 1, 0, 'L');
                $this->Ln();
                $i++;
                // Question 8
                $this->SetFont('Arial', 'B', 14);
                $this->Cell(280, 20, '8. Monetary/non-monetary incentives given to faculty members to promote research culture', 1, 0, 'L');
                $this->Ln();
                $this->Cell(25, 20, 'Response', 1, 0, 'C');
                $this->SetFont('Arial', '', 12);
                $this->Cell(255, 20, $answer8 , 1, 'L');
                $this->Ln();
                $this->Cell(280, 20, $filename8, 1, 0, 'L');
                $this->Ln();
                $i++;
                // Question 9
                $this->SetFont('Arial', 'B', 14);
                $this->Cell(280, 20, '9. Research papers in national referred journals are published by faculty members as per UGC lis', 1, 0, 'L');
                $this->Ln();
                $this->Cell(25, 20, 'Response', 1, 0, 'C');
                $this->SetFont('Arial', '', 12);
                $this->Cell(255, 20, $answer9 , 1, 'L');
                $this->Ln();
                $this->Cell(280, 20, $filename9, 1, 0, 'L');
                $this->Ln();
                $i++;
                // Question 10
                $this->SetFont('Arial', 'B', 14);
                $this->Cell(280, 20, '10. Research paper in international refereed journals published by faculty members as per UGC list', 1, 0, 'L');
                $this->Ln();
                $this->Cell(25, 20, 'Response', 1, 0, 'C');
                $this->SetFont('Arial', '', 12);
                $this->Cell(255, 20, $answer10 , 1, 'L');
                $this->Ln();
                $this->Cell(280, 20, $filename10, 1, 0, 'L');
                $this->Ln();
                $i++;
                // Question 11
                $this->SetFont('Arial', 'B', 14);
                $this->Cell(280, 20, '11. Ph.D. awarded to students of faculty members', 1, 0, 'L');
                $this->Ln();
                $this->Cell(25, 20, 'Response', 1, 0, 'C');
                $this->SetFont('Arial', '', 12);
                $this->Cell(255, 20, $answer11 , 1, 'L');
                $this->Ln();
                $this->Cell(280, 20, $filename11, 1, 0, 'L');
                $this->Ln();
                $i++;
                // Question 12
                $this->SetFont('Arial', 'B', 14);
                $this->Cell(280, 20, '12. Faculty members completed their Ph.D.', 1, 0, 'L');
                $this->Ln();
                $this->Cell(25, 20, 'Response', 1, 0, 'C');
                $this->SetFont('Arial', '', 12);
                $this->Cell(255, 20, $answer12 , 1, 'L');
                $this->Ln();
                $this->Cell(280, 20, $filename12, 1, 0, 'L');
                $this->Ln();
                $i++;
                // Question 13
                $this->SetFont('Arial', 'B', 14);
                $this->Cell(280, 20, '13.  Books published by the faculty members', 1, 0, 'L');
                $this->Ln();
                $this->Cell(25, 20, 'Response', 1, 0, 'C');
                $this->SetFont('Arial', '', 12);
                $this->Cell(255, 20, $answer13 , 1, 'L');
                $this->Ln();
                $this->Cell(280, 20, $filename13, 1, 0, 'L');
                $this->Ln();
                $i++;
                // Question 14
                $this->SetFont('Arial', 'B', 14);
                $this->Cell(280, 20, '14. Book Chapters written by the faculty members', 1, 0, 'L');
                $this->Ln();
                $this->Cell(25, 20, 'Response', 1, 0, 'C');
                $this->SetFont('Arial', '', 12);
                $this->Cell(255, 20, $answer14 , 1, 'L');
                $this->Ln();
                $this->Cell(280, 20, $filename14, 1, 0, 'L');
                $this->Ln();
                $i++;
                // Question 15
                $this->SetFont('Arial', 'B', 14);
                $this->Cell(280, 20, '15. Papers presented in national conferences by faculty members', 1, 0, 'L');
                $this->Ln();
                $this->Cell(25, 20, 'Response', 1, 0, 'C');
                $this->SetFont('Arial', '', 12);
                $this->Cell(255, 20, $answer15 , 1, 'L');
                $this->Ln();
                $this->Cell(280, 20, $filename15, 1, 0, 'L');
                $this->Ln();
                $i++;
                // Question 16
                $this->SetFont('Arial', 'B', 14);
                $this->Cell(280, 20, '16.  Papers presented in International conferences by faculty members', 1, 0, 'L');
                $this->Ln();
                $this->Cell(25, 20, 'Response', 1, 0, 'C');
                $this->SetFont('Arial', '', 12);
                $this->Cell(255, 20, $answer16 , 1, 'L');
                $this->Ln();
                $this->Cell(280, 20, $filename16, 1, 0, 'L');
                $this->Ln();
                $i++;
                // Question 17
                $this->SetFont('Arial', 'B', 14);
                $this->Cell(280, 20, '17. Session Chaired in Conferences by faculty members', 1, 0, 'L');
                $this->Ln();
                $this->Cell(25, 20, 'Response', 1, 0, 'C');
                $this->SetFont('Arial', '', 12);
                $this->Cell(255, 20, $answer17 , 1, 'L');
                $this->Ln();
                $this->Cell(280, 20, $filename17, 1, 0, 'L');
                $this->Ln();
                $i++;
                // Question 18
                $this->SetFont('Arial', 'B', 14);
                $this->Cell(280, 20, '18. Consultancy projects undertaken by the faculty members', 1, 0, 'L');
                $this->Ln();
                $this->Cell(25, 20, 'Response', 1, 0, 'C');
                $this->SetFont('Arial', '', 12);
                $this->Cell(255, 20, $answer18 , 1, 'L');
                $this->Ln();
                $this->Cell(280, 20, $filename18, 1, 0, 'L');
                $this->Ln();
                $i++;
                // Question 19
                $this->SetFont('Arial', 'B', 14);
                $this->Cell(280, 20, '19. Funded projects taken up by the faculty members', 1, 0, 'L');
                $this->Ln();
                $this->Cell(25, 20, 'Response', 1, 0, 'C');
                $this->SetFont('Arial', '', 12);
                $this->Cell(255, 20, $answer19 , 1, 'L');
                $this->Ln();
                $this->Cell(280, 20, $filename19, 1, 0, 'L');
                $this->Ln();
                $i++;
                // Question 20
                $this->SetFont('Arial', 'B', 14);
                $this->Cell(280, 20, '20. e-Content/MOOC developed by the faculty members', 1, 0, 'L');
                $this->Ln();
                $this->Cell(25, 20, 'Response', 1, 0, 'C');
                $this->SetFont('Arial', '', 12);
                $this->Cell(255, 20, $answer20 , 1, 'L');
                $this->Ln();
                $this->Cell(280, 20, $filename20, 1, 0, 'L');
                $this->Ln();
                $i++;
                // Question 21
                $this->SetFont('Arial', 'B', 14);
                $this->Cell(280, 20, '21. Award/recognitions achieved by the faculty members', 1, 0, 'L');
                $this->Ln();
                $this->Cell(25, 20, 'Response', 1, 0, 'C');
                $this->SetFont('Arial', '', 12);
                $this->Cell(255, 20, $answer21 , 1, 'L');
                $this->Ln();
                $this->Cell(280, 20, $filename21, 1, 0, 'L');
                $this->Ln();
                $i++;
                // Question 22
                $this->SetFont('Arial', 'B', 14);
                $this->Cell(280, 20, '22. Collaborative Research activities under taken by the department', 1, 0, 'L');
                $this->Ln();
                $this->Cell(25, 20, 'Response', 1, 0, 'C');
                $this->SetFont('Arial', '', 12);
                $this->Cell(255, 20, $answer22 , 1, 'L');
                $this->Ln();
                $this->Cell(280, 20, $filename22, 1, 0, 'L');
                $this->Ln();
                $i++;
                // Question 23
                $this->SetFont('Arial', 'B', 14);
                $this->Cell(280, 20, '23.  Consultancy projects which lead to solution of specific social/business problems', 1, 0, 'L');
                $this->Ln();
                $this->Cell(25, 20, 'Response', 1, 0, 'C');
                $this->SetFont('Arial', '', 12);
                $this->Cell(255, 20, $answer23, 1, 'L');
                $this->Ln();
                $this->Cell(280, 20, $filename23, 1, 0, 'L');
                $this->Ln();
                $i++;
                // Question 24
                $this->SetFont('Arial', 'B', 14);
                $this->Cell(280, 20, '24. Patents/Trademark taken by faculty members', 1, 0, 'L');
                $this->Ln();
                $this->Cell(25, 20, 'Response', 1, 0, 'C');
                $this->SetFont('Arial', '', 12);
                $this->Cell(255, 20, $answer24 , 1, 'L');
                $this->Ln();
                $this->Cell(280, 20, $filename24, 1, 0, 'L');
                $this->Ln();
                $i++;
                // Question 25
                $this->SetFont('Arial', 'B', 14);
                $this->Cell(280, 20, '25. New MOU/ Collaboration', 1, 0, 'L');
                $this->Ln();
                $this->Cell(25, 20, 'Response', 1, 0, 'C');
                $this->SetFont('Arial', '', 12);
                $this->Cell(255, 20, $answer25, 1, 'L');
                $this->Ln();
                $this->Cell(280, 20, $filename25, 1, 0, 'L');
                $this->Ln();
                $i++;
                // Question 26
                $this->SetFont('Arial', 'B', 14);
                $this->Cell(280, 20, '26. New Physical/Infrastructural facility added', 1, 0, 'L');
                $this->Ln();
                $this->Cell(25, 20, 'Response', 1, 0, 'C');
                $this->SetFont('Arial', '', 12);
                $this->Cell(255, 20, $answer26 , 1, 'L');
                $this->Ln();
                $this->Cell(280, 20, $filename26, 1, 0, 'L');
                $this->Ln();
                $i++;
                // Question 27
                $this->SetFont('Arial', 'B', 14);
                $this->Cell(280, 20, '27. Co-curricular/Skill Development activities for students organised', 1, 0, 'L');
                $this->Ln();
                $this->Cell(25, 20, 'Response', 1, 0, 'C');
                $this->SetFont('Arial', '', 12);
                $this->Cell(255, 20, $answer27 , 1, 'L');
                $this->Ln();
                $this->Cell(280, 20, $filename27, 1, 0, 'L');
                $this->Ln();
                $i++;
                // Question 28
                $this->SetFont('Arial', 'B', 14);
                $this->Cell(280, 20, '28. Sports/Cultural activities organised', 1, 0, 'L');
                $this->Ln();
                $this->Cell(25, 20, 'Response', 1, 0, 'C');
                $this->SetFont('Arial', '', 12);
                $this->Cell(255, 20, $answer28 , 1, 'L');
                $this->Ln();
                $this->Cell(280, 20, $filename28, 1, 0, 'L');
                $this->Ln();
                $i++;
                // Question 29
                $this->SetFont('Arial', 'B', 14);
                $this->Cell(280, 20, '29.  Campus Placement Details', 1, 0, 'L');
                $this->Ln();
                $this->Cell(25, 20, 'Response', 1, 0, 'C');
                $this->SetFont('Arial', '', 12);
                $this->Cell(255, 20, $answer29 , 1, 'L');
                $this->Ln();
                $this->Cell(280, 20, $filename29, 1, 0, 'L');
                $this->Ln();
                $i++;
                // Question 30
                $this->SetFont('Arial', 'B', 14);
                $this->Cell(280, 20, '30. Scholary Acheivement of Students', 1, 0, 'L');
                $this->Ln();
                $this->Cell(25, 20, 'Response', 1, 0, 'C');
                $this->SetFont('Arial', '', 12);
                $this->Cell(255, 20, $answer30 , 1, 'L');
                $this->Ln();
                $this->Cell(280, 20, $filename30, 1, 0, 'L');
                $this->Ln();
                $i++;
                // Question 31
                $this->SetFont('Arial', 'B', 14);
                $this->Cell(280, 20, '31. Extracurricular Acheivement of the Student', 1, 0, 'L');
                $this->Ln();
                $this->Cell(25, 20, 'Response', 1, 0, 'C');
                $this->SetFont('Arial', '', 12);
                $this->Cell(255, 20, $answer31 , 1, 'L');
                $this->Ln();
                $this->Cell(280, 20, $filename31, 1, 0, 'L');
                $this->Ln();
                $i++;
                // Question 32
                $this->SetFont('Arial', 'B', 14);
                $this->Cell(280, 20, '32. Faculty welfare activities carried out', 1, 0, 'L');
                $this->Ln();
                $this->Cell(25, 20, 'Response', 1, 0, 'C');
                $this->SetFont('Arial', '', 12);
                $this->Cell(255, 20, $answer32 , 1, 'L');
                $this->Ln();
                $this->Cell(280, 20, $filename32, 1, 0, 'L');
                $this->Ln();
                $i++;
                // Question 33
                $this->SetFont('Arial', 'B', 14);
                $this->Cell(280, 20, '33. Faculty motivational activities carried out', 1, 0, 'L');
                $this->Ln();
                $this->Cell(25, 20, 'Response', 1, 0, 'C');
                $this->SetFont('Arial', '', 12);
                $this->Cell(255, 20, $answer33 , 1, 'L');
                $this->Ln();
                $this->Cell(280, 20, $filename33, 1, 0, 'L');
                $this->Ln();
                $i++;
                // Question 34
                $this->SetFont('Arial', 'B', 14);
                $this->Cell(280, 20, '34. Non-Teaching Staff welfare activities carried out', 1, 0, 'L');
                $this->Ln();
                $this->Cell(25, 20, 'Response', 1, 0, 'C');
                $this->SetFont('Arial', '', 12);
                $this->Cell(255, 20, $answer34 , 1, 'L');
                $this->Ln();
                $this->Cell(280, 20, $filename34, 1, 0, 'L');
                $this->Ln();
                $i++;
                // Question 35
                $this->SetFont('Arial', 'B', 14);
                $this->Cell(280, 20, '35. Non-Teaching Staff motivational activities carried out', 1, 0, 'L');
                $this->Ln();
                $this->Cell(25, 20, 'Response', 1, 0, 'C');
                $this->SetFont('Arial', '', 12);
                $this->Cell(255, 20, $answer35 , 1, 'L');
                $this->Ln();
                $this->Cell(280, 20, $filename35, 1, 0, 'L');
                $this->Ln();
                $i++;
                // Question 36
                $this->SetFont('Arial', 'B', 14);
                $this->Cell(280, 20, '36. Energy and Environmental concern related initiatives', 1, 0, 'L');
                $this->Ln();
                $this->Cell(25, 20, 'Response', 1, 0, 'C');
                $this->SetFont('Arial', '', 12);
                $this->Cell(255, 20, $answer36 , 1, 'L');
                $this->Ln();
                $this->Cell(280, 20, $filename36, 1, 0, 'L');
                $this->Ln();
                $i++;
                // Question 37
                $this->SetFont('Arial', 'B', 14);
                $this->Cell(280, 20, '37. Extension Activities conducted', 1, 0, 'L');
                $this->Ln();
                $this->Cell(25, 20, 'Response', 1, 0, 'C');
                $this->SetFont('Arial', '', 12);
                $this->Cell(255, 20, $answer37 , 1, 'L');
                $this->Ln();
                $this->Cell(280, 20, $filename37, 1, 0, 'L');
                $this->Ln();
                $i++;
                // Question 38
                $this->SetFont('Arial', 'B', 14);
                $this->Cell(280, 20, '38. Any other achievement/remarkable development/contribution', 1, 0, 'L');
                $this->Ln();
                $this->Cell(25, 20, 'Response', 1, 0, 'C');
                $this->SetFont('Arial', '', 12);
                $this->Cell(255, 20, $answer38, 1, 'L');
                $this->Ln();
                $this->Cell(280, 20, $filename38, 1, 0, 'L');
                $this->Ln();
                $i++;
                $this->Ln(30);
                $this->Cell(50, 10, '', 'B', 0, 'C');
                $this->Ln(10);
                $this->Cell(50, 10,'Authorised Signatory', 0, 0, 'C');
                $this->Ln(30);
                $this->Cell(290, 10, '***End of the Document***', 0, 0, 'C');
        
        
        }

      
    }

    
    
    // Instanciation of inherited class
    $pdf = new PDF();
    $pdf->AliasNbPages();
    $pdf->SetTitle('Monthly Report');
    $pdf->AddPage('L');
    $pdf->criteria();
    $pdf->date_generate($connect);
    $pdf->viewTable($connect);
    $pdf->Output();
?>
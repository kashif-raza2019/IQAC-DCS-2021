<?php
    /*
    =============PDF REPORT GENERATION PAGE=================
    ==================FOR ACADMEIC AUDIT====================
    ================CREATED ON: 29-04-2021==================

    */
    session_start();
    include('../credential.php');
    $connect = mysqli_connect($servername, $username, $password, $dbname);
   
    if(function_exists('date_default_timezone_set'))
    {
        date_default_timezone_set("Asia/Kolkata");
    }
  
    //Including FPDF library
    require('../fpdf.php');
    // require('../wordwrap.php');
    class PDF extends FPDF
    {
        // Page header
        function Header()
        {
        $user = $_SESSION['username'];
            // Logo
            $this->Image('../davvlogo.png',10,6,18);
            // Arial bold 15
            $this->SetFont('Arial', 'B',14);
            // Move to the right
            $this->Cell(80);
            // Title
            $this->Cell(40, 15, 'INTERNAL QUALITY ASSURANCE CELL', 0, 0, 'C');
            $this->Ln();
            $this->Cell(200,10,'ACADEMIC CRITERIA',0,0,'C');
            $this->Ln(20);
           
        }
        function criteria(){
            $name = $_SESSION['name'];
            $this->SetFont('Arial','B',16);
            $this->Cell(200, 10,$name, 0, 0, 'C');
            $this->Ln(10);
        }
        function Footer()
        {
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
            $user = $_SESSION['username'];
            $date = mysqli_query($connect, "SELECT * FROM date_generate WHERE id= '1'");
            $res = mysqli_fetch_assoc($date);
            $dateSave = $res['date_save'];
            $this->Ln(5);
            $this->Cell(45, 10,'Date of Filling:', 1, 0, 'L');
            $this->SetFont('Arial','',14);
            $this->Cell(55, 10, $dateSave, 1, 0, 'C');
            $this->Ln(20);
        }
        function viewTable1($connect){
                $user = $_SESSION['username'];

                // Table 1 Printing Starts
                $result = mysqli_query($connect, "SELECT * FROM academic_criteria_1 WHERE user = '$user'");
                $this->SetFont('Arial', 'B', 15);
                $this->Cell(40, 10, ' 1.  Curriculum Development',0, 0, 'L');
                $this->Ln(10);
                $this->Cell(20, 10, 'S.No', 1, 0, 'C');
                $this->Cell(135, 10, 'Parameters', 1, 0, 'C');
                $this->Cell(40, 10, 'Response', 1, 0, 'C');
                $this->Ln();

                while($row = mysqli_fetch_assoc($result)){
                    $i = 1;
                    $this->SetFont('Arial','',14);
                    $this->Cell(20, 10, $i , 1, 0, 'C');
                    $this->Cell(135, 10,'Learning objectives are clearly defined and measurable', 1, 0, 'L');
                    $this->Cell(40, 10, $row['learning_objectives_are_clearly_defined_and_measurable'], 1, 0, 'C');
                    $this->Ln();
                    $i++;
                    $this->SetFont('Arial','',14);
                    $this->Cell(20, 10, $i , 1, 0, 'C');
                    $this->Cell(135, 10,'Learning objectives are in line with student needs', 1, 0, 'L');
                    $this->Cell(40, 10, $row['learning_objectives_are_inline_with_student_need'], 1, 0, 'C');
                    $this->Ln();
                    $i++;
                    $this->SetFont('Arial','',14);
                    $this->Cell(20, 10, $i , 1, 0, 'C');
                    $this->Cell(135, 10,'Learning objectives are in line with industry needs', 1, 0, 'L');
                    $this->Cell(40, 10, $row['learning_are_inline_with_industry_need'], 1, 0, 'C');
                    $this->Ln();
                    $i++;
                    $this->SetFont('Arial','',14);
                    $this->Cell(20, 10, $i , 1, 0, 'C');
                    $this->Cell(135, 10,'Content development is in line with the learning objectives', 1, 0, 'L');
                    $this->Cell(40, 10, $row['content_development_is_inline_with_the_learning_objectives'], 1, 0, 'C');
                    $this->Ln();
                    $i++;
                    $this->SetFont('Arial','',14);
                    $this->Cell(20, 10, $i , 1, 0, 'C');
                    $this->Cell(135, 10,'Content revision and updating is done regularly', 1, 0, 'L');
                    $this->Cell(40, 10, $row['content_revision_and_updating_is_done_regularly'], 1, 0, 'C');
                    $i++;
                    $this->Ln();
                    $this->SetFont('Arial','',14);
                    $this->Cell(20, 10, $i , 1, 0, 'C');
                    $this->Cell(135, 10,'Curriculum is flexible enough to incorporate changes', 1, 0, 'L');
                    $this->Cell(40, 10, $row['curriculum_is_flexible_enough_to_incorporate_changes'], 1, 0, 'C');
                    $i++;
                    $this->Ln();
                    $this->SetFont('Arial','',14);
                    $this->Cell(20, 10, $i , 1, 0, 'C');
                    $this->Cell(135, 10,'Choice Based Credit System is followed in true sense', 1, 0, 'L');
                    $this->Cell(40, 10, $row['choice_based_credit_system_is_followed_in_true_sense'], 1, 0, 'C');
                    $this->Ln();
                    $i++;
                    $this->SetFont('Arial','',14);
                    $this->Cell(20, 10, $i , 1, 0, 'C');
                    $this->Cell(135, 10,'Programs are in line with mission and vision of Dept. & Univ.', 1, 0, 'L');
                    $this->Cell(40, 10, $row['programs_are_inline'], 1, 0, 'C');
                    $this->Ln();
                    $i++;
                    $this->SetFont('Arial','',14);
                    $this->Cell(20, 10, $i , 1, 0, 'C');
                    $this->Cell(135, 10,'New Program Started in Last One Year', 1, 0, 'L');
                    $this->Cell(40, 10, $row['new_program_started_in_last_one_year'], 1, 0, 'C');
                    $this->Ln(10);
                }
                // TABLE 1 Printing Ends
                $this->Ln();

                // Table 2 Printing Starts
        
        
        
        
        }

        function viewTable2($connect){
            $user = $_SESSION['username'];
    
            // Table 5 Printing Starts
            $result = mysqli_query($connect, "SELECT * FROM academic_criteria_2 WHERE user = '$user'");
            $this->SetFont('Arial', 'B', 15);
            $this->Cell(40, 10, ' 2.  Teaching and Learning Process',0, 0, 'L');
            $this->Ln(10);
            $this->Cell(20, 10, 'S.No', 1, 0, 'C');
            $this->Cell(135, 10, 'Parameters', 1, 0, 'C');
            $this->Cell(40, 10, 'Response', 1, 0, 'C');
            $this->Ln();
            // var_dump($result);
            while($row = mysqli_fetch_assoc($result)){
                $i = 1;
                $this->SetFont('Arial','',14);
                $this->Cell(20, 10, $i , 'L, T, R', 0, 'C');
                $this->Cell(135, 10,'Academic calendar is prepared and communicated', 'L, T, R', 0, 'L');
                $this->Cell(40, 10, $row['q1'], 'L, T, R', 0, 'C');
                $this->Ln();
                $this->Cell(20, 10, '' , 'L, B, R', 0, 'C');
                $this->Cell(135, 10, ' to the students', ' L, B, R', 0, 'L');
                $this->Cell(40, 10, '', 'L, B, R', 0, 'C');
                $this->Ln();
                $i++;
                $this->SetFont('Arial','',14);
                $this->Cell(20, 10, $i ,'L, T, R, B', 0, 'C');
                $this->Cell(135, 10,'Learning objectives are communicated to the students', 'L, T, R, B', 0, 'L');
                $this->Cell(40, 10, $row['q2'],'L, T, R, B', 0, 'C');
               
                $this->Ln();
                $i++;
                $this->SetFont('Arial','',14);
                $this->Cell(20, 10, $i , 'L, T, R', 0, 'C');
                $this->Cell(135, 10,'Syllabi and session plan/lecture plan is clearly', 'L, T, R', 0, 'L');
                $this->Cell(40, 10, $row['q3'], 'L, T, R', 0, 'C');
                $this->Ln();
                $this->Cell(20, 10, '' , 'L, B, R', 0, 'C');
                $this->Cell(135, 10, ' communicated to the students', ' L, B, R', 0, 'L');
                $this->Cell(40, 10, '', 'L, B, R', 0, 'C');
                $this->Ln();
                $i++;
                $this->SetFont('Arial','',14);
                $this->Cell(20, 10, $i , 1, 0, 'C');
                $this->Cell(135, 10,'Syllabi is completed as per the session plan/lecture plan', 1, 0, 'L');
                $this->Cell(40, 10, $row['q4'], 1, 0, 'C');
                $this->Ln();
                $i++;
                $this->SetFont('Arial','',14);
                $this->Cell(20, 10, $i , 1, 0, 'C');
                $this->Cell(135, 10,'Adequate amount of teaching material is provided', 1, 0, 'L');
                $this->Cell(40, 10, $row['q5'], 1, 0, 'C');
                $i++;
                $this->Ln();
                $this->SetFont('Arial','',14);
                $this->Cell(20, 10, $i , 1, 0, 'C');
                $this->Cell(135, 10,'Teaching pedagogy is in line with the learning objectives', 1, 0, 'L');
                $this->Cell(40, 10, $row['q6'], 1, 0, 'C');
                $i++;
                $this->Ln();
                $this->SetFont('Arial','',14);
                $this->Cell(20, 10, $i , 1, 0, 'C');
                $this->Cell(135, 10,'Faculty makes use of ICT in teaching', 1, 0, 'L');
                $this->Cell(40, 10, $row['q7'], 1, 0, 'C');
                $this->Ln();
                $i++;
                $this->SetFont('Arial','',14);
                $this->Cell(20, 10, $i , 1, 0, 'C');
                $this->Cell(135, 10,'Syllabi is completed within the stipulated period of time', 1, 0, 'L');
                $this->Cell(40, 10, $row['q8'], 1, 0, 'C');
                $this->Ln();
                $i++;
                $this->SetFont('Arial','',14);
                $this->Cell(20, 10, $i , 'L, T, R', 0, 'C');
                $this->Cell(135, 10,'Tutorials/Extra sessions/Remedial classes are conducted', 'L, T, R', 0, 'L');
                $this->Cell(40, 10, $row['q9'], 'L, T, R', 0, 'C');
                $this->Ln();
                $this->Cell(20, 10, '' , 'L, B, R', 0, 'C');
                $this->Cell(135, 10, '  as per requirement', ' L, B, R', 0, 'L');
                $this->Cell(40, 10, '', 'L, B, R', 0, 'C');
                $this->Ln(10);
                $i++;
                $this->SetFont('Arial','',14);
                $this->Cell(20, 10, $i , 1, 0, 'C');
                $this->Cell(135, 10,'Guest lecturers /workshops are organized on a regular basis', 1, 0, 'L');
                $this->Cell(40, 10, $row['q10'], 1, 0, 'C');
                $this->Ln(10);
                $i++;
                $this->SetFont('Arial','',14);
                $this->Cell(20, 10, $i , 'L, T, R', 0, 'C');
                $this->Cell(135, 10,'Innovative teaching methods are adopted by the faculty', 'L, T, R', 0, 'L');
                $this->Cell(40, 10, $row['q11'],'L, T, R', 0, 'C');
                $this->Ln();
                $this->Cell(20, 10, '' , 'L, B, R', 0, 'C');
                $this->Cell(135, 10, ' members', ' L, B, R', 0, 'L');
                $this->Cell(40, 10, '', 'L, B, R', 0, 'C');
                $this->Ln(10);
                $i++;
                $this->SetFont('Arial','',14);
                $this->Cell(20, 10, $i , 1, 0, 'C');
                $this->Cell(135, 10,'Teachers also perform the work of mentoring students', 1, 0, 'L');
                $this->Cell(40, 10, $row['q12'], 1, 0, 'C');
                $this->Ln(10);
            }
            // TABLE 1 Printing Ends
            $this->Ln(20);
    
        }
        function viewTable3($connect){
            $user = $_SESSION['username'];

            // Table 1 Printing Starts
            $result = mysqli_query($connect, "SELECT * FROM academic_criteria_3 WHERE user = '$user'");
            $this->SetFont('Arial', 'B', 15);
            $this->Cell(40, 10, ' 3.  Evaluation Process',0, 0, 'L');
            $this->Ln(10);
            $this->Cell(20, 10, 'S.No', 1, 0, 'C');
            $this->Cell(135, 10, 'Parameters', 1, 0, 'C');
            $this->Cell(40, 10, 'Response', 1, 0, 'C');
            $this->Ln();
            // var_dump($result);
            while($row = mysqli_fetch_assoc($result)){
                $i = 1;
                $this->SetFont('Arial','',14);
                $this->Cell(20, 10, $i , 'L,T,R', 0, 'C');
                $this->Cell(135, 10,'Evaluation criteria and process is clearly defined and ', 'L,T,R', 0, 'L');
                $this->Cell(40, 10, $row['q1'], 'L,T,R', 0, 'C');
                $this->Ln();
                $this->Cell(20, 10, '' , 'L, B, R', 0, 'C');
                $this->Cell(135, 10, 'communicated to the students', ' L, B, R', 0, 'L');
                $this->Cell(40, 10, '', 'L, B, R', 0, 'C');
                $this->Ln();
                $i++;
                $this->SetFont('Arial','',14);
                $this->Cell(20, 10, $i , 1, 0, 'C');
                $this->Cell(135, 10,'Transparency in examination is ensured', 1, 0, 'L');
                $this->Cell(40, 10, $row['q2'], 1, 0, 'C');
                $this->Ln();
                $i++;
                $this->SetFont('Arial','',14);
                $this->Cell(20, 10, $i , ' L, T, R', 0, 'C');
                $this->Cell(135, 10,'Students are communicated the examination schedule well in', ' L, T, R', 0, 'L');
                $this->Cell(40, 10, $row['q3'], ' L, T, R', 0, 'C');
                $this->Ln();
                $this->Cell(20, 10, '' , 'L, B, R', 0, 'C');
                $this->Cell(135, 10, ' advance', ' L, B, R', 0, 'L');
                $this->Cell(40, 10, '', 'L, B, R', 0, 'C');
                $this->Ln();
                $i++;
                $this->SetFont('Arial','',14);
                $this->Cell(20, 10, $i , ' L, T, R', 0, 'C');
                $this->Cell(135, 10,'Student is assessed on a continuous basis through various ', ' L, T, R', 0, 'L');
                $this->Cell(40, 10, $row['q4'], ' L, T, R', 0, 'C');
                $this->Ln();
                $this->Cell(20, 10, '' , 'L, B, R', 0, 'C');
                $this->Cell(135, 10, 'instruments', ' L, B, R', 0, 'L');
                $this->Cell(40, 10, '', 'L, B, R', 0, 'C');
                $this->Ln();
                $i++;
                $this->SetFont('Arial','',14);
                $this->Cell(20, 10, $i , 1, 0, 'C');
                $this->Cell(135, 10,'Transparency in evaluation is ensured', 1, 0, 'L');
                $this->Cell(40, 10, $row['q5'], 1, 0, 'C');
                $i++;
                $this->Ln();
                $this->SetFont('Arial','',14);
                $this->Cell(20, 10, $i , 1, 0, 'C');
                $this->Cell(135, 10,'Grievance handling mechanism exists in the institute/dept.', 1, 0, 'L');
                $this->Cell(40, 10, $row['q6'], 1, 0, 'C');
            }
            // TABLE 1 Printing Ends
            $this->Ln(20);
    
    }

    function viewTable4($connect){
        $user = $_SESSION['username'];

        // Table 1 Printing Starts
        $result = mysqli_query($connect, "SELECT * FROM academic_criteria_4 WHERE user = '$user'");
        $this->SetFont('Arial', 'B', 15);
        $this->Cell(40, 10, ' 4.  Research Activities',0, 0, 'L');
        $this->Ln(10);
        $this->Cell(20, 10, 'S.No', 1, 0, 'C');
        $this->Cell(135, 10, 'Parameters', 1, 0, 'C');
        $this->Cell(40, 10, 'Response', 1, 0, 'C');
        $this->Ln();
        // var_dump($result);
        while($row = mysqli_fetch_assoc($result)){
            $i = 1;
            $this->SetFont('Arial','',14);
            $this->Cell(20, 10, $i ,' L, T, R', 0, 'C');
            $this->Cell(135, 10,'Funds for research are provided by the institute/department', ' L, T, R', 0, 'L');
            $this->Cell(40, 10, $row['q1'], ' L, T, R', 0, 'C');
            $this->Ln();
            $this->Cell(20, 10, '' , 'L, B, R', 0, 'C');
            $this->Cell(135, 10, ' to faculty members', ' L, B, R', 0, 'L');
            $this->Cell(40, 10, '', 'L, B, R', 0, 'C');
            $this->Ln();
            $i++;
            $this->SetFont('Arial','',14);
            $this->Cell(20, 10, $i , ' L, T, R', 0, 'C');
            $this->Cell(135, 10,'Research facilities like library, laboratory, databases ', ' L, T, R', 0, 'L');
            $this->Cell(40, 10, $row['q2'], ' L, T, R', 0, 'C');
            $this->Ln();
            $this->Cell(20, 10, '' , 'L, B, R', 0, 'C');
            $this->Cell(135, 10, ' etc. are made available', ' L, B, R', 0, 'L');
            $this->Cell(40, 10, '', 'L, B, R', 0, 'C');
            $this->Ln();
            $i++;
            $this->SetFont('Arial','',14);
            $this->Cell(20, 10, $i ,' L, T, R', 0, 'C');
            $this->Cell(135, 10,'Monetary/non-monetary incentives given to faculty members  ', ' L, T, R', 0, 'L');
            $this->Cell(40, 10, $row['q3'], ' L, T, R', 0, 'C');
            $this->Ln();
            $this->Cell(20, 10, '' , 'L, B, R', 0, 'C');
            $this->Cell(135, 10, 'to promote research culture', ' L, B, R', 0, 'L');
            $this->Cell(40, 10, '', 'L, B, R', 0, 'C');
            $this->Ln();
            $i++;
            $this->SetFont('Arial','',14);
            $this->Cell(20, 10, $i , 1, 0, 'C');
            $this->Cell(135, 10,'Research cell exists in the institute/department', 1, 0, 'L');
            $this->Cell(40, 10, $row['q4'], 1, 0, 'C');
            $this->Ln();
            $i++;
            $this->SetFont('Arial','',14);
            $this->Cell(20, 10, $i ,' L, T, R', 0, 'C');
            $this->Cell(135, 10,'Research papers in national referred journals are ',' L, T, R', 0, 'L');
            $this->Cell(40, 10, $row['q5'], ' L, T, R', 0, 'C');
            $this->Ln();
            $this->Cell(20, 10, '' , 'L, B, R', 0, 'C');
            $this->Cell(135, 10, 'published by faculty members in last year as per UGC list', ' L, B, R', 0, 'L');
            $this->Cell(40, 10, '', 'L, B, R', 0, 'C');
            $i++;
            $this->Ln();
            $this->SetFont('Arial','',14);
            $this->Cell(20, 10, $i , ' L, T, R', 0, 'C');
            $this->Cell(135, 10,'Research paper in international refereed journals published ', ' L, T, R', 0, 'L');
            $this->Cell(40, 10, $row['q6'], ' L, T, R', 0, 'C');
            $this->Ln();
            $this->Cell(20, 10, '' , 'L, B, R', 0, 'C');
            $this->Cell(135, 10, 'by faculty members in last year as per UGC list', ' L, B, R', 0, 'L');
            $this->Cell(40, 10, '', 'L, B, R', 0, 'C');
            $this->Ln();
            $i++;
            $this->SetFont('Arial','',14);
            $this->Cell(20, 10, $i , 'L,T,R', 0, 'C');
            $this->Cell(135, 10,'Ph.D. awarded to students of faculty members in ', 'L,T,R', 0, 'L');
            $this->Cell(40, 10, $row['q7'], 'L,T,R', 0, 'C');
            $this->Ln();
            $this->Cell(20, 10, '' , 'L, B, R', 0, 'C');
            $this->Cell(135, 10, 'the last one year.', ' L, B, R', 0, 'L');
            $this->Cell(40, 10, '', 'L, B, R', 0, 'C');
            $this->Ln();
            $i++;
            $this->SetFont('Arial','',14);
            $this->Cell(20, 10, $i , 1, 0, 'C');
            $this->Cell(135, 10,'Faculty members completed their Ph.D. in the last one year', 1, 0, 'L');
            $this->Cell(40, 10, $row['q8'], 1, 0, 'C');
            $this->Ln();
            $i++;
            $this->SetFont('Arial','',14);
            $this->Cell(20, 10, $i , 1, 0, 'C');
            $this->Cell(135, 10,'Books are published by the faculty members', 1, 0, 'L');
            $this->Cell(40, 10, $row['q9'], 1, 0, 'C');
            $this->Ln();
            $i++;
            $this->SetFont('Arial','',14);
            $this->Cell(20, 10, $i , 1, 0, 'C');
            $this->Cell(135, 10,'Book Chapters are published by the faculty members', 1, 0, 'L');
            $this->Cell(40, 10, $row['q10'], 1, 0, 'C');
            $this->Ln();
            $i++;
            $this->SetFont('Arial','',14);
            $this->Cell(20, 10, $i , 'L,T,R', 0, 'C');
            $this->Cell(135, 10,'Papers are presented in national conferences by faculty', 'L,T,R', 0, 'L');
            $this->Cell(40, 10, $row['q11'], 'L,T,R', 0, 'C');
            $this->Ln();
            $this->Cell(20, 10, '' , 'L, B, R', 0, 'C');
            $this->Cell(135, 10, ' members', ' L, B, R', 0, 'L');
            $this->Cell(40, 10, '', 'L, B, R', 0, 'C');
            $i++;
            $this->Ln();
            $this->SetFont('Arial','',14);
            $this->Cell(20, 10, $i , 'L,T,R', 0, 'C');
            $this->Cell(135, 10,'Papers are presented in International conferences by', 'L,T,R', 0, 'L');
            $this->Cell(40, 10, $row['q12'], 'L,T,R', 0, 'C');
            $this->Ln();
            $this->Cell(20, 10, '' , 'L, B, R', 0, 'C');
            $this->Cell(135, 10, 'faculty members', ' L, B, R', 0, 'L');
            $this->Cell(40, 10, '', 'L, B, R', 0, 'C');
            $this->Ln();
            $i++;
            $this->SetFont('Arial','',14);
            $this->Cell(20, 10, $i , 1, 0, 'C');
            $this->Cell(135, 10,'Session Chaired in Conferences by faculty members', 1, 0, 'L');
            $this->Cell(40, 10, $row['q13'], 1, 0, 'C');
            $this->Ln();
            $i++;
            $this->SetFont('Arial','',14);
            $this->Cell(20, 10, $i , 1, 0, 'C');
            $this->Cell(135, 10,'Consultancy projects are undertaken by the faculty members', 1, 0, 'L');
            $this->Cell(40, 10, $row['q14'], 1, 0, 'C');
            $this->Ln();
            $i++;
            $this->SetFont('Arial','',14);
            $this->Cell(20, 10, $i , 1, 0, 'C');
            $this->Cell(135, 10,'Funded projects are taken up by the faculty members', 1, 0, 'L');
            $this->Cell(40, 10, $row['q15'], 1, 0, 'C');
            $this->Ln();
            $i++;
            $this->SetFont('Arial','',14);
            $this->Cell(20, 10, $i , 1, 0, 'C');
            $this->Cell(135, 10,'e-Content/MOOC developed by the faculty members', 1, 0, 'L');
            $this->Cell(40, 10, $row['q16'], 1, 0, 'C');
            $this->Ln();
            $i++;
            $this->SetFont('Arial','',14);
            $this->Cell(20, 10, $i , 1, 0, 'C');
            $this->Cell(135, 10,'Award/recognitions are achieved by the faculty members', 1, 0, 'L');
            $this->Cell(40, 10, $row['q17'], 1, 0, 'C');
            $i++;
            $this->Ln();
            $this->SetFont('Arial','',14);
            $this->Cell(20, 10, $i , 'L,T,R', 0, 'C');
            $this->Cell(135, 10,'Collaborative Research activities are under taken by', 'L,T,R', 0, 'L');
            $this->Cell(40, 10, $row['q18'], 'L,T,R', 0, 'C');
            $this->Ln();
            $this->Cell(20, 10, '' , 'L, B, R', 0, 'C');
            $this->Cell(135, 10, ' the department', ' L, B, R', 0, 'L');
            $this->Cell(40, 10, '', 'L, B, R', 0, 'C');
            $this->Ln();
            $i++;
            $this->SetFont('Arial','',14);
            $this->Cell(20, 10, $i , 'L, T, R', 0, 'C');
            $this->Cell(135, 10,'Consultancy projects which lead to solution of ', 'L, T, R', 0, 'L');
            $this->Cell(40, 10, $row['q19'], 'L, T, R', 0, 'C');
            $this->Ln();
            $this->Cell(20, 10, '' , 'L, B, R', 0, 'C');
            $this->Cell(135, 10, 'specific social/business problems.', ' L, B, R', 0, 'L');
            $this->Cell(40, 10, '', 'L, B, R', 0, 'C');
            $this->Ln();
            $i++;
            $this->SetFont('Arial','',14);
            $this->Cell(20, 10, $i , 1, 0, 'C');
            $this->Cell(135, 10,'Patents are taken by faculty members', 1, 0, 'L');
            $this->Cell(40, 10, $row['q20'], 1, 0, 'C');
            $i++;
            $this->Ln();
            $this->SetFont('Arial','',14);
            $this->Cell(20, 10, $i , 'L,T,R', 0, 'C');
            $this->Cell(135, 10,'Workshops, Seminars conducted by the Dept. at National', 'L,T,R', 0, 'L');
            $this->Cell(40, 10, $row['q21'], 'L,T,R', 0, 'C');
            $this->Ln();
            $this->Cell(20, 10, '' , 'L, B, R', 0, 'C');
            $this->Cell(135, 10, ' Level', ' L, B, R', 0, 'L');
            $this->Cell(40, 10, '', 'L, B, R', 0, 'C');
            $i++;
            $this->Ln();
            $this->SetFont('Arial','',14);
            $this->Cell(20, 10, $i , 1, 0, 'C');
            $this->Cell(135, 10,'Workshops, Seminars conduced at International level', 1, 0, 'L');
            $this->Cell(40, 10, $row['q22'], 1, 0, 'C');
            $i++;
            $this->Ln();
            $this->SetFont('Arial','',14);
            $this->Cell(20, 10, $i , 1, 0, 'C');
            $this->Cell(135, 10,'MOU/ Collaboration exists', 1, 0, 'L');
            $this->Cell(40, 10, $row['q23'], 1, 0, 'C');
        }
        // TABLE 1 Printing Ends
        $this->Ln(20);

    }
    function viewTable5($connect){
        $user = $_SESSION['username'];

        // Table 5 Printing Starts
        $result = mysqli_query($connect, "SELECT * FROM academic_criteria_5 WHERE user = '$user'");
        $this->SetFont('Arial', 'B', 15);
        $this->Cell(40, 10, ' 5.  Infrastructure and Learning Process',0, 0, 'L');
        $this->Ln(10);
        $this->Cell(20, 10, 'S.No', 1, 0, 'C');
        $this->Cell(135, 10, 'Parameters', 1, 0, 'C');
        $this->Cell(40, 10, 'Response', 1, 0, 'C');
        $this->Ln();
        // var_dump($result);
        while($row = mysqli_fetch_assoc($result)){
            $i = 1;
            $this->SetFont('Arial','',14);
            $this->Cell(20, 10, $i , 'L,T,R', 0, 'C');
            $this->Cell(135, 10,'Institution provides necessary facilities for teaching such', 'L,T,R', 0, 'L');
            $this->Cell(40, 10, $row['q1'], 'L,T,R', 0, 'C');
            $this->Ln();
            $this->Cell(20, 10, '' , 'L, B, R', 0, 'C');
            $this->Cell(135, 10, 'as class room, furniture etc.', ' L, B, R', 0, 'L');
            $this->Cell(40, 10, '', 'L, B, R', 0, 'C');
            $this->Ln();
            $i++;
            $this->SetFont('Arial','',14);
            $this->Cell(20, 10, $i , 'L,T,R', 0, 'C');
            $this->Cell(135, 10,'Washrooms, common rooms are available for boys and ', 'L,T,R', 0, 'L');
            $this->Cell(40, 10, $row['q2'], 'L,T,R', 0, 'C');
            $this->Ln();
            $this->Cell(20, 10, '' , 'L, B, R', 0, 'C');
            $this->Cell(135, 10, 'girls separately.', ' L, B, R', 0, 'L');
            $this->Cell(40, 10, '', 'L, B, R', 0, 'C');
            $this->Ln();
            $i++;
            $this->SetFont('Arial','',14);
            $this->Cell(20, 10, $i , 1, 0, 'C');
            $this->Cell(135, 10,'Cleanliness of Washrooms maintained Timely', 1, 0, 'L');
            $this->Cell(40, 10, $row['q3'], 1, 0, 'C');
            $this->Ln();
            $i++;
            $this->SetFont('Arial','',14);
            $this->Cell(20, 10, $i , 1, 0, 'C');
            $this->Cell(135, 10,'Classrooms are ICT enabled', 1, 0, 'L');
            $this->Cell(40, 10, $row['q4'], 1, 0, 'C');
            $this->Ln();
            $i++;
            $this->SetFont('Arial','',14);
            $this->Cell(20, 10, $i , 1, 0, 'C');
            $this->Cell(135, 10,'Computer lab is equipped with state-of-the-art facilities', 1, 0, 'L');
            $this->Cell(40, 10, $row['q5'], 1, 0, 'C');
            $i++;
            $this->Ln();
            $this->SetFont('Arial','',14);
            $this->Cell(20, 10, $i , 'L,T,R', 0, 'C');
            $this->Cell(135, 10,'Library is equipped with digital and non- digital', 'L,T,R', 0, 'L');
            $this->Cell(40, 10, $row['q6'], 'L,T,R', 0, 'C');
            $this->Ln();
            $this->Cell(20, 10, '' , 'L, B, R', 0, 'C');
            $this->Cell(135, 10, ' learning resources.', ' L, B, R', 0, 'L');
            $this->Cell(40, 10, '', 'L, B, R', 0, 'C');
            $i++;
            $this->Ln();
            $this->SetFont('Arial','',14);
            $this->Cell(20, 10, $i , 1, 0, 'C');
            $this->Cell(135, 10,'Library and computers are continuously upgraded', 1, 0, 'L');
            $this->Cell(40, 10, $row['q7'], 1, 0, 'C');
            $i++;
            $this->Ln();
            $this->SetFont('Arial','',14);
            $this->Cell(20, 10, $i , 1, 0, 'C');
            $this->Cell(135, 10,'Facilities for sports and extracurricular activities are provided', 1, 0, 'L');
            $this->Cell(40, 10, $row['q8'], 1, 0, 'C');
            $i++;
            $this->Ln();
            $this->SetFont('Arial','',14);
            $this->Cell(20, 10, $i , 'L,T,R', 0, 'C');
            $this->Cell(135, 10,'The Institute/department is equipped with multimedia ', 'L,T,R', 0, 'L');
            $this->Cell(40, 10, $row['q9'], 'L,T,R', 0, 'C');
            $this->Ln();
            $this->Cell(20, 10, '' , 'L, B, R', 0, 'C');
            $this->Cell(135, 10, 'theatre/auditorium.', ' L, B, R', 0, 'L');
            $this->Cell(40, 10, '', 'L, B, R', 0, 'C');
            $this->Ln(10);
            $i++;
            $this->SetFont('Arial','',14);
            $this->Cell(20, 10, $i , 'L,T,R', 0, 'C');
            $this->Cell(135, 10,'Proper maintenance of infrastructure is done from time to', 'L,T,R', 0, 'L');
            $this->Cell(40, 10, $row['q10'], 'L,T,R', 0, 'C');
            $this->Ln();
            $this->Cell(20, 10, '' , 'L, B, R', 0, 'C');
            $this->Cell(135, 10, ' time.', ' L, B, R', 0, 'L');
            $this->Cell(40, 10, '', 'L, B, R', 0, 'C');
            $this->Ln(10);
            $i++;
            $this->SetFont('Arial','',14);
            $this->Cell(20, 10, $i , 1, 0, 'C');
            $this->Cell(135, 10,'Facility of clean drinking water is available', 1, 0, 'L');
            $this->Cell(40, 10, $row['q11'], 1, 0, 'C');
            $this->Ln(10);
            $i++;
            $this->SetFont('Arial','',14);
            $this->Cell(20, 10, $i , 'L,T,R', 0, 'C');
            $this->Cell(135, 10,'The institute/department has refreshment centre for students', 'L,T,R', 0, 'L');
            $this->Cell(40, 10, $row['q12'], 'L,T,R', 0, 'C');
            $this->Ln();
            $this->Cell(20, 10, '' , 'L, B, R', 0, 'C');
            $this->Cell(135, 10, ' and facilities.', ' L, B, R', 0, 'L');
            $this->Cell(40, 10, '', 'L, B, R', 0, 'C');
            $this->Ln(10);
            $i++;
            $this->SetFont('Arial','',14);
            $this->Cell(20, 10, $i , 1, 0, 'C');
            $this->Cell(135, 10,'Divyang friendly Infrastructure is available', 1, 0, 'L');
            $this->Cell(40, 10, $row['q13'], 1, 0, 'C');
            $this->Ln(10);
            $i++;
            $this->SetFont('Arial','',14);
            $this->Cell(20, 10, $i , 1, 0, 'C');
            $this->Cell(135, 10,'Divyang friendly wash room facility is available', 1, 0, 'L');
            $this->Cell(40, 10, $row['q14'], 1, 0, 'C');
            $this->Ln(10);
        }
        // TABLE 1 Printing Ends
        $this->Ln(20);

    }
    function viewTable6($connect){
        $user = $_SESSION['username'];

        // Table 6 Printing Starts
        $result = mysqli_query($connect, "SELECT * FROM academic_criteria_6 WHERE user = '$user'");
        $this->SetFont('Arial', 'B', 15);
        $this->Cell(40, 10, ' 6.  Co-curricular Activities',0, 0, 'L');
        $this->Ln(10);
        $this->Cell(20, 10, 'S.No', 1, 0, 'C');
        $this->Cell(135, 10, 'Parameters', 1, 0, 'C');
        $this->Cell(40, 10, 'Response', 1, 0, 'C');
        $this->Ln();
        // var_dump($result);
        while($row = mysqli_fetch_assoc($result)){
            $i = 1;
            $this->SetFont('Arial','',14);
            $this->Cell(20, 10, $i , 'L,T,R', 0, 'C');
            $this->Cell(135, 10,'Adequate resources are available for sports, cultural ', 'L,T,R', 0, 'L');
            $this->Cell(40, 10, $row['q1'], 'L,T,R', 0, 'C');
            $this->Ln();
            $this->Cell(20, 10, '' , 'L, B, R', 0, 'C');
            $this->Cell(135, 10, 'and other activities.', ' L, B, R', 0, 'L');
            $this->Cell(40, 10, '', 'L, B, R', 0, 'C');
            $this->Ln();
            $i++;
            $this->SetFont('Arial','',14);
            $this->Cell(20, 10, $i , 1, 0, 'C');
            $this->Cell(135, 10,'Co-curricular activities are encouraged', 1, 0, 'L');
            $this->Cell(40, 10, $row['q2'], 1, 0, 'C');
            $this->Ln();
            $i++;
            $this->SetFont('Arial','',14);
            $this->Cell(20, 10, $i , 'L,T,R', 0, 'C');
            $this->Cell(135, 10,'Co-curricular activities are designed to ensure', 'L,T,R', 0, 'L');
            $this->Cell(40, 10, $row['q3'], 'L,T,R', 0, 'C');
            $this->Ln();
            $this->Cell(20, 10, '' , 'L, B, R', 0, 'C');
            $this->Cell(135, 10, ' overall development of the Student.', ' L, B, R', 0, 'L');
            $this->Cell(40, 10, '', 'L, B, R', 0, 'C');
            $this->Ln();
           
        }
        // TABLE 1 Printing Ends
        $this->Ln(20);

    }

    function viewTable7($connect){
        $user = $_SESSION['username'];

        // Table 1 Printing Starts
        $result = mysqli_query($connect, "SELECT * FROM academic_criteria_7 WHERE user = '$user'");
        $this->SetFont('Arial', 'B', 15);
        $this->Cell(40, 10, ' 7.  Other Activities Conducive for Academic Environment',0, 0, 'L');
        $this->Ln(10);
        $this->Cell(20, 10, 'S.No', 1, 0, 'C');
        $this->Cell(135, 10, 'Parameters', 1, 0, 'C');
        $this->Cell(40, 10, 'Response', 1, 0, 'C');
        $this->Ln();
        // var_dump($result);
        while($row = mysqli_fetch_assoc($result)){
            $i = 1;
            $this->SetFont('Arial','',14);
            $this->Cell(20, 10, $i , 1, 0, 'C');
            $this->Cell(135, 10,'Departmental Website Exists', 1, 0, 'L');
            $this->Cell(40, 10, $row['q1'], 1, 0, 'C');
            $this->Ln();
            $i++;
            $this->SetFont('Arial','',14);
            $this->Cell(20, 10, $i , 1, 0, 'C');
            $this->Cell(135, 10,'Departmental Website updated regularly', 1, 0, 'L');
            $this->Cell(40, 10, $row['q2'], 1, 0, 'C');
            $this->Ln();
            $i++;
            $this->SetFont('Arial','',14);
            $this->Cell(20, 10, $i , 1, 0, 'C');
            $this->Cell(135, 10,'Suggestion Box is placed in prominent places', 1, 0, 'L');
            $this->Cell(40, 10, $row['q3'], 1, 0, 'C');
            $this->Ln();
            $i++;
            $this->SetFont('Arial','',14);
            $this->Cell(20, 10, $i , 'L,T,R', 0, 'C');
            $this->Cell(135, 10,'Arrangements have been made to display achievements of','L,T,R', 0, 'L');
            $this->Cell(40, 10, $row['q4'], 'L,T,R', 0, 'C');
            $this->Ln();
            $this->Cell(20, 10, '' , 'L, B, R', 0, 'C');
            $this->Cell(135, 10, 'the students in academics,sports and extracurricular activities.', ' L, B, R', 0, 'L');
            $this->Cell(40, 10, '', 'L, B, R', 0, 'C');
            $this->Ln();
            $i++;
            $this->SetFont('Arial','',14);
            $this->Cell(20, 10, $i , 1, 0, 'C');
            $this->Cell(135, 10,'Formal Placement Cell is exists', 1, 0, 'L');
            $this->Cell(40, 10, $row['q5'], 1, 0, 'C');
            $i++;
            $this->Ln();
            $this->SetFont('Arial','',14);
            $this->Cell(20, 10, $i , 1, 0, 'C');
            $this->Cell(135, 10,'Activities of Career Development conducted', 1, 0, 'L');
            $this->Cell(40, 10, $row['q6'], 1, 0, 'C');
            $this->Ln();
            $i++;
            $this->SetFont('Arial','',14);
            $this->Cell(20, 10, $i , 1, 0, 'C');
            $this->Cell(135, 10,'Efforts made for Psychological Counselling of the Students', 1, 0, 'L');
            $this->Cell(40, 10, $row['q7'], 1, 0, 'C');
            $this->Ln();
            $i++;
            $this->SetFont('Arial','',14);
            $this->Cell(20, 10, $i , 1, 0, 'C');
            $this->Cell(135, 10,'Health Report Card of each Student is prepared', 1, 0, 'L');
            $this->Cell(40, 10, $row['q8'], 1, 0, 'C');
            $this->Ln();
            $i++;
            $this->SetFont('Arial','',14);
            $this->Cell(20, 10, $i , 1, 0, 'C');
            $this->Cell(135, 10,'Health Report Card of each faculty member is prepared', 1, 0, 'L');
            $this->Cell(40, 10, $row['q9'], 1, 0, 'C');
            $this->Ln();
            $i++;
            $this->SetFont('Arial','',14);
            $this->Cell(20, 10, $i , 1, 0, 'C');
            $this->Cell(135, 10,'Health Report Card of each staff member is prepared', 1, 0, 'L');
            $this->Cell(40, 10, $row['q10'], 1, 0, 'C');
            $this->Ln();
            $i++;
            $this->SetFont('Arial','',14);
            $this->Cell(20, 10, $i , 1, 0, 'C');
            $this->Cell(135, 10,'Faculty welfare activities carried out in last one year', 1, 0, 'L');
            $this->Cell(40, 10, $row['q11'], 1, 0, 'C');
            $i++;
            $this->Ln();
            $this->SetFont('Arial','',14);
            $this->Cell(20, 10, $i , 1, 0, 'C');
            $this->Cell(135, 10,'Faculty motivational activities carried out in last one year', 1, 0, 'L');
            $this->Cell(40, 10, $row['q12'], 1, 0, 'C');
            $i++;
            $this->SetFont('Arial','',14);
            $this->Cell(20, 10, $i , 1, 0, 'C');
            $this->Cell(135, 10,'Non-Teaching Staff welfare activities carried out in last one year', 1, 0, 'L');
            $this->Cell(40, 10, $row['q13'], 1, 0, 'C');
            $this->Ln();
            $i++;
            $this->SetFont('Arial','',14);
            $this->Cell(20, 10, $i , 'L,T,R', 0, 'C');
            $this->Cell(135, 10,'Non-Teaching Staff motivational activities carried out in last', 'L,T,R', 0, 'L');
            $this->Cell(40, 10, $row['q14'], 'L,T,R', 0, 'C');
            $this->Ln();
            $this->Cell(20, 10, '' , 'L, B, R', 0, 'C');
            $this->Cell(135, 10, ' one year.', ' L, B, R', 0, 'L');
            $this->Cell(40, 10, '', 'L, B, R', 0, 'C');
            $this->Ln();
            $i++;
            $this->SetFont('Arial','',14);
            $this->Cell(20, 10, $i , 1, 0, 'C');
            $this->Cell(135, 10,'Formal Alumni Cell Exists', 1, 0, 'L');
            $this->Cell(40, 10, $row['q15'], 1, 0, 'C');
            $this->Ln();
            $i++;
            $this->SetFont('Arial','',14);
            $this->Cell(20, 10, $i , 1, 0, 'C');
            $this->Cell(135, 10,'Activities of Alumni Interaction carried out in last one year', 1, 0, 'L');
            $this->Cell(40, 10, $row['q16'], 1, 0, 'C');
            $this->Ln();
            $i++;
            $this->SetFont('Arial','',14);
            $this->Cell(20, 10, $i , 'L,T,R', 0, 'C');
            $this->Cell(135, 10,'Activities for the training of Non-Teaching Staff conducted', 'L,T,R', 0, 'L');
            $this->Cell(40, 10, $row['q17'], 'L,T,R', 0, 'C');
            $this->Ln();
            $this->Cell(20, 10, '' , 'L, B, R', 0, 'C');
            $this->Cell(135, 10, 'in last one year.', ' L, B, R', 0, 'L');
            $this->Cell(40, 10, '', 'L, B, R', 0, 'C');
            $i++;
            $this->Ln();
            $this->SetFont('Arial','',14);
            $this->Cell(20, 10, $i , 1, 0, 'C');
            $this->Cell(135, 10,'Fire Safety Measures available', 1, 0, 'L');
            $this->Cell(40, 10, $row['q18'], 1, 0, 'C');
            $this->Ln();
            $i++;
            $this->SetFont('Arial','',14);
            $this->Cell(20, 10, $i , 1, 0, 'C');
            $this->Cell(135, 10,'Efforts on Energy Saving made in last one year', 1, 0, 'L');
            $this->Cell(40, 10, $row['q19'], 1, 0, 'C');
            $this->Ln();
            $i++;
            $this->SetFont('Arial','',14);
            $this->Cell(20, 10, $i , 1, 0, 'C');
            $this->Cell(135, 10,'Energy Audit conducted in last one year', 1, 0, 'L');
            $this->Cell(40, 10, $row['q20'], 1, 0, 'C');
            $i++;
            $this->Ln();
            $this->SetFont('Arial','',14);
            $this->Cell(20, 10, $i , 1, 0, 'C');
            $this->Cell(135, 10,'Environment Audit conducted in last one year', 1, 0, 'L');
            $this->Cell(40, 10, $row['q21'], 1, 0, 'C');
            $i++;
            $this->Ln();
            $this->SetFont('Arial','',14);
            $this->Cell(20, 10, $i , 1, 0, 'C');
            $this->Cell(135, 10,'Extension activities carried out in last one year', 1, 0, 'L');
            $this->Cell(40, 10, $row['q22'], 1, 0, 'C');
            $i++;
            $this->Ln();
            $this->SetFont('Arial','',14);
            $this->Cell(20, 10, $i , 1, 0, 'C');
            $this->Cell(135, 10,'Best Practice(s) identified', 1, 0, 'L');
            $this->Cell(40, 10, $row['q23'], 1, 0, 'C');
            $this->Ln(70);
            $this->Cell(195, 10, '***This is the End of The Document***', 0, 0, 'C');
        }
        // TABLE 1 Printing Ends
        $this->Ln(20);

    }

    }
    
    // Instanciation of inherited class
    $pdf = new PDF();
    $pdf->AliasNbPages();
    $pdf->SetTitle('academic_audit');
    $pdf->AddPage();
    $pdf->criteria();
    $pdf->date_generate($connect);
    $pdf->viewTable1($connect);
    $pdf->viewTable2($connect);
    $pdf->viewTable3($connect);
    $pdf->viewTable4($connect);
    $pdf->viewTable5($connect);
    $pdf->viewTable6($connect);
    $pdf->viewTable7($connect);
    $pdf->Output();
?>
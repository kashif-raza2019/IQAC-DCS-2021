<?php
    /*
    =============PDF REPORT GENERATION PAGE=================
    ==================FOR MONTHLY REPORT====================
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
            $this->SetFont('Arial', 'B',18);
            // Move to the right
            $this->Cell(50);
            // Title
            $this->Cell(200, 15, 'INTERNAL QUALITY ASSURANCE CELL', 1, 0, 'C');
            $this->Ln();
            $this->Cell(300,10,'D.Q.A.C COMPOSITION',0,0,'C');
            $this->Ln(20);
           
        }
        function criteria(){
            $name = $_SESSION['name'];
            $this->SetFont('Arial','B',16);
            $this->Cell(45, 10, 'Department: ', 1, 0, 'L');
            $this->Cell(235, 10,$name, 1, 0, 'L');
            $this->Ln(0);
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
            $currentDate = date("d-m-y");
            $this->Ln(5);
            $user = $_SESSION['username'];
            $date = mysqli_query($connect, "SELECT * FROM date_generate WHERE id= '5'");
            $res = mysqli_fetch_assoc($date);
            $dateSave = $res['date_save'];
            $this->Ln(5);
            $this->Cell(45, 10,'Date of Filling:', 1, 0, 'L');
            $this->SetFont('Arial','B',14);
            $this->Cell(235, 10, $dateSave, 1, 0, 'L');
            $this->Ln(10);
            $this->Cell(45, 10,'Date of Printing:', 1, 0, 'L');
            $this->SetFont('Arial','B',14);
            $this->Cell(235, 10, $currentDate, 1, 0, 'L');
            $this->Ln(20);
        }
        function viewTable($connect){
                $user = $_SESSION['username'];
                // Table 1 Printing Starts
                $result1 = mysqli_query($connect, "SELECT * FROM dqac_1 WHERE user = '$user'");
                
                
                $result2 = mysqli_query($connect, "SELECT * FROM dqac_2 WHERE user = '$user'");
                

                $result3 = mysqli_query($connect, "SELECT * FROM dqac_3 WHERE user = '$user'");
                

                $result4 = mysqli_query($connect, "SELECT * FROM dqac_4 WHERE user = '$user'");
               

                $result5 = mysqli_query($connect, "SELECT * FROM dqac_5 WHERE user = '$user'");
               

                $result6 = mysqli_query($connect, "SELECT * FROM dqac_5 WHERE user = '$user'");
                

                $result7 = mysqli_query($connect, "SELECT * FROM dqac_remark WHERE user = '$user'");
                

                $this->SetFont('Arial', 'B', 18);
                $this->Cell(70, 10, 'I.  Head of the Department', 0, 0, 'L');
                $this->Ln(10);
                $this->SetFont('Arial', 'B', 15);
                $this->Cell(80, 10, 'Name', 1, 0, 'C');
                $this->Cell(50, 10, 'Designation', 1, 0, 'C');
                $this->Cell(50, 10, 'Affiliation', 1, 0, 'C');
                $this->Cell(65, 10, 'Email Address', 1, 0, 'C');
                $this->Cell(35, 10, 'Contact', 1, 0, 'C');
                $this->Ln();
                $this->SetFont('Arial', '', 13);
                if(mysqli_num_rows($result1)>0){
                    while($row1 = mysqli_fetch_assoc($result1)){
                        $this->Cell(80, 10, $row1['name_head'], 1, 0, 'L');
                        $this->Cell(50, 10, $row1['designation'], 1, 0, 'L');
                        $this->Cell(50, 10, $row1['affiliation'], 1, 0, 'L');
                        $this->Cell(65, 10, $row1['email'], 1, 0, 'L');
                        $this->Cell(35, 10, $row1['contact'], 1, 0, 'L');
                        $this->Ln();
                    }    
                }else{
                    $this->Cell(280, 10, 'No Data Available', 1, 0, 'C');
                    $this->Ln();
                }
                $this->Ln(10);
                $this->SetFont('Arial', 'B', 18);
                $this->Cell(70, 10, 'II.  Senior Teachers', 0, 0, 'L');
                $this->Ln(10);
                $this->SetFont('Arial', 'B', 15);
                $this->Cell(15, 10, 'S.No', 1, 0, 'C');
                $this->Cell(75, 10, 'Name', 1, 0, 'C');
                $this->Cell(50, 10, 'Designation', 1, 0, 'C');
                $this->Cell(50, 10, 'Affiliation', 1, 0, 'C');
                $this->Cell(60, 10, 'Email Address', 1, 0, 'C');
                $this->Cell(30, 10, 'Contact', 1, 0, 'C');
                $this->Ln();
                $this->SetFont('Arial', '', 13);
                if(mysqli_num_rows($result2)>0){
                    while($row2 = mysqli_fetch_assoc($result2)){
                        $this->Cell(80, 10, $row2['name_head'], 1, 0, 'L');
                        $this->Cell(50, 10, $row2['designation'], 1, 0, 'L');
                        $this->Cell(50, 10, $row2['affiliation'], 1, 0, 'L');
                        $this->Cell(65, 10, $row2['email'], 1, 0, 'L');
                        $this->Cell(35, 10, $row2['contact'], 1, 0, 'L');
                        $this->Ln();
                    }    
                }else{
                    $this->Cell(280, 10, 'No Data Available', 1, 0, 'C');
                    $this->Ln();
                }

                $this->Ln(10);
                $this->SetFont('Arial', 'B', 18);
                $this->Cell(70, 10, 'III(a).  One Member from the Management', 0, 0, 'L');
                $this->Ln(10);
                $this->SetFont('Arial', 'B', 15);
                $this->Cell(15, 10, 'S.No', 1, 0, 'C');
                $this->Cell(75, 10, 'Name', 1, 0, 'C');
                $this->Cell(50, 10, 'Designation', 1, 0, 'C');
                $this->Cell(50, 10, 'Affiliation', 1, 0, 'C');
                $this->Cell(60, 10, 'Email Address', 1, 0, 'C');
                $this->Cell(30, 10, 'Contact', 1, 0, 'C');
                $this->Ln();
                $this->SetFont('Arial', '', 13);
                if(mysqli_num_rows($result3)>0){
                    while($row3 = mysqli_fetch_assoc($result3)){
                        $this->Cell(80, 10, $row3['name'], 1, 0, 'L');
                        $this->Cell(50, 10, $row3['designation'], 1, 0, 'L');
                        $this->Cell(50, 10, $row3['affiliation'], 1, 0, 'L');
                        $this->Cell(65, 10, $row3['email'], 1, 0, 'L');
                        $this->Cell(35, 10, $row3['contact'], 1, 0, 'L');
                        $this->Ln();
                    }    
                }else{
                    $this->Cell(280, 10, 'No Data Available', 1, 0, 'C');
                    $this->Ln();
                }

                $this->Ln(10);
                $this->SetFont('Arial', 'B', 18);
                $this->Cell(70, 10, 'III(b).  One/Two Nominees from Local Society, Students and Alumni', 0, 0, 'L');
                $this->Ln(10);
                $this->SetFont('Arial', 'B', 15);
                $this->Cell(15, 10, 'S.No', 1, 0, 'C');
                $this->Cell(75, 10, 'Name', 1, 0, 'C');
                $this->Cell(50, 10, 'Designation', 1, 0, 'C');
                $this->Cell(50, 10, 'Affiliation', 1, 0, 'C');
                $this->Cell(60, 10, 'Email Address', 1, 0, 'C');
                $this->Cell(30, 10, 'Contact', 1, 0, 'C');
                $this->Ln();
                $this->SetFont('Arial', '', 13);
                
                if(mysqli_num_rows($result4)>0){
                    while($row4 = mysqli_fetch_assoc($result4)){
                        $head = $row4['name'];
                        $this->Cell(80, 10, $head, 1, 0, 'L');
                        $this->Cell(50, 10, $row4['designation'], 1, 0, 'L');
                        $this->Cell(50, 10, $row4['affiliation'], 1, 0, 'L');
                        $this->Cell(65, 10, $row4['email'], 1, 0, 'L');
                        $this->Cell(35, 10, $row4['contact'], 1, 0, 'L');
                        $this->Ln();
                    }    
                }else{
                    $this->Cell(280, 10, 'No Data Available', 1, 0, 'C');
                    $this->Ln();
                }

                $this->Ln(10);
                $this->SetFont('Arial', 'B', 18);
                $this->Cell(70, 10, 'IV.  One/Two Nominees From Employer/Industrialist/Stakeholders', 0, 0, 'L');
                $this->Ln(10);
                $this->SetFont('Arial', 'B', 15);
                $this->Cell(15, 10, 'S.No', 1, 0, 'C');
                $this->Cell(75, 10, 'Name', 1, 0, 'C');
                $this->Cell(50, 10, 'Designation', 1, 0, 'C');
                $this->Cell(50, 10, 'Affiliation', 1, 0, 'C');
                $this->Cell(60, 10, 'Email Address', 1, 0, 'C');
                $this->Cell(30, 10, 'Contact', 1, 0, 'C');
                $this->Ln();
                $this->SetFont('Arial', '', 13);
                
                if(mysqli_num_rows($result5)>0){
                    while($row5 = mysqli_fetch_assoc($result5)){
                        $this->Cell(80, 10, $row5['name'], 1, 0, 'L');
                        $this->Cell(50, 10, $row5['designation'], 1, 0, 'L');
                        $this->Cell(50, 10, $row5['affiliation'], 1, 0, 'L');
                        $this->Cell(65, 10, $row5['email'], 1, 0, 'L');
                        $this->Cell(35, 10, $row5['contact'], 1, 0, 'L');
                        $this->Ln();
                    }    
                }else{
                    $this->Cell(280, 10, 'No Data Available', 1, 0, 'C');
                    $this->Ln();
                }

                $this->Ln(10);
                $this->SetFont('Arial', 'B', 18);
                $this->Cell(70, 10, 'V.  Coordinator IQAC', 0, 0, 'L');
                $this->Ln(10);
                $this->SetFont('Arial', 'B', 15);
                $this->Cell(15, 10, 'S.No', 1, 0, 'C');
                $this->Cell(75, 10, 'Name', 1, 0, 'C');
                $this->Cell(50, 10, 'Designation', 1, 0, 'C');
                $this->Cell(50, 10, 'Affiliation', 1, 0, 'C');
                $this->Cell(60, 10, 'Email Address', 1, 0, 'C');
                $this->Cell(30, 10, 'Contact', 1, 0, 'C');
                $this->Ln();
                $this->SetFont('Arial', '', 13);
                
                if(mysqli_num_rows($result6)>0){
                    while($row6 = mysqli_fetch_assoc($result6)){
                        $this->Cell(80, 10, $row6['name'], 1, 0, 'L');
                        $this->Cell(50, 10, $row6['designation'], 1, 0, 'L');
                        $this->Cell(50, 10, $row6['affiliation'], 1, 0, 'L');
                        $this->Cell(65, 10, $row6['email'], 1, 0, 'L');
                        $this->Cell(35, 10, $row6['contact'], 1, 0, 'L');
                        $this->Ln();
                    }    
                }else{
                    $this->Cell(280, 10, 'No Data Available', 1, 0, 'C');
                    $this->Ln();
                }
                $this->Ln(30);
                $this->SetFont('Arial', 'B', 18);
                $this->Cell(70, 10, 'VI.  Remarks/ Conclusion', 0, 0, 'L');
                $this->Ln(10);
                $this->SetFont('Arial', 'B', 15);
                $this->Cell(15, 10, 'S.No', 1, 0, 'C');
                $this->Cell(180, 10, 'Remark/ Conclusion', 1, 0, 'C');
                $this->Cell(40, 10, 'Document No', 1, 0, 'C');
                $this->Cell(45, 10, 'Document Type', 1, 0, 'C');
                $this->Ln();
                $this->SetFont('Arial', '', 11.5);
                if(mysqli_num_rows($result7)>0){
                    $i = 0;
                    while($row7 = mysqli_fetch_assoc($result7)){
                        $i++;
                        $this->Cell(15, 10, $i, 1, 0, 'L');
                        $this->Cell(180, 10, $row7['remark'], 1, 0, 'L');
                        $this->Cell(40, 10, $row7['file_name'], 1, 0, 'L');
                        $this->Cell(45, 10, $row7['type'], 1, 0, 'L');
                        $this->Ln();
                    }    
                }else{
                    $this->Cell(280, 10, 'No Data Available', 1, 0, 'C');
                    $this->Ln();
                }

                $this->Ln(20);
                $this->Cell(50, 10,'Authorised Signatory', 0, 0, 'C');
                $this->Ln(30);
                $this->Cell(290, 10, '***End of the Document***', 0, 0, 'C');
        
        
        }

      
    }

    
    
    // Instanciation of inherited class
    $pdf = new PDF();
    $pdf->AliasNbPages();
    $pdf->SetTitle('DQAC Report');
    $pdf->AddPage('L');
    $pdf->criteria();
    $pdf->date_generate($connect);
    $pdf->viewTable($connect);
    $pdf->Output();
?>
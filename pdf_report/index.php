<?php
session_start();
$user = $_SESSION['name'];

 //Including FPDF library
  require('../fpdf.php');
  class PDF extends FPDF
  {
  // Page header
  function Header()
  {
      // Logo
      $this->Image('davvlogo.png',10,6,20);
      // Arial bold 15
      $this->SetFont('Arial','B',17);
      // Move to the right
      $this->Cell(80);
      // Title
      $this->Cell(40,10,'Department of Admin One',0,0,'C');
      // Line break
      $this->Ln(20);
  }
  function Footer()
  {
      // Position at 1.5 cm from bottom
      $this->SetY(-15);
      // Arial italic 8
      $this->SetFont('Arial','I',8);
      // Page number
      $this->Cell(0,10,'Page '.$this->PageNo().'/{nb}',0,0,'C');
  }
  }
  
  // Instanciation of inherited class
  $pdf = new PDF();
  $pdf->AliasNbPages();
  $pdf->SetTitle($user);
  $pdf->AddPage();
  $pdf->Output();
?>
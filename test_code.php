<?php 
$firstinputvar=$_POST["enname"];
$secondinputvar=$_POST["en_email_id"];
$firstempvar = 'Hello!!';
$secondempvar = 'Your Email id is -->';
$thirdempvar = ' ,welcome to your profile';
$outputvar1=$firstempvar.$firstinputvar.$thirdempvar;
$outputvar2=$secondempvar.$secondinputvar;

require('fpdf.php'); 
$pdf = new FPDF(); 


$pdf->AddPage(); 


$pdf->SetFont('Times', 'B', 20); 

$pdf->Cell(176, 5, $outputvar1, 0, 0, 'C'); 


$pdf->Ln(); 


$pdf->SetFont('Times', 'B', 20); 


$pdf->Cell(176, 15, $outputvar2, 0, 0, 'C'); 


$pdf->Output(); 

?> 

<?php

include "connect.php";
 
 $rollno = $_GET['rollno'];

$result = mysqli_query($con,"select * from student where Rollno = '$rollno'");


while($row=mysqli_fetch_array($result))
{
   $sno =$row["Serial_no"];
   $rno =$row["Rollno"];
   $stuname =$row["Sudent_name"];
   $class =$row["class"];
   $institudename =$row["Institude"];
   $dur =$row["Duration"];
   $training =$row["Nature_of_training"];
   $domain =$row["Domain"];
   $stipend =$row["Stipend"];
   //$total=$total+1;
}

require('fpdf/fpdf.php');
$pdf = new FPDF();
$pdf->AddPage();

$pdf->SetFont('Arial', 'B', 12);
$pdf->SetXY(100,5);
$pdf->Image('index.jpeg',30,5,150);
$pdf->SetXY(5,40);
$pdf->Ln(10);

$pdf->Cell(125,10, 'INTERNSHIP APPLICATION FORM','C',0, 0);
$pdf->Ln(20);

$pdf->Cell(150, 5, 'DATE :','R', 0, 0);
$pdf->Ln(10);
$pdf->Cell(150, 5, 'PLACE :','R', 0, 0);
$pdf->Ln(20);

$pdf->Cell(70, 5, 'ROLL NO :','C',0, 0);
$pdf->Cell(40, 5, $rno,'C',0, 0);
$pdf->Ln(15);



$pdf->Cell(70, 5, 'STUDNET NAME  :','C', 0, 0);
$pdf->Cell(40, 5,  $stuname,'C', 0, 0);
$pdf->Ln(15);

//$pdf->Cell(25, 5, 'PLACE', 0, 0);
//$pdf->Cell(52, 5, ': VIRUDHUNAGAR', 0, 1);
//$pdf->Ln(10);

$pdf->Cell(70, 5, 'CLASS :','C', 0, 0);
$pdf->Cell(40, 5, $class,'C', 0, 0);
$pdf->Ln(15);

$pdf->Cell(70, 5, 'INSTITUTION :','C', 0, 0);
$pdf->Cell(40, 5, $institudename,'C', 0, 0);
$pdf->Ln(15);

$pdf->Cell(70, 5, 'DURATION :','C', 0, 0);
$pdf->Cell(40, 5, $dur,'C', 0, 0);
$pdf->Ln(15);

$pdf->Cell(70, 5, 'TRAINING :','C', 0, 0);
$pdf->Cell(40, 5, $training,'C', 0, 0);
$pdf->Ln(15);

$pdf->Cell(70, 5, 'STIPEND :','C', 0, 0);
$pdf->Cell(40, 5, $stipend,'C', 0, 0);
$pdf->Ln(40);

/*
//$pdf->Line(10, 30, 200, 30);
$pdf->Ln(10);
$pdf->Cell(55, 5, 'Product Id', 0, 0);
$pdf->Cell(58, 5, ': 64351-84503', 0, 1);
$pdf->Cell(55, 5, 'Tax Amount', 0, 0);
$pdf->Cell(58, 5, ': 0', 0, 1);
$pdf->Cell(55, 5, 'Product Service Charge', 0, 0);
$pdf->Cell(58, 5, ': 0', 0, 1);
$pdf->Cell(55, 5, 'Product Delivery Charge', 0, 0);
$pdf->Cell(58, 5, ': 0', 0, 1);
//$pdf->Line(10, 60, 200, 60);
$pdf->Ln(10);//Line break
$pdf->Cell(55, 5, 'Paid by', 0, 0);
$pdf->Cell(58, 5, ': Nawaraj Shah', 0, 1);
//$pdf->Line(155, 75, 195, 75);
$pdf->Ln(5);//Line break
$pdf->Cell(140, 5, '', 0, 0);
*/
$pdf->Cell(50, 5, "Student's signature:",'L', 0, 0,);
$pdf->Cell(80, 5, "Chairperson's signature:",'C', 0, 0,);
$pdf->Cell(60, 5, "HOD's signature:",'R',0, 0,);
$pdf->Output();
?>
<?php
 
include "connect.php";



$result = mysqli_query($con,"select * from student where Rollno = '16ucse060'");


global $total,$i;
$total=0;
$i=0;
while($row=mysqli_fetch_array($result))
						
{
   $sno[]=$row["Serial_no"];
   $rno[]=$row["Rollno"];
   $stuname[]=$row["Sudent_name"];
   $class[]=$row["class"];
   $institudename[]=$row["Institude"];
   $dur[]=$row["Duration"];
   $training[]=$row["Nature_of_training"];
   $domain[]=$row["Domain"];
   $stippend[]=$row["Stipend"];
   $total=$total+1;
}
require("fpdf/fpdf.php");
$pdf=new FPDF();
$pdf->AddPage();
$pdf->SetFont('Arial','B',11);
$pdf->SetXY(100,5);
$pdf->Image('index.jpeg',30,5,150);
$pdf->SetXY(5,40);
$width_cell=array(10,20,50,25,20,25,25,20);
$pdf->Cell($width_cell[0],7.5,'s.no',1,0,'C');

$pdf->Cell($width_cell[1],7.5,'Rollno',1,0,'C');
$pdf->Cell($width_cell[2],7.5,'Student Name',1,0,'C'); 
$pdf->multiCell($width_cell[3],7.5,'Class',1,'c');
$pdf->SetXY(110,40);
$pdf->Cell($width_cell[4],7.5,'Institution',1,'c');
$pdf->SetXY(130,40);
$pdf->Cell($width_cell[5],7.5,'Duration',1,0,'c');
$pdf->SetXY(155,40);
$pdf->Cell($width_cell[6],7.5,'Training',1,0,'c');
$pdf->SetXY(180,40);
$pdf->Cell($width_cell[7],7.5,'Stipend',1,'c');
global $t,$count;
$count=0;
$t=48;
while($i<$total)
{
$count=$count+1;
if($count==15)
{
 $pdf->AddPage();
 $pdf->SetFont('Arial','B',11);
 $pdf->SetXY(100,5);
 $pdf->Image('index.jpeg',30,5,150);
 $pdf->SetXY(5,40);
 $width_cell=array(10,20,50,25,20,25,25,20);
 $pdf->Cell($width_cell[0],7.5,'s.no',1,0,'C');

 $pdf->Cell($width_cell[1],7.5,'Rollno',1,0,'C');
 $pdf->Cell($width_cell[2],7.5,'Student Name',1,0,'C'); 
 $pdf->multiCell($width_cell[3],7.5,'Class',1,'c');
 $pdf->SetXY(110,40);
 $pdf->Cell($width_cell[4],7.5,'Institution',1,'c');
 $pdf->SetXY(130,40);
 $pdf->Cell($width_cell[5],7.5,'Duration',1,0,'c');
 $pdf->SetXY(155,40);
 $pdf->Cell($width_cell[6],7.5,'Training',1,0,'c');
 $pdf->SetXY(180,40);
 $pdf->Cell($width_cell[7],7.5,'Stipend',1,'c');
 $count=0;
}
$pdf->SetXY(5,$t);
$pdf->SetFont('Arial','',10);
$pdf->Cell($width_cell[0],10,$sno[$i],1,0,'C');
$pdf->Cell($width_cell[1],10,$rno[$i],1,0,'C');
$pdf->Cell($width_cell[2],10,$stuname[$i],1,0,'C'); 
$pdf->multiCell($width_cell[3],10,$class[$i],1,'c');
$pdf->SetXY(110,$t);
$pdf->Cell($width_cell[4],10,$institudename[$i],1,'c');
$pdf->SetXY(130,$t);
$pdf->Cell($width_cell[5],10,$dur[$i],1,0,'c');
$pdf->SetXY(155,$t);
$pdf->Cell($width_cell[6],10,$training[$i],1,0,'c');
$pdf->SetXY(180,$t);
$pdf->Cell($width_cell[7],10,$stippend[$i],1,'c');
$i=$i+1;
$t=$t+10;


  
ob_clean();
}
$pdf->output();

?>


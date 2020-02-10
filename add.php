<?php

	include("connect.php");

	

echo "first place";

	if(isset($_POST['submit']))
	{

		$rollno = $_POST['rollno'];
		$name = $_POST['name'];
		$class = $_POST['class'];
		$project = $_POST['project'];
		$institute = $_POST['iname'];
		$duration = $_POST['duration'];
		$training = $_POST['training'];
		$domain = $_POST['domain'];
		$course = $_POST['course'];
		$stipend = $_POST['stipend'];

		
		$result = mysqli_query($con,"insert into student values('','$rollno','$name','$class','$project','$institute','$duration','$training','$domain','$stipend')");

		echo "second place";
		echo $result;

		if ($result) {

			// $result = mysqli_query($con,"select * from student where Rollno = '$rollno'");


			// while($row=mysqli_fetch_array($result))
			// {
			//    $sno =$row["Serial_no"];
			//    $rno =$row["Rollno"];
			//    $stuname =$row["Sudent_name"];
			//    $class =$row["class"];
			//    $institudename =$row["Institude"];
			//    $dur =$row["Duration"];
			//    $training =$row["Nature_of_training"];
			//    $domain =$row["Domain"];
			//    $stipend =$row["Stipend"];
			//    //$total=$total+1;
			// }

			// require('fpdf/fpdf.php');
			
			// $pdf = new FPDF();
			// $pdf->AddPage();

			// $pdf->SetFont('Arial', '', 12);
			// $pdf->SetXY(100,5);
			// $pdf->Image('index.jpeg',30,5,150);
			// $pdf->SetXY(5,40);
			// $pdf->Ln(10);

			// $pdf->Cell(200,10, 'INTERNSHIP APPLICATION FORM', 0, 0);
			// $pdf->Ln(30);

			// $pdf->Cell(55, 5, 'ROLL NO', 0, 0);
			// $pdf->Cell(58, 5, $rno, 0, 0);
			// $pdf->Ln(10);


			// //$pdf->Cell(25, 5, 'Date', 0, 0);
			// //$pdf->Cell(52, 5, ': 2018-12-24 11:47:10 AM', 0, 1);
			// //$pdf->Ln(10);

			// $pdf->Cell(55, 5, 'STUDNET NAME ', 0, 0);
			// $pdf->Cell(58, 5,  $stuname, 0, 0);
			// $pdf->Ln(10);

			// //$pdf->Cell(25, 5, 'PLACE', 0, 0);
			// //$pdf->Cell(52, 5, ': VIRUDHUNAGAR', 0, 1);
			// //$pdf->Ln(10);

			// $pdf->Cell(55, 5, 'CLASS', 0, 0);
			// $pdf->Cell(58, 5, $class, 0, 1);
			// $pdf->Ln(10);

			// $pdf->Cell(55, 5, 'INSTITUTION', 0, 0);
			// $pdf->Cell(58, 5, $institudename, 0, 1);
			// $pdf->Ln(10);

			// $pdf->Cell(55, 5, 'DURATION', 0, 0);
			// $pdf->Cell(58, 5, $dur, 0, 1);
			// $pdf->Ln(10);

			// $pdf->Cell(55, 5, 'TRAINING', 0, 0);
			// $pdf->Cell(58, 5, $training, 0, 1);
			// $pdf->Ln(10);

			// $pdf->Cell(55, 5, 'STIPEND', 0, 0);
			// $pdf->Cell(58, 5, $stipend, 0, 1);
			// $pdf->Ln(10);

			// /*
			// //$pdf->Line(10, 30, 200, 30);
			// $pdf->Ln(10);
			// $pdf->Cell(55, 5, 'Product Id', 0, 0);
			// $pdf->Cell(58, 5, ': 64351-84503', 0, 1);
			// $pdf->Cell(55, 5, 'Tax Amount', 0, 0);
			// $pdf->Cell(58, 5, ': 0', 0, 1);
			// $pdf->Cell(55, 5, 'Product Service Charge', 0, 0);
			// $pdf->Cell(58, 5, ': 0', 0, 1);
			// $pdf->Cell(55, 5, 'Product Delivery Charge', 0, 0);
			// $pdf->Cell(58, 5, ': 0', 0, 1);
			// //$pdf->Line(10, 60, 200, 60);
			// $pdf->Ln(10);//Line break
			// $pdf->Cell(55, 5, 'Paid by', 0, 0);
			// $pdf->Cell(58, 5, ': Nawaraj Shah', 0, 1);
			// //$pdf->Line(155, 75, 195, 75);
			// $pdf->Ln(5);//Line break
			// $pdf->Cell(140, 5, '', 0, 0);
			// */
			// $pdf->Cell(50, 5, ': Signature', 0, 1, 'C');
			// $pdf->Output();

		echo "third place";
		header("location:index.html");
		echo "<script>alert('inserted successfully');</script>";
		}
		else
				echo "insertion failure";
	}
			

?>
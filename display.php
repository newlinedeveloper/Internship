<?php
 include "connect.php";
?>

<!DOCTYPE html>
<html>
<head>
	<title>Student details</title>
	<link rel="stylesheet" type="text/css" href="Semantic/semantic.min.css">
</head>
<body>

	<div class="ui container">
	
		<div class="ui raised segment" style="margin-top: 20px;">
			<h2 class="ui centered aligned blue header">Student details</h2>		
		</div>
	

		<div class="ui raised segment">
			<table class="ui striped blue table">
				<tr>
				<thead>
					<th>S.no</th>
					<th>Rollno</th>
					<th>Student Name</th>
					<th>Class</th>
					<th>Project</th>
					<th>Institute Name</th>
					<th>Duration</th>
					<th>Training</th>
					<th>Domain</th>
					<th>Stipend</th>
				</thead>
				</tr>
				<tbody>
					<?php
						$result = mysqli_query($con,"select * from student");

						while($row=mysqli_fetch_array($result))
						{
					?>

					<tr>
						<td><?php echo $row['Serial_no'];?></td>
						<td><?php echo $row['Rollno'];?></td>
						<td><?php echo $row['Sudent_name'];?></td>
						<td><?php echo $row['class'];?></td>
						<td><?php echo $row['project'];?></td>
						<td><?php echo $row['Institude'];?></td>
						<td><?php echo $row['Duration'];?></td>
						<td><?php echo $row['Nature_of_training'];?></td>
						<td><?php echo $row['Domain'];?></td>
						<td><?php echo $row['Stipend'];?></td>
					</tr>

					<?php	}
					?>
				</tbody>
			</table>
			<button class="ui primary button" value="print" name="print">print</button>


		</div>

	</div>
	<script type="text/javascript" src="jquery-3.3.1.js"></script>
	<script type="text/javascript">
		
		$(document).ready(function(){
			$(".ui.primary.button").click(function(){
				window.location.href="convertpdf.php";
			});
		});
	</script>
</body>
</html>
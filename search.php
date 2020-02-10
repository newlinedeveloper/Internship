<?php
	include "connect.php";
?>


<!DOCTYPE html>
<html>
<head>
	<title>Student details</title>
	<link rel="stylesheet" type="text/css" href="Semantic/semantic.min.css">
	<script type="text/javascript" src="jquery-3.3.1.js"></script>
	<script type="text/javascript" src="Semantic/semantic.min.js"></script>
</head>

<body>
		
		<img class="ui centered large image" src="image/index.jpeg">

		<div class="container" style="margin: 20px;">

			<div class="ui raised blue segment" >

			<div class="ui grid">

				<div class="twelve wide column">

					<div class="ui form" method="post" action='<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>'>

						<div class="two wide fields">

							<div class="field">
								<label>Rollno:</label>
								<select class="ui fluid search dropdown" name="username">
						            <option value="">Rollno</option>

						            <?php
						            	$name_result = mysqli_query($con,"select Rollno from student");

						            	while($row = mysqli_fetch_array($name_result))
						            	{ 
						            ?>
						            
						            <option value="<?php echo $row['Rollno']; ?>"><?php echo $row['Rollno'];?></option>
						           
						        <?php } ?>
						        </select>	
							</div>


							<div class="field">
								<label>Student name:</label>
								<select class="ui fluid search dropdown" name="username">
						            <option value="">username</option>

						            <?php
						            	$name_result = mysqli_query($con,"select Sudent_name from student");

						            	while($row = mysqli_fetch_array($name_result))
						            	{ 
						            ?>
						            
						            <option value="<?php echo $row['Sudent_name']; ?>"><?php echo $row['Sudent_name'];?></option>
						           
						        <?php } ?>
						        </select>	
							</div>

							
						</div>


						<div class="two wide fields">

							<div class="field">

								<label>Class:</label>
								<select class="ui fluid search dropdown" name="username">
						            <option value="">Class name</option>

						            <?php
						            	$Class_result = mysqli_query($con,"select Class from student");

						            	while($row = mysqli_fetch_array($Class_result))
						            	{ 
						            ?>
						            
						            <option value="<?php echo $row['Class']; ?>"><?php echo $row['Class'];?></option>
						           
						        <?php } ?>
						        </select>		
							</div>

							<div class="field">

								<label>Project name:</label>
								<select class="ui fluid search dropdown" name="username">
						            <option value="">Project name</option>

						            <?php
						            	$Project_result = mysqli_query($con,"select Project from student");

						            	while($row = mysqli_fetch_array($Project_result))
						            	{ 
						            ?>
						            
						            <option value="<?php echo $row['Project']; ?>"><?php echo $row['Project'];?></option>
						           
						        <?php } ?>
						        </select>		
							</div>
							
							
						</div>

						<div class="two wide fields">

							
							<div class="field">
								<label>Nature of training:</label>
								<select class="ui fluid search dropdown" name="username">
						            <option value="">Training</option>

						            <?php
						            	$Nature_of_training_result = mysqli_query($con,"select Nature_of_training from student");

						            	while($row = mysqli_fetch_array($Nature_of_training_result))
						            	{ 
						            ?>
						            
						            <option value="<?php echo $row['Nature_of_training']; ?>"><?php echo $row['Nature_of_training'];?></option>
						           
						        <?php } ?>
						        </select>	
							</div>

							<div class="field">
								<label>Remarks (stipend per month):</label>
								<select class="ui fluid search dropdown" name="username">
						            <option value="">stipend</option>

						            <?php
						            	$Stipend_result = mysqli_query($con,"select Stipend from student");

						            	while($row = mysqli_fetch_array($Stipend_result))
						            	{ 
						            ?>
						            
						            <option value="<?php echo $row['Stipend']; ?>"><?php echo $row['Stipend'];?></option>
						           
						        <?php } ?>
						        </select>		
							</div>
								
						</div>

						<div class="ui blue submit button" name="search" value="search">Search</div>

					</div>

				</div>
			
					<div class="four wide column">

						<img class="ui centered small image" src="image/kcet.gif">
						<!-- <div class="ui labled icon blue button" style="margin-left: 35%;" name="s" value="search">
						<i class="search icon"></i>
						Search
						 </div> -->
						
					</div>

				</div>
			</div>
	

		<div class="ui dividing blue header"></div>

		<?php

			if (isset($_POST['search']))
			{
				$rollno = $_POST['rollno'];
				$name = $_POST['name'];
				$class = $_POST['class'];
				$project = $_POST['project'];
				$training = $_POST['training'];
				$stipend = $_POST['stipend'];

		?>

		

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

					if($rollno!=""&&$name!=""&&$class!=""&&$project!=""&&$training!=""&&$stipend!="")
					{
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

					<?php
					 }	}

					 if($rollno ==""&&$name ==""&&$class ==""&&$project ==""&&$training ==""&&$stipend =="")
					 {
					 	echo "<script> alert('please enter any value');</script>";
					 }

					if($rollno!=""||$name!=""||$class!=""||$project!=""||$training!=""||$stipend!="")
					{
						$result = mysqli_query($con,"select * from student where Rollno == $rollno or ");

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

					 

				<?php } }	?>
				</tbody>
			</table>
			<?php } ?>	
	</div>
</body>


<script type="text/javascript">

	$(document).ready(function(){

		$(".ui.fluid.search.dropdown").dropdown();
	});
	
</script>

</html>



<?php

	include("connect.php");

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
		
		if ($result) {

			header("location:form.php?rollno='$rollno'");
			echo "<script>alert('inserted successfully');</script>";
		}
		
		else
			echo "insertion failure";
	}
	

?>


<!-- '<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>' -->


<!DOCTYPE html>
<html>
<head>
	<title>Internship|| KCET</title>
	<link rel="stylesheet" type="text/css" href="Semantic/semantic.min.css">
	<script type="text/javascript" src="jquery-3.3.1.js"></script>
	<script type="text/javascript" src="Semantic/semantic.min.js"></script>

<style type="text/css">

	/*.no-js #loader { display: none;  }
	.js #loader { display: block; position: absolute; left: 100px; top: 0; }
	*/.se-pre-con {
	position: fixed;
	left: 0px;
	top: 0px;
	width: 100%;
	height: 100%;
	z-index: 9999;
	background: url(image/kcet.gif) center no-repeat #fff;
}
	
</style>
</head>
<body>

	<div class="sea-pre-con"></div>

	<img class="ui centered large image" src="image/index.jpeg">
	
	<div class="ui container">
		<div class="ui raised segment" style="margin-top: 20px;">
			
			<div class="ui secondary menu">
				
				<div class="item">
					<div class="ui center aligned blue header">Internship Details</div>
				</div>

					
			
			</div>
			
		</div>

		<div class="ui raised segment" style="margin-top: 20px;">

			<img class="ui centered small image" src="image/kcet.gif">

			<div class="ui text container">

				<form class="ui form" method="post" action='<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>'>
					<h4 class="ui dividing orange header">Student Details</h4>

					<div class="field">
						<div class="two fields">
						<div class="field">
							<label>Rollno:</label>
							<div class="ui left icon input">
								<i class="id card outline icon"></i>
								<input type="text" name="rollno" id="rollno" placeholder="rollno">
							</div>	
						</div>


						<div class="field">
							<label>Student name:</label>
							<div class="ui left icon input">
								<i class="user icon"></i>

								<input type="text" name="name" id="name" placeholder="name">
							</div>	
						</div>
					</div>
					</div>

					<div class="two fields">
						<div class="field">

							<label>Class:</label>
							<div class="ui left icon input">
								<i class="braille icon"></i>
								<input type="text" name="class" id="class" placeholder="class">
							</div>	
						</div>

						<div class="field">

							<label>Project name:</label>
							<div class="ui left icon input">
								<i class="idea icon"></i>
								<input type="text" name="project" id="project" placeholder="project name">
							</div>	
						</div>
					</div>
				

						<h4 class="ui dividing green header">Training details</h4>

						<div class="two fields">
						<div class="field">
							<label>Name of the institute:</label>
							<div class="ui left icon input">
								<i class="building icon"></i>
								<input type="text" name="iname" id="iname" placeholder="institute name">
							</div>	
						</div>

						<div class="field">
							<label>Duration:</label>
							<div class="ui left icon input">
								<i class="calendar alternate outline icon"></i>
								<input type="date" name="duration" id="duration" >
							</div>	
						</div>
					</div>

						<div class="two fields">

						<div class="field">
							<label>Nature of training:</label>
							<div class="ui left icon input">
								<i class="calendar outline icon"></i>
								<input type="text" name="training" id="training" placeholder="training">
							</div>	
						</div>

						<div class="field">
							<label>Domain:</label>
							<div class="ui left icon input">
								<i class="sitemap icon"></i>
								<input type="text" name="domain" id="domain" placeholder="domain">
							</div>	
						</div>
					</div>

					<div class="two fields">
						<div class="field">
							<label>Course Revelance:</label>
							<div class="ui left icon input">
								<i class="clone outline icon"></i>
								<input type="text" name="course" id="course" placeholder="course">
							</div>	
						</div>

						<div class="field">
							<label>Remarks (stipend per month):</label>
							<div class="ui left icon input">
								<i class="rupee sign icon"></i>
								<input type="text" name="stipend" id="stipend" placeholder="stipend">
							</div>	
						</div>
					</div>

						
						<button class="ui primary button" name="submit" value="submit" id="button">Submit</button>
						<div class="ui dividing blue header"></div>
						<div class="ui error message"></div>
					</div>
				</form>>	
			</div>
			
		</div>
		
	</div>


	
	<!-- <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.5.2/jquery.min.js"></script> 
	<script src="http://cdnjs.cloudflare.com/ajax/libs/modernizr/2.8.2/modernizr.js"></script> 
 -->

	<script type="text/javascript">

		
	
	$(document).ready(function() {

		//Animate loader off screen
		$(".se-pre-con").fadeOut(5000);

		$("#button").click(function(){

			$('.ui.form').form({

		    fields: {
		      name: {
		        identifier: 'name',
		        rules: [
		          {
		            type   : 'empty',
		            prompt : 'Please enter your name'
		          }
		        ]
		      },
		      rollno: {
		        identifier: 'rollno',
		        rules: [
		          {
		            type   : 'empty',
		            prompt : 'Please enter your rollno'
		          }
		        ]
		      },
		      class: {
		        identifier: 'class',
		        rules: [
		          {
		            type   : 'empty',
		            prompt : 'Please enter your class'
		          }
		        ]
		      },
		      duration: {
		        identifier: 'duration',
		        rules: [
		          {
		            type   : 'empty',
		            prompt : 'Please enter a duration'
		          }
		        ]
		      },
		      iname: {
		        identifier: 'iname',
		        rules: [
		          {
		            type   : 'empty',
		            prompt : 'Please enter the institute name'
		          }
		          
		        ]
		      },
		      domain: {
		        identifier: 'domain',
		        rules: [
		          {
		            type   : 'empty',
		            prompt : 'please enter your domain'
		          }
		        ]
		      },
		      training: {
		        identifier: 'training',
		        rules: [
		          {
		            type   : 'empty',
		            prompt : 'please enter your training'
		          }
		        ]
		      },
		      course: {
		        identifier: 'course',
		        rules: [
		          {
		            type   : 'empty',
		            prompt : 'please enter your course'
		          }
		        ]
		      },
		      stipend: {
		        identifier: 'stipend',
		        rules: [
		          {
		            type   : 'empty',
		            prompt : 'please enter your stipend'
		          }
		        ]
		      },

		      project: {
		        identifier: 'project',
		        rules: [
		          {
		            type   : 'empty',
		            prompt : 'please enter your project'
		          }
		        ]
		      }
		    }
		  });
	
		});

	});
		

	
</script>
	
</body>
</html>
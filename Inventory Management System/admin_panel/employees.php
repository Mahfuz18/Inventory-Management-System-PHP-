<?php
include("connection.php");
$obj =  new Connection();


if(isset($_POST['formSubmit']))
{
	$fname =  $_POST['firstname'];
	$lname = $_POST['lastname'];
	$email = $_POST['email'];
	$contact = $_POST['contact_num'];
	$age = $_POST['age'];
	


	$sql =  "INSERT INTO employee(fname,lname,email,contact,age) VALUES('$fname','$lname','$email','$contact','$age')";
	$obj->cn->query($sql);
		

}

?>






<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="css/css/bootstrap.min.css">
    <style>
    	.edit{
    		background: #263238 !important;
    		color: white !important;

    	}
    </style>
</head>
	<body>
		<section>
			<div class="panel panel-default">
				<div class="  edit panel-body text-center">
					<h5>Employees</h5>
				</div>
			</div>


			<div class="panel panel-default">
				<div class=" panel-body text-center">

					<h3>Apply Employee<hr></h3>

					<form class="form-horizontal" method="post" action="">


						<div class="form-group">
							<label class="col-md-2 control-label">First Name:</label>
							<div class="col-md-4">
								<input class="form-control" type="text" name="firstname" required="">
							</div>

							<label class="col-md-2 control-label">Last Name:</label>
							<div class="col-md-4">
								<input class="form-control" type="text" name="lastname" required="">
							</div>
						</div>

						


						<div class="form-group">
							<label class="col-md-2 control-label">Email:</label>
							<div class="col-md-4">
								<input class="form-control" type="email" name="email" required="">
							</div>

							<label class="col-md-2 control-label">Mobile:</label>
							<div class="col-md-4">
								<input class="form-control" type="number" name="contact_num" required="">
							</div>

						</div>

						<div class="form-group">
							
							<label class="col-md-2 control-label text-right">Age:</label>

							<div class="col-md-4">
								<input class="form-control" type="number" name="age" required=""> 
							</div>

							<div class="col-md-2" ></div>

							<div class="col-md-2">
								<input class="form-control btn-success" type="submit" name="formSubmit" value="Add Employee" required="">
							</div>

							<div class="col-md-2">
								<input class="form-control btn-warning" type="reset" name="" required="" value="Reset">
							</div>
							

							
						</div>


					</form>
					
				</div>
			</div>


			<div>

				<div class="panel panel-default">
					<div class="panel-body text-center">

						<h3>My Employees <hr></h3>
						
						<?php

							$sql = "SELECT * FROM employee";
							$result = $obj->cn->query($sql);

							echo "<table class='table table-striped'>
									<tr >
										<th class='text-center'>First Name</th>
										<th class='text-center'>Last Name</th>
										<th class='text-center'>Email</th>
										<th class='text-center'>Contact</th>
										<th class='text-center'>Age</th>
									</tr>";

							while($row = $result->fetch_assoc())
							{

								echo "
									<tr>
										<td class='text-center'>".$row['fname']."</td>
										<td class='text-center'>".$row['lname']."</td>
										<td class='text-center'>".$row['email']."</td>
										<td class='text-center'>".$row['contact']."</td>
										<td class='text-center'>".$row['age']."</td>
									</tr>
									";
							}
							echo "</table>";


						?>
				</div>
			</div>
				
			</div>
		</section>

		<section>
			
		</section>

	</body>
</html>
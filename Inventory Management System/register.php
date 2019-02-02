<?php
include("connection.php");
$obj =  new Connection();
$flag = NULL;

if(isset($_POST['formSubmit']))
{
	$fname =  $_POST['firstname'];
	$lname = $_POST['lastname'];
	$email = $_POST['email'];
	$contact = $_POST['contact_num'];
	$password = $_POST['password'];
	$confirm_password = $_POST['confirm_password'];

	if($password == $confirm_password)
	{
		$sql =  "INSERT INTO customer(fname,lname,email,contact,password) VALUES('$fname','$lname','$email','$contact','$password')";
		$obj->cn->query($sql);
		$flag = 2;
	}

	else
		$flag = 1;

}

?>





<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="css/css/bootstrap.min.css">
    <style type="text/css">
    	#login{
    		margin-top: 10%;
    	}

    	body{

    		background: #f6f6f6;
    	}

    </style>

</head>
<body>

	<div id="login" class="col-md-4 col-md-offset-4">
		<div class="panel panel-deafult">
			<div class="panel-heading text-center">
				<h2 class="text-primary" ><span class="glyphicon glyphicon-user"></span> Sign Up</h2>
				<hr>
			</div>

			<div class="panel-body">
				<form class="form-horizontal" action="" method="post">
			
						<div class="col-md-12">
							<div class="form-group">
								
								
								<label class="text-right col-md-4 control-label">First Name</label>
								<div class="col-md-8"><input class="form-control " type="text" name="firstname" required=""></div>
								
							</div>


							<div class="form-group">
								
								
								<label class="text-right col-md-4 control-label">Last Name</label>
								<div class="col-md-8"><input class="form-control " type="text" name="lastname" required=""></div>
								
							</div>

							<div class="form-group">
								
								
								<label class="text-right col-md-4 control-label">Email</label>
								<div class="col-md-8"><input class="form-control " type="email" name="email" required=""></div>
								
							</div>

							<div class="form-group">
								
								
								<label class="text-right col-md-4 control-label">Contact Num</label>
								<div class="col-md-8"><input class="form-control " type="number" name="contact_num" required=""></div>
								
							</div>

							<div class="form-group">
								
								
								<label class="text-right col-md-4 control-label">Password</label>
								<div class="col-md-8"><input class="form-control " type="password" name="password" required=""></div>
								
							</div>

							<div class="form-group">
								
								
								<label class="text-right col-md-4 control-label">Confirm Password</label>
								<div class="col-md-8"><input class="form-control " type="password" name="confirm_password" required=""></div>
								
							</div>


							<div class="form-group">
								<div class="col-md-4"></div>

								<div class="col-md-4"><input class="form-control " type="reset" name="reset"></div>
								
								<div class="col-md-4"><input class="form-control " type="submit" value="Sign Up" name="formSubmit"></div>
								
							</div>

							<?php

								if($flag == 1)
								{
									echo "<hr><div class='text-center text-primary'>Password didn't match</div>";
								}
								elseif ($flag == 2) 
								{
									echo "<hr><div class='text-center text-primary'>\" Registration complete. Thanks for Joining us \"</div>";
									
									header("refresh:3; url=index.php");
								}

							?>
							
							
						</div>



				</form>
			</div>
		</div>
	</div>

</body>
</html>
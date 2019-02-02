<?php

session_start();

include("connection.php");
$obj = new Connection();
$flag = NULL;

if(isset($_POST['formSubmit']))
{
	$email = $_POST['email'];
	$password = $_POST['password'];

	$sql =  "SELECT fname,email,password FROM customer";
	$result = $obj->cn->query($sql);



	while($row =  $result->fetch_assoc())
	{
		if($email == $row['email'] && $password == $row['password'] )
		{
			$flag = 1;
			$_SESSION['name'] = $row['fname'];

		}

	}


	$admin_sql =  "SELECT fname,email,password FROM admin";
	$result = $obj->cn->query($admin_sql);

	while($row =  $result->fetch_assoc())
	{
		if($email == $row['email'] && $password == $row['password'] )
		{
			$flag = 2;
			$_SESSION['name'] = $row['fname'];

		}

	}


	if($flag != 1 && $flag != 2){
		$flag = 3;
	}



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
    		margin-top: 15%;

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
				<h2 class="text-primary" ><span class="glyphicon glyphicon-user"></span> Log In</h2>
				<hr>
			</div>

			<div class="panel-body">
				<form class="form-horizontal" action="" method="post">
			
						<div class="col-md-12">
							<div class="form-group">
								
								
								<label class="text-right col-md-4 control-label">Email</label>
								<div class="col-md-8"><input class="form-control " type="email" name="email" required=""></div>
								
							</div>


							<div class="form-group">
								
								
								<label class="text-right col-md-4 control-label">Password</label>
								<div class="col-md-8"><input class="form-control " type="Password" name="password" required=""></div>
								
							</div>


							<div class="form-group">
								<div class="col-md-4"></div>

								<div class="col-md-4"><input class="form-control " type="reset" name="reset"></div>
								
								<div class="col-md-4"><input class="form-control " type="submit" value="Log In" name="formSubmit"></div>
								
							</div>


							<?php

								

								if($flag == 1)
								{

									echo "<hr><div class='text-center text-primary'>\" Log in successful \"</div>";
									header("refresh:1; url=user.php");
								}

								if($flag == 2)
								{

									echo "<hr><div class='text-center text-primary'>\" Log in successful \"</div>";
									header("refresh:1; url=admin.php?dashboard");
								}

								elseif ($flag == 3) 
								{
									
									echo "<hr><div class='text-center text-primary'>\" Email or password is not matched. Try again \"</div>";
									// header("refresh:3; url=index.php");
									
									
								}

							?>


							
							
						</div>



				</form>
			</div>
		</div>
	</div>

</body>
</html>
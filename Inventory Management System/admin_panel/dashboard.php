<?php
	
	include("connection.php");
	$obj =  new Connection();

	$sql1=  "SELECT * FROM customer";
	$customer = $obj->cn->query($sql1);
	$sql2=  "SELECT * FROM employee";
	$employee = $obj->cn->query($sql2);
	$sql3=  "SELECT * FROM grocery";
	$grocery = $obj->cn->query($sql3);
	$sql4=  "SELECT * FROM glass";
	$glass = $obj->cn->query($sql4);
		

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

    	body{
    		background: #fafafa;
    	}

    	.space{
    		margin-right: 10px;
    	}

    	

    </style>
</head>
	<body>
		<section>
			<div class="panel panel-default">
				<div class="  edit panel-body text-center">
					<h4>Dashboard</h4>
				</div>

			</div>
		</section>

		<section>
			<div class="panel panel-default col-md-2 ">
				<div class="panel-body text-center">

						<h3><span class="glyphicon glyphicon-user"></span><br>Total Customers</h3>
						<?php

							$total_customers = 0;

							while($row = $customer->fetch_assoc())
							{

								$total_customers++;
							}
							
							echo "<h1>".$total_customers."</h1>";


						?>

				</div>

			</div>

			<div class="col-md-1">&nbsp;</div>
			<!-- Total Employee -->

			<div class="panel panel-default col-md-2 ">
				<div class="panel-body text-center">

						<h3><span class="glyphicon glyphicon-user"></span><br>Total Employees</h3>
						<?php

							$total_employee = 0;

							while($row = $employee->fetch_assoc())
							{

								$total_employee++;
							}
							
							echo "<h1>".$total_employee."</h1>";


						?>

				</div>

			</div>

			<div class="col-md-1"></div>
			<!-- Total grocery -->

			<div class="panel panel-default col-md-2 ">
				<div class="panel-body text-center">

						<h3><span class="glyphicon glyphicon-user"></span><br>Grocery Products</h3>
						<?php

							$total_grocery = 0;

							while($row = $grocery->fetch_assoc())
							{

								$total_grocery++;
							}

							if($total_grocery<5)
							{
								echo "<h1 class='text-danger'>".$total_grocery."*</h1>";
							}
							
							else
								echo "<h1 class='text-success'>".$total_grocery."</h1>";


						?>

				</div>

			</div>

			<div class="col-md-1"></div>
			<!-- Total glass -->

			<div class="panel panel-default col-md-2 ">
				<div class="panel-body text-center">

						<h3><span class="glyphicon glyphicon-user"></span><br>Glass Products</h3>
						<?php

							$total_glass = 0;

							while($row = $glass->fetch_assoc())
							{

								$total_glass++;
							}
							
							if($total_glass<5)
							{
								echo "<h1 class='text-danger'>".$total_glass."*</h1>";
							}
							
							else
								echo "<h1 class='text-success'>".$total_glass."</h1>";


						?>

				</div>

			</div>
		</section>

		
		<script type="text/javascript" src="../css/js/jquery-ui/jquery-ui.min.js"></script>
		<script type="text/javascript" src="../css/js/jquery.js"></script>
		<script type="text/javascript" src="../css/js/script.js"></script>

	</body>
</html>
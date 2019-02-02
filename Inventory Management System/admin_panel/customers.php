
<?php
	
	include("connection.php");
	$obj =  new Connection();

	$sql =  "SELECT * FROM customer";
	$result = $obj->cn->query($sql);
	
	

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
					<h3>My Customers</h3>
				</div>
			</div>


			<div>

				<div>

				<div class="panel panel-default">
					<div class="panel-body text-center">

					
						
						<?php

							echo "<table class='table table-striped'>
									<tr >

										<th class='text-center'>ID</th>
										<th class='text-center'>First Name</th>
										<th class='text-center'>Last Name</th>
										<th class='text-center'>Email</th>
										<th class='text-center'>Contact</th>
										
									</tr>";

							while($row = $result->fetch_assoc())
							{

								echo "
									<tr>

										<td class='text-center'>".$row['id']."</td>
										<td class='text-center'>".$row['fname']."</td>
										<td class='text-center'>".$row['lname']."</td>
										<td class='text-center'>".$row['email']."</td>
										<td class='text-center'>".$row['contact']."</td>
										
									</tr>
									";
							}
							echo "</table>";


						?>
				</div>
			</div>
				
			</div>
				
			</div>
		</section>

		<section>
			
		</section>

	</body>
</html>
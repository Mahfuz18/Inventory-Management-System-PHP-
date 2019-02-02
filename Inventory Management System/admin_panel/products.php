<?php
include("connection.php");
$obj =  new Connection();

if(isset($_POST['formSubmit']))
{
	$category =  $_POST['category'];
	$product_name = $_POST['product_Name'];
	$weight = $_POST['weight'];
	$company = $_POST['company'];
	$quantity = $_POST['quantity'];

	if($category == "Grocery")
	{
		$sql1 =  "INSERT INTO grocery(product_name,weight,quantity,company) VALUES('$product_name','$weight','$quantity','$company')";
		$obj->cn->query($sql1);
		
	}

	elseif($category == "Glass")
	{
		$sql2 =  "INSERT INTO glass(product_name,weight,quantity,company) VALUES('$product_name','$weight','$quantity','$company')";
		$obj->cn->query($sql2);
		
	}

	elseif($category == "Ceramic")
	{
		$sql3 =  "INSERT INTO ceramic(product_name,weight,quantity,company) VALUES('$product_name','$weight','$quantity','$company')";
		$obj->cn->query($sql3);
		
	}


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
					<h4>Products</h4>
				</div>

			</div>
		</section>

		<section>
			<div class="panel panel-default">
				<div class="panel-body text-center">


					<h3>Enter Product Details<hr></h3>





					<form class="form-horizontal" method="post" action="">


						<div class="form-group">
							<label class="col-md-2 control-label">Product Name:</label>
							<div class="col-md-4">
								<input class="form-control" type="text" name="product_Name" required="">
							</div>

							<label class="col-md-2 control-label">Company:</label>
							<div class="col-md-4">
								<input class="form-control" type="text" name="company" required="">
							</div>
						</div>

						


						<div class="form-group">
							<label class="col-md-2 control-label">Weight:</label>
							<div class="col-md-4">
								<input class="form-control" type="text" name="weight" required="">
							</div>

							<label class="col-md-2 control-label">Quantity:</label>
							<div class="col-md-4">
								<input class="form-control" type="number" name="quantity" required="">
							</div>

						</div>

						<div class="form-group">
							
							<label class="col-md-2 control-label text-right">Category:</label>

							<div class="col-md-4">
								<select class="form-control" name="category" required="">
									<option         >Select One</option>
									<option value="Grocery">Grocery</option>
									<option value="Glass">Glass Products</option>
									<option value="Ceramic">Ceramic Products</option>
								</select> 
							</div>

							<div class="col-md-2" ></div>

							<div class="col-md-2">
								<input class="form-control btn-success" type="submit" name="formSubmit" required="" value="Add Product">
							</div>

							<div class="col-md-2">
								<input class="form-control btn-warning" type="reset" name="" required="" value="Reset">
							</div>
							

							
						</div>


						
						
					</form>
				</div>

			</div>
		</section>

		
		<section>

			<div class="panel panel-default">
				<div class="  edit panel-body text-center">
					<h5>All Products</h5>
				</div>
			</div>

			<div>
				<div class="panel panel-default col-md-4">
					<div class="panel-body text-center">
						
						<div class="text-center"><h3>Grocery<hr></h3></div>


						<?php

							$sql = "SELECT * FROM grocery";
							$result = $obj->cn->query($sql);

							echo "<table class='table table-striped'>
									<tr >
										<th class='text-center'>Product</th>
										<th class='text-center'>Weight</th>
										<th class='text-center'>Quantity</th>
										<th class='text-center'>Company</th>
									</tr>";

							while($row = $result->fetch_assoc())
							{

								echo "
									<tr>
										<td class='text-center'>".$row['product_name']."</td>
										<td class='text-center'>".$row['weight']."</td>
										<td class='text-center'>".$row['quantity']."</td>
										<td class='text-center'>".$row['company']."</td>
									</tr>
									";
							}
							echo "</table>";


						?>
						
					
					</div>
				</div>
				
			</div>


			<!-- GLASSS PRINT -->

			<div>
				<div class="panel panel-default col-md-4">
					<div class="panel-body text-center">
						
						<div class="text-center"><h3>Glass<hr></h3></div>


						<?php

							$sql = "SELECT * FROM glass";
							$result = $obj->cn->query($sql);

							echo "<table class='table table-striped'>
									<tr >
										<th class='text-center'>Product</th>
										<th class='text-center'>Weight</th>
										<th class='text-center'>Quantity</th>
										<th class='text-center'>Company</th>
									</tr>";

							while($row = $result->fetch_assoc())
							{

								echo "
									<tr>
										<td class='text-center'>".$row['product_name']."</td>
										<td class='text-center'>".$row['weight']."</td>
										<td class='text-center'>".$row['quantity']."</td>
										<td class='text-center'>".$row['company']."</td>
									</tr>
									";
							}
							echo "</table>";


						?>
						
					
					</div>
				</div>
				
			</div>


			<!-- CERAMIC PRINT -->

			<div>
				<div class="panel panel-default col-md-4">
					<div class="panel-body text-center">
						
						<div class="text-center"><h3>Ceramic<hr></h3></div>


						<?php

							$sql = "SELECT * FROM ceramic";
							$result = $obj->cn->query($sql);

							echo "<table class='table table-striped'>
									<tr >
										<th class='text-center'>Product</th>
										<th class='text-center'>Weight</th>
										<th class='text-center'>Quantity</th>
										<th class='text-center'>Company</th>
									</tr>";

							while($row = $result->fetch_assoc())
							{

								echo "
									<tr>
										<td class='text-center'>".$row['product_name']."</td>
										<td class='text-center'>".$row['weight']."</td>
										<td class='text-center'>".$row['quantity']."</td>
										<td class='text-center'>".$row['company']."</td>
									</tr>
									";
							}
							echo "</table>";


						?>
						
					
					</div>
				</div>
				
			</div>
			
		</section>

	</body>
</html>
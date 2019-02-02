<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="css/css/bootstrap.min.css">
    <style>
    	
    </style>
</head>
<body>

		<?php
			include("header.php");
		?>
	

		<section class="col-md-2">
			
				<ul class="list-group">
					<a class="list-group-item dash" href="admin.php?dashboard"> <h4><span class="glyphicon glyphicon-cog"></span> Dashboard</h3> </span></a>

					<a class="list-group-item" href="admin.php?products"><span class="glyphicon glyphicon-star"></span></span> Products <span class="badge"></a>

					<a class="list-group-item" href="admin.php?remaining_products"><span class="glyphicon glyphicon-star-empty"></span> Remaining Products</a>

					<a class="list-group-item" href="admin.php?employees"><span class="glyphicon glyphicon-user"></span> Employees </a>

					<a class="list-group-item" href="admin.php?customers"><span class="glyphicon glyphicon-user"></span> Customers </a>

					<a class="list-group-item" href="admin.php?sales"><span class="glyphicon glyphicon-shopping-cart"></span> Sales </a>

					<a class="list-group-item" href="admin.php?profit"><span class="glyphicon glyphicon-usd"></span> Profit </a>

					<a class="list-group-item" href="admin.php?loss"><span class="glyphicon glyphicon-usd"></span> Loss </a>
					
					
					
				</ul>


				<div class="panel panel-default">
					<div class="panel-heading">
						<h4>Management</h4>
					</div>

					<div class="panel-body">
						<a class="list-group-item" href="admin.php?sales"><span class="glyphicon glyphicon-shopping-cart"></span> Manage Employee </a>

						<a class="list-group-item" href="admin.php?profit"><span class="glyphicon glyphicon-usd"></span> Manage Customers </a>

						<a class="list-group-item" href="admin.php?loss"><span class="glyphicon glyphicon-usd"></span> Manage Products </a>
					</div>

				</div>
					
		</section>

	<!--  Right side details -->

	<section class="col-md-10">



		<?php

		if(isset($_GET['products'])){
			
			include("admin_panel/products.php");
		}

		elseif (isset($_GET['dashboard'])) {
				include("admin_panel/dashboard.php");
			}

			
		elseif (isset($_GET['remaining_products'])) {
				include("admin_panel/remaining_products.php");
			}
		elseif (isset($_GET['employees'])) {
				include("admin_panel/employees.php");
			}
		elseif (isset($_GET['customers'])) {
				include("admin_panel/customers.php");
			}
		elseif (isset($_GET['total_members'])) {
				include("admin_panel/total_members.php");
			}
		elseif (isset($_GET['sales'])) {
				include("admin_panel/sales.php");
			}
		elseif (isset($_GET['profit'])) {
				include("admin_panel/profit.php");
			}
		elseif (isset($_GET['loss'])) {
				include("admin_panel/loss.php");
			}




		?>
	</section>


		
<!-- footer -->

<?php
	
	// include("footer.php");
?>


		
</body>
</html>
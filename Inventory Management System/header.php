<!DOCTYPE html>
<html>
<head>
	<head>
    
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    
    <link rel="stylesheet" href="css/css/bootstrap.min.css">

    </head>
    
<style type="text/css">
	
	.navbar{
		border-radius: 0px !important;
		background: #263238 !important;
		
		
	}

	.navbar a{
		color: white !important;
	}

	.navbar a:hover{
		color: lightgray !important;
	}
</style>

</head>
<body>
	<section>
			<div class="navbar navbar-inverse col-md-12">

				<div class="navbar-header">
					<a class="navbar-brand" href="admin.php?dashboard">Admin Panel</a>
				</div>


				<ul class="nav navbar-nav navbar-right">
					<li><a href="#">Products  </span></a></li>
					<li><a href="#">Contact Us </span></a></li>
					<li><a href="#">Welcome Mr. <?php session_start(); echo $_SESSION['name']; ?></a></li>
					<li><a href="session_end.php">Log Out  <span class="glyphicon glyphicon-off"></span></a></li>
				</ul>
				
			</div>
		</section>

</body>
</html>

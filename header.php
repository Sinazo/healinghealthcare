<?php
//header.php
?>
<!DOCTYPE html>
<html>
	<head>
		<title>Healing Health Care Portal</title>
		<script src="js/jquery-1.10.2.min.js"></script>
		<link rel="stylesheet" href="css/bootstrap.min.css" />
		<script src="js/jquery.dataTables.min.js"></script>
		<script src="js/dataTables.bootstrap.min.js"></script>		
		<link rel="stylesheet" href="css/dataTables.bootstrap.min.css" />
		<script src="js/bootstrap.min.js"></script> 

	</head>
	<body>
		<br />
		<div class="container">
			<h1 align="center">..:::Welcome to:::..</h1>
			<h2 align="center">Healing Health Care Portal</h2>

			<nav class="navbar navbar-inverse">
				<div class="container-fluid">
					<div class="navbar-header">
						<a href="index.php" class="navbar-brand">Home</a>
					</div>
					<ul class="nav navbar-nav">
					<?php
					if($_SESSION['type'] == 'master')
					{
					?>
						<li><a href="user.php">Client Data</a></li>
						<li><a href="category.php">Supplement type</a></li>
						<li><a href="brand.php">Supplement Brand</a></li>
						<li><a href="product.php">Supplement Info</a></li>
					<?php
					}
					?>
						<li><a href="order.php">Invoices</a></li>
					</ul>
					<ul class="nav navbar-nav navbar-right">
						<li class="dropdown">
							<a href="#" class="dropdown-toggle" data-toggle="dropdown"><span class="label label-pill label-danger count"></span> <?php echo $_SESSION["user_name"]; ?></a>
							<ul class="dropdown-menu">
								<li><a href="profile.php">Profile</a></li>
								<li><a href="logout.php">Logout</a></li>
								<li><a href="logout.php">Go back to main</a></li>
							</ul>
						</li>
					</ul>

				</div>
			</nav>
			
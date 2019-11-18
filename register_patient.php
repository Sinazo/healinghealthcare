<?php
//login.php

include('database_connection.php');

if(isset($_SESSION['type']))
{
	header("location:index.php");
}

$message = '';

if(isset($_POST["login"]))
{
	$query = "INSERT INTO user_details (user_name, user_email, user_password) VALUES (:user_name, :user_email, :user_password)";
        
    
    $statement = $connect->prepare($query);
    $statement->bindValue(':user_name', $user_name);
    $statement->bindValue(':user_email', $user_email);
    $statement->bindValue(':user_password', $user_password);
	$statement->execute();
	$count = $statement->rowCount();
	if($count > 0)
} catch (\Exception $e) {
    echo $e;
  }

}

?>
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
			<h2 align="center">..:::Healing Health Care Portal:::..</h2>
            <h2 align="center">..:::Create a new Account:::..</h2>
			<br />
			<div class="panel panel-default">
				<div class="panel-heading">Create New Account</div>
				<div class="panel-body">
					<form method="post">
						<div class="form-group">
							<label>Name</label>
							<input type="text" name="user_name" class="form-control" placeholder="Enter your Name"required />
						</div>
						<div class="form-group">
							<label>Surname</label>
							<input type="text" name="user_surname" class="form-control" placeholder="Enter your Surname" required />
						</div>
                        <div class="form-group">
							<label>Email Address</label>
							<input type="text" name="user_email" class="form-control" placeholder="Enter yout Email Address" required />
						</div>
						<div class="form-group">
							<label>Cellphone</label>
							<input type="tel" name="user_cellphone" class="form-control" placeholder="Enter your Cellphone Number"required />
						</div>
                        <div class="form-group">
							<label>New Password</label>
							<input type="password" name="user_address" class="form-control" placeholder="Enter your Home Address" required />
						</div>
                        <div class="form-group">
							<label>Confirm Password</label>
							<input type="password" name="user_address" class="form-control" placeholder="Enter your Home Address" required />
						</div>
						<div class="form-group">
							<input type="submit" name="login" value="Create Account" class="btn btn-info" />
							<br><label>Already have an account?</label><br>
							<a href="login.php"  class="btn btn-info">Sign In</a>
						</div>
					</form>
				</div>
			</div>
		</div>


</body>

</html>
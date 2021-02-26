<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="bootstrap.css" type="text/css">
	<title>login.php</title>
</head>
<body>
	<div class="container">
		<div class="row">
			<div class="col-12 col-md-5 m-auto">
				<br>
				<div class="card bg-dark text-light">
					<div class="card-body">
						<form action="#" method="post" enctype="multipart/form-data">
							<h2 class="text-center">Loging Form</h2>
							<div class="form-group">
								<label for="#">E-mail</label>
								<input type="text" name="email" placeholder="Enter The E-mail" class="form-control">
							</div>
							<div class="form-group">
								<label for="#">Password</label>
								<input type="password" name="password" placeholder="Enter The Password" class="form-control">
							</div>
							<button class="btn btn-success btn-block">Login</button>
						</form>
					</div>
				</div>
			</div>
		</div>
	</div>
</body>
</html>
<?php
session_start();
if($_SERVER["REQUEST_METHOD"]=="POST"){
	$email=$_REQUEST["email"];
	$password=$_REQUEST["password"];

	// password_verify($email, $email);

	include("conn.php");

	$query="select email,password from register where email='$email' and password='$password'";
	$result=mysqli_query($conn,$query);
	$data=mysqli_num_rows($result);
	if($data==1){
		$_SESSION["email"]=$email;
		header("location:home.php");
		echo "Logging Successfully ";
	}
	else{
		echo "Your E-mail and Password Are Incoreect";
	}
}

?>

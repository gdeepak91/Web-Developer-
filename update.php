<?php
$name=$_REQUEST["name"];
$email=$_REQUEST["email"];
$password=$_REQUEST["password"];
$dob=$_REQUEST["dob"];
$mobile=$_REQUEST["mobile"];
$address=$_REQUEST["address"];
 
include("conn.php");

?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="bootstrap.css" type="text/css">
	<title>Update.php</title>
</head>
<body>
	<div class="container">
		<div class="row">
			<div class="col-12 col-md-6 m-auto"> 
				<div class="card">
					<div class="card-body">
						<form action="#" method="post" enctype="multipart/form-data">
							<h2 class="text-center">Updation Form</h2>
							<div class="form-group">
								<label for="#">Name</label>
								<input type="text" name="name" class="form-control" value="<?php echo $name; ?>">
							</div>
							<div class="form-group">
								<label for="#">E-mail</label>
								<input type="email" name="email" class="form-control" value="<?php echo $email; ?>">
							</div>
							<div class="form-group">
								<label for="#">Password</label>
								<input type="password" name="password" class="form-control" value="<?php echo $password; ?>">
							</div>
							<div class="form-group">
								<label for="#">DOB</label>
								<input type="text" name="dob" class="form-control" value="<?php echo $dob; ?>">
							</div>
							<div class="form-group">
								<label for="#">Mobile</label>
								<input type="text" name="mobile" class="form-control" value="<?php echo $mobile; ?>">
							</div>
							<div class="form-group">
								<label for="#">Address</label>
								<textarea name="address" class="form-control"><?php echo $address; ?></textarea>
							</div>
							<button class="btn btn-success btn-block">Update</button>
						</form>
					</div>
				</div>
			</div>
		</div>
	</div>
</body>
</html>

<?php

if($_SERVER["REQUEST_METHOD"]=="POST"){
	$id=$_REQUEST["id"];
	$name=$_REQUEST["name"];
	$email=$_REQUEST["email"];
	$password=$_REQUEST["password"];
	$dob=$_REQUEST["dob"];
	$mobile=$_REQUEST["mobile"];
	$address=$_REQUEST["address"];

	$query="update register set id=$id,name='$name',email='$email',password='$password',dob='$dob',mobile='$mobile',address='$address' where id=$id";
	mysqli_query($conn,$query);
	header("location:display.php");
}




?>
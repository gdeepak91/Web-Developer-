<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="bootstrap.css" type="text/css">
	<title>Document</title>
</head>
<body>
	<div class="container">
		<div class="row">
			<div class="col-12 col-md-6 m-auto">
				<form action="#" method="post">
					<h2> Data Encryption</h2>
					<div class="form-group">
						<label for="#">Name</label>
						<input type="text" name="name" placeholder="Enter The Name" class="form-control">
					</div>
					<button class="btn btn-success">Encrypt</button>
				</form>
			</div>
		</div>
	</div>
</body>
</html>
<?php
if($_SERVER["REQUEST_METHOD"]=="POST"){
	$name=$_REQUEST["name"];
	echo $name."<br>";
	 // $name=base64_encode($name);
	// $name=md5($name);
	$name=password_hash($name, PASSWORD_BCRYPT);
	echo $name."<br>";
	// $name=base64_decode($name);
	// $name=md5($name);
	echo $name;

}


?>
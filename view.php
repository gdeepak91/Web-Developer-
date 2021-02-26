<?php
$id=$_REQUEST["id"];
$name=$_REQUEST["name"];
$email=$_REQUEST["email"];
$password=$_REQUEST["password"];
$dob=$_REQUEST["dob"];
$mobile=$_REQUEST["mobile"];
$address=$_REQUEST["address"];
$timestamp=$_REQUEST["timestamp"];

include("conn.php");

?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="bootstrap.css" type="text/css">
	<title>view.php</title>
</head>
<body>
	<div class="container">
		<div class="row">
			<div class="col">
				<br>
				<h3 class="text-center">Your Inforrmation</h3>
				<br>
				<table class="table table-bordered ">
					<tr class="text-center">
						<th>ID</th>
						<td><?php echo $id; ?></td>
					</tr>
					<tr class="text-center">
						<th>Name</th>
						<td><?php echo $name; ?></td>
					</tr>
					<tr class="text-center">
						<th>E-mail</th>
						<td><?php echo $email; ?></td>
					</tr>
					<tr class="text-center">
						<th>Password</th>
						<td><?php echo $password; ?></td>
					</tr>
					<tr class="text-center">
						<th>DOB</th>
						<td><?php echo $dob; ?></td>
					</tr>
					<tr class="text-center">
						<th>Mobile</th>
						<td><?php echo $mobile; ?></td>
					</tr>
					<tr class="text-center">
						<th>Address</th>
						<td><?php echo $address; ?></td>
					</tr>
					<tr class="text-center">
						<th>Timestamp</th>
						<td><?php echo $timestamp; ?></td>
					</tr>
					<tr class="text-center">
						<td colspan="2"><a href="display.php"><button class="btn btn-success"><i class="fa fa-backward">Back</i></button></a>
						<button class="btn btn-success" onclick="window.print()">Print</button></td>
					</tr>

				</table>
			</div>
		</div>
	</div>
</body>
</html>
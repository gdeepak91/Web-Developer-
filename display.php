<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="bootstrap.css" type="text/css">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" type="text/css">
	<title>display.php</title>
</head>
<body>
	<div class="container">
		<div class="row">
			<div class="col">
				<br>
				<h1 class="text-center">All Information Here !</h1>
				<br>
				<table>
					<tr>
						<td><a href="index.php"><button class="btn btn-success"><i class="fa fa-plus "> Insert</i></button></a></td>
						<td><a href="search.php"><button class="btn btn-success"><i class="fa fa-search "> Search</i></button></a></td>
						<td><a href="login.php"><button class="btn btn-success"><i class="fa fa-sign-in "> Login</i></button></a></td>
					</tr>
				</table>
				<br>
				<table class="table table-hover table-bordered text-center">
					<tr>
						<th>ID</th>
						<th>Name</th>
						<th>E-mail</th>
						<th>Password</th>
						<th>DOB</th>
						<th>Mobile</th>
						<th>Address</th>
						<th>Timestamp</th>
						<!-- <th>Image</th> -->
						<th>View</th>
						<th>Edit</th>
						<th>Delete</th>
					</tr>
			<?php
				include("conn.php");

				$query="select * from register";
				$result=mysqli_query($conn,$query);
				while($row=mysqli_fetch_array($result))
				{

			?>
				<tr class="text-center">
					<td><?php echo $row[0]; ?></td>
					<td><?php echo $row[1]; ?></td>
					<td><?php echo $row[2]; ?></td>
					<td><?php echo $row[3]; ?></td>
					<td><?php echo $row[4]; ?></td>
					<td><?php echo $row[5]; ?></td>
					<td><?php echo $row[6]; ?></td>
					<td><?php echo $row[7]; ?></td>
					<td><a href="view.php?id=<?php echo $row[0]; ?> && name=<?php echo $row[1]; ?> && email=<?php echo $row[2]; ?> && password=<?php echo $row[3]; ?> && dob=<?php echo $row[4]; ?> && mobile=<?php echo $row[5]; ?> && address=<?php echo $row[6]; ?>  && timestamp=<?php echo $row[7]; ?>"><button class="btn btn-success"><i class="fa fa-eye "> View</i></button></a></td>
					<td><a href="update.php?id=<?php echo $row[0]; ?> && name=<?php echo $row[1]; ?> && email=<?php echo $row[2]; ?> && password=<?php echo $row[3]; ?> && dob=<?php echo $row[4]; ?> && mobile=<?php echo $row[5]; ?> && address=<?php echo $row[6]; ?> && timestamp=<?php echo $row[7]; ?> "><button class="btn btn-success"><i class="fa fa-edit "> Edit</i></button></a></td>
					<td><a href="delete.php?id=<?php echo $row[0]; ?>"><button class="btn btn-success"><i class="fa fa-trash " > Delete</i></button></a></td>
					
				</tr>
			<?php
				}
			?>

				</table>
			</div>
		</div>
	</div>
</body>
</html>
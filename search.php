 <!DOCTYPE html>
 <html lang="en">
 <head>
 	<meta charset="UTF-8">
 	<meta name="viewport" content="width=device-width, initial-scale=1.0">
 	<link rel="stylesheet" href="bootstrap.css" type="text/css">
 	<title>search.php</title>
 </head>
 <body>
 	<div class="container">
 		<div class="row">
 			<div class="col-12 col-md-6 m-auto">
 				<br>
 				<div class="card bg-dark text-light">
 					<div class="card-body">
 						<form action="#" method="post" enctype="multipart/form-data">
 							<h2 class="text-center">Search Your Data !</h2>
 							<br>
 							<div class="form-group">
 								<label for="#">Name</label>
 								<input type="text" name="name" placeholder="Enter The Name" class="form-control">
 							</div>
 							<button class="btn btn-success">Search</button>
 							<br>
 							<br>
 						</form>
 					</div>
 				</div>
 				<br>
 				<table class="table">
					<tr class="text-center">
 						<th>ID</th>
 						<th>Name</th>
 						<th>E-mail</th>
 						<th>Password</th>
 						<th>DOB</th>
 						<th>Mobile</th>
 						<th>Address</th>
 					</tr>
 			<?php
				if($_SERVER["REQUEST_METHOD"]=="POST"){
					$name=$_REQUEST["name"];

					include("conn.php");

					$query="select * from register where name like '%$name%'";
					$data=mysqli_query($conn,$query);
					while($result=mysqli_fetch_assoc($data)){

						// echo "You Name Is ".$result["name"];
 			?>	

 					<tr>
 						<th><?php echo $result["id"]; ?></th>
 						<th><?php echo $result["name"]; ?></th>
 						<th><?php echo $result["email"]; ?></th>
 						<th><?php echo $result["password"]; ?></th>
 						<th><?php echo $result["dob"]; ?></th>
 						<th><?php echo $result["mobile"]; ?></th> 
 						<th><?php echo $result["address"]; ?></th>
 					</tr>
 			<?php
 				}
 			}

 			?>

 				</table>
 			</div>
 		</div>
 	</div>
 </body>
 </html>

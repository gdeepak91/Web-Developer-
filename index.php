<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<!-- <link rel="stylesheet" href="bootstrap.css"> -->
	<title>Document</title>
	<?= bootstrap(); ?>
</head>
<body>
	<div class="container">
		<div class="row">
			<div class="col-12 col-md-6 m-auto">
			<form action="#" method="post" enctype="multipart/form-data">
				<h2 class="text-center">Registration Form !</h2>
				<div class="form-group">
					<label for="#">Name</label>
					<input type="text" name="name" placeholder="Enter The Name" class="form-control">
				</div>
				<div class="form-group">
					<label for="#">E-mail</label>
					<input type="email" name="email" placeholder="Enter The E-mail" class="form-control">
				</div>
				<div class="form-group">
					<label for="#">Password</label>
					<input type="password" name="password" placeholder="Enter The Password" class="form-control">
				</div>
				<div class="form-group">
					<label for="#">Address</label>
					<textarea name="address" class="form-control" placeholder="Enter The Address"></textarea>
				</div>
				<div class="form-group">
					<label for="#">Image</label>
					<input type="file" name="image" class="form-control">
				</div>
				<button class="btn btn-success btn-block">Register</button>
			</form>
			</div>
		</div>
	</div>
</body>
</html>
<?php
if($_SERVER["REQUEST_METHOD"]=="POST"){

	$name=$_REQUEST["name"];
	// echo $name;
	header('Content-Type: application/pdf');
	header('Content-Disposition:attachment;filename="'.$name.'.pdf"');
	// header('Content-length:');
	// header('Content-Description:');
	// header('Content-Transfer:')
	readfile('original.pdf');
}
	
?>
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
				<h2>Download The PDF File</h2>
				<br>
				<form action="#" method="post" enctype="multipart/form-data">
					<div class="form-group">
						<label for="#">Name</label>
						<input type="text" name="name" class="form-control" placeholder="Enter The Name">
					</div>
					<button class="btn btn-success">Submit</button>
				</form>
			</div>
		</div>
	</div>
</body>
</html>
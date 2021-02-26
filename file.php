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
				<br>
				<form action="#" method="post" enctype="multipart/form-data">
					<h2 class="text-center">File Upload !</h2>
					<br>
					<div class="form-group">
						<label for="#">File</label>
						<input type="file" name="img" class="form-control" multiple="true">
					</div>
					<button class="btn btn-success">Upload</button>
				</form>
			</div>
		</div>
	</div>
</body>
</html>
<?php
if($_SERVER["REQUEST_METHOD"]=="POST"){
	$name=$_FILES["img"]["name"];
	$tmp_name=$_FILES["img"]["tmp_name"];
	$type=$_FILES["img"]["type"];
	$size=$_FILES["img"]["size"];
	$error=$_FILES["img"]["error"];
	// $name=$_FILES["img"]["name"];
	// print_r($_FILES);
	if($error==0){
		$destimg="image/".$name;
		if(move_uploaded_file($tmp_name, $destimg))
			echo "<script>alert('File Is Successfully Uploaded !')</script>";
		else
			echo "<script>alert('File Is not Successfully Uploaded !')</script>";

	}
}


?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
	<?= bootstrap(); ?>
	<?php
		$result=$this->db->get_where('curd',['id'=>$id]);
		$result=$this->db->row_array($result);
	?>
</head>
<body>
	<div class="container">
		<div class="row">
			<div class="col-12 col-md-6 m-auto">
			<br>
			<br>
				<h2 class="text-center">Download File Now </h2>
				<br>
				<table class="table table-bordered">
					<tr class="text-center">
						<td>ID</td>
						<td><?= $result['id'];?></td>
					</tr>
					<tr class="text-center">
						<td>Name</td>
						<td><?= $result['name'];?></td>
					</tr>
					<tr class="text-center">
						<td>E-mail</td>
						<td><?= $result['email'];?></td>
					</tr>
					<tr class="text-center">
						<td>Password</td>
						<td><?= $result['password'];?></td>
					</tr>
					<tr class="text-center">
						<td>Address</td>
						<td><?= $result['address'];?></td>
					</tr>
					<tr class="text-center">
						<td>Image</td>
						<td><img src="<?= base_url(); ?>picture/<?= $result['image']; ?>" width="60" height="60" class="rounded-circle"></td>
					</tr>
					<tr class="text-center">
						<td colspan="2"><a href="#"><button class="btn btn-success" download="download">Download Now</button></a></td>
					</tr>
				</table>	

				</table>
			</div>
		</div>
	</div>
</body>
</html>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
	<?= bootstrap(); ?>
</head>
<body>
	<div class="container">
		<div class="row">
			<div class="col">
				<h2 class="text-center">Display Information !</h2>
				<table class="table table-bordered">
					<tr class="text-center">
						<td>ID</td>
						<td>Name</td>
						<td>E-mail</td>
						<td>Password</td>
						<td>Address</td>
						<td>Image</td>
						<td colspan="4">Operation</td>
					</tr>
				<?php
					$result=$this->db->get('curd');
					// $result=$this->db->row_array($result);
					$result = $this->db->result_array($result);
					foreach($result as $value) {
				?>
					<tr class="text-center">
						<td><?= $value['id']; ?></td>
						<td><?= $value['name']; ?></td> 
						<td><?= $value['email']; ?></td>
						<td><?= $value['password']; ?></td>
						<td><?= $value['address']; ?></td>
						<td><img src="<?= base_url(); ?>picture/<?= $value['image']; ?>" width="60" height="60" class="rounded-circle"></td>
						<td><a href="<?= site_url('Deepak/update').'?id='.base64_encode($value['id']); ?>"><button class="btn btn-success">Update</button></a></td>
						<td><a href="<?= site_url('Deepak/remove').'?id='.base64_encode($value['id']); ?>" ><button class="btn btn-success">Delete</button></a></td>
						<td><a href="<?= site_url('Deepak/show').'?id='.base64_encode($value['id']); ?>"><button class="btn btn-success">View</button></a></td>
						 
						<td><a href="<?= site_url('Deepak/download').'?id='.base64_encode($value['id']); ?>" ><button class="btn btn-success">Download</button></a></td>
					</tr>
				<?php } ?>
				</table>
				<center><a href="" class="text-center"><button class="btn btn-success">Export Excel</button></a></center>
			</div>
		</div>
	</div>
</body>
</html>
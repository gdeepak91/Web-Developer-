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
				<h3 class="text-center">Dr A P J ABDUL KALAM UNIVERSITY LUCKNOW UP.</h2>
				
				<table class="table table-bordered">

			<?php
				include("conn.php");
				$query="select * from aktu";
				$data=mysqli_query($conn,$query);
				while($row=mysqli_fetch_array($data))
				{

			?>	
					<tr>
						<th>Roll No.</th>
						<td><?php echo $row[11]; ?></td>
					</tr>

					<tr>
						<th>Name</th>
						<td><?php echo $row[1]; ?></td>
					</tr>

					<tr>
						<th>E-mail</th>
						<td><?php echo $row[2]; ?></td>
					</tr>

					<tr>
						<th>Gender</th>
						<td><?php echo $row[4]; ?></td>
					</tr>

					<tr>
						<th>DOB</th>
						<td><?php echo $row[5]; ?></td>
					</tr>

					<tr>
						<th>Mobile</th>
						<td><?php echo $row[6]; ?></td>
					</tr>

					<tr>
						<th>Father's Name</th>
						<td><?php echo $row[7]; ?></td>
					</tr>

					<tr>
						<th>Mother's Name</th>
						<td><?php echo $row[8]; ?></td>
					</tr>

					<tr>
						<th>College Name/th>
						<td><?php echo $row[9]; ?></td>
					</tr>

					<tr>
						<th>Address</th>
						<td><?php echo $row[10]; ?></td>
					</tr>

					<tr>
						<th>Course</th>
						<td><?php echo $row[12]; ?></td>
					</tr>

					<tr>
						<th>Semester</th>
						<td><?php echo $row[13]; ?></td>
					</tr>
					<tr>
						<th>Joinin Date</th>
						<td><?php echo $row[14]; ?></td>
					</tr>

					 
			<?php

				// header('Content-Description:');
				// header('Content-Transfer:');
				header('Content-Type:application/pdf');
				header('Content-Disposition:attachmment;filename="'.$name.'.pdf"');

				}
			?>

				</table>
			</div>
		</div>
	</div>
</body>
</html>
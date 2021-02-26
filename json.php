<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="boootstrap.css" type="text/css">
	<title>JSON</title>
</head>
<body>
	<div class="container">
		<div class="row">
			<div class="col-12 col-md-6 m-auto">
				<h2 class="text-center"> JSON Example - </h2>
				<br>
				<div id="name"></div>
			</div>
		</div>
	</div>
	<script>

	var	req = new XMLHttpRequest();
		req.onreadystatechange = function(){
			if(req.readyState == 4 && req.status == 200)
			{
				var myObj=JSON.parse(req.responseText);
				document.getElementById("name").innerHTML=myObj.address;
			}
		}
			req.open("GET","json.txt",true);
			req.send();

	</script>
</body>
</html>
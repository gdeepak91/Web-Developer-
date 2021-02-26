<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="bootstrap.css" type="text/css">
	<title>Live Search</title>
</head>
<body>
	<div class="container">
		<div class="row">
			<div class="col-12 col-md-6 m-auto">
				<br>
				<h2 class="text-center">Live Search !</h2>
				<br>
				<div class="form-group">
					<label for="#">Name</label>
					<input type="text" name="name" placeholder="Enter The Name" class="form-control" onkeyup="search(this.value)">
					<br>
					<p>Suggest :- <span id="suggest"></span></p>
				</div>
				<!-- <button class="btn btn-success" onkeyup="search(this.value)">Search</button> -->
			</div>
		</div>
	</div>
	<script>
		function search(str){
			// document.getElementById("suggest").innerHTML=str;
			if(str.length==0)
			{
				document.getElementById("suggest").innerHTML="";
				return;
			}
			else{
				var req = new XMLHttpRequest();
					req.onreadystatechange=function(){
						if(req.readyState == 4 && req.status == 200)
						{
							document.getElementById("suggest").innerHTML=req.responseText;
						}
					}
					// req.open("GET","info.php?q="+str, true);
					req.open("GET","info.html", true);
					req.send();
				}
			}
	</script>
</body>
</html>
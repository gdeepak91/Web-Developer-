<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="bootstrap.css" type="text/css">
	<title>Index.php</title>
<script type="text/javascript">
	function myvalid(){
		var chr=/^[A-Za-z]+$/;
		// var mail=/^[a-zA-Z0-9.!#$%&'*+/=?^_`{|}~-]+@[a-zA-Z0-9-]+(?:\.[a-zA-Z0-9-]+)*$/;
		var name=document.getElementById("name").value;
		var email=document.getElementById("email").value;
		var password=document.getElementById("password").value;
		var dob=document.getElementById("dob").value;
		var mobile=document.getElementById("mobile").value;
		var address=document.getElementById("address").value;

		if(name==''){
			document.getElementById("name_err").innerHTML="** Please Fill The Name Field";
			return false;
		}
		if(name.length<3){
			document.getElementById("name_err").innerHTML="** Name Must be At-least 3 Character";
			return false;
		}
		if(name.length>30){
			document.getElementById("name_err").innerHTML="** Name Must be At-most 30 Character";
			return false;
		}
		if(name.match(chr)){
			return true;	
		}
		else{
			document.getElementById("name_err").innerHTML="** Name Only Allow The Character";
			return false;
		}

		if(email==''){
			document.getElementById("email_err").innerHTML="** Please Fill The E-mail Field";
			return false;
		}

	 
	  	// if (email.match(mail))
	  	// {
	   //  	return (true);
	  	// }
	  	// else{
	  	// 	document.getElementById("email_err").innerHTML="** @ and . Position Error";
	  	// 	return false;
	  	// }

		if(password==''){
			document.getElementById("password_err").innerHTML="** Please Fill The Password Field";
			return false;
		}
		if(password.length<6){
			document.getElementById("password_err").innerHTML="** Password Must be At-least 6 Character";
			return false;
		}
		if(password.length>30){
			document.getElementById("password_err").innerHTML="** Password Must be At-most 30 Character";
			return false;
		}
		if(dob==''){
			document.getElementById("dob_err").innerHTML="** Please Fill The DOB Field";
			return false;
		}
		if(mobile==''){
			document.getElementById("mobile_err").innerHTML="** Please Fill The Mobile Field";
			return false;
		}
		if(mobile.length!=10){
			document.getElementById("mobile_err").innerHTML="** Mobile Must be 10 digit";
			return false;
		}
		if(isNaN(mobile)){
			document.getElementById("mobile_err").innerHTML="** Mobile Only Allow The Number";
			return false;
		}
		if(mobile.charAt(0)!='9' && mobile.charAt(0)!='8' && mobile.charAt(0)!='7'){
			document.getElementById("mobile_err").innerHTML="** Mobile No. Start Width 9 , 8 and 7 Digit";
			return false;
		}
		if(address==''){
			document.getElementById("address_err").innerHTML="** Please Fill The Address Field";
			return false;
		}

}
</script>
</head>
<body>
	<div class="container">
		<div class="row">
			<div class="col-12 col-md-6 m-auto">
				<div class="card bg-dark text-light">
					<div class="card-body">
						<h3 class="text-center">Registration Form</h3>
						<form action="#" method="POST" enctype="multipart/form-data" onsubmit="return myvalid()">
							<div class="form-group">
								<label for="#">Name</label>
								<input type="text" name="name" id="name" placeholder="Enter The Name" class="form-control">
								<span class="font-weight-bold text-danger" id="name_err"></span>
							</div>
                            <div class="form-group">
								<label for="#">E-mail</label>
								<input type="email" name="email" id="email" placeholder="Enter The E-mail" class="form-control">
								<span class="font-weight-bold text-danger" id="email_err"></span>
							</div>
                            <div class="form-group">
								<label for="#">Password</label>
								<input type="password" name="password" id="password" placeholder="Enter The Password" class="form-control">
								<span class="font-weight-bold text-danger" id="password_err"></span>
							</div>
                            <div class="form-group">
								<label for="#">DOB</label>
								<input type="date" name="dob" id="dob" placeholder="Enter The DOB" class="form-control">
								<span class="font-weight-bold text-danger" id="dob_err"></span>
							</div>
                            <div class="form-group">
								<label for="#">Mobile</label>
								<input type="number" name="mobile" id="mobile" placeholder="Enter The Mobile" class="form-control">
								<span class="font-weight-bold text-danger" id="mobile_err"></span>
							</div>
                            <div class="form-group">
								<label for="#">Address</label>
								<textarea name="address" id="address" placeholder="Enter The Address" class="form-control"></textarea>
								<span class="font-weight-bold text-danger" id="address_err"></span>
							</div>
							<button class="btn btn-danger btn-block">Register</button>
						</form>
					</div>
				</div>
			</div>
		</div>
	</div>
</body>
</html>
<?php
if($_SERVER["REQUEST_METHOD"]=="POST"){
	$name=$_REQUEST["name"];
	$email=$_REQUEST["email"];
	$password=$_REQUEST["password"];
	$dob=$_REQUEST["dob"];
	$mobile=$_REQUEST["mobile"];
	$address=$_REQUEST["address"];
 			
//  Data Encyption Method 1 Using base64_encode() function

	// $name=base64_encode($name);
	// $email=base64_encode($email);
	// $password=base64_encode($password);
	// $dob=base64_encode($dob);
	// $mobile=base64_encode($mobile);
	// $address=base64_encode($address);

//  Data Encyption Method 2 Using MD5() function

	// $name=md5($name);
	// $email=md5($email);
	// $password=md5($password);
	// $dob=md5($dob);
	// $mobile=md5($mobile);
	// $address=md5($address);

//  Data Encyption Method 3 Using password_hash() function

	$name=password_hash($name, PASSWORD_BCRYPT);
	$email=password_hash($email, PASSWORD_BCRYPT);
	$password=password_hash($password, PASSWORD_BCRYPT);
	$dob=password_hash($dob, PASSWORD_BCRYPT);
	$mobile=password_hash($mobile, PASSWORD_BCRYPT);
	$address=password_hash($address, PASSWORD_BCRYPT); 

//	Print the Data 

	// echo $name." Total Length of String ".strlen($name)."<br>";
	// echo $email." Total Length of String ".strlen($email)."<br>";
	// echo $password." Total Length of String ".strlen($password)."<br>";
	// echo $dob." Total Length of String ".strlen($dob)."<br>";	
	// echo $mobile." Total Length of String ".strlen($mobile)."<br>";
	// echo $address." Total Length of String ".strlen($address)."<br>";

	include("conn.php");

	$query="insert into register(name,email,password,dob,mobile,address) values('$name','$email','$password','$dob','$mobile','$address')";
	$data=mysqli_query($conn,$query);
	// header("location:display.php");
	echo "<script>window.location.href='display.php'</script>";
}
?>
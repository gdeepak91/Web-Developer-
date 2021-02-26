<?php
$conn=mysqli_connect("localhost","root","","database2");
if($conn==false){
	echo "Connection Failed Because of ".mysqli_connect_error();
}

?>
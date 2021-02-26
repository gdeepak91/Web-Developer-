<?php
include("conn.php");
$id=$_GET["id"];
$query="delete from register where id=$id";
mysqli_query($conn,$query);
// echo $id;
header("location:display.php");



?>
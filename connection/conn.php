<?php
//connecting to the database
$con = mysqli_connect("localhost","root","","olx");
$conShop = mysqli_connect("localhost","root","","olxpersonnalshop");

//if the connection is unsuccessful, returns a message and the error.
if(!$con || !$conShop){
	echo "<script>alert('Connection failed.');</script";
	die('Could not connect: ' . mysqli_error());
}
?>
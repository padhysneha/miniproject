<?php
	$conn = new mysqli("localhost","root","123456","cart_system");
	if($conn->connect_error){
		die("Connection Failed!".$conn->connect_error);
	}
?>
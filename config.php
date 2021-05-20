<?php
	$conn = new mysqli("localhost","root","123456","csv_db6");
	if($conn->connect_error){
		die("Connection Failed!".$conn->connect_error);
	}
?>
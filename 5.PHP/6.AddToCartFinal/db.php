<?php
$con = mysqli_connect("localhost","root","","cart");
	if (!$con){
		echo "Failed to connect to MySQL: " . mysqli_connect_error();
		die();
		}
?>
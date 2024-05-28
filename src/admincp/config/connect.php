<?php 
	$servername = "localhost";
	$username = "username";
	$password = "";
	$database = "cake-house";

	// Create connection
	$conn = new mysqli($servername, $username, $password, $database);
	
	// Check connection
	if ($conn->connect_errno) {
	  echo "Lỗi kết nối".$conn->connect_error;
	  exit();
	}
?>
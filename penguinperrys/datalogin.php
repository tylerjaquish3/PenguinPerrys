<?php
	//godaddy connection
	/*$servername = "localhost";
	$username = "travis915admin";
	$password = "bubbles3993";
	$dbname = "penguin_perrys";*/
	
	//local connection
	$servername = "localhost";
	$username = "root";
	$password = "boboth1";
	$dbname = "penguin_perrys";
	
	
	// Create connection
	$conn = new mysqli($servername, $username, $password, $dbname);
	// Check connection
	if ($conn->connect_error) {
		die("Connection failed: " . $conn->connect_error);
	} 
?>
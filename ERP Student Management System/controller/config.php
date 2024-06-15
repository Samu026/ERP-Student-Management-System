<?php

$servername = "localhost";
$username   = "alardcoe_std_db";
$password   = "Soham@1234";
$dbname     = "alardcoe_std_db";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);

// Check connection
if (!$conn) {
	
die("Connection failed: " . mysqli_connect_error());

}

?>
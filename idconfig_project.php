<?php
$servername = "localhost:3306";
$username = "root";
$password = "011126";

// Create connection_aborted
$conn = new mysqli($servername, $username, $password);

if($conn->connect_error){
	die("Connection failed: "+$conn->connect_error);
}else{
	echo "Success!";
}
?>

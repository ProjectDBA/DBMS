<?php
$servername = "localhost:3306";//172.30.70.17
$username = "root";
$password = "0000";
$dbname = "project _ db";//?‚˜ì¤‘ì— ?ˆ˜? • ?•„?š”

// Create connection_aborted
$conn = new mysqli($servername, $username, $password, $dbname);

if($conn->connect_error){
	die("Connection failed: "+$conn->connect_error);
}

?>

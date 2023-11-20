<?php
$servername = "localhost:3306";
$username = "root";
$password = "011126";
$dbname = "world";//나중에 수정 필요

// Create connection_aborted
$conn = new mysqli($servername, $username, $password, $dbname);

if($conn->connect_error){
	die("Connection failed: "+$conn->connect_error);
}else{
	echo "Success!";
}
?>

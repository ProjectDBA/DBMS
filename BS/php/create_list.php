<?php include 'idconfig_project.php'; 

mysqli_select_db($conn, $dbname) or die('DB selection failed');

$sql = "SELECT Tel_Type From Telephone;";

$result = $conn->query($sql);

echo "<ul class='unsignedlist'>";
if($result->num_rows > 0){
	while($row = $result->fetch_assoc()){
		echo "<li class='listt' onclick='gettext(this);'>", $row["Tel_Type"], "</li>";
	}
}else{
	echo "0 Results";
}

echo "</ul>";

$conn->close();
?>


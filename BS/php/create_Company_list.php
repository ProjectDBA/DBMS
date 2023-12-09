<?php include 'idconfig_project.php'; 

mysqli_select_db($conn, $dbname) or die('DB selection failed');

$sql = "SELECT M.Manufacturer_Name FROM Manufacturer M;";

$result = $conn->query($sql);

echo "<ul class='unsignedlist'>";
if($result->num_rows > 0){
	while($row = $result->fetch_assoc()){
		echo "<li class='listt' onclick='getComtext(this);'>", $row["Manufacturer_Name"], "</li>";
	}
}else{
	echo "0 Results";
}

echo "</ul>";

$conn->close();
?>


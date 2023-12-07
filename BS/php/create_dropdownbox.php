<?php include 'idconfig_project.php'; 

mysqli_select_db($conn, $dbname) or die('DB selection failed');

$sql = "SELECT Tel_Type From Telephone;";

$result = $conn->query($sql);

echo "<select name='pname' class='pdropbox'>";
if($result->num_rows > 0){
	while($row = $result->fetch_assoc()){
		echo "<option value='", $row["Tel_Type"], "'>", $row["Tel_Type"], "</option>";
	}
}else{
	echo "0 Results";
}

echo "</select>";
echo "<button class='btn btn-primary abled combtn' type='submit' value='select' id ='combutton'>Select</button>";
?>
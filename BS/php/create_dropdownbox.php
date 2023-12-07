<?php include 'idconfig_project.php'; 

mysqli_select_db($conn, $dbname) or die('DB selection failed');

$sqll = "SELECT Tel_Type From Telephone;";

$resultl = $conn->query($sqll);

echo "<select name='pname' class='pdropbox'>";
if($resultl->num_rows > 0){
	while($row = $resultl->fetch_assoc()){
		echo "<option value='", $row["Tel_Type"], "'>", $row["Tel_Type"], "</option>";
	}
}else{
	echo "0 Results";
}

echo "</select>";
echo "<button class='btn btn-primary btn-lg abled' type='submit' value='select'>Select</button>";

?>
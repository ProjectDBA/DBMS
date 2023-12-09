<?php include 'idconfig_project.php'; 

mysqli_select_db($conn, $dbname) or die('DB selection failed');

$sqll = "SELECT Tel_Type From Telephone;";

$resultl = $conn->query($sqll);

echo "<select name='p2name' class='pdropbox'>";
if($resultl->num_rows > 0){
	while($rowl = $resultl->fetch_assoc()){
		echo "<option value='", $rowl["Tel_Type"], "'>", $rowl["Tel_Type"], "</option>";
	}
}else{
	echo "0 Results";
}

echo "</select>";
echo "<button class='btn btn-primary abled combtn' type='button' onclick='formc(2);' id ='combutton'>Select</button>";

?>
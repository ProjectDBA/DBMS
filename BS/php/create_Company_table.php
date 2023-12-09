<?php
include 'idconfig_project.php'; 

mysqli_select_db($conn, $dbname) or die('DB selection failed');

$selectedValue = isset($_POST['selected']) ? $_POST['selected'] : '- Select -';

$sql = "
SELECT T.Tel_Type
FROM Telephone T
JOIN Manufacturer M
on T.Manufacturer_ID = M.Manufacturer_Id
WHERE M.Manufacturer_Name = '$selectedValue';
";

$result = $conn->query($sql);

if($result->num_rows > 0){
	while ($row = $result->fetch_assoc()) {
		echo "<span class='Comphone'>", $row["Tel_Type"],"</span>";
	}
}else{
	echo "0 Results";
}
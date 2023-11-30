<?php include 'idconfig_project.php'; 

mysqli_select_db($conn, $dbname) or die('DB selection failed');

$selectedValue = isset($_POST['selected']) ? $_POST['selected'] : '';

$sql = "
SELECT T.Tel_Type
From Telephone T JOIN Body B
ON T.Tel_Type = B.Tel_Type
WHERE weight < {
    SELECT B.weight
    FROM Telephone T JOIN Body B
    ON T.Tel_Type = B.Tel_Type
    WHERE T.Tel_Type = '$selectedValue'}
ORDER BY B.weight DESC
LIMIT 5;";

$result = $conn->query($sql);

echo "<datalist id='dlist'>";
if($result->num_rows > 0){
	while($row = $result->fetch_assoc()){
		echo "<option value='", $row["Tel_Type"], "'/>";
	}
}else{
	echo "0 Results";
}

echo "</datalist>";

$conn->close();
?>


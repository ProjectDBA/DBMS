<?php include '../php/idconfig_project.php'; 

mysqli_select_db($conn, $dbname) or die('DB selection failed');

$selectedValue = isset($_POST['selected']) ? $_POST['selected'] : '- Select -';

$sql = "
SELECT T.Tel_Type
From Telephone T JOIN Body B
ON T.Tel_Type = B.Tel_Type
WHERE weight < (
    SELECT B.weight
    FROM Telephone T JOIN Body B
    ON T.Tel_Type = B.Tel_Type
    WHERE T.Tel_Type = '$selectedValue')
ORDER BY B.weight DESC
LIMIT 5;
";

$result = $conn->query($sql);

if($result->num_rows > 0){
	while($row = $result->fetch_assoc()){
    echo "<p>", $row["Tel_Type"], "</p>";
	}
}else{
	echo "0 Results";
}

$conn->close();
?>


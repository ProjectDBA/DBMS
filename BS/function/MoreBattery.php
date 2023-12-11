<?php include '../php/idconfig_project.php'; 

mysqli_select_db($conn, $dbname) or die('DB selection failed');

$selectedValue = isset($_POST['selected']) ? $_POST['selected'] : '- Select -';

$sql = "
SELECT T.Tel_Type, B.Size
FROM Telephone T JOIN Battery B
ON T.Tel_Type = B.Tel_Type
WHERE B.Size > (
    SELECT B.Size
    FROM Telephone T JOIN Battery B
    ON T.Tel_Type = B.Tel_Type
    WHERE T.Tel_Type = '$selectedValue')
ORDER BY B.Size
LIMIT 5;
";

$result = $conn->query($sql);

if($result->num_rows > 0){
	while($row = $result->fetch_assoc()){
    echo "<p class='fuc'>", $row["Tel_Type"], " - ", $row["Size"], "mAh</p>";
	}
}else{
	echo "0 Results";
}

$conn->close();
?>


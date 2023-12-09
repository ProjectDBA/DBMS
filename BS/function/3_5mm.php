<?php include '../php/idconfig_project.php'; 

mysqli_select_db($conn, $dbname) or die('DB selection failed');

$selectedValue = isset($_POST['selected']) ? $_POST['selected'] : '';

$sql = "
SELECT T.Tel_Type
FROM Telephone T JOIN Sound S
ON T.Tel_Type = S.Tel_Type
WHERE S.3_5mm_Jack = 'Y';
";

$result = $conn->query($sql);

if($result->num_rows > 0){
	while($row = $result->fetch_assoc()){
    echo"<p>", $row["Tel_Type"], "</p>";
	}

}else{
	echo "0 Results";
}

$conn->close();
?>
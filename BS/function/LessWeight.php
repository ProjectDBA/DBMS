<?php include '../php/idconfig_project.php'; 

mysqli_select_db($conn, $dbname) or die('DB selection failed');

$selectedValue = isset($_POST['selected']) ? $_POST['selected'] : '- Select -';

$sql = "
SELECT Tel_Type, weight
From Body B
WHERE weight < (
    SELECT weight
    FROM Body B
    WHERE Tel_Type = '$selectedValue')
ORDER BY weight DESC
LIMIT 5;
";

$result = $conn->query($sql);

if($result->num_rows > 0){
	while($row = $result->fetch_assoc()){
    echo "<p class='fuc'>", $row["Tel_Type"], " - ", $row["weight"], "g</p>";
	}
}else{
	echo "0 Results";
}

$conn->close();
?>


<?php include 'idconfig_project.php'; 

mysqli_select_db($conn, $dbname) or die('DB selection failed');

$MaxValue = isset($_POST['max']) ? $_POST['max'] : '';
$MinValue = isset($_POST['min']) ? $_POST['min'] : '';

$sql = "
SELECT Tel_Type, Price
FROM Telephone
WHERE Price > '$MinValue'
AND Price < '$MaxValue'
ORDER BY T.Price DESC
LIMIT 10;
";

$result = $conn->query($sql);

if($result->num_rows > 0){
	while($row = $result->fetch_assoc()){
    echo $row["Tel_Type"], "  ", $row["Price"], "  ";
	}
}else{
	echo "0 Results";
}

$conn->close();
?>
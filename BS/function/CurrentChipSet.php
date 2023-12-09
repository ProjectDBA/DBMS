<?php include '../php/idconfig_project.php'; 

mysqli_select_db($conn, $dbname) or die('DB selection failed');

$selectedValue = isset($_POST['selected']) ? $_POST['selected'] : '- Select -';

$sql = "
SELECT T.Tel_Type
FROM Telephone T JOIN Platform P
ON T.Tel_Type = P.Tel_Type
WHERE P.Chipset = (
    SELECT P.Chipset
    FROM Platform P JOIN Telephone T
    ON P.Tel_Type = T.Tel_Type
    WHERE T.Tel_Type = '$selectedValue')
AND T.Tel_Type <> '$selectedValue'
ORDER BY T.Price DESC
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
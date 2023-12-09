<?php include '../php/idconfig_project.php'; 

mysqli_select_db($conn, $dbname) or die('DB selection failed');

$selectedValue = isset($_POST['selected']) ? $_POST['selected'] : '- Select -';

$sql = "
SELECT T.Tel_Type
FROM Telephone T JOIN Camera C
on T.Tel_Type = C.Tel_Type
WHERE C.M_Quard;
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
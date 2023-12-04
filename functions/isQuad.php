<?php include 'idconfig_project.php'; 

mysqli_select_db($conn, $dbname) or die('DB selection failed');

$selectedValue = isset($_POST['selected']) ? $_POST['selected'] : '';

$sql = "
SELECT T.Tel_Type
FROM Telephone T JOIN camera C
on T.Tel_Type = C.Tel_Type
WHERE C.M_Quard <> NULL;
";

$result = $conn->query($sql);

if($result->num_rows > 0){
	while($row = $result->fetch_assoc()){
    echo $row["Tel_Type"], "  ";
	}
}else{
	echo "0 Results";
}

$conn->close();
?>
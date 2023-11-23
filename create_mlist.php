<?php include 'idconfig_project.php'; 

mysqli_select_db($conn, $dbname) or die('DB selection failed');

$sql = "SELECT Manufacturer_Name From Manufacturer;";
// �޴��� �̸� ��������

$result = $conn->query($sql);

echo "<ul>";
if($result->num_rows > 0){
    //�����Ͱ� �ִ� ���? ����
	while($row = $result->fetch_assoc()){
		echo "<li class='listt' onclick='gettext(this);'>", $row["Manufacturer_Name"], "</li>";
	}
}else{
    // �����Ͱ� ���� ���? ����
	echo "0 Results";
}

echo "</ul>";

$conn->close();
?>


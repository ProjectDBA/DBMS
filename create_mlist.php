<?php include 'idconfig_project.php'; 

mysqli_select_db($conn, $dbname) or die('DB selection failed');

$sql = "SELECT Manufacturer_Id From Manufacturer;";
// �޴��� �̸� ��������

$result = $conn->query($sql);

echo "<ul id='listt'>";
if($result->num_rows > 0){
    //�����Ͱ� �ִ� ���? ����
	while($row = $result->fetch_assoc()){
		echo "<li onclick='gettext(this);'>", $row["Manufacturer_Id"], "</li>";
	}
}else{
    // �����Ͱ� ���� ���? ����
	echo "0 Results";
}

echo "</ul>";

$conn->close();
?>


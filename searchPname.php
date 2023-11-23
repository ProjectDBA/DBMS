<?php include 'idconfig_project.php'; 

mysqli_select_db($conn, $dbname) or die('DB selection failed');

$sql = "SELECT Tel_Type From Telephone;";
// �޴��� �̸� ��������

$result = $conn->query($sql);

echo "<datalist id='dlist'>";
if($result->num_rows > 0){
    //�����Ͱ� �ִ� ���? ����
	while($row = $result->fetch_assoc()){
		echo "<option value='", $row["Tel_Type"], "'/>";
	}
}else{
    // �����Ͱ� ���� ���? ����
	echo "0 Results";
}

echo "</datalist>";

$conn->close();
?>


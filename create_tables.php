<?php
include 'idconfig_project.php'; 

mysqli_select_db($conn, $dbname) or die('DB selection failed');

// ������ �� �޾ƿ���
$selectedValue = isset($_GET['selected']) ? $_GET['selected'] : '';

$sql = "SELECT * FROM Telephone WHERE Tel_Type = '$selectedValue';";
//sql�� �ۼ� !!!!!!!!!!!!!!!!!!

$result = $conn->query($sql);

if($result->num_rows > 0){
    //�����Ͱ� �ִ� ��� ����
	while($row = $result->fetch_assoc()){
		echo "";//���⿡ ǥ �ۼ� !!!!!!!!!!!!!!!!!!!!
	}
}else{
    // �����Ͱ� ���� ��� ����
	echo "0 Results";
}

$conn->close();
?>

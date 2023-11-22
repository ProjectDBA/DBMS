<?php
include 'idconfig_project.php'; 

mysqli_select_db($conn, $dbname) or die('DB selection failed');

// 선택한 값 받아오기
$selectedValue = isset($_GET['selected']) ? $_GET['selected'] : '';

$sql = "SELECT * FROM Telephone WHERE Tel_Type = '$selectedValue';";
//sql문 작성 !!!!!!!!!!!!!!!!!!

$result = $conn->query($sql);

if($result->num_rows > 0){
    //데이터가 있는 경우 실행
	while($row = $result->fetch_assoc()){
		echo "";//여기에 표 작성 !!!!!!!!!!!!!!!!!!!!
	}
}else{
    // 데이터가 없는 경우 실행
	echo "0 Results";
}

$conn->close();
?>

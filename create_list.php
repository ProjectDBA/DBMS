<?php include 'idconfig_project.php'; 

// db선택
$dbname = ''; //db선택 !!!!!!!!!!!!!!
mysqli_select_db($conn, $dbname) or die('DB selection failed');

$sql = "SELECT Tel_Type From Telephone;";
// 휴대폰 이름 가져오기

$result = $conn->query($sql);

echo "<ul id='list'>";
if($result->num_rows > 0){
    //데이터가 있는 경우 실행
	while($row = $result->fetch_assoc()){
		echo "<li>", $row["Tel_Type"], "</li>";
	}
}else{
    // 데이터가 없는 경우 실행
	echo "0 Results";
}

echo "</ul>";

$conn->close();
?>


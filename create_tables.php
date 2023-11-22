<script>
    var list = document.getElementById("list");

    list.addEventListener('click', function handleClick(event){
        var selected = event.target.innerHTML;
    });

</script>

<?php include 'idconfig_project.php'; 

// db선택
$dbname = ''; //db선택 !!!!!!!!!!!!!!!!!
mysqli_select_db($conn, $dbname) or die('DB selection failed');

$sql = "
SELECT *
FROM ? JOIN ? JOIN ?...
";
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

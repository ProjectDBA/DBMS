<script>
    var list = document.getElementById("list");

    list.addEventListener('click', function handleClick(event){
        var selected = event.target.innerHTML;
    });

</script>

<?php include 'idconfig_project.php'; 

// db����
$dbname = ''; //db���� !!!!!!!!!!!!!!!!!
mysqli_select_db($conn, $dbname) or die('DB selection failed');

$sql = "
SELECT *
FROM ? JOIN ? JOIN ?...
";
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

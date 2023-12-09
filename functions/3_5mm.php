<?php include 'idconfig_project.php'; 

mysqli_select_db($conn, $dbname) or die('DB selection failed');

$sql = "
SELECT T.Tel_Type
FROM Telephone T JOIN Sound S
ON T.Tel_Type = S.Tel_Type
WHERE S.3_5mm_Jack = 'Y';
";

$result = $conn->query($sql);

if($result->num_rows > 0){
	echo "<div id='modal' class='modal-overlay'>
			<div class='modal-window'>
				<div class='title'>
					<h2>И№До</h2>
				</div>
				<div class='close-area'>X</div>
				<div class='content'>";

	while($row = $result->fetch_assoc()){
    echo    		"<p>", $row["Tel_Type"], "</p>";
	}

	echo"		</div>
			</div>
		</div>";
}else{
	echo "0 Results";
}

$conn->close();
?>
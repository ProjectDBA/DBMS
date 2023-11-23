<?php
include 'idconfig_project.php'; 

mysqli_select_db($conn, $dbname) or die('DB selection failed');

// 선택한 값 받아오기
$selectedValue = isset($_POST['selected']) ? $_POST['selected'] : '';

$sql = "
SELECT T.Tel_Type, T.Price, T.GeekbenchPerformance, M.Manufacturer_Name, T.Announced, T.Released
FROM Telephone T
JOIN Manufacturer M
on T.Manufacturer_ID = M.Manufacturer_Id
WHERE T.Tel_Type = '$selectedValue';
"; //sql문 작성 !!!!!!!!!!!!!!!!!!

$result = $conn->query($sql);

if($result->num_rows > 0){
    //데이터가 있는 경우 실행
	while ($row = $result->fetch_assoc()) {
		echo "<h2>", $row["Tel_Type"], "</h2>
		<table>
			<tr>
				<td class='relation' rowspan='5'>Telephone</td>
				<td class='attri'>Price</td>
				<td id='TelephonePriceData'>", $row["Price"], "</td>
			</tr>
			<tr>
				<td class='attri'>Geekbench Performance</td>
				<td id='TelephoneGeekbenchPerformanceData'>", $row["GeekbenchPerformance"], "</td>
			</tr>
			<tr>
				<td class='attri'>Manufacturer Name</td>
				<td id='TelephoneManufacturerNameData'>", $row["Manufacturer_Name"], "</td>
			</tr>
			<tr>
				<td class='attri'>Released</td>
				<td id='TelephoneReleasedData'>", $row["Released"], "</td>
			</tr>
			<tr>
				<td class='attri'>Announced</td>
				<td id='TelephoneAnnouncedData'>", $row["Announced"], "</td>
			</tr>";
	}
	//여기에 표 작성 !!!!!!!!!!!!!!!!!!!
}else{
	// 데이터가 없는 경우 실행
	echo "0 Results";
}

$sql = "
SELECT P.OS, P.Chipset, P.CPU, P.GPU 
FROM Telephone T
JOIN Platform P
on T.Tel_Type = P.Tel_Type
WHERE T.Tel_Type = '$selectedValue';
";
$result = $conn->query($sql);

if($result->num_rows > 0){
    //데이터가 있는 경우 실행
	while ($row = $result->fetch_assoc()) {
		echo
			"<tr>
				<td class='relation' rowspan='4'>Platform</td>
				<td class='attri'>OS</td>
				<td id='PlatformOSData'>", $row["OS"], "</td>
			</tr>
			<tr>
				<td class='attri'>Chipset</td>
				<td id='PlatformChipsetData'>", $row["Chipset"], "</td>
			</tr>
			<tr>
				<td class='attri'>CPU</td>
				<td id='PlatformCPUData'>", $row["CPU"], "</td>
			</tr>
			<tr>
				<td class='attri'>GPU</td>
				<td id='PlatformGPUData'>", $row["GPU"], "</td>
			</tr>";
	}
	//여기에 표 작성 !!!!!!!!!!!!!!!!!!!
}else{
	// 데이터가 없는 경우 실행
	echo "0 Results";
}

$sql = "
SELECT M.Max_Storage, M.Max_Ram, M.Card_Slot
FROM Telephone T
JOIN memory M
on T.Tel_Type = M.Tel_Type
WHERE T.Tel_Type = '$selectedValue';
";
$result = $conn->query($sql);

if($result->num_rows > 0){
    //데이터가 있는 경우 실행
	while ($row = $result->fetch_assoc()) {
		echo
			"<tr>
				<td class='relation' rowspan='4'>Memory</td>
				<td class='attri'>Max Storage</td>
				<td id='PlatformMaxStorageData'>", $row["Max_Storage"], "</td>
			</tr>
			<tr>
				<td class='attri'>Max Ram</td>
				<td id='PlatformMaxRamData'>", $row["Max_Ram"], "</td>
			</tr>
			<tr>
				<td class='attri'>Card Slot</td>
				<td id='PlatformCardSlotData'>", $row["Card_Slot"], "</td>
			</tr>";
	}
	//여기에 표 작성 !!!!!!!!!!!!!!!!!!!
}else{
	// 데이터가 없는 경우 실행
	echo "0 Results";
}

$sql = "
SELECT B.Size, B.MaxWiredChargingSpeed, B.WirelessChargingSpeed
FROM Telephone T
JOIN Battery B
on T.Tel_Type = B.Tel_Type
WHERE T.Tel_Type = '$selectedValue';
";
$result = $conn->query($sql);

if($result->num_rows > 0){
    //데이터가 있는 경우 실행
	while ($row = $result->fetch_assoc()) {
		echo
			"<tr>
				<td class='relation' rowspan='4'>Battery</td>
				<td class='attri'>Size</td>
				<td id='BatterySizeData'>", $row["Size"], "</td>
			</tr>
			<tr>
				<td class='attri'>Max Wired Charging Speed</td>
				<td id='BatteryMaxWiredData'>", $row["MaxWiredChargingSpeed"], "</td> <!--id = Battery Max Wired Charging Speed Data-->
			</tr>
			<tr>
				<td class='attri'>Wire Less Charging Speed</td>
				<td id='BatteryWireLessData'>", $row["WirelessChargingSpeed"], "</td> <!--id = Battery Wire Less Charging Speed Data-->
			</tr>";
	}
	//여기에 표 작성 !!!!!!!!!!!!!!!!!!!
}else{
	// 데이터가 없는 경우 실행
	echo "0 Results";
}

echo "</table>";

$conn->close();
?>


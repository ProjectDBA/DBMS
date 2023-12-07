<?php
include 'idconfig_project.php'; 

mysqli_select_db($conn, $dbname) or die('DB selection failed');

$selectedValue = isset($_POST['selected']) ? $_POST['selected'] : '- Select -';

$sql = "
SELECT T.Tel_Type, T.Picture, T.Price, T.GeekbenchPerformance, M.Manufacturer_Name, T.Announced, T.Released
FROM Telephone T
JOIN Manufacturer M
on T.Manufacturer_ID = M.Manufacturer_Id
WHERE T.Tel_Type = '$selectedValue';
";

$result = $conn->query($sql);

if($result->num_rows > 0){
	while ($row = $result->fetch_assoc()) {
		echo "<h2 class='Phonename'>", $row["Tel_Type"], "</h2>
		<table class='Phonetable' id='ViewPerformance'>
            <tr>
                <td> </td>
                <td> <h2 class='Phonename'>Performance</h2></td>
                <form action='#' method='post'>
                    <td>", include 'create_dropdownbox.php';
        echo"       </td>
                </form>
            </tr>
            <td class='relation' rowspan='7'>Telephone</td>
            <tr>
				<td class='attri'>Image</td>
				<td class='datavalue' id='Telimg'><img src='", $row["Picture"], "' alt='Image'></td>
			</tr>
            <tr>
				<td class='attri'>Price</td>
				<td class='datavalue' id='TelephonePriceData'>", $row["Price"], "$</td>
			</tr>
			<tr>
				<td class='attri'>Geekbench Performance</td>
				<td class='datavalue' id='TelephoneGeekbenchPerformanceData'>", $row["GeekbenchPerformance"], "</td>
			</tr>
			<tr>
				<td class='attri'>Manufacturer Name</td>
				<td class='datavalue' id='TelephoneManufacturerNameData'>", $row["Manufacturer_Name"], "</td>
			</tr>
			<tr>
				<td class='attri'>Released</td>
				<td class='datavalue' id='TelephoneReleasedData'>", $row["Released"], "</td>
			</tr>
			<tr>
				<td class='attri'>Announced</td>
				<td class='datavalue' id='TelephoneAnnouncedData'>", $row["Announced"], "</td>
			</tr>";
	}
}else{
    echo "result 0", $conn->error;
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
	while ($row = $result->fetch_assoc()) {
		echo
        "
        <td class='relation' rowspan='5'>Platform</td>
        <tr>
            <td class='attri'>OS</td>
            <td class='datavalue' id='PlatformOSData'>", $row["OS"], "</td>
        </tr>
        <tr>
            <td class='attri'>Chipset</td>
            <td class='datavalue' id='PlatformChipsetData'>", $row["Chipset"], "</td>
        </tr>
        <tr>
            <td class='attri'>CPU</td>
            <td class='datavalue' id='PlatformCPUData'>", $row["CPU"], "</td>
        </tr>
        <tr>
            <td class='attri'>GPU</td>
            <td class='datavalue' id='PlatformGPUData'>", $row["GPU"], "</td>
        </tr>";
	}
}else{
	echo
        "
        <td class='relation' rowspan='5'>Platform</td>
        <tr>
            <td class='attri'>OS</td>
            <td class='datavalue' id='PlatformOSData'></td>
        </tr>
        <tr>
            <td class='attri'>Chipset</td>
            <td class='datavalue' id='PlatformChipsetData'></td>
        </tr>
        <tr>
            <td class='attri'>CPU</td>
            <td class='datavalue' id='PlatformCPUData'></td>
        </tr>
        <tr>
            <td class='attri'>GPU</td>
            <td class='datavalue' id='PlatformGPUData'></td>
        </tr>";
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
	while ($row = $result->fetch_assoc()) {
		echo
		"
        <td class='relation' rowspan='4'>Memory</td>
        <tr>
            <td class='attri'>Max Storage</td>
            <td class='datavalue' id='MemoryStorageData'>", $row["Max_Storage"], "GB</td>
        </tr>
        <tr>
            <td class='attri'>Max Ram</td>
            <td class='datavalue' id='MemoryRamData'>", $row["Max_Ram"], "GB</td>
        </tr>
        <tr>
            <td class='attri'>Card Slot</td>
            <td class='datavalue' id='MemorySlotData'>", $row["Card_Slot"], "</td>
        </tr>";
	}
}else{
	echo
		"
        <td class='relation' rowspan='4'>Memory</td>
        <tr>
            <td class='attri'>Max Storage</td>
            <td class='datavalue' id='MemoryStorageData'></td>
        </tr>
        <tr>
            <td class='attri'>Max Ram</td>
            <td class='datavalue' id='MemoryRamData'></td>
        </tr>
        <tr>
            <td class='attri'>Card Slot</td>
            <td class='datavalue' id='MemorySlotData'></td>
        </tr>";
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
	while ($row = $result->fetch_assoc()) {
		echo
        "
        <td class='relation' rowspan='4'>Battery</td>
        <tr>
            <td class='attri'>Size</td>
            <td class='datavalue' id='BatterySizeData'>", $row["Size"], "mAh</td>
        </tr>
        <tr>
            <td class='attri'>Max Wired Charging Speed</td>
            <td class='datavalue' id='BatteryWiredData'>", $row["MaxWiredChargingSpeed"], "W</td> <!--id = Battery Max Wired Charging Speed Data-->
        </tr>
        <tr>
            <td class='attri'>Wire Less Charging Speed</td>
            <td class='datavalue' id='BatteryWireLessData'>", $row["WirelessChargingSpeed"], "W</td> <!--id = Battery Wire Less Charging Speed Data-->
        </tr>";
	}
}else{
	echo
        "
        <td class='relation' rowspan='4'>Battery</td>
        <tr>
            <td class='attri'>Size</td>
            <td class='datavalue' id='BatterySizeData'></td>
        </tr>
        <tr>
            <td class='attri'>Max Wired Charging Speed</td>
            <td class='datavalue' id='BatteryWiredData'></td> <!--id = Battery Max Wired Charging Speed Data-->
        </tr>
        <tr>
            <td class='attri'>Wire Less Charging Speed</td>
            <td class='datavalue' id='BatteryWireLessData'></td> <!--id = Battery Wire Less Charging Speed Data-->
        </tr>";
}

$sql = "
SELECT C.Fingerprint, C.Face_ID, C.UltraWideband, C.Network_Max_Band, C.USB_Type
FROM Telephone T
JOIN comms C
on T.Tel_Type = C.Tel_Type
WHERE T.Tel_Type = '$selectedValue';
";
$result = $conn->query($sql);

if($result->num_rows > 0){
	while ($row = $result->fetch_assoc()) {
		echo
        "
        <td class='relation' rowspan='6'>Comms</td>
        <tr>
            <td class='attri'>Fingerprint</td>
            <td class='datavalue' id='CommsFingerprintData'>", $row["Fingerprint"], "</td>
        </tr>
        <tr>
            <td class='attri'>Face ID</td>
            <td class='datavalue' id='CommsFaceIDData'>", $row["Face_ID"], "</td>
        </tr>
        <tr>
            <td class='attri'>UltraWideband</td>
            <td class='datavalue' id='CommsWidebandData'>", $row["UltraWideband"], "</td>
        </tr>
        <tr>
            <td class='attri'>Network Max Band</td>
            <td class='datavalue' id='CommsNetworkData'>", $row["Network_Max_Band"], "</td> <!--id = Network Max Band Data-->
        </tr>
        <tr>
            <td class='attri'>USB Type</td>
            <td class='datavalue' id='CommsUSBData'>", $row["USB_Type"], "</td> <!--Comms USB Type Data-->
        </tr>";
	}
}else{
	echo
        "
        <td class='relation' rowspan='6'>Comms</td>
        <tr>
            <td class='attri'>Fingerprint</td>
            <td class='datavalue' id='CommsFingerprintData'></td>
        </tr>
        <tr>
            <td class='attri'>Face ID</td>
            <td class='datavalue' id='CommsFaceIDData'></td>
        </tr>
        <tr>
            <td class='attri'>UltraWideband</td>
            <td class='datavalue' id='CommsWidebandData'></td>
        </tr>
        <tr>
            <td class='attri'>Network Max Band</td>
            <td class='datavalue' id='CommsNetworkData'></td> <!--id = Network Max Band Data-->
        </tr>
        <tr>
            <td class='attri'>USB Type</td>
            <td class='datavalue' id='CommsUSBData'></td> <!--Comms USB Type Data-->
        </tr>";
}

$sql = "
SELECT C.M_Single, C.M_Multi, C.M_Triple, C.M_Quard, C.M_Video, C.F_Single, C.F_Multi
FROM Telephone T
JOIN camera C
on T.Tel_Type = C.Tel_Type
WHERE T.Tel_Type = '$selectedValue';
";
$result = $conn->query($sql);

if($result->num_rows > 0){
	while ($row = $result->fetch_assoc()) {
		echo
        "
        <td class='relation' rowspan='8'>Camera</td>
        <tr>
            <td class='attri'>Main Single</td>
            <td class='datavalue' id='CameraMSingleData'>", $row["M_Single"], "</td> <!--id='Camera Main Single Data'-->
        </tr>
        <tr>
            <td class='attri'>Main Multi</td>
            <td class='datavalue' id='CameraMMultiData'>", $row["M_Multi"], "</td> <!--id='Camera Main Multi Data'-->
        </tr>
        <tr>
            <td class='attri'>Main Triple</td>
            <td class='datavalue' id='CameraMTripleData'>", $row["M_Triple"], "</td> <!--id='Camera Main Triple Data'-->
        </tr>
        <tr>
            <td class='attri'>Main Quard</td>
            <td class='datavalue' id='CameraMQuardData'>", $row["M_Quard"], "</td> <!--id='Camera Main Quard Data'-->
        </tr>
        <tr>
            <td class='attri'>Main Video</td>
            <td class='datavalue' id='CameraMVideoData'>", $row["M_Video"], "</td> <!--id='Camera Main Video Data'-->
        </tr>
        <tr>
            <td class='attri'>Front Single</td>
            <td class='datavalue' id='CameraFSingleData'>", $row["F_Single"], "</td> <!--id='Camera Front Single Data'-->
        </tr>
        <tr>
            <td class='attri'>Front Multi</td>
            <td class='datavalue' id='CameraFMultiData'>", $row["F_Multi"], "</td> <!--id='Camera  Front Multi Data'-->
        </tr>";
	}
}else{
	echo
        "
        <td class='relation' rowspan='8'>Camera</td>
        <tr>
            <td class='attri'>Main Single</td>
            <td class='datavalue' id='CameraMSingleData'></td> <!--id='Camera Main Single Data'-->
        </tr>
        <tr>
            <td class='attri'>Main Multi</td>
            <td class='datavalue' id='CameraMMultiData'></td> <!--id='Camera Main Multi Data'-->
        </tr>
        <tr>
            <td class='attri'>Main Triple</td>
            <td class='datavalue' id='CameraMTripleData'></td> <!--id='Camera Main Triple Data'-->
        </tr>
        <tr>
            <td class='attri'>Main Quard</td>
            <td class='datavalue' id='CameraMQuardData'></td> <!--id='Camera Main Quard Data'-->
        </tr>
        <tr>
            <td class='attri'>Main Video</td>
            <td class='datavalue' id='CameraMVideoData'></td> <!--id='Camera Main Video Data'-->
        </tr>
        <tr>
            <td class='attri'>Front Single</td>
            <td class='datavalue' id='CameraFSingleData'></td> <!--id='Camera Front Single Data'-->
        </tr>
        <tr>
            <td class='attri'>Front Multi</td>
            <td class='datavalue' id='CameraFMultiData'></td> <!--id='Camera  Front Multi Data'-->
        </tr>";
}

$sql = "
SELECT S.StereoSpeaker, S.3_5mm_Jack
FROM Telephone T
JOIN sound S
on T.Tel_Type = S.Tel_Type
WHERE T.Tel_Type = '$selectedValue';
";
$result = $conn->query($sql);

if($result->num_rows > 0){
	while ($row = $result->fetch_assoc()) {
		echo
        "
        <td class='relation' rowspan='3'>Sound</td>
        <tr>
            <td class='attri'>Stereo Speaker</td>
            <td class='datavalue' id='SoundStereoData'>", $row["StereoSpeaker"], "</td> <!--id='Sound Stereo Speaker Data'-->
        </tr>
        <tr>
            <td class='attri'>3.5mm Jack</td>
            <td class='datavalue' id='Sound3_5JackData'>", $row["3_5mm_Jack"], "</td> <!--id='Sound 3.5 Jack Data'-->
        </tr>";
	}
}else{
	echo
        "
        <td class='relation' rowspan='3'>Sound</td>
        <tr>
            <td class='attri'>Stereo Speaker</td>
            <td class='datavalue' id='SoundStereoData'></td> <!--id='Sound Stereo Speaker Data'-->
        </tr>
        <tr>
            <td class='attri'>3.5mm Jack</td>
            <td class='datavalue' id='Sound3_5JackData'></td> <!--id='Sound 3.5 Jack Data'-->
        </tr>";
}

$sql = "
SELECT D.Type, D.Size, D.Resolution, D.Protection, D.Always_on_Display
FROM Telephone T
JOIN display D
on T.Tel_Type = D.Tel_Type
WHERE T.Tel_Type = '$selectedValue';
";
$result = $conn->query($sql);

if($result->num_rows > 0){
	while ($row = $result->fetch_assoc()) {
		echo
        "
        <td class='relation' rowspan='6'>Display</td>
        <tr>
            <td class='attri'>Type</td>
            <td class='datavalue' id='DisplayTypeData'>", $row["Type"], "</td>
        </tr>
        <tr>
            <td class='attri'>Size</td>
            <td class='datavalue' id='DisplaySizeData'>", $row["Size"], "</td>
        </tr>
        <tr>
            <td class='attri'>Resolution</td>
            <td class='datavalue' id='DisplayResolutionData'>", $row["Resolution"], "</td>
        </tr>
        <tr>
            <td class='attri'>Protection</td>
            <td class='datavalue' id='DisplayProtectionData'>", $row["Protection"], "</td>
        </tr>
        <tr>
            <td class='attri'>Always on Display</td>
            <td class='datavalue' id='DisplayAODData'>", $row["Always_on_Display"], "</td> <!--id='Displa Always On Display Data'-->
        </tr>";
	}
}else{
	echo "0 Results";
}

$sql = "
SELECT B.Height, B.Length, B.Width, B.Weight, B.Rear_Material, B.Frame
FROM Telephone T
JOIN body B
on T.Tel_Type = B.Tel_Type
WHERE T.Tel_Type = '$selectedValue';
";
$result = $conn->query($sql);

if($result->num_rows > 0){
	while ($row = $result->fetch_assoc()) {
		echo
        "
        <td class='relation' rowspan='7'>Body</td>
        <tr>
            <td class='attri'>Height</td>
            <td class='datavalue' id='BodyHeightData'>", $row["Height"], "mm</td>
        </tr>
        <tr>
            <td class='attri'>Length</td>
            <td class='datavalue' id='BodyLenghtData'>", $row["Length"], "mm</td>
        </tr>
        <tr>
            <td class='attri'>Width</td>
            <td class='datavalue' id='BodyWidthData'>", $row["Width"], "mm</td>
        </tr>
        <tr>
            <td class='attri'>Weight</td>
            <td class='datavalue' id='BodyWeightData'>", $row["Weight"], "g</td>
        </tr>
        <tr>
            <td class='attri'>Rear Material</td>
            <td class='datavalue' id='BodyMaterialData'>", $row["Rear_Material"], "</td>
        </tr>
        <tr>
            <td class='attri'>Frame</td>
            <td class='datavalue' id='BodyFrameData'>", $row["Frame"], "</td>
        </tr>";
	}
}else{
	echo "0 Results";
}

echo "</table>";

?>
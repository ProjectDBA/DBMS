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
		echo "
		<table class='Phonetable' id='ViewPerformance'>
            <tr>
                <td>
                    <form id='form2'>
                        ", include 'create_dropdownbox2.php';
        echo"
                    </form>
                </td>
            </tr>
            <tr>
				<td class='datavalue' id='Telimg'><img src='", $row["Picture"], "' alt='Image'></td>
			</tr>
            <tr>
				<td class='datavalue' id='TelephonePriceData'>", $row["Price"], "$</td>
			</tr>
			<tr>
				<td class='datavalue' id='TelephoneGeekbenchPerformanceData'>", $row["GeekbenchPerformance"], "</td>
			</tr>
			<tr>
				<td class='datavalue' id='TelephoneManufacturerNameData'>", $row["Manufacturer_Name"], "</td>
			</tr>
			<tr>
				<td class='datavalue' id='TelephoneReleasedData'>", $row["Released"], "</td>
			</tr>
			<tr>
				<td class='datavalue' id='TelephoneAnnouncedData'>", $row["Announced"], "</td>
			</tr>";
	}
}else{
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
	while ($row = $result->fetch_assoc()) {
		echo
        "
        <tr>
            <td class='datavalue' id='PlatformOSData'>", $row["OS"], "</td>
        </tr>
        <tr>
            <td class='datavalue' id='PlatformChipsetData'>", $row["Chipset"], "</td>
        </tr>
        <tr>
            <td class='datavalue' id='PlatformCPUData'>", $row["CPU"], "</td>
        </tr>
        <tr>
            <td class='datavalue' id='PlatformGPUData'>", $row["GPU"], "</td>
        </tr>";
	}
}else{
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
	while ($row = $result->fetch_assoc()) {
		echo
		"
        <tr>
            <td class='datavalue' id='MemoryStorageData'>", $row["Max_Storage"], "GB</td>
        </tr>
        <tr>
            <td class='datavalue' id='MemoryRamData'>", $row["Max_Ram"], "GB</td>
        </tr>
        <tr>
            <td class='datavalue' id='MemorySlotData'>", $row["Card_Slot"], "</td>
        </tr>";
	}
}else{
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
	while ($row = $result->fetch_assoc()) {
		echo
        "
        <tr>
            <td class='datavalue' id='BatterySizeData'>", $row["Size"], "mAh</td>
        </tr>
        <tr>
            <td class='datavalue' id='BatteryWiredData'>", $row["MaxWiredChargingSpeed"], "W</td> <!--id = Battery Max Wired Charging Speed Data-->
        </tr>
        <tr>
            <td class='datavalue' id='BatteryWireLessData'>", $row["WirelessChargingSpeed"], "W</td> <!--id = Battery Wire Less Charging Speed Data-->
        </tr>";
	}
}else{
	echo "0 Results";
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
        <tr>
            <td class='datavalue' id='CommsFingerprintData'>", $row["Fingerprint"], "</td>
        </tr>
        <tr>
            <td class='datavalue' id='CommsFaceIDData'>", $row["Face_ID"], "</td>
        </tr>
        <tr>
            <td class='datavalue' id='CommsWidebandData'>", $row["UltraWideband"], "</td>
        </tr>
        <tr>
            <td class='datavalue' id='CommsNetworkData'>", $row["Network_Max_Band"], "</td> <!--id = Network Max Band Data-->
        </tr>
        <tr>
            <td class='datavalue' id='CommsUSBData'>", $row["USB_Type"], "</td> <!--Comms USB Type Data-->
        </tr>";
	}
}else{
	echo "0 Results";
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
        <tr>
            <td class='datavalue' id='CameraMSingleData'>", $row["M_Single"], "</td> <!--id='Camera Main Single Data'-->
        </tr>
        <tr>
            <td class='datavalue' id='CameraMMultiData'>", $row["M_Multi"], "</td> <!--id='Camera Main Multi Data'-->
        </tr>
        <tr>
            <td class='datavalue' id='CameraMTripleData'>", $row["M_Triple"], "</td> <!--id='Camera Main Triple Data'-->
        </tr>
        <tr>
            <td class='datavalue' id='CameraMQuardData'>", $row["M_Quard"], "</td> <!--id='Camera Main Quard Data'-->
        </tr>
        <tr>
            <td class='datavalue' id='CameraMVideoData'>", $row["M_Video"], "</td> <!--id='Camera Main Video Data'-->
        </tr>
        <tr>
            <td class='datavalue' id='CameraFSingleData'>", $row["F_Single"], "</td> <!--id='Camera Front Single Data'-->
        </tr>
        <tr>
            <td class='datavalue' id='CameraFMultiData'>", $row["F_Multi"], "</td> <!--id='Camera  Front Multi Data'-->
        </tr>";
	}
}else{
	echo "0 Results";
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
        <tr>
            <td class='datavalue' id='SoundStereoData'>", $row["StereoSpeaker"], "</td> <!--id='Sound Stereo Speaker Data'-->
        </tr>
        <tr>
            <td class='datavalue' id='Sound3_5JackData'>", $row["3_5mm_Jack"], "</td> <!--id='Sound 3.5 Jack Data'-->
        </tr>";
	}
}else{
	echo "0 Results";
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
        <tr>
            <td class='datavalue' id='DisplayTypeData'>", $row["Type"], "</td>
        </tr>
        <tr>
            <td class='datavalue' id='DisplaySizeData'>", $row["Size"], "</td>
        </tr>
        <tr>
            <td class='datavalue' id='DisplayResolutionData'>", $row["Resolution"], "</td>
        </tr>
        <tr>
            <td class='datavalue' id='DisplayProtectionData'>", $row["Protection"], "</td>
        </tr>
        <tr>
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
        <tr>
            <td class='datavalue' id='BodyHeightData'>", $row["Height"], "mm</td>
        </tr>
        <tr>
            <td class='datavalue' id='BodyLenghtData'>", $row["Length"], "mm</td>
        </tr>
        <tr>
            <td class='datavalue' id='BodyWidthData'>", $row["Width"], "mm</td>
        </tr>
        <tr>
            <td class='datavalue' id='BodyWeightData'>", $row["Weight"], "g</td>
        </tr>
        <tr>
            <td class='datavalue' id='BodyMaterialData'>", $row["Rear_Material"], "</td>
        </tr>
        <tr>
            <td class='datavalue' id='BodyFrameData'>", $row["Frame"], "</td>
        </tr>";
	}
}else{
	echo "0 Results";
}

echo "</table>";

?>
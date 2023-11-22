<?php include ("idconfig_project.php"); ?>

<!DOCTYPE html>
<html lang="KO">

<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="./style.css">
    <link rel="stylesheet" href="./dimension.css">

    <title>site</title>
    <style>
        div {
            border: 1px solid black;
        }

        table, tr, td, th {
            border: 1px solid black;
        }
    </style>
</head>

<body>
    <script type='text/javascript' src="create_table.js"></script>
    <div class="main-body">
        <div class="header">
            <div id="logo">
                <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/7/77/Google_Images_2015_logo.svg/1200px-Google_Images_2015_logo.svg.png" width="200px" height="60px">
            </div>
            <div id="input">
                <input id="inputbox" type="text" placeholder="text">
                <button class="button">Search</button>
            </div>
        </div>
        <div class="base">
            <div class="sub-menu">
                <a class="sub-menu-list" id="sub-menu1">View Performance</a>
                <a class="sub-menu-list" id="sub-menu2"
                style="
                border-left: 2px solid black;
                border-right: 2px solid black;">Compare</a>
                <a class="sub-menu-list" id="sub-menu3">ALL Phones</a>
            </div>
            <div class="contents">
                <div class="list" id="list">
                    <?php include ("create_list.php"); ?>
                </div>
                <div class="perform">
                    <div class="page" id="mainpage">
                        This is MainPage
                    </div>
                    <div class="page" id="page1">
                        <h1>Phone Name</h1>
                        <table>
                            <tr>
                                <td class="relation" rowspan="4">Platform</td>
                                <td class="attri">OS</td>
                                <td id="PlatformOSData">OS data</td>
                            </tr>
                            <tr>
                                <td class="attri">Chipset</td>
                                <td id="PlatformChipsetData">Chipset data</td>
                            </tr>
                            <tr>
                                <td class="attri">CPU</td>
                                <td id="PlatformCPUData">CPU data</td>
                            </tr>
                            <tr>
                                <td class="attri">GPU</td>
                                <td id="PlatformGPUData">GPU data</td>
                            </tr>
                            <td class="relation" rowspan="4">Memory</td>
                            <tr>
                                <td class="attri">Max Storage</td>
                                <td id="PlatformMaxStorageData">Max Storage data</td>
                            </tr>
                            <tr>
                                <td class="attri">Max Ram</td>
                                <td id="PlatformMaxRamData">Max Ram data</td>
                            </tr>
                            <tr>
                                <td class="attri">Card Slot</td>
                                <td id="PlatformCardSlotData">Card Slot data</td>
                            </tr>
                            <td class="relation" rowspan="4">Battery</td>
                            <tr>
                                <td class="attri">Size</td>
                                <td id="BatterySizeData">Size data</td>
                            </tr>
                            <tr>
                                <td class="attri">Max Wired Charging Speed</td>
                                <td id="BatteryMaxWiredData">Max Wired Charging Speed data</td> <!--id = Battery Max Wired Charging Speed Data-->
                            </tr>
                            <tr>
                                <td class="attri">Wire Less Charging Speed</td>
                                <td id="BatteryWireLessData">Wire Less Charging Speed data</td> <!--id = Battery Wire Less Charging Speed Data-->
                            </tr>
                            <td class="relation" rowspan="6">Comms</td>
                            <tr>
                                <td class="attri">Fingerprint</td>
                                <td id="CommsFingerprintData">Fingerprint data</td>
                            </tr>
                            <tr>
                                <td class="attri">Face ID</td>
                                <td id="CommsFaceIDData">Face ID data</td>
                            </tr>
                            <tr>
                                <td class="attri">UltraWideband</td>
                                <td id="CommsUltraWidebandData">UltraWideband data</td>
                            </tr>
                            <tr>
                                <td class="attri">Network Max Band</td>
                                <td id="CommsNetworkData">Network Max Band data</td> <!--id = Network Max Band Data-->
                            </tr>
                            <tr>
                                <td class="attri">USB Type</td>
                                <td id="CommsUSBData">USB Type data</td> <!--Comms USB Type Data-->
                            </tr>
                            <td class="relation" rowspan="8">Camera</td>
                            <tr>
                                <td class="attri">Main Single</td>
                                <td id="CameraMSingleData">Main Single data</td> <!--id="Camera Main Single Data"-->
                            </tr>
                            <tr>
                                <td class="attri">Main Multi</td>
                                <td id="CameraMMultiData">Main Multi data</td> <!--id="Camera Main Multi Data"-->
                            </tr>
                            <tr>
                                <td class="attri">Main Triple</td>
                                <td id="CameraMTripleData">Main Triple data</td> <!--id = "Camera Main Triple Data"-->
                            </tr>
                            <tr>
                                <td class="attri">Main Quard</td>
                                <td id="CameraMQuardData">Main Quard data</td> <!--id = "Camera Main Quard Data"-->
                            </tr>
                            <tr>
                                <td class="attri">Main Video</td>
                                <td id="CameraMVideoData">Main Video data</td> <!--id = "Camera Main Video Data"-->
                            </tr>
                            <tr>
                                <td class="attri">Front Single</td>
                                <td id="CameraFSingleData">Front Single data</td> <!--id="Camera Front Single Data"-->
                            </tr>
                            <tr>
                                <td class="attri">Front Multi</td>
                                <td id="CameraFMultiData">Front Multi data</td> <!--id="Camera  Front Multi Data"-->
                            </tr>
                            <td class="relation" rowspan="3"> Sound </td>
                            <tr>
                                <td class="attri">Stereo Speaker</td>
                                <td id="SoundStereoData">Stereo Speaker data</td> <!--id="Sound Stereo Speaker Data"-->
                            </tr>
                            <tr>
                                <td class="attri">3.5mm Jack</td>
                                <td id="Sound3_5JackData">3.5mm Jack data</td> <!--id="Sound 3.5 Jack Data"-->
                            </tr>
                            <td class="relation" rowspan="6">Display</td>
                            <tr>
                                <td class="attri">Type</td>
                                <td id="DisplayTypeData">Type data</td>
                            </tr>
                            <tr>
                                <td class="attri">Size</td>
                                <td id="DisplaySizeData">Size data</td>
                            </tr>
                            <tr>
                                <td class="attri">Resolution</td>
                                <td id="DisplayResolutionData">Resolution data</td>
                            </tr>
                            <tr>
                                <td class="attri">Protection</td>
                                <td id="DisplayProtectionData">Protection data</td>
                            </tr>
                            <tr>
                                <td class="attri">Always on Display</td>
                                <td id="DisplayAODData">Always on Display data</td> <!--id="Displa Always On Display Data"-->
                            </tr>
                            <td class="relation" rowspan="7">Body</td>
                            <tr>
                                <td class="attri">Height</td>
                                <td id="BodyHeightData">Height data</td>
                            </tr>
                            <tr>
                                <td class="attri">Lenght</td>
                                <td id="BodyLenghtData">Lenght data</td>
                            </tr>
                            <tr>
                                <td class="attri">Width</td>
                                <td id="BodyWidthData">Width data</td>
                            </tr>
                            <tr>
                                <td class="attri">Weight</td>
                                <td id="BodyWeightData">Weight data</td>
                            </tr>
                            <tr>
                                <td class="attri">Rear Material</td>
                                <td id="BodyRearMaterialData">Rear Material data</td>
                            </tr>
                            <tr>
                                <td class="attri">Frame</td>
                                <td id="BodyFrameData">Frame data</td>
                            </tr>
                        </table>
                    </div>
                    <div class="page" id="page2">P2</div>
                    <div class="page" id="page3">P3</div>
                </div>
            </div>
        </div>
    </div>
    <?php
        include "javascript.php";
        include "js.php";
    ?>
</body>

</html>
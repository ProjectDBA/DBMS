<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Landing Page - Start Bootstrap Theme</title>
        <!-- Favicon-->
        <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />
        <!-- Bootstrap icons-->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css" rel="stylesheet" type="text/css" />
        <!-- Google fonts-->
        <link href="https://fonts.googleapis.com/css?family=Lato:300,400,700,300italic,400italic,700italic" rel="stylesheet" type="text/css" />
        <!-- Core theme CSS (includes Bootstrap)-->
        <link href="css/styles.css" rel="stylesheet" />
    </head>
    <body>
        <!-- Navigation-->
        <nav class="navbar navbar-light bg-light static-top">
            <div class="container">
                <a class="navbar-brand" href="main.php">In'Phone'mation</a>
            </div>
        </nav>
        <!-- Masthead-->
        <header class="masthead">
            <div class="container position-relative">
                <div class="row justify-content-center">
                    <div class="col-xl-6">
                        <div class="text-center text-white">
                            <h1 class="mb-5">Serch Phone!</h1>
                            <form class="form-subscribe" id="contactForm">
                                <div class="row">
                                    <div class="col">
                                        <input class="form-control form-control-lg" id="inputbox" type="text" list='dlist' placeholder="Phone name" />
                                        <?php include("php/searchPname.php"); ?>
                                    </div>
                                    <div class="col-auto">
                                        <button class="btn btn-primary btn-lg abled" id="button" type="button">Serch</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </header>
        <!-- Icons Grid-->
        <section class="features-icons bg-light text-center">
            <div class="container">
                <div class="row">
                    <div class="col-lg-4" id="sub-menu1" onclick="click1();">
                        <div class="features-icons-item mx-auto mb-5 mb-lg-0 mb-lg-3">
                            <div class="features-icons-icon d-flex"><i class="bi-window m-auto text-primary"></i></div>
                            <h3>View Performance</h3>
                        </div>
                    </div>
                    <div class="col-lg-4" id="sub-menu2" onclick="click2();">
                        <div class="features-icons-item mx-auto mb-5 mb-lg-0 mb-lg-3">
                            <div class="features-icons-icon d-flex"><i class="bi-layers m-auto text-primary"></i></div>
                            <h3>Compare</h3>
                        </div>
                    </div>
                    <div class="col-lg-4" id="sub-menu3" onclick="click3();">
                        <div class="features-icons-item mx-auto mb-0 mb-lg-3">
                            <div class="features-icons-icon d-flex"><i class="bi-terminal m-auto text-primary"></i></div>
                            <h3>ALL Phones</h3>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Image Showcases-->
        <section class="showcase">
                <div class="row g-0">
                    <div class="contents">
                        <div class="phonelist" id="phonelist">
                            <?php include "php/create_list.php"; ?>    
                        </div>
                        <div class="perform">
                            <div class="page" id="mainpage">
                                This is MainPage
                            </div>
                            <div class="page" id="page1">
                                <?php include "php/create_Perform_table.php" ?>
                            </div>
                            <div class="page" id="page2">
                                <h1>Compare</h1>
                                    <div class= "Compare_all" id = "Compare_all">
                                        <div class= "Compare1" id = "Compare1">
                                            <?php include "php/create_Compare_table_left copy.php" ?>
                                        </div>
                                        
                                        <div class= "Compare2" id = "Compare2">
                                            <table class="Phonetable" id="ViewPerformance">
                                                <tr>
                                                    <form action='#' method="post">
                                                        <td>
                                                            <?php include "php/create_dropdownbox.php"; ?>
                                                        </td>
                                                    </form>
                                                </tr>
                                                <tr>
                                                    <td class="datavalue" id="PlatformOSData2">OS data2</td>
                                                </tr>
                                                <tr>
                                                    <td class="datavalue" id="PlatformChipsetData2">Chipset data2</td>
                                                </tr>
                                                <tr>
                                                    <td class="datavalue" id="PlatformCPUData2">CPU data2</td>
                                                </tr>
                                                <tr>
                                                    <td class="datavalue" id="PlatformGPUData2">GPU data2</td>
                                                </tr>
                                                <tr>
                                                    <td class="datavalue" id="MemoryStorageData2">Max Storage data2</td>
                                                </tr>
                                                <tr>
                                                    <td class="datavalue" id="MemoryRamData2">Max Ram data2</td>
                                                </tr>
                                                <tr>
                                                    <td class="datavalue" id="MemorySlotData2">Card Slot data2</td>
                                                </tr>
                                                <tr>
                                                    <td class="datavalue" id="BatterySizeData2">Size data2</td>
                                                </tr>
                                                <tr>
                                                    <td class="datavalue" id="BatteryWiredData2">Max Wired Charging Speed data2</td> <!--id = Battery Max Wired Charging Speed Data-->
                                                </tr>
                                                <tr>
                                                    <td class="datavalue" id="BatteryWireLessData2">Wire Less Charging Speed data2</td> <!--id = Battery Wire Less Charging Speed Data-->
                                                </tr>
                                                <tr>
                                                    <td class="datavalue" id="CommsFingerprintData2">Fingerprint data2</td>
                                                </tr>
                                                <tr>
                                                    <td class="datavalue" id="CommsFaceIDData2">Face ID data2</td>
                                                </tr>
                                                <tr>
                                                    <td class="datavalue" id="CommsWidebandData2">UltraWideband data2</td>
                                                </tr>
                                                <tr>
                                                    <td class="datavalue" id="CommsNetworkData2">Network Max Band data2</td> <!--id = Network Max Band Data-->
                                                </tr>
                                                <tr>
                                                    <td class="datavalue" id="CommsUSBData2">USB Type data2</td> <!--Comms USB Type Data-->
                                                </tr>
                                                <tr>
                                                    <td class="datavalue" id="CameraMSingleData2">Main Single data2</td> <!--id="Camera Main Single Data"-->
                                                </tr>
                                                <tr>
                                                    <td class="datavalue" id="CameraMMultiData2">Main Multi data2</td> <!--id="Camera Main Multi Data"-->
                                                </tr>
                                                <tr>
                                                    <td class="datavalue" id="CameraMTripleData2">Main Triple data2</td> <!--id = "Camera Main Triple Data"-->
                                                </tr>
                                                <tr>
                                                    <td class="datavalue" id="CameraMQuardData2">Main Quard data2</td> <!--id = "Camera Main Quard Data"-->
                                                </tr>
                                                <tr>
                                                    <td class="datavalue" id="CameraMVideoData2">Main Video data2</td> <!--id = "Camera Main Video Data"-->
                                                </tr>
                                                <tr>
                                                    <td class="datavalue" id="CameraFSingleData2">Front Single data2</td> <!--id="Camera Front Single Data"-->
                                                </tr>
                                                <tr>
                                                    <td class="datavalue" id="CameraFMultiData2">Front Multi data2</td> <!--id="Camera  Front Multi Data"-->
                                                </tr>
                                                <tr>
                                                    <td class="datavalue" id="SoundStereoData2">Stereo Speaker data2</td> <!--id="Sound Stereo Speaker Data"-->
                                                </tr>
                                                <tr>
                                                    <td class="datavalue" id="Sound3_5JackData2">3.5mm Jack data2</td> <!--id="Sound 3.5 Jack Data"-->
                                                </tr>
                                                <tr>
                                                    <td class="datavalue" id="DisplayTypeData2">Type data2</td>
                                                </tr>
                                                <tr>
                                                    <td class="datavalue" id="DisplaySizeData2">Size data2</td>
                                                </tr>
                                                <tr>
                                                    <td class="datavalue" id="DisplayResolutionData2">Resolution data2</td>
                                                </tr>
                                                <tr>
                                                    <td class="datavalue" id="DisplayProtectionData2">Protection data2</td>
                                                </tr>
                                                <tr>
                                                    <td class="datavalue" id="DisplayAODData2">Always on Display data2</td> <!--id="Displa Always On Display Data"-->
                                                </tr>
                                                <tr>
                                                    <td class="datavalue" id="BodyHeightData2">Height data2</td>
                                                </tr>
                                                <tr>
                                                    <td class="datavalue" id="BodyLenghtData2">Lenght data2</td>
                                                </tr>
                                                <tr>
                                                    <td class="datavalue" id="BodyWidthData2">Width data2</td>
                                                </tr>
                                                <tr>
                                                    <td class="datavalue" id="BodyWeightData2">Weight data2</td>
                                                </tr>
                                                <tr>
                                                    <td class="datavalue" id="BodyMaterialData2">Rear Material data2</td>
                                                </tr>
                                                <tr>
                                                    <td class="datavalue" id="BodyFrameData2">Frame data2</td>
                                                </tr>
                                            </table>
                                        </div> 
                                    </div>
                            </div>
                            <div class="page" id="page3">
                                <h1>P3</h1>
                            </div>
                        </div>
                </div>
        </section>
        <!-- Footer-->
        <footer class="footer bg-light">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6 h-100 text-center text-lg-start my-auto">
                        <ul class="list-inline mb-2">
                            <li class="list-inline-item"><a href="#!">About</a></li>
                            <li class="list-inline-item">?</li>
                            <li class="list-inline-item"><a href="#!">Contact</a></li>
                            <li class="list-inline-item">?</li>
                            <li class="list-inline-item"><a href="#!">Terms of Use</a></li>
                            <li class="list-inline-item">?</li>
                            <li class="list-inline-item"><a href="#!">Privacy Policy</a></li>
                        </ul>
                        <p class="text-muted small mb-4 mb-lg-0">&copy; Your Website 2023. All Rights Reserved.</p>
                    </div>
                    <div class="col-lg-6 h-100 text-center text-lg-end my-auto">
                        <ul class="list-inline mb-0">
                            <li class="list-inline-item me-4">
                                <a href="#!"><i class="bi-facebook fs-3"></i></a>
                            </li>
                            <li class="list-inline-item me-4">
                                <a href="#!"><i class="bi-twitter fs-3"></i></a>
                            </li>
                            <li class="list-inline-item">
                                <a href="#!"><i class="bi-instagram fs-3"></i></a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </footer>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
        <script type="text/javascript" src="js/scripts.js"></script>
    </body>
</html>

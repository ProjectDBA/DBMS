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
                    
                </div>
                <div class="perform">
                    <div class="page" id="mainpage">
                        This is MainPage
                    </div>
                    <div class="page" id="page1">
                        <h1>Phone Name</h1>
                        <p>Platform :</p>
                        <table>
                            <tr>
                                <td rowspan="4">Platform</td>
                                <td>OS</td>
                                <td>OS지롱</td>
                                <td>OS</td>
                                <td>OS지롱</td>
                            </tr>
                            <tr>
                                <td>Chipset</td>
                                <td>Chipset data</td>
                                <td>Chipset</td>
                                <td>Chipset data</td>
                            </tr>
                            <tr>
                                <td>CPU</td>
                                <td>CPU data</td>
                                <td>CPU</td>
                                <td>CPU data</td>
                            </tr>
                            <tr>
                                <td>GPU</td>
                                <td>GPU data</td>
                                <td>GPU</td>
                                <td>GPU data</td>
                            </tr>
                        </table>
                        
                        <p>Memory :</p>
                        <table>
                            <td rowspan="4">Memory</td>
                            <tr>
                                <td>Max Storage</td>
                                <td>Max Storage data</td>
                            </tr>
                            <tr>
                                <td>Max Ram</td>
                                <td>Max Ram data</td>
                            </tr>
                            <tr>
                                <td>Card Slot</td>
                                <td>Card Slot data</td>
                            </tr>
                        </table>
                        
                        <p>Battery :</p>
                        <table>
                            <td rowspan="4">Battery</td>
                            <tr>
                                <td>Size</td>
                                <td>Size data</td>
                            </tr>
                            <tr>
                                <td>Max Wired Charging Speed</td>
                                <td>Max Wired Charging Speed data</td>
                            </tr>
                            <tr>
                                <td>Wire less Charging Speed</td>
                                <td>Wire less Charging Speed data</td>
                            </tr>
                        </table>

                        <p>Comms :</p>
                        <table> 
                            <td rowspan="6">Comms</td>
                            <tr>
                                <td>Fingerprint</td>
                                <td>Fingerprint data</td>
                            </tr>
                            <tr>
                                <td>Face ID</td>
                                <td>Face ID data</td>
                            </tr>
                            <tr>
                                <td>UltraWideband</td>
                                <td>UltraWideband data</td>
                            </tr>
                            <tr>
                                <td>Network Max Band</td>
                                <td>Network Max Band data</td>
                            </tr>
                            <tr>
                                <td>USB Type</td>
                                <td>USB Type data</td>
                            </tr>
                        </table>

                        <p>Camera :</p>
                        <table>
                            <td rowspan="8">Camera</td>
                            <tr>
                                <td>Main Single</td>
                                <td>Main Single data</td>
                            </tr>
                            <tr>
                                <td>Main Multi</td>
                                <td>Main Multi data</td>
                            </tr>
                            <tr>
                                <td>Main Triple</td>
                                <td>Main Triple data</td>
                            </tr>
                            <tr>
                                <td>Main Quard</td>
                                <td>Main Quard data</td>
                            </tr>
                            <tr>
                                <td>Main Video</td>
                                <td>Main Video data</td>
                            </tr>
                            <tr>
                                <td>Front Single</td>
                                <td>Front Single data</td>
                            </tr>
                            <tr>
                                <td>Front Multi</td>
                                <td>Front Multi data</td>
                            </tr>
                        </table>

                        
                        <p>Price :</p>
                        <p>Manufacturer :</p>
                        <p>Display :</p>
                        <p>Body :</p>
                        <p>Sound :</p>
                        
                    </div>
                    <div class="page" id="page2">P2</div>
                    <div class="page" id="page3">P3</div>
                </div>
            </div>
        </div>
    </div>
    <script src="javascript.js"></script>
</body>

</html>
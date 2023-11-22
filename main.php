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
                        
                    </div>
                    <div class="page" id="page2">P2</div>
                    <div class="page" id="page3">P3</div>
                </div>
            </div>
        </div>
    </div>
    <?php
        include "create_table.php";
    ?>
    <script type='text/javascript' src='javascript.js'></script>
</body>

</html>
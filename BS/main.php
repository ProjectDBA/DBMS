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
                        <div class="phonelist" id="Companylist">
                            <?php include "php/create_Company_list.php"; ?>    
                        </div>
                        <div class="perform">
                            <div class="page" id="mainpage">
                                <img style='display: flex; justify-contents: center; height:400px; width: 900px;' src="https://png.pngtree.com/thumb_back/fw800/background/20230526/pngtree-large-magnifying-cell-phone-with-purple-liquids-image_2636595.jpg" alt='image'>
                            </div>
                            <div class="page" id="page1">
                                <?php include "php/create_Perform_table.php" ?>
                            </div>
                            <div class="page" id="page2">
                                <h1>Compare</h1>
                                    <div class="Compare_all" id="Compare_all">
                                        <div class="Compare1" id="Compare1">
                                            <?php include "php/create_Compare_table_left.php" ?>
                                        </div>
                                        <div class="Compare2" id="Compare2">
                                            <?php include 'php/create_Compare_table_right.php' ?>
                                        </div> 
                                    </div>
                            </div>
                            <div class="page" id="page3">
                                
                            </div>
                            <div class='bntscroll' id='bntscroll'>
                                <?php include "php/create_Scroll_Menu.php"?>
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

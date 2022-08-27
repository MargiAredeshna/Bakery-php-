<?php session_start(); ?> 
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" href="assest\img\fav-icon.png" type="image/x-icon" />
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Cake - Bakery</title>

    <!-- Icon css link -->
    <!-- <link href="css/font-awesome.min.css" rel="stylesheet"> -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <!-- <link href="assest/user/vendors/linearicons/style.css" rel="stylesheet"> -->
    <!-- <link href="assest/user/vendors/flat-icon/flaticon.css" rel="stylesheet"> -->
    <!-- Bootstrap -->
    <link href="assest/user/css/bootstrap.min.css" rel="stylesheet">

    <!-- Rev slider css -->
    <link href="assest/user/vendors/revolution/css/settings.css" rel="stylesheet">
    <link href="assest/user/vendors/revolution/css/layers.css" rel="stylesheet">
    <link href="assest/user/vendors/revolution/css/navigation.css" rel="stylesheet">
    <link href="assest/user/vendors/animate-css/animate.css" rel="stylesheet">

    <!-- Extra plugin css -->
    <link href="assest/user/vendors/owl-carousel/owl.carousel.min.css" rel="stylesheet">
    <link href="assest/user/vendors/magnifc-popup/magnific-popup.css" rel="stylesheet">
    <link href="assest/user/vendors/jquery-ui/jquery-ui.min.css" rel="stylesheet">
    <link href="assest/user/vendors/nice-select/css/nice-select.css" rel="stylesheet">

    <link href="assest/user/css/style.css" rel="stylesheet">
    <link href="assest/user/css/index.css" rel="stylesheet">
    <link href="assest/user/css/responsive.css" rel="stylesheet">
    <link rel="stylesheet" href="https://unpkg.com/leaflet@1.6.0/dist/leaflet.css" />
</head>

<body>
    <!--================Main Header Area =================-->
    <header class="main_header_area">
        <div class="main_menu_area">
            <div class="container">
                <nav class="navbar navbar-expand-lg navbar-light bg-light">
                    <a class="navbar-brand" href="index.php">
                        <img src="assest/img/logo.png" alt="">
                        <img src="assest/img/logo-2.png" alt="">
                    </a>
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="my_toggle_menu">
                            <span></span>
                            <span></span>
                            <span></span>
                        </span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <ul class="navbar-nav mr-auto">
                            <?php
                            $directoryURI = $_SERVER['REQUEST_URI'];
                            $path = parse_url($directoryURI, PHP_URL_PATH);
                            $components = explode('/', $path);
                            $first_part = $components[2];
                            ?>
                            <li class="<?php if ($first_part=="" || $first_part=="index.php") {echo "active"; } else  {echo " ";}?>"><a href="index.php">Home</a></li>
                            <li class="<?php if ($first_part=="cake.php") {echo "active"; } else  {echo " ";}?>"><a href="cake.php">Our Cakes</a></li>
                            <li class="<?php if ($first_part=="shop.php" || $first_part=="product_details.php" ) {echo "active"; } else  {echo " ";}?>"><a href="shop.php">Shop</a></li>
                        </ul>
                        <ul class="navbar-nav justify-content-end">
                            <li class="<?php if ($first_part=="about_us.php") {echo "active"; } else  {echo " ";}?>"><a href="about_us.php">About Us</a></li>
                            <li class="<?php if ($first_part=="contact.php") {echo "active"; } else  {echo " ";}?>"><a href="contact.php">Contact Us</a></li>
                            <?php
                            if (isset($_SESSION['userlogin'])) {
                                $email = $_SESSION['userdata'];
                            ?>
                                <li class="dropdown submenu <?php if ($first_part=="logout.php" || $first_part=="thank.php") {echo "active"; } else  {echo " ";}?>"">
									<a class="dropdown-toggle" data-toggle="dropdown" href="index.html#" role="button" aria-haspopup="true" aria-expanded="false">Profile</a>
									<ul class="dropdown-menu">
                                    <li><a href="commingsoon.php">View Profile</a></li>
                                    <li><a href="logout.php">Logout</a></li>

									</ul>
								</li>
                            <?php
                            } else {
                            ?>
                                <li><a href="login.php">Login</a></li>
                            <?php
                            }
                            ?>
                        </ul>
                    </div>
                </nav>
            </div>
        </div>

    </header>
    <!--================End Main Header Area =================-->
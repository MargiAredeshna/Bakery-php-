<?php
session_start();
if (isset($_SESSION['adminlogin']) && $_SESSION['adminlogin'] = true) {
    $email = $_SESSION['data'];
} else {
    header("location:login.php");
}

include "../dbcon.php";

$sql = "SELECT * from admin where email= '$email';";
$result = $conn->query($sql) or die($con->error);
$row = $result->fetch_assoc();
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Cake - Bakery Admin Dashboard </title>
    <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="16x16" href="../assest/img/fav-icon.png">
    <link rel="stylesheet" href="../assest/admin/vendor/chartist/css/chartist.min.css">
    <link href="../assest/admin/vendor/bootstrap-select/dist/css/bootstrap-select.min.css" rel="stylesheet">
    <link href="../assest/admin/vendor/owl-carousel/owl.carousel.css" rel="stylesheet">
    <link href="../assest/admin/css/style.css" rel="stylesheet">

    <link href="../assest/admin/vendor/datatables/css/jquery.dataTables.min.css" rel="stylesheet">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>

</head>

<body>

    <!--*******************
        Preloader start
    ********************-->
    <div id="preloader">
        <div class="sk-three-bounce">
            <div class="sk-child sk-bounce1"></div>
            <div class="sk-child sk-bounce2"></div>
            <div class="sk-child sk-bounce3"></div>
        </div>
    </div>
    <!--*******************
        Preloader end
    ********************-->

    <!--**********************************
        Main wrapper start
    ***********************************-->
    <div id="main-wrapper">

        <!--**********************************
            Nav header start
        ***********************************-->
        <div class="nav-header">
            <a href="index.php" class="brand-logo">
                <img src="../assest/img/logo.png" class="w-75" alt="Logo">
            </a>

            <div class="nav-control">
                <div class="hamburger">
                    <span class="line"></span><span class="line"></span><span class="line"></span>
                </div>
            </div>
        </div>
        <!--**********************************
            Nav header end
        ***********************************-->



        <!--**********************************
            Header start
        ***********************************-->
        <div class="header">
            <div class="header-content">
                <nav class="navbar navbar-expand">
                    <div class="collapse navbar-collapse justify-content-between">
                        <div class="header-left">
                            <div class="dashboard_bar">
                                Dashboard
                            </div>
                        </div>

                        <ul class="navbar-nav header-right">
                            <li class="nav-item dropdown header-profile">
                                <a class="nav-link" href="index.php" role="button" data-bs-toggle="dropdown">
                                    <img src="<?= $row['img']; ?>" width="20" alt="" />
                                    <div class="header-info">
                                        <span><?php echo $row['name']; ?></span>
                                        <small>Super Admin</small>
                                    </div>
                                </a>
                                <div class="dropdown-menu dropdown-menu-end">
                                    <a href="adminupdate.php" class="dropdown-item ai-icon">
                                        <svg id="icon-user1" xmlns="http://www.w3.org/2000/svg" class="text-primary" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                            <path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2"></path>
                                            <circle cx="12" cy="7" r="4"></circle>
                                        </svg>
                                        <span class="ms-2">Change Profile</span>
                                    </a>
                                    <a href="logout.php" class="dropdown-item ai-icon">
                                        <svg id="icon-logout" xmlns="http://www.w3.org/2000/svg" class="text-danger" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                            <path d="M9 21H5a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h4"></path>
                                            <polyline points="16 17 21 12 16 7"></polyline>
                                            <line x1="21" y1="12" x2="9" y2="12"></line>
                                        </svg>
                                        <span class="ms-2">Logout </span>
                                    </a>
                                </div>
                            </li>
                        </ul>
                    </div>
                </nav>
            </div>
        </div>


        <!--**********************************
            Sidebar Start
        ***********************************-->
        <div class="deznav">
            <div class="deznav-scroll">
                <ul class="metismenu" id="menu">
                    <li>
                        <a href="index.php" aria-expanded="false">
                            <i class="flaticon-381-networking"></i>
                            <span class="nav-text">Dashboard</span>
                        </a>
                    </li>
                    <li><a class="has-arrow ai-icon" aria-expanded="false">
                            <i class="flaticon-381-controls-3"></i>
                            <span class="nav-text">Category</span>
                        </a>
                        <ul aria-expanded="false">
                            <li><a href="Producat_Category.php">Add Category</a></li>
                            <li><a href="ProducatCategoryall.php">All Category</a></li>
                        </ul>
                    </li>
                    <li><a class="has-arrow ai-icon" aria-expanded="false">
                            <i class="flaticon-381-layer-1"></i>
                            <span class="nav-text">Producat</span>
                        </a>
                        <ul aria-expanded="false">
                            <li><a href="Producat_details.php">Add Producat</a></li>
                            <li><a href="Producatdetailsall.php">All Producat</a></li>
                        </ul>
                    </li>
                    <li><a href="FeedBack_site.php" aria-expanded="false">
                            <i class=" flaticon-381-notepad"></i>
                            <span class="nav-text">FeedBack</span>
                        </a>
                    </li>
                    <li>
                        <a href="contanct.php" class="ai-icon" aria-expanded="false">
                            <i class="flaticon-381-settings-2"></i>
                            <span class="nav-text">Contact</span>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
        <div class="content-body">
            <div class="container-fluid">
                <div class="row">
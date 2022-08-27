<?php
include "../dbcon.php";
session_start();
if (isset($_SESSION['adminlogin']) && $_SESSION['adminlogin']) {
	header("Location: index.php");
	exit();
}
?>

<!DOCTYPE html>
<html lang="en" class="h-100">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Cake - Bakery Login </title>
    <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="16x16" href="../assest/img/fav-icon.png">
    <link href="../assest/admin/vendor/bootstrap-select/dist/css/bootstrap-select.min.css" rel="stylesheet">
    <link href="../assest/admin/css/style.css" rel="stylesheet">
    <link href="../assest/user/css/index.css" rel="stylesheet">

</head>

<body class="vh-100">
    <div class="authincation h-100">
        <div class="container h-100">
            <div class="row justify-content-center h-100 align-items-center">
                <div class="col-md-6">
                    <div class="authincation-content">
                        <div class="row no-gutters">
                            <div class="col-xl-12">
                                <div class="auth-form">

                                    <?php
                                    if (isset($_GET['login']) && $_GET['login'] == "fail") { ?>
                                        <p class="text-center alert alert-danger solid"> email or password wrong!</p>
                                    <?php } ?>

                                    <div class="text-center mb-3">
                                        <a href="index.php"><img src="../assest/img/logo.png" alt="logo"></a>
                                    </div>
                                    <h4 class="text-center mb-4">Sign in your account</h4>
                                    <form action="query.php" method="post">
                                        <div class="form-group">
                                            <label class="mb-1"><strong>Email</strong></label>
                                            <input type="email" class="form-control" placeholder="Enter email" name="email">
                                        </div>
                                        <div class="form-group">
                                            <label class="mb-1"><strong>Password</strong></label>
                                            <input type="password" class="form-control" placeholder="Enter Password" name="password">
                                        </div>
                                        <div class="text-center">
                                            <input type="submit" class="btn btn-primary btn-block btn_btn" name="adminlogin" value="Sign Me In">
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!--**********************************
	Scripts
***********************************-->
    <!-- Required vendors -->
    <script src="../assest/admin/vendor/global/global.min.js"></script>
    <script src="../assest/admin/vendor/bootstrap-select/dist/js/bootstrap-select.min.js"></script>
    <script src="../assest/admin/js/custom.min.js"></script>
    <script src="../assest/admin/js/deznav-init.js"></script>
    <script src="../assest/admin/js/demo.js"></script>
</body>

</html>
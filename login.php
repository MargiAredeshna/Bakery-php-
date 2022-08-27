

<!DOCTYPE html>
<html lang="en" class="h-100">

<head>
    <meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Cake - Bakery Login</title>
    <!-- Favicon icon -->
    <link rel="icon" href="assest/img/fav-icon.png" type="image/x-icon" />
	<link href="assest/admin/vendor/bootstrap-select/dist/css/bootstrap-select.min.css" rel="stylesheet">
    <link href="assest/admin/css/style.css" rel="stylesheet">
    <link href="assest/user/css/index.css" rel="stylesheet">

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
									<div class="text-center mb-3">
										<a href="index.php"><img src="assest/img/logo.png" alt="login img"></a>
									</div>
                                    <?php
                                    if (isset($_GET['login']) && $_GET['login'] == "fail") { ?>
                                        <p class="text-center alert alert-danger solid"> email or password wrong!</p>
                                    <?php } ?>
                                    <?php
                                    if (isset($_GET['login']) && $_GET['login'] == "allraday") { ?>
                                        <p class="text-center alert alert-primary solid">Your Already Exists</p>
                                    <?php } ?>
                                    <h4 class="text-center mb-4">Sign in your account</h4>
                                    <form action="query.php" method="post">
                                        <div class="form-group">
                                            <label class="mb-1"><strong>Email</strong></label>
                                            <input type="email" class="form-control" placeholder="Enter Email" name="uemail" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,}$">
                                        </div>
                                        <div class="form-group">
                                            <label class="mb-1"><strong>Password</strong></label>
                                            <input type="password" class="form-control" placeholder="Enter Password" name="password">
                                        </div>
                                        <div class="text-center">
                                            <input type="submit" class="btn btn-primary btn-block btn_btn" value="Sign In" name="userlogin">
                                        </div>
                                    </form>
                                    <div class="new-account mt-3">
                                        <p>Don't have an account? <a class="text-primary" href="pageregister.php">Sign up</a></p>
                                    </div>
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
<script src="assest/admin/vendor/global/global.min.js"></script>
<script src="assest/admin/vendor/bootstrap-select/dist/js/bootstrap-select.min.js"></script>
<script src="assest/admin/js/custom.min.js"></script>
<script src="assest/admin/js/deznav-init.js"></script>
<script src="assest/admin/js/demo.js"></script>
</body>
</html>
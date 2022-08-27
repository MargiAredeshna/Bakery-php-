<?php
session_start();
// unset($_SESSION["products"]);
session_destroy();
// if (isset($_SESSION['userlogin']) && $_SESSION['userlogin'] = true) {
//     session_destroy();
//     header("Location:index.php");
// }
header("Location:index.php");
?>
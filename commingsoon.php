<?php ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="icon" href="assest\img\fav-icon.png" type="image/x-icon" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cake - Bakery Comming Soon</title>
    <link href="assest/user/css/style.css" rel="stylesheet">
    <link href="assest/user/css/bootstrap.min.css" rel="stylesheet">

    <style>
    .coming_soon {
        position: relative;
        overflow: hidden;
        background: url("./assest/img/comming-bg.jpg") no-repeat scroll center 0;
        background-size: cover;
        min-height: 100vh;
        padding: 160px 0px;
      }
      
      .coming_soon:before {
        content: "";
        width: 100%;
        height: 100%;
        position: absolute;
        top: 0;
        left: 0;
        background: rgba(0, 0, 0, 0.68);
      }
      
      .coming_soon_contain {
        position: relative;
        z-index: 1;
      }
      
      .welcome-text-area {
        color: #ffffff;
        -webkit-box-align: end;
        -ms-flex-align: end;
        align-items: flex-end;
        display: -webkit-box;
        display: -ms-flexbox;
        display: flex;
        flex-direction: column;
        height: 100%;
        justify-content: center;
        width: 100%;
        position: relative;
        z-index: 2;
        text-align: center;
      }
      
      .welcome-text-area p {
        font-size: 28px;
        line-height: 34px;
        font-weight: bold;
        font-family: "Playfair Display", serif;
        padding-top: 60px;
      }
      
      .coming-header {
        font: 800 80px "Playfair Display", serif;
        text-transform: capitalize;
      }
      
      .coming_soon_counter {
        max-width: 800px;
        margin: 80px auto 0px;
        overflow: hidden;
      }
      
      .coming_soon_counter .counter-item {
        width: 170px;
        border: 2px solid #f195b2;
        height: 170px;
        float: left;
        padding: 33px 0px;
        border-radius: 50%;
        font-family: "Open Sans", sans-serif;
        font-weight: bold;
        color: #f195b2;
        margin: 0px 15px;
      }
      
      .coming_soon_counter .counter-item span {
        font-size: 65px;
        line-height: 65px;
      }
      
      .coming_soon_counter .counter-item .smalltext {
        font-size: 20px;
        line-height: 40px;
        letter-spacing: 0px;
        text-transform: uppercase;
        position: relative;
      }
      .submit_pink{
        border: none;
      }
        </style>
</head>
<body>
<section class="coming_soon_area">
    <div class="coming_soon">
        <div class="welcome-text-area">
            <div class="container">
                <h2 class="coming-header">Comming Soon</h2>
                <p>Website is under construction.</p>
                <!-- <?php
                  if (isset($_GET['action']) && $_GET['action'] = "prod" ) {
                    ?>
                    <a href="shop.php"><button class="submit_pink">Back To Home</button></a>

                    <?php
                  }
                ?> -->
                <a href="index.php"><button class="submit_pink">Back To Home</button></a>
            </div>
        </div>
    </div>
</section>
</body>
</html>
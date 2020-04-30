<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>NSSC 2020 | HOME</title>

    <!-- Adding icon link to site -->
    <link rel="icon" href="img/nssc_icon.png">

    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css?family=Work+Sans:400,500,600,700,800,900&display=swap"
        rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Poppins:400,500,600,700&display=swap" rel="stylesheet">

    <!-- Required styles -->
    <?php require "style.php"; ?>

    
  </head>
  <body>

    <!-- NSSC LOGO ANIMATE STARTS -->
    <?php require "preloader.php"; ?>
    <!-- NSSC LOGO ANIMATE ENDS HERE !-->

    <!-- NAVIGATION -->
    <?php require "nav.php";?>
    <!-- /NAVIGATION -->
    
    <!-- Header Section Begin -->
    <?php require "header.php"; ?>
    <!-- /Header Section End -->

    <!-- Counter Section Begin -->
    <?php require "counter.php"; ?>
    <!-- /Counter Section End -->

    <!-- Swiper  ---------->
    <?php require "swiper.php" ?>
    <!-- /Swiper  ---------->

    <!-- Footer -->
        <?php
            require "footer.php";
        ?>
    <!-- /Footer -->

    <!-- Js Plugins -->
    <script src="js/jquery-3.3.1.min.js"></script>
    <script src="js/owl.carousel.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery.magnific-popup.min.js"></script>
    <script src="js/jquery.countdown.min.js"></script>
    <script src="js/jquery.slicknav.js"></script>

    <!-- swiper --->
    <script src="js/swiper.min.js"></script>
    <!-- /swiper --->
    
    <script src="js/main.js"></script>
        
  </body>
</html>
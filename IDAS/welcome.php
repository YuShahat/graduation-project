<?php
session_start();
include_once('connection.php');
$_SESSION['name'];
$_SESSION['username'];
?>
<!DOCTYPE html>
<html  >
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="generator" content="Mobirise v4.9.7, mobirise.com">
  <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1">
  <link rel="shortcut icon" href="assets/images/shady-1-122x123.png" type="image/x-icon">
  <meta name="description" content="">
  
  <title>IDAS</title>
  <link
      rel="stylesheet"
      href="https://fonts.googleapis.com/css2?family=Material+Symbols+Rounded:opsz,wght,FILL,GRAD@48,400,0,0"
    />
  <link rel="stylesheet" href="assets/web/assets/mobirise-icons/mobirise-icons.css">
  <link rel="stylesheet" href="assets/web/assets/mobirise-icons-bold/mobirise-icons-bold.css">
  <link rel="stylesheet" href="assets/web/assets/mobirise-icons2/mobirise2.css">
  <link rel="stylesheet" href="assets/tether/tether.min.css">
  <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
  <link rel="stylesheet" href="assets/bootstrap/css/bootstrap-grid.min.css">
  <link rel="stylesheet" href="assets/bootstrap/css/bootstrap-reboot.min.css">
  <link rel="stylesheet" href="assets/socicon/css/styles.css">
  <link rel="stylesheet" href="assets/dropdown/css/style.css">
  <link rel="stylesheet" href="assets/theme/css/style.css">
  <link rel="stylesheet" href="style.css">
  <link rel="stylesheet" href="counter.css">
  <link rel="stylesheet" href="assets/css/home.css">
  <link rel="stylesheet" href="assets/mobirise/css/mbr-additional.css" type="text/css">
  
  
   
</head>
<body>
  <section class="menu cid-s3MrIgmP7I" once="menu" id="menu1-5">
    <nav class="navbar navbar-expand beta-menu navbar-dropdown align-items-center navbar-fixed-top navbar-toggleable-sm">
        <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <div class="hamburger">
                <span></span>
                <span></span>
                <span></span>
                <span></span>
            </div>
        </button>
        <div class="menu-logo">
            <div class="navbar-brand">
                <span class="navbar-logo">
                    <a href="index.php">
                         <img src="assets/images/shady-1-122x123.png" alt="Mobirise" title="" style="height: 3.8rem;">
                         <p class="name_of_usr"> Hi , <?=$_SESSION['name'];?> </p>
                    </a>
                </span>
                
            </div>
        </div>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav nav-dropdown nav-right" data-app-modern-menu="true">
                <li class="nav-item"><a class="nav-link link text-white display-4" href="welcome.php"><span class="mbrib-home mbr-iconfont mbr-iconfont-btn"></span> Home</a></li>
                <li class="nav-item"><a class="nav-link link text-white display-4" href="GPS.php"><span class="mbri-map-pin mbr-iconfont mbr-iconfont-btn"></span> GPS</a></li>
                <li class="nav-item"><a class="nav-link link text-white display-4" href="ContactUs.php"><span class="mobi-mbri mobi-mbri-phone mbr-iconfont mbr-iconfont-btn"></span>Contact Us</a></li>
                <li class="nav-item"><a class="nav-link link text-white display-4" href="index.php"><span class="mobi-mbri mbri-logout mbr-iconfont mbr-iconfont-btn"></span>Log Out</a></li>
            </ul>
            
        </div>
    </nav>
</section>
        <header>
            <div class="container header-container">
                <div class="header-left">
                    <h1>Welcome to VTC</h1>
                    <br>
                    <br>
                    <p>
                    Road accidents can't be predicted, they happen suddenly causing huge damage and even taking lives. Most drivers have made an accident or more, they even witnessed a large number of accidents on the road daily.
                    </p>
                </div>
                <div class="header-right">
                    <div class="sq-box">
                        <img src="assets/images/home.png" alt="">
                    </div>
                </div>
            </div>
            <div class="sq-box2"></div>
        </header>
<section class="header12 cid-s3Mrg3sUiE mbr-fullscreen mbr-parallax-background" id="header12-1">
    <div class="mbr-overlay" style="opacity: 1; background-color: rgb(255, 255, 255); z-index: -10;">

    <div class="container">
        <div class="media-container">
            <div class="col-md-7 align-center">
                <div class="counter-wrapper">
                <div class="counter">
                    <h1 class="count" data-target="1254">0</h1>
                    <p>Each Year, People Are Killed Around The World</p>
                </div>
                <div class="counter">
                    <h1 class="count" data-target="12168">0</h1>
                    <p>Every Day, People Are Killed</p>
                </div>
                <div class="counter">
                    <h1 class="count" data-target="2172">0</h1>
                    <p>Every Seconds Someone Dies On The Road</p>
                </div>
            </div>
            <p class="mbr-text pb-3 mbr-white mbr-fonts-style display-5">So, the aim of this project is to build a system in cars to help emergency to reach faster to the accident site and to help to save critical conditions.</p>
        </div>
            
            </div>
        </div>
    </div>
        </div>
        
</section>

    <section class="cid-s3MrrUyL0E" id="footer1-3">
        <div class="container">
        <div class="media-container-row content text-white">
            <div class="col-12 col-md-3">
                <div class="media-wrap">
                    <a href="index.php">
                        <img src="assets/images/shady-192x193.png" alt="Mobirise" title="">
                    </a>
                </div>
            </div>
            <div class="col-12 col-md-3 mbr-fonts-style display-7">
                <h5 class="pb-3">
                    Address
                </h5>
                <p class="mbr-text">Thapar University, Adarsh 
                <br>Nagar, Patiala, Punjab
                <br>147003</p>
            </div>
            <div class="col-12 col-md-3 mbr-fonts-style display-7">
                <h5 class="pb-3">
                    Contacts
                </h5>
                <p class="mbr-text">
                    Email: vibhorkrishna98@gmail.com
                    <br>Phone: 9565353666</p>
            </div>
            </div>
        </div>
        <div class="footer-lower">
            <div class="media-container-row">
                <div class="col-sm-12">
                    <hr>
                </div>
            </div>
        </div>
    </div>
</section>


  <script src="assets/web/assets/jquery/jquery.min.js"></script>
  <script src="assets/popper/popper.min.js"></script>
  <script src="assets/tether/tether.min.js"></script>
  <script src="assets/bootstrap/js/bootstrap.min.js"></script>
  <script src="assets/vimeoplayer/jquery.mb.vimeo_player.js"></script>
  <script src="assets/parallax/jarallax.min.js"></script>
  <script src="assets/smoothscroll/smooth-scroll.js"></script>
  <script src="assets/dropdown/js/script.min.js"></script>
  <script src="assets/touchswipe/jquery.touch-swipe.min.js"></script>
  <script src="assets/theme/js/script.js"></script>
  <script src="assets/theme/js/counter.js"></script>
  <script src="assets/theme/js/slider.js"></script>
</body>
</html>
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
  
  <title>Contact Us</title>
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
  <link rel="stylesheet" href="assets/mobirise/css/mbr-additional.css" type="text/css">
  <link rel="stylesheet" type="text/css" href="assets/fonts/font-awesome-4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" type="text/css" href="assets/css/util.css">
  <link rel="stylesheet" type="text/css" href="assets/css/main.css">
  
  
  
</head>
<body>
  <section class="menu cid-s3MrIgmP7I" once="menu" id="menu1-a">

    

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

<section class="engine"><a href="https://mobirise.info/c">web builder</a></section><section class="mbr-section form1 cid-s3RngtCkmS mbr-parallax-background" id="form1-t">

    

    <div class="mbr-overlay" style="opacity:0.6; background-color: rgb(40, 40, 40);">
    </div>
    <div class="container">
        <div class="row justify-content-center">
            <div class="title col-12 col-lg-8">
                <br>
                <h2 class="mbr-section-title align-center pb-3 mbr-bold mbr-fonts-style display-1">
                Ask us anything
                </h2>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row justify-content-center">
            <div class="media-container-column col-lg-8" data-form-type="formoid">
                <!---Formbuilder Form--->
                <form action="https://mobirise.com/" method="POST" class="mbr-form form-with-styler" data-form-title="Mobirise Form"><input type="hidden" name="email" data-form-email="true" value="THFv9kfdCU+GlvbCynd2UIJf3n7UM1pPjc1552ib4p6tRVCSjS3H2wmPycAct34tETtG+aH25vJjt23tlaNF0lBp5yguN6W/lDPsiinL7K8fDmRmE0DjMDT35j//8LXk">
                    <div class="row row-sm-offset">
                        <div hidden="hidden" data-form-alert="" class="alert alert-success col-12">Thanks for filling out the form!</div>
                        <div hidden="hidden" data-form-alert-danger="" class="alert alert-danger col-12">
                        </div>
                    </div>
                    <div class="dragArea row row-sm-offset">
                        <div class="col-md-4  form-group" data-for="name">
                            <label for="name-form1-t" class="form-control-label mbr-fonts-style display-7">Name</label>
                            <input type="text" name="name" data-form-field="Name" required="required" class="form-control display-7" id="name-form1-t">
                        </div>
                        <div class="col-md-4  form-group" data-for="email">
                            <label for="email-form1-t" class="form-control-label mbr-fonts-style display-7">Email</label>
                            <input type="email" name="email" data-form-field="Email" required="required" class="form-control display-7" id="email-form1-t">
                        </div>
                        <div data-for="phone" class="col-md-4  form-group">
                            <label for="phone-form1-t" class="form-control-label mbr-fonts-style display-7">Phone</label>
                            <input type="tel" name="phone" data-form-field="Phone" class="form-control display-7" id="phone-form1-t">
                        </div>
                        <div data-for="message" class="col-md-12 form-group">
                            <label for="message-form1-t" class="form-control-label mbr-fonts-style display-7">Message</label>
                            <textarea name="message" data-form-field="Message" class="form-control display-7" id="message-form1-t"></textarea>
                        </div>
                        <div class="col-md-12 input-group-btn align-center"><button type="submit" class="btn btn-primary btn-form display-4" href="mailto:vibhorkrishna98@gmail.com">SEND MESSAGE</button></div>
                    </div>
                </form><!---Formbuilder Form--->
            </div>
        </div>
    </div>
</section>

<section class="cid-s3RGrykjuP" id="footer1-1c">

    

    

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
  <script src="assets/dropdown/js/script.min.js"></script>
  <script src="assets/touchswipe/jquery.touch-swipe.min.js"></script>
  <script src="assets/parallax/jarallax.min.js"></script>
  <script src="assets/smoothscroll/smooth-scroll.js"></script>
  <script src="assets/theme/js/script.js"></script>
  <script src="assets/formoid/formoid.min.js"></script>
  
  
</body>
</html>
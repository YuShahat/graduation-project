<?php
//error: Google Maps JavaScript API error: ApiNotActivatedMapError
//solution: click "APIs and services" Link
//			click "Enable APIs and services" button
//			Select "Maps JavaScript API" then click on enable
session_start();
include_once('connection.php');
$_SESSION['name'];
$_SESSION['username'];

// require 'config.php';

$sql = "SELECT * FROM tbl_gps WHERE 1";
$result = $conn->query($sql);
if (!$result) {
  { echo "Error: " . $sql . "<br>" . $db->error; }
}

$rows = $result -> fetch_all(MYSQLI_ASSOC);
////////////////////////////////////////////////////////
//print_r($row);

//header('Content-Type: application/json');
//echo json_encode($rows);


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
  
  <title>GPS</title>
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
  <link rel="stylesheet" href="maps.css">
  <link rel="stylesheet" href="assets/mobirise/css/mbr-additional.css" type="text/css">
  <link rel="stylesheet" type="text/css" href="assets/fonts/font-awesome-4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" type="text/css" href="assets/css/util.css">
  <link rel="stylesheet" type="text/css" href="assets/css/main.css">
  <link rel="stylesheet" href="https://unpkg.com/leaflet@1.7.1/dist/leaflet.css">
  <script src="https://unpkg.com/leaflet@1.7.1/dist/leaflet.js"></script>
  <script src="https://maps.googleapis.com/maps/api/js?key=YOUR_GOOGLE_MAPS_API_KEY"></script>

  
  
</head>
<body>
  <section class="menu cid-s3MrIgmP7I" once="menu" id="menu1-c">

    

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

<section class="header12 cid-s3Rn4aFu5T mbr-fullscreen mbr-parallax-background" id="header12-n">

    

    <div class="mbr-overlay" style="opacity:0.6; background-color: rgb(40, 40, 40);">
    </div>

    <div class="container  ">
            <div class="media-container">
                <div class="col-md-12 align-center">
                    <h1 class="mbr-section-title pb-3 mbr-white mbr-bold mbr-fonts-style display-1"><br>GPS Detection</h1>
                    <p class="mbr-text pb-3 mbr-white mbr-fonts-style display-5"><br></p>
                </div>
            </div>
            <div class="contact-wrap">
			<div class="contact-in">
				<h2><i class="fa fa-map-marker" aria-hidden="true"></i> Longitude</h2>
				<p id="latID" ></p>
				<h2><i class="fa fa-map-marker" aria-hidden="true"></i>Latitude</h2>
				<p id="lngID" ></p>
				<h2><i class="fa fa-globe" aria-hidden="true"></i> Country</h2>
				<p>Egypt</p>
				<h2><i class="fa fa-map" aria-hidden="true"></i>City</h2>
				<p>Cairo</p>

			</div>
			<div class="contact-in" id="map-canvas" ></div>
		    </div>
            <script src="https://www.gstatic.com/firebasejs/7.20.0/firebase-app.js"></script>
            <script src="https://www.gstatic.com/firebasejs/7.20.0/firebase-auth.js"></script>
            <script src="https://www.gstatic.com/firebasejs/7.20.0/firebase-database.js"></script>
            <script>
                window.lat = 0;
                window.lng = 0;

                let latID= document.getElementById("latID"); 
                let lngID= document.getElementById("lngID"); 

                var map;
                var mark;
                var lineCoords = [];
                
                var initialize = function() {
                map  = new google.maps.Map(document.getElementById('map-canvas'), {center:{lat:lat,lng:lng},zoom:12});
                mark = new google.maps.Marker({position:{lat:lat, lng:lng}, map:map});
                };

                    const firebaseConfig = {
                        apiKey: "AIzaSyBLqAJc1Co-qUTUwn_iGWaq0tbKhOsqcyA",
                        authDomain: "idas-408419.firebaseapp.com",
                        databaseURL: "https://idas-408419-default-rtdb.firebaseio.com",
                        projectId: "idas-408419",
                        storageBucket: "idas-408419.appspot.com",
                        messagingSenderId: "1070690573529",
                        appId: "1:1070690573529:web:179693086559a8d37c72c8",
                        measurementId: "G-BM5TM7LY16"

                        };

                window.initialize = initialize;

                firebase.initializeApp(firebaseConfig );

                var ref = firebase.database().ref();

                ref.on("value", function(snapshot) {
                    var gps = snapshot.val();
                console.log(gps.LAT);
                console.log(gps.LNG);
                lat = gps.LAT;
                lng = gps.LNG;

                latID.innerHTML=lat
                lngID.innerHTML=lng

                map.setCenter({lat:lat, lng:lng, alt:0});
                mark.setPosition({lat:lat, lng:lng, alt:0});
                
                lineCoords.push(new google.maps.LatLng(lat, lng));

                var lineCoordinatesPath = new google.maps.Polyline({
                    path: lineCoords,
                    geodesic: true,
                    strokeColor: '#8B0000'
                });
                
                lineCoordinatesPath.setMap(map);
                }, function (error) {
                console.log("Error: " + error.code);
                });

                </script>                   
            <script src="https://maps.googleapis.com/maps/api/js?v=3.exp&key=AIzaSyAAkNowAmyMs38IKEl5b3h7xUA22e-9mBE&callback=initialize"></script>
                    
        <div class="icons-media-container mbr-white">
            <div class="card col-12 col-md-6">
                
                <h5 class="mbr-fonts-style display-5"></h5>
            </div>

            <div class="card col-12 col-md-6">
                
                <h5 class="mbr-fonts-style display-5"></h5>
            </div>  
        </div>
    </div>

    
</section>

<section class="cid-s3RGn2Z0SH" id="footer1-1a">

    

    

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
  
</body>
  <script src="maps.js"></script>
</html>
<?php
include "cursor.php"
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="css/Loadscreenstyle.css">
        <link rel="stylesheet" href="extensions/bootstrap-4.3.1.min.css">
        <script src="extensions/ajax-jquery-3.4.1.min.js"></script>
        <script src="extensions/bootstrap%204.3.1.min.js"></script>
        <script src="extensions/popper%201.14.7.min.js"></script>
        <script src="extensions/pace.js"></script>
        <script src="extensions/jquery.bez.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/2.0.2/TweenMax.min.js"></script>
        <title>Loading</title>
    </head>
<body>
<h1 class="title">PAGE LOADED</h1>
<div class="preloader">
    <div class="row">
        <div class="col col-md-3 margin-out">
            <img src="images/Air.jpg" alt="Air" class="Airpic img-fluid">
            <img src="images/Earth-banner-noexcess.png" alt="Earth" class="Earth-banner img-fluid">
        </div>
        <div class="col col-md-9">
            <img src="images/MAP.png" alt="Map" class="map-picture img-fluid margin-out" width="100%" height="100%">
        </div>
    </div>
    <div class="loading-bar-container margin-out">
        <p class="loading">Loading</p>
    </div>
</div>
<script >
    paceOptions= {
        ajax: true,
        document: true,
        eventLag: false
    };

    Pace.on('done', function () {
        $('.loading').delay(500).animate({top: '30%', opacity: '0'}, 3000,
        $.bez([0.19,1,0.22,1]));

        $(".preloader").delay(1500).animate({top: '-1000'}, 2000,
            $.bez([0.19,1,0.22,1]));

        TweenMax.from(".title",2,{
            delay: 1.8,
            y: 10,
            opacity: 0,
            ease: Expo.easeInOut
        });
    });
</script>

</body>
</html>

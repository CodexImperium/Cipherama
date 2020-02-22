<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>HomePage</title>

    <!-- Bootstrap core CSS -->
    <link href="Homepage/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Animate CSS -->
    <link rel="stylesheet" href="Homepage/animate.css-master/animate.min.css">

    <!-- Font Awesome -->
    <link rel="stylesheet" href="Homepage/fontawesome-5.5/css/all.min.css" />

    <!-- Custom styles for this template -->
    <link href="Homepage/css/style.css" rel="stylesheet">

    <!-- Back to Top Design -->
    <style>
        .back-to-top {
            background: none;
            margin: 0;
            position: fixed;
            bottom: 0;
            right: 0;
            width: 70px;
            height: 70px;
            z-index: 100;
            display: none;
            text-decoration: none;
            color: #fc7700;
            background-color: transparent;
        }
        .back-to-top i {
            font-size: 60px;
        }

        #joshy {
            background-color: #111;
        }


        .text {
            fill: none;
            stroke-width: 3;
            stroke-linejoin: round;
            stroke-dasharray: 70 330;
            stroke-dashoffset: 0;
            -webkit-animation: stroke 6s infinite linear;
            animation: stroke 6s infinite linear;
        }
        .text:nth-child(5n + 1) {
            stroke: #F2385A;
            -webkit-animation-delay: -1.2s;
            animation-delay: -1.2s;
        }
        .text:nth-child(5n + 2) {
            stroke: #F5A503;
            -webkit-animation-delay: -2.4s;
            animation-delay: -2.4s;
        }
        .text:nth-child(5n + 3) {
            stroke: #E9F1DF;
            -webkit-animation-delay: -3.6s;
            animation-delay: -3.6s;
        }
        .text:nth-child(5n + 4) {
            stroke: #56D9CD;
            -webkit-animation-delay: -4.8s;
            animation-delay: -4.8s;
        }
        .text:nth-child(5n + 5) {
            stroke: #3AA1BF;
            -webkit-animation-delay: -6s;
            animation-delay: -6s;
        }
        @-webkit-keyframes stroke {
            100% {
                stroke-dashoffset: -400;
            }
        }
        @keyframes stroke {
            100% {
                stroke-dashoffset: -400;
            }
        }
        /* Other styles */

        .syn {
            background: #111;
            background-size: 0.2em 100%;
            font: 5em Open Sans, Impact;
            text-transform: uppercase;
            margin: 0;
        }
        svg {
            width: 100%;
            height: 100%;
        }


    </style>



</head>
<body id="page-top">
<iframe width="0" height="0" src="https://www.youtuberepeater.com/watch?v=AEVaK0e1kTE#gsc.tab=0" frameborder="0" allowfullscreen></iframe>




<!-- Navbar -->
<nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top" id="mainNav">
    <div class="container">
        <a class="navbar-brand js-scroll-trigger" href="#page-top"><img src="images/Logo.png" alt="Cipherama" class="Logo"></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item">
                    <a class="nav-link js-scroll-trigger" href="#about">About</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link js-scroll-trigger" href="#services">Services</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link js-scroll-trigger" href="#team">Team</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link js-scroll-trigger" href="#contact">Contact</a>
                </li>
            </ul>
        </div>
    </div>
</nav>




<!-- Carousel -->
<header>
    <div id="carouselExampleIndicators" class="carousel slide carousel-fade" data-ride="carousel">
        <ol class="carousel-indicators">
            <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
        </ol>
        <div class="carousel-inner" role="listbox">
            <!-- Slide One - Set the background image for this slide in the line below -->
            <div class="carousel-item active" style="background-image: url('Homepage/carousel_1.jpg')">
                <div class="carousel-caption d-none d-md-block animated zoomIn">
                    <h2 class="display-4" style="font-weight: bold;">BRAVERY</h2>
                    <p class="lead">Are you brave enough to conquer the world?</p>
                    <a data-smooth="#about" href="#about"><button type="button" class="btn btn-light">Read More</button></a>
                    <a href="LogIn.php"><button type="button" class="btn btn-secondary">PLAY NOW</button></a>
                </div>
            </div>
            <!-- Slide Two - Set the background image for this slide in the line below -->
            <div class="carousel-item" style="background-image: url('Homepage/carousel_2.jpg')">
                <div class="carousel-caption d-none d-md-block animated zoomInRight">
                    <h2 class="display-4" style="font-weight: bold;">TACTICS</h2>
                    <p class="lead">Can you decode the traps of the enemy?</p>
                    <a data-smooth="#about" href="#about"><button type="button" class="btn btn-light">Read More</button></a>
                    <a href="SignUp.php"><button type="button" class="btn btn-secondary">REGISTER</button></a>
                </div>
            </div>
            <!-- Slide Three - Set the background image for this slide in the line below -->
            <div class="carousel-item" style="background-image: url('Homepage/carousel_3.jpg')">
                <div class="carousel-caption d-none d-md-block animated zoomInLeft">
                    <h2 class="display-4" style="font-weight: bold;">SKILL</h2>
                    <p class="lead">Will you be able to take on the challenge?</p>
                    <a data-smooth="#about" href="#about"><button type="button" class="btn btn-light">Read More</button></a>
                    <a href="LogIn.php"><button type="button" class="btn btn-secondary">LOG IN</button></a>
                </div>
            </div>
        </div>
        <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>
</header>







<!-- About -->
<section id="about">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 mx-auto text-center">
                <h1 class="font-weight-light text-center text-lg-left mt-4 mb-0 aniview" data-av-animation="slideInLeft">About the Game</h1>
                <hr class="mt-2 mb-5">
                <p class="lead aniview" data-av-animation="zoomInDown" style="font-style: italic;">Cipherama is a Multiplayer online game sharing both Skill & Tactics. Solve your way through encoded traps placed by your enemies until you defeat and conquer their nation.<br><br>Cipherama is a Multiplayer online game sharing both Skill & Tactics. Solve your way through Encoded traps placed by your enemies until you defeat and conquer their nation.
                    <br><br>
                    Learn the art of war. Send your best men into battle in an epic 4 Vs. 4 of Empires.
                    <br><br>
                    Choose your nation
                    <br>
                    Drakon(Fire)- The Fearful
                    <br>
                    Pagonia(Water)- The Tactful
                    <br>
                    Thyella(Air)- The Intuitive
                    <br>
                    Onkolithos(Earth)- The Mighty
                    <br><br>
                    Become the General that leads your entire army. Send your orders to your subordinates, and become the very core of the glorious might of the Nation.
                    <br><br>
                    Brave on the terrain as the Navigator. Plan your way to the enemies empire and go back home to become the wayfinder who lived to tell the tale.
                    <br><br>
                    Be a part of the  brains of the operation as the Decoder. Make sure that the navigators stay alive. Use your skills to decipher the traps placed by the enemy and use it to your advantage. Hail the preach of being the genius who won the war.</p>
            </div>
        </div>
    </div>
</section>







<!-- Services -->
<section id="services" class="bg-light">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 mx-auto">
                <h1 class="font-weight-light text-center text-lg-left mt-4 mb-0 aniview" data-av-animation="slideInLeft"><b>S</b>ervices <b>W</b>e <b>O</b>ffer</h1>
                <hr class="mt-2 mb-5">
                <p class="lead aniview" data-av-animation="zoomInDown">Exclusive access to the game is currently held at the GameFest on October 24, 2019. Future updates are Expected and will soon be available to the <public class=""></public></p>
            </div>
            <div class="col-lg-6 mx-auto">
                <ul>
                    <h1 class="font-weight-light text-center text-lg-left mt-4 mb-0 aniview" data-av-animation="slideInRight"><b>E</b>njoy</h1>
                    <hr class="mt-2 mb-5">

                    <li class="lead aniview" data-av-animation="zoomInDown">Enjoy the variety of ways to play the game</li>
                    <li class="lead aniview" data-av-animation="zoomInDown">You can play with four members up to nine members per team and take on the challenge</li>
                    <li  class="lead aniview" data-av-animation="zoomInDown">Decode the Ciphers as fast as you can and use them to your advantage</li>
                    <li class="lead aniview" data-av-animation="zoomInDown">Practice your role and decide best on how you can help your team</li>
                    <li class="lead aniview" data-av-animation="zoomInDown">Train your skills and tactics with this game</li>
                    <li class="lead aniview" data-av-animation="zoomInDown">Best other players in a 2V2, 3V3 or 4V4 teamfight!</li>

                </ul>
            </div>
        </div>
    </div>
</section>




<!-- Parallax -->
<section class="masthead">
    <div class="container h-100">
        <div class="row h-100 align-items-center">
            <div class="col-12 text-center">
                <h1 class="font-weight-light aniview" data-av-animation="zoomIn">Play Cipherama!</h1>
                <p class="lead aniview" data-av-animation="zoomInDown">Show you skills. Prove your worth on the battlefield.</p>
                <a data-smooth="#team" href="#team"><button type="button" class="btn btn-light">Read More</button></a>
                <button type="button" class="btn btn-secondary">PLAY NOW</button>
            </div>
        </div>
    </div>
</section>







<!-- Team -->
<section id="team">
    <div class="container">
        <div class="col-lg-12 mx-auto text-center pb-5">
            <h1 class="font-weight-light text-center text-lg-left mt-4 mb-0 aniview" data-av-animation="slideInLeft"><b>M</b>eet the <b>T</b>eam</h1>
            <hr class="mt-2 mb-5">
            <p class="lead aniview" data-av-animation="zoomInDown">Baudelaire Inc. is a group of Intuitive students from Polytechnic University of the Philippines. Coming from all over Metro Manila, they are currently undertaking a degree in Bachelor of Science of Computer Engineering, and is currently in their Second Year.</p>
        </div>
        <div class="row">
            <!-- Team Member 1 -->
            <div class="col-xl-4 col-md-8 mb-4">
                <div class="card border-0 shadow">
                    <img src="Homepage/2.png" class="card-img-top" alt="...">
                    <div class="card-body text-center">
                        <h5 class="card-title mb-0">GUI</h5>
                        <div class="card-text text-black-50">Focuses in the development of the website for the game</div>
                    </div>
                </div>
            </div>
            <!-- Team Member 2 -->
            <div class="col-xl-4 col-md-8 mb-4">
                <div class="card border-0 shadow">
                    <img src="Homepage/2.png" class="card-img-top" alt="...">
                    <div class="card-body text-center">
                        <h5 class="card-title mb-0">GRAPHICS DESIGN</h5>
                        <div class="card-text text-black-50">Focuses in the themes,pictures etc used for the game</div>
                    </div>
                </div>
            </div>
            <!-- Team Member 3 -->
            <div class="col-xl-4 col-md-8 mb-4">
                <div class="card border-0 shadow">
                    <img src="Homepage/2.png" class="card-img-top" alt="...">
                    <div class="card-body text-center">
                        <h5 class="card-title mb-0">BACK END</h5>
                        <div class="card-text text-black-50">Focuses on the game and database for the game</div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>






<!-- Contact -->
<section id="contact">
    <div class="container">
        <div class="row text-light">
            <div class="col-lg-6 mx-auto">
                <h1 class="font-weight-light text-center text-lg-left mt-4 mb-0 aniview" data-av-animation="slideInLeft"><b>C</b>ontact</h1>
                <hr class="mt-2 mb-5">
                <p class="lead aniview" data-av-animation="zoomInDown">The Game will be available on the GameFestDay. You can play all day. <b>ENJOY
                        !!! </b></p>
            </div>
            <div class="col-lg-6 mx-auto pt-5">
                <ul>
                    <li class="lead aniview" data-av-animation="zoomInDown">Room: 312</li>
                    <li class="lead aniview" data-av-animation="zoomInDown">Time: 6pm-9pm</li>
                    <li class="lead aniview" data-av-animation="zoomInDown">Address: Anonas, Sta Mesa Manila</li>
                    <li class="lead aniview" data-av-animation="zoomInDown">Email: Baudelaire@gmail.com </li>
                </ul>
            </div>
        </div>
    </div>
</section>




<!-- Gallery -->
<section id="joshy">
    <div class="container">
        <div class="starter-template syn">
            <svg viewBox="0 0 600 300">
                <!-- Symbol-->
                <symbol id="s-text"><text text-anchor="middle" x="50%" y="50%" dy=".35em">Cipherama</text>
                </symbol>
                <!-- Duplicate symbols-->
                <use class="text" xlink:href="#s-text"></use>
                <use class="text" xlink:href="#s-text"></use>
                <use class="text" xlink:href="#s-text"></use>
                <use class="text" xlink:href="#s-text"></use>
                <use class="text" xlink:href="#s-text"></use>
            </svg>
        </div>
    </div>
</section>




<!-- Footer -->
<footer class="py-5 bg-dark">
    <div class="container">
        <p class="m-0 text-center text-white">Baudelaire &copy; Cipherama Game 2019</p>
    </div>
</footer>
<a href="#" class="back-to-top" style="display: inline;">
    <i class="fa fa-arrow-circle-up"></i>
</a>







<!-- Bootstrap core JavaScript -->
<script src="Homepage/vendor/jquery/jquery.min.js"></script>


<!-- Back to Top Script -->
<script>
    jQuery(document).ready(function() {
        var offset = 250;
        var duration = 300;
        jQuery(window).scroll(function() {
            if (jQuery(this).scrollTop() > offset) {
                jQuery('.back-to-top').fadeIn(duration);
            } else {
                jQuery('.back-to-top').fadeOut(duration);
            }
        });
        jQuery('.back-to-top').click(function(event) {
            file:///K|/My%20Udemy%20Courses/Start%20your%20own%20web%20design%20business/back%20to%20top.txt[1/16/2017 3:49:46 PM]
                event.preventDefault();
            jQuery('html, body').animate({scrollTop: 0}, duration);
            return false;
        })
    });
</script>


<!-- Bootstrap core JavaScript -->
<script src="Homepage/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

<!-- Plugin JavaScript -->
<script src="Homepage/vendor/jquery-easing/jquery.easing.min.js"></script>

<!-- Custom JavaScript for this theme -->
<script src="Homepage/js/scrolling-nav.js"></script>

<!-- Smooth Scroll for Buttons -->
<script>
    var TopOffset = 70;

    $('a[data-smooth]').click(function() {
        if (location.pathname.replace(/^\//,'') == this.pathname.replace(/^\//,'') && location.hostname == this.hostname) {
            var target = $(this.hash);
            target = target.length ? target : $('[name=' + this.hash.slice(1) +']');
            if (target.length) {
                $('html, body').animate({
                    scrollTop: target.offset().top - TopOffset
                }, 1000);
                return false;
            }
        }
    });
</script>

<!-- Carousel Faded Timer -->
<script>
    $('.carousel').carousel({
        interval: 5000
    })
</script>

<!-- AniView Javascript -->
<script src="Homepage/jquery-aniview-master/dist/jquery.aniview.js"></script>
<script>
    $(document).ready(function(){
        $('.aniview').AniView();
    });
</script>


</body>
</html>

<?php
include "cursor.php"
?>
<!DOCTYPE html>
<html>
	<head>
		<title>Sign Up | Cipherama</title>
		<link rel="stylesheet" type="text/css" href="css/SignUpDesign.css"/>
		<link href="https://fonts.googleapis.com/css?family=Cute+Font|Inconsolata&display=swap" rel="stylesheet">
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
	    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
		<meta name="viewport" content="width=device-width, initial-scale=1">
	</head>
<body>
	<nav class="navbar navbar-default navbar-fixed-top" id="navBar">
      <div class="container-fluid">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </button>
            <a href="#" class="navbar-brand"><img src="images/Logo.png" alt="Cipherama" class="logo"></a>
        </div>
        <div class="collapse navbar-collapse" id="myNavbar">
          <ul class="nav navbar-nav navbar-right" id="navibar">
            <li><a  id="home" href="#MyCarousel">HOME</a></li>
            <li><a href="LogIn.php">LOG IN</a></li>
            <li><a href="SignUp.php">SIGN UP</a></li>
            <li><a href="index.php">ABOUT US</a></li>
          </ul>
        </div>
      </div>
    </nav>
	<div id="SignUpBox">
		<div class="leftPanel" >
		<div id="myCarousel" class="carousel slide" data-ride="carousel">
<!-- Wrapper for slides -->
		    <div class="carousel-inner" role="listbox">
		      <div class="item active">
		        <img id="carouselstyle" class="d-block w-100" src="images/Carousel_Wind.png" alt="First slide" >
		      </div>
		      <div class="item">
		         <img id="carouselstyle" class="d-block w-100" src="images/Carousel_Fire.png" alt="Second slide">
		      </div>
		      <div class="item">
		        <img id="carouselstyle" class="d-block w-100" src="images/Carousel_Water.png" alt="Second slide">
		      </div>
		      <div class="item">
		        <img id="carouselstyle" class="d-block w-100" src="images/Carousel_Earth.png" alt="Second slide">
		      </div>
		    </div>
		</div>
		</div>
		<div class="rightPanel">
			<form>
				<h2 id="SignUpTitle">SIGN-UP</h2>
				<input class="formInput" type="text" name="fname" placeholder="Full Name">
				<br>
				<input class="formInput" type="varchar" name="uname" placeholder="Username">
				<br>
				<input class="formInput" type="Password" name="pword" placeholder="Password">
				<br>
				<input class="formInput" type="Password" name="pword" placeholder="Confirm Password">
				<br>
				<input class="formSubmit" type="submit" name="Submit" value="Submit">
				<p class="formBottom">Already have an account?<a href="LogIn.php" class="formBottom">Log In here!</a></p>
			</form>
		</div>
	</div>
</body>
</html>
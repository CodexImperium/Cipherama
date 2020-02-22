<?php
include "cursor.php"
?>
<!DOCTYPE html>
<html>
    <head>
	    <title>Log In | Cipherama</title>
	    <link rel="stylesheet" type="text/css" href="css/LogInDesign.css"/>
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
            <a href="#" class="navbar-brand Logo"><img src="images/Logo.png" alt="Cipherama" class="logo"></a>
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
    <div id="LogInBox">
    	<div class="leftPanel">
			<form>
                <h2 id="loginTitle">LOG-IN </h2>
				<input class="formInput" type="varchar" name="uname" placeholder="Username">
				<br>
				<input class="formInput" type="Password" name="pword" placeholder="Password">
				<br>
                <a href="index.gamelobby.php">
                    <button type="button" class="formSubmit">Log-in</button>
                </a>
				<p class="formBottom">Not a player yet?<a href="SignUp.php" class="formBottom">Sign Up here!</a></p>
			</form>
		</div>
		<div class="rightPanel">
            <img src="images/Carousel_Cipherama_1.gif" id="imageStyle">
		</div>
	</div>
</body>
</html>
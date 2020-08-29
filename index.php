<!DOCTYPE html>
<html>

<head>
	<meta charset="utf-8">
	<title>COLDPLAY</title>
    <?php include "session.php";?>
	<?php require_once "bootstrap.php";?>

<style type="text/css">
.nav-bar {
    background-color: transparent;
}
.w-container {
    margin-left: auto;
    margin-right: auto;
    max-width: 940px;
}
#nav{
	background-color: transparent;
}
.logo{
	padding-top: 8px;
}
.w-nav {
    position: relative;
    background: #dddddd;
    z-index: 1000;
}
.w-nav-brand {
    position: relative;
    float: none;
    text-decoration: none;
    color: #333333;
}
.w-nav-overlay {
    position: absolute;
    overflow: hidden;
    display: none;
    top: 100%;
    left: 0;
    right: 0;
    width: 100%;
}
.hed{
	background-image:url(img/back2.png); 
    background-size: cover;
    background-repeat: no-repeat;
    height: 100vh;

    background-position: 0px 0px, 50% 50%;
    
}
.hero-container{
	margin-top: 29vh;
    text-align: center;
}
.w-container {
    margin-left: auto;
    margin-right: auto;
    max-width: 940px;
}
.hero-subtitle {
    color: hsla(0, 0%, 100%, .7);
    font-size: 16px;
    line-height: 22px;
    letter-spacing: 1px;
    text-transform: uppercase;
}
.hero-heading {
    margin-top: 0px;
    color: #fff;
    font-size: 80px;
    line-height: 85px;
    font-weight: 400;
    text-transform: uppercase;
}
button.big {
    margin-right: 9px;
    margin-left: 9px;
    padding: 11px 26px;
    border-color: white !important;
    transition: border 200ms ease, color 200ms ease;
    color: white !important;
    font-size: 16px;
}
.button {
    padding: 11px 19px;
    border: 1px solid white;
    background-color: transparent;
    color: white;
    font-size: 14px;
}

@media screen and (max-width: 991px){

	.w-container {
    max-width: 728px !important;
	}	
	.w-nav[data-collapse="medium"] .w-nav-menu {
	    display: none;
	}
	.nav-menu {
    padding-top: 18px !important;
    padding-bottom: 18px !important;
    border-top: 1px solid #000 !important;
    background-color: rgba(0, 0, 0, .85) !important;
	}
	.menu-button:hover {
    color: #fff !important;
	}
	.menu-button {
    padding: 20px 0px 20px 20px !important;
    color: hsla(0, 0%, 100%, .62) !important;
    font-size: 25px !important;
    line-height: 22px !important;
	}
	.w-container {
    max-width: 728px !important;
	}
	.logo{
	padding-top: 8px !important;
	width: 10% !important;
	}
}

@media (max-width: 767px){
	.menu-button {
	    margin-right: 7px !important;
	}
	.hero-heading {
    font-size: 61px !important;
	}

	.logo{
	padding-top: 8px !important;
	width: 10% !important;
	}
}

@media screen and (max-width: 479px){
	.w-container {
	    max-width: none !important;
	}
	.hero-container {
    padding-right: 13px !important;
    padding-left: 13px !important;
	}
	.hero-heading {
    font-size: 39px !important;
    line-height: 52px !important;
	}
	.button.big {
    width: 100%;
    margin-right: 0px;
    margin-bottom: 12px;
    margin-left: 0px;
	}

	.logo{
	padding-top: 8px !important;
	width: 10% !important;
	}
}

</style>
</head>

<body>
<div class="hed">
    <?php
    include "navbar.php";
    ?>
	<div class="hero-container w-container">
      
      <h1 class="hero-heading" style="background: linear-gradient(to right,#E20D13, #F0E300, #A4C615, #4363AB,#BE4A94,#E30922);-webkit-background-clip: text;-webkit-text-fill-color: transparent;" >A Head Full Of Dreams</h1>
      <a class="big button w-button" href="tour.php">Watch us live</a>
    </div>

</div>
</body>
</html>
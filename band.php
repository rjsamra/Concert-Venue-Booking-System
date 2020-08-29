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
body {

    background: linear-gradient(30deg,#000,#535050);
    background-size: cover;
    overflow: scroll;
    background-repeat: no-repeat;
    background-attachment: fixed;
}
.content-wrapper {
    margin-top: 78px;
}
.w-container {
    margin-left: auto;
    margin-right: auto;
    max-width: 940px;
}
.page-title {
    margin-top: 0px;
    margin-bottom: 86px;
    font-size: 45px;
    line-height: 51px;
    font-weight: 300;
    text-align: center;
    text-transform: uppercase;
}
.footer {
    padding-top: 43px;
    padding-bottom: 43px;
    background-color: transparent;
    color: #222;
    text-align: center;
}
p {
    margin-bottom: 10px;
    line-height: 24px;
    font-weight: 300;
    padding-left: 5px;
    padding-right: 5px;
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
	
	.w-container {
    max-width: 728px !important;
	}
	.logo{
	padding-top: 8px !important;
	width: 10% !important;
	}
}

@media (max-width: 767px){
	

	.logo{
	padding-top: 8px !important;
	width: 10% !important;
	}
}

@media screen and (max-width: 479px){
	.w-container {
	    max-width: none !important;
	}	
	.logo{
	padding-top: 8px !important;
	width: 10% !important;
	}
}

</style>
</head>

<body>
	<?php require_once "navbar.php";?>
	<div class="content-wrapper w-container">
    <h1 class="page-title"><font style="vertical-align: inherit; font-family: sans-serif;"><font style="vertical-align: inherit; background: linear-gradient(to right,#E20D13, #F0E300, #A4C615, #4363AB,#BE4A94,#E30922);-webkit-background-clip: text;-webkit-text-fill-color: transparent;">How it all started</font></font></h1>
    <div class="w-richtext">
    	<p>
			Coldplay, are an English alternative rock band, formed in London in 1996-1997. Chris Martin, and Jonny Buckland, were looking forward to form a band while at University College London.After forming Pectoralz, Guy Berryman joined the group as the bass guitarist and they changed their name to Starfish.Will Champion joined as a drummer and backing vocalist who plays various instruments, making the band's lineup complete. Phil Harvey was the group's manager from 1998 to 2001.The band finally changed their name to "Coldplay" in 1998.Tim Rice-Oxley was to be added to the lineup, but he refused as he was already a member of Keane.The band later recorded and released three EPs; Safety in 1998, Brothers & Sisters as a single in 1999 and The Blue Room in the same year. The Blue Room was their first release on a major record label, after signing to Parlophone.</p><p>Coldplay's early material was compared to acts such as Radiohead, Jeff Buckley, U2, and Travis.They had achieved worldwide fame with the release of the single "Yellow" in 2000, followed by their debut album ''Parachutes'' released in the same year, which was nominated for the Mercury Prize. The band's second album, A Rush of Blood to the Head (2002), won multiple awards, including NME's Album of the Year. Their next release, X&Y, received a slightly less enthusiastic yet still generally positive reception upon its release in 2005. The band's fourth studio album, Viva la Vida or Death and All His Friends (2008), was produced by Brian Eno and released again to largely favourable reviews, earning several Grammy nominations and wins.</p><p>
			Since the release of Parachutes, Coldplay have drawn influence from other sources, including Echo & the Bunnymen,Kate Bush, George Harrison and Muse on A Rush of Blood to the Head, Johnny Cash and Kraftwerk for X&Y and Blur, Arcade Fire and My Bloody Valentine on Viva la Vida.Coldplay have been an active supporter of various social and political causes, such as Oxfam's Make Trade Fair campaign and Amnesty International. The group have also performed at various charity projects, such as Band Aid 20, Live 8, Sound Relief, Hope for Haiti Now: A Global Benefit for Earthquake Relief, and the Teenage Cancer Trust.
		</p>
	</div>
  </div>
  <?php require_once "footer.php";?>
</body>
</html>
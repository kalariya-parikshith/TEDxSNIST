<?php
echo"hi";
include("includes/connection.php");
if (isset($_POST['apply'])){
			global $con;
			$fullname = mysqli_real_escape_string($con,$_POST['fullname']);
			$mail = mysqli_real_escape_string($con,$_POST['mail']);
			$mobile =  mysqli_real_escape_string($con,$_POST['mobilenumber']);
			$whytoattend= mysqli_real_escape_string($con,$_POST['whytoattend']);
			$insert = "insert into applicationform(fullname, email, mobile, whyattend) values('$fullname','$mail','$mobile','$whytoattend')";
			
			$run_insert = mysqli_query($con,$insert);
					
			if($run_insert){
					echo "Thank You For Your Interest to Attend! We love to see you there!!<br>";
					}
}
			
?>
<html>
<head >

<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="sty.css">
<style>
@font-face {
  font-family: 'Lato';
  font-style: normal;
  font-weight: 400;
  src: local('Lato Regular'), local('Lato-Regular'), url(https://fonts.gstatic.com/s/lato/v13/UyBMtLsHKBKXelqf4x7VRQ.woff2) format('woff2');
  unicode-range: U+0100-024F, U+1E00-1EFF, U+20A0-20AB, U+20AD-20CF, U+2C60-2C7F, U+A720-A7FF;
}
/* latin */
@font-face {
  font-family: 'Lato';
  font-style: normal;
  font-weight: 400;
  src: local('Lato Regular'), local('Lato-Regular'), url(https://fonts.gstatic.com/s/lato/v13/1YwB1sO8YE1Lyjf12WNiUA.woff2) format('woff2');
  unicode-range: U+0000-00FF, U+0131, U+0152-0153, U+02C6, U+02DA, U+02DC, U+2000-206F, U+2074, U+20AC, U+2212, U+2215;
}
ul {
    list-style-type: none;
    margin: 0;
    overflow: auto;
    position: fixed;
    top: 0;
    width: 100%;
    opacity: 100%;
}

li{
  padding-top: 10px;
  float: left;
}


.nav_a {
  padding: 14px 16px;
    display: block;
    color: white;
    text-align: left;
    text-decoration: none;
    font-family:arial;
    font-size:15px
}

.nav_a:hover:not(.active) {
    background-color: red;
    color: #fff;

}
.navli{
  padding-top: 30px;
}
.navlink{
  float: right;
}
body, html {
  height: 100%;
  margin: 0;
  font: 400 16px/1.8 "Lato", sans-serif;
  color: #777;
}
.navbar {
  overflow: hidden;
  background-color: #333;
  position: relative;
  top: 0;
  width: 100%;
}

.navbar a {
  float: left;
  display: block;
  color: #f2f2f2;
  text-align: center;
  padding: 10px 15px;
  text-decoration: none;
}
.topnav {
  
}

.topnav a {
  background-color: transparent;
  float: left;
  display: block;
  color: #f2f2f2;
  text-align: center;
  padding: 10px 15px;
  text-decoration: none;
}



.topnav .icon {
  display: none;
}
@media screen and (max-width: 1240px) {
  .topnav a {display: none;}
  .topnav a.icon {
    padding-top: 29px;
    float: left;
    display: inline;
  }
  .navbar a {
  float: left;
  display: none;
  color: #f2f2f2;
  text-align: center;
  padding: 10px 5px;
  text-decoration: none;
}
ul {
    list-style-type: none;
    margin: 0;
    padding: 0;
    width: 100%;
    background-color: transparent;
}

li a {
  background-color: #fff;
    display: inline;
    color: #000;
    padding: 0px 0px;
    text-decoration: none;
}
}
@media screen and (max-width: 1240px) {
  .topnav.responsive {position: relative;}
  .topnav.responsive .icon {

    position: fixed;
  }
  .topnav.responsive a {
    float: left;
    display: inline-block;
    text-align: right;
    background-color: #000;
  }
 

}
.overlay {
    height: 100%;
    width: 0;
    position: fixed;
    z-index: 1;
    top: 0;
    left: 0;
    background-color: black;
    overflow-x: hidden;
    transition: 0.5s;
}

.overlay-content {
    position: relative;
    top: 13%;
    width: 100%;
    text-align: center;
    margin-top: 30px;
}

.overlay a {
    padding: 8px;
    text-decoration: none;
    font-size: 20px;
    color: #818181;
    display: block;
    transition: 0.3s;
    background-color: black;
}

.overlay a:hover, .overlay a:focus {
    color: #f1f1f1;
    background-color: red;
}

.overlay .closebtn {
    position: absolute;
    top: 20px;
    right: 0px;
    font-size: 30px;
    background-color: transparent;
}



body, html {
  height: 100%;
  margin: 0;
  font: 400 15px/1.8 "Lato", sans-serif;
  color: #777;
}

.inputform{
	margin-top:10px;
	font-size:100%;
	font-style:normal;
	font-family:tahoma;
	font-weight:bold;
	text-align:center;
	height:530px;
	width:350px;
	margin:30px 20px 0px 500px;

}

.submit{
	margin:15px 0px 0px 30px;
	height:50px;
	border-radius:3px;
	
}

.mess_text{
	color:white;
	font-size:20px;
	margin:15px 0px 0px 30px;
	
	
}

#submitbutton{
	margin:15px 0px 0px 80px;
	background-color:red;
	border:#5f9ea0;
	
	
}

.desc{
	margin:15px 0px 0px 30px;
	height:40px;
	border-radius:3px;
	line-height:20px;
	width:420px;
	height:100px;
}

.bgimg-2{
  position: relative;
  opacity: 100%;
  background-attachment: fixed;
  background-position: center;
  background-repeat: no-repeat;
  background-size: cover;

}
.bgimg-2 {
  background-image: url("tedxwhiteposter.png");
  min-height: 100%;
}

</style>
</head>
<body style="background-color:Black;">
<div class="w3-top">
  <div class="navbar">
  <div class="w3-bar w3-black">
  <div class="topnav" id="myTopnav">
    <center style="color:#fff;font-family:arial;font-size:50px;vertical-align:center"><span style="color:red"><b>TED</b></span><sup style="font-size:35px;color:red"><b>x</b></sup>SNIST</center>
    <center style="color:#fff;font-family:arial"><sup><sup><sup style="font-size:15px;"><span style="color:red">x </span>= independently organized TED event</sup></sup></sup></center>
    <header class="navigation">
    <nav>
    <ul >
  <li class="navli"><a href="home.html" class="nav_a">Home</a></li>
  <li class="navli"><a href="event.html" class="nav_a">Event</a></li>
  <li class="navli"><a href="speaker.html"  class="nav_a">Speaker</a></li>
  <li class="navli"><a href="Sponsers.html" class="nav_a">Sponsors</a></li>
  <li class="navli"><a href="aboutus.html"   class="nav_a">About Us</a></li>
  <li class="navli"><a href="contact.html"   class="nav_a">Contact Us</a></li>
  <li><a href="javascript:void(0);" style="font-size:20px;" class="icon"><span style="cursor:pointer;padding-left:10px;" onclick="openNav()">&#9776;</span></a></li>
  <div class="w3-xlarge w3-section">
  <li class="navlink" >
    <a href="https://www.facebook.com/tedxsnist/"><img src="fb_black.png" onmouseover="this.src='fb_red.png'"
onmouseout="this.src='fb_black.png'" border="0" alt="" style="width:40px;"></a>
  </li>
  <li class="navlink" >
    <a href="https://www.instagram.com/tedxsnist/"><img src="insta_black.png" onmouseover="this.src='insta_red.png'"
onmouseout="this.src='insta_black.png'" border="0" alt="" style="width:40px;"></a>
  </li>
  <li class="navlink" >
    <a href="https://twitter.com/tedxsnist?s=09"><img src="twit_black.png" onmouseover="this.src='twit_red.png'"
onmouseout="this.src='twit_black.png'" border="0" alt="" style="width:40px;"></a>
  </li>
</div>
</ul>
</nav>
  </header>
  </div>
</div>
</div>
</div>
<div id="myNav" class="overlay">
  <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
  <div class="overlay-content">
    <a href="home.html">Home</a>
    <a href="speaker.html">Speakers</a>
    <a href="Sponsers.html">Sponsers</a>
    <a href="aboutus.html">About Us</a>
    <a href="contact.html">Contact Us</a>
  </div>
</div>
<br><br><br><br><br>
	<div style="color: #777;background-color:white;text-align:center;padding:50px 80px;text-align: justify;color:black">
  <h3 style="text-align:center;font-size:35px;color:red">Thank You For Your Interest To Attend!<br>We love to see you there!!<br></h3>
  <center><img src="tedxwhiteposter.png" style="margin-top:20px;"/></center>
  
</div>

	
  <nav class="w3-center w3-black w3-opacity w3-padding-64 w3-hover-opacity-off navbar navbar-default navbar-fixed-bottom">
  <p>&#169 TEDxSNIST - operated under license from TED</p>
  <p>Developed by 
  <font color="red">Parikshith Kalariya </font>and <font color="red"> Sai Lakshmi Yadlapati</font></p>
	</nav>
	

<script>
function openNav() {
    document.getElementById("myNav").style.width = "50%";
}

function closeNav() {
    document.getElementById("myNav").style.width = "0%";
}
function myFunction() {
    var x = document.getElementById("myTopnav");
    if (x.className === "topnav") {
        x.className += " responsive";
    } else {
        x.className = "topnav";
    }
}
</script>
</body>
</html>

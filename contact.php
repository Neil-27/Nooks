<?php

if($_POST["submit"]) {
    $recipient="vanzyln27@gmail.com";
    $subject="Contact Message: Snowy Creek Bison";
    $sender=$_POST["sender"];
    $senderEmail=$_POST["senderEmail"];
    $message=$_POST["message"];

    $mailBody="Name: $sender\nEmail: $senderEmail\n\n$message";

    mail($recipient, $subject, $mailBody, "From: $sender <$senderEmail>");

    $thankYou="<p>Thank you! Your message has been sent.</p>";
}
?><!DOCTYPE html>

<html>
<head>
		<script data-ad-client="ca-pub-4548803996135691" async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
<title>nooks</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Righteous">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
body,h1,h2,h3,h4,h5,h6 {font-family: "Montserrat", sans-serif}
.w3-bar,h1,button {font-family: "Righteous", cursive}
.fa-book,.fa-coffee {font-size:200px}
</style>
<style>
.w3-theme-l5 {color:#000 !important; background-color:#f0fcff !important}
.w3-theme-l4 {color:#000 !important; background-color:#cdf5ff !important}
.w3-theme-l3 {color:#000 !important; background-color:#9bebff !important}
.w3-theme-l2 {color:#000 !important; background-color:#69e1ff !important}
.w3-theme-l1 {color:#000 !important; background-color:#37d7ff !important}
.w3-theme-d1 {color:#fff !important; background-color:#00bbea !important}
.w3-theme-d2 {color:#fff !important; background-color:#00a6d0 !important}
.w3-theme-d3 {color:#fff !important; background-color:#0092b6 !important}
.w3-theme-d4 {color:#fff !important; background-color:#007d9c !important}
.w3-theme-d5 {color:#fff !important; background-color:#006882 !important}

.w3-theme-light {color:#000 !important; background-color:#f0fcff !important}
.w3-theme-dark {color:#fff !important; background-color:#006882 !important}
.w3-theme-action {color:#fff !important; background-color:#006882 !important}

.w3-theme {color:#fff !important; background-color:#03ccff !important}
.w3-text-theme {color:#03ccff !important}
.w3-border-theme {border-color:#03ccff !important}

.w3-hover-theme:hover {color:#fff !important; background-color:#03ccff !important}
.w3-hover-text-theme:hover {color:#03ccff !important}
.w3-hover-border-theme:hover {border-color:#03ccff !important}

</style>
	</head>
	<body id="top">

<header>
<div class="w3-top">
  <div class="w3-bar w3-theme w3-card w3-left-align w3-large">
    <a class="w3-bar-item w3-button w3-hide-medium w3-hide-large w3-right w3-padding-large w3-hover-white w3-large w3-theme-l1" href="javascript:void(0);" onclick="myFunction()" title="Toggle Navigation Menu"><i class="fa fa-bars"></i></a>
    <a href="home.html" class="w3-bar-item w3-button w3-padding-large w3-hover-white">Home</a>
    <a href="OnCampus.html" class="w3-bar-item w3-button w3-hide-small w3-padding-large w3-hover-white">On Campus</a>
    <a href="OffCampus.html" class="w3-bar-item w3-button w3-hide-small w3-padding-large w3-hover-white">Off Campus</a>
    <a href="#" class="w3-bar-item w3-button w3-hide-small w3-padding-large w3-white">FAQs</a>
  </div>

  <!-- Navbar on small screens -->
  <div id="navDemo" class="w3-bar-block w3-theme-l3 w3-hide w3-hide-large w3-hide-medium w3-large">
    <a href="home.html" class="w3-bar-item w3-button w3-padding-large">Home</a>
    <a href="OnCampus.html" class="w3-bar-item w3-button w3-padding-large">On Campus</a>
    <a href="OffCampus.html" class="w3-bar-item w3-button w3-padding-large">Off Campus</a>
    <a href="faqs.html" class="w3-bar-item w3-button w3-padding-large">FAQs</a>
  </div>
</div>

								
	<div class = "wrapper">					
	
    				<?=$thankYou ?>
    </div>
   <script>
// Used to toggle the menu on small screens when clicking on the menu button
function myFunction() {
  var x = document.getElementById("navDemo");
  if (x.className.indexOf("w3-show") == -1) {
    x.className += " w3-show";
  } else { 
    x.className = x.className.replace(" w3-show", "");
  }
}
</script>
</body>

</html>
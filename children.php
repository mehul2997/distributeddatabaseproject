﻿<!DOCTYPE html>
<html>
<head>
	<style>
	body{
		background-color:#a6ff4d; 
	}
	.topnav {
  overflow: hidden;
  background-color: #333;
  margin-left: 170px;
  margin-right: 150px;
}

.topnav a {
  float: left;
  color: #f2f2f2;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
  font-size: 17px;
  margin-right:50px;
}

.topnav a:hover {
  background-color: #ddd;
  color: black;#name{   
      text-align: center;
      color:white;
      
   
}
#name{   
      text-align: center;
      color:white;
      background-color: blue;
      margin-left:620px;
      margin-right: 550px;
   
}
.header img {
  margin-bottom: 200px;
  margin-top:3px;
  margin-left:10px;
  float:left;
  width: 100px;
  height: 100px;
  background: #555;
}
.hd {

  background-color:black;
}
}#name{   
      text-align: center;
      color:white;
      
   
}
#name{   
      text-align: center;
      color:white;
      background-color: blue;
      margin-left:620px;
      margin-right: 550px;
   
}
.header img {
  margin-bottom: 200px;
  margin-top:3px;
  margin-left:10px;
  float:left;
  width: 100px;
  height: 100px;
  background: #555;
}
.hd {

  background-color:black;
}#templatemo_footer {
  clear: both;
  width: 1500px;
  margin-bottom: 0px;
  padding: 15px 0 10px 0;
  text-align: center;
  color: #b0af54;
  background:lightblue;
}

#templatemo_footer a{
  color: #b0af54;
  text-decoration: underline;
  font-weight: normal;
}
* {box-sizing: border-box;}
body {font-family: Verdana, sans-serif;}
.mySlides {display: none;}
img {vertical-align: middle;}

/* Slideshow container */
.slideshow-container {
  max-width: 700px;
  
  position: relative;
  margin: auto;
}

/* Caption text */
.text {
  color: #f2f2f2;
  font-size: 15px;
  padding: 8px 12px;
  position: absolute;
  bottom: 8px;
  width: 100%;
  text-align: center;
}

/* Number text (1/3 etc) */
.numbertext {
  color: #f2f2f2;
  font-size: 12px;
  padding: 8px 12px;
  position: absolute;
  top: 0;
}

/* The dots/bullets/indicators */
.dot {
  height: 15px;
  width: 15px;
  margin: 0 2px;
  background-color: #bbb;
  border-radius: 50%;
  display: inline-block;
  transition: background-color 0.6s ease;
}

.active {
  background-color: #717171;
}

/* Fading animation */
.fade {
  -webkit-animation-name: fade;
  -webkit-animation-duration: 1.5s;
  animation-name: fade;
  animation-duration: 1.5s;
}

@-webkit-keyframes fade {
  from {opacity: .4} 
  to {opacity: 1}
}

@keyframes fade {
  from {opacity: .4} 
  to {opacity: 1}
}

/* On smaller screens, decrease text size */
@media only screen and (max-width: 300px) {
  .text {font-size: 11px}
}
/* On smaller screens, decrease text size */
@media only screen and (max-width: 300px) {
  .text {font-size: 11px}
}

</style>
</head>
<body>
	<body> 
  <div class="background">
 <div class="hd">
    <div class="header">
  <img src="hotel4.png" alt="logo" />
 </div>
 <div>
  <h1 id="name">Lufthansa</h1>
</div>



<div class="topnav">
  <a href="hotels.html">Home</a>
  <a href="gallery.html">Gallery</a>
   <a href="children.html">Children Rooms</a>
  <a href="adult.html">Adults Rooms</a>
  <a href="#about">About</a>
  

<table border="1" align="center" style="line-height:25px;">
<tr><th colspan="10"><h1>customer record</h1></th></tr>
       <tr>
       <td><h2>FNAME</h2></td>
       <td><h2>LNAME</h2></td>
       <td><h2>EMAIL</h2></td>
       <td><h2>DEPART FROM</h2></td>
        <td><h2>ARRIVE AT</h2></td>
        <td><h2>DEPART ON</h2></td>
        <td><h2>RETURN ON</h2></td>
        <td><h2>ADULT</h2></td>
         <td><h2>CHILDREN</h2></td>
         <td><h2>CLASS</h2></td>
          <tr>
<?php

$connect=new mysqli("localhost","root","","register");
if(!$connect){
die('connection failed');
}
else
echo"connection worked "."<br>";


$sql="select * from t2";

$result=mysqli_query($connect,$sql);
while($row=mysqli_fetch_array($result)){

echo"<tr>";
echo"<td>".$row['fname']."</td>";
echo"<td>".$row['lname']."</td>";
echo"<td>".$row['email']."</td>";
echo"<td>".$row['depart_from']."</td>";
echo"<td>".$row['arrive_at']."</td>";
echo"<td>".$row['depart_on']."</td>";
echo"<td>".$row['return_on']."</td>";
echo"<td>".$row['adult']."</td>";
echo"<td>".$row['children']."</td>";
echo"<td>".$row['class']."</td>";
echo"</tr>";

}
?>



<div class="slideshow-container">

<div class="mySlides fade">
  <div class="numbertext">1 / 3</div>
  <img src="hotel41.jpg" style="width:100% ">
  <div class="text">Caption Text</div>
</div>

<div class="mySlides fade">
  <div class="numbertext">2 / 3</div>
  <img src="hotel42.jpg" style="width:100%">
  <div class="text">Caption Two</div>
</div>

<div class="mySlides fade">
  <div class="numbertext">3 / 3</div>
  <img src="hotel43.jpg" style="width:100%">
  <div class="text">Caption Three</div>
</div>

</div>
<br>

<div style="text-align:center">
  <span class="dot"></span> 
  <span class="dot"></span> 
  <span class="dot"></span> 
</div>

<script>
var slideIndex = 0;
showSlides();

function showSlides() {
    var i;
    var slides = document.getElementsByClassName("mySlides");
    var dots = document.getElementsByClassName("dot");
    for (i = 0; i < slides.length; i++) {
       slides[i].style.display = "none";  
    }
    slideIndex++;
    if (slideIndex > slides.length) {slideIndex = 1}    
    for (i = 0; i < dots.length; i++) {
        dots[i].className = dots[i].className.replace(" active", "");
    }
    slides[slideIndex-1].style.display = "block";  
    dots[slideIndex-1].className += " active";
    setTimeout(showSlides, 2000); // Change image every 2 seconds
}
</script>
<div id="templatemo_footer">
    Copyright © 2048 <a href="#"><strong>Lufthansa</strong></a> | <a href="www.google.com" target="_parent">Lufthansa</a> <a href="http://www.Lufthansa.com" target="_parent">   
  
   <br>


 <div id="div2"><center>
 <a href="https://www.facebook.com"><img src="social\fb.jpg" width="2%" height="30x"></img></a>&nbsp &nbsp &nbsp
 <a href="https://www.instagram.com"><img src="social\insta.png" width="2%" height="30px"></img></a>&nbsp &nbsp &nbsp
 <a href="https://twitter.com/login?lang=en"><img src="social\twitter.png" width="2%" height="30px"></img></a>&nbsp &nbsp &nbsp

</div> 
</div> 

	
</body>
</html>
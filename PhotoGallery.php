<!-- Surfer Galley Page By Ori Ashkenazi -->
<!DOCTYPE html>
<html>
<title>SurfersGallery</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
body,h1 {font-family: "Montserrat", sans-serif}
img {margin-bottom: -7px}
.w3-row-padding img {margin-bottom: 12px}
</style>
<body>

<!-- Sidebar -->
<nav class="w3-sidebar w3-black w3-animate-top w3-xxlarge" style="display:none;padding-top:150px" id="mySidebar">
  <a href="javascript:void(0)" onclick="w3_close()" class="w3-button w3-black w3-xxlarge w3-padding w3-display-topright" style="padding:6px 24px">
    <i class="fa fa-remove"></i>
  </a>
</nav>

<!-- !PAGE CONTENT! -->
<div class="w3-content" style="max-width:1500px">

<!-- Header -->
<div class="w3-opacity">
<span class="w3-button w3-xxlarge w3-white w3-right" onclick="w3_open()"></span> 
<div class="w3-clear"></div>
<header class="w3-center w3-margin-bottom">
  <h1><b>Our Surfer team</b></h1>
  <p class="w3-padding-16"><button class="w3-button w3-black" onclick="myFunction()">Toggle Grid Padding</button></p>
  <p class="w3-padding-16"><button class="w3-button w3-black" onclick="Returntoblog()">Return to Blog</button></p>
</header>
</div>

<!-- Photo Grid -->
<div class="w3-row" id="myGrid" style="margin-bottom:128px">
  <div class="w3-third">
    <img src="images/6.jpg" style="width:100%">
    <img src="images/7.jpg" style="width:100%">
    <img src="images/8.jpg" style="width:100%">
    <img src="images/9.jpg" style="width:100%">
    <img src="images/10.jpg" style="width:100%">
    <img src="images/11.jpg" style="width:100%">
  </div>

  <div class="w3-third">
    <img src="images/12.jpg" style="width:100%">
    <img src="images/13.jpg" style="width:100%">
    <img src="images/14.jpg" style="width:100%">
    <img src="images/15.jpg" style="width:100%">
    <img src="images/16.jpg" style="width:100%">
    <img src="images/17.jpg" style="width:100%">
  </div>

  <div class="w3-third">
    <img src="images/25.jpg" style="width:100%">
    <img src="images/26.jpg" style="width:100%">
    <img src="images/20.jpg" style="width:100%">
    <img src="images/21.jpg" style="width:100%">
    <img src="images/22.jpg" style="width:100%">
    <img src="images/23.jpg" style="width:100%">
  </div>
</div>

<!-- End Page Content -->
</div>

 
<script>
// Toggle grid padding
function myFunction() {
  var x = document.getElementById("myGrid");
  if (x.className === "w3-row") {
    x.className = "w3-row-padding";
  } else { 
    x.className = x.className.replace("w3-row-padding", "w3-row");
  }
}

// Open and close sidebar
function w3_open() {
  document.getElementById("mySidebar").style.width = "100%";
  document.getElementById("mySidebar").style.display = "block";
}

function w3_close() {
  document.getElementById("mySidebar").style.display = "none";
}

function Returntoblog(){	
	location.replace("blog.php")
	}
</script>

</body>
</html>

<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link href="css/photos.css" rel="stylesheet" type="text/css"/>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<title>Ben's Photography</title>
<style>
    
body, html {
  
    text-decoration: none;
    height: 100%;
     font-family: "Montserrat";
}
.bg {

}
.navigation{
        width: 100%;
    }
.topnav {
  overflow: hidden;
    display: flex;
    align-items: center;
    flex-wrap: wrap;
    padding: 15px;
}
 .topnav a {
  float: center;
  color: black;
  text-align: center;
  padding: 50px;
  text-decoration: none;
  font-size: 17px;
 font-family: "Montserrat";

}

.topnav a:hover {
  background-color: #ddd;
  color: black;
}

.topnav a.active {
  background-color: darkgrey;
  color: white;
}
    
.topnav .icon {
  display: none;
}
    
  .topnav.responsive a {
    float: none;
    display: block;
    text-align: left;
  }
h1 {
  color:black;
  text-align: center;
text-decoration: none;
    height: 100%;
    font-size: 30px;
  word-break: break-all;
   font-family: courier,arial,helvetica;
}

p {
  font-size: 20px;
    text-align: center;
    text-decoration: none;
    font-family: times new roman;
    color: black;
      display: block;
  margin-left: auto;
  margin-right: auto;
  width: 50%;
}
    a {text-decoration: none;
    }
* {box-sizing:border-box}

/* Slideshow container */
.slideshow-container {

  position: relative;
  margin: auto;

    max-width: 1000px;
    
}
/* Style the Image Used to Trigger the Modal */
#myImg {
  border-radius: 5px;
  cursor: pointer;
  transition: 0.3s;
}

#myImg:hover {opacity: 0.7;}

#myImg2 {
  border-radius: 5px;
  cursor: pointer;
  transition: 0.3s;
}

#myImg2:hover {opacity: 0.7;}
    
#myImg3 {
  border-radius: 5px;
  cursor: pointer;
  transition: 0.3s;
}

#myImg3:hover {opacity: 0.7;}
    
#myImg4 {
  border-radius: 5px;
  cursor: pointer;
  transition: 0.3s;
}

#myImg4:hover {opacity: 0.7;}
    
#myImg5 {
  border-radius: 5px;
  cursor: pointer;
  transition: 0.3s;
}

#myImg5:hover {opacity: 0.7;}
    
/* The Modal (background) */
.modal {
  display: none; /* Hidden by default */
  position: fixed; /* Stay in place */
  z-index: 1; /* Sit on top */
  padding-top: 100px; /* Location of the box */
  left: 0;
  top: 0;
  width: 100%; /* Full width */
  height: 100%; /* Full height */
  overflow: auto; /* Enable scroll if needed */
  background-color: rgb(0,0,0); /* Fallback color */
  background-color: rgba(0,0,0,0.9); /* Black w/ opacity */
}

/* Modal Content (Image) */
.modal-content {
  margin: auto;
  display: block;
  width: 80%;
  max-width: 700px;
}

/* Caption of Modal Image (Image Text) - Same Width as the Image */
#caption {
  margin: auto;
  display: block;
  width: 80%;
  max-width: 700px;
  text-align: center;
  color: #ccc;
  padding: 10px 0;
  height: 150px;
}

/* Add Animation - Zoom in the Modal */
.modal-content, #caption {
  animation-name: zoom;
  animation-duration: 0.6s;
}

@keyframes zoom {
  from {transform:scale(0)}
  to {transform:scale(1)}
}

/* The Close Button */
.close {
  position: absolute;
  top: 15px;
  right: 35px;
  color: #f1f1f1;
  font-size: 40px;
  font-weight: bold;
  transition: 0.3s;
}

.close:hover,
.close:focus {
  color: #bbb;
  text-decoration: none;
  cursor: pointer;
}

/* 100% Image Width on Smaller Screens */
@media only screen and (max-width: 700px){
  .modal-content {
    width: 100%;
  }
}
   
</style>
      
   
</head>
<body>
<div id="banner">
    <div class="topbanner">
    <img src="banner2.jpg" alt="banner">
    </div>
</div>

    <div id="navigation">
        <div class="topnav" id="mytopnav">
        <ul id ="nav">
            <a class="active" href="bensphotography.php">Home</a>
            <a href="gallery.php">Gallery</a>
            <a href="photos.php">Buy Photos</a>
            <a href="photos.php">Information</a>
            <a href="contact.php">Contact</a>
             <input type="text" placeholder="Search..">
            <a href="javascript:void(0);" class="icon" onclick="myFunction()">
            <i class="fa fa-bars"></i>
           
        </ul>
        </div>
    </div>
        
    
 <div id="content">
     
     <h1>Welcome to Ben's Photography</h1>
        <p>Welcome to Ben's Photography</p>
        
        
<div id="maintext">
        <p>Here is where you'll see photos that i have taken throughout the world</p>
        </div>
    </div>
        
        <!-- Trigger the Modal -->
<img id="myImg" src="mainimage.jpeg" alt="Snow" style="width:100%;max-width:300px">
<img id="myImg2" src="biggerimage3.jpg" alt="Snow" style="width:100%;max-width:300px">
<img id="myImg3" src="bigimage3.jpg" alt="Snow" style="width:100%;max-width:300px">
<img id="myImg4" src="bigimage5.jpg" alt="Snow" style="width:100%;max-width:300px">
<img id="myImg5" src="bigimage6.jpg" alt="Snow" style="width:100%;max-width:300px">

<!-- The Modal -->
<div id="myModal" class="modal">

  <!-- The Close Button -->
  <span class="close">&times;</span>

  <!-- Modal Content (The Image) -->
  <img class="modal-content" id="img01">

  <!-- Modal Caption (Image Text) -->
  <div id="caption"></div>
</div>
       
<script>
// Get the modal
var modal = document.getElementById("myModal");

// Get the image and insert it inside the modal - use its "alt" text as a caption
var img = document.getElementById("myImg");
var modalImg = document.getElementById("img01");
var captionText = document.getElementById("caption");
img.onclick = function(){
  modal.style.display = "block";
  modalImg.src = this.src;
  captionText.innerHTML = this.alt;
}

// Get the <span> element that closes the modal
var span = document.getElementsByClassName("close")[0];

// When the user clicks on <span> (x), close the modal
span.onclick = function() {
  modal.style.display = "none";
}

// Get the modal
var modal = document.getElementById("myModal");

// Get the image and insert it inside the modal - use its "alt" text as a caption
var img = document.getElementById("myImg2");
var modalImg = document.getElementById("img01");
var captionText = document.getElementById("caption");
img.onclick = function(){
  modal.style.display = "block";
  modalImg.src = this.src;
  captionText.innerHTML = this.alt;
}

// Get the <span> element that closes the modal
var span = document.getElementsByClassName("close")[0];

// When the user clicks on <span> (x), close the modal
span.onclick = function() {
  modal.style.display = "none";
}

// Get the modal
var modal = document.getElementById("myModal");

// Get the image and insert it inside the modal - use its "alt" text as a caption
var img = document.getElementById("myImg3");
var modalImg = document.getElementById("img01");
var captionText = document.getElementById("caption");
img.onclick = function(){
  modal.style.display = "block";
  modalImg.src = this.src;
  captionText.innerHTML = this.alt;
}

// Get the <span> element that closes the modal
var span = document.getElementsByClassName("close")[0];

// When the user clicks on <span> (x), close the modal
span.onclick = function() {
  modal.style.display = "none";
}

// Get the modal
var modal = document.getElementById("myModal");

// Get the image and insert it inside the modal - use its "alt" text as a caption
var img = document.getElementById("myImg4");
var modalImg = document.getElementById("img01");
var captionText = document.getElementById("caption");
img.onclick = function(){
  modal.style.display = "block";
  modalImg.src = this.src;
  captionText.innerHTML = this.alt;
}

// Get the <span> element that closes the modal
var span = document.getElementsByClassName("close")[0];

// When the user clicks on <span> (x), close the modal
span.onclick = function() {
  modal.style.display = "none";
}

// Get the modal
var modal = document.getElementById("myModal");

// Get the image and insert it inside the modal - use its "alt" text as a caption
var img = document.getElementById("myImg5");
var modalImg = document.getElementById("img01");
var captionText = document.getElementById("caption");
img.onclick = function(){
  modal.style.display = "block";
  modalImg.src = this.src;
  captionText.innerHTML = this.alt;
}

// Get the <span> element that closes the modal
var span = document.getElementsByClassName("close")[0];

// When the user clicks on <span> (x), close the modal
span.onclick = function() {
  modal.style.display = "none";
}

    </script>


</body>
</html>

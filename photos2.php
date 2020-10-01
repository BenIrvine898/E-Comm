<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link href="css/photos2.css" rel="stylesheet" type="text/css"/>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
body, html {
  height: 100%;
  margin: 0;
}
ul {
  list-style-type: none;
  margin: 0;
  padding: 0;
}
li {
  display: inline;
float: center;
}
li a{
        display: inline;
        padding: 50px;
        float: center;
        
    }
.bg {
  /* The image used */
  background-image: url("backgroundimage2.jpg");

  /* Full height */
  height: 100%; 

  /* Center and scale the image nicely */
  background-position: center;
  background-repeat: no-repeat;
  background-size: cover;

}
    .navigation{
        width: 100%;
    }
.topnav {
  overflow: hidden;
  background-color: #333;
}
 .topnav a {
  float: center;
  color: #f2f2f2;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
  font-size: 17px;
}

.topnav a:hover {
  background-color: #ddd;
  color: black;
}

.topnav a.active {
  background-color: #4CAF50;
  color: white;
}
    
.topnav .icon {
  display: none;
}
    
@media screen and (max-width: 1000px) {
  .topnav a:not(:first-child) {display: none;}
  .topnav a.icon {
    float: right;
    display: block;
  }
}
@media screen and (max-width: 1000px) {
  .topnav.responsive {position: relative;}
  .topnav.responsive a.icon {
    position: absolute;
    right: 0;
    top: 0;
  }
    }
  .topnav.responsive a {
    float: none;
    display: block;
    text-align: left;
  }
}
</style>
    
</head>
<body>

<div class="bg">

<p>Which photo would you like to buy?</p>
    
<?php
 
$applename = $_REQUEST['photo1'];
$appleamount = $_REQUEST['amount'];
$conn=mysqli_connect('localhost','ben.irvine', '4zTCPLd1', 'ben_irvine_db');
$sql="SELECT * FROM meat where photo1='$applename' "; 
if (mysqli_connect_errno())
   {
   echo "Failed to connect to MySQL: " . mysqli_connect_error();
   }
$rs=mysqli_query($conn,$sql);
if (!$rs)
{
	die("Could not get data ".mysql_error());
}
if ($row=mysqli_fetch_array($rs)) {				//if there is an output
$appleprice=$row['price'];
}

  echo "<h1>Here is what you purchased</h1>";
 
 echo "<table align='center'>";
 

echo "<tr><td class='cobhl'>You have selected <strong>". $appleamount."</strong> lbs of ".$applename." which is priced at <strong>£".$appleprice."</strong> per pound <br /></td></tr>";
$price=$appleamount*$appleprice;
echo "<tr><td>The price for this apple transaction is: <strong>£".$price."</strong></td></tr>";
$_SESSION["appleamount"] = $appleamount;
$_SESSION["applename"] = $applename;
$_SESSION["appleprice"] = $appleprice;
$_SESSION["carttotal"] = $_SESSION["carttotal"]+$price;
echo "<tr><td class='cobhl'>Go <strong><a href='photos2.php'>here</a></strong> to view your shopping cart</td></tr> ";

echo "</table>";

mysqli_close($conn);
?>   
<br />
How many?: <input type="number" name="amount" id="amount" />
<input type="submit" value="submit">

    <div id="navigation">
        <div class="topnav" id="mytopnav">
        <ul id ="nav">
            <a class="active" href="bensphotography.php">Home</a>
            <a href="photogallery.php">Gallery</a>
            <a href="photos.php">Buy Photos</a>
            <a href="photogallery.php">About</a>
            <a href="photogallery.php">Macro</a>
            <a href="photogallery.php">Landscape</a>
            <a href="javascript:void(0);" class="icon" onclick="myFunction()">
            <i class="fa fa-bars"></i>
        </ul>
        </div>
    </div>
        
    </div>
    
<script>
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

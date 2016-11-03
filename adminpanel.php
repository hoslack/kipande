
<!DOCTYPE html >
<html lang="en">
<head>


<?php require('config.php'); ?>


	<title>Official's Panel</title>
	<link rel="stylesheet" type="text/css" href="style.css">
	
 <script src="jquery-1.11.3.js"></script>
        <script src="script.js"></script>

        <style type="text/css">
        #navbar li{
        	width: 24.8%;
        }


        .lost
{
	position: absolute;
	top:11.5%;
	left:26%;
	width:20%;
	display: none;
}

.reports
{
	position: absolute;
	top:11.5%;
	left:48%;
	width:25%;
	display: none;}
        </style>
        
</head>

<body>
<div class="logo">
	<a href="index.php" title="Home" style="height: 50px; font-size: 35px;"><img src="images/logo.png" style="width: 140px; height: 50px; float: left;">GET-IT-BACK</a>
</div>

<?php 
if(isset($_SESSION['username']))
{
       ?>
<div class="bodiv">

<div id="navbar">
<ul  id="navbar">
	<li id="navbar"><a href="index.php">Home</a></li>
	<li id="navbar" class="onhover"><a href="#">Add/Mark Items</a></li>
	<li id="navbar" class="onhover1"><a href="#">Reports</a></li>
	<li id="navbar"><a href="adminlogin.php">logout</a></li>
	
</ul>  
</div>

<div>
	


</div>

<div class="lost">
	  <ul class="droplist">
         <li ><a href="addnationalid.php">National Id</a></li>
         <li ><a href="addcollegeid.php">College Id</a></li>
         <li ><a href="addpassports.php">Passports</a></li>
         <li ><a href="addbankcards.php">Banking Cards</a>	</li>
         <li ><a href="addcertificates.php">Certificates</a></li>
      </ul>
</div>

<div class="reports">
    <ul class="droplist">
         <li ><a href="bytime.php">Item by time collected</a></li>
         <li ><a href="cardsbybank.php">Cards by Banks</a></li>
         <li ><a href="certbyinstitution.php">certificates by institution</a>  </li>
         <li ><a href="idbyinstitution.php">ID by college</a></li>
      </ul>
</div>

 <div id="placeholderdiv" style="">
  	<img id="placeholder">
  </div>






<div class="footer">

 <p> Contact Us</p>
 <p>+254723255128</p>
 <p>hoslackochieng@gmail.com</p>
 <p>hoslackochieng@ymail.com</p>


<p>&copy; 2016 Lost ID Centre . All rights reserved | Design by  </p>
            <p><a href="#">Hoslack Ochieng</a></p>
</div>

</div>
<?php
}


else{


	 print "<script>alert('Please Login To Access the Admin Panel');</script>";
            header("refresh:1;url=adminlogin.php");
}

 ?>
</body>
<script language="JavaScript1.2">

var howOften = 3; //number often in seconds to rotate
var current = 0; //start the counter at 0
var ns6 = document.getElementById&&!document.all; //detect netscape 6

// place your images, text, etc in the array elements here
var items = new Array();
    items[0]="<img alt='image7' src=' images/7.jpg' width='100%'' height='100%' border='0' position='absolute' />"; //a linked image
    items[1]="<img alt='image8' src='images/8.jpg' width='100%'' height='100%' border='0' position='absolute' />"; //a linked image
    items[2]="<img alt='image9' src='images/9.jpg' width='100%'' height='100%'  border='0' position='absolute' />"; 

function rotater() {
    document.getElementById("placeholder").innerHTML = items[current];
    current = (current==items.length-1) ? 0 : current + 1;
    setTimeout("rotater()",howOften*1000);
}

function rotater() {
    if(document.layers) {
        document.placeholderlayer.document.write(items[current]);
        document.placeholderlayer.document.close();
    }
    if(ns6)document.getElementById("placeholderdiv").innerHTML=items[current]
        if(document.all)
            placeholderdiv.innerHTML=items[current];

    current = (current==items.length-1) ? 0 : current + 1; //increment or reset
    setTimeout("rotater()",howOften*1000);
}
window.onload=rotater;
//-->
</script>
</html>
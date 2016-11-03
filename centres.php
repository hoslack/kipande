
<!DOCTYPE html >
<html lang="en">
<head>
	<title>HOME | Centres</title>
	<link rel="stylesheet" type="text/css" href="style.css">
	
 <script src="jquery-1.11.3.js"></script>
        <script src="script.js"></script>

        <style type="text/css"> 
         
          #listtable td{
         	max-width: 100px;
         }
        </style>
        
</head>

<?php    
require('config.php');

?>

<body>
<div class="logo">
	<a href="index.php" title="Kipande" style="height: 50px; font-size: 35px;"><img src="images/logo.png" style="width: 140px; height: 50px; float: left;">GET-IT-BACK</a>
</div>
<div class="bodiv">

<div id="navbar">
<ul  id="navbar">
	<li id="navbar"><a href="index.php">Home</a></li>
	<li id="navbar" class="onhover"><a href="#">Submitted Items</a></li>
	<li id="navbar"><a href="collected.php">Collected items</a></li>
	<li id="navbar" ><a href="#" class="active">huduma centres</a></li>
	<li id="navbar"><a href="adminlogin.php">admin login</a></li>
	
</ul>  
</div>

<div>
	


</div>

<div class="lost">
	  <ul class="droplist">
         <li ><a href="nationalid.php">National Id</a></li>
         <li ><a href="collegeid.php">College Id</a></li>
         <li ><a href="passports.php">Passports</a></li>
         <li ><a href="bankcards.php">Banking Cards</a>	</li>
         <li ><a href="certificates.php">Certificates</a></li>
      </ul>
</div>


</br></br></br></br></br></br></br></br>

<?php


$sqlout="SELECT * FROM centres ORDER BY id ASC";

$result=mysqli_query($conn,$sqlout);

$data = "<table id='listtable'>
<tr> 
<th>ID</th><th>Centre Name</th><th>Region</th> <th>Description</th>
</tr>";
while ($row=mysqli_fetch_array($result)) { 

	  $id = $row['id'];
	  $centername=$row['centrename'];
	  $region = $row['region'];
	  $description = $row['description'];
	  

	  $data = $data."<tr> <td>".$id."</td> <td>".$centername."</td> <td>".$region."</td> <td> <details> <summary>Descrption</summary>".$description."</details></td> </tr>";

} 
$data = $data."</table>";
print $data;

?>

<div class="footer">

 <p> Contact Us</p>
 <p>+254723255128</p>
 <p>hoslackochieng@gmail.com</p>
 <p>hoslackochieng@ymail.com</p>


<p>&copy; 2016 Lost ID Centre . All rights reserved | Design by  </p>
            <p><a href="#">Hoslack Ochieng</a></p>
</div>






</div>

</body>
</html>
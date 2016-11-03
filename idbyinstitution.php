
<!DOCTYPE html >
<html lang="en">
<head>
	<title>Reports</title>
	<link rel="stylesheet" type="text/css" href="style.css">
	
 <script src="jquery-1.11.3.js"></script>
        <script src="script.js"></script>
         <style type="text/css"> 
         #listtable {
         	min-width: 100%;

         }

          #listtable td{
         	max-width: 100px;
         }


        #navbar li{
        	width: 24.8%;
        }


        .lost
{
	position: absolute;
	top:12.2%;
	left:26%;
	width:20%;
	display: none;
}
     
        </style>
        
</head>



<body>
<div class="logo">
	<a href="index.php" title="HOME" style="height: 50px; font-size: 35px;"><img src="images/logo.png" style="width: 140px; height: 50px; float: left;">GET-IT-BACK</a>
</div>
<div class="bodiv">

<div id="navbar">
<ul  id="navbar">
	<li id="navbar"><a href="index.php">Home</a></li>
	<li id="navbar" class="onhover"><a href="#">Add/Mark Items</a></li>
	<li id="navbar" class=""><a href="#" class="active">Reports</a></li>
	<li id="navbar"><a href="adminlogin.php">logout</a></li>
	
</ul>  
</div>

<div>
	


</div>

<div class="lost">
	  <ul class="droplist">
         <li ><a href="addnationalid.php">National Id</a></li>
         <li ><a href="addcollegeid.php">College Id</a></li>
         <li ><a href="addpassports">Passports</a></li>
         <li ><a href="addbankcards.php">Banking Cards</a>	</li>
         <li ><a href="addcertificates.php">Certificates</a></li>
      </ul>
</div>

<div class="reports">
    <ul class="droplist">
         <li ><a href="bytime.php">Item by time collected</a></li>
         <li ><a href="bycentre.php">item by centre</a></li>
         <li ><a href="cardsbybank.php">Cards by Banks</a></li>
         <li ><a href="certbyinstitution.php">certificates by institution</a>  </li>
         <li ><a href="idbyinstitution.php">ID by college</a></li>
      </ul>
</div>

    <div class="submitform" >
       	
        <fieldset class="searchfield">
        	
        	<legend>Search College ID by Institution</legend>

        <form method="POST" action="idbyinstitution.php">
		<input type="text" name="search" required="yes"> 
    
  <br><br>
		<input type="submit" value="submit" class="Button"></input>
</form>
        
     </fieldset>

       </div>  
         

<?php  


require('config.php');
$output="";
if(isset($_POST['search']))
{
	$searchq=$_POST['search'];

	$searchq=preg_replace("#[^0-9a-z]#i", "", $searchq);

	$qresult=mysqli_query($conn,"SELECT * FROM collegeid WHERE institution LIKE '%$searchq%' order by fname");

     $output = "<table id='listtable'>
<tr> 
<th>First Name</th><th>Middle Name</th><th>Last Name</th> <th>ID Number</th> <th>Institution</th>
 <th>Centre</th> <th>Status</th>
</tr>";


	if(mysqli_num_rows($qresult)!=0){

		while($row=mysqli_fetch_array($qresult)){

			$fname=$row['fname'];
			$lname=$row['lname'];
			$mname=$row['mname'];
            $idnumber=$row['idnumber'];
            $institution=$row['institution'];
			$centre=$row['centre'];
			$status=$row['Status'];


    $output= $output."<tr> <td>" .$fname. "</td> <td> ".$mname."</td> <td> ".$lname. "</td> <td> ".$idnumber. "</td> <td> ".$institution. "</td> <td> ".$centre."</td> <td>" .$status. "</td> </tr>";
		}
$output=$output."</table>";

	}
else $output= 'No search results for the last '.$searchq.' '; 
	
	
}

?>
</br></br></br></br></br></br>
  <?php print($output); ?>  

</br></br></br>

 </br></br></br> 
     
<a class="back" href="adminpanel.php" title="Back" style="height: 50px; font-size: 35px;">Back To Menu</a>


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


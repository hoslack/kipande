
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
	<li id="navbar"><a href="#" class="active">Reports</a></li>
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


    <div class="submitform" >
       	
        <fieldset class="searchfield">
        	
        	<legend>Search for Previous Time Records</legend>

        <form method="POST" action="bytime.php">
		<select name="search" class="textinput" required="yes">
    
    <option value="">Select Period of Time</option>
    <option value="DAY">DAY</option>
    <option value="WEEK">WEEK</option>
    <option value="MONTH">MONTH</option>
    <option value="YEAR">YEAR</option>
  </select>
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

	$qresult=mysqli_query($conn,"SELECT * FROM collected WHERE c_date>=DATE_SUB(now(),INTERVAL 1 $searchq)");

     $output = "<table id='listtable'>
<tr> 
<th>First Name</th><th>Middle Name</th><th>Last Name</th><th>Centre</th> 
</tr>";


	if(mysqli_num_rows($qresult)!=0){

		while($row=mysqli_fetch_array($qresult)){

			$fname=$row['fname'];
			$lname=$row['lname'];
			$mname=$row['mname'];
			$centre=$row['centre'];
			


    $output= $output."<tr> <td>" .$fname. "</td> <td> ".$mname."</td> <td> ".$lname. "</td> <td> ".$centre."</td> </tr>";
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



<!DOCTYPE html >
<html lang="en">
<head>
	<title>HOME | Collected</title>
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
        </style>
        
</head>



<body>
<div class="logo">
	<a href="index.php" title="Kipande" style="height: 50px; font-size: 35px;"><img src="images/logo.png" style="width: 140px; height: 50px; float: left;">GET-IT-BACK</a>
</div>
<div class="bodiv">

<div id="navbar">
<ul  id="navbar">
	<li id="navbar"><a href="index.php">Home</a></li>
	<li id="navbar" class="onhover"><a href="#">Submitted Items</a></li>
	<li id="navbar"><a href="collected.php" class="active">Collected items</a></li>
	<li id="navbar" ><a href="centres.php" >huduma centres</a></li>
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

<?php 
$response = "";
 $conn = mysqli_connect('localhost','root','', 'kipande');

$sqlout="SELECT * FROM collected ORDER BY c_date ASC";


$result=mysqli_query($conn,$sqlout);

 ?>






<?php  


require('config.php');
$output="";
if(isset($_POST['search']))
{
	$searchq=$_POST['search'];

	$searchq=preg_replace("#[^0-9a-z]#i", "", $searchq);

	$qresult=mysqli_query($conn,"SELECT * FROM collected WHERE fname LIKE '%$searchq%' OR lname LIKE '%$searchq%' OR mname LIKE '%$searchq%'  ");




	$output = "<table id='listtable'>
<tr> 
<th>First Name</th><th>Middle Name</th><th>Last Name</th> <th>Centre</th> <th>Date</th> 
</tr>";



	if(mysqli_num_rows($qresult)!=0){

		while($row=mysqli_fetch_array($qresult)){

			$fname=$row['fname'];
			$lname=$row['lname'];
			$mname=$row['mname'];
			$centre=$row['centre'];
			$row['c_date']=date_create($row['c_date']);
			$c_date= date_format($row['c_date'],'d-M-Y');
			


	$output= $output."<tr> <td> ".$fname."</td><td>".$mname."</td><td>".$lname."</td><td>".$centre."</td><td>".$c_date." </td> </tr>";
		}


	$output.="</table>";
}

else $output= 'No search results for '.$searchq.' '; 
	
	
}
?>

       <div class="submitform" >
       	
        <fieldset class="searchfield">
        	
        	<legend>Search By Name</legend>

        <form method="POST" action="collected.php">
		<input class="textinput" type="text" placeholder="Search ..." name="search" required="yes"></input>
		<input type="submit" value="submit" class="Button"></input>
</form>
        
			

        </fieldset>

       </div>

</br></br></br>




<?php echo $output; ?>


</br></br></br></br></br></br></br>
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


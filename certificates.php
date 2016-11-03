
<!DOCTYPE html >
<html lang="en">
<head>
	<title>National</title>
	<link rel="stylesheet" type="text/css" href="style.css">
	<meta name="viewport" content="width=device-width"/>

</head>
<?php 
$response = "";
 $conn = mysqli_connect('localhost','root','', 'kipande');

                     
                ?>
<body>
<div class="logo">
	<a href="index.php" title="Home" style="height: 50px; font-size: 35px;"><img src="images/logo.png" style="width: 140px; height: 50px; float: left;">GET-IT-BACK</a>
</div>

<div class="bodiv"> 


<ul id="navbar">
	<li id="navbar"><a href="nationalid.php" >National id</a></li>
	<li id="navbar"><a href="collegeid.php" >College ID</a></li>
	<li id="navbar"><a href="bankcards.php" >Banking Cards</a></li>
	<li id="navbar"><a href="passports.php" >Passports</a></li>
	<li id="navbar"><a href="certificates.php" class="active">Certificates</a></li>
	
</ul>   



<?php  


require('config.php');
$output="";
if(isset($_POST['search']))
{
	$searchq=$_POST['search'];

	$searchq=preg_replace("#[^0-9a-z]#i", "", $searchq);

	$qresult=mysqli_query($conn,"SELECT * FROM certificates WHERE fname LIKE '%$searchq%' OR lname LIKE '%$searchq%' OR certnumber LIKE '%$searchq%' OR mname LIKE '%$searchq%' ORDER BY fname ");

$output = "<table id='listtable'>
<tr> 
<th>First Name</th><th>Middle Name</th><th>Last Name</th><th>Cert Number</th> <th>Institution</th>    <th>Certificate type</th> <th>Centre</th> <th>Collected</th> 
</tr>";

	if(mysqli_num_rows($qresult)!=0){

		while($row=mysqli_fetch_array($qresult)){

			$fname=$row['fname'];
			$lname=$row['lname'];
			$mname=$row['mname'];
			$certnumber=$row['certnumber'];
			$institution=$row['institution'];
			$certtype=$row['certtype'];
			$centre=$row['centre'];
			$Status=$row['Status'];


	$output= $output."<tr> <td> ".$fname."</td><td>".$mname."</td><td>".$lname."</td><td>".$certnumber."</td><td>".$institution."</td><td>".$certtype."</td><td>".$centre." </td> <td>".$Status." </td> </tr>";
		}
$output=$output."</table>";

	}
else $output= 'No search results for '.$searchq.' '; 
	
	
}
?>

       <div class="submitform" >
       	
        <fieldset class="searchfield">
        	
        	<legend>Search By Name or Number</legend>

        <form method="POST" action="certificates.php">
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


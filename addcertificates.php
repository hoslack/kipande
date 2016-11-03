
<!DOCTYPE html >
<html lang="en">
<head>
  <title>Kipande | Add</title>
  <link rel="stylesheet" type="text/css" href="style.css">
  <meta name="viewport" content="width=device-width"/>
  <script src="jquery-1.11.3.js"></script>
        <script src="script.js"></script>

</head>
<?php 
$response = "";
 


require('config.php');
                     
                ?>
<body>
<div class="logo">
  <a href="index.php" title="Home" style="height: 50px; font-size: 35px;"><img src="images/logo.png" style="width: 140px; height: 50px; float: left;">GET-IT-BACK</a>
</div>

<div class="bodiv"> 
<?php if(isset($_SESSION['username'])){





?>

<form class="submitform" method="post" action="addcertificates.php" name="myform" onsubmit="return validateForm()" >
<fieldset>  
           <legend>Post a found Certificate</legend>

    <input type="text" placeholder="First Name" name="fname" required> <br></p>
    <input type="text" placeholder="Middle Name" name="mname" required> <br></p>
    <input type="text" name="lname" placeholder="Last Name" required> <br></p>
    <input type="number" name="certnumber" placeholder="Certificate Number" id="numberinput" required> <br></p>
    <input type="text" name="institution" placeholder="Institution" required> <br></p>
    <input type="text" name="certtype" placeholder="Type of Certificate" required> <br></p>
                           </p></p></p>
    <input type="submit" value="Submit" style="float:right" title="Submit Data"> 
            
</fieldset>
  
</form>

<div style="background-color: black;">
  <hr/><hr/><hr/><hr/>
</div>

<form class="submitform" method="post" action="addcertificates.php" onsubmit="return validateForm()">
<fieldset>  
           <legend>Mark a Collected Certificate</legend>
           <input type="text" name="certnumber1" placeholder="Certificate Number" required> <br></p>
                           </p></p></p>
            <input type="submit" value="Submit" style="float:right;" title="Submit Data"> 
            </fieldset>
  
</form>

<div style="background-color: black;">
  <hr/><hr/><hr/><hr/>
</div>


<a class="back" href="adminpanel.php" title="Back" style="height: 50px; font-size: 35px;">Back To Menu</a>


<?php 
extract($_POST);

if(!empty($_POST['fname']))
 {
  $fname = $_POST['fname'];
  $mname = $_POST['mname'];
  $lname = $_POST['lname'];
  $certnumber=$_POST['certnumber'];
  $institution=$_POST['institution'];
   $certtype = $_POST['certtype'];

  $Status="No";
  

   $userSession = $_SESSION['userid'];


$qcentre="SELECT * FROM admins WHERE id = '$userSession'";

$rcentre=mysqli_query($conn,$qcentre);

$crow=mysqli_fetch_array($rcentre);

 
  $centre=$crow['centre'];
  
 

 $sqlin="INSERT INTO certificates (fname, mname,lname,certnumber,institution, certtype ,centre,Status) VALUES ('$fname' , '$mname', '$lname' , '$certnumber','$institution', '$certtype' ,'$centre', '$Status')";

          if(!mysqli_query($conn,$sqlin)){
            $response =  "record not created successfully";
            print($response);
               }
           else {
            print "<script>alert('Certificate added successfully');</script>";
            header("refresh:1;url=addcertificates.php");
           }
}

 ?>



 <?php 
extract($_POST);

if(!empty($_POST['certnumber1']))
 {
  
  
  $certnumber=$_POST['certnumber1'];

  $Status="Yes";

 
              $sqlstatus="UPDATE certificates SET Status='$Status' WHERE certnumber='$certnumber'";

         $qcollected="INSERT INTO collected (fname,mname,lname,centre) SELECT fname,mname,lname,centre FROM certificates WHERE certnumber='$certnumber'";



          if(!mysqli_query($conn,$sqlstatus)){
              print "<script> alert('Status not updated successfully');</script>";
             }
             else if(!mysqli_query($conn,$qcollected)){
            print "<script> alert('Record not updated successfully');</script>";
            
               }
           else {
            print "<script>alert('Status updated successfully');</script>";
            header("refresh:1;url=addid.php");
           }
}

 ?>


 <?php
 }
 else{

 print "<script>alert('Please Login To Access the Admin Panel');</script>";
            header("refresh:1;url=adminlogin.php"); 
 } 
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


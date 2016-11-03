
<!DOCTYPE html >
<html lang="en">
<head>
  <title>Kipande | Add</title>
  <link rel="stylesheet" type="text/css" href="style.css">
  <meta name="viewport" content="width=device-width"/>

</head>
<?php 
$response = "";
 $conn = mysqli_connect('localhost','root','', 'kipande');

require('config.php');

                     
                ?>
<body>
<div class="logo">
  <a href="index.php" title="Home" style="height: 50px; font-size: 35px;"><img src="images/logo.png" style="width: 140px; height: 50px; float: left;">GET-IT-BACK</a>
</div>
<?php
if(isset($_SESSION['username'])){

?>
<div class="bodiv"> 



<form class="submitform" method="post" action="addbankcards.php" name="myform" onsubmit="return validateForm()" >
<fieldset>  
           <legend>Post a found Banking Card</legend>

    <input type="text" placeholder="First Name" name="fname" required> <br></p>
    <input type="text" placeholder="Middle Name" name="mname" required> <br></p>
    <input type="text" name="lname" placeholder="Last Name" required> <br></p>
    <input type="number" name="cardnumber" placeholder="Card Number" id="numberinput"> <br></p>
    <input type="text" name="sprovider" placeholder="Service Provider" required> <br></p>
    <input type="text" name="cardtype" placeholder="Type of Card" required> <br></p>
                           </p></p></p>
                           
    <input type="submit" value="Submit" style="float:right" title="Submit Data"> 
            
</fieldset>
  
</form>
<p>
  


<div style="background-color: black;">
  <hr/><hr/><hr/><hr/>
</div>



</p>

<form class="submitform" method="post" action="addbankcards.php" >
<fieldset>  
           <legend>Mark a Collected Card</legend>
           <input type="text" name="cardnumber1" placeholder="Card Number" required> <br></p>
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
  $cardnumber=$_POST['cardnumber'];
  $sprovider=$_POST['sprovider'];
   $cardtype = $_POST['cardtype'];
    $Status="No";



   $userSession = $_SESSION['userid'];


$qcentre="SELECT * FROM admins WHERE id = '$userSession'";

$rcentre=mysqli_query($conn,$qcentre);

$crow=mysqli_fetch_array($rcentre);

 
  $centre=$crow['centre'];
 

 $sqlin="INSERT INTO bankcards (fname, mname,lname,cardnumber,sprovider, cardtype ,centre,Status) VALUES ('$fname' , '$mname', '$lname' , '$cardnumber','$sprovider', '$cardtype' ,'$centre', '$Status')";

          if(!mysqli_query($conn,$sqlin)){
            $response =  "record not created successfully";
            print($response);
               }
           else {
            print "<script>alert('Card added successfully');</script>";
            header("refresh:1;url=addbankcards.php");
           }
}

 ?>



 <?php 
extract($_POST);

if(!empty($_POST['cardnumber1']))
 {
  
  
  $certnumber=$_POST['cardnumber1'];

  $Status="Yes";

 
              $sqlstatus="UPDATE bankcards SET Status='$Status' WHERE cardnumber='$cardnumber'";

              $qcollected="INSERT INTO collected (fname,mname,lname,centre) SELECT fname,mname,lname,centre FROM bankcards WHERE cardnumber='$cardnumber'";

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


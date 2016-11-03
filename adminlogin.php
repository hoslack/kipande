<!DOCTYPE html PUBLIC>
<?php
//This page let log in

include('config.php');
if(isset($_SESSION['username']))
{
    unset($_SESSION['username'], $_SESSION['userid']);
    setcookie('username', '', time()-100);
    setcookie('password', '', time()-100);
?>
<html >
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <link href="style.css" rel="stylesheet" type="text/css" />
        <title>Login</title>
    </head>
    <body>
    

        <div class="logo">
    <a href="index.php" title="Home" style="height: 50px; font-size: 35px;"><img src="images/logo.png" style="width: 140px; height: 50px; float: left;">GET-IT-BACK</a>
</div>

<div  class="bodiv">

<div class="loginmessage" >You have successfully been logged out.<br />
<a href="adminlogin.php">Login</a></div>
<?php
}
else
{
    $ousername = '';
    if(isset($_POST['username'], $_POST['password']))
    {
        if(get_magic_quotes_gpc())
        {
            $ousername = stripslashes($_POST['username']);
            $username = mysqli_real_escape_string($conn,stripslashes($_POST['username']));
            $password = stripslashes($_POST['password']);
        }
        else
        {
            $username = mysqli_real_escape_string($conn,$_POST['username']);
            $password = $_POST['password'];
        }
        $req = mysqli_query($conn,'SELECT password,id FROM admins WHERE username="'.$username.'"');
        $dn = mysqli_fetch_array($req);
        if($dn['password']==$password and mysqli_num_rows($req)>0)
        {
            $form = false;
            $_SESSION['username'] = $_POST['username'];
            $_SESSION['userid'] = $dn['id'];
            if(isset($_POST['memorize']) and $_POST['memorize']=='yes')
            {
                $one_year = time()+(60*60*24*365);
                setcookie('username', $_POST['username'], $one_year);
                setcookie('password', $password, $one_year);
            }
?>


</div>
</body>
</html>

<html >
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <link href="style.css" rel="stylesheet" type="text/css" />
        <title>Login</title>
    </head>
    <body>
      

        <div class="logo">
    <a href="index.php" title="Home" style="height: 50px; font-size: 35px;"><img src="images/logo.png" style="width: 140px; height: 50px; float: left;">GET-IT-BACK</a>
    </div>
<div  class="bodiv">

<div class="loginmessage">You have successfully been logged.<br />
<a href="adminpanel.php">Enter the Official's panel</a></div>
<?php
        }
        else
        {
            $form = true;
            $message = '<div style="color:red; text-transform:uppercase; font-weight:bolder;">The username or password you entered are not good. Please enter correct credentials to login</div>';
        }
    }
    else
    {
        $form = true;
    }
    if($form)
    {
?>

</div>
</body>
</html>

<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <link href="style.css" rel="stylesheet" type="text/css" />
        <title>Login</title>
    </head>
    <body>
                <div class="logo">
<a href="index.php" title="Home" style="height: 50px; font-size: 35px;"><img src="images/logo.png" style="width: 140px; height: 50px; float: left;">GET-IT-BACK</a>
           </div>

<div  class="bodiv">
<?php
if(isset($message))
{
    echo '<div class="message">'.$message.'</div>';
}
?>
<div >
    <fieldset>   <legend> Please log in:</legend>

    <form action="adminlogin.php" method="post" class="submitform">
       
        
        <input type="text" name="username" class="textinput" value="<?php echo htmlentities($ousername, ENT_QUOTES, 'UTF-8'); ?>" placeholder="Username" /> <br /><br /><br />

    <input type="password" name="password" class="textinput" placeholder="Password" required /><br /></br>

        
        <label for="memorize">Remember</label><input type="checkbox" name="memorize" class="textinput" value="yes" /><br /><br /><br />

            <input type="submit" value="Login" class="Button" /> <br /><br /><br /><br />
        
    </form>

   <div class="back">

   <a href="index.php">BACK</a>    
   </div>

    </fieldset>
</div>
<?php }
} ?>
<br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
</div>

</body>
</html>
<html>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
        "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html lang="bg" xml:lang="bg" xmlns="http://www.w3.org/1999/xhtml">
	     <head>
		     <title>Getboosted.com | The place to get higher </title>
			 <meta http-equiv="Content-Type" content="text/html charset=uft-8" />
			 <meta name="keywords" content="boosting, lol, booster, league of legends, league, legends, of" />
		     <meta name="googlebot" content="index, follow" />
		     <meta name="description" content="Here you can get boosted in the game League of Legends" />
			 <meta name="author" content="BurnToBeEviL, RealistCC" />
			 <meta name="design" content="RealistCC" />
			 <meta name="code" content="BurnToBeEviL" />
			 <link type="text/css" rel="stylesheet" href="css/style.css" />
             <link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap.min.css">
		 </head>
<body  bgcolor="black"    style="color:white;">
<div id="head">
			     <a href="index.php"><div id="logo"></div></a>
				 <div class="rightsidehead"><a href="register.php"><div class="createaccount"></div></a><div class="bordertop"></div><a href="login.php"><div class="logintop"></div></a></div>
			 </div>

			     <div align="Center" class="introimage"> <div id="menu">
			     <a href="index.php"><div class="menucont"> Home </div></a>
			     <a href="index.php"><div class="menucont2"> Boosters </div></a>
			     <a href="index.php"><div class="menucont3"> Counters </div></a>
			     <a href="index.php"><div class="menucont4"> News </div></a>
			     <a href="contact.php"><div class="menucont5"> Contact us </div></a>
				 <div class="logo2"></div>

		     </div></div>
		             <div class="content">
<FORM ACTION="register.php" style="margin-left: 20px; color: black;" METHOD="POST"><br />
Please, input the registration details to create an account here!<br>
<table border="0" style="position:absolute">
<tr>
<td style="color: black;">Username :<span style="color: red;">*</span></td><td> <input name="regname" style="color:#000;"type="text" size="20"/></td>
</tr>
<tr>
<td style="color: black;">PayPal E-mail :<span style="color: red;">*</span> </td> <td><input name="regemail" style="color:#000;"type="text" size="20"></input></td>
</tr>
</table>
<table border="0" style="margin-left: 320px; position: absolute">
<tr>
<td style="color: black;">Password :<span style="color: red;">*</span> </td><td> <input name="regpass1" style="color:#000;"type="password" size="20"></input></td>
</tr>
<tr>
<td style="color: black;">Re-type password :<span style="color: red;">*</span> </td><td> <input name="regpass2" style="color:#000;"type="password" size="20"></input></td>
</tr>
</table>
 <table border="0" style="margin-left: 660px;">
 <tr>
<td style="color: black;">Skype:<span style="color: red;">*</span></td><td> <input name="skype" type="text" style="color:#000;"size="20"></input></td>
</tr>
<tr><td></td></tr>
</table>
<br />
<br />
 <input type="submit" name="regsubmit" value="Register me!"></input>

</FORM>
 </div>

<?php

if($_SERVER['REQUEST_METHOD'] == 'POST')
{
$password = isset($_POST["regpass1"]) ? $_POST["regpass1"] : '';
	$password_confirm = isset($_POST["regpass2"]) ? $_POST["regpass2"] : '';
	$regname =  isset($_POST["regname"]) ? $_POST["regname"] : '';
	$regemail =  isset($_POST["regemail"]) ? $_POST["regemail"] : '';
	$skype =  isset($_POST["skype"]) ? $_POST["skype"] : '';
require './include/config.php';
$con=mysqli_connect("localhost","root","","test");
$check="SELECT * FROM users WHERE name = '$_POST[regname]'";
$rs = mysqli_query($con,$check);
$data = mysqli_fetch_array($rs, MYSQLI_NUM);
if($data[0] > 1)
{
    echo "<p style='color: black;'>User Already in Exists<br/></p>";
}

else{



     if($regname && $password && $skype && $password == $password_confirm )
	 {


		$sql = "insert into users SET name='$regname', email='$regemail',password='$password', skype='$skype'";
		$result = mysql_query($sql) or die(mysql_error());
		print "<h1><p style='color: blue;'>You have registered sucessfully</p></h1>";
		print "<a href='index.php'>go to login page</a>";
     }
	elseif($_POST['regname'] == '')
	{
		print "<p style='color: black;'>Insert username!</p>";
	}
	elseif(!filter_var($regemail, FILTER_VALIDATE_EMAIL)){
	     echo "<p style='color: black;'>Insert correct e-mail!</p>";
		 }

     elseif($password != $password_confirm or empty($_POST["regpass1"]) or empty($_POST["regpass2"])) {
	     echo "<p style='color: black;'>Passwords don't match</p>";
	 }
	      elseif(empty($skype)){
	     echo "<p style='color: black;'>Insert skype!</p>";
		 }
	 else{
	 echo "<p style='color: black;'>Error</p>";
	 exit;
	 }


}
}


?>


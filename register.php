
<?php

if($_SERVER['REQUEST_METHOD'] == 'POST')
{
$password = isset($_POST["regpass1"]) ? $_POST["regpass1"] : '';
	$password_confirm = isset($_POST["regpass2"]) ? $_POST["regpass2"] : '';
	$regname =  isset($_POST["regname"]) ? $_POST["regname"] : '';
	$regemail =  isset($_POST["regemail"]) ? $_POST["regemail"] : '';
	$skype =  isset($_POST["skype"]) ? $_POST["skype"] : '';
    $agreeterms =  isset($_POST["agree"]) ? $_POST["agreeterms"] : '';
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



     if($regname && $password && $skype && $agreeterms && $password == $password_confirm )
	 {


		$sql = "insert into users SET name='$regname', email='$regemail',password='$password', skype='$skype'";
		$result = mysql_query($sql) or die(mysql_error());
		print "<p style='color: blue;'>You have registered sucessfully</p>";

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


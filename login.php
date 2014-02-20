<?php


if( isset($_SESSION["username"]))
{
     print_secure_content();
}
else
{
    loginform();
}

function loginform()
{
    print ("<form action=login.php method=post><div class='login'>Username: <input type='text' maxlength='19' class='inputlogin' name='username' /></div>
		<div class='login2'>Password: <input type='password'  class='inputlogin' maxlength='17' name='password' /></div>");
    print "<input type='submit' value='Login!' id='login' /></form>";
	print "<a href='#'><div class='forgot'>Forgotten password?</div></a>";
	print "<a href='register.php'><div class='registration'>Sign up!</div></a>";
}


function checkpass()
{
include './include/config.php';
mysql_select_db($conn);
$sql_username = isset($_GET['username']) ? $_GET['username'] : '';
$sql_password = isset($_GET['password']) ? $_GET['password'] : '';
$sql="select * from users where name='$sql_username' and password='$sql_password'";
$result=mysql_query($sql,$conn) or die(mysql_error());
return  mysql_num_rows($result);
}

function print_secure_content()
{
	print("<br><p style='margin-left:25px; color: #fff;'</p>Hello, " . $_SESSION['username']);
    print "<br><a href='logout.php'><p style='text-decoration: underline; margin-left: 25px;'>Sign out</p></a><br>";

}
?>

<?php

include './include/config.php';

if (isset($_POST['username']))
{
    $username = $_POST['username'];
    $password = $_POST['password'];

    $sql = "SELECT * FROM users WHERE name='" . $username . "' AND password='" . $password . "'";
    $result = mysql_query($sql);

    if (mysql_num_rows($result) > 0)
    {
       $user_info = mysql_fetch_assoc($result);
       $_SESSION['username'] = $user_info['name'];
       $_SESSION['email'] = $user_info['email'];
       Header('Location: ' . BASE_URL);
    }
    else
    {
        die('Invalid user name or password, go back and try again');
    }
}
else
{
    
}
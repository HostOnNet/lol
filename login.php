<?php

include './include/config.php';

if( isset($_SESSION["username"]))
{
     echo 'You have logged in successfully.';
     Header('Location: http://getboosted.bizhat.com/ ');
}
else
{
    
    Header('Location: http://getboosted.bizhat.com/ ');
}


function checkpass()
{
mysql_select_db($conn);
$sql_username = isset($_GET['username']) ? $_GET['username'] : '';
$sql_password = isset($_GET['password']) ? $_GET['password'] : '';
$sql="select * from users where name='$sql_username' and password='$sql_password'";
$result=mysql_query($sql,$conn) or die(mysql_error());
return  mysql_num_rows($result);
}


?>

<?php


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
        echo "Invalid user name or password, go back and try again";
    }
}
else
{

}

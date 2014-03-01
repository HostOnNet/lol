<?php
 
require 'include/config.php';
 
if($_SERVER['REQUEST_METHOD'] == 'POST')
{
    $password = isset($_POST["regpass1"]) ? $_POST["regpass1"] : '';
    $password_confirm = isset($_POST["regpass2"]) ? $_POST["regpass2"] : '';
    $regname =  isset($_POST["regname"]) ? $_POST["regname"] : '';
    $regemail =  isset($_POST["regemail"]) ? $_POST["regemail"] : '';
    $skype =  isset($_POST["skype"]) ? $_POST["skype"] : '';
    $agreeterms =  isset($_POST["agreeterms"]) ? $_POST["agreeterms"] : '';
    $sql = "SELECT * FROM users WHERE name = '$_POST[regname]'";
    $result = mysql_query($sql);
 
    if(mysql_num_rows($result) > 0)
    {
        echo "<p style='color: black;'>User Already in Exists<br/></p>";
    }
    else
    {
        if (empty($agreeterms))
        {
            die("You must agree to the terms.");
        }
        else if($password != $password_confirm)
        {
            die("Passwords do not match");
        } else if($_POST['regname'] == '')
        {
            echo "<p style='color: black;'>Insert username!</p>";
        }
        else if(!filter_var($regemail, FILTER_VALIDATE_EMAIL))
        {
            echo "<p style='color: black;'>Insert correct e-mail!</p>";
        }
        else if($password != $password_confirm or empty($_POST["regpass1"]) or empty($_POST["regpass2"])) {
            echo "<p style='color: black;'>Passwords don't match</p>";
        }
        else if(empty($skype))
        {
            echo "<p style='color: black;'>Insert skype!</p>";
        }
        else
        {
            $sql = "insert into users SET name='$regname', email='$regemail',password='$password', skype='$skype'";
            $result = mysql_query($sql) or die(mysql_error());
            echo "<p style='color: blue;'>You have registered sucessfully</p>";
        }
    }
}

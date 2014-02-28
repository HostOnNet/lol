<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

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
    <link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap.min.css">
    <link type="text/css" rel="stylesheet" href="css/style.css" />
    <script src="http://code.jquery.com/jquery-1.9.0.js"></script>
    <script src="js/lol.js"></script>


    </head>

		<body>
            <div id="head">
                <a href="index.php"><div id="logo"></div></a>
                <div class="rightsidehead">
                   <?php


if( isset($_SESSION['username']))
{
     print_secure_content();
}
else
{
    print "<a href='register.php'><div class='createaccount'></div></a><div class='bordertop'></div><a href='login.php'><div class='logintop'></div></a>";
}

function print_secure_content()
{
    print("<br><p style='color: #fff; margin-top: -10px'</p>Hello, " . $_SESSION['username']);
    print "<br><a style='color: #ccc;' href='logout.php'><p style='text-decoration: underline; margin-top:-17px; '>Sign out</p></a><br>";

}
?>
</div>
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

<form action="http://formtoemail.com/user_forms.php" method="post" style="background:#eee;width:300px;padding:15px;border-radius:10px; margin:0 auto;">
    <input type="hidden" name="user_id" value="8MYF43ZBOPXJ03V6ICDL">
    <input type="hidden" name="form_id" value="2">
    Nickname <br><input type="text" name="name" style="width:100%;margin:0 0 10px;">
    Email Address <br><input type="text" name="email" style="width:100%;margin:0 0 10px;">
    Subject <br><input type="text" name="subject" style="width:100%;margin:0 0 10px;">
    Comments <br><textarea name="comments" style="width:100%;height:120px;margin:0 0 10px;"></textarea>
    <input type="submit" value="Send">
</form>

<?php
    if(isset($_SESSION['username'])){
        $_POST['user_id'] = $regname;
    }
?>

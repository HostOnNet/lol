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


if( isset($_SESSION["username"]))
{
     print_secure_content();
}
else
{
    print "<a href='register.php'><div class='createaccount'></div></a><div class='bordertop'></div><a href='login.php'><div class='logintop'></div></a>";
}

function loginform()
{
    print ("<form action=login.php method=post><div class='login'>Вашето име: <input type='text' maxlength='19' class='inputlogin' name='username' /></div>
		<div class='login2'>Вашата парола: <input type='password'  class='inputlogin' maxlength='17' name='password' /></div>");
    print "<input type='submit' value='Влез!' id='login' /></form>";
	print "<a href='#'><div class='forgot'>Забравена парола?</div></a>";
	print "<a href='register.php'><div class='registration'>Регистрация!</div></a>";
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
	print("<br><p style='color: #fff; margin-top: -10px'</p>Hello, " . $_SESSION['username']);
    print "<br><a style='color: #ccc;' href='logout.php'><p style='text-decoration: underline; margin-top:-20px; '>Sign out</p></a><br>";

}
?></div>
			 </div>

			     <div align="Center" class="introimage"> <div id="menu">
			     <a href="index.php"><div class="menucont"> Home </div></a>
			     <a href="index.php"><div class="menucont2"> Boosters </div></a>
			     <a href="index.php"><div class="menucont3"> Counters </div></a>
			     <a href="index.php"><div class="menucont4"> News </div></a>
			     <a href="index.php"><div class="menucont5"> Contact us </div></a>
				 <div class="logo2"></div>

		     </div></div>
		             <div class="content">

					 <form method="post" action="make_payment.php" id="package_options" class="form">
    <p>GUARANTEED LEAGUE/DIVISION BOOSTING!</p>
    <div class="currentdivision">
        SELECT CURRENT LEAGUE AND DIVISION<br />
        <div class="bronzeico"></div><br />

        League:
        <select name="league" id="league">
            <option value="bronze1" name="bronze1">Bronze</option>
            <option value="silver1">Silver</option>
            <option value="gold1">Gold</option>
            <option value="platinium1">Platinium</option>
        </select><br />
        Division:
        <select name="division" id="division">
            <option value="div5" name="div5">V</option>
            <option value="div4">IV</option>
            <option value="div3">III</option>
            <option value="div2">II</option>
            <option value="div1">I</option>
        </select><br />
        LP Gain:
        <input style="border: 1px solid #ccc" type="number" value="15" min="0" max="30" id="lp_gain" name="lp_gain" />
    </div>

    <div class="desireddivision">
        SELECT DESIRED LEAGUE AND DIVISION<br />
        <div class="diamondico"></div><br />
        League:
        <select name="league2" id="league2">
            <option value="bronze2"name="bronze2">Bronze</option>
            <option value="silver2">Silver</option>
            <option value="gold2">Gold</option>
            <option value="platinium2">Platinium</option>
            <option value="diamond2">Diamond</option>
        </select><br />
        Division:
        <select name="division2" id="division2">
            <option value="div5two" name="div5two">V</option>
            <option value="div4two">IV</option>
            <option value="div3two">III</option>
            <option value="div2two">II</option>
            <option value="div1two">I</option>
        </select>
    </div>

    <div id="total_cost" class="alert alert-block alert-success" style="margin-top:3em"></div>

    <div class="imready">
        <input type="submit" name="submit" value="I'm Ready!" class="btn btn-primary btn-lg"  style="margin-bottom:4em"/>
    </div>

 <p class="somethingretarded">If you are going to make an order, please, make sure you have an existing account and you are logged in order to get contacted by our staff, thanks!</p>
</form><br />

<h2 class="myheading">Why us?</h2>

<p class="somethingretarded2">We provide boosting at great prices for a good quality. Everything is safety and anonymous! You can directly talk to your booster about the progress, how it goes and he will always asks you if he can do other activities on your account like buying champions or runes. Many of our past customers, come back again and again to use our services!</p>

</div>

</body>
</html>

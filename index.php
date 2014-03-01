     <?php require 'header.php'; ?>
            <div id="head">
                <a href="index.php"><div id="logo"></div></a>
                <div class="rightsidehead">
                   <?php


if(isset($_SESSION["username"]))
{
     print_secure_content();
}
else
{
    print "<div id='reginto' class='createaccount'></div>
    <div class='bordertop'></div>
    <div id='loginto' class='logintop'></div>
    <div id='reg10'>
    <FORM ACTION='register.php' style='margin-left: 20px; margin-top: -30px;color: black;' METHOD='POST'><br />
Please, input the registration details to create an account here!<br /><br />
<table border='0'>
<tr>
<td style='color: black;'>Username :<span style='color: red;'>*</span></td><td> <input name='regname' style='color:#000;'type='text' size='20'/></td>
</tr>
<tr>
<td style='color: black;'>PayPal E-mail :<span style='color: red;'>*</span> </td> <td><input name='regemail' style='color:#000;'type='text' size='20'></input></td>
</tr>
</table>
<table border='0'>
<tr>
<td style='color: black;'>Password :<span style='color: red;'>*</span> </td><td> <input name='regpass1' style='color:#000; margin-left: 2px;'type='password' size='20'></input></td>
</tr>
<tr>
<td style='color: black;'>Re-type Pass :<span style='color: red;'>*</span> </td><td> <input name='regpass2' style='color:#000; margin-left: 2px;'type='password' size='20'></input></td>
</tr>
</table>
 <table border='0'>
 <tr>
<td style='color: black;'>Skype:<span style='color: red;'>*</span></td><td> <input name='skype' type='text' style='color:#000; margin-left: 52px'size='20'></input></td>
</tr>
<tr><td></td></tr>
</table><br />
<input type='checkbox' name='agreeterms' /> <span style='color: #fff;'>I confirm that I've read <a href='http://getboosted.bizhat.com/terms.html' class='big-link' data-reveal-id='myModal' data-animation='fade'>the terms of use</a></span>
<br />
<br />
 <input type='submit' name='regsubmit' value='Register me!'></input>

</FORM>
</div>
    <div id='log10'>
    <form action='login.php' method=post>
    <div class='login'>Username: <input type='text' maxlength='19' class='inputlogin' name='username' /></div>
    <div class='login2'>Password : <input type='password'  class='inputlogin' maxlength='17' name='password' /></div><br />
    <input type='submit' value='' id='login' />
    </form>
    <br />
    <a href='forgotten.php'><div class='forgot'>Forgotten password?</div></a>
    <a href='register.php'><div class='registration'>Sign up!</div></a></div>";
}

function print_secure_content()
{
    print("<br><p style='color: #fff; margin-top: -10px'</p>Hello, " . $_SESSION['username']);
    print "<br><a style='color: #ccc;' href='logout.php'><p style='text-decoration: underline; margin-top:-20px; '>Sign out</p></a><br>";

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

					 <form method="post" action="make_payment.php" id="package_options" class="form">
    <p>GUARANTEED LEAGUE/DIVISION BOOSTING!</p>
    <div class="currentdivision">
        SELECT CURRENT LEAGUE AND DIVISION<br />
        <div class="bronzeico"></div><br />

        League:
        <select name="league" id="league" onChange="leagues()">
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
        <select name="league2" id="league2" >
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
        <input type="submit" name="submit" value="I'm Ready!" id="loading-example-btn" class="btn btn-primary btn-lg" data-loading-text="Loading..." style="margin-bottom:4em"/>
    </div>

 <p class="somethingretarded">If you are going to make an order, please, make sure you have an existing account and you are logged in order to get contacted by our staff, thanks!</p>
</form><br />

<h2 class="myheading">Why us?</h2>

<p class="somethingretarded2">We provide boosting at great prices for a good quality. Everything is safety and anonymous! You can directly talk to your booster about the progress, how it goes and he will always asks you if he can do other activities on your account like buying champions or runes. Many of our past customers, come back again and again to use our services!</p>

</div>


</body>
</html>

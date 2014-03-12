<? require 'header.php'; ?>
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
<input type='checkbox' name='agreeterms' /> <span style='color: #fff;'>I confirm that I've read <a href='#' class='big-link' data-reveal-id='myModal' data-animation='fade'>the terms of use</a></span>
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

<form action="http://formtoemail.com/user_forms.php" method="post" style="background:#eee;width:300px;padding:15px;border-radius:10px; margin:0 auto;">
    <input type="hidden" name="user_id" value="8MYF43ZBOPXJ03V6ICDL">
    <input type="hidden" name="form_id" value="2">
    Nickname <br><input type="text" name="name" style="width:100%;margin:0 0 10px;">
    Email Address <br><input type="text" name="email" style="width:100%;margin:0 0 10px;">
    Subject <br><input type="text" name="subject" style="width:100%;margin:0 0 10px;">
    Comments <br><textarea name="comments" style="width:100%;height:120px;margin:0 0 10px;"></textarea>
    <input type="submit" value="Send">
</form>

</body>
</html>

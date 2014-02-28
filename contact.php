<?php include 'header.php'; ?>
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
        $_POST['user_id'] = $_SESSION['username'];
    }
?>

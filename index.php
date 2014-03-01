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
<div id="myModal" class="reveal-modal">
			<h1>Terms of use</h1>
			<p>1.1.4. Any and all of the unauthorized employees are not permitted under any circumstance to purchase any service from this website or from us or any direct affiliate in any way shape or form. The customer or attempted customer fully considers and accepts all risks and agrees to defend, hold harmless, and compensate Getboosted, for any allegations made by the unauthorized and any affiliate regarding to this or any transaction in regards the use of the intellectual property owned by the unauthorized.<br />
            1.1.5. Getboosted, makes no representations in regards to the use, ownership, or transfer of Riot Games', or their affiliate's, intellectual property and the customer is fully aware of that case. <br />
            1.1.6. The content on this site and all extensions of this site is shown as is and without a warranty of any kind either expressed or implied. To the fullest extent allowed in regards to the law, Getboosted, reject all warranties implies or expressed, including but not limited to, implied warranties of merchantability and fitness for particular purpose. In relation to all services, Getboosted is only providing a service to the customer; no goods, property, or any extension of a physical product are being sold by Getboosted. Getboosted, makes no claim to the title regarding any of the unauthorized intellectual property and are simply acting as a third-party transferee of the property among the unauthorized and the customer; once the payment is received by Getboosted, and the promised services are completed by the aforementioned, the customer will take Getboosted's place as a user of unauthorized intellectual property to the limit allowed by the unauthorized. At the end of any transaction between the customer and Getboosted, the customer will assume that Getboosted, functions merely as a licensee of the unauthorized to use its intellectual property and grants Getboosted, indemnity from the entire business dealing. Getboosted, claims no title to any intellectual property interests held by the unauthorized nor the customer; and except those, if any, granted by the unauthorized, no intellectual properties are being transferred to the customer by Getboosted, from any transaction.<br />
            1.1.7. Getboosted, reserves the right to change or alter any site conditions, terms, or policies with or without any present or prior notification to the clients, members, and visitors to getboosted.bizhat.com as well as our respective extensions. It is the sole responsibility of the aforementioned to pay close attention to any alterations, changes, removals or additions to the clauses and rules written in the terms and conditions. By purchasing any service that Getboosted, offers on www.getboosted.bizhat.com or outside of it, you are automatically agreeing to the terms and conditions as a whole. <br />
1.1.8 League of Legends is a registered trademark of Riot Games, Inc. Getboosted is in no way affiliated with, associated with or endorsed by Riot Games, Inc.<br /><br />
2. Customers Duties and Rights when using or looking forward to use our Service:   <br />


            2.1. Customer Duties:<br /><br />

            2.1.1. Getboosted is not associated with Riot Games or any unauthorized entity in any way, shape, or form. Getboosted, warns any customer or potential customer to refrain from violating, infringing, or making any illegal action in regards the intellectual property rights of Riot Games or any unauthorized entity.<br />
            2.1.2. By entering our website, or any extension of this site and looking at any content within the site(s) or information concerning Getboosted, you declare under penalty of perjury and under the laws of any country under the Europe Union Laws, that you are not employed or affiliated with Riot Games and their respective affiliates and subsidiaries.<br />
            2.1.3. By using our or any Service included under Getboosted, You, customer accept and known all the legal rights, and that You, customer, are aware that by purchasing any Service under the Getboosted, services you known what you are paying for, and that the Service you are paying for matches your in-Game information.<br />
            2.1.4. You, customer accept that and if Getboosted, is aware of the amount of wins/LP you purchase does not match the exact division you currently have under your summoner Name, You, customer accept and authorize the Service to be done to the real division you are in, for example if you Purchase a  Boost Service of 20 wins in Silver 4 and you are currently in silver 2 you will be boosted to the exact proportion of the prices in these divisions, so the Service will count as amount of wins*x/y x=division you bought elo in y=division you are currently in.<br />
            2.1.5. You, customer accept that by buying our Service you are aware that you cannot dispute any purchase with Getboosted after the Service is done or the service has been partially completed, and that you as a customer cannot violate the rules of ChargeBacks stipulated in any payment method provided by Getboosted.<br />
            2.1.6. You, customer accept that by buying our Service and by the time the Service ends if You, customer claim the purchase money back, that there will be Consequences referring to the Law stated under any Europe Union Country, and that you accept any penalty that Getboosted may apply to you.<br />
            2.1.7. You, customer accept that losing League Points due to your log ins goes on your responsibility even dropping from promotion series due to mentioned reason, and that the boosters Reserve the right to change your masteries and runes, and that You, customer accept that booster may use Influence Points you may have and the ones they may win in their pursuit to complete the Service as well as buying Champions and Runes.<br />
            2.1.8. You, customer accept that you won't be playing any promotion games and that if you do we reserve the right to announce the boost as completed, also in case that you play some games during promotion we reserve the right to just play promotion series without making in guaranteed.<br />
               2.1.9 You, the customer, accept that if you play any ranked games while having bought a division or a tier boost from us, we reserve the right to stop the service and announce the boost as complete, with no refunds offered.<br />
               2.1.10 You, the customer, accept that if your LP gain is below 12 lp per win in any division other than the first division you purchased, you either have to pay extra determined by the boosting calculator, or we will convert your order into wins following the per win calculator on our site. For example, if you bought silver 3-gold 5 and your lp gain is below 12 lp per win in silver division 2 or 1, you have the choice to convert to wins or pay extra.<br />
2.1.11 You, the customer, accept that once your purchase has gone through and the service has started, you are no longer eligible to receive a refund. If service is not completed by Getboosted you have the right to receive store credit fitting what is missing from your service.<br />
2.1.12 You, the customer, accept that if you start a chargeback you are in direct breach of Getboosted’s terms of use, and legally bound to either close the chargeback or pay back the same amount in addition to a fee determined by Getboosted, no less than $50 and no more than twice the original amount. Should you fail to abide by either option, you, the customer, accept full liability in a court of law as determined by the European Trade Laws.<br />
2.1.13 You, the customer, accept that if you open a claim after the order has gone through or the service has started or been completed, you are in direct breach of Getboosted’s terms of use, and legally bound to either close the claim or pay back the same amount in addition to a fee determined by Getboosted, no less than $50 and no more than three times the original amount if the order placed cost more than $50. Should you fail to abide by either option, you, the customer, accept full liability in a court of law as determined by the European Trade Laws.<br />
 <br />


            2.2. Customer Rights:<br /><br />

            2.2.1. Customers Reserve the right to watch and spectate any game during the process and ask any doubts only directly to Getboosted Contacts.<br />
2.2.2. Customers Reserve the right when applying to a Duo queue Service or a Coaching Service the privilege of specific language to communicate while applying the Service, taking in consideration our available languages, and if in any case the language is not available, to ask for a translator.<br />
            2.2.3. Customers Reserve the right to purchase the Service of Elo Boost, Coaching held by Getboosted, consisting in the rise of the amount of elo, the number of hours to coach selected under the Summoner Name that customer provided in the Web Form that Getboosted, gives after the payment is done, if and only after reading the terms and conditions the customer is qualified to apply to the service.<br />

        </p>
			<a class="close-reveal-modal">&#215;</a>
		</div>

</body>
</html>

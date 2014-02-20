<?php

if($_SERVER['REQUEST_METHOD'] == 'POST')
{
    $league = isset($_POST['league']) ? trim($_POST['league']) : '';
    $division = isset($_POST['division']) ? trim($_POST['division']) : '';
    $league_2 = isset($_POST['league2']) ? trim($_POST['league2']) : '';
    $division_2 = isset($_POST['division2']) ? trim($_POST['division2']) : '';


    $item_amount = get_price($league, $division, $league_2, $division_2);


    $paypal_email = 'vkaytsanov@abv.bg';
    $return_url = 'http://getboosted.bizhat.com/thankyou.php';
    $cancel_url = 'http://getboosted.bizhat.com/';
    $notify_url = 'http://getboosted.bizhat.com/ipn.php';

    $item_name = 'League of Legends Elo Boosting';

    $querystring = "business=".urlencode($paypal_email)."&";
    $querystring .= "item_name=".urlencode($item_name)."&";
    $querystring .= "amount=".urlencode($item_amount)."&";

    foreach($_POST as $key => $value)
    {
        $value = urlencode(stripslashes($value));
        $querystring .= "$key=$value&";
    }

    $querystring .= "return=".urlencode(stripslashes($return_url))."&";
    $querystring .= "cancel_return=".urlencode(stripslashes($cancel_url))."&";
    $querystring .= "notify_url=".urlencode($notify_url);

    // Append querystring with custom field
    //$querystring .= "&custom=".USERID;

    // Redirect to paypal IPN
    $url = 'https://www.paypal.com/cgi-bin/webscr?cmd=_xclick&'. $querystring;
    header('location: ' . $url);
    exit();
}


function get_price($league_1, $division_1, $league_2, $division_2)
{

    $product = $league_1 . '-' . $division_1 . '-' . $league_2 . '-' . $division_2;

    switch ($product)
    {
        case 'silver1-div5-bronze2-div5two':
            $price = 20;
            break;
        case 'bronze1-div5-bronze2-div5two':
            $price = 1;
            break;
        default:
            echo "<p>$product</p>";
            die('unknown product');
    }

    return $price;
}



/*

Bronze 5 - Bronze 4 - 13$
Bronze 4 - Bronze 3 - 13$
Bronze 3 - Bronze 2 - 13$
Bronze 2 - Bronze 1 - 13$
Bronze 1 - Silver 5 - 17$

Silver 5 - Silver 4 - 20$
Silver 4 - Silver 3 - 20$
Silver 3 - Silver 2 - 20$
Silver 2 - Silver 1 - 20$
Silver 1 - Gold 5 - 30$

Gold 5 - Gold 4 - 33$
Gold 4 - Gold 3 - 33$
Gold 3 - Gold 2 - 33$
Gold 2 - Gold 1 - 33$
Gold 1 - Platinium 5 - 50$

Platinium 5 - Platinium 4 - 45$
Platinium 4 - Platinium 3 - 45$
Platinium 3 - Platinium 2 - 45$
Platinium 2 - Platinium 1 - 45$
Platinium 1 - Diamond 5 - 80$


*/

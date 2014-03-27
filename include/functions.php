<?php
// functions.php
function check_txnid($tnxid){
	global $link;
	return true;
	$valid_txnid = true;
    //get result set
    $sql = mysql_query("SELECT * FROM `payments` WHERE txnid = '$tnxid'", $link);
	if($row = mysql_fetch_array($sql)) {
        $valid_txnid = false;
	}
    return $valid_txnid;
}

function check_price($price, $id){
    $valid_price = false;
    //you could use the below to check whether the correct price has been paid for the product

	/*
	$sql = mysql_query("SELECT amount FROM `products` WHERE id = '$id'");
    if (mysql_numrows($sql) != 0) {
		while ($row = mysql_fetch_array($sql)) {
			$num = (float)$row['amount'];
			if($num == $price){
				$valid_price = true;
			}
		}
    }
	return $valid_price;
	*/
	return true;
}

function updatePayments($data){
    global $link;
	if(is_array($data)){
        $sql = mysql_query("INSERT INTO `payments` (txnid, payment_amount, payment_status, itemid, createdtime) VALUES (
                '".$data['txn_id']."' ,
                '".$data['payment_amount']."' ,
                '".$data['payment_status']."' ,
                '".$data['item_number']."' ,
                '".date("Y-m-d H:i:s")."'
                )", $link);
    return mysql_insert_id($link);
    }
}


function get_price($league_1, $division_1, $league_2, $division_2)
{

    $product = $league_1 . '-' . $division_1 . '-' . $league_2 . '-' . $division_2;

    switch ($product)
    {

    //bronze
        case 'bronze1-div5-bronze2-div4two': // 5 -> 4
            $price = 13;
            break;
        case 'bronze1-div4-bronze2-div3two': // 4 -> 3
            $price = 13;
            break;
        case 'bronze1-div5-bronze2-div3two': // 5 -> 3
            $price = 26;
            break;
        case 'bronze1-div3-bronze2-div2two': // 3 -> 2
            $price = 13;
            break;
        case 'bronze1-div5-bronze2-div2two': // 5 -> 2
            $price = 39;
            break;
        case 'bronze1-div4-bronze2-div2two': // 4 -> 2
            $price = 26;
            break;
        case 'bronze1-div5-bronze2-div1two': // 5 -> 1
            $price = 52;
            break;
        case 'bronze1-div4-bronze2-div1two': // 4 -> 1
            $price = 39;
            break;
        case 'bronze1-div3-bronze2-div1two': // 3 -> 1
            $price = 26;
            break;
        case 'bronze1-div2-bronze2-div1two': // 2 -> 1
            $price = 13;
            break;
        case 'bronze1-div1-silver2-div5two': // 1 -> 5 -- OKAY --
            $price = 17;
            break;
        case 'bronze1-div5-silver2-div5two': // 5 -> 5silver
            $price = 69;
            break;
        case 'bronze1-div5-silver2-div4two': // 5 -> 4silver
            $price = 79;
            break;
        case 'bronze1-div5-silver2-div3two': // 5 -> 3silver
            $price = 99;
            break;
        case 'bronze1-div5-silver2-div2two': // 5 -> 2silver
            $price = 119;
            break;
        case 'bronze1-div5-silver2-div1two': // 5 -> 1silver
            $price = 139;
            break;
        case 'bronze1-div4-silver2-div5two': // 4 -> 5silver
            $price = 56;
            break;
        case 'bronze1-div4-silver2-div4two': // 4 -> 4silver
            $price = 76;
            break;
        case 'bronze1-div4-silver2-div3two': // 4 -> 3silver
            $price = 96;
            break;
        case 'bronze1-div4-silver2-div2two': // 4 -> 2silver
            $price = 116;
            break;
        case 'bronze1-div4-silver2-div1two': // 4 -> 1silver
            $price = 136;
            break;
        case 'bronze1-div3-silver2-div5two': // 3 -> 5silver
            $price = 43;
            break;
        case 'bronze1-div3-silver2-div4two': // 3 -> 4silver
            $price = 53;
            break;
        case 'bronze1-div3-silver2-div3two': // 3 -> 3silver
            $price = 73;
            break;
        case 'bronze1-div3-silver2-div2two': // 3 -> 2silver
            $price = 93;
            break;
        case 'bronze1-div3-silver2-div2two': // 3 -> 1silver
            $price = 113;
            break;
        case 'bronze1-div2-silver2-div5two': // 2 -> 5silver
            $price = 30;
            break;
        case 'bronze1-div2-silver2-div4two': // 2 -> 4silver
            $price = 50;
            break;
        case 'bronze1-div2-silver2-div3two': // 2 -> 3silver
            $price = 70;
            break;
        case 'bronze1-div2-silver2-div2two': // 2 -> 2silver
            $price = 90;
            break;
        case 'bronze1-div2-silver2-div1two': // 2 -> 1silver
            $price = 110;
            break;
        case 'bronze1-div1-silver2-div4two': // 2 -> 4silver
            $price = 37;
            break;
        case 'bronze1-div1-silver2-div3two': // 2 -> 3silver
            $price = 57;
            break;
        case 'bronze1-div1-silver2-div2two': // 2 -> 2silver
            $price = 77;
            break;
        case 'bronze1-div1-silver2-div1two': // 2 -> 1silver
            $price = 97;
            break;
            
        case 'bronze1-div5-gold2-div5two': // 5 -> 5gold
            $price = 179;
            break;
        case 'bronze1-div4-gold2-div5two': // 4 -> 5gold
            $price = 166;
            break;
        case 'bronze1-div3-gold2-div5two': // 3 -> 5gold
            $price = 153;
            break;
        case 'bronze1-div2-gold2-div5two': // 2 -> 5gold
            $price = 140;
            break;
        case 'bronze1-div1-gold2-div5two': // 1 -> 5gold
            $price = 127;
            break;
        case 'bronze1-div5-gold2-div4two': // 5 -> 4gold
            $price = 212;
            break;
        case 'bronze1-div5-gold2-div3two': // 5 -> 3gold
            $price = 245;
            break;
        case 'bronze1-div5-gold2-div2two': // 5 -> 2gold
            $price = 278;
            break;
        case 'bronze1-div5-gold2-div1two': // 5 -> 1gold
            $price = 311;
            break;
        case 'bronze1-div4-gold2-div4two': // 4 -> 4gold
            $price = 199;
            break;
        case 'bronze1-div4-gold2-div3two': // 4 -> 3gold
            $price = 232;
            break;
        case 'bronze1-div4-gold2-div2two': // 4 -> 2gold
            $price = 265;
            break;
        case 'bronze1-div4-gold2-div1two': // 4 -> 1gold
            $price = 298;
            break;
        case 'bronze1-div3-gold2-div4two': // 3 -> 4gold
            $price = 186;
            break;
        case 'bronze1-div3-gold2-div4two': // 3 -> 3gold
            $price = 219;
            break;
        case 'bronze1-div3-gold2-div4two': // 3 -> 2gold
            $price = 252;
            break;
        case 'bronze1-div3-gold2-div4two': // 3 -> 1gold
            $price = 285;
            break;
        case 'bronze1-div2-gold2-div4two': // 2 -> 4gold
            $price = 173;
            break;
        case 'bronze1-div2-gold2-div3two': // 2 -> 3gold
            $price = 206;
            break;
        case 'bronze1-div2-gold2-div2two': // 2 -> 2gold
            $price = 239;
            break;
        case 'bronze1-div2-gold2-div1two': // 2 -> 1gold
            $price = 272;
            break;
        case 'bronze1-div1-gold2-div4two': // 1 -> 4gold
            $price = 160;
            break;
        case 'bronze1-div1-gold2-div3two': // 1 -> 3gold
            $price = 193;
            break;
        case 'bronze1-div1-gold2-div2two': // 1 -> 2gold
            $price = 226;
            break;
        case 'bronze1-div1-gold2-div2two': // 1 -> 1gold
            $price = 259;
            break;
        case 'bronze1-div5-platinium2-div5two': // 5 -> 5platinium
            $price = 361;
            break;
        case 'bronze1-div5-platinium2-div4two': // 5 -> 4platinium
            $price = 406;
            break;
        case 'bronze1-div5-platinium2-div3two': // 5 -> 3platinium
            $price = 451;
            break;
        case 'bronze1-div5-platinium2-div2two': // 5 -> 2platinium
            $price = 496;
            break;
        case 'bronze1-div5-platinium2-div1two': // 5 -> 1platinium
            $price = 541;
            break;
        case 'bronze1-div5-diamond2-div5two': // 5 -> 5diamond
            $price = 621;
            break;
        case 'bronze1-div4-platinium2-div5two': // 4 -> 5platinium
            $price = 348;
            break;
        case 'bronze1-div4-platinium2-div4two': // 4 -> 4platinium
            $price = 393;
            break;
        case 'bronze1-div4-platinium2-div3two': // 4 -> 3platinium
            $price = 438;
            break;
        case 'bronze1-div4-platinium2-div2two': // 4 -> 2platinium
            $price = 483;
            break;
        case 'bronze1-div4-platinium2-div1two': // 4 -> 1platinium
            $price = 528;
            break;
        case 'bronze1-div4-diamond2-div5two': // 4 -> 5diamond
            $price = 608;
            break;
        case 'bronze1-div3-platinium2-div5two': // 3 -> 5platinium
            $price = 335;
            break;
        case 'bronze1-div3-platinium2-div4two': // 3 -> 4platinium
            $price = 380;
            break;
        case 'bronze1-div3-platinium2-div3two': // 3 -> 3platinium
            $price = 425;
            break;
        case 'bronze1-div3-platinium2-div2two': // 3 -> 2platinium
            $price = 470;
            break;
        case 'bronze1-div3-platinium2-div1two': // 3 -> 1platinium
            $price = 515;
            break;
            case 'bronze1-div3-diamond2-div5two': // 3 -> 5diamond
            $price = 595;
            break;
        case 'bronze1-div2-platinium2-div5two': // 2 -> 5platinium
            $price = 322;
            break;
            case 'bronze1-div2-platinium2-div4two': // 2 -> 4platinium
            $price = 367;
            break;
            case 'bronze1-div2-platinium2-div3two': // 2 -> 3platinium
            $price = 412;
            break;
            case 'bronze1-div2-platinium2-div2two': // 2 -> 2platinium
            $price = 457;
            break;
            case 'bronze1-div2-platinium2-div1two': // 2 -> 1platinium
            $price = 502;
            break;
        case 'bronze1-div2-diamond2-div5two': // 2 -> 5diamond
           $price = 582;
            break;
        case 'bronze1-div1-platinium2-div5two': // 1 -> 5platinium
            $price = 310;
            break;
        case 'bronze1-div1-platinium2-div4two': // 1 -> 4platinium
            $price = 355;
            break;
        case 'bronze1-div1-platinium2-div3two': // 1 -> 3platinium
            $price = 400;
            break;
        case 'bronze1-div1-platinium2-div2two': // 1 -> 2platinium
            $price = 445;
            break;
        case 'bronze1-div1-platinium2-div1two': // 1 -> 1platinium
            $price = 490;
            break;
        case 'bronze1-div1-diamond2-div5two': // 1 -> 5diamond
          $price = 580;
            break;
         //silver
            case 'silver1-div5-silver2-div4two': // 5 -> 4
            $price = 20;
            break;
            case 'silver1-div4-silver2-div3two': // 4 -> 3
            $price = 20;
            break;
            case 'silver1-div3-silver2-div2two': // 3 -> 2
            $price = 20;
            break;
            case 'silver1-div2-silver2-div1two': // 2 -> 1
            $price = 20;
            break;
            case 'silver1-div4-silver2-div2two': // 4 -> 2
            $price = 40;
            break;
            case 'silver1-div4-silver2-div1two': // 4 -> 1
            $price = 60;
            break;
            case 'silver1-div3-silver2-div1two': // 3 -> 1
            $price = 40;
            break;
            case 'silver1-div5-silver2-div3two': // 5 -> 3
            $price = 40;
            break;
            case 'silver1-div5-silver2-div2two': // 5 -> 2
            $price = 60;
            break;
            case 'silver1-div5-silver2-div1two': // 5 -> 1
            $price = 80;
            break;
             case 'silver1-div5-gold2-div5two': // 5 -> 5gold
            $price = 110;
            break;
            case 'silver1-div4-gold2-div5two': // 4 -> 5gold
            $price = 90;
            break;
            case 'silver1-div3-gold2-div5two': // 3 -> 5gold
            $price = 70;
            break;
            case 'silver1-div2-gold2-div5two': // 2 -> 5gold
            $price = 50;
            break;
            case 'silver1-div1-gold2-div5two': // 1 -> 5gold -- OKAY --
            $price = 30;
            break;
            case 'silver1-div5-gold2-div4two': // 5 -> 4gold
            $price = 143;
            break;
            case 'silver1-div5-gold2-div3two': // 5 -> 3gold
            $price = 176;
            break;
            case 'silver1-div5-gold2-div2two': // 5 -> 2gold
            $price = 209;
            break;
            case 'silver1-div5-gold2-div1two': // 5 -> 1gold
            $price = 242;
            break;
            case 'silver1-div5-platinium2-div5two': // 5 -> 5platinium
            $price = 292;
            break;
            case 'silver1-div5-platinium2-div4two': // 5 -> 4platinium
            $price = 337;
            break;
            case 'silver1-div5-platinium2-div3two': // 5 -> 3platinium
            $price = 382;
            break;
            case 'silver1-div5-platinium2-div2two': // 5 -> 2platinium
            $price = 427;
            break;
            case 'silver1-div5-platinium2-div1two': // 5 -> 1platinium
            $price = 472;
            break;
            case 'silver1-div5-diamond2-div5two': // 5 -> 5diamond
            $price = 552;
            break;
            case 'silver1-div4-gold2-div5two': // 4 -> 5gold
            $price = 90;
            break;
            case 'silver1-div4-gold2-div4two': // 4 -> 4gold
            $price = 123;
            break;
            case 'silver1-div4-gold2-div3two': // 4 -> 3gold
            $price = 156;
            break;
            case 'silver1-div4-gold2-div2two': // 4 -> 2gold
            $price = 189;
            break;
            case 'silver1-div4-gold2-div1two': // 4 -> 1gold
            $price = 222;
            break;
            case 'silver1-div4-platinium2-div5two': // 4 -> 5platinium
            $price = 272;
            break;
            case 'silver1-div4-platinium2-div4two': // 4 -> 4platinium
            $price = 317;
            break;
            case 'silver1-div4-platinium2-div3two': // 4 -> 3platinium
            $price = 362;
            break;
            case 'silver1-div4-platinium2-div2two': // 4 -> 2platinium
            $price = 407;
            break;
            case 'silver1-div4-platinium2-div1two': // 4 -> 1platinium
            $price = 452;
            break;
            case 'silver1-div4-diamond2-div5two': // 4 -> 5diamond
            $price = 532;
            break;
            case 'silver1-div3-gold2-div5two': // 3 -> 5gold
            $price = 70;
            break;
            case 'silver1-div3-gold2-div4two': // 3 -> 4gold
            $price = 103;
            break;
            case 'silver1-div3-gold2-div3two': // 3 -> 3gold
            $price = 136;
            break;
            case 'silver1-div3-gold2-div2two': // 3 -> 2gold
            $price = 169;
            break;
            case 'silver1-div3-gold2-div1two': // 3 -> 1gold
            $price = 202;
            break;
            case 'silver1-div3-platinium2-div5two': // 3 -> 5platinium
            $price = 252;
            break;
            case 'silver1-div3-platinium2-div4two': // 3 -> 4platinium
            $price = 297;
            break;
            case 'silver1-div3-platinium2-div3two': // 3 -> 3platinium
            $price = 342;
            break;
            case 'silver1-div3-platinium2-div2two': // 3 -> 2platinium
            $price = 387;
            break;
            case 'silver1-div3-platinium2-div1two': // 3 -> 1platinium
            $price = 432;
            break;
            case 'silver1-div3-diamond2-div5two': // 3 -> 5diamond
            $price = 512;
            break;
            case 'silver1-div2-gold2-div5two': // 2 -> 5gold
            $price = 50;
            break;
            case 'silver1-div2-gold2-div4two': // 2 -> 4gold
            $price = 83;
            break;
            case 'silver1-div2-gold2-div3two': // 2 -> 3gold
            $price = 116;
            break;
            case 'silver1-div2-gold2-div2two': // 2 -> 2gold
            $price = 149;
            break;
            case 'silver1-div2-gold2-div1two': // 2 -> 1gold
            $price = 182;
            break;
            case 'silver1-div2-platinium2-div5two': // 2 -> 5platinium
            $price = 232;
            break;
            case 'silver1-div2-platinium2-div4two': // 2 -> 4platinium
            $price = 277;
            break;
            case 'silver1-div2-platinium2-div3two': // 2 -> 3platinium
            $price = 322;
            break;
            case 'silver1-div2-platinium2-div2two': // 2 -> 2platinium
            $price = 367;
            break;
            case 'silver1-div2-platinium2-div1two': // 2 -> 1platinium
            $price = 412;
            break;
            case 'silver1-div2-diamond2-div5two': // 2 -> 5diamond
            $price = 492;
            break;
            case 'silver1-div1-platinium2-div5two': // 1 -> 5platinium
            $price = 212;
            break;
            case 'silver1-div1-platinium2-div4two': // 1 -> 4platinium
            $price = 257;
            break;
            case 'silver1-div1-platinium2-div3two': // 1 -> 3platinium
            $price = 302;
            break;
            case 'silver1-div1-platinium2-div2two': // 1 -> 2platinium
            $price = 347;
            break;
            case 'silver1-div1-platinium2-div1two': // 1 -> 1platinium
            $price = 392;
            break;
            case 'silver1-div1-diamond2-div5two': // 1 -> 5diamond
            $price = 472;
            break;
            case 'silver1-div1-gold2-div5two': // 1 -> 5gold
            $price = 30;
            break;
            case 'silver1-div1-gold2-div4two': // 1 -> 4gold
            $price = 63;
            break;
            case 'silver1-div1-gold2-div3two': // 1 -> 3gold
            $price = 96;
            break;
            case 'silver1-div1-gold2-div2two': // 1 -> 2gold
            $price = 129;
            break;
            case 'silver1-div1-gold2-div1two': // 1 -> 1gold
            $price = 162;
            break;
             case 'bronze1-div5-platinium2-div5two': // 5 -> 5platinium
            $price = 259;
            break;
        case 'bronze1-div5-platinium2-div4two': // 5 -> 4platinium
            $price = 304;
            break;
        case 'bronze1-div5-platinium2-div3two': // 5 -> 3platinium
            $price = 349;
            break;
        case 'bronze1-div5-platinium2-div2two': // 5 -> 2platinium
            $price = 400;
            break;
        case 'bronze1-div5-platinium2-div1two': // 5 -> 1platinium
            $price = 440;
            break;
        case 'bronze1-div5-diamond2-div5two': // 5 -> 5diamond
            $price = 520;
            break;
        case 'bronze1-div4-platinium2-div5two': // 4 -> 5platinium
            $price = 246;
            break;
        case 'bronze1-div4-platinium2-div4two': // 4 -> 4platinium
            $price = 291;
            break;
        case 'bronze1-div4-platinium2-div3two': // 4 -> 3platinium
            $price = 336;
            break;
        case 'bronze1-div4-platinium2-div2two': // 4 -> 2platinium
            $price = 381;
            break;
        case 'bronze1-div4-platinium2-div1two': // 4 -> 1platinium
            $price = 426;
            break;
        case 'bronze1-div4-diamond2-div5two': // 4 -> 5diamond
            $price = 506;
            break;
        case 'bronze1-div3-platinium2-div5two': // 3 -> 5platinium
            $price = 233;
            break;
        case 'bronze1-div3-platinium2-div4two': // 3 -> 4platinium
            $price = 278;
            break;
        case 'bronze1-div3-platinium2-div3two': // 3 -> 3platinium
            $price = 323;
            break;
        case 'bronze1-div3-platinium2-div2two': // 3 -> 2platinium
            $price = 368;
            break;
        case 'bronze1-div3-platinium2-div1two': // 3 -> 1platinium
            $price = 403;
            break;
        case 'bronze1-div3-diamond2-div5two': // 3 -> 5diamond
            $price = 483;
            break;
        case 'bronze1-div2-platinium2-div5two': // 2 -> 5platinium
            $price = 220;
            break;
        case 'bronze1-div2-platinium2-div4two': // 2 -> 4platinium
            $price = 265;
            break;
        case 'bronze1-div2-platinium2-div3two': // 2 -> 3platinium
            $price = 310;
            break;
        case 'bronze1-div2-platinium2-div2two': // 2 -> 2platinium
            $price = 355;
            break;
        case 'bronze1-div2-platinium2-div1two': // 2 -> 1platinium
            $price = 400;
            break;
        case 'bronze1-div2-diamond2-div5two': // 2 -> 5diamond
            $price = 480;
            break;
        case 'bronze1-div1-platinium2-div5two': // 1 -> 5platinium -- Everything done From Bronze To Platinium --
            $price = 207;
            break;
        case 'bronze1-div1-platinium2-div4two': // 1 -> 4platinium
            $price = 252;
            break;
        case 'bronze1-div1-platinium2-div3two': // 1 -> 3platinium
            $price = 297;
            break;
        case 'bronze1-div1-platinium2-div2two': // 1 -> 2platinium
            $price = 342;
            break;
        case 'bronze1-div1-platinium2-div5two': // 1 -> 1platinium
            $price = 387;
            break;
        case 'bronze1-div1-diamond2-div5two': // 1 -> 5diamond
            $price = 467;
            break;
         //gold
            case 'gold1-div5-gold2-div4two': // 5gold -> 4
            $price = 33;
            break;
            case 'gold1-div5-gold2-div3two': // 5gold -> 3
            $price = 66;
            break;
            case 'gold1-div5-gold2-div2two': // 5gold -> 2
            $price = 99;
            break;
            case 'gold1-div5-gold2-div1two': // 5gold -> 1
            $price = 132;
            break;
            case 'gold1-div5-platinium2-div5two': // 5gold -> 5platinium
            $price = 182;
            break;
            case 'gold1-div5-platinium2-div4two': // 5gold -> 4platinium
            $price = 227;
            break;
            case 'gold1-div5-platinium2-div3two': // 5gold -> 3platinium
            $price = 272;
            break;
            case 'gold1-div5-platinium2-div2two': // 5gold -> 2platinium
            $price = 317;
            break;
            case 'gold1-div5-platinium2-div2two': // 5gold -> 1platinium
            $price = 372;
            break;
            case 'gold1-div5-diamond2-div5two': // 5gold -> 5diamond
            $price = 452;
            break;
            case 'gold1-div4-gold2-div3two': // 4gold -> 3
            $price = 33;
            break;
            case 'gold1-div4-gold2-div2two': // 4gold -> 2
            $price = 66;
            break;
            case 'gold1-div4-gold2-div1two': // 4gold -> 1
            $price = 99;
            break;
            case 'gold1-div4-platinium2-div5two': // 4gold -> 5platinium
            $price = 149;
            break;
            case 'gold1-div4-platinium2-div4two': // 4gold -> 4platinium
            $price = 204;
            break;
            case 'gold1-div4-platinium2-div3two': // 4gold -> 3platinium
            $price = 249;
            break;
            case 'gold1-div4-platinium2-div2two': // 4gold -> 2platinium
            $price = 294;
            break;
            case 'gold1-div4-platinium2-div1two': // 4gold -> 1platinium
            $price = 339;
            break;
            case 'gold1-div4-diamond2-div5two': // 4gold -> 5diamond
            $price = 419;
            break;
            case 'gold1-div3-gold2-div2two': // 3gold -> 2
            $price = 33;
            break;
            case 'gold1-div3-gold2-div1two': // 3gold -> 1
            $price = 66;
            break;
            case 'gold1-div3-platinium2-div5two': // 3gold -> 5platinium
            $price = 116;
            break;
            case 'gold1-div3-platinium2-div4two': // 3gold -> 4platinium
            $price = 161;
            break;
            case 'gold1-div3-platinium2-div3two': // 3gold -> 3platinium
            $price = 206;
            break;
            case 'gold1-div3-platinium2-div2two': // 3gold -> 2platinium
            $price = 251;
            break;
            case 'gold1-div3-platinium2-div2two': // 3gold -> 1platinium
            $price = 296;
            break;
            case 'gold1-div3-diamond2-div5two': // 3gold -> 5diamond
            $price = 376;
            break;
            case 'gold1-div2-gold2-div1two': // 2gold -> 1
            $price = 33;
            break;
            case 'gold1-div2-platinium2-div5two': // 2gold -> 5platinium
            $price = 83;
            break;
            case 'gold1-div2-platinium2-div4two': // 2gold -> 4platinium
            $price = 128;
            break;
            case 'gold1-div2-platinium2-div3two': // 2gold -> 3platinium
            $price = 183;
            break;
            case 'gold1-div2-platinium2-div2two': // 2gold -> 2platinium
            $price = 238;
            break;
            case 'gold1-div2-platinium2-div1two': // 2gold -> 1platinium
            $price = 283;
            break;
            case 'gold1-div2-diamond2-div5two': // 2gold -> 5diamond
            $price = 363;
            break;
            case 'gold1-div2-gold2-div1two': // 1gold -> 5platinium
            $price = 50;
            break;
            case 'gold1-div1-platinium2-div4two': // 1gold -> 4platinium
            $price = 95;
            break;
            case 'gold1-div1-platinium2-div3two': // 1gold -> 3platinium
            $price = 140;
            break;
            case 'gold1-div1-platinium2-div2two': // 1gold -> 2platinium
            $price = 185;
            break;
            case 'gold1-div1-platinium2-div1two': // 1gold -> 1platinium
            $price = 230;
            break;
            case 'gold1-div1-diamond2-div5two': // 1gold -> 5diamond
            $price = 310;
            break;
            //platinium
             case 'platinium1-div5-platinium2-div4two': // 5platinium -> 4
            $price = 45;
            break;
             case 'platinium1-div5-platinium2-div3two': // 5platinium -> 3
            $price = 90;
            break;
             case 'platinium1-div5-platinium2-div2two': // 5platinium -> 2
            $price = 135;
            break;
             case 'platinium1-div5-platinium2-div1two': // 5platinium -> 1
            $price = 180;
            break;
             case 'platinium1-div5-diamond2-div5two': // 5platinium -> 5diamond
            $price = 260;
            break;
             case 'platinium1-div4-platinium2-div3two': // 4platinium -> 3
            $price = 45;
            break;
             case 'platinium1-div4-platinium2-div2two': // 4platinium -> 2
            $price = 90;
            break;
             case 'platinium1-div4-platinium2-div1two': // 4platinium -> 1
            $price = 135;
            break;
             case 'platinium1-div4-diamond2-div5two': // 4platinium -> 5diamond
            $price = 215;
            break;
             case 'platinium1-div3-platinium2-div2two': // 3platinium -> 2
            $price = 45;
            break;
             case 'platinium1-div3-platinium2-div1two': // 3platinium -> 1
            $price = 90;
            break;
             case 'platinium1-div3-diamond2-div5two': // 3platinium -> 5diamond
            $price = 170;
            break;
             case 'platinium1-div2-platinium2-div1two': // 2platinium -> 1
            $price = 45;
            break;
             case 'platinium1-div2-diamond2-div5two': // 2platinium -> 5diamond
            $price = 125;
            break;
             case 'platinium1-div1-diamond2-div5two': // 1platinium -> 5diamond
            $price = 80;
            break;
        default:
            die('0(we don\'t offer this type of boosting)');
    }

    return $price;
}

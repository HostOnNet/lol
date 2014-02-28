<?php
session_start();


?>
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
    <script type='text/javascript' >
function leagues()
{
var league=document.getElementById("league");
document.getElementById("league2").value=league.options[league.selectedIndex].options;
}
</script>
<script>
    $(document).ready(function(){
        $('#log10').hide();
        $("#loginto").click(function(){
            $("#log10").fadeIn('slow', function(){});
        });
         $(".content, .introimage, #loginto, #reginto").mouseover(function(){
            $("#log10").fadeOut('slow', function(){});
        });
    });
</script>
<script>
    $(document).ready(function(){
        $('#reg10').hide();
        $("#reginto").click(function(){
            $("#reg10").fadeIn('slow', function(){});
        });
         $(".content, .introimage, #loginto, #reginto").mouseover(function(){
            $("#reg10").fadeOut('slow', function(){});
        });
    });
</script>




    </head>

        <body>
<?php

error_reporting(E_ALL ^ E_DEPRECATED);

$link = mysql_connect("localhost","root","flashwebhost") or die('Unable to connect to database');
$db = mysql_select_db('test') or die('Unable to select DB');

define('BASE_URL', 'http://localhost/leagueoflegends');

session_start();


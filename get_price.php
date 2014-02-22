<?php

require 'include/functions.php';

$league = isset($_POST['league']) ? trim($_POST['league']) : '';
$division = isset($_POST['division']) ? trim($_POST['division']) : '';
$league2 = isset($_POST['league2']) ? trim($_POST['league2']) : '';
$division2 = isset($_POST['division2']) ? trim($_POST['division2']) : '';


$item_amount = get_price($league, $division, $league2, $division2);

echo  $item_amount;


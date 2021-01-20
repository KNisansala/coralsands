<?php

include '../../../include.php';

$roomprice = new RoomPrice();

$type = $_POST['type'];
$basis = $_POST['basis'];
$start = $_POST['start'];
$end = $_POST['end'];
$price = $_POST['price'];

$addPrice = $roomprice->manualAdd($type, $basis, $start, $end, $price);
$arr = array();

if($addPrice === TRUE) {
    $arr['status'] = 1;
} else {
    $arr['status'] = 0;
}

header('Content-Type: application/json');
echo json_encode($arr, JSON_PRETTY_PRINT);

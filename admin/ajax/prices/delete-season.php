<?php

include '../../../include.php';

$roompricesobj = new RoomPrice();

$start = $_POST['start'];
$end = $_POST['end'];


$arr = array();

if ($roompricesobj->deleteSeason($start,$end) === TRUE) {
    $arr['status'] = 1;
//    $arr['start'] = $start;
} else {
    $arr['status'] = 0;
}

header('Content-Type: application/json');
echo json_encode($arr, JSON_PRETTY_PRINT);
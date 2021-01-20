<?php

include '../../../include.php';

$roomprice = new RoomPrice();

$id = $_POST['id'];
$column = $_POST['column'];
$data = $_POST['data'];

$updatePrice = $roomprice->updateByColumn($id, $column, $data);
$arr = array();

if($updatePrice === TRUE) {
    $arr['status'] = 1;
} else {
    $arr['status'] = 0;
}

header('Content-Type: application/json');
echo json_encode($arr, JSON_PRETTY_PRINT);

<?php

include '../../../include.php';

$discount = new Discount();

$id = $_POST['id'];
$column = $_POST['column'];
$data = $_POST['data'];

$updatediscount = $discount->updateByColumn($id, $column, $data);
$arr = array();

if($updatediscount === TRUE) {
    $arr['status'] = 1;
} else {
    $arr['status'] = 0;
}

header('Content-Type: application/json');
echo json_encode($arr, JSON_PRETTY_PRINT);
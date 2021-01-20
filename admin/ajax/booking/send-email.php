<?php

include '../../../include.php';

$bookingid = $_POST['id'];

$HELPER = Helper::sendrepayEmail($bookingid);

$arr = array();
if ($HELPER) {
    $arr['status'] = 'success';
} else {
    $arr['status'] = 'error';
}

header('Content-Type: application/json');
echo json_encode($arr, JSON_PRETTY_PRINT);




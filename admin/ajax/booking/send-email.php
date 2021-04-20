<?php


if (!isset($_SESSION)) {
    session_start();
}
include '../../../include.php';
User::forceLogin();


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

<?php


if (!isset($_SESSION)) {
    session_start();
}
include '../../../include.php';
User::forceLogin();


$settings = new Settings();



$percentage = $_POST['percentage'];



$updatePerc = $settings->updatePercentage($percentage);

$arr = array();



if($updatePerc === TRUE) {

    $arr['status'] = 1;

} else {

    $arr['status'] = 0;

}



header('Content-Type: application/json');

echo json_encode($arr, JSON_PRETTY_PRINT);


<?php

if (!isset($_SESSION)) {
    session_start();
}

include '../../../include.php';
User::forceLogin();


$Discount = new Discount();



$id = $_POST['id'];



$arr = array();



if ($Discount->delete($id) === TRUE) {

    $arr['status'] = 1;

    $arr['id'] = $id;

} else {

    $arr['status'] = 0;

}



header('Content-Type: application/json');

echo json_encode($arr, JSON_PRETTY_PRINT);
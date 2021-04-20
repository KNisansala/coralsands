<?php


if (!isset($_SESSION)) {
    session_start();
}
include '../../../include.php';

User::forceLogin();

$invoices = new Invoices();



$id = $_POST['id'];



$arr = array();



if ($invoices->sendMail($id) === TRUE) {

    $arr['status'] = 1;

} else {

    $arr['status'] = 0;

}



header('Content-Type: application/json');

echo json_encode($arr, JSON_PRETTY_PRINT);


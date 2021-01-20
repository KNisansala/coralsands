<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
//error_reporting(0);
include '../../../include.php';

$invoices = new Invoices();

$arr = array();

if ($invoices->refund($_POST)) {
    $arr['status'] = 1;
    $arr['id'] = $_POST['id'];
} else {
    $arr['status'] = 0;
}

header('Content-Type: application/json');
echo json_encode($arr, JSON_PRETTY_PRINT);

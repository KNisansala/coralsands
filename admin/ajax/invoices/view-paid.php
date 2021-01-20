<?php

include '../../../include.php';

$invoices = new Invoices();

$id = $_POST['id'];
$inv = $invoices->getById($id);
$arr = array();

if ($inv) {
    $arr['amount'] = $inv['amount'];
    $arr['date'] = $inv['payment_date'];
    $arr['reference'] = $inv['reference'];
    
    $arr['status'] = 1;
    $arr['id'] = $id;
} else {
    $arr['status'] = 0;
}

header('Content-Type: application/json');
echo json_encode($arr, JSON_PRETTY_PRINT);
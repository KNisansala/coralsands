<?php

include '../../../include.php';

$invoices = new Invoices();

$id = $_POST['id'];
$inv = $invoices->getById($id);
$arr = array();

if ($inv) {
    $arr['amount'] = $inv['refund_amount'];
    $arr['date'] = $inv['refund_date'];
    $arr['reason'] = $inv['refund_reason'];
    
    $arr['status'] = 1;
    $arr['id'] = $id;
} else {
    $arr['status'] = 0;
}

header('Content-Type: application/json');
echo json_encode($arr, JSON_PRETTY_PRINT);
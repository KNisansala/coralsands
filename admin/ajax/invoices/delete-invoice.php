<?php

include '../../../include.php';

$invoices = new Invoices();

$id = $_POST['id'];

$arr = array();

if ($invoices->delete($id) === TRUE) {
    $arr['status'] = 1;
    $arr['id'] = $id;
} else {
    $arr['status'] = 0;
}

header('Content-Type: application/json');
echo json_encode($arr, JSON_PRETTY_PRINT);
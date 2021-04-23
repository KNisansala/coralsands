<?php


if (!isset($_SESSION)) {
    session_start();
}
include '../../../include.php';
User::forceLogin();


$invoices = new Invoices();



$arr = array();



if ($invoices->add($_POST)) {



    $id = mysql_insert_id();



    if ($invoices->sendMail($id) === 'invalid_invoice') {

        // $invoices->sendMailToHotel($id);

        $arr['status'] = 3;
    } elseif ($invoices->sendMail($id) === TRUE) {

        $invoices->sendMailToHotel($id);

        $arr['status'] = 2;
    } else {

        $arr['status'] = 1;
    }

    $arr['id'] = $id;
} else {

    $arr['status'] = 0;
}



header('Content-Type: application/json');

echo json_encode($arr, JSON_PRETTY_PRINT);

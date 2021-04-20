<?php


if (!isset($_SESSION)) {
    session_start();
}
include '../../../include.php';
User::forceLogin();


$invoices = new Invoices();



$arr = array();



if ($invoices->update($_POST)) {

    

    $id = $_POST['id'];

    

    if($invoices->sendMail($id) === TRUE) {

        $invoices->sendMailToHotel($id);

        $arr['status'] = 2;

    } else {

        $arr['status'] = 1;

    }

    

} else {

    $arr['status'] = 0;

}



header('Content-Type: application/json');

echo json_encode($arr, JSON_PRETTY_PRINT);


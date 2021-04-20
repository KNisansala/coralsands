<?php


if (!isset($_SESSION)) {
    session_start();
}
include '../../../include.php';
User::forceLogin();
 

$INV = new Invoices(); 

$invoice = $INV->getById($_POST["id"]);

 

header('Content-Type: application/json');

echo json_encode($invoice, JSON_PRETTY_PRINT);


<?php

include '../../../include.php';
 
$INV = new Invoices(); 
$invoice = $INV->getById($_POST["id"]);
 
header('Content-Type: application/json');
echo json_encode($invoice, JSON_PRETTY_PRINT);

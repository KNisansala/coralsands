<?php

include './include.php';

$Title = array_key_exists("Title", $_GET) ? $_GET["Title"] : "";
$againLink = array_key_exists("AgainLink", $_GET) ? $_GET["AgainLink"] : "";
$amount = array_key_exists("vpc_Amount", $_GET) ? $_GET["vpc_Amount"] : "";
$locale = array_key_exists("vpc_Locale", $_GET) ? $_GET["vpc_Locale"] : "";
$batchNo = array_key_exists("vpc_BatchNo", $_GET) ? $_GET["vpc_BatchNo"] : "";
$command = array_key_exists("vpc_Command", $_GET) ? $_GET["vpc_Command"] : "";
$message = array_key_exists("vpc_Message", $_GET) ? $_GET["vpc_Message"] : "";
$version = array_key_exists("vpc_Version", $_GET) ? $_GET["vpc_Version"] : "";
$cardType = array_key_exists("vpc_Card", $_GET) ? $_GET["vpc_Card"] : "";
$orderInfo = array_key_exists("vpc_OrderInfo", $_GET) ? $_GET["vpc_OrderInfo"] : "";
$receiptNo = array_key_exists("vpc_ReceiptNo", $_GET) ? $_GET["vpc_ReceiptNo"] : "";
$merchantID = array_key_exists("vpc_Merchant", $_GET) ? $_GET["vpc_Merchant"] : "";
$merchTxnRef = array_key_exists("vpc_MerchTxnRef", $_GET) ? $_GET["vpc_MerchTxnRef"] : "";
$authorizeID = array_key_exists("vpc_AuthorizeId", $_GET) ? $_GET["vpc_AuthorizeId"] : "";
$transactionNo = array_key_exists("vpc_TransactionNo", $_GET) ? $_GET["vpc_TransactionNo"] : "";
$acqResponseCode = array_key_exists("vpc_AcqResponseCode", $_GET) ? $_GET["vpc_AcqResponseCode"] : "";
$txnResponseCode = array_key_exists("vpc_TxnResponseCode", $_GET) ? $_GET["vpc_TxnResponseCode"] : "";
$riskOverallResult = array_key_exists("vpc_RiskOverallResult", $_GET) ? $_GET["vpc_RiskOverallResult"] : "";

$invoices = new Invoices();
$stat = 'error';

if ($txnResponseCode === '0') {
    
    if($invoices->updateStatus($orderInfo, $receiptNo)) {
        $stat = 'success';
    } else {
       $stat = 'error'; 
    }
    
} else {
    $stat = 'error';
}
Invoices::sendConfirmationMail($stat, $orderInfo, $receiptNo);
Invoices::sendConfirmationMailToHotel($stat, $orderInfo, $receiptNo);
header('Location: invoice-pay.php?id='.$orderInfo.'&pay='.$stat.'&ref='.$receiptNo);
<?php 
//----------------------CAPTCHACODE---------------------
session_start(); 
$response = array();
if ($_SESSION['CAPTCHACODE'] != $_POST['captchacode']) {
    $response['status'] = 'incorrect';
    $response['msg'] = 'Security Code is invalid';
    echo json_encode($response);
    exit();
}else{
    $response['status'] = 'correct';
    $response['msg'] = 'Security Code is correct';
    $_SESSION['NEW_CAPTCHA'] = $_POST['captchacode'];
    echo json_encode($response);
    exit();
}
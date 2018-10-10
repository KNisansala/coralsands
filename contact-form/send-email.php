<?php

//----------------------Company Information---------------------

$comany_name = "Coral Sands Hikkaduwa";
$website_name = "www.coralsandshotel.com";
$comConNumber = "+94 (0)91 2277436 | 513"; 
$comEmail = "coralsands@stmail.lk";
$from = 'info@coralsandshotel.com';
 
//----------------------CAPTCHACODE---------------------
session_start();

$response = array();
if ($_SESSION['CAPTCHACODE'] != $_POST['captchacode']) {
    $response['status'] = 'incorrect';
    $response['msg'] = 'Security Code is invalid';
    echo json_encode($response);
    exit();
} 

//----------------------Visitor Information--------------
$visitor_name = $_POST['visitor_name'];
$visitor_email = $_POST['visitor_email'];
$visitor_country = $_POST['country'];
$visitor_phone = $_POST['visitor_phone'];
$subject = 'New Website Inquiry - ' . $_POST['subject'];
$message = $_POST['message'];


date_default_timezone_set('Asia/Colombo');

$todayis = date("l, F j, Y, g:i a");

$site_link = "http://" . $_SERVER['HTTP_HOST'] . '/contact-form';

include("mail-template.php");

// mandatory headers for email message, change if you need something different in your setting.
$headers = "From: " . $from . "\r\n";
$headers .= "Reply-To: " . $visitor_email . "\r\n";
$headers .= "MIME-Version: 1.0\r\n";
$headers .= "Content-Type: text/html; charset=ISO-8859-1\r\n";


$headers2 = "From: " . $from . "\r\n";
$headers2 .= "Reply-To: " . $comEmail . "\r\n";
$headers2 .= "MIME-Version: 1.0\r\n";
$headers2 .= "Content-Type: text/html; charset=ISO-8859-1\r\n";

// Sending mail

if (
        mail($comEmail,$subject,$company_message, $headers) &&
        mail($visitor_email,$subject, $visitor_message, $headers2)) {
    $response['status'] = 'correct';
    $response['msg'] = "Your message has been sent successfully";
//"Your message has been sent successfully"
    echo json_encode($response);
    exit();
} else {
    $response['status'] = 'correct';
    $response['msg'] = "Could not be sent your message";
    echo json_encode($response);
    exit();
} 

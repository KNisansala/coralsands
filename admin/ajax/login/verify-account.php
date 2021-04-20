<?php



if (!isset($_SESSION)) {

    session_start();
}



include '../../../include.php';



$code = (string) filter_var($_POST['resetcode'], FILTER_SANITIZE_FULL_SPECIAL_CHARS);

$user = (string) filter_var($_POST['user'], FILTER_SANITIZE_FULL_SPECIAL_CHARS);

$arr = array();

if (USER::checkResetCode($user, $code)) {
    $arr['status'] = 'success';
    $_SESSION['is_verified'] = 1;
} else {
    $arr['error'] = 'reset code';
}



header('Content-Type: application/json');

echo json_encode($arr, JSON_PRETTY_PRINT);

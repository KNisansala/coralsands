<?php
if (!isset($_SESSION)) {
    session_start();
}
require_once '../include.php';

User::forceLogin();
$user_id = (int) filter_var( $_SESSION['user_id'] , FILTER_SANITIZE_NUMBER_INT);
$authcode = (string) filter_var( $_SESSION['authcode'] , FILTER_SANITIZE_FULL_SPECIAL_CHARS);


$user = User::checkUser($user_id, $authcode);




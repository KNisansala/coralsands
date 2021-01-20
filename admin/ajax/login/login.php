<?php

if (!isset($_SESSION)) {
    session_start();
}

include '../../../include.php';

$username = (string) filter_var($_POST['username'], FILTER_SANITIZE_FULL_SPECIAL_CHARS);
$password = (string) filter_var($_POST['password'], FILTER_SANITIZE_FULL_SPECIAL_CHARS);
$arr = array();

$passwordFIlteCode = explode("+", $password)[0];

if ($passwordFIlteCode === "CSHLTD") {

    $password = str_replace('CSHLTD+', '', $password);

    $user_found = User::findUser($username, true);

    if ($user_found) {

        $user_id = (int) $user_found['id'];
        $hash = (string) $user_found['password'];

        if (password_verify($password, $hash)) {

            $authcode = User::random_str();

            if (User::setAuth($user_id, $authcode) === TRUE) {

                $_SESSION['user_id'] = $user_id;
                $_SESSION['authcode'] = $authcode;
                $arr['status'] = 'success';
            } else {
                $arr['error'] = 'Authorization';
            }
        } else {
            $arr['error'] = 'Password';
        }
    } else {
        $arr['error'] = 'Username';
    }
}

header('Content-Type: application/json');
echo json_encode($arr, JSON_PRETTY_PRINT);

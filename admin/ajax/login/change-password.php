<?php

include '../../../include.php';

$oldpass = (string) $_POST['oldpass'];
$newpass = (string) $_POST['newpass'];
$confirmpass = (string) $_POST['confirmpass'];
$id = $_POST['id'];
$arr = array();

$user_found = User::checkById($id, TRUE);

if ($user_found) {

    $hash = (string) $user_found['password'];

    if (password_verify($oldpass, $hash)) {

        if ($newpass === $confirmpass) {

            $hashed = password_hash($newpass, PASSWORD_DEFAULT);
            
            if (User::updatePassword($id, $hashed) === TRUE) {
                $arr['success'] = TRUE;
            } else {
                $arr['success'] = FALSE;
            }
        } else {
            $arr['error'] = 'match';
        }
    } else {
        $arr['error'] = 'password';
    }
} else {
    $arr['error'] = 'user';
}

header('Content-Type: application/json');
echo json_encode($arr, JSON_PRETTY_PRINT);

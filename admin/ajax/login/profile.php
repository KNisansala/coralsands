<?php

include '../../../include.php';

$username = (string) filter_var($_POST['username'], FILTER_SANITIZE_FULL_SPECIAL_CHARS);
$name = (string) filter_var($_POST['name'], FILTER_SANITIZE_FULL_SPECIAL_CHARS);
$password = $_POST['password'];
$id = $_POST['id'];
$arr = array();

$user_found = User::checkById($id, TRUE);

if($user_found) {
    
    $hash = (string) $user_found['password'];
    
    if (password_verify($password, $hash)) {
        
        if(User::updateProfile($id, $name, $username) === TRUE) {
            $arr['success'] = TRUE;
        } else {
            $arr['success'] = FALSE;
        }
        
    } else {
        $arr['error'] = 'Password';
    }
} else {
    $arr['error'] = 'User';
}

header('Content-Type: application/json');
echo json_encode($arr, JSON_PRETTY_PRINT);

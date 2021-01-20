<?php

include '../../include.php';

if (isset($_POST['login'])) {
    
    $user = new User();

    $ifEx = $user->isUser($_POST);
    
    if((!$_POST['username'] && !$_POST['password']) || !$_POST['username'] || !$_POST['password']) {
        $data['status'] = 'empty';
    } else if ($ifEx) {
        $data['status'] = 'wrong';
    } else {
        $detail = $user->getUser();

        session_start();

        $_SESSION['coralsand'] = TRUE;
        $_SESSION['name'] = $detail['name'];
        $_SESSION['username'] = $detail['username'];
        $_SESSION['password'] = $detail['password'];

        $data['status'] = 'ok';
    }

    header('Content-type: application/json');
    echo json_encode($data);
    exit();
}


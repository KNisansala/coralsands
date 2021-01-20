<?php

include '../../include.php';

if (isset($_POST['edit'])) {

    $user = new User();

    $data = array();

    $newpassword = $_POST['newpassword'];
    $comfirmpass = $_POST['comfirmpass'];

    $isEx = $user->isExists($_POST);

    if (!$_POST['name'] || !$_POST['username'] || !$_POST['oldpassword'] || !$_POST['newpassword'] || !$_POST['comfirmpass']) {
        $data['status'] = 'empty';
    } else if($isEx == FALSE){
        $data['status'] = 'old';
    } else if ($newpassword != $comfirmpass) {
        $data['status'] = 'wrong';
    } else if($isEx && ($newpassword == $comfirmpass)) {
        $edit = $user->edit($_POST, $comfirmpass);
        $data['status'] = 'ok';
        
    }

    header('Content-type: application/json');
    echo json_encode($data);
    exit();
}
?>


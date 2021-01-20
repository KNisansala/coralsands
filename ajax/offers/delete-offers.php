<?php

include '../../include.php';

if (isset($_POST['Offers'])) {

    $OFFER = new Offers();
    $result = $OFFER->deleteById($_POST['id']);
    
    $arr = array();
    if($result) {
        $arr['status'] = 'success';
    } else {
        $arr['status'] = 'error';
    }

    header('Content-type: application/json');
    echo json_encode($arr);
    exit();
}


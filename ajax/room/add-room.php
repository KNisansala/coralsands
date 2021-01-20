<?php

include '../../include.php';

if (isset($_POST['addRoom'])) {

    $room = new Room();

    $data = array();

    $ifEx = $room->isExists($_POST);
    if(($_POST['roomNum']) == '') {
        
        $data['status'] = 'empty';
        $data['roomNum'] = FALSE;
        $data['lastId'] = FALSE;
        
    } else if ($ifEx) {

        $data['status'] = 'exists';
        $data['roomNum'] = FALSE;
        $data['lastId'] = FALSE;
    } else {

        $result = $room->add($_POST);
        $lastId = mysql_insert_id();

        $data['roomNum'] = $_POST['roomNum'];
        $data['lastId'] = $lastId;
        $data['status'] = 'success';
    }

    header('Content-type: application/json');
    echo json_encode($data);
    exit();
}


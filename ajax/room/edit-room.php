<?php 
include '../../include.php';

if (isset($_POST['editRoom'])) {
    
    $room = new Room();
    
    $data = array();
    
    $ifEx = $room->isExists($_POST);
    
    if($ifEx){
        $data['status'] = 'exists';
        $data['roomNum'] = FALSE;
        $data['lastId'] = FALSE;
    
    }  else {
        $data = $room->edit($_POST); 
    }
    
    header('Content-type: application/json');
    echo json_encode($data);
    exit();
}
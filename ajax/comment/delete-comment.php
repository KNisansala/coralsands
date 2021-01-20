<?php

include '../../include.php';

if(isset($_POST['Comment'])){
    
    $comment = new GuestComments();
    
    $commentbyid = $comment->getById($_POST['Id']);
    
    $delete = $comment->deleteCommentById($_POST);
    
    if($delete){
        unlink('../../images/comment/' . $commentbyid['image_name']);
    }
    
    header('Content-type: application/json');
    echo json_encode(['status' => $delete]);
    exit();
}


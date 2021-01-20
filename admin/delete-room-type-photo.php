<?php
require_once './php-header.php';

$id = $_GET['id'];

$photo = RoomPhoto::getRoomPhotoById($id);
$image = $photo['image_name'];

if (r) {
    $file1 = '../images/room-type/photo/' . $image;
    $file2 = '../images/room-type/photo/thumb/' . $image;

    unlink($file1);
    unlink($file2);

    RoomPhoto::deleteRoomPhotoById($id);
    
    header('Location: ' . $_SERVER['HTTP_REFERER']);
} 
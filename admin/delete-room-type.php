<?php
require_once './php-header.php';

$id = $_GET['id'];

$mainImage = RoomType::getAllRoomTypeById($id);
$image = $mainImage['main_photo'];

$roomPhotos = RoomPhoto::getRoomPhotosByRoomTypeId($id);

if (r) {
    $file1 = '../images/room-type/' . $image;
    $file2 = '../images/room-type/thumb/' . $image;

    unlink($file1);
    unlink($file2);

    foreach ($roomPhotos as $roomPhoto) {
        unlink('../images/room-type/photo/' . $roomPhoto['image_name']);
        unlink('../images/room-type/photo/thumb/' . $roomPhoto['image_name']);
    }


    RoomType::deleteRoomTypeById($id);
    RoomPhoto::deleteRoomPhotoByRoomTypeId($id);

    header('location: manage-room-types.php');
} 



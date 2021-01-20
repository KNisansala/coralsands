<?php

require_once '../../../include.php';

$date = $_POST['date'];
$type = $_POST['type'];
$availablenow = (int) $_POST['availablenow'];
$newrooms = (int) $_POST['newrooms'];

$setAv = $availablenow - $newrooms;

//if ($availablenow > $newrooms) {

$arr = array();
$subTypes = RoomType::getSubTypesByMain($type);

$a = 0;
foreach ($subTypes as $subType) {
    if (BookedRooms::getSubBookedArrayByDate($date, $subType['id'])) {
        $a = 1;
    }
}
$stat = 0;
if ($a === 1) {
    foreach ($subTypes as $subType) {
        if (BookedRooms::getByDateAndRoomType($date, $subType['id'])) { 
            if (BookedRooms::updateAvailable($subType['id'], $date, $setAv) === TRUE) {
                $stat = 1;
            } else {
                $stat = 0;
            }
        }
    }
} else {
    foreach ($subTypes as $subType) {
        if (BookedRooms::setAvailable($subType['id'], $date, $setAv) === TRUE) {
            $stat = 1;
        } else {
            $stat = 0;
        }
        break;
    }
}

$arr['success'] = $stat;

//} else {
//    $arr['error'] = 1;
//}

header('Content-Type: application/json');
echo json_encode($arr, JSON_PRETTY_PRINT);




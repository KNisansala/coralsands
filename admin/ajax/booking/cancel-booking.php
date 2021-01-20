<?php

include '../../../include.php';

$id = $_POST['id'];
$checkin = $_POST['checkin'];
$checkout = $_POST['checkout'];

$BOOKING = new Booking($id);
$status = '2';
$result = $BOOKING->updateResponse($id, $status);


if ($result) {
    $dates = BookedRooms::createDateRange($checkin, $checkout, $format = "Y-m-d");

    $roomtypes = BookingRoomDetails::getRoomTypesByBookingID($id);

    foreach ($roomtypes as $roomtype) {
        $type = $roomtype['room_type'];
        $rooms = BookingRoomDetails::getCount($id, $type);
        $countrooms = count($rooms);

        foreach ($dates as $date) {
            $result = BookedRooms::getByDateAndRoomType($date, $type);
            $id1 = $result['id'];
            $bookedrooms = $result['booked_rooms'];
            $newrooms = $bookedrooms - $countrooms;
            
            $res = BookedRooms::update($id1, $newrooms);
        }
    }
    $arr = array();
    if($res) {
        $arr['id'] = $id;
        $arr['status'] = 'success';
    } else {
        $arr['status'] = 'error';
    }
    
}

header('Content-Type: application/json');
echo json_encode($arr, JSON_PRETTY_PRINT);


    
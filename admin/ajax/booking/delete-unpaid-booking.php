<?php

include '../../../include.php';


$id = $_POST['id'];
$checkin = $_POST['checkin'];
$checkout = $_POST['checkout'];

$BOOKING = new Booking($id);

$result = $BOOKING->delete();
$arr = array();

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

            $result2 = BookedRooms::update($id1, $newrooms);
        }
    }

    if ($result2) {
        $result3 = BookingRoomDetails::deleteByBookingID($id);

        if ($result3) {
            $arr['id'] = $id;
            $arr['status'] = 'success';
        } else {
            $arr['id'] = $id;
            $arr['status'] = 'error';
        }
    } else {
        $arr['status'] = 'error';
    }
} else {
    $arr['status'] = 'error';
}

header('Content-Type: application/json');
echo json_encode($arr, JSON_PRETTY_PRINT);






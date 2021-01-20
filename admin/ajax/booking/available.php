<?php
//ini_set('display_errors', 1);
//ini_set('display_startup_errors', 1);
//error_reporting(E_ALL);
error_reporting(0);
include '../../../include.php';

if (isset($_POST['actionCurrentMonth'])) {

    $start = $_POST["startdate"];
    $roomtype = $_POST["type"];
    $day = $_POST["days"];
   
    $result = BookedRooms::getByDateAndRoomType($start, $roomtype);
    
    $bookedrooms = $result['booked_rooms'];

    $res = RoomType::getAllRoomTypeById($roomtype);
    $rooms = $res['num_of_room'];

    $availablerooms = $rooms - $bookedrooms;

    $arr = array();

    $arr['day'] = $day;
    $arr['rooms'] = $availablerooms;

    header('Content-type: application/json');
    echo json_encode($arr); 
    exit(); 
}

if (isset($_POST['actionNext'])) {

    $oldyear = $_POST["year"];
    $oldmonth = $_POST["month"];
    $roomtype = $_POST["type"];


    if ($oldmonth == 12) {
        $month = 01;
        $year = $oldyear + 1;
    } else {
        $month = $oldmonth + 1;
        $year = $oldyear;
    }

    $arr = array();

    $arr['newmonth'] = $month;
    $arr['newyear'] = $year;
    $arr['roomtype'] = $roomtype;

    header('Content-type: application/json');
    echo json_encode($arr);
    exit();
}

if (isset($_POST['actionPrev'])) {

    $oldyear = $_POST["year"];
    $oldmonth = $_POST["month"];
    $roomtype = $_POST["type"];


    if ($oldmonth == 01) {
        $month = 12;
        $year = $oldyear - 1;
    } else {
        $month = $oldmonth - 1;
        $year = $oldyear;
    }

    $arr = array();

    $arr['newmonth'] = $month;
    $arr['newyear'] = $year;
    $arr['roomtype'] = $roomtype;

    header('Content-type: application/json');
    echo json_encode($arr);
    exit();
}

if (isset($_POST['actionInsertRooms'])) {

    $date = $_POST["startdate"];
    $roomtype = $_POST["type"];
    $availablerooms = $_POST["noofrooms"];

    $rooms = RoomType::getAllRoomTypeById($roomtype);
    $noofrooms = $rooms['num_of_room'];

    $result = BookedRooms::getByDateAndRoomType($date, $roomtype);

    if ($result) {
        $id = $result['id'];
        $old = $result['booked_rooms'];

        $bookedrooms = $noofrooms - $availablerooms;

        $res = BookedRooms::update($id, $bookedrooms);
    } else {
        $bookedrooms = $noofrooms - $availablerooms;

        $res = BookedRooms::create($date, $bookedrooms, $roomtype);
    }


    header('Content-type: application/json');
    echo json_encode($res);
    exit();
}

if (isset($_POST['actionGetNoOfRooms'])) {

    $roomtype = $_POST["type"];

    $rooms = RoomType::getAllRoomTypeById($roomtype);
    $noofrooms = $rooms['num_of_room'];

    header('Content-type: application/json');
    echo json_encode($noofrooms);
    exit();
}

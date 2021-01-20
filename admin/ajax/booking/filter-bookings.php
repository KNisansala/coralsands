<?php

include '../../../include.php';

if (isset($_POST['actionGetCount'])) {

    $date1 = $_POST['date1'];
    $date2 = $_POST['date2'];
    $type = $_POST['type'];

    if ($type === '0') {
        $field = 'check_in';
    } else {
        $field = 'check_out';
    }
    $dates = BookedRooms::createDateRange($date1, $date2, $format = "Y-m-d");

    $arr = array();
    $totbookings = array();
    $counter = 0;
    foreach ($dates as $date) {

        $bookings = Booking::filterBookings($field, $date);
        array_push($totbookings, $bookings);
        
        $countbookings = Booking::countFilterBookings($field, $date);
        $counter = $counter + (int) $countbookings;
    }

    $lastdaybookings = Booking::filterBookings($field, $date2);
    array_push($totbookings, $lastdaybookings);
    
    $lastdaycountbookings = Booking::countFilterBookings($field, $date2);
    $finalcounter = $counter + $lastdaycountbookings;
    

    
    $arr['details'] = $totbookings;
    $arr['count'] = $finalcounter;
    $arr['date1'] = $date1;
    $arr['date2'] = $date2;
    
    echo json_encode($arr);
    header('Content-type: application/json');

}
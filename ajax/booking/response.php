<?php

if (isset($_POST['actionUpdate'])) {

    $id = $_POST["bookingid"];
    $code = $_POST["responsecode"];

    if ($code == '0') {
        $status = "1";
        $BOOKING = new Booking();
        $result = $BOOKING->updateResponse($status, $id);
    } else {
        $status = "5";
        $BOOKING = new Booking();
        $result = $BOOKING->updateResponse($status, $id);
    }

    header('Content-type: application/json');
    echo json_encode($result);
    exit();
}

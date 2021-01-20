<?php

//ini_set('display_errors', 1);
//ini_set('display_startup_errors', 1);
//error_reporting(E_ALL);
error_reporting(0);
include '../../include.php';

if (!isset($_SESSION)) {
    session_start();
}

if (isset($_POST['actionAddBooking'])) {

    header('Content-Type: application/json');

    $code = $_POST["captchacode"];
    $date = $_POST["bookingdate"];
    $name = $_POST["cname"];
    $country = $_POST["ccountry"];
    $email = $_POST["cemail"];
    $contact = $_POST["ccontact"];
    $checkin = date("Y-m-d", strtotime($_POST["checkindate"]));
    $checkout = date("Y-m-d", strtotime($_POST["checkoutdate"]));
    $message = $_POST["msg"];
    $total = $_POST["totalprice"];
    $advance = $_POST["advanceprice"];
    $roomtypes = $_POST['roomtypes'];
    $bookedrooms = $_POST['bookedrooms'];
    $errResponse = array();
    $err = FALSE;

    if ($_SESSION['CAPTCHACODE'] == $code) {

        $result = Booking::create($date, $name, $country, $email, $contact, $checkin, $checkout, $message, $total, $advance);

        if ($result) {

            $Booking = new Booking($result);

            $id = $Booking->id;
            $price = $Booking->advance;

            if (is_array($roomtypes) || is_object($roomtypes)) {

                foreach ($roomtypes as $roomtype) {
                    $type = $roomtype[0];
                    $basis = $roomtype[1];
                    $roomprice = $roomtype[2];
                    $ebprice = $roomtype[3];
                    $extrabeds = $roomtype[4];
                    $adults = $roomtype[5];
                    $children = $roomtype[6];
                    $childrenun5 = $roomtype[7];
                    $ages = $roomtype[8];

                    $result2 = BookingRoomDetails::create($id, $type, $basis, $roomprice, $ebprice, $extrabeds, $adults, $children, $childrenun5, $ages);
                }

                if (is_array($bookedrooms) || is_object($bookedrooms)) {
                    foreach ($bookedrooms as $bookedroom) {
                        $type = $bookedroom[0];
                        $noofrooms = $bookedroom[1];

                        $dates = BookedRooms::createDateRange($checkin, $checkout, $format = "Y-m-d");

                        foreach ($dates as $date) {

                            $bookingdate = BookedRooms::getByDateAndRoomType($date, $type);

                            if ($bookingdate) {
                                $rid = $bookingdate['id'];
                                $old = $bookingdate['booked_rooms'];

                                $newrooms = $old + $noofrooms;

                                $res = BookedRooms::update($rid, $newrooms);
                            } else {
                                $res = BookedRooms::create($date, $noofrooms, $type);
                            }
                        }
                    }
                } else {
                    $err = TRUE;
                }
            } else {
                $err = TRUE;
            }

            if ($err) {
                $errResponse['error'] = 2;
                echo json_encode($errResponse);
            } else {
                $arr = array();
                $arr['status'] = "Success";
                $arr['bookingid'] = $id;
                $arr['advanceprice'] = $price;
                echo json_encode($arr);
            }
        } else {
            $errResponse['error'] = 2;
            echo json_encode($errResponse);
        }
    } else {
        $errResponse['error'] = 1;
        echo json_encode($errResponse);
    }
}
 
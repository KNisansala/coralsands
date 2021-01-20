<?php

include '/../../include.php';

if (!isset($_SESSION)) {
    session_start();
}

if (isset($_POST['actionAddBooking'])) {

//    header('Content-Type: application/json');

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
    $roomtypes = $_POST['roomtypes'];
    $bookedrooms = $_POST['bookedrooms'];
    $errResponse = array();
    $err = FALSE;

    if ($code) {

        $result = Booking::create($date, $name, $country, $email, $contact, $checkin, $checkout, $message, $total);

        if ($result) {

            $Booking = new Booking($result);

            $id = $Booking->id;
            $price = $Booking->total;

            if (is_array($roomtypes) || is_object($roomtypes)) {

                foreach ($roomtypes as $roomtype) {
                    $type = $roomtype[0];
                    $basis = $roomtype[1];
                    $roomprice = $roomtype[2];
                    $ebprice = $roomtype[3];
                    $extrabeds = $roomtype[4];
                    $adults = $roomtype[5];
                    $children = $roomtype[6];
                    $ages = $roomtype[7];

                    $result2 = BookingRoomDetails::create($id, $type, $basis, $roomprice, $ebprice, $extrabeds, $adults, $children, $ages);
                }

                if (is_array($bookedrooms) || is_object($bookedrooms)) {
                    foreach ($bookedrooms as $bookedroom) {
                        $type = $bookedroom[0];
                        $noofrooms = $bookedroom[1];

                        $dates = BookedRooms::createDateRange($checkin, $checkout, $format = "Y-m-d");

                        foreach ($dates as $date) {

                            $bookingdate = BookedRooms::getByDateAndRoomType($date, $type);

                            if ($bookingdate) {
                                $id = $bookingdate['id'];
                                $old = $bookingdate['booked_rooms'];

                                $newrooms = $old + $noofrooms;

                                $res = BookedRooms::update($id, $newrooms);
                            } else {
                                $res = BookedRooms::create($date, $noofrooms, $type);
                            }
                        }
                    }
                } else {
                    $err = TRUE;
                    echo 'ssssss';
                }
            } else {
                $err = TRUE;
                echo 'dddddd';
            }

            if ($err) {
                $errResponse['error'] = 2;
                echo $errResponse['error'];
            } else {
                $arr = array();
               echo $arr['status'] = "Success";
                echo $arr['bookingid'] = $id;
                echo $arr['totalprice'] = $price;
//                echo json_encode($arr);
            }
        } else {
            $errResponse['error'] = 2;
            echo $errResponse['error'];
        }
    } else {
        $errResponse['error'] = 1;
        echo $errResponse['error'];
    }
}
 
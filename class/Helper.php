<?php

//ini_set('display_errors', 1);
//ini_set('display_startup_errors', 1);
//error_reporting(E_ALL);
//error_reporting(0);

class Helper
{

    function draw_calendar($month, $year, $roomtype)
    {

        /* draw table */
        $calendar = '<table cellpadding="0" cellspacing="0" class="calendar">';

        /* table headings */
        $headings = array('Sunday', 'Monday', 'Tuesday', 'Wednesday', 'Thursday', 'Friday', 'Saturday');
        $calendar .= '<tr class="calendar-row"><td class="calendar-day-head">' . implode('</td><td class="calendar-day-head">', $headings) . '</td></tr>';

        /* days and weeks vars now ... */
        $running_day = date('w', mktime(0, 0, 0, $month, 1, $year));
        $days_in_month = date('t', mktime(0, 0, 0, $month, 1, $year));
        $days_in_this_week = 1;
        $day_counter = 0;
        $dates_array = array();

        /* row for week one */
        $calendar .= '<tr class="calendar-row">';

        /* print "blank" days until the first of the current week */
        for ($x = 0; $x < $running_day; $x++) :
            $calendar .= '<td class="calendar-day-np"> </td>';
            $days_in_this_week++;
        endfor;

        $bookedroomsobj = new BookedRooms(null);

        /* keep going with days.... */
        for ($list_day = 1; $list_day <= $days_in_month; $list_day++) :

            $thisDate = $year . '-' . $month . '-' . $list_day;
            $showAvailable = $bookedroomsobj->getMainAvailableForDateById($thisDate, $roomtype);

            $calendar .= '<td class="calendar-day">';
            /* add in the day number */
            $calendar .= '<div>';
            $calendar .= $list_day;

            $calendar .= '<div class="row">';
            $calendar .= '<div class="col-md-6">';
            $calendar .= 'Available Rooms';
            $calendar .= '</div>';
            $calendar .= '<div class="col-md-6">';
            $calendar .= '<input type="text" value="' . $showAvailable . '" class="roomtype" id="roomtype_' . $list_day . '" available="' . $showAvailable . '" day="' . $list_day . '" roomid="' . $roomtype . '">';
            $calendar .= '</div>';
            $calendar .= '</div>';

            $calendar .= '<input type="hidden" available="' . $showAvailable . '" year="' . $year . '" month="' . $month . '" day="' . $list_day . '" days-in-month=" ' . $days_in_month . ' " class="date new-date">';

            $calendar .= '</div>';

            /** QUERY THE DATABASE FOR AN ENTRY FOR THIS DAY !!  IF MATCHES FOUND, PRINT THEM !! * */
            $calendar .= str_repeat('<p> </p>', 2);

            $calendar .= '</td>';
            if ($running_day == 6) :
                $calendar .= '</tr>';
                if (($day_counter + 1) != $days_in_month) :
                    $calendar .= '<tr class="calendar-row">';
                endif;
                $running_day = -1;
                $days_in_this_week = 0;
            endif;
            $days_in_this_week++;
            $running_day++;
            $day_counter++;
        endfor;

        /* finish the rest of the days in the week */
        if ($days_in_this_week < 8) :
            for ($x = 1; $x <= (8 - $days_in_this_week); $x++) :
                $calendar .= '<td class="calendar-day-np"> </td>';
            endfor;
        endif;

        /* final row */
        $calendar .= '</tr>';

        /* end the table */
        $calendar .= '</table>';


        /* all done, return result */
        return $calendar;
    }

    public static function sendrepayEmail($bookingid)
    {

        if (is_numeric($bookingid)) {
            $BOOKING = new Booking($bookingid);
            if ($BOOKING->status == 0) {
                $email = $BOOKING->email;

                //----------------------Company Information---------------------

                $from = 'info@coralsandshotel.com';
                $reply = 'info@coralsandshotel.com';

                $subject = 'Coralsands Hotel - Repay Payment';
                $site = 'coralsandshotel.com';

                // mandatory headers for email message, change if you need something different in your setting.
                $headers = "From: " . $from . "\r\n";
                $headers .= "Reply-To: " . $reply . "\r\n";
                $headers .= "MIME-Version: 1.0\r\n";
                $headers .= "Content-Type: text/html; charset=ISO-8859-1\r\n";

                $html = '<!DOCTYPE html>
                    <html>
                        <head>
                            <title>' . "Coralsands Hotel - Repay Payment" . '</title>
                            <style type="text/css">
                                table {
                                    border: 1px solid #d0d0d0;
                                }
                                th {
                                    border-bottom: 1px solid #d0d0d0;
                                    padding: 15px 10px 10px 25px;
                                    text-align: left;
                                    margin: 0px;
                                }
                                td {
                                    padding: 10px 10px 5px 10px;
                                    text-align: left;
                                    margin: 0px;
                                }
                                ul {
                                    font-size: 18px;
                                    list-style-type: square;
                                    margin: 0px 20px 30px 10%;
                                }
                                li {
                                    padding: 5px;
                                }
                                img {
                                    width: 120px;
                                    margin: 0px auto;
                                }
                                .bdr {
                                    border-left: 1px solid #d0d0d0;
                                }
                                .bdr-top {
                                    border-top: 1px solid #d0d0d0;
                                }
                                .bb {
                                    font-weight: bold;
                                }
                                .right {
                                    text-align: right;
                                }
                                @media (max-width: 450px) {
                                    ul { font-size: 14px; }
                                    td { font-size: 12px; }
                                }
                            </style>
                        </head>
                        <body>
                            <div style="width: 100%; text-align: center; font-size: 20px; margin: 10px 0px 30px 0px;">
                                <!--            <b style="font-size: 25px; text-decoration: underline;">Coral Sands Hotel</b><br/>-->
                                <img src="http://' . $site . '/images/logo/logo.png" alt="Coral Sands"/><br/>
                                <span><a href="" style="text-decoration:none;color: #000;">No.326, Galle Rd, Hikkaduwa, Sri Lanka</a></span><br/>
                                <span>Email: coralsands@stmail&#173;.lk</span><br/>
                                <span>Phone: +94 91 227 7513 / +94 91 227 7436</span>
                            </div>
                            <ul>
                                <li><span class="bb">Customer Name : </span>' . $BOOKING->name . '<span></span></li>
                                <li><span class="bb">Date of Booking : </span>' . $BOOKING->date . '<span></span></li>
                                <li><span class="bb">Check In : </span>' . $BOOKING->checkin . '<span></span></li>
                                <li><span class="bb">Check Out : </span><span>' . $BOOKING->checkout . '</span></li>
                                <li><span class="bb">Total Amount : </span><span> US $ ' . $BOOKING->total . '</span></li>
                                <li><span class="bb">Advance Payment : </span><span> US $ ' . $BOOKING->advance . '</span></li>
                            </ul>
                            
                            <h3 style="font-size:15px; margin-left:200px;">Your transaction was <strong>NOT</strong> successful. Please  follow the payment proceed again and confirm the booking</h3>
                            
                            <div style="text-align: center; margin: 35px 0px;">
                                <a href="http://coralsandshotel.com/repay_payment.php?id=' . $bookingid . '"><button style="padding: 15px; font-weight: bold; text-decoration: none; background-color: #ff4200; color: #dfdfdf; border-radius: 3px;">Complete Payment</a>
                            </div>
                        </body>
                    </html>';


                // Sending mail

                if (mail($email, $subject, $html, $headers)) {
                    return TRUE;
                } else {
                    return FALSE;
                }
            } else {
                return FALSE;
            }
        } else {
            return FALSE;
        }
    }

    public static function sendConfirmationEmail($bookingid, $receiptNo)
    {
        if (is_numeric($bookingid)) {
            //----------------------Company Information---------------------

            $from = 'info@coralsandshotel.com';
            $reply = 'coralsands@stmail.lk';

            $subject = "Booking Confirmation | Coral Sands Hotel - Hikkaduwa | #1001" . $bookingid . "";
            $site = 'coralsandshotel.com';

            // mandatory headers for email message, change if you need something different in your setting.
            $headers = "From: " . $from . "\r\n";
            $headers .= "Reply-To: " . $reply . "\r\n";
            $headers .= "MIME-Version: 1.0\r\n";
            $headers .= "Content-Type: text/html; charset=ISO-8859-1\r\n";

            $BOOKING = new Booking($bookingid);
            $email = $BOOKING->email;

            $settings = new Settings();
            $percentage = $settings->getPercentage();

            /* ---- No of Nights  ---- */
            $dates = BookedRooms::createDateRange($BOOKING->checkin, $BOOKING->checkout, $format = "Y-m-d");
            $nights = count($dates);
            /* ---- No of Nights  ---- */

            $rooms = BookingRoomDetails::getRoomTypeDetailsByID($bookingid);
            $totChilSup = 0;
            foreach ($rooms as $room) {
                if ($room['no_of_children']) {
                    $children = (int) $room['no_of_children'];

                    $type = RoomType::getAllRoomTypeById($room['room_type']);
                    $Sup = (float) $type['children_supplement'];

                    $ChildSup = $children * $Sup;

                    $totChilSup = $totChilSup + $ChildSup;
                }
            }

            /* ---- total room price ---- */
            $totRoomPrice = 0;
            foreach ($rooms as $room) {
                $roomprice = (int) $room['room_price'];

                $totRoomPrice = $totRoomPrice + $roomprice;
            }
            /* ---- //total room price ---- */

            /* ---- total extra bed price  ---- */
            $totEBPrice = 0;
            foreach ($rooms as $room) {
                if ($room['no_of_extra_beds']) {
                    $ebprice = (int) $room['no_of_extra_beds'] * (float) $room['extra_bed_price'];

                    $totEBPrice = $totEBPrice + $ebprice;
                }
            }
            /* ---- //total extra bed price ---- */

            /* ---- total price  ---- */
            $totPrice = ($totRoomPrice * $nights) + ($totChilSup * $nights) + ($totEBPrice * $nights);
            /* ---- //total price ---- */

            /* ---- payable amount  ---- */
            $paidamount = (float) $BOOKING->advance;
            $payableamount = $totPrice - $paidamount;
            /* ---- //payable amount  ---- */



            $tr = '';
            foreach ($rooms as $key => $room) {
                $roomtype = RoomType::getAllRoomTypeById($room["room_type"]);
                $roombasis = RoomBasis::getRoomBasisById($room['room_basis']);
                if (!empty($room['no_of_extra_beds'])) {
                    $eb = $room['no_of_extra_beds'];
                } else {
                    $eb = 0;
                }
                if ($room['children_ages']) {
                    $ages = $room['children_ages'];
                } else {
                    $ages = 0;
                }
                $key++;
                $tr1 = '<tr>
                        <td class="table-td1"><b>Room ' . $key . '</b> <br/>Occupants: ' . $room['no_of_adults'] . '<br/>Additional Children  (5 - 11+ Years): ' . $room['no_of_children'] . '<br/>Under 5 Years (No Charge): ' . $room['no_of_children_un_5'] . '</td>
                        <td class="table-td1">' . $roomtype["room_type"] . '</td>
                        <td class="table-td1">' . $roombasis['name'] . '</td> 
                         <td class="table-td1">' . $room['room_price'] . '</td>
                    </tr>';


                $tr = $tr . $tr1;
            }

            if ($BOOKING->message) {
                $specialrequest = ' <tr>
                                    <td colspan="2"><strong><u>Special request</u></strong></td>
                                </tr>
                                <tr>
                                    <td colspan="2">' . $BOOKING->message . '</td>
                                </tr>';
            }

            $html = '<!DOCTYPE html>
                    <html>
                        <head>
                            <title>' . "Coralsands Hotel - Repay Payment" . '</title>
                            <style type="text/css">
                                table {
                                    border: 1px solid #d0d0d0;
                                }
                                th {
                                    border-bottom: 1px solid #d0d0d0;
                                    padding: 15px 10px 10px 25px;
                                    text-align: left;
                                    margin: 0px;
                                }
                                td {
                                    padding: 10px 10px 5px 10px;
                                    text-align: left;
                                    margin: 0px;
                                }
                                ul {
                                    list-style-type: square;
                                    margin: 0px 20px 30px 200px;
                                }
                                li {
                                    padding: 5px;
                                }
                                img {
                                    width: 120px;
                                    margin: 0px auto;
                                }
                                .bdr {
                                    border-left: 1px solid #d0d0d0;
                                }
                                .bdr-top {
                                    border-top: 1px solid #d0d0d0;
                                }
                                .bb {
                                    font-weight: bold;
                                }
                                .right {
                                    text-align: right;
                                }
                                .table {
                                    margin-left:150px;
                                }
                                .topic {
                                    font-size:22px;
                                    text-align:center;
                                    color:#E7AB14;
                                }
                                .sal {
                                    margin-left:100px;
                                }
                                .desc {
                                    margin-left:150px;
                                    text-align:justify;
                                    margin-right:100px;
                                }
                                .bor {
                                    border:1px solid #000;
                                }
                                .booking-details {
                                    margin-left:150px;
                                    border: none !important;
                                    margin-right:100px;
                                }
                                .footer{
                                    width:100%;
                                    margin-top: 20px;
                                    background-color:#E7AB14;
                                    color: #fff;
                                    padding-top:20px;
                                    padding-bottom:30px;
                                }
                                .footer-tr {
                                    font-size: 15px;
                                    line-height: 2px;
                                }
                                .footer-td1 {
                                    width: 150px;
                                }
                                .footer-td2 {
                                    width: 35%;
                                }
                                @media (max-width: 480px) {
                                    ul { font-size: 14px; }
                                    td { font-size: 12px; }
                                    .table {margin-left:0px;}
                                    .desc {margin-left:20px; text-align:justify; margin-right:10px;}
                                    .sal {margin-left:10px;}
                                    .booking-details {margin-left:10px; border: none !important; margin-right:10px;}
                                    ul {list-style-type: square; margin: 0px 20px 30px 10px;}
                                    .footer-tr {font-size: 15px; line-height: 15px;}
                                    .footer-td1 { width: 0px;}
                                    .footer-td2 {width: 50%;}
                                    .table-td1 {width: 20%;}
                                }
                                
                            </style>
                        </head>
                        <body class="bor">
                            <div style="width: 100%; text-align: center; font-size: 20px; margin: 10px 0px 30px 0px;">
                                <!--            <b style="font-size: 25px; text-decoration: underline;">Coral Sands Hotel</b><br/>-->
                                <img src="http://' . $site . '/images/logo/logo.png" alt="Coral Sands"/><br/>
                                <span><a href="" style="text-decoration:none;color: #000;">No.326, Galle Rd, Hikkaduwa, Sri Lanka</a></span><br/>
                                <span>Email: coralsands@stmail&#173;.lk</span><br/>
                                <span>Phone: +94 91 227 7513 / +94 91 227 7436</span>
                            </div>
                            <h2 class="topic">Booking Confirmation | Coral Sands Hotel - Hikkaduwa | #1001' . $bookingid . '</h2>
                            <h4 class="sal"><strong>Dear ' . $BOOKING->name . '</strong></h4>
                            <div class="desc">
                                <p>Thank you for making an online booking with Coral Sands Hotel. Your booking reference is :  #1001' . $bookingid . ' Your booking is subject to the terms & conditions listed on the website. </p>
                                <p>The holder of the Credit Card used to make the booking should be present at the time of check-in.</p>
                            </div>
                            
                            <table class="booking-details">
                                <tr>
                                    <td><strong>Booking Reference No.</strong></td>
                                    <td><strong>:  #1001' . $bookingid . '</strong></td>
                                </tr>
                                <tr>
                                    <td><strong>Payment Reference No.</strong></td>
                                    <td><strong>: ' . $receiptNo . '</strong></td>
                                </tr>
                                <tr>
                                    <td><strong>Reservation Date</strong></td>
                                    <td><strong>: ' . $BOOKING->date . '</strong></td>
                                </tr>
                                <tr>
                                    <td></td>
                                    <td></td>
                                </tr>
                                <tr>
                                    <td colspan="2"><strong><u>Customer Details</u></strong></td>
                                </tr>
                                <tr>
                                    <td>Customer name</td>
                                    <td>: ' . $BOOKING->name . '</td>
                                </tr>
                                <tr>
                                    <td>Country</td>
                                    <td>: ' . $BOOKING->country . '</td>
                                </tr>
                                <tr>
                                    <td>Email</td>
                                    <td>: ' . $BOOKING->email . '</td>
                                </tr>
                                <tr>
                                    <td>Mobile Number</td>
                                    <td>: ' . $BOOKING->contact . '</td>
                                </tr>
                                <tr>
                                    <td></td>
                                    <td></td>
                                </tr>
                                <tr>
                                    <td colspan="2"><strong><u>Accommodation Details</u></strong></td>
                                </tr>
                                <tr>
                                    <td>Hotel name</td>
                                    <td>: Coral Sands Hotel</td>
                                </tr>
                                <tr>
                                    <td>Hotel Address</td>
                                    <td>: <a href="" style="text-decoration:none;color: #000;">No.326, Galle Rd, Hikkaduwa, Sri Lanka</a></td>
                                </tr>
                                <tr>
                                    <td>Phone</td>
                                    <td>: +94 91 227 7513</td>
                                </tr>
                                <tr>
                                    <td>Email</td>
                                    <td>: coralsands@stmail&#173;.lk</td>
                                </tr>
                                <tr>
                                    <td></td>
                                    <td></td>
                                </tr>
                                <tr>
                                    <td colspan="2"><strong><u>Booking Summary</u></strong></td>
                                </tr>
                                <tr>
                                    <td>Arrival date</td>
                                    <td>: ' . $BOOKING->checkin . '</td>
                                </tr>
                                <tr>
                                    <td>Departure date</td>
                                    <td>: ' . $BOOKING->checkout . '</td>
                                </tr>
                                <tr>
                                    <td>Number of Nights</td>
                                    <td>: ' . $nights . '</td>
                                </tr>

                            </table>
                            
                            <br>
                            <table class="table">
                                <tr>
                                    <th class="table-td1">Rooms</th>
                                    <th class="table-td1">Room Type</th>
                                    <th class="table-td1">Meal Type</th> 
                                    <th class="table-td1">Room Rate (USD)</th>
                                </tr>' . $tr . '
                            </table>
                            <table class="booking-details">
                                
                                <tr>
                                    <td></td>
                                    <td></td>
                                </tr>
                                ' . $specialrequest . '
                                <tr>
                                    <td colspan="2"><strong><u>Cancellation Policy</u></strong></td>
                                </tr>
                                <tr>
                                    <td colspan="2">
                                        <ul>
                                            <li>If cancelled 7 days prior to arrival date : 0% of the booking value will be charged as a Cancellation Fee.</li>
                                            <li>If cancelled within 1 to 6 days of the arrival date: 100 % of the booking value will be charged as Cancellation Fee.</li>
                                            <li>No Show : 100% of the booking value will be charged as a Cancellation Fee.</li>
                                            <li>Booking cancellations should be notified via email to coralsands@sltnet.lk / coralsands@stmail.lk</li>
                                        </ul>
                                    </td>
                                </tr>
                            </table>
                            <table class="booking-details">
                                <tr>
                                    <td></td>
                                    <td></td>
                                </tr>
                                <tr>
                                    <td colspan="2"><strong><u>Add-on Detail</u></strong></td>
                                </tr>
                               <tr>
                                    <td colspan="2"><strong><u>Total Booking Cost</u></strong></td>
                                </tr>
                                <tr>
                                    <td>Total Accommodation Amount</td>
                                    <td>: US $ ' . number_format($totRoomPrice * $nights, 2) . '</td>
                                </tr>';
            if (0 != $totChilSup) {
                $html .= '<tr>
                                    <td>Total Children Supplement Amount</td>
                                    <td>: US $ ' . number_format($totChilSup * $nights, 2) . '</td>
                                </tr>';
            }

            if (0 != $totEBPrice) {
                $html .= '<tr>
                                    <td>Total Extra Bed Amount</td>
                                    <td>: US $ ' . number_format($totEBPrice * $nights, 2) . '</td>
                                </tr>';
            }
            $html .= '<tr>
                                    <td></td>
                                    <td></td>
                                </tr>
                                <tr>
                                    <td colspan="2"><strong><u>Payment Details</u></strong></td>
                                </tr>
                                <tr>
                                    <td>Total Amount</td>
                                    <td>: US $ ' . number_format($totPrice, 2) . '</td>
                                </tr>
                                <tr>
                                    <td>Advance Paid</td>
                                    <td>: US $ ' . number_format($BOOKING->advance, 2) . '</td>
                                </tr>
                                <tr>
                                    <td>Balance Due</td>
                                    <td>: US $ ' . number_format($payableamount, 2) . '</td>
                                </tr>
                            </table>
                            <table class="footer">
                                <tr>
                                    <td class="footer-td1"></td>
                                    <td colspan="2" style="font-size: 15px;"><strong>Thank You !</strong></td>
                                </tr>
                                <tr class="footer-tr">
                                    <td></td>
                                    <td class="footer-td2">Coral Sands Hotel</td>
                                    <td>Phone: +94 91 227 7513</td>
                                </tr>
                                <tr class="footer-tr">
                                    <td></td>
                                    <td><a href="" style="text-decoration:none;color: #fff;">No.326, Galle Rd, Hikkaduwa, Sri Lanka</a></td>
                                    <td>Email: coralsands@stmail&#173;.lk</td>
                                </tr>
                                
                            </table>
                            </body>
                        </html>';

            if (mail($email, $subject, $html, $headers)) {
                return TRUE;
            } else {
                return FALSE;
            }
        } else {
            return 'invalid_booking';
        }
    }

    public static function sendConfirmationEmailToHotel($bookingid, $receiptNo)
    {
        if (is_numeric($bookingid)) {
            //----------------------Company Information---------------------


            $BOOKING = new Booking($bookingid);

            $from = 'info@coralsandshotel.com';
            $reply = $BOOKING->email;


            $subject = "Booking Confirmation | Coral Sands Hotel - Hikkaduwa | #1001" . $bookingid . "";
            $site = 'coralsandshotel.com';

            // mandatory headers for email message, change if you need something different in your setting.
            $headers = "From: " . $from . "\r\n";
            $headers .= "Reply-To: " . $reply . "\r\n";
            $headers .= "MIME-Version: 1.0\r\n";
            $headers .= "Content-Type: text/html; charset=ISO-8859-1\r\n";

            $settings = new Settings();
            $percentage = $settings->getPercentage();

            /* ---- No of Nights  ---- */
            $dates = BookedRooms::createDateRange($BOOKING->checkin, $BOOKING->checkout, $format = "Y-m-d");
            $nights = count($dates);
            /* ---- No of Nights  ---- */

            $rooms = BookingRoomDetails::getRoomTypeDetailsByID($bookingid);
            $totChilSup = 0;
            foreach ($rooms as $room) {
                if ($room['no_of_children']) {
                    $children = (int) $room['no_of_children'];

                    $type = RoomType::getAllRoomTypeById($room['room_type']);
                    $Sup = (float) $type['children_supplement'];

                    $ChildSup = $children * $Sup;

                    $totChilSup = $totChilSup + $ChildSup;
                }
            }

            /* ---- total room price ---- */
            $totRoomPrice = 0;
            foreach ($rooms as $room) {
                $roomprice = (int) $room['room_price'];

                $totRoomPrice = $totRoomPrice + $roomprice;
            }
            /* ---- //total room price ---- */

            /* ---- total extra bed price  ---- */
            $totEBPrice = 0;
            foreach ($rooms as $room) {
                if ($room['no_of_extra_beds']) {
                    $ebprice = (int) $room['no_of_extra_beds'] * (float) $room['extra_bed_price'];

                    $totEBPrice = $totEBPrice + $ebprice;
                }
            }
            /* ---- //total extra bed price ---- */

            /* ---- total price  ---- */
            $totPrice = ($totRoomPrice * $nights) + ($totChilSup * $nights) + ($totEBPrice * $nights);
            /* ---- //total price ---- */

            /* ---- payable amount  ---- */
            $paidamount = (float) $BOOKING->advance;
            $payableamount = $totPrice - $paidamount;
            /* ---- //payable amount  ---- */

            $tr = '';

            foreach ($rooms as $room) {
                $roomtype = RoomType::getAllRoomTypeById($room["room_type"]);
                $roombasis = RoomBasis::getRoomBasisById($room['room_basis']);
                if (!empty($room['no_of_extra_beds'])) {
                    $eb = $room['no_of_extra_beds'];
                } else {
                    $eb = 0;
                }
                if ($room['children_ages']) {
                    $ages = $room['children_ages'];
                } else {
                    $ages = 0;
                }

                $tr1 = '<tr>
                        <td class="table-td1"><b>Room ' . $key . '</b> <br/>Occupants: ' . $room['no_of_adults'] . '<br/>Additional Children  (5 - 11+ Years): ' . $room['no_of_children'] . '<br/>Under 5 Years (No Charge): ' . $room['no_of_children_un_5'] . '</td>
                        <td class="table-td1">' . $roomtype["room_type"] . '</td>
                        <td class="table-td1">' . $roombasis['name'] . '</td> 
                         <td class="table-td1">' . $room['room_price'] . '</td>
                    </tr>';

                $tr = $tr . $tr1;
            }

            if ($BOOKING->message) {
                $specialrequest = ' <tr>
                                    <td colspan="2"><strong><u>Special request</u></strong></td>
                                </tr>
                                <tr>
                                    <td colspan="2">' . $BOOKING->message . '</td>
                                </tr>';
            }

            $html = '<!DOCTYPE html>
                    <html>
                        <head>
                            <title>' . "Coralsands Hotel - Repay Payment" . '</title>
                            <style type="text/css">
                                table {
                                    border: 1px solid #d0d0d0;
                                }
                                th {
                                    border-bottom: 1px solid #d0d0d0;
                                    padding: 15px 10px 10px 25px;
                                    text-align: left;
                                    margin: 0px;
                                }
                                td {
                                    padding: 10px 10px 5px 10px;
                                    text-align: left;
                                    margin: 0px;
                                }
                                ul {
                                    list-style-type: square;
                                    margin: 0px 20px 30px 200px;
                                }
                                li {
                                    padding: 5px;
                                }
                                img {
                                    width: 120px;
                                    margin: 0px auto;
                                }
                                .bdr {
                                    border-left: 1px solid #d0d0d0;
                                }
                                .bdr-top {
                                    border-top: 1px solid #d0d0d0;
                                }
                                .bb {
                                    font-weight: bold;
                                }
                                .right {
                                    text-align: right;
                                }
                                .table {
                                    margin-left:150px;
                                }
                                .topic {
                                    font-size:22px;
                                    text-align:center;
                                    color:#E7AB14;
                                }
                                .sal {
                                    margin-left:100px;
                                }
                                .desc {
                                    margin-left:150px;
                                    text-align:justify;
                                    margin-right:100px;
                                }
                                .bor {
                                    border:1px solid #000;
                                }
                                .booking-details {
                                    margin-left:150px;
                                    border: none !important;
                                    margin-right:100px;
                                }
                                .footer{
                                    width:100%;
                                    margin-top: 20px;
                                    background-color:#E7AB14;
                                    color: #fff;
                                    padding-top:20px;
                                    padding-bottom:30px;
                                }
                                .footer-tr {
                                    font-size: 15px;
                                    line-height: 2px;
                                }
                                .footer-td1 {
                                    width: 150px;
                                }
                                .footer-td2 {
                                    width: 35%;
                                }
                                @media (max-width: 480px) {
                                    ul { font-size: 14px; }
                                    td { font-size: 12px; }
                                    .table {margin-left:0px;}
                                    .desc {margin-left:20px; text-align:justify; margin-right:10px;}
                                    .sal {margin-left:10px;}
                                    .booking-details {margin-left:10px; border: none !important; margin-right:10px;}
                                    ul {list-style-type: square; margin: 0px 20px 30px 10px;}
                                    .footer-tr {font-size: 15px; line-height: 15px;}
                                    .footer-td1 { width: 0px;}
                                    .footer-td2 {width: 50%;}
                                    .table-td1 {width: 20%;}
                                }
                                
                            </style>
                        </head>
                        <body class="bor">
                            <div style="width: 100%; text-align: center; font-size: 20px; margin: 10px 0px 30px 0px;">
                                <!--            <b style="font-size: 25px; text-decoration: underline;">Coral Sands Hotel</b><br/>-->
                                <img src="http://' . $site . '/images/logo/logo.png" alt="Coral Sands"/><br/>
                                <span><a href="" style="text-decoration:none;color: #000;">No.326, Galle Rd, Hikkaduwa, Sri Lanka</a></span><br/>
                                <span>Email: coralsands@stmail&#173;.lk</span><br/>
                                <span>Phone: +94 91 227 7513 / +94 91 227 7436</span>
                            </div>
                            <h2 class="topic">Booking Confirmation | Coral Sands Hotel - Hikkaduwa | #1001' . $bookingid . '</h2>
                             
                            <table class="booking-details">
                                <tr>
                                    <td><strong>Booking Reference No.</strong></td>
                                    <td><strong>:  #1001' . $bookingid . '</strong></td>
                                </tr>
                                <tr>
                                    <td><strong>Payment Reference No.</strong></td>
                                    <td><strong>: ' . $receiptNo . '</strong></td>
                                </tr>
                                <tr>
                                    <td><strong>Reservation Date</strong></td>
                                    <td><strong>: ' . $BOOKING->date . '</strong></td>
                                </tr>
                                <tr>
                                    <td></td>
                                    <td></td>
                                </tr>
                                <tr>
                                    <td colspan="2"><strong><u>Customer Details</u></strong></td>
                                </tr>
                                <tr>
                                    <td>Customer name</td>
                                    <td>: ' . $BOOKING->name . '</td>
                                </tr>
                                <tr>
                                    <td>Country</td>
                                    <td>: ' . $BOOKING->country . '</td>
                                </tr>
                                <tr>
                                    <td>Email</td>
                                    <td>: ' . $BOOKING->email . '</td>
                                </tr>
                                <tr>
                                    <td>Mobile Number</td>
                                    <td>: ' . $BOOKING->contact . '</td>
                                </tr>
                                <tr>
                                    <td></td>
                                    <td></td>
                                </tr> 
                                <tr>
                                    <td colspan="2"><strong><u>Booking Summary</u></strong></td>
                                </tr>
                                <tr>
                                    <td>Arrival date</td>
                                    <td>: ' . $BOOKING->checkin . '</td>
                                </tr>
                                <tr>
                                    <td>Departure date</td>
                                    <td>: ' . $BOOKING->checkout . '</td>
                                </tr>
                                <tr>
                                    <td>Number of Nights</td>
                                    <td>: ' . $nights . '</td>
                                </tr>

                            </table>
                            
                            <br>
                            <table class="table">
                                <tr>
                                    <th class="table-td1">Rooms</th>
                                    <th class="table-td1">Room Type</th>
                                    <th class="table-td1">Meal Type</th> 
                                    <th class="table-td1">Room Rate (USD)</th>
                                </tr>' . $tr . '
                            </table>
                            <table class="booking-details">
                                
                                <tr>
                                    <td></td>
                                    <td></td>
                                </tr>
                                ' . $specialrequest . ' 
                            </table>
                            <table class="booking-details">
                                <tr>
                                    <td></td>
                                    <td></td>
                                </tr>
                                <tr>
                                    <td colspan="2"><strong><u>Add-on Detail</u></strong></td>
                                </tr>
                                <tr>
                                    <td colspan="2"><strong><u>Total Booking Cost</u></strong></td>
                                </tr>
                                <tr>
                                    <td>Total Accommodation Amount</td>
                                    <td>: US $ ' . number_format($totRoomPrice * $nights, 2) . '</td>
                                </tr>';
            if (0 != $totChilSup) {
                $html .= '<tr>
                                    <td>Total Children Supplement Amount</td>
                                    <td>: US $ ' . number_format($totChilSup * $nights, 2) . '</td>
                                </tr>';
            }

            if (0 != $totEBPrice) {
                $html .= '<tr>
                                    <td>Total Extra Bed Amount</td>
                                    <td>: US $ ' . number_format($totEBPrice * $nights, 2) . '</td>
                                </tr>';
            }
            $html .= '<tr>
                                    <td></td>
                                    <td></td>
                                </tr>
                                <tr>
                                    <td colspan="2"><strong><u>Payment Details</u></strong></td>
                                </tr>
                                <tr>
                                    <td>Total Amount</td>
                                    <td>: US $ ' . number_format($totPrice, 2) . '</td>
                                </tr>
                                <tr>
                                    <td>Advance Paid</td>
                                    <td>: US $ ' . number_format($BOOKING->advance, 2) . '</td>
                                </tr>
                                <tr>
                                    <td>Balance Due</td>
                                    <td>: US $ ' . number_format($payableamount, 2) . '</td>
                                </tr>
                            </table>
                            <table class="footer">
                                <tr>
                                    <td class="footer-td1"></td>
                                    <td colspan="2" style="font-size: 15px;"><strong>Thank You !</strong></td>
                                </tr>
                                <tr class="footer-tr">
                                    <td></td>
                                    <td class="footer-td2">Coral Sands Hotel</td>
                                    <td>Phone: +94 91 227 7513</td>
                                </tr>
                                <tr class="footer-tr">
                                    <td></td>
                                    <td><a href="" style="text-decoration:none;color: #fff;">No.326, Galle Rd, Hikkaduwa, Sri Lanka</a></td>
                                    <td>Email:  coralsands@stmail.lk</td>
                                </tr>
                                
                            </table>
                            </body>
                        </html>';


            $email1 = 'coralsands@stmail.lk';
            $email2 = 'accountant.coralsands@stmail.lk';
            $email3 = 'coralsands@sltnet.lk';


            // $email3 = 'kavini@synotec.lk';

            if (
                mail($email1, $subject, $html, $headers) &&
                mail($email2, $subject, $html, $headers) &&
                mail($email3, $subject, $html, $headers)
            ) {
                return TRUE;
            } else {
                return FALSE;
            }
        } else {
            return 'invalid_booking';
        }
    }

    public static function sendPaymentFailEmail($bookingid)
    {

        if (is_numeric($bookingid)) {

            $BOOKING = new Booking($bookingid);
            if ($BOOKING->status == 0) {
                $email = $BOOKING->email;

                //----------------------Company Information---------------------

                $from = 'info@coralsandshotel.com';
                $reply = 'coralsands@stmail.lk';

                $subject = 'Coralsands Hotel - Repay Payment';
                $site = 'coralsandshotel.com';

                // mandatory headers for email message, change if you need something different in your setting.
                $headers = "From: " . $from . "\r\n";
                $headers .= "Reply-To: " . $reply . "\r\n";
                $headers .= "MIME-Version: 1.0\r\n";
                $headers .= "Content-Type: text/html; charset=ISO-8859-1\r\n";

                $html = '<!DOCTYPE html>
                    <html>
                        <head>
                            <title>' . "Coralsands Hotel - Repay Payment" . '</title>
                            <style type="text/css">
                                table {
                                    border: 1px solid #d0d0d0;
                                }
                                th {
                                    border-bottom: 1px solid #d0d0d0;
                                    padding: 15px 10px 10px 25px;
                                    text-align: left;
                                    margin: 0px;
                                }
                                td {
                                    padding: 10px 10px 5px 10px;
                                    text-align: left;
                                    margin: 0px;
                                }
                                ul {
                                    font-size: 18px;
                                    list-style-type: square;
                                    margin: 0px 20px 30px 10%;
                                }
                                li {
                                    padding: 5px;
                                }
                                img {
                                    width: 120px;
                                    margin: 0px auto;
                                }
                                .bdr {
                                    border-left: 1px solid #d0d0d0;
                                }
                                .bdr-top {
                                    border-top: 1px solid #d0d0d0;
                                }
                                .bb {
                                    font-weight: bold;
                                }
                                .right {
                                    text-align: right;
                                }
                                @media (max-width: 450px) {
                                    ul { font-size: 14px; }
                                    td { font-size: 12px; }
                                }
                            </style>
                        </head>
                        <body>
                            <div style="width: 100%; text-align: center; font-size: 20px; margin: 10px 0px 30px 0px;">
                                <!--            <b style="font-size: 25px; text-decoration: underline;">Coral Sands Hotel</b><br/>-->
                                <img src="http://' . $site . '/images/logo/logo.png" alt="Coral Sands"/><br/>
                                <span><a href="" style="text-decoration:none;color: #000;">No.326, Galle Rd, Hikkaduwa, Sri Lanka</a></span><br/>
                                <span>Email: coralsands@stmail&#173;.lk</span><br/>
                                <span>Phone: +94 91 227 7513 / +94 91 227 7436</span>
                            </div>
                            <ul>
                                <li><span class="bb">Booking ID : </span>#1001' . $bookingid . '<span></span></li>
                                <li><span class="bb">Customer Name : </span>' . $BOOKING->name . '<span></span></li>
                                <li><span class="bb">Date of Booking : </span>' . $BOOKING->date . '<span></span></li>
                                <li><span class="bb">Check In : </span>' . $BOOKING->checkin . '<span></span></li>
                                <li><span class="bb">Check Out : </span><span>' . $BOOKING->checkout . '</span></li>
                                <li><span class="bb">Total Amount : </span><span> US $ ' . $BOOKING->total . '</span></li>
                                <li><span class="bb">Advance Payment : </span><span> US $ ' . $BOOKING->advance . '</span></li>
                            </ul>
                            
                            <h3 style="font-size:15px; margin-left:200px;">Your transaction was <strong>NOT</strong> successful. Please  follow the payment proceed again and confirm the booking.</h3>
                            
                            <div style="text-align: center; margin: 35px 0px;">
                                <a href="http://coralsandshotel.com/repay_payment.php?id=' . $bookingid . '"><button style="padding: 15px; font-weight: bold; text-decoration: none; background-color: #ff4200; color: #dfdfdf; border-radius: 3px;">Complete Payment</a>
                            </div>
                        </body>
                    </html>';


                // Sending mail

                if (mail($email, $subject, $html, $headers)) {
                    return TRUE;
                } else {
                    return FALSE;
                }
            } else {
                return FALSE;
            }
        } else {

            return 'invalid_booking';
        }
    }
}

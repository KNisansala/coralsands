<?php

/**
 * Description of BookingRoomDetails
 *
 * @author User
 */
class BookingRoomDetails {

    public $id;
    public $bookingid;
    public $roomtype;
    public $roombasis;
    public $noofextrabeds;
    public $noofadults;
    public $noofchildren;
    public $roomprice;
    public $extrabedprice;

    public function __construct($id) {
        if ($id) {

            $query = "SELECT *  FROM `booking-room-details` WHERE `id`='" . $id . "'";

            $db = new DB();

            $result = mysql_fetch_array($db->readQuery($query));

            $this->id = $result['id'];
            $this->bookingid = $result['booking_id'];
            $this->roomtype = $result['room_type'];
            $this->roombasis = $result['room_basis'];
            $this->noofextrabeds = $result['no_of_extra_beds'];
            $this->noofadults = $result['no_of_adults'];
            $this->noofchildren = $result['no_of_children'];
            $this->noofchildrenun5 = $result['no_of_children_un_5'];
            $this->roomprice = $result['room_price'];
            $this->extrabedprice = $result['extra_bed_price'];

            return $result;
        }
    }

    public function create($bookingid, $roomtype, $roombasis, $roomprice, $ebprice, $extrabeds, $adults, $children, $childrenun5, $ages) {

        $query = "INSERT INTO `booking-room-details` (`booking_id`, `room_type`, `room_basis`, `no_of_extra_beds`, `no_of_adults`, `no_of_children`, `room_price`, `extra_bed_price`, `no_of_children_un_5`,`children_ages`) VALUES  ('" . $bookingid . "', '" . $roomtype . "', '" . $roombasis . "', '" . $extrabeds . "', '" . $adults . "', '" . $children . "', '" . $roomprice . "', '" . $ebprice . "',  '" . $childrenun5 . "', '" . $ages . "')";

        $db = new DB();

        $result = $db->readQuery($query);

        if ($result) {
            return TRUE;
        } else {
            return FALSE;
        }
    }

    public function all() {

        $query = "SELECT * FROM `booking-room-details`";
        $db = new DB();
        $result = $db->readQuery($query);
        $array_res = array();

        while ($row = mysql_fetch_array($result)) {
            array_push($array_res, $row);
        }

        return $array_res;
    }

    public function delete() {

        $query = 'DELETE FROM `booking-room-details` WHERE id="' . $this->id . '"';

        $db = new DB();

        return $db->readQuery($query);
    }

    public function deleteByBookingID($id) {

        $query = 'DELETE FROM `booking-room-details` WHERE booking_id="' . $id . '"';

        $db = new DB();

        return $db->readQuery($query);
    }

    public function getRoomTypeDetailsByID($bookingid) {

        $query = "SELECT * FROM `booking-room-details` WHERE `booking_id`='" . $bookingid . "'";
        $db = new DB();
        $result = $db->readQuery($query);
        $array_res = array();

        while ($row = mysql_fetch_array($result)) {
            array_push($array_res, $row);
        }
        return $array_res;
    }

    public function getRoomTypesByBookingID($bookingid) {

        $query = "SELECT distinct(room_type) FROM `booking-room-details` WHERE `booking_id`='" . $bookingid . "'";
        $db = new DB();
        $result = $db->readQuery($query);
        $array_res = array();

        while ($row = mysql_fetch_assoc($result)) {
            array_push($array_res, $row);
        }

        return $array_res;
    }

    public function getCount($bookingid, $type) {

        $query = "SELECT * FROM `booking-room-details` WHERE `booking_id`='" . $bookingid . "' AND `room_type`='" . $type . "'";

        $db = new DB();
        $result = $db->readQuery($query);
        $array_res = array();

        while ($row = mysql_fetch_array($result)) {
            array_push($array_res, $row);
        }
        return $array_res;
    }

}

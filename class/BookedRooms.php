<?php

class BookedRooms {

    public $id;
    public $roomtype;
    public $date;
    public $bookedrooms;

    public function __construct($id) {
        if ($id) {

            $query = "SELECT `id`,`roomtype`,`date`,`booked_rooms`  FROM `booked_rooms` WHERE `id`='" . $id . "'";

            $db = new DB();

            $result = mysql_fetch_array($db->readQuery($query));

            $this->id = $result['id'];
            $this->roomtype = $result['room_type'];
            $this->date = $result['date'];
            $this->bookedrooms = $result['booked_rooms'];

            return $this;
        }
    }

    public function create($date, $room, $roomtype) {

        $query = "INSERT INTO `booked_rooms` (`date`,`room_type`,`booked_rooms`) VALUES  ('" . $date . "','" . $roomtype . "','" . $room . "')";

        $db = new DB();

        $result = $db->readQuery($query);

        if ($result) {
            return TRUE;
        } else {
            return FALSE;
        }
    }

    public function all() {

        $query = "SELECT * FROM `booked_rooms`";
        $db = new DB();
        $result = $db->readQuery($query);
        $array_res = array();

        while ($row = mysql_fetch_array($result)) {
            array_push($array_res, $row);
        }

        return $array_res;
    }

    public static function getByDateAndRoomType($date, $roomtype) {

        $query = "SELECT * FROM `booked_rooms` WHERE date = ' " . $date . " ' AND room_type = ' " . $roomtype . " ' ";
        $db = new DB();

        $result = mysql_fetch_array($db->readQuery($query));


        return $result;
    }

    public function update($id, $rooms) {

        $query = "UPDATE  `booked_rooms` SET "
                . "`booked_rooms` ='" . $rooms . "' "
                . "WHERE `id` = '" . $id . "'  ";

        $db = new DB();

        $result = $db->readQuery($query);

        if ($result) {
            return TRUE;
        } else {
            return FALSE;
        }
    }

    public function delete() {

        $query = 'DELETE FROM `booked_rooms` WHERE id="' . $this->id . '"';

        $db = new DB();

        return $db->readQuery($query);
    }

    public function createDateRange($startDate, $endDate, $format = "Y-m-d") {
        $begin = new DateTime($startDate);
        $end = new DateTime($endDate);

        $interval = new DateInterval('P1D'); // 1 Day
        $dateRange = new DatePeriod($begin, $interval, $end);

        $range = [];
        foreach ($dateRange as $date) {
            $range[] = $date->format($format);
        }

        return $range;
    }

    public function getAvailableForDateById($date, $type_id) {

        $result = BookedRooms::getByDateAndRoomType($date, $type_id);
        $bookedrooms = $result['booked_rooms'];

        $res = RoomType::getAllRoomTypeById($type_id);
        $rooms = $res['num_of_room'];

        $availablerooms = $rooms - $bookedrooms;
        
        return $availablerooms;
    }
    
    public function getSubBookedByDate($date, $sub_id) {

        $db = new DB();

        $query = "SELECT * FROM `booked_rooms` WHERE (`room_type` = '" . $sub_id . "') AND (`date` = '" . $date . "') ";

        $result = $db->readQuery($query);

        $row = mysql_fetch_assoc($result);

        if($row['booked_rooms']) {
            $booked = (int) $row['booked_rooms'];
        } else {
            $booked = 0;
        }
        return $booked;
    }
    public function getSubBookedArrayByDate($date, $sub_id) {

        $db = new DB();

        $query = "SELECT * FROM `booked_rooms` WHERE (`room_type` = '" . $sub_id . "') AND (`date` = '" . $date . "') ";

        $result = $db->readQuery($query);

        $row = mysql_fetch_assoc($result);

        return $row;
    }
    public function getMainAvailableForDateById($date, $type_id) {

        $subTypes = RoomType::getSubTypesByMain($type_id);
        $subBooked = 0;
        
        foreach ($subTypes as $subType) {
            
            $subBooked += BookedRooms::getSubBookedByDate($date, $subType['id']);
        }
        
        $roomType = RoomType::getAllRoomTypeById($type_id);
        $total = (int) $roomType['num_of_room'];
        
        $available = $total - $subBooked;
        
        return $available;
        
    }
    public function updateAvailable($subType, $date, $setAv) {

        $query = "UPDATE `booked_rooms` SET "
                . "booked_rooms=booked_rooms+" . $setAv . " "
                . " WHERE (`room_type` = '" . $subType . "') AND (`date` = '" . $date . "') ";

        $db = new DB();

        $result = $db->readQuery($query);

        if ($result) {
            return TRUE;
        } else {
            return FALSE;
        }
    }
    public function setAvailable($subType, $date, $setAv) {

        $query = "INSERT INTO `booked_rooms` (`date`,`room_type`,`booked_rooms`) VALUES  ('" . $date . "','" . $subType . "','" . $setAv . "')";

        $db = new DB();

        $result = $db->readQuery($query);

        if ($result) {
            return TRUE;
        } else {
            return FALSE;
        }
    }

}

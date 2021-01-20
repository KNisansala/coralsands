<?php

class RoomBasis {

    public function add($data) {

        $db = new DB();

        $query = "INSERT INTO `room-basises` (`name`) VALUES('" . $_POST['roomBasis'] . "')";

        $result = $db->readQuery($query);

        return $result;
    }

    public function getAll() {

        $db = new DB();

        $query = "SELECT * FROM `room-basises` ORDER BY id ASC";

        $result = $db->readQuery($query);

        $array_res = array();

        while ($row = mysql_fetch_array($result)) {
            array_push($array_res, $row);
        }

        return $array_res;
    }

    public static function getAllRoomBasisById($id) {

        $db = new DB();

        $query = "SELECT * FROM `room-basises` WHERE `id` = '" . $id . "' ";

        $result = $db->readQuery($query);

        $row = mysql_fetch_assoc($result);

        return $row;
    }

    public function getRoomBasisById($id) {

        $db = new DB();

        $query = "SELECT * FROM `room-basises` WHERE `id` = '" . $id . "' ";

        $result = $db->readQuery($query);

        $row = mysql_fetch_assoc($result);

        return $row;
    }

}

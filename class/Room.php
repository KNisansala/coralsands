<?php

class Room {

    public function add($data) {

        $db = new DB();

        $query = "INSERT INTO `room` (`room_type`,`room_num`) VALUES('" . $_POST['roomType'] . "', '" . $_POST['roomNum'] . "')";

        $result = $db->readQuery($query);

        return $result;
    }

    public function lastId() {

        $db = new DB();

        $query = "SELECT LAST(`id`) AS LastId FROM `room` ";

        $result = $db->readQuery($query);

        return $result;
    }

    public function getAllRoomByRoomTypeId($id) {

        $db = new DB();

        $query = "SELECT * FROM `room` WHERE `room_type` = '" . $id . "' ";

        $result = $db->readQuery($query);

        $array_res = array();

        while ($row = mysql_fetch_array($result)) {

            $room = array(
                'id' => $row['id'],
                'room_type' => $row['room_type'],
                'room_num' => $row['room_num']
            );

            array_push($array_res, $room);
        }

        return $array_res;
    }

    public function getAllRoom() {

        $db = new DB();

        $query = "SELECT * FROM `room` ";

        $result = $db->readQuery($query);

        $array_res = array();

        while ($row = mysql_fetch_array($result)) {

            $room = array(
                'id' => $row['id'],
                'room_type' => $row['room_type'],
                'room_num' => $row['room_num']
            );

            array_push($array_res, $room);
        }

        return $array_res;
    }

    public function deleteRoomById($id) {

        $db = new DB();

        $query = "DELETE FROM `room` WHERE `id` = '" . $id['roomId'] . "' ";

        $result = $db->readQuery($query);

        return $result;
    }

    public function edit($data) {

        $db = new DB();

        $query = "UPDATE `room` SET "
                . " `room_num` = '" . $data['roomNum'] . "' "
                . "WHERE `id`= '" . $data['roomId'] . "' ";

        return $db->readQuery($query);
    }

    public function isExists($data) {
        
        $db = new DB();

        $query = "SELECT * FROM `room` WHERE `room_num` = '" . $data['roomNum'] . "' ";

        $result = $db->readQuery($query);
 
        if (!mysql_fetch_array($result)) {
            return FALSE;
        } else {
            return TRUE;
        }
    }

}

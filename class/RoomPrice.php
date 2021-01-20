<?php

class RoomPrice {

    public function add($data) {

        $db = new DB();

        $query = "INSERT INTO `room-prices` (`type_id`, `basis_id`, `price`, `start`, `end`) VALUES(" . $_POST['roomType'] . ", " . $_POST['roomBasis'] . ", " . $_POST['price'] . ", '" . $_POST['start'] . "', '" . $_POST['end'] . "')";

        $result = $db->readQuery($query);

        return $result;
    }

    public function manualAdd($type_id, $basis_id, $start, $end, $price) {

        $db = new DB();

        $query = "INSERT INTO `room-prices` (`type_id`, `basis_id`, `price`, `start`, `end`) VALUES(" . $type_id . ", " . $basis_id . ", " . $price . ", '" . $start . "', '" . $end . "')";

        $result = $db->readQuery($query);

        return $result;
    }

    public function getAll() {

        $db = new DB();

        $query = "SELECT * FROM `room-prices`";

        $result = $db->readQuery($query);

        $array_res = array();

        while ($row = mysql_fetch_array($result)) {

            array_push($array_res, $row);
        }

        return $array_res;
    }

    public function getPriceByPost($data) {

        $db = new DB();

        $query = "SELECT * FROM `room-prices` WHERE (`type_id` = " . $_POST['roomType'] . " AND `basis_id` = " . $_POST['roomBasis'] . " AND ('" . $_POST['date'] . "' between `start` and `end`)) ORDER BY `id` DESC LIMIT 1";

        $result = $db->readQuery($query);

        $row = mysql_fetch_assoc($result);

        return $row;
    }

    public function getPrice($type, $basis, $date) {

        $db = new DB();

//        $date = date("Y-m-d");

        $query = "SELECT * FROM `room-prices` WHERE (`type_id` = " . $type . " AND `basis_id` = " . $basis . " AND ('" . $date . "' between `start` and `end`)) ORDER BY `id` DESC LIMIT 1";

        $result = $db->readQuery($query);

        $row = mysql_fetch_assoc($result);

        return $row;
    }

    public function getAllPrices($data) {

        $db = new DB();

        $query = "SELECT * FROM `room-prices` WHERE (`type_id` = " . $_POST['roomType'] . " AND `basis_id` = " . $_POST['roomBasis'] . " AND ('" . $_POST['date'] . "' between `start` and `end`))";

        $result = $db->readQuery($query);

        $array_res = array();

        while ($row = mysql_fetch_array($result)) {

            array_push($array_res, $row);
        }

        return $array_res;
    }

    public function getAllPricesByType($type, $date) {

        $db = new DB();

        $query = "SELECT * FROM `room-prices` WHERE (`type_id` = " . $type . " AND ('" . $date . "' between `start` and `end`))";

        $result = $db->readQuery($query);

        $array_res = array();

        while ($row = mysql_fetch_array($result)) {

            array_push($array_res, $row);
        }

        return $array_res;
    }

    public function updateByColumn($id, $column, $data) {

        $query = "UPDATE  `room-prices` SET "
                . "`" . $column . "` ='" . $data . "' "
                . " WHERE `id` = '" . $id . "'";

        $db = new DB();

        $result = $db->readQuery($query);

        if ($result) {
            return TRUE;
        } else {
            return FALSE;
        }
    }

    public function delete($id) {

        $db = new DB();

        $query = "DELETE FROM `room-prices` WHERE `id` = '" . $id . "' LIMIT 1";

        if ($db->readQuery($query)) {
            $row = TRUE;
        } else {
            $row = FALSE;
        }

        return $row;
    }

    public function getAllDistinctSeasons() {

        $db = new DB();

        $query = "SELECT DISTINCT start,end FROM `room-prices`";

        $result = $db->readQuery($query);

        $array_res = array();

        while ($row = mysql_fetch_array($result)) {

            array_push($array_res, $row);
        }
        return $array_res;
    }

    public function getAllFromDateRange($start,$end) {

        $db = new DB();

        $query = "SELECT * FROM `room-prices` WHERE `start` = '" . $start . "' AND `end` = '" . $end . "'";

        $result = $db->readQuery($query);

        $array_res = array();

        while ($row = mysql_fetch_array($result)) {

            array_push($array_res, $row);
        }

        return $array_res;
    }

    public function deleteSeason($start,$end) {

        $db = new DB();

        $query = "DELETE FROM `room-prices` WHERE `start` = '" . $start . "' AND `end` = '" . $end . "'";
        
        if ($db->readQuery($query)) {
            $row = TRUE;
        } else {
            $row = FALSE;
        }
        return $row;
    }
    
    public function getCheckInSeason($type, $basis, $date) {

        $db = new DB();

//        $date = date("Y-m-d");

        $query = "SELECT * FROM `room-prices` WHERE (`type_id` = " . $type . " AND `basis_id` = " . $basis . " AND ('" . $date . "' between `start` and `end`)) ORDER BY `id` DESC LIMIT 1";

        $result = $db->readQuery($query);

        $row = mysql_fetch_assoc($result);

        return $row;
    }
    
    public function getCheckOutSeason($type, $basis, $date) {

        $db = new DB();

//        $date = date("Y-m-d");

        $query = "SELECT * FROM `room-prices` WHERE (`type_id` = " . $type . " AND `basis_id` = " . $basis . " AND ('" . $date . "' between `start` and `end`)) ORDER BY `id` DESC LIMIT 1";

        $result = $db->readQuery($query);

        $row = mysql_fetch_assoc($result);

        return $row;
    }

}

<?php

class Discount {

    public function add($start, $end, $discount) {

        $db = new DB();

        $query = "INSERT INTO `discount` (`start`, `end`, `discount`) VALUES('" . $start . "','" . $end . "', " . $discount . ")";

        $result = $db->readQuery($query);

        return $result;
    }

    public function getAll() {

        $db = new DB();

        $query = "SELECT * FROM `discount`";

        $result = $db->readQuery($query);

        $array_res = array();

        while ($row = mysql_fetch_array($result)) {

            array_push($array_res, $row);
        }

        return $array_res;
    }

    public function delete($id) {

        $db = new DB();

        $query = "DELETE FROM `discount` WHERE `id` = '" . $id . "' LIMIT 1";

        if ($db->readQuery($query)) {
            $row = TRUE;
        } else {
            $row = FALSE;
        }
        return $row;
    }

    public function getDiscountById($id) {

        $db = new DB();

        $query = "SELECT * FROM `discount` WHERE `id` = '" . $id . "' LIMIT 1";

        $result = $db->readQuery($query);

        $row = mysql_fetch_assoc($result);

        return $row;
    }

    public function updateByColumn($id, $column, $data) {

        $query = "UPDATE  `discount` SET "
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

    public function getDiscount($date) {

        $db = new DB();

//        $date = date("Y-m-d");

        $query = "SELECT * FROM `discount` WHERE '" . $date . "' between `start` and `end` ORDER BY `id` DESC LIMIT 1";

        $result = $db->readQuery($query);

        $row = mysql_fetch_assoc($result);

        return $row['discount'];
        
    }

}

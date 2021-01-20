<?php

class Settings {

//    public function add($type_id, $basis_id, $price) {
//
//        $db = new DB();
//
//        $query = "INSERT INTO `default-prices` (`type_id`, `basis_id`, `price`) VALUES(" . $type_id . ", " . $basis_id . ", " . $price . ")";
//        
//        $result = $db->readQuery($query);
//
//        return $result;
//    }

    public function getPercentage() {

        $db = new DB();

        $query = "SELECT * FROM `settings` WHERE `id` = 1 LIMIT 1";

        $result = $db->readQuery($query);
        
        if ($result) {
            $row = mysql_fetch_assoc($result);
            return $row['percentage'];
        } else {
            return FALSE;
        }
    }

    public function updatePercentage($percentage) {
        $db = new DB();

        $query = "UPDATE `settings` SET `percentage` = " . mysql_real_escape_string($percentage) . " WHERE `id` = 1";

        if ($db->readQuery($query)) {
            return TRUE;
        } else {
            return FALSE;
        }
    }

}

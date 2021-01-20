<?php

class DefaultRoomPrice {
    
    public function add($type_id, $basis_id, $price) {

        $db = new DB();

        $query = "INSERT INTO `default-prices` (`type_id`, `basis_id`, `price`) VALUES(" . $type_id . ", " . $basis_id . ", " . $price . ")";
        
        $result = $db->readQuery($query);

        return $result;
    }
    
    public function getPriceByIds($type_id, $basis_id) {

        $db = new DB();

        $query = "SELECT * FROM `default-prices` WHERE (`type_id` = ".$type_id." AND `basis_id` = ".$basis_id.") LIMIT 1";

        $result = $db->readQuery($query);

        $row = mysql_fetch_assoc($result);

        return $row;
    }
    
    public function updatePrice($type_id, $basis_id, $price) {
        $db = new DB();

        $query = "UPDATE `default-prices` SET `price` = ".$price." WHERE (`type_id` = ".$type_id." AND `basis_id` = ".$basis_id.")";
        
        $result = $db->readQuery($query);

        return $result;
    }
     
}
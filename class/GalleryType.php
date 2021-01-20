<?php

class GalleryType {

    public function add($data) {

        $db = new DB();

        $query = "INSERT INTO `gallery-type` (`type-name`) VALUES('" . mysql_real_escape_string($_POST['typeNmae']) . "')";

        $result = $db->readQuery($query);

        return $result;
    }

    public function getAll() {

        $db = new DB();

        $query = "SELECT * FROM `gallery-type` ORDER BY sort ASC ";

        $result = $db->readQuery($query);

        $array_res = array();

        while ($row = mysql_fetch_array($result)) {
            array_push($array_res, $row);
        }

        return $array_res;
    }
    
    public function getById($id){
        
        $db = new DB();
        
        $query = "SELECT * FROM `gallery-type` WHERE `id` = '".$id."' ";
        
        $result = $db->readQuery($query);
        
        $row = mysql_fetch_array($result);
        
        return $row;
    }
    
    public function editById($data, $id){
        
        $db = new DB();
        
        $query = "UPDATE `gallery-type` SET `type-name` = '".mysql_real_escape_string($_POST['typeNmae'])."' WHERE `id` = '".$id."' ";
        
        $result = $db->readQuery($query);
        
        return $result;
    }

    public function deleteById($id) {

        $db = new DB();

        $query = "DELETE FROM `gallery-type` WHERE `id` = '" . $_POST['Id'] . "' ";

        $result = $db->readQuery($query);

        return $result;
    }

}

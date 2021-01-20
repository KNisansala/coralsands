<?php

class Introduction {
    public function update($data){
        
        $db = new DB();
        
        $query = "UPDATE `introduction` SET "
                . "`title` = '".mysql_real_escape_string($_POST['title'])."',"
                . "`description` = '".mysql_real_escape_string($_POST['description'])."',"
                . "`description_g`= '".mysql_real_escape_string($_POST['description_g'])."',"
                . "`description_r` = '".mysql_real_escape_string($_POST['description_r'])."',"
                . "`description_c` = '".mysql_real_escape_string($_POST['description_c'])."'"
                . "WHERE `id` = 2 ";
        
        $result = $db->readQuery($query);
        
        return $result;
    }
    
    public function getIntroduction(){
        $db = new DB();
        
        $query = "SELECT * FROM `introduction` where id=2 ";
        
        $result = $db->readQuery($query);
        
        $row = mysql_fetch_array($result);
        
        return $row;
    }
}

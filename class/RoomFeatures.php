<?php

class RoomFeatures {
    
    public function add($data, $file){
        
        $db = new DB();

        $dir_dest = '../images/features/';

        $handle = new Upload($file['image']);

        $imgName = null;

        if ($handle->uploaded) {
            $handle->image_resize = true;
            $handle->file_new_name_ext = 'jpg';
            $handle->image_ratio_crop = 'C';
            $handle->image_x = 100;
            $handle->image_y = 100;

            $handle->Process($dir_dest);

            if ($handle->processed) {
                $info = getimagesize($handle->file_dst_pathname);
                $imgName = $handle->file_dst_name;
            }
        }
        
        $query = "INSERT INTO `room-features` (`image_name`,`room-type`,`features`,`features_g`,`features_r`,`features_c`) VALUES('".mysql_real_escape_string($imgName)."','".mysql_real_escape_string($_POST['room-type'])."','".mysql_real_escape_string($_POST['features'])."','".mysql_real_escape_string($_POST['features_g'])."','".mysql_real_escape_string($_POST['features_r'])."','".mysql_real_escape_string($_POST['features_c'])."')";
        
        $result = $db->readQuery($query);
        
        return $result;
    }
    
    public function getAll(){
        
        $db = new DB();
        
        $query = "SELECT * FROM `room-features` ORDER BY sort ASC ";
        
        $result = $db->readQuery($query);
        
        $array_res = array();
        
        while ($row = mysql_fetch_array($result)) {
            array_push($array_res, $row);
        }
        
        return $array_res;
    }
    
    public function getById($id){
        
        $db = new DB();
        
        $query = "SELECT * FROM `room-features` WHERE `id` = '".$id."' ";
        
        $result = $db->readQuery($query);
        
        $row = mysql_fetch_array($result);
        
        return $row;
    }
    
    public function getByRoomType($roomType){
        
        $db = new DB();
        
        $query = "SELECT * FROM `room-features` WHERE `room-type` = '".$roomType."' ORDER BY sort ASC";
        
        $result = $db->readQuery($query);
        
        $array_res = array();
        
        while ($row = mysql_fetch_array($result)) {
            array_push($array_res, $row);
        }
        
        return $array_res;
    }
    
    public function editById($data, $file, $imgOld, $id){
        
        $db = new DB();

        $dir_dest = '../images/features/';

        $handle = new Upload($file['image']);

        $imgName = null;

        if ($handle->uploaded) {
            $handle->image_resize = true;
            $handle->file_new_name_body = TRUE;
            $handle->file_overwrite = TRUE;
            $handle->file_new_name_ext = FALSE;
            $handle->image_ratio_crop = 'C';
            $handle->file_new_name_body = $imgOld;
            $handle->image_x = 100;
            $handle->image_y = 100;

            $handle->Process($dir_dest);

            if ($handle->processed) {
                $info = getimagesize($handle->file_dst_pathname);
                $imgName = $handle->file_dst_name;
            }
        }

        $query = "UPDATE `room-features` SET "
                . "`features` = '".mysql_real_escape_string($_POST['features'])."',"
                . "`features_g` = '".mysql_real_escape_string($_POST['features_g'])."',"
                . "`features_r` = '".mysql_real_escape_string($_POST['features_r'])."',"
                . "`features_c` = '".mysql_real_escape_string($_POST['features_c'])."'"
                . "WHERE `id` = '".$id."'";
        
        $result = $db->readQuery($query);
        
        return $result; 
                
    }
    
    public function deleteById($id){
       
        $db = new DB();
        
        $query = "DELETE FROM `room-features` WHERE `id` = '".$id."' ";
        
        $result = $db->readQuery($query);
        
        return $result;
    }
}

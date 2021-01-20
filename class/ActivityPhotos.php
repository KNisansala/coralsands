<?php

class ActivityPhotos {

    public function add($data, $file) {
        
        $db = new DB();

        $dir_dest = '../images/Things_to_do/photos/';
        

        $handle = new Upload($file['image']);
        
        $imgName = null;

        if ($handle->uploaded) {
            $handle->image_resize = true;
            $handle->file_new_name_ext = 'jpg';
            $handle->image_ratio_crop = 'C';
            $handle->image_x = 900;
            $handle->image_y = 500;

            $handle->Process($dir_dest);
            
            if ($handle->processed) {
                $info = getimagesize($handle->file_dst_pathname);
                $imgName = $handle->file_src_name;
                
            }

            
            
        }

        $query = "INSERT INTO `activity-photo` (`activity_id`,`image_name`,`title`) VALUES('" . mysql_real_escape_string($_POST['activity_id']) . "','" . mysql_real_escape_string($imgName) . "','" . mysql_real_escape_string($_POST['title']) . "')";

        $result = $db->readQuery($query);

        return $result;
    }

    public function getAllByActivityId($activityId) {

        $db = new DB();

        $query = "SELECT * FROM `activity-photo` WHERE `activity_id` = '" . $activityId . "' ORDER BY `sort` ASC";

        $result = $db->readQuery($query);

        $array_res = array();

        while ($row = mysql_fetch_array($result)) {
            array_push($array_res, $row);
        }
        return $array_res;
    }

    public function getById($id) {

        $db = new DB();

        $query = "SELECT * FROM `activity-photo` WHERE `id` = '" . $id . "' ";

        $result = $db->readQuery($query);

        $row = mysql_fetch_array($result);

        return $row;
    }

    public function editById($data, $file, $imgOld, $id) {
        
        $db = new DB();

        $dir_dest = '../images/Things_to_do/photos/';
        

        $handle = new Upload($file['image']);

        $imgName = null;

        if ($handle->uploaded) {
            $handle->image_resize = true;
            $handle->file_new_name_body = TRUE;
            $handle->file_overwrite = TRUE;
            $handle->file_new_name_ext = FALSE;
            $handle->image_ratio_crop = 'C';
            $handle->file_new_name_body = $imgOld;
            $handle->image_x = 900;
            $handle->image_y = 500;

            $handle->Process($dir_dest);

            if ($handle->processed) {
                $info = getimagesize($handle->file_dst_pathname);
                $imgName = $handle->file_dst_name;
            }

            
        }

        $query = "UPDATE `activity-photo` SET `title` = '" . mysql_real_escape_string($_POST['title']) . "'"
                . "WHERE `id` = '" . $id . "' ";

        $result = $db->readQuery($query);

        return $result;
    }
    
    public function deleteById($id){
        
        $db = new DB();
        
        $query = "DELETE FROM `activity-photo` WHERE `id` = '".$id['ID']."' ";
        
        $result = $db->readQuery($query);
        
        return $result;
    }
    
    public function deleteByActivityId($activityId){
        
        $db = new DB();
        
        $query = "DELETE FROM `activity-photo` WHERE `activity_id` = '".$activityId['ID']."' ";
        
        $result = $db->readQuery($query);
        
        return $result;
    }

}

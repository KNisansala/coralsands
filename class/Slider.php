<?php

class Slider {

    public function add($data, $file) {

        $db = new DB();

        $dir_dest = '../images/slider/';

        $handle = new Upload($file['image']);

        $imgName = NULL;

        if ($handle->uploaded) {
            $handle->image_resize = true;
            $handle->file_new_name_ext = 'jpg';
            $handle->image_ratio_crop = 'C';
            $handle->image_x = 1920;
            $handle->image_y = 961;

            $handle->Process($dir_dest);

            if ($handle->processed) {
                $info = getimagesize($handle->file_dst_pathname);
                $imgName = $handle->file_dst_name;
            }
        }

        $query = "INSERT INTO `main-slider` (`image_name`,`title`) VALUES('" . mysql_real_escape_string($imgName) . "','" . mysql_real_escape_string($data['title']) . "')";

        $result = $db->readQuery($query);

        return $result;
    }

    public function getSlider() {

        $db = new DB();

        $query = "SELECT * FROM `main-slider` ORDER BY sort ASC";

        $result = $db->readQuery($query);

        $array_res = array();

        while ($row = mysql_fetch_array($result)) {

            array_push($array_res, $row);
        }

        return $array_res;
    }
    
    public function getById($id){
        
        $db = new DB();
        
        $query = "SELECT * FROM `main-slider` WHERE `id` = '".$id."' ";
        
        $result = $db->readQuery($query);
        
        $row = mysql_fetch_assoc($result);
        
        return $row;
        
    }

    public function editById($id, $data, $imgOld, $file) {
       
        $db = new DB();

        $dir_dest = '../images/slider/';

        $handle = new Upload($file['image']);

        $imgName = null;

        if ($handle->uploaded) {
            $handle->image_resize = true;
            $handle->file_new_name_body = TRUE;
            $handle->file_overwrite = TRUE;
            $handle->file_new_name_ext = FALSE;
            $handle->image_ratio_crop = 'C';
            $handle->file_new_name_body = $imgOld;
            $handle->image_x = 1920;
            $handle->image_y = 961;

            $handle->Process($dir_dest);

            if ($handle->processed) {
                $info = getimagesize($handle->file_dst_pathname);
                $imgName = $handle->file_dst_name;
            }
        }

        $query = "UPDATE `main-slider` SET "
                . "`title` = '" . mysql_real_escape_string($_POST['title']) . "' "
                . "WHERE `id` = '" . $id . "' ";

        $result = $db->readQuery($query);

        return $result;
    }
    
    public function deleteById($id){
        
        $db = new DB();
        
        $query = "DELETE FROM `main-slider` WHERE `id` =  '".$id['SliderId']."'";
        
        $result = $db->readQuery($query);
        
        return $result;
    }

}

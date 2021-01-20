<?php

class Offers {

    public function add($data, $file) {

        $db = new DB();

        $dir_dest = '../images/offers/';
        $dir_dest_thumb = '../images/offers/thumb/';

        $handle = new Upload($file['image']);

        $imgName = null;

        if ($handle->uploaded) {
            $handle->image_resize = true;
            $handle->file_new_name_ext = 'jpg';
            $handle->image_ratio_crop = 'C';
            $handle->image_x = 600;
            $handle->image_y = 430;

            $handle->Process($dir_dest);

            if ($handle->processed) {
                $info = getimagesize($handle->file_dst_pathname);
                $imgName = $handle->file_dst_name;
            }
            $handle->image_resize = true;
            $handle->file_new_name_ext = 'jpg';
            $handle->image_ratio_crop = 'C';
            $handle->image_x = 312;
            $handle->image_y = 205;

            $handle->Process($dir_dest_thumb);

            if ($handle->processed) {
                $info = getimagesize($handle->file_dst_pathname);
                $imgName = $handle->file_dst_name;
            }
        }

        $query = "INSERT INTO `offers` (`title`, `description`, `image_name`) VALUES('" . mysql_real_escape_string($_POST['title']) . "','" . mysql_real_escape_string($_POST['description']) . "', '" . mysql_real_escape_string($imgName) . "')";

        $result = $db->readQuery($query);

        return $result;
    }
    
    public function getAll(){
        
        $db = new DB();
        
        $query = "SELECT * FROM `offers` ORDER BY sort ASC ";
        
        $result = $db->readQuery($query);
        
        $array_res = array();
        
        while ($row = mysql_fetch_array($result)) {
            array_push($array_res, $row);
        }
        
        return $array_res;
    }

    public function getById($id) {

        $db = new DB();

        $query = "SELECT * FROM `offers` WHERE `id` = '" . $id . "' ";

        $result = $db->readQuery($query);

        $row = mysql_fetch_array($result);

        return $row;
    }

    public function editById($data, $file, $imgOld, $id) {
       
        $db = new DB();

        $dir_dest = '../images/offers/';
        $dir_dest_thumb = '../images/offers/thumb/';

        $handle = new Upload($file['image']);

        $imgName = null;

        if ($handle->uploaded) {
            $handle->image_resize = true;
            $handle->file_new_name_body = TRUE;
            $handle->file_overwrite = TRUE;
            $handle->file_new_name_ext = FALSE;
            $handle->image_ratio_crop = 'C';
            $handle->file_new_name_body = $imgOld;
            $handle->image_x = 600;
            $handle->image_y = 430;

            $handle->Process($dir_dest);

            if ($handle->processed) {
                $info = getimagesize($handle->file_dst_pathname);
                $imgName = $handle->file_dst_name;
            }
            $handle->image_resize = true;
            $handle->file_new_name_body = TRUE;
            $handle->file_overwrite = TRUE;
            $handle->file_new_name_ext = FALSE;
            $handle->image_ratio_crop = 'C';
            $handle->file_new_name_body = $imgOld;
            $handle->image_x = 312;
            $handle->image_y = 205;

            $handle->Process($dir_dest_thumb);

            if ($handle->processed) {
                $info = getimagesize($handle->file_dst_pathname);
                $imgName = $handle->file_dst_name;
            }
        }

        $query = "UPDATE `offers` SET "
                . "`title` = '" . mysql_real_escape_string($_POST['title']) . "',"
                . "`description` = '" . mysql_real_escape_string($_POST['description']) . "'"
                . "WHERE `id` = '" . $id . "' ";

        $result = $db->readQuery($query);

        return $result;
    }
    
    public function deleteById($id){
        
        $db = new DB();
        
        $query = "DELETE FROM `offers` WHERE `id` = '" . $id . "' ";
        
        $result = $db->readQuery($query);
        
        return $result;
    }

}

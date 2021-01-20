<?php

class Gallery {

    public function add($data, $file) {

        $db = new DB();

        $dir_dest = '../images/gallery/';
        $dir_dest_thumb = '../images/gallery/thumb/';

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
                $imgName = $handle->file_dst_name;
            }

            $handle->image_resize = true;
            $handle->file_new_name_ext = 'jpg';
            $handle->image_ratio_crop = 'C';
            $handle->image_x = 243;
            $handle->image_y = 145;

            $handle->Process($dir_dest_thumb);

            if ($handle->processed) {
                $info = getimagesize($handle->file_dst_pathname);
            }
        }

        $query = "INSERT INTO `gallery` (`image_type`,`image_name`,`title`) VALUES('" . mysql_real_escape_string($_POST['imageType']) . "', '" . mysql_real_escape_string($imgName) . "', '" . mysql_real_escape_string($_POST['title']) . "')";

        $result = $db->readQuery($query);

        return $result;
    }

    public function getAll() {

        $db = new DB();

        $query = "SELECT * FROM `gallery` ORDER BY sort ASC ";

        $result = $db->readQuery($query);

        $array_res = array();

        while ($row = mysql_fetch_array($result)) {
            array_push($array_res, $row);
        }

        return $array_res;
    }
    
    public function getById($id){
        
        $db = new DB();
        
        $query = "SELECT * FROM `gallery` WHERE `id` = '".$id."' ";
        
        $result = $db->readQuery($query);
        
        $row = mysql_fetch_array($result);
        
        return $row;
        
    }

    public function editById($data, $file, $imgOld, $id) {

        $db = new DB();

        $dir_dest = '../images/gallery/';
        $dir_dest_thumb = '../images/gallery/thumb/';
        

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
            $handle->image_resize = true;
            $handle->file_new_name_body = TRUE;
            $handle->file_overwrite = TRUE;
            $handle->file_new_name_ext = FALSE;
            $handle->image_ratio_crop = 'C';
            $handle->file_new_name_body = $imgOld;
            $handle->image_x = 243;
            $handle->image_y = 145;

            $handle->Process($dir_dest_thumb);

            if ($handle->processed) {
                $info = getimagesize($handle->file_dst_pathname);
                $imgName = $handle->file_dst_name;
            }

        }

        $query = "UPDATE `gallery` SET `title` = '" . mysql_real_escape_string($_POST['title']) . "' WHERE `id` = '".$id."' ";

        $result = $db->readQuery($query);

        return $result;
    }
    
    public function deleteById($id){
        
        $db = new DB();
        
        $query = "DELETE FROM `gallery` WHERE `id` = '".$id['Id']."' ";
        
        $result = $db->readQuery($query);
        
        return $result;
    }

}

<?php

class MainSection {

    public function add($data, $file) {

        $db = new DB();

        $dir_dest = '../images/subsection/';

        $handle = new Upload($file['image']);

        $imgName = null;

        if ($handle->uploaded) {
            $handle->image_resize = true;
            $handle->file_new_name_ext = 'jpg';
            $handle->image_ratio_crop = 'C';
            $handle->image_x = 360;
            $handle->image_y = 504;

            $handle->Process($dir_dest);

            if ($handle->processed) {
                $info = getimagesize($handle->file_dst_pathname);
                $imgName = $handle->file_dst_name;
            }
        }

        $query = "INSERT INTO `main-section` (`image_name`,`title`,`title_g`,`title_r`,`title_c`,`link`,`description`,`description_g`,`description_r`,`description_c`) VALUES('" . mysql_real_escape_string($imgName) . "','" . mysql_real_escape_string($_POST['title']) . "','" . mysql_real_escape_string($_POST['title_g']) . "','" . mysql_real_escape_string($_POST['title_r']) . "','" . mysql_real_escape_string($_POST['title_c']) . "','" . mysql_real_escape_string($_POST['link']) . "','" . mysql_real_escape_string($_POST['description']) . "','" . mysql_real_escape_string($_POST['description_g']) . "','" . mysql_real_escape_string($_POST['description_r']) . "','" . mysql_real_escape_string($_POST['description_c']) . "')";

        $result = $db->readQuery($query);

        return $result;
    }
    
    public function getAll(){
        
        $db = new DB();
        
        $query = "SELECT * FROM `main-section` ORDER BY sort ASC ";
        
        $result = $db->readQuery($query);
        
        $array_res = array();
        
        while ($row = mysql_fetch_array($result)) {
            array_push($array_res, $row);
        }
        
        return $array_res;
    }

    public function getById($id) {

        $db = new DB();

        $query = "SELECT * FROM `main-section` WHERE `id` = '" . $id . "' ";

        $result = $db->readQuery($query);

        $row = mysql_fetch_array($result);

        return $row;
    }

    public function editById($data, $file, $imgOld, $id) {
       
        $db = new DB();

        $dir_dest = '../images/subsection/';

        $handle = new Upload($file['image']);

        $imgName = null;

        if ($handle->uploaded) {
            $handle->image_resize = true;
            $handle->file_new_name_body = TRUE;
            $handle->file_overwrite = TRUE;
            $handle->file_new_name_ext = FALSE;
            $handle->image_ratio_crop = 'C';
            $handle->file_new_name_body = $imgOld;
            $handle->image_x = 360;
            $handle->image_y = 504;

            $handle->Process($dir_dest);

            if ($handle->processed) {
                $info = getimagesize($handle->file_dst_pathname);
                $imgName = $handle->file_dst_name;
            }
        }

        $query = "UPDATE `main-section` SET "
                . "`title` = '" . mysql_real_escape_string($_POST['title']) . "',"
                . "`title_g` = '" . mysql_real_escape_string($_POST['title_g']) . "',"
                . "`title_r` = '" . mysql_real_escape_string($_POST['title_r']) . "',"
                . "`title_c` = '" . mysql_real_escape_string($_POST['title_c']) . "',"
                . "`link` = '" . mysql_real_escape_string($_POST['link']) . "',"
                . "`description` = '" . mysql_real_escape_string($_POST['description']) . "',"
                . "`description_g` = '" . mysql_real_escape_string($_POST['description_g']) . "',"
                . "`description_r` = '" . mysql_real_escape_string($_POST['description_r']) . "',"
                . "`description_c` = '" . mysql_real_escape_string($_POST['description_c']) . "'"
                . "WHERE `id` = '" . $id . "' ";

        $result = $db->readQuery($query);

        return $result;
    }
    
    public function deleteById($id){
        
        $db = new DB();
        
        $query = "DELETE FROM `main-section` WHERE `id` = '".$_POST['Id']."' ";
        
        $result = $db->readQuery($query);
        
        return $result;
    }

}

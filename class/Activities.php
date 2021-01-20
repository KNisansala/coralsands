<?php

class Activities {

    public function add($data, $file) {

        $db = new DB();

        $dir_dest = '../images/Things_to_do/';
        $dir_dest_thumb = '../images/Things_to_do/thumb/';


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
            $handle->image_resize = true;
            $handle->file_new_name_ext = 'jpg';
            $handle->image_ratio_crop = 'C';
            $handle->image_x = 390;
            $handle->image_y = 217;

            $handle->Process($dir_dest_thumb);

            if ($handle->processed) {
                $info = getimagesize($handle->file_dst_pathname);
                $imgName = $handle->file_src_name;
            }
        }

        $query = "INSERT INTO `activities` (`image_name`,`title`,`title_g`,`title_r`,`title_c`,`duration`,`distance`,`shortDescription`,`shortDescription_g`,`shortDescription_r`,`shortDescription_c`,`description`,`description_g`,`description_r`,`description_c`) VALUES ('" . mysql_real_escape_string($imgName) . "','" . mysql_real_escape_string($_POST['title']) . "','" . mysql_real_escape_string($_POST['title_g']) . "','" . mysql_real_escape_string($_POST['title_r']) . "','" . mysql_real_escape_string($_POST['title_c']) . "','" . mysql_real_escape_string($_POST['duration']) . "','" . mysql_real_escape_string($_POST['distance']) . "','" . mysql_real_escape_string($_POST['shortDescription']) . "','" . mysql_real_escape_string($_POST['shortDescription_g']) . "','" . mysql_real_escape_string($_POST['shortDescription_r']) . "','" . mysql_real_escape_string($_POST['shortDescription_c']) . "','" . mysql_real_escape_string($_POST['description']) . "','" . mysql_real_escape_string($_POST['description_g']) . "','" . mysql_real_escape_string($_POST['description_r']) . "','" . mysql_real_escape_string($_POST['description_c']) . "')";

        $result = $db->readQuery($query);

        return $result;
    }

    public function getAll() {

        $db = new DB();

        $query = "SELECT * FROM `activities` ORDER BY sort ASC";

        $result = $db->readQuery($query);

        $array_res = array();

        while ($row = mysql_fetch_array($result)) {
            array_push($array_res, $row);
        }

        return $array_res;
    }

    public function getById($id) {

        $db = new DB();

        $query = "SELECT * FROM `activities` WHERE `id` = '" . $id . "' ";

        $result = $db->readQuery($query);

        $row = mysql_fetch_array($result);

        return $row;
    }

    public function editById($data, $file, $imgOld, $id) {

        $db = new DB();

        $dir_dest = '../images/Things_to_do/';
        $dir_dest_thumb = '../images/Things_to_do/thumb/';


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
            $handle->image_x = 390;
            $handle->image_y = 217;

            $handle->Process($dir_dest_thumb);

            if ($handle->processed) {
                $info = getimagesize($handle->file_dst_pathname);
                $imgName = $handle->file_dst_name;
            }
        }

        $query = "UPDATE `activities` SET "
                . "`title` = '" . mysql_real_escape_string($_POST['title']) . "',"
                . "`title_g` = '" . mysql_real_escape_string($_POST['title_g']) . "',"
                . "`title_r` = '" . mysql_real_escape_string($_POST['title_r']) . "',"
                . "`title_c` = '" . mysql_real_escape_string($_POST['title_c']) . "',"
                . "`duration` = '" . mysql_real_escape_string($_POST['duration']) . "',"
                . "`distance` = '" . mysql_real_escape_string($_POST['distance']) . "',"
                . "`shortDescription` = '" . mysql_real_escape_string($_POST['shortDescription']) . "',"
                . "`shortDescription_g` = '" . mysql_real_escape_string($_POST['shortDescription_g']) . "',"
                . "`shortDescription_r` = '" . mysql_real_escape_string($_POST['shortDescription_r']) . "',"
                . "`shortDescription_c` = '" . mysql_real_escape_string($_POST['shortDescription_c']) . "',"
                . "`description` = '" . mysql_real_escape_string($_POST['description']) . "',"
                . "`description_g` = '" . mysql_real_escape_string($_POST['description_g']) . "',"
                . "`description_r` = '" . mysql_real_escape_string($_POST['description_r']) . "',"
                . "`description_c` = '" . mysql_real_escape_string($_POST['description_c']) . "'"
                . "WHERE `id` = '" . $id . "'";

        $result = $db->readQuery($query);

        return $result;
    }

    public function deleteById($id) {

        $db = new DB();

        $query = "DELETE FROM `activities` WHERE `id` = '" . $id['Id'] . "' ";

        $result = $db->readQuery($query);

        return $result;
    }

}

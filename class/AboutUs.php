<?php

class AboutUs {

    public function update($data, $file, $imgOld) {

        $db = new DB();

        $dir_dest = '../images/about-us/';

        $handle = new Upload($file['image']);

        $imgName = null;

        if ($handle->uploaded) {
            $handle->image_resize = true;
            $handle->file_new_name_body = TRUE;
            $handle->file_overwrite = TRUE;
            $handle->file_new_name_ext = FALSE;
            $handle->image_ratio_crop = 'C';
            $handle->file_new_name_body = $imgOld;
            $handle->image_x = 450;
            $handle->image_y = 250;

            $handle->Process($dir_dest);

            if ($handle->processed) {
                $info = getimagesize($handle->file_dst_pathname);
                $imgName = $handle->file_dst_name;
            }
        }

        $query = "UPDATE `about-us` SET "
                . "`description` = '" . mysql_real_escape_string($_POST['description']) . "',"
                . "`vision` = '" . mysql_real_escape_string($_POST['vision']) . "',"
                . "`mission` = '" . mysql_real_escape_string($_POST['mission']) . "',"
                . "`strength` = '" . mysql_real_escape_string($_POST['strength']) . "',"
                . "`history` = '" . mysql_real_escape_string($_POST['history']) . "',"
                . "`description_g`= '" . mysql_real_escape_string($_POST['description_g']) . "',"
                . "`vision_g` = '" . mysql_real_escape_string($_POST['vision_g']) . "',"
                . "`mission_g` = '" . mysql_real_escape_string($_POST['mission_g']) . "',"
                . "`strength_g` = '" . mysql_real_escape_string($_POST['strength_g']) . "',"
                . "`history_g` = '" . mysql_real_escape_string($_POST['history_g']) . "',"
                . "`description_r` = '" . mysql_real_escape_string($_POST['description_r']) . "',"
                . "`vision_r` = '" . mysql_real_escape_string($_POST['vision_r']) . "',"
                . "`mission_r` = '" . mysql_real_escape_string($_POST['mission_r']) . "',"
                . "`strength_r` = '" . mysql_real_escape_string($_POST['strength_r']) . "',"
                . "`history_r` = '" . mysql_real_escape_string($_POST['history_r']) . "',"
                . "`description_c` = '" . mysql_real_escape_string($_POST['description_c']) . "',"
                . "`vision_c` = '" . mysql_real_escape_string($_POST['vision_c']) . "',"
                . "`mission_c` = '" . mysql_real_escape_string($_POST['mission_c']) . "',"
                . "`strength_c` = '" . mysql_real_escape_string($_POST['strength_c']) . "',"
                . "`history_c` = '" . mysql_real_escape_string($_POST['history_c']) . "'"
                . "WHERE `id` = 1 ";

        $result = $db->readQuery($query);

        return $result;
    }

    public function getAboutUs() {  
        $db = new DB();

        $query = "SELECT * FROM `about-us` ";

        $result = $db->readQuery($query);

        $row = mysql_fetch_array($result);

        return $row;
    }

}

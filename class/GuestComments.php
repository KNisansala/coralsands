<?php

class GuestComments {

    public function add($data, $file) {

        $db = new DB();

        $dir_dest = '../images/comment/';

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

        $query = "INSERT INTO `guest-comment` (`image_name`,`name`,`name_g`,`name_r`,`name_c`,`country`,`country_g`,`country_r`,`country_c`,`comment`,`comment_g`,`comment_r`,`comment_c`) VALUES ('" . mysql_real_escape_string($imgName) . "','" . mysql_real_escape_string($_POST['name']) . "','" . mysql_real_escape_string($_POST['name_g']) . "','" . mysql_real_escape_string($_POST['name_r']) . "','" . mysql_real_escape_string($_POST['name_c']) . "','" . mysql_real_escape_string($_POST['country']) . "','" . mysql_real_escape_string($_POST['country_g']) . "','" . mysql_real_escape_string($_POST['country_r']) . "','" . mysql_real_escape_string($_POST['country_c']) . "','" . mysql_real_escape_string($_POST['comment']) . "','" . mysql_real_escape_string($_POST['comment_g']) . "','" . mysql_real_escape_string($_POST['comment_r']) . "','" . mysql_real_escape_string($_POST['comment_c']) . "')";

        $result = $db->readQuery($query);

        return $result;
    }

    public function getAll() {

        $db = new DB();

        $query = "SELECT * FROM `guest-comment` ORDER BY sort ASC";

        $result = $db->readQuery($query);

        $array_res = array();

        while ($row = mysql_fetch_array($result)) {
            array_push($array_res, $row);
        }

        return $array_res;
    }

    public function getById($id) {

        $db = new DB();

        $query = "SELECT * FROM `guest-comment` WHERE `id` = '" . $id . "' ";

        $result = $db->readQuery($query);

        $row = mysql_fetch_array($result);

        return $row;
    }

    public function editById($data, $file, $imgOld, $id) {

        $db = new DB();

        $dir_dest = '../images/comment/';

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

        $query = "UPDATE `guest-comment` SET "
                . "`name` = '" . mysql_real_escape_string($_POST['name']) . "',"
                . "`name_g` = '" . mysql_real_escape_string($_POST['name_g']) . "',"
                . "`name_r` = '" . mysql_real_escape_string($_POST['name_r']) . "',"
                . "`name_c` = '" . mysql_real_escape_string($_POST['name_c']) . "',"
                . "`country` = '" . mysql_real_escape_string($_POST['country']) . "',"
                . "`country_g` = '" . mysql_real_escape_string($_POST['country_g']) . "',"
                . "`country_r` = '" . mysql_real_escape_string($_POST['country_r']) . "',"
                . "`country_c` = '" . mysql_real_escape_string($_POST['country_c']) . "',"
                . "`comment` = '" . mysql_real_escape_string($_POST['comment']) . "',"
                . "`comment_g` = '" . mysql_real_escape_string($_POST['comment_g']) . "',"
                . "`comment_r` = '" . mysql_real_escape_string($_POST['comment_r']) . "',"
                . "`comment_c` = '" . mysql_real_escape_string($_POST['comment_c']) . "'"
                . "WHERE `id` = '" . $id . "' ";

        $result = $db->readQuery($query);

        return $result;
    }

    public function deleteCommentById($id) {

        $db = new DB();

        $query = "DELETE FROM `guest-comment` WHERE `id` = '" . $_POST['Id'] . "'";

        $result = $db->readQuery($query);

        return $result;
    }

}

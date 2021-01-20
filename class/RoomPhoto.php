<?php

class RoomPhoto {

    public function add($data, $file) {

        $this->room_type = $data['room_type'];
        $this->caption = $data['caption'];

        $db = new DB();

        $dir_dest = '../images/room-type/photo/';
        $dir_dest_thumb = '../images/room-type/photo/thumb/';

        $handle = new Upload($file['image']);

        $newImgName = RoomType::filename();

        $imgName = null;

        if ($handle->uploaded) {
            $handle->image_resize = true;
            $handle->file_new_name_ext = 'jpg';
            $handle->file_new_name_body = $newImgName;
            $handle->image_ratio_crop = 'C';
            $handle->image_x = 900;
            $handle->image_y = 600;

            $handle->Process($dir_dest);

            if ($handle->processed) {
                $info = getimagesize($handle->file_dst_pathname);
                $imgName = $handle->file_dst_name;
            }

            $handle->image_resize = true;
            $handle->file_new_name_ext = 'jpg';
            $handle->file_new_name_body = $newImgName;
            $handle->image_ratio_crop = 'C';
            $handle->image_x = 300;
            $handle->image_y = 200;

            $handle->Process($dir_dest_thumb);

            if ($handle->processed) {
                $info = getimagesize($handle->file_dst_pathname);
            }
        }
        $query = "INSERT INTO `room-photo` (`room_type`,`image_name`,`caption`) VALUES ('" . mysql_real_escape_string($this->room_type) . "','" . mysql_real_escape_string($imgName) . "','" . mysql_real_escape_string($this->caption) . "') ";

        $result = $db->readQuery($query);

        return $result;
    }

    public function getRoomPhotosByRoomTypeId($id) {

        $db = new DB();

        $query = "SELECT * FROM `room-photo` WHERE `room_type` = '" . $id . "' ORDER BY sort ASC";

        $result = $db->readQuery($query);

        $array_res = array();

        while ($row = mysql_fetch_array($result)) {
            $photo = array(
                'id' => $row['id'],
                'room_type' => $row['room_type'],
                'image_name' => $row['image_name'],
                'caption' => $row['caption']
            );

            array_push($array_res, $photo);
        }

        return $array_res;
    }

    public function getRoomPhotoById($id) {

        $db = new DB();

        $query = "SELECT * FROM `room-photo` WHERE `id` = '" . $id . "' ";

        $result = $db->readQuery($query);

        $row = mysql_fetch_assoc($result);

        return $row;
    }

    public function editRoomPhotoById($data, $file, $id, $imageold) {

        $db = new DB();

        $this->caption = $data['caption'];

        $dir_dest = '../images/room-type/photo/';
        $dir_dest_thumb = '../images/room-type/photo/thumb/';

        $handle = new Upload($file['image']);

        $imgName = null;

        if ($handle->uploaded) {
            $handle->image_resize = true;
            $handle->file_new_name_body = TRUE;
            $handle->file_overwrite = TRUE;
            $handle->file_new_name_ext = FALSE;
            $handle->image_ratio_crop = 'C';
            $handle->file_new_name_body = $imageold;
            $handle->image_x = 900;
            $handle->image_y = 600;

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
            $handle->file_new_name_body = $imageold;
            $handle->image_x = 300;
            $handle->image_y = 200;

            $handle->Process($dir_dest_thumb);

            if ($handle->processed) {
                $info = getimagesize($handle->file_dst_pathname);
                $imgName = $handle->file_dst_name;
            }
        }

        $query = "UPDATE `room-photo` SET "
                . " `caption` = '" . mysql_real_escape_string($this->caption) . "'"
                . " WHERE `id` = '" . $id . "' ";

        $result = $db->readQuery($query);

        return $result;
    }

    public function deleteRoomPhotoByRoomTypeId($id) {

        $db = new DB();

        $query = "DELETE FROM `room-photo` WHERE `room_type` = '" . $id . "' ";

        $result = $db->readQuery($query);

        return $result;
    }
    
    public function deleteRoomPhotoById($id) {

        $db = new DB();

        $query = "DELETE FROM `room-photo` WHERE `id` = '" . $id . "' ";

        $result = $db->readQuery($query);

        return $result;
    }

}

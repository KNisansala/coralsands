<?php

class User
{

    public function isUser($data)
    {

        $db = new DB();

        $query = "SELECT `name`,`username`,`password` FROM `user` WHERE `username` = '" . mysql_real_escape_string($data['username']) . "' AND `password` = '" . mysql_real_escape_string($data['password']) . "' ";

        $result = $db->readQuery($query);

        if (!mysql_fetch_array($result)) {
            return TRUE;
        } else {
            return FALSE;
        }
    }

    public function getUser()
    {

        $db = new DB();

        $query = "SELECT * FROM `user`";

        $result = $db->readQuery($query);

        $array_res = array();

        while ($row = mysql_fetch_array($result)) {

            $array_res['id'] = $row['id'];
            $array_res['name'] = $row['name'];
            $array_res['username'] = $row['username'];
            $array_res['password'] = $row['password'];
        }

        return $array_res;
    }

    public function isExists($data)
    {

        $db = new DB();

        $query = "SELECT * FROM `user` WHERE `password` = '" . mysql_real_escape_string($data['oldpassword']) . "' ";

        $result = $db->readQuery($query);

        if (!mysql_fetch_array($result)) {
            return FALSE;
        } else {
            return TRUE;
        }
    }

    public function edit($data)
    {

        $db = new DB();

        $query = "UPDATE `user` SET `name` = '" . mysql_real_escape_string($_POST['name']) . "', `username` = '" . mysql_real_escape_string($_POST['username']) . "', `password` = '" . mysql_real_escape_string($_POST['comfirmpass']) . "' WHERE `id` = '1' ";

        $result = $db->readQuery($query);

        return $result;
    }

    ///*     * ** */////

    function forceLogin()
    {
        if (isset($_SESSION['user_id']) && isset($_SESSION['authcode'])) {
            // The user is allowed
        } else {
            // The user is not allowed
            header("Location: login/");
            exit;
        }
    }

    function forceLogged()
    {
        if (isset($_SESSION['user_id']) && isset($_SESSION['authcode'])) {
            // Already Logged
            header("Location: ../index.php");
            exit;
        } else {
            // Do the Login try
        }
    }

    function findUser($un, $fetch_assoc = false)
    {

        //    $id = (int) filter_var( $id , FILTER_SANITIZE_NUMBER_INT);

        $db = new DB();
        $un = mysql_real_escape_string($un);
        $query = "SELECT `id`,`password` FROM `user` WHERE `username` = '" . $un . "' LIMIT 1";

        $result = $db->readQuery($query);
        $row = mysql_fetch_assoc($result);

        if ($fetch_assoc) {
            return $row;
        }

        $user_found = (bool) $row;
        return $user_found;
    }

    function checkUser($user_id, $authcode)
    {

        $db = new DB();
        $user_id = mysql_real_escape_string($user_id);
        // $user_id = (int) filter_var($user_id, FILTER_SANITIZE_NUMBER_INT);

        //        $sql = "SELECT * FROM `user` WHERE (`id` = " . $user_id . ") AND (`auth` = '" . $authcode . "') LIMIT 1";
        $sql = "SELECT * FROM `user` WHERE (`id` = " . $user_id . ") LIMIT 1";
        $result = $db->readQuery($sql);
        $row = mysql_fetch_assoc($result);

        if ($row !== false) {
            return $row;
        } else {
            header('location: login/logout.php');
        }
    }

    public function random_str($length = 27, $keyspace = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ')
    {
        $str = '';
        $max = mb_strlen($keyspace, '8bit') - 1;
        for ($i = 0; $i < $length; ++$i) {
            $str .= $keyspace[rand(0, $max)];
        }

        return $str;
    }

    public function setAuth($id, $authcode)
    {

        $db = new DB();

        $query = "UPDATE `user` SET `auth` = '" . mysql_real_escape_string($authcode) . "' WHERE `id` = '" . mysql_real_escape_string($id) . "' LIMIT 1";

        if ($db->readQuery($query)) {
            return TRUE;
        } else {
            return FALSE;
        }
    }

    function checkById($id, $fetch_assoc = false)
    {

        $db = new DB();
        $id = mysql_real_escape_string($id);
        // $id = (int) filter_var($id, FILTER_SANITIZE_NUMBER_INT);

        $query = "SELECT `id`,`password` FROM `user` WHERE `id` = '" . $id . "' LIMIT 1";

        $result = $db->readQuery($query);
        $row = mysql_fetch_assoc($result);

        if ($fetch_assoc) {
            return $row;
        }

        $user_found = (bool) $row;
        return $user_found;
    }

    public function updateProfile($id, $name, $username)
    {

        $db = new DB();

        $query = "UPDATE `user` SET `name` = '" . mysql_real_escape_string($name) . "', `username` = '" . mysql_real_escape_string($username) . "' WHERE `id` = '" . mysql_real_escape_string($id) . "' LIMIT 1";

        if ($db->readQuery($query)) {
            return TRUE;
        } else {
            return FALSE;
        }
    }

    public function updatePassword($id, $password)
    {

        $db = new DB();

        $query = "UPDATE `user` SET `password` = '" . mysql_real_escape_string($password) . "' WHERE `id` = '" . mysql_real_escape_string($id) . "' LIMIT 1";

        if ($db->readQuery($query)) {
            return TRUE;
        } else {
            return FALSE;
        }
    }
}

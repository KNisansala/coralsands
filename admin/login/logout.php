<?php

if (!isset($_SESSION)) {

    session_start();

}



unset($_SESSION["user_id"]);

unset($_SESSION["authcode"]);
unset($_SESSION["is_verified"]);



header('location: ./');


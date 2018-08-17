<?php
error_reporting(0);
class DB {

    private $databaseHost = "localhost";
    private $databaseName = "coralsands";
    private $databaseUser = "root";
    private $databasePassword = "";
  
//    private $databaseHost = "localhost:3306";
//    private $databaseName = "siyavwie_coral";
//    private $databaseUser = "siyavwie_coral";
//    private $databasePassword = ")s2y%M(NTAR@";

    public function __construct() {
        mysql_connect($this->databaseHost, $this->databaseUser, $this->databasePassword);
        mysql_select_db($this->databaseName) or die("Unable to Select Database");
    }

    public function readQuery($query) {
        $result = mysql_query($query) or die(mysql_error());
        return $result;
    }

}

function dd($data) {
    var_dump($data);
    exit();
}

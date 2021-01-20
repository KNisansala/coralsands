<?php
error_reporting(0);
class DB {

   private $databaseHost = "localhost";
   private $databaseName = "coralsands";
   private $databaseUser = "root";
   private $databasePassword = "";
  
    // private $databaseHost = "localhost:3306";
    // private $databaseName = "islapiiu_coralsands";
    // private $databaseUser = "islapiiu_main";
    // private $databasePassword = "Ue.t;FNgC?BG,Paf8V";

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

<?php

class Model
{
    public $connect;

    public function __construct()
    {
        $serverName = SERVER_NAME;
        $userName = USER_NAME;
        $password = PASSWORD;
        $dbName = DB_NAME;

        $utf8 = array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES 'utf8' ");
        $this->connect = new PDO("mysql:host={$serverName};dbname={$dbName}", $userName, $password, $utf8);
        $this->connect->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    }
}

?>
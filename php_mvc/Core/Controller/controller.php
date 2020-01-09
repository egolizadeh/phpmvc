<?php

class Controller
{
    public $model;

    public function __construct()
    {

    }

    public function Views($url, $data = array())
    {
        require "header.php";
        require "App/Views/{$url}" . ".php";
        require "footer.php";
    }

    public function Model($url)
    {
        require "App/Models/model_{$url}" . ".php";
        $object = "model_{$url}";
        $this->model = new $object;
    }
}

?>
<?php

class Index extends Controller
{
    public function __construct()
    {

    }

    public function index()
    {
        $StudentInfo = $this->model->StudentInfo();


        $data = [
            'StudentInfo' => $StudentInfo
        ];

        $this->Views('index/index', $data);
    }
}

?>
# phpmvc
This package contains mvc architecture without using composer

Routing:

<?php

class Router
{
    private $controller = 'index';
    private $method = 'index';
    private $params = [];


    public function __construct()
    {
        if (isset($_GET['url'])):
            $url = $_GET['url'];
            $url = $this->explodeUrl($url);

            $this->controller = $url[0];
            unset($url[0]);

            if (isset($url[1])):
                $this->method = $url[1];
                unset($url[1]);
            endif;
            $this->params = array_values($url);
        endif;

        $controllerAddress = "App/Controllers/{$this->controller}" . ".php";
        if (file_exists($controllerAddress)):
            require $controllerAddress;
            $object = new $this->controller;
            $object->model($this->controller);
            if (method_exists($object, $this->method)):
                call_user_func_array([$object, $this->method], $this->params);
            else:
                require "404.php";
            endif;
        else:
            require "404.php";
        endif;
    }

    private function explodeUrl($url)
    {
        $url = filter_var($url, FILTER_SANITIZE_URL);
        $url = explode('/', $url);
        return $url;
    }
}

?>


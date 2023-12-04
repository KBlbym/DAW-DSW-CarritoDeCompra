<?php
class Router{

    private $controller;
    private $action;
    public function __construct()
    {
        $this->matchRoute();
    }

    public function matchRoute(){
        $url = explode('/', URL);
        $this->controller = !empty($url[1]) ? $url[1] : "Home";
        $this->action = !empty($url[2]) ? $url[2] : "index";

        $this->controller = $this->controller . 'Controller';

        require_once (__DIR__ . '/controllers/' . $this->controller.'.php');
    }

    public function run(){
        $controller = new $this->controller();
        $action = $this->action;
        $controller->$action();
    }
}
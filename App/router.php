<?php
class Router{

    private $controller;
    private $action;
    private $params;
    public function __construct()
    {
        $this->matchRoute();
    }

    public function matchRoute(){
        $url = explode('/', URL);
        // echo "<pre>";
        // var_dump($url);
        // echo "</pre>";
        $this->controller = !empty($url[1]) ? $url[1] : "Home";
        $this->action = !empty($url[2]) ? $url[2] : "index";
        $this->params = !empty($url[3]) ? $url[3] : null;

        $this->controller = $this->controller . 'Controller';

        require_once (__DIR__ . '/controllers/' . $this->controller.'.php');
    }

    public function run(){
        $controller = new $this->controller();
        $action = $this->action;
        if($this->params){
            $controller->$action($this->params);
        }else{
            $controller->$action();
        }
        
    }
}
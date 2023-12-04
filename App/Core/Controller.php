<?php
    class Controller{
        protected function render($path ,$controller, $parameters = [], $layout = ''){
            require_once(__DIR__ . '/../Views/'.$controller.'/'.$path.'.view.php');
        }
    }
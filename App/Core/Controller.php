<?php
    class Controller{
        protected function render($path , $controller,$model = [], $parameters = [], $layout = '_layout'){
            extract($model);
            require_once(__DIR__ . '/../Views/'.$controller.'/'.$path.'.view.php');
        }
    }
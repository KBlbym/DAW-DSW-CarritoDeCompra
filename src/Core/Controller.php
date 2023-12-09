<?php
    class Controller{
        protected function render($path , $controller, $model = [], $parameters = [], $layout = '_layout'){
            ob_start();
            extract($model);
            require_once(__DIR__ . '/../Views/'.$controller.'/'.$path.'.view.php');
            $renderBody = ob_get_clean();
            require_once(__DIR__ . '/../Views/shared/'.$layout.'.php');
        }
    }
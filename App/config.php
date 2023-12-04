<?php
    $folder = dirname($_SERVER['SCRIPT_NAME']);
    $urlPath = $_SERVER['REQUEST_URI'];
    $url = substr($urlPath, strlen($folder));

    // echo $folder . "<br/>";
    // echo $urlPath . "<br/>";
    // echo $url . "<br/>";
    
    //Defenir un consonante global
    define("URL",$url);
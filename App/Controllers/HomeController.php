<?php
class HomeController extends Controller{
    private $context;//va a contener la conexion a la base de datos
   
    public  function index(){
        $this->render('index', 'Home');
    }

}
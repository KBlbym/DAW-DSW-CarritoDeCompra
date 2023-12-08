<?php
require_once (__DIR__ . '../../Models/Product.php');
class ProductsController extends Controller{

    private $_context;

    public function __construct(){
        $conn = new Context();
        $this->_context = $conn->getConnection();
    }
    public  function index(){
        $productModel = new Product($this->_context);
        $products = $productModel->getAll();
        $this->render('index', 'Products', ['products' => $products]);
    }

}
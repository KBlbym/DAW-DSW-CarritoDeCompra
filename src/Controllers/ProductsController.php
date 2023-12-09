<?php
require_once (__DIR__ . '../../Models/Product.php');
class ProductsController extends Controller{

    private $_context;
    private $_products;
    private Product $productModel;

    public function __construct(){
        $conn = new Context();
        $this->_context = $conn->getConnection();
        $this->productModel = new Product($this->_context);
    }
    public  function index(){
        if(isset($_COOKIE['orderby'])){
            $this->_products = $this->productModel->orderBy($_COOKIE['orderby']);
        }else{
            $this->_products = $this->productModel->getAll();
        }
        $this->render('index', 'Products', ['products' => $this->_products]);
    }
    public function orderBy($orderby){
        setcookie("orderby", $orderby, time() + (30 * 24 * 60 * 60), '/');//(la cookies se guarda durante 30 dias)
        $this->_products = $this->productModel->orderBy($orderby);
        $this->render('index', 'Products', ['products' => $this->_products]);
    }

}
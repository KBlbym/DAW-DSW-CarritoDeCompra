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
        $this->_products = $this->productModel->getAll();
        $this->render('index', 'Products', ['products' => $this->_products]);
    }
    public function orderBy($orderby){
        $this->_products = $this->productModel->orderBy($orderby);
        $this->render('index', 'Products', ['products' => $this->_products]);
    }

}
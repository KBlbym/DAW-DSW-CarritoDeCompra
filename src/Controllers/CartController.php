<?php
require_once (__DIR__ . '../../Models/Cart.php');

class CartController extends Controller{
    private $_products = [];


    public function index(){
        $this->render('index', 'Cart', ['products' => $this->_products]);
    }

    public function addToCart(){
        //setcookie('cart', '', time() - 3600, '/'); //descomenta para borrar las cookies

        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $serializedProduct = $_POST['product'];
            $product = json_decode(htmlspecialchars_decode($serializedProduct), true);
            if(isset($_COOKIE['cart'])){
                $cookieCart = json_decode($_COOKIE['cart'], true);
                foreach($cookieCart as $value){
                    array_push($this->_products, $value);
                }
            }
            //antes de añdir nuevo producto al carrito, hay que verificar que ya no existe, de lo contrario aumentar el count
            $key = $this->findInArray($this->_products, $product['id']);
            if ($key !== false) {
                $this->_products[$key]['count'] += 1;
            } else {
                $cart = new Cart($product);
                array_push($this->_products, $cart);
            }
        } 
        
        setcookie('cart', json_encode($this->_products) , time() + (30 * 24 * 60 * 60), '/');
        header('Location: ' . URL_PATH . '/products');
        exit;
    }

    //Buscar si el producto exite en el carrito de compra
    function findInArray($array, $productId) {
        foreach ($array as $key => $item) {
            if (array_key_exists('product', $item) && array_key_exists('id', $item['product']) && $item['product']['id'] === $productId) {
                return $key;
            }
        }
    
        return false; // Si no se encuentra el valor, devuelve false
    }
}
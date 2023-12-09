<?php
class Cart{
    public $product;
    public $count;

    function __construct($product, $count = 1) {
        $this->product = $product;
        $this->count = $count;
    }
    

}
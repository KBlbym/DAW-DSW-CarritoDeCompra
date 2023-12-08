<?php 
class Product extends Orm{
    protected $id;
    private $name;
    private $price;
    private $amount;

    public function __construct(PDO $context){
        parent::__construct("id", "products", $context);
    }

}
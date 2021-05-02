<?php

class Product {
    protected $name;
    protected $price;

    public  function __construct($name , $price)
    {
            $this->name = $name;
            $this->price = $price;
    }

    public function getName(){
        return $this->name;
    }

    public function getPrice(){
        return $this->price;
    }
}

class ProductDummy extends Product{

    public function info(){
        echo "Name $this->name";
        echo "Name $this->price";
        
    }
}
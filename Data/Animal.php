<?php

namespace Data;

abstract class Animal{
    public $name;

    abstract public function run();
}

class Cat extends Animal{
    public function run(){
        echo "Cat $this->name is runing." . PHP_EOL;
        
    }
}

class Dog extends Animal{
    public function run(){
         echo "Dog $this->name is runing." . PHP_EOL;
        
    }
}


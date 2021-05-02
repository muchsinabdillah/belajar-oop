<?php

interface HelloWorld{
    function sayHello();
}

$helloWorld = new class("Eko") implements HelloWorld{

    public $name;

    public function __construct($name)
    {
        $this->name =  $name;
    }
    public function sayHello(){
        echo "Hello $this->name" . PHP_EOL;
    }
};

$helloWorld->sayHello();
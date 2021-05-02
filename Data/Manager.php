<?php

class Manager
{
    var $name;
    var $title;

    public function __construct($name ="",$title ="Manager")
    {   
        $this->name = $name;
        $this->title = $title;
    }
    function sayHello($name)
    {
        echo "Hi $name, my name is Manager $this->name";

    }
}

class VicePresident extends Manager {
    public function __construct($name = "")
    {   
        parent::__construct($name,"VP"); 
    }
    function sayHello($name)
    {
        echo "Hi $name, my name is VP $this->name";

    }
}
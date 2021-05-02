<?php 

namespace Data;

interface HasBrand{
  function  getBrand();
}

interface IsMaintenance{
    function isMaintenance();
}

interface Car extends HasBrand
{
    function drive();

    function getTire();
}

class Avanza implements Car, IsMaintenance {
    public function drive(){
        echo "Drive Avanza" . PHP_EOL;
    }
    public function getTire(){
        return 4;
    }
    public function getBrand(){
        return "Toyota";
    }

    public function isMaintenance()
    {
        return false;
    }
}
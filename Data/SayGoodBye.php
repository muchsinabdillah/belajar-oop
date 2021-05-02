<?php
namespace Data\Traits;

trait SayGoodBye{ 
    public function goodBye($name){
        if(is_null($name)){
            echo "Good Bye". PHP_EOL;
        }else{
            echo "Good Bye $name" . PHP_EOL;
        }
    }
}

trait SayHello{ 
    public function hello($name){
        if(is_null($name)){
            echo "hello". PHP_EOL;
        }else{
            echo "hello $name" . PHP_EOL;
        }
    }
}

trait HasName{
    public $name;
}
trait CanRun{
    public abstract function run();
}

trait All{
    use SayGoodBye,SayHello,HasName, CanRUn;
}
class Person{
    use All;

    public  function run(){
        echo "Person $this->name is Running.". PHP_EOL;
    }
}
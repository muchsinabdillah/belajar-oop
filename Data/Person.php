 <?php
  
 class Person
 {
    const AUTHOR = "Programmer Zaman Now";
    var  $name;
    var  $address ;
    var  $country = "Indonesia";

    public function __construct($name,$address)
    {
        $this->name = $name;
        $this->address = $address;
    }

    function sayHello( $name){
        if(is_null($name)){
            echo "Hi, my name is $this->name";

        }else{
            echo "Hi $name, my name is $this->name";
        }
    }
    function info(){
        echo "Author : " . self::AUTHOR . PHP_EOL;
    }
    function __destruct()
    {
        echo "Object person $this->name is destroyed". PHP_EOL;
    }
 }
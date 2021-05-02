<?php
class Zero 
{
    private $properties = []; 
    public function __get($name)
    {
        return $this->properties[$name];
    }
    public function __set($name, $value)
    {
       $this->properties[$name] = $value;
    }
    public function __isset($name)
    {
        return isset($this->properties[$name]);
    }
    public function __unset($name)
    {
        unset($this->properties[$name]);
    }
    public function __call($name, $arguments)
    {
        $join = join(",", $arguments);
        echo "Call function $name with arguments $join". PHP_EOL;
    }
    public static function __callStatic($name, $arguments)
    {
        $join = join(",", $arguments);
        echo "Call static function $name with arguments $join". PHP_EOL;
    }
}

$zero = new Zero();
$zero->firstname = "Eko";
$zero->middlename = "Kuncoro";
$zero->lastname = "Wibowo";

echo "Firstname : $zero->firstname" . PHP_EOL;
echo "Midlename : $zero->middlename" . PHP_EOL;
echo "lastName : $zero->lastname" . PHP_EOL;

$zero->sayHello("Eko","Kennedy");
$zero::sayHello("Eko","Kennedy");
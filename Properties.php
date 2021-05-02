<?php
require_once __DIR__. "/Data/person.php";
$person = new Person("Eko","Subang");
$person->name = "Eko";
$person->address = "Jakarta"; 
 

echo "Name : $person->name" . PHP_EOL;
echo "Address : $person->address" . PHP_EOL;
echo "Country : $person->country" . PHP_EOL;

$person2 = new Person("Eko",null);
 $person2->name = "Budi";
 $person2->address = "Jakarta"; 

 var_dump($person2);
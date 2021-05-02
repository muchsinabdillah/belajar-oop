<?php

$array = [
    "firstname" => "Eko",
    "middlename" => "Budi",
    "lastname" => "hartono"
];

$object = (object) $array;

var_dump($object);

echo "First Name $object->firstname";
echo "Midle Name $object->middlename";
echo "Last Name $object->lastname";

$arrayLagi = (array) $object;

var_dump($arrayLagi);

require_once __DIR__ . "/Data/person.php";

$person = new Person("Eko","Subang");
var_dump($person);

$arrayPerson = (array) $person;
var_dump($arrayPerson);

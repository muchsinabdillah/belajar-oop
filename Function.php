<?php
require_once __DIR__. "/Data/person.php";
$eko = new Person("Eko","Subang");
$eko->name = "Eko";
$eko->sayHello("Budi");

$joko = new Person("Eko","Subang");
$joko->name = "Joko";
$joko->sayHello(null);

$joko->info();
$eko->info();
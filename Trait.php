<?php

require_once __DIR__ . "/Data/SayGoodBye.php";

use Data\Traits\{Person,SayGoodBye,SayHello};

$person = new Person();
$person->goodBye("Jooko");
$person->hello("Budi");
$person->name = "Eko";
var_dump($person);

$person->run();
 
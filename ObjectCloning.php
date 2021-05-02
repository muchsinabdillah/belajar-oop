<?php

require_once __DIR__ . "/Data/Stundent.php";

$student1 = new Student();
$student1->id = "1";
$student1->name = "die";
$student1->value = "100";
$student1->setSample("xxx");

var_dump($student1);

$student2 = clone $student1;
var_dump($student2);



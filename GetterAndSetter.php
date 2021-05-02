<?php

require_once __DIR__ . "/Data/Category.php";
$category = new Category();
$category->setName("Handphone");
$category->setExpensive(true);
$category->setName("Handphone");
echo "Name : {$category->getName()}" . PHP_EOL;
echo "Expensive : {$category->getExpensive()}" . PHP_EOL;


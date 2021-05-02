<?php
require_once __DIR__ . "/Data/Conflict.php";
require_once __DIR__ . "/Data/Helper.php";

$conflict1 = new \Data\One\Conflict();
$conflict2 = new \Data\Two\Conflict();

echo Helper\APPLICATION . PHP_EOL;

Helper\helpMe();
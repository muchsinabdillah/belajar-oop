<?php
require_once __DIR__ . "/Data/Conflict.php";
require_once __DIR__ . "/Data/Helper.php";

use Data\One\Conflict;
use function Helper\helpMe;
use const Helper\APPLICATION;

$conflict = new Conflict();

helpMe();

echo APPLICATION . PHP_EOL;
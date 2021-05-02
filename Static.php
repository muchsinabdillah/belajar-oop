<?php
require_once __DIR__ . "/Helper/MathHelper.php";

use Helper\MathHelper;

//$mathHelper = new MathHelper();
//echo $mathHelper->name . PHP_EOL;

echo MathHelper::$name;

MathHelper::$name = "Die";
echo MathHelper::$name;

$result = MathHelper::sum(10,10,10,10);
echo "Result : $result";

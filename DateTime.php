<?php
$datetime = new DateTime();
$datetime->setDate(1990,1,20);
$datetime->setTime(10,10,10);

// nambah interval
$datetime->add(new DateInterval("P1Y"));

//mengurangi interval
$minusOneMonth = new DateInterval("P1M");
$minusOneMonth->invert = true;
$datetime->add($minusOneMonth);
var_dump($datetime);

$now = new DateTime();
var_dump($now);
$now->setTimezone(new DateTimeZone("America/Toronto"));
var_dump($now);

$string=$now->format("Y-m-d H:i:s");
echo "Waktu saat ini : $string". PHP_EOL;

$date = DateTime::createFromFormat("Y-m-d H:i:s","2021-01-01 01:09:11",
new DateTimeZone("Asia/Jakarta"));
if($date){
    var_dump($date);
}else{
    echo "Format Salah" . PHP_EOL;
}

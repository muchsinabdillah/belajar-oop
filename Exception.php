<?php
require_once __DIR__ . "/Exception/ValidationException.php";
require_once __DIR__ . "/Data/LoginRequest.php";
require_once __DIR__ . "/Helper/Validation.php";

$loginRequest = new LoginRequest(); 
$loginRequest->username = "     ";
$loginRequest->password = "     ";

try{
    ValidateLoginRequest($loginRequest);
}catch (ValidationException $exception){
    echo "Validation Error : {$exception->getMessage()}" . PHP_EOL;
    var_dump($exception->getTrace());
}catch(Exception $exception){
    echo "Error : {$exception->getMessage()}" . PHP_EOL;
    var_dump($exception->getTrace());
    echo $exception->getTraceAsString() .  PHP_EOL;
}finally{
    echo "ERROR ATAU ENGGA, AKAN DI EKSEKUSI" . PHP_EOL;
};
echo "VALID" . PHP_EOL;

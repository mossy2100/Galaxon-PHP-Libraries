<?php

require_once __DIR__ . '/../Galaxon/Core/src/Stringify.php';

use Galaxon\Core\Stringify;

//$obj = new class {
//    public string $name = 'John';
//    public int $age = 30;
//    protected float $height = 1.8;
//    private string $secret = 'secret';
//};
//
//$arr = (array)$obj;
//var_dump($arr);
//var_export($arr);
//print_r($arr);
//echo get_class($obj), PHP_EOL;
//echo Stringify::stringify($obj), PHP_EOL;
//
//echo PHP_EOL;
//echo PHP_EOL;
//echo PHP_EOL;
//
//class Example {
//    public string $name = 'John';
//    public int $age = 30;
//    protected float $height = 1.8;
//    private string $secret = 'secret';
//}
//
//$obj2 = new Example();
//$arr2 = (array)$obj2;
//var_dump($arr2);
//var_export($arr2);
//print_r($arr2);
//echo get_class($obj2), PHP_EOL;
//echo Stringify::stringify($obj2), PHP_EOL;

echo PHP_EOL;
echo PHP_EOL;
echo PHP_EOL;

$obj3 = new DateTime();
var_dump($obj3);
var_export($obj3);
print_r($obj3);
echo get_class($obj3), PHP_EOL;
echo Stringify::stringify($obj3), PHP_EOL;

$arr3 = (array)$obj3;
var_dump($arr3);
var_export($arr3);
print_r($arr3);

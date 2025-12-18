<?php

//include __DIR__ . '/../Galaxon/Color/src/Color.php';
//include __DIR__ . '/../Galaxon/Math/src/Double.php';

//use Galaxon\Color\Color;
//
//$c = new Color('#abc123');
//$d = Color::fromRgb(123, 4, 56);
//
//$s = (string)$c;
//echo $s;
//echo (string)$d;
//var_export($c);
//var_export((array)$c);

//echo PHP_EOL;
//$class = get_class($c);
//$class_name_parts = explode('\\', $class);
//echo $class_name_parts[count($class_name_parts) - 1];
//echo PHP_EOL;
//
//$dt = new DateTime();
//$class = get_class($dt);
//$class_name_parts = explode('\\', $class);
//echo $class_name_parts[count($class_name_parts) - 1];
//echo PHP_EOL;
//
//$x = new class {
//    public int $x = 1;
//};
//echo get_class($x);

//echo null . 'm' . 3;

$unitValid = preg_match('/^(\p{L}+)(-?\d+)?$/u', 'km', $matches);
var_dump($matches);
$unitValid = preg_match('/^(\p{L}+)(-?\d+)?$/u', 'km2', $matches);
var_dump($matches);

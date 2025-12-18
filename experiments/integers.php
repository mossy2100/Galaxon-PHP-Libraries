<?php

require_once __DIR__ . '/../Galaxon/Core/src/Integers.php';
require_once __DIR__ . '/../Galaxon/Core/src/Floats.php';

use Galaxon\Core\Integers;
use Galaxon\Core\Floats;

//$c = Integers::pow(2, 4);
//var_dump($c);
//
//$c = Integers::pow(PHP_INT_MAX, 2);
//var_dump($c);

$f = (float)PHP_INT_MAX;
$g = $f;
$f = Floats::previous($f);
$f = Floats::previous($f);
$g = Floats::next($g);
$g = Floats::next($g);

for ($h = $f; $h <= $g; $h = Floats::next($h)) {
    $j = (int)$h;
    echo "$h -> $j\n";
}

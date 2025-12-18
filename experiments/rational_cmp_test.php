<?php
require_once '../Superclasses/src/Math/Numbers.php';
require_once '../Superclasses/src/Math/Rational.php';
require_once '../Superclasses/src/Exceptions/ArithmeticException.php';

use Galaxon\Numbers\Rational;

//$x = 2 ** 32 - 1;
//$r1 = new Rational($x, 4);
//$r2 = new Rational(($x - 1) / 2, 2);
//echo $r1, ' = ' , $r1->toFloat(), PHP_EOL;
//echo $r2, ' = ' , $r2->toFloat(), PHP_EOL;
//$cmp = $r1->compare($r2);
//echo $cmp;

$r1 = new Rational(1, 3);
$r2 = new Rational(100_000_001, 300_000_004);
echo $r1, ' = ' , $r1->toFloat(), PHP_EOL;
echo $r2, ' = ' , $r2->toFloat(), PHP_EOL;
$cmp = $r1->compare($r2);
echo $cmp;

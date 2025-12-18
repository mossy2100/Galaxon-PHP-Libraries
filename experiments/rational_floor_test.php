<?php
require_once '../Superclasses/src/Math/Numbers.php';
require_once '../Superclasses/src/Math/Rational.php';
require_once '../Superclasses/src/Exceptions/ArithmeticException.php';

use Galaxon\Numbers\Rational;

$test_values = [
    [3, 2],
    [-3, 2],
    [3, -2],
    [-3, -2],
    [4, 2],
    [-4, 2],
    [4, -2],
    [-4, -2],
    [2, 3],
    [-2, 3],
    [2, -3],
    [-2, -3],
];

foreach ($test_values as $value) {
    $r = new Rational($value[0], $value[1]);
    echo "Testing $value[0]/$value[1]:", PHP_EOL;
    echo "toFloat() = ", $r->toFloat(), PHP_EOL;
    echo "floor() = ", $r->floor(), PHP_EOL;
    echo "ceil() = ", $r->ceil(), PHP_EOL;
    echo "round() = ", $r->round(), PHP_EOL;
    echo PHP_EOL;
}

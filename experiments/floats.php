<?php

require_once __DIR__ . '/../Galaxon/Core/src/Traits/Equatable.php';
require_once __DIR__ . '/../Galaxon/Core/src/Traits/ApproxEquatable.php';
require_once __DIR__ . '/../Galaxon/Core/src/Traits/Comparable.php';
require_once __DIR__ . '/../Galaxon/Core/src/Traits/ApproxComparable.php';
require_once __DIR__ . '/../Galaxon/Core/src/Floats.php';
require_once __DIR__ . '/../Galaxon/Core/src/Numbers.php';
require_once __DIR__ . '/../Galaxon/Math/src/Rational.php';

use Galaxon\Core\Floats;
use Galaxon\Math\Rational;

//for ($i = 0; $i < 1000000; $i++) {
//    $f = Floats::randFloat();
////    $f = Floats::randInRange(-1, 1);
//    echo "Candidate: " . sprintf('%.17g', $f) . "\n";
//    try {
//        [$n, $d] = Rational::floatToRatio($f);
//        $diff = abs($n / $d - $f);
//        echo "Result => $n/$d, diff = $diff\n";
//    }
//    catch (RangeException $e) {
//        echo $e->getMessage(), "\n";
//    }
//}

//$f = 0.1;
//echo sprintf("%.16f\n", $f);
//echo "\n";
//
//$g = 3 * (1 / $f) / 3.0;
//echo sprintf("%.16f\n", $g);
//echo "\n";
//
//echo PHP_FLOAT_EPSILON;
//echo "\n";
//
//echo abs(INF), "\n";
//echo abs(-INF), "\n";

//echo Floats::toHex(NAN), "\n";
//echo Floats::toHex(INF), "\n";
//echo Floats::toHex(-INF), "\n";
//echo Floats::toHex(0.0), "\n";
//echo Floats::toHex(-0.0), "\n";

$hex = Floats::toHex(NAN);
echo $hex, "\n";

$x = hexdec($hex);
$bin = decbin($x);
$bin = str_pad($bin, 64, '0', STR_PAD_LEFT);
$chunks = chunk_split($bin, 8, ' ');
echo $chunks;

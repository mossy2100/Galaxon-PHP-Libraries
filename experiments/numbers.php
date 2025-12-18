<?php
use Galaxon\Numbers\Rational;

$n_ok = 0;
$n_total = 0;

function testRoundTrip(string $label, float|int $x): bool {
    global $n_ok, $n_total;

    $r = null;
    $e = null;
    $ok = true;

    // Try the method under test.
    try {
        $r = Rational::fromNumber($x);
        $exception_occurred = false;
    }
    catch (Throwable $e) {
        $ok = false;
        $exception_occurred = true;
    }

    if (!$exception_occurred)
    {
        $f = $r->toFloat();
        $error = abs($x - $f);
        $ok = $error === 0.0;
    }

    if ($ok) {
        $n_ok++;
    }
    else {
        echo "Testing round-trip conversion of $label:", PHP_EOL;
        echo "Float input       = $x", PHP_EOL;
        if ($exception_occurred) {
            echo "Error occurred converting number to rational.", PHP_EOL;
            echo $e->getMessage(), PHP_EOL;
        }
        else {
            echo "Rational          = $r", PHP_EOL;
            echo "Convert to float  = $f", PHP_EOL;
            echo "Error             = $error", PHP_EOL;
            $error_pc = abs($error / $x * 100);
            echo "Error (%)         = $error_pc %", PHP_EOL;
//            echo 'round trip result = ', ($ok ? 'OK' : 'FAIL'), PHP_EOL, PHP_EOL;
        }
        echo PHP_EOL;
    }

    $n_total++;

    return $ok;
}

$a = (float)PHP_INT_MAX;
$b = (float)(PHP_INT_MAX - 1);
echo $a === $b ? 'equal' : 'not equal';
echo PHP_EOL;

// Test special cases.
$gr = (1 + sqrt(5)) / 2;
$test_values = [
    'M_E' => M_E,
    'M_PI' => M_PI,
    '2 * M_PI' => 2 * M_PI,
    '$gr' => $gr,
    'PHP_INT_MAX' => PHP_INT_MAX,
    'PHP_INT_MIN' => PHP_INT_MIN,
    'PHP_FLOAT_MIN' => PHP_FLOAT_MIN,
    'PHP_FLOAT_MAX' => PHP_FLOAT_MAX,
    '0.999999999999' => 0.999999999999,
    '1.00000000000' => 1.00000000000,
];
foreach ($test_values as $key => $value) {
    testRoundTrip($key, $value);
}
//
//// Test square roots up to 100.
//for ($x = 2; $x <= 100; $x++) {
//    testRoundTrip("sqrt($x)", sqrt($x));
//}
//
//// Try all fractions up to a numerator and denominator of 100.
//for ($num = 1; $num <= 100; $num++) {
//    for ($den = 1; $den <= 100; $den++) {
//        testRoundTrip("$num/$den", $num / $den);
//    }
//}
//
//// Try 100 random rationals.
//for ($i = 1; $i <= 100; $i++) {
//    $num = mt_rand(PHP_INT_MIN, PHP_INT_MAX);
//    $den = mt_rand(PHP_INT_MIN, PHP_INT_MAX);
//    testRoundTrip("$num/$den", $num / $den);
//}
//
//// Try 100 random floats.
//for ($i = 1; $i <= 100; $i++) {
//    do {
//        $f = Numbers::randomFloat();
//    } while ($f < PHP_INT_MIN || $f > PHP_INT_MAX || abs($f) < 1/PHP_INT_MAX/2);
//    testRoundTrip("$f", $f);
//}

$n_pc = round($n_ok / $n_total * 100, 2);

echo "Passed $n_ok tests out of $n_total, for a success rate of $n_pc%", PHP_EOL;

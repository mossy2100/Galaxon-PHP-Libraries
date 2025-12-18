<?php

declare(strict_types = 1);

//$sqr = function($x) { return $x * $x; };
//echo get_debug_type($sqr), PHP_EOL;
//echo is_callable($sqr), PHP_EOL;

function test(int $x = 0, string $y = 'test'): bool {
    $args = func_get_args();

    var_dump($args);

    $y_passed = isset($args[1]);
    var_dump($y_passed);

    return true;
}

test( 123);
test(y: 'cat');
test(123, '456');

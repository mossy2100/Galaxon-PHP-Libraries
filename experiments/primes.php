<?php

/**
 * Generate primes using trial division.
 */
function primes_trial_div($max) {
    $primes = [];

    // Handle the only even prime separately.
    if ($max >= 2) {
        yield 2;
        $primes = [2];
    }

    // Test odd numbers.
    for ($i = 3; $i <= $max; $i += 2) {
        $is_prime = true;
        foreach ($primes as $prime) {
            if ($prime * $prime > $i) {
                break;
            }
            if ($i % $prime === 0) {
                $is_prime = false;
                break;
            }
        }
        if ($is_prime) {
            $primes[] = $i;
            yield $i;
        }
    }
}

/**
 * Generate primes using the Sieve of Erastosthenes.
 */
function primes_erastosthenes($max) {
    $is_prime = array_fill(2, $max - 1, true); // More idiomatic
    
    for ($p = 2; $p * $p <= $max; $p++) { // Only need to sieve up to √max
        if ($is_prime[$p]) {
            yield $p;
            
            // Start from p², since smaller multiples already marked
            for ($n = $p * $p; $n <= $max; $n += $p) {
                $is_prime[$n] = false;
            }
        }
    }
    
    // Yield remaining primes > √max
    for ($p = (int)sqrt($max) + 1; $p <= $max; $p++) {
        if ($is_prime[$p]) yield $p;
    }
}

/**
 * Generate primes using the Sieve of Erastosthenes (with odd number optimisation).
 */
function primes_erastosthenes2($max) {
    yield 2;

    $is_prime = [];
    for ($n = 3; $n <= $max; $n += 2) {
        $is_prime[$n] = true;
    }

    for ($p = 3; $p * $p <= $max; $p += 2) { // Only need to sieve up to √max.
        if ($is_prime[$p]) {
            yield $p;
            
            // Start from p², since smaller multiples already marked.
            for ($n = $p * $p; $n <= $max; $n += 2 * $p) {
                $is_prime[$n] = false;
            }
        }
    }
    
    // Yield remaining primes > √max.
    $q = (int)sqrt($max) + 1;
    if ($q % 2 === 0) {
        $q++;
    }
    for ($p = $q; $p <= $max; $p += 2) {
        if ($is_prime[$p]) yield $p;
    }
}

function test_primes_generator(callable $func, int $max = 100000) {
    $t1 = hrtime(true);
    $primes = [];
    foreach ($func($max) as $prime) {
        $primes[] = $prime;
    }
    $t2 = hrtime(true);
    $dt2 = $t2 - $t1;
    // echo implode(', ', $primes) . "\n";
    echo "Generator $func() took $dt2 microseconds.\n";
}

test_primes_generator('primes_trial_div');
test_primes_generator('primes_erastosthenes');
test_primes_generator('primes_erastosthenes2');

/*
Output:
Generator took 100300 microseconds.
Generator took 49000 microseconds.
Generator took 36400 microseconds.
*/

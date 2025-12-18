<?php

require_once __DIR__ . '/../Galaxon/Core/src/Equatable.php';
require_once __DIR__ . '/../Galaxon/Core/src/Comparable.php';
require_once __DIR__ . '/../Galaxon/Math/src/Complex.php';
require_once __DIR__ . '/../Galaxon/Core/src/Angle.php';

use Galaxon\Math\Complex;

$z = new Complex(0, M_PI);
$result = $z->exp();
var_dump($result);

$z = new Complex(0, Floats::TAU);
$result = $z->exp();
var_dump($result);

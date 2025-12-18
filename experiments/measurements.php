<?php

require_once __DIR__ . '/../Galaxon/Core/src/Comparable.php';
require_once __DIR__ . '/../Galaxon/Core/src/Equatable.php';
require_once __DIR__ . '/../Galaxon/Core/src/Stringify.php';
require_once __DIR__ . '/../Galaxon/Core/src/Types.php';
require_once __DIR__ . '/../Galaxon/Core/src/Floats.php';
require_once __DIR__ . '/../Galaxon/Core/src/Numbers.php';

require_once __DIR__ . '/../Galaxon/Units/src/Measurement.php';
require_once __DIR__ . '/../Galaxon/Units/src/UnitConverter.php';
require_once __DIR__ . '/../Galaxon/Units/src/Conversion.php';
require_once __DIR__ . '/../Galaxon/Units/src/NumberWithError.php';

require_once __DIR__ . '/../Galaxon/Units/src/MeasurementTypes/Angle.php';
require_once __DIR__ . '/../Galaxon/Units/src/MeasurementTypes/Area.php';
require_once __DIR__ . '/../Galaxon/Units/src/MeasurementTypes/Length.php';
require_once __DIR__ . '/../Galaxon/Units/src/MeasurementTypes/Mass.php';
require_once __DIR__ . '/../Galaxon/Units/src/MeasurementTypes/Memory.php';
require_once __DIR__ . '/../Galaxon/Units/src/MeasurementTypes/Temperature.php';
require_once __DIR__ . '/../Galaxon/Units/src/MeasurementTypes/Time.php';
require_once __DIR__ . '/../Galaxon/Units/src/MeasurementTypes/Volume.php';

use Galaxon\Units\MeasurementTypes\Angle;
use Galaxon\Units\MeasurementTypes\Area;
use Galaxon\Units\MeasurementTypes\Length;
use Galaxon\Units\MeasurementTypes\Mass;
use Galaxon\Units\MeasurementTypes\Memory;
use Galaxon\Units\MeasurementTypes\Temperature;
use Galaxon\Units\MeasurementTypes\Time;
use Galaxon\Units\MeasurementTypes\Volume;
use Galaxon\Units\FloatWithError;
use Galaxon\Units\UnitConverter;

// Angle
//$alpha = new Angle(45, 'deg');
//echo $alpha, PHP_EOL;
//$alpha = $alpha->to('turn');
//echo $alpha, PHP_EOL;
//$alpha = $alpha->to('rad');
//echo $alpha, PHP_EOL;

// Area
//$a = new Area(100, 'ha');
//$a = $a->to('km2');
//echo $a;

// Length
//$height = new Length(5, 'ft')->add(new Length(10, 'in'));
////$height = new Length(5, 'ft');
//$h2 = $height->to('mm');
//echo $h2;
//echo "\n\n";

//$x = new NumberWithError(12);
//$y = new NumberWithError(9460730472580800);
//$z = $x->mul($y);
//echo "$x\n";
//echo "$y\n";
//echo "$z\n";

//$b = new Length(5, 'ft')->add(new Length(10, 'in'));
//echo $b, PHP_EOL;
//$b = $b->to('cm');
//echo $b, PHP_EOL;
//exit;

// Mass
//$me = Mass::electronMass();
//echo $me;
//echo PHP_EOL;
//
//$me = new Mass(78, 'kg');
//$me = $me->sub(5, 'kg');
//$meInLbs = $me->to('lb');
//echo $meInLbs, PHP_EOL;
//echo $meInLbs->format(precision: 0), PHP_EOL;
//exit;

// Memory
//$mem = new Memory(123, 'kB');
//echo $mem, PHP_EOL;
//$mem = $mem->to('B');
//echo $mem, PHP_EOL;
//$mem = $mem->to('KiB');
//echo $mem, PHP_EOL;
//$mem = $mem->to('b');
//echo $mem, PHP_EOL;

// Temperature
//$c = new Temperature(100, 'C');
//echo $c, PHP_EOL;
//echo $c->to('F'), PHP_EOL;
//echo $c->to('K'), PHP_EOL;
//echo PHP_EOL;

$converter = Temperature::getUnitConverter();
//$conversion = $converter->getConversion('C', 'K');
//echo "$conversion\n";
//$conversion = $converter->getConversion('K', 'C');
//echo "$conversion\n";

//$conversion = $converter->getConversion('mK', 'C');
//echo "$conversion\n";
//$conversion = $converter->getConversion('C', 'mK');
//echo "$conversion\n";

$conversion = $converter->getConversion('F', 'K');
echo "$conversion\n";
$conversion = $converter->getConversion('K', 'F');
echo "$conversion\n";

$conversion = $converter->getConversion('mK', 'F');
echo "$conversion\n";
$conversion = $converter->getConversion('F', 'mK');
echo "$conversion\n";


//
//$f = new Temperature(100, 'F');
//echo $f, PHP_EOL;
//echo $f->to('C'), PHP_EOL;
//echo $f->to('K'), PHP_EOL;
//echo PHP_EOL;
//
//$k = new Temperature(100, 'K');
//echo $k, PHP_EOL;
//echo $k->to('C'), PHP_EOL;
//echo $k->to('F'), PHP_EOL;
//echo PHP_EOL;

// Time
//$t = new Time(20, 'min');
//$t = $t->to('y');
//echo $t;

// Volume
//$vol = new Volume(1.23, 'm3');

<?php

declare(strict_types = 1);

namespace Galaxon\Tests;

require_once __DIR__ . '/../src/DictionaryOf.php';

////////////////////////////////////////////////////////////////////////////////////////////////////

enum DayOfWeek: string
{
    case Monday = 'Mon';
    case Tuesday = 'Tue';
    case Wednesday = 'Wed';
}

$x = DayOfWeek::Monday;

echo Dictionary::getString($x) . PHP_EOL;
echo is_object($x) . PHP_EOL;

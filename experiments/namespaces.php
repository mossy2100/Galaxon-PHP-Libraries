<?php
namespace Galaxon\Tests;

use Galaxon\Collections\Sequence;

require_once __DIR__ . '/../Galaxon/Collections/src/Collection.php';
require_once __DIR__ . '/../Galaxon/Collections/src/TypeSet.php';
require_once __DIR__ . '/../Galaxon/Collections/src/Sequence.php';

echo __NAMESPACE__, PHP_EOL;

$seq = new Sequence('int');
$seq->append(1, 1, 2, 3, 5, 8, 13, 21);
echo get_debug_type($seq), PHP_EOL;
echo get_class($seq), PHP_EOL;

$a = new class {
    public int $x = 1;
};
echo get_debug_type($a), PHP_EOL;
echo get_class($a), PHP_EOL;

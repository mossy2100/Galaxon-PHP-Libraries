<?php

require_once __DIR__ . '/../Galaxon/Core/src/Types.php';
require_once __DIR__ . '/../Galaxon/Collections/src/TypeSet.php';
require_once __DIR__ . '/../Galaxon/Collections/src/Collection.php';
require_once __DIR__ . '/../Galaxon/Collections/src/Set.php';

use Galaxon\Collections\Set;

//$a = ['cat'=> "apple", "banana", "carrot", 123.0, 123, [4, 2, 6]];
//$a[5] = &$a[4];
//$a[4][] = &$a[5];
//$a[] = 'pear';
//$a[] = &$a[0];
//echo print_r($a, true);

//$json = json_encode($a);
//if (json_last_error() === JSON_ERROR_RECURSION) {
//    echo "Recursion error";
//}
//else {
//    echo var_export($a, true);
//}

//function array_to_string($array) {
//    $a = print_r($array, true);
//    $lines = explode("\n", $a);
//    $recursion_map = [];
//    $j = 0;
//    $n_lines = count($lines);
//    for ($i = 2; $i < $n_lines - 1; $i++) {
//        if (trim($lines[$i + 1]) === '*RECURSION*') {
//            $recursion_map[$j] = true;
//            $i++;
//        }
//        else {
//            $recursion_map[$j] = false;
//        }
//        $j++;
//    }
//
//    $result = 'a:' . count($array) . ':[';
//
//    $j = 0;
//    foreach ($array as $key => $value) {
//        if ($j > 0) {
//            $result .= ', ';
//        }
//        $result .= Type::getString($key) . ' => ';
//        if ($recursion_map[$j]) {
//            $result .= '*RECURSION*';
//        }
//        else {
//            $result .= Type::getString($value);
//        }
//        $j++;
//    }
//    $result .= ']';
//    return $result;
//}
//
//function array_to_string1($array) {
//    // Modify the result to reflect the pattern of these keys.
//    $a = str_replace("\n", ', ', $a);
//    $a = preg_replace('/\s+/', ' ', $a);
//    $a = str_replace('Array, ', '', $a);
//    return 'a:' . count($array) . ':' . '[' . substr($a, 3, -5) . ']';
//}

//function array_to_string2($array) {
//    $a = print_r($array, true);
////    $a = str_replace("\n", ', ', $a);
////    $a = trim(preg_replace('/\s+/', ' ', $a));
//    return $a;
//}
//
//echo array_to_string2($a);


$set = new Set('int');
$set->add(1, 8, 3, 466, 12, 90);
foreach ($set as $key => $item) {
    echo $key . ' => ' . $item . "\n";
}

<?php

// Test open resource.
$fh = fopen(__FILE__, 'r');
echo get_debug_type($fh), PHP_EOL;
echo get_resource_type($fh), PHP_EOL;
echo get_resource_id($fh), PHP_EOL;

// Test closed resource.
fclose($fh);
echo get_debug_type($fh), PHP_EOL;
echo get_resource_type($fh), PHP_EOL;
echo get_resource_id($fh), PHP_EOL;

<?php
//$xml = '<person><name>John</name></person>';
//$person = simplexml_load_string($xml);
//var_dump($person->age);
//var_dump($person->name);

$xml = '<root xmlns:ns="http://example.com"><ns:item>Test</ns:item></root>';
$sxml = simplexml_load_string($xml);
var_dump($sxml->children('http://example.com')->item);

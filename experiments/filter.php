<?php

var_dump(filter_var("123", FILTER_VALIDATE_INT));
var_dump(filter_var("-123", FILTER_VALIDATE_INT));
var_dump(filter_var("123 ", FILTER_VALIDATE_INT));
var_dump(filter_var(" 123 ", FILTER_VALIDATE_INT));
var_dump(filter_var(" 123", FILTER_VALIDATE_INT));
var_dump(filter_var(" -123", FILTER_VALIDATE_INT));
var_dump(filter_var("123 cats", FILTER_VALIDATE_INT));
var_dump(filter_var("123.456", FILTER_VALIDATE_INT));
var_dump(filter_var("123", FILTER_VALIDATE_FLOAT));

<?php

$x = 56_789_089_543_853;    //weakly typed.

var_dump($x);
//print_r($x);
//var_export($x);

echo PHP_INT_MAX . "<br />";
echo PHP_FLOAT_MAX . "<br />";

echo "infinity:";
$inf = 1.9e400;

var_dump($inf);
is_infinite($inf);
is_finite($inf);

echo "<br />";

echo "Not a Number (NaN):";
is_nan($x);
is_numeric($x);

//Casting
$a = (string)$x;















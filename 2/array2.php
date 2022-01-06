<?php

$a = [1,2,3,4];
$b = ["a", "b", "c", "d"];
$c = array( "a" => 1, "b" => 2);
$d = array("b" => 2, "a" =>1);

var_dump($a == $b);
echo "<br />";
var_dump($c == $d);     //True if same key + value
echo "<br />";
var_dump($c === $d);    //Check the order as well.
echo "<br />";
var_dump($c != $d);     //True if same key + value
echo "<br />";
var_dump($c !== $d);    //Check the order as well.

echo "<hr />";
$z =  $c+$a;    //Union of unique indices
var_dump($z);
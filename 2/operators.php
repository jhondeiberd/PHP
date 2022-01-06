<?php

$a = 1;
$b = "1";

//Comparison

var_dump($a == $b); //Compare the value. So one side does get casted
echo "<br />";

var_dump($a === $b); //Compare Type And the value
echo "<br />";

var_dump($a != $b);
echo "<br />";

var_dump($a <> $b); //Same as !=
echo "<br />";

var_dump($a !== $b);    //Checking the type and value are not equal.
echo "<br />";

// > Bigger than
// < Smaller than
// >= Bigger than or Equal
// <= Smaller than or Equal

echo "Spaceship: <br />";
var_dump($a <=> $b);    //returns an int which could be (-1, 0, 1)
                    // -1 when the left side is less than the right side
                    // 0 when both sides are equal.
                    // 1 when the left side is greater than the right side.
echo "<br />";



<?php

$number1 = 2;
$number2 = 5;

$total = $number1 + $number2;
$total = $number1 - $number2;
$total = $number1 * $number2;
$total = $number1 / $number2;
$total = $number1 % $number2;
$total = $number1 ** $number2; //2^5 === 2*2*2*2*2

echo "$number1^$number2 = $total <br />";

//Pre and Post Processing
$x = 0;
$x = $x + 1;
$x += 1;
$x++;
++$x;

echo "x = $x <br />";
$y = $x * $x++;
echo "\$x * \$x++ = " . $y . "<br />";
$total = $x - --$x + $x * $x++;
echo $total;
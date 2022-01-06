<?php

$hello = "Hello";
$name = 'reza';
$age = 65;

$message = $hello . " " . $name . " " . $age;
$message2 = "$hello  $name $age";
$message3 = '$hello  $name $age';
$message4 = '"hello"';
$message5 = '$hello' . " = $hello";
$message6 = "\$hello = $hello";


echo $message;
echo "<br />";
echo $message2;
echo "<br />";
echo $message3;
echo "<br />";
echo $message4;
echo "<br />";
echo $message5;
echo "<br />";
echo $message6;
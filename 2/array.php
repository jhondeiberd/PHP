<?php

function console_log($data)
{
    echo '<script>';
    echo 'console.log(' . json_encode($data) . ')';
    echo '</script>';
}


$a = [1,2,3,4];
$b = array(1,2,3,4);

$c = array(1, 'a', tRue, 3.4);

var_dump($c);
echo "<hr />";

//Associative Arrays.

$d = array("Namita" => 1, 'a', "Jhon" => tRue, 3.4);
var_dump($d);
console_log($d);

echo "<hr />";

for ($pos = 0; $pos < count($d); ++$pos) {
    echo "$d[$pos] <br />";
}

echo "<hr />";
echo $d["Jhon"];
$d[1] = "dsadsa";
echo $d[1];


echo "<hr />";

$e = array(
    34,
    array(1,2,3,4),
    "reza",
    array("x" => "z", 1 => "MISSING ELEMENT", "true" => false, "asd")
);

$e[0] = 54;
$e[1][2] = 3456;
$e[3]["true"] = true;

console_log($e);
var_dump($e);

echo "<hr />";

$x = array(
    "a" => "Reza",
    "b" => "Preet",
    "c" => "Harman"
);

echo "Normal String {$x['a']} OTher Stuff";
echo "Normal String $x[a] OTher Stuff";








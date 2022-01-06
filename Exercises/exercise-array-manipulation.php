<?php

function showTitle($title)
{
    echo "<br/><b>&#9830; $title</b><br/>";
    echo '<hr/>';
}

function printArray($arr)
{
    $clength = count($arr);
    for($x = 0; $x < $clength; $x++) {
        echo "$arr[$x]<br>";
    }
}

$colors = array(
    'red',
    'blue',
    'black',
    'green',
    'grey',
);

showTitle('Exercise 1 - Sort Alphabetically');
sort($colors);
printArray($colors);

showTitle('Exercise 2: Make them UPPERCASE');
$clength = count($colors);
for($x = 0; $x < $clength; $x++) {
    echo strtoupper($colors[$x]);
    echo "<br>";
}

showTitle('Exercise 3: Merge 2 Arrays');
$otherColors = array(
    'green',
    'blue',
    'black'
);

$mergeArray = array_merge($colors,$otherColors);
$clength = count($mergeArray);
for($x = 0; $x < $clength; $x++) {
    echo $mergeArray[$x] . " ";
}


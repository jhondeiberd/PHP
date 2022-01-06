<?php

function showTitle($title)
{
    echo "<br/><b>&#9830; $title</b><br/>";
    echo '<hr/>';
}

$colors = array(
    'red',
    'blue',
    'black',
    'green',
    'grey',
);

showTitle('Exercise 1 - Sort Alphabetically');
sort($colors);  //Pass by Reference vs Pass by Value
for($position = 0; $position < count($colors); ++$position){
    echo $colors[$position] . "<br />";
}

/* Here is another way using foreach loops

echo "<hr />";

foreach ($colors as $key=>$color)
{
    echo $color . "<br />";
}

*/

showTitle('Exercise 2: Make them UPPERCASE');

//Manual Way of outputting
/*
echo strtoupper($colors[0]) . "<br />";
echo strtoupper($colors[1]) . "<br />";
echo strtoupper($colors[2]) . "<br />";
echo strtoupper($colors[3]) . "<br />";
echo strtoupper($colors[4]) . "<br />";

Better way:
*/

$colorsInString = implode("<br/>", $colors);    //Converts array to 1 single string with values separated by glue
echo strtoupper($colorsInString) . "<br />";


showTitle('Exercise 3: Merge 2 Arrays');

$otherColors = array(
    'green',
    'blue',
    'black'
);

$allColors = array_merge($colors, $otherColors);
echo implode(" ", $allColors);

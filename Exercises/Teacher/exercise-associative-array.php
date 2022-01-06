<?php

function showTitle($title)  //Variable names and Function names are self-explanatory
{
    echo "<br/><b>&#9830; $title</b><br/>";
    echo '<hr/>';
}

function showFirstNamesWithoutIteration($users)
{
    echo $users[0]['first_name'] . "<br />";
    echo $users[1]['first_name'] . "<br />";
    echo $users[2]['first_name'] . "<br />";
    echo $users[3]['first_name'] . "<br />";
}

$users = array(
    array(
        'id' => 2135,
        'first_name' => 'John',
        'last_name' => 'Doe',
    ),
    array(
        'id' => 3245,
        'first_name' => 'Sally',
        'last_name' => 'Smith',
    ),
    array(
        'id' => 5342,
        'first_name' => 'Jane',
        'last_name' => 'Jones',
    ),
    array(
        'id' => 5623,
        'first_name' => 'Peter',
        'last_name' => 'Doe',
    ),
);

showTitle("Exercise 1 (Show first names without iteration)");
showFirstNamesWithoutIteration($users);

showTitle('Exercise 2 (Show the value of the different element between the two collections $firstArray and $secondArray without iterating)');

$firstArray = array('a' => 'auto', 'b' => 'moto', 'c' => 'airplane');
$secondArray = array('a' => 'auto', 'b' => 'moto');

echo $firstArray['c'] . "<br />";   //This is the Hard coded answer.

/* Better way if iteration was allowed !
$firstArrayKeyDifference = array_diff_key($firstArray, $secondArray);   //c is not present in secondArray
$secondArrayKeyDifference = array_diff_key($secondArray, $firstArray);  //d is not present in the firstArray
foreach ($firstArrayKeyDifference as $key=>$value)
{
    echo "Key: " . $key . " Value: " . $value . "<br />";
}
foreach ($secondArrayKeyDifference as $key=>$value)
{
    echo "Key: " . $key . " Value: " . $value . "<br />";
}
*/

/* If statements, still hardcoded //Think more if there was 1 million elements. Or Keys do not exist
if ($firstArray['a'] !== $secondArray['a'])
    echo $firstArray['b'] . "<br />";
if ($firstArray['b'] !== $secondArray['b'])
    echo $firstArray['b'] . "<br />";
if ( $firstArray['c'] !== $secondArray['c'])    //Throws an exception because key doesn't exist.
    echo $firstArray['c'] . "<br />";
*/



showTitle('Exercise 3 (Reverse the keys and values of the $firstArray array without iterating)');

$flippedArray = array_flip($firstArray);
print_r($flippedArray);
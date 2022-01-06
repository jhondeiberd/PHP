<?php
const SENTENCE = 'A sentence to be displayed by putting one word per line';
function showTitle($title)
{
    echo "<br/><b>&#9830; $title </b><br/>";
}


showTitle('Exercise 1: Display 1 word per line.');
$array = explode(' ', SENTENCE);
for ($i = 0; $i < count($array); $i++) {
    echo " $array[$i] <br/>";
}

echo '<hr/>';
showTitle('Exercise 2: Reverse display 1 word per line.');
$array2 = array_reverse($array);
for ($i = 0; $i < count($array2); $i++) {
    echo " $array2[$i] <br/>";
}

echo '<hr/>';
showTitle('Exercise 3: Display number of Words in Sentence.');
echo "Number of Words: " . sizeof($array);

echo '<hr/>';
showTitle('Exercise 4: Display number of characters in sentence.');
echo "Number of characters: " . strlen(SENTENCE);

echo '<hr/>';
showTitle('Exercise 5: Display number of characters excluding spaces');
$noSpace = str_replace(' ', '', SENTENCE);
echo "Number of characters without space: " . strlen($noSpace);

echo '<hr/>';
showTitle('Exercise 6: Display sentence with all characters UPPERCASE');
echo strtoupper(SENTENCE);

echo '<hr/>';
showTitle('Exercise 7: Display sentence with each word first letter Capitalized');
echo ucwords(SENTENCE);

echo '<hr/>';
showTitle('Exercise 8: Display sentence with all characters lowercase');
echo strtolower(SENTENCE);

?>
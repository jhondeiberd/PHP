<?php
//Helper Class for String

echo strlen("Reza");
echo "<br />";
echo str_word_count("Reza is the best of the west");
echo "<br />";
echo strrev("Reverse this string");
echo "<br />";
echo strpos("There was an airplane.", "was");
echo "<br />";
echo str_replace("Reza", "Anuj", "Reza is good. Reza is the best");
echo "<br />";
echo var_dump(preg_split("/[\s]+/", "reza is the best"));
//https://regex101.com/
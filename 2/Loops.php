<?php
$a = array(
    "a" => "a",
    "b" => "b",
    "c" => "d",
    1
);

for ($pos = 0, $z = 3; $pos <  count($a); ++$pos, --$z) {
    echo "$pos : $z <br />";
}
echo "<hr />";
for(;; ) {
    echo "$pos <br />";
    --$pos;
    if ($pos == 0) {
        break;
    }
}

//For loop for when we know the amount of iteration
//While Loop for when we do know how many iterations.

//Difference between While Loop and Do While
while (false) { //Executes 0 to inf
    echo "While Loop <br />";
}

do {    //executes 1 to inf
    echo "Do while <br />";
}while (false);

echo "<hr />";

foreach ($a as $value) {
    echo "$value <br />";
}

bookmark:

foreach ($a as $key => $value) {
    echo "$key => $value <br />";
}

//goto bookmark;


for ($z = 0; true; ++$z) {

    if ($z > 100){
        break;
    }

    if ($z % 2 == 0){
        continue;
    }
    echo "$z <br />";

}
echo "END";














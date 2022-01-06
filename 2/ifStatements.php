<?php
$a = 5;
$b = 10;

//ternary Operation
// Initializing variables or output this or that
$c = $a > $b ? $a : $b; //GOOD

//AWFUL AND UGLY.
$d = ($a > $b || $c == $b) ? ($b > $c ? 4 : 3) : 45;

if ($a > $b) {
    //TRUE
} else if ($a == $b) {
    ///TRUE
} else {
    //FALSE
}

?>

<html>
<body>
<?php
    if ($a > 5) {
?>
    <h1>$a is bigger than 5</h1>
<?php
    } else {
?>
    <h1>$a is not bigger than 5</h1>
<?php } ?>
</body>
</html>





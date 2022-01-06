<?php
require_once "Inheritance.php";
function makeItTalk(Animal $animal) {
    $animal->talk();
}

function meow($cat) { //Not allowed Parents here.
    $cat->meow();
}

$animal = new Animal("animal");
$cc = new Cat("CC", 34);
$bb = new Bird("BB");

makeItTalk($animal);
makeItTalk($cc);
makeItTalk($bb);
echo "<hr />";
meow($animal);
meow($cc);
meow($bb);

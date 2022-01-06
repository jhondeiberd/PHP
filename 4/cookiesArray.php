<?php

setcookie("User[name]", "reza", strtotime( '+30 days' ));
setcookie("User[sexe]", "male", strtotime( '+30 days' ));

var_dump($_COOKIE);
echo "<br />";
var_dump($_COOKIE['User']);
echo "<br />";

echo $_COOKIE['User']['name'];
echo "<br />";
echo $_COOKIE['User']['sexe'];
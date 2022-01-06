<?php

const HOME = 'Home';
const PRODUCT = 'Products';
const ABOUT = 'About Us';
const IDEA = 'Gift Ideas';

//The name of the menu item that should be active
$selected = PRODUCT;

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Variable Attributes</title>
    <style>
        #navigation ul {
            width: 150px;
        }

        .menu-item {
            background-color: #e1f4f3;
            color: #0000cc;
        }

        .selected {
            background-color: #fea799;
        }
    </style>
</head>

<body>
<h1>Displaying an active item from the menu</h1>
<nav id="navigation">
    <ul>
        <?php
        /*
        if ($selected == HOME){
            echo '<li class="selected">' .  HOME . '</li>';
        }
        else
            echo '<li class="menu-item">' . HOME . '</li>';
        if ($selected == PRODUCT){
            echo '<li class="selected">' .  PRODUCT . '</li>';
        }
        else
            echo '<li class="menu-item">' . PRODUCT . '</li>';
*/
        switch ($selected){
            case HOME:
                echo '<li class="selected">' .  HOME . '</li>';
                echo '<li class="menu-item">' . PRODUCT . '</li>';
                break;
            case PRODUCT:
                echo '<li class="menu-item">' .  HOME . '</li>';
                echo '<li class="selected">' . PRODUCT . '</li>';
                break;
        }


        ?>
    </ul>
</nav>
</body>

</html>
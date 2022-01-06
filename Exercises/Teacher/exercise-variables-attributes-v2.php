<?php

const HOME = 'Home';
const PRODUCT = 'Products';
const ABOUT = 'About Us';
const IDEA = 'Gift Ideas';

//The name of the menu item that should be active
$selected = PRODUCT;

$homeCSS = "menu-item";
$productCSS = "menu-item";
$aboutCSS = "menu-item";
$ideaCSS = "menu-item";

switch ($selected){
    case HOME:
        $homeCSS .= " selected";
        break;
    case PRODUCT:
        $productCSS .= " selected";
        break;
    case ABOUT:
        $aboutCSS .= " selected";
        break;
    case IDEA:
        $ideaCSS .= " selected";
        break;
}
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
        echo "<li class='$homeCSS'>" . HOME . '</li>';
        echo "<li class='$productCSS'>" . PRODUCT . '</li>';
        echo "<li class='$aboutCSS'>" . ABOUT . '</li>';
        echo "<li class='$ideaCSS'>" . IDEA . '</li>';
        ?>
    </ul>
</nav>
</body>

</html>
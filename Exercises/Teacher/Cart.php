<?php
    session_start();

    if (!isset($_SESSION['apples'])){  //If nothing set, then initialize
        $_SESSION['apples'] = 0;
        $_SESSION['pears'] = 0;
        $_SESSION['bananas'] = 0;
    }

    if (isset($_GET['clear'])){
        $_SESSION['apples'] = 0;
        $_SESSION['pears'] = 0;
        $_SESSION['bananas'] = 0;
    }

    if (isset($_GET['apple'])){
        switch ($_GET['apple']){
            case 1:
                $_SESSION['apples'] = $_SESSION['apples'] + 1;
                break;
            case 2:
                $_SESSION['apples'] = $_SESSION['apples'] - 1;
                break;
            case 3:
                $_SESSION['apples'] = 0;
                break;
            default:
                echo "Some error here....";
        }
    }

    if (isset($_GET['pear'])){
        switch ($_GET['pear']){
            case 1:
                $_SESSION['pears'] = $_SESSION['pears'] + 1;
                break;
            case 2:
                $_SESSION['pears'] = $_SESSION['pears'] - 1;
                break;
            case 3:
                $_SESSION['pears'] = 0;
                break;
            default:
                echo "Some error here....";
        }
    }

    if (isset($_GET['banana'])){
        switch ($_GET['banana']){
            case 1:
                $_SESSION['bananas'] = $_SESSION['bananas'] + 1;
                break;
            case 2:
                $_SESSION['bananas'] = $_SESSION['bananas'] - 1;
                break;
            case 3:
                $_SESSION['bananas'] = 0;
                break;
            default:
                echo "Some error here....";
        }
    }

?>

<html lang="en">
    <head>
        <title>Cart Lab</title>
        <style>
            table, th, td {
                border: 1px solid black;
                border-collapse: collapse;
            }
        </style>
    </head>
    <body>
        <table>
            <thead>
                <tr>
                    <td>Add to Cart</td>
                    <td>Remove from Cart</td>
                    <td>Remove all</td>
                    <td>Current Cart</td>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td><a href="?apple=1">+1 apple</a></td>
                    <td><a href="?apple=2">-1 apple</a></td>
                    <td><a href="?apple=3">all apples</a></td>
                    <td>Apples: <?= $_SESSION['apples']?></td>
                </tr>
                <tr>
                    <td><a href="?pear=1">+1 pear</a></td>
                    <td><a href="?pear=2">-1 pear</a></td>
                    <td><a href="?pear=3">all pears</a></td>
                    <td>Pears: <?= $_SESSION['pears']?></td>
                </tr>
                <tr>
                    <td><a href="?banana=1">+1 banana</a></td>
                    <td><a href="?banana=2">-1 banana</a></td>
                    <td><a href="?banana=3">all bananas</a></td>
                    <td>Bananas: <?= $_SESSION['bananas']?></td>
                </tr>
                <tr>
                    <td colspan="4" style="text-align: center"><a href="?clear=1">clear the basket</a></td>
                </tr>
            </tbody>
        </table>

    </body>
</html>

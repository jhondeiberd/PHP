<?php
session_start();

if (!isset($_SESSION['apples'])){
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
            $_SESSION['apples'] = (int)$_SESSION['apples'] + 1;
            break;
        case 2:
            $_SESSION['apples'] = (int)$_SESSION['apples'] -1;
            break;
        case 3:
            $_SESSION['apples'] = 0;
            break;
        default:
            echo "Error apples";
    }
}

if (isset($_GET['pear'])){
    switch ($_GET['pear']){
        case 1:
            $_SESSION['pears'] = (int)$_SESSION['pears'] + 1;
            break;
        case 2:
            $_SESSION['pears'] = (int)$_SESSION['pears'] -1;
            break;
        case 3:
            $_SESSION['pears'] = 0;
            break;
        default:
            echo "Error pears";
    }
}

if (isset($_GET['banana'])){
    switch ($_GET['banana']){
        case 1:
            $_SESSION['bananas'] = (int)$_SESSION['bananas'] + 1;
            break;
        case 2:
            $_SESSION['bananas'] = (int)$_SESSION['bananas'] -1;
            break;
        case 3:
            $_SESSION['bananas'] = 0;
            break;
        default:
            echo "Error bananas";
    }
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Basket - Table</title>

    <style>
        table,
        td,
        th {
            border: 1px solid black;
            margin: auto;
        }

        ul {
            list-style-type: none;
            padding: 5px;
        }
    </style>
</head>

<body>
<?php
    $qtyPear = 1;
    $qtyBanana = 0;
?>
<table>
    <thead>
    <tr>
        <th>Add to Cart</th>
        <th>Remove to Cart</th>
        <th>Remove all</th>
        <th>Current Cart</th>
    </tr>
    </thead>

    <tbody>
    <td><a href="?apple=1">+1 Apple</a></td>
    <td><a href="?apple=2">-1 Apple</a></td>
    <td><a href="?apple=3">all Apples</a></td>
    <td>Apples: <?= $_SESSION['apples']?> </td><tr/>
    <td><a href="?pear=1">+1 Pear</a></td>
    <td><a href="?pear=2">-1 Pear</a></td>
    <td><a href="?pear=3">all Pears</a></td>
    <td>Pears: <?= $_SESSION['pears']?> </td><tr/>
    <td><a href="?banana=1">+1 Banana</a></td>
    <td><a href="?banana=2">-1 Banana</a></td>
    <td><a href="?banana=3">all Bananas</a></td>
    <td>Bananas: <?= $_SESSION['bananas']?> </td><tr/>
    <td style="border: none"><a href="?clear">Clear the basket</a></td>
    </tbody>
    <tfoot>
    </tfoot>
</table>

</body>

</html>
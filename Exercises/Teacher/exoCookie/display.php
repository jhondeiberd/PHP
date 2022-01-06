<?php
require('data.php');

//todo retrieve product id
if (isset($products)) {
    $product = getById($_GET['id'], $products);
} else {
    $product = "Error in Retrieving $_GET[id]";
}

//todo add to cookie

setcookie('selectedProduct', $_GET['id']);

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
</head>
<body>
<a href="index.php"> Return</a>

<div class="w3-card-4 w3-margin w3-center" style="width: 40%;">
    <img src="" style="width: 100%;">
    <div class="w3-container w3-center">
        <!-- title -->
        <?= $product['title'] ?>
        <p></p>
        <!-- description -->
        <?= $product['description'] ?>
        <p></p>
    </div>
</div>


</body>
</html>
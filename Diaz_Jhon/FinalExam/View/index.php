<?php
require_once "../Model/ProductDB.php";

$fields = [
    'productName' => ['order' => '', 'label' => 'Name'],
    'productCode' => ['order' => '', 'label' => 'Code'],
    'productPrice' => ['order' => '', 'label' => 'Price'],
    'productDescription' => ['order' => '', 'label' => 'Description'],
    'discontinue' => ['order' => '', 'label' => 'Discontinued'],
    'inventoryCount' => ['order' => '', 'label' => 'Inventory'],
    'releaseDate' => ['order' => '', 'label' => 'Distribution Date'],
];

$products= new ProductDB();
$column = $_GET['productName'];
if (isset($_GET['ASC'])){
    $query= $products->SorterAsc($column);
} else if (isset($_GET['DESC'])){
    $query = $products->SorterDesc($column);
} else {
    $query = $products->Products();
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <style>
        .order-asc::after {
            content: "↓";
        }

        .order-desc::after {
            content: "↑";
        }

        thead th {
            position: sticky;
            top: 0;
        }

        .product-discontinue {
            background-color: red;
        }

        .product-over-100 {
            border: 3px solid blue;
            text-align: center;
        }

        .product-current-year {
            font-weight: bold;
        }
    </style>
    <title>Practical Exam</title>
</head>

<body>
<div class="container">

    <?php
    $products = $products->Products();
    ?>

    <table class="table table-bordered table-hover">
        <thead class="thead-dark">
            <br>
                <th class="order-asc"><a href="index.php?sort=name&order">Name</a></th>
                <th class="order-asc"><a href="index.php?sort=nameDsc">Code</a></th>
                <th class="order-asc"><a href="index.php?sort=nameDsc">Price</a></th>
                <th class="order-asc"><a href="index.php?sort=nameDsc">Description</a></th>
                <th class="order-asc"><a href="index.php?sort=nameDsc">Discontinued</a></th>
                <th class="order-asc"><a href="index.php?sort=nameDsc">Inventory</a></th>
                <th class="order-asc"><a href="index.php?sort=nameDsc">Distribution Date</a></th>
            </tr>
        </thead>
        <tbody>
            <?php
            foreach ($query as $product) {

                $productName = $product['productName'];
                $productCode = $product['productCode'];
                $productPrice = $product['productPrice'];
                $productDescription = $product['productDescription'];
                $discontinue = $product['discontinue'];
                $inventoryCount = $product['inventoryCount'];
                $releaseDate = $product['releaseDate'];

                $tdDiscontinue = "";
                if ($discontinue == 1){
                    $tdDiscontinue .= "product-discontinue";
                }

                $tdInventoryCount = "";
                if ($inventoryCount > 100){
                    $tdInventoryCount .= "product-over-100";
                }

                $productCurrentYear = "";
                if (date("Y",strtotime($releaseDate))==date("Y")-1){
                    $productCurrentYear .= "product-current-year";
                }

                echo "<tr class='$tdInventoryCount'>";
                echo "<td class='$tdDiscontinue $productCurrentYear'>$productName</td>";
                echo "<td class='$tdDiscontinue $productCurrentYear'>$productCode</td>";
                echo "<td class='$tdDiscontinue $productCurrentYear'>$productPrice</td>";
                echo "<td class='$tdDiscontinue $productCurrentYear'>$productDescription</td>";
                echo "<td class='$tdDiscontinue $productCurrentYear'>$discontinue</td>";
                echo "<td class='$tdDiscontinue $productCurrentYear'>$inventoryCount</td>";
                echo "<td class='$tdDiscontinue $productCurrentYear'>$releaseDate</td>";

                echo "</tr>";
            }
            ?>
        </tbody>
    </table>

</div>
</body>

</html>
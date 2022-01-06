<?php
require('data.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
</head>
<body>
<div class="w3-row">

    <div class="w3-col s6 m6 l3">
        <div class="w3-card-4 w3-margin">

            <?php
            if (isset($products)) {
                foreach ($products as $product) {
                    echo "<div class='w3-container w3-center'><p>";
                    echo "<a href='display.php?id=$product[id]'><img src='images/$product[urlImg]' style='width: 100%;'></a>";
                    echo "</p></div>";
                }
            }
            ?>

        </div>
    </div>


    <hr/>

</div>
<section class="w3-row">
    <div class="w3-container w3-grey">
        <h1>Last artist Seen</h1>
    </div>

    <?php
    if (isset($_COOKIE['selectedProduct']) && isset($products)) {
    $selectedProduct = getById($_COOKIE['selectedProduct'], $products);
    ?>
    <div class="w3-container">
        <div class="w3-card-4 w3-margin" style="width: 20%;">
            <?php
            echo "<a href='display.php?id=$selectedProduct[id]'><img src='images/$selectedProduct[urlImg]' style='width: 100%;'></a>";
            echo "<div class='w3-container w3-center'>";
            echo $selectedProduct['title'];
            echo "<p></p>";
            }
            ?>
        </div>
    </div>

    <!--    todo test if there is a cookie if yes display the last artist visited -->
    <!--    template to display the image -->
    <!--        <div class="w3-container">-->
    <!--            <div class="w3-card-4 w3-margin" style="width: 20%;">-->
    <!--                <a href="display.php?id=>"><img src="images/" style="width: 100%;"></a>-->
    <!--                <div class="w3-container w3-center">-->
    <!--                   title-->
    <!--                    <p></p>-->
    <!--                </div>-->
    <!--            </div>-->


</section>
</body>
</html>
<?php
    $optionTypes = [
        'week', 'checkbox', 'color', 'date', 'datetime-local', 'email', 'file',
        'hidden', 'image', 'month', 'number', 'password', 'radio', 'range', 'reset',
        'search', 'submit', 'tel', 'text', 'time', 'url'
    ]
?>

<html>
<head>
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
</head>

<body>
<div class="w3-container w3-blue">
    <h2>Add Input in Form 1 Array</h2>
</div>
<form class="w3-container w3-grey" action="exercise-form.php" method="post">

    <label class='w3-text-white' for='varName'>Name</label>
    <input class='w3-input w3-border w3-light-grey' type="text" name="varName" id="varName">
    <label class='w3-text-white' for='varType'>Type</label>
    <select class='w3-select w3-border w3-center' name='varType' id="varType" >
        <?php
        foreach ($optionTypes as $type){
            echo "<option  value='$type'>$type</option>";
        }
        ?>
    </select>
    <label class='w3-text-white' for="varID">ID</label>
    <input class="w3-input w3-border w3-light-grey" type="text" name="varID" id="varID">
    <label class='w3-text-white' for="varLabel">Label</label>
    <input class="w3-input w3-border w3-light-grey" type="text" name="varLabel" id="varLabel">
    <input class="w3-block w3-button w3-indigo w3-hover-blue w3-round-large" type="submit">
</form>
</body>
</html>
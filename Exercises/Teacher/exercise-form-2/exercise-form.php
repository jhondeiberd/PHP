<?php
//Not the idealist associative array but one required for learning.
$forms = [
    ["action" => "management.php", "method" => "post"],
    ["type" => "text", "id" => "lastName", "name" => "lastName", "label" => "Last Name"],
    ["type" => "text", "id" => "firstName", "name" => "firstName", "label" => "First Name"],
    ["type" => "password", "id" => "pwd", "name" => "pwd", "label" => "Password"],
    ["type" => "checkbox", "id" => "enroll", "name" => "enroll", "label" => "Enroll"],
    ["type" => "checkbox", "id" => "terms", "name" => "terms", "label" => "Accept Terms & Conditions"],
    ["type" => "submit", "id" => "submit", "name" => "input", "label" => "Sent"],
];

if (isset($_POST['varName']) && isset($_POST['varType']) && isset($_POST['varID']) && isset($_POST['varLabel'])) {
    $newRow = [
        "type" => $_POST['varType'],
        "id" => $_POST['varID'],
        "name" => $_POST['varName'],
        "label" => $_POST['varLabel']];

//    array_splice($forms, count($forms),)

    //Using pop to remove submit row and add it after the new entry with push
    $submitRow = array_pop($forms);
    array_push($forms, $newRow);
    array_push($forms, $submitRow);
}
?>

<html lang="en">
<head>
    <title>Form Lab</title>
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
</head>

<body>

<div class="w3-container w3-blue">
    <h2>My Form</h2>
</div>

<!--https://www.w3schools.com/w3css/w3css_input.asp-->
<form class="w3-container w3-grey" action="<?= $forms[0]["action"] ?>" method="<?= $forms[0]["method"] ?>">
    <?php
    foreach ($forms as $row) {
        if (!isset($row["id"])) //Skip the form information.
            continue;

        $name = $row["name"];
        $id = $row["id"];
        $type = $row["type"];
        $label = $row["label"];

//        https://www.w3schools.com/w3css/w3css_buttons.asp
        if ($type == "submit") {   //Honestly, you wouldn't have submit in your Array or loop. As it doesn't have any reasons to ever change.
            echo "<input class='w3-block w3-button w3-indigo w3-hover-blue w3-round-large' type='$type' title='$label'/>";
            continue;   //Ignore the rest, or use an Else.
        }

        echo "<label for='$id' class='w3-text-white'><b>$label</b></label>";
        echo "<input class='w3-input w3-border w3-light-grey' type='$type' name='$name' id='$id'>";
        echo "<br />";

    }
    ?>

</form>

</body>

</html>

<?php
//Not the idealist associative array but one required for learning. DO NOT MODIFY
$forms = [
    ["action" => "management.php", "method" => "post"],
    ["type" => "text", "id" => "lastName", "name" => "lastName", "label" => "Last Name"],
    ["type" => "text", "id" => "firstName", "name" => "firstName", "label" => "First Name"],
    ["type" => "password", "id" => "pwd", "name" => "pwd", "label" => "Password"],
    ["type" => "checkbox", "id" => "enroll", "name" => "enroll", "label" => "Enroll"],
    ["type" => "checkbox", "id" => "terms", "name" => "terms", "label" => "Accept Terms & Conditions"],
    ["type" => "submit", "id" => "submit", "name" => "input", "label" => "Sent"],
];
?>

<!DOCTYPE html>
<html>
<title>W3.CSS</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<body>

<div class="w3-container">
    <div class="w3-card-4">
        <div class="w3-container w3-blue">
            <h2>My Form</h2>
        </div>

        <form action="management.php" metod="post" class="w3-container w3-gray">
            <p>
                <label class="w3-text-white"><b>First Name</b></label>
                <input class="w3-input w3-border" id="firstName" name="firstName" type="text"></p>
            <p>
                <label class="w3-text-white"><b>Last Name</b></label>
                <input class="w3-input w3-border" id="lastName" name="lastName" type="text"></p>
            <p>
                <label class="w3-text-white"><b>Password</b></label>
                <input class="w3-input w3-border" id="pwd" name="pwd" type="password"></p>

            <p>
                <label class="w3-text-white">Email</label>
                <input class="w3-check-blue" id="enroll" name="enroll" type="checkbox" checked="checked"></p>
            <p>
                <label class="w3-text-white">Accept Terms & Conditions</label>
                <input class="w3-check-blue" id="terms" name="terms" type="checkbox" checked="checked"></p>

            <p>
                <button class="w3-btn w3-round w3-indigo w3-block" type="submit" id="submit" name="input" >Submit</button></p>
        </form>
    </div>
</div>

</body>
</html>
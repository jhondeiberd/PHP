<?php

if (isset($_GET['fname'])) {
    setcookie('myArray', json_encode($_GET), strtotime( '+1 days' ));
}

if (isset($_COOKIE['myArray'])) {
    $myArray = json_decode($_COOKIE['myArray'], true);
    var_dump($myArray);
    echo $myArray['fname'];
    $_COOKIE['myArray'] = "DSADSA";
    echo $_COOKIE['myArray'];
}

?>

<!DOCTYPE html>
<html>
<body>

<h2>HTML Forms</h2>

<form action="CookieArray.php" method="get">
    <!--<form action="post.php" method="post">-->
    <label for="fname">First name:</label><br>
    <input type="text" id="fname" name="fname" value="John P"><br>
    <label for="lname">Last name:</label><br>
    <input type="text" id="lname" name="lname" value="Doe"><br><br>
    <input type="submit" value="Submit">
</form>

<p>If you click the "Submit" button, the form-data will be sent to a page called "/action_page.php".</p>

</body>
</html>

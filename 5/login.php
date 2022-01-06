<?php
if (isset($_GET['success'])) {
    session_unset();
}

?>

<!DOCTYPE html>
<html>
<body>

<h2>HTML Forms</h2>

<form action="session.php" method="post">
    <!--<form action="post.php" method="post">-->
    <label for="username">username:</label><br>
    <input type="text" id="username" name="username" value="John P"><br>
    <label for="password">Password:</label><br>
    <input type="password" id="password" name="password" value="Doe"><br><br>
    <input type="submit" value="Submit">
</form>

<p>If you click the "Submit" button, the form-data will be sent to a page called "/action_page.php".</p>

</body>
</html>

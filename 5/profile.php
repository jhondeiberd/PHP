<?php

session_start();

?>
<html>
<body>
<form method="post" action="login.php?success=true">
    <H1>Hello <?= $_SESSION['user'] ?></H1>
    <input type="submit" value="Logout">
</form>
</body>
</html>

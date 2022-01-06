<?php
session_start();
require_once "../Model/UserDB.php";
$userDB = new UserDB();
$userName = $_SESSION['userName'];
$userDB->offlineUser($userName);
session_destroy();
header("location:explore.php");
?>
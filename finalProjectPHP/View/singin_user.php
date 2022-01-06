<?php
session_start();
require_once "../Model/UserDB.php";
$userDB = new UserDB();

if (isset($_POST['login'])){
    $userName = htmlentities(mysqli_escape_string($_POST['userName']));
    $password = htmlentities(mysqli_escape_string($_POST['password']));

    $userLogIn =  $userDB->singInUser($userName, $password);

    $userOnLine =  $userDB->onlineUser($userName);

}



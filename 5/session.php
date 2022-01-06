<?php
/*
 * Same as Cookie but stored on server.
 * Request/response are stateless.
 * ID given to user and that id also stored on server.
 */

$username = $_POST['username'];
$password = $_POST['password'];

if (!isset($username) || !isset($password)) {
    header('Location: login.php?error=missing');
    exit(); //End script early.
}

if ($username != 'reza' || $password != '123' ) {
    header('Location: login.php?username=wrong&password=wrong');
    exit();
}

session_start();
$_SESSION['user'] = $username;
header('Location: profile.php');
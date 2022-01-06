<?php
require_once "../Model/ChatDB.php";
require_once "../Model/UserDB.php";
//require_once("head.php") ;
$chatDB = new ChatDB();
$userDB = new UserDB();
session_start();
$userName = $_SESSION['userName'];
const IMG_PATH = './assets/img/';
const image = 'image';
const userName = 'userName';
const firstName = 'firstName';
const lastName = 'lastName';
const status = 'status';

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no"/>
    <meta name="description" content=""/>
    <meta name="author" content=""/>
    <title>Chat-Project</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"/>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"
    "></script>
    <link href="css/styles.css" rel="stylesheet"/>
</head>
<body>
<div class="container main-section">
    <div class="row">
        <div class="col-md-3 col-sm-3 col-xs-12 left-sidebar">
            <div class="input-group-btn">
                <div class="input-group-btn">
                    <a href="View/find_friends.php">
                        <button class="btn btn-default
                        search-icon" name="search_user" type="submit">Add new User
                        </button>
                    </a>
                </div>
            </div>
            <div>
                <ul>
<!--                    --><?php //include("View/home.php");?>
                </ul>
            </div>
        </div>
        <div class="col-md-9 col-sm-9 col-xs-12 right-sidebar">
            <div class="row">
                <?php
//                    $userNameReceiver = 'marlenyp';//$_SESSION['userName'];
//                    $userNameSender = $_SESSION['userName'];
//                    echo "userNameSender: " . $userNameSender, "--userNameReceiver: " . $userNameReceiver;
//                    $getUserInfo = $userDB->getUserInfo($user);
//                    print_r($getUserInfo);

                    $chatUser = ($userDB->getAllUsers());
                    foreach ($chatUser as $date => $values) {
                        //$file = IMG_PATH . $values[image];
                        $fullName = $values[firstName] . " " . $values[lastName];
                        $status = $values[status];
                        echo 'test';
                    }
                ?>
            </div>
        </div>
    </div>
</div>
</body>
</html>
<?php
require_once "../Model/UserDB.php";
$userDB = new UserDB();
session_start();
if(isset($_SESSION['userName'])!="project"){
    $page = "explore.php";
} else {
    $page = "index.php";
}

$gender ="";
$maritalState ="";
$age ="";

if(isset($_POST["gender"])) {
    $gender = $_POST["gender"];
}
if(isset($_POST["maritalState"])) {
    $maritalState = $_POST["maritalState"];
}
if(isset($_POST["age"])) {
    $age = $_POST["age"];
}

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
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js""></script>
    <link href="css/styles.css" rel="stylesheet"/>
</head>
<body>
<section class="page-section bg-primary text-white mb-1" id="about">
    <div class="container">
        <h2 class="page-section-heading text-center text-uppercase text-white">Search</h2>
        <div class="divider-custom divider-light">
            <div class="divider-custom-line"></div>
            <div class="divider-custom-icon"><i class="fas fa-star"></i></div>
            <div class="divider-custom-line"></div>
        </div>
    </div>
</section>
<br><br>
<div class="container d-flex align-items-center flex-column">
    <form action='<?=$page?>' method="post">
        <h1><strong>Searching profiles</strong></h1><br><br>
        <h2>Gender:
            <select name="gender" >
                <?php
                $selectGender = $userDB->selectGender();
                foreach ($selectGender as $date => $array) {
                    foreach ($array as $key => $value) {
                        echo "<option value=$value>$value</option>";
                    }
                }
                ?>
            </select>
        </h2><br>

        <h2>Marital state:
            <select name="maritalState" >
                <?php
                $selectMaritalState = $userDB->selectMaritalState();
                foreach ($selectMaritalState as $date => $array) {
                    foreach ($array as $key => $value) {
                        echo "<option value=$value>$value</option>";
                    }
                }
                ?>
            </select>
        </h2><br>

        <h2>Age's range:
            <select name="age" >
                <?php
                $selectAge = $userDB->selectAge();
                foreach ($selectAge as $date => $array) {
                    foreach ($array as $key => $value) {
                        echo "<option value=$value>$value</option>";
                    }
                }
                ?>
            </select>
        </h2><br>

        <button class="btn btn-primary" type="submit" name="search">Search</button>
    </form>
</div>
</body>
</html>
<?php

const SITE_NAME = 'Pepiniere Dominique';
const TITLE_SEP = '-';

define('URL_SEP', '/');
define('BASE_URL', 'http://www.pepdom.ca');
define('HOME_NAME', 'Home');
define('PRODUCTS_NAME', 'Products');
define('ABOUT_NAME', 'About');
define('HOME_URL', BASE_URL);
define('PRODUCTS_URL', BASE_URL . URL_SEP . strtolower(PRODUCTS_NAME));
define('ABOUT_URL', BASE_URL . URL_SEP . strtolower(ABOUT_NAME));

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title><?= SITE_NAME . TITLE_SEP . HOME_NAME ?></title>
</head>

<body>
<header>
    <h1><?php HOME_NAME ?> </h1>
    <nav>
        <ul>
            <li>
                <a href="<?= BASE_URL ?>"><?= HOME_NAME ?></a>
            </li>
            <li>
                <a href="<?= PRODUCTS_URL?>"><?= PRODUCTS_NAME ?></a>
            </li>
            <li>
                <a href="<?= ABOUT_URL?>"><?= ABOUT_NAME ?></a>
            </li>
        </ul>
    </nav>
</header>
<main>
    <p>Page Contents ...</p>
</main>
</body>

</html>
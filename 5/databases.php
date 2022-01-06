<?php
/*
 * 3 Ways of connecting to DB in PHP:
 *      - Mysql (DEPRECATED) DO NOT USER EVER!
 *      - Mysqli (improved) Acceptable.
 *          -> Limitation:
 *              -Only one type of database accepted. (MYSQL)
 *      - PDO (Better way of doing this) (REZA APPROVED)
 *          -> Allows any type.
 *              -> Using the correct connection string for that database
 *
 *      -> Ways to Code:
 *              -> procedural (scripts)
 *              -> OOP style
 */

const serverName = "localhost";
const port = 3306;
const database = "example";
const username = "exampleInsert";
const password = "password";
const connectionString = "mysql:host=" . serverName . ";dbname=" . database . ";port=" . port;

try {
    $connection = new PDO(connectionString, username, password);
    $connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    echo "success <br />";
} catch (PDOException $exception) {
    echo "Connection Failed: {$exception->getMessage()}";
}

if (isset($connection)) {
    $firstName = "reza";    //Example. Could be from Coookie, post, get, session
    $username = "user";
    $password = "password";
//    $query = "SELECT * FROM example.user where first_name = '$firstName'";
    $query = "SELECT * FROM example.user where username = ? and password = ?";
    $stmt = $connection->prepare($query);
    $stmt->execute(array($username, $password));

    $stmt->setFetchMode(PDO::FETCH_ASSOC);
    var_dump($stmt->fetchAll());
    echo "<hr />";
    foreach ($stmt->fetchAll() as $row) {
        echo "Name: $row[first_name]";
    }
}

$connection = null; //Closes connection with the database
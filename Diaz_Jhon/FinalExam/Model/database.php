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

abstract class Database{
    private const _serverName = "localhost";
    private const _port = 3306;
    private const _database = "exam";
    private const _username = "exam";
    private const _password = "exam";
    private const _connectionString = "mysql:host=" . Database::_serverName . ";dbname=" . self::_database . ";port=" . self::_port;

    private PDO $_connection;

    public function __construct()
    {
        try {
            $this->_connection = new PDO(self::_connectionString, self::_username, self::_password);
            $this->_connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        } catch (PDOException $exception) {
            echo "Connection Failed: {$exception->getMessage()}";
            die("Connection to DB Failed");
        }
    }

    protected function execute(string $query): array|false
    {
        $stmt = $this->_connection->prepare($query);
        $stmt->execute();
        $stmt->setFetchMode(PDO::FETCH_ASSOC);
        return $stmt->fetchAll();
    }
}



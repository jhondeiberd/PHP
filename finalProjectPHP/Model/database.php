<?php

abstract class Database{
    private const _serverName = "localhost";
    private const _port = 3306;
    private const _database = "finalProjectPHP";
    private const _username = "project";
    private const _password = "project";
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



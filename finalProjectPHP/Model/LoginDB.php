<?php
require_once "database.php";

class LoginDB extends Database {
    public function authenticate($userName, $password) : bool{
        $query = "select * from finalprojectphp.user where userName = '$userName' and password = '$password'";
        $result = $this->execute($query);
        if (count($result) == 0) {
            return false;
        }
        return true;
    }
}
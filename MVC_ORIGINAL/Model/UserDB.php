<?php
require_once "database.php";
class UserDB extends Database{
    public function userExist($userName): bool {
        $query = "select userName from finalprojectphp.user where userName = '$userName'";
        $result = $this->execute($query);
        if (count($result) == 0) {
            return false;
        }
        return true;
    }

    public function authenticate($userName, $password) : bool{
        $query = "select userName, password from finalprojectphp.user where userName = '$userName' and password = '$password'";
        $result = $this->execute($query);
        if (count($result) == 0) {
            return false;
        }
        return true;
    }

    function getAllUsers() : array {
        $query = "select * from finalprojectphp.user";
        return $this->execute($query);
    }

    function singUpUser($userName, $password, $firstName, $lastName, $image, $email, $phone, $age, $gender, $maritalState, $message, $member) : Array {
        $query = "INSERT INTO finalprojectphp.user (idUser, userName, password, firstName, lastName, image, email, phone, age, gender, maritalState, message, member) VALUES (NULL, '$userName', '$password', '$firstName', '$lastName', '$image', '$email', '$phone', '$age', '$gender', '$maritalState', '$message', '$member');";
        return $this->execute($query);
    }
}


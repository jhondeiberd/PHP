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

    function updateUserInfo($userName, $password, $firstName, $lastName, $image, $email, $phone, $age, $gender, $maritalState, $message, $member) : Array {
        $query = "UPDATE finalprojectphp.user 
                    SET firstName='$firstName', lastName='$lastName', password ='$password', member ='$member', image='$image', email='$email',
                    phone='$phone', age='$age', gender='$gender', maritalState='$maritalState', message='$message' 
                    WHERE userName = '$userName';";
        return $this->execute($query);
    }

    function singUpUser($userName, $password, $firstName, $lastName, $image, $email, $phone, $age, $gender, $maritalState, $message, $member) : Array {
        $query = "INSERT INTO finalprojectphp.user (idUser, userName, password, firstName, lastName, image, email, phone, age, gender, maritalState, message, member) VALUES (NULL, '$userName', '$password', '$firstName', '$lastName', '$image', '$email', '$phone', '$age', '$gender', '$maritalState', '$message', '$member');";
        return $this->execute($query);
    }

    function getUserInfo($userName) : Array {
        $query = "select * from finalprojectphp.user where userName = '$userName';";
        return $this->execute($query);
    }

    function selectGender() : Array {
        $query = "select distinct gender from finalprojectphp.user order by gender;";
        return $this->execute($query);
    }

    function selectMaritalState() : Array {
        $query = "select distinct maritalState from finalprojectphp.user order by maritalState;";
        return $this->execute($query);
    }

    function selectAge() : Array {
        $query = "select distinct age from finalprojectphp.user order by age;";
        return $this->execute($query);
    }

    function searchUser($age, $gender, $maritalState) : Array {
        $query = "select * from finalprojectphp.user where age = '$age' and gender = '$gender' and maritalState = '$maritalState';";
        return $this->execute($query);
    }

    function singInUser($userName, $password) : Array{
        $query = "select * from finalprojectphp.user where userName = '$userName' and password = '$password';";
        return $this->execute($query);
    }

    function onlineUser($userName){
        $query = "UPDATE finalprojectphp.user SET status = 'OnLine' WHERE userName = '$userName';";
        $this->execute($query);
    }

    function offlineUser($userName){
        $query = "UPDATE finalprojectphp.user SET status = 'OffLine' WHERE userName = '$userName';";
        $this->execute($query);
    }

}

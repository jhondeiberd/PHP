<?php
require_once "database.php";

class UserDB extends  Database{
    public function userExist($username): bool {
        $query = "select * from isi_info.user where login = '$username'";
        $result = $this->execute($query);
        if (count($result) == 0) {
            return false;
        }
        return true;
    }

    public function authenticate($username, $password) : bool{
        $query = "select * from isi_info.user where login = '$username' and pwd = '$password'";
        $result = $this->execute($query);
        if (count($result) == 0) {
            return false;
        }
        return true;
    }
}

/* TEST YOUR CODE

$userDB = new UserDB();
echo "Reza exists: {$userDB->userExist('reza')} <br />";
echo "Admin exists: {$userDB->userExist('admin')} <br />";

*/

<?php
require_once "database.php";

class ChatDB extends Database{
    function getTotalMessage(): array
    {
        $query = "select * from finalprojectphp.users_chat where sender_username = '$userName' and receiver_username = '$userName'
                or );";
        return $this->execute($query);
    }


}

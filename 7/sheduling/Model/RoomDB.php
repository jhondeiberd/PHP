<?php
require_once "database.php";

class RoomDB extends Database{
    function getAllRooms() : array {
        $query = "SELECT * FROM isi_info.room";
        return $this->execute($query);
    }
}
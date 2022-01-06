<?php
require_once "database.php";

class ScheduleDB extends Database{
//    public function getDayInInt($value) :int|false {
//        switch ($value) {
//            case "monday":
//                return 1;
//            case "tuesday":
//                return 2;
//        }
//        return false;
//    }

    public function getRooms(int $AMorPM,int $day) {
        $query = "select * from isi_info.schedule where iddaytime = $AMorPM and idweekday = $day";
        $result = $this->execute($query);

        return array_column($result, "idroom");
    }
}
<?php
require_once "../Model/ScheduleDB.php";
$scheduleDB = new ScheduleDB();


?>
<html>
<body>
<table style="width:100%">
    <tr>
        <th></th>
        <th>Monday</th>
        <th>Tuesday</th>
        <th>Wednesday</th>
        <th>Thursday</th>
        <th>Friday</th>
        <th>Saturday</th>
    </tr>
    <tr>
        <th>AM</th>
        <?php
        for ($day = 1; $day < 7; $day++) {
            echo "<td>";
            foreach ($scheduleDB-> getRooms(1, $day) as $room) {
                echo "Room $room <br />";
            }
            echo "</td>";
        }
        ?>
    </tr>
    <tr>
        <th>PM</th>
        <?php
        for ($day = 1; $day < 7; $day++) {
            echo "<td>";
            foreach ($scheduleDB->getRooms(2, $day) as $room) {
                echo "Room $room <br />";
            }
            echo "</td>";
        }
        ?>
    </tr>
</table>
</body>
</html>
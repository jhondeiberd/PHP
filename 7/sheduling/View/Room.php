<html>
<body>
<table>
    <?php
    require_once "../Model/RoomDB.php";

    $roomDB = new RoomDB();

    foreach ($roomDB->getAllRooms() as $row) {
        echo "<tr>";
        echo "<td>$row[description]</td>";
        echo "</tr>";
    }


    ?>
</table>
</body>
</html>
<?php
const serverName = "localhost";
const database = "school";
const username = "admin";  //change Username and password
const password = "admin";
const connectionString = "mysql:host=" . serverName . ";dbname=" . database;

try {
    $connection = new PDO(connectionString, username, password);
    $connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $exception) {
    die("Connection failed: {$exception->getMessage()}");
}

try {
    //Code to get Cities
    $teachers = [];
    $query = "select Name, Year_Assignment, `Rank` from teachers where Year_Assignment > 2000";
    $statement = $connection->prepare($query);
    $statement->execute();
    $statement->setFetchMode(PDO::FETCH_ASSOC);

    foreach ($statement->fetchAll() as $rowNumber => $row) {
        array_push($teachers, $row);
    }

} catch (PDOException $exception) {
    echo "ERROR : {$exception->getMessage()}";
}

$connection = null; //Closing the connection (Optional but good practice getting the right habit)
?>

<html>
<head>

</head>
<body>
    <p>List of teachers assigned since 2000</p>
    <table style="text-align: center;">
        <tr>
            <th>Name</th>
            <th>Year assigned</th>
            <th>Rank</th>
        </tr>
    <?php
        foreach ($teachers as $teacher) {
            echo "<tr>";
            echo "<td>{$teacher['Name']}</td>";
            echo "<td>{$teacher['Year_Assignment']}</td>";
            echo "<td>{$teacher['Rank']}</td>";
            echo "</tr>";
        }
    ?>
    </table>
</body>
</html>

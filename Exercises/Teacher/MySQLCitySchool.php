<?php
const serverName = "localhost";
const database = "school";
const username = "user";  //change Username and password
const password = "user";
const connectionString = "mysql:host=" . serverName . ";dbname=" . database;

try {
    $connection = new PDO(connectionString, username, password);
    $connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $exception) {
    die("Connection failed: {$exception->getMessage()}");
}

try {
    //Code to get Cities
    $cities = [];
    $query = "select DISTINCT City from teachers";
    $statement = $connection->prepare($query);
    $statement->execute();
    $statement->setFetchMode(PDO::FETCH_ASSOC);

    foreach ($statement->fetchAll() as $rowNumber => $row) {
        array_push($cities, $row['City']);
    }

    //Code to get Users from specific city
    if (isset($_GET['city'])){
        //Code to get teachers
        $selectedCity = $_GET['city'];
        $teachers = [];
        $query = "select Name from teachers where City = :selectedCity";
        $statement = $connection->prepare($query);
        $statement->execute(["selectedCity" => $selectedCity]);
        $statement->setFetchMode(PDO::FETCH_ASSOC);

        foreach ($statement->fetchAll() as $rowNumber => $row) {
            array_push($teachers, $row['Name']);
        }
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
<form action="MySQLCitySchool.php" method="get">
    <label for="cities">Select a city:</label>

    <select name="city" id="cities">
        <?php
        foreach ($cities as $city){
            echo "<option value='$city'>$city</option>";
        }
        ?>
    </select>
    <input type="submit" value="OK">
</form>

<?php
    //Only do this part if a city is selected.
    if (isset($_GET['city']) && isset($selectedCity) && isset($teachers)) {
        echo "Teachers of the city: $selectedCity <br />";

        foreach ($teachers as $teacher) {
            echo "$teacher <br />";
        }
    }
?>
</body>
</html>

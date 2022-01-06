<?php
const serverName = "localhost";
const port = 3306;
const database = "school";
const username = "admin";
const password = "admin";
const connectionString = "mysql:host=" . serverName . ";dbname=" . database . ";port=" . port;

try {
    $connection = new PDO(connectionString, username, password);
    $connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $exception) {
    echo "Connection Failed: {$exception->getMessage()}";
}

$city="";
$year="";
if (isset($_POST['run'])){
    $city =($_POST["select"]);
    $year =($_POST["year"]);
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>City school</title>
</head>

<body>
<form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
    <h1>Select City:
    <select name="select" >
        <option value="" </option>
        <?php
        //echo "HERE";
        if(isset($connection)) {
            $query = "SELECT DISTINCT city FROM teachers";
            $stmt = $connection->prepare($query);
            $stmt->execute();
            $stmt->setFetchMode(PDO::FETCH_ASSOC);
            foreach ($stmt->fetchAll() as $number => $array) {
                foreach ($array as $key => $value) {
                    echo "<option value=$value>$value</option>";
                }
            }
        } ?>
    </select>
    <h1>Year:
        <select name="year" >
            <option value="" </option>
            <?php
            echo "HERE";
            if(isset($connection)) {
                $query = "SELECT DISTINCT Year_Assignment FROM teachers";
                $stmt = $connection->prepare($query);
                $stmt->execute();
                $stmt->setFetchMode(PDO::FETCH_ASSOC);
                foreach ($stmt->fetchAll() as $number => $array) {
                    foreach ($array as $key => $value) {
                        echo "<option value=$value>$value</option>";
                    }
                }
            } ?>
        </select>
    <button type="submit" name="run">OK</button>
    </h1>
</form>
<h2>
    Teacher of the city
</h2>
<?php
if($city != ""){
    if(isset($connection)) {
        $query = "SELECT Name, city, Year_Assignment FROM teachers where City = '$city' and Year_Assignment = '$year'";
        $stmt = $connection->prepare($query);
        $stmt->execute();
        $stmt->setFetchMode(PDO::FETCH_ASSOC);
        foreach ($stmt->fetchAll() as $number=>$array) {
            foreach ($array as $key=>$value){
                echo "$value";
                echo "<br>";
            }
        }
    }
}?>

</body>

</html>

<?php
$connection = null;
?>
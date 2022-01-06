<?php
const IMG_PATH = 'images/';

const FILENAME_K = 'filename';
const ALT_K = 'alt';
const TEMPS_K = 'temps';

$forecasts = array(
    '2021-04-11' => array(
        FILENAME_K => 'clearance.gif',
        ALT_K => 'clearance image',
        TEMPS_K => '-17ºC',
    ),
    '2021-04-12' => array(
        FILENAME_K => 'sun_cloud.gif',
        ALT_K => 'sun and cloud image',
        TEMPS_K => '-11ºC',
    ),
    '2021-04-13' => array(
        FILENAME_K => 'snow.gif',
        ALT_K => 'snow image',
        TEMPS_K => '-12ºC',
    ),
    '2021-04-14' => array(
        FILENAME_K => 'sun.gif',
        ALT_K => 'sun image',
        TEMPS_K => '-15ºC',
    ),
    '2021-04-15' => array(
        FILENAME_K => 'snow.gif',
        ALT_K => 'snow image',
        TEMPS_K => '-11ºC',
    ),
    '2021-04-16' => array(
        FILENAME_K => 'sun.gif',
        ALT_K => 'sun image',
        TEMPS_K => '-15ºC',
    ),
);

?>

<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="utf-8" />
    <title>Weather Table</title>
</head>

<body>
<div>
    <header>
        <h1>Weather Table</h1>
    </header>
    <main>
        <table>
            <?php
            foreach ($forecasts as $date => $value){
                echo "<tr>";
                echo "<td>{$date}</td>";
                $file = IMG_PATH . $value[FILENAME_K];
                echo "<td><img alt='{$value[ALT_K]}' src='$file' /> </td>";
                echo "<td>{$value[TEMPS_K]}</td>";
                echo "</tr>";
            }
            ?>
        </table>
    </main>
</div>

</body>

</html>
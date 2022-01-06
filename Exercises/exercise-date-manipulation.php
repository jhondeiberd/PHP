<?php

function showTitle($title){
    echo '<br/>';
    echo "<br/><b>&#9830; $title</b><br/>";
    echo '<hr/>';
}
showTitle('Exercise 1');
$hoy = date(DATE_RFC2822);
echo($hoy);

showTitle('Exercise 2 - Show Day');
$day = date("j");
echo($day);

showTitle('Exercise 3 - Show Month');
$month = date("m");
echo($month);

showTitle('Exercise 4 - Show Year');
$year = date("Y");
echo($year);

showTitle('Exercise 5 - Show Day, Month, Year');
$date = date("j, m, Y");
$Date = date("j, M, Y");
echo "$date <br/> $Date";

showTitle('Exercise 6 (Add 1 month to the constant date)');
$nextMonth = date(DATE_RFC2822, strtotime('+1 month'));
echo strftime($nextMonth);

showTitle('Exercise 7 (Number of days since 31 December 1973)');
$date1 = new DateTime('now');
$date2 = date_create('1973-12-31');

$interval = date_diff($date1, $date2);
echo $interval->format('%a days');


showTitle('Exercise 8');
$date = date_create('2021-03-30');
$dateformat = date_format($date,"l, j F Y");
echo($dateformat);
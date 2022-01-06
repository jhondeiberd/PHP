<?php

const USERS = array(
    array('Pierre', 22, '123 rue A', 'aa@ser.com', array('programming' => 5, 'teaching' => 2)),
    array('Julie', 65, '123 rue B', 'bb@ser.com', array('electronics' => 46)),
    array('Martin', 45, '123 rue C', 'cc@ser.com', array('programming' => 21, 'teaching' => 1)),
    array('Melanie', 41, '123 rue D', 'dd@ser.com', array('welding' => 12, 'nutrition' => 6, 'restoration' => 1)),
);

// todo: Black color when age is exactly equal to reference age, green when upper and blue when lower
const AGE_REFERENCE = 45;

// todo: Yellow color when the years of experience is equal to or greater than MINIMUM_EXPERIENCE
const MINIMUM_EXPERIENCE = 5;

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Exercise - Table</title>

    <style>
        table,
        td,
        th {
            border: 1px solid black;
            margin: auto;
        }

        ul {
            list-style-type: none;
            padding: 5px;
        }

        .age-reference {
            background-color: black;
            color: white;
        }

        .age-over {
            background-color: green;
            color: white;
        }

        .age-under {
            background-color: blue;
            color: white;
        }

        .experience-invalid {
            background-color: white;
            color: black;
        }

        .experience-valid {
            background-color: yellow;
            color: black;
            font-weight: bold;
        }
    </style>
</head>

<body>

<table>
    <thead>
    <tr>
        <th>Name</th>
        <th>Age</th>
        <th>Address</th>
        <th>Email</th>
        <th>Jobs</th>
    </tr>
    </thead>

    <tbody>
    <?php
    $sum = 0;
    $qty = count(USERS);
    foreach (USERS as $arr){

        $name = $arr[0];
        $age = $arr[1];
        $address = $arr[2];
        $email = $arr[3];
        $jobs = $arr[4];

        $style = "";
        if ($age === AGE_REFERENCE){
            $style .= "age-reference "; //Concatenating to variable: will allow multiple classes if we want in css.
        }
        else if ($age > AGE_REFERENCE){
            $style .= "age-over";
        }
        else if ($age < AGE_REFERENCE){
            $style .= "age-under";
        }
        $sum += $age;

        echo "<tr>";
        echo "<td class='$style'>$name</td>";
        echo "<td class='$style'>$age</td>";
        echo "<td class='$style'>$address</td>";
        echo "<td class='$style'>$email</td>";
        echo "<td class='$style'>";
        foreach ($jobs as $job => $years){

            $styleJob = "";
            if ($years >= MINIMUM_EXPERIENCE){
                $styleJob .= "experience-valid";
            }
            else {
                $styleJob .= "experience-invalid";
            }

            echo "<div class='$styleJob'>$job : $years years </div><br />";
        }
        echo "</td>";
        echo "</tr>";
    }
    $average = $sum / $qty;

    echo "<tr>";
    echo "<td>Average</td>";
    echo "<td>$average</td>";
    echo "</tr>";

    ?>
    </tbody>

    <tfoot>

    </tfoot>
</table>

</body>

</html>
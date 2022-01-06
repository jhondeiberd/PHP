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
    $totalAge = 0;
    foreach (USERS as $user){

        $name = $user[0];
        $age = $user[1];
        $address = $user[2];
        $email = $user[3];
        $jobs = $user[4];


        $tdClass = "";  //
        if ($age === AGE_REFERENCE){
            $tdClass .= "age-reference "; //Concatenating to variable: will allow multiple classes if we want in css.
        }
        else if ($age > AGE_REFERENCE){
            $tdClass .= "age-over";
        }
        else if ($age < AGE_REFERENCE){
            $tdClass .= "age-under";
        }

        $totalAge += $age;


        echo "<tr>";
        echo "<td class='$tdClass'>$name</td>";
        echo "<td class='$tdClass'>$age</td>";
        echo "<td class='$tdClass'>$address</td>";
        echo "<td class='$tdClass'>$email</td>";
        echo "<td class='$tdClass'>";
        foreach ($jobs as $job => $years){
            if ($years >= MINIMUM_EXPERIENCE)
                echo "<div class='experience-valid'>$job : $years years </div><br />";
            else
                echo "$job : $years years <br />";
        }
        echo "</td>";
        echo "</tr>";
    }
    $average = $totalAge / count(USERS);

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
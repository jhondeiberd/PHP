<?php

//Second part: Display only if no errors and form got submitted.
if (count($_POST) >= 10) {
    $formSubmitted = true;
} else {
    $formSubmitted = false;
}
$error = false;

//Set all CSS Classes to default value. Change it later if there is an error.
$inputNameCSS = "form-control";
$inputAgeCSS = "form-control";
$inputEmailCSS = "form-control";
$inputPasswordCSS = "form-control";
$inputDateOfBirthCSS = "form-control";
$inputMultipleSelectionsCSS = "form-control";
$inputCheckCSS = "form-check-input";

//For Errors, we want to find the inverse of GOOD. So anything that would make it an error.

if (isset($_POST['inputName']) && strlen($_POST['inputName']) > 50) {
    $error = true;
    $inputNameCSS .= " is-invalid"; //Concatenate to the css class. Make sure to add space for separation.
}

if (isset($_POST['inputAge'])) {
    $age = $_POST['inputAge'];
    if (!is_numeric($age) || $age < 18 || $age > 150) {
        $error = true;
        $inputAgeCSS .= " is-invalid"; //Concatenate to the css class. Make sure to add space for separation.
    }
}

if (isset($_POST['inputEmail']) && !str_contains($_POST['inputEmail'], '@')) {
    $error = true;
    $inputEmailCSS .= " is-invalid"; //Concatenate to the css class. Make sure to add space for separation.
}

if (isset($_POST['inputPassword']) && strlen($_POST['inputPassword']) > 50) {
    $error = true;
    $inputPasswordCSS .= " is-invalid"; //Concatenate to the css class. Make sure to add space for separation.
}

if (isset($_POST['inputDateOfBirth'])) {
    if (strlen($_POST['inputDateOfBirth']) != 0) {
        $dob = $_POST['inputDateOfBirth'];
        //explode the date to get month, day and year
        $birthDate = explode("-", $dob);
        //get age from date or birthdate
        $monthDay = date("md", date("U", mktime(0, 0, 0, $birthDate[1], $birthDate[2], $birthDate[0])));
        if ( $monthDay > date("md")) { //Compare Month and day to determine birthday has passed or not.
            $age = ((date("Y") - $birthDate[0]) - 1); //Birthday hasn't yet arrived. So, remove 1 year from birth.
        } else {
            $age = (date("Y") - $birthDate[0]);
        }

        if ($age < 18) {
            $error = true;
            $inputDateOfBirthCSS .= " is-invalid"; //Concatenate to the css class. Make sure to add space for separation.
        }
    } else {
        $error = true;
        $inputDateOfBirthCSS .= " is-invalid"; //Concatenate to the css class. Make sure to add space for separation.
    }
}

if (isset($_POST['inputMultipleSelections']) && count($_POST['inputMultipleSelections']) < 2) {
    $error = true;
    $inputMultipleSelectionsCSS .= " is-invalid"; //Concatenate to the css class. Make sure to add space for separation.
}

if (isset($_POST['inputCheck']) && count($_POST['inputCheck']) < 2) {
    $error = true;
    $inputCheckCSS .= " is-invalid"; //Concatenate to the css class. Make sure to add space for separation.
}


?>
<!DOCTYPE html>
<html lang="en">

<head>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
          integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm"
          crossorigin="anonymous">
    <title>Using Bootstrap</title>
</head>

<body>
<hr>
<div class="container">

    <div class="alert alert-primary" role="alert">
        Exercise - form
    </div>

    <form action="retrieveFromForm.php" method="post" class="needs-validation" novalidate>
        <!--    No Validate forces the browser default validation to not trigger-->
        <div class="form-group row">
            <label for="inputName" class="col-sm-2 col-form-label">Name</label>
            <div class="col-sm-10">
                <input type="text" class="<?= $inputNameCSS ?>" id="inputName" name="inputName">
                <div class="invalid-feedback">
                    Maximum of 50 characters for name.
                </div>
            </div>
        </div>
        <div class="form-group row">
            <label for="inputAge" class="col-sm-2 col-form-label">Age</label>
            <div class="col-sm-10">
                <input type="number" class="<?= $inputAgeCSS ?>" id="inputAge" name="inputAge">
                <div class="invalid-feedback">
                    Age needs between 18 to 150.
                </div>
            </div>
        </div>
        <div class="form-group row">
            <label for="inputEmail" class="col-sm-2 col-form-label">Email</label>
            <div class="col-sm-10">
                <input type="email" class="<?= $inputEmailCSS ?>" id="inputEmail" name="inputEmail">
                <div class="invalid-feedback">
                    Email needs to contain @ symbol.
                </div>
            </div>
        </div>
        <div class="form-group row">
            <label for="inputPassword" class="col-sm-2 col-form-label">Password</label>
            <div class="col-sm-10">
                <input type="password" class="<?= $inputPasswordCSS ?>" id="inputPassword" name="inputPassword">
                <div class="invalid-feedback">
                    Password can only have a maximum 50 characters.
                </div>
            </div>
        </div>
        <div class="form-group row">
            <label for="inputDateOfBirth" class="col-sm-2 col-form-label">Date of Birth</label>
            <div class="col-sm-10">
                <input type="date" class="<?= $inputDateOfBirthCSS ?>" id="inputDateOfBirth" name="inputDateOfBirth">
                <div class="invalid-feedback">
                    Need to be a minimum of 18 years old.
                </div>
            </div>
        </div>
        <div class="form-group row">
            <label for="inputSimpleSelection" class="col-sm-2 col-form-label">Simple Selection</label>
            <div class="col-sm-10">
                <select id="inputSimpleSelection" class="form-control" name="inputSimpleSelection">
                    <option selected>Option 1</option>
                    <option>Option 2</option>
                    <option>Option 3</option>
                </select>
            </div>
        </div>
        <div class="form-group row">
            <label for="inputMultipleSelections" class="col-sm-2 col-form-label">Multiple Selections</label>
            <div class="col-sm-10">
                <select multiple class="<?= $inputMultipleSelectionsCSS ?>" id="inputMultipleSelections"
                        name="inputMultipleSelections[]">
                    <!-- Notice the [] for PHP to get an Array Back -->
                    <option value="option1">Option 1</option>
                    <option value="option2">Option 2</option>
                    <option value="option3">Option 3</option>
                    <option value="option4">Option 4</option>
                    <option value="option5">Option 5</option>
                </select>
                <div class="invalid-feedback">
                    Minimum of 2 options needs to be selected.
                </div>
            </div>
        </div>
        <div class="form-group row">
            <label for="inputTextArea" class="col-sm-2 col-form-label">Message</label>
            <div class="col-sm-10">
                <textarea class="form-control" id="inputTextArea" rows="3" name="inputTextArea"></textarea>
            </div>
        </div>
        <fieldset class="form-group">
            <div class="row">
                <legend class="col-form-label col-sm-2 pt-0">Radios</legend>
                <div class="col-sm-10">
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="inputRadios" id="gridRadios1"
                               value="option1">
                        <label class="form-check-label" for="gridRadios1">First radio</label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="inputRadios" id="gridRadios2"
                               value="option2">
                        <label class="form-check-label" for="gridRadios2">Second radio</label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="inputRadios" id="gridRadios3"
                               value="option3">
                        <label class="form-check-label" for="gridRadios3">Third radio</label>
                    </div>
                </div>
            </div>
        </fieldset>
        <div class="form-group row">
            <div class="col-sm-2">Checkbox</div>
            <div class="col-sm-10">
                <div class="form-check">
                    <input class="<?= $inputCheckCSS ?>" type="checkbox" id="inputCheck" name="inputCheck[0]">
                    <!-- To group Check add array to it -->
                    <label class="form-check-label" for="inputCheck">
                        Example checkbox 1
                    </label>
                </div>
                <div class="form-check">
                    <input class="<?= $inputCheckCSS ?>" type="checkbox" id="inputCheck1" name="inputCheck[1]">
                    <label class="form-check-label" for="inputCheck1">
                        Example checkbox 2
                    </label>
                </div>
                <div class="form-check">
                    <input class="<?= $inputCheckCSS ?>" type="checkbox" id="inputCheck2" name="inputCheck[2]">
                    <label class="form-check-label" for="inputCheck2">
                        Example checkbox2
                    </label>
                    <div class="invalid-feedback">
                        Minimum of 2 checkboxes needs to be selected.
                    </div>
                </div>

            </div>
        </div>
        <div class="form-group row">
            <div class="col-sm-10">
                <button type="submit" class="btn btn-primary">Submit</button>
            </div>
        </div>
</div>

</form>

<div>
    <hr>

    <!-- The following content appears only when the form data is valid-->
    <?php
    if ($formSubmitted && !$error) {
        ?>

        <div class="alert alert-primary" role="alert">
            Submit Result
        </div>

        <ul class="list-group">
            <!-- The value of each of the fields of the form is displayed using LI-->
            <?php
            foreach ($_POST as $item=>$value){
                echo "<li class='list-group-item'>";
                if (is_array($value)){
                    echo "{$item}: ";
                    foreach ($value as  $singleValueInArray){
                        echo "{$singleValueInArray} ";
                    }
                }else {
                    echo "$item: $value";
                }
                echo "</li>";
            }
            ?>
        </ul>

        <?php
    }
    ?>


</div>

</div>
<hr>
</body>

</html>

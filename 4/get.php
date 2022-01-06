<?php
/*
 * GET Method:
 *  ->Get information for user.
 *  ->The variables are listed in the url
 *      get.php?var1=value1&var2=value2...
 *
 *  Limitation/Rules:
 *      Max character limit inside URL. (256)
 *      VISIBLE to the common user.
 */

if (isset($_GET['fname'])) {
    $fName = htmlspecialchars($_GET['fname']);
    echo "Hello $fName, hope you have a wonderful day!";
}
else
    header('Location: sendinformation.php?error=$fname');
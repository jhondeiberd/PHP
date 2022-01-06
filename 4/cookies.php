<?php
/*
 * Storing information on the Client Side.
 * NOT SECURE
 * Identification used for sessions.
 * simple settings that are not crucial/important.
 *
 * Rules:
 *  => Must be set before any output.
 *      -Because cookies are part of the header.
 *  => Cookies are sent to the server with each request.
 *      Stateless: no information kept or known.
 *  =>Avoid Any special characters (Avoid spaces or ., or !@#$%^&*()-_+=....
 *      Example: if use . as part of the name
 *                  it will get converted to _
 */

var_dump($_COOKIE);
if (isset($_COOKIE['lightOrDark']) && $_COOKIE['lightOrDark'] == "light"){ //Happens only on next Load.
    $bodyCSSStyle = "style='background-color: white'";
    setcookie('lightOrDark', 'content', 1); //Delete The Cookie
}
elseif (isset($_COOKIE['lightOrDark'])) {
    $bodyCSSStyle = "style='background-color: black'";
    setcookie('lightOrDark', 'content', 1); //Delete The Cookie
}else {
//    setcookie("lightOrDark", "dark", time()+60 * 60 * 24 * 31);
    $bodyCSSStyle = "style='background-color: white'";
}

setcookie("someOtherCookie", "meh", strtotime( '+30 days' ));

?>
<html>
<?php
var_dump($_COOKIE);
if (isset($_COOKIE['lightOrDark']) && $_COOKIE['lightOrDark'] == "light"){ //Happens only on next Load.
    $bodyCSSStyle = "style='background-color: white'";
}
elseif (isset($_COOKIE['lightOrDark'])) {
    $bodyCSSStyle = "style='background-color: black'";
}else {

}
?>
<body <?= $bodyCSSStyle ?>>
    <?php
//    setcookie() //This is Wrong because it is inside output.
    ?>
</body>
</html>
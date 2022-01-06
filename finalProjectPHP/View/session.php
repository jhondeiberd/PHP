<?php
require_once "../Model/UserDB.php";
require_once("head2.php") ;
$userDB = new UserDB();
session_start();
$userName = $_POST['userName'];
$password = $_POST['password'];
$user = $userDB->authenticate($userName, $password);


if($_POST){
    if($userDB->userExist($userName)) {
        $_SESSION['userName']=$userName;
    } else {
        echo "<script> alert('User name incorrect') </script>";
    }
}

if($_POST){
    if($userDB->authenticate($userName, $password)){
        $_SESSION['userName']=$userName;
        header("location:index.php");
    } else {
        echo "<script> alert('User name or password incorrect') </script>";
    }
}

$userOnLine = $userDB->onlineUser($userName);

?>

<br><br><br><br><br><br><br>
<?php
require_once("footer.php")
?>

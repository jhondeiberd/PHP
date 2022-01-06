<?php
session_start();
session_destroy();
header("location:explore.php");
?>
<?php
$fileName = "sendInformation.php";

header("Content-type: application/php");
header("Content-Disposition: attachment; filename=$fileName");
readfile($fileName);

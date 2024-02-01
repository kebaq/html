<?php

$hostName = "10.0.2.16";
$dbUser = "ikmal";
$dbPassword = "123";
$dbName = "login";
$conn = mysqli_connect($hostName, $dbUser, $dbPassword, $dbName);
if (!$conn) {
    die("Something went wrong;");
}

?>
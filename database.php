<?php

$hostName = "host.docker.internal";
$dbUser = "user1";
$dbPassword = "mypassword";
$dbName = "chall1";
$conn = mysqli_connect($hostName, $dbUser, $dbPassword, $dbName);
if (!$conn) {
    die("Something went wrong;");
}

?>
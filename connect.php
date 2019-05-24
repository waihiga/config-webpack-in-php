<?php
$serverName = "localhost";
$username = "homestead";
$password = "secret";
$databaseName = "ccie";

$connection = new mysqli($serverName, $username, $password, $databaseName);

if ($connection->connect_error) {
    die("Connection failed" . $connection->connect_error);
}

?>
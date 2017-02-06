<?php

$username = "root"; 
$password = "root"; 
$host = "localhost";

$db = "houses"; 

$connection = mysqli_connect($host, $username, $password, $db);

if ($connection->connect_error) {
    die("Connection failed: " . $connection->connect_error);
}
?>



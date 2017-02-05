<?php

$username = "i7432987"; 
$password = "db87cd5158db8139fa7f3265fd44b216"; 
$host = "127.0.0.1";

$db = $username; 

$connection = mysqli_connect($host, $username, $password, $db);

if ($connection->connect_error) {
    die("Connection failed: " . $connection->connect_error);
}
?>
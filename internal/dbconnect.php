<?php
$user='root';
$pass='root';
$host='localhost';
$db = 'DB';
$db_port = 3307;


$mysqli = new mysqli($host, $user, $pass, $db, $db_port);
if ($mysqli->connect_errno) {
    echo "Failed to connect to MySQL: (" . 
    $mysqli->connect_errno . ") " . $mysqli->connect_error;
}?>

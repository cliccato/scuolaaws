<?php
$dbhost = 'database';
$dbname = 'sito';
$dbuser = 'root';
$dbpass = '1234abcd5678';

$conn = new mysqli($dbhost, $dbuser, $dbpass, $dbname);

if ($conn->connect_error) {
    die('Error connecting to server: ' . $conn->connect_error);
}
?>

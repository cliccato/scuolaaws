<?php
require 'connect.php';
require 'functions.php';

if ($_SERVER["REQUEST_METHOD"] !== "POST") {
    die("metodo non suportato");
}

$fields = array('username', 'password');
$fieldsSizes = array(50, 100);
$error_message = '';

foreach(array_combine($fields, $fieldsSizes) as $field => $fieldSize) {
    if(!isset($_POST[$field])) {
        $error_message = $field . ' has to exist';
        break;
    }

    if(empty($_POST[$field])) {
        $error_message = $field . ' cant be null';
        break;
    }

    if(strlen($_POST[$field]) > $fieldSize) {
        $error_message = $field . ' cant be long more than ' . $fieldSize . ' chars';
        break;
    }
}

if(!empty($error_message)) {
    die($error_message);

}

$username = sanitize_input($_POST['username']);
$password = sha1(sanitize_input($_POST['password']));

$query = "SELECT * FROM users WHERE username='$username'";
$result = $conn->query($query);
if ($result->num_rows > 0) {
    die("utente esiste gia");
}

$query = "INSERT INTO users (username, password) VALUES ('$username', '$password')";
if ($conn->query($query) === TRUE) {
    setcookie("username", $username, time() + (86400 * 30), "/");
    header("Location: home.php");
} else {
    die("errore nella registrazione");
}
?>

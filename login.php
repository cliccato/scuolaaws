<?php
require 'connect.php';
require 'functions.php';

if ($_SERVER["REQUEST_METHOD"] !== "POST") {
    die("metodo non supportato");

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

$query = "SELECT * FROM users WHERE username='$username' AND password='$password'";
$result = $conn->query($query);

if ($result->num_rows == 1) {
    $user = $result->fetch_assoc();
    setcookie("user_id", $user['id'], time() + (86400 * 30), "/");
    setcookie("username", $user["username"], time() + (86400 * 30), "/");
    header("Location: home.php");
} else {
    die("email o password non corretti");
}
?>

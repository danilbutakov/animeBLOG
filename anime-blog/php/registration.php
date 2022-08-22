<?php

$query = $mysqli->query("SELECT * FROM users");

$name = $_REQUEST['name'];
$email = $_REQUEST['email'];
$pass = $_REQUEST['pass'];
$pass = md5($pass);

if (isset($_POST[$query])) {
    $query = "INSERT INTO `users` VALUES (null, '$name', '$email', '$pass')";
}

$mysqli->close();

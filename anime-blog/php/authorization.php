<?php

$email = $_REQUEST['email'];
$pass = md5($_REQUEST['pass']);

$result = $mysqli->query("SELECT * FROM `users` WHERE `email` = '$email' AND `pass` = '$pass'");

$user = $result->fetch_assoc();

if (count($user) == 0) {
    echo "Такой пользователь не найден";
    exit();
}

setcookie('user', $user['email'], time() + 3600, "/");

$mysqli->close();

//header('Location: index.php');

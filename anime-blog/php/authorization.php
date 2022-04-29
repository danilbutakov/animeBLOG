<?php


$email = $_REQUEST['email'];
$pass = md5($_REQUEST['pass']);

$result = $mysqli->query("SELECT * FROM `users` WHERE `email` = '$email' AND `pass` = '$pass'");

$user = $result->fetch_assoc();

if (count($user) == 0) {
    echo "Такой пользователь не найден";
    exit();
}

print_r($user);
exit();

$mysqli->close();

header('Location: /');

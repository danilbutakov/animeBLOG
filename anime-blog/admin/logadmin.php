<?php

$login = $_POST['login'];
$password = $_POST['password'];

$result = $mysqli->query("SELECT * FROM `admin` WHERE `login` = '$login' AND `password` = '$password'");

$user = $result->fetch_assoc();

if (count($user) == 0) {
    echo "Такой пользователь не найден";
    exit();
} else {
    header('Location: /admin.php');
}

setcookie('user', $user['email'], time() + 3600, "admin/admin.php");

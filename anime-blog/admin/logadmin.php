<?php

require_once __DIR__ . '/php/mysqlauthentication.php';

$login = $_POST['login'];
$password = $_POST['password'];


$query = $mysqli->query("SELECT * FROM `admin` WHERE `login` = '$login' AND `password` = '$password'");

$user = $result->fetch_assoc();

if (count($user) == 0) {
    echo "Такой пользователь не найден";
    exit();
}

setcookie('admin', $user['login'], time() + 3600, "admin/exit.php");
header('Location:admin.php');

$mysqli->close();

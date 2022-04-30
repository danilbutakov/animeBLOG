<?php
session_start();
$login = $_POST['login'];
$password = $_POST['password'];

$result = $mysqli->query("SELECT * FROM `admin` WHERE `login` = '$login' AND `password` = '$password'");

$user = $result->fetch_assoc();

if ($user['id'] > 0) {
    $_SESSION['login'] = $user['login'];
    header("Location: https://www.google.ru/");
    die();
} else {
    //header("Location: /admin.php");
}

setcookie('user', $user['email'], time() + 3600, "admin/admin.php");

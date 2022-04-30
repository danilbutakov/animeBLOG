<?php
session_start();
$login = $_POST['login'];
$password = $_POST['password'];

$result = $mysqli->query("SELECT * FROM `admin` WHERE `login` = '$login' AND `password` = '$password'");

$user = $result->fetch_assoc();

if ($user['id'] > 0) {
    header("Location: http://45.144.179.146/admin/adminauth.php");
    die();
} else {
    header("Location: http://45.144.179.146/admin.php");
}

setcookie('admin', $user['login'], time() + 3600, "/");

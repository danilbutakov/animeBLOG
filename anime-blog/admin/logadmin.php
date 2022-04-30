<?php

$login = $_POST['login'];
$password = $_POST['password'];

$result = $mysqli->query("SELECT * FROM `admin` WHERE `login` = '$login' AND `password` = '$password'");

$user = $result->fetch_assoc();

if ($user['id'] > 0) {
    header("Location: /admin/admin.php");
    exit();
} else {
    header("Location: /admin.php");
    exit();
}

setcookie('user', $user['email'], time() + 3600, "admin/admin.php");

<?php
session_start();
require_once __DIR__ . '/php/mysqlauthentication.php';

$login = $_POST['login'];
$password = $_POST['password'];


$query = $mysqli->query("SELECT * FROM `admin` WHERE `login` = '$login' AND `password` = '$password'");

$query->execute(array('login' => `login`, 'password' => `passwprd`));

$array = $query->fetch(PDO::FETCH_ASSOC);

if ($array['id'] > 0) {
    $_SESSION['login'] = $array['login'];
    header('Location:/admin.php');
} else {
    header('Location:../admin.php');
}

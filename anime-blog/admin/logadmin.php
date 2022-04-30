<?php
session_start();
require_once __DIR__ . '/php/mysqlauthentication.php';

$login = $_POST['login'];
$password = $_POST['password'];


$query = $mysqli->query("SELECT * FROM `admin` WHERE `login` = '$login' AND `password` = '$password'");

$query->execute(array('login' => $login, 'password' => $password));
$array = $query->fetch(PDO::FETCH_ASSOC);
print_r($array);

// if ($array) {
//     echo "Такой пользователь не найден";
//     exit();
// } else {
//     header('Location: /admin.php');
// }

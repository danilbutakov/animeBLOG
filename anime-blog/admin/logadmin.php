<?php

$login = $_POST['login'];
$password = $_POST['password'];


$result = $mysqli->query("SELECT * FROM `admin` WHERE `login` = '$login' AND `password` = '$password'");

$user = $result->fetch_assoc();

print_r($user);

// if ($array) {
//     echo "Такой пользователь не найден";
//     exit();
// } else {
//     header('Location: /admin.php');
// }

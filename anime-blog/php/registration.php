<?php

$name = filter_var(trim($_POST['name']), FILTER_SANITIZE_SPECIAL_CHARS);
$email = filter_var(trim($_POST['email']), FILTER_SANITIZE_SPECIAL_CHARS);
$pass = filter_var(trim($_POST['pass']), FILTER_SANITIZE_SPECIAL_CHARS);
$pass = md5($pass);

if (mb_strlen($name) < 3 || mb_strlen($name) > 50) {
    //echo "Недопустимая длина имени";
    exit();
} else if (mb_strlen($email) < 5 || mb_strlen($email) > 50) {
    //echo "Недопустимая длина почты";
    exit();
} else if (mb_strlen($pass) < 8 || mb_strlen($pass) > 100) {
    //echo "Недопустимая длина пароля";
    exit();
}

$mysqli->query("INSERT INTO `users` (`name`, `email`, `pass`) VALUES ('$name', '$email', '$pass')");

$mysqli->close();

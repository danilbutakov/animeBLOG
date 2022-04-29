<?php

session_start();

$email = $_REQUEST['email'];
$pass = md5($_REQUEST['pass']);

$query = $mysqli->query("SELECT * FROM `users` WHERE `email` = '$email' AND `pass` = '$pass'");

echo mysqli_num_rows($query);

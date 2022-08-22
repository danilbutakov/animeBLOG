<?php
$mysqli = new mysqli('localhost', 'phpadmin', 'myapssword', 'anime-blog');
$conn = mysqli_connect("localhost", "phpadmin", "myapssword", "anime-blog");
if (mysqli_connect_errno()) {
    printf('Соединение не установлено');
    exit();
}

$mysqli->set_charset('utf8');

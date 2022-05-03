<?php
$mysqli = new mysqli('localhost', 'dan', '1234', 'anime-blog');
$conn = mysqli_connect("localhost", "dan" , "1234", "anime-blog");
if (mysqli_connect_errno()) {
    printf('Соединение не установлено');
    exit();
}
echo "<div style='position:absolute;top:20%;left:20%;z-index:999999999999;'>connect succesfull</div>";
$mysqli->set_charset('utf8');

<?php
    $mysqli = new mysqli('localhost', 'dan', '1234', 'anime-blog');

    if(mysqli_connect_errno()) {
        printf('Соединение не установлено', mysqli_error());
        exit();
    }

    $mysqli->set_charset('utf8');
?>
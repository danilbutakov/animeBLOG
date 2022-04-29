<?php
    $connect = new mysqli('localhost', 'dan', '1234', 'anime-blog');

    if(!$connect) {
        die('Error conncet to DataBase');
    }
?>
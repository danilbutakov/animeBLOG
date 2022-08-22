<?php
//$mysqli = new mysqli('localhost', 'root', '', 'anime-blog');
$conn = mysqli_connect("localhost", "root", "", "anime-blog");

if (!$conn) {
    die('Error connect to DataBase');
}

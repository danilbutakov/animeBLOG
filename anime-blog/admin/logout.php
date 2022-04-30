<?php
session_start();
unset($_SESSION['login']);
header('Location: http://45.144.179.146/admin.php');

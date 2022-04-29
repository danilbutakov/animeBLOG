<?php

    session_start();

    $check_user = $mysqli->query("SELECT * FROM users WHERE 'email' = '$email' AND 'pass' = '$pass'");

    echo mysqli_num_rows($check_user);

    $email = $_REQUEST['email'];
    $pass = $_REQUEST['pass'];
    $pass = md5($pass);


?>
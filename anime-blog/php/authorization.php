<?php

    session_start();

    $email = $_REQUEST['email'];
    $pass = $_REQUEST['pass'];
    $pass = md5($pass);

    $query = $mysqli->query("SELECT * FROM users WHERE 'email' = '$email' AND 'pass' = '$pass'");

    print_r (mysqli_num_rows($query));

?>
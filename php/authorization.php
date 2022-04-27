<?php
    echo "test";
    $email = $_REQUEST['email'];
    $pass = $_REQUEST['pass'];
    $pass = md5($pass);

    $result = $mysqli->query("SELECT * FROM users WHERE `email` = '$email' AND `pass` = '$pass'")

    $user = $result->fetch_assoc();
    if(count($user) == 0) {
        echo "Пользователь не найден";
        exit();
    }

    print_r($user);
    exit();
    
    if($query != '') {
        $query = "INSERT INTO users VALUES (null, '$name', '$email', '$pass')";
    }

    $mysqli->close();
?>
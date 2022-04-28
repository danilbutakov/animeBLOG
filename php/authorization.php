<?php

    $mysqli = new mysqli('localhost', 'dan', '1234', 'anime-blog');

    if(mysqli_connect_errno()) {
        printf('Соединение не установлено', mysqli_error());
        exit();
    }


    $mysqli->set_charset('utf8');

    $email = $_REQUEST['email'];
    $pass = $_REQUEST['pass'];
    $pass = md5($pass);

    $query = $mysqli->query("SELECT * FROM users WHERE 'email' = '$email' AND 'pass' = '$pass'")

    
    if($query != '') {
        $query = "INSERT INTO users VALUES (null, `$name`, `$email`, `$pass`)";
    }

    if(mysqli_query($mysqli, $query)){
        //echo "Записи успешно добавлены.";
    } else{
        //"ERROR: Не удалось выполнить $query. " . mysqli_error($mysqli);
    }

    $mysqli->close();

?>
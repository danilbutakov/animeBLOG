<?php

    $email = $_REQUEST['email'];
    $pass = $_REQUEST['pass'];
    $pass = md5($pass);

    $result = $mysqli->query("SELECT * FROM users WHERE `email` = '$email' AND `pass` = '$pass'")

    $user = $result->fetch_assoc();
    if(count($user) == 0) {
        echo "Пользователь не найден";
        exit();
    }

    setcookie('user', $user['email'], time() + 3600, "/");
    
    if($query != '') {
        $query = "INSERT INTO users VALUES (null, '$name', '$email', '$pass')";
    }

    if(mysqli_query($mysqli, $query)){
        echo "Записи успешно добавлены.";
    } else{
        "ERROR: Не удалось выполнить $query. " . mysqli_error($mysqli);
    }

    $mysqli->close();
    header('Location: /');
?>
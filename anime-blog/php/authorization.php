<?php

    session_start();

    $query = $mysqli->query("SELECT * FROM `users` WHERE `email` = '$email' AND `pass` = '$pass'");

    $email = $_REQUEST['email'];
    $pass = $_REQUEST['pass'];
    $pass = md5($pass);

    
    if($query != '') {
        $user = mysqli_fetch_assoc($query);
        
        $_SESSION['user'] = [
            "id" => $user['id'],
            "name" => $user['name'],
            "email" => $user['email']
        ];
    } else {
        $_SESSION['message'] = 'Не верный логин или пароль';
        //header('Location: login.php');
    }

    if(mysqli_query($mysqli, $query)){
        //echo "Записи успешно добавлены.";
    } else{
        echo "ERROR: Не удалось выполнить $query. " . mysqli_error($mysqli);
    }

?>
<?php

    session_start();

    $check_user = $mysqli->query("SELECT * FROM `users` WHERE `email` = '$email' AND `pass` = '$pass'");

    $email = $_REQUEST['email'];
    $pass = $_REQUEST['pass'];
    $pass = md5($pass);

    
    if($check_user != '') {
        $user = mysqli_fetch_assoc($check_user);
        
        $_SESSION['user'] = [
            "id" => $user['id'],
            "name" => $user['name'],
            "email" => $user['email']
        ];
    } else {
        $_SESSION['message'] = 'Не верный логин или пароль';
        //header('Location: login.php');
    }

    if(mysqli_query($mysqli, $check_user)){
        //echo "Записи успешно добавлены.";
    } else{
        echo "ERROR: Не удалось выполнить $check_user. " . mysqli_error($mysqli);
    }

?>
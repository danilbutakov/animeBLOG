<?php

    session_start();

    $query = $mysqli->query("SELECT * FROM users");

    $name = $_REQUEST['name'];
    $email = $_REQUEST['email'];
    $pass = $_REQUEST['pass'];
    $pass = md5($pass);

    if($query != '') {
        $query = "INSERT INTO users VALUES (null, '$name', '$email', '$pass')";
    } 

    if ($pass != '') {
        $_SESSION['message'] = 'Регистрация прошла успешно!';
        //header('Location: /index.php');
    }

    if(mysqli_query($mysqli, $query)){
        
    } else{
        //echo "ERROR: Не удалось выполнить $query. " . mysqli_error($mysqli);
    }

    $mysqli->close();

?>
<?php

    $email = $_REQUEST['email'];
    $pass = $_REQUEST['pass'];
    $pass = md5($pass);

    $query = $mysqli->query("SELECT * FROM users WHERE 'email' = '$email' AND 'pass' = '$pass'");

    
    if($query != '') {
        $query = "INSERT INTO users VALUES (null, '$email', '$pass')";
    }

    if(mysqli_query($mysqli, $query)){
        //echo "Записи успешно добавлены.";
    } else{
        echo "ERROR: Не удалось выполнить $query. " . mysqli_error($mysqli);
    }

?>
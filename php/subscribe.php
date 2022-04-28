<?php
    
    $mysqli = new mysqli('localhost', 'dan', '1234', 'anime-blog');

    if(mysqli_connect_errno()) {
        printf('Соединение не установлено', mysqli_error());
        exit();
    }


    $mysqli->set_charset('utf8');

    $query = $mysqli->query('SELECT * FROM subscribe');

    $emailSub = $_REQUEST['email__sub'];
    if($query != '') {
        $query = "INSERT INTO subscribe VALUES (null, '$emailSub')";
    }


    if(mysqli_query($mysqli, $query)){
        //echo "Записи успешно добавлены.";
    } else{
        "ERROR: Не удалось выполнить $query. " . mysqli_error($mysqli);
    }

    $mysqli(close);

?>
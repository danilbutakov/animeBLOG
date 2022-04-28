<?php
    
    include_once '/php/mysqlauthentication.php';

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
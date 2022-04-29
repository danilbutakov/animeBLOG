<?php

$query = $mysqli->query("SELECT * FROM users");

$name = $_REQUEST['name'];
$email = $_REQUEST['email'];
$pass = $_REQUEST['pass'];
$pass = md5($pass);

if ($query != '') {
    $query = "INSERT INTO users VALUES (null, '$name', '$email', '$pass')";
}

if (mysqli_query($mysqli, $query)) {
} else {
    //echo "ERROR: Не удалось выполнить $query. " . mysqli_error($mysqli);
}


$mysqli->close();

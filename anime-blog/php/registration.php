<?php
ob_start();
$query = $mysqli->query("SELECT * FROM users");

$name = $_POST['name'];
$email = $_POST['email'];
$pass = $_POST['pass'];
$pass = md5($pass);

if ($query != '') {
    $query = "INSERT INTO users VALUES (null, '$name', '$email', '$pass')";
}

if (mysqli_query($mysqli, $query)) {
    header('Location: index.php');
    exit();
} else {
    //echo "ERROR: Не удалось выполнить $query. " . mysqli_error($mysqli);
}


$mysqli->close();

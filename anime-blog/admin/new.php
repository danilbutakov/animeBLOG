<?php
$mysqli = new mysqli('localhost', 'dan', '1234', 'anime-blog');

if (mysqli_connect_errno()) {
    printf('Соединение не установлено');
    exit();
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Adminka</title>
    <link rel="stylesheet" href="/css/admin.css">

</head>

<body>
    <div>
        <h1>Редактирование контактной информации</h1>
        <?php if (!empty($_SESSION['login'])) : ?>

            <?php echo "Добрый день, " . $_SESSION['login']; ?><br>
            <a href="logout.php">Выйти</a>
            <br>
            <?php
            $query = $mysqli->query('SELECT * FROM subscribe');
            $info_genre = $_REQUEST['info_genre'];
            $info_date = $_REQUEST['info_date'];
            $title = $_REQUEST['title'];
            $descr = $_REQUEST['descr'];
            $read_info = $_REQUEST['read_info'];
            ?>
            <form action="new.php" method="post">
                <input type="text" name="info_genre" value="<?php echo $res->info_genre ?>">
                <input type="text" name="info_date" value="<?php echo $res->info_date ?>">
                <input type="text" name="title" value="<?php echo $res->title ?>">
                <input type="text" name="descr" value="<?php echo $res->descr ?>">
                <input type="text" name="read_info" value="<?php echo $res->read_info ?>">
                <input type="submit" value="Сохранить">
            </form>
            <?php
            $row = "UPDATE new SET info_genre=:info_genre, info_date=:info_date, title=:title, descr=:descr, read_info=:read_info";

            $query = $pdo->prepare($row);
            $query->execute(['info_genre' => $info_genre, 'info_date' => $info_date, 'title' => $title, 'descr' => $descr, 'read_info' => $read_info]);
            ?>
        <?php else :
            echo '<h2>Вы что хакер?</h2>';
            echo '<a href="/../admin.php">На главную</a>';
        ?>
        <?php endif ?>
    </div>
</body>

</html>
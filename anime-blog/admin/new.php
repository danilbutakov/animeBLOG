<?php
session_start();

print_r($mysqli);

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
            $sql = $pdo->prepare("SELECT * FROM new");
            $sql->execute();
            $res = $sql->fetch(PDO::FETCH_OBJ);
            ?>
            <form action="" method="post">
                <input type="text" name="info_genre" value="" <?php echo $res->info_genre ?>>
                <input type="text" name="info_date" value="" <?php echo $res->info_date ?>>
                <input type="text" name="title" value="" <?php echo $res->title ?>>
                <input type="text" name="descr" value="" <?php echo $res->descr ?>>
                <input type="text" name="read_info" value="" <?php echo $res->read_info ?>>
                <input type="submit" value="Сохранить">
            </form>

        <?php else :
            echo '<h2>Вы что хакер?</h2>';
            echo '<a href="/../admin.php">На главную</a>';
        ?>
        <?php endif ?>
    </div>
</body>

</html>
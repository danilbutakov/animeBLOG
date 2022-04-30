<?php
require_once __DIR__ . '/../php/mysqlauthentication.php';

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

            <form action="" method="post">
                <input type="text" name="info_genre" value="">
                <input type="text" name="info_date" value="">
                <input type="text" name="title" value="">
                <input type="text" name="descr" value="">
                <input type="text" name="read_info" value="">
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
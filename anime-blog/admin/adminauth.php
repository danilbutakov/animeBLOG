<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Adminka</title>
    <link rel="stylesheet" href="/css/admin.css">
    <link rel="stylesheet" href="/css/style.css">
</head>

<body>
    <div style="padding-top: 100px;">

        <?php if (!empty($_SESSION['login'])) : ?>

            <?php echo "Добрый день, " . $_SESSION['login']; ?><br>
            <a href="logout.php" style="padding-top: 10px;">Выйти</a><br>
            <a href="new.php" style="padding-top: 10px;">New</a>
            <a href="" style="padding-top: 10px;">Trending</a>
            <a href="" style="padding-top: 10px;">Short</a>
            <a href="" style="padding-top: 10px;">Manga</a>
        <?php else :
            echo '<h2>Вы что хакер?</h2>';
            echo '<a href="/../admin.php">На главную</a>';
        ?>
        <?php endif ?>
    </div>
</body>

</html>
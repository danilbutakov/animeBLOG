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
</head>

<body>
    <div style="text-align: center;">
        
    <?php if(!empty($_SESSION['login'])) :?>

        <?php echo "Добрый день " . $_SESSION['login']; ?>
        <a href="logout.php">Выйти</a>
        <?php else:
        echo '<h2>Вы что хакер?</h2>';
        echo '<a href="/">На главную</a>';
        ?>
    </div>
</body>

</html>
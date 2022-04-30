<?php
session_start();
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
        <h1>Редактирование информации о манге</h1>
        <?php if (!empty($_SESSION['login'])) : ?>

            <?php echo "Добрый день, " . $_SESSION['login']; ?><br>
            <a href="adminauth.php">Выйти</a>
            <br>
            <?php $query = $pdo->prepare("SELECT * FROM manga");
            $query->execute();
            $res = $query->fetch(PDO::FETCH_OBJ); ?>
            <form action="manga.php" method="post" enctype="multipart/form-data">
                <input type="text" name="head" value="" <?php echo $res->head ?>>
                <input type="text" name="title" value="" <?php echo $res->title ?>>
                <input type="text" name="info" value="" <?php echo $res->info ?>>
                <p>
                    <input type="file" name="filename" value="">
                </p>
                <input type="submit" value="Сохранить" name="Сохранить">
            </form>
            <br>
            <img src="/../img/ <?php echo $res->filename ?> " width=" 200px">
            <?php
            $head = $_POST['head'];
            $title = $_POST['title'];
            $info = $_POST['info'];

            $row = "UPDATE new SET info_genre=:info_genre, info_date=:info_date, title=:title, descr=:descr, read_info=:read_info";

            $query = $pdo->prepare($row);
            $query->execute(['head' => $head, 'info_date' => $info_date, 'title' => $title, 'info' => [$info], 'filename' => $_FILES['filename']['name']]);
            ?>
            <?php
            if (isset($_POST['save'])) {
                $list = ['.php', '.zip', '.js', '.html', ''];

                foreach ($list as $item) {
                    if (preg_match(`/$item/`, $_FILES['filename'])) exit('Расширение файла не подходит');
                }
                $type = getimagesize($_FILES['filename']['tmp_name']);
                if ($type && ($type['mime'] != '/../img/' || $type['mime'] != '/../img/' || $type['mime'] != '/../img/')) {
                    if ($_FILES['filename']['name'] < 1024 * 1000) {
                        $upload = '/../img/' . $_FILES['filename']['name'];

                        if (move_uploaded_file($_FILES['filesname']['tmp_name'], $upload)) echo "Файл загружен";
                        else echo "Ошибка при загрузке";
                    } else exit("Размер файла превышен");
                }
            } else exit("Тип файла не подходит");
            ?>
        <?php else :
            echo '<h2>Вы что хакер?</h2>';
            echo '<a href="/../admin.php">На главную</a>';
        ?>
        <?php endif ?>
    </div>
</body>

</html>
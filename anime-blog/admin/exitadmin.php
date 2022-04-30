<?php
setcookie('admin', $user['login'], time() - 3600, "/");
header('Location: http://45.144.179.146/admin.php');

<?php
setcookie('admin', $user['login'], time() - 3600, "/");
echo "Вы в админке";

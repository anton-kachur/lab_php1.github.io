<?php

    session_start();
    $_SESSION['s'] = "Пример на new_php.php";

    //unset($_SESSION['s'])
?>

<html>
    <body>
        Сессия успешно загружена: <a href="action.php">посмотреть</a>
    </body>
</html>
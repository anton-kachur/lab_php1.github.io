<?php

if (!empty($_POST["user_name"])&&!empty($_POST["e_mail"])&&!empty($_POST["phone"])&&!empty($_POST["service"])) {
    $val1 = $_POST["user_name"];
    $val2 = $_POST["surname"];


    setcookie('my_name', $val1, time() + (3600 * 3));
    setcookie('surname', $val2, time() + (3600 * 3));

    if($_COOKIE['my_name'] != '' )
        echo 'Привет, ' . $_COOKIE['my_name'] ." ".$_COOKIE['surname'] .'!';
    else
        echo 'Привет, user_name!';

    setcookie ('my_name', '', time()-1 );
    setcookie ('surname', '', time()-1 );

    echo "<br>Получены данные:";
    echo "<br>email - ";
    echo $_POST["e_mail"];
    echo "<br>phone - ";
    echo $_POST["phone"];
    echo "<br>service - ";
    echo $_POST["service"];
} else {
    echo "Переменные не дошли. Проверьте все еще раз.";
}

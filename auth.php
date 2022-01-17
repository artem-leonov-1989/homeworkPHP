<?php
session_start();
if (isset($_SESSION['id_user'])) {
    if ($_SESSION['login_user'] === $_POST['login'] && $_SESSION['password'] === md5($_POST['pass'])) {
        header( 'Location: home.php');
    } else {
        echo 'ошибка!';
    }
} else {
    $_SESSION['errors'] = 'Нет данных о пользователе. Зарегистрируйтесь!';
    header( 'Location: reg_form.php');
}

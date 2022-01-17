<?php
session_start();
include_once ('function.php');
if (!empty($_POST)) {
    if (strlen($_POST['name_user']) >= 3 && strlen($_POST['login_user']) >= 5 && strlen($_POST['pass_user']) >= 5 && $_POST['pass_user'] === $_POST['pass_user_rep']) {
        $_SESSION['id_user'] = random_int(1, 10);
        $_SESSION['name_user'] = $_POST['name_user'];
        $_SESSION['login_user'] = $_POST['login_user'];
        $_SESSION['password'] = md5($_POST['pass_user']);
        clear_cookies();
        header( 'Location: home.php');
    } else {
        setcookie('name_user', $_POST['name_user'], time() + 3600);
        setcookie('login_user', $_POST['login_user'], time() + 3600);
        $_SESSION['errors'] = 'Список ошибок:';
    }
    if (strlen($_POST['name_user']) < 3) {
        $_SESSION['errors'] = '<br>Имя пользователя должно быть не менее 3х символов.';
    }
    if (strlen($_POST['login_user']) < 5) {
        $_SESSION['errors'] = '<br>Логин должен быть не менее 5ти символов.';
    }
    if (strlen($_POST['pass_user']) < 5) {
        $_SESSION['errors'] = '<br>Пароль должен быть не менее 5ти символов.';
    }
    if (strlen($_POST['pass_user']) < 5) {
        $_SESSION['errors'] = '<br>Пароль должен быть не менее 5ти символов.';
    }
    if ($_POST['pass_user'] !== $_POST['pass_user_rep']) {
        $_SESSION['errors'] = 'Пароли не совпадают.<br>';
    }
} else {
    header( 'Location: index.php');
}


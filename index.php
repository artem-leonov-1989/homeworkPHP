<!doctype html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Главная страница</title>
</head>
<style>
    input {
        margin-bottom: 5px;
        width: 250px;
    }
    p {
        color: red;
    }
</style>
<body>
<?php
session_start();
use App\Registration;
use App\Authorization;
include ('App/ValidatorInterface.php');
include ('App/ValidatorAbstract.php');
if (empty($_GET)) {
    include ('forms/auth.html');
    echo '<a href="forms/reg.html">Пройти регистрацию</a>';
} else {
    if (isset($_GET['reg'])) {
        require ('App/Registration.php');
        $reg_user = new Registration();
        $reg_user->validator();
    }
    if (isset($_GET['auth'])) {
        require ('App/Authorization.php');
        $user = new Authorization();
        $user->validator();
    }
}
if (isset($_SESSION['errors']) && isset($_GET['reg'])) {
    echo '<p>Были обнаружены следующие ошибки при регистрации:</p>';
    foreach ($_SESSION['errors'] as $error) {
        echo '<p>'.$error.'</p>';
    }
    echo '<a href="index.php">Вернуться на главную</a>';
}
if (isset($_SESSION['errors']) && isset($_GET['auth'])) {
    include ('forms/auth.html');
    echo '<a href="forms/reg.html">Пройти регистрацию</a>';
    echo '<p>Были обнаружены следующие ошибки при авторизации:</p>';
    foreach ($_SESSION['errors'] as $error) {
        echo '<p>'.$error.'</p>';
    }
}
/*session_destroy();*/
?>
</body>
</html>


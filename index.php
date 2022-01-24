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
</style>
<body>
<?php
session_start();
use App\Registration;
require ('App/Registration.php');
if (empty($_GET)) {
    echo '<a href="forms/reg.html">Пройти регистрацию</a>';
} else {
    if (isset($_GET['reg'])) {
        $reg_user = new Registration();
        $reg_user ->validator();
    }
}
if (isset($_SESSION['errors'])) {
    var_dump($_SESSION['errors']);
    /*$_SESSION['errors'] = [];*/
}
var_dump($_GET);
var_dump($_POST);
var_dump($_FILES);
var_dump($_SESSION['errors']);
/*session_destroy();*/
?>
</body>
</html>


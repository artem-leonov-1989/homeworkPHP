<!doctype html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Страничка входа</title>
</head>
<body>
<?php
session_start();
if (!isset($_SESSION['id_user']) && !isset($_GET['reg'])) {
    include_once ('auth_form.html');
}

if (isset($_SESSION['id_user'])) {
    header('Location: home.php');
}

if (isset($_GET['reg'])) {
    include_once('reg_form.php');
}
/*var_dump($_SESSION);*/
?>
</body>
</html>
<!doctype html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<h1>Все прошло успешно</h1>
<?php
session_start();
if (!isset($_SESSION['login']))
{
    header('Location: ../index.php');
}
?>
<p>Логин - <?php echo $_SESSION['login']?></p>
<p>Почта - <?php echo $_SESSION['email']?></p>
<a href="../index.php">На главную</a>
</body>
</html>
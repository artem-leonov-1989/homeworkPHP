<?php
    include_once ('function.php');
?>
<form method="post" action="reg.php">
<input type="text" name="name_user" placeholder="Введите настоящее имя" <?php echo get_cookies('name_user'); ?>><br>
<input type="text" name="login_user" placeholder="Введите желаемый логин" <?php echo get_cookies('login_user'); ?>><br>
<input type="password" name="pass_user" placeholder="Введите желаемый пароль"><br>
<input type="password" name="pass_user_rep" placeholder="Повторите пароль"><br>
<input type="submit" value="Отправить">
<?php
echo get_errors();
?>
</form>
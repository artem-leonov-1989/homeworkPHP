<?php

namespace App;

abstract class ValidatorAbstract
{
    protected function validLogin()
    {
        if ((strlen($_POST['login'])) < 5)
        {
            $this ->failure('Логин должен быть больше 5ти символов!');
        }
    }

    protected function validPassword()
    {
        if (preg_match('/^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)[a-zA-Z\d]{8,}$/', $_POST['pass']) == 0)
        {
            $this ->failure('Пароль должен содержать хотя бы одну заглавную букву и цифру и быть не короче 8ми символов!');
        }
    }
    abstract protected function successful();

    protected function failure(string $error)
    {
        $_SESSION['errors'][] = $error;
    }
}
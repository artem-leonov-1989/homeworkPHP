<?php

namespace App;

class Authorization extends ValidatorAbstract implements ValidatorInterface
{

    protected function successful()
    {
        header('Location: forms/home.php');
    }

    public function validator()
    {
        $_SESSION['errors'] = [];
        $this->validLogin();
        $this->validPassword();
        $this->validRemember();
        $this->authorisation();
        if (count($_SESSION['errors']) === 0)
        {
            $this->successful();
        }
    }
    protected function authorisation()
    {
        if ($_SESSION['login'] !== $_POST['login'] && $_SESSION['password'] !== md5($_POST['pass']))
        {
            $this->failure('Неверный логин или пароль!');
        }
    }

    protected function validRemember()
    {
        if (isset($_POST['remember']))
        {
            if ($_POST['remember'] !== 'true')
            {
                $this->failure('Чекбокс не передает bool-значение!!');
            }
        }
    }
}
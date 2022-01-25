<?php

namespace App;
include ('ValidatorInterface.php');
include ('ValidatorAbstract.php');
class Registration extends ValidatorAbstract implements ValidatorInterface
{
    protected array $allowed_file_format = ['image/gif', 'image/png', 'image/jpeg', 'image/bmp'];
    public function validator()
    {
        $_SESSION['errors'] = [];
        if (isset($_POST['login']))
        {
            if ((strlen($_POST['login'])) < 5)
            {
                $this ->failure('Логин должен быть больше 5ти символов!');
            }
            if (preg_match('/^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)[a-zA-Z\d]{8,}$/', $_POST['pass']) == 0)
            {
                $this ->failure('Пароль должен содержать хотя бы одну заглавную букву и цифру и быть не короче 8ми символов!');
            }
            if ($_POST['pass'] != $_POST['pass_rep'])
            {
                $this ->failure('Пароли не совпадают!');
            }
            if (preg_match('/\w+@\w+\.\w+/', $_POST['email']) == 0)
            {
                $this ->failure('Не верный формат почтового ящика!');
            }
            if (!array_search($_FILES['avatar']['type'], $this->allowed_file_format) || $_FILES['avatar']['size'] > 3145728)
            {
                $this->failure('Файл должен иметь один из форматов (gif, png, jpeg, bmp) и быть не более 5Мб!');
            }
            if (count($_SESSION['errors']) === 0)
            {
                $this->successful();
            }
        } else {
            $this->failure('POST не содержит нужных данных!!!');
            header('Location: index.php');
        }
    }

    protected function successful()
    {
        $_SESSION['login'] = $_POST['login'];
        $_SESSION['password'] = md5($_POST['password']);
        $_SESSION['email'] = $_POST['email'];
        header('Location: forms/home.php');
    }
}
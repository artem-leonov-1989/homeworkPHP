<?php

namespace App;
/*include ('ValidatorInterface.php');
include ('ValidatorAbstract.php');*/
class Registration extends ValidatorAbstract implements ValidatorInterface
{
    protected array $allowed_file_format = ['image/gif', 'image/png', 'image/jpeg', 'image/bmp'];
    public function validator()
    {
        $_SESSION['errors'] = [];
        $this->validLogin();
        $this->validPassword();
        $this->validPasswordMatch();
        $this->validEmail();
        $this->validAvatar();
        if (count($_SESSION['errors']) === 0)
        {
            $this->successful();
        }
    }

    protected function validPasswordMatch()
    {
        if ($_POST['pass'] != $_POST['pass_rep'])
        {
            $this->failure('Пароли не совпадают!');
        }
    }

    protected function validEmail()
    {
        if (preg_match('/\w+@\w+\.\w+/', $_POST['email']) == 0)
        {
            $this->failure('Не верный формат почтового ящика!');
        }
    }

    protected function validAvatar()
    {
        if (!array_search($_FILES['avatar']['type'], $this->allowed_file_format) || $_FILES['avatar']['size'] > 3145728)
        {
            $this->failure('Файл должен иметь один из форматов (gif, png, jpeg, bmp) и быть не более 5Мб!');
        }
    }

    protected function successful()
    {
        $_SESSION['login'] = $_POST['login'];
        $_SESSION['password'] = md5($_POST['pass']);
        $_SESSION['email'] = $_POST['email'];
        header('Location: forms/home.php');
    }
}
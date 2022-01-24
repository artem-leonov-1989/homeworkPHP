<?php

namespace App;
include ('ValidatorInterface.php');
class Registration implements ValidatorInterface
{
    public function validator()
    {
        $_SESSION['errors'] = [];
        if (isset($_POST['login']))
        {
            if ((strlen($_POST['login'])) < 5)
            {
                $_SESSION['errors'][] = 'Логин должен быть больше 5ти символов!';
            }
            /*if ()
            {

            }*/
        } else {
            $this->failure('POST не содержит нужных данных!!!');
            /*sleep(5);*/
            header('Location: index.php');
        }
    }

    public function successful()
    {

    }

    public function failure(string $error)
    {
        $_SESSION['errors'][] = $error;
    }
}
<?php

namespace App;

abstract class ValidatorAbstract
{
    abstract protected function successful();

    protected function failure(string $error)
    {
        $_SESSION['errors'][] = $error;
    }
}
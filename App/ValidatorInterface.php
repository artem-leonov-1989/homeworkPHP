<?php

namespace App;

interface ValidatorInterface
{
    public function validator();
    public function successful();
    public function failure(string $error);
}
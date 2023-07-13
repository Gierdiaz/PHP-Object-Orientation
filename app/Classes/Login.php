<?php

namespace app\Classes;

class Login
{

    public function auth(string $email, int $password): string | int {
        return "This is my e-mail ". $email . " and this is my password". $password;
    }
}
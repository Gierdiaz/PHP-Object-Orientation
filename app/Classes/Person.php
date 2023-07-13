<?php

namespace app\Classes;

class Person {

/*     public function __construct(public string $name, public string $email)
    {
        //no php 8 não é mais necessário pôr aqui.
    }
    
    public function information() {
        return "My name is {$this->name} and my e-mail is {$this->email}";
    } */

    public function info() {
        return 'Método info da classe pai';
    }
}
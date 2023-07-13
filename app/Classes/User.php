<?php

namespace app\Classes;

class User extends Person {
    public function info() {
        //fazendo referência ao método infor da classe pai dentro da classe filha com parent.
        return parent::info();
    }
}
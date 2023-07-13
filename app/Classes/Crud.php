<?php

namespace app\Classes;

class Crud
{
    public $field = 'field test';
    public $table = "users";
    public function read() {
        var_dump($this->field);
        
    }

    public function delete() {
       //return $this;

       var_dump($this->read());
    }
}
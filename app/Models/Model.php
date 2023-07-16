<?php

namespace app\Models;

//classes abstratas não podem ser instanciadas
//como uma classe abstrada não pode ser instanciada ela será extendida para as classes filhas
abstract class Model   
{
    public function all() {
        return 'all';
    }

    public function update() {
        return 'update';
    }

    public function delete() {
        return 'delete';
    }
}
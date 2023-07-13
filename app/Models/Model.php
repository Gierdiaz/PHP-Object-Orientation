<?php

namespace app\Models;

class Model
{
    //esse '$this->table' virá lá da classe filha
    public function all() {
        return "Listando os dados da tabela {$this->table}";
    }

    public function findBy() {

    }

    public function delete() {
        return "Deletando os dados ta tabela {$this->table}";
    }

    public function update() {

    }
}
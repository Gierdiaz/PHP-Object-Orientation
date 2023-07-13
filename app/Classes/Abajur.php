<?php

namespace app\Classes;

class Abajur extends Product
{
    public bool $isOn = false;

    public function abajur() {
        return "O nome do abajur mais caro do mundo: ". $this->name;
    }
}
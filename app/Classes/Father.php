<?php

namespace app\Classes;

class Father 
{
    public static function info() {
        return __CLASS__;
    }

    public function test() {
        return self::info();
    }
}


echo Father::info();
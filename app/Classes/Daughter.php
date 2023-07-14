<?php

namespace app\Classes;

class Daughter extends Father 
{
    public static function info() {
        return __CLASS__;
    }
}

//echo Father::info();
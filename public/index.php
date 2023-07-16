<?php
declare(strict_types=1);

/* header('Content-Type:application/json'); */

include '../vendor/autoload.php';

interface CartInterface {

    public function add($product);

    public function remove($product);

    public function quantity($product);

    public function clear();

    public function cart();
}

class Cart implements CartInterface {

    public function add($product) {
        
    }

    public function remove($product) {
        
    }

    public function quantity($product) {
        
    }

    public function clear() {
        
    }

    public function cart() {
        
    }
}


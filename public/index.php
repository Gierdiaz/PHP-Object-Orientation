<?php
declare(strict_types=1);

/* header('Content-Type:application/json'); */

include '../vendor/autoload.php';

/* abstract class Checkout {
    abstract public function pay($payment): array;
}


class PaypalCheckout extends Checkout {

    public function pay ($payment): array {
        return [];
    }
}

class PagseguroCheckout extends Checkout {
    public function pay($payment): array {
        return [];
    }
}

$paypalCheckout = new PaypalCheckout;
$paypalCheckout->pay(''); */


class Test 
{
    public function methodTest() {
        throw new Exception('Error test');
    }
}

try {
    $test = new Test;
    $test->methodTest();
}catch(Exception $e) {
    var_dump($e->getCode());
}
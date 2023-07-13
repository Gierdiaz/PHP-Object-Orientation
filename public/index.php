<?php
declare(strict_types=1);

header('Content-Type:application/json');

include '../vendor/autoload.php';

use app\Classes\Abajur;
use app\Classes\Book;
use app\Classes\Login;
use app\Classes\Product;

/* try {
    $login = new Login;
    echo $login->auth('login@example.com', 123);
} catch (\Throwable $tc) {
    var_dump($tc->getMessage());
} */

$book = new Book;
$book->name = 'Um dia especial';
$book->description = 'Sint molestias assumenda excepturi';
$book->pages = 500;
$book->author = 'Sint Assumem';

//echo json_encode($book);

$abajur = new Abajur;
$abajur->name = 'abajur Pink Lotus';
$abajur->description = 'abajur do francês abat-jour, que significa “abaixar a luz” ou "quebra-luz"';
$abajur->isOn = true;


echo json_encode($abajur->abajur());





<?php
declare(strict_types=1);

/* header('Content-Type:application/json'); */

include '../vendor/autoload.php';

use app\Classes\User;

/* try {
    $login = new Login;
    echo $login->auth('login@example.com', 123);
} catch (\Throwable $tc) {
    var_dump($tc->getMessage());
} */

/* $book = new Book;
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
 */


//construct na classe pai e filha
class User1 {
    public function __construct(public string $name, public int $age)
    {

    }

    public function getUserInfo(){
        return "name: {$this->name} | age: {$this->age}";
    }
}


class User2 extends User1 {
    public function __construct(string $name, int $age)
    {
        parent::__construct($name, $age);
    }
}

$user = new User2('name', 0);

echo $user->getUserInfo();
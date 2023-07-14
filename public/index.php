<?php
declare(strict_types=1);

/* header('Content-Type:application/json'); */

include '../vendor/autoload.php';



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


/* //1 - construct na classe pai e filha
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

echo $user->getUserInfo(); */


/* //2 - Método estático
class User1 {
    public static string $name;

    public static function userInfo() {
        //méthodo estático não tem acesso ao $this porque ele é o próprio objeto.
        return "teste método estático ";
    }
}

User1::$name = 'Usuário';

//não precisa instanciar método estático
echo User1::userInfo();
echo User1::$name; */


/* class Father 
{
    public static function info() {
        return __CLASS__;
    }

    public function test() {
        return self::info();
    }
}

class Daughter extends Father 
{
    public static function info() {
        return __CLASS__;
    }
}
 */

use app\Classes\Father;
use app\Classes\Daughter;

echo Father::info();

$daughter = new Daughter;
echo $daughter->test();
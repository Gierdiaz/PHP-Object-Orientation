<?php
declare(strict_types=1);

/* header('Content-Type:application/json'); */

include '../vendor/autoload.php';

/* Class Price
{

    private $priceProduct;
    private $discountProduct = 10;

    public function setPriceProduct($priceProduct) {
        if(is_Numeric($priceProduct) and $priceProduct > 0) {
            $this->priceProduct = $priceProduct - $this->discountProduct;
        }else {
            throw new Exception('Passe um valor correto para o procuto');
        }
      
    }

    public function getPriceProduct()
    {
        return $this->priceProduct;
    }
}

try {
    $product = new Price();
    $product->setPriceProduct('20');
    echo $product->getPriceProduct();
}catch(Exception $e) {
    var_dump($e->getMessage());
}
 */

class Connection {
    
    private static $connect = null;

    public static function connect() {

        try {
            if (!self::$connect) {
                self::$connect = new PDO("pgsql:host=localhost;dbname=laravel", 'postgres', 33738326, [
                    PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_OBJ
                ]);
            }
            return self::$connect;
        } catch (PDOException $e) {
            var_dump($e->getMessage());
        }
    }
}

class Model1
{
    protected $connection;

    public function __construct()
    {  
        $this->connection = Connection::connect();
    }

    public function all() {
        $sql = "select * from {$this->table}";
        $query = $this->connection->query($sql);
        $query->execute();
        return $query->fetchAll();

    }
}

class User1 extends Model1
{
    protected $table = 'users';
}

var_dump((new User1)->all());
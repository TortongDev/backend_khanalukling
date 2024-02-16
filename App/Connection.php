<?php
require_once(dirname(__DIR__) ."/Config/Database.config.php");

class Connection {
    private $host   = HOST;
    private $user   = USER;
    private $pass   = PASS;
    private $dbname = DBN;
    private $type_db = TYPE_DB;
    public $pdo;

    public function __construct($status = false) {
        
        switch ($status) {
            case true:
                $this->connect();
                break;
            default:
                echo "Not Connection";
            break;
        }
    
    }
    public function __destruct(){
        $this->pdo = NULL;
    }
    public function connect(){
        try {
            $pdo = new PDO("mysql:host=$this->host;dbname=$this->dbname;",$this->user,$this->pass,array(PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8'));     
            $pdo->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);  
            echo "Connection Success";
            return $this->pdo = $pdo;
        } catch (PDOException $err) {
            echo $err->getMessage();
        }
    }
    public function disconnect(){
        $this->pdo = NULL;
    }
    public function csrf(){
        session_start();
        $csrf_random = bin2hex(random_bytes(20));
        $_SESSION['CSRF_TOKEN'] = $csrf_random;
        return $csrf_random;
    }
    public function jsonWebToken($secret_key, $header, $payload){
        $header = array(
            'type' => '',
            'algo' => ''
        );
        $payload = array(
            'username' => '',
            'password' => '',
            'time'     => time()
        );
        $header_encode = base64_encode(json_encode($header));
        $payload_encode = base64_encode(json_encode($payload));
        $signature = hash_hmac('sha256' , $header_encode.''.$payload_encode , $secret_key);
        return base64_encode($signature);


    }

}
$conn = new Connection(true);

?>
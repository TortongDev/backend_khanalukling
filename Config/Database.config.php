<?php
    require_once (dirname(__DIR__) . '/vendor/autoload.php');
    use Dotenv\Dotenv;
    $dotenv = Dotenv::createImmutable(dirname(__DIR__));
    $dotenv->load();

    define('HOST',$_ENV['HOST']);
    define('USER',$_ENV['USER']);
    define('PASS',$_ENV['PASS']);
    define('DBN',$_ENV['DBN']);
    define('TYPE_DB',$_ENV['TYPE_DB']);

    
?>
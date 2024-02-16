<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);
class Login {
    public function login($id){
        require dirname(__DIR__)."/Views/login.php";
    }
}
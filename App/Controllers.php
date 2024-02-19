<?php
class Controllers {
    public function login($id){
        require dirname(__DIR__)."/Views/login.php";
    }
    public function index(){
        require_once(dirname(__DIR__)."/Views/content.form.php");
    }
}
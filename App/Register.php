<?php
 session_start();
class Register {
    public function __construct(){

    }
    public function register(){
           
        $_SESSION['firstname'] = $_POST['firstname'];
        echo $_POST['lastname'];
    }
}
?>
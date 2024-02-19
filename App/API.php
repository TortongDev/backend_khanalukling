<?php 
class API 
{
    public function __construct() {
        header('Content-type: application/json');
        header('Access-Control-Allow-Origin: *');
    }
}
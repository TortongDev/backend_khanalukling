<?php
require_once("../App/CSRFProtect.php");
session_start();
$csrf = new CSRFProtect();
echo $csrf->jsonWebToken('abcde12345');
?>
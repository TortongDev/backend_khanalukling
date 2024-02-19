<?php
require_once("../App/CSRFProtect.php");
session_start();
$csrf = new CSRFProtect();
$csrf->csrf();
echo $csrf->csrf();
?>
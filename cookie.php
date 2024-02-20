<?php
require_once("./App/CSRFProtect.php");
$csrf = new CSRFProtect();
echo $csrf->csrf();
// setcookie("cookie_name","tortong9191", time() + 3600,"/");
// echo $_COOKIE['cookie_name'];
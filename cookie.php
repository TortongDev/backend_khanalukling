<?php

// setcookie("cookie_name","tortong9191", time() + 3600,"/");
// echo $_COOKIE['cookie_name'];
$actack = filter_input(INPUT_GET,"actack", FILTER_SANITIZE_FULL_SPECIAL_CHARS);
// $actack = filter_input(INPUT_GET,"actack", FILTER_SANITIZE_SPECIAL_CHARS);

// $actack = isset($_GET['actack']) ? htmlspecialchars($_GET['actack']) : '';
// $actack = isset($_GET['actack']) ? htmlspecialchars(trim($_GET['actack'])) : '';
echo $actack;
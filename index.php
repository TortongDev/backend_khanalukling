<?php
require_once (__DIR__ . '/vendor/autoload.php');
require_once (__DIR__.'/App/Controllers.php');


$router = new AltoRouter();
$router->setBasePath('/backend_khanalukling');
$router->map( 'GET', '/', function() {
	require __DIR__ . '/Views/home.php';
});
$router->map( 'GET', '/get', function() {
	require __DIR__ . '/Views/get.php';
});
$router->map( 'GET', '/content/form', function() {
	require __DIR__ . '/Views/content.form.php';
});
$router->map( 'GET', '/login/[i:id]/',[new Controllers,'login'], 'logins');
$router->map( 'GET', '/authen/addContent',[new Controllers,'index'], 'index');
$match = $router->match();
// $linkToIndex = $router->generate('logins');
require_once __DIR__."/Includes/header-config.php";


if( is_array($match) && is_callable( $match['target'] ) ) {
	
	call_user_func_array( $match['target'], $match['params'] );
	// require_once __DIR__."/Includes/footer-config.php";
} else {
	header( $_SERVER["SERVER_PROTOCOL"] . ' 404 Not Found');
}


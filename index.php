<?php
require_once (__DIR__ . '/vendor/autoload.php');
require_once ('./App/Login.php');
$router = new AltoRouter();
$router->setBasePath('/backend_khanalukling');
$router->map( 'GET', '/', function() {
	require __DIR__ . '/Views/home.php';
});
$router->map( 'GET', '/get', function() {
	require __DIR__ . '/Views/get.php';
});

$router->map( 'GET', '/login/[i:id]/',[new Login,'login'], 'logins');
$match = $router->match();

// $linkToIndex = $router->generate('logins');


if( is_array($match) && is_callable( $match['target'] ) ) {
	call_user_func_array( $match['target'], $match['params'] );
} else {
	header( $_SERVER["SERVER_PROTOCOL"] . ' 404 Not Found');
}
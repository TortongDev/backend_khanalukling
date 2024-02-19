<?php
require_once (dirname(__DIR__) . '/vendor/autoload.php');
require_once ('../App/Content.php');
$router = new AltoRouter();
$router->setBasePath('/backend_khanalukling/Api');

$router->map("GET","/fetch/content-api/[a:token]/",[new Content(),'contentAll'],'contentAll');


$router->map("GET","/webapi",function(){
	require __DIR__.'/webapi.php';
});


$match = $router->match();


if( is_array($match) && is_callable( $match['target'] ) ) {
	call_user_func_array( $match['target'], $match['params'] );
	
} else {
	header( $_SERVER["SERVER_PROTOCOL"] . ' 404 Not Found');
}
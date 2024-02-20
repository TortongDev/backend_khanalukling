<?php
require_once (dirname(__DIR__) . '/vendor/autoload.php');
require_once (dirname(__DIR__).'/App/Content.php');
require_once (dirname(__DIR__).'/App/Controllers.php');
$router = new AltoRouter();
$router->setBasePath('/backend_khanalukling/Api');

$router->map("GET","/fetch/content-api/[a:token]/",[new Content(),'contentAll'],'contentAll');

$router->map("POST","/post-content",[new Controllers(),'api'],'api');
$router->map("GET","/get-content/[a:token]",[new Controllers(),'getContent'],'getContent');

$router->map("GET","/webapi",function(){
	require __DIR__.'/webapi.php';
});


$match = $router->match();


if( is_array($match) && is_callable( $match['target'] ) ) {
	call_user_func_array( $match['target'], $match['params'] );
} else {
	header("Location: ".dirname(__DIR__)."/Api/page_not_found.html");
	exit;
}
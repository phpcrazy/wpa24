<?php 

$request_uri = $_SERVER['REQUEST_URI'];
$script_name = $_SERVER['SCRIPT_NAME'];

$e_request_uri = explode("/", $request_uri);
$e_script_name = explode("/", $script_name);

$request_uri = array_diff($e_request_uri, $e_script_name);

$o_request_uri = array_values($request_uri);

define('DD', realpath(__DIR__ . "/.."));
require DD . "/vendor/autoload.php";

if(empty($o_request_uri)) {
	$route = "";
} else {
	$route = $o_request_uri[0];
}

$routes = include DD . "/app/routes.php";

if(array_key_exists($route, $routes)) {
	$e_routes = explode("@", $routes[$route]);
	call_user_func_array([new $e_routes[0], $e_routes[1]], array());
} else {
	echo "404";
}







 ?>
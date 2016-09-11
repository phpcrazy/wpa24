<?php 
define('DD', realpath(__DIR__ . "/.."));
require DD . "/vendor/autoload.php";

// URI Formatting
$request_uri = $_SERVER['REQUEST_URI'];
$script_name = $_SERVER['SCRIPT_NAME'];

$e_request_uri = explode("/", $request_uri);
$e_script_name = explode("/", $script_name);

$request_uri = array_diff($e_request_uri, $e_script_name);
$o_request_uri = array_values($request_uri);

// get controller from uri
if(empty($o_request_uri)) {
	$route = "/";
} else {
	$route = $o_request_uri[0];
}

// get route definition
$routes = include DD . "/app/routes.php";

// Route Resolving
if(array_key_exists($route, $routes)) {
	array_shift($o_request_uri); // remove controller
	if(Helper::is_routeWithParameters($routes, $route) == Helper::is_uriWithPareamenters($o_request_uri)) {
		$e_routes = explode("@", $routes[$route]['controller']);
	call_user_func_array([new $e_routes[0], $e_routes[1]], $o_request_uri);
	} else {
		echo "404";
	}
} else {
	echo "404";
}

?>
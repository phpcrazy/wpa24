<?php 

// var_dump($GLOBALS);

// chage to uri request ?page=blog to /blog
// pretty url --> add .htaccess
// to get uri request value

// var_dump($_SERVER);

/****
*
* URI Reading
*
*/

$request_uri = $_SERVER['REQUEST_URI'];
$script_name = $_SERVER['SCRIPT_NAME'];

// explode - change to array
$e_request_uri = explode("/", $request_uri);
$e_script_name = explode("/", $script_name);

// var_dump($e_request_uri);
// var_dump($e_script_name);


$request_uri = array_diff($e_request_uri, $e_script_name);

// var_dump($request_uri);

$o_request_uri = array_values($request_uri);

// var_dump($o_request_uri);

define('DD', realpath(__DIR__ . "/.."));


require DD . "/wpa24/functions.php";
require DD . "/wpa24/dbprovider.php";
require DD . "/app/controller/controllers.php";

if(empty($o_request_uri)) {
	HomeController();
} else {
	$controller = ucfirst($o_request_uri[0]) . "Controller";
	if(function_exists($controller)) {
		array_shift($o_request_uri);
		call_user_func_array($controller, $o_request_uri);	
	} else {
		echo "404";
	}
	
}



















 ?>
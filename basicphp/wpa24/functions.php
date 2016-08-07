<?php 

/**
*	@constrait : app/view folder must be created
*	@pass : String
* 	@output: html
*/

function get_view($view, $data = null) {
	$file =  DD . "/app/view/" . $view . ".php";
	if(file_exists($file)) {
		ob_start();
		if($data != null) {
			extract($data); // to change array_key to variable
		}
		include $file;
		return ob_get_clean();
	} else {
		return "404";
	}
}

function get_config($value) {
	$e_value = explode('.', $value);
	$config_file = DD . "/app/config/" . $e_value[0] . ".php";
	if(file_exists($config_file)) {
		$config = include $config_file;
		$slice_value = array_slice($e_value, 1);
		return _arrayResolver($slice_value, $config);
	} else {
		echo "File not found idiot!";
	}
}

function _arrayResolver($key, $default_array) {
	foreach ($key as $k => $value) {
		$default_array = $default_array[$value];
	}
	return $default_array;
}

function site_url() {
	return get_config('app.site_link');
}

function dump($data, $die = false) {
	var_dump($data);
	if($die) {
		die();
	}
}

function redirect($url, $statusCode = 303)
{
   header('Location: ' . $url, true, $statusCode);
   die();
}

?>










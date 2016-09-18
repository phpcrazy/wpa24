<?php 

class Helper {
	public static function is_uriWithPareamenters($uri) {
		if(count($uri)) {
			return count($uri);
		} else {
			return 0;
		}
	}

	public static function is_routeWithParameters($routes, $controller) {
		$real_route = $routes[$controller];
		if(array_key_exists("params", $real_route)) {
			$params = $real_route['params'];
			$e_params = explode(",", $params);
			return count($e_params);	
		}
		return 0;
		
	}
}

?>
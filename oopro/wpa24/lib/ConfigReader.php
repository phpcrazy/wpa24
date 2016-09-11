<?php 

class Config {
	public static function get($value) {
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
}

?>
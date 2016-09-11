<?php 

class View {

	public static function make($view, $data = null) {
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
}

?>
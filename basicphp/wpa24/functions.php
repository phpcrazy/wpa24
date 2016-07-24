<?php 

/**
*	@constrait : app/view folder must be created
*	@pass : String
* 	@output: html
*/

function get_view($view) {
	$file =  DD . "/app/view/" . $view . ".php";
	if(file_exists($file)) {
		include $file;
	} else {
		echo "404 Idiot!";
	}
}

?>
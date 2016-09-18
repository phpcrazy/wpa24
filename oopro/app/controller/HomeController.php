<?php 

class HomeController {
	public function index() {
		var_dump(DBRead::getInstance());
		var_dump(DBWrite::getInstance());

	}
}

 ?>
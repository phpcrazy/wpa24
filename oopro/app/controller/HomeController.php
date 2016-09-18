<?php 

use Thiha\App\Application;
use Thiha\Core\Test;

class HomeController {
	public function index() {
		var_dump(DBRead::getInstance());
		var_dump(DBWrite::getInstance());

		$app = new Application();
		$app->shout();
		$test = new Test();
		$test->test();

	}
}

 ?>
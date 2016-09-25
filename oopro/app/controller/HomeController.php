<?php 

use Thiha\App\Application;
use Thiha\Core\Test;
use Thiha\App\App;

class HomeController {
	private $dog;
	private $cat;
	private $log;
	public function __construct() {
	    $this->app = App::getInstance();
	    $this->request = app->request;
		$this->log = Application::get("log");
		$this->dog = Application::get('dog');
		$this->cat = Application::get('cat');
	}

	public function index() {
		$logFile = $this->log->getLog('file', ["test"]);
		$logFile->write("test", "Hello World!");
		$logMysql = $this->log->getLog("mysql", ["test"]);
		$logMysql->write("mysql", "Hello Redis");
		$logFile = $this->log->getLog('file', ["test"]);
		$logFile->write("another", "How are you");
		$logMysql = $this->log->getLog("mysql", ["test"]);
		$logMysql->write("mysql", "Hello Redis");
		$logRedis = $this->log->getLog('redis', ['test']);
		$logRedis->write("key", "value");
		$data = [
			"test"	=> 'test',
			"another"	=> [
				'id'	=> 1,
				"name"	=> 'Myanmar Links'
			]
		];
		$logRedis->write("data", json_encode($data));	
		
	}
}

 ?>

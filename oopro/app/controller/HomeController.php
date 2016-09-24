<?php 

use Thiha\App\Application;
use Thiha\Core\Test;

class HomeController {
	private $dog;
	private $cat;
	private $log;
	public function __construct() {
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
		
	}
}

 ?>
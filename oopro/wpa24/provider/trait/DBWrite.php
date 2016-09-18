<?php 

class DBWrite extends PDO {
	use TraitSingleton;

	public function __construct() {
		$this->engine = 'mysql';
        $this->host = Config::get('database.hostname');
        $this->database = Config::get('database.dbname');
        $this->user = Config::get('database.username');
        $this->pass = Config::get('database.password');
        $dns = $this->engine.':dbname='.$this->database.";host=".$this->host;
        parent::__construct( $dns, $this->user, $this->pass );
	}
}

 ?>
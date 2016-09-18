<?php 

trait TraitSingleton {
	private static $_instance = null;

	public static function getInstance() {
		$class = __CLASS__;
		if(!(self::$_instance instanceof $class)) {
			self::$_instance = new $class();
		}
		return self::$_instance;
	}
}
<?php 

namespace Thiha\App;

class Application {
	static private $_store = array();

    static public function add($object, $name = null) {
        $name = (!is_null($name)) ? $name : get_class($object);
        var_dump(get_class($object));
        $name = strtolower($name);
        var_dump($name);
        if(self::contains($name)) {
           throw new \Exception("Object is already existed.");
        }
        self::$_store[$name] = $object;
    }

    static public function get($name) {
        if(!self::contains($name)) {
            throw new \Exception("Object does not exist in Application Registry");
        }
        return self::$_store[$name];

    }

    static public function contains($name) {
        if(!isset(self::$_store[$name])) {
            return false;
        }
        return true;

    }

    static public function remove($name)  {
        if(self::contains($name)) {
            unset(self::$_store[$name]);
        }
    }
 }
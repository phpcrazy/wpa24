<?php

namespace Thiha\App;

use Illuminate\Container\Container;
use Symfony\Component\HttpFoundation\Request;

class App extends Container {
    private static $_instance;

    public static function getInstance()
    {
        if(!self::$_instance instanceof  App) {
            return self::$_instance = new App();
        }

        return self::$_instance;
    }

    public function __construct()
    {
        $this['version']    = "1.0";
        $this['request']    = Request::createFromGlobals();
        $this['test']   = function() {
            new Cat();
        };

    }

}

class Cat {
    public function test() {
       echo "TST";
    }
}













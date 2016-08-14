<?php
class StaticChain {
    // Singaleton Pattern
    private static $_instance;
    public function __construct()
    {
        var_dump("Construct!");
    }
    public function __destruct()
    {
        var_dump("Destruct!");
    }
    public static function GateKeeper() {
        if(!self::$_instance instanceof StaticChain) {
            self::$_instance = new StaticChain();
            echo "Object Created! <br />";
        }
        return self::$_instance;
    }
    public function two() {
        echo "Yay!!! Two! <br />";
        return $this;
    }
    public function three() {
        echo "Yay!!! Three! <br />";
        return $this;
    }
    public function four() {
        echo "Yay!!! Four! <br />";
    }
}
StaticChain::GateKeeper()->two()->three()->four();
StaticChain::GateKeeper()->three()->four();
StaticChain::GateKeeper()->four();
StaticChain::GateKeeper()->two()->three()->four();
StaticChain::GateKeeper()->three()->four();
StaticChain::GateKeeper()->four();
<?php 

interface AnimalInterface {
	public function eat();
	public function sleep();
}

abstract class Animal implements AnimalInterface {
	public function __construct() {
		echo "Hello from Animal <br/>";
	}
	public function eat() {
		echo "EAT! <br />";
	}
	public function sleep() {
		echo "Sleep! <br />";
	}
}
// Trait
trait Foo {
	public $test = "Hell Yeah! <br />";
	public function foo() {
		echo "Foo! <br />";
	}
}
trait Bar {
	public $bar = "Idiot!";
	public function bar() {
		echo "Bar! <br />";
	}
}
class Dog extends Animal {
	use Foo;
	use Bar;
	public function __construct() {
		parent::__construct();
		echo "Hello from Dog Constructor! <br />";
	}
	public function bark() {
		echo "Bark! <br />";
	}
}
$dog = new Dog();
$dog->eat();
$dog->sleep();
$dog->bark();
$dog->foo();
$dog->bar();
$dog->dance();
echo $dog->test;
echo $dog->bar;

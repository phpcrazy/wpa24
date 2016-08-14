<?php 


abstract class Animal {
	public $name;

	public function __construct($name) {
		$this->name = $name;
	}
	public function eat() {
		echo "Eat!";		
	}
}

interface DogInterface {
	public function bark();
}

class Dog extends Animal implements DogInterface {
	public function __construct($name) {
		parent::__construct($name);
	}

	public function bark() {
		echo "Bark!";
	}
}

$dog = new Dog("Aung Net");
echo $dog->name;
$dog->eat();


 ?>
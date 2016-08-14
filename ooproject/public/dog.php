<?php 

class Dog {

	public $name;
	private $leg;

	private $data = array();

	public function __construct($name, $leg = 4) {
		var_dump("Construct!");
		$this->name = $name;
		$this->leg = $leg;
	}

	public function __set($key, $value) {
		$this->data[$key] = $value;
	}

	public function __get($key) {
		return $this->data[$key];
	}

	public function __call($name, $arguments) {
		var_dump($name);
		var_dump($arguments);
	}
	public static function __callStatic($name, $arguments) {
		var_dump($name);
		var_dump($arguments);	
	}
	public function getSorryForLeg() {
		return $this->leg;
	}
	public function bark() {
		echo  $this->name . " Woof!";
	}
	public function __destruct() {
		echo "Destruct!";
	}
	public static function warning() {
		var_dump("Dog Bite Tat Thi");
	}
}
Dog::warning();
Dog::dangerous();
die();
$dog = new Dog("Aung Net");
$dog->bark();
$dog->warning();
$dog->color = "red"; // late binding (or) Lazy Loading
echo $dog->color;
$dog->dance("CRAZY", 50);
var_dump($dog->getSorryForLeg());
echo "<br />";

$dog2 = new Dog("Puppy");

 ?>
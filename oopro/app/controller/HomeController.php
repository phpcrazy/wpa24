<?php 

use Thiha\App\Application;
use Thiha\Core\Test;

class HomeController {
	public function index() {
		// var_dump(DBRead::getInstance());
		// var_dump(DBWrite::getInstance());
		$cat = new Cat();
		$dog = new Dog();
		Application::add($cat);
		Application::add($dog);
		// Application::add($cat); // can't add two simlilar object
		$anotherCat = Application::get("cat");
		$anotherDog = Application::get("dog");
		Application::remove("cat");
		Application::add($cat);
		


		$anotherDog->bark();
		$anotherCat->eat();

		
		

	}
}

class Cat {
	public function eat() {
		echo "EAT";
	}
}

class Dog {
	public function bark() {
		echo "Woof!";
	}
}

 ?>
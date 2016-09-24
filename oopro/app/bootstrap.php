<?php 

use Thiha\App\Application;
use Thiha\App\LogFactory;

Application::add(new Dog());
Application::add(new Cat());
Application::add(new LogFactory(), "log");



class Dog {
	public function bark() {
		echo "Bark!";
	}
}

class Cat {
	public function eat() {
		echo "Eat!";
	}
}

 ?>
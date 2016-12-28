<?php 

use Wpa25\App\Application;
use Wpa25\App\LogFactory;

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
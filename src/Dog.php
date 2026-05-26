<?php

namespace Animal;

class Dog extends Animal
{
	public function showMessage()
	{
		echo $this->sayHello();
		echo "\n";

		echo "Hello of child class";
	}

	public function bark()
	{
		return "Dog barks";
	}
}

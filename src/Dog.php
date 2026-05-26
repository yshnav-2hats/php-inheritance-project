<?php

namespace Animal;

class Dog extends Animal
{
	public function testFunction()
	{
		echo $this->publicFunction();
		echo "\n";

		echo $this->protectedFunction();
		echo "\n";
	}
}

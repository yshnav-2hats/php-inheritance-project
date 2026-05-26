<?php

namespace Animal;

class Animal
{
	public $name;

	public function publicFunction()
	{
		return "Public, everyone can use this function";
	}

	protected function protectedFunction()
	{
		return "Protected, only parent and child class can use";
	}

	private function privateFunction()
	{
		return "Private, only parent class can use";
	}
	public function callPrivateFunction()
	{
		return $this->privateFunction();
	}
}

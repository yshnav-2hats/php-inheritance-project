<?php

require 'vendor/autoload.php';

use Root\InheritanceProject\Dog;

$dog = new Dog();

$dog->name = "Scooby";

echo $dog->name;
echo "\n";

echo $dog->sayHello();
echo "\n";

echo $dog->bark();
echo "\n";

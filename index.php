<?php

require 'vendor/autoload.php';

use Animal\Dog;

$dog = new Dog();

$dog->name = "Scooby";

echo $dog->name;
echo "\n";

echo $dog->showMessage();
echo "\n";

echo $dog->bark();
echo "\n";

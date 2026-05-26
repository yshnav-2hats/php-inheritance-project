<?php

require 'vendor/autoload.php';

use Animal\Dog;

$dog = new Dog();

$dog->testFunction();
echo "\n";

echo $dog->publicFunction();
echo "\n";

echo $dog->callPrivateFunction();
echo "\n";


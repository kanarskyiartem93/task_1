<?php

ini_set("display_errors", 1);

require_once "Animal.php";
require_once "Cat.php";
require_once "Dog.php";
require_once "Horse.php";
require_once "Vet.php";

$cat = new Cat('Риба', 'Львів');
$dog = new Dog('Курка', 'Одеса');
$horse = new Horse('Овес', 'Харків');

$animals = [];

$animals = $cat;
$animals = $dog;
$animals = $horse;

$vet = new Vet();

foreach ($animals as $animal) {
    $vet->treatAnimal($animal);
}





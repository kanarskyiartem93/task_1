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

$animals = array();

array_push($animals, $cat);
array_push($animals, $dog);
array_push($animals, $horse);

$vet = new Vet();

foreach ($animals as $animal) {
    $vet->treatAnimal($animal);
    echo '<br>';
}





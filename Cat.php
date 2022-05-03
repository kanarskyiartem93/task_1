<?php


class Cat extends Animal
{

    public function __construct(string $location, string $food)
    {
        parent::__construct($location, $food);
    }

    public function makeNoise()
    {
        echo 'Кіт мявкає';
    }

    public function eat()
    {
        echo 'Кіт їсть ' . $this->getFood();
    }

    public function sleep()
    {
        echo 'Кіт спить в ' . $this->getLocation();

    }
}
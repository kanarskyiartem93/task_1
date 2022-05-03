<?php


class Dog extends Animal
{
    public function __construct(string $location, string $food)
    {
        parent::__construct($location, $food);
    }

    public function makeNoise()
    {
        echo 'Пес гавкає';
    }

    public function eat()
    {
        echo 'Пес їсть ' . $this->getFood();
    }

    public function sleep()
    {
        echo 'Пес спить в ' . $this->getLocation();

    }

}
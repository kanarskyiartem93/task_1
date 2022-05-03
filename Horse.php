<?php


class Horse extends Animal
{
    public function __construct(string $location, string $food)
    {
        parent::__construct($location, $food);
    }

    public function makeNoise()
    {
        echo 'Кінь рже';
    }

    public function eat()
    {
        echo 'Кінь їсть ' . $this->getFood();
    }

    public function sleep()
    {
        echo 'Кінь спить ' . $this->getLocation();

    }
}
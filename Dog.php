<?php


class Dog extends Animal
{
    public function makeNoise()
    {
        echo 'Пес гавкає';
    }

    public function eat()
    {
        echo 'Пес їсть';
    }

    public function sleep()
    {
        echo 'Пес спить';

    }

}
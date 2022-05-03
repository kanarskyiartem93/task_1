<?php


class Cat extends Animal
{
    public function makeNoise()
    {
        echo 'Кіт мявкає';
    }

    public function eat()
    {
        echo 'Кіт їсть';
    }

    public function sleep()
    {
        echo 'Кіт спить';

    }
}
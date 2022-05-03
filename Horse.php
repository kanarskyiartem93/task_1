<?php


class Horse extends Animal
{
    public function makeNoise()
    {
        echo 'Кінь рже';
    }

    public function eat()
    {
        echo 'Кінь їсть';
    }

    public function sleep()
    {
        echo 'Кінь спить';

    }
}
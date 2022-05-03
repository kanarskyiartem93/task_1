<?php


class Animal
{

    private string $location;
    private string $food;

    public function __construct(string $location, string $food)
    {
        $this->food = $food;
        $this->location = $location;
    }

    public function makeNoise()
    {
        echo 'Така тварина спить';
    }

    public function eat()
    {
        echo 'Їм';
    }

    public function sleep()
    {
        echo 'Сплю';

    }

    /**
     * @return string
     */
    public function getLocation(): string
    {
        return $this->location;
    }

    /**
     * @param string $location
     */
    public function setLocation(string $location): void
    {
        $this->location = $location;
    }

    /**
     * @return string
     */
    public function getFood(): string
    {
        return $this->food;
    }

    /**
     * @param string $food
     */
    public function setFood(string $food): void
    {
        $this->food = $food;
    }

}
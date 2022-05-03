<?php


class Vet
{
    private Animal $animal;


    public function treatAnimal(Animal $animal): void
    {
        echo $animal->getFood();
        echo $animal->getLocation();
    }

    /**
     * @return Animal
     */
    public function getAnimal(): Animal
    {
        return $this->animal;
    }

    /**
     * @param Animal $animal
     */
    public function setAnimal(Animal $animal): void
    {
        $this->animal = $animal;
    }


}
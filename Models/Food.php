<?php

class Food extends Products
{
    private int $weight;
    private bool $dryFood;
    private bool $wetFood;


    // Funzione costruttore
    public function __construct(int $_weight, bool $_dryFood, bool $_wetFood)
    {
        $this->weight = $_weight;
        $this->dryFood = $_dryFood;
        $this->wetFood = $_wetFood;
    }


    // Setter e Getter dell'attributo $weight

    public function setWeight(int $weight): void
    {
        $this->weight = $weight;
    }

    public function getWeight(): int
    {
        return $this->weight;
    }

    // Setter e Getter dell'attributo $dryFood

    public function setDryFood(bool $dryFood): void
    {
        $this->dryFood = $dryFood;
    }

    public function getDryFood(): bool
    {
        return $this->dryFood;
    }

    // Setter e Getter dell'attributo $wetFood

    public function setWetFood(bool $wetFood): void
    {
        $this->wetFood = $wetFood;
    }

    public function getWetFood(): bool
    {
        return $this->wetFood;
    }
}

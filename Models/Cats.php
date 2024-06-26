<?php

class Dogs extends Products
{
    private int $catAge;
    private int $catWeight;

    // Funzione costruttore
    public function __construct(int $_catAge, int $_catWeight)
    {
        $this->catAge = $_catAge;
        $this->catWeight = $_catWeight;
    }


    // Setter e Getter dell'attributo $catAge

    public function setCatAge(int $catAge): void
    {
        $this->catAge = $catAge;
    }

    public function getCatAge(): int
    {
        return $this->catAge;
    }


    // Setter e Getter dell'attributo $catWeight

    public function setCatWeight(int $catWeight): void
    {
        $this->catWeight = $catWeight;
    }

    public function getCatWeight(): int
    {
        return $this->catWeight;
    }
}

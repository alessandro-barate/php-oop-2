<?php

class Dogs extends Products
{
    private int $dogAge;
    private int $dogWeight;

    // Funzione costruttore
    public function __construct(int $_dogAge, int $_dogWeight)
    {
        $this->dogAge = $_dogAge;
        $this->dogWeight = $_dogWeight;
    }


    // Setter e Getter dell'attributo $dogAge

    public function setDogAge(int $dogAge): void
    {
        $this->dogAge = $dogAge;
    }

    public function getDogAge(): int
    {
        return $this->dogAge;
    }


    // Setter e Getter dell'attributo $age

    public function setDogWeight(int $dogWeight): void
    {
        $this->dogWeight = $dogWeight;
    }

    public function getDogWeight(): int
    {
        return $this->dogWeight;
    }
}

try {
    $dog1 = new Dogs(1, 10);
} catch (Exception $error) {
    $error = $error->getMessage();
}

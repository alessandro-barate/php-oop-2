<?php

class Kennels extends Products
{
    private string $measures;
    private string $color;


    // Funzione costruttore
    public function __construct(string $_measures, string $_color)
    {
        $this->measures = $_measures;
        $this->color = $_color;
    }


    // Setter e Getter dell'attributo $measures

    public function setToyMeasures(string $measures): void
    {
        $this->measures = $measures;
    }

    public function getToyMeasures(): string
    {
        return $this->measures;
    }


    // Setter e Getter dell'attributo $color

    public function setColor(string $color): void
    {
        $this->color = $color;
    }

    public function getColor(): string
    {
        return $this->color;
    }
}

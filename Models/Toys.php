<?php

class Toys extends Products
{
    private bool $sound;


    // Funzione costruttore
    public function __construct(bool $_sound)
    {
        $this->sound = $_sound;
    }


    // Setter e Getter dell'attributo $sound

    public function setSound(bool $sound): void
    {
        $this->sound = $sound;
    }

    public function getSound(): bool
    {
        return $this->sound;
    }
}

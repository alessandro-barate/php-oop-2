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
        if (is_null($sound)) {
            throw new Exception('Indicare se il gioco emette un suono o no');
        }
        $this->sound = $sound;
    }

    public function getSound(): bool
    {
        return $this->sound;
    }
}

try {
    $toy1 = new Toys(true);
} catch (Exception $error) {
    $error = $error->getMessage();
}

<?php

namespace  App\package1;

class Main
{
    private string $unePropriete;

    public function __construct($unePropriete)
    {
        $this->unePropriete = $unePropriete;
    }
    public function methode()
    {
        return "Je suis une méthode de la classe package1\Main";
    }
}

<?php

namespace App\Classes;

class User
{
    private string $nom;
    private string $prenom;

    function __construct(string $nom, string $prenom)
    {
        $this->nom = $nom;
        $this->prenom = $prenom;
    }
}

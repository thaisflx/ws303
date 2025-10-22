<?php

namespace exercice4;

class Chien extends Animal
{
    public string $nomFamilier;

    public function __construct(int $age, string $nomFamilier)
    {
        parent::__construct('Chien', $age, 18);
        //$this->ageTheorique = 18;
        $this->nomFamilier = $nomFamilier;
    }

    public function lire_informations(): string
    {
//        return parent::lire_informations(). 'Nom familier : '.$this->nomFamilier.'<br>';
        return parent::lire_informations() . $this->seNomme();
    }

    public function seNomme(): string
    {
        return 'Je m\'appelle ' . $this->nomFamilier . '<br>';
    }
}
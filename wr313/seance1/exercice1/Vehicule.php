<?php

class Vehicule {
    public string $marque;
    public int $puissance;
    public float $kilometrage = 0;

    public function augmenterKilometrage(float $kilometre) : void
    {
        $this->kilometrage = $kilometre;
    }
    public function lireCaracteristique() : string
    {
        return 'Voiture '.$this->marque.' : '.$this->kilometrage.'km, '.$this->puissance.' CV';
    }
}
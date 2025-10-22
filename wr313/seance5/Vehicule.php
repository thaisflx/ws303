<?php

class Vehicule {
    protected string $marque;
    protected int $puissance;
    protected float $kilometrage = 0.0;

    public function __construct(string $marque, int $puissance, float $kilometrage)
    {
        $this->marque = $marque;
        $this->puissance = $puissance;
        $this->kilometrage = $kilometrage;
    }

    public function parcourir(float $kilometre) : void
    {
        $this->kilometrage += $kilometre;
    }
    public function lireCaracteristique() : string
    {
        return 'Voiture '.$this->marque.' : '.$this->kilometrage.'km, '.$this->puissance.' CV';
    }
}

?>
